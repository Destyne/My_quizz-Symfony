<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_f4d9afbc4a65286054b1b1b3016efddc7d4427c31b58ddc3f4df14269c45095b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d9afbc4a65286054b1b1b3016efddc7d4427c31b58ddc3f4df14269c45095b->enter($__internal_f4d9afbc4a65286054b1b1b3016efddc7d4427c31b58ddc3f4df14269c45095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_35e9f77a2af7f2b5b7ecaf575a56907cc0adb3f15a0d4420b2f6894c6963eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e9f77a2af7f2b5b7ecaf575a56907cc0adb3f15a0d4420b2f6894c6963eb56->enter($__internal_35e9f77a2af7f2b5b7ecaf575a56907cc0adb3f15a0d4420b2f6894c6963eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f4d9afbc4a65286054b1b1b3016efddc7d4427c31b58ddc3f4df14269c45095b->leave($__internal_f4d9afbc4a65286054b1b1b3016efddc7d4427c31b58ddc3f4df14269c45095b_prof);

        
        $__internal_35e9f77a2af7f2b5b7ecaf575a56907cc0adb3f15a0d4420b2f6894c6963eb56->leave($__internal_35e9f77a2af7f2b5b7ecaf575a56907cc0adb3f15a0d4420b2f6894c6963eb56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
