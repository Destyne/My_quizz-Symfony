<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_6b80d1da1a216c515dda08d8643b6d96a3edc9e6d49592b76150b5e5b945265b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b80d1da1a216c515dda08d8643b6d96a3edc9e6d49592b76150b5e5b945265b->enter($__internal_6b80d1da1a216c515dda08d8643b6d96a3edc9e6d49592b76150b5e5b945265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_65249c1c1a893129c4224906aba36a18f679358b80cb0fb86eaf41e47d0c1916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65249c1c1a893129c4224906aba36a18f679358b80cb0fb86eaf41e47d0c1916->enter($__internal_65249c1c1a893129c4224906aba36a18f679358b80cb0fb86eaf41e47d0c1916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6b80d1da1a216c515dda08d8643b6d96a3edc9e6d49592b76150b5e5b945265b->leave($__internal_6b80d1da1a216c515dda08d8643b6d96a3edc9e6d49592b76150b5e5b945265b_prof);

        
        $__internal_65249c1c1a893129c4224906aba36a18f679358b80cb0fb86eaf41e47d0c1916->leave($__internal_65249c1c1a893129c4224906aba36a18f679358b80cb0fb86eaf41e47d0c1916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
