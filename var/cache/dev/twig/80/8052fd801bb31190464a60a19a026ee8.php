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

/* registration/register.html.twig */
class __TwigTemplate_f4b723f507b32318306ffac3d4876eb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        echo "
<body class=\"\" style=\"background-color:#323232\" >



<section  >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-12\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-6 d-none d-md-block\">
              <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/loginRestaurante.jpeg"), "html", null, true);
        echo "\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-5 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">

              <form name=\"registration_form\" id=\"formulario_registro\" method=\"post\" >

                    <div class=\"d-flex align-items-center mb-3  pb-1\">
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                    </div>

                    <h1 class=\"fw-normal mb-3\" style=\"letter-spacing: 1px;\">Registrate</h1>

                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-outline col-md-12\" >
                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control", "id" => "email"]]);
        echo "

                    </div>
                    <div class=\"form-outline\" >
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), 'row', ["label" => "Contraseña", "attr" => ["class" => "form-control", "id" => "contrasena"]]);
        // line 46
        echo "
                    </div>
                    <div class=\"form-outline\" >
                      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), 'row', ["label" => "Nombre completo", "attr" => ["class" => "form-control", "id" => "nombre"]]);
        echo "
                    </div>
                    <div class=\"form-outline my-2\" >
                      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "contacto", [], "any", false, false, false, 52), 'row', ["label" => "Telefono", "attr" => ["class" => "form-control", "id" => "contacto"]]);
        echo "
                    </div>

                    <div class=\"form-outline visually-hidden\">
                      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "puntos", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>

                    ";
        // line 62
        echo "                    
                    <div class=\"mb-3\">
                      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "agreeTerms", [], "any", false, false, false, 64), 'row', ["label" => "Aceptar terminos"]);
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block mb-2\">Crear Cuenta</button>
                    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo " 
                
                </form>

                <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\"
                      style=\"color: #393f81;\">Inicio</a>
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 72,  186 => 68,  179 => 64,  175 => 62,  169 => 56,  162 => 52,  156 => 49,  151 => 46,  149 => 44,  142 => 40,  136 => 37,  128 => 32,  116 => 23,  102 => 11,  92 => 10,  73 => 2,  63 => 10,  56 => 5,  52 => 3,  48 => 2,  45 => 1,);
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

<body class=\"\" style=\"background-color:#323232\" >



<section  >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-12\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-6 d-none d-md-block\">
              <img src=\"{{ asset('imagenes/loginRestaurante.jpeg') }}\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-5 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">

              <form name=\"registration_form\" id=\"formulario_registro\" method=\"post\" >

                    <div class=\"d-flex align-items-center mb-3  pb-1\">
                        <img src=\"{{ asset('imagenes/logo.png') }}\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                    </div>

                    <h1 class=\"fw-normal mb-3\" style=\"letter-spacing: 1px;\">Registrate</h1>

                    {{ form_start(registrationForm) }}

                    <div class=\"form-outline col-md-12\" >
                      {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'id':'email'}})  }}

                    </div>
                    <div class=\"form-outline\" >
                        {{ form_row(registrationForm.plainPassword, {'label': 'Contraseña','attr': {'class': 'form-control', 'id':'contrasena'}}, {
                             label: 'Contraseña'
                           }) }}
                    </div>
                    <div class=\"form-outline\" >
                      {{ form_row(registrationForm.nombre, {'label': 'Nombre completo','attr': {'class': 'form-control', 'id':'nombre'}}) }}
                    </div>
                    <div class=\"form-outline my-2\" >
                      {{ form_row(registrationForm.contacto, {'label': 'Telefono','attr': {'class': 'form-control', 'id':'contacto'}}) }}
                    </div>

                    <div class=\"form-outline visually-hidden\">
                      {{ form_row(registrationForm.puntos, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {# <div class=\"form-outline my-2\">
                      {{ form_row(registrationForm.roles, {'attr': {'class': 'form-control'}}) }}
                    </div> #}
                    
                    <div class=\"mb-3\">
                      {{ form_row(registrationForm.agreeTerms,{'label': 'Aceptar terminos'}) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block mb-2\">Crear Cuenta</button>
                    {{ form_end(registrationForm) }} 
                
                </form>

                <a href=\"{{ path('inicio') }}\"
                      style=\"color: #393f81;\">Inicio</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\registration\\register.html.twig");
    }
}
