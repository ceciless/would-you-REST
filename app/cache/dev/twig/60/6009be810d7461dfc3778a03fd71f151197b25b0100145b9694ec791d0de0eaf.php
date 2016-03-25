<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a202773c84592fdc93ef56da72bcd6167985246bf7c60b86b44ae83685ef11ca extends Twig_Template
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
        $__internal_ee87e1fc02dee5e0cb5aef8459568aaad1d57a48a3c34e2ddd2df836e5cfb37f = $this->env->getExtension("native_profiler");
        $__internal_ee87e1fc02dee5e0cb5aef8459568aaad1d57a48a3c34e2ddd2df836e5cfb37f->enter($__internal_ee87e1fc02dee5e0cb5aef8459568aaad1d57a48a3c34e2ddd2df836e5cfb37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ee87e1fc02dee5e0cb5aef8459568aaad1d57a48a3c34e2ddd2df836e5cfb37f->leave($__internal_ee87e1fc02dee5e0cb5aef8459568aaad1d57a48a3c34e2ddd2df836e5cfb37f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
