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
class __TwigTemplate_21182eafe64ecb2f05c5bac07e786c81fe64219e13b458790396b764a11db275 extends Template
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
        echo " <footer class=\"mt-5\">

        <div class=\"container\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"d-flex flex-column justify-content-between\">
                    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img src=\"../assets/img/logo/abattoir-vegetal-logo-small-light.svg\" alt=\"\">
                    </a>

                    <div>
                        <p> <a class=\"lienresto\" href=\"#\"> Rive droite</a></p>
                        <p> <a class=\"lienresto\" href=\"#\"> Rive gauche</a></p>
                    </div>
                </div>


                <div>
                    <h3>Newsletter</h3>
                    <p> Promis, que des nouvelles ultra fraîches !</p>


                    <div>
                        <p>Votre adresse email</p>
                        <div class=\"d-flex justify-content-between align-items-baseline\">
                            <div>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                    aria-describedby=\"emailHelp\">
                            </div>

                            <div>
                                <a class=\"bouton-smallest-white ml-2\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">je m'inscris</a>
                            </div>
                    
                    


                </div>

                <div class=\"d-flex flex-column justify-content-between\">
                    <p> <a class=\"lien\" href=\"#\"> Nos partenaires</a></p>
                    <p> <a class=\"lien\" href=\"#\"> Rejoins l’équipe</a></p>
                    <p> <a class=\"lien\" href=\"#\">Ils nous kiffent</a></p>
                    <p> <a class=\"lien\" href=\"#\"> Mentions légales</a></p>
                </div>
            </div>


        </div>
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
        return array (  78 => 31,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <footer class=\"mt-5\">

        <div class=\"container\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"d-flex flex-column justify-content-between\">
                    <a href=\"{{ path('app_home') }}\">
                        <img src=\"../assets/img/logo/abattoir-vegetal-logo-small-light.svg\" alt=\"\">
                    </a>

                    <div>
                        <p> <a class=\"lienresto\" href=\"#\"> Rive droite</a></p>
                        <p> <a class=\"lienresto\" href=\"#\"> Rive gauche</a></p>
                    </div>
                </div>


                <div>
                    <h3>Newsletter</h3>
                    <p> Promis, que des nouvelles ultra fraîches !</p>


                    <div>
                        <p>Votre adresse email</p>
                        <div class=\"d-flex justify-content-between align-items-baseline\">
                            <div>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                    aria-describedby=\"emailHelp\">
                            </div>

                            <div>
                                <a class=\"bouton-smallest-white ml-2\" href=\"{{ path('app_register') }}\">je m'inscris</a>
                            </div>
                    
                    


                </div>

                <div class=\"d-flex flex-column justify-content-between\">
                    <p> <a class=\"lien\" href=\"#\"> Nos partenaires</a></p>
                    <p> <a class=\"lien\" href=\"#\"> Rejoins l’équipe</a></p>
                    <p> <a class=\"lien\" href=\"#\">Ils nous kiffent</a></p>
                    <p> <a class=\"lien\" href=\"#\"> Mentions légales</a></p>
                </div>
            </div>


        </div>
    </footer>", "_footer.html.twig", "C:\\wamp64\\www\\projet\\Symfony\\abattoir_vegetal-Eze\\templates\\_footer.html.twig");
    }
}
