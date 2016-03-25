<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_35c3e9d08380eb0d0e1736aa632f5e3f66df63d6182e85257ab8cd638bcb36e6 extends Twig_Template
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
        $__internal_138ed3f8fe7685800baf93e916e80d86c45df08e375ab372d8b6beb39cbc38e4 = $this->env->getExtension("native_profiler");
        $__internal_138ed3f8fe7685800baf93e916e80d86c45df08e375ab372d8b6beb39cbc38e4->enter($__internal_138ed3f8fe7685800baf93e916e80d86c45df08e375ab372d8b6beb39cbc38e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_138ed3f8fe7685800baf93e916e80d86c45df08e375ab372d8b6beb39cbc38e4->leave($__internal_138ed3f8fe7685800baf93e916e80d86c45df08e375ab372d8b6beb39cbc38e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
