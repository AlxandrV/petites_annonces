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

/* header.html.twig */
class __TwigTemplate_894c3fcc387ac53293bd43a523a6e17fe0f49030357e050a5998f06746dcafcd extends Template
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
        echo "<header>
    <div id=\"first\" class=\"d-flex justify-content-between align-items-center\">
        <div id=\"logo\"><img src=\"media/logo.png\" alt=\"Logo\" width=\"300\" height=\"119\"></div>
        <button id=\"addPost\" class=\"btn\">Poster une annonce</button>
    </div>
    <div id=\"secondary\" class=\"container d-flex justify-content-around\">
        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Rechercher\">
        <div class=\"btn-group\">
            <button type=\"button\" id=\"listCategorie\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégorie</button>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <button class=\"dropdown-item\" type=\"button\" value=\"\">Tout</button>
              ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "              <button class=\"dropdown-item\" type=\"button\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</button>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
          </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div id=\"first\" class=\"d-flex justify-content-between align-items-center\">
        <div id=\"logo\"><img src=\"media/logo.png\" alt=\"Logo\" width=\"300\" height=\"119\"></div>
        <button id=\"addPost\" class=\"btn\">Poster une annonce</button>
    </div>
    <div id=\"secondary\" class=\"container d-flex justify-content-around\">
        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Rechercher\">
        <div class=\"btn-group\">
            <button type=\"button\" id=\"listCategorie\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégorie</button>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <button class=\"dropdown-item\" type=\"button\" value=\"\">Tout</button>
              {% for category in categories %}
              <button class=\"dropdown-item\" type=\"button\" value=\"{{ category.name }}\">{{ category.name }}</button>
              {% endfor %}
            </div>
          </div>
    </div>
</header>", "header.html.twig", "/var/www/html/application/templates/header.html.twig");
    }
}
