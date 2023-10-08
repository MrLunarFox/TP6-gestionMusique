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

/* admin/artiste/formAjoutModifArtiste.html.twig */
class __TwigTemplate_eed855955d84b2f9d3d6af13a0109d39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/artiste/formAjoutModifArtiste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/artiste/formAjoutModifArtiste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/artiste/formAjoutModifArtiste.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", ["_route"], "method", false, false, false, 4) == "admin_artiste_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 5
            echo " Modification ";
        }
        echo " 
    d'un artiste
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<h1 class=\"pt-2 text-center\">
    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12) == "admin_artiste_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 13
            echo " Modification ";
        }
        echo " 
    d'un artiste
</h1>

";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'row');
        echo "

";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'row');
        echo "

<div class=\"row\">
    <div class=\"col\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 25, $this->source); })()), "site", [], "any", false, false, false, 25), 'row');
        echo "</div>
    <div class=\"col\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'row');
        echo "</div>
</div>

";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), 'row');
        echo "

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "admin_artiste_ajout")) {
            echo " \"Ajouter\"
    ";
        } else {
            // line 34
            echo " \"Modifier\" ";
        }
        echo "></div>
    <div class=\"col\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artistes");
        echo "\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>





";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArtiste"]) || array_key_exists("formArtiste", $context) ? $context["formArtiste"] : (function () { throw new RuntimeError('Variable "formArtiste" does not exist.', 42, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/artiste/formAjoutModifArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 42,  160 => 35,  155 => 34,  150 => 33,  143 => 29,  137 => 26,  133 => 25,  127 => 22,  122 => 20,  116 => 17,  108 => 13,  103 => 12,  99 => 10,  89 => 9,  75 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.request.attributes.get('_route') == \"admin_artiste_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    d'un artiste
{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">
    {% if app.request.attributes.get('_route') == \"admin_artiste_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    d'un artiste
</h1>

{{form_start(formArtiste,{'attr':{'novalidate':'novalidate'}})}}


{{form_row(formArtiste.nom)}}

{{form_row(formArtiste.description)}}

<div class=\"row\">
    <div class=\"col\">{{form_row(formArtiste.site)}}</div>
    <div class=\"col\">{{form_row(formArtiste.type)}}</div>
</div>

{{form_row(formArtiste.image)}}

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    {% if app.request.attributes.get('_route') == \"admin_artiste_ajout\" %} \"Ajouter\"
    {% else %} \"Modifier\" {% endif %}></div>
    <div class=\"col\"><a href=\"{{path('admin_artistes')}}\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>





{{form_end(formArtiste)}}

{% endblock %}", "admin/artiste/formAjoutModifArtiste.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\artiste\\formAjoutModifArtiste.html.twig");
    }
}
