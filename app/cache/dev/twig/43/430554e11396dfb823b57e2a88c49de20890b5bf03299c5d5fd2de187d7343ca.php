<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23ba4dbdfce169168efc1b0b8d9c7487e7a90de7f6a0bd8aeeef0e827c067a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_291a362f2c6815c34b776ed126685a688d1a18c49a27bd5d29ba2d858766d5dd = $this->env->getExtension("native_profiler");
        $__internal_291a362f2c6815c34b776ed126685a688d1a18c49a27bd5d29ba2d858766d5dd->enter($__internal_291a362f2c6815c34b776ed126685a688d1a18c49a27bd5d29ba2d858766d5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291a362f2c6815c34b776ed126685a688d1a18c49a27bd5d29ba2d858766d5dd->leave($__internal_291a362f2c6815c34b776ed126685a688d1a18c49a27bd5d29ba2d858766d5dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96d03add76f889a657a3cdb872dc6ea7f2d9b374ec2d9e6bdf3b786113950a93 = $this->env->getExtension("native_profiler");
        $__internal_96d03add76f889a657a3cdb872dc6ea7f2d9b374ec2d9e6bdf3b786113950a93->enter($__internal_96d03add76f889a657a3cdb872dc6ea7f2d9b374ec2d9e6bdf3b786113950a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_96d03add76f889a657a3cdb872dc6ea7f2d9b374ec2d9e6bdf3b786113950a93->leave($__internal_96d03add76f889a657a3cdb872dc6ea7f2d9b374ec2d9e6bdf3b786113950a93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2366f36e7c450d42991b699447c6b4255f84919a9b933a276c17dcee469f58d1 = $this->env->getExtension("native_profiler");
        $__internal_2366f36e7c450d42991b699447c6b4255f84919a9b933a276c17dcee469f58d1->enter($__internal_2366f36e7c450d42991b699447c6b4255f84919a9b933a276c17dcee469f58d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2366f36e7c450d42991b699447c6b4255f84919a9b933a276c17dcee469f58d1->leave($__internal_2366f36e7c450d42991b699447c6b4255f84919a9b933a276c17dcee469f58d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95fb05b97e6101cb58059f330162c04e2230ffbcf2a7195dcaed2824c1a6cf62 = $this->env->getExtension("native_profiler");
        $__internal_95fb05b97e6101cb58059f330162c04e2230ffbcf2a7195dcaed2824c1a6cf62->enter($__internal_95fb05b97e6101cb58059f330162c04e2230ffbcf2a7195dcaed2824c1a6cf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_95fb05b97e6101cb58059f330162c04e2230ffbcf2a7195dcaed2824c1a6cf62->leave($__internal_95fb05b97e6101cb58059f330162c04e2230ffbcf2a7195dcaed2824c1a6cf62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
