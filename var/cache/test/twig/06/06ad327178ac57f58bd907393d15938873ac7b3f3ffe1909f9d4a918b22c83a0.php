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

/* Admin/apiuser.html.twig */
class __TwigTemplate_88c530d6b0cf4db91a0db40ac68f01c974fe4ae5168ce338b57e1892188f3175 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/apiuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/apiuser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/admin.css"), "html", null, true);
        echo "\">

      <!-- font -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Gasoek+One&family=Work+Sans:wght@400;600;700;800;900&display=swap\" rel=\"stylesheet\">
\t<!-- Boxicons -->
\t<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

\t<title>ADMIN</title>
</head>
<!-- body of page -->
<body>


    ";
        // line 22
        $this->loadTemplate("Admin/_adminNav.html.twig", "Admin/apiuser.html.twig", 22)->display($context);
        // line 23
        echo "
<section class=\"container\">


<!-- MAIN -->
<main>
    <div class=\"head-title\">
        <div class=\"left\">
            <h1>API</h1>
            
        </div>

    </div>

 
    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Création des API users en base de donnée</h3>
        </div>
   

 ";
        // line 45
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)) > 0)) {
            // line 46
            echo "        <div class=\"alert-danger\">
            ";
            // line 48
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "postalCode", [], "any", false, false, false, 48), 'errors');
            echo "
        </div>
    ";
        }
        // line 51
        echo "     
    <div  class=\"formApi\">
    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'widget');
        echo "
    <button class=\"btnApi\" type=\"submit\">Enregistrer</button>
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/admin.js"), "html", null, true);
        echo "\"></script>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/apiuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 66,  120 => 56,  115 => 54,  111 => 53,  107 => 51,  100 => 48,  97 => 46,  95 => 45,  71 => 23,  69 => 22,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"{{asset('./assets/css/admin.css')}}\">

      <!-- font -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Gasoek+One&family=Work+Sans:wght@400;600;700;800;900&display=swap\" rel=\"stylesheet\">
\t<!-- Boxicons -->
\t<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

\t<title>ADMIN</title>
</head>
<!-- body of page -->
<body>


    {% include \"Admin/_adminNav.html.twig\" %}

<section class=\"container\">


<!-- MAIN -->
<main>
    <div class=\"head-title\">
        <div class=\"left\">
            <h1>API</h1>
            
        </div>

    </div>

 
    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Création des API users en base de donnée</h3>
        </div>
   

 {% if form.vars.errors|length > 0 %}
        <div class=\"alert-danger\">
            {# Afficher les messages d'erreur associés au champ \"postalCode\" #}
            {{ form_errors(form.postalCode) }}
        </div>
    {% endif %}
     
    <div  class=\"formApi\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btnApi\" type=\"submit\">Enregistrer</button>
    {{ form_end(form) }}
    </div>
</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"{{asset('./assets/js/admin.js')}}\"></script>

</html>", "Admin/apiuser.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Admin\\apiuser.html.twig");
    }
}
