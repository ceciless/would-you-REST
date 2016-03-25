<?php

/* matches/new.html.twig */
class __TwigTemplate_885dd2461ee0f6ef26705b509c669359c93cd1b63f329dfbb16d6c0e25509ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "matches/new.html.twig", 1);
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
        $__internal_3bb5a454d5f7afadb8d85800d5eed6acfcc2248dbc2817c3d0af1faa4470aa9e = $this->env->getExtension("native_profiler");
        $__internal_3bb5a454d5f7afadb8d85800d5eed6acfcc2248dbc2817c3d0af1faa4470aa9e->enter($__internal_3bb5a454d5f7afadb8d85800d5eed6acfcc2248dbc2817c3d0af1faa4470aa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matches/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb5a454d5f7afadb8d85800d5eed6acfcc2248dbc2817c3d0af1faa4470aa9e->leave($__internal_3bb5a454d5f7afadb8d85800d5eed6acfcc2248dbc2817c3d0af1faa4470aa9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f86a2e51e74d9fd223e91dc1706736cf1a8a0802eb9f16a3d283050a066f7de = $this->env->getExtension("native_profiler");
        $__internal_7f86a2e51e74d9fd223e91dc1706736cf1a8a0802eb9f16a3d283050a066f7de->enter($__internal_7f86a2e51e74d9fd223e91dc1706736cf1a8a0802eb9f16a3d283050a066f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Match Create</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("matchs_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7f86a2e51e74d9fd223e91dc1706736cf1a8a0802eb9f16a3d283050a066f7de->leave($__internal_7f86a2e51e74d9fd223e91dc1706736cf1a8a0802eb9f16a3d283050a066f7de_prof);

    }

    public function getTemplateName()
    {
        return "matches/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Match Create</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matchs_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
