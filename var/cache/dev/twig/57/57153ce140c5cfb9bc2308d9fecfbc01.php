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

/* album/listeAlbums.html.twig */
class __TwigTemplate_15756888903a6ab0b7ba1da860faf9fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/listeAlbums.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/listeAlbums.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/listeAlbums.html.twig", 1);
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

        echo "Liste des albums";
        
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
        echo "<h1 class=\"pt-2 text-center\">Liste des Albums</h1>
<hr>
<div class=\"row pt-2\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAlbums"]) || array_key_exists("lesAlbums", $context) ? $context["lesAlbums"] : (function () { throw new RuntimeError('Variable "lesAlbums" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leAlbum"]) {
            // line 10
            echo "
    ";
            // line 11
            $context["nbMorceaux"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "morceaux", [], "any", false, false, false, 11));
            // line 12
            echo "
    <div class=\"col-sm-12 col-md-12 col-lg-4 col-xl-4\">
        <div class=\"card mb-3\">
            <h4 class=\"card-header\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ficheAlbum", ["id" => twig_get_attribute($this->env, $this->source, $context["leAlbum"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></h4>
            <div class=\"card-body\">
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ficheArtiste", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "artiste", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "artiste", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
            </div>
            <img class=\"mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "image", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"Album Image\">
            <div class=\"card-body\">
                <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leAlbum"], "date", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["leAlbum"], "styles", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["leStyle"]) {
                echo " <span class=\"badge\" style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "couleur", [], "any", false, false, false, 24), "html", null, true);
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leStyle"], "nom", [], "any", false, false, false, 24), "html", null, true);
                echo "</span> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leStyle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</li>
                <li class=\"list-group-item\"><p>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["nbMorceaux"]) || array_key_exists("nbMorceaux", $context) ? $context["nbMorceaux"] : (function () { throw new RuntimeError('Variable "nbMorceaux" does not exist.', 25, $this->source); })()), "html", null, true);
            echo " ";
            if (((isset($context["nbMorceaux"]) || array_key_exists("nbMorceaux", $context) ? $context["nbMorceaux"] : (function () { throw new RuntimeError('Variable "nbMorceaux" does not exist.', 25, $this->source); })()) > 1)) {
                echo " morceaux ";
            } else {
                echo " morceau ";
            }
            echo "</p></li>
            </ul>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leAlbum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"navigation mx-auto\">
        ";
        // line 32
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesAlbums"]) || array_key_exists("lesAlbums", $context) ? $context["lesAlbums"] : (function () { throw new RuntimeError('Variable "lesAlbums" does not exist.', 32, $this->source); })()));
        echo "
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "album/listeAlbums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 32,  164 => 30,  147 => 25,  132 => 24,  126 => 21,  121 => 19,  114 => 17,  107 => 15,  102 => 12,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des albums{% endblock %}

{% block body %}
<h1 class=\"pt-2 text-center\">Liste des Albums</h1>
<hr>
<div class=\"row pt-2\">
{% for leAlbum in lesAlbums %}

    {% set nbMorceaux = leAlbum.morceaux|length %}

    <div class=\"col-sm-12 col-md-12 col-lg-4 col-xl-4\">
        <div class=\"card mb-3\">
            <h4 class=\"card-header\"><a href=\"{{path('ficheAlbum', {'id': leAlbum.id })}}\">{{leAlbum.nom}}</a></h4>
            <div class=\"card-body\">
            <a href=\"{{path('ficheArtiste', {'id': leAlbum.artiste.id})}}\">{{leAlbum.artiste.nom}}</a>
            </div>
            <img class=\"mx-auto d-block\" style=\"height: auto; width: 200px; display: block;\" src=\"{{leAlbum.image}}\" alt=\"Album Image\">
            <div class=\"card-body\">
                <p class=\"card-text\">{{leAlbum.date}}</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{% for leStyle in leAlbum.styles %} <span class=\"badge\" style=\"background-color: {{leStyle.couleur}};\">{{leStyle.nom}}</span> {% endfor %}</li>
                <li class=\"list-group-item\"><p>{{nbMorceaux}} {% if nbMorceaux > 1 %} morceaux {% else %} morceau {% endif %}</p></li>
            </ul>
        </div>
    </div>
{% endfor %}

    <div class=\"navigation mx-auto\">
        {{ knp_pagination_render(lesAlbums) }}
    </div>
</div>

{% endblock %}
", "album/listeAlbums.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\album\\listeAlbums.html.twig");
    }
}
