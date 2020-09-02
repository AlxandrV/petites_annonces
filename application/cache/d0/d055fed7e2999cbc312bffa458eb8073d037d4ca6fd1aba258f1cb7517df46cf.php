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

/* base.html.twig */
class __TwigTemplate_afde0bcdc102db81a9ae40b1062493a11884e213c7d0246ab4e19352b2a34b42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'scipt' => [$this, 'block_scipt'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "</head>
<body>
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('scipt', $context, $blocks);
        // line 32
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>AnnonceTout</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
        <link rel=\"icon\" type=\"image/png\" href=\"media/favicon.png\" />
    ";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        ";
        $this->loadTemplate("header.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "
        ";
        // line 17
        $this->loadTemplate("content.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("modal_add.html.twig", "base.html.twig", 19)->display($context);
        // line 20
        echo "
        <div id=\"modalDetail\"></div>
    ";
    }

    // line 24
    public function block_scipt($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        <!-- JS, Popper.js, and jQuery -->
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
        <script src=\"js/script.js\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  100 => 24,  94 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  81 => 15,  77 => 14,  67 => 5,  63 => 4,  58 => 32,  56 => 24,  53 => 23,  51 => 14,  47 => 12,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>AnnonceTout</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
        <link rel=\"icon\" type=\"image/png\" href=\"media/favicon.png\" />
    {% endblock %}
</head>
<body>
    {% block content %}
        {% include 'header.html.twig' %}

        {% include 'content.html.twig' %}

        {% include 'modal_add.html.twig' %}

        <div id=\"modalDetail\"></div>
    {% endblock %}

    {% block scipt %}
        <!-- JS, Popper.js, and jQuery -->
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
        <script src=\"js/script.js\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    {% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/application/templates/base.html.twig");
    }
}
