<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_50765ea9f3b79110318ff17402f2becdc00499c3164d30aa3fa085ff94ccd376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_45efe7f7379b9244d96cae2c4fb1730d20e53cf9f1c797fb229858f322709c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45efe7f7379b9244d96cae2c4fb1730d20e53cf9f1c797fb229858f322709c6e->enter($__internal_45efe7f7379b9244d96cae2c4fb1730d20e53cf9f1c797fb229858f322709c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_dabf294c1da69e6baaee4dd79ec420c8f7e7f4f637dfc1185037ec359bbb0e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabf294c1da69e6baaee4dd79ec420c8f7e7f4f637dfc1185037ec359bbb0e9a->enter($__internal_dabf294c1da69e6baaee4dd79ec420c8f7e7f4f637dfc1185037ec359bbb0e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45efe7f7379b9244d96cae2c4fb1730d20e53cf9f1c797fb229858f322709c6e->leave($__internal_45efe7f7379b9244d96cae2c4fb1730d20e53cf9f1c797fb229858f322709c6e_prof);

        
        $__internal_dabf294c1da69e6baaee4dd79ec420c8f7e7f4f637dfc1185037ec359bbb0e9a->leave($__internal_dabf294c1da69e6baaee4dd79ec420c8f7e7f4f637dfc1185037ec359bbb0e9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec46599ab58f4c5a8ee49d20906a7e4d84373079b951c3b49803f42234a802cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec46599ab58f4c5a8ee49d20906a7e4d84373079b951c3b49803f42234a802cf->enter($__internal_ec46599ab58f4c5a8ee49d20906a7e4d84373079b951c3b49803f42234a802cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1df21a1cdf277ba95287c78006f434b8777f2ee31a22d0338f17fe91fba600fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df21a1cdf277ba95287c78006f434b8777f2ee31a22d0338f17fe91fba600fa->enter($__internal_1df21a1cdf277ba95287c78006f434b8777f2ee31a22d0338f17fe91fba600fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1df21a1cdf277ba95287c78006f434b8777f2ee31a22d0338f17fe91fba600fa->leave($__internal_1df21a1cdf277ba95287c78006f434b8777f2ee31a22d0338f17fe91fba600fa_prof);

        
        $__internal_ec46599ab58f4c5a8ee49d20906a7e4d84373079b951c3b49803f42234a802cf->leave($__internal_ec46599ab58f4c5a8ee49d20906a7e4d84373079b951c3b49803f42234a802cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
