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

/* ladingPage/servicios.html.twig */
class __TwigTemplate_630ab0f70d13ddf962734095d731a402 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/servicios.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/servicios.html.twig"));

        // line 1
        echo "<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"author\" content=\"Untree.co\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/Logo2.png"), "html", null, true);
        echo "\" />

    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"bootstrap, bootstrap5\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap\"
      rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" href=\"/fonts/icomoon/style.css\" />
    <link rel=\"stylesheet\" href=\"/fonts/flaticon/font/flaticon.css\" />

    <link rel=\"stylesheet\" href=\"/css/tiny-slider.css\" />
    <link rel=\"stylesheet\" href=\"/css/aos.css\" />
    <link rel=\"stylesheet\" href=\"/css/style.css\" />

    <title>
      Click & Go
    </title>
  </head>
  <body>
    <div class=\"site-mobile-menu site-navbar-target\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close\">
          <span class=\"icofont-close js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>

    <nav class=\"site-nav\">
      <div class=\"container\">
        <div class=\"menu-bg-wrap\">
          <div class=\"site-navigation\">
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\" class=\"logo m-0 float-start\">Click & Go</a>

            <ul
              class=\"js-clone-nav d-none d-lg-inline-block text-start site-menu float-end\">
              <li class=\"active\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a></li>
              <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listaRestaurantes");
        echo "\">Restaurantes</a></li>
              <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios");
        echo "\">Servicios</a></li>
              <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Sobre nosotros</a></li>
              <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contactanos</a></li>
              <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">Iniciar sesion</a></li>
            </ul>

            <a
              href=\"#\"
              class=\"burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none\"
              data-toggle=\"collapse\"
              data-target=\"#main-navbar\"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class=\"hero page-inner overlay\"
      style=\"background-image: url('/images/hero_bg_1.jpg')\"
    >
      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center mt-5\">
            <h1 class=\"heading\" data-aos=\"fade-up\">Servicios</h1>

            <nav
              aria-label=\"breadcrumb\"
              data-aos=\"fade-up\"
              data-aos-delay=\"200\"
            >
              <ol class=\"breadcrumb text-center justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Inicio</a></li>
                <li
                  class=\"breadcrumb-item active text-white-50\"
                  aria-current=\"page\"
                >
                  Servicios
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">
        <h1 class=\"mt-5\">Bienvenido a nuestra aplicación de gestión de restaurantes</h1>

        <h2 class=\"mt-3\" >Servicios ofrecidos</h2>

        <div class=\"row mt-3\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Reservas de mesas</h3>
                        <p class=\"card-text\">Nuestra aplicación permite a los clientes realizar reservas de mesas de forma rápida y sencilla. Pueden seleccionar la fecha, hora y número de comensales, y recibirán una confirmación de su reserva.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Opiniones y valoraciones del restaurante</h3>
                        <p class=\"card-text\">Valoramos la opinión de nuestros clientes. A través de nuestra aplicación, los usuarios pueden dejar opiniones y valoraciones del restaurante. Además, el restaurante tiene la capacidad de responder a los comentarios y brindar una atención personalizada.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Calendario de reservas para usuarios</h3>
                        <p class=\"card-text\">Los usuarios tienen acceso a un calendario personalizado donde pueden ver todas sus reservas planificadas. Pueden consultar la fecha, hora y detalles de cada reserva, lo que les permite organizar sus visitas al restaurante de manera eficiente.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Control de mesas y reservas</h3>
                        <p class=\"card-text\">Ofrecemos un sistema de control de mesas y reservas para el restaurante. Nuestra aplicación permite al restaurante gestionar las mesas disponibles, ver las reservas realizadas por los clientes y administrar los horarios de atención.</p>
                    </div>
                </div>
            </div>
        </div>

        <p class=\"mt-3 mb-5\">Si estás interesado en nuestra aplicación de gestión de restaurantes y deseas obtener más información, por favor contáctanos a través de nuestro formulario de contacto.</p>
    </div>

    <div class=\"site-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Contacto</h3>
              <address>Calle Valencia, Jaen 23006</address>
              <ul class=\"list-unstyled links\">
                <li><a href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                <li><a href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                <li>
                  <a href=\"mailto:info@mydomain.com\">info@mydomain.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Sources</h3>
              <ul class=\"list-unstyled float-start links\">
                <li><a href=\"#\">Sobre nosotros</a></li>
                <li><a href=\"#\">Servicios</a></li>
                <li><a href=\"#\">Vision</a></li>
                <li><a href=\"#\">Mission</a></li>
                <li><a href=\"#\">Terminos</a></li>
                <li><a href=\"#\">Privacidad</a></li>
              </ul>
              <ul class=\"list-unstyled float-start links\">
                <li><a href=\"#\">Partners</a></li>
                <li><a href=\"#\">Negocios</a></li>
                <li><a href=\"#\">Careers</a></li>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">FAQ</a></li>
                <li><a href=\"#\">Creative</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Links</h3>
              <ul class=\"list-unstyled links\">
                <li><a href=\"#\">Nuestra Vision</a></li>
                <li><a href=\"#\">Sobre nosotros</a></li>
                <li><a href=\"#\">Contactanos</a></li>
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
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class=\"row mt-5\">
          <div class=\"col-12 text-center\">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . Reservados todos los derechos. &mdash; Diseñado por
              <a href=\"#\">Josemimb</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>
              Distribuido por
              <a href=\"#\" target=\"_blank\">Josemimb</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id=\"overlayer\"></div>
    <div class=\"loader\">
      <div class=\"spinner-border\" role=\"status\">
        <span class=\"visually-hidden\">Loading...</span>
      </div>
    </div>

    <script src=\"/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/js/tiny-slider.js\"></script>
    <script src=\"/js/aos.js\"></script>
    <script src=\"/js/navbar.js\"></script>
    <script src=\"/js/counter.js\"></script>
    <script src=\"/js/custom.js\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ladingPage/servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  120 => 58,  116 => 57,  112 => 56,  108 => 55,  104 => 54,  97 => 50,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"author\" content=\"Untree.co\" />
        <link rel=\"shortcut icon\" href=\"{{ asset('imagenes/Logo2.png') }}\" />

    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"bootstrap, bootstrap5\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap\"
      rel=\"stylesheet\"
    />

    <link rel=\"stylesheet\" href=\"/fonts/icomoon/style.css\" />
    <link rel=\"stylesheet\" href=\"/fonts/flaticon/font/flaticon.css\" />

    <link rel=\"stylesheet\" href=\"/css/tiny-slider.css\" />
    <link rel=\"stylesheet\" href=\"/css/aos.css\" />
    <link rel=\"stylesheet\" href=\"/css/style.css\" />

    <title>
      Click & Go
    </title>
  </head>
  <body>
    <div class=\"site-mobile-menu site-navbar-target\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close\">
          <span class=\"icofont-close js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>

    <nav class=\"site-nav\">
      <div class=\"container\">
        <div class=\"menu-bg-wrap\">
          <div class=\"site-navigation\">
            <a href=\"{{ path('inicio') }}\" class=\"logo m-0 float-start\">Click & Go</a>

            <ul
              class=\"js-clone-nav d-none d-lg-inline-block text-start site-menu float-end\">
              <li class=\"active\"><a href=\"{{ path('inicio') }}\">Inicio</a></li>
              <li><a href=\"{{ path('listaRestaurantes') }}\">Restaurantes</a></li>
              <li><a href=\"{{ path('servicios') }}\">Servicios</a></li>
              <li><a href=\"{{ path('about') }}\">Sobre nosotros</a></li>
              <li><a href=\"{{ path('contacto') }}\">Contactanos</a></li>
              <li><a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Iniciar sesion</a></li>
            </ul>

            <a
              href=\"#\"
              class=\"burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none\"
              data-toggle=\"collapse\"
              data-target=\"#main-navbar\"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class=\"hero page-inner overlay\"
      style=\"background-image: url('/images/hero_bg_1.jpg')\"
    >
      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center mt-5\">
            <h1 class=\"heading\" data-aos=\"fade-up\">Servicios</h1>

            <nav
              aria-label=\"breadcrumb\"
              data-aos=\"fade-up\"
              data-aos-delay=\"200\"
            >
              <ol class=\"breadcrumb text-center justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Inicio</a></li>
                <li
                  class=\"breadcrumb-item active text-white-50\"
                  aria-current=\"page\"
                >
                  Servicios
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">
        <h1 class=\"mt-5\">Bienvenido a nuestra aplicación de gestión de restaurantes</h1>

        <h2 class=\"mt-3\" >Servicios ofrecidos</h2>

        <div class=\"row mt-3\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Reservas de mesas</h3>
                        <p class=\"card-text\">Nuestra aplicación permite a los clientes realizar reservas de mesas de forma rápida y sencilla. Pueden seleccionar la fecha, hora y número de comensales, y recibirán una confirmación de su reserva.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Opiniones y valoraciones del restaurante</h3>
                        <p class=\"card-text\">Valoramos la opinión de nuestros clientes. A través de nuestra aplicación, los usuarios pueden dejar opiniones y valoraciones del restaurante. Además, el restaurante tiene la capacidad de responder a los comentarios y brindar una atención personalizada.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Calendario de reservas para usuarios</h3>
                        <p class=\"card-text\">Los usuarios tienen acceso a un calendario personalizado donde pueden ver todas sus reservas planificadas. Pueden consultar la fecha, hora y detalles de cada reserva, lo que les permite organizar sus visitas al restaurante de manera eficiente.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Control de mesas y reservas</h3>
                        <p class=\"card-text\">Ofrecemos un sistema de control de mesas y reservas para el restaurante. Nuestra aplicación permite al restaurante gestionar las mesas disponibles, ver las reservas realizadas por los clientes y administrar los horarios de atención.</p>
                    </div>
                </div>
            </div>
        </div>

        <p class=\"mt-3 mb-5\">Si estás interesado en nuestra aplicación de gestión de restaurantes y deseas obtener más información, por favor contáctanos a través de nuestro formulario de contacto.</p>
    </div>

    <div class=\"site-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Contacto</h3>
              <address>Calle Valencia, Jaen 23006</address>
              <ul class=\"list-unstyled links\">
                <li><a href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                <li><a href=\"tel://11234567890\">+34 953 59 24 43</a></li>
                <li>
                  <a href=\"mailto:info@mydomain.com\">info@mydomain.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Sources</h3>
              <ul class=\"list-unstyled float-start links\">
                <li><a href=\"#\">Sobre nosotros</a></li>
                <li><a href=\"#\">Servicios</a></li>
                <li><a href=\"#\">Vision</a></li>
                <li><a href=\"#\">Mission</a></li>
                <li><a href=\"#\">Terminos</a></li>
                <li><a href=\"#\">Privacidad</a></li>
              </ul>
              <ul class=\"list-unstyled float-start links\">
                <li><a href=\"#\">Partners</a></li>
                <li><a href=\"#\">Negocios</a></li>
                <li><a href=\"#\">Careers</a></li>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">FAQ</a></li>
                <li><a href=\"#\">Creative</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
            <div class=\"widget\">
              <h3>Links</h3>
              <ul class=\"list-unstyled links\">
                <li><a href=\"#\">Nuestra Vision</a></li>
                <li><a href=\"#\">Sobre nosotros</a></li>
                <li><a href=\"#\">Contactanos</a></li>
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
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class=\"row mt-5\">
          <div class=\"col-12 text-center\">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . Reservados todos los derechos. &mdash; Diseñado por
              <a href=\"#\">Josemimb</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>
              Distribuido por
              <a href=\"#\" target=\"_blank\">Josemimb</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id=\"overlayer\"></div>
    <div class=\"loader\">
      <div class=\"spinner-border\" role=\"status\">
        <span class=\"visually-hidden\">Loading...</span>
      </div>
    </div>

    <script src=\"/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/js/tiny-slider.js\"></script>
    <script src=\"/js/aos.js\"></script>
    <script src=\"/js/navbar.js\"></script>
    <script src=\"/js/counter.js\"></script>
    <script src=\"/js/custom.js\"></script>
  </body>
</html>
", "ladingPage/servicios.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\ladingPage\\servicios.html.twig");
    }
}
