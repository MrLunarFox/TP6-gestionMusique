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

/* admin/album/listeAlbums.html.twig */
class __TwigTemplate_6f2f75cad32d9dd723b755a8b98ef3d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/listeAlbums.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/listeAlbums.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/album/listeAlbums.html.twig", 1);
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

        echo "Gestion des albums";
        
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
<h1 class=\"pt-2 text-center\">Gestion des Albums | Admin</h1>

<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_album_ajout");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un album</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\"></th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-1\">Date</th>
            <th scope=\"col-2\">Artiste</th>
            <th scope=\"col-2\">Styles</th>
            <th scope=\"col-2\">Morceaux</th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAlbums"]) || array_key_exists("lesAlbums", $context) ? $context["lesAlbums"] : (function () { throw new RuntimeError('Variable "lesAlbums" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leAlbum"]) {
            // line 28
            echo "
            ";
            // line 29
            $context["nbMorceaux"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "morceaux", [], "any", false, false, false, 29));
            // line 30
            echo "
                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 50px; display: block;\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"Album Image\"></td>
                    <td class=\"col-2\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td class=\"col-1\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "date", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td class=\"col-2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "artiste", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td class=\"col-2\">";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["leAlbum"], "styles", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["leStyle"]) {
                echo " <span class=\"badge\" style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "couleur", [], "any", false, false, false, 36), "html", null, true);
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</span> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leStyle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                    <td class=\"col-2\"><span><a href=\"\" class=\"badge badge-success\">";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["nbMorceaux"]) || array_key_exists("nbMorceaux", $context) ? $context["nbMorceaux"] : (function () { throw new RuntimeError('Variable "nbMorceaux" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " ";
            if (((isset($context["nbMorceaux"]) || array_key_exists("nbMorceaux", $context) ? $context["nbMorceaux"] : (function () { throw new RuntimeError('Variable "nbMorceaux" does not exist.', 37, $this->source); })()) > 1)) {
                echo " morceaux ";
            } else {
                echo " morceau ";
            }
            echo "</a></span></td>
                    <td class=\"col-2\">
                        <a href=\" ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_album_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["leAlbum"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo " \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un album\" data-message=\"Êtes vous sûr de vouloir supprimer l'album : ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-libelleBouton=\"Supprimer\" data-lien=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_album_supr", ["id" => twig_get_attribute($this->env, $this->source, $context["leAlbum"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leAlbum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        <div class=\"navigation mx-auto\">
            ";
        // line 47
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesAlbums"]) || array_key_exists("lesAlbums", $context) ? $context["lesAlbums"] : (function () { throw new RuntimeError('Variable "lesAlbums" does not exist.', 47, $this->source); })()));
        echo "
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    ";
        // line 54
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesAlbums"]) || array_key_exists("lesAlbums", $context) ? $context["lesAlbums"] : (function () { throw new RuntimeError('Variable "lesAlbums" does not exist.', 54, $this->source); })()));
        echo " 
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->loadTemplate("include/_modale.html.twig", "admin/album/listeAlbums.html.twig", 60)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/album/listeAlbums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 60,  215 => 59,  201 => 54,  191 => 47,  187 => 45,  174 => 40,  170 => 39,  159 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 30,  122 => 29,  119 => 28,  115 => 27,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des albums{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">Gestion des Albums | Admin</h1>

<a href=\"{{path(\"admin_album_ajout\")}}\" class=\"btn btn-success\"><i class=\"fa-solid fa-user-plus\"></i> Ajouter un album</a>

<hr>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th scope=\"col-1\"></th>
            <th scope=\"col-2\">Nom</th>
            <th scope=\"col-1\">Date</th>
            <th scope=\"col-2\">Artiste</th>
            <th scope=\"col-2\">Styles</th>
            <th scope=\"col-2\">Morceaux</th>
            <th scope=\"col-2\">Actions</th>
        </tr>
    </thead>
    <tbody>

        {% for leAlbum in lesAlbums %}

            {% set nbMorceaux = leAlbum.morceaux|length %}

                <tr class=\"table-secondary\">
                    <td class=\"col-1\"><img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 50px; display: block;\" src=\"{{leAlbum.image}}\" alt=\"Album Image\"></td>
                    <td class=\"col-2\">{{leAlbum.nom}}</td>
                    <td class=\"col-1\">{{leAlbum.date}}</td>
                    <td class=\"col-2\">{{leAlbum.artiste.nom}}</td>
                    <td class=\"col-2\">{% for leStyle in leAlbum.styles %} <span class=\"badge\" style=\"background-color: {{leStyle.couleur}};\">{{leStyle.nom}}</span> {% endfor %}</td>
                    <td class=\"col-2\"><span><a href=\"\" class=\"badge badge-success\">{{nbMorceaux}} {% if nbMorceaux > 1 %} morceaux {% else %} morceau {% endif %}</a></span></td>
                    <td class=\"col-2\">
                        <a href=\" {{path('admin_album_modif', {'id': leAlbum.id})}} \" class=\"btn btn-primary\"><i class=\"fa-regular fa-pen-to-square\"></i></a>
                        <a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modalSimple\" data-titre=\"Suppression d'un album\" data-message=\"Êtes vous sûr de vouloir supprimer l'album : {{leAlbum.nom}}\" data-libelleBouton=\"Supprimer\" data-lien=\"{{path('admin_album_supr', {'id': leAlbum.id})}}\"><i class=\"fa-solid fa-user-slash\"></i></a>
                    </td>
                </tr>

        {% endfor %}

        <div class=\"navigation mx-auto\">
            {{ knp_pagination_render(lesAlbums) }}
        </div>

    </tbody>
</table>

<div class=\"navigation mx-auto\">
    {{ knp_pagination_render(lesAlbums) }} 
</div>

{% endblock %}

{% block javascripts %}
    {% include \"include/_modale.html.twig\" %}
{% endblock %}", "admin/album/listeAlbums.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\album\\listeAlbums.html.twig");
    }
}
