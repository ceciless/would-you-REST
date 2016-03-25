<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0678166e1b51cf2c1613d3580b36424421decf26c4ac95e8f488692c1a8c5c7b extends Twig_Template
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
        $__internal_50c231e292b1ef0b9a6f5a638e5e319eb92fcb64f7e78b050a1bb34d23926c73 = $this->env->getExtension("native_profiler");
        $__internal_50c231e292b1ef0b9a6f5a638e5e319eb92fcb64f7e78b050a1bb34d23926c73->enter($__internal_50c231e292b1ef0b9a6f5a638e5e319eb92fcb64f7e78b050a1bb34d23926c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50c231e292b1ef0b9a6f5a638e5e319eb92fcb64f7e78b050a1bb34d23926c73->leave($__internal_50c231e292b1ef0b9a6f5a638e5e319eb92fcb64f7e78b050a1bb34d23926c73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
