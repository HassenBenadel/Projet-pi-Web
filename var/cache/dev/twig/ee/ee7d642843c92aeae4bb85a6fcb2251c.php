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

/* lignec/index.html.twig */
class __TwigTemplate_b3c5ff3801fadc6cd41e6d0f7b67d753 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lignec/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lignec/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lignec/index.html.twig", 1);
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

        echo "Panier ";
        
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
        echo "<div class=\"row\" style=\"display: flex;align-items: rightcenter;justify-content: rightcenter;margin-top: 150px;\">

    <div class=\"col-lg-16\">

        <div class=\"card\">
            <div class=\"card-body\">
    <h1>Votre panier</h1>
  

 <table class=\"table\">
 <th>
    <table class=\"table\">
        <thead>
            <tr>
<th>Nom produit</th>
            <th>total</th>
                <th>Quantite</th>
            <th>Vider Le panier</th>
           
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignecs"]) || array_key_exists("lignecs", $context) ? $context["lignecs"] : (function () { throw new RuntimeError('Variable "lignecs" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lignec"]) {
            // line 29
            echo "            <tr>
            <td>Souris</td>
                ";
            // line 32
            echo "                ";
            // line 33
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignec"], "prix", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
             
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lignec"], "quantite", [], "any", false, false, false, 35), "html", null, true);
            echo "
                 <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignec_plus", ["id" => twig_get_attribute($this->env, $this->source, $context["lignec"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">+  </a>
                  <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignec_moins", ["id" => twig_get_attribute($this->env, $this->source, $context["lignec"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">- </a>
                 </td>
                <td>
          
                   <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vider", ["id" => twig_get_attribute($this->env, $this->source, $context["lignec"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">X </a>
                </td>
               
<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lignec"], "IdPanier", [], "any", false, false, false, 44), "totalpanier", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "       
    
 
        </tbody>

    </table>
    </th>
    <th>
 <table>

 <th>
<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        echo "\">Finialisez la Commande </a>
</th>

 </table>
</th>
 </table>
         </div>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lignec/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 62,  167 => 51,  158 => 47,  150 => 44,  144 => 41,  137 => 37,  133 => 36,  129 => 35,  123 => 33,  121 => 32,  117 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier {% endblock %}

{% block body %}
<div class=\"row\" style=\"display: flex;align-items: rightcenter;justify-content: rightcenter;margin-top: 150px;\">

    <div class=\"col-lg-16\">

        <div class=\"card\">
            <div class=\"card-body\">
    <h1>Votre panier</h1>
  

 <table class=\"table\">
 <th>
    <table class=\"table\">
        <thead>
            <tr>
<th>Nom produit</th>
            <th>total</th>
                <th>Quantite</th>
            <th>Vider Le panier</th>
           
            </tr>
        </thead>
        <tbody>
        {% for lignec in lignecs %}
            <tr>
            <td>Souris</td>
                {#<td>{{ lignec.id }}</td>#}
                {# <td>{{ lignec.IdPanier }}</td>#}
                <td>{{ lignec.prix }}</td>
             
                <td>{{ lignec.quantite }}
                 <a href=\"{{ path('app_lignec_plus', {'id': lignec.id}) }}\">+  </a>
                  <a href=\"{{ path('app_lignec_moins', {'id': lignec.id}) }}\">- </a>
                 </td>
                <td>
          
                   <a href=\"{{ path('app_vider', {'id': lignec.id}) }}\">X </a>
                </td>
               
<td>{{ lignec.IdPanier.totalpanier }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
       
    
 
        </tbody>

    </table>
    </th>
    <th>
 <table>

 <th>
<a href=\"{{ path('app_commande_new') }}\">Finialisez la Commande </a>
</th>

 </table>
</th>
 </table>
         </div>
        </div>

    </div>
{% endblock %}
", "lignec/index.html.twig", "C:\\Users\\EYA\\Desktop\\Commande\\Commande\\templates\\lignec\\index.html.twig");
    }
}
