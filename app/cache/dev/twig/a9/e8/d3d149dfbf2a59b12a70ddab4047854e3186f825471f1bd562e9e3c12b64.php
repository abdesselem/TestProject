<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_a9e8d3d149dfbf2a59b12a70ddab4047854e3186f825471f1bd562e9e3c12b64 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,  240 => 86,  238 => 85,  230 => 82,  217 => 75,  179 => 69,  135 => 53,  78 => 22,  71 => 18,  193 => 73,  154 => 58,  149 => 51,  133 => 42,  95 => 39,  86 => 24,  346 => 117,  337 => 114,  330 => 112,  317 => 103,  310 => 101,  292 => 92,  287 => 90,  282 => 87,  273 => 96,  249 => 76,  244 => 73,  221 => 77,  215 => 64,  209 => 82,  159 => 61,  146 => 45,  97 => 30,  93 => 38,  56 => 10,  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  565 => 210,  563 => 209,  558 => 207,  555 => 206,  551 => 205,  541 => 197,  537 => 195,  535 => 194,  530 => 193,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  377 => 133,  366 => 127,  362 => 126,  339 => 121,  295 => 93,  280 => 103,  250 => 100,  218 => 82,  205 => 76,  160 => 59,  142 => 49,  114 => 37,  107 => 33,  103 => 32,  57 => 12,  48 => 9,  365 => 141,  347 => 134,  319 => 124,  305 => 119,  301 => 97,  299 => 116,  285 => 105,  277 => 109,  271 => 108,  268 => 80,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  239 => 95,  228 => 88,  225 => 68,  219 => 76,  211 => 81,  169 => 66,  148 => 53,  51 => 10,  34 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 71,  196 => 92,  182 => 70,  173 => 65,  158 => 62,  68 => 30,  357 => 121,  344 => 119,  341 => 131,  332 => 116,  327 => 126,  324 => 113,  318 => 114,  306 => 100,  297 => 104,  291 => 106,  263 => 77,  258 => 94,  243 => 88,  231 => 83,  224 => 79,  212 => 78,  202 => 77,  190 => 76,  187 => 70,  161 => 63,  143 => 55,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  204 => 72,  188 => 75,  174 => 58,  171 => 64,  167 => 71,  138 => 54,  125 => 38,  121 => 50,  118 => 40,  104 => 32,  87 => 25,  49 => 9,  46 => 12,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 139,  353 => 125,  345 => 147,  343 => 132,  340 => 145,  334 => 113,  331 => 140,  328 => 139,  326 => 138,  321 => 105,  309 => 120,  307 => 128,  302 => 125,  296 => 121,  293 => 113,  290 => 119,  288 => 101,  283 => 100,  281 => 110,  276 => 83,  274 => 97,  269 => 94,  265 => 106,  259 => 103,  255 => 93,  253 => 100,  235 => 83,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 73,  175 => 58,  170 => 57,  166 => 61,  163 => 62,  155 => 47,  152 => 49,  144 => 49,  127 => 54,  109 => 34,  94 => 28,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  462 => 202,  453 => 199,  449 => 157,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 134,  373 => 131,  361 => 152,  355 => 150,  351 => 120,  348 => 140,  342 => 137,  338 => 130,  335 => 120,  329 => 117,  325 => 129,  323 => 116,  320 => 127,  315 => 102,  312 => 113,  303 => 106,  300 => 109,  298 => 120,  289 => 91,  286 => 112,  278 => 98,  275 => 105,  270 => 81,  267 => 101,  262 => 105,  256 => 96,  248 => 100,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 82,  207 => 75,  203 => 78,  200 => 60,  197 => 74,  194 => 68,  191 => 59,  185 => 74,  181 => 72,  178 => 59,  176 => 64,  172 => 57,  168 => 62,  165 => 64,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 45,  130 => 41,  119 => 42,  116 => 41,  113 => 44,  105 => 35,  102 => 32,  99 => 31,  90 => 37,  84 => 24,  81 => 23,  73 => 19,  70 => 16,  67 => 17,  59 => 22,  38 => 6,  30 => 3,  79 => 21,  72 => 27,  69 => 26,  54 => 12,  45 => 8,  42 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  164 => 60,  162 => 59,  157 => 56,  145 => 74,  139 => 43,  131 => 52,  123 => 41,  120 => 31,  115 => 39,  111 => 47,  108 => 47,  106 => 33,  101 => 43,  98 => 37,  96 => 37,  92 => 27,  83 => 35,  80 => 29,  74 => 23,  66 => 14,  64 => 24,  60 => 13,  55 => 24,  52 => 12,  43 => 12,  35 => 5,  32 => 7,  29 => 3,  62 => 12,  53 => 10,  50 => 10,  47 => 9,  41 => 19,  36 => 8,  33 => 4,  31 => 3,  28 => 3,);
    }
}
