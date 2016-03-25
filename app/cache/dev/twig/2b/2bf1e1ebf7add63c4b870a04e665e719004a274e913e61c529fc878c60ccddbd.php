<?php

/* base.html.twig */
class __TwigTemplate_0bb6f815186e53cd891546695374c2395d2f2b6998f0b6cdca9fc33acb89d51f extends Twig_Template
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
        $__internal_45603e8e3973f796764f004f68ce6637d8b955c909906b3767f39a42b2f01988 = $this->env->getExtension("native_profiler");
        $__internal_45603e8e3973f796764f004f68ce6637d8b955c909906b3767f39a42b2f01988->enter($__internal_45603e8e3973f796764f004f68ce6637d8b955c909906b3767f39a42b2f01988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_45603e8e3973f796764f004f68ce6637d8b955c909906b3767f39a42b2f01988->leave($__internal_45603e8e3973f796764f004f68ce6637d8b955c909906b3767f39a42b2f01988_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d27b3ba37d8cc1f38fcd294d2254068927d8d87b4083c7c96168eb0f5a817672 = $this->env->getExtension("native_profiler");
        $__internal_d27b3ba37d8cc1f38fcd294d2254068927d8d87b4083c7c96168eb0f5a817672->enter($__internal_d27b3ba37d8cc1f38fcd294d2254068927d8d87b4083c7c96168eb0f5a817672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d27b3ba37d8cc1f38fcd294d2254068927d8d87b4083c7c96168eb0f5a817672->leave($__internal_d27b3ba37d8cc1f38fcd294d2254068927d8d87b4083c7c96168eb0f5a817672_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eadf01e558dc292337f92b0cbe5c19467e9b3f059795521fc5de6bb63c57c4ca = $this->env->getExtension("native_profiler");
        $__internal_eadf01e558dc292337f92b0cbe5c19467e9b3f059795521fc5de6bb63c57c4ca->enter($__internal_eadf01e558dc292337f92b0cbe5c19467e9b3f059795521fc5de6bb63c57c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eadf01e558dc292337f92b0cbe5c19467e9b3f059795521fc5de6bb63c57c4ca->leave($__internal_eadf01e558dc292337f92b0cbe5c19467e9b3f059795521fc5de6bb63c57c4ca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de18742b977f0671aa06a7cada11a2893f9653dac524ddf7b8c475c641ec18c = $this->env->getExtension("native_profiler");
        $__internal_0de18742b977f0671aa06a7cada11a2893f9653dac524ddf7b8c475c641ec18c->enter($__internal_0de18742b977f0671aa06a7cada11a2893f9653dac524ddf7b8c475c641ec18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0de18742b977f0671aa06a7cada11a2893f9653dac524ddf7b8c475c641ec18c->leave($__internal_0de18742b977f0671aa06a7cada11a2893f9653dac524ddf7b8c475c641ec18c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d97c5657e60b198be5de356315c6f98f3e8e876c1c53d755d15f2f3fe35d6fa = $this->env->getExtension("native_profiler");
        $__internal_1d97c5657e60b198be5de356315c6f98f3e8e876c1c53d755d15f2f3fe35d6fa->enter($__internal_1d97c5657e60b198be5de356315c6f98f3e8e876c1c53d755d15f2f3fe35d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d97c5657e60b198be5de356315c6f98f3e8e876c1c53d755d15f2f3fe35d6fa->leave($__internal_1d97c5657e60b198be5de356315c6f98f3e8e876c1c53d755d15f2f3fe35d6fa_prof);

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
