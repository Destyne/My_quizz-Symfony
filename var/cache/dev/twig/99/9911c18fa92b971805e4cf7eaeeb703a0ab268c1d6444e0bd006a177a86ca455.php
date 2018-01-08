<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_2d7337b2192a1ef49c8891a4d7405309c29dfc72f406bd69c808d0d543e9d9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7337b2192a1ef49c8891a4d7405309c29dfc72f406bd69c808d0d543e9d9ff->enter($__internal_2d7337b2192a1ef49c8891a4d7405309c29dfc72f406bd69c808d0d543e9d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b9aaf0a836dd070581a8300d6536ae76ab61aa5d5f8cc39c73c903513268683f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9aaf0a836dd070581a8300d6536ae76ab61aa5d5f8cc39c73c903513268683f->enter($__internal_b9aaf0a836dd070581a8300d6536ae76ab61aa5d5f8cc39c73c903513268683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2d7337b2192a1ef49c8891a4d7405309c29dfc72f406bd69c808d0d543e9d9ff->leave($__internal_2d7337b2192a1ef49c8891a4d7405309c29dfc72f406bd69c808d0d543e9d9ff_prof);

        
        $__internal_b9aaf0a836dd070581a8300d6536ae76ab61aa5d5f8cc39c73c903513268683f->leave($__internal_b9aaf0a836dd070581a8300d6536ae76ab61aa5d5f8cc39c73c903513268683f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
