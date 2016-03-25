<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b45dd889a1c8ac4d0bfe4d668201798cb2fe5a9fe364549aede5835800c5cb2e extends Twig_Template
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
        $__internal_38e6119940ddd059392215588e7f79d8338a05f384fbb9de74739633c21a6659 = $this->env->getExtension("native_profiler");
        $__internal_38e6119940ddd059392215588e7f79d8338a05f384fbb9de74739633c21a6659->enter($__internal_38e6119940ddd059392215588e7f79d8338a05f384fbb9de74739633c21a6659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_38e6119940ddd059392215588e7f79d8338a05f384fbb9de74739633c21a6659->leave($__internal_38e6119940ddd059392215588e7f79d8338a05f384fbb9de74739633c21a6659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
