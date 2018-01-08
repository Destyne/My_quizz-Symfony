<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_884286d8d0455d7b3b8800d15524a4f4afe100418ecb85901b2e3108e9830036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f44a0e35bde36c40028a0e4f2477f7c170bd25a0ca49cb1dca1a36b58717cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f44a0e35bde36c40028a0e4f2477f7c170bd25a0ca49cb1dca1a36b58717cd6->enter($__internal_3f44a0e35bde36c40028a0e4f2477f7c170bd25a0ca49cb1dca1a36b58717cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a841141967552220e51376e8d8f984cdf62d1424d7827fbb5e719b656e2cb4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a841141967552220e51376e8d8f984cdf62d1424d7827fbb5e719b656e2cb4a0->enter($__internal_a841141967552220e51376e8d8f984cdf62d1424d7827fbb5e719b656e2cb4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f44a0e35bde36c40028a0e4f2477f7c170bd25a0ca49cb1dca1a36b58717cd6->leave($__internal_3f44a0e35bde36c40028a0e4f2477f7c170bd25a0ca49cb1dca1a36b58717cd6_prof);

        
        $__internal_a841141967552220e51376e8d8f984cdf62d1424d7827fbb5e719b656e2cb4a0->leave($__internal_a841141967552220e51376e8d8f984cdf62d1424d7827fbb5e719b656e2cb4a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68087ac7e6b97f809a1247b337133fd7f7305e34339ca362ba8f67e8b9deb342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68087ac7e6b97f809a1247b337133fd7f7305e34339ca362ba8f67e8b9deb342->enter($__internal_68087ac7e6b97f809a1247b337133fd7f7305e34339ca362ba8f67e8b9deb342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a8ede0fe1749c0e7e71a5d2038d08d4954b0617cbf0dd17a41af8135bdb5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8ede0fe1749c0e7e71a5d2038d08d4954b0617cbf0dd17a41af8135bdb5328->enter($__internal_4a8ede0fe1749c0e7e71a5d2038d08d4954b0617cbf0dd17a41af8135bdb5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4a8ede0fe1749c0e7e71a5d2038d08d4954b0617cbf0dd17a41af8135bdb5328->leave($__internal_4a8ede0fe1749c0e7e71a5d2038d08d4954b0617cbf0dd17a41af8135bdb5328_prof);

        
        $__internal_68087ac7e6b97f809a1247b337133fd7f7305e34339ca362ba8f67e8b9deb342->leave($__internal_68087ac7e6b97f809a1247b337133fd7f7305e34339ca362ba8f67e8b9deb342_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
