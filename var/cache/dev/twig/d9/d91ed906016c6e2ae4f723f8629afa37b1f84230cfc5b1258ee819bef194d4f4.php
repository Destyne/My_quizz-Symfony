<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_16ace058e365e11307bbdd064a4be295afe7dae0abd13e638ece1c81547e38ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ace058e365e11307bbdd064a4be295afe7dae0abd13e638ece1c81547e38ab->enter($__internal_16ace058e365e11307bbdd064a4be295afe7dae0abd13e638ece1c81547e38ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9a1309f3474ed9e50e94825181c77655337ca3f29f75e73f7ece7f29581a2cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1309f3474ed9e50e94825181c77655337ca3f29f75e73f7ece7f29581a2cbe->enter($__internal_9a1309f3474ed9e50e94825181c77655337ca3f29f75e73f7ece7f29581a2cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_16ace058e365e11307bbdd064a4be295afe7dae0abd13e638ece1c81547e38ab->leave($__internal_16ace058e365e11307bbdd064a4be295afe7dae0abd13e638ece1c81547e38ab_prof);

        
        $__internal_9a1309f3474ed9e50e94825181c77655337ca3f29f75e73f7ece7f29581a2cbe->leave($__internal_9a1309f3474ed9e50e94825181c77655337ca3f29f75e73f7ece7f29581a2cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
