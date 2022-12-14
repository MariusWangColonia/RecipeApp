<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationController extends AbstractController
{

    #[Route('/registration')]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher) : Response
    {
        $registration = new User();

        $form = $this->createFormBuilder($registration)
            ->add('username', TextType::class, [
                'attr' => [
                    'placeholder' => 'Username'
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 5])],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'required' => true,
                'first_options'    => ['label' => 'Password','attr' => ['placeholder' => 'Password']],
                'second_options'   => ['label' => 'Repeat Password','attr' => ['placeholder' => 'Repeat Password']],
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 8])
                ],
            ])
            ->add('register', SubmitType::class, ['label' => 'Register now!'])
            ->getForm();

        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed :".$e->getMessage();
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $plainTextPassword = $form->get('password');
            $hashedPassword = $userPasswordHasher->hashPassword(
                $registration,
                $plainTextPassword->getData()
            );
            $registration->setPassword($hashedPassword);
            $form->getData();

            $entityManager->persist($registration);
            $entityManager->flush();
            $this->addFlash('success', 'The registration is successful');
            sleep(2);
            return $this->redirect('/login');
        }

        return $this->render('recipes/registration.html.twig', [
            'form' => $form,

        ]);
    }
}
