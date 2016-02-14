<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f10a175d9461f96fb4b65ee7367c62f9e305ca8e185260cede281011af243354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6c35820acbb33b977a88a1c191ff80f162544fd3b6c73863e734c028f4a6cfb5 = $this->env->getExtension("native_profiler");
        $__internal_6c35820acbb33b977a88a1c191ff80f162544fd3b6c73863e734c028f4a6cfb5->enter($__internal_6c35820acbb33b977a88a1c191ff80f162544fd3b6c73863e734c028f4a6cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c35820acbb33b977a88a1c191ff80f162544fd3b6c73863e734c028f4a6cfb5->leave($__internal_6c35820acbb33b977a88a1c191ff80f162544fd3b6c73863e734c028f4a6cfb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a02c833a4db740bed87e12be13224c2b633650d14343f8275d637b9c7c95ae86 = $this->env->getExtension("native_profiler");
        $__internal_a02c833a4db740bed87e12be13224c2b633650d14343f8275d637b9c7c95ae86->enter($__internal_a02c833a4db740bed87e12be13224c2b633650d14343f8275d637b9c7c95ae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a02c833a4db740bed87e12be13224c2b633650d14343f8275d637b9c7c95ae86->leave($__internal_a02c833a4db740bed87e12be13224c2b633650d14343f8275d637b9c7c95ae86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_984c0f29532031a3f96709703b097112f7e743a38d5d1e1498cec4aaf7ee86f7 = $this->env->getExtension("native_profiler");
        $__internal_984c0f29532031a3f96709703b097112f7e743a38d5d1e1498cec4aaf7ee86f7->enter($__internal_984c0f29532031a3f96709703b097112f7e743a38d5d1e1498cec4aaf7ee86f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_984c0f29532031a3f96709703b097112f7e743a38d5d1e1498cec4aaf7ee86f7->leave($__internal_984c0f29532031a3f96709703b097112f7e743a38d5d1e1498cec4aaf7ee86f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21eeb5fa34756f1ce817309419ab3545c62953788d1946a8ecf8b8ba5b534b95 = $this->env->getExtension("native_profiler");
        $__internal_21eeb5fa34756f1ce817309419ab3545c62953788d1946a8ecf8b8ba5b534b95->enter($__internal_21eeb5fa34756f1ce817309419ab3545c62953788d1946a8ecf8b8ba5b534b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_21eeb5fa34756f1ce817309419ab3545c62953788d1946a8ecf8b8ba5b534b95->leave($__internal_21eeb5fa34756f1ce817309419ab3545c62953788d1946a8ecf8b8ba5b534b95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
