<?php

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_a7f111ce2d647fca24502899cf13b4b59e4aedfe748dd0c80a0bd634ad2c3098 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
            // line 4
            if (((isset($context["currentOrder"]) ? $context["currentOrder"] : $this->getContext($context, "currentOrder")) == "desc")) {
                // line 5
                echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
            } else {
                // line 7
                echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
            }
        }
        // line 10
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  223 => 67,  219 => 65,  213 => 63,  207 => 61,  201 => 59,  194 => 56,  185 => 53,  182 => 52,  179 => 51,  176 => 50,  167 => 47,  164 => 46,  161 => 45,  157 => 43,  151 => 41,  148 => 40,  139 => 37,  134 => 35,  122 => 34,  100 => 28,  96 => 26,  92 => 24,  321 => 59,  314 => 56,  301 => 55,  286 => 50,  278 => 49,  272 => 47,  257 => 46,  238 => 41,  226 => 40,  210 => 62,  204 => 60,  189 => 27,  187 => 26,  154 => 42,  142 => 38,  111 => 13,  34 => 45,  26 => 3,  22 => 33,  52 => 4,  37 => 54,  28 => 3,  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 42,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 28,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 21,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 64,  209 => 60,  203 => 58,  200 => 57,  173 => 49,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 15,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 7,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 5,  43 => 5,  41 => 3,  39 => 10,  36 => 2,  24 => 2,  19 => 1,  256 => 81,  206 => 61,  202 => 60,  198 => 31,  195 => 56,  191 => 55,  188 => 54,  184 => 45,  181 => 44,  178 => 50,  170 => 48,  166 => 46,  163 => 33,  159 => 21,  126 => 14,  123 => 14,  116 => 6,  104 => 30,  88 => 22,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 19,  66 => 14,  59 => 3,  57 => 5,  53 => 11,  51 => 30,  42 => 1,  40 => 7,  33 => 8,  31 => 39,  145 => 39,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 31,  103 => 25,  95 => 23,  91 => 9,  83 => 20,  70 => 15,  64 => 43,  55 => 24,  49 => 8,  38 => 3,  35 => 7,  32 => 5,  27 => 1,  25 => 18,);
    }
}
