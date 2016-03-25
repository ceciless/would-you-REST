<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4b18f01059665283763bdb8cf39a25df81bf7b8a25c37e0ee08f8f1fb1330e02 extends Twig_Template
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
        $__internal_401d2589ac4e2b64ea729c16439e896e00252ad74fec6015897c8b183ac75668 = $this->env->getExtension("native_profiler");
        $__internal_401d2589ac4e2b64ea729c16439e896e00252ad74fec6015897c8b183ac75668->enter($__internal_401d2589ac4e2b64ea729c16439e896e00252ad74fec6015897c8b183ac75668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_401d2589ac4e2b64ea729c16439e896e00252ad74fec6015897c8b183ac75668->leave($__internal_401d2589ac4e2b64ea729c16439e896e00252ad74fec6015897c8b183ac75668_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
