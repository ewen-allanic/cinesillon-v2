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
class __TwigTemplate_0e818329b6a2c2bfc6256dce5cd398e3 extends Template
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
\t<div class=\"container m-auto my-10 px-16 pt-8\">
\t\t<div class=\"flex justify-center\">
\t\t\t<span class=\"text-regal-orange text-3xl font-bold\">DERNIERS AJOUTS</span>
\t\t</div>

\t\t";
        // line 14
        echo "\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">FILMS</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t";
        // line 19
        if (twig_test_empty((isset($context["filmPieces"]) || array_key_exists("filmPieces", $context) ? $context["filmPieces"] : (function () { throw new RuntimeError('Variable "filmPieces" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "\t\t\t\t<p>Il n'y a pas encore de film</p>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filmPieces"]) || array_key_exists("filmPieces", $context) ? $context["filmPieces"] : (function () { throw new RuntimeError('Variable "filmPieces" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["film"]) {
                // line 23
                echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("/images/film" . ($context["key"] + 1)) . ".png")), "html", null, true);
                echo "\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "originalTitle", [], "any", false, false, false, 28), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["film"], "frenchTitle", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "frenchTitle", [], "any", false, false, false, 32), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["film"], "getArtist", [], "method", false, false, false, 37), "getFirstname", [], "method", false, false, false, 37), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["film"], "getArtist", [], "method", false, false, false, 38), "getLastname", [], "method", false, false, false, 38), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "realisedAt", [], "any", false, false, false, 39), "Y"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 41), "d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->monthName(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 42), "n")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 43), "Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/orange-arrow.svg"), "html", null, true);
                echo "\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t";
        }
        // line 52
        echo "\t\t</div>

\t\t";
        // line 55
        echo "\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">ALBUMS</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t";
        // line 60
        if (twig_test_empty((isset($context["albumPieces"]) || array_key_exists("albumPieces", $context) ? $context["albumPieces"] : (function () { throw new RuntimeError('Variable "albumPieces" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "\t\t\t\t<p>Il n'y a pas encore d'albums</p>
\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["albumPieces"]) || array_key_exists("albumPieces", $context) ? $context["albumPieces"] : (function () { throw new RuntimeError('Variable "albumPieces" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["album"]) {
                // line 64
                echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("/images/album" . ($context["key"] + 1)) . ".png")), "html", null, true);
                echo "\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "originalTitle", [], "any", false, false, false, 69), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 70
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["album"], "frenchTitle", [], "any", false, false, false, 70))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "frenchTitle", [], "any", false, false, false, 72), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "getArtist", [], "method", false, false, false, 77), "getFirstname", [], "method", false, false, false, 77), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "getArtist", [], "method", false, false, false, 78), "getLastname", [], "method", false, false, false, 78), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "labelName", [], "any", false, false, false, 79), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t(";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "realisedAt", [], "any", false, false, false, 80), "Y"), "html", null, true);
                echo ")</p>
\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t";
                // line 82
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "createdAt", [], "any", false, false, false, 82), "d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->monthName(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "createdAt", [], "any", false, false, false, 83), "n")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "createdAt", [], "any", false, false, false, 84), "Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/orange-arrow.svg"), "html", null, true);
                echo "\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t";
        }
        // line 93
        echo "\t\t</div>

\t\t";
        // line 96
        echo "\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">ARTISTES</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t";
        // line 101
        if (twig_test_empty((isset($context["latestArtists"]) || array_key_exists("latestArtists", $context) ? $context["latestArtists"] : (function () { throw new RuntimeError('Variable "latestArtists" does not exist.', 101, $this->source); })()))) {
            // line 102
            echo "\t\t\t\t<p>Il n'y a pas encore d'artistes</p>
\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestArtists"]) || array_key_exists("latestArtists", $context) ? $context["latestArtists"] : (function () { throw new RuntimeError('Variable "latestArtists" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["artist"]) {
                // line 105
                echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("/images/artist" . ($context["key"] + 1)) . ".png")), "html", null, true);
                echo "\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "firstname", [], "any", false, false, false, 110), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "lastname", [], "any", false, false, false, 111), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span>";
                // line 115
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "dateOfBirth", [], "any", false, false, false, 115), "Y"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t";
                // line 116
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["artist"], "dateOfDeath", [], "any", false, false, false, 116))) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
                    // line 119
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "dateOfDeath", [], "any", false, false, false, 119), "Y"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "createdAt", [], "any", false, false, false, 124), "d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->monthName(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "createdAt", [], "any", false, false, false, 125), "n")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 126
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "createdAt", [], "any", false, false, false, 126), "Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/orange-arrow.svg"), "html", null, true);
                echo "\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t\t";
        }
        // line 135
        echo "\t\t</div>

