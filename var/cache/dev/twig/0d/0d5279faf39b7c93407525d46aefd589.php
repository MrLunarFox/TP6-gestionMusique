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

/* admin/style/listeStyles.html.twig */
class __TwigTemplate_3c9f2549d6dec83bad9389a21a44981b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/style/listeStyles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/style/listeStyles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/style/listeStyles.html.twig", 1);
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

        echo "Gestion des styles";
        
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
<h1 class=\"pt-2 text-center\">Gestion des Styles | Admin</h1>

<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_ajout");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un style</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\">Couleur</th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-7\"></th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesStyles"]) || array_key_exists("lesStyles", $context) ? $context["lesStyles"] : (function () { throw new RuntimeError('Variable "lesStyles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leStyle"]) {
            // line 25
            echo "
            ";
            // line 26
            $context["nbAlbums"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "albums", [], "any", false, false, false, 26));
            // line 27
            echo "
                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><div style=\"width: 50px; height: 50px; background-color: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "couleur", [], "any", false, false, false, 29), "html", null, true);
            echo ";\"></div></td>
                    <td class=\"col-2\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"col-7\"><a href=\"\" class=\"badge badge-success\">";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 31, $this->source); })()), "html", null, true);
            echo " ";
            if (((isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 31, $this->source); })()) > 1)) {
                echo " albums ";
            } else {
                echo " album ";
            }
            echo "</a></td>
                    <td class=\"col-2\">
                        <a href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["leStyle"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo " \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un style\" data-message=\"Êtes vous sûr de vouloir supprimer le style : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "\" data-libelleBouton=\"Supprimer\" data-lien=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_supr", ["id" => twig_get_attribute($this->env, $this->source, $context["leStyle"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leStyle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        <div class=\"navigation mx-auto\">
            ";
        // line 41
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesStyles"]) || array_key_exists("lesStyles", $context) ? $context["lesStyles"] : (function () { throw new RuntimeError('Variable "lesStyles" does not exist.', 41, $this->source); })()));
        echo "
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    ";
        // line 48
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesStyles"]) || array_key_exists("lesStyles", $context) ? $context["lesStyles"] : (function () { throw new RuntimeError('Variable "lesStyles" does not exist.', 48, $this->source); })()));
        echo " 
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->loadTemplate("include/_modale.html.twig", "admin/style/listeStyles.html.twig", 54)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/style/listeStyles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 54,  189 => 53,  175 => 48,  165 => 41,  161 => 39,  148 => 34,  144 => 33,  133 => 31,  129 => 30,  125 => 29,  121 => 27,  119 => 26,  116 => 25,  112 => 24,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des styles{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">Gestion des Styles | Admin</h1>

<a href=\"{{path(\"admin_style_ajout\")}}\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un style</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\">Couleur</th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-7\"></th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        {% for leStyle in lesStyles %}

            {% set nbAlbums = leStyle.albums|length %}

                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><div style=\"width: 50px; height: 50px; background-color: {{ leStyle.couleur }};\"></div></td>
                    <td class=\"col-2\">{{leStyle.nom}}</td>
                    <td class=\"col-7\"><a href=\"\" class=\"badge badge-success\">{{nbAlbums}} {% if nbAlbums > 1 %} albums {% else %} album {% endif %}</a></td>
                    <td class=\"col-2\">
                        <a href=\" {{path('admin_style_modif', {'id': leStyle.id})}} \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un style\" data-message=\"Êtes vous sûr de vouloir supprimer le style : {{leStyle.nom}}\" data-libelleBouton=\"Supprimer\" data-lien=\"{{path('admin_style_supr', {'id': leStyle.id})}}\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        {% endfor %}

        <div class=\"navigation mx-auto\">
            {{ knp_pagination_render(lesStyles) }}
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    {{ knp_pagination_render(lesStyles) }} 
</div>

{% endblock %}

{% block javascripts %}
    {% include \"include/_modale.html.twig\" %}
{% endblock %}", "admin/style/listeStyles.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\style\\listeStyles.html.twig");
    }
}
