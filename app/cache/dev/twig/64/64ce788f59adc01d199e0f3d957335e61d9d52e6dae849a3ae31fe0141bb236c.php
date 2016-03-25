<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7e9cae22389ed262e6fcb61b5b8cf8b35a8c264965477e5fe5484defcefe85fb extends Twig_Template
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
        $__internal_8ea865d5d51ec3a11747f85b468382259c6202b3dfd4364a14b6d10928e203b7 = $this->env->getExtension("native_profiler");
        $__internal_8ea865d5d51ec3a11747f85b468382259c6202b3dfd4364a14b6d10928e203b7->enter($__internal_8ea865d5d51ec3a11747f85b468382259c6202b3dfd4364a14b6d10928e203b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8ea865d5d51ec3a11747f85b468382259c6202b3dfd4364a14b6d10928e203b7->leave($__internal_8ea865d5d51ec3a11747f85b468382259c6202b3dfd4364a14b6d10928e203b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
