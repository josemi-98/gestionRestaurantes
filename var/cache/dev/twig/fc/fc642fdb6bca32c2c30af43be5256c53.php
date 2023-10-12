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

/* restaurante/_form.html.twig */
class __TwigTemplate_37517ceb827309081cf510b5e5e80880 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/_form.html.twig"));

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

</style>

<div class=\"row\">

            <div class=\"col-md-6 col-12\">
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["id" => "formulario"]]);
        echo "

                <div class=\"form-group mb-3\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control", "id" => "nombre"]]);
        echo "
                </div>
                <div class=\"error-message\"></div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "direccion", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "id" => "direccion"]]);
        echo "               
                </div>
                <div class=\"error-message\"></div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "horario", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "descripcion", [], "any", false, false, false, 40), 'row', ["label" => "Breve descripcion del restaurante", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "imageFile", [], "any", false, false, false, 45), 'row', ["label" => "Imagen del Restaurante", "attr" => ["class" => ""]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "imageFileCarta", [], "any", false, false, false, 50), 'row', ["label" => "Imagen de la carta", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "contacto", [], "any", false, false, false, 55), 'row', ["label" => "Numero del restaurante", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            ";
        // line 58
        if (twig_in_filter("ROLE_RESTAURANTE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58))) {
            // line 59
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), 'row', ["label" => false, "attr" => ["hidden" => true]]);
            echo "
            ";
        } else {
            // line 61
            echo "                <div class=\"col-md-6 col-12\">
                    <div class=\"form-group\">
                        ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), 'row', ["label" => "Usuario", "attr" => ["class" => "form-control"]]);
            echo "
                    </div>
                </div>
            ";
        }
        // line 67
        echo "            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn ";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 68, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
        echo "  mt-3\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 68, $this->source); })()), "Guardar Restaurante")) : ("Guardar Restaurante")), "html", null, true);
        echo "</button>
            </div>
    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "restaurante/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 70,  148 => 68,  145 => 67,  138 => 63,  134 => 61,  128 => 59,  126 => 58,  120 => 55,  112 => 50,  104 => 45,  96 => 40,  88 => 35,  79 => 29,  70 => 23,  64 => 20,  43 => 1,);
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

</style>

<div class=\"row\">

            <div class=\"col-md-6 col-12\">
        {{ form_start(form, {'attr': {'id':'formulario'}}) }}

                <div class=\"form-group mb-3\">
                    {{ form_row(form.nombre, {'attr': {'class': 'form-control', 'id':'nombre'}}) }}
                </div>
                <div class=\"error-message\"></div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.direccion, {'attr': {'class': 'form-control', 'id':'direccion'}}) }}               
                </div>
                <div class=\"error-message\"></div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.horario, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.descripcion, {'label': 'Breve descripcion del restaurante','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.imageFile, {'label': 'Imagen del Restaurante','attr': {'class': ''}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.imageFileCarta, {'label': 'Imagen de la carta','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.contacto, {'label': 'Numero del restaurante','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            {% if 'ROLE_RESTAURANTE' in app.user.roles %}
                {{ form_row(form.user, {'label': false, 'attr': {'hidden': true} }) }}
            {% else %}
                <div class=\"col-md-6 col-12\">
                    <div class=\"form-group\">
                        {{ form_row(form.user, {'label': 'Usuario','attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
            {% endif %}
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Guardar Restaurante') }}</button>
            </div>
    {{ form_end(form) }}
</div>
", "restaurante/_form.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\restaurante\\_form.html.twig");
    }
}
