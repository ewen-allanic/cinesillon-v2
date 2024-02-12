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

/* partials/header.html.twig */
class __TwigTemplate_ae0e2b8a688efb74a185488fbe56a98e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<header class=\"h-28 px-28 bg-[url('~/public/images/homepage-banner.png')] relative\" style=\"background-position: 51% 70%;\">
\t<h1 class=\"absolute\" hidden>CINÉSILLON Collection</h1>
\t<nav class=\"flex w-full justify-between items-center py-4\">
\t\t<ul class=\"w-1/3 flex gap-4\">
\t\t\t<li><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/facebook.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/instagram.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/vinyle.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t</ul>
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\" class=\"w-1/3\">
\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-cinecillon.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"w-[250px] m-auto\">
\t\t</a>
\t\t<div class=\"w-1/3\">
\t\t\t";
        // line 13
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13);
        // line 14
        echo "\t\t\t";
        $context["researchExcludedRoutes"] = [0 => "mentions_legales"];
        // line 15
        echo "
\t\t\t";
        // line 16
        if (!twig_in_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), (isset($context["researchExcludedRoutes"]) || array_key_exists("researchExcludedRoutes", $context) ? $context["researchExcludedRoutes"] : (function () { throw new RuntimeError('Variable "researchExcludedRoutes" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "\t\t\t\t<form action=\"#\" method=\"get\" class=\"flex mr-2 p-2 border border-gray-400 bg-white rounded-full px-2.5 py-2 divide-x-2\">
\t\t\t\t\t<div class=\"flex flex-col\">
\t\t\t\t\t\t<div class=\"text-xs mb-[-2px] h-2/4 mt-1 pl-4 text-black font-semibold text-sm\">Nom</div>
\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"name\" placeholder=\"Recherchez un nom\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col\">
\t\t\t\t\t\t<div class=\"text-xs mt-1 mb-[-2px] h-2/4 pl-4 text-black font-semibold text-sm\">Titre</div>
\t\t\t\t\t\t<input type=\"text\" name=\"Titre\" id=\"title\" placeholder=\"Recherchez un titre\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"bg-[#FF5E00] hover:bg-[#E65500] text-white py-2 px-4 cursor-pointer text-xs font-medium rounded-full\">
\t\t\t\t\t\t<img class=\"h-4 w-4 inline-block mr-1\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/search.svg"), "html", null, true);
            echo "\">
\t\t\t\t\t\tRechercher
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t";
        }
        // line 32
        echo "\t\t</div>
\t</nav>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  94 => 27,  82 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"h-28 px-28 bg-[url('~/public/images/homepage-banner.png')] relative\" style=\"background-position: 51% 70%;\">
\t<h1 class=\"absolute\" hidden>CINÉSILLON Collection</h1>
\t<nav class=\"flex w-full justify-between items-center py-4\">
\t\t<ul class=\"w-1/3 flex gap-4\">
\t\t\t<li><img src=\"{{ asset('images/icon/facebook.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"{{ asset('images/icon/instagram.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"{{ asset('images/icon/vinyle.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t</ul>
\t\t<a href=\"{{ path('home_page') }}\" class=\"w-1/3\">
\t\t\t<img src=\"{{ asset('images/logo-cinecillon.png') }}\" alt=\"Logo\" class=\"w-[250px] m-auto\">
\t\t</a>
\t\t<div class=\"w-1/3\">
\t\t\t{% set route = app.request.attributes.get('_route') %}
\t\t\t{% set researchExcludedRoutes = [\"mentions_legales\"] %}

\t\t\t{% if route not in researchExcludedRoutes %}
\t\t\t\t<form action=\"#\" method=\"get\" class=\"flex mr-2 p-2 border border-gray-400 bg-white rounded-full px-2.5 py-2 divide-x-2\">
\t\t\t\t\t<div class=\"flex flex-col\">
\t\t\t\t\t\t<div class=\"text-xs mb-[-2px] h-2/4 mt-1 pl-4 text-black font-semibold text-sm\">Nom</div>
\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"name\" placeholder=\"Recherchez un nom\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col\">
\t\t\t\t\t\t<div class=\"text-xs mt-1 mb-[-2px] h-2/4 pl-4 text-black font-semibold text-sm\">Titre</div>
\t\t\t\t\t\t<input type=\"text\" name=\"Titre\" id=\"title\" placeholder=\"Recherchez un titre\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"bg-[#FF5E00] hover:bg-[#E65500] text-white py-2 px-4 cursor-pointer text-xs font-medium rounded-full\">
\t\t\t\t\t\t<img class=\"h-4 w-4 inline-block mr-1\" src=\"{{ asset('images/search.svg') }}\">
\t\t\t\t\t\tRechercher
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t{% endif %}
\t\t</div>
\t</nav>
</header>
", "partials/header.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/partials/header.html.twig");
    }
}
