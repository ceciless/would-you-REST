<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4f658e4edea4ff01bba8322fe12463e5e664192b2251dee9baf91ecd9275d280 extends Twig_Template
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
        $__internal_04fc6a9754948083f5d266632af3d2a1ec4ada38fd90d4edbe5025dd387739ad = $this->env->getExtension("native_profiler");
        $__internal_04fc6a9754948083f5d266632af3d2a1ec4ada38fd90d4edbe5025dd387739ad->enter($__internal_04fc6a9754948083f5d266632af3d2a1ec4ada38fd90d4edbe5025dd387739ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_04fc6a9754948083f5d266632af3d2a1ec4ada38fd90d4edbe5025dd387739ad->leave($__internal_04fc6a9754948083f5d266632af3d2a1ec4ada38fd90d4edbe5025dd387739ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
