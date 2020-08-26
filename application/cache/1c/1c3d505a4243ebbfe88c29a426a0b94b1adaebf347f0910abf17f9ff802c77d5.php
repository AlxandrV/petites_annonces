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
class __TwigTemplate_092a0abfd16a46530675d5a714c76a67f7f32600432a9750b77538c47d6451e5 extends Template
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

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "              <p><strong>id: </strong>";
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
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</div>";
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
        return array (  72 => 12,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product\">
    <div><img src=\"media/computer.png\" alt=\"illustration\" width=\"256\" height=\"256\"></div>

    {% for post in posts %}
              <p><strong>id: </strong>{{post.id}}</p><br>
              <p><strong>title: </strong>{{post.title}}</p><br>
              <p><strong>description: </strong>{{post.description}}</p><br>
              <p><strong>picture: </strong>{{post.picture}}</p><br>
              <p><strong>date_creation: </strong>{{post.date_creation}}</p><br>
              <br><hr>
    {% endfor %}

</div>", "posts.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\posts.html.twig");
    }
}
