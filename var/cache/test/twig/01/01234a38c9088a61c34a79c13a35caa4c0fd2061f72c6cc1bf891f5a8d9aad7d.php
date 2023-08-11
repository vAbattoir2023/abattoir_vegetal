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
class __TwigTemplate_d45a02d98ddf5993c0cdbdfe26c2ec76d36aaed022fced284532d106cee6c7bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/monProfil.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/monProfilUser.css"), "html", null, true);
        echo "\">
      <!-- font -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Gasoek+One&family=Work+Sans:wght@400;600;700;800;900&display=swap\" rel=\"stylesheet\">

    <title>PROFIL USER </title>
</head>
<!-- body of page -->
<body>

\t";
        // line 21
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "

    <div class=\"rectangle\"></div>
      
      <div class=\"containerC\"> 

      <div class=\"titleProfil\">  
      <div>
        <h2>Mes informations</h2>
      </div>
    <div>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\" class=\"modifier\">
         <p><img class=\"icone-modifier\" src=\"../assets/img/icones/modifier.svg\" alt=\"icone crayon\">Modifier</p> 
        </a>
    </div>
    </div>

   <div class=\"boxSide\">
    <!-- Card user  -->
    <div class=\"cardSide\">

    <div class=\"row\">

    <article class=\"cardUser \">
    <article class=\"cardUserBody\">
    <img class=\"img-user\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46), "html", null, true);
        echo "\" alt=\"\">

    <div class=\"description\">
        <div class=\"row\">
            <p class=\"name\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true);
        echo " </p>
        <div class=\"drapeau \">
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "language", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["languageCode"]) {
            // line 53
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
        // line 55
        echo "        </div>
    </div>

    <div class=\"row\">

        <p class=\"cardGender\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "gender", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>

    <div class=\"infoUser\">
    <div class=\" tag-prefs \">
        ";
        // line 64
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "postalCode", [], "any", false, false, false, 64))) {
            // line 65
            echo "        <p class=\"tag-menthe\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "city", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
        ";
        }
        // line 66
        echo " 
        <p class=\"tag-menthe\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "age", [], "any", false, false, false, 67), "html", null, true);
        echo " Ans</p>
    </div>
    </div>
    </div>

    </div>    

    
    <p class=\"citation\">« ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "html", null, true);
        echo ". »</p>


    </article>
    </div>
    </div>


    
    <!-- box profil  -->
    <div class=\" CardProfil  \">
    <!-- Profil form : JE SUIS -->
    <fieldset class=\"active\">
    <div class=\"formCard\">
  
      <div class=\"container \">
    <div class=\" border-card\">
    <!-- <img src=\"Assets/formes/algue-medium-menthe-gauche.svg\" alt=\"\" class=\"algue-profil position-relative\">
      <fieldset class=\"active\">
    <img src=\"Assets/formes/marguerite-framboise.svg\" alt=\"\" class=\"marguerite-profil  position-relative \"> -->
  
      <!-- TITRE CARD FORMULAIRE -->
      <div class=\"row\">
      <div class=\"titleCard\">
  
        <div class=\"title active\">
          <h2>je suis</h2>
        </div>
        <div class=\"title \">
          <h2>j'aime</h2>
        </div>
  
      </div>
      </div>
              
      <!-- Form 1 JE SUIS  -->
      <div class=\"containerForm\">
    
        <div class=\"rightSide\"> 
          
          <!-- right side -->
          <p >Je m'apelle...</p>
          <p class=\"stroke-input\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "username", [], "any", false, false, false, 117), "html", null, true);
        echo "</p>

          <p >J'habite...</p>
          ";
        // line 120
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "postalCode", [], "any", false, false, false, 120))) {
            // line 121
            echo "          <p class=\"stroke-input\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "city", [], "any", false, false, false, 121), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "region", [], "any", false, false, false, 121), "html", null, true);
            echo ")</p>
          ";
        }
        // line 122
        echo "     

          <div class=\"date\"> 
            <p> Age ...</p>
            <p>\t";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "age", [], "any", false, false, false, 126), "html", null, true);
        echo " Ans</p>
          </div>

          <div class=\"date\"> 
          <p>Je suis un(e)</p>
          <p > ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "gender", [], "any", false, false, false, 131), "html", null, true);
        echo "</p>
          </div>

        <p>Je parle...</p>
         ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "language", [], "any", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["languageCode"]) {
            // line 136
            echo "        <img src=\"https://www.countryflagicons.com/SHINY/32/";
            echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
            echo ".png\" alt=\"";
            echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
            echo " \">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languageCode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        
        </div>


        <!-- left side -->
        <div class=\"leftSide\"> 

        <div class=\"wrap-img\"> 
            <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "image", [], "any", false, false, false, 146), "html", null, true);
        echo "\" alt=\"\" class=\"img\">
        </div>
  
        <p>Je bosse dans...</p>
        <p class=\"stroke-input\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "job", [], "any", false, false, false, 150), "html", null, true);
        echo "</p>

        <div class=\"decris\">
        <p>Je me décris en quelques mots...</p>
        <p class=\"stroke-input\">";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "description", [], "any", false, false, false, 154), "html", null, true);
        echo "</p>
       
        </div>
        </div>

        <!-- bottom  -->
        <div class=\"bottom\"> 
        <p> Mon régime alimentaire ... </p>
         <div class=\"btn-diet\">
         <input type=\"radio\" id=\"ProfilChoice1\" name=\"choice\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "diet", [], "any", false, false, false, 163), "html", null, true);
        echo "\"class=\"regime\">
        <label for=\"ProfilChoice1\">";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 164, $this->source); })()), "diet", [], "any", false, false, false, 164), "html", null, true);
        echo "</label>
        </div>
        </div>
  
    </div>
  </div>
        <div class=\"btn-submit\">
        <button onclick=\"nextStep()\" class=\"btn-img \">
            suivant
        </button>
        </div>

        </div>
      </div>
    </fieldset>
    <!-- Profil form : J'AIME -->
    <fieldset style=\"display: none;\">
    <div class=\"formCard \">
  
      <div class=\"containerjaime\">
    <div class=\" border-card\">
    <!-- <img src=\"Assets/formes/algue-medium-menthe-gauche.svg\" alt=\"\" class=\"algue-profil position-relative\">
      <fieldset class=\"active\">
    <img src=\"Assets/formes/marguerite-framboise.svg\" alt=\"\" class=\"marguerite-profil  position-relative \"> -->
  
      <!-- TITRE CARD FORMULAIRE -->
      <div class=\"row\">
      <div class=\"titleCard\">
  
        <div class=\"title \">
          <h2>je suis</h2>
        </div>
        <div class=\"title active\">
          <h2>j'aime</h2>
        </div>
  
      </div>
      </div>
              
      <!-- Form J'AIME  -->
      <div class=\"containerFormjaime\">
    
        <div class=\"centerOfI\"> 
          
        <!-- right side -->
        <p >Mes centres d'intérêts</p>
        <div class=\"btn-diet btn-centerOfI\">
        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 211, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 212
            echo "        <input type=\"radio\" id=\"ProfilChoice1\" name=\"choice\" value=\" ";
            echo twig_escape_filter($this->env, $context["interest"], "html", null, true);
            echo "\" class=\"regime\">
        <label for=\"ProfilChoice1\">";
            // line 213
            echo twig_escape_filter($this->env, $context["interest"], "html", null, true);
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "
        </div>
          
        <p>J’en ai d’autres ... </p>
        <p class=\"stroke-input-fin\"> ";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 219), "html", null, true);
        echo " </p>
        </div>
  
        </div>
        </div>

        <div class=\"btn-submit-fin\">
        <button onclick=\"previousStep()\" class=\"btn-img \">
            Retour
        </button>

        </div>
        </div>
      </div>
      </fieldset>
      </div>
      </div>

       <div class=\" CardInfos\">
        <p>";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 238, $this->source); })()), "username", [], "any", false, false, false, 238), "html", null, true);
        echo "</p>
        <span class=\"vertical-line\"></span>
        <p class=\"tag\">";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 240, $this->source); })()), "email", [], "any", false, false, false, 240), "html", null, true);
        echo "</p>
        </div>
        </div>
        </div>

     

