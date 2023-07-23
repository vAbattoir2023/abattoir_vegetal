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

/* reservation/index.html.twig */
class __TwigTemplate_bd05cdc0679a9c29d9025d01054bcdcbe5c0284c4f6b747b70f78eba155b4223 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        echo " Reservation ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/reservation.css"), "html", null, true);
        echo "\"> ";
        
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
        echo "<form action=\"\">
    <fieldset>
        <legend>centre d'intérêts</legend>

        <div>
        <input name=\"animaux\" type=\"checkbox\" id=\"checkbox_animaux\" name=\"checkbox_animaux\" class=\"filter-checkbox\" >
        <label for=\"checkbox_animaux\">Animaux</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_environnement\" class=\"filter-checkbox\"  value=\"id2\" >
        <label for=\"checkbox_environnement\">Environnement</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_jeuxVideos\" class=\"filter-checkbox\"  value=\"id3\"  >
        <label for=\"checkbox_jeuxVideos\">Jeux vidéos</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_artEtCulture\" class=\"filter-checkbox\"  value=\"id4\"  >
        <label for=\"checkbox_artEtCulture\">Art et Culture</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_sport\" class=\"filter-checkbox\"  value=\"id5\"  >
        <label for=\"checkbox_sport\">Sport</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_voyage\" class=\"filter-checkbox\"  value=\"id6\"  >
        <label for=\"checkbox_voyage\">Voyage</label>
        </div>

        <div>
        <input  type=\"checkbox\" id=\"checkbox_musique\" class=\"filter-checkbox\"  value=\"id7\"  >
        <label for=\"checkbox_musique\">Musique</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_danse\" class=\"filter-checkbox\"  value=\"id8\"  >
        <label for=\"checkbox_danse\">Danse</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_sciences\" class=\"filter-checkbox\"  value=\"id9\" >
        <label for=\"checkbox_sciences\">Sciences</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_bien_etre\" class=\"filter-checkbox\"  value=\"id10\"  >
        <label for=\"checkbox_bien-etre\">Bien-etre</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_food\" class=\"filter-checkbox\"  value=\"id11\" name=\"food\" >
        <label for=\"checkbox_food\">Food</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_activitesSociales\" class=\"filter-checkbox\"  value=\"id12\" name=\"activites-sociales\" >
        <label for=\"checkbox_activitesSociales\">Activités sociales</label>
        </div>
    </fieldset>
    <button>recherche</button>
</form>
<div id=\"checkbox_users\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 7,  100 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title  %} Reservation {% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('./assets/css/reservation.css') }}\"> {% endblock %}

{% block body %}
<form action=\"\">
    <fieldset>
        <legend>centre d'intérêts</legend>

        <div>
        <input name=\"animaux\" type=\"checkbox\" id=\"checkbox_animaux\" name=\"checkbox_animaux\" class=\"filter-checkbox\" >
        <label for=\"checkbox_animaux\">Animaux</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_environnement\" class=\"filter-checkbox\"  value=\"id2\" >
        <label for=\"checkbox_environnement\">Environnement</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_jeuxVideos\" class=\"filter-checkbox\"  value=\"id3\"  >
        <label for=\"checkbox_jeuxVideos\">Jeux vidéos</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_artEtCulture\" class=\"filter-checkbox\"  value=\"id4\"  >
        <label for=\"checkbox_artEtCulture\">Art et Culture</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_sport\" class=\"filter-checkbox\"  value=\"id5\"  >
        <label for=\"checkbox_sport\">Sport</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_voyage\" class=\"filter-checkbox\"  value=\"id6\"  >
        <label for=\"checkbox_voyage\">Voyage</label>
        </div>

        <div>
        <input  type=\"checkbox\" id=\"checkbox_musique\" class=\"filter-checkbox\"  value=\"id7\"  >
        <label for=\"checkbox_musique\">Musique</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_danse\" class=\"filter-checkbox\"  value=\"id8\"  >
        <label for=\"checkbox_danse\">Danse</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_sciences\" class=\"filter-checkbox\"  value=\"id9\" >
        <label for=\"checkbox_sciences\">Sciences</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_bien_etre\" class=\"filter-checkbox\"  value=\"id10\"  >
        <label for=\"checkbox_bien-etre\">Bien-etre</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_food\" class=\"filter-checkbox\"  value=\"id11\" name=\"food\" >
        <label for=\"checkbox_food\">Food</label>
        </div>

        <div>
        <input type=\"checkbox\" id=\"checkbox_activitesSociales\" class=\"filter-checkbox\"  value=\"id12\" name=\"activites-sociales\" >
        <label for=\"checkbox_activitesSociales\">Activités sociales</label>
        </div>
    </fieldset>
    <button>recherche</button>
</form>
<div id=\"checkbox_users\"></div>

{% endblock %}", "reservation/index.html.twig", "C:\\wamp64\\www\\projet\\php\\Nouveau dossier\\abattoir_vegetal\\templates\\reservation\\index.html.twig");
    }
}
