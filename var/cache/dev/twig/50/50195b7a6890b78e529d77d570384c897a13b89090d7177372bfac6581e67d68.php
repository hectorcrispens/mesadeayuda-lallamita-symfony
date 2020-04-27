<?php

/* GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig */
class __TwigTemplate_2c8a06e70875b8f0a352e7d2c47e9ab6318fbc134c5b0692f7aa1aa6a262ca17 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/baseLayout.html.twig", "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
    <!-- Bootstrap Select Css -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-select/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- datedrooper -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datedrooper/datedropper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "    ";
        $this->loadTemplate("GrupoDeResolucion/menu/CU07menu.html.twig", "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig", 14)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
<section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <h2>CONSULTAR INTERVENCIONES</h2>
        </div>



        <!-- Multi Column -->
        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>
                            INGRESE ALGUN CRITERIO DE BUSQUEDA
                        </h2>
                        <ul class=\"header-dropdown m-r--5\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                        <form method=\"post\" action=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ProcesaConsultaIntervenciones");
        echo "\">

                            <!-- ESTADO-->
                            <div class=\"row clearfix\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" title=\"Estado\" name=\"estado\">
                                                <option value=\"0\">Todos</option>
                                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) || array_key_exists("estados", $context) ? $context["estados"] : (function () { throw new Twig_Error_Runtime('Variable "estados" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 61
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estado"], "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estado"], "Descripcion", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=\"row clearfix\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" min=\"1\" name=\"ticket\">
                                            <label class=\"form-label\">Número de Ticket</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" min=\"1\" name=\"legajo\">
                                            <label class=\"form-label\">Número de Legajo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=\"row clearfix\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">

                                            <input type=\"text\" name=\"fechaD\" id=\"fechadesde\" placeholder=\"Fecha Desde\" class=\"form-control\" data-modal=\"true\" data-large-mode=\"true\" data-lang=\"es\" data-format=\"d-m-Y\" data-large-default=\"true\" onfocus=\"desdeInit()\">

                                            <script>
                                                function desdeInit() {

                                                    \$('#fechadesde').dateDropper();

                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">

                                            <input type=\"text\" name=\"fechaH\" id=\"fechahasta\" placeholder=\"Fecha Hasta\" class=\"form-control\" data-modal=\"true\" data-large-mode=\"true\" data-lang=\"es\" data-format=\"d-m-Y\" data-large-default=\"true\" onfocus=\"hastaInit()\">

                                            <script>
                                                function hastaInit() {

                                                    \$('#fechahasta').dateDropper();

                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>



                           <button type=\"submit\" class=\"btn bg-cyan m-t-15 waves-effect\">BUSCAR</button>


                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 148
        echo "


<!-- Select Plugin Js -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/forms/advanced-form-elements.js"), "html", null, true);
        echo "\"></script>

<!--### TERMINAN LOS JS ###-->


<!-- dateDropper lib -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datedrooper/datedropper.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 164,  287 => 158,  281 => 155,  275 => 152,  269 => 148,  260 => 147,  168 => 63,  157 => 61,  153 => 60,  141 => 51,  107 => 19,  98 => 18,  87 => 14,  78 => 13,  66 => 9,  60 => 6,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/baseLayout.html.twig' %}

{% block header %}

    <!-- Bootstrap Select Css -->
    <link href=\"{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}\" rel=\"stylesheet\" />

    <!-- datedrooper -->
    <link href=\"{{ asset('plugins/datedrooper/datedropper.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}


{% block menu %}
    {% include 'GrupoDeResolucion/menu/CU07menu.html.twig' %}
{% endblock %}


{% block content %}

<section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <h2>CONSULTAR INTERVENCIONES</h2>
        </div>



        <!-- Multi Column -->
        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>
                            INGRESE ALGUN CRITERIO DE BUSQUEDA
                        </h2>
                        <ul class=\"header-dropdown m-r--5\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                        <form method=\"post\" action=\"{{ path('ProcesaConsultaIntervenciones') }}\">

                            <!-- ESTADO-->
                            <div class=\"row clearfix\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" title=\"Estado\" name=\"estado\">
                                                <option value=\"0\">Todos</option>
                                                {% for estado in estados %}
                                                <option value=\"{{ estado.Id }}\">{{ estado.Descripcion }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=\"row clearfix\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" min=\"1\" name=\"ticket\">
                                            <label class=\"form-label\">Número de Ticket</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" min=\"1\" name=\"legajo\">
                                            <label class=\"form-label\">Número de Legajo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=\"row clearfix\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">

                                            <input type=\"text\" name=\"fechaD\" id=\"fechadesde\" placeholder=\"Fecha Desde\" class=\"form-control\" data-modal=\"true\" data-large-mode=\"true\" data-lang=\"es\" data-format=\"d-m-Y\" data-large-default=\"true\" onfocus=\"desdeInit()\">

                                            <script>
                                                function desdeInit() {

                                                    \$('#fechadesde').dateDropper();

                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">

                                            <input type=\"text\" name=\"fechaH\" id=\"fechahasta\" placeholder=\"Fecha Hasta\" class=\"form-control\" data-modal=\"true\" data-large-mode=\"true\" data-lang=\"es\" data-format=\"d-m-Y\" data-large-default=\"true\" onfocus=\"hastaInit()\">

                                            <script>
                                                function hastaInit() {

                                                    \$('#fechahasta').dateDropper();

                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>



                           <button type=\"submit\" class=\"btn bg-cyan m-t-15 waves-effect\">BUSCAR</button>


                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>

{% endblock %}

{% block footer %}



<!-- Select Plugin Js -->
<script src=\"{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}\"></script>


<script src=\"{{ asset('js/pages/forms/advanced-form-elements.js') }}\"></script>

<!--### TERMINAN LOS JS ###-->


<!-- dateDropper lib -->
<script src=\"{{ asset('plugins/datedrooper/datedropper.js') }}\"></script>
{% endblock %}", "GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig", "/var/www/html/templates/GrupoDeResolucion/CU07ConsultarIntervenciones.html.twig");
    }
}
