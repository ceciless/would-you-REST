<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fd9fc98d09a72ac1263c2ac4379db6474851caeea66beb4d7f71962f87c482e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_91f2486a1f4a4dca2b986154c4e154d2fa97fe932d98fdd437bd4dfdd26a0bcf = $this->env->getExtension("native_profiler");
        $__internal_91f2486a1f4a4dca2b986154c4e154d2fa97fe932d98fdd437bd4dfdd26a0bcf->enter($__internal_91f2486a1f4a4dca2b986154c4e154d2fa97fe932d98fdd437bd4dfdd26a0bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f2486a1f4a4dca2b986154c4e154d2fa97fe932d98fdd437bd4dfdd26a0bcf->leave($__internal_91f2486a1f4a4dca2b986154c4e154d2fa97fe932d98fdd437bd4dfdd26a0bcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb39e8ddd5f40a7c0e83414765ad455e8c993ec54b29892ca86e7a423e0296c9 = $this->env->getExtension("native_profiler");
        $__internal_cb39e8ddd5f40a7c0e83414765ad455e8c993ec54b29892ca86e7a423e0296c9->enter($__internal_cb39e8ddd5f40a7c0e83414765ad455e8c993ec54b29892ca86e7a423e0296c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb39e8ddd5f40a7c0e83414765ad455e8c993ec54b29892ca86e7a423e0296c9->leave($__internal_cb39e8ddd5f40a7c0e83414765ad455e8c993ec54b29892ca86e7a423e0296c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ef5d3c5c52920b87aa0278a41ff728f0614b18c8693bc1db8f01c0f05d65f49 = $this->env->getExtension("native_profiler");
        $__internal_9ef5d3c5c52920b87aa0278a41ff728f0614b18c8693bc1db8f01c0f05d65f49->enter($__internal_9ef5d3c5c52920b87aa0278a41ff728f0614b18c8693bc1db8f01c0f05d65f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9ef5d3c5c52920b87aa0278a41ff728f0614b18c8693bc1db8f01c0f05d65f49->leave($__internal_9ef5d3c5c52920b87aa0278a41ff728f0614b18c8693bc1db8f01c0f05d65f49_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
