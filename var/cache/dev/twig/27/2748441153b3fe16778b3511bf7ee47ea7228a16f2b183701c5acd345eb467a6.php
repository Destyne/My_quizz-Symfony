<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_94edea42e096cbfb9e6fe8b4678da9c6031625d60e65ceaa6cc55c1ce04b6fc1 extends Twig_Template
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
        $__internal_e22a76b26bcf48f471c63b3b7f5a536d0e7627ef60fd89feb5f062346d667387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22a76b26bcf48f471c63b3b7f5a536d0e7627ef60fd89feb5f062346d667387->enter($__internal_e22a76b26bcf48f471c63b3b7f5a536d0e7627ef60fd89feb5f062346d667387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_3957affb9790696a15cf74af014a881a4b51a3e5c28c9ad54368a7b072ce202a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3957affb9790696a15cf74af014a881a4b51a3e5c28c9ad54368a7b072ce202a->enter($__internal_3957affb9790696a15cf74af014a881a4b51a3e5c28c9ad54368a7b072ce202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <label for=\"username\">Username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Submit\" />
</form>
";
        
        $__internal_e22a76b26bcf48f471c63b3b7f5a536d0e7627ef60fd89feb5f062346d667387->leave($__internal_e22a76b26bcf48f471c63b3b7f5a536d0e7627ef60fd89feb5f062346d667387_prof);

        
        $__internal_3957affb9790696a15cf74af014a881a4b51a3e5c28c9ad54368a7b072ce202a->leave($__internal_3957affb9790696a15cf74af014a881a4b51a3e5c28c9ad54368a7b072ce202a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">Username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Submit\" />
</form>
", "FOSUserBundle:Security:login_content.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
