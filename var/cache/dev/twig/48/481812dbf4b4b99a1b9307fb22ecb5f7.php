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

/* recipes/home.html.twig */
class __TwigTemplate_f8abf6c630c348f21ea4a548574569b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipes/home.html.twig", 1);
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

        echo "Your Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container my-5\">
        <div class=\"d-flex align-items-center justify-content-between m-auto\">
            <h4 class=\"m-0\">Welcome to your account, ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".</h4>
            <div>
                <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home/new-recipe"), "html", null, true);
        echo "\"><strong>Add recipe</strong></a>
            </div>
        </div>
        <hr>
            ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 14, $this->source); })())) === 0)) {
            // line 15
            echo "                <div class=\"alert alert-warning c\"><h3>No recipes yet!</h3></div>
            ";
        } else {
            // line 17
            echo "        <div class=\"row row-cols-1 row-cols-md-3 g-2\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 19
                echo "                    <div class=\"col\">
                        <div class=\"card h-100\" >
                            <img src=\"https://dummyimage.com/200x200/fff/aaa\" style=\"max-width: 100%; height: auto\" class=\"card-img-top\" alt=\"...\">
                            <hr>
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "recipeName", [], "any", false, false, false, 24), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\" style=\"height: 5rem\">";
                // line 25
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "otherOptions", [], "any", false, false, false, 25)) > 90)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "otherOptions", [], "any", false, false, false, 25), 0, 90) . "...")) : (twig_get_attribute($this->env, $this->source, $context["recipe"], "otherOptions", [], "any", false, false, false, 25))), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipedetailpage_showrecipe", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"
                                   class=\"btn btn-dark mt-auto\">See Recipe
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recipes/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  145 => 33,  132 => 26,  128 => 25,  124 => 24,  117 => 19,  113 => 18,  110 => 17,  106 => 15,  104 => 14,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Profile{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"d-flex align-items-center justify-content-between m-auto\">
            <h4 class=\"m-0\">Welcome to your account, {{ username }}.</h4>
            <div>
                <a class=\"btn btn-warning\" href=\"{{ asset('home/new-recipe') }}\"><strong>Add recipe</strong></a>
            </div>
        </div>
        <hr>
            {% if recipes|length is same as 0  %}
                <div class=\"alert alert-warning c\"><h3>No recipes yet!</h3></div>
            {% else %}
        <div class=\"row row-cols-1 row-cols-md-3 g-2\">
            {% for recipe in recipes %}
                    <div class=\"col\">
                        <div class=\"card h-100\" >
                            <img src=\"https://dummyimage.com/200x200/fff/aaa\" style=\"max-width: 100%; height: auto\" class=\"card-img-top\" alt=\"...\">
                            <hr>
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">{{ recipe.recipeName }}</h5>
                                <p class=\"card-text\" style=\"height: 5rem\">{{ recipe.otherOptions|length > 90 ? recipe.otherOptions|slice(0,90) ~ '...' : recipe.otherOptions }}</p>
                                <a href=\"{{ path('app_recipedetailpage_showrecipe',{id: recipe.id}) }}\"
                                   class=\"btn btn-dark mt-auto\">See Recipe
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %}", "recipes/home.html.twig", "/Users/wangma/recipeList/recipe_list/templates/recipes/home.html.twig");
    }
}
