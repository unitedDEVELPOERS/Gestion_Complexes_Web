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

/* templatesport/ithemeslab.com/sitetemplate/sportzen/demo/index.html */
class __TwigTemplate_12301df568bd83477d2269526b9e20c0512e46c72e4d45896eba1770514ead52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templatesport/ithemeslab.com/sitetemplate/sportzen/demo/index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templatesport/ithemeslab.com/sitetemplate/sportzen/demo/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from ithemeslab.com/sitetemplate/sportzen/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 12:18:40 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Sportzen - Sports club & magazine HTML template</title>
<meta name=\"author\" content=\"iThemesLab\">
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<link rel=\"shortcut icon\" href=\"assets/favicon/favicon.ico\">
<link rel=\"apple-touch-icon\" href=\"assets/favicon/apple-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"assets/favicon/apple-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"assets/favicon/apple-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"assets/favicon/apple-icon-144x144.png\">


<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/owl.carousel.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/animate.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/style.css\">

<link rel=\"stylesheet\" href=\"assets/css/responsive.css\">
<!--[if lt IE 9]>
        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<div class=\"preloader\">
<div class='loader'>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--text'></div>
</div>
</div>


<div class=\"main-container\">

<header>
<div class=\"nav-menu\" id=\"sticky-menu\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-3\">
<div class=\"navbar-header\">
<a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo/logo.png\" alt=\"BEFIT logo\"></a>
<button class=\"navbar-toggler d-md-inlline d-xl-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span class=\"fa fa-bars\"></span>
</button>
</div>
</div>

<div class=\"col-lg-8\">
<nav class=\"navbar navbar-expand-lg\">
<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item dropdown active\">
<a class=\"nav-link dropdown-toggle\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">home</a>
<div class=\"dropdown-menu animation  slideUpIn\">
<a class=\"dropdown-item\" href=\"index.html\">home1</a>
<a class=\"dropdown-item\" href=\"home2.html\">home2</a>
<a class=\"dropdown-item\" href=\"home3.html\">home3</a>
</div>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"clublist.html\">clublist</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link \" href=\"fixtures.html\">fixtures</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"results.html\">results</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"point-table.html\">point table</a>
</li>
<li class=\"nav-item dropdown\">
<a class=\"nav-link dropdown-toggle\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">sports</a>
<div class=\"dropdown-menu animation  slideUpIn\">
<a class=\"dropdown-item\" href=\"sports.html\">sports</a>
<a class=\"dropdown-item\" href=\"sports2.html\">sports 2</a>
<a class=\"dropdown-item\" href=\"single-page.html\">single page</a>
</div>
</li>
<li class=\"nav-item \">
<a class=\"nav-link \" href=\"#\">more</a>
</li>
</ul>
</div>
</nav>
</div>

<div class=\"col-lg-1\">
<ul class=\"navbar-nav\">
<li class=\"nav-item d-none d-lg-inline\">
<div class=\"icon-menu\">
<ul>
<li><a href=\"#\" class=\"search-btn search-box-btn\"><i class=\"fa fa-search\"></i></a></li>
</ul>
</div>
</li>
</ul>
</div>

</div>

</div>
</div>

<div class=\"slider-area owl-carousel\">
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/1.jpg\" alt=\"slider-img\">
<div class=\"sliding-content\">
<h2>2018 fifa <br> worldcup russia</h2>
<div class=\"upcoming\">
<span class=\"is-countdown\"> </span>
<div data-countdown=\"2018/09/01\"></div>
</div>
</div>
</div>
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/2.jpg\" alt=\"slider-img\">
<div class=\"tonight-match\">
<div class=\"sliding-match\">
<h4><a href=\"#\">to night</a></h4>
<ul class=\"match-vs\">
<li><img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\"><span>chelsea</span></li>
<li class=\"vs\">
<h4>vs</h4>
</li>
<li><img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\"><span>arsenal</span></li>
 </ul>
</div>
</div>
</div>
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/3.jpg\" alt=\"slider-img\">
<div class=\"league-content\">
<h2>uefa 2018 <br> champions league</h2>
<div class=\"club-link\">
<a class=\"liverpool\" href=\"#\">liverpool</a>
<a class=\"barcelona\" href=\"#\">barcelona</a>
</div>
<div class=\"upcomming-match d-none d-lg-flex\">
<div class=\"first-match\">
<h4>first match</h4>
<p>villa park</p>
</div>
<div class=\"upcoming\">
<span class=\"is-countdown\"> </span>
<div data-countdown=\"2018/06/01\"></div>
</div>
</div>
</div>
</div>
</div>

</header>


<div class=\"match-schedule-area bg1 parallax-scrl pad90\">
<div class=\"container\">
<div class=\"row\">
<div class=\"schedule-slider owl-carousel\">
<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\" club logo\">
</div>
<span>2 - 0</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>chelsea <span>vs</span> arsenal</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\" club logo\">
</div>
<span>2 - 1</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>everton <span>vs</span> alves</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\" club logo\">
</div>
<span>2 - 0</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>barcelona <span>vs</span> manchester</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

