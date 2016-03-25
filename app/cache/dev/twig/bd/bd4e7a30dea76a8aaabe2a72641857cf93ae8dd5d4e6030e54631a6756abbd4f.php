<?php

/* :matches:new.html.twig */
class __TwigTemplate_10447dd6c13f36983b52f0adf3d98c36bd10e3244c108d1e8f4d4ecab31ec573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":matches:new.html.twig", 1);
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
        $__internal_04843c1387089cd0b5151c9cc77fab89537b340b583700f653895ea57a3f17d4 = $this->env->getExtension("native_profiler");
        $__internal_04843c1387089cd0b5151c9cc77fab89537b340b583700f653895ea57a3f17d4->enter($__internal_04843c1387089cd0b5151c9cc77fab89537b340b583700f653895ea57a3f17d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matches:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04843c1387089cd0b5151c9cc77fab89537b340b583700f653895ea57a3f17d4->leave($__internal_04843c1387089cd0b5151c9cc77fab89537b340b583700f653895ea57a3f17d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_272b2ccc3a655a982d9424a20c9ec8a64acd3740064513669d8df8bbe38e3b06 = $this->env->getExtension("native_profiler");
        $__internal_272b2ccc3a655a982d9424a20c9ec8a64acd3740064513669d8df8bbe38e3b06->enter($__internal_272b2ccc3a655a982d9424a20c9ec8a64acd3740064513669d8df8bbe38e3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_272b2ccc3a655a982d9424a20c9ec8a64acd3740064513669d8df8bbe38e3b06->leave($__internal_272b2ccc3a655a982d9424a20c9ec8a64acd3740064513669d8df8bbe38e3b06_prof);

    }

    public function getTemplateName()
    {
        return ":matches:new.html.twig";
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
