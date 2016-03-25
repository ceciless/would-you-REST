<?php

/* :events:new.html.twig */
class __TwigTemplate_576fdc372dad2f52f7294c80a875459ea3555bae908b64aa6342fd3a3df99661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":events:new.html.twig", 1);
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
        $__internal_38f36353a55470c23359124175014516275e52f95ea5d1c2ffa018918a653cba = $this->env->getExtension("native_profiler");
        $__internal_38f36353a55470c23359124175014516275e52f95ea5d1c2ffa018918a653cba->enter($__internal_38f36353a55470c23359124175014516275e52f95ea5d1c2ffa018918a653cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f36353a55470c23359124175014516275e52f95ea5d1c2ffa018918a653cba->leave($__internal_38f36353a55470c23359124175014516275e52f95ea5d1c2ffa018918a653cba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a432603d83f18857867616bfcca4163733098dc23ed86207c01f473d17272472 = $this->env->getExtension("native_profiler");
        $__internal_a432603d83f18857867616bfcca4163733098dc23ed86207c01f473d17272472->enter($__internal_a432603d83f18857867616bfcca4163733098dc23ed86207c01f473d17272472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event Create</h1>

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
        echo $this->env->getExtension('routing')->getPath("events_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a432603d83f18857867616bfcca4163733098dc23ed86207c01f473d17272472->leave($__internal_a432603d83f18857867616bfcca4163733098dc23ed86207c01f473d17272472_prof);

    }

    public function getTemplateName()
    {
        return ":events:new.html.twig";
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
/*     <h1>Event Create</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('events_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
