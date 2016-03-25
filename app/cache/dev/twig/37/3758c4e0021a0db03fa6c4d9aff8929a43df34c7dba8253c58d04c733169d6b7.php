<?php

/* :events:show.html.twig */
class __TwigTemplate_6a53fbabf8d268b0e52c36ce1ec47d90e15bd3e10dc141a9cbc7a2b37c66a60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":events:show.html.twig", 1);
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
        $__internal_ca08f5b070b8acbf199c7c817bb1cf1281d2c6365b404b949b98e2baad2557cf = $this->env->getExtension("native_profiler");
        $__internal_ca08f5b070b8acbf199c7c817bb1cf1281d2c6365b404b949b98e2baad2557cf->enter($__internal_ca08f5b070b8acbf199c7c817bb1cf1281d2c6365b404b949b98e2baad2557cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca08f5b070b8acbf199c7c817bb1cf1281d2c6365b404b949b98e2baad2557cf->leave($__internal_ca08f5b070b8acbf199c7c817bb1cf1281d2c6365b404b949b98e2baad2557cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46315eebc638713d5e6bce655dce07b2076d1284e83bd6b30c4a1ae24b74f7ae = $this->env->getExtension("native_profiler");
        $__internal_46315eebc638713d5e6bce655dce07b2076d1284e83bd6b30c4a1ae24b74f7ae->enter($__internal_46315eebc638713d5e6bce655dce07b2076d1284e83bd6b30c4a1ae24b74f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h1>

     <table class=\"dataintable\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Event start date</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventStartDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventStartDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Event end date</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventEndDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventEndDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("events_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_46315eebc638713d5e6bce655dce07b2076d1284e83bd6b30c4a1ae24b74f7ae->leave($__internal_46315eebc638713d5e6bce655dce07b2076d1284e83bd6b30c4a1ae24b74f7ae_prof);

    }

    public function getTemplateName()
    {
        return ":events:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  97 => 35,  91 => 32,  85 => 29,  73 => 22,  64 => 18,  57 => 14,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ event.name }}</h1>*/
/* */
/*      <table class="dataintable">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ event.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ event.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Event start date</th>*/
/*                 <td>{% if event.eventStartDate %}{{ event.eventStartDate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Event end date</th>*/
/*                 <td>{% if event.eventEndDate %}{{ event.eventEndDate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('events_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('events_edit', { 'id': event.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
