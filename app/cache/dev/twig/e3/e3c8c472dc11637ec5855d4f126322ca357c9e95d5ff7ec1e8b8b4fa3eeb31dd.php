<?php

/* matches/index.html.twig */
class __TwigTemplate_92a5094855007a85845af1cc5fbca4c134eed9f90bc3054d1d43252278a4d68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "matches/index.html.twig", 1);
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
        $__internal_4532acf5849a311971f2121ed2f4819a73ec06e483563c733ab09e9a2b677813 = $this->env->getExtension("native_profiler");
        $__internal_4532acf5849a311971f2121ed2f4819a73ec06e483563c733ab09e9a2b677813->enter($__internal_4532acf5849a311971f2121ed2f4819a73ec06e483563c733ab09e9a2b677813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matches/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4532acf5849a311971f2121ed2f4819a73ec06e483563c733ab09e9a2b677813->leave($__internal_4532acf5849a311971f2121ed2f4819a73ec06e483563c733ab09e9a2b677813_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14045cd8bb1ba07b0a8c8a6732957e1ba858825b84bcc78a08398c89e4608976 = $this->env->getExtension("native_profiler");
        $__internal_14045cd8bb1ba07b0a8c8a6732957e1ba858825b84bcc78a08398c89e4608976->enter($__internal_14045cd8bb1ba07b0a8c8a6732957e1ba858825b84bcc78a08398c89e4608976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Match List</h1>

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
                <th>Actions</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matchs_show", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matchs_show", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matchs_edit", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("matchs_new");
        echo "\">Create a new match</a>
        </li>
    </ul>
";
        
        $__internal_14045cd8bb1ba07b0a8c8a6732957e1ba858825b84bcc78a08398c89e4608976->leave($__internal_14045cd8bb1ba07b0a8c8a6732957e1ba858825b84bcc78a08398c89e4608976_prof);

    }

    public function getTemplateName()
    {
        return "matches/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  136 => 49,  124 => 43,  118 => 40,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Match List</h1>*/
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
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for match in matches %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('matchs_show', { 'id': match.id }) }}">{{ match.id }}</a></td>*/
/*                 <td>{{ match.homeTeamId}}</td>*/
/*                 <td>{{ match.awayTeamId }}</td>               */
/*                 <td>{{ match.homeScore }}</td>*/
/*                 <td>{{ match.awayScore }}</td>*/
/*                 <td>{{ match.snitch }}</td>*/
/*                 <td>{{ match.p }}</td>*/
/*                 <td>{{ match.padj }}</td>*/
/*                 <td>{{ match.SWIM }}</td>*/
/*                 <td>{{ match.eventId }}</td>             */
/*                 <td>{{ match.eventOrder }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('matchs_show', { 'id': match.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('matchs_edit', { 'id': match.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matchs_new') }}">Create a new match</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
