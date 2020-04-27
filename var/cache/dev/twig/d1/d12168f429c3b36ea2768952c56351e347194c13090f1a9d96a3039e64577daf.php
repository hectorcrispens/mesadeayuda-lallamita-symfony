<?php

/* home/index.html.twig */
class __TwigTemplate_07e5c91cf37207258040b2b411224fe998bb4cd25c078669b30af5441bc29339 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>La LLamita</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body onload=\"animation()\">
<div class=\"flex-center position-ref full-height\">

    <div class=\"top-right links\">


        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->source); })()), "user", array())) {
            // line 74
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Home</a>

       ";
        } else {
            // line 77
            echo "           <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
           <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register</a>
        ";
        }
        // line 80
        echo "    </div>


    <div class=\"content\">
        <div class=\"title m-b-md\">
            <div id=\"letras\"></div>
        </div>

        <div class=\"links\">
            <a href=\"#\">Honestidad</a>
            <a href=\"#\">Responsabilidad</a>
            <a href=\"#\">Preocupación</a>
            <a href=\"#\">Trabajo</a>
            <a href=\"#\">Esfuerzo</a>
        </div>
    </div>
</div>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/vivus/vivus.min.js"), "html", null, true);
        echo "\"></script>
<script>
    function animation() {

        new Vivus('letras', {
            duration: 9999,
            delay: 9,
            file: 'plugins/vivus/letras4_animated.svg',
            type: 'oneByOne'});

    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 97,  122 => 80,  117 => 78,  112 => 77,  105 => 74,  103 => 73,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>La LLamita</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body onload=\"animation()\">
<div class=\"flex-center position-ref full-height\">

    <div class=\"top-right links\">


        {% if app.user %}
            <a href=\"{{ path('home') }}\">Home</a>

       {% else %}
           <a href=\"{{ path('login') }}\">Login</a>
           <a href=\"{{ path('register') }}\">Register</a>
        {% endif %}
    </div>


    <div class=\"content\">
        <div class=\"title m-b-md\">
            <div id=\"letras\"></div>
        </div>

        <div class=\"links\">
            <a href=\"#\">Honestidad</a>
            <a href=\"#\">Responsabilidad</a>
            <a href=\"#\">Preocupación</a>
            <a href=\"#\">Trabajo</a>
            <a href=\"#\">Esfuerzo</a>
        </div>
    </div>
</div>
<script src=\"{{ asset('plugins/vivus/vivus.min.js') }}\"></script>
<script>
    function animation() {

        new Vivus('letras', {
            duration: 9999,
            delay: 9,
            file: 'plugins/vivus/letras4_animated.svg',
            type: 'oneByOne'});

    }
</script>
</body>
</html>
", "home/index.html.twig", "/var/www/html/templates/home/index.html.twig");
    }
}
