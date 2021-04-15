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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from kodeforest.com/html/kickoff/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 14:35:48 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Css Files -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/themetypo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/widget.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!--// Wrapper //-->
<div class=\"kode-wrapper\">
    <header id=\"mainheader\" class=\"kode-header-absolute\">

        <!--// TopBaar //-->
        <div class=\"kode-topbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 kode_bg_white\">
                        <ul class=\"top_slider_bxslider\">

                            <li><span class=\"kode-barinfo\"><strong>Latest News : </strong> Welcome visitor you can Login or Create an Account</span></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6\">
                        <ul class=\"kode-userinfo\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> Cart</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> My Account</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModalTwo\"><i class=\"fa fa-user-plus\"></i> Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// TopBaar //-->

        <div class=\"header-8\">
            <div class=\"container\">
                <!--NAVIGATION START-->
                <div class=\"kode-navigation pull-left\">
                    <ul>
                        <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/home"), "html", null, true);
        echo "\">Home</a>

                        </li>
                        <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/aboutus"), "html", null, true);
        echo "\">About Us</a></li>
                        <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/terrain"), "html", null, true);
        echo "\">Terrain</a>

                        </li>
                        <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/fixture"), "html", null, true);
        echo "\">Fixture</a>

                        </li>


                    </ul>
                </div>
                <!--NAVIGATION END-->
                <!--LOGO START-->
                <div class=\"logo\">
                    <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/home"), "html", null, true);
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
                <!--LOGO END-->
                <!--NAVIGATION START-->
                <div class=\"kode-navigation\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equipe"), "html", null, true);
        echo "\">Team </a>

                        </li>

                        <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/shop"), "html", null, true);
        echo "\">Shop</a>

                        </li>
                        <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/reservation"), "html", null, true);
        echo "\">Reservation</a>

                        </li>
                        <li class=\"last\"><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/contact"), "html", null, true);
        echo "\">contact</a>

                        </li>
                    </ul>
                </div>
                <!--NAVIGATION END-->
                <nav class=\"navbar navbar-default\">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"index.html\">Home</a>
                                <ul class=\"children\">
                                    <li><a href=\"blog-large.html\">Boxed Layout</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team-info.html\">About Us</a></li>
                            <li><a href=\"#\">Blog</a>
                                <ul class=\"children\">
                                    <li><a href=\"bloggrid-v2.html\">Blog Grid</a></li>
                                    <li><a href=\"blog-large.html\">Blog Large</a></li>
                                    <li><a href=\"blog-detail.html\">Blog Detail</a>
                                        <ul class=\"children\">
                                            <li><a href=\"blog-detail-soundcloud.html\">Single SoundCloud</a></li>
                                            <li><a href=\"blog-detail-video.html\">Single Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"fixer-list.html\">Fixture</a>
                                <ul class=\"children\">
                                    <li><a href=\"fixer_list.html\">All Matches</a></li>
                                    <li><a href=\"fixer_list_view.html\">List View</a></li>
                                    <li><a href=\"fixture_full_view.html\">Full View</a></li>
                                    <li><a href=\"fixture-detail.html\">Fixture detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"gallery-two.html\">Our Gallery</a>
                                <ul class=\"children\">
                                    <li><a href=\"gallery-two.html\">Gallery 2 Column</a></li>
                                    <li><a href=\"gallery-three.html\">Gallery 3 Column</a></li>
                                    <li><a href=\"gallery-four.html\">Gallery 4 Column</a></li>
                                    <li><a href=\"gallery-full-width.html\">Gallery Full Width</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">Team & Player</a>
                                <ul class=\"children\">
                                    <li><a href=\"player-list.html\">Players</a></li>
                                    <li><a href=\"player-detail.html\">Player detail</a></li>
                                    <li><a href=\"team-detail.html\">Team Detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Shop</a>
                                <ul class=\"children\">
                                    <li><a href=\"product-list.html\">Product list</a></li>
                                    <li><a href=\"product-detail.html\">Product Detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">ShortCode</a>
                                <ul class=\"children\">
                                    <li><a href=\"accordian.html\">Accordion</a></li>
                                    <li><a href=\"button.html\">Button</a></li>
                                    <li><a href=\"frame.html\">Image Frame</a></li>
                                    <li><a href=\"faq.html\">Faq</a></li>
                                    <li><a href=\"list.html\">List</a></li>
                                    <li><a href=\"map.html\">Map</a></li>
                                    <li><a href=\"message.html\">Message</a></li>
                                    <li><a href=\"sepratore.html\">Separator</a></li>
                                    <li><a href=\"skills.html\">Skills</a></li>
                                    <li><a href=\"table.html\">Table</a></li>
                                    <li><a href=\"tabs.html\">Tabs</a></li>
                                    <li><a href=\"skills.html\">Skills</a></li>
                                    <li><a href=\"video.html\">Video</a></li>
                                </ul>
                            </li>
                            <li class=\"last\"><a href=\"#\">contact Us</a>
                                <ul class=\"children\">
                                    <li><a href=\"contact-us.html\">Contact V1</a></li>
                                    <li><a href=\"contact-ustwo.html\">Contact V2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>
        </div>
    </header>

    <!--// Sub Header //-->

    <!--// Main Content //-->





        ";
        // line 207
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "


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
    <!--// NewsLatter //-->

    <footer id=\"footer1\">
        <!--Footer Medium-->
        <div class=\"footer-medium\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"about-widget\">
                            <h3>About Kickoff</h3>
                            <ul class=\"kode-form-list\">
                                <li><i class=\"fa fa-home\"></i> <p><strong>Address:</strong> 805 omnis iste natus error.</p></li>
                                <li><i class=\"fa fa-phone\"></i> <p><strong>Phone:</strong> 111 8756 22  777 4456 112</p></li>
                                <li><i class=\"fa fa-envelope-o\"></i> <p><strong>Email:</strong> Info@sportyleague.com</p></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"widget widget-flickr\">
                            <h3>Flickr</h3>
                            <ul>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-1.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-3.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-1.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-3.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-1.jpg"), "html", null, true);
        echo "\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"contact-us-widget\">
                            <h3>Connect with us</h3>
                            <p>Follow us to stay in the loop on what’s<br>
                                Sed ut perspiciatis unde omnis iste natus<br> error sit Sed ut perspiciatis unde omnis iste<br> natus error sit</p>
                            <ul class=\"social-links1\">
                                <li>
                                    <a href=\"#\" class=\"tw-bg1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"fb-bg1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"youtube-bg1\"><i class=\"fa fa-youtube\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin-bg1\"><i class=\"fa fa-linkedin\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tw-bg1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"fb-bg1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Medium End-->


    </footer>
    <!--// Contact Footer //-->

    <div class=\"kode-bottom-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p>©2015 KickOff. All Right Reserved</p>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#\" id=\"kode-topbtn\" class=\"thbg-colortwo\"><i class=\"fa fa-angle-up\"></i></a>
                </div>
            </div>
        </div>      </div>
    <div class=\"clearfix clear\"></div>
