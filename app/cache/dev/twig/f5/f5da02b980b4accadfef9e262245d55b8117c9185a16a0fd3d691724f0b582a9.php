<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3f671fe104eec7f50bbca830d29aae393799c1c7701ce7f7421e29e1bf1bd3a5 extends Twig_Template
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
        $__internal_7d61e1f5592e4fe9fb764f1b91340e373eb50ec11d847c0bd47190840a687af4 = $this->env->getExtension("native_profiler");
        $__internal_7d61e1f5592e4fe9fb764f1b91340e373eb50ec11d847c0bd47190840a687af4->enter($__internal_7d61e1f5592e4fe9fb764f1b91340e373eb50ec11d847c0bd47190840a687af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7d61e1f5592e4fe9fb764f1b91340e373eb50ec11d847c0bd47190840a687af4->leave($__internal_7d61e1f5592e4fe9fb764f1b91340e373eb50ec11d847c0bd47190840a687af4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
