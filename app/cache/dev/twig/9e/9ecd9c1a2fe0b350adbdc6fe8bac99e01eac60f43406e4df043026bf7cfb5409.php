<?php

/* matches/edit.html.twig */
class __TwigTemplate_e38a676828a27b09cada48f16d602839df57f6b03373d2c1c8b0fa8ffade04cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "matches/edit.html.twig", 1);
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
        $__internal_85667135bc52e7e48d3670534cfce4e22299990583ded29a5403818873225331 = $this->env->getExtension("native_profiler");
        $__internal_85667135bc52e7e48d3670534cfce4e22299990583ded29a5403818873225331->enter($__internal_85667135bc52e7e48d3670534cfce4e22299990583ded29a5403818873225331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matches/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85667135bc52e7e48d3670534cfce4e22299990583ded29a5403818873225331->leave($__internal_85667135bc52e7e48d3670534cfce4e22299990583ded29a5403818873225331_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a5c7e6e418f6fa20a150c9d20f5538293f4c64be2962a693f862ed09e41d99 = $this->env->getExtension("native_profiler");
        $__internal_76a5c7e6e418f6fa20a150c9d20f5538293f4c64be2962a693f862ed09e41d99->enter($__internal_76a5c7e6e418f6fa20a150c9d20f5538293f4c64be2962a693f862ed09e41d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76a5c7e6e418f6fa20a150c9d20f5538293f4c64be2962a693f862ed09e41d99->leave($__internal_76a5c7e6e418f6fa20a150c9d20f5538293f4c64be2962a693f862ed09e41d99_prof);

    }

    public function getTemplateName()
    {
        return "matches/edit.html.twig";
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
