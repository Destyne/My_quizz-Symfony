<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_57e29737864d5d1a155da16d79013bb8782d35d808a8f229af5f45245b4ffadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e29737864d5d1a155da16d79013bb8782d35d808a8f229af5f45245b4ffadb->enter($__internal_57e29737864d5d1a155da16d79013bb8782d35d808a8f229af5f45245b4ffadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cce5e214d42261b1a9779e69e677542b62bab3efd8d9b883c1d76e0753234209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce5e214d42261b1a9779e69e677542b62bab3efd8d9b883c1d76e0753234209->enter($__internal_cce5e214d42261b1a9779e69e677542b62bab3efd8d9b883c1d76e0753234209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_57e29737864d5d1a155da16d79013bb8782d35d808a8f229af5f45245b4ffadb->leave($__internal_57e29737864d5d1a155da16d79013bb8782d35d808a8f229af5f45245b4ffadb_prof);

        
        $__internal_cce5e214d42261b1a9779e69e677542b62bab3efd8d9b883c1d76e0753234209->leave($__internal_cce5e214d42261b1a9779e69e677542b62bab3efd8d9b883c1d76e0753234209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
