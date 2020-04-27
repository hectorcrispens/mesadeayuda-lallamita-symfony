<?php

/* layout/appLogin.html.twig */
class __TwigTemplate_c698d8f88f824e113eb0912a53d5f143cb2493ddd15cfa584feb3454a5c6f6a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/appLogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/appLogin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Login Operario</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- gramin -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/granim.js-1.1.0/dist/granim.js"), "html", null, true);
        echo "\"></script>


    <style>

        #canvas-image {
            display: block;
            /* Rellenamos el fondo */
            min-height: 100%;
            min-width: 800px;

            /* Escalamiento proporcional */
            width: 100%;
            height: auto;

            /* Posicionamiento */
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        #canvas-basic {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>

</head>

<body class=\"signup-page\">
<canvas id=\"canvas-image\"></canvas>
<script>
    var granimInstance = new Granim({
        element: '#canvas-image',
        direction: 'top-bottom',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        scrollDebounceThreshold: 300,
        image: {
            source: \"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/background-signup2.jpg"), "html", null, true);
        echo "\",
            position: ['center', 'center'],
            stretchMode: ['stretch-if-smaller', 'stretch-if-bigger'],
            blendingMode: 'multiply'
        },
        states : {
            \"default-state\": {
                gradients: [
                    ['#29323c', '#485563'],
                    ['#FF6B6B', '#556270'],
                    ['#80d3fe', '#7ea0c4'],
                    ['#ffb62a', '#eceba3']

                ],
                transitionSpeed: 9000
            }
        }
    });
</script>";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "

<!-- Jquery Core Js -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core Js -->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

<!-- Validation Plugin Js -->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/examples/sign-up.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/appLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 96,  177 => 113,  173 => 112,  167 => 109,  161 => 106,  155 => 103,  149 => 100,  144 => 97,  142 => 96,  121 => 75,  71 => 28,  65 => 25,  59 => 22,  53 => 19,  47 => 16,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Login Operario</title>
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

    <!-- gramin -->
    <script src=\"{{ asset('js/granim.js-1.1.0/dist/granim.js') }}\"></script>


    <style>

        #canvas-image {
            display: block;
            /* Rellenamos el fondo */
            min-height: 100%;
            min-width: 800px;

            /* Escalamiento proporcional */
            width: 100%;
            height: auto;

            /* Posicionamiento */
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        #canvas-basic {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>

</head>

<body class=\"signup-page\">
<canvas id=\"canvas-image\"></canvas>
<script>
    var granimInstance = new Granim({
        element: '#canvas-image',
        direction: 'top-bottom',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        scrollDebounceThreshold: 300,
        image: {
            source: \"{{ asset('images/background-signup2.jpg') }}\",
            position: ['center', 'center'],
            stretchMode: ['stretch-if-smaller', 'stretch-if-bigger'],
            blendingMode: 'multiply'
        },
        states : {
            \"default-state\": {
                gradients: [
                    ['#29323c', '#485563'],
                    ['#FF6B6B', '#556270'],
                    ['#80d3fe', '#7ea0c4'],
                    ['#ffb62a', '#eceba3']

                ],
                transitionSpeed: 9000
            }
        }
    });
</script>


{% block content%} {% endblock %}


<!-- Jquery Core Js -->
<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>

<!-- Bootstrap Core Js -->
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.js') }}\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"{{ asset('plugins/node-waves/waves.js') }}\"></script>

<!-- Validation Plugin Js -->
<script src=\"{{ asset('plugins/jquery-validation/jquery.validate.js') }}\"></script>

<!-- Custom Js -->
<script src=\"{{ asset('js/admin.js') }}\"></script>
<script src=\"{{ asset('js/pages/examples/sign-up.js') }}\"></script>
</body>

</html>", "layout/appLogin.html.twig", "/var/www/html/templates/layout/appLogin.html.twig");
    }
}
