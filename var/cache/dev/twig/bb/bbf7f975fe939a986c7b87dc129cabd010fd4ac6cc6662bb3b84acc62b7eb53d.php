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

/* user_profil/profil.html.twig */
class __TwigTemplate_71ffca85102e42eb677c1dd169be292db25500da0be5f73d2842a1ff0b5587f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_profil/profil.html.twig", 1);
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

        echo "Profil user
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/profil.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t\t        ";
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "
 <section id=\"profil\">
  
        <div class=\"container\"> <!-- MARGES -->

            <div class=\"row\">
                <div class=\"col-12 z-2 \">
                    <div class=\"mes-informations d-flex justify-content-between align-items-center\">
                        
                        
                        <h1>Mes informations</h1>
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\" class=\"lien-modifier\">
                            <img class=\"icone-modifier\" src=\"../assets/img/icones/modifier.svg\" alt=\"icone crayon\"> Modifier
                        </a>
                    </div>
                </div>
               </div>
 </div>
";
        // line 28
        echo "    <fieldset class=\"active\">
    <div id=\"jesuis\" class=\"container \">
   <div class=\" row\">
        <div class=\"\">
          <article class=\"psmall border-card\">
          
            <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
              <div class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                <a class=\"me-4 link-jesuis active\" href=\"#\">
                  <h2>JE SUIS</h2>
                </a>
                <a class=\"me-4 link-jaime\" href=\"#\">
                  <h2>J'AIME</h2>
                </a>
                <a href=\"#\" class=\"link-jeveux\">
                  <h2>JE VEUX</h2>
                </a>
              </div>

            </div>

            
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-md-12 \">
                  <div class=\"align-top maDiv col-4 offset-1\"> <!-- 1ère partie card -->
                    <div>
                      <div class=\"mb-3\"> <!-- je m'appelle et j'habite input -->
                        <div>
                          <div>                    
                          <label>Je m'appelle ...</label>
                          </div>
                          <p class=\"stroke-input mb-3\">\t";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                          <div>
                            <label>J'habite ...</label>
                          <p class=\"stroke-input mb-3\">\t";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "city", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
                          </div>
                        </div>
                      </div>
                      ";
        // line 72
        echo "                      <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                            <label>Age</label>
                       <div class=\"date-wrap\">
                          <p class=\"stroke-input mb-3\">\t";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "age", [], "any", false, false, false, 75), "html", null, true);
        echo "</p>
                        </div>
                      </div>
                      <div class=\"mb-4 date-wrap align-text\"> <!-- je suis bouton radio -->
                        <label >Je suis ...</label>                                 
                        <div class=\"flex-end\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "gender", [], "any", false, false, false, 80), "html", null, true);
        echo "</div>
                      </div>
                      <div> <!-- Je parle input -->
                        <div>
\t\t\t\t\t\t\t <label >Je parle ...</label>  
                        </div>
\t\t\t\t\t\t    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "language", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["languageCode"]) {
            // line 87
            echo "              <img src=\"https://www.countryflagicons.com/SHINY/32/";
            echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
            echo ".png\" alt=\"";
            echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
            echo " \">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languageCode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"align-top maDiv col-4 offset-2\"> <!-- 2ème partie card -->
                    <div class=\"wrap-bouton mb-1\"> <!-- img + btn -->
                      <div>
\t\t\t\t\t\t\t<img class=\"img-thumbnail  float-start\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95), "html", null, true);
        echo "\" alt=\"\">
                      </div>
                    
                    </div>
                    <div class=\"mb-3\"> <!-- input 2ème partie card -->
                      <div>
                        <label >Je boss dans ...</label>
                        </div>
                        <p class=\"stroke-input mb-3\">\t";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "job", [], "any", false, false, false, 103), "html", null, true);
        echo "</p>
                     <div class=\"mt-3\">
                      <label >Je me décris en quelque mot ..</label>
\t\t\t\t\t  <p class=\"stroke-input mb-3\">\t";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"offset-1\"> <!-- 3ème partie card -->
                    <div> <!-- texte 3ème partie card -->
