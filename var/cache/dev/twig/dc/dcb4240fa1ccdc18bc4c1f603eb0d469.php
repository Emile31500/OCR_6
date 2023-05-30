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

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row mt-5 mb-5 d-flex justify-content-center optional-content\">
        <div class=\"col text-center\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 8, $this->source); })()), "photoFigures", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 9
            echo "        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, $context["photo"], "ImageUrl", [], "any", false, false, false, 10))), "html", null, true);
            echo "\">

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 13, $this->source); })()), "photoFigures", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 14
            echo "        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, $context["photo"], "ImageUrl", [], "any", false, false, false, 15))), "html", null, true);
            echo "\">

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 18, $this->source); })()), "photoFigures", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 19
            echo "        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/img/figures/" . twig_get_attribute($this->env, $this->source, $context["photo"], "ImageUrl", [], "any", false, false, false, 20))), "html", null, true);
            echo "\">

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <div class=\"col\">
            <h2> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </div>
    <p class=\"mt-5 mb-5\">
        ";
        // line 29
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 29, $this->source); })()), "article", [], "any", false, false, false, 29), "html", null, true));
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
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["id" => "message-form", "class" => "row my-5"]]);
            echo "
                <div class=\"d-flex col-3 md-col-4\">
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "submit", [], "any", false, false, false, 41), 'row');
            echo "
                </div>
                <div class=\"col-9 md-col-8\">
                    ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "message", [], "any", false, false, false, 44), 'widget');
            echo "

                </div>         
            ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
        ";
        } else {
            // line 49
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
        // line 58
        echo "        <span id=\"slug\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 58, $this->source); })()), "slug", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_perso_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        // line 62
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/figure/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_perso_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Message/load.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
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
        return array (  255 => 66,  250 => 65,  240 => 64,  227 => 62,  217 => 61,  203 => 58,  192 => 49,  187 => 47,  181 => 44,  175 => 41,  169 => 39,  167 => 38,  155 => 29,  148 => 25,  144 => 23,  135 => 20,  132 => 19,  127 => 18,  118 => 15,  115 => 14,  110 => 13,  101 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Figure {% endblock %}

{% block body %}
    <div class=\"row mt-5 mb-5 d-flex justify-content-center optional-content\">
        <div class=\"col text-center\">
            {% for photo in figure.photoFigures %}
        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"{{ asset('media/img/figures/' ~ photo.ImageUrl) }}\">

            {% endfor %}
            {% for photo in figure.photoFigures %}
        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"{{ asset('media/img/figures/' ~ photo.ImageUrl) }}\">

            {% endfor %}
            {% for photo in figure.photoFigures %}
        
                <img class=\"m-3\" style=\"max-height: 155px; max-width: 250px;\" src=\"{{ asset('media/img/figures/' ~ photo.ImageUrl) }}\">

            {% endfor %}
        </div>
        <div class=\"col\">
            <h2> {{ controller_name }}</h2>
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
    <script src=\"{{ asset('js/Message/load.js') }}\"></script>
    <script src=\"{{ asset('js/Message/send.js') }}\"></script>
{% endblock %}
", "figure/index.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/figure/index.html.twig");
    }
}
