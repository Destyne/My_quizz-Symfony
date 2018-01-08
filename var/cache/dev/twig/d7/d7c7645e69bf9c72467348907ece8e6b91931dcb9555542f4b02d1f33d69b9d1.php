<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c9c310ed2d4989158f4c6fbe19b3b79a4b292f41f53c8f2595fb6aa0ab9782a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_aff93f08647e382d2ce6cd6836f8cd6991c4957afee3f42730921830f8b7748b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff93f08647e382d2ce6cd6836f8cd6991c4957afee3f42730921830f8b7748b->enter($__internal_aff93f08647e382d2ce6cd6836f8cd6991c4957afee3f42730921830f8b7748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_c1be89077a790b61bdf7b663251a5d25b9c5b9e77c9c74026a20f859709968bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1be89077a790b61bdf7b663251a5d25b9c5b9e77c9c74026a20f859709968bb->enter($__internal_c1be89077a790b61bdf7b663251a5d25b9c5b9e77c9c74026a20f859709968bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff93f08647e382d2ce6cd6836f8cd6991c4957afee3f42730921830f8b7748b->leave($__internal_aff93f08647e382d2ce6cd6836f8cd6991c4957afee3f42730921830f8b7748b_prof);

        
        $__internal_c1be89077a790b61bdf7b663251a5d25b9c5b9e77c9c74026a20f859709968bb->leave($__internal_c1be89077a790b61bdf7b663251a5d25b9c5b9e77c9c74026a20f859709968bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fcb03ae7c3ef94407f4fb7a6da99d7f086a135d0c2bff5120d80ed6cc7dc3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcb03ae7c3ef94407f4fb7a6da99d7f086a135d0c2bff5120d80ed6cc7dc3b0->enter($__internal_4fcb03ae7c3ef94407f4fb7a6da99d7f086a135d0c2bff5120d80ed6cc7dc3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d30211c63f3aa4ab624d8042e3391a553522924c39238df3c4f7e6201e46e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d30211c63f3aa4ab624d8042e3391a553522924c39238df3c4f7e6201e46e1d->enter($__internal_2d30211c63f3aa4ab624d8042e3391a553522924c39238df3c4f7e6201e46e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2d30211c63f3aa4ab624d8042e3391a553522924c39238df3c4f7e6201e46e1d->leave($__internal_2d30211c63f3aa4ab624d8042e3391a553522924c39238df3c4f7e6201e46e1d_prof);

        
        $__internal_4fcb03ae7c3ef94407f4fb7a6da99d7f086a135d0c2bff5120d80ed6cc7dc3b0->leave($__internal_4fcb03ae7c3ef94407f4fb7a6da99d7f086a135d0c2bff5120d80ed6cc7dc3b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
