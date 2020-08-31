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
class __TwigTemplate_a2d0b70fb8cac0e673e67d4ec1d693ec2902528e10977a20c32c0417797d606a extends Template
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

</head>
<body>
    <p>Title : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    <p>Description: : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
    <p>Picture: : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "picture", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

</body>
</html>";
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
        return array (  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

</head>
<body>
    <p>Title : {{ post.title }}</p>
    <p>Description: : {{ post.description }}</p>
    <p>Picture: : {{ post.picture }}</p>

</body>
</html>", "debug.html.twig", "C:\\xampp\\htdocs\\annonces\\application\\templates\\debug.html.twig");
    }
}
