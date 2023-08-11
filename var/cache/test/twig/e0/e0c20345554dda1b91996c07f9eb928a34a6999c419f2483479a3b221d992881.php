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
class __TwigTemplate_870b6771e38273e8bd326b35b98bada05cee05891c1d255957c70fee5359076f extends Template
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
        <div id=\"inputBox\">
            <div id=\"subtitle\">
                <h1>Filter</h1>
            </div>
            <div id=\"allCenterIfInterest\">
                <div id=\"subtitle\">
                    <h3>Centre of interest</h3>
                </div>
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataFormCheckbox"]) || array_key_exists("dataFormCheckbox", $context) ? $context["dataFormCheckbox"] : (function () { throw new RuntimeError('Variable "dataFormCheckbox" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formData"]) {
            // line 26
            echo "\t\t\t\t<div>
\t\t\t\t\t<label class=\"form-check-label me-auto label_checkbox\" for=\"checkbox_";
            // line 27
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["formData"], "html", null, true);
            echo "</label>
\t\t\t\t\t<input name=\"";
            // line 28
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
        // line 31
        echo "            </div>
            <input id=\"datePicker\" type=\"date\" name=\"datePicker\">
            <button type='submit' id=\"addGroup\">Réserver Maintenant</button>
        </div>
        <!-- all users -->
        <main id='allUsers'>
\t\t    <h6>so many <br> friends ... <br> </h6>
\t\t    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "\t\t\t<article>
                <figure>
                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"headUser\">
                </figure>
                <div class=\"info\">
                    <div class=\"firstData\">
                        <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong>
                        <figure>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "language", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["languageCode"]) {
                // line 48
                echo "                \t\t\t<img src=\"https://www.countryflagicons.com/SHINY/32/";
                echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
                echo "\">
            \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languageCode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </figure>
                    </div>
                    <div class=\"secondData\">
                        <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "age", [], "any", false, false, false, 53), "html", null, true);
            echo " yo</span>
                        <span>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 54), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"thirdData\">
                        <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "description", [], "any", false, false, false, 57), 0, 100), "html", null, true);
            echo "...</p>
                    </div>
                    <div class=\"quarterData\">
                        <button id=\"idUser\" value='";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "'>Gimme this friend</button>
                    </div>
                </div>
            </article>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </main>
\t\t<!-- footer -->
\t\t";
        // line 67
        $this->loadTemplate("_footer.html.twig", "Group/index.html.twig", 67)->display($context);
        // line 68
        echo "    </div>
\t<script src='";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "'></script>
\t<script src='";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/createGroup.js"), "html", null, true);
        echo "'></script>
</body>
</html>
";
        
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
        return array (  192 => 70,  188 => 69,  185 => 68,  183 => 67,  179 => 65,  168 => 60,  162 => 57,  156 => 54,  152 => 53,  147 => 50,  136 => 48,  132 => 47,  127 => 45,  120 => 41,  116 => 39,  112 => 38,  103 => 31,  88 => 28,  82 => 27,  79 => 26,  75 => 25,  61 => 13,  59 => 12,  51 => 7,  43 => 1,);
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
        <div id=\"inputBox\">
            <div id=\"subtitle\">
                <h1>Filter</h1>
            </div>
            <div id=\"allCenterIfInterest\">
                <div id=\"subtitle\">
                    <h3>Centre of interest</h3>
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
\t\t    <h6>so many <br> friends ... <br> </h6>
\t\t    {% for user in users %}
\t\t\t<article>
                <figure>
                    <img src=\"{{ user.image }}\" alt=\"headUser\">
                </figure>
                <div class=\"info\">
                    <div class=\"firstData\">
                        <strong>{{ user.username }}</strong>
                        <figure>
                            {% for languageCode in user.language %}
                \t\t\t<img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }}\">
            \t\t\t\t{% endfor %}
                        </figure>
                    </div>
                    <div class=\"secondData\">
                        <span>{{ user.age }} yo</span>
                        <span>{{ user.city }}</span>
                    </div>
                    <div class=\"thirdData\">
                        <p>{{ user.description|slice(0,100) }}...</p>
                    </div>
                    <div class=\"quarterData\">
                        <button id=\"idUser\" value='{{ user.id }}'>Gimme this friend</button>
                    </div>
                </div>
            </article>
\t\t\t{% endfor %}
        </main>
\t\t<!-- footer -->
\t\t{% include \"_footer.html.twig\" %}
    </div>
\t<script src='{{ asset('./assets/js/header.js') }}'></script>
\t<script src='{{ asset('./assets/js/createGroup.js') }}'></script>
</body>
</html>
", "Group/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Group\\index.html.twig");
    }
}
