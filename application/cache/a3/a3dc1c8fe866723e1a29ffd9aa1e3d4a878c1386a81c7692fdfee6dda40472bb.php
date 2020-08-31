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

/* delete.html.twig */
class __TwigTemplate_97db610dec760aa08178a03a8d778a118353556dda879744e17c7241e6df0d05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div id=\"delete\">
    <div>
        <div>
            <div>
                <div>
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category_name", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
                </div>
                <span></span>
                <p>Nom : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_name", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p>Prénom : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <p>Adresse mail : <a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></p>
                <p>Téléphone : <a href=\"tel:";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_phone", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_phone", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></p>
                <span></span>
            </div>
            <div>
                <img src=\"media/user_uploads/";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "picture", [], "any", false, false, false, 19), "html", null, true);
        echo "\" alt=\"image d'illustration\">
            </div>
        </div>
        <div>
            <h5>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h5>
            <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
        </div>
        <div>
            <p>Supprimer mon annonce ?</p>
            <button class=\"btn btn-danger\" id=\"deleteButton\">Valider</button>
        </div>
    </div>
</div>
<div class=\"deleteValidate\">
    <form>
        <input type=\"hidden\" name=\"unique_id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "unique_id", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
        <p>Confirmer la suppression ?</p>
        <div class=\"d-flex justify-content-around\">
            <input type=\"submit\" class=\"btn btn-danger\" value=\"OUI\">
            <button class=\"btn btn-secondary\" id=\"deleteNo\">NON</button>
        </div>
    </form>
</div>
<script src=\"js/delete.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  97 => 24,  93 => 23,  86 => 19,  77 => 15,  71 => 14,  67 => 13,  63 => 12,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
<div id=\"delete\">
    <div>
        <div>
            <div>
                <div>
                    <p>{{post.category_name}}</p>
                </div>
                <span></span>
                <p>Nom : {{post.user_name}}</p>
                <p>Prénom : {{post.user_firstname}}</p>
                <p>Adresse mail : <a href=\"mailto:{{ post.user_mail }}\">{{post.user_mail}}</a></p>
                <p>Téléphone : <a href=\"tel:{{ post.user_phone }}\">{{post.user_phone}}</a></p>
                <span></span>
            </div>
            <div>
                <img src=\"media/user_uploads/{{post.picture}}\" alt=\"image d'illustration\">
            </div>
        </div>
        <div>
            <h5>{{post.title}}</h5>
            <p>{{post.description}}</p>
        </div>
        <div>
            <p>Supprimer mon annonce ?</p>
            <button class=\"btn btn-danger\" id=\"deleteButton\">Valider</button>
        </div>
    </div>
</div>
<div class=\"deleteValidate\">
    <form>
        <input type=\"hidden\" name=\"unique_id\" value=\"{{ post.unique_id }}\">
        <p>Confirmer la suppression ?</p>
        <div class=\"d-flex justify-content-around\">
            <input type=\"submit\" class=\"btn btn-danger\" value=\"OUI\">
            <button class=\"btn btn-secondary\" id=\"deleteNo\">NON</button>
        </div>
    </form>
</div>
<script src=\"js/delete.js\"></script>
{% endblock %}
", "delete.html.twig", "/var/www/html/application/templates/delete.html.twig");
    }
}
