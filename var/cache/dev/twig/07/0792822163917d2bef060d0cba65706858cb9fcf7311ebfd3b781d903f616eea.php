<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_ae0b13e56bdd60a414f26533d0f2b7d554776eef7d1163376bbb258ef94022c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0b13e56bdd60a414f26533d0f2b7d554776eef7d1163376bbb258ef94022c7->enter($__internal_ae0b13e56bdd60a414f26533d0f2b7d554776eef7d1163376bbb258ef94022c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_49e0422ec4aa646d4cd39db10253486fd01792a76f58270434bc2c83ec2b86bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e0422ec4aa646d4cd39db10253486fd01792a76f58270434bc2c83ec2b86bf->enter($__internal_49e0422ec4aa646d4cd39db10253486fd01792a76f58270434bc2c83ec2b86bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ae0b13e56bdd60a414f26533d0f2b7d554776eef7d1163376bbb258ef94022c7->leave($__internal_ae0b13e56bdd60a414f26533d0f2b7d554776eef7d1163376bbb258ef94022c7_prof);

        
        $__internal_49e0422ec4aa646d4cd39db10253486fd01792a76f58270434bc2c83ec2b86bf->leave($__internal_49e0422ec4aa646d4cd39db10253486fd01792a76f58270434bc2c83ec2b86bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
