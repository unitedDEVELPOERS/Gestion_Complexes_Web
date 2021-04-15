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

/* front/fixture.html.twig */
class __TwigTemplate_6b65acf2e8717cf91e00441a01fedca8d9408e5a14f168e5bfd543217b5980c7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/fixture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/fixture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/fixture.html.twig", 1);
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

        echo " fixture
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
                    <h1>Fixture</h1>
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
        <section class=\"kode-pagesection margin-bottom-40\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"kode-pagecontent col-md-8\">

                        <div class=\"kode-inner-fixer margin-none padding-none\">
                            <div class=\"kode-fixer-counter\">
                                <h2 class=\"thbg-color\">Next Match Started In</h2>
                                <div id=\"kodeCountdown\"></div>
                            </div>
                            <div class=\"kode-team-match\">
                                <ul>
                                    <li><a href=\"#\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li class=\"home-kode-vs\"><a href=\"#\" class=\"kode-modren-btn thbg-colortwo\">vs</a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                </ul>
                                <div class=\"clearfix\"></div>
                                <span class=\"kode-subtitle\">Cycle Racing, Hockey May 18, 2015 14:30 - 16:00 CAMBRIDGESHIRE-UK</span>
                            </div>
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
                                <td>Aresenal</td>
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

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title\"> <h2>Upcoming Fixture In May 2015</h2> </div>
                        <div class=\"kode-fixer-list\">
                            <ul class=\"table-head thbg-color\">
                                <li><h5>Upcoming Match</h5></li>
                                <li> <h5>Date & TIme</h5> </li>
                                <li> <h5>Venue</h5> </li>
                                <li class=\"fixer-pagination\"> <a href=\"#\" class=\"fa fa-angle-right\"></a> <a href=\"#\" class=\"fa fa-angle-left\"></a> </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo3.png"), "html", null, true);
        echo "\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo4.png"), "html", null, true);
        echo "\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo3.png"), "html", null, true);
        echo "\" alt=\"\"> Perspiciatis</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo4.png"), "html", null, true);
        echo "\" alt=\"\"> Chelse</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo3.png"), "html", null, true);
        echo "\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo4.png"), "html", null, true);
        echo "\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo3.png"), "html", null, true);
        echo "\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/fixer-logo4.png"), "html", null, true);
        echo "\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

    </div>
    <!--// Main Content //-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/fixture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 201,  309 => 199,  295 => 188,  290 => 186,  276 => 175,  271 => 173,  257 => 162,  252 => 160,  130 => 41,  125 => 39,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}
{% block title %} fixture
{% endblock %}
{% block body %}
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Fixture</h1>
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
        <section class=\"kode-pagesection margin-bottom-40\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"kode-pagecontent col-md-8\">

                        <div class=\"kode-inner-fixer margin-none padding-none\">
                            <div class=\"kode-fixer-counter\">
                                <h2 class=\"thbg-color\">Next Match Started In</h2>
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
                            <tr>
                                <td>Aresenal</td>
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

                    <div class=\"col-md-12\">
                        <div class=\"kode-section-title\"> <h2>Upcoming Fixture In May 2015</h2> </div>
                        <div class=\"kode-fixer-list\">
                            <ul class=\"table-head thbg-color\">
                                <li><h5>Upcoming Match</h5></li>
                                <li> <h5>Date & TIme</h5> </li>
                                <li> <h5>Venue</h5> </li>
                                <li class=\"fixer-pagination\"> <a href=\"#\" class=\"fa fa-angle-right\"></a> <a href=\"#\" class=\"fa fa-angle-left\"></a> </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo3.png') }}\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo4.png') }}\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo3.png') }}\" alt=\"\"> Perspiciatis</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo4.png') }}\" alt=\"\"> Chelse</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo3.png') }}\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo4.png') }}\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                            <ul class=\"table-body\">
                                <li>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo3.png') }}\" alt=\"\"> Aresenal</a>
                                    <span>vs</span>
                                    <a href=\"#\" class=\"list-thumb\"><img src=\"{{ asset('fonts/extra-images/fixer-logo4.png') }}\" alt=\"\"> FC Bayern</a>
                                </li>
                                <li><small>18/05/2015  14:30 - 16:00</small></li>
                                <li><small>Wembley Stadium</small></li>
                                <li class=\"fixer-btn\">
                                    <a href=\"#\">Match Report</a>
                                    <a href=\"#\">Buy A Ticket</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

    </div>
    <!--// Main Content //-->

{% endblock %}", "front/fixture.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\fixture.html.twig");
    }
}
