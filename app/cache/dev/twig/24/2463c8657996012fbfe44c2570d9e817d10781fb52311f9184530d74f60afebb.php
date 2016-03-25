<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_e0ea6063fd98e43ee318a2e37f17a2f7889862757a46fbf43d172d6f32541784 extends Twig_Template
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
        $__internal_2dbed6b870c9b872b13b4ae7a6999f222d6025546686e8069bf8a62f3520e0f8 = $this->env->getExtension("native_profiler");
        $__internal_2dbed6b870c9b872b13b4ae7a6999f222d6025546686e8069bf8a62f3520e0f8->enter($__internal_2dbed6b870c9b872b13b4ae7a6999f222d6025546686e8069bf8a62f3520e0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

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
        
        $__internal_2dbed6b870c9b872b13b4ae7a6999f222d6025546686e8069bf8a62f3520e0f8->leave($__internal_2dbed6b870c9b872b13b4ae7a6999f222d6025546686e8069bf8a62f3520e0f8_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a17837a5ee58a5576c54d8e966ef7aad6f9cf5f13c26ee7f8e6f32faef3c97de = $this->env->getExtension("native_profiler");
        $__internal_a17837a5ee58a5576c54d8e966ef7aad6f9cf5f13c26ee7f8e6f32faef3c97de->enter($__internal_a17837a5ee58a5576c54d8e966ef7aad6f9cf5f13c26ee7f8e6f32faef3c97de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "FootballGameAdmin";
        
        $__internal_a17837a5ee58a5576c54d8e966ef7aad6f9cf5f13c26ee7f8e6f32faef3c97de->leave($__internal_a17837a5ee58a5576c54d8e966ef7aad6f9cf5f13c26ee7f8e6f32faef3c97de_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_b6eef9136143f68212c7ed78bd956bb0fa8da7843282a28dd458464efd6122f5 = $this->env->getExtension("native_profiler");
        $__internal_b6eef9136143f68212c7ed78bd956bb0fa8da7843282a28dd458464efd6122f5->enter($__internal_b6eef9136143f68212c7ed78bd956bb0fa8da7843282a28dd458464efd6122f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_b6eef9136143f68212c7ed78bd956bb0fa8da7843282a28dd458464efd6122f5->leave($__internal_b6eef9136143f68212c7ed78bd956bb0fa8da7843282a28dd458464efd6122f5_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_1616e86c9ea172dcc3022f114d74d2fb118e41a5eb56e8adccd45d2357938c2c = $this->env->getExtension("native_profiler");
        $__internal_1616e86c9ea172dcc3022f114d74d2fb118e41a5eb56e8adccd45d2357938c2c->enter($__internal_1616e86c9ea172dcc3022f114d74d2fb118e41a5eb56e8adccd45d2357938c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_1616e86c9ea172dcc3022f114d74d2fb118e41a5eb56e8adccd45d2357938c2c->leave($__internal_1616e86c9ea172dcc3022f114d74d2fb118e41a5eb56e8adccd45d2357938c2c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7713f1b5f076efb21b751336a21d6d462533f4a4228833217a2ee28eedc97a23 = $this->env->getExtension("native_profiler");
        $__internal_7713f1b5f076efb21b751336a21d6d462533f4a4228833217a2ee28eedc97a23->enter($__internal_7713f1b5f076efb21b751336a21d6d462533f4a4228833217a2ee28eedc97a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7713f1b5f076efb21b751336a21d6d462533f4a4228833217a2ee28eedc97a23->leave($__internal_7713f1b5f076efb21b751336a21d6d462533f4a4228833217a2ee28eedc97a23_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_022d025f8dd6d920286e0de626a1d18b92babbc7a61e792894748e594404199c = $this->env->getExtension("native_profiler");
        $__internal_022d025f8dd6d920286e0de626a1d18b92babbc7a61e792894748e594404199c->enter($__internal_022d025f8dd6d920286e0de626a1d18b92babbc7a61e792894748e594404199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_022d025f8dd6d920286e0de626a1d18b92babbc7a61e792894748e594404199c->leave($__internal_022d025f8dd6d920286e0de626a1d18b92babbc7a61e792894748e594404199c_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d119cfa407e21768599b4709be4170d2825622c3af98ce562ff6040288ae44b9 = $this->env->getExtension("native_profiler");
        $__internal_d119cfa407e21768599b4709be4170d2825622c3af98ce562ff6040288ae44b9->enter($__internal_d119cfa407e21768599b4709be4170d2825622c3af98ce562ff6040288ae44b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d119cfa407e21768599b4709be4170d2825622c3af98ce562ff6040288ae44b9->leave($__internal_d119cfa407e21768599b4709be4170d2825622c3af98ce562ff6040288ae44b9_prof);

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