<!-- footer -->
\t\t";
        // line 248
        $this->loadTemplate("_footer.html.twig", "user_profil/profil.html.twig", 248)->display($context);
        // line 249
        echo "</body>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/form.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  421 => 251,  417 => 250,  414 => 249,  412 => 248,  401 => 240,  396 => 238,  374 => 219,  368 => 215,  360 => 213,  355 => 212,  351 => 211,  301 => 164,  297 => 163,  285 => 154,  278 => 150,  271 => 146,  261 => 138,  250 => 136,  246 => 135,  239 => 131,  231 => 126,  225 => 122,  217 => 121,  215 => 120,  209 => 117,  164 => 75,  153 => 67,  150 => 66,  144 => 65,  142 => 64,  135 => 60,  128 => 55,  117 => 53,  113 => 52,  108 => 50,  101 => 46,  84 => 32,  70 => 21,  56 => 10,  51 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    {# <link rel=\"stylesheet\" href=\"{{asset('./assets/css/profil.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/selectGroup.css') }}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/monProfil.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/monProfilUser.css') }}\">
      <!-- font -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Gasoek+One&family=Work+Sans:wght@400;600;700;800;900&display=swap\" rel=\"stylesheet\">

    <title>PROFIL USER </title>
</head>
<!-- body of page -->
<body>

