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

/* front/equipe.html.twig */
class __TwigTemplate_b349a27e8d73e536e2aec3987dfcc22cf71ce82df209dc748b897244982ab6e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/equipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/equipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/equipe.html.twig", 1);
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

        echo " Equipe
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
                    <h1>Team Detail</h1>
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

                    <div class=\"kode-pagecontent col-md-9\">

                        <div class=\"row\">
                            <div class=\"col-md-5\"><a href=\"#\" class=\"kode-player-thumb\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-detail-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                            <div class=\"col-md-7\">



                                <table class=\"kode-table\">
                                    <caption>Profile</caption>
                                    <tbody>
                                    <tr>
                                        <td>Born:</td>
                                        <td>February 14, 1986</td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td>Spain</td>
                                    </tr>
                                    <tr>
                                        <td>Squad Number:</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Club:</td>
                                        <td>AC Millen</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club(s):</td>
                                        <td>Lille, Newcastle United</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class=\"kode-detail-element\">
                            <h2>Manchester United</h2>
                            <ul class=\"kode-team-network\">
                                <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                            </ul>
                        </div>
                        <p>Mauris vel varius felis. Duis feugiat interdum nibh, nec consequat erat dapibus sit amet. Ut at nibh varius, dignissim magna non, interdum urna. Maecenas enean..</p>
                        <div class=\"team-detail-table-ap padding-bottom-30-flat\">
                            <table class=\"kode-table\">
                                <thead>
                                <tr>
                                    <th>Members</th>
                                    <th>Join</th>
                                    <th>Appearance</th>
                                    <th>Goal</th>
                                    <th>Cards Shown</th>
                                    <th>Passing Accuracy</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Prem Lge</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Europe Lge</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Fa Cup</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Lge Cup</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>C. Shield</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <!--Team Members -->
                        <div class=\"kode-section-title\"> <h2>Members</h2> </div>
                        <div class=\"kode-gallery\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li> <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/player-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                        </div>
                        <div class=\"kode-editor\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <blockquote>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem </blockquote>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modification..</p>
                        </div>

                        <div id=\"koderespond\">
                            <div class=\"kode-section-title\"> <h2>Sergio Ramos PHOTOS & VIDEOS</h2> </div>
                            <form>
                                <p><input type=\"text\" placeholder=\"Name *\"></p>
                                <p><input type=\"text\" placeholder=\"Phone *\"></p>
                                <p><input type=\"text\" placeholder=\"Email *\"></p>
                                <p class=\"kd-textarea\"><textarea placeholder=\"add your comment\"></textarea></p>
                                <p class=\"kd-button\"><input type=\"button\" value=\"Submit comments\" class=\"thbg-color\"></p>
                            </form>
                        </div>

                    </div>

                    <aside class=\"kode-pagesidebar col-md-3\">

                        <div class=\"widget tab-widget\">

                            <!-- Nav tabs -->
                            <ul class=\"widget-tabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Live</a></li>
                                <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Result</a></li>
                                <li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Fixture</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Bristol City <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Soccer <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Bristol City <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Soccer <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Balenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div><div class=\"widget kode-recent-blog\">
                            <div class=\"kode-widget-title\"> <h2>Recent Blog Post</h2> </div>
                            <ul>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/recentblog-widget1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Never Give Up On Yourself</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/recentblog-widget2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Hopefull Players Always</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/recentblog-widget3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Standalone Quality Shoes</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                        <div class=\"widget widget-recent-news\">
                            <div class=\"kode-widget-title\"> <h2>Recent News</h2> </div>
                            <ul>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">25</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">30</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">15</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class=\"widget widget_categories\">
                            <div class=\"kode-widget-title\"> <h2>CATEGORIES</h2> </div>
                            <ul>
                                <li><a href=\"#\">Premier League</a> (18)</li>
                                <li><a href=\"#\">FA Cup</a> (11)</li>
                                <li><a href=\"#\">Europe League</a> (07)</li>
                                <li><a href=\"#\">C. Shields</a> (04)</li>
                            </ul>
                        </div>

                        <div class=\"widget kode-twitter-widget\">

                            <div class=\"twitter-info\">
                                <h6>Sporty League On Twiter</h6>
                                <span>Tweets for list by Sportyleague</span>
                                <i class=\"fa fa-twitter\"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/twitter-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/twitter-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/twitter-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/twitter-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/twitter-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class=\"widget widget-gallery\">
                            <div class=\"kode-widget-title\"> <h2>Gallery</h2> </div>
                            <ul>
                                <li><a href=\"#\"><img src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/widgetgallery-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            </ul>
                        </div>

                    </aside>

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
        return "front/equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 479,  627 => 478,  623 => 477,  619 => 476,  615 => 475,  611 => 474,  595 => 461,  585 => 454,  575 => 447,  565 => 440,  555 => 433,  478 => 359,  464 => 348,  450 => 337,  318 => 208,  309 => 202,  300 => 196,  291 => 190,  283 => 185,  274 => 179,  265 => 173,  256 => 167,  120 => 34,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}
{% block title %} Equipe
{% endblock %}
{% block body %}
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Team Detail</h1>
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

                    <div class=\"kode-pagecontent col-md-9\">

                        <div class=\"row\">
                            <div class=\"col-md-5\"><a href=\"#\" class=\"kode-player-thumb\"><img src=\"{{ asset('fonts/extra-images/player-detail-1.jpg') }}\" alt=\"\"></a></div>
                            <div class=\"col-md-7\">



                                <table class=\"kode-table\">
                                    <caption>Profile</caption>
                                    <tbody>
                                    <tr>
                                        <td>Born:</td>
                                        <td>February 14, 1986</td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td>Spain</td>
                                    </tr>
                                    <tr>
                                        <td>Squad Number:</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Club:</td>
                                        <td>AC Millen</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>Defender</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club(s):</td>
                                        <td>Lille, Newcastle United</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class=\"kode-detail-element\">
                            <h2>Manchester United</h2>
                            <ul class=\"kode-team-network\">
                                <li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
                            </ul>
                        </div>
                        <p>Mauris vel varius felis. Duis feugiat interdum nibh, nec consequat erat dapibus sit amet. Ut at nibh varius, dignissim magna non, interdum urna. Maecenas enean..</p>
                        <div class=\"team-detail-table-ap padding-bottom-30-flat\">
                            <table class=\"kode-table\">
                                <thead>
                                <tr>
                                    <th>Members</th>
                                    <th>Join</th>
                                    <th>Appearance</th>
                                    <th>Goal</th>
                                    <th>Cards Shown</th>
                                    <th>Passing Accuracy</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Prem Lge</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Europe Lge</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Fa Cup</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Lge Cup</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>C. Shield</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>2014-2015</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>06</td>
                                    <td>100%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <!--Team Members -->
                        <div class=\"kode-section-title\"> <h2>Members</h2> </div>
                        <div class=\"kode-gallery\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-1.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-3.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li> <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-1.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                                <li class=\"col-md-3\">
                                    <figure><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/player-2.jpg') }}\" alt=\"\"></a>
                                        <figcaption><a href=\"#\" class=\"kode-gallery-hover thbg-color\"><i class=\"fa fa-plus\"></i></a></figcaption>
                                    </figure>

                                </li>
                            </ul>
                        </div>
                        <div class=\"kode-editor\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <blockquote>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem </blockquote>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modification..</p>
                        </div>

                        <div id=\"koderespond\">
                            <div class=\"kode-section-title\"> <h2>Sergio Ramos PHOTOS & VIDEOS</h2> </div>
                            <form>
                                <p><input type=\"text\" placeholder=\"Name *\"></p>
                                <p><input type=\"text\" placeholder=\"Phone *\"></p>
                                <p><input type=\"text\" placeholder=\"Email *\"></p>
                                <p class=\"kd-textarea\"><textarea placeholder=\"add your comment\"></textarea></p>
                                <p class=\"kd-button\"><input type=\"button\" value=\"Submit comments\" class=\"thbg-color\"></p>
                            </form>
                        </div>

                    </div>

                    <aside class=\"kode-pagesidebar col-md-3\">

                        <div class=\"widget tab-widget\">

                            <!-- Nav tabs -->
                            <ul class=\"widget-tabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Live</a></li>
                                <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Result</a></li>
                                <li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Fixture</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Bristol City <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Soccer <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Bristol City <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Soccer <small>1</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Valenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                                    <ul class=\"match-widget\">
                                        <li>
                                            <div class=\"kode-cell\">
                                                <span>Balenciaca <small>2</small></span>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span class=\"kode-vs\">vs</span>
                                                <small>(91)</small>
                                            </div>
                                            <div class=\"kode-cell\">
                                                <span>Real Madrid <small>1</small></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div><div class=\"widget kode-recent-blog\">
                            <div class=\"kode-widget-title\"> <h2>Recent Blog Post</h2> </div>
                            <ul>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"{{ asset('fonts/extra-images/recentblog-widget1.jpg') }}\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Never Give Up On Yourself</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"{{ asset('fonts/extra-images/recentblog-widget2.jpg') }}\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Hopefull Players Always</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a class=\"kode-recent-thumb\" href=\"#\"><img src=\"{{ asset('fonts/extra-images/recentblog-widget3.jpg') }}\" alt=\"\"></a>
                                        <figcaption>
                                            <h6><a href=\"#\">Standalone Quality Shoes</a></h6>
                                            <ul>
                                                <li>05 May 2015</li>
                                                <li>by <a href=\"#\">John</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                        <div class=\"widget widget-recent-news\">
                            <div class=\"kode-widget-title\"> <h2>Recent News</h2> </div>
                            <ul>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">25</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">30</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"medium-info\">
                                        <time datetime=\"2008-02-14 20:00\">15</time>
                                        <div class=\"medium-title\">
                                            <h6><a href=\"#\">Sed ut perspiciatis unde omnis iste</a></h6>
                                            <ul class=\"kode-blog-options\">
                                                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> 305</a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-comment\"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class=\"widget widget_categories\">
                            <div class=\"kode-widget-title\"> <h2>CATEGORIES</h2> </div>
                            <ul>
                                <li><a href=\"#\">Premier League</a> (18)</li>
                                <li><a href=\"#\">FA Cup</a> (11)</li>
                                <li><a href=\"#\">Europe League</a> (07)</li>
                                <li><a href=\"#\">C. Shields</a> (04)</li>
                            </ul>
                        </div>

                        <div class=\"widget kode-twitter-widget\">

                            <div class=\"twitter-info\">
                                <h6>Sporty League On Twiter</h6>
                                <span>Tweets for list by Sportyleague</span>
                                <i class=\"fa fa-twitter\"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"{{ asset('fonts/extra-images/twitter-1.jpg') }}\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"{{ asset('fonts/extra-images/twitter-1.jpg') }}\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"{{ asset('fonts/extra-images/twitter-1.jpg') }}\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"{{ asset('fonts/extra-images/twitter-1.jpg') }}\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"tweet-thumb\"><img src=\"{{ asset('fonts/extra-images/twitter-1.jpg') }}\" alt=\"\"></a>
                                    <div class=\"tweet-list\">
                                        <a href=\"#\"><strong class=\"thcolor\">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                                        <span>12 minutes ago</span>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class=\"widget widget-gallery\">
                            <div class=\"kode-widget-title\"> <h2>Gallery</h2> </div>
                            <ul>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-1.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-3.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-3.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/widgetgallery-2.jpg') }}\" alt=\"\"></a></li>
                            </ul>
                        </div>

                    </aside>

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
{% endblock %}", "front/equipe.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\equipe.html.twig");
    }
}
