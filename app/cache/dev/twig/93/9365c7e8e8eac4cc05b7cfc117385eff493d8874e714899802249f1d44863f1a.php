<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9f719413918d85c27488635221411ede1bf46d5313a9cd72f5c059d0d54d1abd extends Twig_Template
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
        $__internal_fef97b3989dbfde63d22a96e3517806c1ef62ad1f56ca5cf8830cecc83dd6cbf = $this->env->getExtension("native_profiler");
        $__internal_fef97b3989dbfde63d22a96e3517806c1ef62ad1f56ca5cf8830cecc83dd6cbf->enter($__internal_fef97b3989dbfde63d22a96e3517806c1ef62ad1f56ca5cf8830cecc83dd6cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fef97b3989dbfde63d22a96e3517806c1ef62ad1f56ca5cf8830cecc83dd6cbf->leave($__internal_fef97b3989dbfde63d22a96e3517806c1ef62ad1f56ca5cf8830cecc83dd6cbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
