<?php

/* registration/register.html.twig */
class __TwigTemplate_c6ca16d2ce45d8b37da23a41669ffe02377921921ce4d435d72f53266d7b86e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/appRegister.html.twig", "registration/register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/appRegister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        echo "    <div class=\"signup-box\">

        <div class=\"card\">
            <div class=\"body\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "



                <div class=\"msg\">Registrar un nuevo miembro</div>

                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                    <div class=\"form-line\">

                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "


                    </div>
                </div>


                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">email</i>
                        </span>
                    <div class=\"form-line\">

                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de Usuario")));
        echo "


                    </div>
                </div>



                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                    <div class=\"form-line\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "


                    </div>
                </div>



                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">directions_run</i>
                        </span>
                    <div class=\"form-line\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "Empleado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                    </div>
                </div>

                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">layers</i>
                        </span>
                    <div class=\"form-line\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "GrupoResolucion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                    </div>
                </div>


                <div class=\"form-group\">
                    <input type=\"checkbox\" name=\"terms\" id=\"terms\" class=\"filled-in chk-col-pink\">
                    <label for=\"terms\">He leido y acepto los <a href=\"javascript:void(0);\">terminos de uso</a>.</label>
                </div>

                <button class=\"btn btn-block btn-lg bg-pink waves-effect\" type=\"submit\">REGISTRAR</button>

                <div class=\"m-t-25 m-b--5 align-center\">


                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Usted ya es un usuario registrado?</a>



                </div>
                ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 92,  156 => 87,  136 => 70,  122 => 59,  106 => 46,  90 => 33,  74 => 20,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/appRegister.html.twig' %}

{% block content %}
    <div class=\"signup-box\">

        <div class=\"card\">
            <div class=\"body\">
                {{ form_start(form) }}



                <div class=\"msg\">Registrar un nuevo miembro</div>

                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                    <div class=\"form-line\">

                        {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'Username'}}) }}


                    </div>
                </div>


                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">email</i>
                        </span>
                    <div class=\"form-line\">

                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email de Usuario'}}) }}


                    </div>
                </div>



                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                    <div class=\"form-line\">
                        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}


                    </div>
                </div>



                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">directions_run</i>
                        </span>
                    <div class=\"form-line\">
                        {{ form_widget(form.Empleado, {'attr': {'class': 'form-control'}}) }}


                    </div>
                </div>

                <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">layers</i>
                        </span>
                    <div class=\"form-line\">
                        {{ form_widget(form.GrupoResolucion, {'attr': {'class': 'form-control'}}) }}


                    </div>
                </div>


                <div class=\"form-group\">
                    <input type=\"checkbox\" name=\"terms\" id=\"terms\" class=\"filled-in chk-col-pink\">
                    <label for=\"terms\">He leido y acepto los <a href=\"javascript:void(0);\">terminos de uso</a>.</label>
                </div>

                <button class=\"btn btn-block btn-lg bg-pink waves-effect\" type=\"submit\">REGISTRAR</button>

                <div class=\"m-t-25 m-b--5 align-center\">


                    <a href=\"{{ path('login') }}\">Usted ya es un usuario registrado?</a>



                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}", "registration/register.html.twig", "/var/www/html/templates/registration/register.html.twig");
    }
}
