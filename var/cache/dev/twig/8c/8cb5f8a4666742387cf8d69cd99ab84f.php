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

/* opinion/edit.html.twig */
class __TwigTemplate_0742f2d8e626486a9da24420e408626b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opinion/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Opinion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Responder opinion</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("miRestaurante");
        echo "\"> 
                    Volver a las opiniones
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row p-2\" >
                <div class=\"col-md-3\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-group mb-3 \">

                            <label class=\"my-label-class mb-2\">Valoración</label>

                            <div class=\"rating\">
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                                    <input type=\"radio\" id=\"star";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "valoracion", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "full_name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" style=\"display: none;\">
                                    <label for=\"star";
            // line 25
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><i class=\"fas fa-star fa-lg\" data-value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"></i></label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                            </div>

                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 29, $this->source); })()), "valoracion", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "hidden-rating", "value" => "", "readonly" => "readonly"]]);
        // line 35
        echo "



                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), "comentario", [], "any", false, false, false, 43), 'row', ["label" => "Añadir una reseña escrita", "label_attr" => ["class" => "my-label-class"], "attr" => ["placeholder" => "Cuenta tu experiencia", "class" => "form-control", "readonly" => "readonly"]]);
        // line 54
        echo "               
                            </div>
                        </div>

                        <div class=\"col-md-9\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "respuesta", [], "any", false, false, false, 60), 'row', ["label" => "Añadir una respuesta", "label_attr" => ["class" => "my-label-class"], "attr" => ["placeholder" => "Responde la opinion anterior", "class" => "form-control", "required" => "required"]]);
        // line 71
        echo "               
                            </div>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 77, $this->source); })()), "fecha", [], "any", false, false, false, 77), 'row', ["label" => "FechaActual", "label_attr" => ["class" => "my-label-class d-none"], "attr" => ["placeholder" => "Cuenta tu experiencia", "class" => "form-control d-none", "data-fecha-input" => "opinion_fecha"]]);
        // line 88
        echo "               
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn ";
        // line 92
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 92, $this->source); })()), "btn-primary")) : ("btn-primary")), "html", null, true);
        echo "  mt-2\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 92, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
                        </div>
                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        // Obtener el campo formulario.fecha
        var \$fechaCampo = \$('#";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 105, $this->source); })()), "fecha", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
        echo "');

        // Obtener el campo de entrada opinion_fecha
        var \$opinionFechaCampo = \$('#opinion_fecha');

        // Obtener la fecha actual del dispositivo
        var fechaActual = new Date();
        console.log(fechaActual);

        // Formatear la fecha solo con la parte de la fecha (sin la hora)
        var fechaFormateada = fechaActual.toLocaleDateString();

        // Establecer el valor del campo formulario.fecha
        \$fechaCampo.val(fechaFormateada);

        // Establecer el valor del campo de entrada opinion_fecha
        \$opinionFechaCampo.val(fechaFormateada);
    });

    const stars = document.querySelectorAll('.rating i');
    const hiddenRatingInput = document.querySelector('.hidden-rating');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const value = star.dataset.value;
            hiddenRatingInput.value = value;

            stars.forEach(s => {
                if (s.dataset.value <= value) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
    });
    // Agregar evento para manejar el caso en que no se seleccione ninguna estrella
    hiddenRatingInput.addEventListener('change', () => {
        const value = hiddenRatingInput.value;

        if (value === '') {
            hiddenRatingInput.value = '0';

            stars.forEach(s => {
                s.classList.remove('active');
            });
        }
    });

    // Agregar evento al cargar la página para verificar si ninguna estrella está seleccionada inicialmente
    window.addEventListener('load', () => {
        const value = hiddenRatingInput.value;

        if (value === '') {
            hiddenRatingInput.value = '0';
        }

        stars.forEach(s => {
            if (s.dataset.value <= value) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "opinion/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 105,  187 => 94,  180 => 92,  174 => 88,  172 => 77,  164 => 71,  162 => 60,  154 => 54,  152 => 43,  142 => 35,  140 => 29,  136 => 27,  126 => 25,  117 => 24,  113 => 23,  104 => 17,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Opinion{% endblock %}

{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Responder opinion</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"{{ path('miRestaurante') }}\"> 
                    Volver a las opiniones
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row p-2\" >
                <div class=\"col-md-3\">
                    {{ form_start(formulario) }}
                        <div class=\"form-group mb-3 \">

                            <label class=\"my-label-class mb-2\">Valoración</label>

                            <div class=\"rating\">
                                {% for i in 1..5 %}
                                    <input type=\"radio\" id=\"star{{ i }}\" name=\"{{ formulario.valoracion.vars.full_name }}\" value=\"{{ i }}\" style=\"display: none;\">
                                    <label for=\"star{{ i }}\"><i class=\"fas fa-star fa-lg\" data-value=\"{{ i }}\"></i></label>
                                {% endfor %}
                            </div>

                            {{ form_row(formulario.valoracion, {
                                'attr': {
                                    'class': 'hidden-rating',
                                    'value': '',
                                    'readonly': 'readonly'
                                },
                            }) }}



                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"form-group mb-3\">
                                {{ form_row(formulario.comentario, {
                                    'label': 'Añadir una reseña escrita',
                                    'label_attr': {
                                    'class': 'my-label-class'
                                    },
                                    'attr': {
                                        'placeholder': 'Cuenta tu experiencia',
                                        'class': 'form-control',
                                        'readonly': 'readonly'
                                        }
                                    })
                                }}               
                            </div>
                        </div>

                        <div class=\"col-md-9\">
                            <div class=\"form-group mb-3\">
                                {{ form_row(formulario.respuesta, {
                                    'label': 'Añadir una respuesta',
                                    'label_attr': {
                                    'class': 'my-label-class'
                                    },
                                    'attr': {
                                        'placeholder': 'Responde la opinion anterior',
                                        'class': 'form-control',
                                        'required': 'required'
                                        }
                                    })
                                }}               
                            </div>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"form-group mb-3\">
                                {{ form_row(formulario.fecha, {
                                        'label': 'FechaActual',
                                        'label_attr': {
                                        'class': 'my-label-class d-none',
                                        },
                                        'attr': {
                                            'placeholder': 'Cuenta tu experiencia',
                                            'class': 'form-control d-none',
                                            'data-fecha-input': 'opinion_fecha',
                                        },
                                    })
                                }}               
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn {{ button_color|default('btn-primary') }}  mt-2\" >{{ button_label|default('Guardar') }}</button>
                        </div>
                {{ form_end(formulario) }}
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        // Obtener el campo formulario.fecha
        var \$fechaCampo = \$('#{{ formulario.fecha.vars.id }}');

        // Obtener el campo de entrada opinion_fecha
        var \$opinionFechaCampo = \$('#opinion_fecha');

        // Obtener la fecha actual del dispositivo
        var fechaActual = new Date();
        console.log(fechaActual);

        // Formatear la fecha solo con la parte de la fecha (sin la hora)
        var fechaFormateada = fechaActual.toLocaleDateString();

        // Establecer el valor del campo formulario.fecha
        \$fechaCampo.val(fechaFormateada);

        // Establecer el valor del campo de entrada opinion_fecha
        \$opinionFechaCampo.val(fechaFormateada);
    });

    const stars = document.querySelectorAll('.rating i');
    const hiddenRatingInput = document.querySelector('.hidden-rating');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const value = star.dataset.value;
            hiddenRatingInput.value = value;

            stars.forEach(s => {
                if (s.dataset.value <= value) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
    });
    // Agregar evento para manejar el caso en que no se seleccione ninguna estrella
    hiddenRatingInput.addEventListener('change', () => {
        const value = hiddenRatingInput.value;

        if (value === '') {
            hiddenRatingInput.value = '0';

            stars.forEach(s => {
                s.classList.remove('active');
            });
        }
    });

    // Agregar evento al cargar la página para verificar si ninguna estrella está seleccionada inicialmente
    window.addEventListener('load', () => {
        const value = hiddenRatingInput.value;

        if (value === '') {
            hiddenRatingInput.value = '0';
        }

        stars.forEach(s => {
            if (s.dataset.value <= value) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    });
</script>
{% endblock %}
", "opinion/edit.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\opinion\\edit.html.twig");
    }
}
