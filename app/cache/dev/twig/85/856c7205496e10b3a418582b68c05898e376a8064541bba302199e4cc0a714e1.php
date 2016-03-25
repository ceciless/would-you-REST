<?php

/* :matches:edit.html.twig */
class __TwigTemplate_0febf4f3bd0da9f9341b97183849356314d8c67ef104c05957bffc570ea47140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":matches:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3246dabb221ea325e0c4a00b6becc87c5df112e49373ccd271045bfa566cd934 = $this->env->getExtension("native_profiler");
        $__internal_3246dabb221ea325e0c4a00b6becc87c5df112e49373ccd271045bfa566cd934->enter($__internal_3246dabb221ea325e0c4a00b6becc87c5df112e49373ccd271045bfa566cd934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matches:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3246dabb221ea325e0c4a00b6becc87c5df112e49373ccd271045bfa566cd934->leave($__internal_3246dabb221ea325e0c4a00b6becc87c5df112e49373ccd271045bfa566cd934_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_086da3785ba5133a6b31bd1e0e487f220c435cb63b427a003f73fab34a613445 = $this->env->getExtension("native_profiler");
        $__internal_086da3785ba5133a6b31bd1e0e487f220c435cb63b427a003f73fab34a613445->enter($__internal_086da3785ba5133a6b31bd1e0e487f220c435cb63b427a003f73fab34a613445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Match Edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("matchs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_086da3785ba5133a6b31bd1e0e487f220c435cb63b427a003f73fab34a613445->leave($__internal_086da3785ba5133a6b31bd1e0e487f220c435cb63b427a003f73fab34a613445_prof);

    }

    public function getTemplateName()
    {
        return ":matches:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Match Edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matchs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
