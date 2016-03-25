<?php

/* matches/show.html.twig */
class __TwigTemplate_c1ea55d201c40d81d81ac8bd5f6f64f62be03f2e37dea76f1b6ae6295c2da25d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "matches/show.html.twig", 1);
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
        $__internal_2ad15a5dc0a9b79a7b7cc9a605e6128acc94e65a2b24d764c887df9545d26dc0 = $this->env->getExtension("native_profiler");
        $__internal_2ad15a5dc0a9b79a7b7cc9a605e6128acc94e65a2b24d764c887df9545d26dc0->enter($__internal_2ad15a5dc0a9b79a7b7cc9a605e6128acc94e65a2b24d764c887df9545d26dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matches/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad15a5dc0a9b79a7b7cc9a605e6128acc94e65a2b24d764c887df9545d26dc0->leave($__internal_2ad15a5dc0a9b79a7b7cc9a605e6128acc94e65a2b24d764c887df9545d26dc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_beaf169ca2e8ae5e948ce09389acbd8451fd47b7a81ec737d010d39d9c43526c = $this->env->getExtension("native_profiler");
        $__internal_beaf169ca2e8ae5e948ce09389acbd8451fd47b7a81ec737d010d39d9c43526c->enter($__internal_beaf169ca2e8ae5e948ce09389acbd8451fd47b7a81ec737d010d39d9c43526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Match ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "homeTeamId", array()), "html", null, true);
        echo " vs ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "awayTeamId", array()), "html", null, true);
        echo "</h1>

    <table class=\"dataintable\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "id", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Home team</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "homeTeamId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Away team</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "awayTeamId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Home score</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "homeScore", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Away score</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "awayScore", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Snitch</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "snitch", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>P</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "p", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Padj</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "padj", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Swim</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "SWIM", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Event</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "eventId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Event order</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "eventOrder", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("matchs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matchs_edit", array("id" => $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_beaf169ca2e8ae5e948ce09389acbd8451fd47b7a81ec737d010d39d9c43526c->leave($__internal_beaf169ca2e8ae5e948ce09389acbd8451fd47b7a81ec737d010d39d9c43526c_prof);

    }

    public function getTemplateName()
    {
        return "matches/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  145 => 64,  139 => 61,  133 => 58,  123 => 51,  116 => 47,  109 => 43,  102 => 39,  95 => 35,  88 => 31,  81 => 27,  74 => 23,  67 => 19,  60 => 15,  52 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Match {{ match.homeTeamId }} vs {{ match.awayTeamId }}</h1>*/
/* */
/*     <table class="dataintable">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ match.id }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Home team</th>*/
/*                 <td>{{ match.homeTeamId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Away team</th>*/
/*                 <td>{{ match.awayTeamId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Home score</th>*/
/*                 <td>{{ match.homeScore }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Away score</th>*/
/*                 <td>{{ match.awayScore }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Snitch</th>*/
/*                 <td>{{ match.snitch }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>P</th>*/
/*                 <td>{{ match.p }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Padj</th>*/
/*                 <td>{{ match.padj }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Swim</th>*/
/*                 <td>{{ match.SWIM }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Event</th>*/
/*                 <td>{{ match.eventId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Event order</th>*/
/*                 <td>{{ match.eventOrder }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matchs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('matchs_edit', { 'id': match.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
