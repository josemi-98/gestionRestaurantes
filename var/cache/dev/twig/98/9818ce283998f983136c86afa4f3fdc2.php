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

/* user/listadoReservas.html.twig */
class __TwigTemplate_0da624293992eef304783a0c73a64e94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/listadoReservas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/listadoReservas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/listadoReservas.html.twig", 1);
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

        echo "reserva index";
        
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
        echo "
    <style>

            .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        }

        .pagination ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        }

        .pagination li {
        margin: 0 5px;
        }

        .pagination li.active a {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        }

        .pagination li a {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        color: #007bff;
        display: inline-block;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        }

    </style>

";
        // line 47
        echo "
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
  </symbol>
  <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
  </symbol>
  <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
</svg>

";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", [0 => "notice"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        ";
            // line 63
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "flashbag", [], "any", false, false, false, 69), "get", [0 => "actualizar"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 70
            echo "    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        ";
            // line 72
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2 class=\"text-center mt-3 mb-3\">Mis Reservas</h2>
        </div>
        <div class=\"card-body p-5 table-responsive\">
            <table class=\"table table-bordered\">
                <tr>
                    <th class=\"text-center\">Fecha</th>
                    <th class=\"text-center\">Hora</th>
                    <th class=\"text-center\">Lugar</th>
                    <th class=\"text-center\">Mesa para:</th>
                    <th class=\"text-center\">Restaurante</th>
                    <th class=\"text-center\">Nombre</th>
                    <th class=\"text-center\">Acciones</th>
                </tr>
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 95
            echo "                ";
            $context["fechaHora"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechaHora", [], "any", false, false, false, 95), "Y-m-d H:i:s");
            // line 96
            echo "                ";
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d H:i:s");
            // line 97
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fechaHora"]) || array_key_exists("fechaHora", $context) ? $context["fechaHora"] : (function () { throw new RuntimeError('Variable "fechaHora" does not exist.', 98, $this->source); })()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "hora", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "lugar", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "mesa", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "restaurante", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "usuario", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                    <td>
                        <form method=\"post\" action=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('¿Estás seguro que deseas eliminar esta reserva?');\">
                            ";
            // line 106
            if (((isset($context["fechaHora"]) || array_key_exists("fechaHora", $context) ? $context["fechaHora"] : (function () { throw new RuntimeError('Variable "fechaHora" does not exist.', 106, $this->source); })()) >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 106, $this->source); })()))) {
                // line 107
                echo "                                <div class=\"text-center\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 108))), "html", null, true);
                echo "\"> 
                                    <button class=\"btn btn-danger mx-auto\">Cancelar</button>
                                    <a class=\"btn btn-success\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\">Modificar</a>
                                </div>
                            ";
            } else {
                // line 113
                echo "                                <div class=\"text-center\">
                                    <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opinion_neww", ["idRestaurante" => twig_get_attribute($this->env, $this->source, (isset($context["idRestaurantes"]) || array_key_exists("idRestaurantes", $context) ? $context["idRestaurantes"] : (function () { throw new RuntimeError('Variable "idRestaurantes" does not exist.', 114, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 114), [], "array", false, false, false, 114), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\" class=\"btn btn-primary py-2 px-3 mx-auto btn-opinion\" data-restaurante-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["idRestaurantes"]) || array_key_exists("idRestaurantes", $context) ? $context["idRestaurantes"] : (function () { throw new RuntimeError('Variable "idRestaurantes" does not exist.', 114, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 114), [], "array", false, false, false, 114), "html", null, true);
                echo "\">Añadir opinión</a>
                                    <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_new", ["idRestaurante" => twig_get_attribute($this->env, $this->source, (isset($context["idRestaurantes"]) || array_key_exists("idRestaurantes", $context) ? $context["idRestaurantes"] : (function () { throw new RuntimeError('Variable "idRestaurantes" does not exist.', 115, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 115), [], "array", false, false, false, 115), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\" class=\"btn btn-primary py-2 px-3\">Reservar</a>
                                </div>
                            ";
            }
            // line 118
            echo "                        </form>
                    </td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            </table>
            <div class=\"pagination\">
                ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 124, $this->source); })()), "pageCount", [], "any", false, false, false, 124) > 1)) {
            // line 125
            echo "                    <ul>
                        ";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 126, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 126) != 1)) {
                // line 127
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()), "getRoute", [], "method", false, false, false, 127), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()), "getParams", [], "method", false, false, false, 127), ["page" => 1])), "html", null, true);
                echo "\">Primero</a></li>
                            ";
                // line 128
                $context["previousPage"] = (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 128) - 1);
                // line 129
                echo "                            ";
                if (((isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 129, $this->source); })()) > 0)) {
                    // line 130
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 130, $this->source); })()), "getRoute", [], "method", false, false, false, 130), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 130, $this->source); })()), "getParams", [], "method", false, false, false, 130), ["page" => (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 130, $this->source); })())])), "html", null, true);
                    echo "\">Anterior</a></li>
                            ";
                }
                // line 132
                echo "                        ";
            }
            // line 133
            echo "
                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "getPaginationData", [], "method", false, false, false, 134), "pagesInRange", [], "array", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 135
                echo "                            ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 135))) {
                    // line 136
                    echo "                            <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 138
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 138, $this->source); })()), "getRoute", [], "method", false, false, false, 138), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 138, $this->source); })()), "getParams", [], "method", false, false, false, 138), ["page" => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 140
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "
                        ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 142, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 142) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 142, $this->source); })()), "pageCount", [], "any", false, false, false, 142))) {
                // line 143
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "getRoute", [], "method", false, false, false, 143), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "getParams", [], "method", false, false, false, 143), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 143) + 1)])), "html", null, true);
                echo "\">Siguiente</a></li>
                        ";
            }
            // line 145
            echo "                    </ul>
                ";
        }
        // line 147
        echo "            </div>
        </div>
    </div>
