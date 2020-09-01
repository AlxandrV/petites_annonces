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

/* content.html.twig */
class __TwigTemplate_e7bc217f480c34514f1fca6f69eb0963e14a9dff5f34696e59fe90b2b2a351ca extends Template
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
        echo "<section class=\"container d-flex flex-wrap justify-content-between\">

</section>

<button id=\"loadMore\" class=\"btn btn-light\">Charger les 10 suivants</button>";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container d-flex flex-wrap justify-content-between\">

</section>

<button id=\"loadMore\" class=\"btn btn-light\">Charger les 10 suivants</button>", "content.html.twig", "/var/www/html/application/templates/content.html.twig");
    }
}
