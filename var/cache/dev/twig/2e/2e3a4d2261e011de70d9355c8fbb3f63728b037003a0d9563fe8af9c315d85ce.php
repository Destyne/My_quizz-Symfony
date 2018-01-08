<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bedb03c0ae372d0efef86e0ad0ad8a12aa1820a4d4cd2897f7bf1b18a7f45c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_298acfb680612edaac87610c070ee74f662698263304d7449ea4ecad82dd3751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298acfb680612edaac87610c070ee74f662698263304d7449ea4ecad82dd3751->enter($__internal_298acfb680612edaac87610c070ee74f662698263304d7449ea4ecad82dd3751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_bb696d9cb3edaf57e6eda88eaded78482503fd8625c76019497afcc29c823b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb696d9cb3edaf57e6eda88eaded78482503fd8625c76019497afcc29c823b90->enter($__internal_bb696d9cb3edaf57e6eda88eaded78482503fd8625c76019497afcc29c823b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_298acfb680612edaac87610c070ee74f662698263304d7449ea4ecad82dd3751->leave($__internal_298acfb680612edaac87610c070ee74f662698263304d7449ea4ecad82dd3751_prof);

        
        $__internal_bb696d9cb3edaf57e6eda88eaded78482503fd8625c76019497afcc29c823b90->leave($__internal_bb696d9cb3edaf57e6eda88eaded78482503fd8625c76019497afcc29c823b90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e6cb68aaa713a2424052e2761bb8a086c739f89da8ecf100f85ad4a1206a1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6cb68aaa713a2424052e2761bb8a086c739f89da8ecf100f85ad4a1206a1a2->enter($__internal_3e6cb68aaa713a2424052e2761bb8a086c739f89da8ecf100f85ad4a1206a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3348086efb76dfbfc402f4e178498cadc770739a6194f5ff980b9d25cf8a2df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3348086efb76dfbfc402f4e178498cadc770739a6194f5ff980b9d25cf8a2df2->enter($__internal_3348086efb76dfbfc402f4e178498cadc770739a6194f5ff980b9d25cf8a2df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3348086efb76dfbfc402f4e178498cadc770739a6194f5ff980b9d25cf8a2df2->leave($__internal_3348086efb76dfbfc402f4e178498cadc770739a6194f5ff980b9d25cf8a2df2_prof);

        
        $__internal_3e6cb68aaa713a2424052e2761bb8a086c739f89da8ecf100f85ad4a1206a1a2->leave($__internal_3e6cb68aaa713a2424052e2761bb8a086c739f89da8ecf100f85ad4a1206a1a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
