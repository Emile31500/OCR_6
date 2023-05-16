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
class __TwigTemplate_821dfb006c0f708a776ac3e3e28b1568 extends Template
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

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        <div class=\"mb-3 mt-3 d-flex justify-content-end\">
            <a href=\"#bottom-buton\">
                <svg id=\"top-button\" width=\"18\" height=\"30\">
                    <defs>
                        <marker id=\"arrow\" viewBox=\"0 -5 10 10\" refX=\"5\" refY=\"0\" markerWidth=\"4\" markerHeight=\"4\" orient=\"auto\">
                            <path class=\"cool\" d=\"M0,-5L10,0L0,5\" class=\"arrowHead\"></path>
                        </marker>
                    </defs>
                    <line class=\"cool\" x1=\"9\" y1=\"0\" x2=\"9\" y2=\"20\" stroke=\"teal\" stroke-width=\"4\" marker-end=\"url(#arrow)\"></line>
                </svg>
            </a>
        </div>
        ";
        // line 38
        if (((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 38, $this->source); })()) == true)) {
            // line 39
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
        // line 60
        echo "    <div id='tricks-card-list' class=\"my-5 row row-cols-1 row-cols-md-2 g-4\">
    </div>    
    <div class=\"clear\">
        <div  class=\"col d-flex m-5 align-itms-center  justify-content-center \">
            <button id=\"load_more_tricks_button\" class=\" btn btn-primary p-3 pr-5 pl-5\">
                Load more
            </button>
        </div>
    </div>
    <div class=\"mb-3 mt-3 d-flex justify-content-end\">
        <a href=\"#top-button\">
            <svg id=\"bottom-buton\" width=\"18\" height=\"30\">
                <defs>
                    <marker id=\"arrow\" viewBox=\"0 -5 10 10\" refX=\"5\" refY=\"0\" markerWidth=\"4\" markerHeight=\"4\" orient=\"auto\">
                    <path class=\"cool\" d=\"M0,-5L10,0L0,5\" class=\"arrowHead\"></path>
                    </marker>
                </defs>
                <line class=\"cool\" x1=\"9\" y1=\"30\" x2=\"9\" y2=\"8\" stroke=\"teal\" stroke-width=\"4\" marker-end=\"url(#arrow)\"></line>
            </svg>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_perso_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_javascripts"));

        // line 83
        echo "
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Figure/confirm_delete.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Figure/load.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_perso_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso_stylesheets"));

        // line 88
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home/index.css"), "html", null, true);
        echo "\" />
    <style>
  .cool {
        fill: teal;
        stroke: teal;
    }
</style>
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
        return array (  244 => 88,  234 => 87,  222 => 85,  218 => 84,  215 => 83,  205 => 82,  174 => 60,  149 => 39,  147 => 38,  133 => 26,  123 => 25,  93 => 6,  83 => 5,  62 => 3,  39 => 1,);
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
        <div class=\"mb-3 mt-3 d-flex justify-content-end\">
            <a href=\"#bottom-buton\">
                <svg id=\"top-button\" width=\"18\" height=\"30\">
                    <defs>
                        <marker id=\"arrow\" viewBox=\"0 -5 10 10\" refX=\"5\" refY=\"0\" markerWidth=\"4\" markerHeight=\"4\" orient=\"auto\">
                            <path class=\"cool\" d=\"M0,-5L10,0L0,5\" class=\"arrowHead\"></path>
                        </marker>
                    </defs>
                    <line class=\"cool\" x1=\"9\" y1=\"0\" x2=\"9\" y2=\"20\" stroke=\"teal\" stroke-width=\"4\" marker-end=\"url(#arrow)\"></line>
                </svg>
            </a>
        </div>
        {% if isAdmin == true %}
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
    <div id='tricks-card-list' class=\"my-5 row row-cols-1 row-cols-md-2 g-4\">
    </div>    
    <div class=\"clear\">
        <div  class=\"col d-flex m-5 align-itms-center  justify-content-center \">
            <button id=\"load_more_tricks_button\" class=\" btn btn-primary p-3 pr-5 pl-5\">
                Load more
            </button>
        </div>
    </div>
    <div class=\"mb-3 mt-3 d-flex justify-content-end\">
        <a href=\"#top-button\">
            <svg id=\"bottom-buton\" width=\"18\" height=\"30\">
                <defs>
                    <marker id=\"arrow\" viewBox=\"0 -5 10 10\" refX=\"5\" refY=\"0\" markerWidth=\"4\" markerHeight=\"4\" orient=\"auto\">
                    <path class=\"cool\" d=\"M0,-5L10,0L0,5\" class=\"arrowHead\"></path>
                    </marker>
                </defs>
                <line class=\"cool\" x1=\"9\" y1=\"30\" x2=\"9\" y2=\"8\" stroke=\"teal\" stroke-width=\"4\" marker-end=\"url(#arrow)\"></line>
            </svg>
        </a>
    </div>
{% endblock %}
{% block perso_javascripts %}

    <script src=\"{{ asset('js/Figure/confirm_delete.js') }}\"></script>
    <script src=\"{{ asset('js/Figure/load.js') }}\"></script>
{% endblock %}
{% block perso_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/home/index.css') }}\" />
    <style>
  .cool {
        fill: teal;
        stroke: teal;
    }
</style>
{% endblock %}
", "home/index.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/home/index.html.twig");
    }
}
