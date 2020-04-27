<?php

/* layout/appRegister.html.twig */
class __TwigTemplate_371a330a941e4a4769f933ee7e67ac776190a0a2547a700f4f0b1f175b0b2248 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/appRegister.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/appRegister.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Registrar Operario</title>
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
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/background-signup.jpg"), "html", null, true);
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
</script>


";
        // line 97
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/vivus/vivus.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Core Js -->
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core Js -->
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

<!-- Validation Plugin Js -->
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/examples/sign-up.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/appRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 97,  183 => 114,  179 => 113,  173 => 110,  167 => 107,  161 => 104,  155 => 101,  148 => 98,  146 => 97,  122 => 76,  71 => 28,  65 => 25,  59 => 22,  53 => 19,  47 => 16,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Registrar Operario</title>
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
            source: \"{{ asset('images/background-signup.jpg') }}\",
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
<script src=\"{{ asset('plugins/vivus/vivus.min.js') }}\"></script>

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

</html>", "layout/appRegister.html.twig", "/var/www/html/templates/layout/appRegister.html.twig");
    }
}
