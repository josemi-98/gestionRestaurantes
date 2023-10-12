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

/* opinion/_form.html.twig */
class __TwigTemplate_eb75ed434ff79b5772b4fa924eab0991 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/_form.html.twig"));

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
.rating {
        color: #888;
    }

    .rating i.active,
    .rating i.active ~ i {
        color: #ffc107;
    }




</style>

<div class=\"row p-2\" >
    <div class=\"col-md-3\">
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group mb-3 \">

                <label class=\"my-label-class mb-2\">Valoración</label>

                <div class=\"rating\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "                        <input type=\"radio\" id=\"star";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "valoracion", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "full_name", [], "any", false, false, false, 37), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" style=\"display: none;\">
                        <label for=\"star";
            // line 38
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><i class=\"fas fa-star fa-lg\" data-value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"></i></label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>

                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "valoracion", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "hidden-rating", "value" => ""]]);
        // line 47
        echo "



                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"form-group mb-3\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 55, $this->source); })()), "comentario", [], "any", false, false, false, 55), 'row', ["label" => "Añadir una reseña escrita", "label_attr" => ["class" => "my-label-class"], "attr" => ["placeholder" => "Cuenta tu experiencia", "class" => "form-control"]]);
        // line 65
        echo "               
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"form-group mb-3\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 70, $this->source); })()), "respuesta", [], "any", false, false, false, 70), 'row', ["label" => "Añadir una reseña escrita", "label_attr" => ["class" => "my-label-class d-none"], "attr" => ["placeholder" => "Cuenta tu experiencia", "class" => "form-control d-none", "novalidate" => "novalidate"]]);
        // line 81
        echo "               
                </div>
            </div>

            <div class=\"col-md-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 87, $this->source); })()), "fecha", [], "any", false, false, false, 87), 'row', ["label" => "FechaActual", "label_attr" => ["class" => "my-label-class d-none"], "attr" => ["placeholder" => "Cuenta tu experiencia", "class" => "form-control d-none", "data-fecha-input" => "opinion_fecha"]]);
        // line 98
        echo "               
                </div>
            </div>
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn ";
        // line 102
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 102, $this->source); })()), "btn-primary")) : ("btn-primary")), "html", null, true);
        echo "  mt-2\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 102, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
            </div>
    ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
    </div>
</div>


<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        // Obtener el campo formulario.fecha
        var \$fechaCampo = \$('#";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 113, $this->source); })()), "fecha", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "opinion/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 113,  156 => 104,  149 => 102,  143 => 98,  141 => 87,  133 => 81,  131 => 70,  124 => 65,  122 => 55,  112 => 47,  110 => 42,  106 => 40,  96 => 38,  87 => 37,  83 => 36,  74 => 30,  43 => 1,);
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
.rating {
        color: #888;
    }

    .rating i.active,
    .rating i.active ~ i {
        color: #ffc107;
    }




</style>

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
                            'class': 'form-control'
                            }
                        })
                    }}               
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"form-group mb-3\">
                    {{ form_row(formulario.respuesta, {
                        'label': 'Añadir una reseña escrita',
                        'label_attr': {
                        'class': 'my-label-class d-none'
                        },
                        'attr': {
                            'placeholder': 'Cuenta tu experiencia',
                            'class': 'form-control d-none',
                            'novalidate': 'novalidate'
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
", "opinion/_form.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\opinion\\_form.html.twig");
    }
}
