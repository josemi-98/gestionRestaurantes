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

/* reserva/_form.html.twig */
class __TwigTemplate_9337253474ed5bd9926c967d74cf7a7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        // line 1
        echo "<style>

img{
    width: 150px;
}

.form-check-label{
    display:none;
}

.form-check .form-check-input {
    display: none;
}
.fieldset{
    border:none;
}

</style>

<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group mb-3\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "fechaHora", [], "any", false, false, false, 24), 'label', ["label" => "Elige un Día"]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "fechaHora", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => " modificacion", "readonly" => "readonly"]]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "fechaHora", [], "any", false, false, false, 26), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "hora", [], "any", false, false, false, 31), 'row', ["label" => "Elige una Hora"]);
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "hora", [], "any", false, false, false, 32), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lugar", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "name" => "lugar"]]);
        echo "               
                </div>
            </div>
            
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                     ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "mesa", [], "any", false, false, false, 43), 'row', ["label" => "Número de comensales", "attr" => ["placeholder" => "Ingrese el número de comensales"]]);
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "mesa", [], "any", false, false, false, 44), 'errors');
        echo "
                    <small class=\"text-muted\">Si son más de seis personas, por favor llame al siguiente número: 123456789.</small>
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "usuario", [], "any", false, false, false, 50), 'row', ["label" => "Nombre", "label_attr" => ["class" => "my-label-class d-none"], "attr" => ["placeholder" => "Ingrese un valor", "data-nombre-usuario" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nombre", [], "any", false, false, false, 57), "name" => "usuario"]]);
        // line 60
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "restaurante", [], "any", false, false, false, 65), 'row', ["label" => "Restaurante", "label_attr" => ["class" => "my-label-class d-none"], "attr" => ["name" => "restaurante"]]);
        // line 70
        echo "
                    ";
        // line 72
        echo "                </div>
            </div>

            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 78
        echo "                </div>
            </div>
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn ";
        // line 81
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 81, $this->source); })()), "btn-primary")) : ("btn-primary")), "html", null, true);
        echo "  mt-3\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 81, $this->source); })()), "Reservar")) : ("Reservar")), "html", null, true);
        echo "</button>
            </div>
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.0/jquery-ui.min.js\"></script>
    <script>
\$(document).ready(function() {
    var today = new Date(); // Obtener la fecha actual

    // Configurar las opciones del date picker con la localización en español
    var datePickerOptions = {
        minDate: today, // Establecer la fecha mínima como el día actual
        onSelect: function(dateText, inst) {
            // Convertir la cadena de texto en un objeto Date
            var selectedDate = new Date(dateText);
            
            // Obtener los componentes de fecha necesarios para crear un objeto DateTimeInterface
            var year = selectedDate.getFullYear();
            var month = selectedDate.getMonth() + 1; // Los meses en JavaScript comienzan en 0
            var day = selectedDate.getDate();
            
            // Crear la cadena de texto en formato YYYY-MM-DD
            var formattedDate = year + '-' + month.toString().padStart(2, '0') + '-' + day.toString().padStart(2, '0');
            
            // Establecer el valor del campo de entrada con la cadena de texto formateada
            \$(this).val(formattedDate);
        },
        // Configurar la localización en español
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        firstDay: 1,
        //dateFormat: 'dd/mm/yy' // Formato de fecha (puedes ajustarlo según tus necesidades)
        beforeShowDay: function(date) {
            var day = date.getDay();
            // Deshabilitar la selección de los lunes (day = 1)
            return [day !== 1];
        }
    };

    // Aplicar las opciones al elemento de fechaHora
    \$('.modificacion').datepicker(datePickerOptions);
});
</script>
    <script>// Obtener el elemento select por su ID
        var selectElement = document.getElementById('reserva_mesa');

        // Cambiar el contenido del primer elemento
        selectElement.options[0].innerHTML = '1';

  // Obtener todas las opciones
var options = Array.from(selectElement.options);

// Obtener los números de comensales de las opciones existentes
var comensales = options.map(function(option) {
  return option.innerHTML;
});

// Eliminar los números de comensales duplicados
var uniqueComensales = comensales.filter(function(comensal, index, self) {
  return self.indexOf(comensal) === index;
});

// Vaciar las opciones existentes
selectElement.innerHTML = '';

// Agregar las opciones únicas al select
uniqueComensales.forEach(function(comensal) {
  var option = document.createElement('option');
  option.value = comensal;
  option.innerHTML = comensal;
  selectElement.appendChild(option);
});

    </script>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reserva/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 83,  148 => 81,  143 => 78,  136 => 72,  133 => 70,  131 => 65,  124 => 60,  122 => 57,  121 => 50,  112 => 44,  108 => 43,  99 => 37,  91 => 32,  87 => 31,  79 => 26,  75 => 25,  71 => 24,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

