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

/* Home/index.html.twig */
class __TwigTemplate_258fe5fbc31cd88ad8ebaf5ef94fdf089f7f052cab2093932e4c4b2a2669509b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/home.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<body id=\"home\" class=\" container-fluid\">
    <header>
        <nav class=\"d-flex justify-content-end navbar-home\">
            <div class=\"d-flex flex-column\">
              \t\t         ";
        // line 13
        echo twig_include($this->env, $context, "_nav.html.twig", ["app" => (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })())]);
        echo "
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
                    <img class=\"bouton-gmaf\" src=\"../assets/img/boutons/abattoir-vegetal-gimme-friend-off.svg\" alt=\"\">
                </a>
                <a>
                    <img class=\"bouton-cec\" src=\"../assets/img/boutons/abattoir-vegetal-click-collect-off.svg\" alt=\"\">
                </a>
                <a>
                    <img class=\"bouton-gmat\" src=\"../assets/img/boutons/abattoir-vegetal-gimme-table-off.svg\" alt=\"\">
                </a>

            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class=\"container\"> <!-- MARGES -->

                <div class=\"row\">

                    <a href=\"#\">
                        <img class=\"logo-home\" src=\"../assets/img/logo/abattoir-vegetal-logo-big-dark.svg\" alt=\"logo\">
                    </a>
                    <div class=\"slogan-home\">
                        <p>VEGAN CONCEPTUAL HEALTHY RESTAURANT</p>

                      <a   href=\"#popup1\" >👉 Comment ça marche ?</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
 <!--popup1-->
<div id=\"popup1\" class=\"popup-container\">
  <div class=\"popup-content\">
    <a href=\"#\" class=\"close\">
 <img src=\"../assets/img/icones/croix/croix-fleur-orange-big.svg\" alt=\"\" class=\"cross-popup\"></a>
<div class=\"container popupcard\">
            
                    <div id=\"popupcomment\" class=\"row text-center d-flex flex-wrap \">
                        <h1 class=\"titre mt-5 mb-5\">
                            comment ça marche ?
                        </h1>
                        <article class=\"cardinscris col-3 margin1 mt-3\">
                            <p class=\"numeros numero1\">1</p>
                            <div class=\"border1\">
                                <img src=\"../assets/img/icones/legumes/carotte.svg\" alt=\"\" class=\"mt-4 mb-4\">
                                <h2 class=\"mt-3\">je m'inscris</h2>
                                <p class=\"psmallest mt-4 mb-3\">
                                    Crée toi un compte chez nous pour suivre tes demandes et réservations !
                                </p>
                            </div>
                        </article>
                        <article class=\" cardinscris col-3 margin2 align-items-center mt-3\">
                            <p class=\"numeros numero2\">2</p>
                            <div class=\" border2\">
                                <img src=\"../assets/img/icones/legumes/radis.svg\" alt=\"\" class=\"mt-4 mb-5\">
                                <h2 class=\"\">je&nbsp;me&nbsp;décris</h2>
                                <p class=\"psmallest mt-4 mb-3\">
                                    Remplis ton profil afin que les autres puissent savoir qui tu es pour apâter le chalan
                                </p>
                            </div>
                        </article>
                        <article class=\"cardinscris col-3 margin2 align-items-center mt-3\">
                            <p class=\"numeros numero3\">3</p>
                            <div class=\"border3\">
                                <img src=\"../assets/img/icones/legumes/pois.svg\" alt=\"\" class=\"mt-4 mb-5\">
                                <h2 class=\" mb-4\">je choisis</h2>
                                <p class=\"psmallest mb-3\">
                                    Choisis avec qui tu veux manger en fonction de ce qu’ils ont remplis dans leur profil
                                </p>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>  </div>
</div>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  118 => 13,  110 => 7,  100 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title  %} Accueil {% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('./assets/css/home.css')}}\">{% endblock %}

{% block body %}


<body id=\"home\" class=\" container-fluid\">
    <header>
        <nav class=\"d-flex justify-content-end navbar-home\">
            <div class=\"d-flex flex-column\">
              \t\t         {{ include('_nav.html.twig', { 'app': app }) }}
                <a href=\"{{ path('app_register') }}\">
                    <img class=\"bouton-gmaf\" src=\"../assets/img/boutons/abattoir-vegetal-gimme-friend-off.svg\" alt=\"\">
                </a>
                <a>
                    <img class=\"bouton-cec\" src=\"../assets/img/boutons/abattoir-vegetal-click-collect-off.svg\" alt=\"\">
                </a>
                <a>
                    <img class=\"bouton-gmat\" src=\"../assets/img/boutons/abattoir-vegetal-gimme-table-off.svg\" alt=\"\">
                </a>

            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class=\"container\"> <!-- MARGES -->

                <div class=\"row\">

                    <a href=\"#\">
                        <img class=\"logo-home\" src=\"../assets/img/logo/abattoir-vegetal-logo-big-dark.svg\" alt=\"logo\">
                    </a>
                    <div class=\"slogan-home\">
                        <p>VEGAN CONCEPTUAL HEALTHY RESTAURANT</p>

                      <a   href=\"#popup1\" >👉 Comment ça marche ?</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
 <!--popup1-->
<div id=\"popup1\" class=\"popup-container\">
  <div class=\"popup-content\">
    <a href=\"#\" class=\"close\">
 <img src=\"../assets/img/icones/croix/croix-fleur-orange-big.svg\" alt=\"\" class=\"cross-popup\"></a>
<div class=\"container popupcard\">
            
                    <div id=\"popupcomment\" class=\"row text-center d-flex flex-wrap \">
                        <h1 class=\"titre mt-5 mb-5\">
                            comment ça marche ?
                        </h1>
                        <article class=\"cardinscris col-3 margin1 mt-3\">
                            <p class=\"numeros numero1\">1</p>
                            <div class=\"border1\">
                                <img src=\"../assets/img/icones/legumes/carotte.svg\" alt=\"\" class=\"mt-4 mb-4\">
                                <h2 class=\"mt-3\">je m'inscris</h2>
                                <p class=\"psmallest mt-4 mb-3\">
                                    Crée toi un compte chez nous pour suivre tes demandes et réservations !
                                </p>
                            </div>
                        </article>
                        <article class=\" cardinscris col-3 margin2 align-items-center mt-3\">
                            <p class=\"numeros numero2\">2</p>
                            <div class=\" border2\">
                                <img src=\"../assets/img/icones/legumes/radis.svg\" alt=\"\" class=\"mt-4 mb-5\">
                                <h2 class=\"\">je&nbsp;me&nbsp;décris</h2>
                                <p class=\"psmallest mt-4 mb-3\">
                                    Remplis ton profil afin que les autres puissent savoir qui tu es pour apâter le chalan
                                </p>
                            </div>
                        </article>
                        <article class=\"cardinscris col-3 margin2 align-items-center mt-3\">
                            <p class=\"numeros numero3\">3</p>
                            <div class=\"border3\">
                                <img src=\"../assets/img/icones/legumes/pois.svg\" alt=\"\" class=\"mt-4 mb-5\">
                                <h2 class=\" mb-4\">je choisis</h2>
                                <p class=\"psmallest mb-3\">
                                    Choisis avec qui tu veux manger en fonction de ce qu’ils ont remplis dans leur profil
                                </p>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>  </div>
</div>
</body>

{% endblock %}
", "Home/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\Home\\index.html.twig");
    }
}