\t\t\t\t\t<label >Mon régime alimentaire ...</label>               
    \t\t\t\t </div>
                    <div> <!-- btn radio -->
                      <div class=\"flex-pref mt-4\">
\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "diet", [], "any", false, false, false, 117), "html", null, true);
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        </article>
        <div class=\"row\">
          <div class=\"jesuisbouton\">
            <button id='btnstep1' href=\"#\" onclick=\"nextStep()\" class=\"bouton-smallest-transparent\">
              suivant
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </fieldset>

";
        // line 141
        echo "

";
        // line 144
        echo "    <fieldset class=\"mt-5 mb-5\" style=\"display: none;\">
<div class=\"container\" id=\"jaime\">
          
                    <div class=\"cardjaime \">
                        
                        <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
                            <div
                                class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                                <a class=\"me-4 link-jesuis\" href=\"#\">
                                    <h2>JE SUIS</h2>
                                </a>
                                <a class=\"me-4 link-jaime active\" href=\"#\">
                                    <h2>J'AIME</h2>
                                </a>
                                <a href=\"#\" class=\"link-jeveux\">
                                    <h2>JE VEUX</h2>
                                </a>
                            </div>
    
                        </div>
    
    
                            <div class=\"mb-3 \">
                             <label >Mes centres d'interets</label>
                            </div>
    
                               <div class=\"d-flex column\">
\t\t\t\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 171));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t<p class=\"border ms-3 p-3 border-danger\">";
            echo twig_escape_filter($this->env, $context["interest"], "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                         
\t\t\t\t\t\t\t\t</div>
                               
                        <div class=\"mt-3\">
                                 <label >J'en ai d'autres</label>
                        \t\t <p class=\"stroke-input mb-3\">\t";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 178), "html", null, true);
        echo "</p>

                         </div>
                            </div>
    
    
                    </div>
                </div>
                <div class=\"row g0\">
                    <div class=\"offset-md-3 col-md-9 d-flex  jaimebouton\">
                        <a class=\"bouton-smallest-transparent me-5\" onclick=\"previousStep()\">Retour</a>
                        <a class=\"bouton-smallest-transparent\" onclick=\"nextStep()\">Suivant</a>
                    </div>
              
        </div>

        </div>
        </div>
