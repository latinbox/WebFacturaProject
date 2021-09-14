<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gestionImagenes/cargaMasiva.html.twig */
class __TwigTemplate_70facc90b0d361e24cff68a6c4ce02dc8bcce33c922e841d7f8958f64d58f75a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionImagenes/cargaMasiva.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionImagenes/cargaMasiva.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Nueva Imagen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["worksheetTitle"] => $context["worksheetData"]) {
            // line 6
            echo "            <h2>";
            echo twig_escape_filter($this->env, $context["worksheetTitle"], "html", null, true);
            echo "</h2>
            <table>
                <thead>
                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["worksheetData"], "columnNames", []));
            foreach ($context['_seq'] as $context["_key"] => $context["columnName"]) {
                // line 10
                echo "                        <th class=\"heading\"><b>";
                echo twig_escape_filter($this->env, $context["columnName"], "html", null, true);
                echo "</b></th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columnName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                </thead>
                <tbody>
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["worksheetData"], "columnValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["columnValue"]) {
                // line 15
                echo "                        <tr>
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["columnValue"]);
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 17
                    echo "                                <td class=\"heading\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columnValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['worksheetTitle'], $context['worksheetData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
    <br>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <style>
        table {
            border: 1px solid #B0CBEF;
            border-width: 1px 0px 0px 1px;
            font-size: 11pt;
            font-family: Calibri;
            font-weight: 100;
            border-spacing: 0px;
            border-collapse: collapse;
        }
        table th {
            background-repeat: repeat-x;
            font-weight: normal;
            font-size: 14px;
            border: 1px solid #9EB6CE;
            border-width: 0px 1px 1px 0px;
            height: 17px;
        }
        table td {
            border: 0px;
            background-color: white;
            padding: 0px 4px 0px 2px;
            border: 1px solid #D0D7E5;
            border-width: 0px 1px 1px 0px;
        }
        table td.heading {
            background-color: #E4ECF7;
            text-align: center;
            border: 1px solid #9EB6CE;
            border-width: 0px 1px 1px 0px;
        }
        table th.heading {
            background-repeat: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gestionImagenes/cargaMasiva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 30,  144 => 29,  135 => 26,  131 => 24,  123 => 21,  116 => 19,  107 => 17,  103 => 16,  100 => 15,  96 => 14,  92 => 12,  83 => 10,  79 => 9,  72 => 6,  68 => 5,  65 => 4,  59 => 3,  47 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titulo %}Nueva Imagen{% endblock %}
{% block contenido %}
   
        {% for worksheetTitle, worksheetData in data %}
            <h2>{{ worksheetTitle }}</h2>
            <table>
                <thead>
                    {% for columnName in worksheetData.columnNames %}
                        <th class=\"heading\"><b>{{ columnName }}</b></th>
                    {% endfor %}
                </thead>
                <tbody>
                    {% for columnValue in worksheetData.columnValues %}
                        <tr>
                            {% for value in columnValue %}
                                <td class=\"heading\">{{ value }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endfor %}
    </div>
    <br>
    <a href=\"{{ path('homepage') }}\">Homepage</a>
{% endblock %}

{% block stylesheets %}
    <style>
        table {
            border: 1px solid #B0CBEF;
            border-width: 1px 0px 0px 1px;
            font-size: 11pt;
            font-family: Calibri;
            font-weight: 100;
            border-spacing: 0px;
            border-collapse: collapse;
        }
        table th {
            background-repeat: repeat-x;
            font-weight: normal;
            font-size: 14px;
            border: 1px solid #9EB6CE;
            border-width: 0px 1px 1px 0px;
            height: 17px;
        }
        table td {
            border: 0px;
            background-color: white;
            padding: 0px 4px 0px 2px;
            border: 1px solid #D0D7E5;
            border-width: 0px 1px 1px 0px;
        }
        table td.heading {
            background-color: #E4ECF7;
            text-align: center;
            border: 1px solid #9EB6CE;
            border-width: 0px 1px 1px 0px;
        }
        table th.heading {
            background-repeat: none;
        }
    </style>
{% endblock %}

", "gestionImagenes/cargaMasiva.html.twig", "C:\\Users\\Camilo\\Documents\\proyectoWebFactura\\image_blog\\app\\Resources\\views\\gestionImagenes\\cargaMasiva.html.twig");
    }
}
