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

/* Login/index.html.twig */
class __TwigTemplate_16e401639f8ae4ded3b669b4f687d1a5c16aedf89462aa414908364305f8fc51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Login/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/login.css"), "html", null, true);
        echo "\">
    <title>LOGIN</title>
</head>
<!-- body of page -->
<body>
    ";
        // line 12
        $this->loadTemplate("Login/background.html.twig", "Login/index.html.twig", 12)->display($context);
        // line 13
        echo "    <!-- navbar -->
    ";
        // line 14
        $this->loadTemplate("_nav.html.twig", "Login/index.html.twig", 14)->display($context);
        // line 15
        echo "    <!-- login Box -->
    <article id=\"registerBox1\">
        <h1>login</h1>
        <div id=\"registerBox2\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 19, $this->source); })()), 'errors');
        echo "
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "inputBox"]]);
        echo "
            
             ";
        // line 23
        echo "              ";
        if ( !twig_test_empty((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                <div class=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</div>
              ";
        }
        // line 26
        echo "
                <div class=\"input\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "input custom-input", "placeholder" => "e-mail address"]]);
        echo "
                </div>        
                ";
        // line 31
        echo "                <div class=\"input\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "input custom-input", "placeholder" => "Password"]]);
        echo "
                </div>   
                ";
        // line 35
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 35, $this->source); })()), "submit", [], "any", false, false, false, 35), 'widget', ["attr" => ["id" => "btn", "class" => "btn"]]);
        echo "
                <figure>
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png\" alt=\"google logo\">
                    <button>login with google</button>
                </figure>
                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><span>Register</span></a>
             ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
        </div>
    </article>
</body>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/navbar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  120 => 41,  116 => 40,  107 => 35,  102 => 32,  99 => 31,  94 => 28,  90 => 26,  84 => 24,  81 => 23,  76 => 20,  72 => 19,  66 => 15,  64 => 14,  61 => 13,  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/login.css') }}\">
    <title>LOGIN</title>
</head>
<!-- body of page -->
<body>
    {% include \"Login/background.html.twig\" %}
    <!-- navbar -->
    {% include \"_nav.html.twig\" %}
    <!-- login Box -->
    <article id=\"registerBox1\">
        <h1>login</h1>
        <div id=\"registerBox2\">
            {{ form_errors(Form)}}
            {{ form_start(Form, {'attr': {'class': 'inputBox'}} )}}
            
             {# Display alert message if there are any errors #}
              {% if alert is not empty %}
                <div class=\"alert\">{{ alert }}</div>
              {% endif %}

                <div class=\"input\">
                    {{ form_widget(Form.email, {'attr': {'class': 'input custom-input', 'placeholder': 'e-mail address'}}) }}
                </div>        
                {# <input class=\"input\" type=\"text\" name=\"\" id=\"\" placeholder=\"Your email\"> #}
                <div class=\"input\">
                    {{ form_widget(Form.password, {'attr': {'class': 'input custom-input', 'placeholder': 'Password'}}) }}
                </div>   
                {# <input class=\"input\" type=\"text\" name=\"\" id=\"\" placeholder=\"Your password\"> #}
                {{ form_widget(Form.submit, {'attr': {'id': 'btn', 'class': 'btn'}}) }}
                <figure>
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png\" alt=\"google logo\">
                    <button>login with google</button>
                </figure>
                <a href=\"{{ path('app_register') }}\"><span>Register</span></a>
             {{ form_end(Form)}}
        </div>
    </article>
</body>
<script src=\"{{asset('./assets/js/navbar.js')}}\"></script>
{# </html>
                                {{ form_errors(Form)}}
                                   {{ form_start(Form)}}
                                <div class=\"input-mt\">
                                  {{ form_label(Form.email) }}
                                {{ form_widget(Form.email, {'attr': {'class': 'bouton-small-transparent size-connexion'}}) }}

                                  {{ form_label(Form.password) }}
                                  {{ form_widget(Form.password, {'attr': {'class': 'bouton-small-transparent size-connexion'}}) }}

                                </div>
                                <div>
                                <div class=\"d-flex row mt-5 p-5\"  style=\"padding:10px \">
                                {{ form_widget(Form.submit) }}
                                   
                                    <a href=\"{{ path('app_register') }}\" class=\"MDP-center mt-4 psmallest\">
                                        S'inscrire
                                    </a>
                                <a href=\"{{ path('app_home') }}\" class=\"MDP-center mt-4 psmallest\">
                                    Retour a l'accueil
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>  
                    </article>

                </div>
             </div>
        </div>

        {{ form_end(Form)}} #}", "Login/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Login\\index.html.twig");
    }
}
