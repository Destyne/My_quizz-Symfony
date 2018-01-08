<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5a15e59f286e55fa2850b55fd3e8d0c3751ec53a01b18bc0ee9f9e99da13ec42 extends Twig_Template
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
        $__internal_cfdfef041e5100055fe8004fffa739a98700b4b4eded4069a54813ccaa05c7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdfef041e5100055fe8004fffa739a98700b4b4eded4069a54813ccaa05c7ca->enter($__internal_cfdfef041e5100055fe8004fffa739a98700b4b4eded4069a54813ccaa05c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_54e454c700db2f7cbf65759bb35bf428b7b58aa553e68d85c84cfba3f8836227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e454c700db2f7cbf65759bb35bf428b7b58aa553e68d85c84cfba3f8836227->enter($__internal_54e454c700db2f7cbf65759bb35bf428b7b58aa553e68d85c84cfba3f8836227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cfdfef041e5100055fe8004fffa739a98700b4b4eded4069a54813ccaa05c7ca->leave($__internal_cfdfef041e5100055fe8004fffa739a98700b4b4eded4069a54813ccaa05c7ca_prof);

        
        $__internal_54e454c700db2f7cbf65759bb35bf428b7b58aa553e68d85c84cfba3f8836227->leave($__internal_54e454c700db2f7cbf65759bb35bf428b7b58aa553e68d85c84cfba3f8836227_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
