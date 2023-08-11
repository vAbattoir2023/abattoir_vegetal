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
class __TwigTemplate_0e13665d068069b37b3fb2519d100fa8b4636ed2e340015409b3d5a6888259c0 extends Template
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
        <ul>
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><li>Home</li></a> 
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><li>register</li></a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><li>login</li></a>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\"><li>gimme a friend</li></a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\"><li>click & collect</li></a>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\"><li>gimme a table</li></a>
\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><li>Logout</li></a>
        </ul>
    </nav>
</div>
<div id=\"navbarBox\">
    <img id=\"nav1\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/boutons/abattoir-vegetal-click-collect-off.svg"), "html", null, true);
        echo "\" alt=\"nav1\">
    <img id=\"nav2\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/boutons/abattoir-vegetal-gimme-friend-off.svg"), "html", null, true);
        echo "\" alt=\"nav2\">
    <img id=\"nav3\" src=\"";
        // line 24
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
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img//icones/croix/croix-fleur-jaune-small.svg"), "html", null, true);
        echo "\" alt=\"xMark\">
            </div>
            <div id=\"palteBox\">
                <img id=\"palteBox\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/formes/monstera-small-menthe-vertical.svg"), "html", null, true);
        echo "\" alt=\"algue\">
            </div>
            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><button>register</button></a>
            <a href=\"";
        // line 41
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
        return array (  132 => 41,  128 => 40,  123 => 38,  117 => 35,  103 => 24,  99 => 23,  95 => 22,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  55 => 6,  47 => 3,  43 => 1,);
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
        <ul>
\t\t\t<a href=\"{{ path('app_home') }}\"><li>Home</li></a> 
            <a href=\"{{ path('app_register') }}\"><li>register</li></a>
            <a href=\"{{ path('app_login') }}\"><li>login</li></a>
            <a href=\"{{ path('app_select_group') }}\"><li>gimme a friend</li></a>
            <a href=\"{{ path('app_select_group') }}\"><li>click & collect</li></a>
            <a href=\"{{ path('app_select_group') }}\"><li>gimme a table</li></a>
\t\t\t<a href=\"{{ path('app_logout') }}\"><li>Logout</li></a>
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
{# 
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_admin_index') }}\">Admin</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_register') }}\">Inscription</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_login') }}\">Connexion</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_user_profil') }}\">EditProfil</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_user_profil_success') }}\">Profil</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_select_group') }}\">Groupe</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_get_resa') }}\">Réservation</a>
<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_home') }}\">Home</a> 
#}
", "_nav.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\_nav.html.twig");
    }
}