</div>
</div>

</div>
</div>


<div class=\"match-box pad60\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 col-lg-9\">
<div class=\"row\">
<div class=\"col-md-12 col-lg-5\">
<div class=\"video-highlight\">
<div class=\"section-title\">
<h4> <span>highlights</span></h4>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"highlights-bg h-bg1 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
<p>liverpool 2-0 man city</p>
</div>
</div>
<div class=\"col-md-12\">
<div class=\"highlights-bg h-bg2 mini-bg overlay mt30\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
<p>chile vs mexico</p>
</div>
</div>
</div>
</div>
</div>
<div class=\"col-md-12 col-lg-7\">
<div class=\"up-matches\">
<div class=\"section-title xs-mt-50\">
<h4> <span>upcomming matches</span></h4>
</div>
<div class=\"upmatches-slider owl-carousel\">
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/2.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>brazil vs portugal</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/1.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>brazil vs argentina</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/2.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>argentina vs portugal</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"banner-box mt30\">
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/1.png\" alt=\"banner-img\">
<p>philipe</p>
<h4><a href=\"#\">liverpool win Pl<br> Aisa trophy</a> </h4>
</div>
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/2.png\" alt=\"banner-img\">
<p>football</p>
<h4><a href=\"#\">Mesut Ozil back in <br> Arsenal training.</a></h4>
</div>
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/3.png\" alt=\"banner-img\">
<p>26.07.17</p>
<h4><a href=\"#\">Euro Papers: Messi <br> wants Dybala</a></h4>
</div>
</div>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"bnr-img mt30\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr2.png\" alt=\"banner img\">
</div>
</div>
 </div>
<div class=\"row\">
<div class=\"col-md-12 col-lg-7\">
<div class=\"post-area mt60\">
<div class=\"section-title\">
<h4> <span>latest post</span></h4>
</div>
<div class=\"banner-img overlay mt40\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr3.png\" alt=\"banner-img\">
<p>24.07.17</p>
<h4><a href=\"#\">Boro player diagnosed <br> with leukemia</a></h4>
</div>
<div class=\"match-news  mt30\">
<img src=\"assets/images/player/news/1.jpg\" alt=\"player img\">
<div class=\"news\">
<p>24.07.17</p>
<h4><a href=\"#\">Mkhi backs himself to improve.</a></h4>
<p class=\"nws\">Appareat instuctior at. In sadip scing ct. vim an diam consequat deseruisse.</p>
</div>
</div>
<div class=\"match-news  mt30\">
<img src=\"assets/images/player/news/2.jpg\" alt=\"player img\">
<div class=\"news\">
<p>26.07.17</p>
<h4><a href=\"#\">City confirm Mendy signing.</a></h4>
<p class=\"nws\">Appareat instuctior at. In sadip scing ct. vim an diam consequat deseruisse.</p>
</div>
</div>
</div>
</div>
<div class=\"col-md-12 col-lg-5\">

<div class=\"scores-tab mt60\">
<div class=\"section-title\">
<h4> <span>top scores</span></h4>
</div>
<ul class=\"nav nav-pills mt40\" id=\"pills-tab\" role=\"tablist\">
<li class=\"nav-item\">
<a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">world cup</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">uefa</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">la liga</a>
</li>
</ul>
<div class=\"tab-content bnr2 parallax-scrl \" id=\"pills-tabContent\">
<div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
 <p>18 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>16 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>13 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>11 goals</p>
</div>
</div>
</div>
<div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>18 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
<p>15 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>12 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>11 goals</p>
</div>
</div>
</div>
<div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>16 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
<p>15 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>10 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>9 goals</p>
</div>
</div>
</div>
</div>
</div>

<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr4.png\" alt=\"banner img\">
</div>
</div>
</div>
</div>

<div class=\"col-md-12 col-lg-3\">
<div class=\"section-title xs-mt-50\">
<h4> <span>recent results</span></h4>
</div>
<div class=\"score-slider owl-carousel bnr1 mini-bg mt40\">
<div class=\"result-box \">
<h4 class=\"result-heading\">sunday 21st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">sunday 21st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
<span>mexico</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>italy</span>
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
</div>
</div>
</div>
<div class=\"result-box \">
<h4 class=\"result-heading\">tuesday 23st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>1</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>3</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
 <img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>1</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">saturday 28th may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>5</span>
<span>4</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>0</span>
<span>1</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>3</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>5</span>
 <span>4</span>
</div>
<div class=\"club-img\">
<span>mexico</span>
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
</div>
</div>
</div>
<div class=\"result-box \">
<h4 class=\"result-heading\">sunday 21st june 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>5</span>
<span>3</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>2</span>
<span>3</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>5</span>
<span>5</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>4</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>5</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">saturday 28th june 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>3</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>1</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
<span>mexico</span>
</div>
<div class=\"score\">
<span>1</span>
<span>4</span>
</div>
<div class=\"club-img\">
<span>italy</span>
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
</div>
</div>
</div>
</div>
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr1.jpg\" alt=\"banner img\">
</div>
<div class=\"footbal-table-area mt50\">
<div class=\"section-title\">
<h4> <span>football tables</span></h4>
</div>
<div class=\"foot-tbl bnr1 mini-bg mt40\">
<h5>la liga</h5>
<div class=\"point-table\">
<div class=\"team-rank\">
 <img class=\"sml-logo\" src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club-logo\">
