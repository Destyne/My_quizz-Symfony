<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_2e3e9bc6214ed19b4594bbf8baa26f0e417ad2f2ac98b6495b8e45f805df1c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3e9bc6214ed19b4594bbf8baa26f0e417ad2f2ac98b6495b8e45f805df1c9f->enter($__internal_2e3e9bc6214ed19b4594bbf8baa26f0e417ad2f2ac98b6495b8e45f805df1c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6852987329f68c99669f17d328de435a8efb1861750a7b5c6174393236f4cf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6852987329f68c99669f17d328de435a8efb1861750a7b5c6174393236f4cf2c->enter($__internal_6852987329f68c99669f17d328de435a8efb1861750a7b5c6174393236f4cf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2e3e9bc6214ed19b4594bbf8baa26f0e417ad2f2ac98b6495b8e45f805df1c9f->leave($__internal_2e3e9bc6214ed19b4594bbf8baa26f0e417ad2f2ac98b6495b8e45f805df1c9f_prof);

        
        $__internal_6852987329f68c99669f17d328de435a8efb1861750a7b5c6174393236f4cf2c->leave($__internal_6852987329f68c99669f17d328de435a8efb1861750a7b5c6174393236f4cf2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
