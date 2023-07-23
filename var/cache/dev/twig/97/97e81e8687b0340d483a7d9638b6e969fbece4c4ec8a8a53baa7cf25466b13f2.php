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

/* _header.html.twig */
class __TwigTemplate_f8723b72df4a4ccaa568bf419ecc3cf573462e4316ad06b1b62753f41bacb846 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo " <header>

        <nav class=\"d-flex justify-content-between header01\">
            <div class=\"d-flex\"> <!-- MENU BURGER -->
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"../assets/img/icones/menuburger/menu-burger-dark.svg\" alt=\"\"></a>
            </div>

            <a id=\"logo\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"> <!-- LOGO -->
                <img src=\"../assets/img/logo/abattoir-vegetal-logo-medium-dark.svg\" alt=\"Logo yogasaloon\">
            </a>

            <div class=\"d-flex\">
                <a class=\"iconeheader me-2\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil_success");
        echo "\"><img class=\"test\" src=\"../assets/img/icones/profil/profil-small-light.svg\"
                        alt=\"\"></a>
                <a class=\"iconeheader me-2\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-resa\"><img src=\"../assets/img/icones/notifications/notification-small-light.svg\"
                        alt=\"\"></a>
                <a class=\"iconeheader\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_resa");
        echo "\"><img src=\"../assets/img/icones/reservation/reservation-small-light.svg\"
                        alt=\"\"></a>
            </div>

        </nav>
    </header class=\"mb-3\">

     <!-- Modal resa-->
    <div class=\"modal fade\" id=\"modal-resa\" tabindex=\"-1\" aria-labelledby=\"ModalResaLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content justify-content-center d-flex \">

                <div class=\"modal-header mx-auto position-relative\">
                    <h1 class=\"modal-title fs-5\" id=\"ModalResaLabel\">Et voilà ta résa</h1>
                    
                    <!-- Je sais pas comment enlever la croix que bootstrap a mise -->
                    <button type=\"button\" class=\"btn-close position-absolute croix-close-modal-resa\"
                        data-bs-dismiss=\"modal\" aria-label=\"Close\"><img
                            src=\"../assets/img/icones/croix/croix-fleur-orange-small.svg\" alt=\"\"></button>
                </div>

                <div class=\"container g-0\">
                    <div class=\"modal-body mx-auto row z-1\">
                        <div id=\"droite\" class=\"offset-1 col col-md-4\">
                            <div class=\"mb-3\">
                                <h4 class=\"mb-1\">12h00</h4>
                                <p class=\"tag mb-1\">Jeudi 13/07/2023</p>
                                <a href=\"#\" class=\"psmall\">Changer ma résa</a>
                            </div>
                            <div class=\"liste-amis mb-3\">
                                <h4>Avec...</h4>
                                <div class=\"d-flex\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-girl.jpg\" alt=\"\">
                                    <p>Violette</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man.jpg\"
                                        alt=\"\">
                                    <p>Alexis</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man2.jpg\"
                                        alt=\"\">
                                    <p>Marc</p>
                                </div>
                            </div>
                            🥜 <a href=\"#\">J'ai des restrictions alimentaires</a>
                        </div>
                        <div id=\"gauche\" class=\"col offset-1 col-md-5\">
                            <div class=\"iframe mb-3\"><iframe
                                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4362.6634304986555!2d2.331097211773408!3d48.85346635862052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671738178460b%3A0xeecc055bfcf89fea!2zQWJhdHRvaXIgdsOpZ8OpdGFs!5e0!3m2!1sen!2sfr!4v1689942015940!5m2!1sen!2sfr\"
                                    width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe></div>
                            <div>
                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/localisation.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">9 rue Guisarde 75006 Paris</p>
                                </div>

                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 incons-contact\" src=\"../assets/img/icones/infos-contact/telephone.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">09.83.54.56.76</p>
                                </div>

                                <div class=\"d-flex align-items-center\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/mail.svg\" alt=\"\">
                                    <p class=\"psmallest tag\">mail@abattoirvegetal.fr</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class=\"position-absolute feuille-modal-resa z-2\"
                        src=\"assets/formes/feuille-small-sapin-endroit.svg\" alt=\"\">
                    <div class=\"modal-resa-footer position-relative z-3\">

                        <button type=\"button\" class=\"btn btn-secondary bouton btn-annuler btn-sous\"
                            data-bs-dismiss=\"modal\">Annuler</button>

                        <button type=\"button\" class=\"btn btn-secondary bouton-dark btn-sous\"
                            data-bs-dismiss=\"modal\">Valider</button>

                    </div>
                </div>


            </div>

        </div>

    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  63 => 13,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <header>

        <nav class=\"d-flex justify-content-between header01\">
            <div class=\"d-flex\"> <!-- MENU BURGER -->
                <a href=\"{{ path('app_home') }}\"><img src=\"../assets/img/icones/menuburger/menu-burger-dark.svg\" alt=\"\"></a>
            </div>

            <a id=\"logo\" href=\"{{ path('app_home') }}\"> <!-- LOGO -->
                <img src=\"../assets/img/logo/abattoir-vegetal-logo-medium-dark.svg\" alt=\"Logo yogasaloon\">
            </a>

            <div class=\"d-flex\">
                <a class=\"iconeheader me-2\" href=\"{{ path('app_user_profil_success') }}\"><img class=\"test\" src=\"../assets/img/icones/profil/profil-small-light.svg\"
                        alt=\"\"></a>
                <a class=\"iconeheader me-2\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-resa\"><img src=\"../assets/img/icones/notifications/notification-small-light.svg\"
                        alt=\"\"></a>
                <a class=\"iconeheader\" href=\"{{ path('app_get_resa') }}\"><img src=\"../assets/img/icones/reservation/reservation-small-light.svg\"
                        alt=\"\"></a>
            </div>

        </nav>
    </header class=\"mb-3\">

     <!-- Modal resa-->
    <div class=\"modal fade\" id=\"modal-resa\" tabindex=\"-1\" aria-labelledby=\"ModalResaLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content justify-content-center d-flex \">

                <div class=\"modal-header mx-auto position-relative\">
                    <h1 class=\"modal-title fs-5\" id=\"ModalResaLabel\">Et voilà ta résa</h1>
                    
                    <!-- Je sais pas comment enlever la croix que bootstrap a mise -->
                    <button type=\"button\" class=\"btn-close position-absolute croix-close-modal-resa\"
                        data-bs-dismiss=\"modal\" aria-label=\"Close\"><img
                            src=\"../assets/img/icones/croix/croix-fleur-orange-small.svg\" alt=\"\"></button>
                </div>

                <div class=\"container g-0\">
                    <div class=\"modal-body mx-auto row z-1\">
                        <div id=\"droite\" class=\"offset-1 col col-md-4\">
                            <div class=\"mb-3\">
                                <h4 class=\"mb-1\">12h00</h4>
                                <p class=\"tag mb-1\">Jeudi 13/07/2023</p>
                                <a href=\"#\" class=\"psmall\">Changer ma résa</a>
                            </div>
                            <div class=\"liste-amis mb-3\">
                                <h4>Avec...</h4>
                                <div class=\"d-flex\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-girl.jpg\" alt=\"\">
                                    <p>Violette</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man.jpg\"
                                        alt=\"\">
                                    <p>Alexis</p>
                                </div>
                                <div class=\"d-flex mt-2\"><img class=\"me-2 image-ami\" src=\"../assets/img/happy-man2.jpg\"
                                        alt=\"\">
                                    <p>Marc</p>
                                </div>
                            </div>
                            🥜 <a href=\"#\">J'ai des restrictions alimentaires</a>
                        </div>
                        <div id=\"gauche\" class=\"col offset-1 col-md-5\">
                            <div class=\"iframe mb-3\"><iframe
                                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4362.6634304986555!2d2.331097211773408!3d48.85346635862052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671738178460b%3A0xeecc055bfcf89fea!2zQWJhdHRvaXIgdsOpZ8OpdGFs!5e0!3m2!1sen!2sfr!4v1689942015940!5m2!1sen!2sfr\"
                                    width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe></div>
                            <div>
                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/localisation.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">9 rue Guisarde 75006 Paris</p>
                                </div>

                                <div class=\"d-flex align-items-center mb-3\">
                                    <img class=\"me-2 incons-contact\" src=\"../assets/img/icones/infos-contact/telephone.svg\"
                                        alt=\"\">
                                    <p class=\"psmallest tag\">09.83.54.56.76</p>
                                </div>

                                <div class=\"d-flex align-items-center\">
                                    <img class=\"me-2 icons-contact\" src=\"../assets/img/icones/infos-contact/mail.svg\" alt=\"\">
                                    <p class=\"psmallest tag\">mail@abattoirvegetal.fr</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class=\"position-absolute feuille-modal-resa z-2\"
                        src=\"assets/formes/feuille-small-sapin-endroit.svg\" alt=\"\">
                    <div class=\"modal-resa-footer position-relative z-3\">

                        <button type=\"button\" class=\"btn btn-secondary bouton btn-annuler btn-sous\"
                            data-bs-dismiss=\"modal\">Annuler</button>

                        <button type=\"button\" class=\"btn btn-secondary bouton-dark btn-sous\"
                            data-bs-dismiss=\"modal\">Valider</button>

                    </div>
                </div>


            </div>

        </div>

    </div>", "_header.html.twig", "C:\\wamp64\\www\\projet\\php\\Nouveau dossier\\abattoir_vegetal\\templates\\_header.html.twig");
    }
}