<span>1. barcelona</span>
</div>
<span>84</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club-logo\">
<span>2. realbetis</span>
</div>
<span>64</span>
</div>
<div class=\"point-table active\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/alves.png\" alt=\"club-logo\">
<span>3. alves</span>
</div>
<span>74</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club-logo\">
<span>4. arsenal</span>
</div>
<span>70</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club-logo\">
<span>5. sevilla</span>
</div>
<span>68</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club-logo\">
<span>6. getafe</span>
</div>
<span>48</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club-logo\">
<span>7. chelsea</span>
</div>
<span>80</span>
</div>
</div>
</div>
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr5.png\" alt=\"banner img\">
</div>
</div>

</div>

</div>
</div>


<div class=\"blog-news\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12 col-lg-4\">
<div class=\"section-title\">
<h4> <span>transfer news</span></h4>
</div>
<div class=\"trans-news mt20\">
<img class=\"img-fluid full-width mb30 \" src=\"assets/images/blog/1.jpg\" alt=\"blog img\">
<h5 class=\"mb15\"><a href=\"#\">Liverpool Tried to Sing €100M Muller.</a></h5>
<p>Liverpool were willing to sell Philippe Coutinho to Barcelona and had lined up Thomas Muller as his replacement.</p>
</div>
</div>

<div class=\"col-md-12 col-lg-5\">
<div class=\"section-title xs-mt-50\">
<h4> <span>world football</span></h4>
</div>
<div class=\"trans-news mt20\">
<img class=\"img-fluid full-width mb30 \" src=\"assets/images/blog/2.jpg\" alt=\"blog img\">
<h5 class=\"mb15\"><a href=\"#\">European roundup: James Rodríguez inspires Bayern to Bundesliga summit.</a></h5>
<p>Liverpool were willing to sell Philippe Coutinho to Barcelona and had lined up Thomas Muller as his replacement.</p>
</div>
</div>

<div class=\"col-md-12 col-lg-3\">
<div class=\"section-title xs-mt-50\">
<h4> <span>twitter feed</span></h4>
</div>
<div class=\"twit-area mt40\">
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-12 col-lg-9\">
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr6.jpg\" alt=\"banner img\">
</div>
</div>

</div>

</div>
</div>


<div class=\"features-vdo-area pad60\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"section-title\">
<h4> <span>twitter feed</span></h4>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg3 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg4 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg5 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

</div>

</div>
</div>

<footer>
<div class=\"footer-area bg2 parallax overlay2 pad60\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"section-title \">
<h4> <span class=\"wht-txt\">newsletter</span></h4>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"subscribe\">
<form action=\"#\">
<input class=\"name\" type=\"text\" placeholder=\"youremail@domain.com\">
</form>
<a href=\"#\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"footer-box pt60\">
<div class=\"footer-content add\">
<div class=\"footer-logo footer-content\">
<img src=\"assets/images/logo/logo.png\" alt=\"footer logo\">
</div>
<p class=\"pt30\">Lorem ipsum dolor sit amet, ei ubique fastidii vim. Elitr feugait complectitur eu pro, sea audire ponderum eleifend cu. Vim at fuisset.</p>
<div class=\"add-info\">
<p><a href=\"#\"><i class=\"fa fa-map-marker\"></i></a>23 New Design Street, Melbourne</p>
<p><a href=\"#\"><i class=\"fa fa-location-arrow\"></i></a><a href=\"https://ithemeslab.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ee9d9e819c9a94ae89838f8782c08d8183\">[email&#160;protected]</a></p>
<p class=\"mb-0\"><a href=\"#\"><i class=\"fa fa-phone\"></i></a>+880-123-456-7890</p>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>partners</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">fantasy football</a>
<a href=\"#\">super 6</a>
<a href=\"#\">sky Sports Pub Finder</a>
<a href=\"#\">Living for Sport</a>
<a href=\"#\">Planet Rugby</a>
<a href=\"#\">Cricket365</a>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>latest post</h4>
</div>
<div class=\"news-info pt30\">
<div class=\"news-detail nws-bar zoom\">
<img src=\"assets/images/footer/1.jpg\" alt=\"footer img\">
<p>Set yourself the challenge of doing the bare minimum.</p>
</div>
<div class=\"news-detail zoom\">
<img src=\"assets/images/footer/2.jpg\" alt=\"footer img\">
<p>Body fat percentage: what does it really mean?</p>
</div>
<div class=\"news-detail zoom\">
<img src=\"assets/images/footer/3.jpg\" alt=\"footer img\">
<p class=\"mb-0\">This treatment sounded just what I was looking for.</p>
</div>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>football</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">FIFA 2015</a>
<a href=\"#\">Copa 2015</a>
<a href=\"#\">UEFA Europa League</a>
<a href=\"#\">La Liga League</a>
<a href=\"#\">Uro 2014</a>
<a href=\"#\">Africa 2015</a>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>sportz channel</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">Sports Main Event</a>
<a href=\"#\">S. Sports Premier League</a>
<a href=\"#\">Sky Sports Football</a>
<a href=\"#\">Sky Sports Cricket</a>
<a href=\"#\">Sky Sports Golf</a>
<a href=\"#\">Sky Sports Action</a>
</div>
</div>
</div>
</div>

