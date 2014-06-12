<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_f85634841ec333b028b8e03beaa9a17a4a14b5ef4e63feb405b3d19745173367 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 2
            echo "    ";
            $context["ownerName"] = $this->env->getExtension('translator')->trans((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), array(), "HWIOAuthBundle");
            // line 3
            echo "    <a class=\"oauth-login oauth-login-";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
            echo "\">
        <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/syliusweb/img/icon/64/" . (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName"))) . ".png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
            echo "\">
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  23 => 2,  19 => 1,  108 => 49,  103 => 47,  92 => 39,  80 => 30,  73 => 26,  68 => 24,  62 => 21,  55 => 17,  51 => 15,  45 => 12,  42 => 11,  40 => 10,  34 => 7,  31 => 6,  28 => 5,);
    }
}
