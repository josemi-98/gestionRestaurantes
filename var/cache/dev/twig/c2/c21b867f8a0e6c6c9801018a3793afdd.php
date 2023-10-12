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

/* menuRestaurante/buscar.html.twig */
class __TwigTemplate_5fd27619f89e4a872b3be194e3c66ec6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/buscar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/buscar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menuRestaurante/buscar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div class=\"container\">
    <h1>Reservas encontradas para la fecha ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new RuntimeError('Variable "fecha" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Fecha y Hora</th>
          <th>Lugar</th>
          <th>Cancelacion</th>
          <th>Mesa para:</th>
          <th>Nombre</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 21
            echo "          <tr>
            <td>";
            // line 22
            ((twig_get_attribute($this->env, $this->source, $context["reserva"], "fechaHora", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechaHora", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "lugar", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo ((twig_get_attribute($this->env, $this->source, $context["reserva"], "cancelacion", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "mesa", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "usuario", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </tbody>
    </table>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "menuRestaurante/buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  93 => 21,  89 => 20,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}



<div class=\"container\">
    <h1>Reservas encontradas para la fecha {{ fecha }}</h1>
    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Fecha y Hora</th>
          <th>Lugar</th>
          <th>Cancelacion</th>
          <th>Mesa para:</th>
          <th>Nombre</th>
        </tr>
      </thead>
      <tbody>
        {% for reserva in reservas %}
          <tr>
            <td>{{ reserva.fechaHora ? reserva.fechaHora|date('Y-m-d H:i:s') : '' }}</td>
            <td>{{ reserva.lugar }}</td>
            <td>{{ reserva.cancelacion ? 'Yes' : 'No' }}</td>
            <td>{{ reserva.mesa }}</td>
            <td>{{ reserva.usuario }}</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>

{% endblock %}", "menuRestaurante/buscar.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\menuRestaurante\\buscar.html.twig");
    }
}
