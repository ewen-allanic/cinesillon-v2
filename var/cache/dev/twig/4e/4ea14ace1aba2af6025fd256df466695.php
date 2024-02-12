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
class __TwigTemplate_e59be4f00206d6daa2400daaff089fa9 extends Template
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
    <div class=\"w-1/3\">
        ";
        // line 4
        echo "    </div>
    <p class=\"w-1/3 text-gray-400\">&copy; Ciné Sillon Collection 2023 |
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\" alt=\"Lien vers la page de mentions légales\" class=\"p-link\">Mentions légales</a>
    </p>
    <div class=\"w-1/3\">
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">
            <img class=\"w-[100px] m-auto\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-cinecillon.png"), "html", null, true);
        echo "\" alt=\"logo\">
        </a>
    </div>
</footer>";
        
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
        return array (  61 => 10,  57 => 9,  51 => 6,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"w-full h-fit py-6 bg-[url('~/public/images/footerbackgroundimage.png')] flex items-center text-center\">
    <div class=\"w-1/3\">
        {# Réseaux sociaux #}
    </div>
    <p class=\"w-1/3 text-gray-400\">&copy; Ciné Sillon Collection 2023 |
        <a href=\"{{ path('mentions_legales') }}\" alt=\"Lien vers la page de mentions légales\" class=\"p-link\">Mentions légales</a>
    </p>
    <div class=\"w-1/3\">
        <a href=\"{{ path('home_page') }}\">
            <img class=\"w-[100px] m-auto\" src=\"{{ asset('images/logo-cinecillon.png') }}\" alt=\"logo\">
        </a>
    </div>
</footer>", "partials/footer.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/partials/footer.html.twig");
    }
}
