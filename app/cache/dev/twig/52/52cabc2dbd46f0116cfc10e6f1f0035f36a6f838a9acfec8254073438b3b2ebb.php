<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8e2f76fb2f1e75b2c1040236759412b50e0895157c1e799cfbb0c6ac270bb338 extends Twig_Template
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
        $__internal_71789f1ad655b69e51b22f3851a4f60bce07aad375b76d226e15fdeaa092d8ca = $this->env->getExtension("native_profiler");
        $__internal_71789f1ad655b69e51b22f3851a4f60bce07aad375b76d226e15fdeaa092d8ca->enter($__internal_71789f1ad655b69e51b22f3851a4f60bce07aad375b76d226e15fdeaa092d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_71789f1ad655b69e51b22f3851a4f60bce07aad375b76d226e15fdeaa092d8ca->leave($__internal_71789f1ad655b69e51b22f3851a4f60bce07aad375b76d226e15fdeaa092d8ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
