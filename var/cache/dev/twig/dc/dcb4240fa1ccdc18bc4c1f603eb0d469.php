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

/* figure/index.html.twig */
class __TwigTemplate_507d040e0ae798440394e1584f49ed73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyheader' => [$this, 'block_bodyheader'],
            'body' => [$this, 'block_body'],
            'perso_stylesheets' => [$this, 'block_perso_stylesheets'],
            'perso_javascripts' => [$this, 'block_perso_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "figure/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Figure ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 4
        echo " <div class=\"header-body-element w-100 d-flex align-items-center justify-content-center\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, (isset($context["imageHeader"]) || array_key_exists("imageHeader", $context) ? $context["imageHeader"] : (function () { throw new RuntimeError('Variable "imageHeader" does not exist.', 4, $this->source); })()), "imageUrl", [], "any", false, false, false, 4))), "html", null, true);
        echo "');
    background-color: rgb(0, 0, 0);
    background-blend-mode: screen;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}\">
        <table>
            <tr>
                <td><h2 class=\"shadow fst-italic align-middle text-light text-center\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "  </h2></td>
            </tr>
        </table>
        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"row mt-5 mb-5 d-flex justify-content-center optional-content\">
        <div id=\"media\" >
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 22, $this->source); })()), "photoFigures", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 23
            echo "        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, $context["photo"], "ImageUrl", [], "any", false, false, false, 24))), "html", null, true);
            echo "\">

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 27, $this->source); })()), "videoFigures", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 28
            echo "                <iframe class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"https://www.youtube.com/embed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "UrlVideo", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
                </iframe>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
        <div class=\"m-5 p-1 text-center\">

            <button class=\"btn btn-primary\" id=\"see-media\"> Afficher les médias </button>

        </div>
    </div>
    <p class=\"mt-5 mb-5\">
        ";
        // line 39
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 39, $this->source); })()), "article", [], "any", false, false, false, 39), "html", null, true));
        echo "
    </p>
    <div id=\"message-zone\">
    </div>
    <script>
        var element = document.getElementById(\"message-zone\");
        element.scrollTop = element.scrollHeight;
    </script>
    <div>
        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["id" => "message-form", "class" => "row my-5"]]);
            echo "
                <div class=\"d-flex col-3 md-col-4\">
                    ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "submit", [], "any", false, false, false, 51), 'row');
            echo "
                </div>
                <div class=\"col-9 md-col-8\">
                    ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), 'widget');
            echo "

                </div>         
            ";
            // line 57
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
            echo "
        ";
        } else {
            // line 59
            echo "            <form class=\"row my-5\">
                <div class=\"d-flex col-3 md-col-4\">
                    <button class=\"btn btn-light position-relative  start-50\" disabled> Envoyer </button>
                </div>
                <div class=\"col-9 md-col-8\">
                    <textarea class=\"form-control lead right-message bg-light bg-gradient\" name=\"right-message\" id=\"right-message\" disabled> </textarea>
                </div>
            </form>
        ";
        }
        // line 68
        echo "        <span id=\"slug\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 68, $this->source); })()), "slug", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_perso_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        // line 72
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/figure/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_perso_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        // line 75
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Figure/detail.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Message/load.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Message/send.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "figure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 77,  275 => 76,  270 => 75,  260 => 74,  247 => 72,  237 => 71,  223 => 68,  212 => 59,  207 => 57,  201 => 54,  195 => 51,  189 => 49,  187 => 48,  175 => 39,  165 => 31,  155 => 28,  150 => 27,  141 => 24,  138 => 23,  134 => 22,  130 => 20,  120 => 19,  104 => 13,  91 => 4,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Figure {% endblock %}
{% block bodyheader %}
 <div class=\"header-body-element w-100 d-flex align-items-center justify-content-center\" style=\"background-image: url('{{asset('media/img/figures/' ~ imageHeader.imageUrl )}}');
    background-color: rgb(0, 0, 0);
    background-blend-mode: screen;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}\">
        <table>
            <tr>
                <td><h2 class=\"shadow fst-italic align-middle text-light text-center\"> {{figure.nom}}  </h2></td>
            </tr>
        </table>
        
    </div>
{% endblock %}
{% block body %}
    <div class=\"row mt-5 mb-5 d-flex justify-content-center optional-content\">
        <div id=\"media\" >
            {% for photo in figure.photoFigures %}
        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"{{ asset('media/img/figures/' ~ photo.ImageUrl) }}\">

            {% endfor %}
            {% for video in figure.videoFigures %}
                <iframe class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"https://www.youtube.com/embed/{{video.UrlVideo}}\">
                </iframe>
            {% endfor %}
        </div>
        <div class=\"m-5 p-1 text-center\">

            <button class=\"btn btn-primary\" id=\"see-media\"> Afficher les médias </button>

        </div>
    </div>
    <p class=\"mt-5 mb-5\">
        {{ figure.article|nl2br}}
    </p>
    <div id=\"message-zone\">
    </div>
    <script>
        var element = document.getElementById(\"message-zone\");
        element.scrollTop = element.scrollHeight;
    </script>
    <div>
        {% if app.user %}
            {{ form_start(form, {'attr': {'id': 'message-form', 'class': 'row my-5'}}) }}
                <div class=\"d-flex col-3 md-col-4\">
                    {{ form_row(form.submit) }}
                </div>
                <div class=\"col-9 md-col-8\">
                    {{ form_widget(form.message) }}

                </div>         
            {{ form_end(form) }}
        {% else %}
            <form class=\"row my-5\">
                <div class=\"d-flex col-3 md-col-4\">
                    <button class=\"btn btn-light position-relative  start-50\" disabled> Envoyer </button>
                </div>
                <div class=\"col-9 md-col-8\">
                    <textarea class=\"form-control lead right-message bg-light bg-gradient\" name=\"right-message\" id=\"right-message\" disabled> </textarea>
                </div>
            </form>
        {% endif %}
        <span id=\"slug\">{{figure.slug}}</span>
    </div>
{% endblock %}
{% block perso_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/figure/index.css') }}\">
{% endblock %}
{% block perso_javascripts %}
    <script src=\"{{ asset('js/Figure/detail.js') }}\"></script>
    <script src=\"{{ asset('js/Message/load.js') }}\"></script>
    <script src=\"{{ asset('js/Message/send.js') }}\"></script>
{% endblock %}
", "figure/index.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/figure/index.html.twig");
    }
}
