<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_6583f634cc3a9be68109da7b7b2dbefac916e22da7300590643043a9f7d30e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6583f634cc3a9be68109da7b7b2dbefac916e22da7300590643043a9f7d30e96->enter($__internal_6583f634cc3a9be68109da7b7b2dbefac916e22da7300590643043a9f7d30e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3b6d53fc464caf63af6810af6a86218b92c2b5d58b43032f4e4f3e3f33b28ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6d53fc464caf63af6810af6a86218b92c2b5d58b43032f4e4f3e3f33b28ca6->enter($__internal_3b6d53fc464caf63af6810af6a86218b92c2b5d58b43032f4e4f3e3f33b28ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6583f634cc3a9be68109da7b7b2dbefac916e22da7300590643043a9f7d30e96->leave($__internal_6583f634cc3a9be68109da7b7b2dbefac916e22da7300590643043a9f7d30e96_prof);

        
        $__internal_3b6d53fc464caf63af6810af6a86218b92c2b5d58b43032f4e4f3e3f33b28ca6->leave($__internal_3b6d53fc464caf63af6810af6a86218b92c2b5d58b43032f4e4f3e3f33b28ca6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
