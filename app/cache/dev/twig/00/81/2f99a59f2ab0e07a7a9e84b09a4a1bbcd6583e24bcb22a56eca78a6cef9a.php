<?php

/* SyliusWebBundle:Backend/User:filterForm.html.twig */
class __TwigTemplate_00812f99a59f2ab0e07a7a9e84b09a4a1bbcd6583e24bcb22a56eca78a6cef9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SyliusWebBundle:Backend:filterForms.html.twig"));
        // line 2
        echo "
<form method=\"get\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\" class=\"form-inline form-filter\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query"), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-search\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.search"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  24 => 3,  21 => 2,  19 => 1,  127 => 41,  123 => 40,  111 => 35,  103 => 34,  97 => 30,  95 => 29,  92 => 28,  90 => 27,  84 => 24,  81 => 23,  73 => 21,  65 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
