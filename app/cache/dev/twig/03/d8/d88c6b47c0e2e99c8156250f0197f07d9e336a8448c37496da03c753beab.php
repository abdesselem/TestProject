<?php

/* SyliusWebBundle:Backend/Macros:misc.html.twig */
class __TwigTemplate_03d8d88c6b47c0e2e99c8156250f0197f07d9e336a8448c37496da03c753beab extends Twig_Template
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
        // line 18
        echo "
";
        // line 33
        echo "
";
    }

    // line 1
    public function getpagination($_paginator = null, $_options = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
            "options" => $_options,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method"), false)) : (false))) {
                // line 3
                echo "<div class=\"row\">
    <div class=\"col-xs-9\">
        ";
                // line 5
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "twitter_bootstrap3_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array())) : (array())));
                echo "
    </div>

    <div class=\"col-xs-3\">
        <div class=\"pull-right\">
            <div class=\"btn-group paginator\">
                ";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderPaginateSelect($this->env, (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), array(0 => 10, 1 => 20, 2 => 30));
                echo "
            </div>
        </div>
    </div>
</div>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getshipment_state($_state = null)
    {
        $context = $this->env->mergeGlobals(array(
            "state" => $_state,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "
";
            // line 21
            if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "pending")) {
                // line 22
                echo "    ";
                $context["class"] = "danger";
            } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "dispatched")) {
                // line 24
                echo "    ";
                $context["class"] = "info";
            } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "returned")) {
                // line 26
                echo "    ";
                $context["class"] = "warning";
            } else {
                // line 28
                echo "    ";
                $context["class"] = "success";
            }
            // line 30
            echo "
<span class=\"label label-";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo " label-state\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->env->getExtension('translator')->trans((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state"))))), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getstate_label($_state = null, $_type = null)
    {
        $context = $this->env->mergeGlobals(array(
            "state" => $_state,
            "type" => $_type,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "payment")) {
                // line 36
                echo "    ";
                $context["label"] = ("sylius.payment.state." . (isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")));
                // line 37
                echo "    ";
                if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === "completed")) {
                    // line 38
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 39
                    echo "    ";
                } elseif (twig_in_filter((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")), array(0 => "checkout", 1 => "processing", 2 => "new"))) {
                    // line 40
                    echo "        ";
                    $context["class"] = "label-primary";
                    // line 41
                    echo "    ";
                } else {
                    // line 42
                    echo "        ";
                    $context["class"] = "label-danger";
                    // line 43
                    echo "    ";
                }
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "order")) {
                // line 45
                echo "    ";
                if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 1)) {
                    // line 46
                    echo "        ";
                    $context["label"] = "sylius.order.state.checkout";
                    // line 47
                    echo "        ";
                    $context["class"] = "label-warning";
                    // line 48
                    echo "    ";
                } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 2)) {
                    // line 49
                    echo "        ";
                    $context["label"] = "sylius.order.state.cart_locked";
                    // line 50
                    echo "        ";
                    $context["class"] = "label-default";
                    // line 51
                    echo "    ";
                } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 3)) {
                    // line 52
                    echo "        ";
                    $context["label"] = "sylius.order.state.ordered";
                    // line 53
                    echo "        ";
                    $context["class"] = "label-info";
                    // line 54
                    echo "    ";
                } else {
                    // line 55
                    echo "        ";
                    $context["label"] = "sylius.order.state.order_confimed";
                    // line 56
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 57
                    echo "    ";
                }
            } else {
                // line 59
                echo "    ";
                if ((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state"))) {
                    // line 60
                    echo "        ";
                    $context["label"] = "sylius.yes";
                    // line 61
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 62
                    echo "    ";
                } else {
                    // line 63
                    echo "        ";
                    $context["label"] = "sylius.no";
                    // line 64
                    echo "        ";
                    $context["class"] = "label-danger";
                    // line 65
                    echo "    ";
                }
            }
            // line 67
            echo "<span class=\"label ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Macros:misc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 67,  219 => 65,  213 => 63,  207 => 61,  201 => 59,  194 => 56,  185 => 53,  182 => 52,  179 => 51,  176 => 50,  167 => 47,  164 => 46,  161 => 45,  157 => 43,  151 => 41,  148 => 40,  139 => 37,  134 => 35,  122 => 34,  100 => 28,  96 => 26,  92 => 24,  321 => 59,  314 => 56,  301 => 55,  286 => 50,  278 => 49,  272 => 47,  257 => 46,  238 => 41,  226 => 40,  210 => 62,  204 => 60,  189 => 27,  187 => 26,  154 => 42,  142 => 38,  111 => 13,  34 => 45,  26 => 3,  22 => 33,  52 => 4,  37 => 54,  28 => 24,  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 42,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 28,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 21,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 64,  209 => 60,  203 => 58,  200 => 57,  173 => 49,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 15,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 7,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 5,  43 => 5,  41 => 3,  39 => 2,  36 => 2,  24 => 1,  19 => 18,  256 => 81,  206 => 61,  202 => 60,  198 => 31,  195 => 56,  191 => 55,  188 => 54,  184 => 45,  181 => 44,  178 => 50,  170 => 48,  166 => 46,  163 => 33,  159 => 21,  126 => 14,  123 => 14,  116 => 6,  104 => 30,  88 => 22,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 19,  66 => 14,  59 => 3,  57 => 5,  53 => 11,  51 => 30,  42 => 1,  40 => 7,  33 => 8,  31 => 39,  145 => 39,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 31,  103 => 25,  95 => 23,  91 => 9,  83 => 20,  70 => 15,  64 => 43,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 1,  25 => 18,);
    }
}
