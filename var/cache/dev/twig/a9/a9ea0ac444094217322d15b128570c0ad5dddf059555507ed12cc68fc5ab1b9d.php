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

/* _footer.html.twig */
class __TwigTemplate_2df2e64b095558b96a3884d4ca34bf124bb65655113e1f352ead371a1baa14c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<!-- footer -->
<footer>
\t<div id=\"footerContent\">
\t\t<div id=\"firstContent\">
\t\t\t<figure>
\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/img/logo/abattoir-vegetal-logo-small-light.svg"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t</figure>
\t\t\t<div>
\t\t\t\t<span>content right</span>
\t\t\t\t<span>content left</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"midleContent\">
\t\t\t<h3>newsletter</h3><br>
\t\t\t<span>Promis, que des nouvelles ultra fraîches !</span>
\t\t\t<div>
\t\t\t\t<input placeholder=\"your email\" type=\"text\" name=\"\" id=\"\">
\t\t\t\t<button>I want to register</button>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"thirdContent\">
\t\t\t<span>our partners</span>
\t\t\t<span>join the team</span>
\t\t\t<span>he loves us</span>
\t\t\t<span>legal notices</span>
\t\t</div>
\t</div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer -->
<footer>
\t<div id=\"footerContent\">
\t\t<div id=\"firstContent\">
\t\t\t<figure>
\t\t\t\t<img src=\"{{ asset('./assets/img/logo/abattoir-vegetal-logo-small-light.svg')}}\" alt=\"logo\">
\t\t\t</figure>
\t\t\t<div>
\t\t\t\t<span>content right</span>
\t\t\t\t<span>content left</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"midleContent\">
\t\t\t<h3>newsletter</h3><br>
\t\t\t<span>Promis, que des nouvelles ultra fraîches !</span>
\t\t\t<div>
\t\t\t\t<input placeholder=\"your email\" type=\"text\" name=\"\" id=\"\">
\t\t\t\t<button>I want to register</button>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"thirdContent\">
\t\t\t<span>our partners</span>
\t\t\t<span>join the team</span>
\t\t\t<span>he loves us</span>
\t\t\t<span>legal notices</span>
\t\t</div>
\t</div>
</footer>", "_footer.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\FINAL\\DEPLOY\\abattoir_vegetal-MatthFin\\templates\\_footer.html.twig");
    }
}
