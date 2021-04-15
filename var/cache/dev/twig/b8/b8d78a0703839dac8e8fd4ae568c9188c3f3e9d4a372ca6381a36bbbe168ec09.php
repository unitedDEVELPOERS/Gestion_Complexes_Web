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

/* front/aboutus.html.twig */
class __TwigTemplate_af8e3ef4f4b87cf206088f8da33c4262283b2c158f4ba6495ce31598e05eb165 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aboutus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aboutus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/aboutus.html.twig", 1);
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

        echo " About Us
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
    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Team</h1>
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

                    <div class=\"col-md-7\">
                        <div class=\"kode-editor\">
                            <h2>SPORTY LEAGUE HISTORY</h2>
                            <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos, appellat elit senserit litteris ubi ne eram voluptate commodo si aliqua occaecat ad quem enim, eram domesticarum fabulas quorum doctrina ut commodo efflorescere aut possumus.</p>
                            <ul class=\"icon-list\">
                                <li><i class=\"fa fa-angle-right\"></i> Voluptate illum dolore ita ipsum</li>
                                <li><i class=\"fa fa-angle-right\"></i> Labore admodum ita multos malis ea nam nam tamen fore amet</li>
                                <li><i class=\"fa fa-angle-right\"></i> Voluptate illum dolore ita ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-5\"><a href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/team-frame1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-team-info-bg padding-top-40 padding-bottom-30\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <div class=\"heading heading-12 kode-white margin-top30-bottom-80\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>team achievement<span class=\"right\"></span></h2>
                        </div>
                        <div class=\"kode-team-timeline\">
                            <span class=\"timeline-circle\"></span>
                            <ul>
                                <li>
                                    <span class=\"kode-timezoon\">2004</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"kode-timezoon\">2005</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"kode-timezoon\">2013</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                            </ul>
                            <span class=\"timeline-circle bottom-circle\"></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->
        <section class=\"kode-pagesection margin-bottom-40 padding-top-40 padding-bottom-0\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 padding-bottom-30\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>League Team Creteria<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"kd-accordion\">
                            <div class=\"accordion\" id=\"section1\">Why Maxio Nam liber tempor cum soluta ? <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                            </div>

                            <div class=\"accordion\" id=\"section2\">Our History Nam liber tempor cum soluta  <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                            </div>

                            <div class=\"accordion\" id=\"section3\">Our History Nam liber tempor cum soluta  <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"kd-tab kd-horizontal-tab\">

                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Flexible</a></li>
                                <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Smart</a></li>
                                <li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Simple</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                    <div class=\"kd-dropcap\"><p>Lorem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequ Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illu dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cu soluta nobis eleifend.</p></div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\"><div class=\"kd-dropcap\"><p>orem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequ Duis autem vel eum iriure dolor in hendrerit in.</p></div></div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                                    <div class=\"kd-dropcap\"><p>Lorem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"kode-pagesection padding-top-bottom-10\">
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
        // line 185
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
        // line 196
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
        // line 207
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
        // line 218
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
        </section>


        <!--// Page Content //-->
        <div class=\"kode-pagesection padding-top-bottom-10\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"kode-partner\">
                            <ul class=\"row\">
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/extra-images/partner-logo4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li class=\"col-md-3\"><a href=\"#\"><img src=\"";
        // line 243
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
        return "front/aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 243,  349 => 242,  345 => 241,  341 => 240,  316 => 218,  302 => 207,  288 => 196,  274 => 185,  129 => 43,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}
{% block title %} About Us
{% endblock %}
{% block body %}

    <div class=\"kode-subheader subheader-height\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1>Team</h1>
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

                    <div class=\"col-md-7\">
                        <div class=\"kode-editor\">
                            <h2>SPORTY LEAGUE HISTORY</h2>
                            <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos, appellat elit senserit litteris ubi ne eram voluptate commodo si aliqua occaecat ad quem enim, eram domesticarum fabulas quorum doctrina ut commodo efflorescere aut possumus.</p>
                            <ul class=\"icon-list\">
                                <li><i class=\"fa fa-angle-right\"></i> Voluptate illum dolore ita ipsum</li>
                                <li><i class=\"fa fa-angle-right\"></i> Labore admodum ita multos malis ea nam nam tamen fore amet</li>
                                <li><i class=\"fa fa-angle-right\"></i> Voluptate illum dolore ita ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-5\"><a href=\"#\"><img src=\"{{ asset('fonts/extra-images/team-frame1.jpg') }}\" alt=\"\"></a></div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->

        <!--// Page Content //-->
        <section class=\"kode-pagesection kode-team-info-bg padding-top-40 padding-bottom-30\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <div class=\"heading heading-12 kode-white margin-top30-bottom-80\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>team achievement<span class=\"right\"></span></h2>
                        </div>
                        <div class=\"kode-team-timeline\">
                            <span class=\"timeline-circle\"></span>
                            <ul>
                                <li>
                                    <span class=\"kode-timezoon\">2004</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"kode-timezoon\">2005</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"kode-timezoon\">2013</span>
                                    <div class=\"timeline-inner\">
                                        <h2>intercontinental cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-inner\">
                                        <h2>FEDERATION cup</h2>
                                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem</p>
                                    </div>
                                </li>
                            </ul>
                            <span class=\"timeline-circle bottom-circle\"></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--// Page Content //-->
        <section class=\"kode-pagesection margin-bottom-40 padding-top-40 padding-bottom-0\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading heading-12 padding-bottom-30\">
                            <p>Devoted to</p>
                            <h2><span class=\"left\"></span>League Team Creteria<span class=\"right\"></span></h2>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"kd-accordion\">
                            <div class=\"accordion\" id=\"section1\">Why Maxio Nam liber tempor cum soluta ? <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                            </div>

                            <div class=\"accordion\" id=\"section2\">Our History Nam liber tempor cum soluta  <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                            </div>

                            <div class=\"accordion\" id=\"section3\">Our History Nam liber tempor cum soluta  <span class=\"fa fa-plus\"></span></div>
                            <div class=\"accordion-content\">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"kd-tab kd-horizontal-tab\">

                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Flexible</a></li>
                                <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Smart</a></li>
                                <li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Simple</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                                    <div class=\"kd-dropcap\"><p>Lorem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequ Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illu dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cu soluta nobis eleifend.</p></div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\"><div class=\"kd-dropcap\"><p>orem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequ Duis autem vel eum iriure dolor in hendrerit in.</p></div></div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                                    <div class=\"kd-dropcap\"><p>Lorem ipsum dolor sit amet, consecteture adipiscing elit, sed diam nonummy hibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enime ad minim venlam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"kode-pagesection padding-top-bottom-10\">
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
        </section>


        <!--// Page Content //-->
        <div class=\"kode-pagesection padding-top-bottom-10\">
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

{% endblock %}
", "front/aboutus.html.twig", "C:\\xampp\\htdocs\\Gestion_Complexes_Web\\templates\\front\\aboutus.html.twig");
    }
}
