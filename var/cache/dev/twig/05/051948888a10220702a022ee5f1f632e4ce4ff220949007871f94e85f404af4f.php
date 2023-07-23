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
class __TwigTemplate_e66a2eeb1f3a384eb18f098974feca9c02cc83dbc54755099e39b60db04ee168 extends Template
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

                <div class=\"col-2\"> <!-- CARD RESA PETITE -->

                    <div
                        class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between mx-auto\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-confirme.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>13/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-2\"> <!-- CARD RESA PETITE 02 -->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-refuse.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>22/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-2\"> <!-- CARD RESA PETITE 03-->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-enattente.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>25/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-6\"> <!-- CARD RESA BIG -->
                    <div class=\"mesresasbig mt-5 row g-0\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG -->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">13/07/2023</p>
                                    <p class=\"mesresasheure me-5\">12h00</p>
                                    <p class=\"statutbig\">Validée</p>
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
                                        <p class=\"psmallest\">3 personnes</p>
                                    </div>

                                    <div>
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
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
                                    <a class=\"bouton-smallest-transparent d-flex mb-2\" href=\"#\">confirmer</a>
                                    <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">reserver</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-6 d-none\"> <!-- CARD RESA BIG COMMENTAIRE -->
                    <div class=\"mesresasbig commentaire row\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG COMMENTAIRE-->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">13/07/2023</p>
                                    <p class=\"mesresasheure me-5\">12h00</p>
                                    <p class=\"statutbig\">Validée</p>
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
                                        <p class=\"psmallest\">3 personnes</p>
                                    </div>

                                    <div>
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                    </div>
                                </div>

                                <a href=\"#\"> <img class=\"add\" src=\"../assets/img/icones/add/+.svg\" alt=\"\"></a>
                            </div>

                            <div class=\"d-flex justify-content-between align-items-center\"> <!-- PARTIE 03 -->
                                <!-- <div class=\"d-flex\">
                                    <div class=\"me-5 commentaires\">
                                        <a href=\"\">2 commentaires</a>
                                         <div class=\"d-flex align-items-center me-auto mb-3\">
                                            <img class=\"mt-2\" src=\"Assets/img/Rectangle-191.jpg\" alt=\"\">
                                            <p class=\"comecrit mb-0\"> Je ne serais pas dispo avant 12h45...</p>
                                        </div>

                                        <div class=\"form-floating mt-3\">
                                            <textarea class=\"form-control\" placeholder=\"commentez\"
                                                id=\"floatingTextarea2\" style=\"height: 100px\"></textarea>
                                            <label for=\"floatingTextarea2\"> <img
                                                    src=\"Assets/icones/commentaire/foret-com.svg\" alt=\"\">
                                                Commentez</label>
                                        </div>

                                        <div class=\"d-flex justify-content-between mesresasboutonscom mt-3\">
                                            <a class=\"bouton-smallest-transparent d-flex mb-2\" href=\"#\">annuler</a>
                                            <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">envoyer</a>
                                        </div> 
                                     </div>


                                </div>--> 
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
        return array (  132 => 22,  122 => 15,  117 => 12,  107 => 11,  95 => 7,  81 => 6,  70 => 4,  60 => 3,  37 => 1,);
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

                <div class=\"col-2\"> <!-- CARD RESA PETITE -->

                    <div
                        class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between mx-auto\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-confirme.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>13/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-2\"> <!-- CARD RESA PETITE 02 -->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-refuse.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>22/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-2\"> <!-- CARD RESA PETITE 03-->

                    <div class=\"mesresassmall mt-5 position-relative d-flex flex-column justify-content-between\">

                        <div class=\"d-flex justify-content-end\">
                            <img class=\"statut\" src=\"../assets/img/icones/curseur/curseur-big-enattente.svg\" alt=\"\">
                        </div>


                        <div class=\"datebig\">
                            <p>25/07/2023</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-6\"> <!-- CARD RESA BIG -->
                    <div class=\"mesresasbig mt-5 row g-0\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG -->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">13/07/2023</p>
                                    <p class=\"mesresasheure me-5\">12h00</p>
                                    <p class=\"statutbig\">Validée</p>
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
                                        <p class=\"psmallest\">3 personnes</p>
                                    </div>

                                    <div>
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
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
                                    <a class=\"bouton-smallest-transparent d-flex mb-2\" href=\"#\">confirmer</a>
                                    <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">reserver</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-6 d-none\"> <!-- CARD RESA BIG COMMENTAIRE -->
                    <div class=\"mesresasbig commentaire row\">
                        <div class=\"offset-1 col-10\"> <!-- INTERIEUR CARD RESA BIG COMMENTAIRE-->
                            <div class=\"d-flex justify-content-between align-items-center mb-5\"> <!-- PARTIE 01 -->
                                <div class=\"d-flex justify-content-between align-items-baseline\">
                                    <p class=\"datesmall me-3\">13/07/2023</p>
                                    <p class=\"mesresasheure me-5\">12h00</p>
                                    <p class=\"statutbig\">Validée</p>
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
                                        <p class=\"psmallest\">3 personnes</p>
                                    </div>

                                    <div>
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img class=\"m-2\" src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                        <img src=\"../assets/img/Rectangle-188.jpg\" alt=\"\">
                                    </div>
                                </div>

                                <a href=\"#\"> <img class=\"add\" src=\"../assets/img/icones/add/+.svg\" alt=\"\"></a>
                            </div>

                            <div class=\"d-flex justify-content-between align-items-center\"> <!-- PARTIE 03 -->
                                <!-- <div class=\"d-flex\">
                                    <div class=\"me-5 commentaires\">
                                        <a href=\"\">2 commentaires</a>
                                         <div class=\"d-flex align-items-center me-auto mb-3\">
                                            <img class=\"mt-2\" src=\"Assets/img/Rectangle-191.jpg\" alt=\"\">
                                            <p class=\"comecrit mb-0\"> Je ne serais pas dispo avant 12h45...</p>
                                        </div>

                                        <div class=\"form-floating mt-3\">
                                            <textarea class=\"form-control\" placeholder=\"commentez\"
                                                id=\"floatingTextarea2\" style=\"height: 100px\"></textarea>
                                            <label for=\"floatingTextarea2\"> <img
                                                    src=\"Assets/icones/commentaire/foret-com.svg\" alt=\"\">
                                                Commentez</label>
                                        </div>

                                        <div class=\"d-flex justify-content-between mesresasboutonscom mt-3\">
                                            <a class=\"bouton-smallest-transparent d-flex mb-2\" href=\"#\">annuler</a>
                                            <a class=\"bouton-smallest-transparent d-flex\" href=\"#\">envoyer</a>
                                        </div> 
                                     </div>


                                </div>--> 
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

", "Group/resa.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\Group\\resa.html.twig");
    }
}
