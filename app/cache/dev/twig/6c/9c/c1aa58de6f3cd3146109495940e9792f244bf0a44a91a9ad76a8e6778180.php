<?php

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_6c9cc1aa58de6f3cd3146109495940e9792f244bf0a44a91a9ad76a8e6778180 extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    font-weight: normal;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
    content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 286
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 287
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 327
        echo "
";
        // line 328
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 329
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)) !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8) !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
    }
";
        }
        // line 339
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none;
        visibility: hidden;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  308 => 287,  24 => 3,  19 => 1,  240 => 86,  238 => 85,  230 => 82,  217 => 75,  179 => 69,  135 => 53,  78 => 22,  71 => 18,  193 => 73,  154 => 58,  149 => 51,  133 => 42,  95 => 39,  86 => 24,  346 => 117,  337 => 114,  330 => 112,  317 => 103,  310 => 101,  292 => 92,  287 => 90,  282 => 87,  273 => 96,  249 => 76,  244 => 73,  221 => 77,  215 => 64,  209 => 82,  159 => 61,  146 => 45,  97 => 30,  93 => 38,  56 => 10,  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  565 => 210,  563 => 209,  558 => 207,  555 => 206,  551 => 205,  541 => 197,  537 => 195,  535 => 194,  530 => 193,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  377 => 133,  366 => 127,  362 => 126,  339 => 121,  295 => 93,  280 => 103,  250 => 100,  218 => 82,  205 => 76,  160 => 59,  142 => 49,  114 => 37,  107 => 33,  103 => 32,  57 => 12,  48 => 9,  365 => 141,  347 => 134,  319 => 124,  305 => 119,  301 => 97,  299 => 116,  285 => 105,  277 => 109,  271 => 108,  268 => 80,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  239 => 95,  228 => 88,  225 => 68,  219 => 76,  211 => 81,  169 => 66,  148 => 53,  51 => 10,  34 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 71,  196 => 92,  182 => 70,  173 => 65,  158 => 62,  68 => 30,  357 => 121,  344 => 119,  341 => 131,  332 => 116,  327 => 126,  324 => 113,  318 => 114,  306 => 286,  297 => 104,  291 => 106,  263 => 77,  258 => 94,  243 => 88,  231 => 83,  224 => 79,  212 => 78,  202 => 77,  190 => 76,  187 => 70,  161 => 63,  143 => 55,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  204 => 72,  188 => 75,  174 => 58,  171 => 64,  167 => 71,  138 => 54,  125 => 38,  121 => 50,  118 => 40,  104 => 32,  87 => 25,  49 => 9,  46 => 12,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 339,  363 => 126,  358 => 139,  353 => 328,  345 => 147,  343 => 132,  340 => 145,  334 => 113,  331 => 140,  328 => 139,  326 => 138,  321 => 105,  309 => 120,  307 => 128,  302 => 125,  296 => 121,  293 => 113,  290 => 119,  288 => 101,  283 => 100,  281 => 110,  276 => 83,  274 => 97,  269 => 94,  265 => 106,  259 => 103,  255 => 93,  253 => 100,  235 => 83,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 73,  175 => 58,  170 => 57,  166 => 61,  163 => 62,  155 => 47,  152 => 49,  144 => 49,  127 => 54,  109 => 34,  94 => 28,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  462 => 202,  453 => 199,  449 => 157,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 134,  373 => 131,  361 => 152,  355 => 329,  351 => 120,  348 => 140,  342 => 137,  338 => 130,  335 => 120,  329 => 117,  325 => 129,  323 => 116,  320 => 127,  315 => 102,  312 => 113,  303 => 106,  300 => 109,  298 => 120,  289 => 91,  286 => 112,  278 => 98,  275 => 105,  270 => 81,  267 => 101,  262 => 105,  256 => 96,  248 => 100,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 82,  207 => 75,  203 => 78,  200 => 60,  197 => 74,  194 => 68,  191 => 59,  185 => 74,  181 => 72,  178 => 59,  176 => 64,  172 => 57,  168 => 62,  165 => 64,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 45,  130 => 41,  119 => 42,  116 => 41,  113 => 44,  105 => 35,  102 => 32,  99 => 31,  90 => 37,  84 => 24,  81 => 23,  73 => 19,  70 => 16,  67 => 17,  59 => 22,  38 => 6,  30 => 3,  79 => 21,  72 => 27,  69 => 26,  54 => 12,  45 => 8,  42 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  164 => 60,  162 => 59,  157 => 56,  145 => 74,  139 => 43,  131 => 52,  123 => 41,  120 => 31,  115 => 39,  111 => 47,  108 => 47,  106 => 33,  101 => 43,  98 => 37,  96 => 37,  92 => 27,  83 => 35,  80 => 29,  74 => 23,  66 => 14,  64 => 24,  60 => 13,  55 => 24,  52 => 12,  43 => 12,  35 => 5,  32 => 7,  29 => 3,  62 => 12,  53 => 10,  50 => 10,  47 => 9,  41 => 19,  36 => 8,  33 => 4,  31 => 3,  28 => 3,);
    }
}
