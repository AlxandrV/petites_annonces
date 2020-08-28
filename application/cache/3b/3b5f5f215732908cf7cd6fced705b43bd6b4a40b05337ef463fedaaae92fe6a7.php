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

/* modal_detail_post.html.twig */
class __TwigTemplate_2a89171b509df9a9ff4d1ef97e6e071c91df0511f43660c9e02c6ffa0fc2f48f extends Template
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
        echo "<div id=\"modalDetail\" class=\"active\">
    <div id=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
    <div id=\"contentModal\">
        <div>
            <div>
                <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "mail", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "phone", [], "any", false, false, false, 9), "html", null, true);
        echo "phone</p>
            </div>
            <div>
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "picture", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"image d'illustration\">
            </div>
        </div>
        <div>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "title</p>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "lorem</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modal_detail_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  69 => 16,  62 => 12,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalDetail\" class=\"active\">
    <div id=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
    <div id=\"contentModal\">
        <div>
            <div>
                <p>{{posts.name}}</p>
                <p>{{posts.firstname}}</p>
                <p>{{posts.mail}}</p>
                <p>{{posts.phone}}phone</p>
            </div>
            <div>
                <img src=\"{{posts.picture}}\" alt=\"image d'illustration\">
            </div>
        </div>
        <div>
            <p>{{title}}title</p>
            <p>{{description}}lorem</p>
        </div>
    </div>
</div>", "modal_detail_post.html.twig", "/var/www/html/application/templates/modal_detail_post.html.twig");
    }
}
