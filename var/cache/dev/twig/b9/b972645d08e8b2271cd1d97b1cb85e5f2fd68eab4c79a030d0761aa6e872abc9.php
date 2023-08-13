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

/* _header.html.twig */
class __TwigTemplate_8cbfdcb0d0bbad793102e430e5ecc7d3356f3bcf4791ae27020e258281a937ba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<!-- header nav bar -->
<header>
    <div>
        <figure id=\"burger\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/menuburger/menu-burger-dark.svg"), "html", null, true);
        echo "\" alt=\"burgerIcon\">
        </figure>
        <figure id=\"logo\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo/abattoir-vegetal-logo-big-dark.svg"), "html", null, true);
        echo "\" alt=\"title logo\"/></a>
        </figure>
        <nav>
            <a href='";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
        echo "' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/profil/profil-small-light.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            </a>
            <div id='notif' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/notifications/notification-small-light.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            </div>
            <a href='";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/reservation/reservation-small-light.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            </a>
        </nav>
    </div>
</header>


<div id='notificationBox'>

</div>
<div id=\"navResponsive\">
    <nav>
        <ul>
            ";
        // line 31
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", ["id"], "method", false, false, false, 31)) > 1)) {
            // line 32
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"><li>Home</li></a>
                <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\"><li>my reservations</li></a>
                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
            echo "\"><li>my profil</li></a>
                <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
            echo "\"><li>gimme a friend</li></a>
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><li>Logout</li></a>
            ";
        } else {
            // line 38
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"><li>Home</li></a> 
                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><li>register</li></a>
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><li>login</li></a>
            ";
        }
        // line 42
        echo "        </ul>
    </nav>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  131 => 40,  127 => 39,  122 => 38,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  100 => 32,  98 => 31,  82 => 18,  78 => 17,  73 => 15,  67 => 12,  63 => 11,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- header nav bar -->
<header>
    <div>
        <figure id=\"burger\">
            <img src=\"{{ asset('./assets/img/icones/menuburger/menu-burger-dark.svg')}}\" alt=\"burgerIcon\">
        </figure>
        <figure id=\"logo\">
            <a href=\"{{ path('app_home') }}\"><img src=\"{{ asset('./assets/img/logo/abattoir-vegetal-logo-big-dark.svg')}}\" alt=\"title logo\"/></a>
        </figure>
        <nav>
            <a href='{{ path('app_user_profil_success') }}' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"{{ asset('./assets/img/icones/profil/profil-small-light.svg') }}\" alt=\"logo\" />
            </a>
            <div id='notif' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"{{ asset('./assets/img/icones/notifications/notification-small-light.svg')}}\" alt=\"logo\" />
            </div>
            <a href='{{ path('app_reservation') }}' class='logoNavBox'>
                <img class=\"logoNav\"  src=\"{{ asset('./assets/img/icones/reservation/reservation-small-light.svg')}}\" alt=\"logo\" />
            </a>
        </nav>
    </div>
</header>


<div id='notificationBox'>

</div>
<div id=\"navResponsive\">
    <nav>
        <ul>
            {% if app.session.get('id')|length >1 %}
                <a href=\"{{ path('app_home') }}\"><li>Home</li></a>
                <a href=\"{{ path('app_reservation') }}\"><li>my reservations</li></a>
                <a href=\"{{ path('app_user_profil_success') }}\"><li>my profil</li></a>
                <a href=\"{{ path('app_select_group') }}\"><li>gimme a friend</li></a>
                <a href=\"{{ path('app_logout') }}\"><li>Logout</li></a>
            {% else %}
                <a href=\"{{ path('app_home') }}\"><li>Home</li></a> 
                <a href=\"{{ path('app_register') }}\"><li>register</li></a>
                <a href=\"{{ path('app_login') }}\"><li>login</li></a>
            {% endif %}
        </ul>
    </nav>
</div>
", "_header.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\_header.html.twig");
    }
}
