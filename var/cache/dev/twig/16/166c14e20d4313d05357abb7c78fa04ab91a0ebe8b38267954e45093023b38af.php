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

/* front/terrain.html.twig */
class __TwigTemplate_f2caa48970ceb20a12082af0d4b7b8b7685688826107b0aa913e51e1263f1e8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/terrain.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/terrain.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/terrain.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " terrain
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Gallery</h1>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"kode-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <!--// Page Content //-->
        <section class=\"kode-pagesection\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"kode-pagecontent col-md-12\">

                        <div class=\"kode-gallery\">
                            <ul class=\"row\">
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                            <!--// Pagination //-->
                            <div class=\"pagination\">
                                <a href=\"#\"><i class=\"fa fa-angle-double-left\"></i></a>
                                <a href=\"#\">1</a>
                                <a href=\"#\">2</a>
                                <span>3</span>
                                <a href=\"#\">4</a>
                                <a href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a>
                            </div>
                            <!--// Pagination //-->
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

    </div>
    <!--// Main Content //-->

    <!--// NewsLatter //-->
    <div class=\"kode-newslatter kode-bg-color\" >
        <span class=\"kode-halfbg thbg-color\"></span>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Subcribe Our Monthly Newsletter</h3>
                </div>
                <div class=\"col-md-6\">
                    <form>
                        <input type=\"text\" placeholder=\"Your E-mail Adress\" name=\"s\" required>
                        <label><input type=\"submit\" value=\"\"></label>
                    </form>
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
        return "front/terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 66,  158 => 60,  149 => 54,  140 => 48,  131 => 42,  122 => 36,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}
{% block title %} terrain
{% endblock %}
{% block body %}
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Gallery</h1>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"kode-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <!--// Page Content //-->
        <section class=\"kode-pagesection\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"kode-pagecontent col-md-12\">

                        <div class=\"kode-gallery\">
                            <ul class=\"row\">
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-3.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-4.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-5.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-6\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-6.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                            <!--// Pagination //-->
                            <div class=\"pagination\">
                                <a href=\"#\"><i class=\"fa fa-angle-double-left\"></i></a>
                                <a href=\"#\">1</a>
                                <a href=\"#\">2</a>
                                <span>3</span>
                                <a href=\"#\">4</a>
                                <a href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a>
                            </div>
                            <!--// Pagination //-->
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

    </div>
    <!--// Main Content //-->

    <!--// NewsLatter //-->
    <div class=\"kode-newslatter kode-bg-color\" >
        <span class=\"kode-halfbg thbg-color\"></span>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Subcribe Our Monthly Newsletter</h3>
                </div>
                <div class=\"col-md-6\">
                    <form>
                        <input type=\"text\" placeholder=\"Your E-mail Adress\" name=\"s\" required>
                        <label><input type=\"submit\" value=\"\"></label>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock%}", "front/terrain.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\terrain.html.twig");
    }
}
