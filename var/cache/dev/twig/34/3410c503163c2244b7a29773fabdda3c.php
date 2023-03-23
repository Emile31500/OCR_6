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

/* home/index.html.twig */
class __TwigTemplate_c2f121f355bcc22bd47ee2e1ee3e15c9 extends Template
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
            'perso_javascripts' => [$this, 'block_perso_javascripts'],
            'perso_stylesheets' => [$this, 'block_perso_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 6
        echo " <div class=\"header-body-element w-100 d-flex align-items-center justify-content-center\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/snowboard_wallpaper.jpg"), "html", null, true);
        echo "');
    height: 30vh;
    background-color: rgb(0, 0, 0);
    background-blend-mode: screen;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}\">
        <table>
            <tr>
                <td><h2 class=\"shadow fst-italic align-middle text-light text-center\"> Snowboard  </h2></td>
            </tr>
            <tr>
                <td class=\"fst-italic text-light\">\"La passion du Snowboard\"</td>
            </tr>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25))) {
            // line 26
            echo "         ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26), 0, [], "array", false, false, false, 26) == "administrator")) {
                // line 27
                echo "            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creation_figure");
                echo "\">
                <button class=\"btn btn-success\"> Ajouter </button>
            </a>
            <div class=\"modal fade\" id=\"confirmDelete\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"confirmDeleteLabel\">Modal title</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            ...
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" id=\"colse-del-modal\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirm-del-figure\">Confirmer la suppression</button>
                        </div>
                    </div>
                </div>
            </div>
          
         ";
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "    <div id='tricks-card-list' class=\"my-5 row row-cols-1 row-cols-md-2 g-4\">
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["figure"]) {
            // line 52
            echo "        <div class=\"col tricks-col ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 52), "slug", [], "any", false, false, false, 52), "html", null, true);
            echo " d-flex justify-content-center\">
            <div class=\"tricks-card card\">
                <img class=\"top-img-card\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/figures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "photo", [], "any", false, false, false, 54), "url", [], "any", false, false, false, 54), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "\"/>
                <div class=\"card-body\">
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_figure", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 56), "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" >
                        <h3 class=\"col-8 h4 text-dark\"> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            echo " </h3>
                    </a>
                    ";
            // line 59
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59))) {
                // line 60
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "roles", [], "any", false, false, false, 60), 0, [], "array", false, false, false, 60) == "administrator")) {
                    // line 61
                    echo "                            <div class=\"col-2 edit-card-div\">
                                <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edition_figure", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 62), "slug", [], "any", false, false, false, 62)]), "html", null, true);
                    echo "\">
                                    <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                                        <path d=\"M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z\"/>
                                    </svg>
                                </a>
                            </div>
                            <div class=\"col-2 trash-card-div\">
                                <a href=\"#\" class=\"del-figure-btn\" link=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supression_figure", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 69), "slug", [], "any", false, false, false, 69)]), "html", null, true);
                    echo "\" slug=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["figure"], "figure", [], "any", false, false, false, 69), "slug", [], "any", false, false, false, 69), "html", null, true);
                    echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDelete\">
                                    <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path d=\"M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z\"/>
                                    </svg>
                                </a>
                            </div>
                        ";
                }
                // line 76
                echo "                    ";
            }
            // line 77
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['figure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>    
    <div class=\"clear\">
        <div  class=\"col d-flex m-5 align-itms-center  justify-content-center \">
            <button id=\"load_more_tricks_button\" class=\" btn btn-primary p-3 pr-5 pl-5\">
                Load more
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_perso_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Figure/confirm_delete.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/load_more_figure.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_perso_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        // line 95
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 95,  284 => 94,  272 => 92,  267 => 91,  257 => 90,  239 => 81,  230 => 77,  227 => 76,  215 => 69,  205 => 62,  202 => 61,  199 => 60,  197 => 59,  192 => 57,  188 => 56,  180 => 54,  174 => 52,  170 => 51,  167 => 50,  164 => 49,  138 => 27,  135 => 26,  132 => 25,  122 => 24,  93 => 6,  83 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ controller_name }} {% endblock %}

{% block bodyheader %}
 <div class=\"header-body-element w-100 d-flex align-items-center justify-content-center\" style=\"background-image: url('{{asset('media/img/snowboard_wallpaper.jpg')}}');
    height: 30vh;
    background-color: rgb(0, 0, 0);
    background-blend-mode: screen;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}\">
        <table>
            <tr>
                <td><h2 class=\"shadow fst-italic align-middle text-light text-center\"> Snowboard  </h2></td>
            </tr>
            <tr>
                <td class=\"fst-italic text-light\">\"La passion du Snowboard\"</td>
            </tr>
        </table>
    </div>
{% endblock %}
{% block body %}
    {% if app.user is not null %}
         {% if app.user.roles[0] == 'administrator' %}
            <a href=\"{{ path('app_creation_figure') }}\">
                <button class=\"btn btn-success\"> Ajouter </button>
            </a>
            <div class=\"modal fade\" id=\"confirmDelete\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h1 class=\"modal-title fs-5\" id=\"confirmDeleteLabel\">Modal title</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            ...
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" id=\"colse-del-modal\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirm-del-figure\">Confirmer la suppression</button>
                        </div>
                    </div>
                </div>
            </div>
          
         {% endif %}
    {% endif %}
    <div id='tricks-card-list' class=\"my-5 row row-cols-1 row-cols-md-2 g-4\">
    {% for figure in data %}
        <div class=\"col tricks-col {{figure.figure.slug}} d-flex justify-content-center\">
            <div class=\"tricks-card card\">
                <img class=\"top-img-card\" src=\"{{ asset('media/img/figures/')}}{{figure.photo.url}}\" alt=\"{{figure.figure.nom}}\"/>
                <div class=\"card-body\">
                    <a href=\"{{ path('app_figure', {slug: figure.figure.slug } ) }}\" >
                        <h3 class=\"col-8 h4 text-dark\"> {{figure.figure.nom}} </h3>
                    </a>
                    {% if app.user is not null %}
                        {% if app.user.roles[0] == 'administrator' %}
                            <div class=\"col-2 edit-card-div\">
                                <a href=\"{{ path('app_edition_figure', {slug: figure.figure.slug } ) }}\">
                                    <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                                        <path d=\"M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z\"/>
                                    </svg>
                                </a>
                            </div>
                            <div class=\"col-2 trash-card-div\">
                                <a href=\"#\" class=\"del-figure-btn\" link=\"{{ path('app_supression_figure', { slug : figure.figure.slug  } ) }}\" slug=\"{{figure.figure.slug}}\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDelete\">
                                    <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path d=\"M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z\"/>
                                    </svg>
                                </a>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endfor %}
    </div>    
    <div class=\"clear\">
        <div  class=\"col d-flex m-5 align-itms-center  justify-content-center \">
            <button id=\"load_more_tricks_button\" class=\" btn btn-primary p-3 pr-5 pl-5\">
                Load more
            </button>
        </div>
    </div>
{% endblock %}
{% block perso_javascripts %}
    <script src=\"{{ asset('js/Figure/confirm_delete.js') }}\"></script>
    <script src=\"{{ asset('js/load_more_figure.js') }}\"></script> 
{% endblock %}
{% block perso_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/home/index.css') }}\" />
{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\Projet_OC6\\templates\\home\\index.html.twig");
    }
}
