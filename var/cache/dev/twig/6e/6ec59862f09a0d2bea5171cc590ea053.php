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

/* commande/_form.html.twig */
class __TwigTemplate_a452f4da3488b5e978449dd5d14e3259 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    
        
    
                        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Choississez une méthode de paiement </label>
                        <div class=\"col-sm-10\">
                            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "methpaiement", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "methpaiement", [], "any", false, false, false, 10), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "



           
            
   
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Id client</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "IdClient", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                    </div>
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "IdClient", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">code</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "code", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "code", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Numero de carte fidelite:</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "num_carte", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "num_carte", [], "any", false, false, false, 33), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                       <button class=class=\"btn btn-success\">";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 37, $this->source); })()), "Commander")) : ("Commander")), "html", null, true);
        echo "</button>
                    </div>

   
   
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commande/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  106 => 37,  99 => 33,  94 => 31,  88 => 28,  83 => 26,  76 => 22,  70 => 19,  58 => 10,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
    
        
    
                        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Choississez une méthode de paiement </label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.methpaiement,{'attr':{'class':'form-control'}}) }}

                        </div>
                    {{ form_errors(form.methpaiement,{'attr':{'class':'text-danger'}}) }}



           
            
   
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Id client</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.IdClient,{'attr':{'class':'form-control'}}) }}

                    </div>
                    {{ form_errors(form.IdClient,{'attr':{'class':'text-danger'}}) }}

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">code</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.code,{'attr':{'class':'form-control'}}) }}
                        </div>
                    {{ form_errors(form.code,{'attr':{'class':'text-danger'}}) }}
<label for=\"inputText\" class=\"col-sm-4 col-form-label\">Numero de carte fidelite:</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.num_carte,{'attr':{'class':'form-control'}}) }}
                        </div>
                    {{ form_errors(form.num_carte,{'attr':{'class':'text-danger'}}) }}
                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                       <button class=class=\"btn btn-success\">{{ button_label|default('Commander') }}</button>
                    </div>

   
   
{{ form_end(form) }}
", "commande/_form.html.twig", "C:\\Users\\EYA\\Desktop\\Commande\\Commande\\templates\\commande\\_form.html.twig");
    }
}
