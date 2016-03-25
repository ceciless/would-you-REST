<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_583a119ee260a471f426066505460c4ff2c2fc6a878f030687926e0b1be37b1f extends Twig_Template
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
        $__internal_7b6971595d67f7394ade7a0af9533cbdaa885a070a2cc896bb367e7668074256 = $this->env->getExtension("native_profiler");
        $__internal_7b6971595d67f7394ade7a0af9533cbdaa885a070a2cc896bb367e7668074256->enter($__internal_7b6971595d67f7394ade7a0af9533cbdaa885a070a2cc896bb367e7668074256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7b6971595d67f7394ade7a0af9533cbdaa885a070a2cc896bb367e7668074256->leave($__internal_7b6971595d67f7394ade7a0af9533cbdaa885a070a2cc896bb367e7668074256_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
