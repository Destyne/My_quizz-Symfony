<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e43b90acd645f54c5376ddf8d75735b19de356042757ad747c3ccd7416dc513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e43b90acd645f54c5376ddf8d75735b19de356042757ad747c3ccd7416dc513->enter($__internal_6e43b90acd645f54c5376ddf8d75735b19de356042757ad747c3ccd7416dc513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a97d7728ea4f4606b74ee5beb2734dec18262c02494523a781ee4de70ccab327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97d7728ea4f4606b74ee5beb2734dec18262c02494523a781ee4de70ccab327->enter($__internal_a97d7728ea4f4606b74ee5beb2734dec18262c02494523a781ee4de70ccab327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6e43b90acd645f54c5376ddf8d75735b19de356042757ad747c3ccd7416dc513->leave($__internal_6e43b90acd645f54c5376ddf8d75735b19de356042757ad747c3ccd7416dc513_prof);

        
        $__internal_a97d7728ea4f4606b74ee5beb2734dec18262c02494523a781ee4de70ccab327->leave($__internal_a97d7728ea4f4606b74ee5beb2734dec18262c02494523a781ee4de70ccab327_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6275b0d126556c561ef7d876bfe1ff73415c706bf8c4926dfe8fe8a35297790c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6275b0d126556c561ef7d876bfe1ff73415c706bf8c4926dfe8fe8a35297790c->enter($__internal_6275b0d126556c561ef7d876bfe1ff73415c706bf8c4926dfe8fe8a35297790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f56b2dfc747c729034f0862e0ab801a434a18ef1563d5ed0957806a09040927c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56b2dfc747c729034f0862e0ab801a434a18ef1563d5ed0957806a09040927c->enter($__internal_f56b2dfc747c729034f0862e0ab801a434a18ef1563d5ed0957806a09040927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f56b2dfc747c729034f0862e0ab801a434a18ef1563d5ed0957806a09040927c->leave($__internal_f56b2dfc747c729034f0862e0ab801a434a18ef1563d5ed0957806a09040927c_prof);

        
        $__internal_6275b0d126556c561ef7d876bfe1ff73415c706bf8c4926dfe8fe8a35297790c->leave($__internal_6275b0d126556c561ef7d876bfe1ff73415c706bf8c4926dfe8fe8a35297790c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cd961b39f201867672f412728493d462d73b1b639327386e9ff39acf16403f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd961b39f201867672f412728493d462d73b1b639327386e9ff39acf16403f0d->enter($__internal_cd961b39f201867672f412728493d462d73b1b639327386e9ff39acf16403f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7614f51f21a76fe6d7767a74b5fc7e59490fcf9252ce579d73acbfb54c8b6098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7614f51f21a76fe6d7767a74b5fc7e59490fcf9252ce579d73acbfb54c8b6098->enter($__internal_7614f51f21a76fe6d7767a74b5fc7e59490fcf9252ce579d73acbfb54c8b6098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7614f51f21a76fe6d7767a74b5fc7e59490fcf9252ce579d73acbfb54c8b6098->leave($__internal_7614f51f21a76fe6d7767a74b5fc7e59490fcf9252ce579d73acbfb54c8b6098_prof);

        
        $__internal_cd961b39f201867672f412728493d462d73b1b639327386e9ff39acf16403f0d->leave($__internal_cd961b39f201867672f412728493d462d73b1b639327386e9ff39acf16403f0d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b9702a842c53ddb2dda0b4aac1d5096c1403083ce580cab9afa07acaa901864c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9702a842c53ddb2dda0b4aac1d5096c1403083ce580cab9afa07acaa901864c->enter($__internal_b9702a842c53ddb2dda0b4aac1d5096c1403083ce580cab9afa07acaa901864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d2d05e80a30d461de99a62bc29ce1cb298dd05de401139e214b373e93ca45641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d05e80a30d461de99a62bc29ce1cb298dd05de401139e214b373e93ca45641->enter($__internal_d2d05e80a30d461de99a62bc29ce1cb298dd05de401139e214b373e93ca45641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d2d05e80a30d461de99a62bc29ce1cb298dd05de401139e214b373e93ca45641->leave($__internal_d2d05e80a30d461de99a62bc29ce1cb298dd05de401139e214b373e93ca45641_prof);

        
        $__internal_b9702a842c53ddb2dda0b4aac1d5096c1403083ce580cab9afa07acaa901864c->leave($__internal_b9702a842c53ddb2dda0b4aac1d5096c1403083ce580cab9afa07acaa901864c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_61277b12b74df4a99e04c57dee9258ac3a395fbcd20f4fedf924617aa6e88957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61277b12b74df4a99e04c57dee9258ac3a395fbcd20f4fedf924617aa6e88957->enter($__internal_61277b12b74df4a99e04c57dee9258ac3a395fbcd20f4fedf924617aa6e88957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a845afa511b0dd0ee71ca2ed20eea71cd09f91b6c8a4951d8c022e479f9b0df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a845afa511b0dd0ee71ca2ed20eea71cd09f91b6c8a4951d8c022e479f9b0df7->enter($__internal_a845afa511b0dd0ee71ca2ed20eea71cd09f91b6c8a4951d8c022e479f9b0df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d03082c5d4bed47d78f5f0464caa2aa4d1fad0b2113cf9dd2a9d0aef9b9832bd = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d094d861f4cce125d342d234df588b11623bdbd3beec525a51b0a4070a7c332c = "{{") && ('' === $__internal_d094d861f4cce125d342d234df588b11623bdbd3beec525a51b0a4070a7c332c || 0 === strpos($__internal_d03082c5d4bed47d78f5f0464caa2aa4d1fad0b2113cf9dd2a9d0aef9b9832bd, $__internal_d094d861f4cce125d342d234df588b11623bdbd3beec525a51b0a4070a7c332c)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_a845afa511b0dd0ee71ca2ed20eea71cd09f91b6c8a4951d8c022e479f9b0df7->leave($__internal_a845afa511b0dd0ee71ca2ed20eea71cd09f91b6c8a4951d8c022e479f9b0df7_prof);

        
        $__internal_61277b12b74df4a99e04c57dee9258ac3a395fbcd20f4fedf924617aa6e88957->leave($__internal_61277b12b74df4a99e04c57dee9258ac3a395fbcd20f4fedf924617aa6e88957_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3b60585488ede42564be2bfece96863c659f5eee4e5db8d0c9901a34fcf25d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b60585488ede42564be2bfece96863c659f5eee4e5db8d0c9901a34fcf25d81->enter($__internal_3b60585488ede42564be2bfece96863c659f5eee4e5db8d0c9901a34fcf25d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ca8d3bdf4f56c5b336810d576392942ee831b17c674d758b1bb3867ebdbe023d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8d3bdf4f56c5b336810d576392942ee831b17c674d758b1bb3867ebdbe023d->enter($__internal_ca8d3bdf4f56c5b336810d576392942ee831b17c674d758b1bb3867ebdbe023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ca8d3bdf4f56c5b336810d576392942ee831b17c674d758b1bb3867ebdbe023d->leave($__internal_ca8d3bdf4f56c5b336810d576392942ee831b17c674d758b1bb3867ebdbe023d_prof);

        
        $__internal_3b60585488ede42564be2bfece96863c659f5eee4e5db8d0c9901a34fcf25d81->leave($__internal_3b60585488ede42564be2bfece96863c659f5eee4e5db8d0c9901a34fcf25d81_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_81b897a960b75afa5292d2b78d2c3e393aa898f61ff345b356091f8aeca4fccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b897a960b75afa5292d2b78d2c3e393aa898f61ff345b356091f8aeca4fccd->enter($__internal_81b897a960b75afa5292d2b78d2c3e393aa898f61ff345b356091f8aeca4fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7cac4815cdb2ec700b1e383b4cb5f736c2161b04d1cec7777f9cd321b3751fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cac4815cdb2ec700b1e383b4cb5f736c2161b04d1cec7777f9cd321b3751fe9->enter($__internal_7cac4815cdb2ec700b1e383b4cb5f736c2161b04d1cec7777f9cd321b3751fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_7cac4815cdb2ec700b1e383b4cb5f736c2161b04d1cec7777f9cd321b3751fe9->leave($__internal_7cac4815cdb2ec700b1e383b4cb5f736c2161b04d1cec7777f9cd321b3751fe9_prof);

        
        $__internal_81b897a960b75afa5292d2b78d2c3e393aa898f61ff345b356091f8aeca4fccd->leave($__internal_81b897a960b75afa5292d2b78d2c3e393aa898f61ff345b356091f8aeca4fccd_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_03fa1f7e627fd5cdd0d08437f664c536b16c5d7a2facf2194196938278e2ff19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fa1f7e627fd5cdd0d08437f664c536b16c5d7a2facf2194196938278e2ff19->enter($__internal_03fa1f7e627fd5cdd0d08437f664c536b16c5d7a2facf2194196938278e2ff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_117f4bb966cf63ac3e99e59af428494b6f492b4f14f71752ff94f2689ff8eabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117f4bb966cf63ac3e99e59af428494b6f492b4f14f71752ff94f2689ff8eabe->enter($__internal_117f4bb966cf63ac3e99e59af428494b6f492b4f14f71752ff94f2689ff8eabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_117f4bb966cf63ac3e99e59af428494b6f492b4f14f71752ff94f2689ff8eabe->leave($__internal_117f4bb966cf63ac3e99e59af428494b6f492b4f14f71752ff94f2689ff8eabe_prof);

        
        $__internal_03fa1f7e627fd5cdd0d08437f664c536b16c5d7a2facf2194196938278e2ff19->leave($__internal_03fa1f7e627fd5cdd0d08437f664c536b16c5d7a2facf2194196938278e2ff19_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0c825aaf7822ffe1359e848a686255bd9a42f353dfafe76deb89c3a7d2d94553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c825aaf7822ffe1359e848a686255bd9a42f353dfafe76deb89c3a7d2d94553->enter($__internal_0c825aaf7822ffe1359e848a686255bd9a42f353dfafe76deb89c3a7d2d94553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bd244f32eea3a788c89b6e4fb46c04c68ebceb72b14deb0c6d8c6e03cc031eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd244f32eea3a788c89b6e4fb46c04c68ebceb72b14deb0c6d8c6e03cc031eff->enter($__internal_bd244f32eea3a788c89b6e4fb46c04c68ebceb72b14deb0c6d8c6e03cc031eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_bd244f32eea3a788c89b6e4fb46c04c68ebceb72b14deb0c6d8c6e03cc031eff->leave($__internal_bd244f32eea3a788c89b6e4fb46c04c68ebceb72b14deb0c6d8c6e03cc031eff_prof);

        
        $__internal_0c825aaf7822ffe1359e848a686255bd9a42f353dfafe76deb89c3a7d2d94553->leave($__internal_0c825aaf7822ffe1359e848a686255bd9a42f353dfafe76deb89c3a7d2d94553_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_63b200086b77b5ec8ef21a02cdea19bcea1abaf4dc835e07e2132cc0ff21877c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b200086b77b5ec8ef21a02cdea19bcea1abaf4dc835e07e2132cc0ff21877c->enter($__internal_63b200086b77b5ec8ef21a02cdea19bcea1abaf4dc835e07e2132cc0ff21877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_da30922d2fd5d2d540afd5a7a2f09d689355be7b333023d0306b01ef1e0a7967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da30922d2fd5d2d540afd5a7a2f09d689355be7b333023d0306b01ef1e0a7967->enter($__internal_da30922d2fd5d2d540afd5a7a2f09d689355be7b333023d0306b01ef1e0a7967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_da30922d2fd5d2d540afd5a7a2f09d689355be7b333023d0306b01ef1e0a7967->leave($__internal_da30922d2fd5d2d540afd5a7a2f09d689355be7b333023d0306b01ef1e0a7967_prof);

        
        $__internal_63b200086b77b5ec8ef21a02cdea19bcea1abaf4dc835e07e2132cc0ff21877c->leave($__internal_63b200086b77b5ec8ef21a02cdea19bcea1abaf4dc835e07e2132cc0ff21877c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ddf8b484d0ef5cfddc1b47e950c4fc88cbb1937259b7673113e79b0f6371113f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf8b484d0ef5cfddc1b47e950c4fc88cbb1937259b7673113e79b0f6371113f->enter($__internal_ddf8b484d0ef5cfddc1b47e950c4fc88cbb1937259b7673113e79b0f6371113f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_365a37c8d6c9557754dcc601f60c00b59ca1d04e81751844f15a53721bbbf3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365a37c8d6c9557754dcc601f60c00b59ca1d04e81751844f15a53721bbbf3a3->enter($__internal_365a37c8d6c9557754dcc601f60c00b59ca1d04e81751844f15a53721bbbf3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_365a37c8d6c9557754dcc601f60c00b59ca1d04e81751844f15a53721bbbf3a3->leave($__internal_365a37c8d6c9557754dcc601f60c00b59ca1d04e81751844f15a53721bbbf3a3_prof);

        
        $__internal_ddf8b484d0ef5cfddc1b47e950c4fc88cbb1937259b7673113e79b0f6371113f->leave($__internal_ddf8b484d0ef5cfddc1b47e950c4fc88cbb1937259b7673113e79b0f6371113f_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6db33f5808ec810af60cb2f5930d87edc79bbb09c1b2ea6ad40356999aa44459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db33f5808ec810af60cb2f5930d87edc79bbb09c1b2ea6ad40356999aa44459->enter($__internal_6db33f5808ec810af60cb2f5930d87edc79bbb09c1b2ea6ad40356999aa44459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e92df55a8ae2d4a2d9096808724fd75020a28f8ba4798ee784a8641b7b1cf892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92df55a8ae2d4a2d9096808724fd75020a28f8ba4798ee784a8641b7b1cf892->enter($__internal_e92df55a8ae2d4a2d9096808724fd75020a28f8ba4798ee784a8641b7b1cf892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_e92df55a8ae2d4a2d9096808724fd75020a28f8ba4798ee784a8641b7b1cf892->leave($__internal_e92df55a8ae2d4a2d9096808724fd75020a28f8ba4798ee784a8641b7b1cf892_prof);

        
        $__internal_6db33f5808ec810af60cb2f5930d87edc79bbb09c1b2ea6ad40356999aa44459->leave($__internal_6db33f5808ec810af60cb2f5930d87edc79bbb09c1b2ea6ad40356999aa44459_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0682018d7f4f5a36f48ecab2afa34fffafbb5554544b599bbb021fd6f4b65a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0682018d7f4f5a36f48ecab2afa34fffafbb5554544b599bbb021fd6f4b65a98->enter($__internal_0682018d7f4f5a36f48ecab2afa34fffafbb5554544b599bbb021fd6f4b65a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9cc7ace3bb8f55905341fefe3ed39779b3d77a9a9a684f66d3b85e5635a286e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc7ace3bb8f55905341fefe3ed39779b3d77a9a9a684f66d3b85e5635a286e5->enter($__internal_9cc7ace3bb8f55905341fefe3ed39779b3d77a9a9a684f66d3b85e5635a286e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_9cc7ace3bb8f55905341fefe3ed39779b3d77a9a9a684f66d3b85e5635a286e5->leave($__internal_9cc7ace3bb8f55905341fefe3ed39779b3d77a9a9a684f66d3b85e5635a286e5_prof);

        
        $__internal_0682018d7f4f5a36f48ecab2afa34fffafbb5554544b599bbb021fd6f4b65a98->leave($__internal_0682018d7f4f5a36f48ecab2afa34fffafbb5554544b599bbb021fd6f4b65a98_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_55e0feff176270c648bc9fdcf11847ea79dcd16ab8785ccdc227b87f62add998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e0feff176270c648bc9fdcf11847ea79dcd16ab8785ccdc227b87f62add998->enter($__internal_55e0feff176270c648bc9fdcf11847ea79dcd16ab8785ccdc227b87f62add998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_05acfd609e43cfdba3f0944a1671d146d96d39bcdb6c0f3c5138592c27a25a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05acfd609e43cfdba3f0944a1671d146d96d39bcdb6c0f3c5138592c27a25a3b->enter($__internal_05acfd609e43cfdba3f0944a1671d146d96d39bcdb6c0f3c5138592c27a25a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_05acfd609e43cfdba3f0944a1671d146d96d39bcdb6c0f3c5138592c27a25a3b->leave($__internal_05acfd609e43cfdba3f0944a1671d146d96d39bcdb6c0f3c5138592c27a25a3b_prof);

        
        $__internal_55e0feff176270c648bc9fdcf11847ea79dcd16ab8785ccdc227b87f62add998->leave($__internal_55e0feff176270c648bc9fdcf11847ea79dcd16ab8785ccdc227b87f62add998_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_33f68071751010777d36926dfc3d148e404e947bde5decada12fa2e5878478fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f68071751010777d36926dfc3d148e404e947bde5decada12fa2e5878478fc->enter($__internal_33f68071751010777d36926dfc3d148e404e947bde5decada12fa2e5878478fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7b9cfe8f4a11aa933dd2be67dc038000714682a931275bd696fa21d9384c1302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9cfe8f4a11aa933dd2be67dc038000714682a931275bd696fa21d9384c1302->enter($__internal_7b9cfe8f4a11aa933dd2be67dc038000714682a931275bd696fa21d9384c1302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7b9cfe8f4a11aa933dd2be67dc038000714682a931275bd696fa21d9384c1302->leave($__internal_7b9cfe8f4a11aa933dd2be67dc038000714682a931275bd696fa21d9384c1302_prof);

        
        $__internal_33f68071751010777d36926dfc3d148e404e947bde5decada12fa2e5878478fc->leave($__internal_33f68071751010777d36926dfc3d148e404e947bde5decada12fa2e5878478fc_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_221cabed86cc302ffe82e8d9c706f16cbfc4c6a5685ad84ef5685f5050cf91fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221cabed86cc302ffe82e8d9c706f16cbfc4c6a5685ad84ef5685f5050cf91fe->enter($__internal_221cabed86cc302ffe82e8d9c706f16cbfc4c6a5685ad84ef5685f5050cf91fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_fdcf4d50573c7c4af70c5b4c38996144bcbaec1f9147eca7043458fabd6f157d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcf4d50573c7c4af70c5b4c38996144bcbaec1f9147eca7043458fabd6f157d->enter($__internal_fdcf4d50573c7c4af70c5b4c38996144bcbaec1f9147eca7043458fabd6f157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fdcf4d50573c7c4af70c5b4c38996144bcbaec1f9147eca7043458fabd6f157d->leave($__internal_fdcf4d50573c7c4af70c5b4c38996144bcbaec1f9147eca7043458fabd6f157d_prof);

        
        $__internal_221cabed86cc302ffe82e8d9c706f16cbfc4c6a5685ad84ef5685f5050cf91fe->leave($__internal_221cabed86cc302ffe82e8d9c706f16cbfc4c6a5685ad84ef5685f5050cf91fe_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_1359734732df6043eae0c6308c02be12b96201a498b0b9c1a18f48597b806176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1359734732df6043eae0c6308c02be12b96201a498b0b9c1a18f48597b806176->enter($__internal_1359734732df6043eae0c6308c02be12b96201a498b0b9c1a18f48597b806176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5bcf29ef90b528b8885c8f211feb39c4ed0cadec086b939370c46303415fee87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcf29ef90b528b8885c8f211feb39c4ed0cadec086b939370c46303415fee87->enter($__internal_5bcf29ef90b528b8885c8f211feb39c4ed0cadec086b939370c46303415fee87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5bcf29ef90b528b8885c8f211feb39c4ed0cadec086b939370c46303415fee87->leave($__internal_5bcf29ef90b528b8885c8f211feb39c4ed0cadec086b939370c46303415fee87_prof);

        
        $__internal_1359734732df6043eae0c6308c02be12b96201a498b0b9c1a18f48597b806176->leave($__internal_1359734732df6043eae0c6308c02be12b96201a498b0b9c1a18f48597b806176_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9fe4c1aa4cab6fef936b869be2fbbb9e380a55b84b16b5893c68f2f1215d49c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe4c1aa4cab6fef936b869be2fbbb9e380a55b84b16b5893c68f2f1215d49c8->enter($__internal_9fe4c1aa4cab6fef936b869be2fbbb9e380a55b84b16b5893c68f2f1215d49c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9a0f192cadc7ca757f99cccfa88fa2e9f2f554fb4ea21e6fc287697478d5c887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0f192cadc7ca757f99cccfa88fa2e9f2f554fb4ea21e6fc287697478d5c887->enter($__internal_9a0f192cadc7ca757f99cccfa88fa2e9f2f554fb4ea21e6fc287697478d5c887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9a0f192cadc7ca757f99cccfa88fa2e9f2f554fb4ea21e6fc287697478d5c887->leave($__internal_9a0f192cadc7ca757f99cccfa88fa2e9f2f554fb4ea21e6fc287697478d5c887_prof);

        
        $__internal_9fe4c1aa4cab6fef936b869be2fbbb9e380a55b84b16b5893c68f2f1215d49c8->leave($__internal_9fe4c1aa4cab6fef936b869be2fbbb9e380a55b84b16b5893c68f2f1215d49c8_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_fef08f036e108e388f9cace6dc0cbbab98c7ff0dd1236e93f90a21c8c8040611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef08f036e108e388f9cace6dc0cbbab98c7ff0dd1236e93f90a21c8c8040611->enter($__internal_fef08f036e108e388f9cace6dc0cbbab98c7ff0dd1236e93f90a21c8c8040611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_353c16438a383735316911ed000909c5bfb81d2c6550f72fad3c72ff9de08507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353c16438a383735316911ed000909c5bfb81d2c6550f72fad3c72ff9de08507->enter($__internal_353c16438a383735316911ed000909c5bfb81d2c6550f72fad3c72ff9de08507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_353c16438a383735316911ed000909c5bfb81d2c6550f72fad3c72ff9de08507->leave($__internal_353c16438a383735316911ed000909c5bfb81d2c6550f72fad3c72ff9de08507_prof);

        
        $__internal_fef08f036e108e388f9cace6dc0cbbab98c7ff0dd1236e93f90a21c8c8040611->leave($__internal_fef08f036e108e388f9cace6dc0cbbab98c7ff0dd1236e93f90a21c8c8040611_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_db43d7039861c5f176dc16497ef97d08e6bb5a38581ddd63f9bbe0bb46e5f577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db43d7039861c5f176dc16497ef97d08e6bb5a38581ddd63f9bbe0bb46e5f577->enter($__internal_db43d7039861c5f176dc16497ef97d08e6bb5a38581ddd63f9bbe0bb46e5f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_28ae0f88a1887a6c45a919129fd9b5d0c6e2e7ff1201e2c6019f2b6f13ef2de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ae0f88a1887a6c45a919129fd9b5d0c6e2e7ff1201e2c6019f2b6f13ef2de7->enter($__internal_28ae0f88a1887a6c45a919129fd9b5d0c6e2e7ff1201e2c6019f2b6f13ef2de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_28ae0f88a1887a6c45a919129fd9b5d0c6e2e7ff1201e2c6019f2b6f13ef2de7->leave($__internal_28ae0f88a1887a6c45a919129fd9b5d0c6e2e7ff1201e2c6019f2b6f13ef2de7_prof);

        
        $__internal_db43d7039861c5f176dc16497ef97d08e6bb5a38581ddd63f9bbe0bb46e5f577->leave($__internal_db43d7039861c5f176dc16497ef97d08e6bb5a38581ddd63f9bbe0bb46e5f577_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_65af292a4dc66172747ae9076bff39248fbce25cd4cb42bfebb9a6687eb35c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65af292a4dc66172747ae9076bff39248fbce25cd4cb42bfebb9a6687eb35c4e->enter($__internal_65af292a4dc66172747ae9076bff39248fbce25cd4cb42bfebb9a6687eb35c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_12a5ddcf4a6755dc5c3be02e96062990bed4532a055a321b0cb73398e02abe2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a5ddcf4a6755dc5c3be02e96062990bed4532a055a321b0cb73398e02abe2f->enter($__internal_12a5ddcf4a6755dc5c3be02e96062990bed4532a055a321b0cb73398e02abe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_12a5ddcf4a6755dc5c3be02e96062990bed4532a055a321b0cb73398e02abe2f->leave($__internal_12a5ddcf4a6755dc5c3be02e96062990bed4532a055a321b0cb73398e02abe2f_prof);

        
        $__internal_65af292a4dc66172747ae9076bff39248fbce25cd4cb42bfebb9a6687eb35c4e->leave($__internal_65af292a4dc66172747ae9076bff39248fbce25cd4cb42bfebb9a6687eb35c4e_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d2141c7482f8ff8db07e5c60eb312873ad8f9b7456d2345e09361a41dfd14765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2141c7482f8ff8db07e5c60eb312873ad8f9b7456d2345e09361a41dfd14765->enter($__internal_d2141c7482f8ff8db07e5c60eb312873ad8f9b7456d2345e09361a41dfd14765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8ace4e569eb6ee7538835d46b8d064a30a5b3085a91c9911f637abbc156e805a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ace4e569eb6ee7538835d46b8d064a30a5b3085a91c9911f637abbc156e805a->enter($__internal_8ace4e569eb6ee7538835d46b8d064a30a5b3085a91c9911f637abbc156e805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ace4e569eb6ee7538835d46b8d064a30a5b3085a91c9911f637abbc156e805a->leave($__internal_8ace4e569eb6ee7538835d46b8d064a30a5b3085a91c9911f637abbc156e805a_prof);

        
        $__internal_d2141c7482f8ff8db07e5c60eb312873ad8f9b7456d2345e09361a41dfd14765->leave($__internal_d2141c7482f8ff8db07e5c60eb312873ad8f9b7456d2345e09361a41dfd14765_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3897ab8cf4e6061ebe8d8b62952c76532024cd13b6281d28c707233d98943a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3897ab8cf4e6061ebe8d8b62952c76532024cd13b6281d28c707233d98943a50->enter($__internal_3897ab8cf4e6061ebe8d8b62952c76532024cd13b6281d28c707233d98943a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c330fa5f967397ac410174324b8a8c565fce910a87e95e41ed7c4e0b587afd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c330fa5f967397ac410174324b8a8c565fce910a87e95e41ed7c4e0b587afd2a->enter($__internal_c330fa5f967397ac410174324b8a8c565fce910a87e95e41ed7c4e0b587afd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c330fa5f967397ac410174324b8a8c565fce910a87e95e41ed7c4e0b587afd2a->leave($__internal_c330fa5f967397ac410174324b8a8c565fce910a87e95e41ed7c4e0b587afd2a_prof);

        
        $__internal_3897ab8cf4e6061ebe8d8b62952c76532024cd13b6281d28c707233d98943a50->leave($__internal_3897ab8cf4e6061ebe8d8b62952c76532024cd13b6281d28c707233d98943a50_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c4fc620bd186a75f467667b921f74e5f64053eb58aad7070e2f7f9a5a639f272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4fc620bd186a75f467667b921f74e5f64053eb58aad7070e2f7f9a5a639f272->enter($__internal_c4fc620bd186a75f467667b921f74e5f64053eb58aad7070e2f7f9a5a639f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c016945aafd12d4e035f3506816544bdaaf5ef68e83bb0c8a266b74db1148c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c016945aafd12d4e035f3506816544bdaaf5ef68e83bb0c8a266b74db1148c8f->enter($__internal_c016945aafd12d4e035f3506816544bdaaf5ef68e83bb0c8a266b74db1148c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c016945aafd12d4e035f3506816544bdaaf5ef68e83bb0c8a266b74db1148c8f->leave($__internal_c016945aafd12d4e035f3506816544bdaaf5ef68e83bb0c8a266b74db1148c8f_prof);

        
        $__internal_c4fc620bd186a75f467667b921f74e5f64053eb58aad7070e2f7f9a5a639f272->leave($__internal_c4fc620bd186a75f467667b921f74e5f64053eb58aad7070e2f7f9a5a639f272_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b7753a8b1c30f39e7687350e6175388e623de8a73ca5dd02abc0318f6d814142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7753a8b1c30f39e7687350e6175388e623de8a73ca5dd02abc0318f6d814142->enter($__internal_b7753a8b1c30f39e7687350e6175388e623de8a73ca5dd02abc0318f6d814142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_157964e3daff9d6008d34ed28f9beaed6adf6680a92a93ed77624afa41cc2258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157964e3daff9d6008d34ed28f9beaed6adf6680a92a93ed77624afa41cc2258->enter($__internal_157964e3daff9d6008d34ed28f9beaed6adf6680a92a93ed77624afa41cc2258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_157964e3daff9d6008d34ed28f9beaed6adf6680a92a93ed77624afa41cc2258->leave($__internal_157964e3daff9d6008d34ed28f9beaed6adf6680a92a93ed77624afa41cc2258_prof);

        
        $__internal_b7753a8b1c30f39e7687350e6175388e623de8a73ca5dd02abc0318f6d814142->leave($__internal_b7753a8b1c30f39e7687350e6175388e623de8a73ca5dd02abc0318f6d814142_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0e22bd42ec9dd9eb06fea8bc3a001d3e44b2cef8f36ffd79ddb755f7143551dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e22bd42ec9dd9eb06fea8bc3a001d3e44b2cef8f36ffd79ddb755f7143551dd->enter($__internal_0e22bd42ec9dd9eb06fea8bc3a001d3e44b2cef8f36ffd79ddb755f7143551dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3a12af7672fea7f95368b4a6526bcc8bce2db2b8138ac477ec9142e350ccfa05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a12af7672fea7f95368b4a6526bcc8bce2db2b8138ac477ec9142e350ccfa05->enter($__internal_3a12af7672fea7f95368b4a6526bcc8bce2db2b8138ac477ec9142e350ccfa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_3a12af7672fea7f95368b4a6526bcc8bce2db2b8138ac477ec9142e350ccfa05->leave($__internal_3a12af7672fea7f95368b4a6526bcc8bce2db2b8138ac477ec9142e350ccfa05_prof);

        
        $__internal_0e22bd42ec9dd9eb06fea8bc3a001d3e44b2cef8f36ffd79ddb755f7143551dd->leave($__internal_0e22bd42ec9dd9eb06fea8bc3a001d3e44b2cef8f36ffd79ddb755f7143551dd_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f979b35c7d8d3ca5121181734fd78b2281cffba8c3dcbfa31b6eeea1fa472372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f979b35c7d8d3ca5121181734fd78b2281cffba8c3dcbfa31b6eeea1fa472372->enter($__internal_f979b35c7d8d3ca5121181734fd78b2281cffba8c3dcbfa31b6eeea1fa472372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_015ed0a75f8581c693859bd37c189172faecfbae368f326b22c5cc389cc3b52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015ed0a75f8581c693859bd37c189172faecfbae368f326b22c5cc389cc3b52d->enter($__internal_015ed0a75f8581c693859bd37c189172faecfbae368f326b22c5cc389cc3b52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_015ed0a75f8581c693859bd37c189172faecfbae368f326b22c5cc389cc3b52d->leave($__internal_015ed0a75f8581c693859bd37c189172faecfbae368f326b22c5cc389cc3b52d_prof);

        
        $__internal_f979b35c7d8d3ca5121181734fd78b2281cffba8c3dcbfa31b6eeea1fa472372->leave($__internal_f979b35c7d8d3ca5121181734fd78b2281cffba8c3dcbfa31b6eeea1fa472372_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9aba993f2fd1622a1e866ca59e9a37fc81a6f68dd90a393cc696bc19f66f9d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aba993f2fd1622a1e866ca59e9a37fc81a6f68dd90a393cc696bc19f66f9d5e->enter($__internal_9aba993f2fd1622a1e866ca59e9a37fc81a6f68dd90a393cc696bc19f66f9d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6669f8d8fae13519d709b34057bb38b9f15e955bb377abe9c1ad19a55a4a0e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6669f8d8fae13519d709b34057bb38b9f15e955bb377abe9c1ad19a55a4a0e8e->enter($__internal_6669f8d8fae13519d709b34057bb38b9f15e955bb377abe9c1ad19a55a4a0e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6669f8d8fae13519d709b34057bb38b9f15e955bb377abe9c1ad19a55a4a0e8e->leave($__internal_6669f8d8fae13519d709b34057bb38b9f15e955bb377abe9c1ad19a55a4a0e8e_prof);

        
        $__internal_9aba993f2fd1622a1e866ca59e9a37fc81a6f68dd90a393cc696bc19f66f9d5e->leave($__internal_9aba993f2fd1622a1e866ca59e9a37fc81a6f68dd90a393cc696bc19f66f9d5e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
