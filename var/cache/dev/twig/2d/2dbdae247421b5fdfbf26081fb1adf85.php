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

/* carte_fidelite/show.html.twig */
class __TwigTemplate_918295d1e9b1b50ca5ac725363af1762 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_fidelite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_fidelite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carte_fidelite/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CarteFidelite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"row\">
        <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px; padding: 10px;\">

            <div class=\"card\">
                <div class=\"card-body\">
    <h1>Votre carte de fidelite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numéro de carte:</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 17, $this->source); })()), "num_carte", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Votre identifiant:</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 21, $this->source); })()), "idClient", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre des points:</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 25, $this->source); })()), "Numpoint", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date du creation:</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 29, $this->source); })()), "Datecreation", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 29, $this->source); })()), "Datecreation", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date de la fin du validite:</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 33, $this->source); })()), "Datefinvalidite", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 33, $this->source); })()), "Datefinvalidite", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
    
        </tbody>
    </table>

    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_fidelite_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_fidelite_edit", ["Num_carte" => twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 41, $this->source); })()), "num_carte", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">edit</a>
<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_fidelite_convert", ["Num_carte" => twig_get_attribute($this->env, $this->source, (isset($context["carte_fidelite"]) || array_key_exists("carte_fidelite", $context) ? $context["carte_fidelite"] : (function () { throw new RuntimeError('Variable "carte_fidelite" does not exist.', 42, $this->source); })()), "num_carte", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">convertir point</a>
    ";
        // line 43
        echo twig_include($this->env, $context, "carte_fidelite/_delete_form.html.twig");
        echo "
       </div>
            </div>

        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "carte_fidelite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  147 => 42,  143 => 41,  138 => 39,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CarteFidelite{% endblock %}

{% block body %}
  <div class=\"row\">
        <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px; padding: 10px;\">

            <div class=\"card\">
                <div class=\"card-body\">
    <h1>Votre carte de fidelite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numéro de carte:</th>
                <td>{{ carte_fidelite.num_carte }}</td>
            </tr>
            <tr>
                <th>Votre identifiant:</th>
                <td>{{ carte_fidelite.idClient }}</td>
            </tr>
            <tr>
                <th>Nombre des points:</th>
                <td>{{ carte_fidelite.Numpoint }}</td>
            </tr>
            <tr>
                <th>Date du creation:</th>
                <td>{{ carte_fidelite.Datecreation ? carte_fidelite.Datecreation|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date de la fin du validite:</th>
                <td>{{ carte_fidelite.Datefinvalidite ? carte_fidelite.Datefinvalidite|date('Y-m-d') : '' }}</td>
            </tr>
    
        </tbody>
    </table>

    <a href=\"{{ path('app_carte_fidelite_index') }}\">back to list</a>

    <a href=\"{{ path('app_carte_fidelite_edit', {'Num_carte': carte_fidelite.num_carte}) }}\">edit</a>
<a href=\"{{ path('app_carte_fidelite_convert', {'Num_carte': carte_fidelite.num_carte}) }}\">convertir point</a>
    {{ include('carte_fidelite/_delete_form.html.twig') }}
       </div>
            </div>

        </div>

    </div>
{% endblock %}
", "carte_fidelite/show.html.twig", "C:\\Users\\EYA\\Desktop\\Commande\\Commande\\templates\\carte_fidelite\\show.html.twig");
    }
}
