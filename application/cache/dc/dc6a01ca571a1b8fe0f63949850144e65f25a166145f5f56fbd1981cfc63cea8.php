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
class __TwigTemplate_9ca87c9017867a6d29bf9a85f00f110769141af33389b9c8a34bd78c693529c1 extends Template
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
    <div><img src=\"../../public/media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>
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
    <div><img src=\"../../public/media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>
</div>", "product.html.twig", "/var/www/html/application/templates/product.html.twig");
    }
}
