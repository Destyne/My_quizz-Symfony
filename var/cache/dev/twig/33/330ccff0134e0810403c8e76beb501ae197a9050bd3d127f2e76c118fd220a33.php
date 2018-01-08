<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9b22d2665dce6adeec4cfc7e9d36ddd0ccdac26adfc657abd99bb89676835d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63476b30d6d49ba675e2cff33ce465c2086362ba510b3e6dd20aa6fc98f1a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63476b30d6d49ba675e2cff33ce465c2086362ba510b3e6dd20aa6fc98f1a77->enter($__internal_a63476b30d6d49ba675e2cff33ce465c2086362ba510b3e6dd20aa6fc98f1a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_9c2a4489757c5c9f9bdc9b76f875620636de864e69579d6d7aae90a263ba5e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2a4489757c5c9f9bdc9b76f875620636de864e69579d6d7aae90a263ba5e82->enter($__internal_9c2a4489757c5c9f9bdc9b76f875620636de864e69579d6d7aae90a263ba5e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"submit\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a63476b30d6d49ba675e2cff33ce465c2086362ba510b3e6dd20aa6fc98f1a77->leave($__internal_a63476b30d6d49ba675e2cff33ce465c2086362ba510b3e6dd20aa6fc98f1a77_prof);

        
        $__internal_9c2a4489757c5c9f9bdc9b76f875620636de864e69579d6d7aae90a263ba5e82->leave($__internal_9c2a4489757c5c9f9bdc9b76f875620636de864e69579d6d7aae90a263ba5e82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"submit\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
