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

/* ladingPage/landingPage.html.twig */
class __TwigTemplate_567c2d49f83e9e59681c660cb80c6aac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/landingPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ladingPage/landingPage.html.twig"));

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
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 
 
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
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\" class=\"logo m-0 float-start\">Click & Go</a>

            <ul
              class=\"js-clone-nav d-none d-lg-inline-block text-start site-menu float-end\">
              <li class=\"active\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a></li>
              <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listaRestaurantes");
        echo "\">Restaurantes</a></li>
              <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios");
        echo "\">Servicios</a></li>
              <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Sobre nosotros</a></li>
              <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contactanos</a></li>
              <li><a href=\"";
        // line 63
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

    <div class=\"hero\">
          
      <div class=\"hero-slide\">
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante0.webp')\"
        ></div>
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante7.jpg')\"
        ></div>
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante11.webp')\"
        ></div>
      </div>

      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center\">
            <h1 class=\"heading\" data-aos=\"fade-up\">
              Una forma facil de encontrar tu Restaurante
            </h1>
            ";
        // line 116
        echo "          </div>
        </div>
      </div>
    </div>
    

   <div class=\"section\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-lg-6\">
            <h2 class=\"font-weight-bold text-primary heading\">
              Restaurantes mas populares
            </h2>
          </div>
          <div class=\"col-lg-6 text-lg-end\">
            <p>
              <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listaRestaurantes");
        echo "\" target=\"_blank\" class=\"btn btn-primary text-white py-3 px-4\">Ver todos los restaurantes</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"property-slider-wrap\">
              <div class=\"property-slider\">
                
              ";
        // line 142
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 143
            echo "                  <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 \">
                    <div class=\"property-item mb-30 shadow-lg\">
                      <a  class=\"img\">
                        <div class=\"position-relative\">
                          <img src=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurant"], "imageFile"), "html", null, true);
            echo "\" alt=\"image\" height=\"3000px\" width=\"2000px\" class=\"img-fluid rounded mx-auto\">
                          <div class=\"position-absolute top-0 end-0 \">
                            <div class=\"bg-secondary p-3\" style=\"opacity: 0.8\">
                                <div class=\"text-white text-center\">
                                  ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaValoraciones"]) || array_key_exists("mediaValoraciones", $context) ? $context["mediaValoraciones"] : (function () { throw new RuntimeError('Variable "mediaValoraciones" does not exist.', 151, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 151), [], "array", false, false, false, 151), "html", null, true);
            echo "
                                </div> 
                                <div class=\"text-white text-center\">
                                    ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalOpiniones"]) || array_key_exists("totalOpiniones", $context) ? $context["totalOpiniones"] : (function () { throw new RuntimeError('Variable "totalOpiniones" does not exist.', 154, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 154), [], "array", false, false, false, 154), "html", null, true);
            echo " reseñas
                                </div>
                              
                            </div>
                        </div>
                      </div>
                        
                      </a>

                      <div class=\"property-content\">
                        
                        <div>
                          <span class=\"city d-block mb-3 \">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nombre", [], "any", false, false, false, 166), "html", null, true);
            echo "</span>
                          <div class=\"specs d-flex mb-4\">
                            <span class=\"d-block d-flex align-items-center me-3\">
                              <span class=\"me-2\"><i class=\"fa-sharp fa-solid fa-location-dot\"></i></span>
                              <span class=\"caption\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "direccion", [], "any", false, false, false, 170), "html", null, true);
            echo "</span>
                            </span>

                          </div>

                          <div class=\"specs d-flex mb-4\">
                            <span class=\"d-block d-flex align-items-center me-3\">
                              <span class=\" me-2\"><i class=\"fa-solid fa-mobile-screen-button\"></i></span>
                              <span class=\"caption\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "contacto", [], "any", false, false, false, 178), "html", null, true);
            echo "</span>
                            </span>
                          </div>

                          <a class=\"specs d-flex mb-4\" id=\"btn-mas-informacion\">Más información</a>
                          <div class=\"informacion-adicional mt-4\" style=\"display:none;\">
                            <!-- Aquí va el contenido adicional -->
                            <h6>Informacion acerca de nosotros:</h6>
                            <span class=\"d-block mb-2 text-black-50\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "descripcion", [], "any", false, false, false, 186), "html", null, true);
            echo "</span>
                            <h6>Horario:</h6>
                            <span class=\"d-block mb-2 text-black-50\">";
            // line 188
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "horario", [], "any", false, false, false, 188), "html", null, true));
            echo "</span>
                          </div>

                          <a
                            href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"
                            class=\"btn btn-primary py-2 px-3 text-center \">Reservar</a>

                            
                        </div>
                      </div>
                    </div>
                    <!-- .item -->
                  </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
                
              </div>

              <div
                id=\"property-nav\"
                class=\"controls\"
                tabindex=\"0\"
                aria-label=\"Carousel Navigation\"
              >
                <span
                  class=\"prev\"
                  data-controls=\"prev\"
                  aria-controls=\"property\"
                  tabindex=\"-1\"
                  >Anterior</span
                >
                <span
                  class=\"next\"
                  data-controls=\"next\"
                  aria-controls=\"property\"
                  tabindex=\"-1\"
                  >Siguiente</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section sec-testimonials\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-md-6\">
            <h2 class=\"font-weight-bold heading text-primary mb-4 mb-md-0\">
              OPINIONES
            </h2>
          </div>
          <div class=\"col-md-6 text-md-end\">
            <div id=\"testimonial-nav\">
              <span class=\"prev\" data-controls=\"prev\">Anterior</span>

              <span class=\"next\" data-controls=\"next\">Siguiente</span>
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
                  src=\"images/person_1-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">James Smith</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_2-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Mike Houston</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_3-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Cameron Webster</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_4-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Dave Smith</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"section section-5 bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center text-center mb-5\">
          <div class=\"col-lg-6 mb-5\">
            <h2 class=\"font-weight-bold heading text-primary mb-4\">
              Nuestros Agentes
            </h2>
            <p class=\"text-black-50\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit totam?
              Quod maiores.
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_1-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">James Doe</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_2-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">Jean Smith</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_3-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">Alicia Huston</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          });
        });
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ladingPage/landingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 202,  281 => 192,  274 => 188,  269 => 186,  258 => 178,  247 => 170,  240 => 166,  225 => 154,  219 => 151,  212 => 147,  206 => 143,  201 => 142,  189 => 132,  171 => 116,  128 => 63,  124 => 62,  120 => 61,  116 => 60,  112 => 59,  108 => 58,  101 => 54,  57 => 13,  43 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 
 
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

    <div class=\"hero\">
          
      <div class=\"hero-slide\">
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante0.webp')\"
        ></div>
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante7.jpg')\"
        ></div>
        <div
          class=\"img overlay\"
          style=\"background-image: url('/images/restaurante11.webp')\"
        ></div>
      </div>

      <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
          <div class=\"col-lg-9 text-center\">
            <h1 class=\"heading\" data-aos=\"fade-up\">
              Una forma facil de encontrar tu Restaurante
            </h1>
            {# <form
              action=\"#\"
              class=\"narrow-w form-search d-flex align-items-stretch mb-3\"
              data-aos=\"fade-up\"
              data-aos-delay=\"200\"
            >
              <input
                type=\"text\"
                class=\"form-control px-4\"
                placeholder=\"Escribe tu restaurante\"
              />
              <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
            </form> #}
          </div>
        </div>
      </div>
    </div>
    

   <div class=\"section\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-lg-6\">
            <h2 class=\"font-weight-bold text-primary heading\">
              Restaurantes mas populares
            </h2>
          </div>
          <div class=\"col-lg-6 text-lg-end\">
            <p>
              <a href=\"{{ path('listaRestaurantes') }}\" target=\"_blank\" class=\"btn btn-primary text-white py-3 px-4\">Ver todos los restaurantes</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"property-slider-wrap\">
              <div class=\"property-slider\">
                
              {# Carrusel de los restaurantes mas populares #}
                {% for restaurant in restaurants %}
                  <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 \">
                    <div class=\"property-item mb-30 shadow-lg\">
                      <a  class=\"img\">
                        <div class=\"position-relative\">
                          <img src=\"{{ vich_uploader_asset(restaurant, 'imageFile') }}\" alt=\"image\" height=\"3000px\" width=\"2000px\" class=\"img-fluid rounded mx-auto\">
                          <div class=\"position-absolute top-0 end-0 \">
                            <div class=\"bg-secondary p-3\" style=\"opacity: 0.8\">
                                <div class=\"text-white text-center\">
                                  {{ mediaValoraciones[restaurant.id] }}
                                </div> 
                                <div class=\"text-white text-center\">
                                    {{ totalOpiniones[restaurant.id] }} reseñas
                                </div>
                              
                            </div>
                        </div>
                      </div>
                        
                      </a>

                      <div class=\"property-content\">
                        
                        <div>
                          <span class=\"city d-block mb-3 \">{{ restaurant.nombre }}</span>
                          <div class=\"specs d-flex mb-4\">
                            <span class=\"d-block d-flex align-items-center me-3\">
                              <span class=\"me-2\"><i class=\"fa-sharp fa-solid fa-location-dot\"></i></span>
                              <span class=\"caption\">{{ restaurant.direccion }}</span>
                            </span>

                          </div>

                          <div class=\"specs d-flex mb-4\">
                            <span class=\"d-block d-flex align-items-center me-3\">
                              <span class=\" me-2\"><i class=\"fa-solid fa-mobile-screen-button\"></i></span>
                              <span class=\"caption\">{{ restaurant.contacto }}</span>
                            </span>
                          </div>

                          <a class=\"specs d-flex mb-4\" id=\"btn-mas-informacion\">Más información</a>
                          <div class=\"informacion-adicional mt-4\" style=\"display:none;\">
                            <!-- Aquí va el contenido adicional -->
                            <h6>Informacion acerca de nosotros:</h6>
                            <span class=\"d-block mb-2 text-black-50\">{{ restaurant.descripcion }}</span>
                            <h6>Horario:</h6>
                            <span class=\"d-block mb-2 text-black-50\">{{ restaurant.horario|nl2br }}</span>
                          </div>

                          <a
                            href=\"{{ path('app_login')}}\"
                            class=\"btn btn-primary py-2 px-3 text-center \">Reservar</a>

                            
                        </div>
                      </div>
                    </div>
                    <!-- .item -->
                  </div>
            {% endfor %}

                
              </div>

              <div
                id=\"property-nav\"
                class=\"controls\"
                tabindex=\"0\"
                aria-label=\"Carousel Navigation\"
              >
                <span
                  class=\"prev\"
                  data-controls=\"prev\"
                  aria-controls=\"property\"
                  tabindex=\"-1\"
                  >Anterior</span
                >
                <span
                  class=\"next\"
                  data-controls=\"next\"
                  aria-controls=\"property\"
                  tabindex=\"-1\"
                  >Siguiente</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"section sec-testimonials\">
      <div class=\"container\">
        <div class=\"row mb-5 align-items-center\">
          <div class=\"col-md-6\">
            <h2 class=\"font-weight-bold heading text-primary mb-4 mb-md-0\">
              OPINIONES
            </h2>
          </div>
          <div class=\"col-md-6 text-md-end\">
            <div id=\"testimonial-nav\">
              <span class=\"prev\" data-controls=\"prev\">Anterior</span>

              <span class=\"next\" data-controls=\"next\">Siguiente</span>
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
                  src=\"images/person_1-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">James Smith</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_2-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Mike Houston</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_3-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Cameron Webster</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>

            <div class=\"item\">
              <div class=\"testimonial\">
                <img
                  src=\"images/person_4-min.jpg\"
                  alt=\"Image\"
                  class=\"img-fluid rounded-circle w-25 mb-4\"
                />
                <div class=\"rate\">
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                  <span class=\"icon-star text-warning\"></span>
                </div>
                <h3 class=\"h5 text-primary mb-4\">Dave Smith</h3>
                <blockquote>
                  <p>
                    &ldquo;Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.&rdquo;
                  </p>
                </blockquote>
                <p class=\"text-black-50\">Designer, Co-founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"section section-5 bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center text-center mb-5\">
          <div class=\"col-lg-6 mb-5\">
            <h2 class=\"font-weight-bold heading text-primary mb-4\">
              Nuestros Agentes
            </h2>
            <p class=\"text-black-50\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit totam?
              Quod maiores.
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_1-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">James Doe</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_2-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">Jean Smith</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          <div class=\"col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0\">
            <div class=\"h-100 person\">
              <img
                src=\"images/person_3-min.jpg\"
                alt=\"Image\"
                class=\"img-fluid\"
              />

              <div class=\"person-contents\">
                <h2 class=\"mb-0\"><a href=\"#\">Alicia Huston</a></h2>
                <span class=\"meta d-block mb-3\">Real Estate Agent</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere officiis inventore cumque tenetur laboriosam, minus
                  culpa doloremque odio, neque molestias?
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
          });
        });
    </script>
  </body>
</html>
", "ladingPage/landingPage.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\ladingPage\\landingPage.html.twig");
    }
}
