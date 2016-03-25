<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e5d8c7b36a118c1ce4290f6e6b560e83cdb0a9ca104166b72067c10a8a5e8caa extends Twig_Template
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
        $__internal_c5b5847b681b747244257e4cb6aeabb33bafc28273a2028a9fc1199b798b164d = $this->env->getExtension("native_profiler");
        $__internal_c5b5847b681b747244257e4cb6aeabb33bafc28273a2028a9fc1199b798b164d->enter($__internal_c5b5847b681b747244257e4cb6aeabb33bafc28273a2028a9fc1199b798b164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5b5847b681b747244257e4cb6aeabb33bafc28273a2028a9fc1199b798b164d->leave($__internal_c5b5847b681b747244257e4cb6aeabb33bafc28273a2028a9fc1199b798b164d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
