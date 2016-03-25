<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4a4f3bd890245659bd78c62c76d95d8dff238f1bbab5b457eb1070f8598ed11f extends Twig_Template
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
        $__internal_91328e77f00928606380af0d932646e183a4eb6244fa965f4275c20653409a47 = $this->env->getExtension("native_profiler");
        $__internal_91328e77f00928606380af0d932646e183a4eb6244fa965f4275c20653409a47->enter($__internal_91328e77f00928606380af0d932646e183a4eb6244fa965f4275c20653409a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_91328e77f00928606380af0d932646e183a4eb6244fa965f4275c20653409a47->leave($__internal_91328e77f00928606380af0d932646e183a4eb6244fa965f4275c20653409a47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
