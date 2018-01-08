<?php

/* WACQuizzBundle:Default:reponse.html.twig */
class __TwigTemplate_e3f5d3f68765c5c30e8ca6d870e9c49c52b47dc4d42bd91f97b9381585141ebe extends Twig_Template
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
        $__internal_09850dba70014ee9956f8bdf1dcde37ce540512db49103f67b6b84b5603797de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09850dba70014ee9956f8bdf1dcde37ce540512db49103f67b6b84b5603797de->enter($__internal_09850dba70014ee9956f8bdf1dcde37ce540512db49103f67b6b84b5603797de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:reponse.html.twig"));

        $__internal_f28e0f0e2af1e4bd41967001e516b1ee0fce976beebbd223428b50a0822a10a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28e0f0e2af1e4bd41967001e516b1ee0fce976beebbd223428b50a0822a10a8->enter($__internal_f28e0f0e2af1e4bd41967001e516b1ee0fce976beebbd223428b50a0822a10a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:reponse.html.twig"));

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
\t<h1> Resultat </h1>
\t<div id=\"container\">
\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 38
            echo "\t\t\t<p>Mauvaise réponse = ";
            echo twig_escape_filter($this->env, $context["question"], "html", null, true);
            echo "</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 41
            echo "\t\t\t\t<p>Bonne réponse = ";
            echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
            echo "</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</div>
</body>
</html>";
        
        $__internal_09850dba70014ee9956f8bdf1dcde37ce540512db49103f67b6b84b5603797de->leave($__internal_09850dba70014ee9956f8bdf1dcde37ce540512db49103f67b6b84b5603797de_prof);

        
        $__internal_f28e0f0e2af1e4bd41967001e516b1ee0fce976beebbd223428b50a0822a10a8->leave($__internal_f28e0f0e2af1e4bd41967001e516b1ee0fce976beebbd223428b50a0822a10a8_prof);

    }

    public function getTemplateName()
    {
        return "WACQuizzBundle:Default:reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  89 => 41,  84 => 40,  75 => 38,  71 => 37,  63 => 31,  57 => 27,  55 => 26,  30 => 4,  25 => 1,);
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
\t<h1> Resultat </h1>
\t<div id=\"container\">
\t\t{% for question in questions %}
\t\t\t<p>Mauvaise réponse = {{ question }}</p>
\t\t\t{% endfor %}
\t\t{% for choice in choices %}
\t\t\t\t<p>Bonne réponse = {{ choice }}</p>
\t\t\t{% endfor %}
\t</div>
</body>
</html>", "WACQuizzBundle:Default:reponse.html.twig", "/home/charles/Bureau/quizz/src/WAC/QuizzBundle/Resources/views/Default/reponse.html.twig");
    }
}
