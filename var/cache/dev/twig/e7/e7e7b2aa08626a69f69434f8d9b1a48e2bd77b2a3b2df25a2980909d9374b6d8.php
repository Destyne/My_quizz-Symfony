<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_6055ca5890bce357a4b69feaaad672b8d5e59697cf6cb84685628424e0f50b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6055ca5890bce357a4b69feaaad672b8d5e59697cf6cb84685628424e0f50b5b->enter($__internal_6055ca5890bce357a4b69feaaad672b8d5e59697cf6cb84685628424e0f50b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e676ce4e723b03b021d0c54944520affe3265a999ffc9579e66bf4319f4ab254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e676ce4e723b03b021d0c54944520affe3265a999ffc9579e66bf4319f4ab254->enter($__internal_e676ce4e723b03b021d0c54944520affe3265a999ffc9579e66bf4319f4ab254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6055ca5890bce357a4b69feaaad672b8d5e59697cf6cb84685628424e0f50b5b->leave($__internal_6055ca5890bce357a4b69feaaad672b8d5e59697cf6cb84685628424e0f50b5b_prof);

        
        $__internal_e676ce4e723b03b021d0c54944520affe3265a999ffc9579e66bf4319f4ab254->leave($__internal_e676ce4e723b03b021d0c54944520affe3265a999ffc9579e66bf4319f4ab254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
