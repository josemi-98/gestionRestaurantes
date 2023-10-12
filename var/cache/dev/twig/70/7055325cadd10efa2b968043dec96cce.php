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

/* restaurante/index.html.twig */
class __TwigTemplate_c933486c22f184e520a5c104e00abc1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurante/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurante/index.html.twig", 1);
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

        echo "Restaurante index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
 <style>

    .pagination {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.pagination li {
  margin: 0 5px;
}

.pagination li.active a {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.pagination li a {
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 3px;
  color: #007bff;
  display: inline-block;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
}

    </style>

";
        // line 47
        echo "
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
  </symbol>
  <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
  </symbol>
  <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
</svg>

";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", [0 => "notice"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        ";
            // line 63
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
        // line 68
        echo "
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "flashbag", [], "any", false, false, false, 69), "get", [0 => "actualizar"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 70
            echo "    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        ";
            // line 72
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
        // line 77
        echo "
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">MANTENIMIENTO DE RESTAURANTES</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_new");
        echo "\"> 
                    Crear nuevo restaurante
                </a>
            </div>
            <div class=\"card-body table-responsive\">
                <table class=\"table table-bordered \">
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Horario</th>
                        <th>Contacto</th>
                        <th>Descripcion</th>
                        <th>Imagen del restaurante</th>
                        <th>Imagen de la carta</th>
                        <th>User</th>
                        <th >Acciones</th>
                    </tr>
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurante"]) {
            // line 100
            echo "                    <tr>
                        <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                        <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "direccion", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                        <td class=\"mb-2\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "horario", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                        <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "contacto", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                        <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "descripcion", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>

                        <td> <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 107), "html", null, true);
            echo "\" height=\"150px\" width=\"200\"> </td>
                        <td> <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["restaurante"], "imageFileCarta"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "nombre", [], "any", false, false, false, 108), "html", null, true);
            echo "\" height=\"150px\" width=\"200\"> </td>
                        <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurante"], "user", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>



                        <td>
                            <form method=\"post\" action=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Estas seguro que desea eliminar este restaurante?');\">
                                <a
                                    class=\"btn btn-outline-info\"
                                    href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_show", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\">
                                    Ver
                                </a>
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\">
                                    Editar
                                </a>
  
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["restaurante"], "id", [], "any", false, false, false, 126))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-outline-danger\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                </table>
                    <div class=\"pagination\">
                        ";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "pageCount", [], "any", false, false, false, 134) > 1)) {
            // line 135
            echo "                            <ul>
                            ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 136, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 136) != 1)) {
                // line 137
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "getRoute", [], "method", false, false, false, 137), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "getParams", [], "method", false, false, false, 137), ["page" => 1])), "html", null, true);
                echo "\">Primero</a></li>
                                ";
                // line 138
                $context["previousPage"] = (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 138, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 138) - 1);
                // line 139
                echo "                                ";
                if (((isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 139, $this->source); })()) > 0)) {
                    // line 140
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()), "getRoute", [], "method", false, false, false, 140), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()), "getParams", [], "method", false, false, false, 140), ["page" => (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 140, $this->source); })())])), "html", null, true);
                    echo "\">Anterior</a></li>
                                ";
                }
                // line 142
                echo "                            ";
            }
            // line 143
            echo "
                            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()), "getPaginationData", [], "method", false, false, false, 144), "pagesInRange", [], "array", false, false, false, 144));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 145
                echo "                                ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 145))) {
                    // line 146
                    echo "                                <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                ";
                } else {
                    // line 148
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 148, $this->source); })()), "getRoute", [], "method", false, false, false, 148), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 148, $this->source); })()), "getParams", [], "method", false, false, false, 148), ["page" => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                ";
                }
                // line 150
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
                            ";
            // line 152
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 152, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 152) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 152, $this->source); })()), "pageCount", [], "any", false, false, false, 152))) {
                // line 153
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()), "getRoute", [], "method", false, false, false, 153), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()), "getParams", [], "method", false, false, false, 153), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 153) + 1)])), "html", null, true);
                echo "\">Siguiente</a></li>
                                ";
                // line 155
                echo "
                            ";
            }
            // line 157
            echo "                            </ul>
                        ";
        }
        // line 159
        echo "                    </div>
            </div>
        </div>
    </div>


    
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "restaurante/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 159,  367 => 157,  363 => 155,  358 => 153,  356 => 152,  353 => 151,  347 => 150,  339 => 148,  333 => 146,  330 => 145,  326 => 144,  323 => 143,  320 => 142,  314 => 140,  311 => 139,  309 => 138,  304 => 137,  302 => 136,  299 => 135,  297 => 134,  293 => 132,  281 => 126,  274 => 122,  266 => 117,  260 => 114,  252 => 109,  246 => 108,  240 => 107,  235 => 105,  231 => 104,  227 => 103,  223 => 102,  219 => 101,  216 => 100,  212 => 99,  192 => 82,  185 => 77,  174 => 72,  170 => 70,  166 => 69,  163 => 68,  152 => 63,  148 => 61,  144 => 60,  129 => 47,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}Restaurante index{% endblock %}

  
{% block body %}

 <style>

    .pagination {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.pagination li {
  margin: 0 5px;
}

.pagination li.active a {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.pagination li a {
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 3px;
  color: #007bff;
  display: inline-block;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
}

    </style>

{# Mensajes de informacion al usuario, en este caso el restaurante creado #}

<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
  </symbol>
  <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
  </symbol>
  <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
</svg>

{% for flash_message in app.session.flashbag.get('notice') %}
    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        {{ flash_message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
{% endfor %}

{% for flash_message in app.session.flashbag.get('actualizar') %}
    <div class=\"flash-notice alert alert-success alert-dismissible fade show m-5\" role=\"alert\">
    <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
        {{ flash_message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </button>
    </div>
{% endfor %}

    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">MANTENIMIENTO DE RESTAURANTES</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('app_restaurante_new') }}\"> 
                    Crear nuevo restaurante
                </a>
            </div>
            <div class=\"card-body table-responsive\">
                <table class=\"table table-bordered \">
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Horario</th>
                        <th>Contacto</th>
                        <th>Descripcion</th>
                        <th>Imagen del restaurante</th>
                        <th>Imagen de la carta</th>
                        <th>User</th>
                        <th >Acciones</th>
                    </tr>
                    {% for restaurante in pagination %}
                    <tr>
                        <td>{{ restaurante.nombre }}</td>
                        <td>{{ restaurante.direccion }}</td>
                        <td class=\"mb-2\">{{ restaurante.horario }}</td>
                        <td>{{ restaurante.contacto }}</td>
                        <td>{{ restaurante.descripcion }}</td>

                        <td> <img src=\"{{ vich_uploader_asset(restaurante, 'imageFile') }}\" alt=\"{{restaurante.nombre}}\" height=\"150px\" width=\"200\"> </td>
                        <td> <img src=\"{{ vich_uploader_asset(restaurante, 'imageFileCarta') }}\" alt=\"{{restaurante.nombre}}\" height=\"150px\" width=\"200\"> </td>
                        <td>{{ restaurante.user }}</td>



                        <td>
                            <form method=\"post\" action=\"{{ path('app_restaurante_delete', {'id': restaurante.id}) }}\" onsubmit=\"return confirm('Estas seguro que desea eliminar este restaurante?');\">
                                <a
                                    class=\"btn btn-outline-info\"
                                    href=\"{{ path('app_restaurante_show', {'id': restaurante.id}) }}\">
                                    Ver
                                </a>
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"{{ path('app_restaurante_edit', {'id': restaurante.id}) }}\">
                                    Editar
                                </a>
  
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ restaurante.id) }}\">
                                <button class=\"btn btn-outline-danger\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    {% endfor %}
                </table>
                    <div class=\"pagination\">
                        {% if pagination.pageCount > 1 %}
                            <ul>
                            {% if pagination.getCurrentPageNumber() != 1 %}
                                <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': 1})) }}\">Primero</a></li>
                                {% set previousPage = pagination.getCurrentPageNumber() - 1 %}
                                {% if previousPage > 0 %}
                                <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': previousPage})) }}\">Anterior</a></li>
                                {% endif %}
                            {% endif %}

                            {% for page in pagination.getPaginationData()['pagesInRange'] %}
                                {% if page == pagination.getCurrentPageNumber() %}
                                <li class=\"active\"><a href=\"#\">{{ page }}</a></li>
                                {% else %}
                                <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': page})) }}\">{{ page }}</a></li>
                                {% endif %}
                            {% endfor %}

                            {% if pagination.getCurrentPageNumber() != pagination.pageCount %}
                                <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': pagination.getCurrentPageNumber() + 1})) }}\">Siguiente</a></li>
                                {# <li><a href=\"{{ path(pagination.getRoute(), pagination.getParams()|merge({'page': pagination.getCurrentPageNumber() - 1})) }}\">Anterior</a></li> #}

                            {% endif %}
                            </ul>
                        {% endif %}
                    </div>
            </div>
        </div>
    </div>


    
  
{% endblock %}
", "restaurante/index.html.twig", "C:\\Users\\Josemi\\Desktop\\TFC\\Reservas de hosteleria\\backend\\templates\\restaurante\\index.html.twig");
    }
}
