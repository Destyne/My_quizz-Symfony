<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_b3fa7f0bdd64a9bd4ac30499f114aa16d38808331ef4b9e17488cc7c551a057e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fa7f0bdd64a9bd4ac30499f114aa16d38808331ef4b9e17488cc7c551a057e->enter($__internal_b3fa7f0bdd64a9bd4ac30499f114aa16d38808331ef4b9e17488cc7c551a057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_93b4644cc42115aac4f592f3e42e028c9e51ee1266f924ccd30037333d6e0908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b4644cc42115aac4f592f3e42e028c9e51ee1266f924ccd30037333d6e0908->enter($__internal_93b4644cc42115aac4f592f3e42e028c9e51ee1266f924ccd30037333d6e0908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b3fa7f0bdd64a9bd4ac30499f114aa16d38808331ef4b9e17488cc7c551a057e->leave($__internal_b3fa7f0bdd64a9bd4ac30499f114aa16d38808331ef4b9e17488cc7c551a057e_prof);

        
        $__internal_93b4644cc42115aac4f592f3e42e028c9e51ee1266f924ccd30037333d6e0908->leave($__internal_93b4644cc42115aac4f592f3e42e028c9e51ee1266f924ccd30037333d6e0908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
