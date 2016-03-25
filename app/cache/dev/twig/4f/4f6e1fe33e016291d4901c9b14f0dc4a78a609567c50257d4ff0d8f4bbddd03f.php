<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_026bdad4fface3a997006c965cef056f251cceb88b7b9a5ba9ee648d8f69012f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b2ae2bada53e2961173dbf25d9f215fc3f8de02fbbd9ea3a18580cd78e3b77 = $this->env->getExtension("native_profiler");
        $__internal_b4b2ae2bada53e2961173dbf25d9f215fc3f8de02fbbd9ea3a18580cd78e3b77->enter($__internal_b4b2ae2bada53e2961173dbf25d9f215fc3f8de02fbbd9ea3a18580cd78e3b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b2ae2bada53e2961173dbf25d9f215fc3f8de02fbbd9ea3a18580cd78e3b77->leave($__internal_b4b2ae2bada53e2961173dbf25d9f215fc3f8de02fbbd9ea3a18580cd78e3b77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dadc00d2ee283a47f88192f5896ceb9054e604f02386a013fd8e375ab31b7e73 = $this->env->getExtension("native_profiler");
        $__internal_dadc00d2ee283a47f88192f5896ceb9054e604f02386a013fd8e375ab31b7e73->enter($__internal_dadc00d2ee283a47f88192f5896ceb9054e604f02386a013fd8e375ab31b7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dadc00d2ee283a47f88192f5896ceb9054e604f02386a013fd8e375ab31b7e73->leave($__internal_dadc00d2ee283a47f88192f5896ceb9054e604f02386a013fd8e375ab31b7e73_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_629fb91235e535946ec10a8a965d0cf666357bd4a39a6a9b700a099f208764f5 = $this->env->getExtension("native_profiler");
        $__internal_629fb91235e535946ec10a8a965d0cf666357bd4a39a6a9b700a099f208764f5->enter($__internal_629fb91235e535946ec10a8a965d0cf666357bd4a39a6a9b700a099f208764f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_629fb91235e535946ec10a8a965d0cf666357bd4a39a6a9b700a099f208764f5->leave($__internal_629fb91235e535946ec10a8a965d0cf666357bd4a39a6a9b700a099f208764f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d086f71d0899d69367fd5d8fd11d05b2c708583137299b23a8d652ada9add77c = $this->env->getExtension("native_profiler");
        $__internal_d086f71d0899d69367fd5d8fd11d05b2c708583137299b23a8d652ada9add77c->enter($__internal_d086f71d0899d69367fd5d8fd11d05b2c708583137299b23a8d652ada9add77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d086f71d0899d69367fd5d8fd11d05b2c708583137299b23a8d652ada9add77c->leave($__internal_d086f71d0899d69367fd5d8fd11d05b2c708583137299b23a8d652ada9add77c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
