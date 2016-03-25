<?php

/* teams/index.html.twig */
class __TwigTemplate_6db7e5a3106962fb0674b2218e7cc960f7ac359ebfae2fb8dc482dd3e71cdb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "teams/index.html.twig", 1);
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
        $__internal_182ce61540e1db38b2cbb9e312f1e42b665f0419c76027f27dd8f15238ec251c = $this->env->getExtension("native_profiler");
        $__internal_182ce61540e1db38b2cbb9e312f1e42b665f0419c76027f27dd8f15238ec251c->enter($__internal_182ce61540e1db38b2cbb9e312f1e42b665f0419c76027f27dd8f15238ec251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teams/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182ce61540e1db38b2cbb9e312f1e42b665f0419c76027f27dd8f15238ec251c->leave($__internal_182ce61540e1db38b2cbb9e312f1e42b665f0419c76027f27dd8f15238ec251c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5a6405746382ccfef172ad85f1eedca578c05008c169437f22e37d88ff90c5a = $this->env->getExtension("native_profiler");
        $__internal_a5a6405746382ccfef172ad85f1eedca578c05008c169437f22e37d88ff90c5a->enter($__internal_a5a6405746382ccfef172ad85f1eedca578c05008c169437f22e37d88ff90c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Team List</h1>

    <table class=\"dataintable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams_show", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams_show", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams_edit", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams_matchs", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">matchs</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("teams_new");
        echo "\">Create a new team</a>
        </li>
    </ul>
";
        
        $__internal_a5a6405746382ccfef172ad85f1eedca578c05008c169437f22e37d88ff90c5a->leave($__internal_a5a6405746382ccfef172ad85f1eedca578c05008c169437f22e37d88ff90c5a_prof);

    }

    public function getTemplateName()
    {
        return "teams/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  97 => 34,  85 => 28,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Team List</h1>*/
/* */
/*     <table class="dataintable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for team in teams %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('teams_show', { 'id': team.id }) }}">{{ team.id }}</a></td>*/
/*                 <td>{{ team.name }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('teams_show', { 'id': team.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('teams_edit', { 'id': team.id }) }}">edit</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('teams_matchs', { 'id': team.id }) }}">matchs</a>*/
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
/*             <a href="{{ path('teams_new') }}">Create a new team</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
