<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4f2e084bf681192cb6087b16f0f49e59e30f3496249591643a367b4a7c2deccb extends Twig_Template
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
        $__internal_4ad4523b33ed0bb4a065d4a4ff81f67ea3f198ee2d57df5443021a8a2d40a3f8 = $this->env->getExtension("native_profiler");
        $__internal_4ad4523b33ed0bb4a065d4a4ff81f67ea3f198ee2d57df5443021a8a2d40a3f8->enter($__internal_4ad4523b33ed0bb4a065d4a4ff81f67ea3f198ee2d57df5443021a8a2d40a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4ad4523b33ed0bb4a065d4a4ff81f67ea3f198ee2d57df5443021a8a2d40a3f8->leave($__internal_4ad4523b33ed0bb4a065d4a4ff81f67ea3f198ee2d57df5443021a8a2d40a3f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
