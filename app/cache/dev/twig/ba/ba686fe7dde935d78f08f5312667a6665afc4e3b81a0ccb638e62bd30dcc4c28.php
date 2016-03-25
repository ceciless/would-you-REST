<?php

/* :teams:new.html.twig */
class __TwigTemplate_ee239d63cd1825c5bca98fea0d72853cda9dffa208da6fe0aab97300e23640fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":teams:new.html.twig", 1);
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
        $__internal_0334aefc82a19f3ef8c023c577e8b6e3fade8e95eff64a86e265e579d08c392f = $this->env->getExtension("native_profiler");
        $__internal_0334aefc82a19f3ef8c023c577e8b6e3fade8e95eff64a86e265e579d08c392f->enter($__internal_0334aefc82a19f3ef8c023c577e8b6e3fade8e95eff64a86e265e579d08c392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teams:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0334aefc82a19f3ef8c023c577e8b6e3fade8e95eff64a86e265e579d08c392f->leave($__internal_0334aefc82a19f3ef8c023c577e8b6e3fade8e95eff64a86e265e579d08c392f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_310da9f9be84de7a09684c60e451b8e2fefe535345f17080264c0b1a5641f250 = $this->env->getExtension("native_profiler");
        $__internal_310da9f9be84de7a09684c60e451b8e2fefe535345f17080264c0b1a5641f250->enter($__internal_310da9f9be84de7a09684c60e451b8e2fefe535345f17080264c0b1a5641f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Team Create</h1>

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
        echo $this->env->getExtension('routing')->getPath("teams_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_310da9f9be84de7a09684c60e451b8e2fefe535345f17080264c0b1a5641f250->leave($__internal_310da9f9be84de7a09684c60e451b8e2fefe535345f17080264c0b1a5641f250_prof);

    }

    public function getTemplateName()
    {
        return ":teams:new.html.twig";
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
/*     <h1>Team Create</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('teams_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
