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

/* figure/edition.html.twig */
class __TwigTemplate_9db760ac05b55405c8149080073b759c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/edition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/edition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "figure/edition.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"mb-5 mt-5\"> ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
 ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["id" => "figure-type"]]);
        echo "
    <p>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'row');
        echo "
    </p>
    <p>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 13, $this->source); })()), "photoFigures", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 14
            echo "                <div class=\"card m-3\" id=\"card_photo_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" style=\"width: 18rem\">  
                    <img class=\"card-img-top\" id='photo_figure_";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "' src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, $context["photo"], "ImageUrl", [], "any", false, false, false, 15))), "html", null, true);
            echo "\">
                    <div class=\"card-footer\">
                        <button class=\"btn btn-danger photo-delete-button\" photodelbtn=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" > Supprimer </button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>

        <div class=\"row\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 24, $this->source); })()), "videoFigures", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 25
            echo "                <div class=\"card m-3\" id=\"card_video_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" style=\"width: 18rem\">  
                    <iframe width=\"250\" height=\"140\" id='video_figure_";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "' src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "urlVideo", [], "any", false, false, false, 26), "html", null, true);
            echo "\"></iframe>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-danger video-delete-button\" videodelbtn=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" > Supprimer </button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>

        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), 'row');
        echo "

    </p>
    <p>
        <ul class=\"videoFigures\" data-index=\"";
        // line 38
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "videoFigures", [], "any", false, false, false, 38)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "videoFigures", [], "any", false, false, false, 38)), "vars", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38) + 1), "html", null, true))) : (print (0)));
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "videoFigures", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "prototype", [], "any", false, false, false, 38), 'widget'), "html_attr");
        echo "\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "videoFigures", [], "any", false, false, false, 39), 'widget');
        echo "
        </ul>
        ";
        // line 42
        echo "
        
    </p>
    <p>
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "article", [], "any", false, false, false, 46), 'row');
        echo "
    </p>
    <p>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "submit", [], "any", false, false, false, 49), 'row');
        echo "
    </p>
    ";
        // line 51
        if (array_key_exists("error", $context)) {
            // line 52
            echo "        <p class=\"alert alert-danger\">
            ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "
        </p>
    ";
        } elseif (        // line 55
array_key_exists("success", $context)) {
            // line 56
            echo "        <p class=\"alert alert-success\">
            ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 60
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_perso_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        // line 64
        echo "    <script type=\"module\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VideoFigure/module.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VideoFigure/videoFieldController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VideoFigure/cancel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VideoFigure/add.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VideoFigure/delete.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/PhotoFigure/delete.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "figure/edition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 69,  263 => 68,  259 => 67,  255 => 66,  251 => 65,  246 => 64,  236 => 63,  223 => 60,  217 => 57,  214 => 56,  212 => 55,  207 => 53,  204 => 52,  202 => 51,  197 => 49,  191 => 46,  185 => 42,  180 => 39,  174 => 38,  167 => 34,  163 => 32,  153 => 28,  146 => 26,  141 => 25,  137 => 24,  132 => 21,  122 => 17,  115 => 15,  110 => 14,  106 => 13,  99 => 9,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ controller_name }}{% endblock %}

{% block body %}
<h2 class=\"mb-5 mt-5\"> {{ controller_name }}</h2>
 {{ form_start(form, {'attr': {'id': 'figure-type'}}) }}
    <p>
        {{ form_row(form.nom) }}
    </p>
    <p>
        <div class=\"row\">
            {% for photo in figure.photoFigures %}
                <div class=\"card m-3\" id=\"card_photo_{{ photo.id }}\" style=\"width: 18rem\">  
                    <img class=\"card-img-top\" id='photo_figure_{{ photo.id }}' src=\"{{ asset('media/img/figures/' ~ photo.ImageUrl) }}\">
                    <div class=\"card-footer\">
                        <button class=\"btn btn-danger photo-delete-button\" photodelbtn=\"{{photo.id}}\" > Supprimer </button>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"row\">
            {% for video in figure.videoFigures %}
                <div class=\"card m-3\" id=\"card_video_{{ video.id }}\" style=\"width: 18rem\">  
                    <iframe width=\"250\" height=\"140\" id='video_figure_{{ video.id}}' src=\"{{ video.urlVideo }}\"></iframe>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-danger video-delete-button\" videodelbtn=\"{{video.id}}\" > Supprimer </button>
                    </div>
                </div>
            {% endfor %}
        </div>

        {{ form_row(form.image) }}

    </p>
    <p>
        <ul class=\"videoFigures\" data-index=\"{{ form.videoFigures|length > 0 ? form.videoFigures|last.vars.name + 1 : 0 }}\" data-prototype=\"{{ form_widget(form.videoFigures.vars.prototype)|e('html_attr') }}\">
            {{ form_widget(form.videoFigures)}}
        </ul>
        {# <button type=\"button\" class=\"add_item_link\" data-collection-holder-class=\"videoFigures\">Ajouter vidéo</button>  #}

        
    </p>
    <p>
        {{ form_row(form.article) }}
    </p>
    <p>
        {{ form_row(form.submit) }}
    </p>
    {% if error is defined %}
        <p class=\"alert alert-danger\">
            {{ error }}
        </p>
    {% elseif success is defined %}
        <p class=\"alert alert-success\">
            {{ success }}
        </p>
    {% endif %}
 {{ form_end(form) }}
{% endblock %}

{% block perso_javascripts %}
    <script type=\"module\" src=\"{{ asset('js/VideoFigure/module.js') }}\"></script>
    <script src=\"{{ asset('js/VideoFigure/videoFieldController.js') }}\"></script>
    <script src=\"{{ asset('js/VideoFigure/cancel.js') }}\"></script>
    <script src=\"{{ asset('js/VideoFigure/add.js') }}\"></script>
    <script src=\"{{ asset('js/VideoFigure/delete.js') }}\"></script>
    <script src=\"{{ asset('js/PhotoFigure/delete.js') }}\"></script>

{% endblock %}
", "figure/edition.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/figure/edition.html.twig");
    }
}
