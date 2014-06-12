<?php

/* SyliusWebBundle:Backend/ProductPrototype:index.html.twig */
class __TwigTemplate_b8d1a2848734f948dd6dc1774a488cdaef1d6c44f63d567678a71b694edbe9fc extends Twig_Template
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
        $context["__internal_2812c4cdbaaf97b772d343c3f0158ab7f8dbba32d9c769a4e73a619c050d09ac"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_d1dffc17b1070cb386bc6b71cef9848e9ef930f8e09bf9ea64aacb5aaf217f9c"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ProductPrototype:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.prototype.index"), "html", null, true);
        echo "</a></li>
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_product_prototype_create"), $this->env->getExtension('translator')->trans("sylius.prototype.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_option_index"), $this->env->getExtension('translator')->trans("sylius.product_option.manage"));
        echo "
        ";
        // line 19
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_attribute_index"), $this->env->getExtension('translator')->trans("sylius.product_attribute.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-compressed\"></i> ";
        // line 21
        echo $this->env->getExtension('translator')->trans("sylius.prototype.index_header");
        echo "</h1>
</div>

";
        // line 24
        echo $context["__internal_2812c4cdbaaf97b772d343c3f0158ab7f8dbba32d9c769a4e73a619c050d09ac"]->getpagination((isset($context["product_prototypes"]) ? $context["product_prototypes"] : $this->getContext($context, "product_prototypes")));
        echo "
";
        // line 25
        echo $context["__internal_d1dffc17b1070cb386bc6b71cef9848e9ef930f8e09bf9ea64aacb5aaf217f9c"]->getlist((isset($context["product_prototypes"]) ? $context["product_prototypes"] : $this->getContext($context, "product_prototypes")));
        echo "
";
        // line 26
        echo $context["__internal_2812c4cdbaaf97b772d343c3f0158ab7f8dbba32d9c769a4e73a619c050d09ac"]->getpagination((isset($context["product_prototypes"]) ? $context["product_prototypes"] : $this->getContext($context, "product_prototypes")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ProductPrototype:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  82 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
