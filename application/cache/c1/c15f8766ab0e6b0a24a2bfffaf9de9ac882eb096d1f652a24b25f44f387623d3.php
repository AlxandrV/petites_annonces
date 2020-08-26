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
            echo "<div class=\"product\">
    <div><img src=\"media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>

    <p><strong>id: </strong>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "</p><br>
    <p><strong>title: </strong>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</p><br>
    <p><strong>description: </strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 7), "html", null, true);
            echo "</p><br>
    <p><strong>picture: </strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 8), "html", null, true);
            echo "</p><br>
    <p><strong>date_creation: </strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date_creation", [], "any", false, false, false, 9), "html", null, true);
            echo "</p><br>
    <br><hr>
              
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
        return array (  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"product\">
    <div><img src=\"media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>

    <p><strong>id: </strong>{{post.id}}</p><br>
    <p><strong>title: </strong>{{post.title}}</p><br>
    <p><strong>description: </strong>{{post.description}}</p><br>
    <p><strong>picture: </strong>{{post.picture}}</p><br>
    <p><strong>date_creation: </strong>{{post.date_creation}}</p><br>
    <br><hr>
              
</div>
{% endfor %}", "posts.html.twig", "/var/www/html/application/templates/posts.html.twig");
    }
}
