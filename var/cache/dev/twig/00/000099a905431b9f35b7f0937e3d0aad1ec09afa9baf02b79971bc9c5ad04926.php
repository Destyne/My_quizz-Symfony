<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_fca8a99f33d37894b9e7a5c2e62a2e4fa9d1eed3967ac7779a7b083874fce2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca8a99f33d37894b9e7a5c2e62a2e4fa9d1eed3967ac7779a7b083874fce2af->enter($__internal_fca8a99f33d37894b9e7a5c2e62a2e4fa9d1eed3967ac7779a7b083874fce2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bcf28ddc1b05cb0ff777dd22754df421ba86eda1d74f180bce92e94d9f14de75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf28ddc1b05cb0ff777dd22754df421ba86eda1d74f180bce92e94d9f14de75->enter($__internal_bcf28ddc1b05cb0ff777dd22754df421ba86eda1d74f180bce92e94d9f14de75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fca8a99f33d37894b9e7a5c2e62a2e4fa9d1eed3967ac7779a7b083874fce2af->leave($__internal_fca8a99f33d37894b9e7a5c2e62a2e4fa9d1eed3967ac7779a7b083874fce2af_prof);

        
        $__internal_bcf28ddc1b05cb0ff777dd22754df421ba86eda1d74f180bce92e94d9f14de75->leave($__internal_bcf28ddc1b05cb0ff777dd22754df421ba86eda1d74f180bce92e94d9f14de75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
