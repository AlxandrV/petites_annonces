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
    ";
        // line 2
        $this->loadTemplate("product.html.twig", "content.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        $this->loadTemplate("product.html.twig", "content.html.twig", 11)->display($context);
        // line 12
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container d-flex flex-wrap justify-content-between\">
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}
    {% include 'product.html.twig' %}

</section>", "content.html.twig", "/var/www/html/application/templates/content.html.twig");
    }
}
