<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_56ce407ceaba416bfddf468db1fe0007479905b9b4ea3ec1ae4b37cf4031a239 extends Twig_Template
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
        $__internal_1863e0037560d8d41e6cb04b01e43d67b1b40be8d2fb07acf1767eeff058f5b6 = $this->env->getExtension("native_profiler");
        $__internal_1863e0037560d8d41e6cb04b01e43d67b1b40be8d2fb07acf1767eeff058f5b6->enter($__internal_1863e0037560d8d41e6cb04b01e43d67b1b40be8d2fb07acf1767eeff058f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1863e0037560d8d41e6cb04b01e43d67b1b40be8d2fb07acf1767eeff058f5b6->leave($__internal_1863e0037560d8d41e6cb04b01e43d67b1b40be8d2fb07acf1767eeff058f5b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
