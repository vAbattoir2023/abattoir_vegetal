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

/* Group/date.html.twig */
class __TwigTemplate_9f8231d61781560250f9b0cd6471162d76fb48585c5f27d01737aff62b413857 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/date.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/date.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Group/date.html.twig", 1);
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

        // line 4
        echo "\tGreen Meet reservation
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/mur.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
 ";
        // line 12
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "

  <div id=\"reserver\" class=\"container\">
            <div class=\"row position-relative\">

                <!-- calendrier -->
                <section class=\"col col-md-5 z-2\">
                    <div class=\"position-relative\">
                        <span class=\"position-absolute numeros numero-un\">1</span>
                        <div class=\"position-absolute title-screen\">
                            <h1>réserver</h1>
                        </div>
                        <form action=\"#\" method=\"post\">
                            <div class=\"fond-calendar\">
                                <div class=\"lisere-calendar\">
                                    <div class=\"calendar d-flex flex-column\">
                                        <div class=\"header-calendar\">
                                            <div class=\"titre\">
                                                <h2>Choisis&nbsp;ton&nbsp;jour</h2>
                                            </div>
                                            <div class=\"d-flex justify-content-between  mt-5 mb-2\">
                                                <div class=\"month\">
                                                    <p class=\"pbold\">Juillet 2023</p>
                                                </div>
                                                <div>
                                                    <img class=\"me-5\" src=\"../assets/img/icones/chevrons/precedent.svg\" alt=\"\">
                                                    <img src=\"../assets/img/icones/chevrons/suivant.svg\" alt=\"\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"d-flex flex-wrap liste-dates\">
                                            <div>
                                                <p class=\"day\">Lu</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Ma</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Me</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Je</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Ve</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Sa</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Di</p>
                                            </div>

                                            <div class=\"grille d-flex flex-wrap\">
                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-01\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">1</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-02\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">2</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-03\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">3</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-04\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">4</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-05\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">5</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-06\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">6</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-07\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">7</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-08\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">8</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-09\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">9</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-10\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">10</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-11\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">11</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-12\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">12</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-13\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">13</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-14\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">14</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-15\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">15</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-16\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">16</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-17\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">17</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-18\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">18</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-19\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">19</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-20\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">20</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-21\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">21</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-22\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">22</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-23\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">23</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-24\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">24</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-25\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">25</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-26\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">26</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-27\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">27</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-28\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">28</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-29\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">29</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-30\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">30</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-30\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">31</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-01\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">1</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-02\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">2</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-03\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">3</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-04\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-right border-bottom\"
                                                    for=\"option1\">4</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section id=\"horaires\" class=\"col offset-2 col-md-5 position-relative z-2\">
                    <span class=\"position-absolute numeros numero-deux\">2</span>
                    <div class=\"fond-horaires\">
                        <div class=\"lisere-horaires\">
                            <div class=\"d-flex flex-column\">
                                <div class=\"resume\">
                                    <span>
                                        <h2 class=\"title-card\">Choisis ton heure</h2>
                                    </span>
                                    <div class=\"title-hour\">
                                        <h3>Horaires disponibles</h3>
                                    </div>
                                    <div>
                                        <p>Pour le 18/07/2023<br>Table de 3 personnes</p>
                                    </div>
                                </div>
                                <div class=\"horaire\">
                                    <div id=\"midi\">
                                        <div id=\"text\">
                                            <p class=\"pbig\">Midi</p>
                                        </div>
                                        <div id=\"horaires\">
                                            <div class=\"liste-heures d-flex\">
                                                <p class=\"tag-horaire-vert me-2\">12h00</p>
                                                <p class=\"tag-horaire-vert me-2\">13h00</p>
                                                <p class=\"tag-horaire-rose\">Voir +</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"soir\">
                                        <div id=\"text\">
                                            <p class=\"pbig\">Midi</p>
                                        </div>
                                        <div id=\"horaires\">
                                            <div class=\"liste-heures d-flex\">
                                                <p class=\"tag-horaire-vert me-2\">19h00</p>
                                                <p class=\"tag-horaire-vert me-2\">20h00</p>
                                                <p class=\"tag-horaire-rose\">Voir +</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <a href=\"#\" class=\"bouton-small btn-valider d-flex align-items-center\">valider</a>
                    </div>
                </section>
            </div>
        </div>

        </div>
        </div>
        </div> 
        </div>
        </div>
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Group/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 12,  114 => 11,  104 => 10,  91 => 7,  81 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title  %}
\tGreen Meet reservation
{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('./assets/css/mur.css')}}\">
{% endblock %}

