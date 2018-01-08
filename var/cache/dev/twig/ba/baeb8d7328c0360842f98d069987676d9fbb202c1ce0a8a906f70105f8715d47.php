<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b1cf2f354ded845abb0c48c1a511458c3180716d4100ec5edfedf86428170a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5a7faed09983d5b7c47ce0c696725c6875d4bf247b9c8cfc17481267b1d18bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7faed09983d5b7c47ce0c696725c6875d4bf247b9c8cfc17481267b1d18bb9->enter($__internal_5a7faed09983d5b7c47ce0c696725c6875d4bf247b9c8cfc17481267b1d18bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_71085587996998d69f1327321ee68f75003119c92a900b337ae0633b6d189727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71085587996998d69f1327321ee68f75003119c92a900b337ae0633b6d189727->enter($__internal_71085587996998d69f1327321ee68f75003119c92a900b337ae0633b6d189727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7faed09983d5b7c47ce0c696725c6875d4bf247b9c8cfc17481267b1d18bb9->leave($__internal_5a7faed09983d5b7c47ce0c696725c6875d4bf247b9c8cfc17481267b1d18bb9_prof);

        
        $__internal_71085587996998d69f1327321ee68f75003119c92a900b337ae0633b6d189727->leave($__internal_71085587996998d69f1327321ee68f75003119c92a900b337ae0633b6d189727_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54e602a2b72c9f07ae68e220cac141d61ab6a23ac172f47bcfd3b481724a50e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e602a2b72c9f07ae68e220cac141d61ab6a23ac172f47bcfd3b481724a50e3->enter($__internal_54e602a2b72c9f07ae68e220cac141d61ab6a23ac172f47bcfd3b481724a50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d8af2c952e98ace74bafb76968d73ecf7eedb4dd478d04d8bb9c5f5753102d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8af2c952e98ace74bafb76968d73ecf7eedb4dd478d04d8bb9c5f5753102d0->enter($__internal_3d8af2c952e98ace74bafb76968d73ecf7eedb4dd478d04d8bb9c5f5753102d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3d8af2c952e98ace74bafb76968d73ecf7eedb4dd478d04d8bb9c5f5753102d0->leave($__internal_3d8af2c952e98ace74bafb76968d73ecf7eedb4dd478d04d8bb9c5f5753102d0_prof);

        
        $__internal_54e602a2b72c9f07ae68e220cac141d61ab6a23ac172f47bcfd3b481724a50e3->leave($__internal_54e602a2b72c9f07ae68e220cac141d61ab6a23ac172f47bcfd3b481724a50e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
