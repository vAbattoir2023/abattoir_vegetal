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
class __TwigTemplate_ecf8459b7697f2d2be43efa3b85d12665328dd745cef5ddf05bb97eaedd27054 extends Template
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

        // line 4
        echo "\t\t\t\t";
        // line 5
        echo "
                \t\t\t\t\t\t\t\t";
        // line 7
        echo "
                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\">Admin</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Inscription</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t\t\t    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\">EditProfil</a>
                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
        echo "\">Profil</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\">Groupe</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_resa");
        echo "\">Réservation</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
\t\t\t\t    \t\t\t\t\t\t\t\t";
        // line 18
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 19
        echo "

\t\t\t\t";
        
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
        return array (  89 => 19,  87 => 18,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  48 => 7,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# 
\t\t\t<div class=\"container\">
\t\t\t\t<nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\"> #}
\t\t\t\t{# {% if is_granted('IS_AUTHENTICATED_FULLY') %} #}

                \t\t\t\t\t\t\t\t{# {% if 'ROLE_ADMIN' in app.user.roles %} #}

                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_admin_index') }}\">Admin</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_user_profil') }}\">EditProfil</a>
                    <a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_user_profil_success') }}\">Profil</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_select_group') }}\">Groupe</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_get_resa') }}\">Réservation</a>
\t\t\t\t\t<a class=\" bg-light me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t    \t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% endif %} #}


\t\t\t\t{# </nav>
\t\t\t</div> #}
", "_nav.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\_nav.html.twig");
    }
}
