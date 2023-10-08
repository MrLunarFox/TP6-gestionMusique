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

/* include/_modale.html.twig */
class __TwigTemplate_4775f91f94806809b4df2bd28eb9c919 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_modale.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_modale.html.twig"));

        // line 1
        echo "<div id=\"modalSimple\" class=\"modal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

      </div>
      <div class=\"modal-footer\">
        <a id=\"btn-action\" href=\"\" class=\"btn btn-primary\"></a>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  \$(\"a[data-lien]\").click(function() {
      //On récupère tous les éléments de la balise \"a\"
      let lien=\$(this).attr(\"data-lien\");
      let titre=\$(this).attr(\"data-titre\");
      let message=\$(this).attr(\"data-message\");
      let libelleBouton=\$(this).attr(\"data-libelleBouton\");
      \$(\"#btn-action\").attr(\"href\", lien);
      \$(\".modal-title\").text(titre);
      \$(\".modal-body\").text(message);
      \$(\"#btn-action\").text(libelleBouton);
  })
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "include/_modale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalSimple\" class=\"modal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

      </div>
      <div class=\"modal-footer\">
        <a id=\"btn-action\" href=\"\" class=\"btn btn-primary\"></a>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  \$(\"a[data-lien]\").click(function() {
      //On récupère tous les éléments de la balise \"a\"
      let lien=\$(this).attr(\"data-lien\");
      let titre=\$(this).attr(\"data-titre\");
      let message=\$(this).attr(\"data-message\");
      let libelleBouton=\$(this).attr(\"data-libelleBouton\");
      \$(\"#btn-action\").attr(\"href\", lien);
      \$(\".modal-title\").text(titre);
      \$(\".modal-body\").text(message);
      \$(\"#btn-action\").text(libelleBouton);
  })
</script>", "include/_modale.html.twig", "C:\\laragon\\www\\TP6-gestionMusique\\templates\\include\\_modale.html.twig");
    }
}
