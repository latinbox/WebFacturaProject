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

/* gestionImagenes/listadoImagen.html.twig */
class __TwigTemplate_f7ea3e38e712ea897421aa2f07f2f3a7c11e25edb6dbec513441c737d62921db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionImagenes/listadoImagen.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionImagenes/listadoImagen.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Listado Imagen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<br><br>
<div class=\"container\">
    <table class=\"table table-striped table-dark\">
    <thead>
        <tr>
        <th scope=\"col\">Editar</th>
        <th scope=\"col\">Nombre</th>
        <th scope=\"col\">Descripcion</th>
        <th scope=\"col\">Foto</th>
        <th scope=\"col\">Borrar</th>
        </tr>
    </thead>
    <tbody>
     ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imagenes"] ?? $this->getContext($context, "imagenes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 18
            echo "        <tr>
            <th scope=\"row\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaImagen", ["id" => $this->getAttribute($context["imagen"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a></th>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "title", []), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "description", []), "html", null, true);
            echo "</td>
            <td>
            <div class=\"col-sm-6 col-md-4\">
            <a><img class=\"img-thumbnail\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["img_fichero"] ?? $this->getContext($context, "img_fichero")) . $this->getAttribute($context["imagen"], "image", []))), "html", null, true);
            echo "\" width=\"80\" height=\"80\" /></a>
            </div>
            </td>
            <th scope=\"row\"><a href=\"#\" onClick=\"return controlBorrado('";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrarImagen", ["id" => $this->getAttribute($context["imagen"], "id", [])]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "title", []), "html", null, true);
            echo "');\"><i class=\"fas fa-trash-alt\"></i></a></th>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/borrarImg.js"), "html", null, true);
        echo "\">
";
        // line 44
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nuevaImg.js"), "html", null, true);
        echo "\">
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gestionImagenes/listadoImagen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  137 => 37,  134 => 36,  128 => 35,  118 => 30,  107 => 27,  101 => 24,  95 => 21,  91 => 20,  87 => 19,  84 => 18,  80 => 17,  65 => 4,  59 => 3,  47 => 2,  31 => 1,);
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
{% block titulo %}Listado Imagen{% endblock %}
{% block contenido %}
<br><br>
<div class=\"container\">
    <table class=\"table table-striped table-dark\">
    <thead>
        <tr>
        <th scope=\"col\">Editar</th>
        <th scope=\"col\">Nombre</th>
        <th scope=\"col\">Descripcion</th>
        <th scope=\"col\">Foto</th>
        <th scope=\"col\">Borrar</th>
        </tr>
    </thead>
    <tbody>
     {% for imagen in imagenes %}
        <tr>
            <th scope=\"row\"><a href=\"{{path('nuevaImagen', {'id':imagen.id})}}\"><i class=\"fas fa-pencil-alt\"></i></a></th>
            <td>{{imagen.title}}</td>
            <td>{{imagen.description}}</td>
            <td>
            <div class=\"col-sm-6 col-md-4\">
            <a><img class=\"img-thumbnail\" src=\"{{asset(img_fichero~imagen.image)}}\" width=\"80\" height=\"80\" /></a>
            </div>
            </td>
            <th scope=\"row\"><a href=\"#\" onClick=\"return controlBorrado('{{path('borrarImagen', {'id':imagen.id})}}', '{{imagen.title}}');\"><i class=\"fas fa-trash-alt\"></i></a></th>
        </tr>
    {% endfor %}
    </tbody>
    </table>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"{{ asset('js/borrarImg.js') }}\">
{# <script>
    function controlBorrado(){
    swal(\"Hello Mundo\");
    return false;
    }
</script> #}
 <script src=\"{{ asset('js/nuevaImg.js') }}\">
  
{% endblock %}
", "gestionImagenes/listadoImagen.html.twig", "C:\\Users\\Camilo\\Documents\\proyectoWebFactura\\image_blog\\app\\Resources\\views\\gestionImagenes\\listadoImagen.html.twig");
    }
}
