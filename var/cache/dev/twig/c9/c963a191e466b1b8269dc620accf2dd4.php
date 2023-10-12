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

/* user/verRestaurantes.html.twig */
class __TwigTemplate_77da1d38f642fe98f6a5df24ee33b0fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/verRestaurantes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/verRestaurantes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/verRestaurantes.html.twig", 1);
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
        echo "<div class=\"section section-properties\">
      <div class=\"container\">
        <div class=\"row\">

          <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verRestaurantes");
        echo "\" method=\"GET\" class=\"d-flex mb-5\">
            <input type=\"text\" name=\"busqueda\" placeholder=\"Buscar restaurante\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "query", [], "any", false, false, false, 9), "get", [0 => "busqueda"], "method", false, false, false, 9), "html", null, true);
        echo "\" class=\"form-control me-2\">
            <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
          </form>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurante"]) {
            // line 13
            echo "          ";
            if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13), "get", [0 => "busqueda"], "method", false, false, false, 13)) || twig_matches((("/^" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13), "get", [0 => "busqueda"], "method", false, false, false, 13)) . "/i"), twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 13)))) {
                // line 14
                echo "
          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 \">
            <div class=\"property-item mb-30 shadow-lg\">
              <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseñas", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"img\">
                        <div class=\"position-relative\">
                          <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFile"), "html", null, true);
                echo "\" alt=\"image\" height=\"3000px\" width=\"2000px\" class=\"img-fluid rounded mx-auto\">
                          <div class=\"position-absolute top-0 end-0 \">
                            <div class=\"btn btn-primary p-3\" style=\"opacity: 0.8\">
                                <div class=\"text-white text-center\">
                                  ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaValoraciones"]) || array_key_exists("mediaValoraciones", $context) ? $context["mediaValoraciones"] : (function () { throw new RuntimeError('Variable "mediaValoraciones" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 23), [], "array", false, false, false, 23), "html", null, true);
                echo "
                                </div> 
                                <div class=\"text-white text-center\">
                                    ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalOpiniones"]) || array_key_exists("totalOpiniones", $context) ? $context["totalOpiniones"] : (function () { throw new RuntimeError('Variable "totalOpiniones" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 26), [], "array", false, false, false, 26), "html", null, true);
                echo " reseñas
                                </div>
                              
                            </div>
                        </div>
                      </div>
                        
                      </a>

              <div class=\"property-content\">
                
                <div>
                  <span class=\"city d-block mb-3\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 38), "html", null, true);
                echo "</span>
                  <div class=\"specs d-flex mb-4\">
                    <span class=\"d-block d-flex align-items-center me-3\">
                      <span class=\"me-2\"><i class=\"fa-sharp fa-solid fa-location-dot\"></i></span>
                      <span class=\"caption\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "direccion", [], "any", false, false, false, 42), "html", null, true);
                echo "</span>
                    </span>

                  </div>

                  <div class=\"specs d-flex mb-4\">
                    <span class=\"d-block d-flex align-items-center me-3\">
                      <span class=\" me-2\"><i class=\"fa-solid fa-mobile-screen-button\"></i></span>
                      <span class=\"caption\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "contacto", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                    </span>
                  </div>

                   <a class=\"specs d-flex mb-4 a__modificado\" id=\"btn-mas-informacion\">Más información</a>
                          <div class=\"informacion-adicional mt-4\" style=\"display:none;\">
                            <!-- Aquí va el contenido adicional -->
                            <h6>Informacion acerca de nosotros:</h6>
                            <span class=\"d-block mb-2 text-black-50\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "descripcion", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                            <h6>Horario:</h6>
                            <span class=\"d-block mb-2 text-black-50\">";
                // line 60
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "horario", [], "any", false, false, false, 60), "html", null, true));
                echo "</span>
                            <a class=\"d-flex mb-4 a__modificado mostrar-imagen\" data-imagen=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFileCarta"), "html", null, true);
                echo "\">Ver Carta</a>
                          </div>

                  <a
                  ";
                // line 66
                echo "                    href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_new", ["idRestaurante" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 66), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\"
                    class=\"btn btn-primary py-2 px-3\">Reservar en ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nombresRestaurantes"]) || array_key_exists("nombresRestaurantes", $context) ? $context["nombresRestaurantes"] : (function () { throw new RuntimeError('Variable "nombresRestaurantes" does not exist.', 67, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 67), [], "array", false, false, false, 67), "html", null, true);
                echo "</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
              ";
            }
            // line 75
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "          </div>
          
          </div>
        </div>
        ";
        // line 91
        echo "        </div>
      </div>
    </div>

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var mostrarImagenBtns = document.querySelectorAll('.mostrar-imagen');

    mostrarImagenBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        var imagenUrl = this.getAttribute('data-imagen');

        // Crear una ventana emergente o un modal con la imagen ampliada
        var modalHtml = `
          <div class=\"modal\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
                </div>
                <div class=\"modal-body\">
                  <img src=\"\${imagenUrl}\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          </div>
        `;

        // Insertar el modal en el documento
        document.body.insertAdjacentHTML('beforeend', modalHtml);

        // Mostrar el modal utilizando Bootstrap
        var modal = document.querySelector('.modal');
        var bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        // Manejar el evento de cierre del modal
        var closeModalBtn = modal.querySelector('.btn-close');
        closeModalBtn.addEventListener('click', function() {
          bootstrapModal.hide();
          modal.remove();
        });
      });
    });
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/verRestaurantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 91,  196 => 76,  190 => 75,  179 => 67,  174 => 66,  167 => 61,  163 => 60,  158 => 58,  147 => 50,  136 => 42,  129 => 38,  114 => 26,  108 => 23,  101 => 19,  96 => 17,  91 => 14,  88 => 13,  84 => 12,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"section section-properties\">
      <div class=\"container\">
        <div class=\"row\">

          <form action=\"{{ path('verRestaurantes') }}\" method=\"GET\" class=\"d-flex mb-5\">
            <input type=\"text\" name=\"busqueda\" placeholder=\"Buscar restaurante\" value=\"{{ app.request.query.get('busqueda') }}\" class=\"form-control me-2\">
            <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
          </form>
        {% for restaurante in restaurantes %}
          {% if app.request.query.get('busqueda') is empty or restaurante.nombre matches '/^' ~ app.request.query.get('busqueda') ~ '/i' %}

          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 \">
            <div class=\"property-item mb-30 shadow-lg\">
              <a href=\"{{ path('reseñas', {'id': restaurante.id})}}\" class=\"img\">
                        <div class=\"position-relative\">
                          <img src=\"{{ vich_uploader_asset(restaurante, 'imageFile') }}\" alt=\"image\" height=\"3000px\" width=\"2000px\" class=\"img-fluid rounded mx-auto\">
                          <div class=\"position-absolute top-0 end-0 \">
                            <div class=\"btn btn-primary p-3\" style=\"opacity: 0.8\">
                                <div class=\"text-white text-center\">
                                  {{ mediaValoraciones[restaurante.id] }}
                                </div> 
                                <div class=\"text-white text-center\">
                                    {{ totalOpiniones[restaurante.id] }} reseñas
                                </div>
                              
                            </div>
                        </div>
                      </div>
                        
                      </a>

              <div class=\"property-content\">
                
                <div>
                  <span class=\"city d-block mb-3\">{{ restaurante.nombre }}</span>
                  <div class=\"specs d-flex mb-4\">
                    <span class=\"d-block d-flex align-items-center me-3\">
                      <span class=\"me-2\"><i class=\"fa-sharp fa-solid fa-location-dot\"></i></span>
                      <span class=\"caption\">{{ restaurante.direccion }}</span>
                    </span>

                  </div>

                  <div class=\"specs d-flex mb-4\">
                    <span class=\"d-block d-flex align-items-center me-3\">
                      <span class=\" me-2\"><i class=\"fa-solid fa-mobile-screen-button\"></i></span>
                      <span class=\"caption\">{{ restaurante.contacto }}</span>
                    </span>
                  </div>

                   <a class=\"specs d-flex mb-4 a__modificado\" id=\"btn-mas-informacion\">Más información</a>
                          <div class=\"informacion-adicional mt-4\" style=\"display:none;\">
                            <!-- Aquí va el contenido adicional -->
                            <h6>Informacion acerca de nosotros:</h6>
                            <span class=\"d-block mb-2 text-black-50\">{{ restaurante.descripcion }}</span>
                            <h6>Horario:</h6>
                            <span class=\"d-block mb-2 text-black-50\">{{ restaurante.horario|nl2br }}</span>
                            <a class=\"d-flex mb-4 a__modificado mostrar-imagen\" data-imagen=\"{{ vich_uploader_asset(restaurante, 'imageFileCarta') }}\">Ver Carta</a>
                          </div>

                  <a
                  {# {{ reservaUrl|replace({'id': restaurante.id}) }} #}
                    href=\"{{ path('app_reserva_new', {'idRestaurante': restaurante.id, 'idUser': app.user.id })}}\"
                    class=\"btn btn-primary py-2 px-3\">Reservar en {{ nombresRestaurantes[restaurante.id] }}</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
              {% endif %}
            {% endfor %}
          </div>
          
          </div>
        </div>
        {# <div class=\"row align-items-center py-5\">
          <div class=\"col-lg-3\">Pagination (1 of 10)</div>
          <div class=\"col-lg-6 text-center\">
            <div class=\"custom-pagination\">
              <a href=\"#\">1</a>
              <a href=\"#\" class=\"active\">2</a>
              <a href=\"#\">3</a>
              <a href=\"#\">4</a>
              <a href=\"#\">5</a>
            </div>
          </div> #}
        </div>
      </div>
    </div>

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var mostrarImagenBtns = document.querySelectorAll('.mostrar-imagen');

    mostrarImagenBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        var imagenUrl = this.getAttribute('data-imagen');

        // Crear una ventana emergente o un modal con la imagen ampliada
        var modalHtml = `
          <div class=\"modal\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
                </div>
                <div class=\"modal-body\">
                  <img src=\"\${imagenUrl}\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          </div>
        `;

        // Insertar el modal en el documento
        document.body.insertAdjacentHTML('beforeend', modalHtml);

        // Mostrar el modal utilizando Bootstrap
        var modal = document.querySelector('.modal');
        var bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        // Manejar el evento de cierre del modal
        var closeModalBtn = modal.querySelector('.btn-close');
        closeModalBtn.addEventListener('click', function() {
          bootstrapModal.hide();
          modal.remove();
        });
      });
    });
  });
</script>
{% endblock %}
", "user/verRestaurantes.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\user\\verRestaurantes.html.twig");
    }
}
