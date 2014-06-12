<?php

/* SyliusWebBundle:Backend:layout.html.twig */
class __TwigTemplate_db17d15138c0568afa69c08fb5b5fd98bc86647eda91af71d9c1509e0729e642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta charset=\"UTF-8\">

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 30
        $this->env->loadTemplate("SyliusWebBundle:Backend:_navbar.html.twig")->display($context);
        // line 31
        echo "        <div class=\"row main-container\">
            <div class=\"col-md-2 hidden-sm hidden-xs\">
                ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "            </div>
            <div class=\"col-md-10\">
                <div id=\"topbar\">
                    ";
        // line 43
        $this->displayBlock('topbar', $context, $blocks);
        // line 46
        echo "                </div>
                <div id=\"content\">
                ";
        // line 48
        $this->env->loadTemplate("SyliusWebBundle:Backend:_flashes.html.twig")->display($context);
        // line 49
        echo "
                ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "
                <hr>

                ";
        // line 56
        echo "                ";
        $this->env->loadTemplate("SyliusWebBundle::gallery.html.twig")->display($context);
        // line 57
        echo "
                ";
        // line 59
        echo "                ";
        $this->env->loadTemplate("SyliusWebBundle::confirm-modal.html.twig")->display($context);
        // line 60
        echo "
                <footer>
                    <p>&copy; <a href=\"http://Sylius.org\">Sylius</a>, 2011 - ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
                </footer>
                </div>
            </div>
        </div>

        ";
        // line 69
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.meta.backend_title"), "html", null, true);
        echo "
            ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.css\" type=\"text/css\" />
            ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "40f0b80_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40f0b80_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_blueimp-gallery_1.css");
            // line 20
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "40f0b80_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40f0b80_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_datepicker3_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "40f0b80_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40f0b80_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_backend_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "40f0b80"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40f0b80") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        // line 34
        echo "                <div id=\"sidebar\">
                    <div class=\"sidebar-nav\">
                        ";
        // line 36
        echo $this->env->getExtension('knp_menu')->render("sylius.backend.sidebar", array("template" => "SyliusWebBundle::menu.html.twig", "currentClass" => "active"));
        echo "
                    </div>
                </div>
                ";
    }

    // line 43
    public function block_topbar($context, array $blocks = array())
    {
        // line 44
        echo "                    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend:_breadcrumb.html.twig")->display($context);
        // line 45
        echo "                    ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "                ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "            <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
            ";
        // line 72
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8d6510f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_jquery.blueimp-gallery.min_1.js");
            // line 81
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_confirm-modal_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_form-collection_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_form-spinner_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_select2_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_bootstrap-datepicker_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8d6510f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_backend_7.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "8d6510f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d6510f") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 83
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 83,  206 => 81,  202 => 72,  198 => 70,  195 => 69,  191 => 51,  188 => 50,  184 => 45,  181 => 44,  178 => 43,  170 => 36,  166 => 34,  163 => 33,  159 => 22,  126 => 14,  123 => 13,  116 => 6,  104 => 69,  88 => 59,  85 => 57,  82 => 56,  77 => 52,  75 => 50,  72 => 49,  66 => 46,  59 => 40,  57 => 33,  53 => 31,  51 => 30,  42 => 23,  40 => 13,  33 => 8,  31 => 5,  145 => 56,  141 => 55,  133 => 20,  129 => 15,  117 => 42,  113 => 5,  107 => 84,  103 => 37,  95 => 62,  91 => 60,  83 => 28,  70 => 48,  64 => 43,  55 => 15,  49 => 14,  38 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 1,);
    }
}
