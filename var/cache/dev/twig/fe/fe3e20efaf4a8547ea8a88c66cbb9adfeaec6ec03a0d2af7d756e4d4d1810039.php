<?php

/* WACQuizzBundle:Default:index.html.twig */
class __TwigTemplate_146fa02e84d28085149530562778c709374bfb246fef330786202e18add56448 extends Twig_Template
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
        $__internal_2003ee47111b81b8a144fe06162910517379c1f9da91dc55d165d920dc20c982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2003ee47111b81b8a144fe06162910517379c1f9da91dc55d165d920dc20c982->enter($__internal_2003ee47111b81b8a144fe06162910517379c1f9da91dc55d165d920dc20c982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:index.html.twig"));

        $__internal_bbf683a27fb2a8fb75e23e2ff65ab9e7c6b15c02715d84fe36150ae20a662803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf683a27fb2a8fb75e23e2ff65ab9e7c6b15c02715d84fe36150ae20a662803->enter($__internal_bbf683a27fb2a8fb75e23e2ff65ab9e7c6b15c02715d84fe36150ae20a662803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WACQuizzBundle:Default:index.html.twig"));

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
\t<header>
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
\t<h1> Party Quizz </h1>
\t<div id=\"container\">
\t\t<h2> Choisissez votre catégorie </h2>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["results"]) {
            // line 39
            echo "\t";
            if (($this->getAttribute($context["results"], "id", array()) == 1)) {
                // line 40
                echo "\t\t<div class=\"row\"></div>
\t";
            } elseif (($this->getAttribute(            // line 41
$context["results"], "id", array()) == 4)) {
                // line 42
                echo "\t\t<div class=\"row\"></div>
\t";
            } elseif (($this->getAttribute(            // line 43
$context["results"], "id", array()) == 7)) {
                // line 44
                echo "    \t<div class=\"row\"></div>
    ";
            } elseif (($this->getAttribute(            // line 45
$context["results"], "id", array()) == 10)) {
                // line 46
                echo "    \t<div class=\"row\"></div>
    ";
            }
            // line 48
            echo "    \t<a href=\"/categorie/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["results"], "id", array()), "html", null, true);
            echo " \">
    \t<img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["results"], "img", array())), "html", null, true);
            echo "\" id=\"catego\"/>
    \t</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['results'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        // line 53
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 54
            echo " <h5>Créer un new quizz</h5>
 <form  method=\"post\" action=\"/insertQuizz\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Nom du Quizz</label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"  placeholder=\"name\"/>
            </div>
          </div>
        </div>

        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Img du Quizz</label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"img\" id=\"img\"  placeholder=\"lien img\"/>
            </div>
          </div>
        </div>
      
            <button type=\"submit\">Envoyer</button>
      </form>
      ";
        } else {
            // line 78
            echo "      \t<a href=\"/register\"> Inscrivez vous pour pouvoir créer des quizz</a>
      ";
        }
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 81
            echo "      <div id=\"tabdbo\">
      \t<h3> Bienvenue Admin </h3>

       <form  method=\"post\" action=\"/removeQuizz\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Saisissez le Quizz a détruire </label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"  placeholder=\"name\"/>
            </div>
          </div>
        </div>

            <button type=\"submit\">Envoyer</button>
      </form>

          <form  method=\"post\" action=\"/removeUser\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Saisissez le compte user a détruire </label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\"  placeholder=\"username\"/>
            </div>
          </div>
        </div>

            <button type=\"submit\">Envoyer</button>
      </form>
  </div>
  ";
        }
        // line 113
        echo "</body>
</html>

";
        
        $__internal_2003ee47111b81b8a144fe06162910517379c1f9da91dc55d165d920dc20c982->leave($__internal_2003ee47111b81b8a144fe06162910517379c1f9da91dc55d165d920dc20c982_prof);

        
        $__internal_bbf683a27fb2a8fb75e23e2ff65ab9e7c6b15c02715d84fe36150ae20a662803->leave($__internal_bbf683a27fb2a8fb75e23e2ff65ab9e7c6b15c02715d84fe36150ae20a662803_prof);

    }

    public function getTemplateName()
    {
        return "WACQuizzBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 113,  149 => 81,  147 => 80,  143 => 78,  117 => 54,  115 => 53,  112 => 52,  103 => 49,  98 => 48,  94 => 46,  92 => 45,  89 => 44,  87 => 43,  84 => 42,  82 => 41,  79 => 40,  76 => 39,  72 => 38,  63 => 31,  57 => 27,  55 => 26,  30 => 4,  25 => 1,);
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
\t<header>
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
\t<h1> Party Quizz </h1>
\t<div id=\"container\">
\t\t<h2> Choisissez votre catégorie </h2>
{% for results in result %}
\t{% if results.id == 1 %}
\t\t<div class=\"row\"></div>
\t{% elseif results.id == 4  %}
\t\t<div class=\"row\"></div>
\t{% elseif results.id == 7  %}
    \t<div class=\"row\"></div>
    {% elseif results.id == 10  %}
    \t<div class=\"row\"></div>
    {% endif %}
    \t<a href=\"/categorie/{{ results.id }} \">
    \t<img src=\"{{ asset(results.img) }}\" id=\"catego\"/>
    \t</a>
{% endfor %}
</div>
{% if is_granted('ROLE_USER') %}
 <h5>Créer un new quizz</h5>
 <form  method=\"post\" action=\"/insertQuizz\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Nom du Quizz</label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"  placeholder=\"name\"/>
            </div>
          </div>
        </div>

        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Img du Quizz</label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"img\" id=\"img\"  placeholder=\"lien img\"/>
            </div>
          </div>
        </div>
      
            <button type=\"submit\">Envoyer</button>
      </form>
      {% else %}
      \t<a href=\"/register\"> Inscrivez vous pour pouvoir créer des quizz</a>
      {% endif %}
{% if is_granted('ROLE_USER') %}
      <div id=\"tabdbo\">
      \t<h3> Bienvenue Admin </h3>

       <form  method=\"post\" action=\"/removeQuizz\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Saisissez le Quizz a détruire </label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"  placeholder=\"name\"/>
            </div>
          </div>
        </div>

            <button type=\"submit\">Envoyer</button>
      </form>

          <form  method=\"post\" action=\"/removeUser\">
        
        <div class=\"form-group\">
          <label for=\"text\" class=\"cols-sm-2 control-label\">Saisissez le compte user a détruire </label>
          <div class=\"cols-sm-10\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\"  placeholder=\"username\"/>
            </div>
          </div>
        </div>

            <button type=\"submit\">Envoyer</button>
      </form>
  </div>
  {% endif %}
</body>
</html>

", "WACQuizzBundle:Default:index.html.twig", "/home/charles/Bureau/quizz/src/WAC/QuizzBundle/Resources/views/Default/index.html.twig");
    }
}
