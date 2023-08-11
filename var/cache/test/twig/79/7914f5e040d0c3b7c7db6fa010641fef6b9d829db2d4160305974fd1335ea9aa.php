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

/* Register/index.html.twig */
class __TwigTemplate_fb2862efef7c6a73d47560cdad3d9f2df0ed9d5beee0fc743cf989e5a19669e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Register/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/register.css"), "html", null, true);
        echo "\">
    <title>REGISTER</title>
</head>
<!-- body of page -->
<body>
    <!-- html background -->
    ";
        // line 13
        $this->loadTemplate("Register/background.html.twig", "Register/index.html.twig", 13)->display($context);
        // line 14
        echo "    <!-- html navbar -->
    ";
        // line 15
        $this->loadTemplate("_nav.html.twig", "Register/index.html.twig", 15)->display($context);
        // line 16
        echo "    <!-- register Box -->
    <article id=\"registerBox1\">
        <h1>register</h1>
        <div id=\"registerBox2\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 20, $this->source); })()), 'errors');
        echo "
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "inputBox"]]);
        echo "

            ";
        // line 24
        echo "              ";
        if ( !twig_test_empty((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "                <div class=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</div>
              ";
        }
        // line 27
        echo "
                <!-- email form -->
                <div class=\"input\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "input custom-input", "placeholder" => "e-mail address"]]);
        echo "
                </div>
                <!-- password form -->
                <div class=\"input\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "input custom-input", "placeholder" => "Password"]]);
        echo "
                </div>
                <div class=\"input\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "second", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "input custom-input", "placeholder" => "Confirm Password"]]);
        echo "
                </div>
                <!-- accept form -->
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 41, $this->source); })()), "terms", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "custom-checkbox"]]);
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 42, $this->source); })()), "terms", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "custom-label"], "label" => "I have read and accept the general conditions"]);
        echo "
                </div>
                <!-- register with google -->
                <figure>
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png\" alt=\"google logo\">
                    <button>register with google</button>
                </figure>
                <!-- button submit -->
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 50, $this->source); })()), "submit", [], "any", false, false, false, 50), 'widget', ["attr" => ["id" => "btn", "class" => "btn"]]);
        echo "
                 <!-- go to login page -->
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                    <span>login</span>
                </a>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
        </div>
    </article>
</body>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/navbar.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  142 => 55,  136 => 52,  131 => 50,  120 => 42,  116 => 41,  109 => 37,  103 => 34,  96 => 30,  91 => 27,  85 => 25,  82 => 24,  77 => 21,  73 => 20,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/register.css') }}\">
    <title>REGISTER</title>
</head>
<!-- body of page -->
<body>
    <!-- html background -->
    {% include \"Register/background.html.twig\" %}
    <!-- html navbar -->
    {% include \"_nav.html.twig\" %}
    <!-- register Box -->
    <article id=\"registerBox1\">
        <h1>register</h1>
        <div id=\"registerBox2\">
            {{ form_errors(FormRegister) }}
            {{ form_start(FormRegister, {'attr': {'class': 'inputBox'}}) }}

            {# Display alert message if there are any errors #}
              {% if alert is not empty %}
                <div class=\"alert\">{{ alert }}</div>
              {% endif %}

                <!-- email form -->
                <div class=\"input\">
                    {{ form_widget(FormRegister.email, {'attr': {'class': 'input custom-input', 'placeholder': 'e-mail address'}}) }}
                </div>
                <!-- password form -->
                <div class=\"input\">
                    {{ form_widget(FormRegister.password.first, {'attr': {'class': 'input custom-input', 'placeholder': 'Password'}}) }}
                </div>
                <div class=\"input\">
                    {{ form_widget(FormRegister.password.second, {'attr': {'class': 'input custom-input', 'placeholder': 'Confirm Password'}}) }}
                </div>
                <!-- accept form -->
                <div class=\"form-group\">
                    {{ form_widget(FormRegister.terms, {'attr': {'class': 'custom-checkbox'}}) }}
                    {{ form_label(FormRegister.terms, \"I have read and accept the general conditions\", {'label_attr': {'class': 'custom-label'}}) }}
                </div>
                <!-- register with google -->
                <figure>
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png\" alt=\"google logo\">
                    <button>register with google</button>
                </figure>
                <!-- button submit -->
                {{ form_widget(FormRegister.submit, {'attr': {'id': 'btn', 'class': 'btn'}}) }}
                 <!-- go to login page -->
                <a href=\"{{ path('app_login') }}\">
                    <span>login</span>
                </a>
            {{ form_end(FormRegister) }}
        </div>
    </article>
</body>
<script src=\"{{asset('./assets/js/navbar.js')}}\"></script>
</html>", "Register/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Register\\index.html.twig");
    }
}
