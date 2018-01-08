<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_97f631c2a9dfbf4c6568ac19848c8a5206e08f14c45bb901774d9561fc152b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f631c2a9dfbf4c6568ac19848c8a5206e08f14c45bb901774d9561fc152b50->enter($__internal_97f631c2a9dfbf4c6568ac19848c8a5206e08f14c45bb901774d9561fc152b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_57678c96eef6396441bb3656b6f31e3721108fc8c6c3d2d3bb7e5cfa3155a323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57678c96eef6396441bb3656b6f31e3721108fc8c6c3d2d3bb7e5cfa3155a323->enter($__internal_57678c96eef6396441bb3656b6f31e3721108fc8c6c3d2d3bb7e5cfa3155a323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_97f631c2a9dfbf4c6568ac19848c8a5206e08f14c45bb901774d9561fc152b50->leave($__internal_97f631c2a9dfbf4c6568ac19848c8a5206e08f14c45bb901774d9561fc152b50_prof);

        
        $__internal_57678c96eef6396441bb3656b6f31e3721108fc8c6c3d2d3bb7e5cfa3155a323->leave($__internal_57678c96eef6396441bb3656b6f31e3721108fc8c6c3d2d3bb7e5cfa3155a323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
