<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_75b9d756619cf84f4c6db0083c94638c9469fa26f3a087b381f7fd2a8d7fd513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b9d756619cf84f4c6db0083c94638c9469fa26f3a087b381f7fd2a8d7fd513->enter($__internal_75b9d756619cf84f4c6db0083c94638c9469fa26f3a087b381f7fd2a8d7fd513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_148900e34bf0f606918f087d5df0db6e9dadb3c761e70c86bb59b37aeaa3782a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148900e34bf0f606918f087d5df0db6e9dadb3c761e70c86bb59b37aeaa3782a->enter($__internal_148900e34bf0f606918f087d5df0db6e9dadb3c761e70c86bb59b37aeaa3782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_75b9d756619cf84f4c6db0083c94638c9469fa26f3a087b381f7fd2a8d7fd513->leave($__internal_75b9d756619cf84f4c6db0083c94638c9469fa26f3a087b381f7fd2a8d7fd513_prof);

        
        $__internal_148900e34bf0f606918f087d5df0db6e9dadb3c761e70c86bb59b37aeaa3782a->leave($__internal_148900e34bf0f606918f087d5df0db6e9dadb3c761e70c86bb59b37aeaa3782a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
