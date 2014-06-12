<?php

/* SyliusWebBundle:Backend/Inventory:index.html.twig */
class __TwigTemplate_bb3f8ad0133633bd6cec78d384ad811a832bd56ffe0e9503211dfe6ea3c12545 extends Twig_Template
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
        $context["__internal_5cabb27118116d5e12413838783abd13549370e88a127a20b4392279c57ea563"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 4
        $context["__internal_f0ba97cbbe5597891ed57aee2b1859e6f43cc70c1f9ae1b34937191199094924"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Inventory:macros.html.twig");
        // line 5
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.inventory.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_product_create"), $this->env->getExtension('translator')->trans("sylius.product.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_index"), $this->env->getExtension('translator')->trans("sylius.product.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-tasks\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.stockable.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("sylius.controller.backend.form:filterAction", array("type" => "sylius_product_filter", "template" => "SyliusWebBundle:Backend/Product:filterForm.html.twig")), array());
        // line 24
        echo "
";
        // line 25
        echo $context["__internal_5cabb27118116d5e12413838783abd13549370e88a127a20b4392279c57ea563"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 26
        echo $context["__internal_f0ba97cbbe5597891ed57aee2b1859e6f43cc70c1f9ae1b34937191199094924"]->getlist((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 27
        echo $context["__internal_5cabb27118116d5e12413838783abd13549370e88a127a20b4392279c57ea563"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Inventory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 26,  79 => 25,  76 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
