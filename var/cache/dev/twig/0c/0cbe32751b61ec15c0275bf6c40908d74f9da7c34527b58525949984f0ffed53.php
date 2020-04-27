<?php

/* layout/baseLayout.html.twig */
class __TwigTemplate_3b174b20e6723fdc57fd5f2709323ac2436c441255d249a21b64aaa073f37f77 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/baseLayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/baseLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new Twig_Error_Runtime('Variable "titulo" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>

    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themes/all-themes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "</head>

<body class=\"theme-red\" onload=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["load"]) || array_key_exists("load", $context) ? $context["load"] : (function () { throw new Twig_Error_Runtime('Variable "load" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
<!-- Page Loader -->
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p>Por favor espere...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class=\"navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"navbar-brand\" href=\"#\">SISTEMA DE GESTIÓN DE TICKETS</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"pull-right\"><a href=\"javascript:void(0);\" class=\"js-right-sidebar\" data-close=\"true\"><i class=\"material-icons\">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <!-- User Info -->
        <div class=\"user-info\">
            <div class=\"image\">
                <img src=\"/images/";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 78, $this->source); })()), "user", array()), "Empleado", array()), "Apellido", array()), "html", null, true);
        echo ".jpg\" width=\"48\" height=\"48\" alt=\"User\" />
            </div>
            <div class=\"info-container\">
                <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</div>
                <div class=\"email\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 82, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "</div>
                <div class=\"btn-group user-helper-dropdown\">
                    <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                    <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"javascript:void(0);\"><i class=\"material-icons\">person</i>Perfil</a></li>

                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"><i class=\"material-icons\">exit_to_app</i>Salir</a></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- #User Info -->
   ";
        // line 97
        $this->displayBlock('menu', $context, $blocks);
        // line 98
        echo "    <!-- Footer -->
        <div class=\"legal\">
            <div class=\"version\">
                ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 101, $this->source); })()), "user", array()), "GrupoResolucion", array()), "Nombre", array()), "html", null, true);
        echo "
            </div>

            <div class=\"copyright\">
                &copy; 2018 <a href=\"javascript:void(0);\">Rattero-Beber-Pizzutti-Crispens</a>.
            </div>

        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id=\"rightsidebar\" class=\"right-sidebar\">
        <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#skins\" data-toggle=\"tab\">SKINS</a></li>
            <li role=\"presentation\"><a href=\"#settings\" data-toggle=\"tab\">SETTINGS</a></li>
        </ul>
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"skins\">
                <ul class=\"demo-choose-skin\">
                    <li data-theme=\"red\" class=\"active\">
                        <div class=\"red\"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme=\"pink\">
                        <div class=\"pink\"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme=\"purple\">
                        <div class=\"purple\"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme=\"deep-purple\">
                        <div class=\"deep-purple\"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme=\"indigo\">
                        <div class=\"indigo\"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme=\"blue\">
                        <div class=\"blue\"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme=\"light-blue\">
                        <div class=\"light-blue\"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme=\"cyan\">
                        <div class=\"cyan\"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme=\"teal\">
                        <div class=\"teal\"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme=\"green\">
                        <div class=\"green\"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme=\"light-green\">
                        <div class=\"light-green\"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme=\"lime\">
                        <div class=\"lime\"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme=\"yellow\">
                        <div class=\"yellow\"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme=\"amber\">
                        <div class=\"amber\"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme=\"orange\">
                        <div class=\"orange\"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme=\"deep-orange\">
                        <div class=\"deep-orange\"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme=\"brown\">
                        <div class=\"brown\"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme=\"grey\">
                        <div class=\"grey\"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme=\"blue-grey\">
                        <div class=\"blue-grey\"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme=\"black\">
                        <div class=\"black\"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"settings\">
                <div class=\"demo-settings\">
                    <p>GENERAL SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\"><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Notifications</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Offline</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\"><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

";
        // line 257
        $this->displayBlock('content', $context, $blocks);
        // line 258
        echo "
<!-- Jquery Core Js -->
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core Js -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>

<!-- Demo Js -->
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>


