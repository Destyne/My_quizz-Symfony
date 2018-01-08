<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_83166b6523147e79438fb29f3f50e2bddec8abeecfb42aec1743f7de3e8cf707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83166b6523147e79438fb29f3f50e2bddec8abeecfb42aec1743f7de3e8cf707->enter($__internal_83166b6523147e79438fb29f3f50e2bddec8abeecfb42aec1743f7de3e8cf707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ff69e11b2ae68567ae85c59f26c663e91804becd2752b77b29b2efaabd66943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff69e11b2ae68567ae85c59f26c663e91804becd2752b77b29b2efaabd66943a->enter($__internal_ff69e11b2ae68567ae85c59f26c663e91804becd2752b77b29b2efaabd66943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_83166b6523147e79438fb29f3f50e2bddec8abeecfb42aec1743f7de3e8cf707->leave($__internal_83166b6523147e79438fb29f3f50e2bddec8abeecfb42aec1743f7de3e8cf707_prof);

        
        $__internal_ff69e11b2ae68567ae85c59f26c663e91804becd2752b77b29b2efaabd66943a->leave($__internal_ff69e11b2ae68567ae85c59f26c663e91804becd2752b77b29b2efaabd66943a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
