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

/* artiste/listeArtistes.html.twig */
class __TwigTemplate_f7f06972d9a682c7d2a46a335a9f7d50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/listeArtistes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/listeArtistes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artiste/listeArtistes.html.twig", 1);
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

        echo "Liste des artistes";
        
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
        echo "<h1 class=\"pt-2 text-center\">Liste des Artistes</h1>
<hr>
<div class=\"row pt-2\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesArtistes"]) || array_key_exists("lesArtistes", $context) ? $context["lesArtistes"] : (function () { throw new RuntimeError('Variable "lesArtistes" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leArtiste"]) {
            // line 10
            echo "    
    ";
            // line 11
            $context["nbAlbums"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "albums", [], "any", false, false, false, 11));
            // line 12
            echo "
    <div class=\"col-sm-12 col-md-12 col-lg-4 col-xl-4\">
        <div class=\"card mb-3\">
            <h3 class=\"card-header\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ficheArtiste", ["id" => twig_get_attribute($this->env, $this->source, $context["leArtiste"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></h3>
            <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\" class=\"badge badge-success\">";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " ";
            if (((isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 17, $this->source); })()) > 1)) {
                echo " albums ";
            } else {
                echo " album ";
            }
            echo "</a></h5>
            </div>
            <img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "image", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"Artiste Image\">
            <div class=\"card-body\">
                <p class=\"card-text\">";
            // line 21
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "description", [], "any", false, false, false, 21), 0, 200);
            echo "...</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["leArtiste"], "type", [], "any", false, false, false, 24) == 0)) {
                echo " Artiste solo ";
            } else {
                echo " Groupe ";
            }
            echo "</li>
                <li class=\"list-group-item\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "site", [], "any", false, false, false, 25), "html", null, true);
            echo "\">Site Web</a></li>
            </ul>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leArtiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"navigation mx-auto\">
        ";
        // line 32
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesArtistes"]) || array_key_exists("lesArtistes", $context) ? $context["lesArtistes"] : (function () { throw new RuntimeError('Variable "lesArtistes" does not exist.', 32, $this->source); })()));
        echo "
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "artiste/listeArtistes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 32,  155 => 30,  144 => 25,  136 => 24,  130 => 21,  125 => 19,  114 => 17,  107 => 15,  102 => 12,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des artistes{% endblock %}

{% block body %}
<h1 class=\"pt-2 text-center\">Liste des Artistes</h1>
<hr>
<div class=\"row pt-2\">
{% for leArtiste in lesArtistes %}
    
    {% set nbAlbums = leArtiste.albums|length %}

    <div class=\"col-sm-12 col-md-12 col-lg-4 col-xl-4\">
        <div class=\"card mb-3\">
            <h3 class=\"card-header\"><a href=\"{{path('ficheArtiste', {'id': leArtiste.id })}}\">{{leArtiste.nom}}</a></h3>
            <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\" class=\"badge badge-success\">{{nbAlbums}} {% if nbAlbums > 1 %} albums {% else %} album {% endif %}</a></h5>
            </div>
            <img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"{{leArtiste.image}}\" alt=\"Artiste Image\">
            <div class=\"card-body\">
                <p class=\"card-text\">{{leArtiste.description|slice(0,200)|raw}}...</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{% if leArtiste.type == 0 %} Artiste solo {% else %} Groupe {% endif %}</li>
                <li class=\"list-group-item\"><a href=\"{{leArtiste.site}}\">Site Web</a></li>
            </ul>
        </div>
    </div>
{% endfor %}

    <div class=\"navigation mx-auto\">
        {{ knp_pagination_render(lesArtistes) }}
    </div>
</div>

{% endblock %}
", "artiste/listeArtistes.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\artiste\\listeArtistes.html.twig");
    }
}
