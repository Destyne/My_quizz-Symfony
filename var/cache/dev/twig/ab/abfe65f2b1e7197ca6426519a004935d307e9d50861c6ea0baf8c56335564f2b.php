<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_25332a19bc5c165a5003d64f3a267078b127762f40908e4907e6624602a1c1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25332a19bc5c165a5003d64f3a267078b127762f40908e4907e6624602a1c1a7->enter($__internal_25332a19bc5c165a5003d64f3a267078b127762f40908e4907e6624602a1c1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d26c36ccab627a150709c397d48bcc734dd55565765254a0ee37334ce93e1a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26c36ccab627a150709c397d48bcc734dd55565765254a0ee37334ce93e1a47->enter($__internal_d26c36ccab627a150709c397d48bcc734dd55565765254a0ee37334ce93e1a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_25332a19bc5c165a5003d64f3a267078b127762f40908e4907e6624602a1c1a7->leave($__internal_25332a19bc5c165a5003d64f3a267078b127762f40908e4907e6624602a1c1a7_prof);

        
        $__internal_d26c36ccab627a150709c397d48bcc734dd55565765254a0ee37334ce93e1a47->leave($__internal_d26c36ccab627a150709c397d48bcc734dd55565765254a0ee37334ce93e1a47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
