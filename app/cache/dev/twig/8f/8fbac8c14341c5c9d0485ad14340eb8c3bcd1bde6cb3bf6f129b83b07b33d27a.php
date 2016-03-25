<?php

/* ::base.html.twig */
class __TwigTemplate_e698c9be340ff886d6282ceafb8d485ef85110c2cde6f8e39114043d4261a283 extends Twig_Template
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
        $__internal_15bb307bc9eb1e9a01ac1bef8b05a1e54c642d3943bb1b80c2af95f2252304d6 = $this->env->getExtension("native_profiler");
        $__internal_15bb307bc9eb1e9a01ac1bef8b05a1e54c642d3943bb1b80c2af95f2252304d6->enter($__internal_15bb307bc9eb1e9a01ac1bef8b05a1e54c642d3943bb1b80c2af95f2252304d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_15bb307bc9eb1e9a01ac1bef8b05a1e54c642d3943bb1b80c2af95f2252304d6->leave($__internal_15bb307bc9eb1e9a01ac1bef8b05a1e54c642d3943bb1b80c2af95f2252304d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eccf916f3bd9c19a3034e02db8d4db0d7f7c9de06739944a58174c656ec6dc94 = $this->env->getExtension("native_profiler");
        $__internal_eccf916f3bd9c19a3034e02db8d4db0d7f7c9de06739944a58174c656ec6dc94->enter($__internal_eccf916f3bd9c19a3034e02db8d4db0d7f7c9de06739944a58174c656ec6dc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eccf916f3bd9c19a3034e02db8d4db0d7f7c9de06739944a58174c656ec6dc94->leave($__internal_eccf916f3bd9c19a3034e02db8d4db0d7f7c9de06739944a58174c656ec6dc94_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4ef7c89cfceff4bb28ab6be41cb75a02ca75a3910b5ce7976d7898bd97e4359 = $this->env->getExtension("native_profiler");
        $__internal_c4ef7c89cfceff4bb28ab6be41cb75a02ca75a3910b5ce7976d7898bd97e4359->enter($__internal_c4ef7c89cfceff4bb28ab6be41cb75a02ca75a3910b5ce7976d7898bd97e4359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4ef7c89cfceff4bb28ab6be41cb75a02ca75a3910b5ce7976d7898bd97e4359->leave($__internal_c4ef7c89cfceff4bb28ab6be41cb75a02ca75a3910b5ce7976d7898bd97e4359_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b532e20df1cfb328da2b1c17f13bdd5596fbfa5455193732c702843bd9bf5f = $this->env->getExtension("native_profiler");
        $__internal_41b532e20df1cfb328da2b1c17f13bdd5596fbfa5455193732c702843bd9bf5f->enter($__internal_41b532e20df1cfb328da2b1c17f13bdd5596fbfa5455193732c702843bd9bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41b532e20df1cfb328da2b1c17f13bdd5596fbfa5455193732c702843bd9bf5f->leave($__internal_41b532e20df1cfb328da2b1c17f13bdd5596fbfa5455193732c702843bd9bf5f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bda694648a078cd76f2fe742fc34124061d076772792513eb734ef6380cfefff = $this->env->getExtension("native_profiler");
        $__internal_bda694648a078cd76f2fe742fc34124061d076772792513eb734ef6380cfefff->enter($__internal_bda694648a078cd76f2fe742fc34124061d076772792513eb734ef6380cfefff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bda694648a078cd76f2fe742fc34124061d076772792513eb734ef6380cfefff->leave($__internal_bda694648a078cd76f2fe742fc34124061d076772792513eb734ef6380cfefff_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
