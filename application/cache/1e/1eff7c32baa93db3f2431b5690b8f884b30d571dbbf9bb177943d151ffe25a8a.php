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

/* product.html.twig */
class __TwigTemplate_d65876a31213f3a2c40dd4bb1bacacbe6df7f04b438105b62116422169f66d42 extends Template
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
        echo "<div class=\"product\">
    <div><img src=\"media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product\">
    <div><img src=\"media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>
</div>", "product.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\product.html.twig");
    }
}
