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

/* recipes/navbar.html.twig */
class __TwigTemplate_93a9956cb15401028cf1c5e9300050f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/navbar.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context["mainMenu"] = [0 => ["path" => "home", "name" => "Home"], 1 => ["path" => "/app_logout", "name" => "Logout"]];
        } else {
            // line 7
            echo "    ";
            $context["mainMenu"] = [0 => ["path" => "login", "name" => "Login"], 1 => ["path" => "registration", "name" => "Register"]];
        }
        // line 12
        echo "
<nav class=\"navbar bg-dark text-light\">
    <div class=\"container-lg container-fluid px-lg-0\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" class=\"navbar-brand text-light\"><i class=\"fa-solid fa-utensils me-2\"></i>My Recipes</a>
        <div class=\"d-flex\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) || array_key_exists("mainMenu", $context) ? $context["mainMenu"] : (function () { throw new RuntimeError('Variable "mainMenu" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "            <ul class=\"navbar-nav \">
                <li class=\"nav-item me-3 \">
                    <a class=\"nav-link btn btn-warning text-dark py-1 px-3\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "array", false, false, false, 20)), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 20), "html", null, true);
            echo "</strong></a>
                </li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
</nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "recipes/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  71 => 20,  67 => 18,  63 => 17,  58 => 15,  53 => 12,  49 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
    {% set mainMenu = [
        {'path': 'home',   'name': 'Home' },
        {'path': '/app_logout','name': 'Logout'}
    ] %}
{% else %}
    {% set mainMenu = [
        {'path': 'login',         'name': 'Login' },
        {'path': 'registration',  'name': 'Register' }
    ] %}
{% endif %}

<nav class=\"navbar bg-dark text-light\">
    <div class=\"container-lg container-fluid px-lg-0\">
        <a href=\"{{ asset('') }}\" class=\"navbar-brand text-light\"><i class=\"fa-solid fa-utensils me-2\"></i>My Recipes</a>
        <div class=\"d-flex\">
        {% for item in mainMenu %}
            <ul class=\"navbar-nav \">
                <li class=\"nav-item me-3 \">
                    <a class=\"nav-link btn btn-warning text-dark py-1 px-3\" href=\"{{ asset(item['path']) }}\"><strong>{{ item['name'] }}</strong></a>
                </li>
            </ul>
        {% endfor %}
        </div>
    </div>
</nav>

", "recipes/navbar.html.twig", "/Users/wangma/recipeList/recipe_list/templates/recipes/navbar.html.twig");
    }
}
