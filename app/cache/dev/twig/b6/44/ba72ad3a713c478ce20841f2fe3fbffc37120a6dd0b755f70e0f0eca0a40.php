<?php

/* SyliusWebBundle:Backend:_navbar.html.twig */
class __TwigTemplate_b644ba72ad3a713c478ce20841f2fe3fbffc37120a6dd0b755f70e0f0eca0a40 extends Twig_Template
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
        echo "<div id=\"navbar\" class=\"navbar navbar-inverse\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_dashboard");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/syliusweb/img/logo.png"), "html", null, true);
        echo "\" class=\"pull-left\" /> <span class=\"hidden-xs hidden-sm pull-left\">go to dashboard</span></a>
    </div>
    <div class=\"visible-xs visible-sm\">
        <div class=\"collapse navbar-collapse\">
            ";
        // line 12
        echo $this->env->getExtension('knp_menu')->render("sylius.backend.main", array("template" => "SyliusWebBundle:Backend:menu.html.twig", "currentClass" => "active", "ancestorClass" => "active"));
        echo "
        </div>
    </div>
    <div class=\"hidden-xs hidden-sm pull-right\">
        <p class=\"navbar-text\">";
        // line 16
        echo $this->env->getExtension('translator')->trans("sylius.backend_welcome", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fullname")));
        echo "</p>

        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle navbar-widget\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-chevron-down\"></i>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sylius_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.menu.main.homepage", array(), "menu"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.logout"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 8,  285 => 93,  280 => 91,  275 => 88,  261 => 82,  254 => 80,  250 => 79,  243 => 75,  236 => 71,  232 => 70,  218 => 67,  214 => 66,  197 => 57,  192 => 55,  190 => 54,  186 => 52,  183 => 51,  172 => 50,  160 => 47,  155 => 45,  150 => 42,  136 => 36,  131 => 35,  125 => 33,  118 => 29,  99 => 24,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 107,  351 => 105,  346 => 102,  329 => 99,  323 => 96,  319 => 95,  315 => 94,  311 => 92,  309 => 91,  302 => 87,  298 => 86,  294 => 84,  277 => 83,  270 => 79,  266 => 84,  262 => 77,  258 => 76,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  244 => 69,  242 => 68,  239 => 67,  228 => 69,  216 => 63,  209 => 60,  203 => 58,  200 => 57,  173 => 48,  168 => 47,  162 => 45,  156 => 42,  147 => 40,  143 => 38,  137 => 35,  135 => 34,  128 => 30,  124 => 29,  119 => 27,  115 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 1,  256 => 81,  206 => 61,  202 => 60,  198 => 70,  195 => 56,  191 => 51,  188 => 53,  184 => 45,  181 => 44,  178 => 50,  170 => 36,  166 => 46,  163 => 33,  159 => 22,  126 => 14,  123 => 13,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 21,  77 => 18,  75 => 50,  72 => 49,  66 => 14,  59 => 40,  57 => 33,  53 => 9,  51 => 30,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 56,  141 => 38,  133 => 20,  129 => 34,  117 => 42,  113 => 27,  107 => 26,  103 => 25,  95 => 23,  91 => 60,  83 => 28,  70 => 15,  64 => 43,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
