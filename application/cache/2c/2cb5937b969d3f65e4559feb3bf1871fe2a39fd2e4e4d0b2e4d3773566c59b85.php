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

/* pdf.html.twig */
class __TwigTemplate_8d7046769d485a02946f12dd6191f83975f6964290e360e27918240c5f6abfd8 extends Template
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
            <h1 style=\"text-align: center;\">Annonce ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category_name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            <div>
                <img src=\"media/user_uploads/";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "picture", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"image d'illustration\" style=\"width:100%;\">
            </div>
            <div>
                <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            </div>
            <div style=\"background-color:#30343f; color:white; padding:0.4rem 2rem;\">
                <h2 style=\"text-align: center;\">Contact:</h2>
                <p><strong>Nom :</strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_name", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                <p><strong>Prénom </strong>: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_firstname", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                <p><strong>Adresse mail :</strong> <a style=\"color:white;\"href=\"mailto:";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 23), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></p>
                <p><strong>Téléphone :</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_phone", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  79 => 23,  75 => 22,  71 => 21,  64 => 17,  60 => 16,  54 => 13,  49 => 11,  37 => 1,);
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
            <h1 style=\"text-align: center;\">Annonce {{post.category_name}}</h1>
            <div>
                <img src=\"media/user_uploads/{{post.picture}}\" alt=\"image d'illustration\" style=\"width:100%;\">
            </div>
            <div>
                <h2>{{post.title}}</h2>
                <p>{{post.description}}</p>
            </div>
            <div style=\"background-color:#30343f; color:white; padding:0.4rem 2rem;\">
                <h2 style=\"text-align: center;\">Contact:</h2>
                <p><strong>Nom :</strong> {{post.user_name}}</p>
                <p><strong>Prénom </strong>: {{post.user_firstname}}</p>
                <p><strong>Adresse mail :</strong> <a style=\"color:white;\"href=\"mailto:{{post.user_mail}}\">{{post.user_mail}}</a></p>
                <p><strong>Téléphone :</strong> {{post.user_phone}}</p>
            </div>
        </div>
    </div>
</body>
</html>
", "pdf.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\pdf.html.twig");
    }
}
