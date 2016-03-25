<?php

/* ApiBundle:Default:index.html.twig */
class __TwigTemplate_70b4a878f55109fbc129f385755d8eb96f988dd2e4466f7563c70295dc238f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "ApiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_616f0e2ee261fc73ea4f121ab92259714cb965747a7d04dabb18dfbd91d9e5bc = $this->env->getExtension("native_profiler");
        $__internal_616f0e2ee261fc73ea4f121ab92259714cb965747a7d04dabb18dfbd91d9e5bc->enter($__internal_616f0e2ee261fc73ea4f121ab92259714cb965747a7d04dabb18dfbd91d9e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616f0e2ee261fc73ea4f121ab92259714cb965747a7d04dabb18dfbd91d9e5bc->leave($__internal_616f0e2ee261fc73ea4f121ab92259714cb965747a7d04dabb18dfbd91d9e5bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7325afa0807953a1958ab64d3b65a5c316fe0431eaeacdcf3214dec843e4c9 = $this->env->getExtension("native_profiler");
        $__internal_4b7325afa0807953a1958ab64d3b65a5c316fe0431eaeacdcf3214dec843e4c9->enter($__internal_4b7325afa0807953a1958ab64d3b65a5c316fe0431eaeacdcf3214dec843e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenue!</h1>
    <p>Bonjour, c'est un administration system pour le football competition.</p>
";
        
        $__internal_4b7325afa0807953a1958ab64d3b65a5c316fe0431eaeacdcf3214dec843e4c9->leave($__internal_4b7325afa0807953a1958ab64d3b65a5c316fe0431eaeacdcf3214dec843e4c9_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Bienvenue!</h1>*/
/*     <p>Bonjour, c'est un administration system pour le football competition.</p>*/
/* {% endblock %}*/
