<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* recipes/landingPage.html.twig */
class __TwigTemplate_12b8706e178041ba58192cf230c01bde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/landingPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/landingPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipes/landingPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div class=\"container position-absolute\" style=\"height: 1vh; left: 50%; top: 50%; transform: translate(-50%, 1000%)\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6 d-flex justify-content-center mb-5\">
                        <img src=\"https://i.pinimg.com/originals/e6/f0/7b/e6f07b7bb31a995a4bc36b757b8b4add.jpg\" class=\"img-fluid rounded\" alt=\"...\">
                    </div>
                    <div class=\"col-lg-6 d-flex flex-column align-items-center justify-content-center\">
                            <p class=\"display-2 text-start\"><i class=\"fa-solid fa-utensils me-3\"></i> My Recipes</p>
                            <p class=\"display-6 text-start mx-5\">Add your most favorite recipes and enjoy having all your recipes in one place.</p>
                            <p class=\"display-6 text-start mx-5 mb-5\">Save flipping through cookbooks and have access everywhere.</p>
                            <a class=\"btn btn-warning btn-lg\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("registration"), "html", null, true);
        echo "\">Join us!<i class=\"fa-solid fa-right-to-bracket ms-3\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recipes/landingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

        <div class=\"container position-absolute\" style=\"height: 1vh; left: 50%; top: 50%; transform: translate(-50%, 1000%)\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6 d-flex justify-content-center mb-5\">
                        <img src=\"https://i.pinimg.com/originals/e6/f0/7b/e6f07b7bb31a995a4bc36b757b8b4add.jpg\" class=\"img-fluid rounded\" alt=\"...\">
                    </div>
                    <div class=\"col-lg-6 d-flex flex-column align-items-center justify-content-center\">
                            <p class=\"display-2 text-start\"><i class=\"fa-solid fa-utensils me-3\"></i> My Recipes</p>
                            <p class=\"display-6 text-start mx-5\">Add your most favorite recipes and enjoy having all your recipes in one place.</p>
                            <p class=\"display-6 text-start mx-5 mb-5\">Save flipping through cookbooks and have access everywhere.</p>
                            <a class=\"btn btn-warning btn-lg\" href=\"{{ asset('registration') }}\">Join us!<i class=\"fa-solid fa-right-to-bracket ms-3\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
{% endblock %}", "recipes/landingPage.html.twig", "/Users/wangma/recipeList/recipe_list/templates/recipes/landingPage.html.twig");
    }
}
