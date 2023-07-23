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

/* Group/index.html.twig */
class __TwigTemplate_f80f8a2502d371494f0f139c3b18f9644121060e15fc8f49a97bab86c9751188 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Group/index.html.twig", 1);
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
        echo "\tGreen Meet
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

        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/mur.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
 ";
        // line 12
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "
   <div id=\"mur\" class=\"container tout mt-5\">

                <div class=\"row\">
                    <div class=\"col-12 col-md-3 conteneur filtres\">
                        <article class=\"lisere\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2>filtres</h2>
                                    <form action=\"#\" method=\"post\">
                                        <div class=\"form-filtres\">
                                            <div class=\"d-flex\"> 
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
                                            ";
        // line 26
        echo "\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-auto\"> Mes choix </h4>
                                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userFromBdd"]) || array_key_exists("userFromBdd", $context) ? $context["userFromBdd"] : (function () { throw new RuntimeError('Variable "userFromBdd" does not exist.', 27, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
                                                  <p class=\"badge text-bg-success\">
                                                   ";
            // line 30
            echo twig_escape_filter($this->env, $context["interest"], "html", null, true);
            echo "  
                                                  </p>               
                                                </div>
                                            ";
            // line 34
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-auto\">centre d'intérêts -</h4>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataFormCheckbox"]) || array_key_exists("dataFormCheckbox", $context) ? $context["dataFormCheckbox"] : (function () { throw new RuntimeError('Variable "dataFormCheckbox" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formData"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            echo "                                                    <input  name=\"";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" type=\"checkbox\" id=\"checkbox_";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" name=\"checkbox_";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" data-filter=\"";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" class=\"filter-checkbox\">
\t\t\t\t\t\t\t                            <label  class=\"form-check-label me-auto label_checkbox\" for=\"checkbox_";
            // line 42
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t\t\t\t\t\t</fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                            
                                   <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resa_date");
        echo "\" class=\"ms-2 bouton-small-transparent reduire p-2 \">reserver</a>
                            </div>
                        </article>
                    </div>

                    <div class=\"col-md-9 defile-card d-flex row g-0\">
                    <div class=\"container ms-5 \">
                    
                            <h1 class=\"somanyfriends ms-5 mt-5\">so many friends...</h1>
                      
                       <div class=\"container\">
                                  ";
        // line 64
        echo "
                         <ul class=\"d-flex row\" id=\"users_list\">

                         </ul>
                        </div>    


                        </div>
                        </div>

                    </div>
                </div> 
            </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/createGroup.js"), "html", null, true);
        echo "\"></script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 81,  213 => 64,  199 => 52,  190 => 45,  179 => 42,  168 => 41,  165 => 38,  161 => 37,  158 => 36,  151 => 34,  145 => 30,  141 => 28,  137 => 27,  134 => 26,  118 => 12,  115 => 11,  105 => 10,  92 => 7,  82 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title  %}
\tGreen Meet
{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('./assets/css/mur.css')}}\">
{% endblock %}

{% block body %}

 {{ include('_header.html.twig') }}
   <div id=\"mur\" class=\"container tout mt-5\">

                <div class=\"row\">
                    <div class=\"col-12 col-md-3 conteneur filtres\">
                        <article class=\"lisere\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2>filtres</h2>
                                    <form action=\"#\" method=\"post\">
                                        <div class=\"form-filtres\">
                                            <div class=\"d-flex\"> 
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
                                            {# Matth retour des centres d'interest de l'user CSS modifier #}
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-auto\"> Mes choix </h4>
                                            {% for interest in userFromBdd.centerOfInterest %}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
                                                  <p class=\"badge text-bg-success\">
                                                   {{ interest }}  
                                                  </p>               
                                                </div>
                                            {# Fin du retour des centres d'interest de l'user  #}

\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-auto\">centre d'intérêts -</h4>
\t\t\t\t\t\t\t\t\t\t\t{% for formData in dataFormCheckbox %}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <input class=\"form-check-input\"  name=\"{{ formData }}\" type=\"checkbox\" id=\"checkbox_{{ formData }}\" name=\"checkbox_{{ formData }}\" data-filter=\"{{formData}}\" class=\"filter-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_{{ formData }}  class=\"form-check-label me-auto\"\">{{ formData }}</label> #}
                                                    <input  name=\"{{ formData }}\" type=\"checkbox\" id=\"checkbox_{{ formData }}\" name=\"checkbox_{{ formData }}\" data-filter=\"{{formData}}\" class=\"filter-checkbox\">
\t\t\t\t\t\t\t                            <label  class=\"form-check-label me-auto label_checkbox\" for=\"checkbox_{{ formData }}\">{{ formData }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                            
                                   <a href=\"{{ path('app_resa_date') }}\" class=\"ms-2 bouton-small-transparent reduire p-2 \">reserver</a>
                            </div>
                        </article>
                    </div>

                    <div class=\"col-md-9 defile-card d-flex row g-0\">
                    <div class=\"container ms-5 \">
                    
                            <h1 class=\"somanyfriends ms-5 mt-5\">so many friends...</h1>
                      
                       <div class=\"container\">
                                  {# <button type='submit' id=\"addGroup\">add group</button> #}

                         <ul class=\"d-flex row\" id=\"users_list\">

                         </ul>
                        </div>    


                        </div>
                        </div>

                    </div>
                </div> 
            </div>


{% endblock %}

{% block javascripts %}<script src=\"{{ asset('./assets/js/createGroup.js')}}\"></script> {% endblock %}", "Group/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\Group\\index.html.twig");
    }
}
