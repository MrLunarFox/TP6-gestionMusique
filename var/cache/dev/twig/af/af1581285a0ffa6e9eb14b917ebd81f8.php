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

/* artiste/ficheArtiste.html.twig */
class __TwigTemplate_f054faa74b51128ce3f8307689d9d17a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/ficheArtiste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/ficheArtiste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artiste/ficheArtiste.html.twig", 1);
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

        echo "Fiche artiste";
        
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
        echo "<h1 class=\"pt-2 text-center\">Fiche de l'artiste</h1>
<hr>
<div class=\"row pt-2\">
    ";
        // line 9
        $context["nbAlbums"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 9, $this->source); })()), "albums", [], "any", false, false, false, 9));
        // line 10
        echo "
        <div class=\"card mb-3\">
            <h3 class=\"card-header\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
            <div class=\"row\">
                <div class=\"col-3 d-flex align-items-center mx-auto\">    
                    <img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"Artiste Image\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"\" class=\"badge badge-success\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        if (((isset($context["nbAlbums"]) || array_key_exists("nbAlbums", $context) ? $context["nbAlbums"] : (function () { throw new RuntimeError('Variable "nbAlbums" does not exist.', 19, $this->source); })()) > 1)) {
            echo " albums ";
        } else {
            echo " album ";
        }
        echo "</a></h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 22
        echo twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22);
        echo "</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == 0)) {
            echo " Artiste solo ";
        } else {
            echo " Groupe ";
        }
        echo "</li>
                        <li class=\"list-group-item\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 26, $this->source); })()), "site", [], "any", false, false, false, 26), "html", null, true);
        echo "\">Site Web</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<table class=\"table table-hover mx-auto\">
  <thead>
    <tr>
      <th scope=\"col-3\">Photo</th>
      <th scope=\"col-4\">Nom</th>
      <th scope=\"col-1\">Date</th>
      <th scope=\"col-3\">Styles</th>
      <th scope=\"col-1\">Morceaux</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["leArtiste"]) || array_key_exists("leArtiste", $context) ? $context["leArtiste"] : (function () { throw new RuntimeError('Variable "leArtiste" does not exist.', 44, $this->source); })()), "albums", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["leAlbum"]) {
            // line 45
            echo "    <tr class=\"table-secondary\">
      <td><img class=\"miniature\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "image", [], "any", false, false, false, 46), "html", null, true);
            echo "\" alt=\"Image de l'album\"></th>
      <td scope=\"row\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ficheAlbum", ["id" => twig_get_attribute($this->env, $this->source, $context["leAlbum"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</a></td>
      <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "date", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
      <td>";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["leAlbum"], "styles", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["leStyle"]) {
                echo " <span class=\"badge\" style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "couleur", [], "any", false, false, false, 49), "html", null, true);
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</span> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leStyle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "morceaux", [], "any", false, false, false, 50)), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leAlbum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "artiste/ficheArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 53,  195 => 50,  180 => 49,  176 => 48,  170 => 47,  166 => 46,  163 => 45,  159 => 44,  138 => 26,  130 => 25,  124 => 22,  112 => 19,  105 => 15,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche artiste{% endblock %}

{% block body %}
<h1 class=\"pt-2 text-center\">Fiche de l'artiste</h1>
<hr>
<div class=\"row pt-2\">
    {% set nbAlbums = leArtiste.albums|length %}

        <div class=\"card mb-3\">
            <h3 class=\"card-header\">{{leArtiste.nom}}</h3>
            <div class=\"row\">
                <div class=\"col-3 d-flex align-items-center mx-auto\">    
                    <img class=\"avatar mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"{{leArtiste.image}}\" alt=\"Artiste Image\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"\" class=\"badge badge-success\">{{nbAlbums}} {% if nbAlbums > 1 %} albums {% else %} album {% endif %}</a></h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{leArtiste.description|raw}}</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">{% if leArtiste.type == 0 %} Artiste solo {% else %} Groupe {% endif %}</li>
                        <li class=\"list-group-item\"><a href=\"{{leArtiste.site}}\">Site Web</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<table class=\"table table-hover mx-auto\">
  <thead>
    <tr>
      <th scope=\"col-3\">Photo</th>
      <th scope=\"col-4\">Nom</th>
      <th scope=\"col-1\">Date</th>
      <th scope=\"col-3\">Styles</th>
      <th scope=\"col-1\">Morceaux</th>
    </tr>
  </thead>
  <tbody>
  {% for leAlbum in leArtiste.albums %}
    <tr class=\"table-secondary\">
      <td><img class=\"miniature\" src=\"{{leAlbum.image}}\" alt=\"Image de l'album\"></th>
      <td scope=\"row\"><a href=\"{{path('ficheAlbum', {'id': leAlbum.id})}}\">{{leAlbum.nom}}</a></td>
      <td>{{leAlbum.date}}</td>
      <td>{% for leStyle in leAlbum.styles %} <span class=\"badge\" style=\"background-color: {{leStyle.couleur}};\">{{leStyle.nom}}</span> {% endfor %}</td>
      <td>{{leAlbum.morceaux|length}}</td>
    </tr>
  {% endfor %}
  </tbody>
</table>

{% endblock %}
", "artiste/ficheArtiste.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\artiste\\ficheArtiste.html.twig");
    }
}
