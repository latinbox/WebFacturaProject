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

/* default/index.html.twig */
class __TwigTemplate_0035cde7aae1d4cb09ae500a3e612700bc03d5d815fda0c1a69096ac514d380c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenido' => [$this, 'block_contenido'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 4
        $context["page_title"] = "Listado de Imágenes";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Gallery - Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "       <!-- Header-->
            <header class=\"bg-dark py-5\">
                <div class=\"container px-5\">
                    <div class=\"row gx-5 align-items-center justify-content-center\">
                        <div class=\"col-lg-8 col-xl-7 col-xxl-6\">
                            <div class=\"my-5 text-center text-xl-start\">
                                <h1 class=\"display-5 fw-bolder text-white mb-2\">Proyecto para gestión de imágenes</h1>
                                <p class=\"lead fw-normal text-white-50 mb-4\">El proyecto Construido con Symfony 2.7, permite la carga de archivos desde excel o csv para luego poder ser vistas y gestionadas en una galería</p>
                                <div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start\">
                                    <a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"#features\">Ver Galería Blog</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-5 col-xxl-6 d-none d-xl-block text-center\"><img class=\"img-fluid rounded-3 my-5\" src=\"https://images.unsplash.com/photo-1601581987809-a874a81309c9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80\" alt=\"...\" /></div>
                    </div>
                </div>
            </header>
            
         
            <!-- Blog preview section-->
            <section class=\"py-5\" id=features>
                <div class=\"container px-5 my-5\">
                    <div class=\"row gx-5 justify-content-center\">
                        <div class=\"col-lg-8 col-xl-6\">
                            <div class=\"text-center\">
                                <h2 class=\"fw-bolder\">Imágenes destacadas</h2>
                                <p class=\"lead fw-normal text-muted mb-5\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                            </div>
                        </div>
                    </div>
                      
                    <div class=\"row gx-5\">                 
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imagenes"] ?? $this->getContext($context, "imagenes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 40
            echo "                        <div class=\"col-lg-4 mb-5\">
                            <div class=\"card h-100 shadow border-0\">
                                <img class=\"card-img-top\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["img_fichero"] ?? $this->getContext($context, "img_fichero")) . $this->getAttribute($context["imagen"], "image", []))), "html", null, true);
            echo "\" alt=\"...\" />
                                <div class=\"card-body p-4\">
                                    <div class=\"badge bg-primary bg-gradient rounded-pill mb-2\"></div>
                                    <a class=\"text-decoration-none link-dark stretched-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imagen", ["id" => $this->getAttribute($context["imagen"], "id", [])]), "html", null, true);
            echo "\"><h5 class=\"card-title mb-3\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "title", []), "html", null, true);
            echo "</h5></a>
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imagen", ["id" => $this->getAttribute($context["imagen"], "id", [])]), "html", null, true);
            echo "\"></a>
                                    <p class=\"card-text mb-0\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagen"], "description", []), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"card-footer p-4 pt-0 bg-transparent border-top-0\">
                                    <div class=\"d-flex align-items-end justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <img class=\"rounded-circle me-3\" src=\"https://dummyimage.com/40x40/ced4da/6c757d\" alt=\"...\" />
                                            <div class=\"small\">
                                                <div class=\"fw-bold\">Kelly Rowan</div>
                                                <div class=\"text-muted\">March 12, 2021 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </div>
                    
                    <!-- Call to action-->
                    <aside class=\"bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5\">
                        <div class=\"d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start\">
                            <div class=\"mb-4 mb-xl-0\">
                                <div class=\"fs-3 fw-bold text-white\">New products, delivered to you.</div>
                                <div class=\"text-white-50\">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class=\"ms-xl-4\">
                                <div class=\"input-group mb-2\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Email address...\" aria-label=\"Email address...\" aria-describedby=\"button-newsletter\" />
                                    <button class=\"btn btn-outline-light\" id=\"button-newsletter\" type=\"button\">Sign up</button>
                                </div>
                                <div class=\"small text-white-50\">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_footer($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "  \$(document).ready(function(){
    \$(\"#loginBtn\").on(\"click\", function(){
      \$(location).attr('href','/login');
    })
  });
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 88,  201 => 87,  190 => 85,  162 => 63,  140 => 47,  136 => 46,  130 => 45,  124 => 42,  120 => 40,  116 => 39,  81 => 6,  75 => 5,  64 => 3,  52 => 2,  44 => 1,  42 => 4,  33 => 1,);
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
{% block titulo %}Gallery - Home{% endblock %}
{% block stylesheets %}{% endblock %}
{% set page_title=\"Listado de Imágenes\" %}
{% block contenido %}
       <!-- Header-->
            <header class=\"bg-dark py-5\">
                <div class=\"container px-5\">
                    <div class=\"row gx-5 align-items-center justify-content-center\">
                        <div class=\"col-lg-8 col-xl-7 col-xxl-6\">
                            <div class=\"my-5 text-center text-xl-start\">
                                <h1 class=\"display-5 fw-bolder text-white mb-2\">Proyecto para gestión de imágenes</h1>
                                <p class=\"lead fw-normal text-white-50 mb-4\">El proyecto Construido con Symfony 2.7, permite la carga de archivos desde excel o csv para luego poder ser vistas y gestionadas en una galería</p>
                                <div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start\">
                                    <a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"#features\">Ver Galería Blog</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-5 col-xxl-6 d-none d-xl-block text-center\"><img class=\"img-fluid rounded-3 my-5\" src=\"https://images.unsplash.com/photo-1601581987809-a874a81309c9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80\" alt=\"...\" /></div>
                    </div>
                </div>
            </header>
            
         
            <!-- Blog preview section-->
            <section class=\"py-5\" id=features>
                <div class=\"container px-5 my-5\">
                    <div class=\"row gx-5 justify-content-center\">
                        <div class=\"col-lg-8 col-xl-6\">
                            <div class=\"text-center\">
                                <h2 class=\"fw-bolder\">Imágenes destacadas</h2>
                                <p class=\"lead fw-normal text-muted mb-5\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                            </div>
                        </div>
                    </div>
                      
                    <div class=\"row gx-5\">                 
                        {% for imagen in imagenes %}
                        <div class=\"col-lg-4 mb-5\">
                            <div class=\"card h-100 shadow border-0\">
                                <img class=\"card-img-top\" src=\"{{asset(img_fichero~imagen.image)}}\" alt=\"...\" />
                                <div class=\"card-body p-4\">
                                    <div class=\"badge bg-primary bg-gradient rounded-pill mb-2\"></div>
                                    <a class=\"text-decoration-none link-dark stretched-link\" href=\"{{ path('imagen',{'id': imagen.id}) }}\"><h5 class=\"card-title mb-3\">{{imagen.title}}</h5></a>
                                    <a href=\"{{ path('imagen',{'id': imagen.id}) }}\"></a>
                                    <p class=\"card-text mb-0\">{{imagen.description}}</p>
                                </div>
                                <div class=\"card-footer p-4 pt-0 bg-transparent border-top-0\">
                                    <div class=\"d-flex align-items-end justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <img class=\"rounded-circle me-3\" src=\"https://dummyimage.com/40x40/ced4da/6c757d\" alt=\"...\" />
                                            <div class=\"small\">
                                                <div class=\"fw-bold\">Kelly Rowan</div>
                                                <div class=\"text-muted\">March 12, 2021 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    
                    <!-- Call to action-->
                    <aside class=\"bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5\">
                        <div class=\"d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start\">
                            <div class=\"mb-4 mb-xl-0\">
                                <div class=\"fs-3 fw-bold text-white\">New products, delivered to you.</div>
                                <div class=\"text-white-50\">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class=\"ms-xl-4\">
                                <div class=\"input-group mb-2\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Email address...\" aria-label=\"Email address...\" aria-describedby=\"button-newsletter\" />
                                    <button class=\"btn btn-outline-light\" id=\"button-newsletter\" type=\"button\">Sign up</button>
                                </div>
                                <div class=\"small text-white-50\">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
{% endblock %}
{% block footer %}
{% endblock %}
{% block javascripts %}
  \$(document).ready(function(){
    \$(\"#loginBtn\").on(\"click\", function(){
      \$(location).attr('href','/login');
    })
  });
{% endblock %}", "default/index.html.twig", "C:\\Users\\Camilo\\Documents\\proyectoWebFactura\\image_blog\\app\\Resources\\views\\default\\index.html.twig");
    }
}
