<?php

/* SyliusWebBundle:Backend/Product:filterForm.html.twig */
class __TwigTemplate_201b941edb059fbe0e60398c1852aba254880ac8b25d337da48dab4cdc1b1ce9 extends Twig_Template
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
<form method=\"get\" action=\"\" class=\"form-inline form-filter\">
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sku"), 'row');
        echo "
<button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-search\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.filter"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  25 => 4,  19 => 1,  260 => 99,  255 => 97,  250 => 94,  244 => 93,  237 => 88,  226 => 83,  218 => 80,  212 => 79,  208 => 77,  197 => 75,  193 => 74,  185 => 71,  181 => 70,  178 => 69,  174 => 68,  165 => 62,  161 => 61,  152 => 54,  150 => 53,  143 => 49,  138 => 46,  134 => 44,  126 => 42,  124 => 41,  120 => 39,  116 => 37,  108 => 35,  106 => 34,  99 => 30,  95 => 29,  89 => 26,  75 => 20,  67 => 15,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 2,  87 => 27,  83 => 23,  79 => 21,  76 => 24,  74 => 23,  68 => 20,  63 => 14,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
