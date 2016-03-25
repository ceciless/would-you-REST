<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_11dd08ac13f1debf71c528f6828b2311232b88af60f16dd584152fd884bd8d42 extends Twig_Template
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
        $__internal_18f539d31b018dccf94218869cdee5a71006c46a0591bbac7020f4de735b217d = $this->env->getExtension("native_profiler");
        $__internal_18f539d31b018dccf94218869cdee5a71006c46a0591bbac7020f4de735b217d->enter($__internal_18f539d31b018dccf94218869cdee5a71006c46a0591bbac7020f4de735b217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_18f539d31b018dccf94218869cdee5a71006c46a0591bbac7020f4de735b217d->leave($__internal_18f539d31b018dccf94218869cdee5a71006c46a0591bbac7020f4de735b217d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
