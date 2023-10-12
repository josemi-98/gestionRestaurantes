<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/reseñas.html.twig */
class __TwigTemplate_e64fedda098ae7297630a3300bab930d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reseñas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reseñas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/reseñas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reseñas restaurante";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"reviews-container\">
  <div class=\"reviewMain\">
    <div class=\"review-header\">
      <h3 class=\"review-title\">Reseñas de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"review-body\">
      <p class=\"review-text\">
        ¡Las reseñas son importantes! Click & Go valora las reseñas auténticas y solo las verifica si sabemos que el autor de la reseña ha visitado este negocio.
      </p>
    </div>
  </div>

  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 18, $this->source); })()), "opinions", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 19
            echo "  <div class=\"review\">
    <div class=\"review-header\">
      <h3 class=\"review-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "user", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
      ";
            // line 22
            $context["meses"] = [0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre"];
            // line 23
            echo "      <p class=\"review-date\">
        ";
            // line 24
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "fecha", [], "any", false, false, false, 24), "d \\d\\e ") . twig_get_attribute($this->env, $this->source, (isset($context["meses"]) || array_key_exists("meses", $context) ? $context["meses"] : (function () { throw new RuntimeError('Variable "meses" does not exist.', 24, $this->source); })()), (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "fecha", [], "any", false, false, false, 24), "n") - 1), [], "array", false, false, false, 24)) . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "fecha", [], "any", false, false, false, 24), " \\d\\e Y")), "html", null, true);
            echo "
      </p>
    </div>
    <div class=\"review-body\">
      <p class=\"review-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "comentario", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
      <div class=\"review-rating\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, $context["opinion"], "valoracion", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "        <span class=\"star\">&#9733;</span>
        ";
                } else {
                    // line 34
                    echo "        <span class=\"star\">&#9734;</span>
        ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </div>
    </div>
    ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["opinion"], "respuesta", [], "any", false, false, false, 39)) {
                // line 40
                echo "    <div class=\"review-response\" style=\"margin-top: 30px; margin-left: 120px;\">
      <h6>Respuesta del restaurante:</h6>
      <p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "respuesta", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
    </div>
    ";
            }
            // line 45
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/reseñas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 47,  171 => 45,  165 => 42,  161 => 40,  159 => 39,  155 => 37,  149 => 36,  145 => 34,  141 => 32,  138 => 31,  134 => 30,  129 => 28,  122 => 24,  119 => 23,  117 => 22,  113 => 21,  109 => 19,  105 => 18,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}Reseñas restaurante{% endblock %}
  
{% block body %}
<div class=\"reviews-container\">
  <div class=\"reviewMain\">
    <div class=\"review-header\">
      <h3 class=\"review-title\">Reseñas de {{ restaurante.nombre }}</h3>
    </div>
    <div class=\"review-body\">
      <p class=\"review-text\">
        ¡Las reseñas son importantes! Click & Go valora las reseñas auténticas y solo las verifica si sabemos que el autor de la reseña ha visitado este negocio.
      </p>
    </div>
  </div>

  {% for opinion in restaurante.opinions %}
  <div class=\"review\">
    <div class=\"review-header\">
      <h3 class=\"review-title\">{{ opinion.user }}</h3>
      {% set meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'] %}
      <p class=\"review-date\">
        {{ opinion.fecha|date('d \\\\d\\\\e ') ~ meses[opinion.fecha|date('n') - 1] ~ opinion.fecha|date(' \\\\d\\\\e Y') }}
      </p>
    </div>
    <div class=\"review-body\">
      <p class=\"review-text\">{{ opinion.comentario }}</p>
      <div class=\"review-rating\">
        {% for i in 1..5 %}
        {% if i <= opinion.valoracion %}
        <span class=\"star\">&#9733;</span>
        {% else %}
        <span class=\"star\">&#9734;</span>
        {% endif %}
        {% endfor %}
      </div>
    </div>
    {% if opinion.respuesta %}
    <div class=\"review-response\" style=\"margin-top: 30px; margin-left: 120px;\">
      <h6>Respuesta del restaurante:</h6>
      <p>{{ opinion.respuesta }}</p>
    </div>
    {% endif %}
  </div>
  {% endfor %}
</div>
{% endblock %}", "user/reseñas.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\user\\reseñas.html.twig");
    }
}
