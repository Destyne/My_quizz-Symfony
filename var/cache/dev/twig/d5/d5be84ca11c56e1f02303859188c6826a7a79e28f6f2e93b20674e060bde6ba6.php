<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ba4a55da40b5e971f2fc756c081464f90bc30b40b6fd3bccd867a1147a9ae87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba4a55da40b5e971f2fc756c081464f90bc30b40b6fd3bccd867a1147a9ae87->enter($__internal_3ba4a55da40b5e971f2fc756c081464f90bc30b40b6fd3bccd867a1147a9ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_65424ee0d482169f805ac606213e5eeec51f2cfa74babd9f82f31326dd9381f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65424ee0d482169f805ac606213e5eeec51f2cfa74babd9f82f31326dd9381f8->enter($__internal_65424ee0d482169f805ac606213e5eeec51f2cfa74babd9f82f31326dd9381f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba4a55da40b5e971f2fc756c081464f90bc30b40b6fd3bccd867a1147a9ae87->leave($__internal_3ba4a55da40b5e971f2fc756c081464f90bc30b40b6fd3bccd867a1147a9ae87_prof);

        
        $__internal_65424ee0d482169f805ac606213e5eeec51f2cfa74babd9f82f31326dd9381f8->leave($__internal_65424ee0d482169f805ac606213e5eeec51f2cfa74babd9f82f31326dd9381f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50e30493b117f7ffed983ef65b180977b8735315ea92aa3b31d8be16f2021c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e30493b117f7ffed983ef65b180977b8735315ea92aa3b31d8be16f2021c36->enter($__internal_50e30493b117f7ffed983ef65b180977b8735315ea92aa3b31d8be16f2021c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac1f0f9c1ac5e9a565a33c8f6948bfeff1e685e72652cd2134259074d042e6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1f0f9c1ac5e9a565a33c8f6948bfeff1e685e72652cd2134259074d042e6f1->enter($__internal_ac1f0f9c1ac5e9a565a33c8f6948bfeff1e685e72652cd2134259074d042e6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ac1f0f9c1ac5e9a565a33c8f6948bfeff1e685e72652cd2134259074d042e6f1->leave($__internal_ac1f0f9c1ac5e9a565a33c8f6948bfeff1e685e72652cd2134259074d042e6f1_prof);

        
        $__internal_50e30493b117f7ffed983ef65b180977b8735315ea92aa3b31d8be16f2021c36->leave($__internal_50e30493b117f7ffed983ef65b180977b8735315ea92aa3b31d8be16f2021c36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_271c515496d5ed9b3ece74e8d0751c18622b1e56eb743ebe46f1ed4210a0e21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271c515496d5ed9b3ece74e8d0751c18622b1e56eb743ebe46f1ed4210a0e21b->enter($__internal_271c515496d5ed9b3ece74e8d0751c18622b1e56eb743ebe46f1ed4210a0e21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5add0a41f5df1ed11ad6abdaac7d030de3120d1b9ab7c4b840d35cd7dbf9183d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5add0a41f5df1ed11ad6abdaac7d030de3120d1b9ab7c4b840d35cd7dbf9183d->enter($__internal_5add0a41f5df1ed11ad6abdaac7d030de3120d1b9ab7c4b840d35cd7dbf9183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5add0a41f5df1ed11ad6abdaac7d030de3120d1b9ab7c4b840d35cd7dbf9183d->leave($__internal_5add0a41f5df1ed11ad6abdaac7d030de3120d1b9ab7c4b840d35cd7dbf9183d_prof);

        
        $__internal_271c515496d5ed9b3ece74e8d0751c18622b1e56eb743ebe46f1ed4210a0e21b->leave($__internal_271c515496d5ed9b3ece74e8d0751c18622b1e56eb743ebe46f1ed4210a0e21b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eaf7b0541b4ab3885a15e381a096c78d026025a49d4a075dad31c6db2a1749b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf7b0541b4ab3885a15e381a096c78d026025a49d4a075dad31c6db2a1749b7->enter($__internal_eaf7b0541b4ab3885a15e381a096c78d026025a49d4a075dad31c6db2a1749b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b971bb48b980c280cb21a25c1ea09c286eb0cbe7690d28dfb75fbedb6071dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b971bb48b980c280cb21a25c1ea09c286eb0cbe7690d28dfb75fbedb6071dd7->enter($__internal_4b971bb48b980c280cb21a25c1ea09c286eb0cbe7690d28dfb75fbedb6071dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4b971bb48b980c280cb21a25c1ea09c286eb0cbe7690d28dfb75fbedb6071dd7->leave($__internal_4b971bb48b980c280cb21a25c1ea09c286eb0cbe7690d28dfb75fbedb6071dd7_prof);

        
        $__internal_eaf7b0541b4ab3885a15e381a096c78d026025a49d4a075dad31c6db2a1749b7->leave($__internal_eaf7b0541b4ab3885a15e381a096c78d026025a49d4a075dad31c6db2a1749b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
