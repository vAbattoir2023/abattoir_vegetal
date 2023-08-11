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
class __TwigTemplate_afae54a17b63e6ca968a09d36cd9f44ff8e5bde2e54488e4ca357290bee69daa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reservation</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/css/reservation.css"), "html", null, true);
        echo "\">
</head>
<body>
    <!-- header nav bar -->
    ";
        // line 12
        $this->loadTemplate("_header.html.twig", "reservation/index.html.twig", 12)->display($context);
        // line 13
        echo "    <!-- container -->
    <div id=\"container\">
        <!-- main -->
        <main>
            <div id=\"reservationBox\">
                <div id=\"reservationHeader\">
                    <h1>My reservations</h1>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_group");
        echo "\">Gimme a friend</a>
                </div>
                <div id=\"Reservations\">
                    ";
        // line 24
        echo "                    ";
        $context["color"] = "";
        // line 25
        echo "                    ";
        $context["colorData"] = "";
        // line 26
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allReservation"]) || array_key_exists("allReservation", $context) ? $context["allReservation"] : (function () { throw new RuntimeError('Variable "allReservation" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 27
            echo "                        <!-- set color -->
                        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "authors", [], "any", false, false, false, 28) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()))) {
                $context["color"] = "#00f3a6";
            }
            echo " 
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "guests", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 30
                echo "                            <!-- set color -->
                            ";
                // line 31
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 31) == "refuse"))) {
                    $context["color"] = "red";
                    $context["colorData"] = "red";
                }
                // line 32
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 32) == "accept"))) {
                    $context["color"] = "#00f3a6";
                    $context["colorData"] = "#00f3a6";
                }
                // line 33
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 33) == "waiting"))) {
                    $context["color"] = "grey";
                    $context["colorData"] = "#FF6C27";
                }
                // line 34
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        <article>
                            <div class='firstData'>
                                <figure><div style='background-color: ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "'></div></figure>
                                <div id=\"dateBox\">
                                    <strong>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createGroupDate", [], "any", false, false, false, 39), "m/d/Y"), "html", null, true);
            echo "</strong>
                                </div>
                            </div>
                            <div class=\"dataContainer\">
                                <section class=\"dataHeader\">
                                    <h2 style='color: ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["colorData"]) || array_key_exists("colorData", $context) ? $context["colorData"] : (function () { throw new RuntimeError('Variable "colorData" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createGroupDate", [], "any", false, false, false, 44), "m/d/Y"), "html", null, true);
            echo "</h2> <span>12h00</span>
                                    <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/icones/croix/croix-noire-big.svg"), "html", null, true);
            echo "\" alt=\"\">
                                </section>
                                <section class=\"dataMidle\">
                                    <div class=\"firstMiddle\">
                                        <h4>Who eats ?</h4>
                                        <span>";
            // line 50
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "guests", [], "any", false, false, false, 50)), "html", null, true);
            echo " Peoples</span>
                                    </div>
                                    <div class=\"secondMiddle\">
                                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "guests", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 54
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 54), "image", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                    </div>
                                </section>
                                <section class=\"dataFooter\">
                                    <div class=\"dataBonus\">
                                        <h6 style='color: ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["colorData"]) || array_key_exists("colorData", $context) ? $context["colorData"] : (function () { throw new RuntimeError('Variable "colorData" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "authors", [], "any", false, false, false, 60), "html", null, true);
            echo " t'as invité à manger</h6>
                                        <div class=\"usersFooter\">
                                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "guests", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 63
                echo "                                                <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
                echo " <span>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 63), "html", null, true);
                echo ")</span></span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                        </div>
                                    </div>
                                    <div class=\"btn\">
                                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "guests", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 69
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guest"], "guest", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 69, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 69) == "waiting"))) {
                    // line 70
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_Invitation", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 70), "bool" => "true"]), "html", null, true);
                    echo "\">comfirm</a>
                                            <a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_Invitation", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 71), "bool" => "false"]), "html", null, true);
                    echo "\">declin</a>
                                        ";
                }
                // line 73
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                    </div>
                                </section>
                            </div>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </div>
            </div>
        </main>
        <!-- footer -->
        ";
        // line 83
        $this->loadTemplate("_footer.html.twig", "reservation/index.html.twig", 83)->display($context);
        // line 84
        echo "    </div>
</body>
</html>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/reservation.js"), "html", null, true);
        echo "\"></script>
