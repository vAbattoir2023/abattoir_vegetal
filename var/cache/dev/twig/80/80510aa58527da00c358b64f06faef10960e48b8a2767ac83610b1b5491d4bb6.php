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

/* user_profil/index.html.twig */
class __TwigTemplate_114139e3f6cc04969d2fb4c55f123bf36b83bb31ec50675bc5d5e47c118059ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Profil User ";
        
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

        // line 9
        echo "
 ";
        // line 10
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "
 <section id=\"profil\">
";
        // line 13
        echo "    <fieldset class=\"active\">
    <div id=\"jesuis\" class=\"container  mt-5\">
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

            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 34, $this->source); })()), 'errors');
        echo "
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-md-12 \">
                  <div class=\"align-top maDiv col-4 offset-1\"> <!-- 1ère partie card -->
                    <div>
                      <div class=\"mb-3\"> <!-- je m'appelle et j'habite input -->
                        <div>
                          <div>                    
                          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), 'label');
        echo "
                          </div>
                          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 46, $this->source); })()), "username", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo "
                          <div>
                            <div>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 48, $this->source); })()), "city", [], "any", false, false, false, 48), 'label');
        echo "</div>
                          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 49, $this->source); })()), "city", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo "
                          </div>
                        </div>
                      </div>
                      ";
        // line 58
        echo "                      <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 59, $this->source); })()), "age", [], "any", false, false, false, 59), 'label');
        echo " 
                       <div class=\"date-wrap\">
                      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 61, $this->source); })()), "age", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo " 
                        </div>
                      </div>
                      <div class=\"mb-4 date-wrap align-text\"> <!-- je suis bouton radio -->
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 65, $this->source); })()), "gender", [], "any", false, false, false, 65), 'label');
        echo "                                  
                        <div class=\"flex-end\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 67, $this->source); })()), "gender", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "stroke-input ", "style" => "border: none;font-size:12px;"]]);
        echo " 
                        </div>
                      </div>
                      <div> <!-- Je parle input -->
                        
                          ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 72, $this->source); })()), "language", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo "
                      </div>
                    </div>
                  </div>
                  <div class=\"align-top maDiv col-4 offset-2\"> <!-- 2ème partie card -->
                    <div class=\"wrap-bouton mb-1\"> <!-- img + btn -->
                      <div>
                        <img src=\"../assets/img/icones/profil/profil-big.svg\" alt=\"\" class=\"largeur\">
                      </div>
                      <div class=\"position-bouton\">
                          ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "bouton-smallest-hug size-btn mb-3"]]);
        echo "
                     
                        <select class=\"w-100 bouton-smallest-hug size-btn mb-3 form-select\" aria-label=\"Disabled select example\" disabled>
                        <option selected>choisir un avatar  </option>
                        <option value=\"1\">One</option>
                        <option value=\"2\">Two</option>
                        <option value=\"3\">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"mb-3\"> <!-- input 2ème partie card -->
                      <div>
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 94, $this->source); })()), "job", [], "any", false, false, false, 94), 'label');
        echo "
                        </div>
                          ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 96, $this->source); })()), "job", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo "
                     <div class=\"mt-3\">
                       ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), 'label');
        echo "
                          ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "stroke-input mb-3"]]);
        echo "
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"offset-1\"> <!-- 3ème partie card -->
                    <div> <!-- texte 3ème partie card -->
             ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 106, $this->source); })()), "diet", [], "any", false, false, false, 106), 'label');
        echo "
                    </div>
                    <div> <!-- btn radio -->
                      <div class=\"flex-pref mt-4\">
             ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 110, $this->source); })()), "diet", [], "any", false, false, false, 110), 'widget');
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
            <button href=\"#\" onclick=\"nextStep()\" class=\"bouton-smallest-transparent\">
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
        // line 134
        echo "

";
        // line 137
        echo "    <fieldset  style=\"display: none; margin-top:100px;\">
