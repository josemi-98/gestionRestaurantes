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

/* pdf/myPdf.html.twig */
class __TwigTemplate_ca3177feee8eade5fae20dc6ad75bdd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/myPdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/myPdf.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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

        echo "BIENVENIDO A XOKASCIA";
        
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
        echo "<html>
<head>
<style>
/** Define the margins of your page **/
@page {
margin: 100px 25px;
}

header {
position: fixed;
top: -60px;
left: 0px;
right: 0px;
height: 50px;

/** Extra personal styles **/
background-color: #03a9f4;
color: white;
text-align: center;
line-height: 35px;
}

footer {
position: fixed;
bottom: -60px;
left: 0px;
right: 0px;
height: 50px;

/** Extra personal styles **/
background-color: #03a9f4;
color: white;
text-align: center;
line-height: 35px;
}
</style>
</head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
        Cabecera del documento
        </header>

        <footer>
        Copyright © <?php echo date(\"Y\");?>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        </main>
    </body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pdf/myPdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}BIENVENIDO A XOKASCIA{% endblock %}

{% block body %}
<html>
<head>
<style>
/** Define the margins of your page **/
@page {
margin: 100px 25px;
}

header {
position: fixed;
top: -60px;
left: 0px;
right: 0px;
height: 50px;

/** Extra personal styles **/
background-color: #03a9f4;
color: white;
text-align: center;
line-height: 35px;
}

footer {
position: fixed;
bottom: -60px;
left: 0px;
right: 0px;
height: 50px;

/** Extra personal styles **/
background-color: #03a9f4;
color: white;
text-align: center;
line-height: 35px;
}
</style>
</head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
        Cabecera del documento
        </header>

        <footer>
        Copyright © <?php echo date(\"Y\");?>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        <p>aa<a/>
        </main>
    </body>

</html>
{% endblock %}", "pdf/myPdf.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\pdf\\myPdf.html.twig");
    }
}
