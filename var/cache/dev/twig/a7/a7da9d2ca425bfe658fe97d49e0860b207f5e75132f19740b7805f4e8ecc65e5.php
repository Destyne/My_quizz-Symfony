<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1a37618efb58b6bb9b230a34a82180c27dab6d046af4d0bbd1d9b6b5f0adf055 extends Twig_Template
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
        $__internal_d248b68649c3c1c547efd11927d09bba5ed4183ef9b5a8596a0f4556501d3a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d248b68649c3c1c547efd11927d09bba5ed4183ef9b5a8596a0f4556501d3a0c->enter($__internal_d248b68649c3c1c547efd11927d09bba5ed4183ef9b5a8596a0f4556501d3a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_49a11fc8248e8a41fced08d228517adb28aab9fe27322e23b745e489a691cb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a11fc8248e8a41fced08d228517adb28aab9fe27322e23b745e489a691cb4f->enter($__internal_49a11fc8248e8a41fced08d228517adb28aab9fe27322e23b745e489a691cb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d248b68649c3c1c547efd11927d09bba5ed4183ef9b5a8596a0f4556501d3a0c->leave($__internal_d248b68649c3c1c547efd11927d09bba5ed4183ef9b5a8596a0f4556501d3a0c_prof);

        
        $__internal_49a11fc8248e8a41fced08d228517adb28aab9fe27322e23b745e489a691cb4f->leave($__internal_49a11fc8248e8a41fced08d228517adb28aab9fe27322e23b745e489a691cb4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
