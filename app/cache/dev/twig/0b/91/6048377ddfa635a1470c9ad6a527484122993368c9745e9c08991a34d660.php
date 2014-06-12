<?php

/* SyliusWebBundle:Backend/Order:macros.html.twig */
class __TwigTemplate_0b916048377ddfa635a1470c9ad6a527484122993368c9745e9c08991a34d660 extends Twig_Template
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
        // line 65
        echo "
";
    }

    // line 1
    public function getlist($_orders = null, $_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "orders" => $_orders,
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 4
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 5
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 6
            echo "
";
            // line 7
            $context["router_paramters"] = (((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) ? (array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) : (array()));
            // line 8
            echo "
";
            // line 9
            if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
                // line 10
                echo "<table id=\"orders\" class=\"table\">
    <thead>
        <tr>
            <th></th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "createdAt", $this->env->getExtension('translator')->trans("sylius.order.created_at"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "number", $this->env->getExtension('translator')->trans("sylius.order.number"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "paymentState", $this->env->getExtension('translator')->trans("sylius.order.payment_state"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 17
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "shippingState", $this->env->getExtension('translator')->trans("sylius.order.shipment_state"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 18
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "user", $this->env->getExtension('translator')->trans("sylius.order.user"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 19
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "total", $this->env->getExtension('translator')->trans("sylius.order.total"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 25
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deleted")) {
                        echo " class=\"danger\"";
                    }
                    echo ">
            <td class=\"center-text\"><input type=\"checkbox\" value=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"), "html", null, true);
                    echo "\" /></td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "createdAt")), "html", null, true);
                    echo "</td>
            <td>
                <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                    echo "\">
                    <strong>#";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "number"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            <td>
                ";
                    // line 34
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_paymentState.html.twig")->display($context);
                    // line 35
                    echo "            </td>
            <td>
                ";
                    // line 37
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_shippingState.html.twig")->display($context);
                    // line 38
                    echo "            </td>
            <td>
                <p>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "fullName"), "html", null, true);
                    echo " <br><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "email"), "html", null, true);
                    echo "</a></p>
            </td>
            <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 45
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                    echo "
                ";
                    // line 46
                    if ((!$this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deleted"))) {
                        // line 47
                        echo "                ";
                        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_order_update", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                        echo "
                ";
                        // line 48
                        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_order_delete", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                        echo "
                ";
                    }
                    // line 50
                    echo "                </div>
            </td>
        </tr>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    </tbody>
</table>
";
            } else {
                // line 57
                echo "    ";
                if ((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) {
                    // line 58
                    echo "        ";
                    echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.order.no_results"));
                    echo "
    ";
                } else {
                    // line 60
                    echo "        ";
                    echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.order.no_results"));
                    echo "
    ";
                }
            }
            // line 63
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getsimple_list($_orders = null)
    {
        $context = $this->env->mergeGlobals(array(
            "orders" => $_orders,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "
";
            // line 68
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 69
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 70
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 71
            echo "
";
            // line 72
            if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
                // line 73
                echo "<table id=\"orders\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.number"), "html", null, true);
                echo "</th>
            <th>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.payment_state"), "html", null, true);
                echo "</th>
            <th>";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.user"), "html", null, true);
                echo "</th>
            <th>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.total"), "html", null, true);
                echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 83
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 84
                    echo "        <tr>
            <td>
                <a href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                    echo "\">
                <strong>#";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "number"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            <td>
                ";
                    // line 91
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_paymentState.html.twig")->display($context);
                    // line 92
                    echo "            </td>
            <td style=\"width: 20%\">
                ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "fullname"), "html", null, true);
                    echo "<br>
                <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "email"), "html", null, true);
                    echo "
                </a>
            </td>
            <td>";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency")), "html", null, true);
                    echo "</td>
        </tr>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "    </tbody>
</table>
";
            } else {
                // line 105
                echo "    ";
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.order.no_results"));
                echo "
";
            }
            // line 107
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Order:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 78,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 66,  216 => 63,  209 => 60,  203 => 58,  200 => 57,  173 => 48,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 30,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 65,  256 => 83,  206 => 81,  202 => 72,  198 => 70,  195 => 54,  191 => 51,  188 => 50,  184 => 45,  181 => 44,  178 => 50,  170 => 36,  166 => 46,  163 => 33,  159 => 22,  126 => 14,  123 => 13,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 56,  77 => 18,  75 => 50,  72 => 49,  66 => 46,  59 => 40,  57 => 33,  53 => 9,  51 => 30,  42 => 23,  40 => 13,  33 => 8,  31 => 5,  145 => 56,  141 => 37,  133 => 20,  129 => 15,  117 => 42,  113 => 5,  107 => 84,  103 => 37,  95 => 62,  91 => 60,  83 => 28,  70 => 48,  64 => 43,  55 => 10,  49 => 14,  38 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 1,);
    }
}
