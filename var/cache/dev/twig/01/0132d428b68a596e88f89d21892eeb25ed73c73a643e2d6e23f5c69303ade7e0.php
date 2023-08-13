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

/* Group/usersList.html.twig */
class __TwigTemplate_74a716f63d492b114352483e13df06940647974943b8a395ceeea60949a0f87b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/usersList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Group/usersList.html.twig"));

        // line 1
        echo "<h6>so many <br> friends ... <br> </h6>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 3
            echo "<article>
    <figure>
        <img class=\"img-thumbnail\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"headUser\">
    </figure>
    <div class=\"info\">
        <div class=\"firstData\">
            <strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 9), 0, 10), "html", null, true);
            echo "</strong>
            <figure>
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "language", [], "any", false, false, false, 11), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["languageCode"]) {
                // line 12
                echo "                <img src=\"https://www.countryflagicons.com/SHINY/32/";
                echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $context["languageCode"], "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languageCode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </figure>
        </div>
        <div class=\"secondData\">
            <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "age", [], "any", false, false, false, 17), "html", null, true);
            echo " Yo</span>
            <span>";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 18), 0, 15), "html", null, true);
            echo "</span>
        </div>
        <div class=\"thirdData\">
            <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "description", [], "any", false, false, false, 21), 0, 152), "html", null, true);
            echo "...</p>
        </div>
        <div class=\"quarterData\">
            <button id=\"idUser\" value='";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "'>Gimme this friend</button>
        </div>
    </div>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Group/usersList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  96 => 21,  90 => 18,  86 => 17,  81 => 14,  70 => 12,  66 => 11,  61 => 9,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h6>so many <br> friends ... <br> </h6>
{% for user in users %}
<article>
    <figure>
        <img class=\"img-thumbnail\" src=\"{{ user.image }}\" alt=\"headUser\">
    </figure>
    <div class=\"info\">
        <div class=\"firstData\">
            <strong>{{ user.username|slice(0,10) }}</strong>
            <figure>
                {% for languageCode in user.language|slice(0,2) %}
                <img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }}\">
                {% endfor %}
            </figure>
        </div>
        <div class=\"secondData\">
            <span>{{ user.age }} Yo</span>
            <span>{{ user.city|slice(0,15) }}</span>
        </div>
        <div class=\"thirdData\">
            <p>{{ user.description|slice(0,152) }}...</p>
        </div>
        <div class=\"quarterData\">
            <button id=\"idUser\" value='{{ user.id }}'>Gimme this friend</button>
        </div>
    </div>
</article>
{% endfor %}
", "Group/usersList.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\Group\\usersList.html.twig");
    }
}
