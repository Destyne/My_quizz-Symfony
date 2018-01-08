<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_902bd3ff368c9684e921378089b8d0452d46bc41b823bd0ec748189703e51fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902bd3ff368c9684e921378089b8d0452d46bc41b823bd0ec748189703e51fd3->enter($__internal_902bd3ff368c9684e921378089b8d0452d46bc41b823bd0ec748189703e51fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_295c255f214ccab1155fdc108a23e90bda3697022449c90427c2e69182a5102a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295c255f214ccab1155fdc108a23e90bda3697022449c90427c2e69182a5102a->enter($__internal_295c255f214ccab1155fdc108a23e90bda3697022449c90427c2e69182a5102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902bd3ff368c9684e921378089b8d0452d46bc41b823bd0ec748189703e51fd3->leave($__internal_902bd3ff368c9684e921378089b8d0452d46bc41b823bd0ec748189703e51fd3_prof);

        
        $__internal_295c255f214ccab1155fdc108a23e90bda3697022449c90427c2e69182a5102a->leave($__internal_295c255f214ccab1155fdc108a23e90bda3697022449c90427c2e69182a5102a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_17127fdb73569aa3f6c94c596e195a523c5b411bae003885f9aa5ac75d93d1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17127fdb73569aa3f6c94c596e195a523c5b411bae003885f9aa5ac75d93d1ff->enter($__internal_17127fdb73569aa3f6c94c596e195a523c5b411bae003885f9aa5ac75d93d1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7a1cda95189796ce29dd50c62c6af020ca13b978f50f9f2cad2be7620cfaa6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1cda95189796ce29dd50c62c6af020ca13b978f50f9f2cad2be7620cfaa6e1->enter($__internal_7a1cda95189796ce29dd50c62c6af020ca13b978f50f9f2cad2be7620cfaa6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7a1cda95189796ce29dd50c62c6af020ca13b978f50f9f2cad2be7620cfaa6e1->leave($__internal_7a1cda95189796ce29dd50c62c6af020ca13b978f50f9f2cad2be7620cfaa6e1_prof);

        
        $__internal_17127fdb73569aa3f6c94c596e195a523c5b411bae003885f9aa5ac75d93d1ff->leave($__internal_17127fdb73569aa3f6c94c596e195a523c5b411bae003885f9aa5ac75d93d1ff_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e7c3b603d6bf889ed475352f73cf75147f497788ded5e06f529ebfa11196e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7c3b603d6bf889ed475352f73cf75147f497788ded5e06f529ebfa11196e16->enter($__internal_1e7c3b603d6bf889ed475352f73cf75147f497788ded5e06f529ebfa11196e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae1072497d3f0539d905c0084e59e56e7bce602c4fc3c690d46de856bbcafb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1072497d3f0539d905c0084e59e56e7bce602c4fc3c690d46de856bbcafb5f->enter($__internal_ae1072497d3f0539d905c0084e59e56e7bce602c4fc3c690d46de856bbcafb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ae1072497d3f0539d905c0084e59e56e7bce602c4fc3c690d46de856bbcafb5f->leave($__internal_ae1072497d3f0539d905c0084e59e56e7bce602c4fc3c690d46de856bbcafb5f_prof);

        
        $__internal_1e7c3b603d6bf889ed475352f73cf75147f497788ded5e06f529ebfa11196e16->leave($__internal_1e7c3b603d6bf889ed475352f73cf75147f497788ded5e06f529ebfa11196e16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
