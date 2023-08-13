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
class __TwigTemplate_7a588102429e0f59c3e4bcdf5e9acb694ec659407b0d14c725a6690c11ef3230 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Profil Edit</title>
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/editProfil.css"), "html", null, true);
        echo "\">
</head>
<body>
  <img id=\"mentheBG\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/formes/algue-medium-menthe-gauche.svg"), "html", null, true);
        echo "\" alt=\"\">
  <img id=\"flowerRed\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/formes/marguerite-framboise.svg"), "html", null, true);
        echo "\" alt=\"\">
  <!-- header nav bar -->
  ";
        // line 14
        $this->loadTemplate("_header.html.twig", "user_profil/index.html.twig", 14)->display($context);
        // line 15
        echo "  <!-- container -->
  <div id='boxAvatar'>
    <div>
      <figure id='avatar1'>
        <img src=\"https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg\" alt=\"\">
      </figure>
      <figure id='avatar2'>
        <img src=\"https://static.vecteezy.com/ti/vecteur-libre/p3/5419157-profil-utilisateur-femme-avatar-est-une-femme-un-personnage-pour-un-economiseur-d-ecran-avec-emotions-illustrationle-sur-fond-blanc-isole-vectoriel.jpg\" alt=\"\">
      </figure>
    </div>
    <button id='selectAvatar'>select an avatar</button>
  </div>
  <main>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 28, $this->source); })()), 'errors');
        echo "
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["id" => "container"]]);
        echo "
      <article>
        <div id=\"first_second\">
          <!-- title -->
          <h1 id='title'>My profile</h1>
          <!-- left content -->
          <div id=\"firstData\">
            <div class=\"inputBox\">
              <label for=\"\">My name is ...</label>
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), 'widget');
        echo "
            </div>
            <div class=\"inputBox2\">
              <label for=\"\">I live in ...</label>
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 42, $this->source); })()), "postalCode", [], "any", false, false, false, 42), 'widget');
        echo "
            </div>
            <div class=\"inputBox3\">
              <label for=\"\">I am now  ...</label>
              ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 46, $this->source); })()), "age", [], "any", false, false, false, 46), 'widget');
        echo "
              <span>years old</span>
            </div>
            <div class=\"inputBox4\">
              <label for=\"\">I am a ...</label>
              <section>
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 52, $this->source); })()), "gender", [], "any", false, false, false, 52), 'widget');
        echo "
              </section>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I speak ...</label>
              ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 57, $this->source); })()), "language", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "btn-diet"]]);
        echo "
            </div>
          </div>
          <!-- right content -->
          <div id=\"secondData\">
            <div id=\"imageBox\">
              <figure id=\"imageProfil\">
                <img src=\"../assets/img/icones/profil/profil-big.svg\" alt=\"\">
              </figure>
              <div id=\"inputFileBox\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "imageInput"]]);
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 68, $this->source); })()), "image", [], "any", false, false, false, 68), 'label');
        echo "
                <input id=\"avatar\" disabled type=\"file\" title=\"\"/>
                <label id='btnSelect' for=\"avatar\">select an avatar</label>
              </div>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I work in ...</label>
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 75, $this->source); })()), "job", [], "any", false, false, false, 75), 'widget');
        echo "
            </div>
            <div class=\"inputBox\">
              <label for=\"\">My description ...</label>
              ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'widget');
        echo "
            </div>
          </div>
        </div>
        <!-- bottom content  -->
        <div id=\"thirdData\">
          <span>My diet ...</span>
          <div>
            <div id=\"check\">
              <div class=\"btn-diet\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 89, $this->source); })()), "diet", [], "any", false, false, false, 89), 'widget');
        echo "
              </div>
              <button type=\"button\" id=\"next\">Next</button>
            </div>
          </div>
        </div>
        <!-- next content -->
        <div id=\"nextSelect\"> 
          <span>My center of interest ...</span>
          <div id=\"allCheckbox\">
              <div id=\"checkboxBox\">
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 100, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 100), 'widget');
        echo "
              </div>
          </div>
          <div class=\"nextInputText\">
            <label for=\"\">I have others ...</label>
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 105, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 105), 'widget');
        echo "
          </div>
          <div id=\"btnBox\">
            <button id=\"preview\">preview</button>
            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 109, $this->source); })()), "submit", [], "any", false, false, false, 109), 'widget');
        echo "
          </div>
        </div>
      </article>
    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
  </main>
