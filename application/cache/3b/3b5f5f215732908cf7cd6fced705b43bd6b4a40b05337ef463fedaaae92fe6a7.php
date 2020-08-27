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
        echo "<div id=\"modalDetail\">
    <div id=\"contentModal\">
        <div>
            <div>
                <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "name</p>
                <p>";
        // line 6
        echo twig_escape_filter($this->env, ($context["firstname"] ?? null), "html", null, true);
        echo "firstname</p>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
        echo "mail</p>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "phone</p>
            </div>
            <div>
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["picture"] ?? null), "html", null, true);
        echo "\" alt=\"image d'illustration\">
            </div>
        </div>
        <div>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "title</p>
            <p>";
        // line 16
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
        return array (  72 => 16,  68 => 15,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalDetail\">
    <div id=\"contentModal\">
        <div>
            <div>
                <p>{{name}}name</p>
                <p>{{firstname}}firstname</p>
                <p>{{mail}}mail</p>
                <p>{{phone}}phone</p>
            </div>
            <div>
                <img src=\"{{picture}}\" alt=\"image d'illustration\">
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