</div>



<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
";
        // line 181
        echo "</script>

  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/listadoReservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 181,  382 => 147,  378 => 145,  372 => 143,  370 => 142,  367 => 141,  361 => 140,  353 => 138,  347 => 136,  344 => 135,  340 => 134,  337 => 133,  334 => 132,  328 => 130,  325 => 129,  323 => 128,  318 => 127,  316 => 126,  313 => 125,  311 => 124,  307 => 122,  290 => 118,  284 => 115,  278 => 114,  275 => 113,  269 => 110,  264 => 108,  261 => 107,  259 => 106,  255 => 105,  250 => 103,  246 => 102,  242 => 101,  238 => 100,  234 => 99,  230 => 98,  227 => 97,  224 => 96,  221 => 95,  204 => 94,  185 => 77,  174 => 72,  170 => 70,  166 => 69,  163 => 68,  152 => 63,  148 => 61,  144 => 60,  129 => 47,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}reserva index{% endblock %}

  
{% block body %}

    <style>

            .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        }

        .pagination ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        }

        .pagination li {
        margin: 0 5px;
        }

        .pagination li.active a {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        }

        .pagination li a {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        color: #007bff;
        display: inline-block;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        }

    </style>

{# Mensajes de informacion al usuario, en este caso el reserva creado #}

<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
  </symbol>
  <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
  </symbol>
  <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
</svg>

{% for flash_message in app.session.flashbag.get('notice') %}
    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        {{ flash_message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
{% endfor %}

{% for flash_message in app.session.flashbag.get('actualizar') %}
    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        {{ flash_message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
{% endfor %}

<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2 class=\"text-center mt-3 mb-3\">Mis Reservas</h2>
        </div>
        <div class=\"card-body p-5 table-responsive\">
            <table class=\"table table-bordered\">
                <tr>
                    <th class=\"text-center\">Fecha</th>
                    <th class=\"text-center\">Hora</th>
                    <th class=\"text-center\">Lugar</th>
                    <th class=\"text-center\">Mesa para:</th>
                    <th class=\"text-center\">Restaurante</th>
                    <th class=\"text-center\">Nombre</th>
                    <th class=\"text-center\">Acciones</th>
                </tr>
                {% for reserva in pagination %}
                {% set fechaHora = reserva.fechaHora|date('Y-m-d H:i:s') %}
                {% set now = \"now\"|date('Y-m-d H:i:s') %}
                <tr>
                    <td class=\"text-center\">{{ fechaHora|date('Y-m-d') }}</td>
                    <td class=\"text-center\">{{ reserva.hora }}</td>
                    <td class=\"text-center\">{{ reserva.lugar }}</td>
                    <td class=\"text-center\">{{ reserva.mesa }}</td>
                    <td class=\"text-center\">{{ reserva.restaurante }}</td>
                    <td class=\"text-center\">{{ reserva.usuario }}</td>
                    <td>
                        <form method=\"post\" action=\"{{ path('app_reserva_delete', {'id': reserva.id}) }}\" onsubmit=\"return confirm('¿Estás seguro que deseas eliminar esta reserva?');\">
                            {% if fechaHora >= now %}
                                <div class=\"text-center\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reserva.id) }}\"> 
                                    <button class=\"btn btn-danger mx-auto\">Cancelar</button>
                                    <a class=\"btn btn-success\" href=\"{{ path('app_reserva_edit', {'id': reserva.id}) }}\">Modificar</a>
                                </div>
                            {% else %}
                                <div class=\"text-center\">
                                    <a href=\"{{ path('app_opinion_neww', {'idRestaurante': idRestaurantes[loop.index0], 'idUser': app.user.id }) }}\" class=\"btn btn-primary py-2 px-3 mx-auto btn-opinion\" data-restaurante-id=\"{{ idRestaurantes[loop.index0] }}\">Añadir opinión</a>
                                    <a href=\"{{ path('app_reserva_new', {'idRestaurante': idRestaurantes[loop.index0], 'idUser': app.user.id }) }}\" class=\"btn btn-primary py-2 px-3\">Reservar</a>
                                </div>
                            {% endif %}
                        </form>
                    </td>
                </tr>
                {% endfor %}
            </table>
            <div class=\"pagination\">
                {% if pagination.pageCount > 1 %}
                    <ul>
                        {% if pagination.getCurrentPageNumber() != 1 %}
                            <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': 1})) }}\">Primero</a></li>
                            {% set previousPage = pagination.getCurrentPageNumber() - 1 %}
                            {% if previousPage > 0 %}
                            <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': previousPage})) }}\">Anterior</a></li>
                            {% endif %}
                        {% endif %}

                        {% for page in pagination.getPaginationData()['pagesInRange'] %}
                            {% if page == pagination.getCurrentPageNumber() %}
                            <li class=\"active\"><a href=\"#\">{{ page }}</a></li>
                            {% else %}
                            <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': page})) }}\">{{ page }}</a></li>
                            {% endif %}
                        {% endfor %}

                        {% if pagination.getCurrentPageNumber() != pagination.pageCount %}
                            <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': pagination.getCurrentPageNumber() + 1})) }}\">Siguiente</a></li>
                        {% endif %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
</div>



<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
{# \$(document).ready(function() {
  \$('.btn-opinion').on('click', function() {
    var btnOpinion = \$(this);
    var restauranteId = btnOpinion.data('restaurante-id');

    // Guardar una marca en el almacenamiento local para indicar que el usuario ha añadido una opinión para este restaurante
    localStorage.setItem('opinionAñadida_' + restauranteId, 'true');

    // Ocultar el botón de opinión actual
    btnOpinion.hide();
  });

  \$('.btn-opinion').each(function() {
    var btnOpinion = \$(this);
    var restauranteId = btnOpinion.data('restaurante-id');

    // Verificar si se ha guardado una marca en el almacenamiento local para este restaurante
    var opinionAñadida = localStorage.getItem('opinionAñadida_' + restauranteId);

    // Ocultar el botón de opinión si se ha registrado que el usuario ya ha añadido una opinión para este restaurante
    if (opinionAñadida) {
      btnOpinion.hide();
    }
  });
}); #}
</script>

  
{% endblock %}
", "user/listadoReservas.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\user\\listadoReservas.html.twig");
    }
}
