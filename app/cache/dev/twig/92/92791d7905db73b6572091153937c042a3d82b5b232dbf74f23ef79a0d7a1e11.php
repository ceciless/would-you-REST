<?php

/* :teams:matches.html.twig */
class __TwigTemplate_79aaf013c7985601ea925d227b5c8d455ceec33374219644f357c84241b985e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":teams:matches.html.twig", 1);
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
        $__internal_3e2708ac6790a1b41f06703253fbcd88766c63bc5277b9cbb6aed39454db61c1 = $this->env->getExtension("native_profiler");
        $__internal_3e2708ac6790a1b41f06703253fbcd88766c63bc5277b9cbb6aed39454db61c1->enter($__internal_3e2708ac6790a1b41f06703253fbcd88766c63bc5277b9cbb6aed39454db61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teams:matches.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2708ac6790a1b41f06703253fbcd88766c63bc5277b9cbb6aed39454db61c1->leave($__internal_3e2708ac6790a1b41f06703253fbcd88766c63bc5277b9cbb6aed39454db61c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f071a47105820797e897240f59dc6f4f7c1acd87011a0bb014c9955e7f9e627 = $this->env->getExtension("native_profiler");
        $__internal_2f071a47105820797e897240f59dc6f4f7c1acd87011a0bb014c9955e7f9e627->enter($__internal_2f071a47105820797e897240f59dc6f4f7c1acd87011a0bb014c9955e7f9e627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Team Match List</h1>

    <table class=\"dataintable\">
        <thead>
            <tr>
                <th>Id</th>
                 <th>Home team</th>
                <th>Away team</th>               
                <th>Home score</th>
                <th>Away score</th>
                <th>Snitch</th>
                <th>P</th>
                <th>Padj</th>
                <th>Swim</th>
                <th>Event name</th>
                <th>Event order</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_schedule", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "homeTeamId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "awayTeamId", array()), "html", null, true);
            echo "</td>               
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "homeScore", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "awayScore", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "snitch", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "p", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "padj", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "SWIM", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "eventId", array()), "html", null, true);
            echo "</td>             
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "eventOrder", array()), "html", null, true);
            echo "</td>               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("teams_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_2f071a47105820797e897240f59dc6f4f7c1acd87011a0bb014c9955e7f9e627->leave($__internal_2f071a47105820797e897240f59dc6f4f7c1acd87011a0bb014c9955e7f9e627_prof);

    }

    public function getTemplateName()
    {
        return ":teams:matches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Team Match List</h1>*/
/* */
/*     <table class="dataintable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                  <th>Home team</th>*/
/*                 <th>Away team</th>               */
/*                 <th>Home score</th>*/
/*                 <th>Away score</th>*/
/*                 <th>Snitch</th>*/
/*                 <th>P</th>*/
/*                 <th>Padj</th>*/
/*                 <th>Swim</th>*/
/*                 <th>Event name</th>*/
/*                 <th>Event order</th>*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for match in matches %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('events_schedule', { 'id': match.id }) }}">{{ match.id }}</a></td>*/
/*                 <td>{{ match.homeTeamId}}</td>*/
/*                 <td>{{ match.awayTeamId }}</td>               */
/*                 <td>{{ match.homeScore }}</td>*/
/*                 <td>{{ match.awayScore }}</td>*/
/*                 <td>{{ match.snitch }}</td>*/
/*                 <td>{{ match.p }}</td>*/
/*                 <td>{{ match.padj }}</td>*/
/*                 <td>{{ match.SWIM }}</td>*/
/*                 <td>{{ match.eventId }}</td>             */
/*                 <td>{{ match.eventOrder }}</td>               */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('teams_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
