<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f532b61b6b3f350517a33eb175be6b4ea5b05805082afd137861f302fb623794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaeccb7449936da455701af104871d3a019934837ebca22dc1f013798b5b382b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaeccb7449936da455701af104871d3a019934837ebca22dc1f013798b5b382b->enter($__internal_aaeccb7449936da455701af104871d3a019934837ebca22dc1f013798b5b382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f69eaa2d9d32e884cf4e8f73e0011d00829317f056dee50543385cd0f4ecc231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69eaa2d9d32e884cf4e8f73e0011d00829317f056dee50543385cd0f4ecc231->enter($__internal_f69eaa2d9d32e884cf4e8f73e0011d00829317f056dee50543385cd0f4ecc231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aaeccb7449936da455701af104871d3a019934837ebca22dc1f013798b5b382b->leave($__internal_aaeccb7449936da455701af104871d3a019934837ebca22dc1f013798b5b382b_prof);

        
        $__internal_f69eaa2d9d32e884cf4e8f73e0011d00829317f056dee50543385cd0f4ecc231->leave($__internal_f69eaa2d9d32e884cf4e8f73e0011d00829317f056dee50543385cd0f4ecc231_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e3454dcfcb3c096202643346dfaff5da5c77d48bdbf2683927c96756cc39741f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3454dcfcb3c096202643346dfaff5da5c77d48bdbf2683927c96756cc39741f->enter($__internal_e3454dcfcb3c096202643346dfaff5da5c77d48bdbf2683927c96756cc39741f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b87e25478041df6b7552cddf611de23486a554cb1ea044af9064653fc5b0c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87e25478041df6b7552cddf611de23486a554cb1ea044af9064653fc5b0c230->enter($__internal_b87e25478041df6b7552cddf611de23486a554cb1ea044af9064653fc5b0c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b87e25478041df6b7552cddf611de23486a554cb1ea044af9064653fc5b0c230->leave($__internal_b87e25478041df6b7552cddf611de23486a554cb1ea044af9064653fc5b0c230_prof);

        
        $__internal_e3454dcfcb3c096202643346dfaff5da5c77d48bdbf2683927c96756cc39741f->leave($__internal_e3454dcfcb3c096202643346dfaff5da5c77d48bdbf2683927c96756cc39741f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e89d0453a1a67c649fa71117439ee4bb21b6a5f95b76cbcdefc94328f41f4fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89d0453a1a67c649fa71117439ee4bb21b6a5f95b76cbcdefc94328f41f4fb8->enter($__internal_e89d0453a1a67c649fa71117439ee4bb21b6a5f95b76cbcdefc94328f41f4fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_08bf2c477f8c709ee19f6b9498d1a49117b10e9ae6b1bdcceec8ae18df381989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bf2c477f8c709ee19f6b9498d1a49117b10e9ae6b1bdcceec8ae18df381989->enter($__internal_08bf2c477f8c709ee19f6b9498d1a49117b10e9ae6b1bdcceec8ae18df381989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_08bf2c477f8c709ee19f6b9498d1a49117b10e9ae6b1bdcceec8ae18df381989->leave($__internal_08bf2c477f8c709ee19f6b9498d1a49117b10e9ae6b1bdcceec8ae18df381989_prof);

        
        $__internal_e89d0453a1a67c649fa71117439ee4bb21b6a5f95b76cbcdefc94328f41f4fb8->leave($__internal_e89d0453a1a67c649fa71117439ee4bb21b6a5f95b76cbcdefc94328f41f4fb8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d0641ef98334d65397dca88d1d7f21bb21d33fa255737596e29cd5a3a92e7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0641ef98334d65397dca88d1d7f21bb21d33fa255737596e29cd5a3a92e7e1->enter($__internal_2d0641ef98334d65397dca88d1d7f21bb21d33fa255737596e29cd5a3a92e7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_fcc155aaa824ddc52a8edd98f7a81996cf22c9ac6390393a3f11d67385f48933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc155aaa824ddc52a8edd98f7a81996cf22c9ac6390393a3f11d67385f48933->enter($__internal_fcc155aaa824ddc52a8edd98f7a81996cf22c9ac6390393a3f11d67385f48933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fcc155aaa824ddc52a8edd98f7a81996cf22c9ac6390393a3f11d67385f48933->leave($__internal_fcc155aaa824ddc52a8edd98f7a81996cf22c9ac6390393a3f11d67385f48933_prof);

        
        $__internal_2d0641ef98334d65397dca88d1d7f21bb21d33fa255737596e29cd5a3a92e7e1->leave($__internal_2d0641ef98334d65397dca88d1d7f21bb21d33fa255737596e29cd5a3a92e7e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
