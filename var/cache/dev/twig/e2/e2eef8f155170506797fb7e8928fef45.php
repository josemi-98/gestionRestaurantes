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

/* user/perfil.html.twig */
class __TwigTemplate_726f29a4cf3aca643775cf467ca31a95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/perfil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/perfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/perfil.html.twig", 1);
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


<script>

\$(document).ready(function(){
      \$('.toast').toast('show');


      var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class=\"alert alert-' + type + ' alert-dismissible\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Genial, activaste este mensaje de alerta.', 'success')
  })
}
    });

</script>



<div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
  <!-- Position it: -->
  <!-- - `.toast-container` for spacing between toasts -->
  <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
  <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
  <div class=\"toast-container position-absolute top-0 end-0 p-3\">

    <!-- Then put toasts within -->
    <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      <div class=\"toast-header bg-light\">
        <i class=\"bi bi-messenger\"></i>
        <strong class=\"me-auto\">Mensaje</strong>
        <small class=\"text-muted\">ahora mismo</small>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
        Bienvenido a xocasCia
      </div>
    </div>
  </div>
</div>


<!--form Modal -->
                    <div class=\"modal fade text-left\" id=\"inlineForm\" tabindex=\"-1\" aria-labelledby=\"myModalLabel33\" style=\"display: none;\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" role=\"document\">
                        <div class=\"modal-content\">



                            <div class=\"modal-header bg-primary\">

                            <h4 class=\"modal-title\" id=\"myModalLabel33\">Ediccion de perfil </h4>
                            <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                            </button>

                            
                            </div>

                            <div class=\"alert alert-info m-2\" role=\"alert\">
                              Edita el campo que quieras y guarda.
                            </div>

                            
                            <form action=\"#\"  class=\"was-validated\">
                            <div class=\"modal-body\">
                                <label for=\"nombre\">Nombre: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" placeholder=\"Jose\" class=\"form-control\" id=\"nombre\" name=\"nombre\" required>
                                  <div class=\"valid-feedback\">Valido.</div>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"ancho\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"Jose@gmail.com\" class=\"form-control\" id=\"ancho\" name=\"ancho\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"alto\">Contacto</label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"678457685\" class=\"form-control\" id=\"alto\" name=\"alto\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"alto\">Nueva contraseña</label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"aaJKL123\" class=\"form-control\" id=\"alto\" name=\"alto\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                            </div>
                                ";
        // line 107
        echo "                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-light-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-x d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Cancelar</span>
                                </button>
                                <button type=\"button\" id=\"crear\" class=\"btn btn-primary ml-1\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-check d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Editar</span>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>




";
        // line 127
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
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "session", [], "any", false, false, false, 140), "flashbag", [], "any", false, false, false, 140), "get", [0 => "notice"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 141
            echo "    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        ";
            // line 143
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
        // line 148
        echo "

<section >
  <div class=\"container py-5 shadow-lg p-3 mb-5 bg-body rounded\">
    <div class=\"row\">
      <div class=\"col\">
        <nav aria-label=\"breadcrumb\" class=\"bg-light rounded-3 header--border p-3 mb-4\">
          <h1>Perfil</h1>

          <a href=\"\" class=\" d-flex flex-row-reverse\" data-bs-toggle=\"modal\" data-bs-target=\"#inlineForm\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
            </svg>
              </a>
        </nav>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"card mb-4\">
          <div class=\"card-body text-center\">
            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp\" alt=\"avatar\"
              class=\"rounded-circle img-fluid\" style=\"width: 150px;\">
            <h5 class=\"my-3\">";
        // line 173
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "nombre", [], "any", false, false, false, 173)), "html", null, true);
        echo "</h5>
            ";
        // line 180
        echo "          </div>
        </div>
        <div class=\"card mb-4 mb-lg-0\">
          <div class=\"card-body p-0\">
            <ul class=\"list-group list-group-flush rounded-3\">
              <li class=\"list-group-item  align-items-center p-3\">
                <h5>Si desea informacion de como hacer las reservas. </h5> <br>
                <a class=\"nav-link active\" href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        echo "\"> Pinche aqui</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-lg-8\">
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Nombre</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "nombre", [], "any", false, false, false, 201), "html", null, true);
        echo "</p>
              </div>
            </div>
            <hr>
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Correo</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "user", [], "any", false, false, false, 210), "email", [], "any", false, false, false, 210), "html", null, true);
        echo "</p>
              </div>
            </div>
            <hr>
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Telefono</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "user", [], "any", false, false, false, 219), "contacto", [], "any", false, false, false, 219), "html", null, true);
        echo "</p>
              </div>
            </div>
            
            
          </div>
        </div>
        ";
        // line 242
        echo "      </div>
    </div>
  </div>
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 242,  305 => 219,  293 => 210,  281 => 201,  264 => 187,  255 => 180,  251 => 173,  224 => 148,  213 => 143,  209 => 141,  205 => 140,  190 => 127,  169 => 107,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}



<script>

\$(document).ready(function(){
      \$('.toast').toast('show');


      var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class=\"alert alert-' + type + ' alert-dismissible\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Genial, activaste este mensaje de alerta.', 'success')
  })
}
    });

</script>



