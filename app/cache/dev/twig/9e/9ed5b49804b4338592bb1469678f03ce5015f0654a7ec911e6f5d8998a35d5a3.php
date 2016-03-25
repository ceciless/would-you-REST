<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1656aa9415ce2d808bb6e19103d5789a8de901f01de12679a4794ea0b8957973 extends Twig_Template
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
        $__internal_ec935a378ec611066ab22553ce05ff4bc620631cff3db4b75f8c830eae0b72d5 = $this->env->getExtension("native_profiler");
        $__internal_ec935a378ec611066ab22553ce05ff4bc620631cff3db4b75f8c830eae0b72d5->enter($__internal_ec935a378ec611066ab22553ce05ff4bc620631cff3db4b75f8c830eae0b72d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec935a378ec611066ab22553ce05ff4bc620631cff3db4b75f8c830eae0b72d5->leave($__internal_ec935a378ec611066ab22553ce05ff4bc620631cff3db4b75f8c830eae0b72d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1048a135624d32188fbbff55704bf8e306d7429ca802d7960aaa914f3c9d8e2 = $this->env->getExtension("native_profiler");
        $__internal_a1048a135624d32188fbbff55704bf8e306d7429ca802d7960aaa914f3c9d8e2->enter($__internal_a1048a135624d32188fbbff55704bf8e306d7429ca802d7960aaa914f3c9d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1048a135624d32188fbbff55704bf8e306d7429ca802d7960aaa914f3c9d8e2->leave($__internal_a1048a135624d32188fbbff55704bf8e306d7429ca802d7960aaa914f3c9d8e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6a4209a48e19e98f0ad787d5941131d7e5d5bf50a643a624038b049bea609f4 = $this->env->getExtension("native_profiler");
        $__internal_b6a4209a48e19e98f0ad787d5941131d7e5d5bf50a643a624038b049bea609f4->enter($__internal_b6a4209a48e19e98f0ad787d5941131d7e5d5bf50a643a624038b049bea609f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6a4209a48e19e98f0ad787d5941131d7e5d5bf50a643a624038b049bea609f4->leave($__internal_b6a4209a48e19e98f0ad787d5941131d7e5d5bf50a643a624038b049bea609f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acf5ce9c29714c3a75100262be9a7208f6d92031690372c4586544046af39ff6 = $this->env->getExtension("native_profiler");
        $__internal_acf5ce9c29714c3a75100262be9a7208f6d92031690372c4586544046af39ff6->enter($__internal_acf5ce9c29714c3a75100262be9a7208f6d92031690372c4586544046af39ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_acf5ce9c29714c3a75100262be9a7208f6d92031690372c4586544046af39ff6->leave($__internal_acf5ce9c29714c3a75100262be9a7208f6d92031690372c4586544046af39ff6_prof);

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
