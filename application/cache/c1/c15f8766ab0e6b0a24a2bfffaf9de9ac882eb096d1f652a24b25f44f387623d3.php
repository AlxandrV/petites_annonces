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
            echo "<div class=\"product d-flex justify-content-center\">
    <div>

        <div class=\"illustration\">
            ";
            // line 6
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 6), "placeholder.jpg"))) {
                // line 7
                echo "            <img src=\"media/user_uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 7), "html", null, true);
                echo "\" alt=\"illustration\" width=\"600\" height=\"398\">
            ";
            } else {
                // line 8
                echo "        
            <img src=\"media/user_uploads/placeholder.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
            ";
            }
            // line 11
            echo "            <div class=\"categorie\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category_name", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
        </div>
        
        <div class=\"detailPost\">
            <div class=\"titlePost\">
                <p><strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</strong></p>
            </div>
            <p class=\"description\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            
        </div>
        
        <input class=\"idAjaxModal\" type=\"hidden\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\"> 
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        return array (  91 => 26,  81 => 22,  74 => 18,  69 => 16,  60 => 11,  55 => 8,  49 => 7,  47 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"product d-flex justify-content-center\">
    <div>

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
        
        <input class=\"idAjaxModal\" type=\"hidden\" value=\"{{post.id}}\"> 
    </div>
</div>
{% endfor %}


", "posts.html.twig", "/var/www/html/application/templates/posts.html.twig");
    }
}
