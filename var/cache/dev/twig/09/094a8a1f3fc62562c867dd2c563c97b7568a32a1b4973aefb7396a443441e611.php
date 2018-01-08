<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_dfefb4d62a234bb003d5b7fcd416fba4f09626b0e542a497292d3c1560615b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfefb4d62a234bb003d5b7fcd416fba4f09626b0e542a497292d3c1560615b06->enter($__internal_dfefb4d62a234bb003d5b7fcd416fba4f09626b0e542a497292d3c1560615b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fa9a2a5cbdf86f1b25b35e4aa2b355788d4cbe4ca10ce0095e5264fe55ffbb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9a2a5cbdf86f1b25b35e4aa2b355788d4cbe4ca10ce0095e5264fe55ffbb6c->enter($__internal_fa9a2a5cbdf86f1b25b35e4aa2b355788d4cbe4ca10ce0095e5264fe55ffbb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_dfefb4d62a234bb003d5b7fcd416fba4f09626b0e542a497292d3c1560615b06->leave($__internal_dfefb4d62a234bb003d5b7fcd416fba4f09626b0e542a497292d3c1560615b06_prof);

        
        $__internal_fa9a2a5cbdf86f1b25b35e4aa2b355788d4cbe4ca10ce0095e5264fe55ffbb6c->leave($__internal_fa9a2a5cbdf86f1b25b35e4aa2b355788d4cbe4ca10ce0095e5264fe55ffbb6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
