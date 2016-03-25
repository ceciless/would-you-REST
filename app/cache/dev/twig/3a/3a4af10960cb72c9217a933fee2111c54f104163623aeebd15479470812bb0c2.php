<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_3ce7ea47206c7def47d5e9cf62be7b49d90628c99da66a9d6edb6b42ea939ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd47bc3ddefdd1a878108ab756259494d5d3c6806e39379a56302c6c2ea6f707 = $this->env->getExtension("native_profiler");
        $__internal_dd47bc3ddefdd1a878108ab756259494d5d3c6806e39379a56302c6c2ea6f707->enter($__internal_dd47bc3ddefdd1a878108ab756259494d5d3c6806e39379a56302c6c2ea6f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("api_homepage");
        echo "\">FootballGameAdmin</a>
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 31
        $this->loadTemplate("::layout/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 31)->display($context);
        // line 32
        echo "                <div class=\"span9\">
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright</p>
                </div>
            </div>
\t</footer>\t
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>";
        
        $__internal_dd47bc3ddefdd1a878108ab756259494d5d3c6806e39379a56302c6c2ea6f707->leave($__internal_dd47bc3ddefdd1a878108ab756259494d5d3c6806e39379a56302c6c2ea6f707_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_af9b544a493c16342d0228fc3af1bf4d704648c843af2e954a2d012c963ef9fe = $this->env->getExtension("native_profiler");
        $__internal_af9b544a493c16342d0228fc3af1bf4d704648c843af2e954a2d012c963ef9fe->enter($__internal_af9b544a493c16342d0228fc3af1bf4d704648c843af2e954a2d012c963ef9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "FootballGameAdmin";
        
        $__internal_af9b544a493c16342d0228fc3af1bf4d704648c843af2e954a2d012c963ef9fe->leave($__internal_af9b544a493c16342d0228fc3af1bf4d704648c843af2e954a2d012c963ef9fe_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_308ec4472dce25f76aedaf5521c384685e816abaa6f9bc8fde7f1b6771011da2 = $this->env->getExtension("native_profiler");
        $__internal_308ec4472dce25f76aedaf5521c384685e816abaa6f9bc8fde7f1b6771011da2->enter($__internal_308ec4472dce25f76aedaf5521c384685e816abaa6f9bc8fde7f1b6771011da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_308ec4472dce25f76aedaf5521c384685e816abaa6f9bc8fde7f1b6771011da2->leave($__internal_308ec4472dce25f76aedaf5521c384685e816abaa6f9bc8fde7f1b6771011da2_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_3a6833ed1525f59e9c24f75dec562c5992624b2bd84fd66350e90d2d0074c174 = $this->env->getExtension("native_profiler");
        $__internal_3a6833ed1525f59e9c24f75dec562c5992624b2bd84fd66350e90d2d0074c174->enter($__internal_3a6833ed1525f59e9c24f75dec562c5992624b2bd84fd66350e90d2d0074c174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_3a6833ed1525f59e9c24f75dec562c5992624b2bd84fd66350e90d2d0074c174->leave($__internal_3a6833ed1525f59e9c24f75dec562c5992624b2bd84fd66350e90d2d0074c174_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11805c34491ccdfafbab5f4215411d5ef42d52fe2fc462a701a16372a50b970e = $this->env->getExtension("native_profiler");
        $__internal_11805c34491ccdfafbab5f4215411d5ef42d52fe2fc462a701a16372a50b970e->enter($__internal_11805c34491ccdfafbab5f4215411d5ef42d52fe2fc462a701a16372a50b970e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11805c34491ccdfafbab5f4215411d5ef42d52fe2fc462a701a16372a50b970e->leave($__internal_11805c34491ccdfafbab5f4215411d5ef42d52fe2fc462a701a16372a50b970e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafdebd457757b0f588d9637d0d9e9fd423c1e91b02968a5c33f49ac3b601d32 = $this->env->getExtension("native_profiler");
        $__internal_fafdebd457757b0f588d9637d0d9e9fd423c1e91b02968a5c33f49ac3b601d32->enter($__internal_fafdebd457757b0f588d9637d0d9e9fd423c1e91b02968a5c33f49ac3b601d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fafdebd457757b0f588d9637d0d9e9fd423c1e91b02968a5c33f49ac3b601d32->leave($__internal_fafdebd457757b0f588d9637d0d9e9fd423c1e91b02968a5c33f49ac3b601d32_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0b79e2412848a0f69a7782017a3a200919b988273c4a4d2ea1030a3fb0231a7 = $this->env->getExtension("native_profiler");
        $__internal_e0b79e2412848a0f69a7782017a3a200919b988273c4a4d2ea1030a3fb0231a7->enter($__internal_e0b79e2412848a0f69a7782017a3a200919b988273c4a4d2ea1030a3fb0231a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0b79e2412848a0f69a7782017a3a200919b988273c4a4d2ea1030a3fb0231a7->leave($__internal_e0b79e2412848a0f69a7782017a3a200919b988273c4a4d2ea1030a3fb0231a7_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  178 => 33,  167 => 12,  156 => 7,  145 => 6,  133 => 5,  125 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}FootballGameAdmin{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="{{ path('api_homepage') }}">FootballGameAdmin</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% include '::layout/navigationAdmin.html.twig' %}*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/* 	<footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*             <div class="row">*/
/*                 <div class="span4">*/
/*                     <p>&copy; Copyright</p>*/
/*                 </div>*/
/*             </div>*/
/* 	</footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/pages/ckeditor/ckeditor.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
