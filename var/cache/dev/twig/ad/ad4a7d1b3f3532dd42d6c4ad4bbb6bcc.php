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

/* partials/home_header.html.twig */
class __TwigTemplate_7976ebe003cea7bea09da55539063b51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home_header.html.twig"));

        // line 1
        echo "<header class=\"h-[450px] bg-[url('~/public/images/homepage-banner.png')] relative flex flex-col items-center justify-between py-8\" style=\"background-position: 51% 87%;\">
\t<h1 class=\"absolute\" hidden>CINÉSILLON Collection</h1>
\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\" class=\"absolute w-[400px] top-16\">
\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-cinecillon.png"), "html", null, true);
        echo "\" alt=\"\">
\t</a>
\t<nav class=\"flex w-full justify-between items-center container\">
\t\t<a href=\"#\" class=\"text-white p-link no-underline\">Qui suis-je ?</a>
\t\t<ul class=\"flex gap-4\">
\t\t\t<li><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/facebook.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/instagram.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/vinyle.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t</ul>
\t</nav>
\t<p class=\"flex self-start flex-col text-white ml-[180px] text-3xl\">
\t\t<span>La musique</span>
\t\t<span class=\"ml-8\">au service</span>
\t\t<span class=\"ml-16\">de l'image</span>
\t</p>
\t<div>
\t\t<form action=\"#\" method=\"get\" class=\"flex mr-2 p-2 border border-gray-400 bg-white rounded-full px-2.5 py-2 divide-x-2\">
\t\t\t<div class=\"flex flex-col\">
\t\t\t\t<div class=\"text-xs mb-[-2px] h-2/4 mt-1 pl-4 text-black font-semibold text-sm\">Nom</div>
\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"name\" placeholder=\"Recherchez un nom\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t</div>
\t\t\t<div class=\"flex flex-col\">
\t\t\t\t<div class=\"text-xs mt-1 mb-[-2px] h-2/4 pl-4 text-black font-semibold text-sm\">Titre</div>
\t\t\t\t<input type=\"text\" name=\"Titre\" id=\"title\" placeholder=\"Recherchez un titre\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"bg-[#FF5E00] hover:bg-[#E65500] text-white py-2 px-4 cursor-pointer text-xs font-medium rounded-full\">
\t\t\t\t<img class=\"h-4 w-4 inline-block mr-1\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/search.svg"), "html", null, true);
        echo "\">
\t\t\t\tRechercher
\t\t\t</button>
\t\t</form>
\t</div>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/home_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  67 => 11,  63 => 10,  59 => 9,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"h-[450px] bg-[url('~/public/images/homepage-banner.png')] relative flex flex-col items-center justify-between py-8\" style=\"background-position: 51% 87%;\">
\t<h1 class=\"absolute\" hidden>CINÉSILLON Collection</h1>
\t<a href=\"{{ path('home_page') }}\" class=\"absolute w-[400px] top-16\">
\t\t<img src=\"{{ asset('images/logo-cinecillon.png') }}\" alt=\"\">
\t</a>
\t<nav class=\"flex w-full justify-between items-center container\">
\t\t<a href=\"#\" class=\"text-white p-link no-underline\">Qui suis-je ?</a>
\t\t<ul class=\"flex gap-4\">
\t\t\t<li><img src=\"{{ asset('images/icon/facebook.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"{{ asset('images/icon/instagram.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t\t<li><img src=\"{{ asset('images/icon/vinyle.png') }}\" class=\"w-9 h-9\" alt=\"\"></li>
\t\t</ul>
\t</nav>
\t<p class=\"flex self-start flex-col text-white ml-[180px] text-3xl\">
\t\t<span>La musique</span>
\t\t<span class=\"ml-8\">au service</span>
\t\t<span class=\"ml-16\">de l'image</span>
\t</p>
\t<div>
\t\t<form action=\"#\" method=\"get\" class=\"flex mr-2 p-2 border border-gray-400 bg-white rounded-full px-2.5 py-2 divide-x-2\">
\t\t\t<div class=\"flex flex-col\">
\t\t\t\t<div class=\"text-xs mb-[-2px] h-2/4 mt-1 pl-4 text-black font-semibold text-sm\">Nom</div>
\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"name\" placeholder=\"Recherchez un nom\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t</div>
\t\t\t<div class=\"flex flex-col\">
\t\t\t\t<div class=\"text-xs mt-1 mb-[-2px] h-2/4 pl-4 text-black font-semibold text-sm\">Titre</div>
\t\t\t\t<input type=\"text\" name=\"Titre\" id=\"title\" placeholder=\"Recherchez un titre\" class=\"w-full h-2/5 text-xs mr-2 pl-4 rounded-md focus:outline-none focus:border-blue-500\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"bg-[#FF5E00] hover:bg-[#E65500] text-white py-2 px-4 cursor-pointer text-xs font-medium rounded-full\">
\t\t\t\t<img class=\"h-4 w-4 inline-block mr-1\" src=\"{{ asset('images/search.svg') }}\">
\t\t\t\tRechercher
\t\t\t</button>
\t\t</form>
\t</div>
</header>
", "partials/home_header.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/partials/home_header.html.twig");
    }
}
