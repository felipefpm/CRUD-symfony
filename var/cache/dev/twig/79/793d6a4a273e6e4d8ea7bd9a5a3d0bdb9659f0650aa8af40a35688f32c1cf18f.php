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

/* usuarios/pjuridica.html.twig */
class __TwigTemplate_41befd568d11b15c2638d5da158ddb4f7e19132608b7f823b6fb4baca48b02a4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuarios/pjuridica.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/pjuridica.html.twig", 1);
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
        echo "    Cadastro Pessoa Juridica
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
<h1>Novo Cadastro Pessoa Juridica</h1>

    <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_save_cadastro_pj");
        echo "\" method=\"POST\">
        <p>
            <label for=\"r_social\">Razão Social: </label><br>
            <input type=\"text\" name=\"r_social\">
        </p>

        <p>
            <label for=\"cnpj\">CNPJ</label><br>
            <input type=\"number\" name=\"cnpj\" maxlength=\"14\">
        </p>

        <p>
            <label for=\"email\">Email</label><br>
            <input type=\"text\" name=\"email\">
        </p>

        <input type=\"submit\" value=\"Cadastrar\">
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/pjuridica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Cadastro Pessoa Juridica
{% endblock %}
    
{% block body %}

<h1>Novo Cadastro Pessoa Juridica</h1>

    <form action=\"{{ path('usuarios_save_cadastro_pj') }}\" method=\"POST\">
        <p>
            <label for=\"r_social\">Razão Social: </label><br>
            <input type=\"text\" name=\"r_social\">
        </p>

        <p>
            <label for=\"cnpj\">CNPJ</label><br>
            <input type=\"number\" name=\"cnpj\" maxlength=\"14\">
        </p>

        <p>
            <label for=\"email\">Email</label><br>
            <input type=\"text\" name=\"email\">
        </p>

        <input type=\"submit\" value=\"Cadastrar\">
    </form>

{% endblock %}", "usuarios/pjuridica.html.twig", "C:\\xampp\\htdocs\\SKYDEV\\projetoy\\projetoRTDBrasil\\RTD-Brasil\\templates\\usuarios\\pjuridica.html.twig");
    }
}
