<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_a7f5ce0c78d464d597760948da96665678b3233bc0c8fd0c2354805d44c4a02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f5ce0c78d464d597760948da96665678b3233bc0c8fd0c2354805d44c4a02d->enter($__internal_a7f5ce0c78d464d597760948da96665678b3233bc0c8fd0c2354805d44c4a02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_97c35bd84cf047d5689f044f9954d435d29474c9f516d1ea76f22dbed30d7410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c35bd84cf047d5689f044f9954d435d29474c9f516d1ea76f22dbed30d7410->enter($__internal_97c35bd84cf047d5689f044f9954d435d29474c9f516d1ea76f22dbed30d7410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a7f5ce0c78d464d597760948da96665678b3233bc0c8fd0c2354805d44c4a02d->leave($__internal_a7f5ce0c78d464d597760948da96665678b3233bc0c8fd0c2354805d44c4a02d_prof);

        
        $__internal_97c35bd84cf047d5689f044f9954d435d29474c9f516d1ea76f22dbed30d7410->leave($__internal_97c35bd84cf047d5689f044f9954d435d29474c9f516d1ea76f22dbed30d7410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
