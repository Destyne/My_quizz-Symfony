<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_67f25f1c8bc246e26d3a351a8bee6351793ef937eaffbce8e5412b83c6665301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f25f1c8bc246e26d3a351a8bee6351793ef937eaffbce8e5412b83c6665301->enter($__internal_67f25f1c8bc246e26d3a351a8bee6351793ef937eaffbce8e5412b83c6665301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e49508f23804fc0cfc3b5b04c504c87107e41c5e57b4038273ada7d00023c98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49508f23804fc0cfc3b5b04c504c87107e41c5e57b4038273ada7d00023c98c->enter($__internal_e49508f23804fc0cfc3b5b04c504c87107e41c5e57b4038273ada7d00023c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_67f25f1c8bc246e26d3a351a8bee6351793ef937eaffbce8e5412b83c6665301->leave($__internal_67f25f1c8bc246e26d3a351a8bee6351793ef937eaffbce8e5412b83c6665301_prof);

        
        $__internal_e49508f23804fc0cfc3b5b04c504c87107e41c5e57b4038273ada7d00023c98c->leave($__internal_e49508f23804fc0cfc3b5b04c504c87107e41c5e57b4038273ada7d00023c98c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
