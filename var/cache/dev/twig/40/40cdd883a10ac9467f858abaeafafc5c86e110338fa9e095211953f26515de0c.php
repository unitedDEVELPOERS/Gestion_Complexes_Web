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

/* matches/index.html.twig */
class __TwigTemplate_588d5bc0872f26ba4ec33c4db068f563155f81a2c66c4da761ffd9b68968f3e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matches/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matches/index.html.twig"));

        $this->parent = $this->loadTemplate("base/index.html.twig", "matches/index.html.twig", 1);
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

        echo "Matches";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"hero overlay\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bground.jpg"), "html", null, true);
        echo "')\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Matches</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"d-flex team-vs\">
                    <span class=\"score\">4-1</span>
                    <div class=\"team-1 w-50\">
                        <div class=\"team-details w-100 text-center\">
                            <img src=\"images/logo_1.png\" alt=\"Image\" class=\"img-fluid\">
                            <h3>LA LEGA <span>(win)</span></h3>
                            <ul class=\"list-unstyled\">
                                <li>Anja Landry (7)</li>
                                <li>Eadie Salinas (12)</li>
                                <li>Ashton Allen (10)</li>
                                <li>Baxter Metcalfe (5)</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-2 w-50\">
                        <div class=\"team-details w-100 text-center\">
                            <img src=\"images/logo_2.png\" alt=\"Image\" class=\"img-fluid\">
                            <h3>JUVENDU <span>(loss)</span></h3>
                            <ul class=\"list-unstyled\">
                                <li>Macauly Green (3)</li>
                                <li>Arham Stark (8)</li>
                                <li>Stephan Murillo (9)</li>
                                <li>Ned Ritter (5)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section bg-dark\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-lg-12\">
                    <div class=\"widget-next-match\">
                        <div class=\"widget-title\">
                            <h3>Next Match</h3>
                        </div>
                        <div class=\"widget-body mb-3\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                            <div id=\"date-countdown2\" class=\"pb-1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 title-section\">
                    <h2 class=\"heading\">Upcoming Match</h2>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_3.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_4.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_3.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_4.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6 title-section\">
                    <h2 class=\"heading\">Videos</h2>
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
                                <h3 class=\"m-0\">Dogba set for Juvendu return?</h3>
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
                                <h3 class=\"m-0\">Kai Nets Double To Secure Comfortable Away Win</h3>
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
                                <h3 class=\"m-0\">Romolu to stay at Real Nadrid?</h3>
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
                                <h3 class=\"m-0\">Dogba set for Juvendu return?</h3>
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
                                <h3 class=\"m-0\">Kai Nets Double To Secure Comfortable Away Win</h3>
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
                                <h3 class=\"m-0\">Romolu to stay at Real Nadrid?</h3>
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
        return "matches/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base/index.html.twig' %}

{% block title %}Matches{% endblock %}


{% block body %}
    <div class=\"hero overlay\" style=\"background-image: url('{{asset('images/bground.jpg')}}')\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Matches</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"d-flex team-vs\">
                    <span class=\"score\">4-1</span>
                    <div class=\"team-1 w-50\">
                        <div class=\"team-details w-100 text-center\">
                            <img src=\"images/logo_1.png\" alt=\"Image\" class=\"img-fluid\">
                            <h3>LA LEGA <span>(win)</span></h3>
                            <ul class=\"list-unstyled\">
                                <li>Anja Landry (7)</li>
                                <li>Eadie Salinas (12)</li>
                                <li>Ashton Allen (10)</li>
                                <li>Baxter Metcalfe (5)</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-2 w-50\">
                        <div class=\"team-details w-100 text-center\">
                            <img src=\"images/logo_2.png\" alt=\"Image\" class=\"img-fluid\">
                            <h3>JUVENDU <span>(loss)</span></h3>
                            <ul class=\"list-unstyled\">
                                <li>Macauly Green (3)</li>
                                <li>Arham Stark (8)</li>
                                <li>Stephan Murillo (9)</li>
                                <li>Ned Ritter (5)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section bg-dark\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-lg-12\">
                    <div class=\"widget-next-match\">
                        <div class=\"widget-title\">
                            <h3>Next Match</h3>
                        </div>
                        <div class=\"widget-body mb-3\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                            <div id=\"date-countdown2\" class=\"pb-1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 title-section\">
                    <h2 class=\"heading\">Upcoming Match</h2>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_3.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_4.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_1.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_2.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                    <div class=\"bg-light p-4 rounded\">
                        <div class=\"widget-body\">
                            <div class=\"widget-vs\">
                                <div class=\"d-flex align-items-center justify-content-around justify-content-between w-100\">
                                    <div class=\"team-1 text-center\">
                                        <img src=\"images/logo_3.png\" alt=\"Image\">
                                        <h3>Football League</h3>
                                    </div>
                                    <div>
                                        <span class=\"vs\"><span>VS</span></span>
                                    </div>
                                    <div class=\"team-2 text-center\">
                                        <img src=\"images/logo_4.png\" alt=\"Image\">
                                        <h3>Soccer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center widget-vs-contents mb-4\">
                            <h4>World Cup League</h4>
                            <p class=\"mb-5\">
                                <span class=\"d-block\">December 20th, 2020</span>
                                <span class=\"d-block\">9:30 AM GMT+0</span>
                                <strong class=\"text-primary\">New Euro Arena</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6 title-section\">
                    <h2 class=\"heading\">Videos</h2>
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
                                <h3 class=\"m-0\">Dogba set for Juvendu return?</h3>
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
                                <h3 class=\"m-0\">Kai Nets Double To Secure Comfortable Away Win</h3>
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
                                <h3 class=\"m-0\">Romolu to stay at Real Nadrid?</h3>
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
                                <h3 class=\"m-0\">Dogba set for Juvendu return?</h3>
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
                                <h3 class=\"m-0\">Kai Nets Double To Secure Comfortable Away Win</h3>
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
                                <h3 class=\"m-0\">Romolu to stay at Real Nadrid?</h3>
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
{% endblock %}", "matches/index.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\matches\\index.html.twig");
    }
}
