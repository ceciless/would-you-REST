<?php

/* :teams:show.html.twig */
class __TwigTemplate_87ebc0af3a723caaab30120c8c3d167911cd6e28d97025c6d406b1affdeb3161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", ":teams:show.html.twig", 1);
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
        $__internal_239b8ffcfc9d2abe06d2da9d76481afe9940eee752fb6b2bb035da1831d33d8e = $this->env->getExtension("native_profiler");
        $__internal_239b8ffcfc9d2abe06d2da9d76481afe9940eee752fb6b2bb035da1831d33d8e->enter($__internal_239b8ffcfc9d2abe06d2da9d76481afe9940eee752fb6b2bb035da1831d33d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teams:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239b8ffcfc9d2abe06d2da9d76481afe9940eee752fb6b2bb035da1831d33d8e->leave($__internal_239b8ffcfc9d2abe06d2da9d76481afe9940eee752fb6b2bb035da1831d33d8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6afff33c1c9e00fafd8b0e9621eb24afaac2269c1d397ee2e5c5630e51ef83c = $this->env->getExtension("native_profiler");
        $__internal_e6afff33c1c9e00fafd8b0e9621eb24afaac2269c1d397ee2e5c5630e51ef83c->enter($__internal_e6afff33c1c9e00fafd8b0e9621eb24afaac2269c1d397ee2e5c5630e51ef83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Team ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</h1>

    <table class=\"dataintable\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("teams_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams_edit", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e6afff33c1c9e00fafd8b0e9621eb24afaac2269c1d397ee2e5c5630e51ef83c->leave($__internal_e6afff33c1c9e00fafd8b0e9621eb24afaac2269c1d397ee2e5c5630e51ef83c_prof);

    }

    public function getTemplateName()
    {
        return ":teams:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  79 => 27,  73 => 24,  67 => 21,  57 => 14,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Team {{ team.name }}</h1>*/
/* */
/*     <table class="dataintable">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ team.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ team.name }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('teams_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('teams_edit', { 'id': team.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
