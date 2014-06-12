<?php

/* SyliusWebBundle:Backend/User:macros.html.twig */
class __TwigTemplate_c032383d47d7f3660561af64c306e207da5e83023f8c4d9222413d793e6f73b3 extends Twig_Template
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
        // line 49
        echo "
";
    }

    // line 1
    public function getlist($_users = null)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $_users,
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
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
                // line 8
                echo "<table id=\"users\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "id", $this->env->getExtension('translator')->trans("sylius.user.id"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "firstName", $this->env->getExtension('translator')->trans("sylius.address.firstname"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "lastName", $this->env->getExtension('translator')->trans("sylius.address.lastname"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "email", $this->env->getExtension('translator')->trans("sylius.user.email"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "createdAt", $this->env->getExtension('translator')->trans("sylius.user.registration_date"));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "enabled", $this->env->getExtension('translator')->trans("sylius.user.enabled"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 22
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "deleted")) {
                        echo " class=\"danger\"";
                    }
                    echo ">
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt"), "d-m-Y H:i"), "html", null, true);
                    echo "</td>
            <td>
                ";
                    // line 29
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled"));
                    echo "
            </td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 33
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 34
                    if ((!$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "deleted"))) {
                        // line 35
                        echo "                    ";
                        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                        echo "
                    ";
                        // line 36
                        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), null, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")));
                        echo "
                    ";
                    }
                    // line 38
                    echo "                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </tbody>
</table>
";
            } else {
                // line 45
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.no_results"));
                echo "
";
            }
            // line 47
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 50
    public function getsimple_list($_users = null)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $_users,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "
";
            // line 52
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 53
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 54
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 55
            echo "
";
            // line 56
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
                // line 57
                echo "<table id=\"users\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 60
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "email", $this->env->getExtension('translator')->trans("sylius.user.email"));
                echo "</th>
            <th>";
                // line 61
                echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "enabled", $this->env->getExtension('translator')->trans("sylius.user.enabled"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 67
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "deleted")) {
                        echo " class=\"danger\"";
                    }
                    echo ">
            <td>
                ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname"), "html", null, true);
                    echo "<br>
                <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                    echo "
                </a>
                </td>
            <td>
                ";
                    // line 75
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled"));
                    echo "
            </td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 79
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 80
                    if ((!$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "deleted"))) {
                        // line 81
                        echo "                    ";
                        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                        echo "
                    ";
                        // line 82
                        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                        echo "
                    ";
                    }
                    // line 84
                    echo "                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "    </tbody>
</table>
";
            } else {
                // line 91
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.no_results"));
                echo "
";
            }
            // line 93
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
        return "SyliusWebBundle:Backend/User:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 75,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 55,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 6,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 63,  209 => 60,  203 => 58,  200 => 57,  173 => 48,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 30,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 49,  256 => 81,  206 => 61,  202 => 60,  198 => 70,  195 => 56,  191 => 51,  188 => 53,  184 => 45,  181 => 44,  178 => 50,  170 => 36,  166 => 46,  163 => 33,  159 => 22,  126 => 14,  123 => 13,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 49,  66 => 14,  59 => 40,  57 => 33,  53 => 9,  51 => 30,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 56,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 26,  103 => 25,  95 => 23,  91 => 60,  83 => 28,  70 => 15,  64 => 43,  55 => 10,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
