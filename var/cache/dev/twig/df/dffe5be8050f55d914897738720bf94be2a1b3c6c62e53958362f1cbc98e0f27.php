<?php

/* security/login.html.twig */
class __TwigTemplate_f92ed48d2ec7f65ffd25f1b18c1c776466d6cdf44523e765e4e3be655d02ee3a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/appLogin.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/appLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"login-box\">
        <div class=\"logo\">
            <br>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">

                    <div class=\"msg\">Inicio de Sesión</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Username\" />";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "
                                <span class=\"invalid-feedback\" role=\"alert\">
                                        <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
                                    </span>";
        }
        // line 26
        echo "                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "
                                <span class=\"invalid-feedback\" role=\"alert\">
                                        <strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 37, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 37, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
                                    </span>";
        }
        // line 40
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8 p-t-5\">
                            <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                            <label for=\"rememberme\">Recordarme</label>
                        </div>
                        <div class=\"col-xs-4\">
                            <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">INGRESAR</button>
                        </div>
                    </div>
                    <div class=\"row m-t-15 m-b--20\">
                        <div class=\"col-xs-6\">
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Registrar ahora!</a>
                        </div>
                        <div class=\"col-xs-6 align-right\">
                            <a href=\"#\">Olvido su contraseña?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  106 => 40,  101 => 37,  97 => 35,  95 => 34,  86 => 26,  81 => 23,  77 => 21,  75 => 20,  72 => 18,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/appLogin.html.twig' %}

{% block content %}
    <div class=\"login-box\">
        <div class=\"logo\">
            <br>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div class=\"msg\">Inicio de Sesión</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" placeholder=\"Username\" />

                            {% if error %}

                                <span class=\"invalid-feedback\" role=\"alert\">
                                        <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong>
                                    </span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
                            {% if error %}

                                <span class=\"invalid-feedback\" role=\"alert\">
                                        <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong>
                                    </span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8 p-t-5\">
                            <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                            <label for=\"rememberme\">Recordarme</label>
                        </div>
                        <div class=\"col-xs-4\">
                            <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">INGRESAR</button>
                        </div>
                    </div>
                    <div class=\"row m-t-15 m-b--20\">
                        <div class=\"col-xs-6\">
                            <a href=\"{{ path('register') }}\">Registrar ahora!</a>
                        </div>
                        <div class=\"col-xs-6 align-right\">
                            <a href=\"#\">Olvido su contraseña?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}
{# templates/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}









", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
