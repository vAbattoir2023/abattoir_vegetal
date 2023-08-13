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
class __TwigTemplate_e484f69484af88b060f82963e45b094b18648ce72da273d972a566a9005e6908 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/selectGroup.css"), "html", null, true);
        echo "\">
    <title>SELECT USERS</title>
</head>
<body>
\t<!-- header nav bar -->
\t";
        // line 12
        $this->loadTemplate("_header.html.twig", "Group/index.html.twig", 12)->display($context);
        // line 13
        echo "
    <!-- contianer users and checkbox -->
    <div id=\"container\">

        <!-- checkbox -->
        <div id=\"inputBox\" >
            <div id=\"subtitle\" class=\"filter\">
                <h1>Filter</h1>
            </div>
            <div id=\"allCenterIfInterest\">
                <div id=\"subtitle\">
                    <h3>Center of interest</h3>
                </div>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataFormCheckbox"]) || array_key_exists("dataFormCheckbox", $context) ? $context["dataFormCheckbox"] : (function () { throw new RuntimeError('Variable "dataFormCheckbox" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formData"]) {
            // line 27
            echo "\t\t\t\t<div>
\t\t\t\t\t<label class=\"form-check-label me-auto label_checkbox\" for=\"checkbox_";
            // line 28
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "</label>
\t\t\t\t\t<input name=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" type=\"checkbox\" id=\"checkbox_";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" name=\"checkbox_";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" data-filter=\"";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\" class=\"filter-checkbox\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
            <input id=\"datePicker\" type=\"date\" name=\"datePicker\">
            <button type='submit' id=\"addGroup\">Réserver Maintenant</button>
        </div>

        <!-- all users -->
        <main id='allUsers'>
            <div id='loaded'>
                <!-- load animation -->
                <span class=\"loader\"></span>
            </div>
        </main>

\t\t<!-- footer -->
\t\t";
        // line 46
        $this->loadTemplate("_footer.html.twig", "Group/index.html.twig", 46)->display($context);
        // line 47
        echo "    </div>
    
\t<script src='";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "'></script>
\t<script src='";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/createGroup.js"), "html", null, true);
        echo "'></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  130 => 50,  126 => 49,  122 => 47,  120 => 46,  104 => 32,  89 => 29,  83 => 28,  80 => 27,  76 => 26,  61 => 13,  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"{{ asset('./assets/css/selectGroup.css') }}\">
    <title>SELECT USERS</title>
</head>
<body>
\t<!-- header nav bar -->
\t{% include \"_header.html.twig\" %}

    <!-- contianer users and checkbox -->
    <div id=\"container\">

        <!-- checkbox -->
        <div id=\"inputBox\" >
            <div id=\"subtitle\" class=\"filter\">
                <h1>Filter</h1>
            </div>
            <div id=\"allCenterIfInterest\">
                <div id=\"subtitle\">
                    <h3>Center of interest</h3>
                </div>
\t\t\t\t{% for formData in dataFormCheckbox %}
\t\t\t\t<div>
\t\t\t\t\t<label class=\"form-check-label me-auto label_checkbox\" for=\"checkbox_{{ formData }}\">{{ formData }}</label>
\t\t\t\t\t<input name=\"{{ formData }}\" type=\"checkbox\" id=\"checkbox_{{ formData }}\" name=\"checkbox_{{ formData }}\" data-filter=\"{{formData}}\" class=\"filter-checkbox\">
\t\t\t\t</div>
\t\t\t\t{% endfor %}
            </div>
            <input id=\"datePicker\" type=\"date\" name=\"datePicker\">
            <button type='submit' id=\"addGroup\">Réserver Maintenant</button>
        </div>

        <!-- all users -->
        <main id='allUsers'>
            <div id='loaded'>
                <!-- load animation -->
                <span class=\"loader\"></span>
            </div>
        </main>

\t\t<!-- footer -->
\t\t{% include \"_footer.html.twig\" %}
    </div>
    
\t<script src='{{ asset('./assets/js/header.js') }}'></script>
\t<script src='{{ asset('./assets/js/createGroup.js') }}'></script>
</body>
</html>", "Group/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\Group\\index.html.twig");
    }
}