</div>
<!--// Wrapper //-->

<!-- jQuery (necessary for JavaScript plugins) -->

<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.accordion.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.countdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/jquery.prettyphoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/kode_pp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/js/functions.js"), "html", null, true);
        echo "\"></script>

</body>

<!-- Mirrored from kodeforest.com/html/kickoff/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 14:35:48 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 208
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 208,  522 => 207,  504 => 9,  488 => 327,  484 => 326,  480 => 325,  476 => 324,  472 => 323,  468 => 322,  464 => 321,  460 => 320,  456 => 319,  452 => 318,  448 => 317,  388 => 260,  384 => 259,  380 => 258,  376 => 257,  372 => 256,  368 => 255,  364 => 254,  360 => 253,  314 => 209,  312 => 207,  201 => 99,  195 => 96,  189 => 93,  182 => 89,  170 => 82,  157 => 72,  151 => 69,  147 => 68,  141 => 65,  94 => 21,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from kodeforest.com/html/kickoff/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 14:35:48 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>

    <!-- Css Files -->
    <link href=\"{{ asset('fonts/css/bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/font-awesome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/themetypo.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/widget.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/color.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/flexslider.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/css/owl.carousel.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('fonts/css/responsive.css') }}\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!--// Wrapper //-->
<div class=\"kode-wrapper\">
    <header id=\"mainheader\" class=\"kode-header-absolute\">

        <!--// TopBaar //-->
        <div class=\"kode-topbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 kode_bg_white\">
                        <ul class=\"top_slider_bxslider\">

                            <li><span class=\"kode-barinfo\"><strong>Latest News : </strong> Welcome visitor you can Login or Create an Account</span></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6\">
                        <ul class=\"kode-userinfo\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> Cart</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> My Account</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModalTwo\"><i class=\"fa fa-user-plus\"></i> Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// TopBaar //-->

        <div class=\"header-8\">
            <div class=\"container\">
                <!--NAVIGATION START-->
                <div class=\"kode-navigation pull-left\">
                    <ul>
                        <li><a href=\"{{ asset('/home') }}\">Home</a>

                        </li>
                        <li><a href=\"{{ asset('/aboutus') }}\">About Us</a></li>
                        <li><a href=\"{{ asset('/terrain') }}\">Terrain</a>

                        </li>
                        <li><a href=\"{{ asset('/fixture') }}\">Fixture</a>

                        </li>


                    </ul>
                </div>
                <!--NAVIGATION END-->
                <!--LOGO START-->
                <div class=\"logo\">
                    <a href=\"{{ asset('/home') }}\" class=\"logo\"><img src=\"{{ asset('fonts/images/logo.png') }}\" alt=\"\"></a>
                </div>
                <!--LOGO END-->
                <!--NAVIGATION START-->
                <div class=\"kode-navigation\">
                    <ul>
                        <li>
                            <a href=\"{{ asset('/equipe') }}\">Team </a>

                        </li>

                        <li><a href=\"{{ asset('/shop') }}\">Shop</a>

                        </li>
                        <li><a href=\"{{ asset('/reservation') }}\">Reservation</a>

                        </li>
                        <li class=\"last\"><a href=\"{{ asset('/contact') }}\">contact</a>

                        </li>
                    </ul>
                </div>
                <!--NAVIGATION END-->
                <nav class=\"navbar navbar-default\">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"index.html\">Home</a>
                                <ul class=\"children\">
                                    <li><a href=\"blog-large.html\">Boxed Layout</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team-info.html\">About Us</a></li>
                            <li><a href=\"#\">Blog</a>
                                <ul class=\"children\">
                                    <li><a href=\"bloggrid-v2.html\">Blog Grid</a></li>
                                    <li><a href=\"blog-large.html\">Blog Large</a></li>
                                    <li><a href=\"blog-detail.html\">Blog Detail</a>
                                        <ul class=\"children\">
                                            <li><a href=\"blog-detail-soundcloud.html\">Single SoundCloud</a></li>
                                            <li><a href=\"blog-detail-video.html\">Single Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"fixer-list.html\">Fixture</a>
                                <ul class=\"children\">
                                    <li><a href=\"fixer_list.html\">All Matches</a></li>
                                    <li><a href=\"fixer_list_view.html\">List View</a></li>
                                    <li><a href=\"fixture_full_view.html\">Full View</a></li>
                                    <li><a href=\"fixture-detail.html\">Fixture detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"gallery-two.html\">Our Gallery</a>
                                <ul class=\"children\">
                                    <li><a href=\"gallery-two.html\">Gallery 2 Column</a></li>
                                    <li><a href=\"gallery-three.html\">Gallery 3 Column</a></li>
                                    <li><a href=\"gallery-four.html\">Gallery 4 Column</a></li>
                                    <li><a href=\"gallery-full-width.html\">Gallery Full Width</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">Team & Player</a>
                                <ul class=\"children\">
                                    <li><a href=\"player-list.html\">Players</a></li>
                                    <li><a href=\"player-detail.html\">Player detail</a></li>
                                    <li><a href=\"team-detail.html\">Team Detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Shop</a>
                                <ul class=\"children\">
                                    <li><a href=\"product-list.html\">Product list</a></li>
                                    <li><a href=\"product-detail.html\">Product Detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">ShortCode</a>
                                <ul class=\"children\">
                                    <li><a href=\"accordian.html\">Accordion</a></li>
                                    <li><a href=\"button.html\">Button</a></li>
                                    <li><a href=\"frame.html\">Image Frame</a></li>
                                    <li><a href=\"faq.html\">Faq</a></li>
                                    <li><a href=\"list.html\">List</a></li>
                                    <li><a href=\"map.html\">Map</a></li>
                                    <li><a href=\"message.html\">Message</a></li>
                                    <li><a href=\"sepratore.html\">Separator</a></li>
                                    <li><a href=\"skills.html\">Skills</a></li>
                                    <li><a href=\"table.html\">Table</a></li>
                                    <li><a href=\"tabs.html\">Tabs</a></li>
                                    <li><a href=\"skills.html\">Skills</a></li>
                                    <li><a href=\"video.html\">Video</a></li>
                                </ul>
                            </li>
                            <li class=\"last\"><a href=\"#\">contact Us</a>
                                <ul class=\"children\">
                                    <li><a href=\"contact-us.html\">Contact V1</a></li>
                                    <li><a href=\"contact-ustwo.html\">Contact V2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>
        </div>
    </header>

    <!--// Sub Header //-->

    <!--// Main Content //-->





        {% block body %}
        {% endblock %}



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
    <!--// NewsLatter //-->

    <footer id=\"footer1\">
        <!--Footer Medium-->
        <div class=\"footer-medium\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"about-widget\">
                            <h3>About Kickoff</h3>
                            <ul class=\"kode-form-list\">
                                <li><i class=\"fa fa-home\"></i> <p><strong>Address:</strong> 805 omnis iste natus error.</p></li>
                                <li><i class=\"fa fa-phone\"></i> <p><strong>Phone:</strong> 111 8756 22  777 4456 112</p></li>
                                <li><i class=\"fa fa-envelope-o\"></i> <p><strong>Email:</strong> Info@sportyleague.com</p></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"widget widget-flickr\">
                            <h3>Flickr</h3>
                            <ul>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-1.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-3.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-1.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-3.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-1.jpg') }}\"></a></li>
                                <li><a href=\"#\"><img alt=\"\" src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"contact-us-widget\">
                            <h3>Connect with us</h3>
                            <p>Follow us to stay in the loop on what’s<br>
                                Sed ut perspiciatis unde omnis iste natus<br> error sit Sed ut perspiciatis unde omnis iste<br> natus error sit</p>
                            <ul class=\"social-links1\">
                                <li>
                                    <a href=\"#\" class=\"tw-bg1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"fb-bg1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"youtube-bg1\"><i class=\"fa fa-youtube\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin-bg1\"><i class=\"fa fa-linkedin\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tw-bg1\"><i class=\"fa fa-twitter\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"fb-bg1\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Medium End-->


    </footer>
    <!--// Contact Footer //-->

    <div class=\"kode-bottom-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p>©2015 KickOff. All Right Reserved</p>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#\" id=\"kode-topbtn\" class=\"thbg-colortwo\"><i class=\"fa fa-angle-up\"></i></a>
                </div>
            </div>
        </div>      </div>
    <div class=\"clearfix clear\"></div>
</div>
<!--// Wrapper //-->

<!-- jQuery (necessary for JavaScript plugins) -->

<script src=\"{{ asset('fonts/js/jquery.js') }}\"></script>
<script src=\"{{ asset('fonts/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('fonts/js/jquery.flexslider.js') }}\"></script>
<script src=\"{{ asset('fonts/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('fonts/js/jquery.accordion.js') }}\"></script>
<script src=\"{{ asset('fonts/js/jquery.countdown.js') }}\"></script>
<script src=\"{{ asset('fonts/js/jquery.bxslider.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('fonts/js/bootstrap-progressbar.js') }}\"></script>
<script src=\"{{ asset('fonts/js/jquery.prettyphoto.js') }}\"></script>
<script src=\"{{ asset('fonts/js/kode_pp.js') }}\"></script>
<script src=\"{{ asset('fonts/js/functions.js') }}\"></script>

</body>

<!-- Mirrored from kodeforest.com/html/kickoff/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 14:35:48 GMT -->
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\base.html.twig");
    }
}
