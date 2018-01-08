<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab9730e35983afa27d803eb25cc958eaf8a67eeea77da919481a238404f068c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9730e35983afa27d803eb25cc958eaf8a67eeea77da919481a238404f068c2->enter($__internal_ab9730e35983afa27d803eb25cc958eaf8a67eeea77da919481a238404f068c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f9152df9ecdb39d7f36dbbdd1ad67f02897e5b99281b7444d4f79d9f84149cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9152df9ecdb39d7f36dbbdd1ad67f02897e5b99281b7444d4f79d9f84149cb9->enter($__internal_f9152df9ecdb39d7f36dbbdd1ad67f02897e5b99281b7444d4f79d9f84149cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_ab9730e35983afa27d803eb25cc958eaf8a67eeea77da919481a238404f068c2->leave($__internal_ab9730e35983afa27d803eb25cc958eaf8a67eeea77da919481a238404f068c2_prof);

        
        $__internal_f9152df9ecdb39d7f36dbbdd1ad67f02897e5b99281b7444d4f79d9f84149cb9->leave($__internal_f9152df9ecdb39d7f36dbbdd1ad67f02897e5b99281b7444d4f79d9f84149cb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c09861a07a6acab4cbcdff4051f9f97a290740841a46b90913ea56bba72a1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c09861a07a6acab4cbcdff4051f9f97a290740841a46b90913ea56bba72a1ba->enter($__internal_7c09861a07a6acab4cbcdff4051f9f97a290740841a46b90913ea56bba72a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a853315ec15f7e51744d62460ad6c3062c18cfbdc7bbeff28ca07119e2b2ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a853315ec15f7e51744d62460ad6c3062c18cfbdc7bbeff28ca07119e2b2ca3->enter($__internal_2a853315ec15f7e51744d62460ad6c3062c18cfbdc7bbeff28ca07119e2b2ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a853315ec15f7e51744d62460ad6c3062c18cfbdc7bbeff28ca07119e2b2ca3->leave($__internal_2a853315ec15f7e51744d62460ad6c3062c18cfbdc7bbeff28ca07119e2b2ca3_prof);

        
        $__internal_7c09861a07a6acab4cbcdff4051f9f97a290740841a46b90913ea56bba72a1ba->leave($__internal_7c09861a07a6acab4cbcdff4051f9f97a290740841a46b90913ea56bba72a1ba_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19c2a095ff4bc64e9641c9ee73ad2e8ba094bac7bfa0ff93941269ab496b40d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c2a095ff4bc64e9641c9ee73ad2e8ba094bac7bfa0ff93941269ab496b40d8->enter($__internal_19c2a095ff4bc64e9641c9ee73ad2e8ba094bac7bfa0ff93941269ab496b40d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc74d1517565491253f28cdbe9fb0b75f4df1f3f367e04ab08b23c97c12c3bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc74d1517565491253f28cdbe9fb0b75f4df1f3f367e04ab08b23c97c12c3bab->enter($__internal_fc74d1517565491253f28cdbe9fb0b75f4df1f3f367e04ab08b23c97c12c3bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/style.css"), "html", null, true);
        echo "\">";
        
        $__internal_fc74d1517565491253f28cdbe9fb0b75f4df1f3f367e04ab08b23c97c12c3bab->leave($__internal_fc74d1517565491253f28cdbe9fb0b75f4df1f3f367e04ab08b23c97c12c3bab_prof);

        
        $__internal_19c2a095ff4bc64e9641c9ee73ad2e8ba094bac7bfa0ff93941269ab496b40d8->leave($__internal_19c2a095ff4bc64e9641c9ee73ad2e8ba094bac7bfa0ff93941269ab496b40d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d097900c5a73890dce9499560cb635ee49cfe29ad927144c1e7bf9bc1413139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d097900c5a73890dce9499560cb635ee49cfe29ad927144c1e7bf9bc1413139->enter($__internal_2d097900c5a73890dce9499560cb635ee49cfe29ad927144c1e7bf9bc1413139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adc1adf6794d78f01f73dc533bb28a56885cd2cb4abd19eb25461d4dd7a0dd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc1adf6794d78f01f73dc533bb28a56885cd2cb4abd19eb25461d4dd7a0dd45->enter($__internal_adc1adf6794d78f01f73dc533bb28a56885cd2cb4abd19eb25461d4dd7a0dd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adc1adf6794d78f01f73dc533bb28a56885cd2cb4abd19eb25461d4dd7a0dd45->leave($__internal_adc1adf6794d78f01f73dc533bb28a56885cd2cb4abd19eb25461d4dd7a0dd45_prof);

        
        $__internal_2d097900c5a73890dce9499560cb635ee49cfe29ad927144c1e7bf9bc1413139->leave($__internal_2d097900c5a73890dce9499560cb635ee49cfe29ad927144c1e7bf9bc1413139_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cb1c31694c61b97479549bdda2679208259b26ddd9595273b89b6547765a059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb1c31694c61b97479549bdda2679208259b26ddd9595273b89b6547765a059->enter($__internal_1cb1c31694c61b97479549bdda2679208259b26ddd9595273b89b6547765a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba109d63d7cb1031dc2b5114483e2d086f9e8c1696eb98eceb4e797af3da5bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba109d63d7cb1031dc2b5114483e2d086f9e8c1696eb98eceb4e797af3da5bea->enter($__internal_ba109d63d7cb1031dc2b5114483e2d086f9e8c1696eb98eceb4e797af3da5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba109d63d7cb1031dc2b5114483e2d086f9e8c1696eb98eceb4e797af3da5bea->leave($__internal_ba109d63d7cb1031dc2b5114483e2d086f9e8c1696eb98eceb4e797af3da5bea_prof);

        
        $__internal_1cb1c31694c61b97479549bdda2679208259b26ddd9595273b89b6547765a059->leave($__internal_1cb1c31694c61b97479549bdda2679208259b26ddd9595273b89b6547765a059_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  84 => 7,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  42 => 8,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        {% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('asset/style.css')}}\">{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/charles/Bureau/quizz/app/Resources/views/base.html.twig");
    }
}
