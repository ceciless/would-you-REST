<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7b551c384b884b1adfc434fe52332eeeb1eb1d9b9145504266d4d949c7549ae6 extends Twig_Template
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
        $__internal_0ff7a722595e736db8c37b139d282e40bbe939680a5d51b71aa77c089c043956 = $this->env->getExtension("native_profiler");
        $__internal_0ff7a722595e736db8c37b139d282e40bbe939680a5d51b71aa77c089c043956->enter($__internal_0ff7a722595e736db8c37b139d282e40bbe939680a5d51b71aa77c089c043956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0ff7a722595e736db8c37b139d282e40bbe939680a5d51b71aa77c089c043956->leave($__internal_0ff7a722595e736db8c37b139d282e40bbe939680a5d51b71aa77c089c043956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
