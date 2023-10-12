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

/* menuRestaurante/reservas.html.twig */
class __TwigTemplate_e435d7f42010c5242e48590dc58d71ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/reservas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuRestaurante/reservas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menuRestaurante/reservas.html.twig", 1);
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
        echo "    <div class=\"container\">
        <h1>Buscar Reservas</h1>
        <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mis_reservas");
        echo "\" method=\"get\" class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"date\" placeholder=\"Elige una fecha\" aria-label=\"Buscar\" id=\"fecha\" name=\"fecha\">
            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
        </form>

        ";
        // line 13
        if (twig_test_empty((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "            <div class=\"alert alert-warning text-center mt-3\">
                <h4 class=\"alert-heading\">No se encontraron reservas</h4>
                <p class=\"mb-0\">Lo sentimos, no hemos encontrado ninguna reserva que coincida con su búsqueda.</p>
            </div>
        ";
        } else {
            // line 19
            echo "            <table class=\"table table-striped mt-5\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Fecha</th>
                        <th class=\"text-center\">Hora</th>
                        <th class=\"text-center\">Lugar</th>
                        <th class=\"text-center\">Mesa para:</th>
                        <th class=\"text-center\">Nombre</th>
                        <th class=\"text-center\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 32
                echo "                        <tr>
                        ";
                // line 33
                $context["fechaHora"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechaHora", [], "any", false, false, false, 33), "Y-m-d H:i:s");
                // line 34
                echo "                        ";
                $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d H:i:s");
                // line 35
                echo "                            <td class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechaHora", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td class=\"text-center\">";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "hora", [], "any", false, false, false, 36), "H:i"), "html", null, true);
                echo "</td>
                            <td class=\"text-center\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "lugar", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td class=\"text-center\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "mesa", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td class=\"text-center\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "usuario", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td >
                            <form method=\"post\" action=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_delete_restaurante", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('¿Estás seguro que deseas eliminar esta reserva?');\">
                                    
                                    ";
                // line 43
                if (((isset($context["fechaHora"]) || array_key_exists("fechaHora", $context) ? $context["fechaHora"] : (function () { throw new RuntimeError('Variable "fechaHora" does not exist.', 43, $this->source); })()) >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 43, $this->source); })()))) {
                    // line 44
                    echo "                                    <div class=\"text-center\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 45))), "html", null, true);
                    echo "\"> 
                                        <button class=\"btn btn-danger mx-auto\">Cancelar</button>
                                        <a class=\"btn btn-success\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\">Modificar</a>
                                    </div>
                                    ";
                } else {
                    // line 50
                    echo "                                        <div class=\"text-center\">
                                            <p> Reserva ya realizada.</p>
                                        </div>
                                    ";
                }
                // line 54
                echo "                            </form>

                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </tbody>
            </table>
        ";
        }
        // line 62
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "menuRestaurante/reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 62,  194 => 59,  184 => 54,  178 => 50,  172 => 47,  167 => 45,  164 => 44,  162 => 43,  157 => 41,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  135 => 35,  132 => 34,  130 => 33,  127 => 32,  123 => 31,  109 => 19,  102 => 14,  100 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar restaurante{% endblock %}
  
{% block body %}
    <div class=\"container\">
        <h1>Buscar Reservas</h1>
        <form action=\"{{ path('mis_reservas') }}\" method=\"get\" class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"date\" placeholder=\"Elige una fecha\" aria-label=\"Buscar\" id=\"fecha\" name=\"fecha\">
            <button class=\"btn btn-outline-success\" type=\"submit\">Buscar</button>
        </form>

        {% if reservas is empty %}
            <div class=\"alert alert-warning text-center mt-3\">
                <h4 class=\"alert-heading\">No se encontraron reservas</h4>
                <p class=\"mb-0\">Lo sentimos, no hemos encontrado ninguna reserva que coincida con su búsqueda.</p>
            </div>
        {% else %}
            <table class=\"table table-striped mt-5\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Fecha</th>
                        <th class=\"text-center\">Hora</th>
                        <th class=\"text-center\">Lugar</th>
                        <th class=\"text-center\">Mesa para:</th>
                        <th class=\"text-center\">Nombre</th>
                        <th class=\"text-center\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reserva in reservas %}
                        <tr>
                        {% set fechaHora = reserva.fechaHora|date('Y-m-d H:i:s') %}
                        {% set now = \"now\"|date('Y-m-d H:i:s') %}
                            <td class=\"text-center\">{{ reserva.fechaHora|date('Y-m-d') }}</td>
                            <td class=\"text-center\">{{ reserva.hora|date('H:i') }}</td>
                            <td class=\"text-center\">{{ reserva.lugar }}</td>
                            <td class=\"text-center\">{{ reserva.mesa }}</td>
                            <td class=\"text-center\">{{ reserva.usuario }}</td>
                            <td >
                            <form method=\"post\" action=\"{{ path('app_reserva_delete_restaurante', {'id': reserva.id}) }}\" onsubmit=\"return confirm('¿Estás seguro que deseas eliminar esta reserva?');\">
                                    
                                    {% if fechaHora >= now %}
                                    <div class=\"text-center\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reserva.id) }}\"> 
                                        <button class=\"btn btn-danger mx-auto\">Cancelar</button>
                                        <a class=\"btn btn-success\" href=\"{{ path('app_reserva_edit', {'id': reserva.id}) }}\">Modificar</a>
                                    </div>
                                    {% else %}
                                        <div class=\"text-center\">
                                            <p> Reserva ya realizada.</p>
                                        </div>
                                    {% endif %}
                            </form>

                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "menuRestaurante/reservas.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\menuRestaurante\\reservas.html.twig");
    }
}
