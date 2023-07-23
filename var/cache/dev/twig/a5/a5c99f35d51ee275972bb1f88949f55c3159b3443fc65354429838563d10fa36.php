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
class __TwigTemplate_c26a411b53d3c3ac6f802acfe3466ffec7aec1cd85fbc0bdf20a00a9d8d3abcd extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Register/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Register User ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/auth.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 7, $this->source); })())) > 1)) {
            // line 8
            echo "        <div class='alert alert-danger'>";
            echo twig_escape_filter($this->env, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
     <div class=\"container  \" >

       
            <div class=\"row\">
               
                <div class=\"col-12 col-md-6\">
                 <h1 class=\"titre-connexion\"  >
                    s'inscrire</h1>
                   
                    <article id=\"card-connexion\" class=\"card-connexion offset-6 \">
                    
                        
                        <div class=\"card-liseret\">
                            <div>

    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 26, $this->source); })()), 'errors');
        echo "
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                                <div class=\"input-mt\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label');
        echo "
                                     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "bouton-small-transparent size-connexion"]]);
        echo "

                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "bouton-small-transparent size-connexion mt-2"]]);
        echo "

                                    <p class=\"MDP-center psmallest  mt-4\">
                                       ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 35, $this->source); })()), "terms", [], "any", false, false, false, 35), 'widget');
        echo "
                                      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 36, $this->source); })()), "terms", [], "any", false, false, false, 36), 'label');
        echo "

                                            <a href=\"#\" class=\"MDP-center-2\" style=\"text-decoration:none\">conditions
                                                générales d'utilisation
                                            </a>
                                    </p>
                                </div>
                                <div>
                                   ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 44, $this->source); })()), "submit", [], "any", false, false, false, 44), 'widget');
        echo "
                                        
                                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"     class=\"bouton-small-transparent size-bouton mt-4 mb-3\">
                                        VOUS AVEZ DEJA UN COMPTE ?
                                    </a> 
                                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"MDP-center mt-4 psmallest\">
                                    Retour a l'accueil
                                    </a>
                                </div>

                            </div>
                        </div>
                    </article>
                 
                </div>
             </div>
        </div>
          
        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormRegister"]) || array_key_exists("FormRegister", $context) ? $context["FormRegister"] : (function () { throw new RuntimeError('Variable "FormRegister" does not exist.', 62, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  217 => 66,  204 => 62,  188 => 49,  182 => 46,  177 => 44,  166 => 36,  162 => 35,  156 => 32,  151 => 30,  147 => 29,  142 => 27,  138 => 26,  120 => 10,  114 => 8,  111 => 7,  101 => 6,  80 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title  %} Register User {% endblock %}

{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('./assets/css/auth.css')}}\">{% endblock %}

{% block body %}
    {% if alert|length >1  %}
        <div class='alert alert-danger'>{{ alert }}</div>
    {% endif  %}

     <div class=\"container  \" >

       
            <div class=\"row\">
               
                <div class=\"col-12 col-md-6\">
                 <h1 class=\"titre-connexion\"  >
                    s'inscrire</h1>
                   
                    <article id=\"card-connexion\" class=\"card-connexion offset-6 \">
                    
                        
                        <div class=\"card-liseret\">
                            <div>

    {{ form_errors(FormRegister)}}
        {{ form_start(FormRegister)}}
                                <div class=\"input-mt\">
                                    {{ form_label(FormRegister.email) }}
                                     {{ form_widget(FormRegister.email, {'attr': {'class': 'bouton-small-transparent size-connexion'}}) }}

                                    {{ form_row(FormRegister.password, {'attr': {'class': 'bouton-small-transparent size-connexion mt-2'}}) }}

                                    <p class=\"MDP-center psmallest  mt-4\">
                                       {{ form_widget(FormRegister.terms) }}
                                      {{ form_label(FormRegister.terms) }}

                                            <a href=\"#\" class=\"MDP-center-2\" style=\"text-decoration:none\">conditions
                                                générales d'utilisation
                                            </a>
                                    </p>
                                </div>
                                <div>
                                   {{ form_widget(FormRegister.submit) }}
                                        
                                    <a href=\"{{ path('app_login') }}\"     class=\"bouton-small-transparent size-bouton mt-4 mb-3\">
                                        VOUS AVEZ DEJA UN COMPTE ?
                                    </a> 
                                    <a href=\"{{ path('app_home') }}\" class=\"MDP-center mt-4 psmallest\">
                                    Retour a l'accueil
                                    </a>
                                </div>

                            </div>
                        </div>
                    </article>
                 
                </div>
             </div>
        </div>
          
        {{ form_end(FormRegister)}}

{% endblock %}

{% block javascript %}
{% endblock %}
", "Register/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\Register\\index.html.twig");
    }
}
