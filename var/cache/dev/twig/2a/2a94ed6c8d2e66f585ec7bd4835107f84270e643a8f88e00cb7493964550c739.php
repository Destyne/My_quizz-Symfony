<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_fbdeb27518376a1091957fc9599cac19ff272dc209903abe9e717299a58a281f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdeb27518376a1091957fc9599cac19ff272dc209903abe9e717299a58a281f->enter($__internal_fbdeb27518376a1091957fc9599cac19ff272dc209903abe9e717299a58a281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_07cff59716ffa93c2bbff494b88f0b1597882a500c7be662b54fc6ed7de47852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cff59716ffa93c2bbff494b88f0b1597882a500c7be662b54fc6ed7de47852->enter($__internal_07cff59716ffa93c2bbff494b88f0b1597882a500c7be662b54fc6ed7de47852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fbdeb27518376a1091957fc9599cac19ff272dc209903abe9e717299a58a281f->leave($__internal_fbdeb27518376a1091957fc9599cac19ff272dc209903abe9e717299a58a281f_prof);

        
        $__internal_07cff59716ffa93c2bbff494b88f0b1597882a500c7be662b54fc6ed7de47852->leave($__internal_07cff59716ffa93c2bbff494b88f0b1597882a500c7be662b54fc6ed7de47852_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
