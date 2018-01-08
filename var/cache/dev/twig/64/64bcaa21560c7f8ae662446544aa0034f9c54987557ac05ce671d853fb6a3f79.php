<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_49760fda8f269fb8f3443c765d6b9524e93880d56763788113548a870c124033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49760fda8f269fb8f3443c765d6b9524e93880d56763788113548a870c124033->enter($__internal_49760fda8f269fb8f3443c765d6b9524e93880d56763788113548a870c124033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_faa9a5700973e7633973aebd699f37304fdf5354ee289d5edd5c4b3d1a33bf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa9a5700973e7633973aebd699f37304fdf5354ee289d5edd5c4b3d1a33bf2a->enter($__internal_faa9a5700973e7633973aebd699f37304fdf5354ee289d5edd5c4b3d1a33bf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_49760fda8f269fb8f3443c765d6b9524e93880d56763788113548a870c124033->leave($__internal_49760fda8f269fb8f3443c765d6b9524e93880d56763788113548a870c124033_prof);

        
        $__internal_faa9a5700973e7633973aebd699f37304fdf5354ee289d5edd5c4b3d1a33bf2a->leave($__internal_faa9a5700973e7633973aebd699f37304fdf5354ee289d5edd5c4b3d1a33bf2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
