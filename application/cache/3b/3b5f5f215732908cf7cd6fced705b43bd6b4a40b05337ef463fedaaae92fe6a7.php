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
        echo "
<div class=\"closeIcon\"><img src=\"media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
<div id=\"contentModal\">
    <div>
        <div>
            <div>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "category_name", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
                <a href=\"/ajax-pdf?unique_id=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "unique_id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\">Télécharger l'annonce en PDF</a>
            </div>
            <span></span>
            <p>Nom : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_name", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <p>Prénom : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_firstname", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <p>Adresse mail : <a href=\"mailto:";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_mail", [], "any", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_mail", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></p>
            <p>Téléphone : <a href=\"tel:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_phone", [], "any", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "user_phone", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></p>
            <span></span>
        </div>
        <div>
            <img src=\"media/user_uploads/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "picture", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"image d'illustration\">
        </div>
    </div>
    <div>
        <h5>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
        <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
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
        return array (  89 => 23,  85 => 22,  78 => 18,  69 => 14,  63 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"closeIcon\"><img src=\"media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
<div id=\"contentModal\">
    <div>
        <div>
            <div>
                <p>{{posts.category_name}}</p>
                <a href=\"/ajax-pdf?unique_id={{ posts.unique_id }}\" target=\"_blank\" rel=\"noopener noreferrer\">Télécharger l'annonce en PDF</a>
            </div>
            <span></span>
            <p>Nom : {{posts.user_name}}</p>
            <p>Prénom : {{posts.user_firstname}}</p>
            <p>Adresse mail : <a href=\"mailto:{{ posts.user_mail }}\">{{posts.user_mail}}</a></p>
            <p>Téléphone : <a href=\"tel:{{ posts.user_phone }}\">{{posts.user_phone}}</a></p>
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
</div>", "modal_detail_post.html.twig", "/var/www/html/application/templates/modal_detail_post.html.twig");
    }
}
