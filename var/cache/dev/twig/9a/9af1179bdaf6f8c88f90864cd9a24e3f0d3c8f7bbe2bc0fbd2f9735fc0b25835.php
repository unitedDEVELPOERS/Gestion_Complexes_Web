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

/* joueurs/index.html.twig */
class __TwigTemplate_8d0689364a5a89e05f805ede5e77c5c8ffc6230e5e4daf5ade6d48e8e154085f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueurs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueurs/index.html.twig"));

        $this->parent = $this->loadTemplate("base/index.html.twig", "joueurs/index.html.twig", 1);
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

        echo "Joueurs";
        
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
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Joueurs</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6 title-section\">
                    <h2 class=\"heading\">Star Players / Videos</h2>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"custom-nav\">
                        <a href=\"#\" class=\"js-custom-prev-v2\"><span class=\"icon-keyboard_arrow_left\"></span></a>
                        <span></span>
                        <a href=\"#\" class=\"js-custom-next-v2\"><span class=\"icon-keyboard_arrow_right\"></span></a>
                    </div>
                </div>
            </div>
            <div class=\"owl-4-slider owl-carousel\">
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#10 / Forward</span>
                                <h3 class=\"m-0\">Phillip Hobbs</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#7 / Forward</span>
                                <h3 class=\"m-0\">Garry Norris</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#4 / Forward</span>
                                <h3 class=\"m-0\">Romolu Harper</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#4 / Forward</span>
                                <h3 class=\"m-0\">Phillip Hobbs</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#1 / GoalKeeper</span>
                                <h3 class=\"m-0\">Garry Norris</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#8 / Forward</span>
                                <h3 class=\"m-0\">Romolu Harper</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container site-section\">
        <div class=\"row\">
            <div class=\"col-6 title-section\">
                <h2 class=\"heading\">Our Blog</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"custom-media d-flex\">
                    <div class=\"img mr-4\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                    </div>
                    <div class=\"text\">
                        <span class=\"meta\">May 20, 2020</span>
                        <h3 class=\"mb-4\"><a href=\"#\">Romolu to stay at Real Nadrid?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                        <p><a href=\"#\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"custom-media d-flex\">
                    <div class=\"img mr-4\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                    </div>
                    <div class=\"text\">
                        <span class=\"meta\">May 20, 2020</span>
                        <h3 class=\"mb-4\"><a href=\"#\">Romolu to stay at Real Nadrid?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                        <p><a href=\"#\">Read more</a></p>
                    </div>
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
        return "joueurs/index.html.twig";
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

{% block title %}Joueurs{% endblock %}

{% block body %}
    <div class=\"hero overlay\" style=\"background-image: url('{{asset('images/bground.jpg')}}')\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Joueurs</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6 title-section\">
                    <h2 class=\"heading\">Star Players / Videos</h2>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"custom-nav\">
                        <a href=\"#\" class=\"js-custom-prev-v2\"><span class=\"icon-keyboard_arrow_left\"></span></a>
                        <span></span>
                        <a href=\"#\" class=\"js-custom-next-v2\"><span class=\"icon-keyboard_arrow_right\"></span></a>
                    </div>
                </div>
            </div>
            <div class=\"owl-4-slider owl-carousel\">
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#10 / Forward</span>
                                <h3 class=\"m-0\">Phillip Hobbs</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#7 / Forward</span>
                                <h3 class=\"m-0\">Garry Norris</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#4 / Forward</span>
                                <h3 class=\"m-0\">Romolu Harper</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#4 / Forward</span>
                                <h3 class=\"m-0\">Phillip Hobbs</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#1 / GoalKeeper</span>
                                <h3 class=\"m-0\">Garry Norris</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"video-media\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <a href=\"https://vimeo.com/139714818\" class=\"d-flex play-button align-items-center\" data-fancybox>
<span class=\"icon mr-3\">
<span class=\"icon-play\"></span>
</span>
                            <div class=\"caption\">
                                <span class=\"meta\">#8 / Forward</span>
                                <h3 class=\"m-0\">Romolu Harper</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container site-section\">
        <div class=\"row\">
            <div class=\"col-6 title-section\">
                <h2 class=\"heading\">Our Blog</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"custom-media d-flex\">
                    <div class=\"img mr-4\">
                        <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
                    </div>
                    <div class=\"text\">
                        <span class=\"meta\">May 20, 2020</span>
                        <h3 class=\"mb-4\"><a href=\"#\">Romolu to stay at Real Nadrid?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                        <p><a href=\"#\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"custom-media d-flex\">
                    <div class=\"img mr-4\">
                        <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
                    </div>
                    <div class=\"text\">
                        <span class=\"meta\">May 20, 2020</span>
                        <h3 class=\"mb-4\"><a href=\"#\">Romolu to stay at Real Nadrid?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                        <p><a href=\"#\">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock  %}", "joueurs/index.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\joueurs\\index.html.twig");
    }
}
