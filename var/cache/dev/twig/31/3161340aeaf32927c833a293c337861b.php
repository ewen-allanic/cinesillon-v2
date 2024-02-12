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

/* mentions_legales/index.html.twig */
class __TwigTemplate_44b90dfe31005e23ea7bdb04638e39e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions_legales/index.html.twig", 1);
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

        echo "Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"m-auto w-[70%]\">
    <h1 class=\"text-5xl text-center my-[40px] font-bold\">Mentions légales</h1>

    <p>
        La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d'utilisation qui suivent.<br>
        La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la durée d'utilisation du site et jusqu'à ce qu'une nouvelle version la remplace.<br>
        Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : <a href=\"https://www.cnil.fr\" alt=\"Lien ver le site de la CNIL\" class=\"p-link-colored\">https://www.cnil.fr/</a>
    </p>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 1 - Mentions légales</h2>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.1 Site (ci-après « le site ») :</h3>
            <p>Ciné Sillon Collection</p>
        </section>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.2 Éditeur (ci-après « l'éditeur ») :</h3>
            <p>
                ESPOSITO FARESE Thierry<br>
                n° de téléphone : xx.xx.xx.xx.xx<br>
                adresse mail : xxx@xxx.xxx
            </p>
        </section>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.3 Hébergeur (ci-après « l'hébergeur ») :</h3>
            <p>Ciné Sillon Collection est hébérgé par xxx, dont le siège social est situé ...</p>
        </section>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 2 - Accès au site</h2>
        <p class=\"ml-art-content\">
            L'accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation commerciale et notamment l'envoi de courriers électroniques non sollicités.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 3 - Contenu du site</h2>
        <p class=\"ml-art-content\">
            Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.<br>
            Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 4 - Gestion du site</h2>
        <p class=\"ml-art-content mb-0\">Pour la bonne gestion du site, l'éditeur pourra à tout moment :</p>
        <ul class=\"ml-art-list\">
            <li>suspendre, interrompre ou limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internautes ;</li>
            <li>supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales ;</li>
            <li>suspendre le site afin de procéder à des mises à jour.</li>
        </ul>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 5 - Responsabilités</h2>
        <p class=\"ml-art-content\">
            La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.<br>
            Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par ailleurs seul responsable des sites et données que vous consultez.
        </p>
        <p class=\"ml-art-content mb-0\">L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :</p>
        <ul class=\"ml-art-list\">
            <li>du fait de l'usage du site ou de tout service accessible via Internet ;</li>
            <li>du fait du non-respect par vous des présentes conditions générales.</li>
        </ul>
        <p class=\"ml-art-content\">
            L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.<br>
            Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner contre vous pour obtenir l'indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 6 - Liens hypertextes</h2>
        <p class=\"ml-art-content\">
            La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est autorisée par l'éditeur. Tout lien devra être retiré sur simple demande de l'éditeur.<br>
            Toute information accessible via un lien vers d'autres sites n'est pas publiée par l'éditeur. L'éditeur ne dispose d'aucun droit sur le contenu présent dans ledit lien.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 7 - Collecte des données</h2>
        <p class=\"ml-art-content\">Vos données ne sont pas collectées par Ciné Sillon Collection.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 8 - Cookies</h2>
        <p class=\"ml-art-content\">
            Qu'est-ce qu'un « cookie » ?<br>
            Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone,…) et lu par exemple lors de la consultation d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisé (source : <a href=\"https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi\" alt=\"Lien vers la source, site de la CNIL\" class=\"p-link-colored\">https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi</a>).
        </p>
        <p class=\"ml-art-content\">Le site n'utilise pas de Cookies.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 9 - Photographies et représentation des produits</h2>
        <p class=\"ml-art-content\">Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 10 - Loi applicable</h2>
        <p class=\"ml-art-content\">Les présentes conditions d'utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège social de l'éditeur, sous réserve d'une attribution de compétence spécifique découlant d'un texte de loi ou réglementaire particulier.</p>
    </article>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mentions_legales/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mentions légales{% endblock %}

{% block body %}

<div class=\"m-auto w-[70%]\">
    <h1 class=\"text-5xl text-center my-[40px] font-bold\">Mentions légales</h1>

    <p>
        La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d'utilisation qui suivent.<br>
        La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la durée d'utilisation du site et jusqu'à ce qu'une nouvelle version la remplace.<br>
        Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : <a href=\"https://www.cnil.fr\" alt=\"Lien ver le site de la CNIL\" class=\"p-link-colored\">https://www.cnil.fr/</a>
    </p>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 1 - Mentions légales</h2>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.1 Site (ci-après « le site ») :</h3>
            <p>Ciné Sillon Collection</p>
        </section>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.2 Éditeur (ci-après « l'éditeur ») :</h3>
            <p>
                ESPOSITO FARESE Thierry<br>
                n° de téléphone : xx.xx.xx.xx.xx<br>
                adresse mail : xxx@xxx.xxx
            </p>
        </section>
        <section class=\"ml-art-content\">
            <h3 class=\"ml-art-sec-title\">1.3 Hébergeur (ci-après « l'hébergeur ») :</h3>
            <p>Ciné Sillon Collection est hébérgé par xxx, dont le siège social est situé ...</p>
        </section>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 2 - Accès au site</h2>
        <p class=\"ml-art-content\">
            L'accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation commerciale et notamment l'envoi de courriers électroniques non sollicités.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 3 - Contenu du site</h2>
        <p class=\"ml-art-content\">
            Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.<br>
            Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 4 - Gestion du site</h2>
        <p class=\"ml-art-content mb-0\">Pour la bonne gestion du site, l'éditeur pourra à tout moment :</p>
        <ul class=\"ml-art-list\">
            <li>suspendre, interrompre ou limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internautes ;</li>
            <li>supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales ;</li>
            <li>suspendre le site afin de procéder à des mises à jour.</li>
        </ul>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 5 - Responsabilités</h2>
        <p class=\"ml-art-content\">
            La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.<br>
            Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par ailleurs seul responsable des sites et données que vous consultez.
        </p>
        <p class=\"ml-art-content mb-0\">L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :</p>
        <ul class=\"ml-art-list\">
            <li>du fait de l'usage du site ou de tout service accessible via Internet ;</li>
            <li>du fait du non-respect par vous des présentes conditions générales.</li>
        </ul>
        <p class=\"ml-art-content\">
            L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.<br>
            Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner contre vous pour obtenir l'indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 6 - Liens hypertextes</h2>
        <p class=\"ml-art-content\">
            La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est autorisée par l'éditeur. Tout lien devra être retiré sur simple demande de l'éditeur.<br>
            Toute information accessible via un lien vers d'autres sites n'est pas publiée par l'éditeur. L'éditeur ne dispose d'aucun droit sur le contenu présent dans ledit lien.
        </p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 7 - Collecte des données</h2>
        <p class=\"ml-art-content\">Vos données ne sont pas collectées par Ciné Sillon Collection.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 8 - Cookies</h2>
        <p class=\"ml-art-content\">
            Qu'est-ce qu'un « cookie » ?<br>
            Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone,…) et lu par exemple lors de la consultation d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisé (source : <a href=\"https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi\" alt=\"Lien vers la source, site de la CNIL\" class=\"p-link-colored\">https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi</a>).
        </p>
        <p class=\"ml-art-content\">Le site n'utilise pas de Cookies.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 9 - Photographies et représentation des produits</h2>
        <p class=\"ml-art-content\">Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.</p>
    </article>

    <article class=\"ml-article\">
        <h2 class=\"ml-art-title\">Article 10 - Loi applicable</h2>
        <p class=\"ml-art-content\">Les présentes conditions d'utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège social de l'éditeur, sous réserve d'une attribution de compétence spécifique découlant d'un texte de loi ou réglementaire particulier.</p>
    </article>
</div>

{% endblock %}
", "mentions_legales/index.html.twig", "/Users/ewenallanic/Workspaces/Sites/cinesillon/templates/mentions_legales/index.html.twig");
    }
}
