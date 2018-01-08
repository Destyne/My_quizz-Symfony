<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_323a28c01f285f9c3cce3b970a26a8ca979c58d6f787ff5cecd99cb05cbd7e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323a28c01f285f9c3cce3b970a26a8ca979c58d6f787ff5cecd99cb05cbd7e79->enter($__internal_323a28c01f285f9c3cce3b970a26a8ca979c58d6f787ff5cecd99cb05cbd7e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5bce3b9c37a5cee30f126d6386858d444795cd0fe7cd3f85c22924562b3af083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bce3b9c37a5cee30f126d6386858d444795cd0fe7cd3f85c22924562b3af083->enter($__internal_5bce3b9c37a5cee30f126d6386858d444795cd0fe7cd3f85c22924562b3af083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_323a28c01f285f9c3cce3b970a26a8ca979c58d6f787ff5cecd99cb05cbd7e79->leave($__internal_323a28c01f285f9c3cce3b970a26a8ca979c58d6f787ff5cecd99cb05cbd7e79_prof);

        
        $__internal_5bce3b9c37a5cee30f126d6386858d444795cd0fe7cd3f85c22924562b3af083->leave($__internal_5bce3b9c37a5cee30f126d6386858d444795cd0fe7cd3f85c22924562b3af083_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
