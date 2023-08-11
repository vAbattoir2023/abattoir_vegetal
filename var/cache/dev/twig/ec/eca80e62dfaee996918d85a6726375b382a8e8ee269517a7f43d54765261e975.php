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

/* Group/resa.html.twig */
class __TwigTemplate_4224f4aeec76cb2bd409fb90e6fabb09395f88f4de36fb32407cdce131021c92 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/resa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/resa.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Group/resa.html.twig", 1);
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
        echo "\tReservation
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

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/reservation.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/global.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    


\t\t        ";
        // line 15
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "

 <main style=\"margin-bottom: 150px;\">

        <div class=\"container\"> <!-- MARGES -->
            <div class=\" d-flex justify-content-between align-items-center titreresa\"> <!-- TITRE + BOUTON -->
                <h1> Mes réservations </h1>
                <a class=\"bouton-small d-flex boutonresa\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\">GIMME A FRIEND</a>
            </div>


            <div class=\"row\"> <!-- 12 COLONNES AU MILIEUUUU -->

             
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
            // line 30
            echo "                <div class=\"col-2  ticket\" onclick=\"toggleDiv(this)\"> <!-- CARD RESA PETITE 03-->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-enattente.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <span>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "createdAt", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            echo "</span>
                            ";
            // line 42
            echo "                        </div>

                    </div>
                 </div>

                 <div class=\"col-6 myDiv\"  style=\"display:none;\"> <!-- CARD RESA BIG -->
                    <div class=\"mesresasbig mt-5 row g-0\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG -->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "createdAt", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo "</p>
                                    ";
            // line 54
            echo "                                    <p class=\"statutbig\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "status", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"close\">
                                    <img src=\"../assets/img/icones/croix/croix-noire-big.svg\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"d-flex justify-content-between align-items-center quimange mb-5\">
                                <!-- PARTIE 02 -->
                                <div class=\"d-flex\">
                                    <div class=\"me-2\">
                                        <h4>Qui mange ?</h4>
                                        <p class=\"psmallest\">";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "guests", [], "any", false, false, false, 66)), "html", null, true);
            echo " personnes</p>
                                    </div>

                                    <div>
                                        ";
            // line 73
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groups"], "guests", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 74
                echo "                                        <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guest"], "username", [], "any", false, false, false, 74), "html", null, true);
                echo "</p>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                    </div>
                                </div>

                                <a href=\"#\"> <img class=\"add\" src=\"../assets/img/icones/add/+.svg\" alt=\"\"></a>
                            </div>
                            <!-- PARTIE 03 -->
                           <div class=\"d-flex justify-content-between align-items-center\"> 
                              <div class=\"d-flex invisible\">
                                     <div class=\"me-5 commentaires \">
                                        <a href=\"\">2 commentaires</a>
                                        <p class=\"com\"> <img src=\"../assets/img/icones/commentaire/foret-com.svg\" alt=\"\">
                                            Commenter
                                        </p>
                                    </div>
                                </div> 

                                <div class=\"d-flex align-items-start flex-column mesresasboutons\">
                                    <a class=\"bouton-smallest-transparent d-flex mb-2\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-resa\">Confirmer</a>
                                    <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">Refuser</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
              <!-- Modal resa-->
    <div class=\"modal fade\" id=\"modal-resa\" tabindex=\"-1\" aria-labelledby=\"ModalResaLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content justify-content-center d-flex \">

                <div class=\"modal-header mx-auto position-relative\">
                    <h1 class=\"modal-title fs-5\" id=\"ModalResaLabel\">Et voilà ta résa</h1>
                    
                    <!-- Je sais pas comment enlever la croix que bootstrap a mise -->
                    <button type=\"button\" class=\"btn-close position-absolute croix-close-modal-resa\"
                        data-bs-dismiss=\"modal\" aria-label=\"Close\"><img
                            src=\"../assets/img/icones/croix/croix-fleur-orange-small.svg\" alt=\"\"></button>
                </div>

                <div class=\"container g-0\">
                    <div class=\"modal-body mx-auto row z-1\">
                        <div id=\"droite\" class=\"offset-1 col col-md-4\">
                            <div class=\"mb-3\">
                            
                                <h4 class=\"mb-1\">12h00</h4>
                                <p class=\"tag mb-1\">Jeudi 13/07/2023</p>
                                <a href=\"#\" class=\"psmall\">Changer ma résa</a>
                            </div>
                            <div class=\"liste-amis mb-3\">
                                <h4>Avec...</h4>
                                <div class=\"d-flex\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-girl.jpg\" alt=\"\">
                                    <p>Violette</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man.jpg\"
                                        alt=\"\">
                                    <p>Alexis</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man2.jpg\"
                                        alt=\"\">
                                    <p>Marc</p>
                                </div>
                            </div>
                            🥜 <a href=\"#\">J'ai des restrictions alimentaires</a>
                        </div>
                        <div id=\"gauche\" class=\"col offset-1 col-md-5\">
                            <div class=\"iframe mb-3\"><iframe
                                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4362.6634304986555!2d2.331097211773408!3d48.85346635862052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671738178460b%3A0xeecc055bfcf89fea!2zQWJhdHRvaXIgdsOpZ8OpdGFs!5e0!3m2!1sen!2sfr!4v1689942015940!5m2!1sen!2sfr\"
                                    width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe></div>
                            <div>
                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/localisation.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">9 rue Guisarde 75006 Paris</p>
                                </div>

                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 incons-contact\" src=\"../assets/img/icones/infos-contact/telephone.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">09.83.54.56.76</p>
                                </div>

                                <div class=\"d-flex align-items-center\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/mail.svg\" alt=\"\">
                                    <p class=\"psmallest tag\">mail@abattoirvegetal.fr</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class=\"position-absolute feuille-modal-resa z-2\"
                        src=\"assets/formes/feuille-small-sapin-endroit.svg\" alt=\"\">
                    <div class=\"modal-resa-footer position-relative z-3\">

                        <button type=\"button\" class=\"btn btn-secondary bouton btn-annuler btn-sous\"
                            data-bs-dismiss=\"modal\">Annuler</button>

                        <button type=\"button\" class=\"btn btn-secondary bouton-dark btn-sous\"
                            data-bs-dismiss=\"modal\">Valider</button>

                    </div>
                </div>


            </div>

        </div>

    </div>
            </div>




        </div> <!-- FIN DES MARGES -->


    </main>
    
