<?php

/* SyliusResourceBundle:Macros:actions.html.twig */
class __TwigTemplate_0d3ed60be62dddf8b2613f597bdddbbb038467ddfdc3eb270c65ce8c9274136d extends Twig_Template
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
        // line 7
        echo "
";
    }

    // line 1
    public function getcreate($_url = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"icon-ok\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.create"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "headers"), "get", array(0 => "referer", 1 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
            echo "</a>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getupdate($_url = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"icon-save\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.save_changes"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "headers"), "get", array(0 => "referer", 1 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
            echo "</a>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  72 => 10,  69 => 9,  58 => 8,  42 => 4,  38 => 3,  35 => 2,  24 => 1,  19 => 7,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
