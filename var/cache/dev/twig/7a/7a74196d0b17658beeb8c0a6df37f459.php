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

/* ladingPage/contactanos.html.twig */
class __TwigTemplate_a23269df8d16d11392679b77a7a5b276 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/contactanos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/contactanos.html.twig"));

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
    <link rel=\"stylesheet\" href=\"/css/myCss.css\" />

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
            <a href=\"index.html\" class=\"logo m-0 float-start\">Click & Go</a>

            <ul
              class=\"js-clone-nav d-none d-lg-inline-block text-start site-menu float-end\">
              <li class=\"active\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a></li>
              <li ><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listaRestaurantes");
        echo "\">Restaurantes</a></li>
              <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios");
        echo "\">Servicios</a></li>
              <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Sobre nosotros</a></li>
              <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contactanos</a></li>
              <li><a href=\"";
        // line 60
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
            <h1 class=\"heading\" data-aos=\"fade-up\">Contactanos</h1>

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
                  Contactanos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section\">
      <div class=\"container\">
        <div class=\"row\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "session", [], "any", false, false, false, 108), "flashbag", [], "any", false, false, false, 108), "get", [0 => "notice"], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 109
            echo "                <div class=\"flash-notice alert alert-success alert-dismissible fade show mb-2\" role=\"alert\">
                <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
                    ";
            // line 111
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
        // line 116
        echo "          <div
            class=\"col-lg-4 mb-5 mb-lg-0 mt-2\"
            data-aos=\"fade-up\"
            data-aos-delay=\"100\"
          >
            <div class=\"contact-info\">
              <div class=\"address mt-2\">
                <i class=\"icon-room\"></i>
                <h4 class=\"mb-2\">Dirrecion:</h4>
                <p>
                  Calle Valenicia ,<br />
                  Jaen 23006
                </p>
              </div>

              <div class=\"open-hours mt-4\">
                <i class=\"icon-clock-o\"></i>
                <h4 class=\"mb-2\">Horario:</h4>
                <p>
                  Lunes-Viernes:<br />
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class=\"email mt-4\">
                <i class=\"icon-envelope\"></i>
                <h4 class=\"mb-2\">Email:</h4>
                <p>info@Untree.com</p>
              </div>

              <div class=\"phone mt-4\">
                <i class=\"icon-phone\"></i>
                <h4 class=\"mb-2\">Telefono:</h4>
                <p>+34 689 50 60 44</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"announcement\">
              <h3>¡Publicita tu restaurante en nuestra página!</h3>
              <p>Rellena el siguiente formulario y nos pondremos en contacto contigo para terminar el proceso.</p>
            </div>
            <form id=\"formulario\" action=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enviar_correo");
        echo "\" method=\"POST\">
              <div class=\"row\">
                <div class=\"col-6 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Tu nombre\" name=\"nombre\" id=\"nombre\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-6 mb-3\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Tu Email\" name=\"email\" id=\"email\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Nombre del Restaurante\" name=\"nombre_restaurante\" id=\"nombre_restaurante\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Contacto\" name=\"contacto\" id=\"contacto\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <textarea name=\"mensaje\" id=\"mensaje\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Escribe una breve información de lo que deseas\"></textarea>
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12\">
                  <input type=\"submit\" value=\"Enviar Mensaje\" class=\"btn btn-primary\" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->

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
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"/js/validaciones.js\"></script>

  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ladingPage/contactanos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 158,  192 => 116,  181 => 111,  177 => 109,  173 => 108,  122 => 60,  118 => 59,  114 => 58,  110 => 57,  106 => 56,  102 => 55,  57 => 13,  43 => 1,);
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
    <link rel=\"stylesheet\" href=\"/css/myCss.css\" />

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
            <a href=\"index.html\" class=\"logo m-0 float-start\">Click & Go</a>

            <ul
              class=\"js-clone-nav d-none d-lg-inline-block text-start site-menu float-end\">
              <li class=\"active\"><a href=\"{{ path('inicio') }}\">Inicio</a></li>
              <li ><a href=\"{{ path('listaRestaurantes') }}\">Restaurantes</a></li>
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
            <h1 class=\"heading\" data-aos=\"fade-up\">Contactanos</h1>

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
                  Contactanos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section\">
      <div class=\"container\">
        <div class=\"row\">
            {% for flash_message in app.session.flashbag.get('notice') %}
                <div class=\"flash-notice alert alert-success alert-dismissible fade show mb-2\" role=\"alert\">
                <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
                    {{ flash_message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </button>
                </div>
                {% endfor %}
          <div
            class=\"col-lg-4 mb-5 mb-lg-0 mt-2\"
            data-aos=\"fade-up\"
            data-aos-delay=\"100\"
          >
            <div class=\"contact-info\">
              <div class=\"address mt-2\">
                <i class=\"icon-room\"></i>
                <h4 class=\"mb-2\">Dirrecion:</h4>
                <p>
                  Calle Valenicia ,<br />
                  Jaen 23006
                </p>
              </div>

              <div class=\"open-hours mt-4\">
                <i class=\"icon-clock-o\"></i>
                <h4 class=\"mb-2\">Horario:</h4>
                <p>
                  Lunes-Viernes:<br />
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class=\"email mt-4\">
                <i class=\"icon-envelope\"></i>
                <h4 class=\"mb-2\">Email:</h4>
                <p>info@Untree.com</p>
              </div>

              <div class=\"phone mt-4\">
                <i class=\"icon-phone\"></i>
                <h4 class=\"mb-2\">Telefono:</h4>
                <p>+34 689 50 60 44</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"announcement\">
              <h3>¡Publicita tu restaurante en nuestra página!</h3>
              <p>Rellena el siguiente formulario y nos pondremos en contacto contigo para terminar el proceso.</p>
            </div>
            <form id=\"formulario\" action=\"{{ path('enviar_correo') }}\" method=\"POST\">
              <div class=\"row\">
                <div class=\"col-6 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Tu nombre\" name=\"nombre\" id=\"nombre\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-6 mb-3\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Tu Email\" name=\"email\" id=\"email\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Nombre del Restaurante\" name=\"nombre_restaurante\" id=\"nombre_restaurante\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Contacto\" name=\"contacto\" id=\"contacto\" />
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12 mb-3\">
                  <textarea name=\"mensaje\" id=\"mensaje\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Escribe una breve información de lo que deseas\"></textarea>
                  <div class=\"error-message\"></div>
                </div>
                <div class=\"col-12\">
                  <input type=\"submit\" value=\"Enviar Mensaje\" class=\"btn btn-primary\" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->

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
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"/js/validaciones.js\"></script>

  </body>
</html>
", "ladingPage/contactanos.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\ladingPage\\contactanos.html.twig");
    }
}
