<?php

/* :teams:edit.html.twig */
class __TwigTemplate_bce320d0b7228fa97dd6ab670811e38396fe2980b8fb2d9a266f9d5720f8b001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":teams:edit.html.twig", 1);
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
        $__internal_2afb032b64b0589452f8ebb30b5835ad1dc49f7f0f9f782d851794ef888622d3 = $this->env->getExtension("native_profiler");
        $__internal_2afb032b64b0589452f8ebb30b5835ad1dc49f7f0f9f782d851794ef888622d3->enter($__internal_2afb032b64b0589452f8ebb30b5835ad1dc49f7f0f9f782d851794ef888622d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teams:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2afb032b64b0589452f8ebb30b5835ad1dc49f7f0f9f782d851794ef888622d3->leave($__internal_2afb032b64b0589452f8ebb30b5835ad1dc49f7f0f9f782d851794ef888622d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d784bea0f5cf3bdc75d3b7004f5e10a002be0abe4107033b50b43cead62a2f = $this->env->getExtension("native_profiler");
        $__internal_c9d784bea0f5cf3bdc75d3b7004f5e10a002be0abe4107033b50b43cead62a2f->enter($__internal_c9d784bea0f5cf3bdc75d3b7004f5e10a002be0abe4107033b50b43cead62a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Team Edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("teams_index");
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
        
        $__internal_c9d784bea0f5cf3bdc75d3b7004f5e10a002be0abe4107033b50b43cead62a2f->leave($__internal_c9d784bea0f5cf3bdc75d3b7004f5e10a002be0abe4107033b50b43cead62a2f_prof);

    }

    public function getTemplateName()
    {
        return ":teams:edit.html.twig";
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
/*     <h1>Team Edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('teams_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
