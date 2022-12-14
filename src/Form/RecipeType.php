<?php

namespace App\Form;

use App\Entity\Recipes;
use http\Env\Response;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipeName', TextType::class, [
                'label' => 'Enter a recipe name',
                'attr' => array(
                    'placeholder' => "Recipe name"
                )
            ])
            ->add('ingredients', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
            ])
            ->add('descriptions', CollectionType::class, [
                'entry_type' => TextareaType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'entry_options' => [
                    'attr' => [
                        'placeholder' => 'Recipe Step',
                    ]
                ]
            ])
            ->add('otherOptions', TextareaType::class, [
                'label' => "Enter your notes",
                'attr' => array(
                    'placeholder' => 'Notes'
                )
            ])
            ->add('submit', SubmitType::class, ['label' => 'Submit your recipe'])
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipes::class,
        ]);
    }
}
