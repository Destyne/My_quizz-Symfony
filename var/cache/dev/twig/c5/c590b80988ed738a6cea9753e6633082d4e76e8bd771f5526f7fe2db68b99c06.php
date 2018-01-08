<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f7ce00574c5bd29e62984aa134fd8315477d925b1493a8ad7b45ef3c82115038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e8dcda7f6f5afac51a92b32bd3d71d195d5f151de134a80e71d76a214ac95c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8dcda7f6f5afac51a92b32bd3d71d195d5f151de134a80e71d76a214ac95c0->enter($__internal_7e8dcda7f6f5afac51a92b32bd3d71d195d5f151de134a80e71d76a214ac95c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6b53996c2263445c871073dad8373c76a21548bd4f8367c53f7276b601cc5c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b53996c2263445c871073dad8373c76a21548bd4f8367c53f7276b601cc5c7d->enter($__internal_6b53996c2263445c871073dad8373c76a21548bd4f8367c53f7276b601cc5c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_7e8dcda7f6f5afac51a92b32bd3d71d195d5f151de134a80e71d76a214ac95c0->leave($__internal_7e8dcda7f6f5afac51a92b32bd3d71d195d5f151de134a80e71d76a214ac95c0_prof);

        
        $__internal_6b53996c2263445c871073dad8373c76a21548bd4f8367c53f7276b601cc5c7d->leave($__internal_6b53996c2263445c871073dad8373c76a21548bd4f8367c53f7276b601cc5c7d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_61d9a30b69caf232ea9386dbcd1f7508a135d4308b6946d0cabbaacd738a47b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d9a30b69caf232ea9386dbcd1f7508a135d4308b6946d0cabbaacd738a47b6->enter($__internal_61d9a30b69caf232ea9386dbcd1f7508a135d4308b6946d0cabbaacd738a47b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_efd1826d23836c68972b0654e1e1a1748fa77cfca161a94c3295aa7009a50f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd1826d23836c68972b0654e1e1a1748fa77cfca161a94c3295aa7009a50f7a->enter($__internal_efd1826d23836c68972b0654e1e1a1748fa77cfca161a94c3295aa7009a50f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_efd1826d23836c68972b0654e1e1a1748fa77cfca161a94c3295aa7009a50f7a->leave($__internal_efd1826d23836c68972b0654e1e1a1748fa77cfca161a94c3295aa7009a50f7a_prof);

        
        $__internal_61d9a30b69caf232ea9386dbcd1f7508a135d4308b6946d0cabbaacd738a47b6->leave($__internal_61d9a30b69caf232ea9386dbcd1f7508a135d4308b6946d0cabbaacd738a47b6_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b4e5774fbb49b47fa59810f744f6402ccea97afffcd9ba9c220a5984203bad36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e5774fbb49b47fa59810f744f6402ccea97afffcd9ba9c220a5984203bad36->enter($__internal_b4e5774fbb49b47fa59810f744f6402ccea97afffcd9ba9c220a5984203bad36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b4cd1a5ea961bb59d687368af8b75523524732aefed63f942ac268034d6859a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cd1a5ea961bb59d687368af8b75523524732aefed63f942ac268034d6859a1->enter($__internal_b4cd1a5ea961bb59d687368af8b75523524732aefed63f942ac268034d6859a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b4cd1a5ea961bb59d687368af8b75523524732aefed63f942ac268034d6859a1->leave($__internal_b4cd1a5ea961bb59d687368af8b75523524732aefed63f942ac268034d6859a1_prof);

        
        $__internal_b4e5774fbb49b47fa59810f744f6402ccea97afffcd9ba9c220a5984203bad36->leave($__internal_b4e5774fbb49b47fa59810f744f6402ccea97afffcd9ba9c220a5984203bad36_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_add90b45d2abcf4b4f45d7b6efebc7c3eeb1d1d2f07976d8482233eaa35332c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add90b45d2abcf4b4f45d7b6efebc7c3eeb1d1d2f07976d8482233eaa35332c8->enter($__internal_add90b45d2abcf4b4f45d7b6efebc7c3eeb1d1d2f07976d8482233eaa35332c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_92dc98cc461ab381a435305c6f17641a67f3073b4e2d9203da5e053638b87755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dc98cc461ab381a435305c6f17641a67f3073b4e2d9203da5e053638b87755->enter($__internal_92dc98cc461ab381a435305c6f17641a67f3073b4e2d9203da5e053638b87755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_92dc98cc461ab381a435305c6f17641a67f3073b4e2d9203da5e053638b87755->leave($__internal_92dc98cc461ab381a435305c6f17641a67f3073b4e2d9203da5e053638b87755_prof);

        
        $__internal_add90b45d2abcf4b4f45d7b6efebc7c3eeb1d1d2f07976d8482233eaa35332c8->leave($__internal_add90b45d2abcf4b4f45d7b6efebc7c3eeb1d1d2f07976d8482233eaa35332c8_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_7530587c18c0cf2e7e9ea6577f9363f79320a09fa5482fbc2d3c834f0677586d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7530587c18c0cf2e7e9ea6577f9363f79320a09fa5482fbc2d3c834f0677586d->enter($__internal_7530587c18c0cf2e7e9ea6577f9363f79320a09fa5482fbc2d3c834f0677586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b6688abfcca1ce2e5f1f6639b5b9f4e35fc118ae03a10fd900378562a88efa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6688abfcca1ce2e5f1f6639b5b9f4e35fc118ae03a10fd900378562a88efa73->enter($__internal_b6688abfcca1ce2e5f1f6639b5b9f4e35fc118ae03a10fd900378562a88efa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b6688abfcca1ce2e5f1f6639b5b9f4e35fc118ae03a10fd900378562a88efa73->leave($__internal_b6688abfcca1ce2e5f1f6639b5b9f4e35fc118ae03a10fd900378562a88efa73_prof);

        
        $__internal_7530587c18c0cf2e7e9ea6577f9363f79320a09fa5482fbc2d3c834f0677586d->leave($__internal_7530587c18c0cf2e7e9ea6577f9363f79320a09fa5482fbc2d3c834f0677586d_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
