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

/* home_page/index.html.twig */
class __TwigTemplate_ccbb95f73aa7efb74ed30644cd77634d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
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

        echo "Ciné Sillon Collection
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"container m-auto my-10 px-16\">
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">Dernier films</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t";
        // line 14
        if (twig_test_empty((isset($context["filmPieces"]) || array_key_exists("filmPieces", $context) ? $context["filmPieces"] : (function () { throw new RuntimeError('Variable "filmPieces" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "\t\t\t\t<p>Il n'y a pas encore de film</p>
\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filmPieces"]) || array_key_exists("filmPieces", $context) ? $context["filmPieces"] : (function () { throw new RuntimeError('Variable "filmPieces" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 18
                echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "originalTitle", [], "any", false, false, false, 21), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "frenchTitle", [], "any", false, false, false, 23), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["film"], "getArtist", [], "method", false, false, false, 26), "getFirstname", [], "method", false, false, false, 26), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["film"], "getArtist", [], "method", false, false, false, 27), "getLastname", [], "method", false, false, false, 27), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "realisedAt", [], "any", false, false, false, 28), "d"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/orange-arrow.svg"), "html", null, true);
                echo "\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t";
        }
        // line 39
        echo "\t\t</div>

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  155 => 38,  143 => 32,  138 => 30,  133 => 28,  129 => 27,  125 => 26,  119 => 23,  114 => 21,  109 => 18,  104 => 17,  100 => 15,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ciné Sillon Collection
{% endblock %}

{% block body %}

\t<div class=\"container m-auto my-10 px-16\">
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">Dernier films</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t{% if filmPieces is empty %}
\t\t\t\t<p>Il n'y a pas encore de film</p>
\t\t\t{% else %}
\t\t\t\t{% for film in filmPieces %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">{{ film.originalTitle }}
\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t{{ film.frenchTitle }}</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>{{ film.getArtist().getFirstname() }}
\t\t\t\t\t\t\t\t{{ film.getArtist().getLastname() }}</p>
\t\t\t\t\t\t\t<p>{{ film.realisedAt | date('d') }}</p>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t{{ film.createdAt | date('d/m/Y') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"{{ asset('images/orange-arrow.svg') }}\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>

\t</div>
{% endblock %}
", "home_page/index.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/home_page/index.html.twig");
    }
}
