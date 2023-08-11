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

/* Admin/reservation.html.twig */
class __TwigTemplate_83da6988fdadbaae48242fb0105fe9741548d49258af6b9a8d1d3e91d2f84a8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reservation.html.twig"));

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
        $this->loadTemplate("Admin/_adminNav.html.twig", "Admin/reservation.html.twig", 22)->display($context);
        // line 23
        echo "
<section class=\"container\">

<!-- MAIN -->
<main>
    <div class=\"head-title\">
        <div class=\"left\">
            <h1>Réservations</h1>
            
        </div>

    </div>

 
    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Liste des groupes</h3>
        </div>
    <table>
        <thead>
            <tr>
                <th>status</th>
                <th>Autheur</th>
                <th>créée le</th>
                <th>actions</th>
                <th>Groupe</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["groups"]);
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
            // line 54
            echo "            <tr>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "status", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "authors", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                 <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groups"], "createdAt", [], "any", false, false, false, 57), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groups"], "guests", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 61
                echo "                        <li class=\"bg-secondary text-light mb-2 p-3\">
                            <strong>Guest:</strong> ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guest"], "username", [], "any", false, false, false, 62), "html", null, true);
                echo "<br>
                             Invitation:  ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guest"], "invitation", [], "any", false, false, false, 63), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </ul>
            </td>
                <td >
                       ";
            // line 71
            echo "            ";
            echo twig_include($this->env, $context, "Admin/_grpdelete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </tbody>
    </table>
</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/admin.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 89,  190 => 79,  181 => 75,  163 => 71,  158 => 66,  149 => 63,  145 => 62,  142 => 61,  138 => 60,  132 => 57,  128 => 56,  124 => 55,  121 => 54,  103 => 53,  71 => 23,  69 => 22,  51 => 7,  43 => 1,);
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
            <h1>Réservations</h1>
            
        </div>

    </div>

 
    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Liste des groupes</h3>
        </div>
    <table>
        <thead>
            <tr>
                <th>status</th>
                <th>Autheur</th>
                <th>créée le</th>
                <th>actions</th>
                <th>Groupe</th>
            </tr>
        </thead>
        <tbody>
        {% for groups in groups %}
            <tr>
                <td>{{ groups.status }}</td>
                <td>{{ groups.authors }}</td>
                 <td>{{ groups.createdAt|date('Y-m-d H:i:s') }}</td>
            <td>
                <ul>
                    {% for guest in groups.guests %}
                        <li class=\"bg-secondary text-light mb-2 p-3\">
                            <strong>Guest:</strong> {{ guest.username }}<br>
                             Invitation:  {{ guest.invitation }}
                        </li>
                    {% endfor %}
                </ul>
            </td>
                <td >
                       {# <a href=\"{{ path('app_admin_show', {'id': groups.id}) }}\" class=\"btn btn-primary fa fa-eye \"></a>
                         <a href=\"{{ path('app_admin_edit', {'id': user.id}) }}\" class=\"btn btn-primary fa fa-edit me-3 ms-3\"></a>  #}
            {{ include('Admin/_grpdelete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"{{asset('./assets/js/admin.js')}}\"></script>

</html>
", "Admin/reservation.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Admin\\reservation.html.twig");
    }
}
