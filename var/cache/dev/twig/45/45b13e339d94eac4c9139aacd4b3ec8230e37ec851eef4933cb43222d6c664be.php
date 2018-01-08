<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4218626ba41819b78e07e43c7cfae923de446c5b68b26fb1d29885b7bd7668d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1521d07e7c17b737fb5d875cfdb0aa8cf8cffe78d9baff44e1e6760372fd9f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1521d07e7c17b737fb5d875cfdb0aa8cf8cffe78d9baff44e1e6760372fd9f3a->enter($__internal_1521d07e7c17b737fb5d875cfdb0aa8cf8cffe78d9baff44e1e6760372fd9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f981ea2064c73bbda76c9e2344fc5bb3022f254433cd9eb877e1cf43ee64f5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f981ea2064c73bbda76c9e2344fc5bb3022f254433cd9eb877e1cf43ee64f5d0->enter($__internal_f981ea2064c73bbda76c9e2344fc5bb3022f254433cd9eb877e1cf43ee64f5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1521d07e7c17b737fb5d875cfdb0aa8cf8cffe78d9baff44e1e6760372fd9f3a->leave($__internal_1521d07e7c17b737fb5d875cfdb0aa8cf8cffe78d9baff44e1e6760372fd9f3a_prof);

        
        $__internal_f981ea2064c73bbda76c9e2344fc5bb3022f254433cd9eb877e1cf43ee64f5d0->leave($__internal_f981ea2064c73bbda76c9e2344fc5bb3022f254433cd9eb877e1cf43ee64f5d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64d5ca8a754779ec2aca3179e7417c96352566cc1c2d1676c49b51f1b9e8606f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d5ca8a754779ec2aca3179e7417c96352566cc1c2d1676c49b51f1b9e8606f->enter($__internal_64d5ca8a754779ec2aca3179e7417c96352566cc1c2d1676c49b51f1b9e8606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8da2950ff44d5c4563c1bf52814e28a413a82d96f360f067c06be0fa7364b65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da2950ff44d5c4563c1bf52814e28a413a82d96f360f067c06be0fa7364b65e->enter($__internal_8da2950ff44d5c4563c1bf52814e28a413a82d96f360f067c06be0fa7364b65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8da2950ff44d5c4563c1bf52814e28a413a82d96f360f067c06be0fa7364b65e->leave($__internal_8da2950ff44d5c4563c1bf52814e28a413a82d96f360f067c06be0fa7364b65e_prof);

        
        $__internal_64d5ca8a754779ec2aca3179e7417c96352566cc1c2d1676c49b51f1b9e8606f->leave($__internal_64d5ca8a754779ec2aca3179e7417c96352566cc1c2d1676c49b51f1b9e8606f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
