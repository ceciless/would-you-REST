<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d64507b8f1e0bd5a71ffd7b27430d3555e820642372c19aa7dc26d3ab07362b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da31c17e5a2712cf56936d53021244aec0301a717a15d261f8752d720fa88721 = $this->env->getExtension("native_profiler");
        $__internal_da31c17e5a2712cf56936d53021244aec0301a717a15d261f8752d720fa88721->enter($__internal_da31c17e5a2712cf56936d53021244aec0301a717a15d261f8752d720fa88721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da31c17e5a2712cf56936d53021244aec0301a717a15d261f8752d720fa88721->leave($__internal_da31c17e5a2712cf56936d53021244aec0301a717a15d261f8752d720fa88721_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfbe43799054cf2218fc1f17dcb1e03769c958686b0239e62d9e31519a4564ae = $this->env->getExtension("native_profiler");
        $__internal_bfbe43799054cf2218fc1f17dcb1e03769c958686b0239e62d9e31519a4564ae->enter($__internal_bfbe43799054cf2218fc1f17dcb1e03769c958686b0239e62d9e31519a4564ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfbe43799054cf2218fc1f17dcb1e03769c958686b0239e62d9e31519a4564ae->leave($__internal_bfbe43799054cf2218fc1f17dcb1e03769c958686b0239e62d9e31519a4564ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9621fb2dcff859cc52c9415511a212cc13c72743aff2f1d71582a0c70a8ec139 = $this->env->getExtension("native_profiler");
        $__internal_9621fb2dcff859cc52c9415511a212cc13c72743aff2f1d71582a0c70a8ec139->enter($__internal_9621fb2dcff859cc52c9415511a212cc13c72743aff2f1d71582a0c70a8ec139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9621fb2dcff859cc52c9415511a212cc13c72743aff2f1d71582a0c70a8ec139->leave($__internal_9621fb2dcff859cc52c9415511a212cc13c72743aff2f1d71582a0c70a8ec139_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26508b4fe759dc5e55fcc0446ea02da43269a793864563b4fbcbd77f4017b53e = $this->env->getExtension("native_profiler");
        $__internal_26508b4fe759dc5e55fcc0446ea02da43269a793864563b4fbcbd77f4017b53e->enter($__internal_26508b4fe759dc5e55fcc0446ea02da43269a793864563b4fbcbd77f4017b53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26508b4fe759dc5e55fcc0446ea02da43269a793864563b4fbcbd77f4017b53e->leave($__internal_26508b4fe759dc5e55fcc0446ea02da43269a793864563b4fbcbd77f4017b53e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
