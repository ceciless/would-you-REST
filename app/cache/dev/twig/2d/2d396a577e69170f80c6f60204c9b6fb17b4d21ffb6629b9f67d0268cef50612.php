<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_39f935c73c5356bfabbde37fc63b3177566dc6c81cf9f6243abca4d6a58941c8 extends Twig_Template
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
        $__internal_b419dd618206fd6eda72d9a5fd22251bab18ef85ca744638089f47473bbfbdae = $this->env->getExtension("native_profiler");
        $__internal_b419dd618206fd6eda72d9a5fd22251bab18ef85ca744638089f47473bbfbdae->enter($__internal_b419dd618206fd6eda72d9a5fd22251bab18ef85ca744638089f47473bbfbdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b419dd618206fd6eda72d9a5fd22251bab18ef85ca744638089f47473bbfbdae->leave($__internal_b419dd618206fd6eda72d9a5fd22251bab18ef85ca744638089f47473bbfbdae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
