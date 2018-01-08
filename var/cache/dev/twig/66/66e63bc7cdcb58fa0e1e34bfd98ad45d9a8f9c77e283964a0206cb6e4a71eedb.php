<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_1e8ec9ddd9b5440f2a03bcd0e29ba58e661e016c255d5370710fbc308768c7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8ec9ddd9b5440f2a03bcd0e29ba58e661e016c255d5370710fbc308768c7ca->enter($__internal_1e8ec9ddd9b5440f2a03bcd0e29ba58e661e016c255d5370710fbc308768c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3c633c94845755db8a6e31a1c488999bc28b9724e5c0a8f4440b223ac6996401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c633c94845755db8a6e31a1c488999bc28b9724e5c0a8f4440b223ac6996401->enter($__internal_3c633c94845755db8a6e31a1c488999bc28b9724e5c0a8f4440b223ac6996401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1e8ec9ddd9b5440f2a03bcd0e29ba58e661e016c255d5370710fbc308768c7ca->leave($__internal_1e8ec9ddd9b5440f2a03bcd0e29ba58e661e016c255d5370710fbc308768c7ca_prof);

        
        $__internal_3c633c94845755db8a6e31a1c488999bc28b9724e5c0a8f4440b223ac6996401->leave($__internal_3c633c94845755db8a6e31a1c488999bc28b9724e5c0a8f4440b223ac6996401_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