</div>

</div>
</div>
<div class=\"copyright pad30\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<h4>Copyright © 2018 designed by <span>iThemeslab.</span> All Rights Reserved</h4>
</div>

</div>

</div>
</div>
</footer>
</div>


<div id=\"search-popup\" class=\"search-popup\">
<div class=\"close-search theme-btn\"><span class=\"fa fa-close\"></span></div>
<div class=\"popup-inner\">
<div class=\"search-form\">
<form method=\"post\" action=\"https://ithemeslab.com/sitetemplate/sportzen/demo/index.html\">
<div class=\"form-group\">
<fieldset>
<input type=\"search\" class=\"form-control\" name=\"search-input\" value=\"\" placeholder=\"Search Here\" required>
<input type=\"submit\" value=\"Search\" class=\"theme-btn\">
</fieldset>
</div>
</form>
<br>
<h3>Recent Search Keywords</h3>
</div>
</div>
</div>


<div id=\"back-to-top\"></div>



<script data-cfasync=\"false\" src=\"../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script src=\"assets/js/vendor/jquery-3.2.1.min.js\"></script>

<script src=\"assets/js/vendor/jquery-migrate.js\"></script>

<script src=\"assets/js/vendor/popper-1.12.3.min.js\"></script>

<script src=\"assets/js/vendor/bootstrap.min.js\"></script>

<script src=\"assets/js/vendor/owl.carousel.min.js\"></script>

<script src=\"assets/js/vendor/jquery.magnific-popup.min.js\"></script>

<script src=\"assets/js/vendor/countdown.js\"></script>

<script src=\"assets/js/vendor/jquery.counterup.min.js\"></script>
<script src=\"assets/js/vendor/waypoints-jquery.js\"></script>

<script src=\"assets/js/vendor/jquery-ui.min.js\"></script>

<script src=\"assets/js/vendor/wow.min.js\"></script>

<script src=\"assets/js/main.js\"></script>
</body>

<!-- Mirrored from ithemeslab.com/sitetemplate/sportzen/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 12:19:08 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templatesport/ithemeslab.com/sitetemplate/sportzen/demo/index.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from ithemeslab.com/sitetemplate/sportzen/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 12:18:40 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Sportzen - Sports club & magazine HTML template</title>
<meta name=\"author\" content=\"iThemesLab\">
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<link rel=\"shortcut icon\" href=\"assets/favicon/favicon.ico\">
<link rel=\"apple-touch-icon\" href=\"assets/favicon/apple-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"assets/favicon/apple-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"assets/favicon/apple-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"assets/favicon/apple-icon-144x144.png\">


<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/owl.carousel.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/animate.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">

<link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.min.css\">

<link rel=\"stylesheet\" href=\"assets/css/style.css\">

<link rel=\"stylesheet\" href=\"assets/css/responsive.css\">
<!--[if lt IE 9]>
        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<div class=\"preloader\">
<div class='loader'>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--dot'></div>
<div class='loader--text'></div>
</div>
</div>


<div class=\"main-container\">

<header>
<div class=\"nav-menu\" id=\"sticky-menu\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-3\">
<div class=\"navbar-header\">
<a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo/logo.png\" alt=\"BEFIT logo\"></a>
<button class=\"navbar-toggler d-md-inlline d-xl-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span class=\"fa fa-bars\"></span>
</button>
</div>
</div>

<div class=\"col-lg-8\">
<nav class=\"navbar navbar-expand-lg\">
<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item dropdown active\">
<a class=\"nav-link dropdown-toggle\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">home</a>
<div class=\"dropdown-menu animation  slideUpIn\">
<a class=\"dropdown-item\" href=\"index.html\">home1</a>
<a class=\"dropdown-item\" href=\"home2.html\">home2</a>
<a class=\"dropdown-item\" href=\"home3.html\">home3</a>
</div>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"clublist.html\">clublist</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link \" href=\"fixtures.html\">fixtures</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"results.html\">results</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"point-table.html\">point table</a>
</li>
<li class=\"nav-item dropdown\">
<a class=\"nav-link dropdown-toggle\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">sports</a>
<div class=\"dropdown-menu animation  slideUpIn\">
<a class=\"dropdown-item\" href=\"sports.html\">sports</a>
<a class=\"dropdown-item\" href=\"sports2.html\">sports 2</a>
<a class=\"dropdown-item\" href=\"single-page.html\">single page</a>
</div>
</li>
<li class=\"nav-item \">
<a class=\"nav-link \" href=\"#\">more</a>
</li>
</ul>
</div>
</nav>
</div>

