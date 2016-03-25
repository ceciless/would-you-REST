<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_95d8fa8c376fc19c29336638c4a2298be5360cc850b823495412bf6a09da6916 extends Twig_Template
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
        $__internal_c5d4a8e35488ef4b6d6aadcb7cb61d858c3e4bdd64a780f65829a3414f44d957 = $this->env->getExtension("native_profiler");
        $__internal_c5d4a8e35488ef4b6d6aadcb7cb61d858c3e4bdd64a780f65829a3414f44d957->enter($__internal_c5d4a8e35488ef4b6d6aadcb7cb61d858c3e4bdd64a780f65829a3414f44d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c5d4a8e35488ef4b6d6aadcb7cb61d858c3e4bdd64a780f65829a3414f44d957->leave($__internal_c5d4a8e35488ef4b6d6aadcb7cb61d858c3e4bdd64a780f65829a3414f44d957_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
