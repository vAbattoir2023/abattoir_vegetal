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

/* Admin/_adminNav.html.twig */
class __TwigTemplate_fdd44249f26c14025ea7ebbacfdd7f1cd3b4821e77f85a0ce4abde63ba0206ba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/_adminNav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/_adminNav.html.twig"));

        // line 1
        echo "
\t<!-- SIDEBAR -->
\t<section id=\"sidebar\">
\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"brand\">
\t\t\t<img  src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/favicon.ico"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t<span class=\"text\">Admin</span>
\t\t</a>
\t\t<ul class=\"side-menu top\">
\t\t\t<!-- <li class=\"active\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class='bx bxs-dashboard' ></i>
\t\t\t\t\t<span class=\"text\">Dashboard</span>
\t\t\t\t</a>
\t\t\t</li> -->
\t\t\t<li  class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15) == "app_admin_index")) {
            echo "active";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\">
\t\t\t\t\t<i class='bx bxs-user-account' ></i>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_admin_grpindex")) {
            echo "active";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_grpindex");
        echo "\">
\t\t\t\t\t<i class='bx bxs-group' ></i>
\t\t\t\t\t<span class=\"text\">Groupe</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "app_api_user")) {
            echo "active";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_api_user");
        echo "\">
\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t<span class=\"text\">API</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"side-menu\">
\t\t
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
        echo "\" >
\t\t\t\t\t<i class=\"bx bxs-smile\" ></i>
\t\t\t\t\t<span class=\"text\">Mon profil</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"logout\">
\t\t\t\t\t<i class='bx bxs-log-out-circle' ></i>
\t\t\t\t\t<span class=\"text\">Logout</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</section>
\t<!-- SIDEBAR -->



\t<!-- CONTENT -->
\t<section id=\"content\">
\t\t<!-- NAVBAR -->
\t\t<nav>
\t\t\t<i class='bx bx-menu' ></i>
\t\t\t<!-- <form action=\"#\">
\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t<input type=\"search\" placeholder=\"Search...\">
\t\t\t\t\t<button type=\"submit\" class=\"search-btn\"><i class='bx bx-search' ></i></button>
\t\t\t\t</div>
\t\t\t</form> -->
\t\t\t
\t\t\t</nav>
\t\t<!-- NAVBAR -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/_adminNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  112 => 38,  100 => 29,  94 => 28,  86 => 23,  80 => 22,  71 => 16,  65 => 15,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
\t<!-- SIDEBAR -->
\t<section id=\"sidebar\">
\t\t<a href=\"{{ path('app_home')}}\" class=\"brand\">
\t\t\t<img  src=\"{{asset('./assets/favicon.ico')}}\" alt=\"\" >
\t\t\t<span class=\"text\">Admin</span>
\t\t</a>
\t\t<ul class=\"side-menu top\">
\t\t\t<!-- <li class=\"active\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class='bx bxs-dashboard' ></i>
\t\t\t\t\t<span class=\"text\">Dashboard</span>
\t\t\t\t</a>
\t\t\t</li> -->
\t\t\t<li  class=\"{% if app.request.attributes.get('_route') == 'app_admin_index' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_admin_index')}}\">
\t\t\t\t\t<i class='bx bxs-user-account' ></i>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"{% if app.request.attributes.get('_route') == 'app_admin_grpindex' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_admin_grpindex')}}\">
\t\t\t\t\t<i class='bx bxs-group' ></i>
\t\t\t\t\t<span class=\"text\">Groupe</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"{% if app.request.attributes.get('_route') == 'app_api_user' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_api_user')}}\">
\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t<span class=\"text\">API</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"side-menu\">
\t\t
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_user_profil_success') }}\" >
\t\t\t\t\t<i class=\"bx bxs-smile\" ></i>
\t\t\t\t\t<span class=\"text\">Mon profil</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"logout\">
\t\t\t\t\t<i class='bx bxs-log-out-circle' ></i>
\t\t\t\t\t<span class=\"text\">Logout</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</section>
\t<!-- SIDEBAR -->



\t<!-- CONTENT -->
\t<section id=\"content\">
\t\t<!-- NAVBAR -->
\t\t<nav>
\t\t\t<i class='bx bx-menu' ></i>
\t\t\t<!-- <form action=\"#\">
\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t<input type=\"search\" placeholder=\"Search...\">
\t\t\t\t\t<button type=\"submit\" class=\"search-btn\"><i class='bx bx-search' ></i></button>
\t\t\t\t</div>
\t\t\t</form> -->
\t\t\t
\t\t\t</nav>
\t\t<!-- NAVBAR -->", "Admin/_adminNav.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Admin\\_adminNav.html.twig");
    }
}