<div class=\"col-lg-1\">
<ul class=\"navbar-nav\">
<li class=\"nav-item d-none d-lg-inline\">
<div class=\"icon-menu\">
<ul>
<li><a href=\"#\" class=\"search-btn search-box-btn\"><i class=\"fa fa-search\"></i></a></li>
</ul>
</div>
</li>
</ul>
</div>

</div>

</div>
</div>

<div class=\"slider-area owl-carousel\">
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/1.jpg\" alt=\"slider-img\">
<div class=\"sliding-content\">
<h2>2018 fifa <br> worldcup russia</h2>
<div class=\"upcoming\">
<span class=\"is-countdown\"> </span>
<div data-countdown=\"2018/09/01\"></div>
</div>
</div>
</div>
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/2.jpg\" alt=\"slider-img\">
<div class=\"tonight-match\">
<div class=\"sliding-match\">
<h4><a href=\"#\">to night</a></h4>
<ul class=\"match-vs\">
<li><img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\"><span>chelsea</span></li>
<li class=\"vs\">
<h4>vs</h4>
</li>
<li><img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\"><span>arsenal</span></li>
 </ul>
</div>
</div>
</div>
<div class=\"sliding-item\">
<img src=\"assets/images/slider-show/3.jpg\" alt=\"slider-img\">
<div class=\"league-content\">
<h2>uefa 2018 <br> champions league</h2>
<div class=\"club-link\">
<a class=\"liverpool\" href=\"#\">liverpool</a>
<a class=\"barcelona\" href=\"#\">barcelona</a>
</div>
<div class=\"upcomming-match d-none d-lg-flex\">
<div class=\"first-match\">
<h4>first match</h4>
<p>villa park</p>
</div>
<div class=\"upcoming\">
<span class=\"is-countdown\"> </span>
<div data-countdown=\"2018/06/01\"></div>
</div>
</div>
</div>
</div>
</div>

</header>


<div class=\"match-schedule-area bg1 parallax-scrl pad90\">
<div class=\"container\">
<div class=\"row\">
<div class=\"schedule-slider owl-carousel\">
<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\" club logo\">
</div>
<span>2 - 0</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>chelsea <span>vs</span> arsenal</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\" club logo\">
</div>
<span>2 - 1</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>everton <span>vs</span> alves</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"slider-schedule\">
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/yellow-player.png\" alt=\"player img\">
</div>
<div class=\"club-box\">
<div class=\"playing-schedule\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\" club logo\">
</div>
<span>2 - 0</span>
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\" club logo\">
</div>
</div>
<div class=\"club-name text-center\">
<h4>barcelona <span>vs</span> manchester</h4>
<p>premier leauge</p>
</div>
</div>
<div class=\"player-img\">
<img src=\"assets/images/match-fixtures/red-player.png\" alt=\"player img\">
</div>
</div>
</div>

</div>
</div>

</div>
</div>


<div class=\"match-box pad60\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 col-lg-9\">
<div class=\"row\">
<div class=\"col-md-12 col-lg-5\">
<div class=\"video-highlight\">
<div class=\"section-title\">
<h4> <span>highlights</span></h4>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"highlights-bg h-bg1 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
<p>liverpool 2-0 man city</p>
</div>
</div>
<div class=\"col-md-12\">
<div class=\"highlights-bg h-bg2 mini-bg overlay mt30\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
<p>chile vs mexico</p>
</div>
</div>
</div>
</div>
</div>
<div class=\"col-md-12 col-lg-7\">
<div class=\"up-matches\">
<div class=\"section-title xs-mt-50\">
<h4> <span>upcomming matches</span></h4>
</div>
<div class=\"upmatches-slider owl-carousel\">
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/2.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>brazil vs portugal</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/1.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>brazil vs argentina</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
<div class=\"upmatch-box mt20 overlay\">
<img class=\"full-width \" src=\"assets/images/upcomming-matches/2.jpg\" alt=\"coming match\">
<div class=\"team-date\">
<h5>argentina vs portugal</h5>
<p>20-08-2018 on Star Sports 3 HD</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"banner-box mt30\">
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/1.png\" alt=\"banner-img\">
<p>philipe</p>
<h4><a href=\"#\">liverpool win Pl<br> Aisa trophy</a> </h4>
</div>
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/2.png\" alt=\"banner-img\">
<p>football</p>
<h4><a href=\"#\">Mesut Ozil back in <br> Arsenal training.</a></h4>
</div>
<div class=\"banner-img overlay\">
<img class=\"full-width\" src=\"assets/images/bg-banner/3.png\" alt=\"banner-img\">
<p>26.07.17</p>
<h4><a href=\"#\">Euro Papers: Messi <br> wants Dybala</a></h4>
</div>
</div>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"bnr-img mt30\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr2.png\" alt=\"banner img\">
</div>
</div>
 </div>
