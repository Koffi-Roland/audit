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

/* identificationccp_danger/show.html.twig */
class __TwigTemplate_b6b9c58394e3b461866a9931f3d622393b67b380519ee13a78894e0a37e8e4ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identificationccp_danger/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identificationccp_danger/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "identificationccp_danger/show.html.twig", 1);
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

        echo "IdentificationccpDanger";
        
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
        echo "    <h1>IdentificationccpDanger</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description_danger</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 16, $this->source); })()), "descriptionDanger", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cause_danger</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 20, $this->source); })()), "causeDanger", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mesure_preventive</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 24, $this->source); })()), "mesurePreventive", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frequence</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 28, $this->source); })()), "frequence", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gravite</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 32, $this->source); })()), "gravite", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Detection</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 36, $this->source); })()), "detection", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Risque</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 40, $this->source); })()), "risque", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ccp</th>
                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 44, $this->source); })()), "ccp", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>ParametreMaitriser</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 48, $this->source); })()), "parametreMaitriser", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["identificationccp_danger"]) || array_key_exists("identificationccp_danger", $context) ? $context["identificationccp_danger"] : (function () { throw new RuntimeError('Variable "identificationccp_danger" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "identificationccp_danger/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "identificationccp_danger/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 57,  172 => 55,  167 => 53,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}IdentificationccpDanger{% endblock %}

{% block body %}
    <h1>IdentificationccpDanger</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ identificationccp_danger.id }}</td>
            </tr>
            <tr>
                <th>Description_danger</th>
                <td>{{ identificationccp_danger.descriptionDanger }}</td>
            </tr>
            <tr>
                <th>Cause_danger</th>
                <td>{{ identificationccp_danger.causeDanger }}</td>
            </tr>
            <tr>
                <th>Mesure_preventive</th>
                <td>{{ identificationccp_danger.mesurePreventive }}</td>
            </tr>
            <tr>
                <th>Frequence</th>
                <td>{{ identificationccp_danger.frequence }}</td>
            </tr>
            <tr>
                <th>Gravite</th>
                <td>{{ identificationccp_danger.gravite }}</td>
            </tr>
            <tr>
                <th>Detection</th>
                <td>{{ identificationccp_danger.detection }}</td>
            </tr>
            <tr>
                <th>Risque</th>
                <td>{{ identificationccp_danger.risque }}</td>
            </tr>
            <tr>
                <th>Ccp</th>
                <td>{{ identificationccp_danger.ccp ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>ParametreMaitriser</th>
                <td>{{ identificationccp_danger.parametreMaitriser }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('identificationccp_danger_index') }}\">back to list</a>

    <a href=\"{{ path('identificationccp_danger_edit', {'id': identificationccp_danger.id}) }}\">edit</a>

    {{ include('identificationccp_danger/_delete_form.html.twig') }}
{% endblock %}
", "identificationccp_danger/show.html.twig", "/home/roland/Bureau/audit/templates/identificationccp_danger/show.html.twig");
    }
}
