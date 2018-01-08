<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_2493de7b59a1b4d7e9dd934196fe16ad0509b5a7c818bf19e0e521f546bcb01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2493de7b59a1b4d7e9dd934196fe16ad0509b5a7c818bf19e0e521f546bcb01c->enter($__internal_2493de7b59a1b4d7e9dd934196fe16ad0509b5a7c818bf19e0e521f546bcb01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8c6ad65177483581a31f5e8fb5b97876f28021f1ecab8e318eddc9f21f42c43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6ad65177483581a31f5e8fb5b97876f28021f1ecab8e318eddc9f21f42c43b->enter($__internal_8c6ad65177483581a31f5e8fb5b97876f28021f1ecab8e318eddc9f21f42c43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2493de7b59a1b4d7e9dd934196fe16ad0509b5a7c818bf19e0e521f546bcb01c->leave($__internal_2493de7b59a1b4d7e9dd934196fe16ad0509b5a7c818bf19e0e521f546bcb01c_prof);

        
        $__internal_8c6ad65177483581a31f5e8fb5b97876f28021f1ecab8e318eddc9f21f42c43b->leave($__internal_8c6ad65177483581a31f5e8fb5b97876f28021f1ecab8e318eddc9f21f42c43b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
