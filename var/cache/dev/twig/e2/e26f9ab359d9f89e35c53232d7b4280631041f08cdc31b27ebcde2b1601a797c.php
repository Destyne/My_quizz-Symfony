<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_1c3ca1678cec94423d50061c75d524b10e2f7445150e18c2c0bec98ca0bcd1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3ca1678cec94423d50061c75d524b10e2f7445150e18c2c0bec98ca0bcd1ea->enter($__internal_1c3ca1678cec94423d50061c75d524b10e2f7445150e18c2c0bec98ca0bcd1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c97f13fffd37af990295feca407823ff916acae290b6f318466adf683437cae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97f13fffd37af990295feca407823ff916acae290b6f318466adf683437cae7->enter($__internal_c97f13fffd37af990295feca407823ff916acae290b6f318466adf683437cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1c3ca1678cec94423d50061c75d524b10e2f7445150e18c2c0bec98ca0bcd1ea->leave($__internal_1c3ca1678cec94423d50061c75d524b10e2f7445150e18c2c0bec98ca0bcd1ea_prof);

        
        $__internal_c97f13fffd37af990295feca407823ff916acae290b6f318466adf683437cae7->leave($__internal_c97f13fffd37af990295feca407823ff916acae290b6f318466adf683437cae7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