{% block body %}

 {{ include('_header.html.twig') }}

  <div id=\"reserver\" class=\"container\">
            <div class=\"row position-relative\">

                <!-- calendrier -->
                <section class=\"col col-md-5 z-2\">
                    <div class=\"position-relative\">
                        <span class=\"position-absolute numeros numero-un\">1</span>
                        <div class=\"position-absolute title-screen\">
                            <h1>réserver</h1>
                        </div>
                        <form action=\"#\" method=\"post\">
                            <div class=\"fond-calendar\">
                                <div class=\"lisere-calendar\">
                                    <div class=\"calendar d-flex flex-column\">
                                        <div class=\"header-calendar\">
                                            <div class=\"titre\">
                                                <h2>Choisis&nbsp;ton&nbsp;jour</h2>
                                            </div>
                                            <div class=\"d-flex justify-content-between  mt-5 mb-2\">
                                                <div class=\"month\">
                                                    <p class=\"pbold\">Juillet 2023</p>
                                                </div>
                                                <div>
                                                    <img class=\"me-5\" src=\"../assets/img/icones/chevrons/precedent.svg\" alt=\"\">
                                                    <img src=\"../assets/img/icones/chevrons/suivant.svg\" alt=\"\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"d-flex flex-wrap liste-dates\">
                                            <div>
                                                <p class=\"day\">Lu</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Ma</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Me</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Je</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Ve</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Sa</p>
                                            </div>
                                            <div>
                                                <p class=\"day\">Di</p>
                                            </div>

                                            <div class=\"grille d-flex flex-wrap\">
                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-01\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">1</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-02\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">2</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-03\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">3</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-04\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">4</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-05\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">5</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-06\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">6</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-07\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">7</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-08\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">8</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-09\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">9</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-10\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">10</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-11\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">11</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-12\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">12</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-13\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">13</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-14\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">14</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-15\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">15</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-16\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">16</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-17\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">17</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-18\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">18</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-19\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">19</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-20\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">20</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-21\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">21</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-22\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">22</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-23\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">23</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-24\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">24</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-25\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">25</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-26\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">26</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-27\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates\" for=\"option1\">27</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-28\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-right\"
                                                    for=\"option1\">28</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-29\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">29</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-30\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">30</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-07-30\"
                                                    autocomplete=\"off\">
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">31</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-01\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">1</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-02\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">2</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-03\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-bottom\"
                                                    for=\"option1\">3</label>

                                                <input type=\"radio\" class=\"btn-check\" name=\"2023-08-04\"
                                                    autocomplete=\"off\" disabled>
                                                <label class=\"btn btn-secondary dates border-right border-bottom\"
                                                    for=\"option1\">4</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section id=\"horaires\" class=\"col offset-2 col-md-5 position-relative z-2\">
                    <span class=\"position-absolute numeros numero-deux\">2</span>
                    <div class=\"fond-horaires\">
                        <div class=\"lisere-horaires\">
                            <div class=\"d-flex flex-column\">
                                <div class=\"resume\">
                                    <span>
                                        <h2 class=\"title-card\">Choisis ton heure</h2>
                                    </span>
                                    <div class=\"title-hour\">
                                        <h3>Horaires disponibles</h3>
                                    </div>
                                    <div>
                                        <p>Pour le 18/07/2023<br>Table de 3 personnes</p>
                                    </div>
                                </div>
                                <div class=\"horaire\">
                                    <div id=\"midi\">
                                        <div id=\"text\">
                                            <p class=\"pbig\">Midi</p>
                                        </div>
                                        <div id=\"horaires\">
                                            <div class=\"liste-heures d-flex\">
                                                <p class=\"tag-horaire-vert me-2\">12h00</p>
                                                <p class=\"tag-horaire-vert me-2\">13h00</p>
                                                <p class=\"tag-horaire-rose\">Voir +</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"soir\">
                                        <div id=\"text\">
                                            <p class=\"pbig\">Midi</p>
                                        </div>
                                        <div id=\"horaires\">
                                            <div class=\"liste-heures d-flex\">
                                                <p class=\"tag-horaire-vert me-2\">19h00</p>
                                                <p class=\"tag-horaire-vert me-2\">20h00</p>
                                                <p class=\"tag-horaire-rose\">Voir +</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <a href=\"#\" class=\"bouton-small btn-valider d-flex align-items-center\">valider</a>
                    </div>
                </section>
            </div>
        </div>

        </div>
        </div>
        </div> 
        </div>
        </div>
        
        {% endblock %}
", "Group/date.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Group\\date.html.twig");
    }
}
