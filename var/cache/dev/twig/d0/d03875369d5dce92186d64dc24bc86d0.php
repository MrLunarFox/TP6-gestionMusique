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

/* admin/style/formAjoutModifStyle.html.twig */
class __TwigTemplate_ff0796dd0b25a05ef05db470b29995e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/style/formAjoutModifStyle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/style/formAjoutModifStyle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/style/formAjoutModifStyle.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", ["_route"], "method", false, false, false, 4) == "admin_style_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 5
            echo " Modification ";
        }
        echo " 
    du style
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12) == "admin_style_ajout")) {
            echo " Ajout 
    ";
        } else {
            // line 13
            echo " Modification ";
        }
        echo " 
    du style
</h1>

";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStyle"]) || array_key_exists("formStyle", $context) ? $context["formStyle"] : (function () { throw new RuntimeError('Variable "formStyle" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"row\">
    <div class=\"col-8\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStyle"]) || array_key_exists("formStyle", $context) ? $context["formStyle"] : (function () { throw new RuntimeError('Variable "formStyle" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStyle"]) || array_key_exists("formStyle", $context) ? $context["formStyle"] : (function () { throw new RuntimeError('Variable "formStyle" does not exist.', 21, $this->source); })()), "couleur", [], "any", false, false, false, 21), 'row');
        echo "</div>
</div>

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "admin_style_ajout")) {
            echo " \"Ajouter\" 
    ";
        } else {
            // line 27
            echo " \"Modifier\" ";
        }
        echo "></div>
    <div class=\"col\"><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_styles");
        echo "\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>

";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStyle"]) || array_key_exists("formStyle", $context) ? $context["formStyle"] : (function () { throw new RuntimeError('Variable "formStyle" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/style/formAjoutModifStyle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  144 => 28,  139 => 27,  134 => 26,  126 => 21,  122 => 20,  116 => 17,  108 => 13,  103 => 12,  99 => 10,  89 => 9,  75 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.request.attributes.get('_route') == \"admin_style_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    du style
{% endblock %}

{% block body %}

<h1 class=\"pt-2 text-center\">
    {% if app.request.attributes.get('_route') == \"admin_style_ajout\" %} Ajout 
    {% else %} Modification {% endif %} 
    du style
</h1>

{{form_start(formStyle,{'attr':{'novalidate':'novalidate'}})}}

<div class=\"row\">
    <div class=\"col-8\">{{form_row(formStyle.nom)}}</div>
    <div class=\"col-4\">{{form_row(formStyle.couleur)}}</div>
</div>

<div class=\"row\">
    <div class=\"col\"><input type=\"submit\" class=\"btn btn-success btn-block\" value=
    {% if app.request.attributes.get('_route') == \"admin_style_ajout\" %} \"Ajouter\" 
    {% else %} \"Modifier\" {% endif %}></div>
    <div class=\"col\"><a href=\"{{path('admin_styles')}}\" class=\"btn btn-warning btn-block\">Annuler</a></div>
</div>

{{form_end(formStyle)}}

{% endblock %}", "admin/style/formAjoutModifStyle.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\admin\\style\\formAjoutModifStyle.html.twig");
    }
}
