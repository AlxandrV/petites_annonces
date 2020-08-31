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
class __TwigTemplate_d3c84b66090aaa3c5f49d2ceb46c529884d2c1bad77e8afae6d0954d49d13e09 extends Template
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
        echo "
<div class=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
<div id=\"contentModal\">
    <div>
        <div>
            <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "category_name", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
            <span></span>
            <p>Nom : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_name", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
            <p>Prénom : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_firstname", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
            <p>Adresse mail : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_mail", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <p>Téléphone : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_phone", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <span></span>
        </div>
        <div>
            <img src=\"media/user_uploads/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "picture", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"image d'illustration\">
        </div>
    </div>
    <div>
        <h5>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
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
        return array (  79 => 20,  75 => 19,  68 => 15,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
<div id=\"contentModal\">
    <div>
        <div>
            <p>{{posts.category_name}}</p>
            <span></span>
            <p>Nom : {{posts.user_name}}</p>
            <p>Prénom : {{posts.user_firstname}}</p>
            <p>Adresse mail : {{posts.user_mail}}</p>
            <p>Téléphone : {{posts.user_phone}}</p>
            <span></span>
        </div>
        <div>
            <img src=\"media/user_uploads/{{posts.picture}}\" alt=\"image d'illustration\">
        </div>
    </div>
    <div>
        <h5>{{posts.title}}</h5>
        <p>{{posts.description}}</p>
    </div>
</div>", "modal_detail_post.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\modal_detail_post.html.twig");
    }
}
