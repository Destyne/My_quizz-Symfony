<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_0a3d20724ac395ab29ae7a223b7f4db4d0ca87b581e95bc0363a2dabc10c9ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3d20724ac395ab29ae7a223b7f4db4d0ca87b581e95bc0363a2dabc10c9ff7->enter($__internal_0a3d20724ac395ab29ae7a223b7f4db4d0ca87b581e95bc0363a2dabc10c9ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b43f00c5b2be40bd15518921ba9382e02e04eea2421cda5b2abba7aa8fa6e1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43f00c5b2be40bd15518921ba9382e02e04eea2421cda5b2abba7aa8fa6e1eb->enter($__internal_b43f00c5b2be40bd15518921ba9382e02e04eea2421cda5b2abba7aa8fa6e1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0a3d20724ac395ab29ae7a223b7f4db4d0ca87b581e95bc0363a2dabc10c9ff7->leave($__internal_0a3d20724ac395ab29ae7a223b7f4db4d0ca87b581e95bc0363a2dabc10c9ff7_prof);

        
        $__internal_b43f00c5b2be40bd15518921ba9382e02e04eea2421cda5b2abba7aa8fa6e1eb->leave($__internal_b43f00c5b2be40bd15518921ba9382e02e04eea2421cda5b2abba7aa8fa6e1eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
