<?php

/* base.html.twig */
class __TwigTemplate_f279de3f7152d7d3adbc593eea237e5e02bd124393d02706ae24d2c375d8a3d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82908b3a53056d6f053f185f09cf9ccd8e96a8eb946c4fb1afca0a83f96dd5b8 = $this->env->getExtension("native_profiler");
        $__internal_82908b3a53056d6f053f185f09cf9ccd8e96a8eb946c4fb1afca0a83f96dd5b8->enter($__internal_82908b3a53056d6f053f185f09cf9ccd8e96a8eb946c4fb1afca0a83f96dd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_82908b3a53056d6f053f185f09cf9ccd8e96a8eb946c4fb1afca0a83f96dd5b8->leave($__internal_82908b3a53056d6f053f185f09cf9ccd8e96a8eb946c4fb1afca0a83f96dd5b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_15908458ca81bd05dc91e6855eda5a8f4fbbc86a5b458a55c40c24e2cf0c2166 = $this->env->getExtension("native_profiler");
        $__internal_15908458ca81bd05dc91e6855eda5a8f4fbbc86a5b458a55c40c24e2cf0c2166->enter($__internal_15908458ca81bd05dc91e6855eda5a8f4fbbc86a5b458a55c40c24e2cf0c2166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_15908458ca81bd05dc91e6855eda5a8f4fbbc86a5b458a55c40c24e2cf0c2166->leave($__internal_15908458ca81bd05dc91e6855eda5a8f4fbbc86a5b458a55c40c24e2cf0c2166_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f2b71153fbd283b0c95dff5abc60163374e34afc9e6b0459bdb3d0162a3ef18 = $this->env->getExtension("native_profiler");
        $__internal_5f2b71153fbd283b0c95dff5abc60163374e34afc9e6b0459bdb3d0162a3ef18->enter($__internal_5f2b71153fbd283b0c95dff5abc60163374e34afc9e6b0459bdb3d0162a3ef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f2b71153fbd283b0c95dff5abc60163374e34afc9e6b0459bdb3d0162a3ef18->leave($__internal_5f2b71153fbd283b0c95dff5abc60163374e34afc9e6b0459bdb3d0162a3ef18_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4900cedad7c4028e3f570d2dc7cd2b51976a90e761a7c14833754dbf11974326 = $this->env->getExtension("native_profiler");
        $__internal_4900cedad7c4028e3f570d2dc7cd2b51976a90e761a7c14833754dbf11974326->enter($__internal_4900cedad7c4028e3f570d2dc7cd2b51976a90e761a7c14833754dbf11974326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4900cedad7c4028e3f570d2dc7cd2b51976a90e761a7c14833754dbf11974326->leave($__internal_4900cedad7c4028e3f570d2dc7cd2b51976a90e761a7c14833754dbf11974326_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f53b4866411edda2ae157eece718a16e372fe578101e27976060dc3b55f5a6fd = $this->env->getExtension("native_profiler");
        $__internal_f53b4866411edda2ae157eece718a16e372fe578101e27976060dc3b55f5a6fd->enter($__internal_f53b4866411edda2ae157eece718a16e372fe578101e27976060dc3b55f5a6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f53b4866411edda2ae157eece718a16e372fe578101e27976060dc3b55f5a6fd->leave($__internal_f53b4866411edda2ae157eece718a16e372fe578101e27976060dc3b55f5a6fd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
