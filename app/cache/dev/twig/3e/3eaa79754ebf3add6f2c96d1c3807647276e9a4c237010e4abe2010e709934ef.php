<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_74ae90abfa91ca2a34166be84d144e8b926b4306c6fdee3c15318825ba8c742e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23cd036332cff0e9c9a70f81ce7ef03195414e953108857ddcc4098fbcba3889 = $this->env->getExtension("native_profiler");
        $__internal_23cd036332cff0e9c9a70f81ce7ef03195414e953108857ddcc4098fbcba3889->enter($__internal_23cd036332cff0e9c9a70f81ce7ef03195414e953108857ddcc4098fbcba3889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_23cd036332cff0e9c9a70f81ce7ef03195414e953108857ddcc4098fbcba3889->leave($__internal_23cd036332cff0e9c9a70f81ce7ef03195414e953108857ddcc4098fbcba3889_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
