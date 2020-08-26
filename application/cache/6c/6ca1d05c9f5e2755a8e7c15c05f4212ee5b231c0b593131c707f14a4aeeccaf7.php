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

/* modal_add.html.twig */
class __TwigTemplate_a1ae9763e4958acd21ab90bddfbf5087774ae40418d2cd37752b890e6cc8d97d extends Template
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
        // line 1
        echo "<div id=\"modalAdd\" class=\"modalAdd\">
    <form>
        <div class=\"modalDescription\">
            <div class=\"userDescription\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Mes couilles\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"En ski\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"email\">Adresse mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"mescouillesenski@example.com\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"phone\">Numéro de téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" placeholder=\"0164346007\">
                </div>
            </div>
    
            <div class=\"postDescription\">
    
            </div>
        </div>
        
        <div class=\"modalPost\">
            <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
            <input class=\"btn btn-primary\" type=\"button\" value=\"Poster l'annonce\">    
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "modal_add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAdd\" class=\"modalAdd\">
    <form>
        <div class=\"modalDescription\">
            <div class=\"userDescription\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Mes couilles\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"En ski\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"email\">Adresse mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"mescouillesenski@example.com\">
                </div>
    
                <div class=\"form-group\">
                    <label for=\"phone\">Numéro de téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" placeholder=\"0164346007\">
                </div>
            </div>
    
            <div class=\"postDescription\">
    
            </div>
        </div>
        
        <div class=\"modalPost\">
            <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
            <input class=\"btn btn-primary\" type=\"button\" value=\"Poster l'annonce\">    
        </div>
    </form>
</div>", "modal_add.html.twig", "/var/www/html/application/templates/modal_add.html.twig");
    }
}