<div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
  <!-- Position it: -->
  <!-- - `.toast-container` for spacing between toasts -->
  <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
  <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
  <div class=\"toast-container position-absolute top-0 end-0 p-3\">

    <!-- Then put toasts within -->
    <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      <div class=\"toast-header bg-light\">
        <i class=\"bi bi-messenger\"></i>
        <strong class=\"me-auto\">Mensaje</strong>
        <small class=\"text-muted\">ahora mismo</small>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
        Bienvenido a xocasCia
      </div>
    </div>
  </div>
</div>


<!--form Modal -->
                    <div class=\"modal fade text-left\" id=\"inlineForm\" tabindex=\"-1\" aria-labelledby=\"myModalLabel33\" style=\"display: none;\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" role=\"document\">
                        <div class=\"modal-content\">



                            <div class=\"modal-header bg-primary\">

                            <h4 class=\"modal-title\" id=\"myModalLabel33\">Ediccion de perfil </h4>
                            <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                            </button>

                            
                            </div>

                            <div class=\"alert alert-info m-2\" role=\"alert\">
                              Edita el campo que quieras y guarda.
                            </div>

                            
                            <form action=\"#\"  class=\"was-validated\">
                            <div class=\"modal-body\">
                                <label for=\"nombre\">Nombre: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" placeholder=\"Jose\" class=\"form-control\" id=\"nombre\" name=\"nombre\" required>
                                  <div class=\"valid-feedback\">Valido.</div>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"ancho\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"Jose@gmail.com\" class=\"form-control\" id=\"ancho\" name=\"ancho\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"alto\">Contacto</label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"678457685\" class=\"form-control\" id=\"alto\" name=\"alto\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                                <label for=\"alto\">Nueva contraseña</label>
                                <div class=\"form-group\">
                                <input type=\"int\" placeholder=\"aaJKL123\" class=\"form-control\" id=\"alto\" name=\"alto\" required>
                                  <div class=\"invalid-feedback\">Porfavor rellena este campo.</div>
                                </div>
                            </div>
                                {# </div>
                                    <div id=\"respuesta\" class=\"alert alert-success\">

                                </div> #}
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-light-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-x d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Cancelar</span>
                                </button>
                                <button type=\"button\" id=\"crear\" class=\"btn btn-primary ml-1\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-check d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Editar</span>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>




{# Mensajes de informacion al usuario, en este caso el correo enviado #}

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


<section >
  <div class=\"container py-5 shadow-lg p-3 mb-5 bg-body rounded\">
    <div class=\"row\">
      <div class=\"col\">
        <nav aria-label=\"breadcrumb\" class=\"bg-light rounded-3 header--border p-3 mb-4\">
          <h1>Perfil</h1>

          <a href=\"\" class=\" d-flex flex-row-reverse\" data-bs-toggle=\"modal\" data-bs-target=\"#inlineForm\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
            </svg>
              </a>
        </nav>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"card mb-4\">
          <div class=\"card-body text-center\">
            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp\" alt=\"avatar\"
              class=\"rounded-circle img-fluid\" style=\"width: 150px;\">
            <h5 class=\"my-3\">{{ app.user.nombre | upper }}</h5>
            {# <p class=\"text-muted mb-1\">Full Stack Developer</p>
            <p class=\"text-muted mb-4\">Bay Area, San Francisco, CA</p>
            <div class=\"d-flex justify-content-center mb-2\">
              <button type=\"button\" class=\"btn btn-primary\">Follow</button>
              <button type=\"button\" class=\"btn btn-outline-primary ms-1\">Message</button>
            </div> #}
          </div>
        </div>
        <div class=\"card mb-4 mb-lg-0\">
          <div class=\"card-body p-0\">
            <ul class=\"list-group list-group-flush rounded-3\">
              <li class=\"list-group-item  align-items-center p-3\">
                <h5>Si desea informacion de como hacer las reservas. </h5> <br>
                <a class=\"nav-link active\" href=\"{{ path('email') }}\"> Pinche aqui</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-lg-8\">
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Nombre</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">{{ app.user.nombre }}</p>
              </div>
            </div>
            <hr>
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Correo</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">{{ app.user.email }}</p>
              </div>
            </div>
            <hr>
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <p class=\"mb-0\">Telefono</p>
              </div>
              <div class=\"col-sm-9\">
                <p class=\"text-muted mb-0\">{{ app.user.contacto }}</p>
              </div>
            </div>
            
            
          </div>
        </div>
        {# <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card mb-4 mb-md-0\">
              <div class=\"card-body\">
                <p class=\"mb-4\"><span class=\"text-primary font-italic me-1\">Puntuacion
                </p>
                <p class=\"mb-1\" style=\"font-size: .77rem;\">Tus puntos:</p>
                <div class=\"progress rounded\" style=\"\">
                  <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ app.user.puntos }}%\" aria-valuenow=\"80\"
                    aria-valuemin=\"0\" aria-valuemax=\"100\"> {{ app.user.puntos }}</div>
                </div>
                
              </div>
            </div>
          </div>
        </div> #}
      </div>
    </div>
  </div>
</section>


{% endblock %}", "user/perfil.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\user\\perfil.html.twig");
    }
}
