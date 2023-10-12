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

/* mesa/_form.html.twig */
class __TwigTemplate_d454849034ed368fd1e6637428d9e415 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesa/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesa/_form.html.twig"));

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
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group mb-3\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "numeroPersonas", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control"]]);
        echo "               
                </div>
            </div>
            ";
        // line 34
        echo "            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn ";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 35, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
        echo "  mt-3\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
            </div>
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mesa/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  85 => 35,  82 => 34,  76 => 26,  68 => 21,  63 => 19,  43 => 1,);
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
        {{ form_start(form) }}
            <div class=\"form-group mb-3\">
                    {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.numeroPersonas, {'attr': {'class': 'form-control'}}) }}               
                </div>
            </div>
            {# <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.restaurante, {'attr': {'class': 'form-control'}}) }}               
                </div>
            </div> #}
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Guardar') }}</button>
            </div>
    {{ form_end(form) }}
    </div>
</div>
", "mesa/_form.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\mesa\\_form.html.twig");
    }
}
