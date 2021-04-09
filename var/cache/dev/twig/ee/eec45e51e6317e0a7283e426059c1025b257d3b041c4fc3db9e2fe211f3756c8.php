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

/* contact/index.html.twig */
class __TwigTemplate_e574f69c503825f948ce846229dbfb455b6888c1c9ff0ad52d180c154c3ae47a extends Template
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
        return "base/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base/index.html.twig", "contact/index.html.twig", 1);
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

        echo " Contact ";
        
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
        echo "    <div class=\"hero overlay\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bground.jpg"), "html", null, true);
        echo "')\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-9 mx-auto text-center\">
                    <h1 class=\"text-white\">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" class=\"form-control\" id=\"\" cols=\"30\" rows=\"10\" placeholder=\"Write something...\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary py-3 px-5\" value=\"Send Message\">
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-4 ml-auto\">
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">Address</strong>
                            273 South Riverview Rd. <br> New York, NY 10011
                        </li>
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">Email</strong>
                            <a href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"ed84838b82ad98839e818c9988c38e82\">[email&#160;protected]</span></a>
                        </li>
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">
                                Phone
                            </strong>
                            <a href=\"#\">+12 345 6789 012</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base/index.html.twig' %}

{% block title %} Contact {% endblock %}

{% block body %}
    <div class=\"hero overlay\" style=\"background-image: url('{{asset('images/bground.jpg')}}')\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-9 mx-auto text-center\">
                    <h1 class=\"text-white\">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" class=\"form-control\" id=\"\" cols=\"30\" rows=\"10\" placeholder=\"Write something...\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary py-3 px-5\" value=\"Send Message\">
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-4 ml-auto\">
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">Address</strong>
                            273 South Riverview Rd. <br> New York, NY 10011
                        </li>
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">Email</strong>
                            <a href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"ed84838b82ad98839e818c9988c38e82\">[email&#160;protected]</span></a>
                        </li>
                        <li class=\"mb-2\">
                            <strong class=\"text-white d-block\">
                                Phone
                            </strong>
                            <a href=\"#\">+12 345 6789 012</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "contact/index.html.twig", "D:\\Esprit\\Ahmed\\Semestre2\\Symfony\\Gest_Complexes\\templates\\contact\\index.html.twig");
    }
}
