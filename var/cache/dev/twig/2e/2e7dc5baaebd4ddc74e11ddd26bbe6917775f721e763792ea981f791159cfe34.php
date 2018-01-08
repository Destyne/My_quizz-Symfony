<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ace4395ab03ed0afe35fad71431d326aa7d7e99eb835a0eee4735e563f47cdcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace4395ab03ed0afe35fad71431d326aa7d7e99eb835a0eee4735e563f47cdcd->enter($__internal_ace4395ab03ed0afe35fad71431d326aa7d7e99eb835a0eee4735e563f47cdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_36870d105ccdbcd661231373ca350c97d27067afe867ed0e0773e500fe1ad813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36870d105ccdbcd661231373ca350c97d27067afe867ed0e0773e500fe1ad813->enter($__internal_36870d105ccdbcd661231373ca350c97d27067afe867ed0e0773e500fe1ad813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ace4395ab03ed0afe35fad71431d326aa7d7e99eb835a0eee4735e563f47cdcd->leave($__internal_ace4395ab03ed0afe35fad71431d326aa7d7e99eb835a0eee4735e563f47cdcd_prof);

        
        $__internal_36870d105ccdbcd661231373ca350c97d27067afe867ed0e0773e500fe1ad813->leave($__internal_36870d105ccdbcd661231373ca350c97d27067afe867ed0e0773e500fe1ad813_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9efd8164c9743a373f5a93209d48d2f8c68470f5126e0111825dfd0022d4068e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efd8164c9743a373f5a93209d48d2f8c68470f5126e0111825dfd0022d4068e->enter($__internal_9efd8164c9743a373f5a93209d48d2f8c68470f5126e0111825dfd0022d4068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9e6585e8d941186e85212d093583f2509965e0657d20bf193271e4cb6c5c080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e6585e8d941186e85212d093583f2509965e0657d20bf193271e4cb6c5c080->enter($__internal_a9e6585e8d941186e85212d093583f2509965e0657d20bf193271e4cb6c5c080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a9e6585e8d941186e85212d093583f2509965e0657d20bf193271e4cb6c5c080->leave($__internal_a9e6585e8d941186e85212d093583f2509965e0657d20bf193271e4cb6c5c080_prof);

        
        $__internal_9efd8164c9743a373f5a93209d48d2f8c68470f5126e0111825dfd0022d4068e->leave($__internal_9efd8164c9743a373f5a93209d48d2f8c68470f5126e0111825dfd0022d4068e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
