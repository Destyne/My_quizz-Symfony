<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b5cbb50e91384bd890599fb144479580974df60c58c423de6448a48c534963fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_37b6d25b39b7cc394059e9bb5cc884d82eb93a5950ff9e92ddd2106cf802f7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b6d25b39b7cc394059e9bb5cc884d82eb93a5950ff9e92ddd2106cf802f7ad->enter($__internal_37b6d25b39b7cc394059e9bb5cc884d82eb93a5950ff9e92ddd2106cf802f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_cc3cf13691eb7687c1888976ab68a471b198bc8cfff461a9dda00d626339e92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3cf13691eb7687c1888976ab68a471b198bc8cfff461a9dda00d626339e92e->enter($__internal_cc3cf13691eb7687c1888976ab68a471b198bc8cfff461a9dda00d626339e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b6d25b39b7cc394059e9bb5cc884d82eb93a5950ff9e92ddd2106cf802f7ad->leave($__internal_37b6d25b39b7cc394059e9bb5cc884d82eb93a5950ff9e92ddd2106cf802f7ad_prof);

        
        $__internal_cc3cf13691eb7687c1888976ab68a471b198bc8cfff461a9dda00d626339e92e->leave($__internal_cc3cf13691eb7687c1888976ab68a471b198bc8cfff461a9dda00d626339e92e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f08996440afd20a3ef5eb8c83b8228e071e2f6d07485f9bb05a4eeaad9cdc565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08996440afd20a3ef5eb8c83b8228e071e2f6d07485f9bb05a4eeaad9cdc565->enter($__internal_f08996440afd20a3ef5eb8c83b8228e071e2f6d07485f9bb05a4eeaad9cdc565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc9913a82db8ce5938cd09643b327b59094c01337609163d5bdd929a73ce40b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9913a82db8ce5938cd09643b327b59094c01337609163d5bdd929a73ce40b3->enter($__internal_dc9913a82db8ce5938cd09643b327b59094c01337609163d5bdd929a73ce40b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_dc9913a82db8ce5938cd09643b327b59094c01337609163d5bdd929a73ce40b3->leave($__internal_dc9913a82db8ce5938cd09643b327b59094c01337609163d5bdd929a73ce40b3_prof);

        
        $__internal_f08996440afd20a3ef5eb8c83b8228e071e2f6d07485f9bb05a4eeaad9cdc565->leave($__internal_f08996440afd20a3ef5eb8c83b8228e071e2f6d07485f9bb05a4eeaad9cdc565_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
