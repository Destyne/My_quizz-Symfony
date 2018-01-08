<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_dbce8ffb1727fd8d69991f9b4e9156c995a1da9cc4a92cb2bd0073d66b8c0b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be62152ab8adc4d20c1650759256fee2054ff82e16063a96d23edc79f803e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be62152ab8adc4d20c1650759256fee2054ff82e16063a96d23edc79f803e6f->enter($__internal_4be62152ab8adc4d20c1650759256fee2054ff82e16063a96d23edc79f803e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_b6f39ced41f6dcffcfb55e64674ed093a29829c3ec00305c5b49bbe923b0eae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f39ced41f6dcffcfb55e64674ed093a29829c3ec00305c5b49bbe923b0eae9->enter($__internal_b6f39ced41f6dcffcfb55e64674ed093a29829c3ec00305c5b49bbe923b0eae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/style.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
        <div>
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                Connecté: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout
                </a>
            ";
        } else {
            // line 16
            echo "            ";
        }
        // line 17
        echo "        </div>

        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 21
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 22
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_4be62152ab8adc4d20c1650759256fee2054ff82e16063a96d23edc79f803e6f->leave($__internal_4be62152ab8adc4d20c1650759256fee2054ff82e16063a96d23edc79f803e6f_prof);

        
        $__internal_b6f39ced41f6dcffcfb55e64674ed093a29829c3ec00305c5b49bbe923b0eae9->leave($__internal_b6f39ced41f6dcffcfb55e64674ed093a29829c3ec00305c5b49bbe923b0eae9_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b28e92444dee6b709e4adaa86a9ea1d88e7c422befa172a72e38c15fc1997f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28e92444dee6b709e4adaa86a9ea1d88e7c422befa172a72e38c15fc1997f9a->enter($__internal_b28e92444dee6b709e4adaa86a9ea1d88e7c422befa172a72e38c15fc1997f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ec984b7249df8cc7f698a56ee163fbcf8392063f8bb5e49dd6d509218946ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec984b7249df8cc7f698a56ee163fbcf8392063f8bb5e49dd6d509218946ccd->enter($__internal_2ec984b7249df8cc7f698a56ee163fbcf8392063f8bb5e49dd6d509218946ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_2ec984b7249df8cc7f698a56ee163fbcf8392063f8bb5e49dd6d509218946ccd->leave($__internal_2ec984b7249df8cc7f698a56ee163fbcf8392063f8bb5e49dd6d509218946ccd_prof);

        
        $__internal_b28e92444dee6b709e4adaa86a9ea1d88e7c422befa172a72e38c15fc1997f9a->leave($__internal_b28e92444dee6b709e4adaa86a9ea1d88e7c422befa172a72e38c15fc1997f9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  115 => 30,  102 => 32,  100 => 30,  96 => 28,  93 => 27,  87 => 26,  78 => 23,  73 => 22,  68 => 21,  63 => 20,  61 => 19,  57 => 17,  54 => 16,  48 => 13,  43 => 12,  41 => 11,  34 => 7,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
    </head>
    <body>
<link rel=\"stylesheet\" href=\"{{asset('asset/style.css')}}\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                Connecté: {{app.user.username}}
                <a href=\"{{ path('fos_user_security_logout') }}\">Logout
                </a>
            {% else %}
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/charles/Bureau/quizz/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
