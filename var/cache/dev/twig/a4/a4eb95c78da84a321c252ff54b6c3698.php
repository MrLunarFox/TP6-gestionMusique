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

/* admin/artiste/listeArtistes.html.twig */
class __TwigTemplate_7b0de4adca228b26f4d4e0b8ed6d71eb extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/artiste/listeArtistes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/artiste/listeArtistes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/artiste/listeArtistes.html.twig", 1);
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

        echo "Gestion des artistes";
        
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
<h1 class=\"pt-2 text-center\">Gestion des Artistes | Admin</h1>

<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artiste_ajout");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un artiste</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\"></th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-7\">Detail</th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesArtistes"]) || array_key_exists("lesArtistes", $context) ? $context["lesArtistes"] : (function () { throw new RuntimeError('Variable "lesArtistes" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leArtiste"]) {
            // line 25
            echo "
            ";
            // line 26
            $context["nbAlbums"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "albums", [], "any", false, false, false, 26));
            // line 27
            echo "
                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 50px; display: block;\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"Artiste Image\"></td>
                    <td class=\"col-2\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"col-7\">
                        <p>
                            <span><a href=\"\" class=\"badge badge-success\">";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 33, $this->source); })()), "html", null, true);
            echo " ";
            if (((isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 33, $this->source); })()) > 1)) {
                echo " albums ";
            } else {
                echo " album ";
            }
            echo "</a></span>
                            <span class\"mx-3\">";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["leArtiste"], "type", [], "any", false, false, false, 34) == 0)) {
                echo " Artiste solo ";
            } else {
                echo " Groupe ";
            }
            echo "</span>
                            <span class\"ml-auto\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "site", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "site", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></span>
                        </p>
                        <p>
                            ";
            // line 38
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "description", [], "any", false, false, false, 38), 0, 100);
            echo "...
                        </p>
                    </td>
                    <td class=\"col-2\">
                        <a href=\" ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artiste_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["leArtiste"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo " \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un artiste\" data-message=\"Êtes vous sûr de vouloir supprimer l'artiste : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leArtiste"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "\" data-libelleBouton=\"Supprimer\" data-lien=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artiste_supr", ["id" => twig_get_attribute($this->env, $this->source, $context["leArtiste"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leArtiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        <div class=\"navigation mx-auto\">
            ";
        // line 50
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesArtistes"]) || array_key_exists("lesArtistes", $context) ? $context["lesArtistes"] : (function () { throw new RuntimeError('Variable "lesArtistes" does not exist.', 50, $this->source); })()));
        echo "
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    ";
        // line 57
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesArtistes"]) || array_key_exists("lesArtistes", $context) ? $context["lesArtistes"] : (function () { throw new RuntimeError('Variable "lesArtistes" does not exist.', 57, $this->source); })()));
        echo " 
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        $this->loadTemplate("include/_modale.html.twig", "admin/artiste/listeArtistes.html.twig", 63)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/artiste/listeArtistes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 63,  213 => 62,  199 => 57,  189 => 50,  185 => 48,  172 => 43,  168 => 42,  161 => 38,  153 => 35,  145 => 34,  135 => 33,  129 => 30,  125 => 29,  121 => 27,  119 => 26,  116 => 25,  112 => 24,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des artistes{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">Gestion des Artistes | Admin</h1>

<a href=\"{{path(\"admin_artiste_ajout\")}}\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un artiste</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\"></th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-7\">Detail</th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        {% for leArtiste in lesArtistes %}

            {% set nbAlbums = leArtiste.albums|length %}

                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 50px; display: block;\" src=\"{{leArtiste.image}}\" alt=\"Artiste Image\"></td>
                    <td class=\"col-2\">{{leArtiste.nom}}</td>
                    <td class=\"col-7\">
                        <p>
                            <span><a href=\"\" class=\"badge badge-success\">{{nbAlbums}} {% if nbAlbums > 1 %} albums {% else %} album {% endif %}</a></span>
                            <span class\"mx-3\">{% if leArtiste.type == 0 %} Artiste solo {% else %} Groupe {% endif %}</span>
                            <span class\"ml-auto\"><a href=\"{{leArtiste.site}}\">{{leArtiste.site}}</a></span>
                        </p>
                        <p>
                            {{leArtiste.description|slice(0,100)|raw}}...
                        </p>
                    </td>
                    <td class=\"col-2\">
                        <a href=\" {{path('admin_artiste_modif', {'id': leArtiste.id})}} \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un artiste\" data-message=\"Êtes vous sûr de vouloir supprimer l'artiste : {{leArtiste.nom}}\" data-libelleBouton=\"Supprimer\" data-lien=\"{{path('admin_artiste_supr', {'id': leArtiste.id})}}\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        {% endfor %}

        <div class=\"navigation mx-auto\">
            {{ knp_pagination_render(lesArtistes) }}
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    {{ knp_pagination_render(lesArtistes) }} 
</div>

{% endblock %}

{% block javascripts %}
    {% include \"include/_modale.html.twig\" %}
{% endblock %}", "admin/artiste/listeArtistes.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\artiste\\listeArtistes.html.twig");
    }
}
