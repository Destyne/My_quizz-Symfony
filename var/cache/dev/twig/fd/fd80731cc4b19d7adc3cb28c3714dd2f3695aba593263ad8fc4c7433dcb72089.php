<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_fd0ac8a7c2f3692cc861e39650c608ae7f7e1bdf6bdb4d70d7cad552efab8fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0ac8a7c2f3692cc861e39650c608ae7f7e1bdf6bdb4d70d7cad552efab8fb2->enter($__internal_fd0ac8a7c2f3692cc861e39650c608ae7f7e1bdf6bdb4d70d7cad552efab8fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f9976698b5a98dad88cdd346ac4ecdde419afeebfa81e5d49adb426532044e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9976698b5a98dad88cdd346ac4ecdde419afeebfa81e5d49adb426532044e57->enter($__internal_f9976698b5a98dad88cdd346ac4ecdde419afeebfa81e5d49adb426532044e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fd0ac8a7c2f3692cc861e39650c608ae7f7e1bdf6bdb4d70d7cad552efab8fb2->leave($__internal_fd0ac8a7c2f3692cc861e39650c608ae7f7e1bdf6bdb4d70d7cad552efab8fb2_prof);

        
        $__internal_f9976698b5a98dad88cdd346ac4ecdde419afeebfa81e5d49adb426532044e57->leave($__internal_f9976698b5a98dad88cdd346ac4ecdde419afeebfa81e5d49adb426532044e57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
