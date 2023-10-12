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

/* restaurante/show.html.twig */
class __TwigTemplate_0bbf4c57ea9c1f79eee9a71470d2f898 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurante/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "restaurante";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Informacion del restaurante:</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_index");
        echo "\"> 
                    Mantenimiento restaurante
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Nombre:</b>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">direccion:</b>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 19, $this->source); })()), "direccion", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Horario:</b>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 21, $this->source); })()), "horario", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Contacto:</b>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 23, $this->source); })()), "contacto", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Descripcion:</b>
                <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 25, $this->source); })()), "descripcion", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                ";
        // line 27
        echo "                ";
        // line 28
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "restaurante/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 28,  127 => 27,  123 => 25,  118 => 23,  113 => 21,  108 => 19,  103 => 17,  94 => 11,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
  
{% block title %}restaurante{% endblock %}
  
{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Informacion del restaurante:</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"{{ path('app_restaurante_index') }}\"> 
                    Mantenimiento restaurante
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Nombre:</b>
                <p>{{ restaurante.nombre }}</p>
                <b class=\"text-muted\">direccion:</b>
                <p>{{ restaurante.direccion }}</p>
                <b class=\"text-muted\">Horario:</b>
                <p>{{ restaurante.horario }}</p>
                <b class=\"text-muted\">Contacto:</b>
                <p>{{ restaurante.contacto }}</p>
                <b class=\"text-muted\">Descripcion:</b>
                <p>{{ restaurante.descripcion }}</p>
                {# <b class=\"text-muted\">Imagen:</b> #}
                {# <p> <img src=\"{{ vich_uploader_asset(restaurante, 'imageFile') }}\" alt=\"{{restaurante.nombre}}\" height=\"150px\" width=\"200\"> </p> #}
            </div>
        </div>
    </div>
{% endblock %}
", "restaurante/show.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\restaurante\\show.html.twig");
    }
}
