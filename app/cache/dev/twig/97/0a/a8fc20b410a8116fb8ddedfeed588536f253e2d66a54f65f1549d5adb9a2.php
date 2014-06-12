<?php

/* SyliusCoreBundle:Collector:sylius.html.twig */
class __TwigTemplate_970aa8fc20b410a8116fb8ddedfeed588536f253e2d66a54f65f1549d5adb9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://sylius.org/\">
            <img width=\"26\" height=\"28\" alt=\"Sylius\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAFS0lEQVRIx61WaUxcVRRmGEqtCyaaGBP/maYxsdX0B5RSQKBlhmFtC7QspbRoAdHQ2EhqK8u0oGUX2afDOkOHZXDCvradYbZSmFJAxEawGqppqv5qMBFm3lzPue8NDiCGgi85efe9e3K/833n3HOvg8MzPmf6JDxBe64TjtsWJnZF6GqUEfpaI52sjeM5/B/PMa2U79mdz8fxcWWRe+BQ2axQU0mE6goSZai/hP+DR6qdtgxw/t43vJDhcrpAo+n2zsD2/PxDN8SMqzyDCPtL/hCNVC2LAPDD8RY/9Im/I+NvCShAU0klSZho8RT2FM+6yTKImzxj2aMpi4Qri/wSTM1RgZoqEjJS/ZN4uu8V9E0aa9m8jMl3m6mz5IF2R6SupjBQU8kI1OXkUGv2X66N6SRAmddp8001KfeGjkgWwnU1w/i9u0vsuGmgpDEWqGB22AWifeR/u5wAu+Ujw6XEU3FlMVJV8jbOh9+sdsZ31y/TO0/q6/rijI1imkeddPMSgiQ0N6eMjRcw6WBLAniHqqtN1EH+AY08xtDAd+vP5XEBJuXMDLyL44v3OzcnYfI4q3Xx97deAmkeonQAZsbkRxvqL9NK07CVlgx52d+f6wggfMXPppefuRiAFZUgxthwnmNlFoCMQZoqBqL3xbnTdpUWt9WqS4Xyxrd0Tv9imPb6j8gqAMHgHaaVzGdO99BKSzG1rcikXJjY2uaFjUijBLlSAlhWFsoMxpH6WiXO7ekU87fdFS5NddEIVY8mXwBWcygdADEIFqCuJLHGxtRtdwbbYytXYJWIi3OsrCChFQCWoTMc2FZnsD0ZUz2U1ciTueeB1QOuApEVgwzh30zlD1oX9Em73/HfOYLqcQQZNowIujWdA59zIs0KK1qJQjZfDTjvPlS4eo3Y7gp+REfJunaxp1vMg/J1+tjUtmoubZLdgKO/P3wO9tWMHSsChWFBSePvyBPRBxiuz9c+xed8rmfFgMYi+zn3gXz+SUM93yYdRM3n2L+/hhXmi0C+FiFf79Dza1TOBnq6tyowuqv8Tduin052uEEk2ImnovX1n6TdU71Bo9PV8PYqP+NBaTudG1NQoPmnv+0I1Uqm7FkhKObrmE460fvrzC70uzwNAUZ1lUW/15y95K3IHhUq8wpPKUv2xxoamgWaCgLnDBOslSxCR1aeMcpEdbM6Z1tAInWFM1th8rN2FUjW5KsSfbyGi1kJ4SC7eECeScCYg01ZjJfi6lOv9i8Zn+4C8+Ghr1F7a6C2moTppPMnDPXilLHW3TZAQggfFFjLiuYLjhUC0sVQx9fLkqkMgrZchRsLtkQPtka0dPy2Hmy+YvZSXWN8+4qI4GYZCYI9c9xQOxg/foMuEm+UHeW6BWPHypavJxcmVG85JA7W0ASXmgZcfFtyphDEXZ5p4RhSY4HTEZyBb7NHa7bVuzOP+A+WkCB11ePYUdlXR/XSx1y3sNqB0YPyhL5OS1lFdpZSVmf7JPtQNlwYmdiDrQG2ArAFzV0hJp7tXxC/3iIi1KwA2OSzYlXCWZawUsLCNvYKFd5REuXRJMY7gWUjoFUmy2QA0IyMDwPDAO5WZCsIYFOzbi9BpE5cceRyC5k3BQaXFFTBU5ljA6KS4WUla7L71X/vMeIQusH8W6/1AytcaHPMKLsMcgRYwV3PKsKOrm8QUpW4trXqieutokBpasVrPs05866ydIyWcYVF0Nw2MgDCm5FHW7YFL5XQEwtwHb9bpRsfG2GqIhoBbGYfqEQrbGYCm9oKRnDsrbi6yrz+MQZuRyR4qOzb2j+/o13ho7vsneNvcYu7Y+75gz8AAAAASUVORK5CYII=\" />

            <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "version"), "html", null, true);
        echo "</span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            Sylius <b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "version"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://docs.sylius.org/en/latest/\" rel=\"help\">Sylius Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "SyliusCoreBundle:Collector:sylius.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  53 => 14,  50 => 13,  47 => 12,  41 => 9,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
