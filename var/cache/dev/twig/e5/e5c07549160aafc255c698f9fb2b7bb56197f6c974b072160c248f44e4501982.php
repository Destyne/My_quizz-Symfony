<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_53c0c3ecb0d43fe392f22492c319c47e3dde117d9247c505a3cb0d6ed7ca3231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae633cd88ac17eab08e6e9186a2039147c494fdca5236d5c2b1c52141897a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae633cd88ac17eab08e6e9186a2039147c494fdca5236d5c2b1c52141897a2c->enter($__internal_2ae633cd88ac17eab08e6e9186a2039147c494fdca5236d5c2b1c52141897a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ec7bded444b94e09e6dca6ae5c0909ba1366aeff879de520684ee25574efaaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7bded444b94e09e6dca6ae5c0909ba1366aeff879de520684ee25574efaaf7->enter($__internal_ec7bded444b94e09e6dca6ae5c0909ba1366aeff879de520684ee25574efaaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2ae633cd88ac17eab08e6e9186a2039147c494fdca5236d5c2b1c52141897a2c->leave($__internal_2ae633cd88ac17eab08e6e9186a2039147c494fdca5236d5c2b1c52141897a2c_prof);

        
        $__internal_ec7bded444b94e09e6dca6ae5c0909ba1366aeff879de520684ee25574efaaf7->leave($__internal_ec7bded444b94e09e6dca6ae5c0909ba1366aeff879de520684ee25574efaaf7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_42300aeeb8096b7f0b7ca7b86fb1c4dacd0ab65786d5b302b66b40e189a91edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42300aeeb8096b7f0b7ca7b86fb1c4dacd0ab65786d5b302b66b40e189a91edb->enter($__internal_42300aeeb8096b7f0b7ca7b86fb1c4dacd0ab65786d5b302b66b40e189a91edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c61274c353cf516203b530e4e1209586b58eb0b850b038dd66d8eec571b0ee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61274c353cf516203b530e4e1209586b58eb0b850b038dd66d8eec571b0ee39->enter($__internal_c61274c353cf516203b530e4e1209586b58eb0b850b038dd66d8eec571b0ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c61274c353cf516203b530e4e1209586b58eb0b850b038dd66d8eec571b0ee39->leave($__internal_c61274c353cf516203b530e4e1209586b58eb0b850b038dd66d8eec571b0ee39_prof);

        
        $__internal_42300aeeb8096b7f0b7ca7b86fb1c4dacd0ab65786d5b302b66b40e189a91edb->leave($__internal_42300aeeb8096b7f0b7ca7b86fb1c4dacd0ab65786d5b302b66b40e189a91edb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f3a327077ab13da874cec0e81342bc9d0997be4dca70e56656a0a05620b1366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3a327077ab13da874cec0e81342bc9d0997be4dca70e56656a0a05620b1366->enter($__internal_7f3a327077ab13da874cec0e81342bc9d0997be4dca70e56656a0a05620b1366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_49350f1bb6be90607ac5d72b41155666886f2aed12bc8cf7570ec2f17641c0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49350f1bb6be90607ac5d72b41155666886f2aed12bc8cf7570ec2f17641c0e8->enter($__internal_49350f1bb6be90607ac5d72b41155666886f2aed12bc8cf7570ec2f17641c0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49350f1bb6be90607ac5d72b41155666886f2aed12bc8cf7570ec2f17641c0e8->leave($__internal_49350f1bb6be90607ac5d72b41155666886f2aed12bc8cf7570ec2f17641c0e8_prof);

        
        $__internal_7f3a327077ab13da874cec0e81342bc9d0997be4dca70e56656a0a05620b1366->leave($__internal_7f3a327077ab13da874cec0e81342bc9d0997be4dca70e56656a0a05620b1366_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dc23b21b0128f3243b913bd7ea854e4b96d38608e47d665de20d778621a2a745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc23b21b0128f3243b913bd7ea854e4b96d38608e47d665de20d778621a2a745->enter($__internal_dc23b21b0128f3243b913bd7ea854e4b96d38608e47d665de20d778621a2a745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_384f7e1b7eea5e7a13bcc001e26fae15a9f89beb7ffa5f89672725534eb4ff73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384f7e1b7eea5e7a13bcc001e26fae15a9f89beb7ffa5f89672725534eb4ff73->enter($__internal_384f7e1b7eea5e7a13bcc001e26fae15a9f89beb7ffa5f89672725534eb4ff73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_384f7e1b7eea5e7a13bcc001e26fae15a9f89beb7ffa5f89672725534eb4ff73->leave($__internal_384f7e1b7eea5e7a13bcc001e26fae15a9f89beb7ffa5f89672725534eb4ff73_prof);

        
        $__internal_dc23b21b0128f3243b913bd7ea854e4b96d38608e47d665de20d778621a2a745->leave($__internal_dc23b21b0128f3243b913bd7ea854e4b96d38608e47d665de20d778621a2a745_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
