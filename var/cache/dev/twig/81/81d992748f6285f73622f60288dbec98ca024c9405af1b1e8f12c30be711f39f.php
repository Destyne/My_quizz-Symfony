<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_5c4740fd11c67159a7fb34e6b9fc356e7497e259209f5538a286403a2ec66e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4740fd11c67159a7fb34e6b9fc356e7497e259209f5538a286403a2ec66e11->enter($__internal_5c4740fd11c67159a7fb34e6b9fc356e7497e259209f5538a286403a2ec66e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b40f41102c8182331356806d1eb11c153d6991e1205716a9bf0093ff710b68d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40f41102c8182331356806d1eb11c153d6991e1205716a9bf0093ff710b68d4->enter($__internal_b40f41102c8182331356806d1eb11c153d6991e1205716a9bf0093ff710b68d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5c4740fd11c67159a7fb34e6b9fc356e7497e259209f5538a286403a2ec66e11->leave($__internal_5c4740fd11c67159a7fb34e6b9fc356e7497e259209f5538a286403a2ec66e11_prof);

        
        $__internal_b40f41102c8182331356806d1eb11c153d6991e1205716a9bf0093ff710b68d4->leave($__internal_b40f41102c8182331356806d1eb11c153d6991e1205716a9bf0093ff710b68d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
