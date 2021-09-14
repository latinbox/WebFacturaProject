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

/* base.html.twig */
class __TwigTemplate_029054ec96bda730a6a9b6c4b0941d27ea7dfc7b773916b1e245a95dc1fa2e4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenido' => [$this, 'block_contenido'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css\" rel=\"stylesheet"), "html", null, true);
        echo ">
    
    ";
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body class=\"d-flex flex-column h-100\">
";
        // line 16
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <div class=\"container px-5\">
                        <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">GalleryApp</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                                ";
        // line 25
        echo "                               <li class=\"nav-item dropdown\">
                               ";
        // line 26
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 27
            echo "                                <a class=\"nav-link dropdown-toggle\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" id=\"navbarDropdownBlog\"  role=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">Galería</a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownBlog\">
                                            ";
            // line 29
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 30
                echo "                                            <li><a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaImagen");
                echo "\">Crear Nueva</a></li>
                                            ";
            }
            // line 32
            echo "                                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                                            <li><a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaImagenAdmin");
                echo "\">Crear Nueva</a></li>
                                            ";
            }
            // line 35
            echo "                                            <li><a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listadoImagen");
            echo "\">Ver listado</a></li>
                                            ";
            // line 36
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "                                            <li><a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cargaMasiva");
                echo "\">Carga masiva</a></li>
                                            ";
            }
            // line 39
            echo "                                        </ul> 
                                <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
                                
                                ";
        } else {
            // line 42
            echo "    
                                 <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"nav-link\">Login</a>
                                  
                                ";
        }
        // line 46
        echo "                                </li>
                                 ";
        // line 54
        echo "                            </ul>
                        </div>
                    </div>
            </nav>
   ";
        // line 59
        echo "    
    ";
        // line 60
        $this->displayBlock('contenido', $context, $blocks);
        // line 61
        echo "      <!-- Footer-->
        <footer class=\"bg-dark py-4 mt-auto\">
            <div class=\"container px-5\">
                <div class=\"row align-items-center justify-content-between flex-column flex-sm-row\">
                    <div class=\"col-auto\"><div class=\"small m-0 text-white\">Copyright &copy; CCGD 2021</div></div>
                    <div class=\"col-auto\">
                        <a class=\"link-light small\" href=\"#!\">Privacy</a>
                        <span class=\"text-white mx-1\">&middot;</span>
                        <a class=\"link-light small\" href=\"#!\">Terms</a>
                        <span class=\"text-white mx-1\">&middot;</span>
                        <a class=\"link-light small\" href=\"#!\">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
      ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    
    ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    
    
    
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 81,  219 => 76,  208 => 60,  197 => 12,  186 => 5,  175 => 82,  173 => 81,  167 => 77,  165 => 76,  148 => 61,  146 => 60,  143 => 59,  137 => 54,  134 => 46,  128 => 43,  125 => 42,  119 => 40,  116 => 39,  110 => 37,  108 => 36,  103 => 35,  97 => 33,  94 => 32,  88 => 30,  86 => 29,  80 => 27,  78 => 26,  75 => 25,  68 => 18,  64 => 16,  60 => 13,  58 => 12,  55 => 11,  50 => 8,  44 => 5,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block titulo %}{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"{{ asset('css/modern-business.css\" rel=\"stylesheet') }}>
    
    {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\"> #}

    {% block stylesheets %}{% endblock %}
</head>
<body class=\"d-flex flex-column h-100\">
{# Menu de Navegacion  #}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <div class=\"container px-5\">
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">GalleryApp</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                                {# <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('nosotros') }}\">Nosotros</a>
                                </li> #}
                               <li class=\"nav-item dropdown\">
                               {% if app.user %}
                                <a class=\"nav-link dropdown-toggle\" href=\"{{ path('login') }}\" id=\"navbarDropdownBlog\"  role=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">Galería</a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownBlog\">
                                            {% if is_granted('ROLE_USER') %}
                                            <li><a class=\"dropdown-item\" href=\"{{path('nuevaImagen')}}\">Crear Nueva</a></li>
                                            {% endif %}
                                            {% if is_granted('ROLE_ADMIN') %}
                                            <li><a class=\"dropdown-item\" href=\"{{path('nuevaImagenAdmin')}}\">Crear Nueva</a></li>
                                            {% endif %}
                                            <li><a class=\"dropdown-item\" href=\"{{path('listadoImagen')}}\">Ver listado</a></li>
                                            {% if is_granted('ROLE_ADMIN') %}
                                            <li><a class=\"dropdown-item\" href=\"{{path('cargaMasiva')}}\">Carga masiva</a></li>
                                            {% endif %}
                                        </ul> 
                                <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
                                
                                {% else %}    
                                 <a href=\"{{ path('login') }}\" class=\"nav-link\">Login</a>
                                  
                                {% endif %}
                                </li>
                                 {# <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownPortfolio\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Portfolio</a>
                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownPortfolio\">
                                    <li><a class=\"dropdown-item\" href=\"portfolio-overview.html\">Portfolio Overview</a></li>
                                    <li><a class=\"dropdown-item\" href=\"portfolio-item.html\">Portfolio Item</a></li>
                                </ul>
                            </li>                         #}
                            </ul>
                        </div>
                    </div>
            </nav>
   {# Menu de Navegacion  #}
    
    {% block contenido %}{% endblock %}
      <!-- Footer-->
        <footer class=\"bg-dark py-4 mt-auto\">
            <div class=\"container px-5\">
                <div class=\"row align-items-center justify-content-between flex-column flex-sm-row\">
                    <div class=\"col-auto\"><div class=\"small m-0 text-white\">Copyright &copy; CCGD 2021</div></div>
                    <div class=\"col-auto\">
                        <a class=\"link-light small\" href=\"#!\">Privacy</a>
                        <span class=\"text-white mx-1\">&middot;</span>
                        <a class=\"link-light small\" href=\"#!\">Terms</a>
                        <span class=\"text-white mx-1\">&middot;</span>
                        <a class=\"link-light small\" href=\"#!\">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
      {% block footer %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    
    {% block javascripts %}{% endblock %}
    
    
    
</body>
</html>", "base.html.twig", "C:\\Users\\Camilo\\Documents\\proyectoWebFactura\\image_blog\\app\\Resources\\views\\base.html.twig");
    }
}