<div class=\"row\">
<div class=\"col-md-12 col-lg-7\">
<div class=\"post-area mt60\">
<div class=\"section-title\">
<h4> <span>latest post</span></h4>
</div>
<div class=\"banner-img overlay mt40\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr3.png\" alt=\"banner-img\">
<p>24.07.17</p>
<h4><a href=\"#\">Boro player diagnosed <br> with leukemia</a></h4>
</div>
<div class=\"match-news  mt30\">
<img src=\"assets/images/player/news/1.jpg\" alt=\"player img\">
<div class=\"news\">
<p>24.07.17</p>
<h4><a href=\"#\">Mkhi backs himself to improve.</a></h4>
<p class=\"nws\">Appareat instuctior at. In sadip scing ct. vim an diam consequat deseruisse.</p>
</div>
</div>
<div class=\"match-news  mt30\">
<img src=\"assets/images/player/news/2.jpg\" alt=\"player img\">
<div class=\"news\">
<p>26.07.17</p>
<h4><a href=\"#\">City confirm Mendy signing.</a></h4>
<p class=\"nws\">Appareat instuctior at. In sadip scing ct. vim an diam consequat deseruisse.</p>
</div>
</div>
</div>
</div>
<div class=\"col-md-12 col-lg-5\">

<div class=\"scores-tab mt60\">
<div class=\"section-title\">
<h4> <span>top scores</span></h4>
</div>
<ul class=\"nav nav-pills mt40\" id=\"pills-tab\" role=\"tablist\">
<li class=\"nav-item\">
<a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">world cup</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">uefa</a>
</li>
<li class=\"nav-item\">
<a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">la liga</a>
</li>
</ul>
<div class=\"tab-content bnr2 parallax-scrl \" id=\"pills-tabContent\">
<div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
 <p>18 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>16 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>13 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>11 goals</p>
</div>
</div>
</div>
<div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>18 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
<p>15 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>12 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>11 goals</p>
</div>
</div>
</div>
<div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/2.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>sergio aguero</h4>
<p>16 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/1.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>lionel messi</h4>
<p>15 goals</p>
</div>
</div>
<div class=\"player-box bb-1\">
<img src=\"assets/images/player/4.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>diego forlan</h4>
<p>10 goals</p>
</div>
</div>
<div class=\"player-box\">
<img src=\"assets/images/player/3.jpg\" alt=\"messi\">
<div class=\"player-dtl\">
<h4>philipp lahm</h4>
<p>9 goals</p>
</div>
</div>
</div>
</div>
</div>

<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr4.png\" alt=\"banner img\">
</div>
</div>
</div>
</div>

<div class=\"col-md-12 col-lg-3\">
<div class=\"section-title xs-mt-50\">
<h4> <span>recent results</span></h4>
</div>
<div class=\"score-slider owl-carousel bnr1 mini-bg mt40\">
<div class=\"result-box \">
<h4 class=\"result-heading\">sunday 21st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">sunday 21st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
<span>mexico</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>italy</span>
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
</div>
</div>
</div>
<div class=\"result-box \">
<h4 class=\"result-heading\">tuesday 23st may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>5</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>1</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>3</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
 <img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>1</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">saturday 28th may 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>5</span>
<span>4</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>0</span>
<span>1</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>3</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>5</span>
 <span>4</span>
</div>
<div class=\"club-img\">
<span>mexico</span>
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
</div>
</div>
</div>
<div class=\"result-box \">
<h4 class=\"result-heading\">sunday 21st june 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club logo\">
<span>arsenal </span>
</div>
<div class=\"score\">
<span>5</span>
<span>3</span>
</div>
<div class=\"club-img\">
<span>everton </span>
<img src=\"assets/images/club-logo/logo/everton.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mancity.png\" alt=\"club logo\">
<span>man city</span>
</div>
<div class=\"score\">
<span>2</span>
<span>3</span>
</div>
<div class=\"club-img\">
<span>watford</span>
<img src=\"assets/images/club-logo/logo/watford.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club logo\">
<span>barcelona </span>
</div>
<div class=\"score\">
<span>5</span>
<span>5</span>
</div>
<div class=\"club-img\">
<span>realbetis</span>
<img src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result active\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club logo\">
<span>getafe</span>
</div>
<div class=\"score\">
<span>4</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>sevilla</span>
<img src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/manutd.png\" alt=\"club logo\">
<span>man utd</span>
</div>
<div class=\"score\">
<span>5</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>chelsea </span>
<img src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club logo\">
</div>
</div>
<h4 class=\"result-heading\">saturday 28th june 2018</h4>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/malaga.png\" alt=\"club logo\">
<span>malaga</span>
</div>
<div class=\"score\">
<span>3</span>
<span>2</span>
</div>
<div class=\"club-img\">
<span>alves</span>
<img src=\"assets/images/club-logo/logo/alves.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
<span>italy</span>
</div>
<div class=\"score\">
<span>1</span>
<span>0</span>
</div>
<div class=\"club-img\">
<span>spain</span>
<img src=\"assets/images/club-logo/logo/spain.png\" alt=\"club logo\">
</div>
</div>
<div class=\"club-result mb-0\">
<div class=\"club-img\">
<img src=\"assets/images/club-logo/logo/mexico.png\" alt=\"club logo\">
<span>mexico</span>
</div>
<div class=\"score\">
<span>1</span>
<span>4</span>
</div>
<div class=\"club-img\">
<span>italy</span>
<img src=\"assets/images/club-logo/logo/italy.png\" alt=\"club logo\">
</div>
</div>
</div>
</div>
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr1.jpg\" alt=\"banner img\">
</div>
<div class=\"footbal-table-area mt50\">
<div class=\"section-title\">
<h4> <span>football tables</span></h4>
</div>
<div class=\"foot-tbl bnr1 mini-bg mt40\">
<h5>la liga</h5>
<div class=\"point-table\">
<div class=\"team-rank\">
 <img class=\"sml-logo\" src=\"assets/images/club-logo/logo/barcelona.png\" alt=\"club-logo\">
