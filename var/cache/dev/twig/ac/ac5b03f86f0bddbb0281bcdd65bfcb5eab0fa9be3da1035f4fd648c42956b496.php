<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* usuarios/pfisica.html.twig */
class __TwigTemplate_4e1a1a38afdb20aa08ffa13aa1b5042204a8694f79e27e3c3c0c7a854749acce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuarios/pfisica.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/pfisica.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Cadastro Pessoa Fisica
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"display-4\">Novo Cadastro Pessoa Fisica</div> <br>
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_save_cadastro_pf");
        echo "\" method=\"POST\" class=\"form-group\">
        <p>
            <label for=\"nome\">Nome: </label><br>
            <input type=\"text\" name=\"nome\" class=\"form-control\">
        </p>

        <p>
            <label for=\"cpf\">CPF</label><br>
            <input type=\"number\" name=\"cpf\" maxlength=\"11\" class=\"form-control\">
        </p>

        <p>
            <label for=\"email\">Email</label><br>
            <input type=\"text\" name=\"email\" class=\"form-control\">
        </p>

        <input type=\"submit\" value=\"Cadastrar\" class=\"btn btn-success\">
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/pfisica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Cadastro Pessoa Fisica
{% endblock %}
    
{% block body %}

<div class=\"display-4\">Novo Cadastro Pessoa Fisica</div> <br>
    <form action=\"{{ path('usuarios_save_cadastro_pf') }}\" method=\"POST\" class=\"form-group\">
        <p>
            <label for=\"nome\">Nome: </label><br>
            <input type=\"text\" name=\"nome\" class=\"form-control\">
        </p>

        <p>
            <label for=\"cpf\">CPF</label><br>
            <input type=\"number\" name=\"cpf\" maxlength=\"11\" class=\"form-control\">
        </p>

        <p>
            <label for=\"email\">Email</label><br>
            <input type=\"text\" name=\"email\" class=\"form-control\">
        </p>

        <input type=\"submit\" value=\"Cadastrar\" class=\"btn btn-success\">
    </form>

{% endblock %}", "usuarios/pfisica.html.twig", "C:\\xampp\\htdocs\\SKYDEV\\projetoy\\projetoRTDBrasil\\RTD-Brasil - Cópia\\templates\\usuarios\\pfisica.html.twig");
    }
}
