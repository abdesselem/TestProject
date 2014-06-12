<?php

/* SyliusWebBundle:Backend:menu.html.twig */
class __TwigTemplate_6d574c60002cd0106bd0d6fea0578a61b582280b581e2c3a2a9873f435cad132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle::menu.html.twig");

        $this->blocks = array(
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle::menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<a";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren")) {
            echo " <b class=\"caret\">";
        }
        echo "</b></a>";
    }

    // line 3
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  37 => 12,  28 => 11,  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 75,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 55,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 63,  209 => 60,  203 => 58,  200 => 57,  173 => 48,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 30,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 3,  39 => 3,  36 => 2,  24 => 1,  19 => 1,  256 => 81,  206 => 61,  202 => 60,  198 => 70,  195 => 56,  191 => 51,  188 => 53,  184 => 45,  181 => 44,  178 => 50,  170 => 36,  166 => 46,  163 => 33,  159 => 22,  126 => 14,  123 => 13,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 49,  66 => 14,  59 => 6,  57 => 5,  53 => 9,  51 => 30,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 56,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 26,  103 => 25,  95 => 23,  91 => 60,  83 => 28,  70 => 15,  64 => 43,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
