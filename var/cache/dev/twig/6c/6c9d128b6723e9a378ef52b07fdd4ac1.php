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

/* opinion/indexRestaurante.html.twig */
class __TwigTemplate_c24cc7ebe7ad9576bdbaa2e8261fc86e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/indexRestaurante.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/indexRestaurante.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opinion/indexRestaurante.html.twig", 1);
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

        echo "opinion index";
        
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
                <h2 class=\"text-center mt-2\">OPINIONES</h2>
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("miRestaurante");
        echo "\"> 
                    Restaurante
                </a>
            </div>
            <div class=\"card-body table-responsive\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th class=\"text-center\">Valoracion</th>
                        <th class=\"text-center\">Comentario</th>
                        <th class=\"text-center\">Usuario</th>
                        <th class=\"text-center\">Respuesta</th>
                        <th class=\"text-center\">Acciones</th>
                    </tr>
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 95, $this->source); })()), "opinions", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 96
            echo "                    <tr>
                        <td class=\"text-center\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "valoracion", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "comentario", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "user", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "respuesta", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                        <td>
                    <a
                        class=\"btn btn-outline-info\"
                        href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opinion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opinion"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">
                        Responder
                    </a>
                    
            </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </table>
                    ";
        // line 139
        echo "            </div>
        </div>
    </div>


    
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "opinion/indexRestaurante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 139,  247 => 111,  234 => 104,  227 => 100,  223 => 99,  219 => 98,  215 => 97,  212 => 96,  208 => 95,  192 => 82,  185 => 77,  174 => 72,  170 => 70,  166 => 69,  163 => 68,  152 => 63,  148 => 61,  144 => 60,  129 => 47,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}opinion index{% endblock %}

  
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

{# Mensajes de informacion al usuario, en este caso el opinion creado #}

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
                <h2 class=\"text-center mt-2\">OPINIONES</h2>
                <a class=\"btn btn-outline-primary\" href=\"{{ path('miRestaurante') }}\"> 
                    Restaurante
                </a>
            </div>
            <div class=\"card-body table-responsive\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th class=\"text-center\">Valoracion</th>
                        <th class=\"text-center\">Comentario</th>
                        <th class=\"text-center\">Usuario</th>
                        <th class=\"text-center\">Respuesta</th>
                        <th class=\"text-center\">Acciones</th>
                    </tr>
                    {% for opinion in restaurante.opinions %}
                    <tr>
                        <td class=\"text-center\">{{ opinion.valoracion }}</td>
                        <td class=\"text-center\">{{ opinion.comentario }}</td>
                        <td class=\"text-center\">{{ opinion.user }}</td>
                        <td class=\"text-center\">{{ opinion.respuesta }}</td>
                        <td>
                    <a
                        class=\"btn btn-outline-info\"
                        href=\"{{ path('app_opinion_edit', {'id': opinion.id}) }}\">
                        Responder
                    </a>
                    
            </td>
                    </tr>
                    {% endfor %}
                </table>
                    {# <div class=\"pagination\">
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
                                {# <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': pagination.getCurrentPageNumber() - 1})) }}\">Anterior</a></li> 

                            {% endif %}
                            </ul>
                        {% endif %}
                    </div> #}
            </div>
        </div>
    </div>


    
  
{% endblock %}
", "opinion/indexRestaurante.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\opinion\\indexRestaurante.html.twig");
    }
}
