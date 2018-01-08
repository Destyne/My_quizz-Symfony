<?php

/* WACQuizzBundle:Default:question.html.twig */
class __TwigTemplate_d411895f70ff4fb76dbc49fffaf2985f13cea65bc8be62468f7cadfeaaaf3d52 extends Twig_Template
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
        $__internal_9857be9be9339f0a8cbf9243219d933a4b4f7af84ced82a8a610b0cdd375bd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9857be9be9339f0a8cbf9243219d933a4b4f7af84ced82a8a610b0cdd375bd5b->enter($__internal_9857be9be9339f0a8cbf9243219d933a4b4f7af84ced82a8a610b0cdd375bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:question.html.twig"));

        $__internal_ce3f4a44712ec1b9497192af38fdc2db2bbdb3c3f0198cd445806308053faa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3f4a44712ec1b9497192af38fdc2db2bbdb3c3f0198cd445806308053faa09->enter($__internal_ce3f4a44712ec1b9497192af38fdc2db2bbdb3c3f0198cd445806308053faa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:question.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/style.css"), "html", null, true);
        echo "\">
\t<title>symph</title>
</head>
<body>
\t\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/register\">S'inscrire</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/login\"> Se connecter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/profile/change-password\">Update mdp</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/resetting/request\">Update email</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/profile\">Mon compte</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 27
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"/logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</ul>

\t\t</nav>
\t</header>
\t<h1> Question </h1>
\t<div id=\"container\">
\t\t<form method=\"POST\" action=\"/checkChoice\">
\t\t\t<h2> Montrer nous vos connaissances</h2>
\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 40
            echo "\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 42
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($context["choice"], "id_question", array()))) {
                    // line 43
                    echo "\t\t\t\t\t\t<input type=\"radio\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "reponse", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<label for=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "reponse", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t<br><br>
\t\t\t  <button type=\"submit\">Envoyer</button>
\t\t</form>
\t</div>
</body>
</html>";
        
        $__internal_9857be9be9339f0a8cbf9243219d933a4b4f7af84ced82a8a610b0cdd375bd5b->leave($__internal_9857be9be9339f0a8cbf9243219d933a4b4f7af84ced82a8a610b0cdd375bd5b_prof);

        
        $__internal_ce3f4a44712ec1b9497192af38fdc2db2bbdb3c3f0198cd445806308053faa09->leave($__internal_ce3f4a44712ec1b9497192af38fdc2db2bbdb3c3f0198cd445806308053faa09_prof);

    }

    public function getTemplateName()
    {
        return "WACQuizzBundle:Default:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  111 => 47,  105 => 46,  98 => 44,  89 => 43,  86 => 42,  82 => 41,  77 => 40,  73 => 39,  63 => 31,  57 => 27,  55 => 26,  30 => 4,  25 => 1,);
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
\t<link rel=\"stylesheet\" href=\"{{asset('asset/style.css')}}\">
\t<title>symph</title>
</head>
<body>
\t\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/register\">S'inscrire</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/login\"> Se connecter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/profile/change-password\">Update mdp</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/resetting/request\">Update email</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/profile\">Mon compte</a>
\t\t\t\t</li>
\t\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t</nav>
\t</header>
\t<h1> Question </h1>
\t<div id=\"container\">
\t\t<form method=\"POST\" action=\"/checkChoice\">
\t\t\t<h2> Montrer nous vos connaissances</h2>
\t\t\t{% for question in questions %}
\t\t\t\t<h3>{{ question.question }}</h3>
\t\t\t\t{% for choice in choices %}
\t\t\t\t\t{% if question.id == choice.id_question %}
\t\t\t\t\t\t<input type=\"radio\" id=\"{{choice.id}}\" name=\"{{question.id}}\" value=\"{{choice.reponse}}\">
\t\t\t\t\t\t<label for=\"{{choice.id}}\">{{ choice.reponse }}</label>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t\t<br><br>
\t\t\t  <button type=\"submit\">Envoyer</button>
\t\t</form>
\t</div>
</body>
</html>", "WACQuizzBundle:Default:question.html.twig", "/home/charles/Bureau/quizz/src/WAC/QuizzBundle/Resources/views/Default/question.html.twig");
    }
}