\t{{ include('_header.html.twig') }}

    <div class=\"rectangle\"></div>
      
      <div class=\"containerC\"> 

      <div class=\"titleProfil\">  
      <div>
        <h2>Mes informations</h2>
      </div>
    <div>
        <a href=\"{{ path('app_user_profil') }}\" class=\"modifier\">
         <p><img class=\"icone-modifier\" src=\"../assets/img/icones/modifier.svg\" alt=\"icone crayon\">Modifier</p> 
        </a>
    </div>
    </div>

   <div class=\"boxSide\">
    <!-- Card user  -->
    <div class=\"cardSide\">

    <div class=\"row\">

    <article class=\"cardUser \">
    <article class=\"cardUserBody\">
    <img class=\"img-user\" src=\"{{ user.image }}\" alt=\"\">

    <div class=\"description\">
        <div class=\"row\">
            <p class=\"name\">{{ user.username }} </p>
        <div class=\"drapeau \">
        {% for languageCode in user.language %}
              <img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }} \">
        {% endfor %}
        </div>
    </div>

    <div class=\"row\">

        <p class=\"cardGender\">{{ user.gender }}</p>

    <div class=\"infoUser\">
    <div class=\" tag-prefs \">
        {% if user.postalCode is not empty %}
        <p class=\"tag-menthe\"> {{ user.city }}</p>
        {% endif %} 
        <p class=\"tag-menthe\">{{ user.age }} Ans</p>
    </div>
    </div>
    </div>

    </div>    

    
    <p class=\"citation\">« {{ user.description }}. »</p>


    </article>
    </div>
    </div>


    
    <!-- box profil  -->
    <div class=\" CardProfil  \">
    <!-- Profil form : JE SUIS -->
    <fieldset class=\"active\">
    <div class=\"formCard\">
  
      <div class=\"container \">
    <div class=\" border-card\">
    <!-- <img src=\"Assets/formes/algue-medium-menthe-gauche.svg\" alt=\"\" class=\"algue-profil position-relative\">
      <fieldset class=\"active\">
    <img src=\"Assets/formes/marguerite-framboise.svg\" alt=\"\" class=\"marguerite-profil  position-relative \"> -->
  
      <!-- TITRE CARD FORMULAIRE -->
      <div class=\"row\">
      <div class=\"titleCard\">
  
        <div class=\"title active\">
          <h2>je suis</h2>
        </div>
        <div class=\"title \">
          <h2>j'aime</h2>
        </div>
  
      </div>
      </div>
              
      <!-- Form 1 JE SUIS  -->
      <div class=\"containerForm\">
    
        <div class=\"rightSide\"> 
          
          <!-- right side -->
          <p >Je m'apelle...</p>
          <p class=\"stroke-input\">{{ user.username }}</p>

          <p >J'habite...</p>
          {% if user.postalCode is not empty %}
          <p class=\"stroke-input\"> {{ user.city }} ({{ user.region }})</p>
          {% endif %}     

          <div class=\"date\"> 
            <p> Age ...</p>
            <p>\t{{ user.age }} Ans</p>
          </div>

          <div class=\"date\"> 
          <p>Je suis un(e)</p>
          <p > {{ user.gender }}</p>
          </div>

        <p>Je parle...</p>
         {% for languageCode in user.language %}
        <img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }} \">
        {% endfor %}
        
        </div>


        <!-- left side -->
        <div class=\"leftSide\"> 

        <div class=\"wrap-img\"> 
            <img src=\"{{ user.image }}\" alt=\"\" class=\"img\">
        </div>
  
        <p>Je bosse dans...</p>
        <p class=\"stroke-input\">{{ user.job }}</p>

        <div class=\"decris\">
        <p>Je me décris en quelques mots...</p>
        <p class=\"stroke-input\">{{ user.description }}</p>
       
        </div>
        </div>

        <!-- bottom  -->
        <div class=\"bottom\"> 
        <p> Mon régime alimentaire ... </p>
         <div class=\"btn-diet\">
         <input type=\"radio\" id=\"ProfilChoice1\" name=\"choice\" value=\"{{ user.diet}}\"class=\"regime\">
        <label for=\"ProfilChoice1\">{{ user.diet}}</label>
        </div>
        </div>
  
    </div>
  </div>
        <div class=\"btn-submit\">
        <button onclick=\"nextStep()\" class=\"btn-img \">
            suivant
        </button>
        </div>

        </div>
      </div>
    </fieldset>
    <!-- Profil form : J'AIME -->
    <fieldset style=\"display: none;\">
    <div class=\"formCard \">
  
      <div class=\"containerjaime\">
    <div class=\" border-card\">
    <!-- <img src=\"Assets/formes/algue-medium-menthe-gauche.svg\" alt=\"\" class=\"algue-profil position-relative\">
      <fieldset class=\"active\">
    <img src=\"Assets/formes/marguerite-framboise.svg\" alt=\"\" class=\"marguerite-profil  position-relative \"> -->
  
      <!-- TITRE CARD FORMULAIRE -->
      <div class=\"row\">
      <div class=\"titleCard\">
  
        <div class=\"title \">
          <h2>je suis</h2>
        </div>
        <div class=\"title active\">
          <h2>j'aime</h2>
        </div>
  
      </div>
      </div>
              
      <!-- Form J'AIME  -->
      <div class=\"containerFormjaime\">
    
        <div class=\"centerOfI\"> 
          
        <!-- right side -->
        <p >Mes centres d'intérêts</p>
        <div class=\"btn-diet btn-centerOfI\">
        {% for interest in user.centerOfInterest %}
        <input type=\"radio\" id=\"ProfilChoice1\" name=\"choice\" value=\" {{ interest }}\" class=\"regime\">
        <label for=\"ProfilChoice1\">{{ interest }}</label>
        {% endfor %}

        </div>
          
        <p>J’en ai d’autres ... </p>
        <p class=\"stroke-input-fin\"> {{ user.centerOfInterestPerso }} </p>
        </div>
  
        </div>
        </div>

        <div class=\"btn-submit-fin\">
        <button onclick=\"previousStep()\" class=\"btn-img \">
            Retour
        </button>

        </div>
        </div>
      </div>
      </fieldset>
      </div>
      </div>

       <div class=\" CardInfos\">
        <p>{{ user.username }}</p>
        <span class=\"vertical-line\"></span>
        <p class=\"tag\">{{ user.email }}</p>
        </div>
        </div>
        </div>

     

<!-- footer -->
\t\t{% include \"_footer.html.twig\" %}
</body>
<script src=\"{{asset('./assets/js/header.js')}}\"></script>
<script src=\"{{asset('./assets/js/form.js')}}\"></script>
</html>
", "user_profil/profil.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\user_profil\\profil.html.twig");
    }
}