</fieldset>

        ";
        // line 199
        echo "
   <fieldset class=\"mt-5\" style=\"display: none;\">
   <div class=\"container\" >
        ";
        // line 203
        echo "        <div class=\"container\" style=\"margin-top: -150px\" >
            <section> <!-- PAGE ENTIERE -->
            <div class=\"container justify-content-center\" > <!-- MARGES -->
                <div class=\"row \">

                <article class=\"psmall border-card\">
                    <div id=\"jeveuxV2\" class=\"col-lg-9 jeveux\"> <!-- CARD FORMULAIRE -->
                        <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
                            <div class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                                <a class=\"me-4 link-jesuis\" href=\"#\">
                                    <h2>JE SUIS</h2>
                                </a>
                                <a class=\"me-4 link-jaime\" href=\"#\" >
                                    <h2>J'AIME</h2>
                                </a>
                                <a href=\"#\" class=\"link-jeveux active\">
                                    <h2>JE VEUX</h2>
                                </a>
                            </div>
            
                        </div>

                        <div class=\"row\">
                            <div class=\"offset-md-1 col-md-4\"> <!-- PARTIE GAUCHE -->
                                <p>Je veux festoyer...</p>
                                <div class=\"row mb-5\">
                                    <div class=\"col-6  mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"nombre\" value=\"unepersonne\" class=\"btn-check\"
                                            id=\"btn-check-outlined-1\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-1\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-teteatete-off.svg\" alt=\"\">
                                            <br>Avec 1 personne</label>
                                    </div>

                                    <div class=\"col-6  mb-2\"> <!-- PARTIE GAUCHE - PART DROITE -->
                                        <input type=\"radio\" name=\"nombre\" value=\"groupe\" class=\"btn-check\"
                                            id=\"btn-check-outlined-2\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice w-100 h-100 pt-3\"
                                            for=\"btn-check-outlined-2\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-groupe-off.svg\" alt=\"\"> <br>
                                            En groupe</label>
                                    </div>

                                </div>

                                <p>Je préfère festoyer avec...</p>
                                <div class=\"row mb-5\">
                                    <div class=\"col-4 col-md-6 mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"genre\" value=\"femme\" class=\"btn-check\"
                                            id=\"btn-check-outlined-3\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-3\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-female-off.svg\" alt=\"\">
                                            <br>La gente<br>féminine</label>
                                    </div>

                                    <div class=\"col-4 col-md-6  mb-2\"> <!-- PARTIE GAUCHE - PART DROITE -->
                                        <input type=\"radio\" name=\"genre\" value=\"homme\" class=\"btn-check\"
                                            id=\"btn-check-outlined-4\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-4\">
                                            <img class=\"iconchoice\" src=\"../assets/img/icones/selection/selection-male-off.svg\"
                                                alt=\"\"> <br>La gente masculine</label>
                                    </div>

                                    <div class=\"col-4 col-md-6  mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"genre\" value=\"indifferent\" class=\"btn-check\"
                                            id=\"btn-check-outlined-5\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice w-100 h-100 py-3\"
                                            for=\"btn-check-outlined-5\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-malefemale-off.svg\" alt=\"\">
                                            <br>Les deux</label>
                                    </div>

                                </div>

                            </div>

                            <div class=\"offset-md-1 col-md-5\"> <!-- PARTIE DROITE -->

                                <p>Je veux une expérience internationale</p>
                                <div class=\"d-flex mb-5\">
                                    <div class=\"form-check me-4\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"international\" id=\"oui\"
                                            value=\"oui\">
                                        <label class=\"form-check-label interchoice\" for=\"oui\">
                                            Oui
                                        </label>
                                    </div>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"international\" id=\"non\"
                                            value=\"non\">
                                        <label class=\"form-check-label interchoice\" for=\"non\">
                                            Non
                                        </label>
                                    </div>
                                </div>

                                <p>Je veux une limite d'âge</p>
                                <img src=\"../assets/img/icones/jauge.svg\" alt=\"\">

                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"offset-md-1 col-md-10 criteres\"> <!-- PARTIE EN BAS -->
                                <p>J'ai des critères rédhibitoires sur ces sujets...</p>
                                <div class=\"tag-menthe-small d-inline-block\">
                                    <p class=\"tag-menthe-small psmall tag\">Politique <img
                                            src=\"../assets/img/icones/croix/croix-noire-small.svg\" alt=\"\"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row g-0\">
                    <div class=\" col-md-9 d-flex justify-content-between jaimebouton\">
                    
        <button type=\"button\" class=\"bouton-smallest-transparent mb-5 \" onclick=\"previousStep()\">Retour</button>
                       
                    </div>
         
                

            </div>
        </section>
        ";
        // line 333
        echo "        </div>
</fieldset>
        ";
        // line 336
        echo "
                    <div class=\"infoprofil position-relative z-2\">
                <p>";
        // line 338
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 338, $this->source); })()), "username", [], "any", false, false, false, 338), "html", null, true);
        echo "</p>
                <span class=\"vertical-line\"></span>
                <p class=\"tag\">";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 340, $this->source); })()), "email", [], "any", false, false, false, 340), "html", null, true);
        echo "</p>
            </div>
            
                   
        </div>



    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 340,  507 => 338,  503 => 336,  499 => 333,  368 => 203,  363 => 199,  340 => 178,  333 => 173,  324 => 172,  320 => 171,  291 => 144,  287 => 141,  261 => 117,  247 => 106,  241 => 103,  230 => 95,  222 => 89,  211 => 87,  207 => 86,  198 => 80,  190 => 75,  185 => 72,  178 => 63,  172 => 60,  138 => 28,  128 => 20,  113 => 9,  111 => 8,  101 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil user
{% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('./assets/css/profil.css')}}\">{% endblock %}

