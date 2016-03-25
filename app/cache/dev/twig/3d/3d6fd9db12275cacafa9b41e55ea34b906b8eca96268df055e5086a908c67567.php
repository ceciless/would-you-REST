<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ce22dd363730db816b4e8ccf81417e2fe4be9e6e0838c0eaebbe87d9901acce8 extends Twig_Template
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
        $__internal_9b761dc577f2f18269be1be1715962b56d8f4a71f2ddedc0fed491f33fbce89d = $this->env->getExtension("native_profiler");
        $__internal_9b761dc577f2f18269be1be1715962b56d8f4a71f2ddedc0fed491f33fbce89d->enter($__internal_9b761dc577f2f18269be1be1715962b56d8f4a71f2ddedc0fed491f33fbce89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9b761dc577f2f18269be1be1715962b56d8f4a71f2ddedc0fed491f33fbce89d->leave($__internal_9b761dc577f2f18269be1be1715962b56d8f4a71f2ddedc0fed491f33fbce89d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
