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

/* admin/album/formAjoutModifAlbum.html.twig */
class __TwigTemplate_c4284956de86625dfe84d61954663b9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/formAjoutModifAlbum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/album/formAjoutModifAlbum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/album/formAjoutModifAlbum.html.twig", 1);
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

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", ["_route"], "method", false, false, false, 4) == "admin_album_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 5
            echo " Modification ";
        }
        echo " 
    d'un album
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<h1 class=\"pt-2 text-center\">
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "admin_album_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 17
            echo " Modification ";
        }
        echo " 
    d'un album
</h1>

";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"row\">
    <div class=\"col\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'row');
        echo "</div>
    <div class=\"col\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), 'row');
        echo "</div>
</div>

<div class=\"row\">
    <div class=\"col\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), 'row');
        echo "</div>
    <div class=\"col\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 30, $this->source); })()), "artiste", [], "any", false, false, false, 30), 'row');
        echo "</div>
    <div class=\"col\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 31, $this->source); })()), "styles", [], "any", false, false, false, 31), 'row');
        echo "</div>
</div>

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36) == "admin_album_ajout")) {
            echo " \"Ajouter\"
    ";
        } else {
            // line 37
            echo " \"Modifier\" ";
        }
        echo "></div>
    <div class=\"col\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_albums");
        echo "\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>

";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAlbum"]) || array_key_exists("formAlbum", $context) ? $context["formAlbum"] : (function () { throw new RuntimeError('Variable "formAlbum" does not exist.', 41, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.selectStyles').select2();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/album/formAjoutModifAlbum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 46,  201 => 45,  188 => 41,  182 => 38,  177 => 37,  172 => 36,  164 => 31,  160 => 30,  156 => 29,  149 => 25,  145 => 24,  139 => 21,  131 => 17,  126 => 16,  122 => 14,  112 => 13,  91 => 9,  77 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.request.attributes.get('_route') == \"admin_album_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    d'un album
{% endblock %}

{% block stylesheets %} 
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">
    {% if app.request.attributes.get('_route') == \"admin_album_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    d'un album
</h1>

{{form_start(formAlbum,{'attr':{'novalidate':'novalidate'}})}}

<div class=\"row\">
    <div class=\"col\">{{form_row(formAlbum.nom)}}</div>
    <div class=\"col\">{{form_row(formAlbum.image)}}</div>
</div>

<div class=\"row\">
    <div class=\"col\">{{form_row(formAlbum.date)}}</div>
    <div class=\"col\">{{form_row(formAlbum.artiste)}}</div>
    <div class=\"col\">{{form_row(formAlbum.styles)}}</div>
</div>

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    {% if app.request.attributes.get('_route') == \"admin_album_ajout\" %} \"Ajouter\"
    {% else %} \"Modifier\" {% endif %}></div>
    <div class=\"col\"><a href=\"{{path('admin_albums')}}\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>

{{form_end(formAlbum)}}

{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.selectStyles').select2();
        });
    </script>
{% endblock %}", "admin/album/formAjoutModifAlbum.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\album\\formAjoutModifAlbum.html.twig");
    }
}
