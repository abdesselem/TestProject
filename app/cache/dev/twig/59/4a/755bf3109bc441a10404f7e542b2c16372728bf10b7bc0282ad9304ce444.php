<?php

/* SyliusResourceBundle:Macros:buttons.html.twig */
class __TwigTemplate_594a755bf3109bc441a10404f7e542b2c16372728bf10b7bc0282ad9304ce444 extends Twig_Template
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
        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 24
        echo "
";
        // line 39
        echo "
";
        // line 45
        echo "
";
        // line 54
        echo "
";
    }

    // line 1
    public function getshow($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.show")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getgeneric($_url = null, $_message = null, $_icon = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "icon" => $_icon,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-default\">
    ";
            // line 9
            if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))))) {
                echo "<i class=\"glyphicon glyphicon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>";
            }
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getcreate($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.create")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getedit($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 21
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.edit")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getdelete($_url = null, $_message = null, $_disabled = false, $_modal = true)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "disabled" => $_disabled,
            "modal" => $_modal,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                // line 27
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 31
                echo "<form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 33
                if ((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal"))) {
                    echo " btn-confirm";
                }
                echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 34
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
    </button>
</form>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getmanage($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.manage")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getmove($_url = null, $_direction = null, $_first = false, $_last = false, $_message = "")
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "direction" => $_direction,
            "first" => $_first,
            "last" => $_last,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"";
            // line 49
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans(("sylius.move_" . (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction"))))) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "\" class=\"btn btn-default ";
            if (((("up" == (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction"))) && (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) || (("down" == (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction"))) && (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                echo "disabled";
            }
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")), "html", null, true);
            echo "\"></i>
    </button>
</form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpatch($_url = null, $_message = null, $_icon = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "icon" => $_icon,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-success\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 59
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "transfer")) : ("transfer")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
    </button>
</form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 59,  314 => 56,  301 => 55,  286 => 50,  278 => 49,  272 => 47,  257 => 46,  238 => 41,  226 => 40,  210 => 34,  204 => 33,  189 => 27,  187 => 26,  154 => 20,  142 => 19,  111 => 13,  34 => 45,  26 => 3,  22 => 12,  52 => 4,  37 => 54,  28 => 24,  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 42,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 28,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 8,  74 => 16,  62 => 13,  58 => 12,  54 => 2,  47 => 7,  44 => 16,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 63,  209 => 60,  203 => 58,  200 => 57,  173 => 25,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 15,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 7,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 3,  39 => 3,  36 => 2,  24 => 1,  19 => 6,  256 => 81,  206 => 61,  202 => 60,  198 => 31,  195 => 56,  191 => 51,  188 => 53,  184 => 45,  181 => 44,  178 => 50,  170 => 36,  166 => 46,  163 => 33,  159 => 21,  126 => 14,  123 => 14,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 49,  66 => 14,  59 => 3,  57 => 5,  53 => 11,  51 => 30,  42 => 1,  40 => 7,  33 => 8,  31 => 39,  145 => 56,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 26,  103 => 25,  95 => 23,  91 => 9,  83 => 28,  70 => 15,  64 => 43,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 18,);
    }
}
