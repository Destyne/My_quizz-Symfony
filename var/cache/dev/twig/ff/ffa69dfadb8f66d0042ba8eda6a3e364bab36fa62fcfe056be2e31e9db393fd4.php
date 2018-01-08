<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a85e9cceb100b270e3f640459594844c80df3165f8574cde3df25327ed1bcb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85e9cceb100b270e3f640459594844c80df3165f8574cde3df25327ed1bcb82->enter($__internal_a85e9cceb100b270e3f640459594844c80df3165f8574cde3df25327ed1bcb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ff98282b162a9de912e241c48db4ad6926f255b77bcab44cb85f42b7c253422a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff98282b162a9de912e241c48db4ad6926f255b77bcab44cb85f42b7c253422a->enter($__internal_ff98282b162a9de912e241c48db4ad6926f255b77bcab44cb85f42b7c253422a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a85e9cceb100b270e3f640459594844c80df3165f8574cde3df25327ed1bcb82->leave($__internal_a85e9cceb100b270e3f640459594844c80df3165f8574cde3df25327ed1bcb82_prof);

        
        $__internal_ff98282b162a9de912e241c48db4ad6926f255b77bcab44cb85f42b7c253422a->leave($__internal_ff98282b162a9de912e241c48db4ad6926f255b77bcab44cb85f42b7c253422a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_666ede05245a7d395cdabdfb2e9b46aa92536a74dce5aed0e2fbb15079724ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666ede05245a7d395cdabdfb2e9b46aa92536a74dce5aed0e2fbb15079724ff4->enter($__internal_666ede05245a7d395cdabdfb2e9b46aa92536a74dce5aed0e2fbb15079724ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9c878a4c5dd975158c13afd45d376cf1cd6e5bed2f5daee92e76a2b79236a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c878a4c5dd975158c13afd45d376cf1cd6e5bed2f5daee92e76a2b79236a21->enter($__internal_d9c878a4c5dd975158c13afd45d376cf1cd6e5bed2f5daee92e76a2b79236a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d9c878a4c5dd975158c13afd45d376cf1cd6e5bed2f5daee92e76a2b79236a21->leave($__internal_d9c878a4c5dd975158c13afd45d376cf1cd6e5bed2f5daee92e76a2b79236a21_prof);

        
        $__internal_666ede05245a7d395cdabdfb2e9b46aa92536a74dce5aed0e2fbb15079724ff4->leave($__internal_666ede05245a7d395cdabdfb2e9b46aa92536a74dce5aed0e2fbb15079724ff4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_63c63efbf5b600edd89b660ccd1c16f2ff72ae5b32073f5c3fec27280d963828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c63efbf5b600edd89b660ccd1c16f2ff72ae5b32073f5c3fec27280d963828->enter($__internal_63c63efbf5b600edd89b660ccd1c16f2ff72ae5b32073f5c3fec27280d963828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26ca7366f83da9d9a3298955b79a352f2e8ff795dcb127993eb5cdfb31242463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ca7366f83da9d9a3298955b79a352f2e8ff795dcb127993eb5cdfb31242463->enter($__internal_26ca7366f83da9d9a3298955b79a352f2e8ff795dcb127993eb5cdfb31242463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_26ca7366f83da9d9a3298955b79a352f2e8ff795dcb127993eb5cdfb31242463->leave($__internal_26ca7366f83da9d9a3298955b79a352f2e8ff795dcb127993eb5cdfb31242463_prof);

        
        $__internal_63c63efbf5b600edd89b660ccd1c16f2ff72ae5b32073f5c3fec27280d963828->leave($__internal_63c63efbf5b600edd89b660ccd1c16f2ff72ae5b32073f5c3fec27280d963828_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb222fcc3734a17a587cbe07c92bd89999576a0f1aa9ef554212f02c43661f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb222fcc3734a17a587cbe07c92bd89999576a0f1aa9ef554212f02c43661f7->enter($__internal_3eb222fcc3734a17a587cbe07c92bd89999576a0f1aa9ef554212f02c43661f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d766c2bb157a546f8f2559107f7357ae46fc5f5a2cd8f378567159eb1c178d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d766c2bb157a546f8f2559107f7357ae46fc5f5a2cd8f378567159eb1c178d35->enter($__internal_d766c2bb157a546f8f2559107f7357ae46fc5f5a2cd8f378567159eb1c178d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d766c2bb157a546f8f2559107f7357ae46fc5f5a2cd8f378567159eb1c178d35->leave($__internal_d766c2bb157a546f8f2559107f7357ae46fc5f5a2cd8f378567159eb1c178d35_prof);

        
        $__internal_3eb222fcc3734a17a587cbe07c92bd89999576a0f1aa9ef554212f02c43661f7->leave($__internal_3eb222fcc3734a17a587cbe07c92bd89999576a0f1aa9ef554212f02c43661f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
