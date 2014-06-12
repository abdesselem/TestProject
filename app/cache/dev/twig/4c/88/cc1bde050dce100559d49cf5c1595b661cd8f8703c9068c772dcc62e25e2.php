<?php

/* DoctrinePHPCRBundle:Collector:phpcr.html.twig */
class __TwigTemplate_4c88cc1bde050dce100559d49cf5c1595b661cd8f8703c9068c772dcc62e25e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'calls' => array($this, 'block_calls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>PHPCR Calls</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Call time</b>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>PHPCR</strong>
    <span class=\"count\">
        <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount"), "html", null, true);
        echo "</span>
        <span>";
        // line 30
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayBlock("calls", $context, $blocks);
        echo "
";
    }

    // line 39
    public function block_calls($context, array $blocks = array())
    {
        // line 40
        echo "    <h2>Calls</h2>

    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls"));
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
        foreach ($context['_seq'] as $context["connection"] => $context["calls"]) {
            // line 43
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, (isset($context["connection"]) ? $context["connection"] : $this->getContext($context, "connection")), "html", null, true);
            echo "</em></h3>
        ";
            // line 44
            if (twig_test_empty((isset($context["calls"]) ? $context["calls"] : $this->getContext($context, "calls")))) {
                // line 45
                echo "            <p>
                <em>No calls.</em>
            </p>
        ";
            } else {
                // line 49
                echo "            <table class=\"alt\" id=\"callsPlaceholder-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">
                ";
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : $this->getContext($context, "calls")));
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
                foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                    // line 59
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                    echo "\">
                        <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 61
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "executionMS") * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            <code id=\"code-";
                    // line 63
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                ";
                    // line 64
                    echo $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "method");
                    echo "
                            </code>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "params")), "html", null, true);
                    echo " <br />
                                <strong>Environment</strong>: ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "env")), "html", null, true);
                    echo " <br />
                            </small>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                </tbody>
            </table>
        ";
            }
            // line 76
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['calls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
    <h2>Database Connections</h2>

    ";
        // line 80
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections")) {
            // line 81
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections")));
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 87
        echo "
    <h2>Document Managers</h2>

    ";
        // line 90
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers")) {
            // line 91
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers")));
            // line 92
            echo "    ";
        } else {
            // line 93
            echo "        <p>
            <em>No document managers.</em>
        </p>
    ";
        }
        // line 97
        echo "
    <h2>Mapping</h2>

    ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "documents"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 101
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, (isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "html", null, true);
            echo "</em></h3>
        ";
            // line 102
            if (twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 103
                echo "            <p><em>No loaded documents.</em></p>
        ";
            } else {
                // line 105
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 112
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 113
                    echo "                    <tr>
                        <td>";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                </tbody>
            </table>
        ";
            }
            // line 120
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandCall(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                callsParameters = document.getElementById('original-call' + targetId);

            if (callsParameters.style.display != 'none') {
                callsParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable call';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';
            }

            return false;
        }

        function toggleRunnableCall(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-call', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable call';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable call';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "DoctrinePHPCRBundle:Collector:phpcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 117,  337 => 114,  330 => 112,  317 => 103,  310 => 101,  292 => 92,  287 => 90,  282 => 87,  273 => 82,  249 => 76,  244 => 73,  221 => 67,  215 => 64,  209 => 63,  159 => 52,  146 => 45,  97 => 30,  93 => 29,  56 => 10,  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  565 => 210,  563 => 209,  558 => 207,  555 => 206,  551 => 205,  541 => 197,  537 => 195,  535 => 194,  530 => 193,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  377 => 133,  366 => 127,  362 => 126,  339 => 121,  295 => 93,  280 => 103,  250 => 100,  218 => 82,  205 => 76,  160 => 59,  142 => 49,  114 => 37,  107 => 33,  103 => 31,  57 => 11,  48 => 7,  365 => 141,  347 => 134,  319 => 124,  305 => 119,  301 => 97,  299 => 116,  285 => 105,  277 => 109,  271 => 108,  268 => 80,  260 => 104,  257 => 103,  254 => 102,  251 => 101,  239 => 95,  228 => 88,  225 => 68,  219 => 84,  211 => 81,  169 => 66,  148 => 53,  51 => 13,  34 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 93,  196 => 92,  182 => 69,  173 => 68,  158 => 62,  68 => 30,  357 => 121,  344 => 119,  341 => 131,  332 => 116,  327 => 126,  324 => 113,  318 => 114,  306 => 100,  297 => 104,  291 => 106,  263 => 77,  258 => 94,  243 => 98,  231 => 83,  224 => 81,  212 => 78,  202 => 77,  190 => 76,  187 => 75,  161 => 63,  143 => 59,  136 => 71,  122 => 42,  117 => 39,  112 => 36,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  204 => 61,  188 => 75,  174 => 58,  171 => 73,  167 => 71,  138 => 57,  125 => 42,  121 => 50,  118 => 40,  104 => 32,  87 => 25,  49 => 9,  46 => 7,  27 => 3,  91 => 34,  88 => 25,  63 => 13,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 139,  353 => 125,  345 => 147,  343 => 132,  340 => 145,  334 => 113,  331 => 140,  328 => 139,  326 => 138,  321 => 105,  309 => 120,  307 => 128,  302 => 125,  296 => 121,  293 => 113,  290 => 119,  288 => 101,  283 => 100,  281 => 110,  276 => 83,  274 => 97,  269 => 107,  265 => 106,  259 => 103,  255 => 93,  253 => 100,  235 => 94,  232 => 88,  227 => 86,  222 => 83,  210 => 77,  208 => 76,  189 => 71,  184 => 73,  175 => 58,  170 => 57,  166 => 61,  163 => 53,  155 => 47,  152 => 49,  144 => 44,  127 => 54,  109 => 52,  94 => 28,  82 => 28,  76 => 18,  61 => 15,  39 => 6,  462 => 202,  453 => 199,  449 => 157,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 134,  373 => 131,  361 => 152,  355 => 150,  351 => 120,  348 => 140,  342 => 137,  338 => 130,  335 => 120,  329 => 117,  325 => 129,  323 => 116,  320 => 127,  315 => 102,  312 => 113,  303 => 106,  300 => 109,  298 => 120,  289 => 91,  286 => 112,  278 => 98,  275 => 105,  270 => 81,  267 => 101,  262 => 105,  256 => 96,  248 => 100,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 82,  207 => 75,  203 => 73,  200 => 60,  197 => 74,  194 => 68,  191 => 59,  185 => 74,  181 => 72,  178 => 59,  176 => 86,  172 => 57,  168 => 61,  165 => 64,  156 => 62,  153 => 77,  150 => 55,  147 => 75,  141 => 73,  134 => 45,  130 => 46,  119 => 40,  116 => 45,  113 => 44,  105 => 35,  102 => 41,  99 => 23,  90 => 42,  84 => 24,  81 => 23,  73 => 18,  70 => 16,  67 => 19,  59 => 11,  38 => 6,  30 => 3,  79 => 21,  72 => 18,  69 => 17,  54 => 10,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  22 => 1,  246 => 99,  164 => 70,  162 => 59,  157 => 56,  145 => 74,  139 => 43,  131 => 44,  123 => 41,  120 => 31,  115 => 39,  111 => 47,  108 => 36,  106 => 51,  101 => 30,  98 => 37,  96 => 37,  92 => 43,  83 => 33,  80 => 20,  74 => 23,  66 => 14,  64 => 23,  60 => 15,  55 => 24,  52 => 12,  43 => 12,  35 => 5,  32 => 4,  29 => 3,  62 => 12,  53 => 10,  50 => 8,  47 => 11,  41 => 19,  36 => 5,  33 => 4,  31 => 3,  28 => 3,);
    }
}
