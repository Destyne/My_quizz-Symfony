<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f4cf12cd7cc88091b0a15ba09b622e31484a001157f3f1767d3eecb20c2ea144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cf12cd7cc88091b0a15ba09b622e31484a001157f3f1767d3eecb20c2ea144->enter($__internal_f4cf12cd7cc88091b0a15ba09b622e31484a001157f3f1767d3eecb20c2ea144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_5a7499d73edc7aca15472a2245949a422b63ba4dc900fa80e42c236f2373c9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7499d73edc7aca15472a2245949a422b63ba4dc900fa80e42c236f2373c9fd->enter($__internal_5a7499d73edc7aca15472a2245949a422b63ba4dc900fa80e42c236f2373c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cf12cd7cc88091b0a15ba09b622e31484a001157f3f1767d3eecb20c2ea144->leave($__internal_f4cf12cd7cc88091b0a15ba09b622e31484a001157f3f1767d3eecb20c2ea144_prof);

        
        $__internal_5a7499d73edc7aca15472a2245949a422b63ba4dc900fa80e42c236f2373c9fd->leave($__internal_5a7499d73edc7aca15472a2245949a422b63ba4dc900fa80e42c236f2373c9fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6a70cb93476fd02e43b68ef4ab4dc96b250f6f7f43bfbdfc7f163812970649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a70cb93476fd02e43b68ef4ab4dc96b250f6f7f43bfbdfc7f163812970649e->enter($__internal_a6a70cb93476fd02e43b68ef4ab4dc96b250f6f7f43bfbdfc7f163812970649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76e82536ac80433b0ddc8b4817be7e8d9c6c4bfe2aa172893262e33015fc33b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e82536ac80433b0ddc8b4817be7e8d9c6c4bfe2aa172893262e33015fc33b2->enter($__internal_76e82536ac80433b0ddc8b4817be7e8d9c6c4bfe2aa172893262e33015fc33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_76e82536ac80433b0ddc8b4817be7e8d9c6c4bfe2aa172893262e33015fc33b2->leave($__internal_76e82536ac80433b0ddc8b4817be7e8d9c6c4bfe2aa172893262e33015fc33b2_prof);

        
        $__internal_a6a70cb93476fd02e43b68ef4ab4dc96b250f6f7f43bfbdfc7f163812970649e->leave($__internal_a6a70cb93476fd02e43b68ef4ab4dc96b250f6f7f43bfbdfc7f163812970649e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
