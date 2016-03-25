<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ed3db5dd7ad1074612087d191db7bbd0d7ca4ba1edcb5560aa73540e1489d974 extends Twig_Template
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
        $__internal_c087947b5e9cb22c38a49bf074653615407fc8ab7c81aaf8d72047d984180387 = $this->env->getExtension("native_profiler");
        $__internal_c087947b5e9cb22c38a49bf074653615407fc8ab7c81aaf8d72047d984180387->enter($__internal_c087947b5e9cb22c38a49bf074653615407fc8ab7c81aaf8d72047d984180387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c087947b5e9cb22c38a49bf074653615407fc8ab7c81aaf8d72047d984180387->leave($__internal_c087947b5e9cb22c38a49bf074653615407fc8ab7c81aaf8d72047d984180387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
