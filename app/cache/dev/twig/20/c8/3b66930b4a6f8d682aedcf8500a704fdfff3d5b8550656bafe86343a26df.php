<?php

/* SyliusWebBundle:Backend/Inventory:macros.html.twig */
class __TwigTemplate_20c83b66930b4a6f8d682aedcf8500a704fdfff3d5b8550656bafe86343a26df extends Twig_Template
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
    public function getlist($_products = null)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["__internal_c5926f9603499bcdfdf63fe687ff34264f741813884b316af76eb6f658016423"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ProductVariant:macros.html.twig");
            // line 4
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 5
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 6
            echo "
";
            // line 7
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) > 0)) {
                // line 8
                echo "<table class=\"table\" id=\"stockables\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "id", "#id");
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "sku", $this->env->getExtension('translator')->trans("sylius.stockable.sku"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "name", $this->env->getExtension('translator')->trans("sylius.product.name"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "onHand", $this->env->getExtension('translator')->trans("sylius.stockable.on_hand"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "onHold", $this->env->getExtension('translator')->trans("sylius.stockable.on_hold"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 21
                    echo "            <tr>
                <td>
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                    echo "
                </td>
                <td>
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku"), "html", null, true);
                    echo "
                </td>
                <td>
                    <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                        <strong>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                    echo "</strong>
                    </a>
                </td>
                <td>
                    ";
                    // line 34
                    if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions"))) {
                        // line 35
                        echo "                        <span class=\"label label-";
                        echo (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "isInStock")) ? ("success") : ("danger"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand"), "html", null, true);
                        echo "</span>
                    ";
                    } else {
                        // line 37
                        echo "                        -
                    ";
                    }
                    // line 39
                    echo "                </td>
                <td>
                    ";
                    // line 41
                    if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions"))) {
                        // line 42
                        echo "                        <span class=\"label label-";
                        echo (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHold")) ? ("warning") : ("success"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHold"), "html", null, true);
                        echo "</span>
                    ";
                    } else {
                        // line 44
                        echo "                        -
                    ";
                    }
                    // line 46
                    echo "                </td>
                <td>
                    <div class=\"pull-right\">
                        ";
                    // line 49
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))));
                    echo "
                    </div>
                </td>
            </tr>
            ";
                    // line 53
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
                        // line 54
                        echo "            <tr class=\"sub-table\">
                <td class=\"variant-table-toggle\"><i class=\"glyphicon glyphicon-chevron-down\"></i></td>
                <td colspan=\"4\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>";
                        // line 61
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.availability"), "html", null, true);
                        echo "</th>
                                <th>";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.options"), "html", null, true);
                        echo "</th>
                                <th></th>
                                <th colspan=\"2\"></th>
                            </tr>
                        </thead>
                        <tbody style=\"display: none\">
                            ";
                        // line 68
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants"));
                        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                            // line 69
                            echo "                                <tr>
                                    <td>";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"), "html", null, true);
                            echo "</td>
                                    <td><span class=\"label label-";
                            // line 71
                            echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "available")) ? ("success") : ("danger"));
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "availableOn")), "html", null, true);
                            echo "</span></td>
                                    <td>
                                        <ul>
                                        ";
                            // line 74
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 75
                                echo "                                            <li><strong>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                                echo "</strong>: ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                                echo "</li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 77
                            echo "                                        </ul>
                                    </td>
                                    <td><span class=\"label label-";
                            // line 79
                            echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "inStock")) ? ("success") : ("danger"));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHand"), "html", null, true);
                            echo "</span></td>
                                    <td><span class=\"label label-";
                            // line 80
                            echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHold")) ? ("warning") : ("success"));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHold"), "html", null, true);
                            echo "</span></td>
                                    <td>
                                        <div class=\"pull-right\">
                                            ";
                            // line 83
                            echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_product_variant_update", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"))));
                            echo "
                                        </div>
                                    </td>
                                </tr>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 88
                        echo "                        </tbody>
                    </table>
                </td>
            </tr>
            ";
                    }
                    // line 93
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "    </tbody>
</table>
";
            } else {
                // line 97
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_results"));
                echo "
";
            }
            // line 99
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
        return "SyliusWebBundle:Backend/Inventory:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 99,  255 => 97,  250 => 94,  244 => 93,  237 => 88,  226 => 83,  218 => 80,  212 => 79,  208 => 77,  197 => 75,  193 => 74,  185 => 71,  181 => 70,  178 => 69,  174 => 68,  165 => 62,  161 => 61,  152 => 54,  150 => 53,  143 => 49,  138 => 46,  134 => 44,  126 => 42,  124 => 41,  120 => 39,  116 => 37,  108 => 35,  106 => 34,  99 => 30,  95 => 29,  89 => 26,  75 => 20,  67 => 15,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  87 => 27,  83 => 23,  79 => 21,  76 => 24,  74 => 23,  68 => 20,  63 => 14,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
