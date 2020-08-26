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

/* posts.html.twig */
class __TwigTemplate_7c495280f6575f7ef45632d9d50c246f7d5a34cc2f54fa294fb23e6538c9e063 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"product \">
    <div class=\"illustration\">
        <img src=\"media/default.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
        <div class=\"categorie\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category_name", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
    </div>

    <div class=\"detailPost\">
        <div class=\"titlePost\">
            <p><strong>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</strong></p>
        </div>
        <p class=\"description\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>

    </div>

    <!-- <p><strong>id: </strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "</p><br>
    <p><strong>picture: </strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 17), "html", null, true);
            echo "</p><br>
    <p><strong>date_creation: </strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date_creation", [], "any", false, false, false, 18), "html", null, true);
            echo "</p><br>
    <br><hr> -->
              
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  66 => 16,  59 => 12,  54 => 10,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"product \">
    <div class=\"illustration\">
        <img src=\"media/default.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
        <div class=\"categorie\">{{post.category_name}}</div>
    </div>

    <div class=\"detailPost\">
        <div class=\"titlePost\">
            <p><strong>{{post.title}}</strong></p>
        </div>
        <p class=\"description\">{{post.description}}</p>

    </div>

    <!-- <p><strong>id: </strong>{{post.id}}</p><br>
    <p><strong>picture: </strong>{{post.picture}}</p><br>
    <p><strong>date_creation: </strong>{{post.date_creation}}</p><br>
    <br><hr> -->
              
</div>
{% endfor %}", "posts.html.twig", "/var/www/html/application/templates/posts.html.twig");
    }
}
