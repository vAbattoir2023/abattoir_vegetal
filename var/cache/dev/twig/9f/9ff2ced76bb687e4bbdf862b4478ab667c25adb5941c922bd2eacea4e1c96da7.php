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

/* user_profil/profil.html.twig */
class __TwigTemplate_cf32ed43bbf92c2837abed030c036ac81c23cc92cc7ade30740cb10eb8c8d224 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profil/profil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/myProfil.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <title>PROFIL</title>
</head>
<body>
    <!-- background element -->
    <figure id=\"yellowBackground\" ></figure>
    <!-- header nav bar -->
    ";
        // line 15
        $this->loadTemplate("_header.html.twig", "user_profil/profil.html.twig", 15)->display($context);
        // line 16
        echo "    <main>
        <div id=\"mainHeader\">
            <h1>My informations</h1>
            <figure></figure>
        </div>
        <div id=\"userContent\">
            <article id=\"userCard\">
                <figure>
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), "html", null, true);
        echo "\" alt=\"\">
                </figure>
                <div class=\"info\">
                    <div class=\"firstData\">
                        <strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), 0, 8), "html", null, true);
        echo "</strong>
                        <figure>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "language", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["flag"]) {
            // line 31
            echo "                              <img id='flag' src=\"https://www.countryflagicons.com/SHINY/32/";
            echo twig_escape_filter($this->env, $context["flag"], "html", null, true);
            echo ".png\" alt=\"fr\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </figure>
                    </div>
                    <div class=\"secondData\">
                        <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "age", [], "any", false, false, false, 36), "html", null, true);
        echo " yo</span>
                        <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "postalCode", [], "any", false, false, false, 37), 0, 10), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"thirdData\">
                        <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 0, 115), "html", null, true);
        echo "...</p>
                    </div>
                    <div class=\"quarterData\">
                        <button>My profil's data</button>
                    </div>
                </div>
            </article>
            <div id='userData'>
                <a>";
        // line 48
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "username", [], "any", false, false, false, 48), 0, 8), "html", null, true);
        echo " <i class=\"fa fa-address-card\" aria-hidden=\"true\"></i></a>
                <a>";
        // line 49
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "job", [], "any", false, false, false, 49), 0, 13), "html", null, true);
        echo "... <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i></a>
                <a>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "age", [], "any", false, false, false, 50), "html", null, true);
        echo " years old <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></a>
                <a>";
        // line 51
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "postalCode", [], "any", false, false, false, 51), 0, 12), "html", null, true);
        echo "...<i class=\"fa-solid fa-map-pin\"></i></a>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
        echo "\">Edit profil <i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i></a>
            </div>
        </div>
        <div id=\"footerData\">
            <span>";
        // line 56
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "username", [], "any", false, false, false, 56), 0, 8), "html", null, true);
        echo "</span>
            <span>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "age", [], "any", false, false, false, 57), "html", null, true);
        echo " years old</span>
            <span>|</span>
            <span>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
        echo "</span>
            <span>********</span>
            <span id=\"btn\">change password</span>
        </div>
    </main>
    <!-- background element -->
    <figure id=\"flower\" >
        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/formes/algue-medium-sapin-gauche.svg"), "html", null, true);
        echo "\" alt=\"\">
    </figure>
    <!-- footer -->
    ";
        // line 69
        $this->loadTemplate("_footer.html.twig", "user_profil/profil.html.twig", 69)->display($context);
        // line 70
        echo "</body>
</html>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user_profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 72,  175 => 70,  173 => 69,  167 => 66,  157 => 59,  152 => 57,  148 => 56,  141 => 52,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  114 => 40,  108 => 37,  104 => 36,  99 => 33,  90 => 31,  86 => 30,  81 => 28,  74 => 24,  64 => 16,  62 => 15,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/myProfil.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <title>PROFIL</title>
</head>
<body>
    <!-- background element -->
    <figure id=\"yellowBackground\" ></figure>
    <!-- header nav bar -->
    {% include \"_header.html.twig\" %}
    <main>
        <div id=\"mainHeader\">
            <h1>My informations</h1>
            <figure></figure>
        </div>
        <div id=\"userContent\">
            <article id=\"userCard\">
                <figure>
                    <img src=\"{{user.image}}\" alt=\"\">
                </figure>
                <div class=\"info\">
                    <div class=\"firstData\">
                        <strong>{{user.username|slice(0,8)}}</strong>
                        <figure>
                            {% for flag in user.language %}
                              <img id='flag' src=\"https://www.countryflagicons.com/SHINY/32/{{flag}}.png\" alt=\"fr\">
                            {% endfor %}
                        </figure>
                    </div>
                    <div class=\"secondData\">
                        <span>{{user.age}} yo</span>
                        <span>{{user.postalCode|slice(0,10)}}</span>
                    </div>
                    <div class=\"thirdData\">
                        <p>{{user.description|slice(0,115)}}...</p>
                    </div>
                    <div class=\"quarterData\">
                        <button>My profil's data</button>
                    </div>
                </div>
            </article>
            <div id='userData'>
                <a>{{user.username|slice(0,8)}} <i class=\"fa fa-address-card\" aria-hidden=\"true\"></i></a>
                <a>{{user.job|slice(0,13)}}... <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i></a>
                <a>{{user.age}} years old <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></a>
                <a>{{user.postalCode|slice(0,12)}}...<i class=\"fa-solid fa-map-pin\"></i></a>
                <a href=\"{{ path('app_user_profil') }}\">Edit profil <i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i></a>
            </div>
        </div>
        <div id=\"footerData\">
            <span>{{user.username|slice(0,8)}}</span>
            <span>{{user.age}} years old</span>
            <span>|</span>
            <span>{{user.email}}</span>
            <span>********</span>
            <span id=\"btn\">change password</span>
        </div>
    </main>
    <!-- background element -->
    <figure id=\"flower\" >
        <img src=\"{{ asset('./assets/img/formes/algue-medium-sapin-gauche.svg') }}\" alt=\"\">
    </figure>
    <!-- footer -->
    {% include \"_footer.html.twig\" %}
</body>
</html>
<script src=\"{{ asset('./assets/js/header.js') }}\"></script>", "user_profil/profil.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\user_profil\\profil.html.twig");
    }
}
