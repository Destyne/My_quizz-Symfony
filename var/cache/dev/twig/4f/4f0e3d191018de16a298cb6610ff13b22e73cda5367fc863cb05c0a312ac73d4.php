<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26f10050c32a592b69ee2a1cae7046500e0698e5140fb55436c38c6408917fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f10050c32a592b69ee2a1cae7046500e0698e5140fb55436c38c6408917fd1->enter($__internal_26f10050c32a592b69ee2a1cae7046500e0698e5140fb55436c38c6408917fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9255b45045d4bcdb4673cdc57ea4a1752b488d5f02cd84431acf39b890381ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9255b45045d4bcdb4673cdc57ea4a1752b488d5f02cd84431acf39b890381ca8->enter($__internal_9255b45045d4bcdb4673cdc57ea4a1752b488d5f02cd84431acf39b890381ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f10050c32a592b69ee2a1cae7046500e0698e5140fb55436c38c6408917fd1->leave($__internal_26f10050c32a592b69ee2a1cae7046500e0698e5140fb55436c38c6408917fd1_prof);

        
        $__internal_9255b45045d4bcdb4673cdc57ea4a1752b488d5f02cd84431acf39b890381ca8->leave($__internal_9255b45045d4bcdb4673cdc57ea4a1752b488d5f02cd84431acf39b890381ca8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a97c4ed8b1fd20919a23988ab914b7a251774d6eef376a38f858b26bd542f6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97c4ed8b1fd20919a23988ab914b7a251774d6eef376a38f858b26bd542f6c2->enter($__internal_a97c4ed8b1fd20919a23988ab914b7a251774d6eef376a38f858b26bd542f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f137f4d7d12e2cb1cd208f70669b857ffbdd4e64185cce6b2469ce0bfede3371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f137f4d7d12e2cb1cd208f70669b857ffbdd4e64185cce6b2469ce0bfede3371->enter($__internal_f137f4d7d12e2cb1cd208f70669b857ffbdd4e64185cce6b2469ce0bfede3371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f137f4d7d12e2cb1cd208f70669b857ffbdd4e64185cce6b2469ce0bfede3371->leave($__internal_f137f4d7d12e2cb1cd208f70669b857ffbdd4e64185cce6b2469ce0bfede3371_prof);

        
        $__internal_a97c4ed8b1fd20919a23988ab914b7a251774d6eef376a38f858b26bd542f6c2->leave($__internal_a97c4ed8b1fd20919a23988ab914b7a251774d6eef376a38f858b26bd542f6c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd35655a67ce52624b4b04c11f7a84aaa3da96db4a0c85b1ef97337178009792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd35655a67ce52624b4b04c11f7a84aaa3da96db4a0c85b1ef97337178009792->enter($__internal_cd35655a67ce52624b4b04c11f7a84aaa3da96db4a0c85b1ef97337178009792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7db56ebe0ccdfda91d6f9adeb6f7ae76d2ff941486b101aededde3b7c3adfeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db56ebe0ccdfda91d6f9adeb6f7ae76d2ff941486b101aededde3b7c3adfeec->enter($__internal_7db56ebe0ccdfda91d6f9adeb6f7ae76d2ff941486b101aededde3b7c3adfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7db56ebe0ccdfda91d6f9adeb6f7ae76d2ff941486b101aededde3b7c3adfeec->leave($__internal_7db56ebe0ccdfda91d6f9adeb6f7ae76d2ff941486b101aededde3b7c3adfeec_prof);

        
        $__internal_cd35655a67ce52624b4b04c11f7a84aaa3da96db4a0c85b1ef97337178009792->leave($__internal_cd35655a67ce52624b4b04c11f7a84aaa3da96db4a0c85b1ef97337178009792_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
