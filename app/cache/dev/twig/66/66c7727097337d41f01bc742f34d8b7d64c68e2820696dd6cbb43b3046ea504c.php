<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_156d42a9d1be81898d47882975bf8b18761c1a9e8d7200c33513adecfdf19ab6 extends Twig_Template
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
        $__internal_42c8a3b4f687a9699f03c5821cd97cd373c815519ce87215e6c8e81b26e83cd8 = $this->env->getExtension("native_profiler");
        $__internal_42c8a3b4f687a9699f03c5821cd97cd373c815519ce87215e6c8e81b26e83cd8->enter($__internal_42c8a3b4f687a9699f03c5821cd97cd373c815519ce87215e6c8e81b26e83cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42c8a3b4f687a9699f03c5821cd97cd373c815519ce87215e6c8e81b26e83cd8->leave($__internal_42c8a3b4f687a9699f03c5821cd97cd373c815519ce87215e6c8e81b26e83cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
