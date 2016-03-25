<?php

/* ::layout/navigationAdmin.html.twig */
class __TwigTemplate_bb8e4a4a4cd27279a04416e7ec1d1c92ed23973eb06b7a788f4477fa78feb789 extends Twig_Template
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
        $__internal_5fe8bd1cf2a64b8d54b297457f5d8feeae51c0adb70fca21c8221d0e13d20102 = $this->env->getExtension("native_profiler");
        $__internal_5fe8bd1cf2a64b8d54b297457f5d8feeae51c0adb70fca21c8221d0e13d20102->enter($__internal_5fe8bd1cf2a64b8d54b297457f5d8feeae51c0adb70fca21c8221d0e13d20102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/navigationAdmin.html.twig"));

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
        
        $__internal_5fe8bd1cf2a64b8d54b297457f5d8feeae51c0adb70fca21c8221d0e13d20102->leave($__internal_5fe8bd1cf2a64b8d54b297457f5d8feeae51c0adb70fca21c8221d0e13d20102_prof);

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
