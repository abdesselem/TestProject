<?php

/* SyliusWebBundle:Backend/ProductVariant:macros.html.twig */
class __TwigTemplate_4dfcaca4c846be5460c5441c9c467dc8c2ab76d5d03b96cf0d85733524b577e0 extends Twig_Template
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
    }

    // line 1
    public function getlist($_variants = null)
    {
        $context = $this->env->mergeGlobals(array(
            "variants" => $_variants,
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
            echo "
";
            // line 6
            if ((twig_length_filter($this->env, (isset($context["variants"]) ? $context["variants"] : $this->getContext($context, "variants"))) > 0)) {
                // line 7
                echo "<table class=\"table\" id=\"variants\">
    <thead>
        <tr>
            <th>id</th>
            <th>";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.sku"), "html", null, true);
                echo "</th>
            <th></th>
            <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.availability"), "html", null, true);
                echo "</th>
            <th>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.last_update"), "html", null, true);
                echo "</th>
            <th>";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.options"), "html", null, true);
                echo "</th>
            <th>";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.available_on_demand"), "html", null, true);
                echo "</th>
            <th>";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.stock"), "html", null, true);
                echo "</th>
            <th>";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.price"), "html", null, true);
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["variants"]) ? $context["variants"] : $this->getContext($context, "variants")));
                foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                    // line 24
                    echo "        ";
                    $context["product"] = $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product");
                    // line 25
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "sku")) ? ($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "sku")) : ("-")), "html", null, true);
                    echo "</td>
            <td>";
                    // line 28
                    if (($this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "images"), "count") > 0)) {
                        // line 29
                        echo "                <img class=\"img-polaroid\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "images"), "offsetGet", array(0 => 0), "method"), "path"), "sylius_small"), "html", null, true);
                        echo "\" />
            ";
                    }
                    // line 31
                    echo "            </td>
            <td><span class=\"label label-";
                    // line 32
                    echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "available")) ? ("success") : ("important"));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "availableOn")), "html", null, true);
                    echo "</span></td>
            <td>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <ul>
                ";
                    // line 36
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 37
                        echo "                    <li><strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                        echo "</strong>: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                        echo "</li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                </ul>
            </td>
            <td>
                <span class=\"label label-";
                    // line 42
                    echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "availableOnDemand")) ? ("success") : ("warning"));
                    echo "\">
                    ";
                    // line 43
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "availableOnDemand")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                </span>
            </td>
            <td><span class=\"label label-";
                    // line 46
                    echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "inStock")) ? ("success") : ("important"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHand"), "html", null, true);
                    echo "</span></td>
            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "price")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 50
                    if ((!$this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "deleted"))) {
                        // line 51
                        echo "                ";
                        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_product_variant_update", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"))));
                        echo "
                ";
                        // line 52
                        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_product_variant_delete", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"))));
                        echo "
                ";
                    }
                    // line 54
                    echo "                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "    </tbody>
</table>
";
            } else {
                // line 61
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.variant.no_results"));
                echo "
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ProductVariant:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  189 => 58,  180 => 54,  175 => 52,  170 => 51,  168 => 50,  162 => 47,  156 => 46,  146 => 42,  141 => 39,  130 => 37,  114 => 32,  111 => 31,  105 => 29,  103 => 28,  90 => 25,  71 => 17,  50 => 11,  42 => 6,  33 => 6,  29 => 5,  25 => 4,  19 => 1,  260 => 99,  255 => 97,  250 => 94,  244 => 93,  237 => 88,  226 => 83,  218 => 80,  212 => 79,  208 => 77,  197 => 75,  193 => 74,  185 => 71,  181 => 70,  178 => 69,  174 => 68,  165 => 62,  161 => 61,  152 => 54,  150 => 43,  143 => 49,  138 => 46,  134 => 44,  126 => 36,  124 => 41,  120 => 33,  116 => 37,  108 => 35,  106 => 34,  99 => 27,  95 => 26,  89 => 26,  75 => 18,  67 => 16,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  87 => 24,  83 => 23,  79 => 21,  76 => 24,  74 => 23,  68 => 20,  63 => 15,  59 => 14,  55 => 13,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
