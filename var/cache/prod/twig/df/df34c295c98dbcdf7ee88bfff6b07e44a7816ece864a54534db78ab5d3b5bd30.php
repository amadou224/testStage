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

/* royalpalace/royalpalacereservation.html.twig */
class __TwigTemplate_4c3457d575231235770af0903b7f8785bafd505114cfe38f6c2cce58818a83cd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "royalpalace/royalpalacereservation.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"stylesheets/base.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        // line 17
        echo "

<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/logo_royal_palace.jpg\">
    </div>

    <a href=\"/horairesTarifs\" class=\"mt-3\">Consultez les horaires et les tarifs <i class=\"far fa-clock fa-lg\"></i></a>

    <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Faites votre réservation</h1>
        <hr class=\"py-3\">

        <div class=\"d-flex justify-content-center\">
            <div class=\"col-md-6 mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerSimple\" value=\"\"
                           onclick=\"AllerSimple()\">
                    <label class=\"form-check-label\" for=\"\">
                        Aller simple <i class=\"fas fa-arrow-right\"></i>
                    </label>
                </div>
            </div>
            <div class=\"col-md-6 mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerRetour\" value=\"\"
                           onclick=\"AllerRetour()\">
                    <label class=\"form-check-label\" for=\"\">
                        Aller / retour <i class=\"fas fa-arrows-alt-h\"></i>
                    </label>
                </div>
            </div>
        </div>

        <div style=\"display: none;\" id=\"FormAllerSimple\">
            <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationAller");
        echo "\"
                  novalidate>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\" onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"2\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination_aller\" required>
                                <option value=\"1\">Royal Palace</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Nombre de Passager</label>
                            <select class=\"form-control\" id=\"nb_passager_aller\" name=\"nb_passager_aller\" required>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>

                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart_aller\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horraire_depart_aller\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\" >
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                            <label for=\"\" >Point de prise</label>
                            <select class=\"form-control\" name=\"pdp_aller\" onclick=\"Domicile()\" id=\"pdp\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse ...\" name=\"adresse_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Code postal ...\" name=\"cp_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville ...\" name=\"ville_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays_aller\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>

                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
            </form>
        </div>

        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\" onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"Bruxelle\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destinaton\" required>
                                <option value=\"Strasbourg\">Royal Palace</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div>
                            <label for=\"\">Nombre de Passager</label>
                            <select class=\"form-control\" name=\"nb_passager_1\" required>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div>
                            <label for=\"\">Nombre de Passager</label>
                            <select class=\"form-control\" name=\"nb_passager_2\" value=\"pareil\" required>
                                <option value=\"undefined\">Pareil</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de retour</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_retour\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horraire_depart\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de retour fixées par la société</label>
                            <select class=\"form-control\" name=\"horraire_retour\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise2\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp\" onclick=\"DomicileAllerRetour()\" id=\"pdp2\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile2\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse...\" name=\"adresse\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville...\" name=\"cp\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pays...\" name=\"ville\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>
                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
            </form>
        </div>

    </div>






    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
";
    }

    // line 414
    public function block_javascripts($context, array $blocks = [])
    {
        // line 415
        echo "
    <script src=\"javascript/reservationAeroport.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "royalpalace/royalpalacereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 415,  476 => 414,  255 => 196,  108 => 52,  71 => 17,  68 => 16,  62 => 12,  59 => 11,  50 => 4,  47 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "royalpalace/royalpalacereservation.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/royalpalace/royalpalacereservation.html.twig");
    }
}
