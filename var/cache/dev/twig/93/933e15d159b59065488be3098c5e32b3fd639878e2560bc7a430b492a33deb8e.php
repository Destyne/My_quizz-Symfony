<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d3e789350eb51dd8a2d24edc1f26df5968c34310287476b2fea0183b40525815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f46857335476f249f0347f239089f22343ea02788425c38b702825590082c683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46857335476f249f0347f239089f22343ea02788425c38b702825590082c683->enter($__internal_f46857335476f249f0347f239089f22343ea02788425c38b702825590082c683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6c4de6ab16e7b0f867bca4a5c8fff197cb05b57232a0f17237deeb41efcc38ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4de6ab16e7b0f867bca4a5c8fff197cb05b57232a0f17237deeb41efcc38ea->enter($__internal_6c4de6ab16e7b0f867bca4a5c8fff197cb05b57232a0f17237deeb41efcc38ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46857335476f249f0347f239089f22343ea02788425c38b702825590082c683->leave($__internal_f46857335476f249f0347f239089f22343ea02788425c38b702825590082c683_prof);

        
        $__internal_6c4de6ab16e7b0f867bca4a5c8fff197cb05b57232a0f17237deeb41efcc38ea->leave($__internal_6c4de6ab16e7b0f867bca4a5c8fff197cb05b57232a0f17237deeb41efcc38ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14054cc7387cdcc2a65d23c0eb8abb8ea459b77429dc656ee7edde5617f00706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14054cc7387cdcc2a65d23c0eb8abb8ea459b77429dc656ee7edde5617f00706->enter($__internal_14054cc7387cdcc2a65d23c0eb8abb8ea459b77429dc656ee7edde5617f00706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_448f5f188ce910e8830bc5136ebfc1005e5c2edfc5890a5bba3f0d2653dbd48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448f5f188ce910e8830bc5136ebfc1005e5c2edfc5890a5bba3f0d2653dbd48c->enter($__internal_448f5f188ce910e8830bc5136ebfc1005e5c2edfc5890a5bba3f0d2653dbd48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_448f5f188ce910e8830bc5136ebfc1005e5c2edfc5890a5bba3f0d2653dbd48c->leave($__internal_448f5f188ce910e8830bc5136ebfc1005e5c2edfc5890a5bba3f0d2653dbd48c_prof);

        
        $__internal_14054cc7387cdcc2a65d23c0eb8abb8ea459b77429dc656ee7edde5617f00706->leave($__internal_14054cc7387cdcc2a65d23c0eb8abb8ea459b77429dc656ee7edde5617f00706_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
