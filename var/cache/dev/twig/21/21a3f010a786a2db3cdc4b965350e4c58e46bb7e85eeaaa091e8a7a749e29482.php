<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21e90d31ad490cf70cd8c09e4ea433fd5e62d4ea6b16611fe1ba7c14ba029d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e90d31ad490cf70cd8c09e4ea433fd5e62d4ea6b16611fe1ba7c14ba029d9d->enter($__internal_21e90d31ad490cf70cd8c09e4ea433fd5e62d4ea6b16611fe1ba7c14ba029d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e44d8e458e268d977f4c02ca751966da98359ba44dee1d889514ff19eb612376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44d8e458e268d977f4c02ca751966da98359ba44dee1d889514ff19eb612376->enter($__internal_e44d8e458e268d977f4c02ca751966da98359ba44dee1d889514ff19eb612376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e90d31ad490cf70cd8c09e4ea433fd5e62d4ea6b16611fe1ba7c14ba029d9d->leave($__internal_21e90d31ad490cf70cd8c09e4ea433fd5e62d4ea6b16611fe1ba7c14ba029d9d_prof);

        
        $__internal_e44d8e458e268d977f4c02ca751966da98359ba44dee1d889514ff19eb612376->leave($__internal_e44d8e458e268d977f4c02ca751966da98359ba44dee1d889514ff19eb612376_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9adc6894abdc4bbb95d6c9f1e8a602b3fed4093b29a73089dcb12102c7f9783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9adc6894abdc4bbb95d6c9f1e8a602b3fed4093b29a73089dcb12102c7f9783->enter($__internal_a9adc6894abdc4bbb95d6c9f1e8a602b3fed4093b29a73089dcb12102c7f9783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba511cf0010950a176cf82b0a65017220ece4f81f99e9e82bc89743ca5b36f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba511cf0010950a176cf82b0a65017220ece4f81f99e9e82bc89743ca5b36f9f->enter($__internal_ba511cf0010950a176cf82b0a65017220ece4f81f99e9e82bc89743ca5b36f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ba511cf0010950a176cf82b0a65017220ece4f81f99e9e82bc89743ca5b36f9f->leave($__internal_ba511cf0010950a176cf82b0a65017220ece4f81f99e9e82bc89743ca5b36f9f_prof);

        
        $__internal_a9adc6894abdc4bbb95d6c9f1e8a602b3fed4093b29a73089dcb12102c7f9783->leave($__internal_a9adc6894abdc4bbb95d6c9f1e8a602b3fed4093b29a73089dcb12102c7f9783_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6c3139e9ad8032906b541fb34889cc26d34e202476b15dc81f1466fe6880afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c3139e9ad8032906b541fb34889cc26d34e202476b15dc81f1466fe6880afa->enter($__internal_c6c3139e9ad8032906b541fb34889cc26d34e202476b15dc81f1466fe6880afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e6259ed9f09e35545317a1367224df09cf724bd1ecc63fd9ee964268ad53a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6259ed9f09e35545317a1367224df09cf724bd1ecc63fd9ee964268ad53a6c->enter($__internal_1e6259ed9f09e35545317a1367224df09cf724bd1ecc63fd9ee964268ad53a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1e6259ed9f09e35545317a1367224df09cf724bd1ecc63fd9ee964268ad53a6c->leave($__internal_1e6259ed9f09e35545317a1367224df09cf724bd1ecc63fd9ee964268ad53a6c_prof);

        
        $__internal_c6c3139e9ad8032906b541fb34889cc26d34e202476b15dc81f1466fe6880afa->leave($__internal_c6c3139e9ad8032906b541fb34889cc26d34e202476b15dc81f1466fe6880afa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