<span>1. barcelona</span>
</div>
<span>84</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/realbetis.png\" alt=\"club-logo\">
<span>2. realbetis</span>
</div>
<span>64</span>
</div>
<div class=\"point-table active\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/alves.png\" alt=\"club-logo\">
<span>3. alves</span>
</div>
<span>74</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/arsenal.png\" alt=\"club-logo\">
<span>4. arsenal</span>
</div>
<span>70</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/sevilla.png\" alt=\"club-logo\">
<span>5. sevilla</span>
</div>
<span>68</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/getafe.png\" alt=\"club-logo\">
<span>6. getafe</span>
</div>
<span>48</span>
</div>
<div class=\"point-table\">
<div class=\"team-rank\">
<img class=\"sml-logo\" src=\"assets/images/club-logo/logo/chelsea.png\" alt=\"club-logo\">
<span>7. chelsea</span>
</div>
<span>80</span>
</div>
</div>
</div>
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr5.png\" alt=\"banner img\">
</div>
</div>

</div>

</div>
</div>


<div class=\"blog-news\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12 col-lg-4\">
<div class=\"section-title\">
<h4> <span>transfer news</span></h4>
</div>
<div class=\"trans-news mt20\">
<img class=\"img-fluid full-width mb30 \" src=\"assets/images/blog/1.jpg\" alt=\"blog img\">
<h5 class=\"mb15\"><a href=\"#\">Liverpool Tried to Sing €100M Muller.</a></h5>
<p>Liverpool were willing to sell Philippe Coutinho to Barcelona and had lined up Thomas Muller as his replacement.</p>
</div>
</div>

<div class=\"col-md-12 col-lg-5\">
<div class=\"section-title xs-mt-50\">
<h4> <span>world football</span></h4>
</div>
<div class=\"trans-news mt20\">
<img class=\"img-fluid full-width mb30 \" src=\"assets/images/blog/2.jpg\" alt=\"blog img\">
<h5 class=\"mb15\"><a href=\"#\">European roundup: James Rodríguez inspires Bayern to Bundesliga summit.</a></h5>
<p>Liverpool were willing to sell Philippe Coutinho to Barcelona and had lined up Thomas Muller as his replacement.</p>
</div>
</div>

<div class=\"col-md-12 col-lg-3\">
<div class=\"section-title xs-mt-50\">
<h4> <span>twitter feed</span></h4>
</div>
<div class=\"twit-area mt40\">
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
<div class=\"twit-box\">
<img src=\"assets/images/logo/twitter.png\" alt=\"twitter logo\">
<div class=\"twitted\">
<p>barcelona is the best represclub</p>
<a href=\"#\">https://twitter.com/cigacmfcmr</a>
<p>2 hours ago</p>
</div>
</div>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-12 col-lg-9\">
<div class=\"bnr-img mt30 zoom\">
<img class=\"full-width\" src=\"assets/images/bg-banner/bnr6.jpg\" alt=\"banner img\">
</div>
</div>

</div>

</div>
</div>


<div class=\"features-vdo-area pad60\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"section-title\">
<h4> <span>twitter feed</span></h4>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg3 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg4 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"highlights-bg h-bg5 mini-bg overlay mt20\">
<a class=\"mfp-iframe video-play-btn\" href=\"https://www.youtube.com/watch?v=Kbg777rhMrA\"><i class=\"fa fa-play\"></i> <span></span></a>
</div>
</div>

</div>

</div>
</div>

<footer>
<div class=\"footer-area bg2 parallax overlay2 pad60\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"section-title \">
<h4> <span class=\"wht-txt\">newsletter</span></h4>
</div>
</div>

<div class=\"col-md-12\">
<div class=\"subscribe\">
<form action=\"#\">
<input class=\"name\" type=\"text\" placeholder=\"youremail@domain.com\">
</form>
<a href=\"#\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
</div>
</div>

