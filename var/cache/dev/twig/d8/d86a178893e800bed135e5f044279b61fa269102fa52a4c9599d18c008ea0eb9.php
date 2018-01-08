<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_f87c5e06664d2b6966041b75ee882b673b106eb2201a165897d438ae5eaba3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87c5e06664d2b6966041b75ee882b673b106eb2201a165897d438ae5eaba3c4->enter($__internal_f87c5e06664d2b6966041b75ee882b673b106eb2201a165897d438ae5eaba3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5d24d7d73b034dfe7f22f44aa381ad5bff5349f2b70c138f58e2443e8c334050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d24d7d73b034dfe7f22f44aa381ad5bff5349f2b70c138f58e2443e8c334050->enter($__internal_5d24d7d73b034dfe7f22f44aa381ad5bff5349f2b70c138f58e2443e8c334050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f87c5e06664d2b6966041b75ee882b673b106eb2201a165897d438ae5eaba3c4->leave($__internal_f87c5e06664d2b6966041b75ee882b673b106eb2201a165897d438ae5eaba3c4_prof);

        
        $__internal_5d24d7d73b034dfe7f22f44aa381ad5bff5349f2b70c138f58e2443e8c334050->leave($__internal_5d24d7d73b034dfe7f22f44aa381ad5bff5349f2b70c138f58e2443e8c334050_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
