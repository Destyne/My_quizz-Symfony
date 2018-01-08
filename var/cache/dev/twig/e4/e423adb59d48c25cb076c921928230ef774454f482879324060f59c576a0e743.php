<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b2169b9c4bc7f76a56d628036f73235d20fd5f61026a2b4041dbff9e9226fb1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9f2cec7c8c5cb525e0123847338117e23fa218d59d3fffd2a3e03a7a3988b330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2cec7c8c5cb525e0123847338117e23fa218d59d3fffd2a3e03a7a3988b330->enter($__internal_9f2cec7c8c5cb525e0123847338117e23fa218d59d3fffd2a3e03a7a3988b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_9052b3706cbddb54d335c22e6f71654c4d77d7d325faef00cadcd2c93936f429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9052b3706cbddb54d335c22e6f71654c4d77d7d325faef00cadcd2c93936f429->enter($__internal_9052b3706cbddb54d335c22e6f71654c4d77d7d325faef00cadcd2c93936f429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2cec7c8c5cb525e0123847338117e23fa218d59d3fffd2a3e03a7a3988b330->leave($__internal_9f2cec7c8c5cb525e0123847338117e23fa218d59d3fffd2a3e03a7a3988b330_prof);

        
        $__internal_9052b3706cbddb54d335c22e6f71654c4d77d7d325faef00cadcd2c93936f429->leave($__internal_9052b3706cbddb54d335c22e6f71654c4d77d7d325faef00cadcd2c93936f429_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c44058379f43e242b9f666ec1d4781d8a6a836bf21f7459b2acdb48ba031861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c44058379f43e242b9f666ec1d4781d8a6a836bf21f7459b2acdb48ba031861->enter($__internal_6c44058379f43e242b9f666ec1d4781d8a6a836bf21f7459b2acdb48ba031861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a825ba07bd6e0464cadfbe6bad21aa93342ec83153ae367a3a9c22cbb7958f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a825ba07bd6e0464cadfbe6bad21aa93342ec83153ae367a3a9c22cbb7958f0b->enter($__internal_a825ba07bd6e0464cadfbe6bad21aa93342ec83153ae367a3a9c22cbb7958f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a825ba07bd6e0464cadfbe6bad21aa93342ec83153ae367a3a9c22cbb7958f0b->leave($__internal_a825ba07bd6e0464cadfbe6bad21aa93342ec83153ae367a3a9c22cbb7958f0b_prof);

        
        $__internal_6c44058379f43e242b9f666ec1d4781d8a6a836bf21f7459b2acdb48ba031861->leave($__internal_6c44058379f43e242b9f666ec1d4781d8a6a836bf21f7459b2acdb48ba031861_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
