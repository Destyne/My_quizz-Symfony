<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_a18d9c13e0d53ef59abef51f9fece41ef5ca9433b0c1304d60d40621f58cc4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18d9c13e0d53ef59abef51f9fece41ef5ca9433b0c1304d60d40621f58cc4cd->enter($__internal_a18d9c13e0d53ef59abef51f9fece41ef5ca9433b0c1304d60d40621f58cc4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2d8045aa2e6740ccb3d030893b6ce33072a63667c1a91514e24b1541444beb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8045aa2e6740ccb3d030893b6ce33072a63667c1a91514e24b1541444beb7c->enter($__internal_2d8045aa2e6740ccb3d030893b6ce33072a63667c1a91514e24b1541444beb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a18d9c13e0d53ef59abef51f9fece41ef5ca9433b0c1304d60d40621f58cc4cd->leave($__internal_a18d9c13e0d53ef59abef51f9fece41ef5ca9433b0c1304d60d40621f58cc4cd_prof);

        
        $__internal_2d8045aa2e6740ccb3d030893b6ce33072a63667c1a91514e24b1541444beb7c->leave($__internal_2d8045aa2e6740ccb3d030893b6ce33072a63667c1a91514e24b1541444beb7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
