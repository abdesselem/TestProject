<?php

/* SyliusWebBundle:Backend/ProductOption:index.html.twig */
class __TwigTemplate_44e54ec12d4a27839fbb4cef2f9c12bc26a7d7859f7682670e1bff9fa0266990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        // line 4
        $context["__internal_4fb881ce9b57ef3dfd1fe227ba46c456b1d403fe5eeaa80b0686d1e92298b6af"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_03a187b40669d79e273ed88a5d580760f7dfe574900ddd9165fb2ff29e55cec0"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ProductOption:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.option.index"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 17
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_product_option_create"), $this->env->getExtension('translator')->trans("sylius.product_option.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_attribute_index"), $this->env->getExtension('translator')->trans("sylius.product_attribute.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-th\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.product_option.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_4fb881ce9b57ef3dfd1fe227ba46c456b1d403fe5eeaa80b0686d1e92298b6af"]->getpagination((isset($context["product_options"]) ? $context["product_options"] : $this->getContext($context, "product_options")));
        echo "
";
        // line 24
        echo $context["__internal_03a187b40669d79e273ed88a5d580760f7dfe574900ddd9165fb2ff29e55cec0"]->getlist((isset($context["product_options"]) ? $context["product_options"] : $this->getContext($context, "product_options")));
        echo "
";
        // line 25
        echo $context["__internal_4fb881ce9b57ef3dfd1fe227ba46c456b1d403fe5eeaa80b0686d1e92298b6af"]->getpagination((isset($context["product_options"]) ? $context["product_options"] : $this->getContext($context, "product_options")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ProductOption:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
