<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1c6822d9a8f4fdf939a4db024ebaa2dff418ef3630b0e8273f1ea2238b65b93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bf583da41d62f1af7e9f7c32d5e61ca924c61ade671ab5ff032bf98e3b3864ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf583da41d62f1af7e9f7c32d5e61ca924c61ade671ab5ff032bf98e3b3864ce->enter($__internal_bf583da41d62f1af7e9f7c32d5e61ca924c61ade671ab5ff032bf98e3b3864ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_a4ab36be2b47247263c521778ab2776583e43094cb7d1b6f881aa62ba3b31588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ab36be2b47247263c521778ab2776583e43094cb7d1b6f881aa62ba3b31588->enter($__internal_a4ab36be2b47247263c521778ab2776583e43094cb7d1b6f881aa62ba3b31588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf583da41d62f1af7e9f7c32d5e61ca924c61ade671ab5ff032bf98e3b3864ce->leave($__internal_bf583da41d62f1af7e9f7c32d5e61ca924c61ade671ab5ff032bf98e3b3864ce_prof);

        
        $__internal_a4ab36be2b47247263c521778ab2776583e43094cb7d1b6f881aa62ba3b31588->leave($__internal_a4ab36be2b47247263c521778ab2776583e43094cb7d1b6f881aa62ba3b31588_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f02b245996cca866f7da8f05b87bc97bf264e0517c3a5fc435663b7598146943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02b245996cca866f7da8f05b87bc97bf264e0517c3a5fc435663b7598146943->enter($__internal_f02b245996cca866f7da8f05b87bc97bf264e0517c3a5fc435663b7598146943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cdadaaef0561162d60c3de09563f94de1a0c870eb1043541e6a7dbebff06423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdadaaef0561162d60c3de09563f94de1a0c870eb1043541e6a7dbebff06423->enter($__internal_8cdadaaef0561162d60c3de09563f94de1a0c870eb1043541e6a7dbebff06423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8cdadaaef0561162d60c3de09563f94de1a0c870eb1043541e6a7dbebff06423->leave($__internal_8cdadaaef0561162d60c3de09563f94de1a0c870eb1043541e6a7dbebff06423_prof);

        
        $__internal_f02b245996cca866f7da8f05b87bc97bf264e0517c3a5fc435663b7598146943->leave($__internal_f02b245996cca866f7da8f05b87bc97bf264e0517c3a5fc435663b7598146943_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
