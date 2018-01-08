<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_d2f11de8183e23fcf3a678106bb237e6f4aa5f1c3c48135e0a04338d95a8a3a9 extends Twig_Template
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
        $__internal_feba4efbf6b9a37ccadb68269b9ef7a8f55fbb4e47fd346952b14e627bff27cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feba4efbf6b9a37ccadb68269b9ef7a8f55fbb4e47fd346952b14e627bff27cf->enter($__internal_feba4efbf6b9a37ccadb68269b9ef7a8f55fbb4e47fd346952b14e627bff27cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_a82c9a92b614631797a2670ccfa4d22f3921c6b5b7ef35bec48a8a5df9fb2afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82c9a92b614631797a2670ccfa4d22f3921c6b5b7ef35bec48a8a5df9fb2afe->enter($__internal_a82c9a92b614631797a2670ccfa4d22f3921c6b5b7ef35bec48a8a5df9fb2afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_feba4efbf6b9a37ccadb68269b9ef7a8f55fbb4e47fd346952b14e627bff27cf->leave($__internal_feba4efbf6b9a37ccadb68269b9ef7a8f55fbb4e47fd346952b14e627bff27cf_prof);

        
        $__internal_a82c9a92b614631797a2670ccfa4d22f3921c6b5b7ef35bec48a8a5df9fb2afe->leave($__internal_a82c9a92b614631797a2670ccfa4d22f3921c6b5b7ef35bec48a8a5df9fb2afe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
