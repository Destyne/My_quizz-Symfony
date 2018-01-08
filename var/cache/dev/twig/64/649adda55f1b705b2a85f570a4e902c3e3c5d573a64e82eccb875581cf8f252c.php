<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_faa100ad662099444967db6d6367604d0b17d52045b77d8e62490a14ae9fc620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa100ad662099444967db6d6367604d0b17d52045b77d8e62490a14ae9fc620->enter($__internal_faa100ad662099444967db6d6367604d0b17d52045b77d8e62490a14ae9fc620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3071eaa81fffc27d9704b62ae0254a361d3d44410364853f4c25a52ead29045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3071eaa81fffc27d9704b62ae0254a361d3d44410364853f4c25a52ead29045b->enter($__internal_3071eaa81fffc27d9704b62ae0254a361d3d44410364853f4c25a52ead29045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa100ad662099444967db6d6367604d0b17d52045b77d8e62490a14ae9fc620->leave($__internal_faa100ad662099444967db6d6367604d0b17d52045b77d8e62490a14ae9fc620_prof);

        
        $__internal_3071eaa81fffc27d9704b62ae0254a361d3d44410364853f4c25a52ead29045b->leave($__internal_3071eaa81fffc27d9704b62ae0254a361d3d44410364853f4c25a52ead29045b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb98ba725378c5d452f6ba52580c6b9771a24ae2e409880a2edc6578ac9090db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb98ba725378c5d452f6ba52580c6b9771a24ae2e409880a2edc6578ac9090db->enter($__internal_eb98ba725378c5d452f6ba52580c6b9771a24ae2e409880a2edc6578ac9090db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9fda4ba8c19c96a186abfc1b084d07b69285f39a345d5dac01fc741ce171bd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fda4ba8c19c96a186abfc1b084d07b69285f39a345d5dac01fc741ce171bd22->enter($__internal_9fda4ba8c19c96a186abfc1b084d07b69285f39a345d5dac01fc741ce171bd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fda4ba8c19c96a186abfc1b084d07b69285f39a345d5dac01fc741ce171bd22->leave($__internal_9fda4ba8c19c96a186abfc1b084d07b69285f39a345d5dac01fc741ce171bd22_prof);

        
        $__internal_eb98ba725378c5d452f6ba52580c6b9771a24ae2e409880a2edc6578ac9090db->leave($__internal_eb98ba725378c5d452f6ba52580c6b9771a24ae2e409880a2edc6578ac9090db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf91b97bfb9a94b0ca03f4ee6bfa49398ca9249c51e60c096d4e6e7678264614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf91b97bfb9a94b0ca03f4ee6bfa49398ca9249c51e60c096d4e6e7678264614->enter($__internal_cf91b97bfb9a94b0ca03f4ee6bfa49398ca9249c51e60c096d4e6e7678264614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1df2c0c5648b158f570e0f98b1883e2079c97d3c543fcc3c8fd7ef581af0d0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df2c0c5648b158f570e0f98b1883e2079c97d3c543fcc3c8fd7ef581af0d0ee->enter($__internal_1df2c0c5648b158f570e0f98b1883e2079c97d3c543fcc3c8fd7ef581af0d0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1df2c0c5648b158f570e0f98b1883e2079c97d3c543fcc3c8fd7ef581af0d0ee->leave($__internal_1df2c0c5648b158f570e0f98b1883e2079c97d3c543fcc3c8fd7ef581af0d0ee_prof);

        
        $__internal_cf91b97bfb9a94b0ca03f4ee6bfa49398ca9249c51e60c096d4e6e7678264614->leave($__internal_cf91b97bfb9a94b0ca03f4ee6bfa49398ca9249c51e60c096d4e6e7678264614_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0af747d2338e9985b17a0934f4b49c48746421dc754790497bac343c23deee9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af747d2338e9985b17a0934f4b49c48746421dc754790497bac343c23deee9a->enter($__internal_0af747d2338e9985b17a0934f4b49c48746421dc754790497bac343c23deee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24535e4b93e351ac85bc6a7a4d5febabb22bab7debb97dda6ed409a7b6825fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24535e4b93e351ac85bc6a7a4d5febabb22bab7debb97dda6ed409a7b6825fd0->enter($__internal_24535e4b93e351ac85bc6a7a4d5febabb22bab7debb97dda6ed409a7b6825fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24535e4b93e351ac85bc6a7a4d5febabb22bab7debb97dda6ed409a7b6825fd0->leave($__internal_24535e4b93e351ac85bc6a7a4d5febabb22bab7debb97dda6ed409a7b6825fd0_prof);

        
        $__internal_0af747d2338e9985b17a0934f4b49c48746421dc754790497bac343c23deee9a->leave($__internal_0af747d2338e9985b17a0934f4b49c48746421dc754790497bac343c23deee9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
