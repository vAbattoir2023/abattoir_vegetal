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

/* _nav.html.twig */
class __TwigTemplate_c072109a39e0b7b7d145badf344ef78682022497ab45de1894a83c741c132318 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<!-- navbar -->
<div id=\"titleBox\">
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo/abattoir-vegetal-logo-big-dark.svg"), "html", null, true);
        echo "\" alt=\"title logo\"></a>
</div>
<figure id=\"burgerBox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/menuburger/menu-burger-dark.svg"), "html", null, true);
        echo "\" alt=\"burgerIcon\">
</figure>
<div id=\"navResponsive\">
    <nav>
        <ul id='ulNavbar'>
            ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", ["id"], "method", false, false, false, 11)) > 1)) {
            // line 12
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"><li>Home</li></a>
                <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\"><li>my reservations</li></a>
                <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
            echo "\"><li>my profil</li></a>
                <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
            echo "\"><li>gimme a friend</li></a>
                <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><li>Logout</li></a>
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"><li>Home</li></a> 
                <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><li>register</li></a>
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><li>login</li></a>
            ";
        }
        // line 22
        echo "        </ul>
    </nav>
</div>
<div id=\"navbarBox\">
    <img id=\"nav1\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/boutons/abattoir-vegetal-click-collect-off.svg"), "html", null, true);
        echo "\" alt=\"nav1\">
    <img id=\"nav2\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/boutons/abattoir-vegetal-gimme-friend-off.svg"), "html", null, true);
        echo "\" alt=\"nav2\">
    <img id=\"nav3\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/boutons/abattoir-vegetal-gimme-table-off.svg"), "html", null, true);
        echo "\" alt=\"nav3\">
</div>
<!-- modal user not connected -->
<article id=\"modalBox\">
    <div id=\"modal\">
        <p></p>
        <div id=\"textBox\">
            <h6>You need an account to use this website please create an account or login</h6>
        </div>
        <div id=\"btnBox\">
            <div id=\"xMarkBox\">
                <img id=\"xMark\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img//icones/croix/croix-fleur-jaune-small.svg"), "html", null, true);
        echo "\" alt=\"xMark\">
            </div>
            <div id=\"palteBox\">
                <img id=\"palteBox\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/formes/monstera-small-menthe-vertical.svg"), "html", null, true);
        echo "\" alt=\"algue\">
            </div>
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><button>register</button></a>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><button>login</button></a>
        </div>
    </div>
</article>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  140 => 44,  135 => 42,  129 => 39,  115 => 28,  111 => 27,  107 => 26,  101 => 22,  96 => 20,  92 => 19,  87 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  65 => 12,  63 => 11,  55 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- navbar -->
<div id=\"titleBox\">
    <a href=\"{{ path('app_home') }}\"><img src=\"{{asset('./assets/img/logo/abattoir-vegetal-logo-big-dark.svg')}}\" alt=\"title logo\"></a>
</div>
<figure id=\"burgerBox\">
    <img src=\"{{asset('./assets/img/icones/menuburger/menu-burger-dark.svg')}}\" alt=\"burgerIcon\">
</figure>
<div id=\"navResponsive\">
    <nav>
        <ul id='ulNavbar'>
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
<div id=\"navbarBox\">
    <img id=\"nav1\" src=\"{{asset('./assets/img/boutons/abattoir-vegetal-click-collect-off.svg')}}\" alt=\"nav1\">
    <img id=\"nav2\" src=\"{{asset('./assets/img/boutons/abattoir-vegetal-gimme-friend-off.svg')}}\" alt=\"nav2\">
    <img id=\"nav3\" src=\"{{asset('./assets/img/boutons/abattoir-vegetal-gimme-table-off.svg')}}\" alt=\"nav3\">
</div>
<!-- modal user not connected -->
<article id=\"modalBox\">
    <div id=\"modal\">
        <p></p>
        <div id=\"textBox\">
            <h6>You need an account to use this website please create an account or login</h6>
        </div>
        <div id=\"btnBox\">
            <div id=\"xMarkBox\">
                <img id=\"xMark\" src=\"{{asset('./assets/img//icones/croix/croix-fleur-jaune-small.svg')}}\" alt=\"xMark\">
            </div>
            <div id=\"palteBox\">
                <img id=\"palteBox\" src=\"{{asset('./assets/img/formes/monstera-small-menthe-vertical.svg')}}\" alt=\"algue\">
            </div>
            <a href=\"{{ path('app_register') }}\"><button>register</button></a>
            <a href=\"{{ path('app_login') }}\"><button>login</button></a>
        </div>
    </div>
</article>
", "_nav.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\_nav.html.twig");
    }
}
