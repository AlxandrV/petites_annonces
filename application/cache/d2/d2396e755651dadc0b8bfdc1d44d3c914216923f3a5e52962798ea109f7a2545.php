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

/* header.html.twig */
class __TwigTemplate_894c3fcc387ac53293bd43a523a6e17fe0f49030357e050a5998f06746dcafcd extends Template
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
        echo "<header>
    <div id=\"first\" class=\"d-flex justify-content-between align-items-center\">
        <div id=\"logo\"><img src=\"../../public/media/computer.png\" alt=\"Logo\" width=\"256\" height=\"256\"></div>
        <button class=\"btn\">Poster une annonce</button>
    </div>
    <div id=\"secondary\" class=\"container d-flex justify-content-around\">
        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Rechercher\">
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégorie</button>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <button class=\"dropdown-item\" type=\"button\">Catégorie1</button>
              <button class=\"dropdown-item\" type=\"button\">Catégorie2</button>
              <button class=\"dropdown-item\" type=\"button\">Catégorie3</button>
            </div>
          </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div id=\"first\" class=\"d-flex justify-content-between align-items-center\">
        <div id=\"logo\"><img src=\"../../public/media/computer.png\" alt=\"Logo\" width=\"256\" height=\"256\"></div>
        <button class=\"btn\">Poster une annonce</button>
    </div>
    <div id=\"secondary\" class=\"container d-flex justify-content-around\">
        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Rechercher\">
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégorie</button>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <button class=\"dropdown-item\" type=\"button\">Catégorie1</button>
              <button class=\"dropdown-item\" type=\"button\">Catégorie2</button>
              <button class=\"dropdown-item\" type=\"button\">Catégorie3</button>
            </div>
          </div>
    </div>
</header>", "header.html.twig", "/var/www/html/application/templates/header.html.twig");
    }
}
