<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_42aecd02efa02d0f96db70b0a84a4a8eea02dfbd2dc3ae2f695dbb6468f6af8d extends Twig_Template
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
        $__internal_58ff73d6ad39a29cee774757b55a062723ba5f7fcf03efb64d46253951c4e4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ff73d6ad39a29cee774757b55a062723ba5f7fcf03efb64d46253951c4e4dc->enter($__internal_58ff73d6ad39a29cee774757b55a062723ba5f7fcf03efb64d46253951c4e4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f8756920d38fcd3ddecebd954e690d0b22b74e0cc7ec1ffe8d5636ba72b0ce3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8756920d38fcd3ddecebd954e690d0b22b74e0cc7ec1ffe8d5636ba72b0ce3f->enter($__internal_f8756920d38fcd3ddecebd954e690d0b22b74e0cc7ec1ffe8d5636ba72b0ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_58ff73d6ad39a29cee774757b55a062723ba5f7fcf03efb64d46253951c4e4dc->leave($__internal_58ff73d6ad39a29cee774757b55a062723ba5f7fcf03efb64d46253951c4e4dc_prof);

        
        $__internal_f8756920d38fcd3ddecebd954e690d0b22b74e0cc7ec1ffe8d5636ba72b0ce3f->leave($__internal_f8756920d38fcd3ddecebd954e690d0b22b74e0cc7ec1ffe8d5636ba72b0ce3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
