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

/* base/index.html.twig */
class __TwigTemplate_fc32cef805b7609123f7e105a07ac9b54f968de1424dcee010c99e9f48a35c50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/icomoon/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"site-wrap\">
    <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>
    <header class=\"site-navbar py-4\" role=\"banner\">
        <div class=\"container\">
            <div class=\"d-flex align-items-center\">
                <div class=\"site-logo\">
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/home"), "html", null, true);
        echo "\">
                        <img src=\"images/logo.png\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"ml-auto\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li class=\"active\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/home"), "html", null, true);
        echo "\" class=\"nav-link\">Accueil</a></li>
                            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/matches"), "html", null, true);
        echo "\" class=\"nav-link\">Terrains</a></li>
                            <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/matches"), "html", null, true);
        echo "\" class=\"nav-link\">Réservations</a></li>
                            <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/matches"), "html", null, true);
        echo "\" class=\"nav-link\">Matchessss</a></li>
                            <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/joueurs"), "html", null, true);
        echo "\" class=\"nav-link\">Joueurs</a></li>
                            <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/blog"), "html", null, true);
        echo "\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/contact"), "html", null, true);
        echo "\" class=\"nav-link\">Contact</a></li>
                        </ul>
                    </nav>
                    <a href=\"#\" class=\"d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white\"><span class=\"icon-menu h3 text-white\"></span></a>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
    <footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>News</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">All</a></li>
                            <li><a href=\"#\">Club News</a></li>
                            <li><a href=\"#\">Media Center</a></li>
                            <li><a href=\"#\">Video</a></li>
                            <li><a href=\"#\">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Tickets</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Online Ticket</a></li>
                            <li><a href=\"#\">Payment and Prices</a></li>
                            <li><a href=\"#\">Contact &amp; Booking</a></li>
                            <li><a href=\"#\">Tickets</a></li>
                            <li><a href=\"#\">Coupon</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Matches</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Standings</a></li>
                            <li><a href=\"#\">World Cup</a></li>
                            <li><a href=\"#\">La Lega</a></li>
                            <li><a href=\"#\">Hyper Cup</a></li>
                            <li><a href=\"#\">World League</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Social</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Twitter</a></li>
                            <li><a href=\"#\">Facebook</a></li>
                            <li><a href=\"#\">Instagram</a></li>
                            <li><a href=\"#\">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-12\">
                    <div class=\" pt-5\">
                        <p>

                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mb.YTPlayer.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 61,  340 => 60,  330 => 7,  320 => 6,  298 => 147,  294 => 146,  290 => 145,  286 => 144,  282 => 143,  278 => 142,  274 => 141,  270 => 140,  266 => 139,  262 => 138,  258 => 137,  254 => 136,  250 => 135,  246 => 134,  242 => 133,  170 => 63,  168 => 60,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  132 => 45,  122 => 38,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  54 => 8,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>
        {% block title %}
        {% endblock %}
    </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/icomoon/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.fancybox.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/flaticon/font/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body>
<div class=\"site-wrap\">
    <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>
    <header class=\"site-navbar py-4\" role=\"banner\">
        <div class=\"container\">
            <div class=\"d-flex align-items-center\">
                <div class=\"site-logo\">
                    <a href=\"{{ asset('/home') }}\">
                        <img src=\"images/logo.png\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"ml-auto\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li class=\"active\"><a href=\"{{ asset('/home') }}\" class=\"nav-link\">Accueil</a></li>
                            <li><a href=\"{{ asset('/matches') }}\" class=\"nav-link\">Terrains</a></li>
                            <li><a href=\"{{ asset('/matches') }}\" class=\"nav-link\">Réservations</a></li>
                            <li><a href=\"{{ asset('/matches') }}\" class=\"nav-link\">Matchessss</a></li>
                            <li><a href=\"{{ asset('/joueurs') }}\" class=\"nav-link\">Joueurs</a></li>
                            <li><a href=\"{{ asset('/blog') }}\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"{{ asset('/contact') }}\" class=\"nav-link\">Contact</a></li>
                        </ul>
                    </nav>
                    <a href=\"#\" class=\"d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white\"><span class=\"icon-menu h3 text-white\"></span></a>
                </div>
            </div>
        </div>
    </header>

    {% block body %}

    {% endblock %}

    <footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>News</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">All</a></li>
                            <li><a href=\"#\">Club News</a></li>
                            <li><a href=\"#\">Media Center</a></li>
                            <li><a href=\"#\">Video</a></li>
                            <li><a href=\"#\">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Tickets</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Online Ticket</a></li>
                            <li><a href=\"#\">Payment and Prices</a></li>
                            <li><a href=\"#\">Contact &amp; Booking</a></li>
                            <li><a href=\"#\">Tickets</a></li>
                            <li><a href=\"#\">Coupon</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Matches</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Standings</a></li>
                            <li><a href=\"#\">World Cup</a></li>
                            <li><a href=\"#\">La Lega</a></li>
                            <li><a href=\"#\">Hyper Cup</a></li>
                            <li><a href=\"#\">World League</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"widget mb-3\">
                        <h3>Social</h3>
                        <ul class=\"list-unstyled links\">
                            <li><a href=\"#\">Twitter</a></li>
                            <li><a href=\"#\">Facebook</a></li>
                            <li><a href=\"#\">Instagram</a></li>
                            <li><a href=\"#\">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-12\">
                    <div class=\" pt-5\">
                        <p>

                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-migrate-3.0.1.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.countdown.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('js/aos.js') }}\"></script>
<script src=\"{{ asset('js/jquery.fancybox.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
<script src=\"{{ asset('js/jquery.mb.YTPlayer.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>

<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>", "base/index.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\base\\index.html.twig");
    }
}
