<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_b082bb7e5da2458783a90ae568aac7627e926c9241722eba2b4e9e38e9267b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b082bb7e5da2458783a90ae568aac7627e926c9241722eba2b4e9e38e9267b97->enter($__internal_b082bb7e5da2458783a90ae568aac7627e926c9241722eba2b4e9e38e9267b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bd375b17875e9685328bd62c1ae1064a649a2dafc99c0183ee533154594f33d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd375b17875e9685328bd62c1ae1064a649a2dafc99c0183ee533154594f33d0->enter($__internal_bd375b17875e9685328bd62c1ae1064a649a2dafc99c0183ee533154594f33d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b082bb7e5da2458783a90ae568aac7627e926c9241722eba2b4e9e38e9267b97->leave($__internal_b082bb7e5da2458783a90ae568aac7627e926c9241722eba2b4e9e38e9267b97_prof);

        
        $__internal_bd375b17875e9685328bd62c1ae1064a649a2dafc99c0183ee533154594f33d0->leave($__internal_bd375b17875e9685328bd62c1ae1064a649a2dafc99c0183ee533154594f33d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
