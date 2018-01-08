<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_4dba98b4ac411667925cc82033249e0a0e924b32df455f3e3f723549f34979c4 extends Twig_Template
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
        $__internal_f6fbc5a21bced4c54f8a5849295112953f2382c604a43d1b8d5a60020d38a6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fbc5a21bced4c54f8a5849295112953f2382c604a43d1b8d5a60020d38a6d5->enter($__internal_f6fbc5a21bced4c54f8a5849295112953f2382c604a43d1b8d5a60020d38a6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_0b6c0dbbbb6b4796bcc9a433d3a1ece02b3bee73f2a17400fc9e0f628cc32a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6c0dbbbb6b4796bcc9a433d3a1ece02b3bee73f2a17400fc9e0f628cc32a5d->enter($__internal_0b6c0dbbbb6b4796bcc9a433d3a1ece02b3bee73f2a17400fc9e0f628cc32a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f6fbc5a21bced4c54f8a5849295112953f2382c604a43d1b8d5a60020d38a6d5->leave($__internal_f6fbc5a21bced4c54f8a5849295112953f2382c604a43d1b8d5a60020d38a6d5_prof);

        
        $__internal_0b6c0dbbbb6b4796bcc9a433d3a1ece02b3bee73f2a17400fc9e0f628cc32a5d->leave($__internal_0b6c0dbbbb6b4796bcc9a433d3a1ece02b3bee73f2a17400fc9e0f628cc32a5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
