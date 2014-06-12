<?php

/* SyliusWebBundle:Backend/ProductOption:_form.html.twig */
class __TwigTemplate_0d94727e5ea04453393a70769829f0169148fba5aa7882314a385306fcf15215 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SyliusWebBundle::forms.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"row\">
    <div class=\"col-md-8 row-split\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'row');
        echo "
    </div>

    <div class=\"col-md-4\">
        <div id=\"sylius-option-values\" class=\"collection-container\" data-prototype=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "values"), "vars"), "prototype"), "value"), 'row', array("label" => "")));
        echo "\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "values"));
        foreach ($context['_seq'] as $context["_key"] => $context["valueForm"]) {
            // line 14
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["valueForm"]) ? $context["valueForm"] : $this->getContext($context, "valueForm")), "value"), 'row');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
        <a href=\"#\" class=\"btn btn-primary btn-block\" data-collection-button=\"add\" data-prototype=\"sylius-option-values\" data-collection=\"sylius-option-values\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.form.option_value.add_value"), "html", null, true);
        echo "</a>
    </div>
</div>
<hr>

";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ProductOption:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  62 => 17,  59 => 16,  50 => 14,  46 => 13,  42 => 12,  35 => 8,  24 => 3,  21 => 2,  19 => 1,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 7,  26 => 3,);
    }
}