\t\t       
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/resa.js"), "html", null, true);
        echo "\"></script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Group/resa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 201,  247 => 102,  216 => 76,  207 => 74,  202 => 73,  195 => 66,  179 => 54,  175 => 52,  163 => 42,  159 => 40,  147 => 30,  143 => 29,  133 => 22,  123 => 15,  118 => 12,  108 => 11,  96 => 7,  82 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title  %}
\tReservation
{% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('./assets/css/reservation.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('./assets/css/global.css')}}\">
{% endblock %}


{% block body %}
    


\t\t        {{ include('_header.html.twig') }}

 <main style=\"margin-bottom: 150px;\">

        <div class=\"container\"> <!-- MARGES -->
            <div class=\" d-flex justify-content-between align-items-center titreresa\"> <!-- TITRE + BOUTON -->
                <h1> Mes réservations </h1>
                <a class=\"bouton-small d-flex boutonresa\" href=\"{{ path('app_select_group') }}\">GIMME A FRIEND</a>
            </div>


            <div class=\"row\"> <!-- 12 COLONNES AU MILIEUUUU -->

             
        {% for groups in notifications %}
                <div class=\"col-2  ticket\" onclick=\"toggleDiv(this)\"> <!-- CARD RESA PETITE 03-->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-enattente.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <span>{{ groups.createdAt|date('Y-m-d') }}</span>
                            {# <p>{{ groups.createdAt|date('Y-m-d H:i:s') }}</p> #}
                        </div>

                    </div>
                 </div>

                 <div class=\"col-6 myDiv\"  style=\"display:none;\"> <!-- CARD RESA BIG -->
                    <div class=\"mesresasbig mt-5 row g-0\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG -->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">{{ groups.createdAt|date('Y-m-d') }}</p>
                                    {# <p class=\"mesresasheure me-5\">{{ notifications.createdAt|date('H:i:s') }}</p> #}
                                    <p class=\"statutbig\">{{ groups.status }}</p>
                                </div>
                                <div class=\"close\">
                                    <img src=\"../assets/img/icones/croix/croix-noire-big.svg\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"d-flex justify-content-between align-items-center quimange mb-5\">
                                <!-- PARTIE 02 -->
                                <div class=\"d-flex\">
                                    <div class=\"me-2\">
                                        <h4>Qui mange ?</h4>
                                        <p class=\"psmallest\">{{ groups.guests|length }} personnes</p>
                                    </div>

                                    <div>
                                        {# <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img src=\"../assets/img/Rectangle-188.jpg\" alt=\"\"> #}
                                        {% for guest in groups.guests %}
                                        <p>{{ guest.username}}</p>
                                        {% endfor %}
                                    </div>
                                </div>

                                <a href=\"#\"> <img class=\"add\" src=\"../assets/img/icones/add/+.svg\" alt=\"\"></a>
                            </div>
                            <!-- PARTIE 03 -->
                           <div class=\"d-flex justify-content-between align-items-center\"> 
                              <div class=\"d-flex invisible\">
                                     <div class=\"me-5 commentaires \">
                                        <a href=\"\">2 commentaires</a>
                                        <p class=\"com\"> <img src=\"../assets/img/icones/commentaire/foret-com.svg\" alt=\"\">
                                            Commenter
                                        </p>
                                    </div>
                                </div> 

                                <div class=\"d-flex align-items-start flex-column mesresasboutons\">
                                    <a class=\"bouton-smallest-transparent d-flex mb-2\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-resa\">Confirmer</a>
                                    <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">Refuser</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    {% endfor %}

              <!-- Modal resa-->
    <div class=\"modal fade\" id=\"modal-resa\" tabindex=\"-1\" aria-labelledby=\"ModalResaLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content justify-content-center d-flex \">

                <div class=\"modal-header mx-auto position-relative\">
                    <h1 class=\"modal-title fs-5\" id=\"ModalResaLabel\">Et voilà ta résa</h1>
                    
                    <!-- Je sais pas comment enlever la croix que bootstrap a mise -->
                    <button type=\"button\" class=\"btn-close position-absolute croix-close-modal-resa\"
                        data-bs-dismiss=\"modal\" aria-label=\"Close\"><img
                            src=\"../assets/img/icones/croix/croix-fleur-orange-small.svg\" alt=\"\"></button>
                </div>

                <div class=\"container g-0\">
                    <div class=\"modal-body mx-auto row z-1\">
                        <div id=\"droite\" class=\"offset-1 col col-md-4\">
                            <div class=\"mb-3\">
                            
                                <h4 class=\"mb-1\">12h00</h4>
                                <p class=\"tag mb-1\">Jeudi 13/07/2023</p>
                                <a href=\"#\" class=\"psmall\">Changer ma résa</a>
                            </div>
                            <div class=\"liste-amis mb-3\">
                                <h4>Avec...</h4>
                                <div class=\"d-flex\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-girl.jpg\" alt=\"\">
                                    <p>Violette</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man.jpg\"
                                        alt=\"\">
                                    <p>Alexis</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man2.jpg\"
                                        alt=\"\">
                                    <p>Marc</p>
                                </div>
                            </div>
                            🥜 <a href=\"#\">J'ai des restrictions alimentaires</a>
                        </div>
                        <div id=\"gauche\" class=\"col offset-1 col-md-5\">
                            <div class=\"iframe mb-3\"><iframe
                                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4362.6634304986555!2d2.331097211773408!3d48.85346635862052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671738178460b%3A0xeecc055bfcf89fea!2zQWJhdHRvaXIgdsOpZ8OpdGFs!5e0!3m2!1sen!2sfr!4v1689942015940!5m2!1sen!2sfr\"
                                    width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe></div>
                            <div>
                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/localisation.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">9 rue Guisarde 75006 Paris</p>
                                </div>

                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 incons-contact\" src=\"../assets/img/icones/infos-contact/telephone.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">09.83.54.56.76</p>
                                </div>

                                <div class=\"d-flex align-items-center\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/mail.svg\" alt=\"\">
                                    <p class=\"psmallest tag\">mail@abattoirvegetal.fr</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class=\"position-absolute feuille-modal-resa z-2\"
                        src=\"assets/formes/feuille-small-sapin-endroit.svg\" alt=\"\">
                    <div class=\"modal-resa-footer position-relative z-3\">

                        <button type=\"button\" class=\"btn btn-secondary bouton btn-annuler btn-sous\"
                            data-bs-dismiss=\"modal\">Annuler</button>

                        <button type=\"button\" class=\"btn btn-secondary bouton-dark btn-sous\"
                            data-bs-dismiss=\"modal\">Valider</button>

                    </div>
                </div>


            </div>

        </div>

    </div>
            </div>




        </div> <!-- FIN DES MARGES -->


    </main>
    
\t\t       
    </div>
{% endblock %}

{% block javascripts %}<script src=\"{{ asset('./assets/js/resa.js')}}\"></script> {% endblock %}
", "Group/resa.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Group\\resa.html.twig");
    }
}