\t\t";
        // line 138
        echo "\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">QUI SUIS-JE ?</span>
\t\t</h2>
\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 gap-2\">
\t\t\t<div>
\t\t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/whoami.png"), "html", null, true);
        echo "\" class=\"w-[540px] h-[370px]\" alt=\"\">
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\" before:bg-regal-grey mb-0\">
\t\t\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">Cinesillon collection</span>
\t\t\t\t</div>
\t\t\t\t<p class=\"border-s-8 border-regal-grey ps-4 pt-4\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat nisl vel pretium lectus. Urna molestie at elementum eu facilisis. Viverra accumsan in nisl nisi. Odio ut enim blandit volutpat maecenas volutpat. Nisl pretium fusce id velit ut tortor pretium viverra suspendisse. Odio facilisis mauris sit amet. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Eu lobortis elementum nibh tellus molestie nunc non blandit. Sed faucibus turpis in eu mi bibendum neque egestas congue. Scelerisque fermentum dui faucibus in. Fermentum et sollicitudin ac orci phasellus egestas. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Massa eget egestas purus viverra accumsan in nisl. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Netus et malesuada fames ac turpis egestas integer eget aliquet.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

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
        return array (  384 => 143,  377 => 138,  373 => 135,  370 => 134,  358 => 128,  353 => 126,  349 => 125,  345 => 124,  340 => 121,  335 => 119,  331 => 117,  329 => 116,  325 => 115,  318 => 111,  314 => 110,  307 => 106,  304 => 105,  299 => 104,  295 => 102,  293 => 101,  286 => 96,  282 => 93,  279 => 92,  267 => 86,  262 => 84,  258 => 83,  254 => 82,  249 => 80,  245 => 79,  241 => 78,  237 => 77,  232 => 74,  227 => 72,  224 => 71,  222 => 70,  218 => 69,  211 => 65,  208 => 64,  203 => 63,  199 => 61,  197 => 60,  190 => 55,  186 => 52,  183 => 51,  171 => 45,  166 => 43,  162 => 42,  158 => 41,  153 => 39,  149 => 38,  145 => 37,  140 => 34,  135 => 32,  132 => 31,  130 => 30,  125 => 28,  118 => 24,  115 => 23,  110 => 22,  106 => 20,  104 => 19,  97 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ciné Sillon Collection
{% endblock %}

{% block body %}

\t<div class=\"container m-auto my-10 px-16 pt-8\">
\t\t<div class=\"flex justify-center\">
\t\t\t<span class=\"text-regal-orange text-3xl font-bold\">DERNIERS AJOUTS</span>
\t\t</div>

\t\t{# Three latest movies added #}
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">FILMS</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t{% if filmPieces is empty %}
\t\t\t\t<p>Il n'y a pas encore de film</p>
\t\t\t{% else %}
\t\t\t\t{% for key, film in filmPieces %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('/images/film' ~ (key + 1) ~ '.png') }}\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t{{ film.originalTitle }}

\t\t\t\t\t\t\t\t\t{% if film.frenchTitle %}
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t{{ film.frenchTitle }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>{{ film.getArtist().getFirstname() }}
\t\t\t\t\t\t\t\t{{ film.getArtist().getLastname() }}</p>
\t\t\t\t\t\t\t<p>{{ film.realisedAt | date('Y') }}</p>
\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t{{ film.createdAt | date('d') }}
\t\t\t\t\t\t\t\t{{ film.createdAt | date('n') | month_name }}
\t\t\t\t\t\t\t\t{{ film.createdAt | date('Y') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"{{ asset('images/orange-arrow.svg') }}\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>

\t\t{# Three latest albums added #}
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">ALBUMS</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t{% if albumPieces is empty %}
\t\t\t\t<p>Il n'y a pas encore d'albums</p>
\t\t\t{% else %}
\t\t\t\t{% for key, album in albumPieces %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('/images/album' ~ (key + 1) ~ '.png') }}\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t{{ album.originalTitle }}
\t\t\t\t\t\t\t\t\t{% if album.frenchTitle is not null %}
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t{{ album.frenchTitle }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<p>{{ album.getArtist().getFirstname() }}
\t\t\t\t\t\t\t\t{{ album.getArtist().getLastname() }}</p>
\t\t\t\t\t\t\t<p>{{ album.labelName }}
\t\t\t\t\t\t\t\t({{ album.realisedAt | date('Y') }})</p>
\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t{{ album.createdAt | date('d') }}
\t\t\t\t\t\t\t\t{{ album.createdAt | date('n') | month_name }}
\t\t\t\t\t\t\t\t{{ album.createdAt | date('Y') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"{{ asset('images/orange-arrow.svg') }}\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>

\t\t{# Three latest artists added #}
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">ARTISTES</span>
\t\t</h2>

\t\t<div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4\">
\t\t\t{% if latestArtists is empty %}
\t\t\t\t<p>Il n'y a pas encore d'artistes</p>
\t\t\t{% else %}
\t\t\t\t{% for key, artist in latestArtists %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('/images/artist' ~ (key + 1) ~ '.png') }}\" class=\"w-[420px] h-[420px]\" alt=\"\">
\t\t\t\t\t\t<div class=\"relative bg-regal-grey bg-[url('~/public/images/jsp.svg')] bg-no-repeat bg-right bg-contain p-4\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<h3 class=\"font-bold text-xl\">
\t\t\t\t\t\t\t\t\t{{ artist.firstname }}
\t\t\t\t\t\t\t\t\t{{ artist.lastname }}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span>{{ artist.dateOfBirth | date('Y') }}</span>
\t\t\t\t\t\t\t\t{% if artist.dateOfDeath is not null %}
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{{ artist.dateOfDeath | date('Y') }}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t{{ artist.createdAt | date('d') }}
\t\t\t\t\t\t\t\t{{ artist.createdAt | date('n') | month_name }}
\t\t\t\t\t\t\t\t{{ artist.createdAt | date('Y') }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"absolute right-4 bottom-4\"><img src=\"{{ asset('images/orange-arrow.svg') }}\" class=\"\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>

\t\t{# Who am I website description #}
\t\t<h2 class=\"relative before:absolute before:content-[''] before:w-[7px] before:h-[20px] before:bg-aliceblue before:left-3 before:-top-full before:bg-regal-grey after:content-[''] after:absolute after:index-negative after:w-full after:h-[7px] after:bg-aliceblue after:left-0 after:top-1/2 after:transform after:-translate-y-1/2 after:bg-regal-grey mb-10 mt-16\">
\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">QUI SUIS-JE ?</span>
\t\t</h2>
\t\t<div class=\"grid grid-cols-1 md:grid-cols-2 gap-2\">
\t\t\t<div>
\t\t\t\t<img src=\"{{ asset('images/whoami.png') }}\" class=\"w-[540px] h-[370px]\" alt=\"\">
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\" before:bg-regal-grey mb-0\">
\t\t\t\t\t<span class=\"bg-regal-grey px-3 py-2 w-fit\">Cinesillon collection</span>
\t\t\t\t</div>
\t\t\t\t<p class=\"border-s-8 border-regal-grey ps-4 pt-4\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat nisl vel pretium lectus. Urna molestie at elementum eu facilisis. Viverra accumsan in nisl nisi. Odio ut enim blandit volutpat maecenas volutpat. Nisl pretium fusce id velit ut tortor pretium viverra suspendisse. Odio facilisis mauris sit amet. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Eu lobortis elementum nibh tellus molestie nunc non blandit. Sed faucibus turpis in eu mi bibendum neque egestas congue. Scelerisque fermentum dui faucibus in. Fermentum et sollicitudin ac orci phasellus egestas. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Massa eget egestas purus viverra accumsan in nisl. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Netus et malesuada fames ac turpis egestas integer eget aliquet.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
", "home_page/index.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/home_page/index.html.twig");
    }
}
