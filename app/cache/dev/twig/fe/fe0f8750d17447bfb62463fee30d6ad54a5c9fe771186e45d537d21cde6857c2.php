<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_39805b0c358e1fae45fde6ff7928aeebf0d3125fdf7def9fcae178b472979908 extends Twig_Template
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
        $__internal_805fe08843edc4d06475b42b8d202580c8fb5f2b00a377c01cc7da9228691bde = $this->env->getExtension("native_profiler");
        $__internal_805fe08843edc4d06475b42b8d202580c8fb5f2b00a377c01cc7da9228691bde->enter($__internal_805fe08843edc4d06475b42b8d202580c8fb5f2b00a377c01cc7da9228691bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_805fe08843edc4d06475b42b8d202580c8fb5f2b00a377c01cc7da9228691bde->leave($__internal_805fe08843edc4d06475b42b8d202580c8fb5f2b00a377c01cc7da9228691bde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
