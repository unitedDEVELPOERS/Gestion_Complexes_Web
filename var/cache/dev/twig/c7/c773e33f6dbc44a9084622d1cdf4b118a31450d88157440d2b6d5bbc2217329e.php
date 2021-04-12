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

/* utilisateur/Affiche.html.twig */
class __TwigTemplate_f26ca262484e0766c1208509dd6b02cbbf54e318f6932cdb8b2ab815c9cbf6cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/Affiche.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Affiche Utilisateur </h1>
<button>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad");
        echo "\" >Ajouter</a>
</button>
<table border=\"1\">
    <tr>
    <th> ID</th>
    <th>EMAIL </th>
        <th> NOM</th>
        <th>PRENOM </th>
        <th> ROLE</th>
        <th>CATEGORIE </th>
        <th> SOLDE DE POINT</th>
        <th>POSITION </th>
        <th>TELEPHONE </th>
        <td> Update</td>
    <td> Delete</td>
    </tr>
    <tr ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Utilisateur"]) || array_key_exists("Utilisateur", $context) ? $context["Utilisateur"] : (function () { throw new RuntimeError('Variable "Utilisateur" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo ">
    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "categorie", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "soldePoint", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "position", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "telephone", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"> Update</a> </td>
       <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("d", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"> Delete</a> </td>
    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo ">


</table>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  76 => 29,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Affiche Utilisateur </h1>
<button>
    <a href=\"{{ path('ad') }}\" >Ajouter</a>
</button>
<table border=\"1\">
    <tr>
    <th> ID</th>
    <th>EMAIL </th>
        <th> NOM</th>
        <th>PRENOM </th>
        <th> ROLE</th>
        <th>CATEGORIE </th>
        <th> SOLDE DE POINT</th>
        <th>POSITION </th>
        <th>TELEPHONE </th>
        <td> Update</td>
    <td> Delete</td>
    </tr>
    <tr {% for u in Utilisateur %}>
    <td>{{ u.id }}</td>
    <td>{{ u.email }}</td>
        <td>{{ u.nom }}</td>
        <td>{{ u.prenom }}</td>
        <td>{{ u.role }}</td>
        <td>{{ u.categorie }}</td>
        <td>{{ u.soldePoint }}</td>
        <td>{{ u.position }}</td>
        <td>{{ u.telephone }}</td>
        <td><a href=\"{{ path('a',{'id':u.id}) }}\"> Update</a> </td>
       <td><a href=\"{{ path('d',{'id':u.id}) }}\"> Delete</a> </td>
    </tr {% endfor %}>


</table>
</body>
</html>", "utilisateur/Affiche.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\utilisateur\\Affiche.html.twig");
    }
}