<div class=\"container \" id=\"jaime\">
          
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
                             ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 160, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 160), 'label');
        echo "
                            </div>
    
                               <div class=\"d-flex column\">
                             ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 164, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 164), 'widget');
        echo "
                            </div>
    
                               
                        <div class=\"mt-3\">
    
                        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 170, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 170), 'label');
        echo "
                          ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 171, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "stroke-input "]]);
        echo "
    
                         </div>
                            </div>
    
    
                    </div>
                </div>

                <div class=\"row g0\">
                    <div class=\"offset-md-3 col-md-9 d-flex jaimebouton\">
                        <a class=\"bouton-smallest-transparent me-5\" onclick=\"previousStep()\">Retour</a>
                        <a class=\"bouton-smallest-transparent\" onclick=\"nextStep()\">Suivant</a>
                    </div>
              
        </div>
        </div>
        </div>
</fieldset>

        ";
        // line 192
        echo "
  

   <fieldset class=\"mt-5\" style=\"display: none;\">
   <div class=\"container\" >
        ";
        // line 198
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
                    
        <button type=\"button\" class=\"bouton-smallest-transparent me-5\" onclick=\"previousStep()\">Retour</button>
                       
        ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 321, $this->source); })()), "submit", [], "any", false, false, false, 321), 'widget', ["attr" => ["class" => "bouton-smallest-transparent "]]);
        echo "
                    </div>
         
                

            </div>
        </section>
        ";
        // line 329
        echo "        </div>
</fieldset>
        ";
        // line 332
        echo "

";
        // line 334
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 334, $this->source); })()), 'form_end');
        echo "
    </section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 334,  509 => 332,  505 => 329,  495 => 321,  370 => 198,  363 => 192,  340 => 171,  336 => 170,  327 => 164,  320 => 160,  295 => 137,  291 => 134,  265 => 110,  258 => 106,  248 => 99,  244 => 98,  239 => 96,  234 => 94,  219 => 82,  206 => 72,  198 => 67,  193 => 65,  186 => 61,  181 => 59,  178 => 58,  171 => 49,  167 => 48,  162 => 46,  157 => 44,  145 => 35,  141 => 34,  118 => 13,  113 => 10,  110 => 9,  100 => 7,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title  %} Profil User {% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('./assets/css/profil.css')}}\">{% endblock %}

