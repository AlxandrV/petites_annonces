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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"product\">
    <div class=\"illustration\">
        ";
            // line 4
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 4), "placeholder.jpg"))) {
                // line 5
                echo "            <img src=\"media/user_uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 5), "html", null, true);
                echo "\" alt=\"illustration\" width=\"600\" height=\"398\">
        ";
            } else {
                // line 6
                echo "        
            <img src=\"media/user_uploads/placeholder.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
        ";
            }
            // line 9
            echo "        <div class=\"categorie\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category_name", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
    </div>

    <div class=\"detailPost\">
        <div class=\"titlePost\">
            <p><strong>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</strong></p>
        </div>
        <p class=\"description\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>

    </div>

    <!-- <p><strong>id: </strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</p><br>
    <p><strong>picture: </strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 21), "html", null, true);
            echo "</p><br>
    <p><strong>date_creation: </strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date_creation", [], "any", false, false, false, 22), "html", null, true);
            echo "</p><br>
    <br><hr> -->
    <input class=\"idAjaxModal\" type=\"hidden\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\"> 
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

";
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
        return array (  101 => 27,  92 => 24,  87 => 22,  83 => 21,  79 => 20,  72 => 16,  67 => 14,  58 => 9,  53 => 6,  47 => 5,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"product\">
    <div class=\"illustration\">
        {% if post.picture != 'placeholder.jpg' %}
            <img src=\"media/user_uploads/{{post.picture}}\" alt=\"illustration\" width=\"600\" height=\"398\">
        {% else %}        
            <img src=\"media/user_uploads/placeholder.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
        {% endif %}
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
    <input class=\"idAjaxModal\" type=\"hidden\" value=\"{{post.id}}\"> 
</div>
{% endfor %}


", "posts.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\posts.html.twig");
    }
}