<script src='";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/header.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  259 => 88,  255 => 87,  250 => 84,  248 => 83,  242 => 79,  232 => 74,  226 => 73,  221 => 71,  216 => 70,  213 => 69,  209 => 68,  204 => 65,  193 => 63,  189 => 62,  182 => 60,  176 => 56,  167 => 54,  163 => 53,  157 => 50,  149 => 45,  143 => 44,  135 => 39,  130 => 37,  126 => 35,  120 => 34,  114 => 33,  108 => 32,  103 => 31,  100 => 30,  96 => 29,  90 => 28,  87 => 27,  82 => 26,  79 => 25,  76 => 24,  70 => 20,  61 => 13,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reservation</title>
    <link rel=\"stylesheet\" href=\"{{ asset('./assets/css/reservation.css') }}\">
</head>
<body>
    <!-- header nav bar -->
    {% include \"_header.html.twig\" %}
    <!-- container -->
    <div id=\"container\">
        <!-- main -->
        <main>
            <div id=\"reservationBox\">
                <div id=\"reservationHeader\">
                    <h1>My reservations</h1>
                    <a href=\"{{ path('app_select_group') }}\">Gimme a friend</a>
                </div>
                <div id=\"Reservations\">
                    {# <div class=\"loader\"></div> #}
                    {% set color = '' %}
                    {% set colorData = '' %}
                    {% for group in allReservation %}
                        <!-- set color -->
                        {% if group.authors == username  %}{% set color = '#00f3a6' %}{% endif %} 
                        {% for guest in group.guests %}
                            <!-- set color -->
                            {% if guest.guest.id == id and guest.invitation == 'refuse'  %}{% set color = 'red' %}{% set colorData = 'red' %}{% endif %}
                            {% if guest.guest.id == id and guest.invitation == 'accept'  %}{% set color = '#00f3a6'%}{% set colorData = '#00f3a6' %}{% endif %}
                            {% if guest.guest.id == id and guest.invitation == 'waiting'  %}{% set color = 'grey'%}{% set colorData = '#FF6C27' %}{% endif %}
                        {% endfor %}
                        <article>
                            <div class='firstData'>
                                <figure><div style='background-color: {{color}}'></div></figure>
                                <div id=\"dateBox\">
                                    <strong>{{group.createGroupDate|date(\"m/d/Y\")}}</strong>
                                </div>
                            </div>
                            <div class=\"dataContainer\">
                                <section class=\"dataHeader\">
                                    <h2 style='color: {{colorData}}'>{{group.createGroupDate|date(\"m/d/Y\")}}</h2> <span>12h00</span>
                                    <img src=\"{{ asset('./assets/img/icones/croix/croix-noire-big.svg') }}\" alt=\"\">
                                </section>
                                <section class=\"dataMidle\">
                                    <div class=\"firstMiddle\">
                                        <h4>Who eats ?</h4>
                                        <span>{{group.guests|length}} Peoples</span>
                                    </div>
                                    <div class=\"secondMiddle\">
                                        {% for guest in group.guests %}
                                            <img src=\"{{guest.guest.image}}\" alt=\"\">
                                        {% endfor %}
                                    </div>
                                </section>
                                <section class=\"dataFooter\">
                                    <div class=\"dataBonus\">
                                        <h6 style='color: {{colorData}}'>{{group.authors}} t'as invité à manger</h6>
                                        <div class=\"usersFooter\">
                                            {% for guest in group.guests %}
                                                <span>{{guest.guest.username}} <span>({{guest.invitation}})</span></span>
                                            {% endfor %}
                                        </div>
                                    </div>
                                    <div class=\"btn\">
                                    {% for guest in group.guests %}
                                        {% if guest.guest.id == id and guest.invitation == 'waiting'  %}
                                            <a href=\"{{ path('accept_Invitation', { 'id': group.id, 'bool': 'true' }) }}\">comfirm</a>
                                            <a href=\"{{ path('accept_Invitation', { 'id': group.id, 'bool': 'false' }) }}\">declin</a>
                                        {% endif %}
                                    {% endfor %}
                                    </div>
                                </section>
                            </div>
                        </article>
                    {% endfor %}
                </div>
            </div>
        </main>
        <!-- footer -->
        {% include \"_footer.html.twig\" %}
    </div>
</body>
</html>
<script src=\"{{ asset('./assets/js/reservation.js') }}\"></script>
<script src='{{ asset('./assets/js/header.js') }}'></script>
", "reservation/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\reservation\\index.html.twig");
    }
}
