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

/* front/home.html.twig */
class __TwigTemplate_2b29ae7350b79eba946d2eddd3a37b1e94ad7ba2f810e95ca4c16ac791b043a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/home.html.twig", 1);
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

        echo " Home
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
        echo "
    <!--// Main Banner //-->
    <div id=\"mainbanner\">
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li>
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Kickoff Sports Theme</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore<br>mque laudantium</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/slide2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Fully Responsive Theme</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/slide3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Retina Ready</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--// Main Banner //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <section class=\"pick-event padding-30-topbottom margin-top-minus-40\">
            <div class=\"container\">
                <div class=\"heading\">
                    <h2>Search Match</h2>
                </div>
                <div class=\"form\">
                    <div class=\"cover\">
                        <input type=\"text\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                    <div class=\"cover\">
                        <input type=\"text\">
                        <i class=\"fa fa-calendar\"></i>
                    </div>
                    <div class=\"cover\">
                        <div class=\"dropdown\">
                            <button aria-expanded=\"true\" data-toggle=\"dropdown\" id=\"dropdownMenu1\" type=\"button\" class=\"dropdown-toggle\">
                                Dropdown
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <ul aria-labelledby=\"dropdownMenu1\" role=\"menu\" class=\"dropdown-menu\">
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Action</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Another action</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Something else here</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"cover\">
                        <a class=\"kode-modren-btn thbg-colortwo\">Find Event</a>
                    </div>
                </div>
            </div>
        </section>

        <!--// Page Content //-->
        <section class=\"kode-pagesection padding-30-topbottom bg-white\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"kode-result-list shape-view col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom80\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>Current Match Statistics <span class=\"right\"></span></h2>
                        </div>
                        <div class=\"clear clearfix\"></div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <article>
                                    <span class=\"kode-result-count thbg-colortwo\">3</span>
                                    <div class=\"kode-result-thumb\">
                                        <a href=\"#\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/result-logo1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"kode-result-info\">
                                        <h2><a href=\"#\">Tiburones</a> <span>Win</span></h2>
                                        <ul>
                                            <li>CareaL <span>(17’)</span></li>
                                            <li>Wellington Silva <span>(51’)</span></li>
                                            <li>John gaga <span>(91’)</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class=\"col-md-6\">
                                <article class=\"kode-even\">
                                    <span class=\"kode-result-count thbg-colortwo\">2</span>
                                    <div class=\"kode-result-thumb\">
                                        <a href=\"#\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/result-logo2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"kode-result-info\">
                                        <h2><a href=\"#\">Club DE.C.V</a> <span>Los</span></h2>
                                        <ul>
                                            <li>CareaL <span>(17’)</span></li>
                                            <li>Wellington Silva <span>(51’)</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-sport-section kode-parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top5-bottom10-flat\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Next Match Started In<span class=\"right\"></span></h2>
                        </div>
                        <div class=\"kode-fixer-counter\">
                            <div id=\"kodeCountdown\"></div>
                        </div>
                        <div class=\"kode-team-match\">
                            <ul>
                                <li><a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"home-kode-vs\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">vs</a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            </ul>
                            <div class=\"clearfix\"></div>
                            <span class=\"kode-subtitle\">Cycle Racing, Hockey May 18, 2015 14:30 - 16:00 CAMBRIDGESHIRE-UK</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection top_player_section\" >
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title\"> <h2>Top Player</h2> </div>

                        <div class=\"owl-carousel-team owl-theme kode-team-list next-prev-style\">
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Sergio Ramos</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">View Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Wayne Rooney</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Iker Casillas</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Sergio Ramos</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <div class=\"kd-pagesection project_fact_inline\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <!--// Counter Section //-->
                        <div class=\"kd-counter\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-soccer-ball-o fa-3x\"></i>
                                    <span class=\"word-count\">3586</span>
                                    <small>League Goals</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-users fa-3x\"></i>
                                    <span class=\"word-count\">206</span>
                                    <small>League Players</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-flag fa-3x\"></i>
                                    <span class=\"word-count\">356</span>
                                    <small>League Teams</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-trophy fa-3x\"></i>
                                    <span class=\"word-count\">57</span>
                                    <small>League Awards</small>
                                </li>
                            </ul>
                        </div>
                        <!--// Counter Section //-->

                    </div>

                </div>
            </div>
        </div>

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-next-match-stat\" >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom10\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Match Of The Month<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-4\">

                        <table class=\"kode-table kode-table-v2\">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>w</th>
                                <th>d</th>
                                <th>l</th>
                                <th>pts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Chelsea</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>City Club</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>

                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"kode-inner-fixer\">
                            <div class=\"kode-team-match\">
                                <ul>
                                    <li><a href=\"#\"><img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li class=\"home-kode-vs\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">vs</a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                </ul>
                                <div class=\"clearfix\"></div>
                                <h3>Necca VS Hearld United</h3>
                                <span class=\"kode-subtitle\">Match Between Both Big Teams Starts <br />18, 2015 14:30 - 16:00 CAMBRIDGESHIRE-UK</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--// Page Content //-->


        <section class=\"kode-pagesection kode-video-section kode-parallax kode-gallery-pretty\">
            <div class=\"container\">
                <h2>Running Tutorial Session</h2>
                <a data-gal=\"prettyphoto\" href=\"http://vimeo.com/7874398\"><i class=\"fa fa-play\"></i></a>
                <h4>Trainer : Roy Stone</h4>
                <p>Source: Youtube, Vimeo</p>
            </div>
        </section>

        <!--// Page Content //-->
        <section class=\"kode-pagesection margin-bottom-40\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom10\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Matches Summery<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-8\">

                        <table class=\"kode-table\">
                            <thead>
                            <tr>
                                <th>Upcoming Match</th>
                                <th>Date</th>
                                <th>Venue</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class=\"col-md-4\">

                        <table class=\"kode-table kode-table-v2\">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>w</th>
                                <th>d</th>
                                <th>l</th>
                                <th>pts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Chelsea</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>City Club</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->




        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-parallax kode-dark-overlay kode-modern-expert-blogger\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top-bottom-30\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-white\"><span class=\"left\"></span>Modern Expert Opinion<span class=\"right\"></span></h2>
                        </div>

                        <div class=\"kode-blog-list kode-large-blog\">
                            <ul class=\"row\">

                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/bloggird-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/bloggird-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/bloggird-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <div class=\"kode-align-btn\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">View More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->
        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-matches-gallery\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-bottom-50\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-black\"><span class=\"left\"></span>Our Matches Gallery<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"kode-pagecontent col-md-12\">

                        <div class=\"kode-gallery kode-gallery-pretty\">
                            <ul class=\"row\">
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a data-ral=\"\" href=\"#\"><img src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/gallery-list-1.jpg"), "html", null, true);
        echo "\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class=\"kode-align-btn\"><a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">View More</a></div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->


        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-parallax kode-dark-overlay kode-woo-products-style\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title kode-white\"> <h2>TOp Product</h2> </div>
                        <div class=\"kode-shop-list\">

                            <div class=\"owl-carousel owl-theme\">
                                <div class=\"item\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 673
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
                                </div>
                                <div class=\"item\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 687
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
                                </div>
                                <div class=\"item\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 701
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
                                </div>
                                <div class=\"item\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 715
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
                                </div>
                                <div class=\"item\">
                                    <div class=\"kode-pro-inner\">
                                        <figure><a href=\"#\"><img src=\"";
        // line 729
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
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <div class=\"kode-pagesection padding-top-bottom\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-bottom-50\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-black\"><span class=\"left\"></span>Our Testimonials<span class=\"right\"></span></h2>
                        </div>
                        <!--TESTIMONIAL STYLE 1 START-->
                        <div class=\"kode-testimonials-6\">

                            <ul class=\"bxslider\">
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Jack, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Anna Doe, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Ronaldo, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Anna Doe, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--TESTIMONIAL STYLE 1 END-->
                    </div>
                </div>
            </div>
        </div>

        <!--// Page Content //-->
        <div class=\"kode-pagesection padding-top-bottom\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-partner\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Page Content //-->




    </div>
    <!--// Main Content //-->

    <!--// NewsLatter //-->
    <div class=\"kode-newslatter kode-bg-color\" >
        <span class=\"kode-halfbg thbg-color\"></span>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Subscribe Our Monthly Newsletter</h3>
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
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1033 => 827,  1029 => 826,  1025 => 825,  1021 => 824,  997 => 803,  983 => 792,  969 => 781,  955 => 770,  911 => 729,  894 => 715,  877 => 701,  860 => 687,  843 => 673,  813 => 646,  809 => 645,  801 => 640,  797 => 639,  789 => 634,  785 => 633,  777 => 628,  773 => 627,  765 => 622,  761 => 621,  753 => 616,  749 => 615,  710 => 579,  690 => 562,  670 => 545,  486 => 364,  481 => 362,  336 => 220,  319 => 206,  302 => 192,  285 => 178,  260 => 156,  255 => 154,  219 => 121,  200 => 105,  127 => 35,  112 => 23,  97 => 11,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}
{% block title %} Home
{% endblock %}
{% block body %}

    <!--// Main Banner //-->
    <div id=\"mainbanner\">
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li>
                    <img src=\"{{ asset('fonts/extra-images/slide1.jpg') }}\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Kickoff Sports Theme</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore<br>mque laudantium</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('fonts/extra-images/slide2.jpg') }}\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Fully Responsive Theme</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('fonts/extra-images/slide3.jpg') }}\" alt=\"\" />
                    <div class=\"container\">
                        <div class=\"kode-caption\">
                            <h2>Retina Ready</h2>
                            <div class=\"clearfix\"></div>
                            <p>Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore</p>
                            <div class=\"clearfix\"></div>
                            <a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">Read More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--// Main Banner //-->

    <!--// Main Content //-->
    <div class=\"kode-content\">

        <section class=\"pick-event padding-30-topbottom margin-top-minus-40\">
            <div class=\"container\">
                <div class=\"heading\">
                    <h2>Search Match</h2>
                </div>
                <div class=\"form\">
                    <div class=\"cover\">
                        <input type=\"text\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                    <div class=\"cover\">
                        <input type=\"text\">
                        <i class=\"fa fa-calendar\"></i>
                    </div>
                    <div class=\"cover\">
                        <div class=\"dropdown\">
                            <button aria-expanded=\"true\" data-toggle=\"dropdown\" id=\"dropdownMenu1\" type=\"button\" class=\"dropdown-toggle\">
                                Dropdown
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <ul aria-labelledby=\"dropdownMenu1\" role=\"menu\" class=\"dropdown-menu\">
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Action</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Another action</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Something else here</a></li>
                                <li role=\"presentation\"><a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"cover\">
                        <a class=\"kode-modren-btn thbg-colortwo\">Find Event</a>
                    </div>
                </div>
            </div>
        </section>

        <!--// Page Content //-->
        <section class=\"kode-pagesection padding-30-topbottom bg-white\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"kode-result-list shape-view col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom80\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>Current Match Statistics <span class=\"right\"></span></h2>
                        </div>
                        <div class=\"clear clearfix\"></div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <article>
                                    <span class=\"kode-result-count thbg-colortwo\">3</span>
                                    <div class=\"kode-result-thumb\">
                                        <a href=\"#\"><img src=\"{{ asset('fonts/extra-images/result-logo1.png') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"kode-result-info\">
                                        <h2><a href=\"#\">Tiburones</a> <span>Win</span></h2>
                                        <ul>
                                            <li>CareaL <span>(17’)</span></li>
                                            <li>Wellington Silva <span>(51’)</span></li>
                                            <li>John gaga <span>(91’)</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class=\"col-md-6\">
                                <article class=\"kode-even\">
                                    <span class=\"kode-result-count thbg-colortwo\">2</span>
                                    <div class=\"kode-result-thumb\">
                                        <a href=\"#\"><img src=\"{{ asset('fonts/extra-images/result-logo2.png') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"kode-result-info\">
                                        <h2><a href=\"#\">Club DE.C.V</a> <span>Los</span></h2>
                                        <ul>
                                            <li>CareaL <span>(17’)</span></li>
                                            <li>Wellington Silva <span>(51’)</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-sport-section kode-parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top5-bottom10-flat\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Next Match Started In<span class=\"right\"></span></h2>
                        </div>
                        <div class=\"kode-fixer-counter\">
                            <div id=\"kodeCountdown\"></div>
                        </div>
                        <div class=\"kode-team-match\">
                            <ul>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/fixer-logo1.png') }}\" alt=\"\"></a></li>
                                <li class=\"home-kode-vs\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">vs</a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/fixer-logo2.png') }}\" alt=\"\"></a></li>
                            </ul>
                            <div class=\"clearfix\"></div>
                            <span class=\"kode-subtitle\">Cycle Racing, Hockey May 18, 2015 14:30 - 16:00 CAMBRIDGESHIRE-UK</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection top_player_section\" >
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title\"> <h2>Top Player</h2> </div>

                        <div class=\"owl-carousel-team owl-theme kode-team-list next-prev-style\">
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"{{ asset('fonts/extra-images/player-1.jpg') }}\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Sergio Ramos</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">View Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Wayne Rooney</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"{{ asset('fonts/extra-images/player-3.jpg') }}\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Iker Casillas</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"item\">
                                <figure><a href=\"#\" class=\"kode-team-thumb\"><img src=\"{{ asset('fonts/extra-images/player-4.jpg') }}\" alt=\"\"></a>
                                    <figcaption>
                                        <ul class=\"kode-team-network\">
                                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                        </ul>
                                        <div class=\"clearfix\"></div>
                                        <h2><a href=\"#\">Sergio Ramos</a></h2>
                                        <a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">Vew Detail</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <div class=\"kd-pagesection project_fact_inline\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <!--// Counter Section //-->
                        <div class=\"kd-counter\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-soccer-ball-o fa-3x\"></i>
                                    <span class=\"word-count\">3586</span>
                                    <small>League Goals</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-users fa-3x\"></i>
                                    <span class=\"word-count\">206</span>
                                    <small>League Players</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-flag fa-3x\"></i>
                                    <span class=\"word-count\">356</span>
                                    <small>League Teams</small>
                                </li>
                                <li class=\"col-md-3\">
                                    <i class=\"fa fa-trophy fa-3x\"></i>
                                    <span class=\"word-count\">57</span>
                                    <small>League Awards</small>
                                </li>
                            </ul>
                        </div>
                        <!--// Counter Section //-->

                    </div>

                </div>
            </div>
        </div>

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-next-match-stat\" >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom10\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Match Of The Month<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-4\">

                        <table class=\"kode-table kode-table-v2\">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>w</th>
                                <th>d</th>
                                <th>l</th>
                                <th>pts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Chelsea</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>City Club</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>

                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"kode-inner-fixer\">
                            <div class=\"kode-team-match\">
                                <ul>
                                    <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/fixer-logo1.png') }}\" alt=\"\"></a></li>
                                    <li class=\"home-kode-vs\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">vs</a></li>
                                    <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/fixer-logo2.png') }}\" alt=\"\"></a></li>
                                </ul>
                                <div class=\"clearfix\"></div>
                                <h3>Necca VS Hearld United</h3>
                                <span class=\"kode-subtitle\">Match Between Both Big Teams Starts <br />18, 2015 14:30 - 16:00 CAMBRIDGESHIRE-UK</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--// Page Content //-->


        <section class=\"kode-pagesection kode-video-section kode-parallax kode-gallery-pretty\">
            <div class=\"container\">
                <h2>Running Tutorial Session</h2>
                <a data-gal=\"prettyphoto\" href=\"http://vimeo.com/7874398\"><i class=\"fa fa-play\"></i></a>
                <h4>Trainer : Roy Stone</h4>
                <p>Source: Youtube, Vimeo</p>
            </div>
        </section>

        <!--// Page Content //-->
        <section class=\"kode-pagesection margin-bottom-40\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top30-bottom10\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2><span class=\"left\"></span>Matches Summery<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-8\">

                        <table class=\"kode-table\">
                            <thead>
                            <tr>
                                <th>Upcoming Match</th>
                                <th>Date</th>
                                <th>Venue</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            <tr>
                                <td>City Club <span>VS</span>Soccer Queen</td>
                                <td>18/05/2015  14:30 - 16:00</td>
                                <td>Wembley Stadium</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class=\"col-md-4\">

                        <table class=\"kode-table kode-table-v2\">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>w</th>
                                <th>d</th>
                                <th>l</th>
                                <th>pts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Chelsea</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>City Club</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Aresenal</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Soccer</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>Real Madrid</td>
                                <td>11</td>
                                <td>02</td>
                                <td>00</td>
                                <td>42</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->




        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-parallax kode-dark-overlay kode-modern-expert-blogger\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-top-bottom-30\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-white\"><span class=\"left\"></span>Modern Expert Opinion<span class=\"right\"></span></h2>
                        </div>

                        <div class=\"kode-blog-list kode-large-blog\">
                            <ul class=\"row\">

                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/bloggird-1.jpg') }}\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/bloggird-2.jpg') }}\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"col-md-4\">
                                    <div class=\"kode-time-zoon\">
                                        <time datetime=\"2008-02-14 20:00\">07 <span>may</span></time>
                                        <h5><a href=\"#\">Sed ut perspiciatis unde omnisiste natus error</a></h5>
                                    </div>
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/bloggird-3.jpg') }}\" alt=\"\"></a></figure>
                                    <div class=\"kode-blog-info\">
                                        <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat. Ut veniam, quis..</p>
                                        <a href=\"#\" class=\"kode-blog-btn\">Read More</a>
                                        <div class=\"clearfix\"></div>
                                        <ul class=\"kode-team-network\">
                                            <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                            <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <div class=\"kode-align-btn\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">View More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->
        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-matches-gallery\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-bottom-50\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-black\"><span class=\"left\"></span>Our Matches Gallery<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"kode-pagecontent col-md-12\">

                        <div class=\"kode-gallery kode-gallery-pretty\">
                            <ul class=\"row\">
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-3.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-4.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-5.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-4\">
                                    <figure><a data-ral=\"\" href=\"#\"><img src=\"{{ asset('fonts/extra-images/gallery-list-6.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a data-gal=\"prettyphoto\" href=\"{{ asset('fonts/extra-images/gallery-list-1.jpg') }}\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class=\"kode-align-btn\"><a class=\"kode-modren-btn thbg-colortwo\" href=\"#\">View More</a></div>
                </div>
            </div>
        </section>
        <!--// Page Content //-->


        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-parallax kode-dark-overlay kode-woo-products-style\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title kode-white\"> <h2>TOp Product</h2> </div>
                        <div class=\"kode-shop-list\">

                            <div class=\"owl-carousel owl-theme\">
                                <div class=\"item\">
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
                                </div>
                                <div class=\"item\">
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
                                </div>
                                <div class=\"item\">
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
                                </div>
                                <div class=\"item\">
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
                                </div>
                                <div class=\"item\">
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
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <div class=\"kode-pagesection padding-top-bottom\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 margin-bottom-50\">
                            <p>Is Your Team Ready For Next Match!</p>
                            <h2 class=\"color-black\"><span class=\"left\"></span>Our Testimonials<span class=\"right\"></span></h2>
                        </div>
                        <!--TESTIMONIAL STYLE 1 START-->
                        <div class=\"kode-testimonials-6\">

                            <ul class=\"bxslider\">
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Jack, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"{{ asset('fonts/extra-images/testimonial-1.jpg') }}\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Anna Doe, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"{{ asset('fonts/extra-images/testimonial-1.jpg') }}\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Ronaldo, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"{{ asset('fonts/extra-images/testimonial-1.jpg') }}\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"kode-text\">
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                        <div class=\"client-name\">
                                            <h4>Anna Doe, Freelauncer</h4>
                                            <div class=\"kode-thumb\">
                                                <img src=\"{{ asset('fonts/extra-images/testimonial-1.jpg') }}\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--TESTIMONIAL STYLE 1 END-->
                    </div>
                </div>
            </div>
        </div>

        <!--// Page Content //-->
        <div class=\"kode-pagesection padding-top-bottom\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-partner\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/partner-logo2.jpg') }}\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/partner-logo3.jpg') }}\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/partner-logo4.jpg') }}\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/partner-logo5.jpg') }}\" alt=\"\"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Page Content //-->




    </div>
    <!--// Main Content //-->

    <!--// NewsLatter //-->
    <div class=\"kode-newslatter kode-bg-color\" >
        <span class=\"kode-halfbg thbg-color\"></span>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Subscribe Our Monthly Newsletter</h3>
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

{% endblock %}", "front/home.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\home.html.twig");
    }
}
