<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_b69b264926d292a40b7e670c389611e6496c1c85ae8cc8a7d8998ac5e45da1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69b264926d292a40b7e670c389611e6496c1c85ae8cc8a7d8998ac5e45da1e4->enter($__internal_b69b264926d292a40b7e670c389611e6496c1c85ae8cc8a7d8998ac5e45da1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_deb0748f7e8540c98fc61c41a749f76d71f8a9d827b580c044ca99c7a6827d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb0748f7e8540c98fc61c41a749f76d71f8a9d827b580c044ca99c7a6827d2f->enter($__internal_deb0748f7e8540c98fc61c41a749f76d71f8a9d827b580c044ca99c7a6827d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b69b264926d292a40b7e670c389611e6496c1c85ae8cc8a7d8998ac5e45da1e4->leave($__internal_b69b264926d292a40b7e670c389611e6496c1c85ae8cc8a7d8998ac5e45da1e4_prof);

        
        $__internal_deb0748f7e8540c98fc61c41a749f76d71f8a9d827b580c044ca99c7a6827d2f->leave($__internal_deb0748f7e8540c98fc61c41a749f76d71f8a9d827b580c044ca99c7a6827d2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
