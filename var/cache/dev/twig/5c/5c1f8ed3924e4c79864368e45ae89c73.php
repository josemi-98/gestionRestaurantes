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

/* login/index.html.twig */
class __TwigTemplate_11ab5c6497769ed31b2b54509e7ba14f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "
        <title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/Logo2.png"), "html", null, true);
        echo "\" />
        ";
        // line 5
        echo "        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 
        <link rel=\"stylesheet\" href=\"/css/style.css\" />

";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Click & Go";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<body class=\"\" style=\"background-color:#323232\">

<section class=\"mt-5 \" >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-11\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/loginRestaurante.jpeg"), "html", null, true);
        echo "\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">
                      ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                          ";
            // line 27
            echo "                          <div class=\"alert alert-danger\">Usuario o contraseña incorrecto</div>
                      ";
        }
        // line 29
        echo "
                     
        ";
        // line 32
        echo "
                <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\" class=\"was-validated\" >
                  <div class=\"d-flex align-items-center  pb-1\">
                     <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100px\" height=\"\" />
                  </div>

                  <div class=\"alert alert-info m-2\" role=\"alert\">
                              Inicia sesion y disfruta jugando con nosotros.
                            </div>

                  <h2 class=\"fw-normal was-validated \" style=\"letter-spacing: 1px;\">Inicia sesion</h2>

                  <div class=\"form-outline mb-3  \">

                  <label for=\"nombre\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Introduce tu correo electronico\" class=\"form-control\"  required>
                            
                                </div>
                  </div>
                  <div class=\"form-outline mb-3\">
                    <label class=\"form-label\" for=\"form2Example27\">Contraseña</label> 
                        <div class=\"form-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control \" placeholder=\"Introduce su contraseña\" required/>
                               
                        </div> 
                  </div>
                    
                              <input type=\"hidden\" name=\"_target_path\" value=\"/redireccionRoles\">
                              
                  <div class=\"\">
                    <button class=\"btn btn-primary btn-lg btn-block mb-2\" type=\"submit\">Iniciar Sesion</button>
                  </div>
                  <a class=\"small text-muted\" href=\"#!\">Olvido la contraseña?</a>
                  <p class=\" pb-lg-2\" style=\"color: #393f81;\">No tienes cuenta? <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"
                      style=\"color: #393f81;\">Registrate aqui</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  157 => 48,  141 => 35,  136 => 33,  133 => 32,  129 => 29,  125 => 27,  123 => 26,  121 => 25,  113 => 20,  102 => 11,  92 => 10,  73 => 2,  63 => 10,  56 => 5,  52 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <title>{% block title %}Click & Go{% endblock %}</title>
        <link rel=\"shortcut icon\" href=\"{{ asset('imagenes/Logo2.png') }}\" />
        {# \"<object data=\"../public/images/logo.svg\" width=\"300\" height=\"300\"> </object>\" #}
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 
        <link rel=\"stylesheet\" href=\"/css/style.css\" />

{% block body %}
<body class=\"\" style=\"background-color:#323232\">

<section class=\"mt-5 \" >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-11\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"{{ asset('imagenes/loginRestaurante.jpeg') }}\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">
                      {% if error %}
                          {# <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div> #}
                          <div class=\"alert alert-danger\">Usuario o contraseña incorrecto</div>
                      {% endif %}

                     
        {# Resto del formulario de inicio de sesión #}

                <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"was-validated\" >
                  <div class=\"d-flex align-items-center  pb-1\">
                     <img src=\"{{ asset('imagenes/logo.png') }}\" alt=\"Symfony!\" width=\"100px\" height=\"\" />
                  </div>

                  <div class=\"alert alert-info m-2\" role=\"alert\">
                              Inicia sesion y disfruta jugando con nosotros.
                            </div>

                  <h2 class=\"fw-normal was-validated \" style=\"letter-spacing: 1px;\">Inicia sesion</h2>

                  <div class=\"form-outline mb-3  \">

                  <label for=\"nombre\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Introduce tu correo electronico\" class=\"form-control\"  required>
                            
                                </div>
                  </div>
                  <div class=\"form-outline mb-3\">
                    <label class=\"form-label\" for=\"form2Example27\">Contraseña</label> 
                        <div class=\"form-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control \" placeholder=\"Introduce su contraseña\" required/>
                               
                        </div> 
                  </div>
                    
                              <input type=\"hidden\" name=\"_target_path\" value=\"/redireccionRoles\">
                              
                  <div class=\"\">
                    <button class=\"btn btn-primary btn-lg btn-block mb-2\" type=\"submit\">Iniciar Sesion</button>
                  </div>
                  <a class=\"small text-muted\" href=\"#!\">Olvido la contraseña?</a>
                  <p class=\" pb-lg-2\" style=\"color: #393f81;\">No tienes cuenta? <a href=\"{{ path('app_register') }}\"
                      style=\"color: #393f81;\">Registrate aqui</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
{% endblock %}", "login/index.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\login\\index.html.twig");
    }
}
