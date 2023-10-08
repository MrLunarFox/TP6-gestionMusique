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

/* album/ficheAlbum.html.twig */
class __TwigTemplate_19c4a5713a54ea116d3e6a64c8dd345b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/ficheAlbum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/ficheAlbum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/ficheAlbum.html.twig", 1);
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

        echo "Fiche album";
        
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
        echo "<h1 class=\"pt-2 text-center\">Fiche de l'album</h1>
<hr>
<div>
    ";
        // line 9
        $context["nbMorceaux"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 9, $this->source); })()), "morceaux", [], "any", false, false, false, 9));
        // line 10
        echo "
        <div class=\"card mb-3\">
            <h3 class=\"card-header\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
            <div class=\"row\">
                <div class=\"col-3 d-flex align-items-center mx-auto\">    
                    <img class=\"mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"Artiste Image\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ficheArtiste", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 19, $this->source); })()), "artiste", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 19, $this->source); })()), "artiste", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 25, $this->source); })()), "styles", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["leStyle"]) {
            echo " <span class=\"badge\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "couleur", [], "any", false, false, false, 25), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</span> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leStyle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
                        <li class=\"list-group-item\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbMorceaux"]) || array_key_exists("nbMorceaux", $context) ? $context["nbMorceaux"] : (function () { throw new RuntimeError('Variable "nbMorceaux" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<table class=\"table table-hover mx-auto\">
  <thead>
    <tr>
      <th scope=\"col-3\">Piste</th>
      <th scope=\"col-4\">Titre</th>
      <th scope=\"col-1\">Durée</th>
      <th scope=\"col-3\">Note</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["leAlbum"]) || array_key_exists("leAlbum", $context) ? $context["leAlbum"] : (function () { throw new RuntimeError('Variable "leAlbum" does not exist.', 43, $this->source); })()), "morceaux", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["leMorceau"]) {
            // line 44
            echo "    <tr class=\"table-secondary\">
      <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leMorceau"], "piste", [], "any", false, false, false, 45), "html", null, true);
            echo "</th>
      <td scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leMorceau"], "titre", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leMorceau"], "duree", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
      <td></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leMorceau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "album/ficheAlbum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 51,  176 => 47,  172 => 46,  168 => 45,  165 => 44,  161 => 43,  141 => 26,  126 => 25,  120 => 22,  112 => 19,  105 => 15,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche album{% endblock %}

{% block body %}
<h1 class=\"pt-2 text-center\">Fiche de l'album</h1>
<hr>
<div>
    {% set nbMorceaux = leAlbum.morceaux|length %}

        <div class=\"card mb-3\">
            <h3 class=\"card-header\">{{leAlbum.nom}}</h3>
            <div class=\"row\">
                <div class=\"col-3 d-flex align-items-center mx-auto\">    
                    <img class=\"mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"{{leAlbum.image}}\" alt=\"Artiste Image\">
                </div>
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"{{path('ficheArtiste', {'id': leAlbum.artiste.id})}}\">{{leAlbum.artiste.nom}}</a></h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{leAlbum.date}}</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">{% for leStyle in leAlbum.styles %} <span class=\"badge\" style=\"background-color: {{leStyle.couleur}};\">{{leStyle.nom}}</span> {% endfor %}</li>
                        <li class=\"list-group-item\">{{nbMorceaux}}</li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<table class=\"table table-hover mx-auto\">
  <thead>
    <tr>
      <th scope=\"col-3\">Piste</th>
      <th scope=\"col-4\">Titre</th>
      <th scope=\"col-1\">Durée</th>
      <th scope=\"col-3\">Note</th>
    </tr>
  </thead>
  <tbody>
  {% for leMorceau in leAlbum.morceaux %}
    <tr class=\"table-secondary\">
      <td>{{leMorceau.piste}}</th>
      <td scope=\"row\">{{leMorceau.titre}}</td>
      <td>{{leMorceau.duree}}</td>
      <td></td>
    </tr>
  {% endfor %}
  </tbody>
</table>

{% endblock %}
", "album/ficheAlbum.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\album\\ficheAlbum.html.twig");
    }
}
