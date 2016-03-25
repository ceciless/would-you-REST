<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9641ead23cf4848dc95c18757056978454fa227006f8fc670346bb2ecaa0ff6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d239f5249ab95662376d3c1f1d257adc5a666871130cb0c2cfd4e202f21dbd = $this->env->getExtension("native_profiler");
        $__internal_50d239f5249ab95662376d3c1f1d257adc5a666871130cb0c2cfd4e202f21dbd->enter($__internal_50d239f5249ab95662376d3c1f1d257adc5a666871130cb0c2cfd4e202f21dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50d239f5249ab95662376d3c1f1d257adc5a666871130cb0c2cfd4e202f21dbd->leave($__internal_50d239f5249ab95662376d3c1f1d257adc5a666871130cb0c2cfd4e202f21dbd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ae3876726d2f03cad1eed888f53acb073ca5c394be761de1bbb216ddf64309c = $this->env->getExtension("native_profiler");
        $__internal_0ae3876726d2f03cad1eed888f53acb073ca5c394be761de1bbb216ddf64309c->enter($__internal_0ae3876726d2f03cad1eed888f53acb073ca5c394be761de1bbb216ddf64309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ae3876726d2f03cad1eed888f53acb073ca5c394be761de1bbb216ddf64309c->leave($__internal_0ae3876726d2f03cad1eed888f53acb073ca5c394be761de1bbb216ddf64309c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
