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

/* base.html.twig */
class __TwigTemplate_9a52277098238b357bcd993cceb6814a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"author\" content=\"Untree.co\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/Logo2.png"), "html", null, true);
        echo "\" />
        <!-- Estilos de Flatpickr -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\">

        <!-- Estilos personalizados -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
    
    <!-- Scripts personalizados -->
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"bootstrap, bootstrap5\" />

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <linkhref=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"/fonts/icomoon/style.css\" />
        <link rel=\"stylesheet\" href=\"/fonts/flaticon/font/flaticon.css\" />

        <link rel=\"stylesheet\" href=\"/css/tiny-slider.css\" />
        <link rel=\"stylesheet\" href=\"/css/aos.css\" />
        <link rel=\"stylesheet\" href=\"/css/myCss.css\" />
        <link rel=\"stylesheet\" href=\"/css/style.css\" />

        <title>
        Click & Go
        </title>
         <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        ";
        // line 39
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTIFICATED_FULLY")) {
            // line 40
            echo "
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "        <style>

            .btn-primary:hover {
                /* Agrega aquí tus estilos personalizados para el hover */
                background-color: hsl(180, 100%, 10%);
              }
        
        </style>
    </head>
    <body>

    <nav class=\"navbar navbar-expand-lg navbar-dark mb-5 sticky-top p-4 myNav\">
    <div class=\"container-xl\">
      <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\" class=\"logo m-0 float-start text-decoration-none\">Click & Go</a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>
      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  
      ";
        // line 71
        echo "      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 72
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Mantenimiento</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_index");
            echo "\">Restaurante</a>
          </li>
        </ul>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESTAURANTE")) {
            // line 81
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mis_reservas");
            echo "\">Reservas</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("miRestaurante");
            echo "\">Mi restaurante</a>
          </li>
        </ul>
        ";
        } else {
            // line 91
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verRestaurantes");
            echo "\">Restaurantes</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misReservas");
            echo "\">Mis reservas</a>
          </li>
        </ul>
        ";
        }
        // line 100
        echo "        ";
        // line 101
        echo "        <p><code></code><code></code></p><hr><p></p>

        ";
        // line 104
        echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active \" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
        echo "\" id=\"dropdown07XL\" aria-expanded=\"false\">Perfil</a>
          </li>
        </ul>
        ";
        // line 114
        echo "        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user cssToolTip \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    ";
        // line 120
        echo "                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Bienvenido, ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "nombre", [], "any", false, false, false, 121), "html", null, true);
        echo " </div>
                            ";
        // line 123
        echo "                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
        </form>
      </div>
    </div>
  </nav>

        ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "
";
        // line 143
        echo "        <footer class=\"mt-5\">
            <div class=\"site-footer\">
        
            <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Contacto</h3>
                <address>Calle Valencia, Jaen 23006</address>
                <ul class=\"list-unstyled links\">
                    <li><a style=\"text-decoration:none\" href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                    <li><a style=\"text-decoration:none\" href=\"tel://11234567890\">+34 653 59 24 43</a></li>
                    <li>
                    <a style=\"text-decoration:none\" href=\"mailto:info@mydomain.com\">info@mydomain.com</a>
                    </li>
                </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Fuentes</h3>
                <ul class=\"list-unstyled float-start links\">
                    <li><a href=\"#\" style=\"text-decoration:none\">Servicios</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Vision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Mision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Terminos</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Privacidad</a></li>
                </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Links</h3>
                <ul class=\"list-unstyled links\">
                    <li><a href=\"#\" style=\"text-decoration:none\">Nuestra Vision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Sobre nosotros</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Contactanos</a></li>
                </ul>
                <ul class=\"list-unstyled social\">
                    <li>
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-pinterest\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-dribbble\"></span></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <p>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                . Reservados todos los derechos. &mdash; Diseñado por
                <a href=\"#\" style=\"text-decoration:none\">Josemimb</a>
                <!-- License information: https://untree.co/license/ -->
                </p>
                <div>
                Distribuido por
                <a href=\"#\" target=\"_blank\" style=\"text-decoration:none\">Josemimb</a>
                </div>
            </div>
            </div>
        </div>
        <!-- /.container -->
        </div>
        </footer>
        <!-- /.site-footer -->
        <!-- Preloader -->
        <div id=\"overlayer\"></div>
        <div class=\"loader\">
        <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">Loading...</span>
        </div>
        </div>
        ";
        // line 238
        echo "        <script src=\"/js/bootstrap.bundle.min.js\"></script>
        <script src=\"/js/tiny-slider.js\"></script>
        <script src=\"/js/aos.js\"></script>
        <script src=\"/js/navbar.js\"></script>
        <script src=\"/js/counter.js\"></script>
        <script src=\"/js/custom.js\"></script>
        <script src=\"/js/jquery.js\"></script>
        <script src=\"/js/jquery-ui.js\"></script>
        <script>
          \$(document).ready(function() {
              // Agrega evento clic a todos los enlaces con id \"btn-mas-informacion\"
              \$('a#btn-mas-informacion').click(function(event) {
                event.preventDefault(); // Previene que el enlace haga su acción por defecto
                \$(this).siblings('.informacion-adicional').toggle('fast'); // Muestra u oculta el elemento hermano con la clase \"informacion-adicional\"
                \$(this).text(function(i, text) {
                  return text === \"Más información\" ? \"Ocultar información\" : \"Más información\";
                }); // Cambia el texto del enlace según el estado del elemento
                \$(this).css('color', 'black'); 
                \$(this).css('font-size', '14px');
              });
            });
        </script>
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            // Inicializar Flatpickr en los campos de fecha
            flatpickr(\".datepicker\", {
                // Opciones adicionales de configuración de Flatpickr
            });
        </script>

