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

/* Admin/index.html.twig */
class __TwigTemplate_25f2fbfa0420807fd60081d04836e2ecbc33bcb9aacf513078ca02209c6f89e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

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
        $this->loadTemplate("Admin/_adminNav.html.twig", "Admin/index.html.twig", 22)->display($context);
        // line 23
        echo "
<section class=\"container\">

<!-- MAIN -->
<main>
    <div class=\"head-title\">
        <div class=\"left\">
            <h1>Utilisateurs</h1>
            
        </div>

    </div>

    <!-- <ul class=\"box-info\">
        <li>
            <i class='bx bxs-calendar-check' ></i>
            <span class=\"text\">
                <h3>1020</h3>
                <p>Utilisateurs</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group' ></i>
            <span class=\"text\">
                <h3>2834</h3>
                <p>API Users</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle' ></i>
            <span class=\"text\">
                <h3>\$2543</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul> -->


    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Liste des utilisateurs</h3>
        </div>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>username</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 76
            echo "            <tr>
                <td>
                    <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 78), "html", null, true);
            echo "\" alt=\"\">
                    ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 79), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
                    ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 83), "html", null, true);
            echo "
                    </a>
                </td>
                <td style=\"display:flex;\">
                    <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"bx bx-edit\"></a> 
                    <form method=\"post\" action=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89))), "html", null, true);
            echo "\">
                        <a class=\"bx bxs-trash\"></a>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </tbody>
    </table>
\t</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/admin.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 109,  183 => 99,  174 => 95,  163 => 89,  159 => 88,  155 => 87,  148 => 83,  144 => 82,  138 => 79,  134 => 78,  130 => 76,  125 => 75,  71 => 23,  69 => 22,  51 => 7,  43 => 1,);
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
            <h1>Utilisateurs</h1>
            
        </div>

    </div>

    <!-- <ul class=\"box-info\">
        <li>
            <i class='bx bxs-calendar-check' ></i>
            <span class=\"text\">
                <h3>1020</h3>
                <p>Utilisateurs</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group' ></i>
            <span class=\"text\">
                <h3>2834</h3>
                <p>API Users</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle' ></i>
            <span class=\"text\">
                <h3>\$2543</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul> -->


    <div class=\"table-data\">
    <div class=\"order\">
        <div class=\"head\">
            <h3>Liste des utilisateurs</h3>
        </div>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>username</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>
                    <img src=\"{{ user.image }}\" alt=\"\">
                    {{ user.email }}
                </td>
                <td>
                    <a href=\"{{ path('app_admin_show', {'id': user.id}) }}\">
                    {{ user.username }}
                    </a>
                </td>
                <td style=\"display:flex;\">
                    <a href=\"{{ path('app_admin_edit', {'id': user.id}) }}\" class=\"bx bx-edit\"></a> 
                    <form method=\"post\" action=\"{{ path('app_admin_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                        <a class=\"bx bxs-trash\"></a>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
\t</div>
\t\t\t
\t\t\t</div>
\t\t</main>
\t\t<!-- MAIN -->
\t</section>
\t<!-- CONTENT -->
</body>
<script src=\"{{asset('./assets/js/admin.js')}}\"></script>

</html>
", "Admin/index.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\abattoir_vegetal-Eze\\templates\\Admin\\index.html.twig");
    }
}
