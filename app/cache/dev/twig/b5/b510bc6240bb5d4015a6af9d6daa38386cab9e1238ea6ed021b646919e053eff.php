<?php

/* :events:edit.html.twig */
class __TwigTemplate_6a8e99d15d445a758c7296d9844676cd88302f7b831e7b860fc78533ccf3a487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":events:edit.html.twig", 1);
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
        $__internal_058c1d05ae4103106c537d68041ddd7ae1ed829a10bff809a7adaf6d00a28750 = $this->env->getExtension("native_profiler");
        $__internal_058c1d05ae4103106c537d68041ddd7ae1ed829a10bff809a7adaf6d00a28750->enter($__internal_058c1d05ae4103106c537d68041ddd7ae1ed829a10bff809a7adaf6d00a28750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058c1d05ae4103106c537d68041ddd7ae1ed829a10bff809a7adaf6d00a28750->leave($__internal_058c1d05ae4103106c537d68041ddd7ae1ed829a10bff809a7adaf6d00a28750_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf1a7676f9719e5cc32fd3c00f5bfcbef51d104154b5b3b2b21557d9ccccc2a = $this->env->getExtension("native_profiler");
        $__internal_4cf1a7676f9719e5cc32fd3c00f5bfcbef51d104154b5b3b2b21557d9ccccc2a->enter($__internal_4cf1a7676f9719e5cc32fd3c00f5bfcbef51d104154b5b3b2b21557d9ccccc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event Edit </h1>

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
        echo $this->env->getExtension('routing')->getPath("events_index");
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
        
        $__internal_4cf1a7676f9719e5cc32fd3c00f5bfcbef51d104154b5b3b2b21557d9ccccc2a->leave($__internal_4cf1a7676f9719e5cc32fd3c00f5bfcbef51d104154b5b3b2b21557d9ccccc2a_prof);

    }

    public function getTemplateName()
    {
        return ":events:edit.html.twig";
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
/*     <h1>Event Edit </h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('events_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
