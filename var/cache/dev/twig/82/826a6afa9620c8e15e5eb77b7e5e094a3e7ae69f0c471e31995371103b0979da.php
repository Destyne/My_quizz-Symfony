<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_f3a268db9102c90c9d6d13b3a9beb36d7599d02b9a54aae8fc77d53b13731ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a268db9102c90c9d6d13b3a9beb36d7599d02b9a54aae8fc77d53b13731ec7->enter($__internal_f3a268db9102c90c9d6d13b3a9beb36d7599d02b9a54aae8fc77d53b13731ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_88f199d588e773f6a73fa758bbaa0d3c6a0aeb5a3806b1ad2a3a5c69c80eaa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f199d588e773f6a73fa758bbaa0d3c6a0aeb5a3806b1ad2a3a5c69c80eaa7b->enter($__internal_88f199d588e773f6a73fa758bbaa0d3c6a0aeb5a3806b1ad2a3a5c69c80eaa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f3a268db9102c90c9d6d13b3a9beb36d7599d02b9a54aae8fc77d53b13731ec7->leave($__internal_f3a268db9102c90c9d6d13b3a9beb36d7599d02b9a54aae8fc77d53b13731ec7_prof);

        
        $__internal_88f199d588e773f6a73fa758bbaa0d3c6a0aeb5a3806b1ad2a3a5c69c80eaa7b->leave($__internal_88f199d588e773f6a73fa758bbaa0d3c6a0aeb5a3806b1ad2a3a5c69c80eaa7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
