<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_49f620481e171a716e27a2967924e8681d4f8922b3bf39ed142004e9f6960782 extends Twig_Template
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
        $__internal_084ef9b3783a8f78541f58e6d498a4fc85057190df27e33cc50677a3093641e5 = $this->env->getExtension("native_profiler");
        $__internal_084ef9b3783a8f78541f58e6d498a4fc85057190df27e33cc50677a3093641e5->enter($__internal_084ef9b3783a8f78541f58e6d498a4fc85057190df27e33cc50677a3093641e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_084ef9b3783a8f78541f58e6d498a4fc85057190df27e33cc50677a3093641e5->leave($__internal_084ef9b3783a8f78541f58e6d498a4fc85057190df27e33cc50677a3093641e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
