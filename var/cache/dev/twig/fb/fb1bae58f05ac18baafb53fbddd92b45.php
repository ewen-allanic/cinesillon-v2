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

/* partials/footer.html.twig */
class __TwigTemplate_f7b5387d6dd41df90fe3c90d2025f707 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"w-full h-fit py-6 bg-[url('~/public/images/footerbackgroundimage.png')] flex items-center text-center\">
\t<div
\t\tclass=\"w-1/3 flex justify-center space-x-4\">
\t\t";
        // line 5
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/facebook.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\">
\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/instagram.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\">
\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/vinyle.png"), "html", null, true);
        echo "\" class=\"w-9 h-9\" alt=\"\">
\t</div>


\t<p class=\"w-1/3 text-gray-400\">&copy; Ciné Sillon Collection 2023 |
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\" alt=\"Lien vers la page de mentions légales\" class=\"p-link\">Mentions légales</a>
\t</p>
\t<div class=\"w-1/3\">
\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">
\t\t\t<img class=\"w-[100px] m-auto\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-cinecillon.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t</a>
\t</div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  71 => 15,  65 => 12,  57 => 7,  53 => 6,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"w-full h-fit py-6 bg-[url('~/public/images/footerbackgroundimage.png')] flex items-center text-center\">
\t<div
\t\tclass=\"w-1/3 flex justify-center space-x-4\">
\t\t{# Réseaux sociaux #}
\t\t<img src=\"{{ asset('images/icon/facebook.png') }}\" class=\"w-9 h-9\" alt=\"\">
\t\t<img src=\"{{ asset('images/icon/instagram.png') }}\" class=\"w-9 h-9\" alt=\"\">
\t\t<img src=\"{{ asset('images/icon/vinyle.png') }}\" class=\"w-9 h-9\" alt=\"\">
\t</div>


\t<p class=\"w-1/3 text-gray-400\">&copy; Ciné Sillon Collection 2023 |
\t\t<a href=\"{{ path('mentions_legales') }}\" alt=\"Lien vers la page de mentions légales\" class=\"p-link\">Mentions légales</a>
\t</p>
\t<div class=\"w-1/3\">
\t\t<a href=\"{{ path('home_page') }}\">
\t\t\t<img class=\"w-[100px] m-auto\" src=\"{{ asset('images/logo-cinecillon.png') }}\" alt=\"logo\">
\t\t</a>
\t</div>
</footer>
", "partials/footer.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/partials/footer.html.twig");
    }
}
