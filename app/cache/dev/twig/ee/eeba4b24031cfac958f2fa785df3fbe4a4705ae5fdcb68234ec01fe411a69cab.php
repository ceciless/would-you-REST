<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c2da37b472d5cb5360db2e7f8b89cf16def20da0f8fe88351f7299c46db6e8bd extends Twig_Template
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
        $__internal_f68226ccde2cc1681de792b305eb857f44e22a5616310baa5cfcfc2aad4f8849 = $this->env->getExtension("native_profiler");
        $__internal_f68226ccde2cc1681de792b305eb857f44e22a5616310baa5cfcfc2aad4f8849->enter($__internal_f68226ccde2cc1681de792b305eb857f44e22a5616310baa5cfcfc2aad4f8849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f68226ccde2cc1681de792b305eb857f44e22a5616310baa5cfcfc2aad4f8849->leave($__internal_f68226ccde2cc1681de792b305eb857f44e22a5616310baa5cfcfc2aad4f8849_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
