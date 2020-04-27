<?php

/* GrupoDeResolucion/menu/home.html.twig */
class __TwigTemplate_9318f2073cdcd2a795afc7b6031e17bc2e29625e15cdea3f32b8c471658b7531 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrupoDeResolucion/menu/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrupoDeResolucion/menu/home.html.twig"));

        // line 1
        echo "<!-- Menu -->
<div class=\"menu\">
    <ul class=\"list\">
        <li class=\"header\">BARRA DE NAVEGACIÓN</li>
\t\t<li class=\"active\">
            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                <i class=\"material-icons\">home</i>
                <span>home</span>
            </a>

        </li>
        <li>
            <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                <i class=\"material-icons\">find_in_page</i>
                <span>Consultar intervenciones</span>
            </a>
            <ul class=\"ml-menu\">
                <li>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ConsultarIntervenciones");
        echo "\">Consultar Intervención</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Actualizar estado intervención</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Modificar comentarios</a>
                </li>


            </ul>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("RegistrarClasificacionDeTickets");
        echo "\">
                <i class=\"material-icons\">library_add</i>
                <span>Registrar clasificación de ticket</span>
            </a>
        </li>
        <li>
            <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                <i class=\"material-icons\">search</i>
                <span>Buscar clasificación de ticket</span>
            </a>
            <ul class=\"ml-menu\">
                <li>
                    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("BuscarClasifTicketsParte1");
        echo "\">Buscar clasificación</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Modificar clasificación de ticket</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Borrar clasificación de ticket</a>
                </li>


            </ul>
        </li>

    </ul>
</div>
<!-- #Menu -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "GrupoDeResolucion/menu/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  68 => 32,  52 => 19,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Menu -->
<div class=\"menu\">
    <ul class=\"list\">
        <li class=\"header\">BARRA DE NAVEGACIÓN</li>
\t\t<li class=\"active\">
            <a href=\"{{ path('home') }}\">
                <i class=\"material-icons\">home</i>
                <span>home</span>
            </a>

        </li>
        <li>
            <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                <i class=\"material-icons\">find_in_page</i>
                <span>Consultar intervenciones</span>
            </a>
            <ul class=\"ml-menu\">
                <li>
                    <a href=\"{{ url('ConsultarIntervenciones') }}\">Consultar Intervención</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Actualizar estado intervención</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Modificar comentarios</a>
                </li>


            </ul>
        </li>
        <li>
            <a href=\"{{ url('RegistrarClasificacionDeTickets') }}\">
                <i class=\"material-icons\">library_add</i>
                <span>Registrar clasificación de ticket</span>
            </a>
        </li>
        <li>
            <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                <i class=\"material-icons\">search</i>
                <span>Buscar clasificación de ticket</span>
            </a>
            <ul class=\"ml-menu\">
                <li>
                    <a href=\"{{ url('BuscarClasifTicketsParte1') }}\">Buscar clasificación</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Modificar clasificación de ticket</a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\">Borrar clasificación de ticket</a>
                </li>


            </ul>
        </li>

    </ul>
</div>
<!-- #Menu -->", "GrupoDeResolucion/menu/home.html.twig", "/var/www/html/templates/GrupoDeResolucion/menu/home.html.twig");
    }
}
