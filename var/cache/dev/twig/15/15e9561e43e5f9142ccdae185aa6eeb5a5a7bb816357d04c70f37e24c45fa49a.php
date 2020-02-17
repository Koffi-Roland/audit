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

/* systeme_surveillance/show.html.twig */
class __TwigTemplate_f3412b1db65e5063c515c32c8cbdecd46ff6b480874b62297fc042823549b81a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "systeme_surveillance/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "systeme_surveillance/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "systeme_surveillance/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SystemeSurveillance";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>SystemeSurveillance</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Limite_critique</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 16, $this->source); })()), "limiteCritique", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enregistrement</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 20, $this->source); })()), "enregistrement", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Action_corrective</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 24, $this->source); })()), "actionCorrective", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frequence_controle</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 28, $this->source); })()), "frequenceControle", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 32, $this->source); })()), "responsable", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Verification</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 36, $this->source); })()), "verification", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 40, $this->source); })()), "resultat", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "systeme_surveillance/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "systeme_surveillance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SystemeSurveillance{% endblock %}

{% block body %}
    <h1>SystemeSurveillance</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ systeme_surveillance.id }}</td>
            </tr>
            <tr>
                <th>Limite_critique</th>
                <td>{{ systeme_surveillance.limiteCritique }}</td>
            </tr>
            <tr>
                <th>Enregistrement</th>
                <td>{{ systeme_surveillance.enregistrement }}</td>
            </tr>
            <tr>
                <th>Action_corrective</th>
                <td>{{ systeme_surveillance.actionCorrective }}</td>
            </tr>
            <tr>
                <th>Frequence_controle</th>
                <td>{{ systeme_surveillance.frequenceControle }}</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>{{ systeme_surveillance.responsable }}</td>
            </tr>
            <tr>
                <th>Verification</th>
                <td>{{ systeme_surveillance.verification }}</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>{{ systeme_surveillance.resultat }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('systeme_surveillance_index') }}\">back to list</a>

    <a href=\"{{ path('systeme_surveillance_edit', {'id': systeme_surveillance.id}) }}\">edit</a>

    {{ include('systeme_surveillance/_delete_form.html.twig') }}
{% endblock %}
", "systeme_surveillance/show.html.twig", "/home/roland/Bureau/audit/templates/systeme_surveillance/show.html.twig");
    }
}
