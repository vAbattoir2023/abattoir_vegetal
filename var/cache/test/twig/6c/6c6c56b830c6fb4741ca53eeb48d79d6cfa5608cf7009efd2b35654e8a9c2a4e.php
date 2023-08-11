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
class __TwigTemplate_6957583db927c6ab5f80073c773e8d49556e5c6cb7a0bcdc9cfe8b1f85ccc426 extends Template
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
  <main>
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 17, $this->source); })()), 'errors');
        echo "
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["id" => "container"]]);
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
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), 'widget');
        echo "
            </div>
            <div class=\"inputBox2\">
              <label for=\"\">I live in ...</label>
              ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 31, $this->source); })()), "postalCode", [], "any", false, false, false, 31), 'widget');
        echo "
            </div>
            <div class=\"inputBox3\">
              <label for=\"\">I was born in  ...</label>
              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 35, $this->source); })()), "age", [], "any", false, false, false, 35), 'widget');
        echo "
            </div>
            <div class=\"inputBox4\">
              <label for=\"\">I am a ...</label>
              <section>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 40, $this->source); })()), "gender", [], "any", false, false, false, 40), 'widget');
        echo "
              </section>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I speak ...</label>
              ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 45, $this->source); })()), "language", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn-diet"]]);
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
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 55, $this->source); })()), "image", [], "any", false, false, false, 55), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 56, $this->source); })()), "image", [], "any", false, false, false, 56), 'label');
        echo "
                <input id=\"avatar\" disabled type=\"file\" title=\"\"/>
                <label for=\"avatar\">select an avatar</label>
              </div>
            </div>
            <div class=\"inputBox\">
              <label for=\"\">I work in ...</label>
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 63, $this->source); })()), "job", [], "any", false, false, false, 63), 'widget');
        echo "
            </div>
            <div class=\"inputBox\">
              <label for=\"\">My description ...</label>
              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'widget');
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
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 77, $this->source); })()), "diet", [], "any", false, false, false, 77), 'widget');
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
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 88, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 88), 'widget');
        echo "
              </div>
          </div>
          <div class=\"nextInputText\">
            <label for=\"\">I have others ...</label>
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 93, $this->source); })()), "centerOfInterestPerso", [], "any", false, false, false, 93), 'widget');
        echo "
          </div>
          <div id=\"btnBox\">
            <button id=\"preview\">preview</button>
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 97, $this->source); })()), "submit", [], "any", false, false, false, 97), 'widget');
        echo "
          </div>
        </div>
      </article>
    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UserForm"]) || array_key_exists("UserForm", $context) ? $context["UserForm"] : (function () { throw new RuntimeError('Variable "UserForm" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
    <!-- footer -->
    ";
        // line 103
        $this->loadTemplate("_footer.html.twig", "user_profil/index.html.twig", 103)->display($context);
        // line 104
        echo "  </main>
</body>
</html>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/editProfil.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "\"></script>
";
        
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
        return array (  218 => 108,  214 => 107,  209 => 104,  207 => 103,  202 => 101,  195 => 97,  188 => 93,  180 => 88,  166 => 77,  153 => 67,  146 => 63,  136 => 56,  132 => 55,  119 => 45,  111 => 40,  103 => 35,  96 => 31,  89 => 27,  77 => 18,  73 => 17,  69 => 15,  67 => 14,  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
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
              <label for=\"\">I was born in  ...</label>
              {{ form_widget(UserForm.age) }}
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
                {{ form_widget(UserForm.image) }}
                {{ form_label(UserForm.image) }}
                <input id=\"avatar\" disabled type=\"file\" title=\"\"/>
                <label for=\"avatar\">select an avatar</label>
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
    <!-- footer -->
    {% include \"_footer.html.twig\" %}
  </main>
</body>
</html>
<script src=\"{{ asset('./assets/js/editProfil.js') }}\"></script>
<script src=\"{{ asset('./assets/js/header.js') }}\"></script>
", "user_profil/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\user_profil\\index.html.twig");
    }
}
