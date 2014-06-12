<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0c8cb95ad7997f6f8b99ad9c1fa934241ab2a72c157994721d81e923b949e802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\">
    ";
        // line 7
        echo $this->env->getExtension('translator')->trans("security.login.header", array(), "FOSUserBundle");
        echo "
</div>

";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
    </div>
";
        }
        // line 15
        echo "
<blockquote>
  <p>";
        // line 17
        echo $this->env->getExtension('translator')->trans("security.login.info", array(), "FOSUserBundle");
        echo "</p>
  <small>Mr. Sylius Demo Guide</small>
</blockquote>

<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
<fieldset>
    <div class=\"form-group\">
        <label for=\"username\" class=\"col-sm-3 control-label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-9\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" />
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\" class=\"col-sm-3 control-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-9\">
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <div class=\"checkbox\">
                <label for=\"remember_me\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "? &nbsp; <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </label>
            </div>
        </div>
    </div>
</fieldset>
<div class=\"form-actions clearfix\">
    <div class=\"pull-right\">
        ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("hwi_oauth_connect"));
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"login\"><i class=\"icon-lock\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  103 => 47,  92 => 39,  80 => 30,  73 => 26,  68 => 24,  62 => 21,  55 => 17,  51 => 15,  45 => 12,  42 => 11,  40 => 10,  34 => 7,  31 => 6,  28 => 5,);
    }
}
