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
class __TwigTemplate_7d18fb78d4f568b2c9b9672b932d65800902bc6276f841af702e3f8c71ad3013 extends Template
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
        echo "<ul>
    <button type='submit' id=\"addGroup\">add group</button>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "        <li id=\"allIdUser\">
            <p>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>
            <button id=\"idUser\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 6), "html", null, true);
            echo "\">aa</button>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        
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
        return array (  67 => 9,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <button type='submit' id=\"addGroup\">add group</button>
    {% for user in users %}
        <li id=\"allIdUser\">
            <p>{{user.username}}</p>
            <button id=\"idUser\" value=\"{{user.id}}\">aa</button>
        </li>
    {% endfor %}
</ul>
{#   
    {% for user in users %}
  <!-- User Card -->
      <li class=\"col-2\" style=\"margin-right : 135px;list-style-type: none;\">

     <div class=\"card mt-5 mb-5 card-user\" style=\"width: 15rem; \">
        <img class=\"card-img-top\" src=\"{{ user.image }}\" alt=\"Card image cap\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ user.username }}</h5>
            <!-- Display user's language flags -->
            {% for languageCode in user.language %}
                <img src=\"https://www.countryflagicons.com/SHINY/32/{{ languageCode }}.png\" alt=\"{{ languageCode }}\">
            {% endfor %}

            <div class=\"row\">
                <div class=\"col-8 infos-contact\">
                    <p class=\"tag mt-3\"><i class=\"fa-solid fa-location-dot\"></i> {{ user.city }}</p>
                    <p class=\"tag mt-2\"><i class=\"fa-solid fa-cake-candles\"></i> {{ user.age }}</p>
                    <p class=\"tag mt-2\"><i class=\"fa-solid fa-transgender\"></i> {{ user.gender }}</p>
                </div>

                <div class=\"col-4 tag-prefs\">
                    <div class=\"tag-menthe d-flex flex-column align-items-end mt-3\">
                        <p class=\"tag-menthe-small psmall tag\">{{ user.centerOfInterestPerso }}</p>
                    </div>
                </div>
            </div>

            <!-- Accordion -->
                    <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingOne\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
                                 <h4>  +  DE DETAILS </h4> 
                        </button>
                    </h2>
                <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
                    <div class=\"accordion-body\">
                                  <div class=\"d-flex row\">
                                <p class=\"pbold mt-4\">J'aime...</p> <br>
                                <div class=\"col d-flex align-items-start flex-wrap\">
                                    <!-- Display user's interests -->
                                    {% for interest in user.centerOfInterest %}
                                        <p class=\"border ms-3 p-3 border-danger\">{{ interest }}</p>
                                    {% endfor %}
                                </div>
                            </div>
                            <p class=\"card-text\">
                                <p class=\"col-12 citation\">« {{ user.description }} »</p>
                            </p>
                            <p class=\"pbold mt-4\">Je refuse...</p>
                            <div class=\"col d-flex align-items-start flex-wrap\">
                                <p class=\"tag-jaune-small psmall   mb-1.25\">Racistes</p>
                                <p class=\"tag-jaune-small psmall    mb-1.25\">Vegans</p>
                                <p class=\"tag-jaune-small psmall  \">Jeux d'argent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion -->
            <a href=\"#\" class=\"ms-2 bouton-small-transparent reduire\">gimme this friend</a>
        </div>
      </div>
    </li>
    <!-- End User Card -->
     {% endfor %}
 
  #}
", "Group/usersList.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\Group\\usersList.html.twig");
    }
}
