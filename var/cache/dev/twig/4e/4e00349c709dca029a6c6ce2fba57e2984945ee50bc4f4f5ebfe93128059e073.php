<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f3a1b1668704238be3b5c94cd8cd5cf8417ee84d09767284e67ceea576dbbb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deedf24d4bf32c8e65d6db875049ca1819e8f422007f91861d4b74dd1649722c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deedf24d4bf32c8e65d6db875049ca1819e8f422007f91861d4b74dd1649722c->enter($__internal_deedf24d4bf32c8e65d6db875049ca1819e8f422007f91861d4b74dd1649722c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2996c686e6014a8cc7e74b83438f54237d0c0548687e2684dd43b2bee6bca2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996c686e6014a8cc7e74b83438f54237d0c0548687e2684dd43b2bee6bca2f2->enter($__internal_2996c686e6014a8cc7e74b83438f54237d0c0548687e2684dd43b2bee6bca2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_deedf24d4bf32c8e65d6db875049ca1819e8f422007f91861d4b74dd1649722c->leave($__internal_deedf24d4bf32c8e65d6db875049ca1819e8f422007f91861d4b74dd1649722c_prof);

        
        $__internal_2996c686e6014a8cc7e74b83438f54237d0c0548687e2684dd43b2bee6bca2f2->leave($__internal_2996c686e6014a8cc7e74b83438f54237d0c0548687e2684dd43b2bee6bca2f2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f4a263eb4be6ab8078977c39c7cdbe3a3c3b2602f1e50f1c726900f8b295231f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a263eb4be6ab8078977c39c7cdbe3a3c3b2602f1e50f1c726900f8b295231f->enter($__internal_f4a263eb4be6ab8078977c39c7cdbe3a3c3b2602f1e50f1c726900f8b295231f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_69b49ea4a072233a4fcfdb2d24c27a378ca3d8045e246923fa134aebe6f49ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b49ea4a072233a4fcfdb2d24c27a378ca3d8045e246923fa134aebe6f49ab9->enter($__internal_69b49ea4a072233a4fcfdb2d24c27a378ca3d8045e246923fa134aebe6f49ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_69b49ea4a072233a4fcfdb2d24c27a378ca3d8045e246923fa134aebe6f49ab9->leave($__internal_69b49ea4a072233a4fcfdb2d24c27a378ca3d8045e246923fa134aebe6f49ab9_prof);

        
        $__internal_f4a263eb4be6ab8078977c39c7cdbe3a3c3b2602f1e50f1c726900f8b295231f->leave($__internal_f4a263eb4be6ab8078977c39c7cdbe3a3c3b2602f1e50f1c726900f8b295231f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_770a9641ee909a37ab18c0e42cf84f63f4ae3c44d7d4fd5a32685980d12bc976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a9641ee909a37ab18c0e42cf84f63f4ae3c44d7d4fd5a32685980d12bc976->enter($__internal_770a9641ee909a37ab18c0e42cf84f63f4ae3c44d7d4fd5a32685980d12bc976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_54620800c56f5ac7ca4c8aba1d1803b6de8925ffbd3d7ce431efc6172141e44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54620800c56f5ac7ca4c8aba1d1803b6de8925ffbd3d7ce431efc6172141e44c->enter($__internal_54620800c56f5ac7ca4c8aba1d1803b6de8925ffbd3d7ce431efc6172141e44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_54620800c56f5ac7ca4c8aba1d1803b6de8925ffbd3d7ce431efc6172141e44c->leave($__internal_54620800c56f5ac7ca4c8aba1d1803b6de8925ffbd3d7ce431efc6172141e44c_prof);

        
        $__internal_770a9641ee909a37ab18c0e42cf84f63f4ae3c44d7d4fd5a32685980d12bc976->leave($__internal_770a9641ee909a37ab18c0e42cf84f63f4ae3c44d7d4fd5a32685980d12bc976_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f96ae05d716513d33474dec7a5abdffe0dac7b99ff5a9d0eff50a2973a1df64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96ae05d716513d33474dec7a5abdffe0dac7b99ff5a9d0eff50a2973a1df64c->enter($__internal_f96ae05d716513d33474dec7a5abdffe0dac7b99ff5a9d0eff50a2973a1df64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_9420613c49354599237d5d893f58c9bd8c0f002c0eb18d070f377abfb5a4f8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9420613c49354599237d5d893f58c9bd8c0f002c0eb18d070f377abfb5a4f8d7->enter($__internal_9420613c49354599237d5d893f58c9bd8c0f002c0eb18d070f377abfb5a4f8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_9420613c49354599237d5d893f58c9bd8c0f002c0eb18d070f377abfb5a4f8d7->leave($__internal_9420613c49354599237d5d893f58c9bd8c0f002c0eb18d070f377abfb5a4f8d7_prof);

        
        $__internal_f96ae05d716513d33474dec7a5abdffe0dac7b99ff5a9d0eff50a2973a1df64c->leave($__internal_f96ae05d716513d33474dec7a5abdffe0dac7b99ff5a9d0eff50a2973a1df64c_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_795dfe3620837484a31c92a5f7345dc235d5354aec25b909c6230741fdea89e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795dfe3620837484a31c92a5f7345dc235d5354aec25b909c6230741fdea89e2->enter($__internal_795dfe3620837484a31c92a5f7345dc235d5354aec25b909c6230741fdea89e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_742e110f2688242ca6ea6f8d89788bb417b38d73573117924f01daa2951299c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742e110f2688242ca6ea6f8d89788bb417b38d73573117924f01daa2951299c9->enter($__internal_742e110f2688242ca6ea6f8d89788bb417b38d73573117924f01daa2951299c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_742e110f2688242ca6ea6f8d89788bb417b38d73573117924f01daa2951299c9->leave($__internal_742e110f2688242ca6ea6f8d89788bb417b38d73573117924f01daa2951299c9_prof);

        
        $__internal_795dfe3620837484a31c92a5f7345dc235d5354aec25b909c6230741fdea89e2->leave($__internal_795dfe3620837484a31c92a5f7345dc235d5354aec25b909c6230741fdea89e2_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_deac81a63b918ed37514cf9dfae5cf8f42b50a2686ac7a7c3854504c4394679d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deac81a63b918ed37514cf9dfae5cf8f42b50a2686ac7a7c3854504c4394679d->enter($__internal_deac81a63b918ed37514cf9dfae5cf8f42b50a2686ac7a7c3854504c4394679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7c25a0ebeb16d0cc3bbb96c5134204af975ee83d62f56a9826fac20446eb46bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c25a0ebeb16d0cc3bbb96c5134204af975ee83d62f56a9826fac20446eb46bc->enter($__internal_7c25a0ebeb16d0cc3bbb96c5134204af975ee83d62f56a9826fac20446eb46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7c25a0ebeb16d0cc3bbb96c5134204af975ee83d62f56a9826fac20446eb46bc->leave($__internal_7c25a0ebeb16d0cc3bbb96c5134204af975ee83d62f56a9826fac20446eb46bc_prof);

        
        $__internal_deac81a63b918ed37514cf9dfae5cf8f42b50a2686ac7a7c3854504c4394679d->leave($__internal_deac81a63b918ed37514cf9dfae5cf8f42b50a2686ac7a7c3854504c4394679d_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ba4442f9d1a31de7f47ebfb877f1ce671be19f97f2319f7a95c5a89d6ad50057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4442f9d1a31de7f47ebfb877f1ce671be19f97f2319f7a95c5a89d6ad50057->enter($__internal_ba4442f9d1a31de7f47ebfb877f1ce671be19f97f2319f7a95c5a89d6ad50057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_79e485df2787639cbe1ae18e14cb3d87ff36977bc6d3453c8d935115944f363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e485df2787639cbe1ae18e14cb3d87ff36977bc6d3453c8d935115944f363e->enter($__internal_79e485df2787639cbe1ae18e14cb3d87ff36977bc6d3453c8d935115944f363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_79e485df2787639cbe1ae18e14cb3d87ff36977bc6d3453c8d935115944f363e->leave($__internal_79e485df2787639cbe1ae18e14cb3d87ff36977bc6d3453c8d935115944f363e_prof);

        
        $__internal_ba4442f9d1a31de7f47ebfb877f1ce671be19f97f2319f7a95c5a89d6ad50057->leave($__internal_ba4442f9d1a31de7f47ebfb877f1ce671be19f97f2319f7a95c5a89d6ad50057_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_190ae3ef7974c9cdce22cedbdab5cfcf9e7829c04d01885cf4fc64c8ff43ae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190ae3ef7974c9cdce22cedbdab5cfcf9e7829c04d01885cf4fc64c8ff43ae38->enter($__internal_190ae3ef7974c9cdce22cedbdab5cfcf9e7829c04d01885cf4fc64c8ff43ae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_bac38f0b54426a80c78531775b75b98ebde479641e6dddf76de879b80abae01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac38f0b54426a80c78531775b75b98ebde479641e6dddf76de879b80abae01f->enter($__internal_bac38f0b54426a80c78531775b75b98ebde479641e6dddf76de879b80abae01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bac38f0b54426a80c78531775b75b98ebde479641e6dddf76de879b80abae01f->leave($__internal_bac38f0b54426a80c78531775b75b98ebde479641e6dddf76de879b80abae01f_prof);

        
        $__internal_190ae3ef7974c9cdce22cedbdab5cfcf9e7829c04d01885cf4fc64c8ff43ae38->leave($__internal_190ae3ef7974c9cdce22cedbdab5cfcf9e7829c04d01885cf4fc64c8ff43ae38_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_de8dbab407228cae312ff8415758a1f74cd1d3e2c12b616732e3d089e2363244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8dbab407228cae312ff8415758a1f74cd1d3e2c12b616732e3d089e2363244->enter($__internal_de8dbab407228cae312ff8415758a1f74cd1d3e2c12b616732e3d089e2363244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b5dd693fe6fbd00d52a7f40d0c27ef5f844496792386d2a283d0a08875cd2301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dd693fe6fbd00d52a7f40d0c27ef5f844496792386d2a283d0a08875cd2301->enter($__internal_b5dd693fe6fbd00d52a7f40d0c27ef5f844496792386d2a283d0a08875cd2301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b5dd693fe6fbd00d52a7f40d0c27ef5f844496792386d2a283d0a08875cd2301->leave($__internal_b5dd693fe6fbd00d52a7f40d0c27ef5f844496792386d2a283d0a08875cd2301_prof);

        
        $__internal_de8dbab407228cae312ff8415758a1f74cd1d3e2c12b616732e3d089e2363244->leave($__internal_de8dbab407228cae312ff8415758a1f74cd1d3e2c12b616732e3d089e2363244_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_14f219dd9969cad32edd6af32814c28c50f22857fe8c97dcc3e1ab79443a1324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f219dd9969cad32edd6af32814c28c50f22857fe8c97dcc3e1ab79443a1324->enter($__internal_14f219dd9969cad32edd6af32814c28c50f22857fe8c97dcc3e1ab79443a1324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_73b26abad8c1c6caf6e15dfe561d14dcbe88d4983bf26105a070e65be3dee63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b26abad8c1c6caf6e15dfe561d14dcbe88d4983bf26105a070e65be3dee63d->enter($__internal_73b26abad8c1c6caf6e15dfe561d14dcbe88d4983bf26105a070e65be3dee63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_73b26abad8c1c6caf6e15dfe561d14dcbe88d4983bf26105a070e65be3dee63d->leave($__internal_73b26abad8c1c6caf6e15dfe561d14dcbe88d4983bf26105a070e65be3dee63d_prof);

        
        $__internal_14f219dd9969cad32edd6af32814c28c50f22857fe8c97dcc3e1ab79443a1324->leave($__internal_14f219dd9969cad32edd6af32814c28c50f22857fe8c97dcc3e1ab79443a1324_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_635567c7e0706f54e79015ef048407d23ae4b9779ffefad579c53d3bb09180d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635567c7e0706f54e79015ef048407d23ae4b9779ffefad579c53d3bb09180d2->enter($__internal_635567c7e0706f54e79015ef048407d23ae4b9779ffefad579c53d3bb09180d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3417aa3ba9769ade19d0089f7deebba5684619fcc4db85f15f613c7dec9d73bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3417aa3ba9769ade19d0089f7deebba5684619fcc4db85f15f613c7dec9d73bb->enter($__internal_3417aa3ba9769ade19d0089f7deebba5684619fcc4db85f15f613c7dec9d73bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_3417aa3ba9769ade19d0089f7deebba5684619fcc4db85f15f613c7dec9d73bb->leave($__internal_3417aa3ba9769ade19d0089f7deebba5684619fcc4db85f15f613c7dec9d73bb_prof);

        
        $__internal_635567c7e0706f54e79015ef048407d23ae4b9779ffefad579c53d3bb09180d2->leave($__internal_635567c7e0706f54e79015ef048407d23ae4b9779ffefad579c53d3bb09180d2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/charles/Bureau/quizz/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
