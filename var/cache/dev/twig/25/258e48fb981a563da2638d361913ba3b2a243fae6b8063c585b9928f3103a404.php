<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0e2d76473b603a48adc89e0334b202fb451a8d323780127216242a6dcb050d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4b94cdce6abef880d85333ca5cb754b1e523eb711c858f6ce97fe2aa0634e5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b94cdce6abef880d85333ca5cb754b1e523eb711c858f6ce97fe2aa0634e5ed->enter($__internal_4b94cdce6abef880d85333ca5cb754b1e523eb711c858f6ce97fe2aa0634e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_801bc4a516bf6362b75081f4bcc6b56de688019f7e77ac932f2c0b7daba3af17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801bc4a516bf6362b75081f4bcc6b56de688019f7e77ac932f2c0b7daba3af17->enter($__internal_801bc4a516bf6362b75081f4bcc6b56de688019f7e77ac932f2c0b7daba3af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b94cdce6abef880d85333ca5cb754b1e523eb711c858f6ce97fe2aa0634e5ed->leave($__internal_4b94cdce6abef880d85333ca5cb754b1e523eb711c858f6ce97fe2aa0634e5ed_prof);

        
        $__internal_801bc4a516bf6362b75081f4bcc6b56de688019f7e77ac932f2c0b7daba3af17->leave($__internal_801bc4a516bf6362b75081f4bcc6b56de688019f7e77ac932f2c0b7daba3af17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a4c93a051e89eec3964958f003d71f089ac6ef956b2558b1489b63845a6fea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c93a051e89eec3964958f003d71f089ac6ef956b2558b1489b63845a6fea7->enter($__internal_4a4c93a051e89eec3964958f003d71f089ac6ef956b2558b1489b63845a6fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_870ab326c314985e473662a3cf7b431280b3cd693bb69a00ff451ae725afe3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870ab326c314985e473662a3cf7b431280b3cd693bb69a00ff451ae725afe3d9->enter($__internal_870ab326c314985e473662a3cf7b431280b3cd693bb69a00ff451ae725afe3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_870ab326c314985e473662a3cf7b431280b3cd693bb69a00ff451ae725afe3d9->leave($__internal_870ab326c314985e473662a3cf7b431280b3cd693bb69a00ff451ae725afe3d9_prof);

        
        $__internal_4a4c93a051e89eec3964958f003d71f089ac6ef956b2558b1489b63845a6fea7->leave($__internal_4a4c93a051e89eec3964958f003d71f089ac6ef956b2558b1489b63845a6fea7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
