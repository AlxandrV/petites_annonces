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
            'head' => [$this, 'block_head'],
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
        // line 11
        echo "</head>
<body>

    <div id=\"formValidate\">

        <form>
            <div class=\"modalDescription\">
                <div class=\"userDescription\">
                    <div class=\"form-group\">
                        <label for=\"name\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"user_name\" placeholder=\"Mes couilles\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"firstName\">Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"user_firstname\" placeholder=\"En ski\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_firstname", [], "any", false, false, false, 26), "html", null, true);
        echo "\" required>
                    </div>
        
                    <div class=\"form-group\">
                        <label for=\"email\">Adresse mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"user_mail\" placeholder=\"mescouillesenski@example.com\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_mail", [], "any", false, false, false, 31), "html", null, true);
        echo "\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"phone\">Numéro de téléphone</label>
                        <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"user_phone\" placeholder=\"0164346007\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_phone", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required>
                    </div>
                </div>
            
                <div class=\"postDescription\">
                    <div>
                        <div>
                            <div class=\"form-group\">
                                <label for=\"category\">Choissisez une catégorie</label>
                                <select class=\"form-control\" id=\"category\" name=\"category\">
                                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                </select>
                            </div>
                            
                            <div class=\"form-group\">
                                <label for=\"title\">Titre de votre annonce</label>
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"TItre de l'annoce\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
    
                        <div class=\"modalPicture\">
                            <div class=\"sectionPicture\">
                                <img id=\"imgPicture\" src=\"media/user_uploads/";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "picture", [], "any", false, false, false, 60), "html", null, true);
        echo "\" alt=\"illustration\" width=\"600\" height=\"398\">
                            </div>
                            <label for=\"file\" class=\"labelFile\">Ajouter une image</label>
                            <input type=\"file\" class=\"buttonFile\" id=\"file\" onchange=\"handleFiles(this.files)\" value=\"placeholder.jpg\" name=\"file\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"description\">Descriptif de votre annonce</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"8\" cols=\"40\" placeholder=\"Descriptif de l'annonce\" required>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 69), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
            </div>
        
            <div class=\"modalPost\">
                <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Poster l'annonce\">    
            </div>
        </form>
    </div>

    ";
        // line 81
        $this->displayBlock('scipt', $context, $blocks);
        // line 89
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
        <title>Document</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
    ";
    }

    // line 81
    public function block_scipt($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
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
        return "debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  173 => 81,  164 => 5,  160 => 4,  155 => 89,  153 => 81,  138 => 69,  126 => 60,  117 => 54,  110 => 49,  99 => 47,  95 => 46,  82 => 36,  74 => 31,  66 => 26,  58 => 21,  46 => 11,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
    {% endblock %}
</head>
<body>

    <div id=\"formValidate\">

        <form>
            <div class=\"modalDescription\">
                <div class=\"userDescription\">
                    <div class=\"form-group\">
                        <label for=\"name\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"user_name\" placeholder=\"Mes couilles\" value=\"{{ post.user_name }}\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"firstName\">Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"user_firstname\" placeholder=\"En ski\" value=\"{{ post.user_firstname }}\" required>
                    </div>
        
                    <div class=\"form-group\">
                        <label for=\"email\">Adresse mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"user_mail\" placeholder=\"mescouillesenski@example.com\" value=\"{{ post.user_mail }}\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"phone\">Numéro de téléphone</label>
                        <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"user_phone\" placeholder=\"0164346007\" value=\"{{ post.user_phone }}\" required>
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
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"TItre de l'annoce\" value=\"{{ post.title }}\" required>
                            </div>
                        </div>
    
                        <div class=\"modalPicture\">
                            <div class=\"sectionPicture\">
                                <img id=\"imgPicture\" src=\"media/user_uploads/{{ post.picture }}\" alt=\"illustration\" width=\"600\" height=\"398\">
                            </div>
                            <label for=\"file\" class=\"labelFile\">Ajouter une image</label>
                            <input type=\"file\" class=\"buttonFile\" id=\"file\" onchange=\"handleFiles(this.files)\" value=\"placeholder.jpg\" name=\"file\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"description\">Descriptif de votre annonce</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"8\" cols=\"40\" placeholder=\"Descriptif de l'annonce\" required>{{ post.description }}</textarea>
                    </div>
                </div>
            </div>
        
            <div class=\"modalPost\">
                <div class=\"g-recaptcha end\" data-sitekey=\"public_key\"></div>    
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Poster l'annonce\">    
            </div>
        </form>
    </div>

    {% block scipt %}
        <!-- JS, Popper.js, and jQuery -->
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
        <script src=\"js/script.js\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    {% endblock %}
</body>
</html>", "debug.html.twig", "/var/www/html/application/templates/debug.html.twig");
    }
}
