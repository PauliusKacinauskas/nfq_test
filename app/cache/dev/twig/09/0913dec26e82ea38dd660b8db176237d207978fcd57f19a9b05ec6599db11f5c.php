<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_07ea4ae1e2c9928d0d79ccb6e13572161109acebabb3b1d3897123ee58bdf501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b73d1e3efb4ffd1c9ba1d7eb62e353e498e45a53804624ea11032ac2cc76cd91 = $this->env->getExtension("native_profiler");
        $__internal_b73d1e3efb4ffd1c9ba1d7eb62e353e498e45a53804624ea11032ac2cc76cd91->enter($__internal_b73d1e3efb4ffd1c9ba1d7eb62e353e498e45a53804624ea11032ac2cc76cd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b73d1e3efb4ffd1c9ba1d7eb62e353e498e45a53804624ea11032ac2cc76cd91->leave($__internal_b73d1e3efb4ffd1c9ba1d7eb62e353e498e45a53804624ea11032ac2cc76cd91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c0ee23ffe078b51c951be62791d01bb22a3208df0988f1cb845ab32596fc570 = $this->env->getExtension("native_profiler");
        $__internal_0c0ee23ffe078b51c951be62791d01bb22a3208df0988f1cb845ab32596fc570->enter($__internal_0c0ee23ffe078b51c951be62791d01bb22a3208df0988f1cb845ab32596fc570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0c0ee23ffe078b51c951be62791d01bb22a3208df0988f1cb845ab32596fc570->leave($__internal_0c0ee23ffe078b51c951be62791d01bb22a3208df0988f1cb845ab32596fc570_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35927d15305c06b11a32bf5329e4a369afbdf9ac2e22ac1d28d5bf3e8297954b = $this->env->getExtension("native_profiler");
        $__internal_35927d15305c06b11a32bf5329e4a369afbdf9ac2e22ac1d28d5bf3e8297954b->enter($__internal_35927d15305c06b11a32bf5329e4a369afbdf9ac2e22ac1d28d5bf3e8297954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_35927d15305c06b11a32bf5329e4a369afbdf9ac2e22ac1d28d5bf3e8297954b->leave($__internal_35927d15305c06b11a32bf5329e4a369afbdf9ac2e22ac1d28d5bf3e8297954b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc16ec406c5dbc2cdefe54ee452eeb57cf1cec8464ad5f9b6e6fe2dcd2ecd8af = $this->env->getExtension("native_profiler");
        $__internal_cc16ec406c5dbc2cdefe54ee452eeb57cf1cec8464ad5f9b6e6fe2dcd2ecd8af->enter($__internal_cc16ec406c5dbc2cdefe54ee452eeb57cf1cec8464ad5f9b6e6fe2dcd2ecd8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cc16ec406c5dbc2cdefe54ee452eeb57cf1cec8464ad5f9b6e6fe2dcd2ecd8af->leave($__internal_cc16ec406c5dbc2cdefe54ee452eeb57cf1cec8464ad5f9b6e6fe2dcd2ecd8af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
