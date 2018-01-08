<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_7f7127611ceeecca55b4af8f8b9e04bf7c9525bb1445436d455f50675c8c9659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7127611ceeecca55b4af8f8b9e04bf7c9525bb1445436d455f50675c8c9659->enter($__internal_7f7127611ceeecca55b4af8f8b9e04bf7c9525bb1445436d455f50675c8c9659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5300547b9e4f05d52cb9a55cf9b92bf45eedfd45ff8ae564821f5ac814c3325e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5300547b9e4f05d52cb9a55cf9b92bf45eedfd45ff8ae564821f5ac814c3325e->enter($__internal_5300547b9e4f05d52cb9a55cf9b92bf45eedfd45ff8ae564821f5ac814c3325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7f7127611ceeecca55b4af8f8b9e04bf7c9525bb1445436d455f50675c8c9659->leave($__internal_7f7127611ceeecca55b4af8f8b9e04bf7c9525bb1445436d455f50675c8c9659_prof);

        
        $__internal_5300547b9e4f05d52cb9a55cf9b92bf45eedfd45ff8ae564821f5ac814c3325e->leave($__internal_5300547b9e4f05d52cb9a55cf9b92bf45eedfd45ff8ae564821f5ac814c3325e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
