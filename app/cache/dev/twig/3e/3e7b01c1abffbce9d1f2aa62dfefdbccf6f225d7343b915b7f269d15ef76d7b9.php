<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_73c3e52fa6a6ee7ce67e2918bfb1a5bbde94ee79ed526257fa611f7cd36da23f extends Twig_Template
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
        $__internal_6185b8e57e3fa8bf9e52a7bd55de154805269cc0f33a14125f9db676f46020c0 = $this->env->getExtension("native_profiler");
        $__internal_6185b8e57e3fa8bf9e52a7bd55de154805269cc0f33a14125f9db676f46020c0->enter($__internal_6185b8e57e3fa8bf9e52a7bd55de154805269cc0f33a14125f9db676f46020c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6185b8e57e3fa8bf9e52a7bd55de154805269cc0f33a14125f9db676f46020c0->leave($__internal_6185b8e57e3fa8bf9e52a7bd55de154805269cc0f33a14125f9db676f46020c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
