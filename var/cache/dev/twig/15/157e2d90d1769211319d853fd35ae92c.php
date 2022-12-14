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

/* recipes/recipeDetailpage.html.twig */
class __TwigTemplate_a8caede2dccbdf71b0bd508fa5432866 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/recipeDetailpage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/recipeDetailpage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipes/recipeDetailpage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Recipe - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 4, $this->source); })()), "recipeName", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container mt-5\">

        <div class=\"card border-secondary col-xl-9 m-auto mb-5\">
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\" class=\"mt-3 ms-3 text-dark text-decoration-none\"><i class=\"fa-solid fa-arrow-left\"></i> Go Back</a>
            <div class=\"card-body p-5 pt-2\">
                <div class=\"card-header p-4 mb-3\">
                    <h2 class=\"card-title\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 15, $this->source); })()), "recipeName", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                    <p class=\"card-subtitle text-muted\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 16, $this->source); })()), "otherOptions", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                </div>

                <div class=\"d-lg-flex align-items-start justify-content-start mb-3\">
                    <img src=\"https://dummyimage.com/500x400/ggg/aaa\" alt=\"\" style=\"max-width: 100%; height: auto\" class=\"mb-3 me-5\">
                    <div>
                        <h4 class=\"ms-5\">Ingredients:</h4>
                        <ul class=\"list-group list-group-flush ms-5 ingredientList\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 24, $this->source); })()), "ingredients", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 25
            echo "                                <li class=\"list-group-item\"><i class=\"fa-solid fa-xs fa-caret-right me-3\"></i>";
            echo twig_escape_filter($this->env, $context["ingredient"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        </ul>
                    </div>
                </div>
                <h3 class=\"mt-4\">Steps:</h3>
                <ol class=\"list-group list-group-numbered list-group-flush  descriptionList\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 32, $this->source); })()), "descriptions", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 33
            echo "                        <li class=\"list-group-item list-group-horizontal\">";
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ol>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recipes/recipeDetailpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 35,  142 => 33,  138 => 32,  131 => 27,  122 => 25,  118 => 24,  107 => 16,  103 => 15,  97 => 12,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Recipe - {{ recipe.recipeName }}
{% endblock %}


{% block body %}
    <div class=\"container mt-5\">

        <div class=\"card border-secondary col-xl-9 m-auto mb-5\">
            <a href=\"{{ asset('home') }}\" class=\"mt-3 ms-3 text-dark text-decoration-none\"><i class=\"fa-solid fa-arrow-left\"></i> Go Back</a>
            <div class=\"card-body p-5 pt-2\">
                <div class=\"card-header p-4 mb-3\">
                    <h2 class=\"card-title\">{{ recipe.recipeName }}</h2>
                    <p class=\"card-subtitle text-muted\">{{ recipe.otherOptions }}</p>
                </div>

                <div class=\"d-lg-flex align-items-start justify-content-start mb-3\">
                    <img src=\"https://dummyimage.com/500x400/ggg/aaa\" alt=\"\" style=\"max-width: 100%; height: auto\" class=\"mb-3 me-5\">
                    <div>
                        <h4 class=\"ms-5\">Ingredients:</h4>
                        <ul class=\"list-group list-group-flush ms-5 ingredientList\">
                            {% for ingredient in recipe.ingredients %}
                                <li class=\"list-group-item\"><i class=\"fa-solid fa-xs fa-caret-right me-3\"></i>{{ ingredient }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <h3 class=\"mt-4\">Steps:</h3>
                <ol class=\"list-group list-group-numbered list-group-flush  descriptionList\">
                    {% for step in recipe.descriptions %}
                        <li class=\"list-group-item list-group-horizontal\">{{ step }}</li>
                    {% endfor %}
                </ol>
            </div>
        </div>
    </div>
{% endblock %}", "recipes/recipeDetailpage.html.twig", "/Users/wangma/recipeList/recipe_list/templates/recipes/recipeDetailpage.html.twig");
    }
}
