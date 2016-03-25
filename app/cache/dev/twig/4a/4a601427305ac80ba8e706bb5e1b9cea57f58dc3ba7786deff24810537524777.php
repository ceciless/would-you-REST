<?php

/* events/schedule.html.twig */
class __TwigTemplate_4c7d32a22c84776e3d8adae9eb82314404d8df9e68091022c17d19b29ffd8420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "events/schedule.html.twig", 1);
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
        $__internal_4c5f5ce3642afcb36857deb6d7f2d901dba864df7bca6f0474e11c1a19fdaa69 = $this->env->getExtension("native_profiler");
        $__internal_4c5f5ce3642afcb36857deb6d7f2d901dba864df7bca6f0474e11c1a19fdaa69->enter($__internal_4c5f5ce3642afcb36857deb6d7f2d901dba864df7bca6f0474e11c1a19fdaa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c5f5ce3642afcb36857deb6d7f2d901dba864df7bca6f0474e11c1a19fdaa69->leave($__internal_4c5f5ce3642afcb36857deb6d7f2d901dba864df7bca6f0474e11c1a19fdaa69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab75656787cfd6133e2e10f0622e8fc0893beedaabb4ef00f7d22e9740bbd87 = $this->env->getExtension("native_profiler");
        $__internal_eab75656787cfd6133e2e10f0622e8fc0893beedaabb4ef00f7d22e9740bbd87->enter($__internal_eab75656787cfd6133e2e10f0622e8fc0893beedaabb4ef00f7d22e9740bbd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Event Match List</h1>

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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_schedule", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "homeTeamId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "awayTeamId", array()), "html", null, true);
            echo "</td>               
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "homeScore", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "awayScore", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "snitch", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "p", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "padj", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "SWIM", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "eventId", array()), "html", null, true);
            echo "</td>             
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "eventOrder", array()), "html", null, true);
            echo "</td>               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("events_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_eab75656787cfd6133e2e10f0622e8fc0893beedaabb4ef00f7d22e9740bbd87->leave($__internal_eab75656787cfd6133e2e10f0622e8fc0893beedaabb4ef00f7d22e9740bbd87_prof);

    }

    public function getTemplateName()
    {
        return "events/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  121 => 40,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Event Match List</h1>*/
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
/*         {% for match in matchs %}*/
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
/*             <a href="{{ path('events_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
