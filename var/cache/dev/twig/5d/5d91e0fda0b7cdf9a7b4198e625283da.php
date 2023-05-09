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

/* figure/list.html.twig */
class __TwigTemplate_9e6bd913469df4b9ac70a81f8e374b25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "figure/list.html.twig"));

        // line 1
        echo "<div id='tricks-card-list'>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["figures"]) || array_key_exists("figures", $context) ? $context["figures"] : (function () { throw new RuntimeError('Variable "figures" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["figure"]) {
            // line 3
            echo "        <div class=\"col tricks-col ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 3), "html", null, true);
            echo " d-flex justify-content-center\" id=\"tricks-lmnt-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <div class=\"tricks-card card\">
                <img class=\"top-img-card\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/figures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "imageUrl", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "nom", [], "any", false, false, false, 5), "html", null, true);
            echo "\"/>
                <div class=\"card-body\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_figure", ["slug" => twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" >
                        <h3 class=\"col-8 h4 text-dark\"> ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "nom", [], "any", false, false, false, 8), "html", null, true);
            echo " </h3>
                    </a>
                    ";
            // line 10
            if (((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 10, $this->source); })()) == true)) {
                // line 11
                echo "                        <div class=\"col-2 edit-card-div\">
                            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edition_figure", ["slug" => twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">
                                <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                                    <path d=\"M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z\"/>
                                </svg>
                            </a>
                        </div>
                        <div class=\"col-2 trash-card-div\">
                            <a href=\"#\" class=\"del-figure-btn\" link=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supression_figure", ["slug" => twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" slug=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "slug", [], "any", false, false, false, 19), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDelete\">
                                <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                    <path d=\"M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z\"/>
                                </svg>
                            </a>
                        </div>
                    ";
            }
            // line 26
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['figure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "figure/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  102 => 26,  90 => 19,  80 => 12,  77 => 11,  75 => 10,  70 => 8,  66 => 7,  58 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id='tricks-card-list'>
    {% for figure in figures %}
        <div class=\"col tricks-col {{figure.slug}} d-flex justify-content-center\" id=\"tricks-lmnt-{{figure.slug}}\">
            <div class=\"tricks-card card\">
                <img class=\"top-img-card\" src=\"{{ asset('media/img/figures/')}}{{figure.imageUrl}}\" alt=\"{{figure.nom}}\"/>
                <div class=\"card-body\">
                    <a href=\"{{ path('app_figure', {slug: figure.slug } ) }}\" >
                        <h3 class=\"col-8 h4 text-dark\"> {{figure.nom}} </h3>
                    </a>
                    {% if isAdmin == true %}
                        <div class=\"col-2 edit-card-div\">
                            <a href=\"{{ path('app_edition_figure', {slug: figure.slug } ) }}\">
                                <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                                    <path d=\"M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z\"/>
                                </svg>
                            </a>
                        </div>
                        <div class=\"col-2 trash-card-div\">
                            <a href=\"#\" class=\"del-figure-btn\" link=\"{{ path('app_supression_figure', { slug : figure.slug  } ) }}\" slug=\"{{figure.slug}}\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDelete\">
                                <svg class=\"icone\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                    <path d=\"M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z\"/>
                                </svg>
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    {% endfor %}
</div>", "figure/list.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/figure/list.html.twig");
    }
}
