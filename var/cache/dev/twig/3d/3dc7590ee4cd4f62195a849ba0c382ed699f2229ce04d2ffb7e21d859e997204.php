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
class __TwigTemplate_7d06a6e3972ce848c9523e41110542a745f8dd2b4e67f28ac2f978b7ecf57597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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

<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <meta charset=\"UTF-8\">
        <script>
            (function() {

                'use strict';

                var \$searchView = \$('.menu-search-container');
                var \$menu = \$('.menu-mac, .menu-iPad, .menu-iPhone, .menu-watch, .menu-tv, .menu-support, .menu-search, .menu-store');
                var \$fadeScreen = \$('.fade-screen');

                \$('li.menu-search a, .fade-screen, .menu-search-close').on('click', function(e) {

                    \$searchView.toggleClass('active');

                    setTimeout(function(){
                        \$searchView.children().find('input').focus();
                    }, 1100);

                    \$fadeScreen.toggleClass('visible');
                    \$menu.removeClass('is-closed');
                    \$menu.toggleClass('hidden');

                    e.preventDefault();
                });

                \$('.fade-screen,.menu-search-close').on('click', function(e) {
                    \$menu.toggleClass('is-closed');
                    e.preventDefault();
                });

            }())
        </script>
        <style>
            a{
                text-decoration: none;
            }
            // ----------------------------
            // BASE STYLES
            // ----------------------------

               .vh {
                   border: 0;
                   clip: rect(0 0 0 0);
                   height: 1px;
                   margin: -1px;
                   overflow: hidden;
                   padding: 0;
                   position: absolute;
                   width: 1px;
               }

            .fade-screen {
                background: rgba(0,0,0,0.2);
                visibility: hidden;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }

            // ----------------------------
            // ANIMATIONS
            // ----------------------------

            @keyframes specialFadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.8);
                }
                to {
                    opacity: 1;
                }
            }

            .specialFadeIn {
                animation-name: specialFadeIn;
            }

            @keyframes specialFadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                    transform: scale(0.8);
                }
            }

            .specialFadeOut {
                animation-name: specialFadeOut;
            }

            @keyframes specialSlideInRight {
                from {
                    transform: translate3d(10%, 0, 0);
                    visibility: visible;
                }

                to {
                    transform: translate3d(0, 0, 0);
                }
            }

            .specialSlideInRight {
                animation-name: specialSlideInRight;
            }

            @keyframes specialFadeInRight {
                from {
                    opacity: 0;
                    transform: translate3d(10%, 0, 0);
                }

                to {
                    opacity: 1;
                    transform: none;
                }
            }

            .spceialFadeInRight {
                animation-name: specialFadeInRight;
            }

            .menu-search-container.active {
                display: block;
                animation-name: specialFadeOut;
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .visible {
                visibility: visible;
            }

            .hidden {
                display: none;
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .menu {
            ul li {
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }
            }

            .menu-mac {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 30ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 245ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-iPad {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 70ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 210ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-iPhone {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 100ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 170ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-watch {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 130ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 130ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-tv {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 170ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 100ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-support {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 210ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 70ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }


            .menu-search {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 245ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 30ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }


            .menu-store {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-search-input  {
                animation-name: specialFadeInRight;
                animation-duration: 400ms;
                animation-fill-mode: both;
                animation-delay: 350ms;
            }

            .search-sub-menu h3 {
                animation-name: specialFadeInRight;
                animation-duration: 700ms;
                animation-fill-mode: both;
            }

            .search-sub-menu ul li {
                animation-name: specialFadeInRight;
                animation-duration: 500ms;
                animation-fill-mode: both;

            &:nth-child(1) {
                 animation-delay: 0ms;
             }
            &:nth-child(2) {
                 animation-delay: 30ms;
             }
            &:nth-child(3) {
                 animation-delay: 50ms;
             }
            &:nth-child(4) {
                 animation-delay: 70ms;
             }
            &:nth-child(5) {
                 animation-delay: 90ms;
             }

            }

            // ----------------------------
            // NAV
            // ----------------------------

               nav {
                   position: absolute;
                   top: 0;
                   right: 0;
                   left: 0;
                   height: 48px;
                   min-width: 1024px;
                   background: rgba(0,0,0,0.8);
                   font-size: 18px;
                   z-index: 2;
               }

            .menu-container {
                position: relative;
                margin: 0 auto;
                margin-top: -5px;
                max-width: 980px;
                padding: 0 22px;

            ul {
                list-style: none;
            }

            ul li {
                display: inline-block;
                text-align: center;
                width: auto;
                margin-right: 76px;

            &:last-child {
                 margin-right: 0;
             }
            }

            ul li a {
                display: inline-block;
                font-family: -apple-system, BlinkMacSystemFont,
                \"Segoe UI\", \"Roboto\", \"Oxygen\", \"Ubuntu\", \"Cantarell\",
                \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\",
                sans-serif;
                text-decoration: none;
                color: #fff;
                font-weight: 100;
                font-size: 16px;
                float: left;

            &:hover {
                 color: #969696;
             }
            }

            &.menu-apple {
                 background-repeat: no-repeat;
                 width: 20px;
             }
            }

            .apple-icon {
                font-size: 20px;
            }

            // ----------------------------
            // NAV Search Form
            // ----------------------------

               .menu-search-container {
                   display: none;
                   position: absolute;
                   top: 0;
                   left: 20.6667%;
                   width: 56.66667%;
                   z-index: 2;

            input {
                background-color: transparent;
                border: none;
                width: 80%;
                font-size: 16px;
                outline: none;
                color: #fff;
            }

            a {
                color: #fff;

            &:first-child {
                 display: block;
                 float: left;
                 padding-right: 10px;
             }
            }

            &.active {
                 display: block;
             }
            }

            .menu-search-close {
                position: absolute;
                right: -183px;
                top: 0;
            }

            // Sub Menu
               .search-sub-menu {
                   background: #fff;
                   width: 100%;
                   margin-top: 14px;
                   color: #999;
                   font-weight: 100;
                   padding: 24px 0 15px;
                   z-index: 1;

            h3 {
                font-size: 12px;
                font-weight: 100;
                margin-top: 0;
                padding-left: 28px;
            }

            ul {
                margin: 0;
                padding: 0;
                width: 100%;

            li {
                display: block;
                text-align: left;
                padding-bottom: 10px;
                margin: 0;
                text-indent: 50px;

            a {
                font-size: 14px;
                color: #999;
                width: 100%;
                padding-top: 5px;
                padding-bottom: 5px;

            &:hover {
                 background-color: #f2f2f2;
                 color: #3392de;
             }

            &:first-child {
                 float: none;
                 padding-right: 0;
             }
            }
            }

            }

            }
        </style>
    </head>
    <body>
    <header>
        <nav>
            <div class=\"menu-container\">
                <!-- Menu -->
                <ul class=\"menu\">
                    <li class=\"menu-apple\">
                        <a href=\"#\">
                            <i class=\"fa fa-apple apple-icon\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"menu-mac\">
                        <a href=\"#\">
                            <span>Mac</span>
                        </a>
                    </li>
                    <li class=\"menu-iPad\">
                        <a href=\"#\">
                            <span>iPad</span>
                        </a>
                    </li>
                    <li class=\"menu-iPhone\">
                        <a href=\"#\">
                            <span>iPhone</span>
                        </a>
                    </li>
                    <li class=\"menu-watch\">
                        <a href=\"#\">
                            <span>Watch</span>
                        </a>
                    </li>
                    <li class=\"menu-tv\">
                        <a href=\"#\">
                            <span>TV</span>
                        </a>
                    </li>
                    <li class=\"menu-support\">
                        <a href=\"#\">
                            <span>Support</span>
                        </a>
                    </li>
                    <li class=\"menu-search\">
                        <a href=\"#\">
                            <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"menu-store\">
                        <a href=\"#\">
                            <i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                </ul>

                <!-- Search -->
                <div class=\"menu-search-container\">
                    <div class=\"menu-search-input\">
                        <form action=\"\">
                            <a href=\"#\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </a>
                            <input class=\"menu-search-input\" type=\"text\" aria-label=\"Search apple.com\" placeholder=\"Search apple.com\" autocorrect=\"off\" autocapitalize=\"off\" autocomplete=\"off\" spellcheck=\"false\">
                        </form>
                    </div>
                    <a class=\"menu-search-close\" href=\"#\">
                        <i class=\"fa fa-close\" aria-hidden=\"true\"></i>
                    </a>
                    <div class=\"search-sub-menu\">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href=\"#\">Find a store</a></li>
                            <li><a href=\"#\">Accessories</a></li>
                            <li><a href=\"#\">iPod</a></li>
                            <li><a href=\"#\">iOS</a></li>
                            <li><a href=\"#\">Gift Cards</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <div class=\"fade-screen\"></div>
    <!--*****************************************-->
    ";
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 564, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 564));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 565
            echo "        <div class=\"alert alert-success\">
            ";
            // line 566
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 569, $this->source); })()), "user", [], "any", false, false, false, 569)) {
            // line 570
            echo "        <div style=\"color:orangered;text-align: center;\"><p><h1>hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 570, $this->source); })()), "user", [], "any", false, false, false, 570), "getFirstName", [], "any", false, false, false, 570), "html", null, true);
            echo " </h1></p></div>
      <div style=\"text-decoration-color:green;\">
        <a href=\"";
            // line 572
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user");
            echo "\"> modifier mon profile</a>
        <a href=\"";
            // line 573
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor");
            echo "\"> Editor</a>
        <a href=\"";
            // line 574
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
            echo "\"> Game</a>
        <a href=\"";
            // line 575
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> logout</a>
      </div>
        ";
            // line 577
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "user", [], "any", false, false, false, 577), "getRoles", [], "any", false, false, false, 577), [0 => "ROLE_ADMIN"])) {
                // line 578
                echo "            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor");
                echo "\"> Editor</a>
            <a href=\"";
                // line 579
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
                echo "\"> Game</a>
            <a href=\"";
                // line 580
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"> logout</a>
            <a href=\"";
                // line 581
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_game");
                echo "\"> create new game</a>
            <a href=\"";
                // line 582
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
                echo "\"> create new user</a>
            <a href=\"";
                // line 583
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_editor");
                echo "\"> create new editor </a>

            <a href=\"";
                // line 585
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
                echo "\"> users list</a>

        ";
            }
            // line 588
            echo "


    ";
        }
        // line 592
        echo "

    ";
        // line 594
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 594, $this->source); })()), "user", [], "any", false, false, false, 594)) {
            // line 595
            echo "        <div style=\"color:orangered;text-align: center;\"><p><h1>Welcome</h1></p></div>
        <a href=\"";
            // line 596
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
            echo "\"> Game</a>
        <a href=\"";
            // line 597
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor");
            echo "\"> editor</a>
        <a href=\"";
            // line 598
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> login </a>
        <a href=\"";
            // line 599
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
            echo "\"> sign up</a>




    ";
        }
        // line 605
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 607
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 608
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 605
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 606
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 607
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  760 => 607,  750 => 606,  740 => 605,  728 => 608,  725 => 607,  722 => 605,  713 => 599,  709 => 598,  705 => 597,  701 => 596,  698 => 595,  696 => 594,  692 => 592,  686 => 588,  680 => 585,  675 => 583,  671 => 582,  667 => 581,  663 => 580,  659 => 579,  654 => 578,  652 => 577,  647 => 575,  643 => 574,  639 => 573,  635 => 572,  629 => 570,  626 => 569,  617 => 566,  614 => 565,  610 => 564,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <meta charset=\"UTF-8\">
        <script>
            (function() {

                'use strict';

                var \$searchView = \$('.menu-search-container');
                var \$menu = \$('.menu-mac, .menu-iPad, .menu-iPhone, .menu-watch, .menu-tv, .menu-support, .menu-search, .menu-store');
                var \$fadeScreen = \$('.fade-screen');

                \$('li.menu-search a, .fade-screen, .menu-search-close').on('click', function(e) {

                    \$searchView.toggleClass('active');

                    setTimeout(function(){
                        \$searchView.children().find('input').focus();
                    }, 1100);

                    \$fadeScreen.toggleClass('visible');
                    \$menu.removeClass('is-closed');
                    \$menu.toggleClass('hidden');

                    e.preventDefault();
                });

                \$('.fade-screen,.menu-search-close').on('click', function(e) {
                    \$menu.toggleClass('is-closed');
                    e.preventDefault();
                });

            }())
        </script>
        <style>
            a{
                text-decoration: none;
            }
            // ----------------------------
            // BASE STYLES
            // ----------------------------

               .vh {
                   border: 0;
                   clip: rect(0 0 0 0);
                   height: 1px;
                   margin: -1px;
                   overflow: hidden;
                   padding: 0;
                   position: absolute;
                   width: 1px;
               }

            .fade-screen {
                background: rgba(0,0,0,0.2);
                visibility: hidden;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }

            // ----------------------------
            // ANIMATIONS
            // ----------------------------

            @keyframes specialFadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.8);
                }
                to {
                    opacity: 1;
                }
            }

            .specialFadeIn {
                animation-name: specialFadeIn;
            }

            @keyframes specialFadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                    transform: scale(0.8);
                }
            }

            .specialFadeOut {
                animation-name: specialFadeOut;
            }

            @keyframes specialSlideInRight {
                from {
                    transform: translate3d(10%, 0, 0);
                    visibility: visible;
                }

                to {
                    transform: translate3d(0, 0, 0);
                }
            }

            .specialSlideInRight {
                animation-name: specialSlideInRight;
            }

            @keyframes specialFadeInRight {
                from {
                    opacity: 0;
                    transform: translate3d(10%, 0, 0);
                }

                to {
                    opacity: 1;
                    transform: none;
                }
            }

            .spceialFadeInRight {
                animation-name: specialFadeInRight;
            }

            .menu-search-container.active {
                display: block;
                animation-name: specialFadeOut;
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .visible {
                visibility: visible;
            }

            .hidden {
                display: none;
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .menu {
            ul li {
                transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            }
            }

            .menu-mac {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 30ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 245ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-iPad {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 70ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 210ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-iPhone {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 100ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 170ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-watch {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 130ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 130ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-tv {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 170ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 100ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-support {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 210ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 70ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }


            .menu-search {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-delay: 245ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-delay: 30ms;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }


            .menu-store {
            &.is-closed {
                 animation-name: specialFadeIn;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }

            &.hidden {
                 animation-name: specialFadeOut;
                 animation-duration: 400ms;
                 animation-fill-mode: both;
             }
            }

            .menu-search-input  {
                animation-name: specialFadeInRight;
                animation-duration: 400ms;
                animation-fill-mode: both;
                animation-delay: 350ms;
            }

            .search-sub-menu h3 {
                animation-name: specialFadeInRight;
                animation-duration: 700ms;
                animation-fill-mode: both;
            }

            .search-sub-menu ul li {
                animation-name: specialFadeInRight;
                animation-duration: 500ms;
                animation-fill-mode: both;

            &:nth-child(1) {
                 animation-delay: 0ms;
             }
            &:nth-child(2) {
                 animation-delay: 30ms;
             }
            &:nth-child(3) {
                 animation-delay: 50ms;
             }
            &:nth-child(4) {
                 animation-delay: 70ms;
             }
            &:nth-child(5) {
                 animation-delay: 90ms;
             }

            }

            // ----------------------------
            // NAV
            // ----------------------------

               nav {
                   position: absolute;
                   top: 0;
                   right: 0;
                   left: 0;
                   height: 48px;
                   min-width: 1024px;
                   background: rgba(0,0,0,0.8);
                   font-size: 18px;
                   z-index: 2;
               }

            .menu-container {
                position: relative;
                margin: 0 auto;
                margin-top: -5px;
                max-width: 980px;
                padding: 0 22px;

            ul {
                list-style: none;
            }

            ul li {
                display: inline-block;
                text-align: center;
                width: auto;
                margin-right: 76px;

            &:last-child {
                 margin-right: 0;
             }
            }

            ul li a {
                display: inline-block;
                font-family: -apple-system, BlinkMacSystemFont,
                \"Segoe UI\", \"Roboto\", \"Oxygen\", \"Ubuntu\", \"Cantarell\",
                \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\",
                sans-serif;
                text-decoration: none;
                color: #fff;
                font-weight: 100;
                font-size: 16px;
                float: left;

            &:hover {
                 color: #969696;
             }
            }

            &.menu-apple {
                 background-repeat: no-repeat;
                 width: 20px;
             }
            }

            .apple-icon {
                font-size: 20px;
            }

            // ----------------------------
            // NAV Search Form
            // ----------------------------

               .menu-search-container {
                   display: none;
                   position: absolute;
                   top: 0;
                   left: 20.6667%;
                   width: 56.66667%;
                   z-index: 2;

            input {
                background-color: transparent;
                border: none;
                width: 80%;
                font-size: 16px;
                outline: none;
                color: #fff;
            }

            a {
                color: #fff;

            &:first-child {
                 display: block;
                 float: left;
                 padding-right: 10px;
             }
            }

            &.active {
                 display: block;
             }
            }

            .menu-search-close {
                position: absolute;
                right: -183px;
                top: 0;
            }

            // Sub Menu
               .search-sub-menu {
                   background: #fff;
                   width: 100%;
                   margin-top: 14px;
                   color: #999;
                   font-weight: 100;
                   padding: 24px 0 15px;
                   z-index: 1;

            h3 {
                font-size: 12px;
                font-weight: 100;
                margin-top: 0;
                padding-left: 28px;
            }

            ul {
                margin: 0;
                padding: 0;
                width: 100%;

            li {
                display: block;
                text-align: left;
                padding-bottom: 10px;
                margin: 0;
                text-indent: 50px;

            a {
                font-size: 14px;
                color: #999;
                width: 100%;
                padding-top: 5px;
                padding-bottom: 5px;

            &:hover {
                 background-color: #f2f2f2;
                 color: #3392de;
             }

            &:first-child {
                 float: none;
                 padding-right: 0;
             }
            }
            }

            }

            }
        </style>
    </head>
    <body>
    <header>
        <nav>
            <div class=\"menu-container\">
                <!-- Menu -->
                <ul class=\"menu\">
                    <li class=\"menu-apple\">
                        <a href=\"#\">
                            <i class=\"fa fa-apple apple-icon\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"menu-mac\">
                        <a href=\"#\">
                            <span>Mac</span>
                        </a>
                    </li>
                    <li class=\"menu-iPad\">
                        <a href=\"#\">
                            <span>iPad</span>
                        </a>
                    </li>
                    <li class=\"menu-iPhone\">
                        <a href=\"#\">
                            <span>iPhone</span>
                        </a>
                    </li>
                    <li class=\"menu-watch\">
                        <a href=\"#\">
                            <span>Watch</span>
                        </a>
                    </li>
                    <li class=\"menu-tv\">
                        <a href=\"#\">
                            <span>TV</span>
                        </a>
                    </li>
                    <li class=\"menu-support\">
                        <a href=\"#\">
                            <span>Support</span>
                        </a>
                    </li>
                    <li class=\"menu-search\">
                        <a href=\"#\">
                            <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"menu-store\">
                        <a href=\"#\">
                            <i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                </ul>

                <!-- Search -->
                <div class=\"menu-search-container\">
                    <div class=\"menu-search-input\">
                        <form action=\"\">
                            <a href=\"#\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </a>
                            <input class=\"menu-search-input\" type=\"text\" aria-label=\"Search apple.com\" placeholder=\"Search apple.com\" autocorrect=\"off\" autocapitalize=\"off\" autocomplete=\"off\" spellcheck=\"false\">
                        </form>
                    </div>
                    <a class=\"menu-search-close\" href=\"#\">
                        <i class=\"fa fa-close\" aria-hidden=\"true\"></i>
                    </a>
                    <div class=\"search-sub-menu\">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href=\"#\">Find a store</a></li>
                            <li><a href=\"#\">Accessories</a></li>
                            <li><a href=\"#\">iPod</a></li>
                            <li><a href=\"#\">iOS</a></li>
                            <li><a href=\"#\">Gift Cards</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <div class=\"fade-screen\"></div>
    <!--*****************************************-->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% if app.user %}
        <div style=\"color:orangered;text-align: center;\"><p><h1>hello {{ app.user.getFirstName }} </h1></p></div>
      <div style=\"text-decoration-color:green;\">
        <a href=\"{{ path('update_user') }}\"> modifier mon profile</a>
        <a href=\"{{ path('editor') }}\"> Editor</a>
        <a href=\"{{ path('game') }}\"> Game</a>
        <a href=\"{{ path('app_logout') }}\"> logout</a>
      </div>
        {% if app.user.getRoles == ['ROLE_ADMIN'] %}
            <a href=\"{{ path('editor') }}\"> Editor</a>
            <a href=\"{{ path('game') }}\"> Game</a>
            <a href=\"{{ path('app_logout') }}\"> logout</a>
            <a href=\"{{ path('create_game') }}\"> create new game</a>
            <a href=\"{{ path('form') }}\"> create new user</a>
            <a href=\"{{ path('create_editor') }}\"> create new editor </a>

            <a href=\"{{ path('user') }}\"> users list</a>

        {% endif %}



    {% endif %}


    {% if not app.user %}
        <div style=\"color:orangered;text-align: center;\"><p><h1>Welcome</h1></p></div>
        <a href=\"{{ path('game') }}\"> Game</a>
        <a href=\"{{ path('editor') }}\"> editor</a>
        <a href=\"{{ path('app_login') }}\"> login </a>
        <a href=\"{{ path('form') }}\"> sign up</a>




    {% endif %}
        {% block body %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/project/templates/base.html.twig");
    }
}