</div>

<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"footer-box pt60\">
<div class=\"footer-content add\">
<div class=\"footer-logo footer-content\">
<img src=\"assets/images/logo/logo.png\" alt=\"footer logo\">
</div>
<p class=\"pt30\">Lorem ipsum dolor sit amet, ei ubique fastidii vim. Elitr feugait complectitur eu pro, sea audire ponderum eleifend cu. Vim at fuisset.</p>
<div class=\"add-info\">
<p><a href=\"#\"><i class=\"fa fa-map-marker\"></i></a>23 New Design Street, Melbourne</p>
<p><a href=\"#\"><i class=\"fa fa-location-arrow\"></i></a><a href=\"https://ithemeslab.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"ee9d9e819c9a94ae89838f8782c08d8183\">[email&#160;protected]</a></p>
<p class=\"mb-0\"><a href=\"#\"><i class=\"fa fa-phone\"></i></a>+880-123-456-7890</p>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>partners</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">fantasy football</a>
<a href=\"#\">super 6</a>
<a href=\"#\">sky Sports Pub Finder</a>
<a href=\"#\">Living for Sport</a>
<a href=\"#\">Planet Rugby</a>
<a href=\"#\">Cricket365</a>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>latest post</h4>
</div>
<div class=\"news-info pt30\">
<div class=\"news-detail nws-bar zoom\">
<img src=\"assets/images/footer/1.jpg\" alt=\"footer img\">
<p>Set yourself the challenge of doing the bare minimum.</p>
</div>
<div class=\"news-detail zoom\">
<img src=\"assets/images/footer/2.jpg\" alt=\"footer img\">
<p>Body fat percentage: what does it really mean?</p>
</div>
<div class=\"news-detail zoom\">
<img src=\"assets/images/footer/3.jpg\" alt=\"footer img\">
<p class=\"mb-0\">This treatment sounded just what I was looking for.</p>
</div>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>football</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">FIFA 2015</a>
<a href=\"#\">Copa 2015</a>
<a href=\"#\">UEFA Europa League</a>
<a href=\"#\">La Liga League</a>
<a href=\"#\">Uro 2014</a>
<a href=\"#\">Africa 2015</a>
</div>
</div>
<div class=\"footer-content\">
<div class=\"ftr-title xs-mt-40\">
<h4>sportz channel</h4>
</div>
<div class=\"partners pt30\">
<a href=\"#\">Sports Main Event</a>
<a href=\"#\">S. Sports Premier League</a>
<a href=\"#\">Sky Sports Football</a>
<a href=\"#\">Sky Sports Cricket</a>
<a href=\"#\">Sky Sports Golf</a>
<a href=\"#\">Sky Sports Action</a>
</div>
</div>
</div>
</div>

</div>

</div>
</div>
<div class=\"copyright pad30\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12\">
<h4>Copyright © 2018 designed by <span>iThemeslab.</span> All Rights Reserved</h4>
</div>

</div>

</div>
</div>
</footer>
</div>


<div id=\"search-popup\" class=\"search-popup\">
<div class=\"close-search theme-btn\"><span class=\"fa fa-close\"></span></div>
<div class=\"popup-inner\">
<div class=\"search-form\">
<form method=\"post\" action=\"https://ithemeslab.com/sitetemplate/sportzen/demo/index.html\">
<div class=\"form-group\">
<fieldset>
<input type=\"search\" class=\"form-control\" name=\"search-input\" value=\"\" placeholder=\"Search Here\" required>
<input type=\"submit\" value=\"Search\" class=\"theme-btn\">
</fieldset>
</div>
</form>
<br>
<h3>Recent Search Keywords</h3>
</div>
</div>
</div>


<div id=\"back-to-top\"></div>



<script data-cfasync=\"false\" src=\"../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script src=\"assets/js/vendor/jquery-3.2.1.min.js\"></script>

<script src=\"assets/js/vendor/jquery-migrate.js\"></script>

<script src=\"assets/js/vendor/popper-1.12.3.min.js\"></script>

<script src=\"assets/js/vendor/bootstrap.min.js\"></script>

<script src=\"assets/js/vendor/owl.carousel.min.js\"></script>

<script src=\"assets/js/vendor/jquery.magnific-popup.min.js\"></script>

<script src=\"assets/js/vendor/countdown.js\"></script>

<script src=\"assets/js/vendor/jquery.counterup.min.js\"></script>
<script src=\"assets/js/vendor/waypoints-jquery.js\"></script>

<script src=\"assets/js/vendor/jquery-ui.min.js\"></script>

<script src=\"assets/js/vendor/wow.min.js\"></script>

<script src=\"assets/js/main.js\"></script>
</body>

<!-- Mirrored from ithemeslab.com/sitetemplate/sportzen/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 12:19:08 GMT -->
</html>
", "templatesport/ithemeslab.com/sitetemplate/sportzen/demo/index.html", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\templatesport\\ithemeslab.com\\sitetemplate\\sportzen\\demo\\index.html");
    }
}