{% block body %}
{# <h1>INSCRIPTION PROFIL </h1> #}

 {{ include('_header.html.twig') }}
 <section id=\"profil\">
{# CARD JE SUIS 1 #}
    <fieldset class=\"active\">
    <div id=\"jesuis\" class=\"container  mt-5\">
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

            {{ form_errors(UserForm) }}
        {{ form_start(UserForm) }}
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-md-12 \">
                  <div class=\"align-top maDiv col-4 offset-1\"> <!-- 1ère partie card -->
                    <div>
                      <div class=\"mb-3\"> <!-- je m'appelle et j'habite input -->
                        <div>
                          <div>                    
                          {{ form_label(UserForm.username) }}
                          </div>
                          {{ form_widget(UserForm.username, {'attr': {'class': 'stroke-input mb-3'}}) }}
                          <div>
                            <div>{{ form_label(UserForm.city) }}</div>
                          {{ form_widget(UserForm.city, {'attr': {'class': 'stroke-input mb-3'}}) }}
                          </div>
                        </div>
                      </div>
                      {# <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                      {{ form_label(UserForm.dateOfBirth) }} 
                       <div class=\"date-wrap\">
                      {{ form_widget(UserForm.dateOfBirth, {'attr': {'class': 'stroke-input mb-3'}}) }} 
                        </div> #}
                      <div class=\"mb-1 align-text\"> <!-- je suis né inputx3-->
                      {{ form_label(UserForm.age) }} 
                       <div class=\"date-wrap\">
                      {{ form_widget(UserForm.age, {'attr': {'class': 'stroke-input mb-3'}}) }} 
                        </div>
                      </div>
                      <div class=\"mb-4 date-wrap align-text\"> <!-- je suis bouton radio -->
                        {{ form_label(UserForm.gender) }}                                  
                        <div class=\"flex-end\">
                        {{ form_widget(UserForm.gender, {'attr': {'class': 'stroke-input ', 'style': 'border: none;font-size:12px;'}}) }} 
                        </div>
                      </div>
                      <div> <!-- Je parle input -->
                        
                          {{ form_widget(UserForm.language, {'attr': {'class': 'stroke-input mb-3'}}) }}
                      </div>
                    </div>
                  </div>
                  <div class=\"align-top maDiv col-4 offset-2\"> <!-- 2ème partie card -->
                    <div class=\"wrap-bouton mb-1\"> <!-- img + btn -->
                      <div>
                        <img src=\"../assets/img/icones/profil/profil-big.svg\" alt=\"\" class=\"largeur\">
                      </div>
                      <div class=\"position-bouton\">
                          {{ form_widget(UserForm.image, {'attr': {'class': 'bouton-smallest-hug size-btn mb-3'}}) }}
                     
                        <select class=\"w-100 bouton-smallest-hug size-btn mb-3 form-select\" aria-label=\"Disabled select example\" disabled>
                        <option selected>choisir un avatar  </option>
                        <option value=\"1\">One</option>
                        <option value=\"2\">Two</option>
                        <option value=\"3\">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"mb-3\"> <!-- input 2ème partie card -->
                      <div>
                        {{ form_label(UserForm.job) }}
                        </div>
                          {{ form_widget(UserForm.job, {'attr': {'class': 'stroke-input mb-3'}}) }}
                     <div class=\"mt-3\">
                       {{ form_label(UserForm.description) }}
                          {{ form_widget(UserForm.description, {'attr': {'class': 'stroke-input mb-3'}}) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"offset-1\"> <!-- 3ème partie card -->
                    <div> <!-- texte 3ème partie card -->
             {{ form_label(UserForm.diet) }}
                    </div>
                    <div> <!-- btn radio -->
                      <div class=\"flex-pref mt-4\">
             {{ form_widget(UserForm.diet) }}
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
            <button href=\"#\" onclick=\"nextStep()\" class=\"bouton-smallest-transparent\">
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
    <fieldset  style=\"display: none; margin-top:100px;\">
<div class=\"container \" id=\"jaime\">
          
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
                             {{ form_label(UserForm.centerOfInterest) }}
                            </div>
    
                               <div class=\"d-flex column\">
                             {{ form_widget(UserForm.centerOfInterest) }}
                            </div>
    
                               
                        <div class=\"mt-3\">
    
                        {{ form_label(UserForm.centerOfInterestPerso) }}
                          {{ form_widget(UserForm.centerOfInterestPerso, {'attr': {'class': 'stroke-input '}}) }}
    
                         </div>
                            </div>
    
    
                    </div>
                </div>

                <div class=\"row g0\">
                    <div class=\"offset-md-3 col-md-9 d-flex jaimebouton\">
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
                    
        <button type=\"button\" class=\"bouton-smallest-transparent me-5\" onclick=\"previousStep()\">Retour</button>
                       
        {{ form_widget(UserForm.submit, {'attr': {'class': 'bouton-smallest-transparent '}}) }}
                    </div>
         
                

            </div>
        </section>
        {# Fin de je veux Etape 3   #}
        </div>
</fieldset>
        {# Fin de je veux Etape 3   #}


{{ form_end(UserForm) }}
    </section>



{% endblock %}
", "user_profil/index.html.twig", "C:\\wamp64\\www\\projet\\php\\Nouveau dossier\\abattoir_vegetal\\templates\\user_profil\\index.html.twig");
    }
}
