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

/* debug.html.twig */
class __TwigTemplate_9272824990beb92c94646341dd227ad27d6379b1d48b5f860724177b280722eb extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category_name", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <span></span>
            <p>Nom : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_name", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            <p>Prénom : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_firstname", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            <p>Adresse mail : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            <p>Téléphone : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            <span></span>
        </div>
        <div>
            <img src=\"media/user_uploads/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "picture", [], "any", false, false, false, 20), "html", null, true);
        echo "\" alt=\"image d'illustration\">
        </div>
    </div>
    <div>
        <h5>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h5>
        <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 24,  73 => 20,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <p>{{post.category_name}}</p>
            <span></span>
            <p>Nom : {{post.user_name}}</p>
            <p>Prénom : {{post.user_firstname}}</p>
            <p>Adresse mail : {{post.user_mail}}</p>
            <p>Téléphone : {{post.user_phone}}</p>
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
</body>
</html>
", "debug.html.twig", "/var/www/html/application/templates/debug.html.twig");
    }
}