</body>
</html>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/editProfil.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  225 => 118,  221 => 117,  214 => 113,  207 => 109,  200 => 105,  192 => 100,  178 => 89,  165 => 79,  158 => 75,  148 => 68,  144 => 67,  131 => 57,  123 => 52,  114 => 46,  107 => 42,  100 => 38,  88 => 29,  84 => 28,  69 => 15,  67 => 14,  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Profil Edit</title>
  <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/editProfil.css') }}\">
</head>
<body>
  <img id=\"mentheBG\" src=\"{{ asset('./assets/img/formes/algue-medium-menthe-gauche.svg') }}\" alt=\"\">
  <img id=\"flowerRed\" src=\"{{ asset('./assets/img/formes/marguerite-framboise.svg') }}\" alt=\"\">
  <!-- header nav bar -->
  {% include \"_header.html.twig\" %}
  <!-- container -->
  <div id='boxAvatar'>
    <div>
      <figure id='avatar1'>
        <img src=\"https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg\" alt=\"\">
      </figure>
      <figure id='avatar2'>
        <img src=\"https://static.vecteezy.com/ti/vecteur-libre/p3/5419157-profil-utilisateur-femme-avatar-est-une-femme-un-personnage-pour-un-economiseur-d-ecran-avec-emotions-illustrationle-sur-fond-blanc-isole-vectoriel.jpg\" alt=\"\">
      </figure>
    </div>
    <button id='selectAvatar'>select an avatar</button>
  </div>
  <main>
    {{ form_errors(UserForm) }}
    {{ form_start(UserForm, {'attr': {'id': 'container'}}) }}
      <article>
        <div id=\"first_second\">
          <!-- title -->
          <h1 id='title'>My profile</h1>
          <!-- left content -->
          <div id=\"firstData\">
            <div class=\"inputBox\">
              <label for=\"\">My name is ...</label>
              {{ form_widget(UserForm.username) }}
            </div>
            <div class=\"inputBox2\">
              <label for=\"\">I live in ...</label>
              {{ form_widget(UserForm.postalCode) }}
            </div>
            <div class=\"inputBox3\">
              <label for=\"\">I am now  ...</label>
              {{ form_widget(UserForm.age) }}
              <span>years old</span>
            </div>
            <div class=\"inputBox4\">
              <label for=\"\">I am a ...</label>
              <section>
                {{ form_widget(UserForm.gender) }}
              </section>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I speak ...</label>
              {{ form_widget(UserForm.language, {'attr': {'class': 'btn-diet'}}) }}
            </div>
          </div>
          <!-- right content -->
          <div id=\"secondData\">
            <div id=\"imageBox\">
              <figure id=\"imageProfil\">
                <img src=\"../assets/img/icones/profil/profil-big.svg\" alt=\"\">
              </figure>
              <div id=\"inputFileBox\">
                {{ form_widget(UserForm.image, {'attr': {'class': 'imageInput'} } ) }}
                {{ form_label(UserForm.image ) }}
                <input id=\"avatar\" disabled type=\"file\" title=\"\"/>
                <label id='btnSelect' for=\"avatar\">select an avatar</label>
              </div>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I work in ...</label>
              {{ form_widget(UserForm.job) }}
            </div>
            <div class=\"inputBox\">
              <label for=\"\">My description ...</label>
              {{ form_widget(UserForm.description) }}
            </div>
          </div>
        </div>
        <!-- bottom content  -->
        <div id=\"thirdData\">
          <span>My diet ...</span>
          <div>
            <div id=\"check\">
              <div class=\"btn-diet\">
                {{ form_widget(UserForm.diet) }}
              </div>
              <button type=\"button\" id=\"next\">Next</button>
            </div>
          </div>
        </div>
        <!-- next content -->
        <div id=\"nextSelect\"> 
          <span>My center of interest ...</span>
          <div id=\"allCheckbox\">
              <div id=\"checkboxBox\">
                {{ form_widget(UserForm.centerOfInterest) }}
              </div>
          </div>
          <div class=\"nextInputText\">
            <label for=\"\">I have others ...</label>
            {{ form_widget(UserForm.centerOfInterestPerso) }}
          </div>
          <div id=\"btnBox\">
            <button id=\"preview\">preview</button>
            {{ form_widget(UserForm.submit) }}
          </div>
        </div>
      </article>
    {{ form_end(UserForm) }}
  </main>
</body>
</html>
<script src=\"{{ asset('./assets/js/editProfil.js') }}\"></script>
<script src=\"{{ asset('./assets/js/header.js') }}\"></script>", "user_profil/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\user_profil\\index.html.twig");
    }
}