";
        // line 275
        $this->displayBlock('footer', $context, $blocks);
        // line 276
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 257
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/baseLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 275,  417 => 257,  400 => 97,  383 => 30,  371 => 276,  369 => 275,  363 => 272,  357 => 269,  351 => 266,  345 => 263,  339 => 260,  335 => 258,  333 => 257,  174 => 101,  169 => 98,  167 => 97,  156 => 89,  146 => 82,  142 => 81,  136 => 78,  88 => 33,  84 => 31,  82 => 30,  78 => 29,  72 => 26,  66 => 23,  60 => 20,  54 => 17,  41 => 7,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>{{ titulo }}</title>

    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"{{ asset('plugins/bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"{{ asset('plugins/node-waves/waves.css') }}\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"{{ asset('plugins/animate-css/animate.css') }}\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"{{ asset('css/themes/all-themes.css') }}\" rel=\"stylesheet\" />
    {% block header %}{% endblock %}
</head>

<body class=\"theme-red\" onload=\"{{ load }}\">
<!-- Page Loader -->
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p>Por favor espere...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class=\"navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"navbar-brand\" href=\"#\">SISTEMA DE GESTIÓN DE TICKETS</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"pull-right\"><a href=\"javascript:void(0);\" class=\"js-right-sidebar\" data-close=\"true\"><i class=\"material-icons\">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <!-- User Info -->
        <div class=\"user-info\">
            <div class=\"image\">
                <img src=\"/images/{{ app.user.Empleado.Apellido }}.jpg\" width=\"48\" height=\"48\" alt=\"User\" />
            </div>
            <div class=\"info-container\">
                <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{app.user.username }}</div>
                <div class=\"email\">{{ app.user.email }}</div>
                <div class=\"btn-group user-helper-dropdown\">
                    <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                    <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"javascript:void(0);\"><i class=\"material-icons\">person</i>Perfil</a></li>

                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"material-icons\">exit_to_app</i>Salir</a></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- #User Info -->
   {% block menu %}{% endblock %}
    <!-- Footer -->
        <div class=\"legal\">
            <div class=\"version\">
                {{ app.user.GrupoResolucion.Nombre }}
            </div>

            <div class=\"copyright\">
                &copy; 2018 <a href=\"javascript:void(0);\">Rattero-Beber-Pizzutti-Crispens</a>.
            </div>

        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id=\"rightsidebar\" class=\"right-sidebar\">
        <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#skins\" data-toggle=\"tab\">SKINS</a></li>
            <li role=\"presentation\"><a href=\"#settings\" data-toggle=\"tab\">SETTINGS</a></li>
        </ul>
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"skins\">
                <ul class=\"demo-choose-skin\">
                    <li data-theme=\"red\" class=\"active\">
                        <div class=\"red\"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme=\"pink\">
                        <div class=\"pink\"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme=\"purple\">
                        <div class=\"purple\"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme=\"deep-purple\">
                        <div class=\"deep-purple\"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme=\"indigo\">
                        <div class=\"indigo\"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme=\"blue\">
                        <div class=\"blue\"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme=\"light-blue\">
                        <div class=\"light-blue\"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme=\"cyan\">
                        <div class=\"cyan\"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme=\"teal\">
                        <div class=\"teal\"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme=\"green\">
                        <div class=\"green\"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme=\"light-green\">
                        <div class=\"light-green\"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme=\"lime\">
                        <div class=\"lime\"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme=\"yellow\">
                        <div class=\"yellow\"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme=\"amber\">
                        <div class=\"amber\"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme=\"orange\">
                        <div class=\"orange\"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme=\"deep-orange\">
                        <div class=\"deep-orange\"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme=\"brown\">
                        <div class=\"brown\"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme=\"grey\">
                        <div class=\"grey\"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme=\"blue-grey\">
                        <div class=\"blue-grey\"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme=\"black\">
                        <div class=\"black\"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"settings\">
                <div class=\"demo-settings\">
                    <p>GENERAL SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\"><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Notifications</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class=\"setting-list\">
                        <li>
                            <span>Offline</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\"><span class=\"lever\"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class=\"switch\">
                                <label><input type=\"checkbox\" checked><span class=\"lever\"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

{% block content %}{% endblock %}

<!-- Jquery Core Js -->
<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>

<!-- Bootstrap Core Js -->
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.js') }}\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"{{ asset('plugins/node-waves/waves.js') }}\"></script>

<!-- Custom Js -->
<script src=\"{{ asset('js/admin.js') }}\"></script>

<!-- Demo Js -->
<script src=\"{{ asset('js/demo.js') }}\"></script>


{% block footer %}{% endblock %}
</body>

</html>", "layout/baseLayout.html.twig", "/var/www/html/templates/layout/baseLayout.html.twig");
    }
}
