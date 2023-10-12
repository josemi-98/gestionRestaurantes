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

/* menuRestaurante/editRestaurante.html.twig */
class __TwigTemplate_21f72833eedd2af6b7dc2c5ae532c8c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/editRestaurante.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/editRestaurante.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menuRestaurante/editRestaurante.html.twig", 1);
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

        echo "Editar restaurante";
        
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
        echo "<div class=\"container\">
    <h1>MIS RESTAURANTES</h1>
      ";
        // line 9
        echo "    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Horario</th>
          <th>Imagen del restaurante</th>
          <th>Carta</th>
          <th>Telefono</th>
          <th>Descripcion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurante"]) {
            // line 24
            echo "          <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "direccion", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "horario", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td> <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "\" height=\"150px\" width=\"200\"> </td>
                <td> <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFileCarta"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo "\" height=\"150px\" width=\"200\"> </td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "contacto", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "descripcion", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>
                    <a
                        class=\"btn btn-outline-info\"
                        href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurante_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
                        Editar
                    </a>
                    <a
                        class=\"btn btn-outline-success\"
                        href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurante_mesas", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                        Mesas
                    </a>
                    <a
                        class=\"btn btn-outline-primary\"
                        href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurante_opinion", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
                        Opiniones
                    </a>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "menuRestaurante/editRestaurante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 51,  166 => 45,  158 => 40,  150 => 35,  143 => 31,  139 => 30,  133 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  108 => 23,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}Editar restaurante{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>MIS RESTAURANTES</h1>
      {# <h1>Reservas para el día {{ dia|date('d/m/Y') }}</h1> #}
    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Horario</th>
          <th>Imagen del restaurante</th>
          <th>Carta</th>
          <th>Telefono</th>
          <th>Descripcion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        {% for restaurante in restaurantes %}
          <tr>
                <td>{{ restaurante.nombre }}</td>
                <td>{{ restaurante.direccion }}</td>
                <td>{{ restaurante.horario }}</td>
                <td> <img src=\"{{ vich_uploader_asset(restaurante, 'imageFile') }}\" alt=\"{{restaurante.nombre}}\" height=\"150px\" width=\"200\"> </td>
                <td> <img src=\"{{ vich_uploader_asset(restaurante, 'imageFileCarta') }}\" alt=\"{{restaurante.nombre}}\" height=\"150px\" width=\"200\"> </td>
                <td>{{ restaurante.contacto }}</td>
                <td>{{ restaurante.descripcion }}</td>
                <td>
                    <a
                        class=\"btn btn-outline-info\"
                        href=\"{{ path('restaurante_edit', {'id': restaurante.id}) }}\">
                        Editar
                    </a>
                    <a
                        class=\"btn btn-outline-success\"
                        href=\"{{ path('restaurante_mesas', {'id': restaurante.id})}}\">
                        Mesas
                    </a>
                    <a
                        class=\"btn btn-outline-primary\"
                        href=\"{{ path('restaurante_opinion', {'id': restaurante.id})}}\">
                        Opiniones
                    </a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "menuRestaurante/editRestaurante.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\menuRestaurante\\editRestaurante.html.twig");
    }
}
