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

/* front/shop.html.twig */
class __TwigTemplate_ecefd9ee0b15b9ad9e92f4d63a02f332450c2796b214877bab692c8e4f581743 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/shop.html.twig", 2);
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

        echo " shop
";
        
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

        echo "  <!--// Sub Header //-->
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Shop</h1>
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
    <!--// Sub Header //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <!--// Page Content //-->
        <section class=\"kode-pagesection padding-bottom-18-flat\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-shop-list\">

                            <ul class=\"row\">
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/shop-product3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
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
        return "front/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 248,  361 => 234,  344 => 220,  327 => 206,  310 => 192,  293 => 178,  276 => 164,  259 => 150,  242 => 136,  225 => 122,  208 => 108,  191 => 94,  174 => 80,  157 => 66,  140 => 52,  123 => 38,  79 => 5,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends'base.html.twig' %}
{% block title %} shop
{% endblock %}
{% block body %}  <!--// Sub Header //-->
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Shop</h1>
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
    <!--// Sub Header //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <!--// Page Content //-->
        <section class=\"kode-pagesection padding-bottom-18-flat\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-shop-list\">

                            <ul class=\"row\">
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product1.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product2.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product1.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product2.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product1.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product2.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product1.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product1.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-md-3 col-sm-6\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/shop-product3.jpg') }}\" alt=\"\"></a>
                                            <figcaption>
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p class=\"kode-pro-cat\"><a href=\"#\">Categories</a></p>
                                            </figcaption>
                                        </figure>
                                        <div class=\"kode-pro-info\">
                                            <a href=\"#\" class=\"add_to_cart\"><i class=\"fa fa-shopping-cart\"></i> Add To Cart</a>
                                            <span>55\$</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
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
{% endblock %}", "front/shop.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\shop.html.twig");
    }
}
