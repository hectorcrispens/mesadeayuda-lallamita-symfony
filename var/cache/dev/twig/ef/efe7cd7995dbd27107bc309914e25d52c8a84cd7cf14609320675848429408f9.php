<?php

/* home/home.html.twig */
class __TwigTemplate_25ce708ba52db5d20f1e108b61b95bf22ff8e5680683d89486d5ab55376cf6ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/baseLayout.html.twig", "home/home.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array()), "GrupoResolucion", array()), "Id", array()) == 1)) {
            // line 6
            echo "        ";
            $this->loadTemplate("MesaDeAyuda/menu/home.html.twig", "home/home.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "       ";
            $this->loadTemplate("GrupoDeResolucion/menu/home.html.twig", "home/home.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "<section class=\"content\">
    <div class=\"container-fluid\">

        <div class=\"row clearfix\">

            <!-- With Captions -->
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>PAGINA DE INICIO</h2>
                        <ul class=\"header-dropdown m-r--5\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">more_vert</i>
                                </a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li><a href=\"javascript:void(0);\">Action</a></li>
                                    <li><a href=\"javascript:void(0);\">Another action</a></li>
                                    <li><a href=\"javascript:void(0);\">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"body\">
                        <div id=\"carousel-example-generic_2\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-gallery/olla.jpeg"), "html", null, true);
        echo "\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Seriedad</h3>
                                        <p>Para lograr soluciones integrales, es necesario un enfoque serio</p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-gallery/21.jpg"), "html", null, true);
        echo "\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Responsabilidad</h3>
                                        <p>La responsabilidad es la clave para lograr un ambiente de trabajo amigable</p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-gallery/22.jpg"), "html", null, true);
        echo "\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Eficiencia</h3>
                                        <p>Trabajando con eficiencia las soluciones vienen más deprisa</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic_2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic_2\" role=\"button\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# With Captions -->
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 92,  190 => 89,  187 => 88,  178 => 87,  143 => 61,  133 => 54,  123 => 47,  87 => 13,  78 => 12,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/baseLayout.html.twig' %}


{% block menu %}
    {% if app.user.GrupoResolucion.Id == 1 %}
        {% include 'MesaDeAyuda/menu/home.html.twig' %}
    {% else %}
       {% include 'GrupoDeResolucion/menu/home.html.twig' %}
    {% endif %}
{% endblock %}

{% block content %}
<section class=\"content\">
    <div class=\"container-fluid\">

        <div class=\"row clearfix\">

            <!-- With Captions -->
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>PAGINA DE INICIO</h2>
                        <ul class=\"header-dropdown m-r--5\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">more_vert</i>
                                </a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li><a href=\"javascript:void(0);\">Action</a></li>
                                    <li><a href=\"javascript:void(0);\">Another action</a></li>
                                    <li><a href=\"javascript:void(0);\">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"body\">
                        <div id=\"carousel-example-generic_2\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic_2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img src=\"{{ asset('images/image-gallery/olla.jpeg') }}\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Seriedad</h3>
                                        <p>Para lograr soluciones integrales, es necesario un enfoque serio</p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"{{ asset('images/image-gallery/21.jpg') }}\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Responsabilidad</h3>
                                        <p>La responsabilidad es la clave para lograr un ambiente de trabajo amigable</p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"{{ asset('images/image-gallery/22.jpg') }}\" />
                                    <div class=\"carousel-caption\">
                                        <h3>Eficiencia</h3>
                                        <p>Trabajando con eficiencia las soluciones vienen más deprisa</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic_2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic_2\" role=\"button\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# With Captions -->
        </div>
    </div>
</section>
{% endblock %}

{% block footer %}
    <!-- Slimscroll Plugin Js -->
    <script src=\"{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}\"></script>

    <!-- Select Plugin Js -->
    <script src=\"{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}\"></script>

{% endblock %}", "home/home.html.twig", "/var/www/html/templates/home/home.html.twig");
    }
}
