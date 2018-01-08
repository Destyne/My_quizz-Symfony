<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_630743e2773a2dbb5df0d158af150638c68e0a18779e13eb71ff9e826dabb643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_72973676a118c573b5a097879395ad06c04618b0cf0cb4c879ab57232ca03be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72973676a118c573b5a097879395ad06c04618b0cf0cb4c879ab57232ca03be1->enter($__internal_72973676a118c573b5a097879395ad06c04618b0cf0cb4c879ab57232ca03be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_99254fe71f2b08ec600d1e0f3e1f1c83bea52b894344f08b9c5d26362b54b72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99254fe71f2b08ec600d1e0f3e1f1c83bea52b894344f08b9c5d26362b54b72d->enter($__internal_99254fe71f2b08ec600d1e0f3e1f1c83bea52b894344f08b9c5d26362b54b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72973676a118c573b5a097879395ad06c04618b0cf0cb4c879ab57232ca03be1->leave($__internal_72973676a118c573b5a097879395ad06c04618b0cf0cb4c879ab57232ca03be1_prof);

        
        $__internal_99254fe71f2b08ec600d1e0f3e1f1c83bea52b894344f08b9c5d26362b54b72d->leave($__internal_99254fe71f2b08ec600d1e0f3e1f1c83bea52b894344f08b9c5d26362b54b72d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0be149700922f4bf27b8c1e642e360ab19fa7170677315186f6d043aa9d791c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be149700922f4bf27b8c1e642e360ab19fa7170677315186f6d043aa9d791c1->enter($__internal_0be149700922f4bf27b8c1e642e360ab19fa7170677315186f6d043aa9d791c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_731bcd93adc96a699417c5dd62f5ba67cb9f31e3ed5b8cb27129ce1ce972a959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731bcd93adc96a699417c5dd62f5ba67cb9f31e3ed5b8cb27129ce1ce972a959->enter($__internal_731bcd93adc96a699417c5dd62f5ba67cb9f31e3ed5b8cb27129ce1ce972a959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_731bcd93adc96a699417c5dd62f5ba67cb9f31e3ed5b8cb27129ce1ce972a959->leave($__internal_731bcd93adc96a699417c5dd62f5ba67cb9f31e3ed5b8cb27129ce1ce972a959_prof);

        
        $__internal_0be149700922f4bf27b8c1e642e360ab19fa7170677315186f6d043aa9d791c1->leave($__internal_0be149700922f4bf27b8c1e642e360ab19fa7170677315186f6d043aa9d791c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
