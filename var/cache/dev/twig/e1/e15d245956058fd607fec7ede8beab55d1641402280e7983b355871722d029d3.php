<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_4a4a5f9617ab1dd6e9f9457f29af4d4de832c4cc2f6d65a5deeb4a9aff3efc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4a5f9617ab1dd6e9f9457f29af4d4de832c4cc2f6d65a5deeb4a9aff3efc9f->enter($__internal_4a4a5f9617ab1dd6e9f9457f29af4d4de832c4cc2f6d65a5deeb4a9aff3efc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a93428a3f0cec70fc4ce598c84ec9e82753cc3b7f17dbb1acc20d120ae5974f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93428a3f0cec70fc4ce598c84ec9e82753cc3b7f17dbb1acc20d120ae5974f8->enter($__internal_a93428a3f0cec70fc4ce598c84ec9e82753cc3b7f17dbb1acc20d120ae5974f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4a4a5f9617ab1dd6e9f9457f29af4d4de832c4cc2f6d65a5deeb4a9aff3efc9f->leave($__internal_4a4a5f9617ab1dd6e9f9457f29af4d4de832c4cc2f6d65a5deeb4a9aff3efc9f_prof);

        
        $__internal_a93428a3f0cec70fc4ce598c84ec9e82753cc3b7f17dbb1acc20d120ae5974f8->leave($__internal_a93428a3f0cec70fc4ce598c84ec9e82753cc3b7f17dbb1acc20d120ae5974f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
