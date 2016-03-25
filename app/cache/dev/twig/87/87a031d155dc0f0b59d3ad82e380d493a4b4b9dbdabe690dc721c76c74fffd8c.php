<?php

/* ::layout/navigationAdmin.html.twig */
class __TwigTemplate_58524d1120972b515a6b40b81da93208394614f12860651b00e7c40dec30b052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13e6c08a3fa0253793e892ef1e9f88458bdc04e291f55fbf13f573f6c84f1a6a = $this->env->getExtension("native_profiler");
        $__internal_13e6c08a3fa0253793e892ef1e9f88458bdc04e291f55fbf13f573f6c84f1a6a->enter($__internal_13e6c08a3fa0253793e892ef1e9f88458bdc04e291f55fbf13f573f6c84f1a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("events_index");
        echo "\">Events</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("teams_index");
        echo "\">Teams</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("matchs_index");
        echo "\">Matchs</a>
            </li>
        </ul>
    </div>
</div>";
        
        $__internal_13e6c08a3fa0253793e892ef1e9f88458bdc04e291f55fbf13f573f6c84f1a6a->leave($__internal_13e6c08a3fa0253793e892ef1e9f88458bdc04e291f55fbf13f573f6c84f1a6a_prof);

    }

    public function getTemplateName()
    {
        return "::layout/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="span3">*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('events_index') }}">Events</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('teams_index') }}">Teams</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('matchs_index') }}">Matchs</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
