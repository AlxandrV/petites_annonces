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

/* modal_add.html.twig */
class __TwigTemplate_a1ae9763e4958acd21ab90bddfbf5087774ae40418d2cd37752b890e6cc8d97d extends Template
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
        echo "<div id=\"modalAdd\" class=\"modalAdd\">
    <div id=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
    <form>
        <div class=\"modalDescription\">
            <div class=\"userDescription\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"user_name\" placeholder=\"Mes couilles\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"user_firstname\" placeholder=\"En ski\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"email\">Adresse mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"user_mail\" placeholder=\"mescouillesenski@example.com\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"phone\">Numéro de téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"user_phone\" placeholder=\"0164346007\" required>
                </div>
            </div>
    
            <div class=\"postDescription\">
                <div>
                    <div>
                        <div class=\"form-group\">
                            <label for=\"category\">Choissisez une catégorie</label>
                            <select class=\"form-control\" id=\"category\" name=\"category\">
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </select>
                        </div>
        
                        <div class=\"form-group\">
                            <label for=\"title\">Titre de votre annonce</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"TItre de l'annoce\" required>
                        </div>
                    </div>

                    <div class=\"modalPicture\">
                        <div class=\"sectionPicture\">
                            <img id=\"imgPicture\" src=\"media/default.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
                        </div>
                        <label for=\"file\" class=\"labelFile\">Ajouter une image</label>
                        <input type=\"file\" class=\"buttonFile\" id=\"file\" onchange=\"handleFiles(this.files)\" value=\"default.jpg\" name=\"file\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Descriptif de votre annonce</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"8\" cols=\"40\" placeholder=\"Descriptif de l'annonce\" required></textarea>
                </div>
            </div>
        </div>
        
        <div class=\"modalPost\">
            <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Poster l'annonce\">    
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "modal_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  75 => 34,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAdd\" class=\"modalAdd\">
    <div id=\"closeIcon\"><img src=\"../../public/media/cross-icon.png\" alt=\"Icon en forme de croix\" width=\"48\" height=\"48\"></div>
    <form>
        <div class=\"modalDescription\">
            <div class=\"userDescription\">
                <div class=\"form-group\">
                    <label for=\"name\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"user_name\" placeholder=\"Mes couilles\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"user_firstname\" placeholder=\"En ski\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"email\">Adresse mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"user_mail\" placeholder=\"mescouillesenski@example.com\" required>
                </div>
    
                <div class=\"form-group\">
                    <label for=\"phone\">Numéro de téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"user_phone\" placeholder=\"0164346007\" required>
                </div>
            </div>
    
            <div class=\"postDescription\">
                <div>
                    <div>
                        <div class=\"form-group\">
                            <label for=\"category\">Choissisez une catégorie</label>
                            <select class=\"form-control\" id=\"category\" name=\"category\">
                                {% for category in categories %}
                                    <option value=\"{{category.name}}\">{{category.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
        
                        <div class=\"form-group\">
                            <label for=\"title\">Titre de votre annonce</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"TItre de l'annoce\" required>
                        </div>
                    </div>

                    <div class=\"modalPicture\">
                        <div class=\"sectionPicture\">
                            <img id=\"imgPicture\" src=\"media/default.jpg\" alt=\"illustration\" width=\"600\" height=\"398\">
                        </div>
                        <label for=\"file\" class=\"labelFile\">Ajouter une image</label>
                        <input type=\"file\" class=\"buttonFile\" id=\"file\" onchange=\"handleFiles(this.files)\" value=\"default.jpg\" name=\"file\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Descriptif de votre annonce</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"8\" cols=\"40\" placeholder=\"Descriptif de l'annonce\" required></textarea>
                </div>
            </div>
        </div>
        
        <div class=\"modalPost\">
            <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Poster l'annonce\">    
        </div>
    </form>
</div>", "modal_add.html.twig", "/var/www/html/application/templates/modal_add.html.twig");
    }
}
