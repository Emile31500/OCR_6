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

/* mail/verified_email.html.twig */
class __TwigTemplate_c1c299d112c275f3c3796128dcf47395 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/verified_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/verified_email.html.twig"));

        // line 1
        echo "
<body>
    <h1>
        Vérification de votre email: 
    </h1>

    <p>
        Bonjour, ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ". Merci pour votre inscription chez snowtricks : 
        <br>
        Il ne vous reste maintenant plus qu'à vérifiez votre email grâce au lien suivant : <a href=\"http://192.168.1.78:8100/verifier-email/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["code_verification"]) || array_key_exists("code_verification", $context) ? $context["code_verification"] : (function () { throw new RuntimeError('Variable "code_verification" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">activer son compte
        </a>
        <br>Antetion ! Ce lien expirera sous 24 heures. Votre compte sera automatiquement supprimé après ce délais.
    </p> 
</body>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/verified_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<body>
    <h1>
        Vérification de votre email: 
    </h1>

    <p>
        Bonjour, {{name}}. Merci pour votre inscription chez snowtricks : 
        <br>
        Il ne vous reste maintenant plus qu'à vérifiez votre email grâce au lien suivant : <a href=\"http://192.168.1.78:8100/verifier-email/{{code_verification}}\">activer son compte
        </a>
        <br>Antetion ! Ce lien expirera sous 24 heures. Votre compte sera automatiquement supprimé après ce délais.
    </p> 
</body>
", "mail/verified_email.html.twig", "/opt/lampp/htdocs/Projet OC6/templates/mail/verified_email.html.twig");
    }
}
