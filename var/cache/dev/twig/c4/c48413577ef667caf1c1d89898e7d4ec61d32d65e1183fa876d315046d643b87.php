<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2e366d753fa19c767eb719a9bdec877ec3bcc387f06a26830fc81bf76364037d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_4ee23f7c82ab63f124004909f5c8742346cdd7f335931482e5ec016f410c9ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee23f7c82ab63f124004909f5c8742346cdd7f335931482e5ec016f410c9ed5->enter($__internal_4ee23f7c82ab63f124004909f5c8742346cdd7f335931482e5ec016f410c9ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_b40da843886ede3c69b5a5088c42c795d1221d972e37941f638e577d59622ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40da843886ede3c69b5a5088c42c795d1221d972e37941f638e577d59622ae3->enter($__internal_b40da843886ede3c69b5a5088c42c795d1221d972e37941f638e577d59622ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee23f7c82ab63f124004909f5c8742346cdd7f335931482e5ec016f410c9ed5->leave($__internal_4ee23f7c82ab63f124004909f5c8742346cdd7f335931482e5ec016f410c9ed5_prof);

        
        $__internal_b40da843886ede3c69b5a5088c42c795d1221d972e37941f638e577d59622ae3->leave($__internal_b40da843886ede3c69b5a5088c42c795d1221d972e37941f638e577d59622ae3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2577977cbbd724c1fd0e8995eb3f618cfcb6313766663f9a530fbfe10ffb408b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2577977cbbd724c1fd0e8995eb3f618cfcb6313766663f9a530fbfe10ffb408b->enter($__internal_2577977cbbd724c1fd0e8995eb3f618cfcb6313766663f9a530fbfe10ffb408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7066767d9f749109039600c0b4c47a97becd978aa5024a81f28cd53773e8ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7066767d9f749109039600c0b4c47a97becd978aa5024a81f28cd53773e8ca4->enter($__internal_d7066767d9f749109039600c0b4c47a97becd978aa5024a81f28cd53773e8ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d7066767d9f749109039600c0b4c47a97becd978aa5024a81f28cd53773e8ca4->leave($__internal_d7066767d9f749109039600c0b4c47a97becd978aa5024a81f28cd53773e8ca4_prof);

        
        $__internal_2577977cbbd724c1fd0e8995eb3f618cfcb6313766663f9a530fbfe10ffb408b->leave($__internal_2577977cbbd724c1fd0e8995eb3f618cfcb6313766663f9a530fbfe10ffb408b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