img{
    width: 150px;
}

.form-check-label{
    display:none;
}

.form-check .form-check-input {
    display: none;
}
.fieldset{
    border:none;
}

</style>

<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        {{ form_start(form) }}
            <div class=\"form-group mb-3\">
                    {{ form_label(form.fechaHora, 'Elige un Día') }}
                    {{ form_widget(form.fechaHora, {'attr': {'class': ' modificacion', 'readonly': 'readonly'}}) }}
                    {{ form_errors(form.fechaHora) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.hora, {'label': 'Elige una Hora'}) }}
                    {{ form_errors(form.hora) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.lugar, {'attr': {'class': 'form-control', 'name': 'lugar'}}) }}               
                </div>
            </div>
            
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                     {{ form_row(form.mesa, {'label': 'Número de comensales', 'attr': {'placeholder': 'Ingrese el número de comensales'}}) }}
                    {{ form_errors(form.mesa) }}
                    <small class=\"text-muted\">Si son más de seis personas, por favor llame al siguiente número: 123456789.</small>
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.usuario, {
                        'label': 'Nombre',
                        'label_attr': {
                            'class': 'my-label-class d-none',
                            },
                        'attr': {
                            'placeholder': 'Ingrese un valor',
                            'data-nombre-usuario': app.user.nombre,
                            'name' : 'usuario'
                        }
                    }) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.restaurante, {
                        'label': 'Restaurante', 
                        'label_attr': {
                            'class': 'my-label-class d-none',
                            },
                        'attr': {'name': 'restaurante'}}) }}
                    {# {{ form_widget(form.restaurante, { 'attr': {'class': 'hidden'}, 'empty_data': restaurante.id}) }} #}
                </div>
            </div>

            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {# {{ form_row(form.nombreRestaurante, {'label': 'Restaurante','attr': {'class': ''}}) }} #}
                </div>
            </div>
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-primary') }}  mt-3\" >{{ button_label|default('Reservar') }}</button>
            </div>
    {{ form_end(form) }}
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.0/jquery-ui.min.js\"></script>
    <script>
\$(document).ready(function() {
    var today = new Date(); // Obtener la fecha actual

    // Configurar las opciones del date picker con la localización en español
    var datePickerOptions = {
        minDate: today, // Establecer la fecha mínima como el día actual
        onSelect: function(dateText, inst) {
            // Convertir la cadena de texto en un objeto Date
            var selectedDate = new Date(dateText);
            
            // Obtener los componentes de fecha necesarios para crear un objeto DateTimeInterface
            var year = selectedDate.getFullYear();
            var month = selectedDate.getMonth() + 1; // Los meses en JavaScript comienzan en 0
            var day = selectedDate.getDate();
            
            // Crear la cadena de texto en formato YYYY-MM-DD
            var formattedDate = year + '-' + month.toString().padStart(2, '0') + '-' + day.toString().padStart(2, '0');
            
            // Establecer el valor del campo de entrada con la cadena de texto formateada
            \$(this).val(formattedDate);
        },
        // Configurar la localización en español
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        firstDay: 1,
        //dateFormat: 'dd/mm/yy' // Formato de fecha (puedes ajustarlo según tus necesidades)
        beforeShowDay: function(date) {
            var day = date.getDay();
            // Deshabilitar la selección de los lunes (day = 1)
            return [day !== 1];
        }
    };

    // Aplicar las opciones al elemento de fechaHora
    \$('.modificacion').datepicker(datePickerOptions);
});
</script>
    <script>// Obtener el elemento select por su ID
        var selectElement = document.getElementById('reserva_mesa');

        // Cambiar el contenido del primer elemento
        selectElement.options[0].innerHTML = '1';

  // Obtener todas las opciones
var options = Array.from(selectElement.options);

// Obtener los números de comensales de las opciones existentes
var comensales = options.map(function(option) {
  return option.innerHTML;
});

// Eliminar los números de comensales duplicados
var uniqueComensales = comensales.filter(function(comensal, index, self) {
  return self.indexOf(comensal) === index;
});

// Vaciar las opciones existentes
selectElement.innerHTML = '';

// Agregar las opciones únicas al select
uniqueComensales.forEach(function(comensal) {
  var option = document.createElement('option');
  option.value = comensal;
  option.innerHTML = comensal;
  selectElement.appendChild(option);
});

    </script>
</div>
", "reserva/_form.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\reserva\\_form.html.twig");
    }
}
