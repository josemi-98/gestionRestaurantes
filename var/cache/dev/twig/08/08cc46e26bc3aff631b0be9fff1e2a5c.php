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

/* ladingPage/about.html.twig */
class __TwigTemplate_1e825ca7f5f24683e15368a178a36f2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/about.html.twig"));

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
      style=\"background-image: url('/images/hero_bg_3.jpg')\"
    >
      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center mt-5\">
            <h1 class=\"heading\" data-aos=\"fade-up\">Sobre nosotros</h1>

            <nav
              aria-label=\"breadcrumb\"
              data-aos=\"fade-up\"
              data-aos-delay=\"200\"
            >
              <ol class=\"breadcrumb text-center justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a></li>
                <li
                  class=\"breadcrumb-item active text-white-50\"
                  aria-current=\"page\"
                >
                  Sobre nosotros
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section\">
      <div class=\"container\">
        <div class=\"row text-left mb-5\">
          <div class=\"col-12\">
            <h2 class=\"font-weight-bold heading text-primary mb-4\">Sobre nosotros</h2>
          </div>
          <div class=\"col-lg-6\">
            <p class=\"text-black-50\">
              En Click&Go, nos apasiona la gastronomía y creemos en la importancia de brindar experiencias excepcionales a nuestros comensales. Con ese objetivo en mente, hemos creado una innovadora aplicación de gestión de restaurantes que busca revolucionar la forma en que los establecimientos gastronómicos operan y brindan sus servicios.
            </p>
            <p class=\"text-black-50\">
              Nuestra motivación para desarrollar esta aplicación surge de la necesidad de mejorar y optimizar los procesos de gestión en la industria de restaurantes. Reconocemos los desafíos que enfrentan los propietarios y gerentes de restaurantes, desde la planificación de mesas y reservas hasta la gestión de pedidos y la interacción con los clientes.
            </p>
            <p class=\"text-black-50\">
              Nuestra aplicación de gestión de restaurantes tiene como objetivo simplificar y agilizar estas tareas, permitiendo a los restaurantes ofrecer un servicio de excelencia. Queremos proporcionar a los establecimientos una herramienta integral que les permita gestionar eficientemente las reservas de mesas, controlar su capacidad de atención y optimizar la asignación de personal.
            </p>
          </div>
          <div class=\"col-lg-6\">
            <p class=\"text-black-50\">
              Además, estamos comprometidos en mejorar la experiencia del cliente. Nuestra aplicación permite a los usuarios realizar reservas de forma rápida y sencilla, visualizar las opciones de menú, dejar opiniones y valoraciones del restaurante, y recibir una atención personalizada por parte del equipo.
            </p>
            <p class=\"text-black-50\">
              Nos enorgullece ofrecer un sistema de reservas por día en tiempo real, donde los usuarios pueden verificar la disponibilidad de mesas y planificar sus visitas de manera conveniente. Asimismo, brindamos a los restaurantes un calendario de reservas para que puedan tener un control detallado de su ocupación y planificar su capacidad de atención de manera eficiente.
            </p>
            <p class=\"text-black-50\">
              En Click&Go, estamos comprometidos en impulsar el crecimiento y éxito de los restaurantes a través de nuestra aplicación de gestión. Queremos ser su aliado tecnológico, permitiéndoles enfocarse en brindar una experiencia gastronómica excepcional mientras optimizan sus operaciones. Juntos, podemos crear una industria de restaurantes más eficiente, innovadora y satisfactoria tanto para los propietarios como para los comensales.           </p>
          </div>
        </div>
      </div>
    </div>
    

    <div class=\"section sec-testimonials bg-light\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-md-6\">
            <h2 class=\"font-weight-bold heading text-primary mb-4 mb-md-0\">
              El equipo
            </h2>
          </div>
          <div class=\"col-md-6 text-md-end\">
            <div id=\"testimonial-nav\">
              <span class=\"prev\" data-controls=\"prev\">Prev</span>

              <span class=\"next\" data-controls=\"next\">Next</span>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\"></div>
        </div>
        <div class=\"testimonial-slider-wrap\">
          <div class=\"testimonial-slider\">
            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_1-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Jose Martin</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_2-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Pablo Lopez</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_3-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Francisco Cameron</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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
        return "ladingPage/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 90,  124 => 59,  120 => 58,  116 => 57,  112 => 56,  108 => 55,  104 => 54,  97 => 50,  57 => 13,  43 => 1,);
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
      style=\"background-image: url('/images/hero_bg_3.jpg')\"
    >
      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center mt-5\">
            <h1 class=\"heading\" data-aos=\"fade-up\">Sobre nosotros</h1>

            <nav
              aria-label=\"breadcrumb\"
              data-aos=\"fade-up\"
              data-aos-delay=\"200\"
            >
              <ol class=\"breadcrumb text-center justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('inicio')}}\">Inicio</a></li>
                <li
                  class=\"breadcrumb-item active text-white-50\"
                  aria-current=\"page\"
                >
                  Sobre nosotros
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section\">
      <div class=\"container\">
        <div class=\"row text-left mb-5\">
          <div class=\"col-12\">
            <h2 class=\"font-weight-bold heading text-primary mb-4\">Sobre nosotros</h2>
          </div>
          <div class=\"col-lg-6\">
            <p class=\"text-black-50\">
              En Click&Go, nos apasiona la gastronomía y creemos en la importancia de brindar experiencias excepcionales a nuestros comensales. Con ese objetivo en mente, hemos creado una innovadora aplicación de gestión de restaurantes que busca revolucionar la forma en que los establecimientos gastronómicos operan y brindan sus servicios.
            </p>
            <p class=\"text-black-50\">
              Nuestra motivación para desarrollar esta aplicación surge de la necesidad de mejorar y optimizar los procesos de gestión en la industria de restaurantes. Reconocemos los desafíos que enfrentan los propietarios y gerentes de restaurantes, desde la planificación de mesas y reservas hasta la gestión de pedidos y la interacción con los clientes.
            </p>
            <p class=\"text-black-50\">
              Nuestra aplicación de gestión de restaurantes tiene como objetivo simplificar y agilizar estas tareas, permitiendo a los restaurantes ofrecer un servicio de excelencia. Queremos proporcionar a los establecimientos una herramienta integral que les permita gestionar eficientemente las reservas de mesas, controlar su capacidad de atención y optimizar la asignación de personal.
            </p>
          </div>
          <div class=\"col-lg-6\">
            <p class=\"text-black-50\">
              Además, estamos comprometidos en mejorar la experiencia del cliente. Nuestra aplicación permite a los usuarios realizar reservas de forma rápida y sencilla, visualizar las opciones de menú, dejar opiniones y valoraciones del restaurante, y recibir una atención personalizada por parte del equipo.
            </p>
            <p class=\"text-black-50\">
              Nos enorgullece ofrecer un sistema de reservas por día en tiempo real, donde los usuarios pueden verificar la disponibilidad de mesas y planificar sus visitas de manera conveniente. Asimismo, brindamos a los restaurantes un calendario de reservas para que puedan tener un control detallado de su ocupación y planificar su capacidad de atención de manera eficiente.
            </p>
            <p class=\"text-black-50\">
              En Click&Go, estamos comprometidos en impulsar el crecimiento y éxito de los restaurantes a través de nuestra aplicación de gestión. Queremos ser su aliado tecnológico, permitiéndoles enfocarse en brindar una experiencia gastronómica excepcional mientras optimizan sus operaciones. Juntos, podemos crear una industria de restaurantes más eficiente, innovadora y satisfactoria tanto para los propietarios como para los comensales.           </p>
          </div>
        </div>
      </div>
    </div>
    

    <div class=\"section sec-testimonials bg-light\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-md-6\">
            <h2 class=\"font-weight-bold heading text-primary mb-4 mb-md-0\">
              El equipo
            </h2>
          </div>
          <div class=\"col-md-6 text-md-end\">
            <div id=\"testimonial-nav\">
              <span class=\"prev\" data-controls=\"prev\">Prev</span>

              <span class=\"next\" data-controls=\"next\">Next</span>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\"></div>
        </div>
        <div class=\"testimonial-slider-wrap\">
          <div class=\"testimonial-slider\">
            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_1-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Jose Martin</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_2-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Pablo Lopez</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"/images/person_3-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <h3 class=\"h5 text-primary\">Francisco Cameron</h3>
                <p class=\"text-black-50\">Diseñador, Confundador</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class=\"social list-unstyled list-inline dark-hover\">
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-twitter\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-facebook\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-linkedin\"></span></a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"#\"><span class=\"icon-instagram\"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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
", "ladingPage/about.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\ladingPage\\about.html.twig");
    }
}
