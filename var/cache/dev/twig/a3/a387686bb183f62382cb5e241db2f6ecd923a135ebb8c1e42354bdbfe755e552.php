<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_03b76b6584a3d50ff3f377a4c90d73bb6df23ed2279a420e810df9dd78e64e9d extends Twig_Template
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
        $__internal_887c3bfc6fef12af8e19e715beb18c06344273608e8104c1c5a4b0ee523ec5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887c3bfc6fef12af8e19e715beb18c06344273608e8104c1c5a4b0ee523ec5a7->enter($__internal_887c3bfc6fef12af8e19e715beb18c06344273608e8104c1c5a4b0ee523ec5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c8b3f03ce86fd5e277f28c5c6db8555f42d5fedc9356eb3e9caa256f2b91cbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b3f03ce86fd5e277f28c5c6db8555f42d5fedc9356eb3e9caa256f2b91cbf9->enter($__internal_c8b3f03ce86fd5e277f28c5c6db8555f42d5fedc9356eb3e9caa256f2b91cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_887c3bfc6fef12af8e19e715beb18c06344273608e8104c1c5a4b0ee523ec5a7->leave($__internal_887c3bfc6fef12af8e19e715beb18c06344273608e8104c1c5a4b0ee523ec5a7_prof);

        
        $__internal_c8b3f03ce86fd5e277f28c5c6db8555f42d5fedc9356eb3e9caa256f2b91cbf9->leave($__internal_c8b3f03ce86fd5e277f28c5c6db8555f42d5fedc9356eb3e9caa256f2b91cbf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
