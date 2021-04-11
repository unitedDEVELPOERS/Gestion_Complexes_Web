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

/* base.html.twig */
class __TwigTemplate_e205d81826005fbf1bcb23bee86d79bb38d77ec98501c3b1d7eb56c79607c599 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Soccer &mdash; Website by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
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
                    <a href=\"index.html\">
                        <img src=\"images/logo.png\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"ml-auto\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li><a href=\"index.html\" class=\"nav-link\">Home</a></li>
                            <li><a href=\"matches.html\" class=\"nav-link\">Matches</a></li>
                            <li class=\"active\"><a href=\"players.html\" class=\"nav-link\">Players</a></li>
                            <li><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                        </ul>
                    </nav>
                    <a href=\"#\" class=\"d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white\"><span class=\"icon-menu h3 text-white\"></span></a>
                </div>
            </div>
        </div>
    </header>
    <div class=\"hero overlay\" style=\"background-image: url('images/bg_3.jpg');\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Players</h1>
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

<script src=\"js/jquery-3.3.1.min.js\"></script>
<script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
<script src=\"js/jquery-ui.js\"></script>
<script src=\"js/popper.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/owl.carousel.min.js\"></script>
<script src=\"js/jquery.stellar.min.js\"></script>
<script src=\"js/jquery.countdown.min.js\"></script>
<script src=\"js/bootstrap-datepicker.min.js\"></script>
<script src=\"js/jquery.easing.1.3.js\"></script>
<script src=\"js/aos.js\"></script>
<script src=\"js/jquery.fancybox.min.js\"></script>
<script src=\"js/jquery.sticky.js\"></script>
<script src=\"js/jquery.mb.YTPlayer.min.js\"></script>
<script src=\"js/main.js\"></script>

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

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Soccer &mdash; Website by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
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
                    <a href=\"index.html\">
                        <img src=\"images/logo.png\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"ml-auto\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li><a href=\"index.html\" class=\"nav-link\">Home</a></li>
                            <li><a href=\"matches.html\" class=\"nav-link\">Matches</a></li>
                            <li class=\"active\"><a href=\"players.html\" class=\"nav-link\">Players</a></li>
                            <li><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                        </ul>
                    </nav>
                    <a href=\"#\" class=\"d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white\"><span class=\"icon-menu h3 text-white\"></span></a>
                </div>
            </div>
        </div>
    </header>
    <div class=\"hero overlay\" style=\"background-image: url('images/bg_3.jpg');\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 mx-auto text-center\">
                    <h1 class=\"text-white\">Players</h1>
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

<script src=\"js/jquery-3.3.1.min.js\"></script>
<script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
<script src=\"js/jquery-ui.js\"></script>
<script src=\"js/popper.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/owl.carousel.min.js\"></script>
<script src=\"js/jquery.stellar.min.js\"></script>
<script src=\"js/jquery.countdown.min.js\"></script>
<script src=\"js/bootstrap-datepicker.min.js\"></script>
<script src=\"js/jquery.easing.1.3.js\"></script>
<script src=\"js/aos.js\"></script>
<script src=\"js/jquery.fancybox.min.js\"></script>
<script src=\"js/jquery.sticky.js\"></script>
<script src=\"js/jquery.mb.YTPlayer.min.js\"></script>
<script src=\"js/main.js\"></script>

<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\base.html.twig");
    }
}
