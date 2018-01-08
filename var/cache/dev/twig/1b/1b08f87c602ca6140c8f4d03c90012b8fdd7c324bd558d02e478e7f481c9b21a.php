<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6bbc21acc8215253987fcbf5574d3233c717afc93b46ae7baf8ecfee5aac9d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbc21acc8215253987fcbf5574d3233c717afc93b46ae7baf8ecfee5aac9d44->enter($__internal_6bbc21acc8215253987fcbf5574d3233c717afc93b46ae7baf8ecfee5aac9d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_41b7a7a3d349f298f6fcf03bfbcb909bc9508067082b371d3f3777fb8784e145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b7a7a3d349f298f6fcf03bfbcb909bc9508067082b371d3f3777fb8784e145->enter($__internal_41b7a7a3d349f298f6fcf03bfbcb909bc9508067082b371d3f3777fb8784e145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bbc21acc8215253987fcbf5574d3233c717afc93b46ae7baf8ecfee5aac9d44->leave($__internal_6bbc21acc8215253987fcbf5574d3233c717afc93b46ae7baf8ecfee5aac9d44_prof);

        
        $__internal_41b7a7a3d349f298f6fcf03bfbcb909bc9508067082b371d3f3777fb8784e145->leave($__internal_41b7a7a3d349f298f6fcf03bfbcb909bc9508067082b371d3f3777fb8784e145_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53689f97707a879880ba508e72a85de7df802c35d55fec3c207d414fe749770c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53689f97707a879880ba508e72a85de7df802c35d55fec3c207d414fe749770c->enter($__internal_53689f97707a879880ba508e72a85de7df802c35d55fec3c207d414fe749770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a89f10b40e4251bca11033c5b3fbd7de15eec31e52c6ee157bd57dc2bcf96db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a89f10b40e4251bca11033c5b3fbd7de15eec31e52c6ee157bd57dc2bcf96db->enter($__internal_9a89f10b40e4251bca11033c5b3fbd7de15eec31e52c6ee157bd57dc2bcf96db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9a89f10b40e4251bca11033c5b3fbd7de15eec31e52c6ee157bd57dc2bcf96db->leave($__internal_9a89f10b40e4251bca11033c5b3fbd7de15eec31e52c6ee157bd57dc2bcf96db_prof);

        
        $__internal_53689f97707a879880ba508e72a85de7df802c35d55fec3c207d414fe749770c->leave($__internal_53689f97707a879880ba508e72a85de7df802c35d55fec3c207d414fe749770c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b59ab359f8dded5115660b2bfe113394a6b78db3f1ad79b6174955f3601d8dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59ab359f8dded5115660b2bfe113394a6b78db3f1ad79b6174955f3601d8dfc->enter($__internal_b59ab359f8dded5115660b2bfe113394a6b78db3f1ad79b6174955f3601d8dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af5abe00d9bfd7f8cdc31015597f1dea8b8dca72e340a509133b281f4b065ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5abe00d9bfd7f8cdc31015597f1dea8b8dca72e340a509133b281f4b065ba8->enter($__internal_af5abe00d9bfd7f8cdc31015597f1dea8b8dca72e340a509133b281f4b065ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af5abe00d9bfd7f8cdc31015597f1dea8b8dca72e340a509133b281f4b065ba8->leave($__internal_af5abe00d9bfd7f8cdc31015597f1dea8b8dca72e340a509133b281f4b065ba8_prof);

        
        $__internal_b59ab359f8dded5115660b2bfe113394a6b78db3f1ad79b6174955f3601d8dfc->leave($__internal_b59ab359f8dded5115660b2bfe113394a6b78db3f1ad79b6174955f3601d8dfc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aef64fdffa5ded75baa6ee8b16f408146489b94672d32eef0225134b070360b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aef64fdffa5ded75baa6ee8b16f408146489b94672d32eef0225134b070360b->enter($__internal_7aef64fdffa5ded75baa6ee8b16f408146489b94672d32eef0225134b070360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a4f7b5fb101456a07014bf6822a3758d492ff4891b0b4138d50290afde0b053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4f7b5fb101456a07014bf6822a3758d492ff4891b0b4138d50290afde0b053->enter($__internal_7a4f7b5fb101456a07014bf6822a3758d492ff4891b0b4138d50290afde0b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7a4f7b5fb101456a07014bf6822a3758d492ff4891b0b4138d50290afde0b053->leave($__internal_7a4f7b5fb101456a07014bf6822a3758d492ff4891b0b4138d50290afde0b053_prof);

        
        $__internal_7aef64fdffa5ded75baa6ee8b16f408146489b94672d32eef0225134b070360b->leave($__internal_7aef64fdffa5ded75baa6ee8b16f408146489b94672d32eef0225134b070360b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
