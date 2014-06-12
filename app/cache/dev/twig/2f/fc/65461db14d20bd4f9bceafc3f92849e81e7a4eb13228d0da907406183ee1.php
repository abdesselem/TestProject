<?php

/* SyliusWebBundle:Backend/User:index.html.twig */
class __TwigTemplate_2ffc65461db14d20bd4f9bceafc3f92849e81e7a4eb13228d0da907406183ee1 extends Twig_Template
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
        $context["__internal_79e99d8c8ac6c01d4d0bb211ddd8f9156bce79c4e09129217894ca0d2490968b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_9f02a14d00f0ef94c061500ce728d734cb9dea4408f49a61424b6736aff0caa2"] = $this->env->loadTemplate("SyliusWebBundle:Backend/User:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.customers"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.user.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_user_create"), $this->env->getExtension('translator')->trans("sylius.user.create"));
        echo "
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "deleted"), "method")) {
            // line 19
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index", array("deleted" => false));
            echo "\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.hide_deleted"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 21
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index", array("deleted" => true));
            echo "\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.show_deleted"), "html", null, true);
            echo "</a>
        ";
        }
        // line 23
        echo "    </div>
    <h1><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 24
        echo $this->env->getExtension('translator')->trans("sylius.user.index_header");
        echo "</h1>
</div>

";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("sylius.controller.backend.form:filterAction", array("type" => "sylius_user_filter", "template" => "SyliusWebBundle:Backend/User:filterForm.html.twig")), array());
        // line 28
        echo "
";
        // line 29
        $context["activeTab"] = ((((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "criteria"), "method"))) && ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "criteria"), "method", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "criteria"), "method", false, true), "enabled"), "1")) : ("1")) == "0"))) ? ("disabled") : ("all"));
        // line 30
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs grid-tabs\">
            <li class=\"";
        // line 34
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "all")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.filter.all"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 35
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "disabled")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_index", array("criteria" => array("enabled" => false))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.filter.unconfirmed"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>
</div>

";
        // line 40
        echo $context["__internal_9f02a14d00f0ef94c061500ce728d734cb9dea4408f49a61424b6736aff0caa2"]->getlist((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
";
        // line 41
        echo $context["__internal_79e99d8c8ac6c01d4d0bb211ddd8f9156bce79c4e09129217894ca0d2490968b"]->getpagination((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  123 => 40,  111 => 35,  103 => 34,  97 => 30,  95 => 29,  92 => 28,  90 => 27,  84 => 24,  81 => 23,  73 => 21,  65 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