{% block body %}
\t{# <h1>mes informations</h1> #}
\t\t        {{ include('_header.html.twig') }}
 <section id=\"profil\">
  
        <div class=\"container\"> <!-- MARGES -->

            <div class=\"row\">
                <div class=\"col-12 z-2 \">
                    <div class=\"mes-informations d-flex justify-content-between align-items-center\">
                        
                        
                        <h1>Mes informations</h1>
                        <a href=\"{{ path('app_user_profil') }}\" class=\"lien-modifier\">
                            <img class=\"icone-modifier\" src=\"../assets/img/icones/modifier.svg\" alt=\"icone crayon\"> Modifier
                        </a>
                    </div>
                </div>
               </div>
 </div>
{# CARD JE SUIS 1 #}
    <fieldset class=\"active\">
    <div id=\"jesuis\" class=\"container \">
   <div class=\" row\">
        <div class=\"\">
          <article class=\"psmall border-card\">
          
            <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
              <div class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                <a class=\"me-4 link-jesuis active\" href=\"#\">
                  <h2>JE SUIS</h2>
                </a>
                <a class=\"me-4 link-jaime\" href=\"#\">
                  <h2>J'AIME</h2>
                </a>
                <a href=\"#\" class=\"link-jeveux\">
                  <h2>JE VEUX</h2>
                </a>
              </div>

            </div>

            
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-md-12 \">
                  <div class=\"align-top maDiv col-4 offset-1\"> <!-- 1ère partie card -->
                    <div>
                      <div class=\"mb-3\"> <!-- je m'appelle et j'habite input -->
                        <div>
                          <div>                    
                          <label>Je m'appelle ...</label>
                          </div>
                          <p class=\"stroke-input mb-3\">\t{{ user.username }}</p>
                          <div>
                            <label>J'habite ...</label>
                          <p class=\"stroke-input mb-3\">\t{{ user.city }}</p>
                          </div>
                        </div>
                      </div>
                      {# <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                      {{ form_label(UserForm.dateOfBirth) }} 
                       <div class=\"date-wrap\">
                      {{ form_widget(UserForm.dateOfBirth, {'attr': {'class': 'stroke-input mb-3'}}) }} 
                        </div> #}
                      <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                            <label>Age</label>
                       <div class=\"date-wrap\">
                          <p class=\"stroke-input mb-3\">\t{{ user.age }}</p>
                        </div>
                      </div>
                      <div class=\"mb-4 date-wrap align-text\"> <!-- je suis bouton radio -->
                        <label >Je suis ...</label>                                 
                        <div class=\"flex-end\">{{ user.gender }}</div>
                      </div>
                      <div> <!-- Je parle input -->
                        <div>
\t\t\t\t\t\t\t <label >Je parle ...</label>  
                        </div>
\t\t\t\t\t\t    {% for languageCode in user.language %}
              <img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }} \">
                {% endfor %}
                      </div>
                    </div>
                  </div>
                  <div class=\"align-top maDiv col-4 offset-2\"> <!-- 2ème partie card -->
                    <div class=\"wrap-bouton mb-1\"> <!-- img + btn -->
                      <div>
\t\t\t\t\t\t\t<img class=\"img-thumbnail  float-start\" src=\"{{ user.image }}\" alt=\"\">
                      </div>
                    
                    </div>
                    <div class=\"mb-3\"> <!-- input 2ème partie card -->
                      <div>
                        <label >Je boss dans ...</label>
                        </div>
                        <p class=\"stroke-input mb-3\">\t{{ user.job }}</p>
                     <div class=\"mt-3\">
                      <label >Je me décris en quelque mot ..</label>
\t\t\t\t\t  <p class=\"stroke-input mb-3\">\t{{ user.description }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"offset-1\"> <!-- 3ème partie card -->
                    <div> <!-- texte 3ème partie card -->
\t\t\t\t\t<label >Mon régime alimentaire ...</label>               
    \t\t\t\t </div>
                    <div> <!-- btn radio -->
                      <div class=\"flex-pref mt-4\">
\t\t\t\t\t\t{{ user.diet }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        </article>
        <div class=\"row\">
          <div class=\"jesuisbouton\">
            <button id='btnstep1' href=\"#\" onclick=\"nextStep()\" class=\"bouton-smallest-transparent\">
              suivant
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </fieldset>

{# fin card je suis 1 #}


{# J'aime partie 2 #}
    <fieldset class=\"mt-5 mb-5\" style=\"display: none;\">
<div class=\"container\" id=\"jaime\">
          
                    <div class=\"cardjaime \">
                        
                        <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
                            <div
                                class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                                <a class=\"me-4 link-jesuis\" href=\"#\">
                                    <h2>JE SUIS</h2>
                                </a>
                                <a class=\"me-4 link-jaime active\" href=\"#\">
                                    <h2>J'AIME</h2>
                                </a>
                                <a href=\"#\" class=\"link-jeveux\">
                                    <h2>JE VEUX</h2>
                                </a>
                            </div>
    
                        </div>
    
    
                            <div class=\"mb-3 \">
                             <label >Mes centres d'interets</label>
                            </div>
    
                               <div class=\"d-flex column\">
\t\t\t\t\t\t\t{% for interest in user.centerOfInterest %}
\t\t\t\t\t\t\t\t\t<p class=\"border ms-3 p-3 border-danger\">{{ interest }}</p>
\t\t\t\t\t\t\t\t{% endfor %}                         
\t\t\t\t\t\t\t\t</div>
                               
                        <div class=\"mt-3\">
                                 <label >J'en ai d'autres</label>
                        \t\t <p class=\"stroke-input mb-3\">\t{{ user.centerOfInterestPerso }}</p>

                         </div>
                            </div>
    
    
                    </div>
                </div>
                <div class=\"row g0\">
                    <div class=\"offset-md-3 col-md-9 d-flex  jaimebouton\">
                        <a class=\"bouton-smallest-transparent me-5\" onclick=\"previousStep()\">Retour</a>
                        <a class=\"bouton-smallest-transparent\" onclick=\"nextStep()\">Suivant</a>
                    </div>
              
        </div>

        </div>
        </div>
</fieldset>

        {# Fin de j'aime partie 2  #}

   <fieldset class=\"mt-5\" style=\"display: none;\">
   <div class=\"container\" >
        {# je veux Etape 3 #}
        <div class=\"container\" style=\"margin-top: -150px\" >
            <section> <!-- PAGE ENTIERE -->
            <div class=\"container justify-content-center\" > <!-- MARGES -->
                <div class=\"row \">

                <article class=\"psmall border-card\">
                    <div id=\"jeveuxV2\" class=\"col-lg-9 jeveux\"> <!-- CARD FORMULAIRE -->
                        <div class=\"row\"> <!-- TITRE CARD FORMULAIRE -->
                            <div class=\"col-11 d-flex justify-content-end titrecard z-3 position-relative align-items-baseline\">
                                <a class=\"me-4 link-jesuis\" href=\"#\">
                                    <h2>JE SUIS</h2>
                                </a>
                                <a class=\"me-4 link-jaime\" href=\"#\" >
                                    <h2>J'AIME</h2>
                                </a>
                                <a href=\"#\" class=\"link-jeveux active\">
                                    <h2>JE VEUX</h2>
                                </a>
                            </div>
            
                        </div>

                        <div class=\"row\">
                            <div class=\"offset-md-1 col-md-4\"> <!-- PARTIE GAUCHE -->
                                <p>Je veux festoyer...</p>
                                <div class=\"row mb-5\">
                                    <div class=\"col-6  mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"nombre\" value=\"unepersonne\" class=\"btn-check\"
                                            id=\"btn-check-outlined-1\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-1\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-teteatete-off.svg\" alt=\"\">
                                            <br>Avec 1 personne</label>
                                    </div>

                                    <div class=\"col-6  mb-2\"> <!-- PARTIE GAUCHE - PART DROITE -->
                                        <input type=\"radio\" name=\"nombre\" value=\"groupe\" class=\"btn-check\"
                                            id=\"btn-check-outlined-2\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice w-100 h-100 pt-3\"
                                            for=\"btn-check-outlined-2\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-groupe-off.svg\" alt=\"\"> <br>
                                            En groupe</label>
                                    </div>

                                </div>

                                <p>Je préfère festoyer avec...</p>
                                <div class=\"row mb-5\">
                                    <div class=\"col-4 col-md-6 mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"genre\" value=\"femme\" class=\"btn-check\"
                                            id=\"btn-check-outlined-3\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-3\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-female-off.svg\" alt=\"\">
                                            <br>La gente<br>féminine</label>
                                    </div>

                                    <div class=\"col-4 col-md-6  mb-2\"> <!-- PARTIE GAUCHE - PART DROITE -->
                                        <input type=\"radio\" name=\"genre\" value=\"homme\" class=\"btn-check\"
                                            id=\"btn-check-outlined-4\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice  w-100 h-100\" for=\"btn-check-outlined-4\">
                                            <img class=\"iconchoice\" src=\"../assets/img/icones/selection/selection-male-off.svg\"
                                                alt=\"\"> <br>La gente masculine</label>
                                    </div>

                                    <div class=\"col-4 col-md-6  mb-2\"> <!-- PARTIE GAUCHE - PART GAUCHE -->
                                        <input type=\"radio\" name=\"genre\" value=\"indifferent\" class=\"btn-check\"
                                            id=\"btn-check-outlined-5\" autocomplete=\"off\">
                                        <label class=\"btn btn-outline-primary jeveuxchoice w-100 h-100 py-3\"
                                            for=\"btn-check-outlined-5\">
                                            <img class=\"iconchoice\"
                                                src=\"../assets/img/icones/selection/selection-malefemale-off.svg\" alt=\"\">
                                            <br>Les deux</label>
                                    </div>

                                </div>

                            </div>

                            <div class=\"offset-md-1 col-md-5\"> <!-- PARTIE DROITE -->

                                <p>Je veux une expérience internationale</p>
                                <div class=\"d-flex mb-5\">
                                    <div class=\"form-check me-4\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"international\" id=\"oui\"
                                            value=\"oui\">
                                        <label class=\"form-check-label interchoice\" for=\"oui\">
                                            Oui
                                        </label>
                                    </div>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"international\" id=\"non\"
                                            value=\"non\">
                                        <label class=\"form-check-label interchoice\" for=\"non\">
                                            Non
                                        </label>
                                    </div>
                                </div>

                                <p>Je veux une limite d'âge</p>
                                <img src=\"../assets/img/icones/jauge.svg\" alt=\"\">

                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"offset-md-1 col-md-10 criteres\"> <!-- PARTIE EN BAS -->
                                <p>J'ai des critères rédhibitoires sur ces sujets...</p>
                                <div class=\"tag-menthe-small d-inline-block\">
                                    <p class=\"tag-menthe-small psmall tag\">Politique <img
                                            src=\"../assets/img/icones/croix/croix-noire-small.svg\" alt=\"\"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row g-0\">
                    <div class=\" col-md-9 d-flex justify-content-between jaimebouton\">
                    
        <button type=\"button\" class=\"bouton-smallest-transparent mb-5 \" onclick=\"previousStep()\">Retour</button>
                       
                    </div>
         
                

            </div>
        </section>
        {# Fin de je veux Etape 3   #}
        </div>
</fieldset>
        {# Fin de je veux Etape 3   #}

                    <div class=\"infoprofil position-relative z-2\">
                <p>{{ user.username }}</p>
                <span class=\"vertical-line\"></span>
                <p class=\"tag\">{{ user.email }}</p>
            </div>
            
                   
        </div>



    </section>

{% endblock %}
", "user_profil/profil.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\user_profil\\profil.html.twig");
    }
}