<script>
        // Inicializar los selectores de fecha global
        const datepickers = document.querySelectorAll('.datepicker');
        datepickers.forEach(function(datepicker) {
            datepicker.type = 'date';
        });
    </script>
    
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.structure.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.theme.css\">
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 45
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo "       

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 138,  456 => 137,  443 => 49,  433 => 48,  420 => 45,  410 => 44,  378 => 260,  354 => 238,  258 => 143,  255 => 141,  253 => 137,  241 => 128,  236 => 126,  231 => 123,  227 => 121,  224 => 120,  217 => 114,  211 => 110,  205 => 107,  200 => 104,  196 => 101,  194 => 100,  187 => 96,  181 => 93,  177 => 91,  170 => 87,  164 => 84,  159 => 81,  152 => 77,  146 => 74,  142 => 72,  139 => 71,  130 => 64,  115 => 51,  113 => 48,  110 => 47,  107 => 44,  104 => 42,  100 => 40,  98 => 39,  71 => 15,  65 => 12,  59 => 9,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"author\" content=\"Untree.co\" />
        <link rel=\"shortcut icon\" href=\"{{ asset('imagenes/Logo2.png') }}\" />
        <!-- Estilos de Flatpickr -->
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/flatpickr/dist/flatpickr.min.css') }}\">

        <!-- Estilos personalizados -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">
    
    <!-- Scripts personalizados -->
    <script src=\"{{ asset('js/custom.js') }}\"></script>

        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"bootstrap, bootstrap5\" />

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <linkhref=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"/fonts/icomoon/style.css\" />
        <link rel=\"stylesheet\" href=\"/fonts/flaticon/font/flaticon.css\" />

        <link rel=\"stylesheet\" href=\"/css/tiny-slider.css\" />
        <link rel=\"stylesheet\" href=\"/css/aos.css\" />
        <link rel=\"stylesheet\" href=\"/css/myCss.css\" />
        <link rel=\"stylesheet\" href=\"/css/style.css\" />

        <title>
        Click & Go
        </title>
         <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        {% if not is_granted('IS_AUTHENTIFICATED_FULLY') %}

        {% endif %}

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
        <style>

            .btn-primary:hover {
                /* Agrega aquí tus estilos personalizados para el hover */
                background-color: hsl(180, 100%, 10%);
              }
        
        </style>
    </head>
    <body>

    <nav class=\"navbar navbar-expand-lg navbar-dark mb-5 sticky-top p-4 myNav\">
    <div class=\"container-xl\">
      <a href=\"{{ path('inicio') }}\" class=\"logo m-0 float-start text-decoration-none\">Click & Go</a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>
      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  
      {# div del toggle #}
      {% if is_granted('ROLE_ADMIN') %}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('admin') }}\">Mantenimiento</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_restaurante_index')}}\">Restaurante</a>
          </li>
        </ul>
        {% elseif is_granted('ROLE_RESTAURANTE')%}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('mis_reservas') }}\">Reservas</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('miRestaurante') }}\">Mi restaurante</a>
          </li>
        </ul>
        {% else %}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('verRestaurantes')}}\">Restaurantes</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('misReservas')}}\">Mis reservas</a>
          </li>
        </ul>
        {% endif %}
        {# separador #}
        <p><code></code><code></code></p><hr><p></p>

        {# Para pantallas tablets e inferiores #}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{path('app_logout')}}\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active \" href=\"{{path('perfil')}}\" id=\"dropdown07XL\" aria-expanded=\"false\">Perfil</a>
          </li>
        </ul>
        {# Para pantallas grandes #}
        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user cssToolTip \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    {# <img src=\"assets/images/avatar/avatar-s-1.png\" alt=\"\" srcset=\"\"> #}
                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Bienvenido, {{app.user.nombre}} </div>
                            {# {{ app.user.email }} #}
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"{{path('perfil')}}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
        </form>
      </div>
    </div>
  </nav>

        {% block body %}
       

        {% endblock %}

{# Seccion Footer #}
        <footer class=\"mt-5\">
            <div class=\"site-footer\">
        
            <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Contacto</h3>
                <address>Calle Valencia, Jaen 23006</address>
                <ul class=\"list-unstyled links\">
                    <li><a style=\"text-decoration:none\" href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                    <li><a style=\"text-decoration:none\" href=\"tel://11234567890\">+34 653 59 24 43</a></li>
                    <li>
                    <a style=\"text-decoration:none\" href=\"mailto:info@mydomain.com\">info@mydomain.com</a>
                    </li>
                </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Fuentes</h3>
                <ul class=\"list-unstyled float-start links\">
                    <li><a href=\"#\" style=\"text-decoration:none\">Servicios</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Vision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Mision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Terminos</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Privacidad</a></li>
                </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <div class=\"widget\">
                <h3>Links</h3>
                <ul class=\"list-unstyled links\">
                    <li><a href=\"#\" style=\"text-decoration:none\">Nuestra Vision</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Sobre nosotros</a></li>
                    <li><a href=\"#\" style=\"text-decoration:none\">Contactanos</a></li>
                </ul>
                <ul class=\"list-unstyled social\">
                    <li>
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-pinterest\"></span></a>
                    </li>
                    <li>
                    <a href=\"#\"><span class=\"icon-dribbble\"></span></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <p>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                . Reservados todos los derechos. &mdash; Diseñado por
                <a href=\"#\" style=\"text-decoration:none\">Josemimb</a>
                <!-- License information: https://untree.co/license/ -->
                </p>
                <div>
                Distribuido por
                <a href=\"#\" target=\"_blank\" style=\"text-decoration:none\">Josemimb</a>
                </div>
            </div>
            </div>
        </div>
        <!-- /.container -->
        </div>
        </footer>
        <!-- /.site-footer -->
        <!-- Preloader -->
        <div id=\"overlayer\"></div>
        <div class=\"loader\">
        <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">Loading...</span>
        </div>
        </div>
        {# SCRIPT JAVASCRIPT #}
        <script src=\"/js/bootstrap.bundle.min.js\"></script>
        <script src=\"/js/tiny-slider.js\"></script>
        <script src=\"/js/aos.js\"></script>
        <script src=\"/js/navbar.js\"></script>
        <script src=\"/js/counter.js\"></script>
        <script src=\"/js/custom.js\"></script>
        <script src=\"/js/jquery.js\"></script>
        <script src=\"/js/jquery-ui.js\"></script>
        <script>
          \$(document).ready(function() {
              // Agrega evento clic a todos los enlaces con id \"btn-mas-informacion\"
              \$('a#btn-mas-informacion').click(function(event) {
                event.preventDefault(); // Previene que el enlace haga su acción por defecto
                \$(this).siblings('.informacion-adicional').toggle('fast'); // Muestra u oculta el elemento hermano con la clase \"informacion-adicional\"
                \$(this).text(function(i, text) {
                  return text === \"Más información\" ? \"Ocultar información\" : \"Más información\";
                }); // Cambia el texto del enlace según el estado del elemento
                \$(this).css('color', 'black'); 
                \$(this).css('font-size', '14px');
              });
            });
        </script>
        <script src=\"{{ asset('node_modules/flatpickr/dist/flatpickr.min.js') }}\"></script>
        <script>
            // Inicializar Flatpickr en los campos de fecha
            flatpickr(\".datepicker\", {
                // Opciones adicionales de configuración de Flatpickr
            });
        </script>

<script>
        // Inicializar los selectores de fecha global
        const datepickers = document.querySelectorAll('.datepicker');
        datepickers.forEach(function(datepicker) {
            datepicker.type = 'date';
        });
    </script>
    
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.structure.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.theme.css\">
    </body>
</html>
", "base.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\base.html.twig");
    }
}
