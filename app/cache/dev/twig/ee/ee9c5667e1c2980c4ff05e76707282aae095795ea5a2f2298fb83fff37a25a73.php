<?php

/* events/index.html.twig */
class __TwigTemplate_09be02d5f53d06b9df3d1aded1a7f6ec9dfe2ae569675a3e0117bf1b2400ccfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "events/index.html.twig", 1);
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
        $__internal_2a33fc2c3d751b217ca790b73e3a647feec384e92b061a04b0e0b00d9cff3125 = $this->env->getExtension("native_profiler");
        $__internal_2a33fc2c3d751b217ca790b73e3a647feec384e92b061a04b0e0b00d9cff3125->enter($__internal_2a33fc2c3d751b217ca790b73e3a647feec384e92b061a04b0e0b00d9cff3125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a33fc2c3d751b217ca790b73e3a647feec384e92b061a04b0e0b00d9cff3125->leave($__internal_2a33fc2c3d751b217ca790b73e3a647feec384e92b061a04b0e0b00d9cff3125_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ded3ccc4d95a5bc035ff7660b9259b25e750f9d733bd245abe3f93bae06c5ec = $this->env->getExtension("native_profiler");
        $__internal_8ded3ccc4d95a5bc035ff7660b9259b25e750f9d733bd245abe3f93bae06c5ec->enter($__internal_8ded3ccc4d95a5bc035ff7660b9259b25e750f9d733bd245abe3f93bae06c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event List</h1>

    <table class=\"dataintable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Event start date</th>
                <th>Event end date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["event"], "eventStartDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventStartDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["event"], "eventEndDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventEndDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                         <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_schedule", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">schedule</a>
                        </li>
                        
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("events_new");
        echo "\">Create a new team</a>
        </li>
    </ul>
";
        
        $__internal_8ded3ccc4d95a5bc035ff7660b9259b25e750f9d733bd245abe3f93bae06c5ec->leave($__internal_8ded3ccc4d95a5bc035ff7660b9259b25e750f9d733bd245abe3f93bae06c5ec_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  112 => 39,  99 => 32,  93 => 29,  87 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event List</h1>*/
/* */
/*     <table class="dataintable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Event start date</th>*/
/*                 <th>Event end date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for event in events %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('events_show', { 'id': event.id }) }}">{{ event.id }}</a></td>*/
/*                 <td>{{ event.name }}</td>*/
/*                 <td>{% if event.eventStartDate %}{{ event.eventStartDate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if event.eventEndDate %}{{ event.eventEndDate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('events_show', { 'id': event.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('events_edit', { 'id': event.id }) }}">edit</a>*/
/*                         </li>*/
/*                          <li>*/
/*                             <a href="{{ path('events_schedule', { 'id': event.id }) }}">schedule</a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('events_new') }}">Create a new team</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
