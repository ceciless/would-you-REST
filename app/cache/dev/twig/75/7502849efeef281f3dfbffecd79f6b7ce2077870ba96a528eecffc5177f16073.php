<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cc63c50bfced2e99adf99d0fa726d16f2aa1d910c0f477ae02fe0ce352b96834 extends Twig_Template
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
        $__internal_a93859abfa29b0c8a58f98dd379a97cc6ed062ee07e453e1c4d0e9d724931abb = $this->env->getExtension("native_profiler");
        $__internal_a93859abfa29b0c8a58f98dd379a97cc6ed062ee07e453e1c4d0e9d724931abb->enter($__internal_a93859abfa29b0c8a58f98dd379a97cc6ed062ee07e453e1c4d0e9d724931abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a93859abfa29b0c8a58f98dd379a97cc6ed062ee07e453e1c4d0e9d724931abb->leave($__internal_a93859abfa29b0c8a58f98dd379a97cc6ed062ee07e453e1c4d0e9d724931abb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
