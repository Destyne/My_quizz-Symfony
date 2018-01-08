<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_768c812be1c0efea772d704123068323230fa8b5c330490b44c00949ac9a1bbf extends Twig_Template
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
        $__internal_107cb2380e33c8e92aadeb1d40d5d7a0fcbb7c4f6e8899da004b40d8fec31042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107cb2380e33c8e92aadeb1d40d5d7a0fcbb7c4f6e8899da004b40d8fec31042->enter($__internal_107cb2380e33c8e92aadeb1d40d5d7a0fcbb7c4f6e8899da004b40d8fec31042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b5d4bfc4621ab35c51e1a2909d64bcded93bb0dbef59ea4a1971f8a3b8119339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d4bfc4621ab35c51e1a2909d64bcded93bb0dbef59ea4a1971f8a3b8119339->enter($__internal_b5d4bfc4621ab35c51e1a2909d64bcded93bb0dbef59ea4a1971f8a3b8119339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_107cb2380e33c8e92aadeb1d40d5d7a0fcbb7c4f6e8899da004b40d8fec31042->leave($__internal_107cb2380e33c8e92aadeb1d40d5d7a0fcbb7c4f6e8899da004b40d8fec31042_prof);

        
        $__internal_b5d4bfc4621ab35c51e1a2909d64bcded93bb0dbef59ea4a1971f8a3b8119339->leave($__internal_b5d4bfc4621ab35c51e1a2909d64bcded93bb0dbef59ea4a1971f8a3b8119339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
