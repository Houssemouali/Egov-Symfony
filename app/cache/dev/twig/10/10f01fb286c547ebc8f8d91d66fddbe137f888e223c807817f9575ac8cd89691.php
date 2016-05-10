<?php

/* MyAppUserBundle::layout.html.twig */
class __TwigTemplate_2bebf8ee812e72462c04374384c207fd02ae3e56c3b500517e60e71626e6d109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html 
    xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" class=\"js\">
    <head>
        <title>eGov Tunisie - e-Gouvernement du plan Tunisie Numeric</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <!--Oswald Font -->
                <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\" rel=\"stylesheet\" type=\"text/css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/tooltipster.css"), "html", null, true);
        echo "\">
                        <!-- home slider-->
                        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/pgwslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                            <!-- Font Awesome -->
                            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/font-awesome.min.css"), "html", null, true);
        echo "\">
                                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">\t
                                    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">\t\t
                                        </head>

                                        <body>

                                            <section id=\"header_area\">
                                                <div class=\"wrapper header\">
                                                    <div class=\"clearfix header_top\">
                                                        <div class=\"clearfix logo floatleft\">
                                                            <a href=\"\"><h1><span style=\"color:red;font-weight:bold\">Egov</span> Tunisie</h1></a>
                                                        </div>
                                                        <div class=\"clearfix search floatright\">
                                                            <form>
                                                                <input type=\"text\" placeholder=\"Search\">
                                                                    <input type=\"submit\">
                                                                        </form>
                                                                        </div>
                                                                        </div>
                                                                        <div class=\"header_bottom\">
                                                                            <nav>
                                                                                <ul id=\"nav\">
                                                                                    <li><a href=\"\">Home</a></li>
                                                                                    <li><a href=\"\">Plan</a></li>
                                                                                    <li id=\"dropdown\"><a href=\"\">Services pour les citoyens</a>
                                                                                        <ul>
                                                                                            <li><a href=\"\">Minstere d'interieure</a></li>
                                                                                            <li><a href=\"\">Municipalité</a></li>
                                                                                            <li><a href=\"\">Minstere d'industrie</a></li><!-- path -->
                                                                                            <li><a href=\"\">Poste Tunisienne</a></li>

                                                                                        </ul>
                                                                                    </li>

                                                                                    <li><a href=\"\">About us</a></li>
                                                                                    <li><a href=\"\">Contact us</a></li>
                                                                                </ul><select class=\"selectnav\" id=\"selectnav1\"><option value=\"\">-Navigation-</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">Home</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">Plan</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">Services pour les citoyens</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">- Minstere d'interieure</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">- Municipalité</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">- Minstere d'industrie</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">- Poste Tunisienne</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">About us</option><option value=\"http://localhost/app_dev.php/new\" selected=\"\">Contact us</option></select>
                                                                            </nav>
                                                                        </div>
                                                                        </div>
                                                                        </section>

                                                                        <section id=\"content_area\">
                                                                            <div class=\"clearfix wrapper main_content_area\">

                                                                                <div class=\"clearfix main_content floatleft\">

                                                                                    <div class=\"clearfix slider\">
                                                                                        <div class=\"pgwSlider\"><div>

                                                                                            </div></div>
                                                                                    </div>



                                                                                    <div class=\"pagination\">
                                                                                        <nav>

                                                                                        </nav>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"clearfix sidebar_container floatright\">

                                                                                    <div class=\"clearfix newsletter\">
                                                                                        ";
        // line 84
        echo "                                                                                        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 86
        echo "                                                                                    </div>
                                                                                    <div class=\"clearfix sidebar\">



                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                        <section id=\"footer_top_area\">
                                                                            <div class=\"clearfix wrapper footer_top\">
                                                                                <div class=\"clearfix footer_top_container\">



                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <div>

                                                                        </div>
                                                                        <section id=\"footer_bottom_area\">
                                                                            <div class=\"clearfix wrapper footer_bottom\">
                                                                                <div class=\"clearfix copyright floatleft\">
                                                                                    <p> Copyright © All rights reserved by <span>EGOV.COM</span></p>
                                                                                </div>
                                                                                <div class=\"clearfix social floatright\">
                                                                                    <ul>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-facebook-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-twitter-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-google-plus-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-linkedin-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-tumblr-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-pinterest-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-rss-square\"></i></a></li>
                                                                                        <li><a class=\"tooltip tooltipstered\" href=\"\"><i class=\"fa fa-sitemap\"></i> </a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.0.min.js\"></script>\t
                                                                        <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.tooltipster.min.js"), "html", null, true);
        echo "\"></script>\t\t
                                                                        <script type=\"text/javascript\">
                                                                            \$(document).ready(function () {
                                                                                \$('.tooltip').tooltipster();
                                                                            });
                                                                        </script>
                                                                        <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/selectnav.min.js"), "html", null, true);
        echo "\"></script>
                                                                        <script type=\"text/javascript\">
                                                                            selectnav('nav', {
                                                                                label: '-Navigation-',
                                                                                nested: true,
                                                                                indent: '-'
                                                                            });
                                                                        </script>\t\t
                                                                        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/pgwslider.js"), "html", null, true);
        echo "\"></script>
                                                                        <script type=\"text/javascript\">
                                                                            \$(document).ready(function () {
                                                                                \$('.pgwSlider').pgwSlider({
                                                                                    intervalDuration: 5000

                                                                                });
                                                                            });
                                                                        </script>
                                                                        <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/placeholder_support_IE.js"), "html", null, true);
        echo "\"></script>

                                                                        <!--
                                                                        ---- Clean html template by http://WpFreeware.com
                                                                        ---- This is the main file (index.html).
                                                                        ---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
                                                                        ---- Read License-readme.txt file to learn more.
                                                                        -->\t


                                                                        <div id=\"sfwdt8cb4b7\" class=\"sf-toolbar\" style=\"display: block;\" data-sfurl=\"/app_dev.php/_wdt/8cb4b7\"><!-- START of Symfony Web Debug Toolbar -->
                                                                            <div id=\"sfMiniToolbar-8cb4b7\" class=\"sf-minitoolbar\" data-no-turbolink=\"\" style=\"display: none;\">
                                                                                <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
                                                                                        var elem = this.parentNode;
                                                                                        if (elem.style.display == 'none') {
                                                                                            document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'none';
                                                                                            document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'none';
                                                                                            elem.style.display = 'block';
                                                                                        } else {
                                                                                            document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'block';
                                                                                            document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'block';
                                                                                            elem.style.display = 'none'
                                                                                        }

                                                                                        Sfjs.setPreference('toolbar/displayState', 'block');
                                                                                   \">
                                                                                    <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\">
                                                                                </a>
                                                                            </div>








                                                                            <div id=\"sfToolbarClearer-8cb4b7\" style=\"clear: both; height: 38px; display: block;\"></div>

                                                                            <div id=\"sfToolbarMainContent-8cb4b7\" class=\"sf-toolbarreset\" data-no-turbolink=\"\" style=\"display: block;\">

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=form\">            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\">
                                                                                                <span class=\"sf-toolbar-status sf-toolbar-status-green\">1</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\"></div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"http://symfony.com/\">
                                                                                            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\">
                                                                                                <span>
                                                                                                    2.6.4
                                                                                                </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">                <div class=\"sf-toolbar-info-piece\">
                                                                                            Symfony <b>2.6.4</b>
                                                                                        </div>
                                                                                        <div class=\"sf-toolbar-info-piece\">
                                                                                            <a href=\"http://symfony.com/doc/2.6.4/index.html\" rel=\"help\">Symfony Documentation</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/phpinfo\">
                                                                                            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\"><b>PHP</b><span>5.5.12</span></div><div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\"><b>PHP Extensions</b><span class=\"sf-toolbar-status sf-toolbar-status-green\">xdebug</span><span class=\"sf-toolbar-status sf-toolbar-status-red\">accel</span></div><div class=\"sf-toolbar-info-piece\"><b>PHP SAPI</b><span>apache2handler</span></div>    </div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=config\">        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\">
                                                                                                <span class=\"sf-toolbar-info-piece-additional-detail sf-toolbar-status sf-toolbar-status-green\"> </span>
                                                                                                <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">8cb4b7</span>
                                                                                                <span class=\"sf-toolbar-info-piece-additional-detail\">
                                                                                                    <span class=\"sf-toolbar-info-with-delimiter\">app</span>
                                                                                                    <span>dev</span>
                                                                                                </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\"><b>Name</b><span>app</span></div><div class=\"sf-toolbar-info-piece\"><b>Environment</b><span>dev</span></div><div class=\"sf-toolbar-info-piece\"><b>Token</b><span><a href=\"/app_dev.php/_profiler/8cb4b7\">8cb4b7</a></span></div>    </div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=request\">        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\">
                                                                                                <span class=\"sf-toolbar-status sf-toolbar-status-green\" title=\"OK\">200</span>
                                                                                                <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">                                                <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\"><abbr title=\"CompteCPBundle\\Controller\\CompteController\">CompteController</abbr></span>
                                                                                                    <span class=\"sf-toolbar-info-method\" onclick=\"\">
                                                                                                        newAction
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>compte_cp_new</i></span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\"><b>Status</b><span class=\"sf-toolbar-status sf-toolbar-status-green\">200</span> OK
                                                                                        </div><div class=\"sf-toolbar-info-piece\"><b>Controller</b><span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\"><abbr title=\"CompteCPBundle\\Controller\\CompteController\">CompteController</abbr></span><span class=\"sf-toolbar-info-method\" onclick=\"\">
                                                                                                newAction
                                                                                            </span></div><div class=\"sf-toolbar-info-piece\"><b>Route name</b><span>compte_cp_new</span></div><div class=\"sf-toolbar-info-piece\"><b>Has session</b><span>yes</span></div>    </div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <span>
                                                                                            <img width=\"13\" height=\"28\" alt=\"AJAX requests\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gUJDAkZ7bv96AAAAP1JREFUSMftlr0NgzAQhZ8RovIQeIdUkdJFWcINFAyQJl0UpU2TAShwwxZ0kVKxAwxBRXOpQEBsfkMRiets2e/T+ex3ZkSENcPCyvH/ALs5KMsXPfZnJJz3bnKDCEoKVo2z2KM7bq252RnoxP0wRx768OKMFgFM4lXoINavxE0Qu0+0KI54vi84OE7rbE3iLQgiUlIwe2oNYm9HYc4H11WQyQCpUiYNt06X8faSN8AGAOyvl9mwas4TXE8JABAAFG6AVEk2KQOpUhYF7iizmypem52QikUwG1ivkw40p7oGQiptJmNtelSRu5Cl4tp+UB1Xt8fOEQcAtn28huIDUf6Q+fofUk0AAAAASUVORK5CYII=\">
                                                                                                <span class=\"sf-toolbar-ajax-requests sf-toolbar-status sf-toolbar-status-green\">1</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>AJAX requests</b>
                                                                                            <span class=\"sf-toolbar-ajax-info\">1 call</span>
                                                                                        </div>
                                                                                        <div class=\"sf-toolbar-info-piece\">
                                                                                            <table class=\"sf-toolbar-ajax-requests\">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>Method</th>
                                                                                                        <th>URL</th>
                                                                                                        <th>Time</th>
                                                                                                        <th>Profile</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody class=\"sf-toolbar-ajax-request-list\"><tr class=\"sf-ajax-request sf-ajax-request-ok\"><td>GET</td><td class=\"sf-ajax-request-url\" title=\"/app_dev.php/_wdt/8cb4b7\">/app_dev.php/_wdt/8cb4b7</td><td class=\"sf-ajax-request-duration\">1257ms</td> <td>n/a</td></tr></tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>




                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=time\">        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\">
                                                                                                <span>1167 ms</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>Total time</b>
                                                                                            <span>1167 ms</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <span>
                                                                                            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
                                                                                                <span>19.2 MB</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>Memory usage</b>
                                                                                            <span>19.2 / 128.0 MB</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=security\">        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\">
                                                                                                <span class=\"sf-toolbar-status sf-toolbar-status-red\"></span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">                    You are not authenticated.
                                                                                    </div>
                                                                                </div>


                                                                                <div class=\"sf-toolbar-block\">
                                                                                    <div class=\"sf-toolbar-icon\">        <a href=\"/app_dev.php/_profiler/8cb4b7?panel=db\">        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\">
                                                                                                <span class=\"sf-toolbar-status\">0</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>DB Queries</b>
                                                                                            <span>0</span>
                                                                                        </div>
                                                                                        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>Query time</b>
                                                                                            <span>0.00 ms</span>
                                                                                        </div>
                                                                                        <div class=\"sf-toolbar-info-piece\">
                                                                                            <b>Invalid entities</b>
                                                                                            <span class=\"sf-toolbar-status sf-toolbar-status-green\">0</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>




                                                                                <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
                                                                                        var p = this.parentNode;
                                                                                        p.style.display = 'none';
                                                                                        (p.previousElementSibling || p.previousSibling).style.display = 'none';
                                                                                        document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'block';
                                                                                        Sfjs.setPreference('toolbar/displayState', 'none');
                                                                                   \"></a>
                                                                            </div>
                                                                            <!-- END of Symfony Web Debug Toolbar -->
                                                                        </div>
                                                                        <script>/*<![CDATA[*/    Sfjs = (function () {
                                                                                \"use strict\";
                                                                                var noop = function () {}, profilerStorageKey = 'sf2/profiler/', request = function (url, onSuccess, onError, payload, options) {
                                                                                    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                                                                                    options = options || {};
                                                                                    options.maxTries = options.maxTries || 0;
                                                                                    xhr.open(options.method || 'GET', url, true);
                                                                                    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                                                                                    xhr.onreadystatechange = function (state) {
                                                                                        if (4 !== xhr.readyState) {
                                                                                            return null;
                                                                                        }
                                                                                        if (xhr.status == 404 && options.maxTries > 1) {
                                                                                            setTimeout(function () {
                                                                                                options.maxTries--;
                                                                                                request(url, onSuccess, onError, payload, options);
                                                                                            }, 500);
                                                                                            return null;
                                                                                        }
                                                                                        if (200 === xhr.status) {
                                                                                            (onSuccess || noop)(xhr);
                                                                                        } else {
                                                                                            (onError || noop)(xhr);
                                                                                        }
                                                                                    };
                                                                                    xhr.send(payload || '');
                                                                                }, hasClass = function (el, klass) {
                                                                                    return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
                                                                                }, removeClass = function (el, klass) {
                                                                                    if (el.className) {
                                                                                        el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                                                                                    }
                                                                                }, addClass = function (el, klass) {
                                                                                    if (!hasClass(el, klass)) {
                                                                                        el.className += \" \" + klass;
                                                                                    }
                                                                                }, getPreference = function (name) {
                                                                                    if (!window.localStorage) {
                                                                                        return null;
                                                                                    }
                                                                                    return localStorage.getItem(profilerStorageKey + name);
                                                                                }, setPreference = function (name, value) {
                                                                                    if (!window.localStorage) {
                                                                                        return null;
                                                                                    }
                                                                                    localStorage.setItem(profilerStorageKey + name, value);
                                                                                }, requestStack = [], renderAjaxRequests = function () {
                                                                                    var requestCounter = document.querySelectorAll('.sf-toolbar-ajax-requests');
                                                                                    if (!requestCounter.length) {
                                                                                        return;
                                                                                    }
                                                                                    var tbodies = document.querySelectorAll('.sf-toolbar-ajax-request-list');
                                                                                    var state = 'ok';
                                                                                    if (tbodies.length) {
                                                                                        var tbody = tbodies[0];
                                                                                        var rows = document.createDocumentFragment();
                                                                                        if (requestStack.length) {
                                                                                            for (var i = 0; i < requestStack.length; i++) {
                                                                                                var request = requestStack[i];
                                                                                                var row = document.createElement('tr');
                                                                                                rows.appendChild(row);
                                                                                                var methodCell = document.createElement('td');
                                                                                                methodCell.textContent = request.method;
                                                                                                row.appendChild(methodCell);
                                                                                                var pathCell = document.createElement('td');
                                                                                                pathCell.className = 'sf-ajax-request-url';
                                                                                                pathCell.textContent = request.url;
                                                                                                pathCell.setAttribute('title', request.url);
                                                                                                row.appendChild(pathCell);
                                                                                                var durationCell = document.createElement('td');
                                                                                                durationCell.className = 'sf-ajax-request-duration';
                                                                                                if (request.duration) {
                                                                                                    durationCell.textContent = request.duration + \"ms\";
                                                                                                } else {
                                                                                                    durationCell.textContent = '-';
                                                                                                }
                                                                                                row.appendChild(durationCell);
                                                                                                row.appendChild(document.createTextNode(' '));
                                                                                                var profilerCell = document.createElement('td');
                                                                                                if (request.profilerUrl) {
                                                                                                    var profilerLink = document.createElement('a');
                                                                                                    profilerLink.setAttribute('href', request.profilerUrl);
                                                                                                    profilerLink.textContent = request.profile;
                                                                                                    profilerCell.appendChild(profilerLink);
                                                                                                } else {
                                                                                                    profilerCell.textContent = 'n/a';
                                                                                                }
                                                                                                row.appendChild(profilerCell);
                                                                                                var requestState = 'ok';
                                                                                                if (request.error) {
                                                                                                    requestState = 'error';
                                                                                                    if (state != \"loading\" && i > requestStack.length - 4) {
                                                                                                        state = 'error';
                                                                                                    }
                                                                                                } else if (request.loading) {
                                                                                                    requestState = 'loading';
                                                                                                    state = 'loading'
                                                                                                }
                                                                                                row.className = 'sf-ajax-request sf-ajax-request-' + requestState;
                                                                                            }
                                                                                            var infoSpan = document.querySelectorAll(\".sf-toolbar-ajax-info\")[0];
                                                                                            var children = Array.prototype.slice.call(tbody.children);
                                                                                            for (var i = 0; i < children.length; i++) {
                                                                                                tbody.removeChild(children[i]);
                                                                                            }
                                                                                            tbody.appendChild(rows);
                                                                                            if (infoSpan) {
                                                                                                var text = requestStack.length + ' call' + (requestStack.length > 1 ? 's' : '');
                                                                                                infoSpan.textContent = text;
                                                                                            }
                                                                                        } else {
                                                                                            var cell = document.createElement('td');
                                                                                            cell.setAttribute('colspan', '4');
                                                                                            cell.textContent = \"No AJAX requests yet.\";
                                                                                            var row = document.createElement('tr');
                                                                                            row.appendChild(cell);
                                                                                            tbody.appendChild(row);
                                                                                        }
                                                                                    }
                                                                                    requestCounter[0].textContent = requestStack.length;
                                                                                    var className = 'sf-toolbar-ajax-requests sf-toolbar-status';
                                                                                    if (state == 'ok') {
                                                                                        className += ' sf-toolbar-status-green';
                                                                                    } else if (state == 'error') {
                                                                                        className += ' sf-toolbar-status-red';
                                                                                    } else {
                                                                                        className += ' sf-ajax-request-loading';
                                                                                    }
                                                                                    requestCounter[0].className = className;
                                                                                };
                                                                                var proxied = XMLHttpRequest.prototype.open;
                                                                                XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
                                                                                    var self = this;                /* prevent logging AJAX calls to static and inline files, like templates */
                                                                                    if (url.substr(0, 1) === '/' && !url.match(new RegExp(\"^/bundles|^/_wdt\"))) {
                                                                                        var stackElement = {loading: true, error: false, url: url, method: method, start: new Date()};
                                                                                        requestStack.push(stackElement);
                                                                                        this.addEventListener(\"readystatechange\", function () {
                                                                                            if (self.readyState == 4) {
                                                                                                stackElement.duration = new Date() - stackElement.start;
                                                                                                stackElement.loading = false;
                                                                                                stackElement.error = self.status < 200 || self.status >= 400;
                                                                                                stackElement.profile = self.getResponseHeader(\"X-Debug-Token\");
                                                                                                stackElement.profilerUrl = self.getResponseHeader(\"X-Debug-Token-Link\");
                                                                                                Sfjs.renderAjaxRequests();
                                                                                            }
                                                                                        }, false);
                                                                                        Sfjs.renderAjaxRequests();
                                                                                    }
                                                                                    proxied.apply(this, Array.prototype.slice.call(arguments));
                                                                                };
                                                                                return {hasClass: hasClass, removeClass: removeClass, addClass: addClass, getPreference: getPreference, setPreference: setPreference, request: request, renderAjaxRequests: renderAjaxRequests, load: function (selector, url, onSuccess, onError, options) {
                                                                                        var el = document.getElementById(selector);
                                                                                        if (el && el.getAttribute('data-sfurl') !== url) {
                                                                                            request(url, function (xhr) {
                                                                                                el.innerHTML = xhr.responseText;
                                                                                                el.setAttribute('data-sfurl', url);
                                                                                                removeClass(el, 'loading');
                                                                                                (onSuccess || noop)(xhr, el);
                                                                                            }, function (xhr) {
                                                                                                (onError || noop)(xhr, el);
                                                                                            }, '', options);
                                                                                        }
                                                                                        return this;
                                                                                    }, toggle: function (selector, elOn, elOff) {
                                                                                        var i, style, tmp = elOn.style.display, el = document.getElementById(selector);
                                                                                        elOn.style.display = elOff.style.display;
                                                                                        elOff.style.display = tmp;
                                                                                        if (el) {
                                                                                            el.style.display = 'none' === tmp ? 'none' : 'block';
                                                                                        }
                                                                                        return this;
                                                                                    }}
                                                                            })();/*]]>*/</script><script>/*<![CDATA[*/    (function () {
                                                                                    Sfjs.load('sfwdt8cb4b7', '/app_dev.php/_wdt/8cb4b7', function (xhr, el) {
                                                                                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
                                                                                        if (el.style.display == 'none') {
                                                                                            return;
                                                                                        }
                                                                                        if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                                                                                            document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'none';
                                                                                            document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'none';
                                                                                            document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'block';
                                                                                        } else {
                                                                                            document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'block';
                                                                                            document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'block';
                                                                                            document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'none';
                                                                                        }
                                                                                        Sfjs.renderAjaxRequests();                /* Handle toolbar-info position */
                                                                                        var toolbarBlocks = document.getElementsByClassName('sf-toolbar-block');
                                                                                        for (var i = 0; i < toolbarBlocks.length; i += 1) {
                                                                                            toolbarBlocks[i].onmouseover = function () {
                                                                                                var toolbarInfo = this.getElementsByClassName('sf-toolbar-info')[0];
                                                                                                var pageWidth = document.body.clientWidth;
                                                                                                var elementWidth = toolbarInfo.offsetWidth;
                                                                                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                                                                                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                        /* Reset right and left value, useful on window resize */
                                                                                                toolbarInfo.style.right = '';
                                                                                                toolbarInfo.style.left = '';
                                                                                                if (leftValue > 0 && rightValue > 0) {
                                                                                                    toolbarInfo.style.right = (rightValue * -1) + 'px';
                                                                                                } else if (leftValue < 0) {
                                                                                                    toolbarInfo.style.left = 0;
                                                                                                } else {
                                                                                                    toolbarInfo.style.right = '-1px';
                                                                                                }
                                                                                            };
                                                                                        }
                                                                                    }, function (xhr) {
                                                                                        if (xhr.status !== 0) {
                                                                                            confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '/app_dev.php/_profiler/8cb4b7');
                                                                                        }
                                                                                    }, {'maxTries': 5});
                                                                                })();/*]]>*/</script>


                                                                        </body>
                                                                        </html>";
    }

    // line 84
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 85
        echo "                                                                                        ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 85,  617 => 84,  194 => 152,  182 => 143,  171 => 135,  162 => 129,  117 => 86,  114 => 84,  48 => 15,  44 => 14,  40 => 13,  35 => 11,  30 => 9,  20 => 1,);
    }
}
/* <html */
/*     xmlns="http://www.w3.org/1999/xhtml" lang="en" class="js">*/
/*     <head>*/
/*         <title>eGov Tunisie - e-Gouvernement du plan Tunisie Numeric</title>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*                 <!--Oswald Font -->*/
/*                 <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">*/
/*                     <link rel="stylesheet" type="text/css" href="{{asset('bundles/front/css/tooltipster.css')}}">*/
/*                         <!-- home slider-->*/
/*                         <link href="{{asset('bundles/front/css/pgwslider.css')}}" rel="stylesheet">*/
/*                             <!-- Font Awesome -->*/
/*                             <link rel="stylesheet" href="{{asset('bundles/front/css/font-awesome.min.css')}}">*/
/*                                 <link href="{{asset('bundles/front/style.css')}}" rel="stylesheet" media="screen">	*/
/*                                     <link href="{{asset('bundles/front/responsive.css')}}" rel="stylesheet" media="screen">		*/
/*                                         </head>*/
/* */
/*                                         <body>*/
/* */
/*                                             <section id="header_area">*/
/*                                                 <div class="wrapper header">*/
/*                                                     <div class="clearfix header_top">*/
/*                                                         <div class="clearfix logo floatleft">*/
/*                                                             <a href=""><h1><span style="color:red;font-weight:bold">Egov</span> Tunisie</h1></a>*/
/*                                                         </div>*/
/*                                                         <div class="clearfix search floatright">*/
/*                                                             <form>*/
/*                                                                 <input type="text" placeholder="Search">*/
/*                                                                     <input type="submit">*/
/*                                                                         </form>*/
/*                                                                         </div>*/
/*                                                                         </div>*/
/*                                                                         <div class="header_bottom">*/
/*                                                                             <nav>*/
/*                                                                                 <ul id="nav">*/
/*                                                                                     <li><a href="">Home</a></li>*/
/*                                                                                     <li><a href="">Plan</a></li>*/
/*                                                                                     <li id="dropdown"><a href="">Services pour les citoyens</a>*/
/*                                                                                         <ul>*/
/*                                                                                             <li><a href="">Minstere d'interieure</a></li>*/
/*                                                                                             <li><a href="">Municipalité</a></li>*/
/*                                                                                             <li><a href="">Minstere d'industrie</a></li><!-- path -->*/
/*                                                                                             <li><a href="">Poste Tunisienne</a></li>*/
/* */
/*                                                                                         </ul>*/
/*                                                                                     </li>*/
/* */
/*                                                                                     <li><a href="">About us</a></li>*/
/*                                                                                     <li><a href="">Contact us</a></li>*/
/*                                                                                 </ul><select class="selectnav" id="selectnav1"><option value="">-Navigation-</option><option value="http://localhost/app_dev.php/new" selected="">Home</option><option value="http://localhost/app_dev.php/new" selected="">Plan</option><option value="http://localhost/app_dev.php/new" selected="">Services pour les citoyens</option><option value="http://localhost/app_dev.php/new" selected="">- Minstere d'interieure</option><option value="http://localhost/app_dev.php/new" selected="">- Municipalité</option><option value="http://localhost/app_dev.php/new" selected="">- Minstere d'industrie</option><option value="http://localhost/app_dev.php/new" selected="">- Poste Tunisienne</option><option value="http://localhost/app_dev.php/new" selected="">About us</option><option value="http://localhost/app_dev.php/new" selected="">Contact us</option></select>*/
/*                                                                             </nav>*/
/*                                                                         </div>*/
/*                                                                         </div>*/
/*                                                                         </section>*/
/* */
/*                                                                         <section id="content_area">*/
/*                                                                             <div class="clearfix wrapper main_content_area">*/
/* */
/*                                                                                 <div class="clearfix main_content floatleft">*/
/* */
/*                                                                                     <div class="clearfix slider">*/
/*                                                                                         <div class="pgwSlider"><div>*/
/* */
/*                                                                                             </div></div>*/
/*                                                                                     </div>*/
/* */
/* */
/* */
/*                                                                                     <div class="pagination">*/
/*                                                                                         <nav>*/
/* */
/*                                                                                         </nav>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/*                                                                                 <div class="clearfix sidebar_container floatright">*/
/* */
/*                                                                                     <div class="clearfix newsletter">*/
/*                                                                                         {#<form>*/
/*                                                                                                 <h2>Connexion </h2>*/
/*                                                                                                 <input type="text" placeholder="Login" id="mce-TEXT">*/
/*                                                                                                 <input type="email" placeholder="Password" id="mce-EMAIL">*/
/*                                                                                                 <input type="submit" value="Submit" id="mc-embedded-subscribe">*/
/*                                                                                         </form>#}*/
/*                                                                                         {% block fos_user_content %}*/
/*                                                                                         {% endblock fos_user_content %}*/
/*                                                                                     </div>*/
/*                                                                                     <div class="clearfix sidebar">*/
/* */
/* */
/* */
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </section>*/
/* */
/*                                                                         <section id="footer_top_area">*/
/*                                                                             <div class="clearfix wrapper footer_top">*/
/*                                                                                 <div class="clearfix footer_top_container">*/
/* */
/* */
/* */
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </section>*/
/*                                                                         <div>*/
/* */
/*                                                                         </div>*/
/*                                                                         <section id="footer_bottom_area">*/
/*                                                                             <div class="clearfix wrapper footer_bottom">*/
/*                                                                                 <div class="clearfix copyright floatleft">*/
/*                                                                                     <p> Copyright © All rights reserved by <span>EGOV.COM</span></p>*/
/*                                                                                 </div>*/
/*                                                                                 <div class="clearfix social floatright">*/
/*                                                                                     <ul>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-facebook-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-twitter-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-google-plus-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-linkedin-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-tumblr-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-pinterest-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-rss-square"></i></a></li>*/
/*                                                                                         <li><a class="tooltip tooltipstered" href=""><i class="fa fa-sitemap"></i> </a></li>*/
/*                                                                                     </ul>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </section>*/
/* */
/*                                                                         <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>	*/
/*                                                                         <script type="text/javascript" src="{{asset('bundles/front/js/jquery.tooltipster.min.js')}}"></script>		*/
/*                                                                         <script type="text/javascript">*/
/*                                                                             $(document).ready(function () {*/
/*                                                                                 $('.tooltip').tooltipster();*/
/*                                                                             });*/
/*                                                                         </script>*/
/*                                                                         <script type="text/javascript" src="{{asset('bundles/front/js/selectnav.min.js')}}"></script>*/
/*                                                                         <script type="text/javascript">*/
/*                                                                             selectnav('nav', {*/
/*                                                                                 label: '-Navigation-',*/
/*                                                                                 nested: true,*/
/*                                                                                 indent: '-'*/
/*                                                                             });*/
/*                                                                         </script>		*/
/*                                                                         <script src="{{asset('bundles/front/js/pgwslider.js')}}"></script>*/
/*                                                                         <script type="text/javascript">*/
/*                                                                             $(document).ready(function () {*/
/*                                                                                 $('.pgwSlider').pgwSlider({*/
/*                                                                                     intervalDuration: 5000*/
/* */
/*                                                                                 });*/
/*                                                                             });*/
/*                                                                         </script>*/
/*                                                                         <script type="text/javascript" src="{{asset('bundles/front/js/placeholder_support_IE.js')}}"></script>*/
/* */
/*                                                                         <!--*/
/*                                                                         ---- Clean html template by http://WpFreeware.com*/
/*                                                                         ---- This is the main file (index.html).*/
/*                                                                         ---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com*/
/*                                                                         ---- Read License-readme.txt file to learn more.*/
/*                                                                         -->	*/
/* */
/* */
/*                                                                         <div id="sfwdt8cb4b7" class="sf-toolbar" style="display: block;" data-sfurl="/app_dev.php/_wdt/8cb4b7"><!-- START of Symfony Web Debug Toolbar -->*/
/*                                                                             <div id="sfMiniToolbar-8cb4b7" class="sf-minitoolbar" data-no-turbolink="" style="display: none;">*/
/*                                                                                 <a href="javascript:void(0);" title="Show Symfony toolbar" onclick="*/
/*                                                                                         var elem = this.parentNode;*/
/*                                                                                         if (elem.style.display == 'none') {*/
/*                                                                                             document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'none';*/
/*                                                                                             document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'none';*/
/*                                                                                             elem.style.display = 'block';*/
/*                                                                                         } else {*/
/*                                                                                             document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'block';*/
/*                                                                                             document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'block';*/
/*                                                                                             elem.style.display = 'none'*/
/*                                                                                         }*/
/* */
/*                                                                                         Sfjs.setPreference('toolbar/displayState', 'block');*/
/*                                                                                    ">*/
/*                                                                                     <img width="26" height="28" alt="Symfony" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC">*/
/*                                                                                 </a>*/
/*                                                                             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                                                                             <div id="sfToolbarClearer-8cb4b7" style="clear: both; height: 38px; display: block;"></div>*/
/* */
/*                                                                             <div id="sfToolbarMainContent-8cb4b7" class="sf-toolbarreset" data-no-turbolink="" style="display: block;">*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=form">            <img width="20" height="28" alt="Forms" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC">*/
/*                                                                                                 <span class="sf-toolbar-status sf-toolbar-status-green">1</span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;"></div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="http://symfony.com/">*/
/*                                                                                             <img width="26" height="28" alt="Symfony" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC">*/
/*                                                                                                 <span>*/
/*                                                                                                     2.6.4*/
/*                                                                                                 </span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">                <div class="sf-toolbar-info-piece">*/
/*                                                                                             Symfony <b>2.6.4</b>*/
/*                                                                                         </div>*/
/*                                                                                         <div class="sf-toolbar-info-piece">*/
/*                                                                                             <a href="http://symfony.com/doc/2.6.4/index.html" rel="help">Symfony Documentation</a>*/
/*                                                                                         </div>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/phpinfo">*/
/*                                                                                             <img width="26" height="28" alt="PHP" src="data:image/png;base64,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">*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece sf-toolbar-info-php"><b>PHP</b><span>5.5.12</span></div><div class="sf-toolbar-info-piece sf-toolbar-info-php-ext"><b>PHP Extensions</b><span class="sf-toolbar-status sf-toolbar-status-green">xdebug</span><span class="sf-toolbar-status sf-toolbar-status-red">accel</span></div><div class="sf-toolbar-info-piece"><b>PHP SAPI</b><span>apache2handler</span></div>    </div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=config">        <img width="21" height="28" alt="Environment" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==">*/
/*                                                                                                 <span class="sf-toolbar-info-piece-additional-detail sf-toolbar-status sf-toolbar-status-green"> </span>*/
/*                                                                                                 <span class="sf-toolbar-info-piece-additional sf-toolbar-status">8cb4b7</span>*/
/*                                                                                                 <span class="sf-toolbar-info-piece-additional-detail">*/
/*                                                                                                     <span class="sf-toolbar-info-with-delimiter">app</span>*/
/*                                                                                                     <span>dev</span>*/
/*                                                                                                 </span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece"><b>Name</b><span>app</span></div><div class="sf-toolbar-info-piece"><b>Environment</b><span>dev</span></div><div class="sf-toolbar-info-piece"><b>Token</b><span><a href="/app_dev.php/_profiler/8cb4b7">8cb4b7</a></span></div>    </div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=request">        <img width="28" height="28" alt="Request" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==">*/
/*                                                                                                 <span class="sf-toolbar-status sf-toolbar-status-green" title="OK">200</span>*/
/*                                                                                                 <span class="sf-toolbar-status sf-toolbar-info-piece-additional">                                                <span class="sf-toolbar-info-class sf-toolbar-info-with-next-pointer"><abbr title="CompteCPBundle\Controller\CompteController">CompteController</abbr></span>*/
/*                                                                                                     <span class="sf-toolbar-info-method" onclick="">*/
/*                                                                                                         newAction*/
/*                                                                                                     </span>*/
/*                                                                                                 </span>*/
/*                                                                                                 <span class="sf-toolbar-info-piece-additional-detail">on <i>compte_cp_new</i></span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece"><b>Status</b><span class="sf-toolbar-status sf-toolbar-status-green">200</span> OK*/
/*                                                                                         </div><div class="sf-toolbar-info-piece"><b>Controller</b><span class="sf-toolbar-info-class sf-toolbar-info-with-next-pointer"><abbr title="CompteCPBundle\Controller\CompteController">CompteController</abbr></span><span class="sf-toolbar-info-method" onclick="">*/
/*                                                                                                 newAction*/
/*                                                                                             </span></div><div class="sf-toolbar-info-piece"><b>Route name</b><span>compte_cp_new</span></div><div class="sf-toolbar-info-piece"><b>Has session</b><span>yes</span></div>    </div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <span>*/
/*                                                                                             <img width="13" height="28" alt="AJAX requests" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gUJDAkZ7bv96AAAAP1JREFUSMftlr0NgzAQhZ8RovIQeIdUkdJFWcINFAyQJl0UpU2TAShwwxZ0kVKxAwxBRXOpQEBsfkMRiets2e/T+ex3ZkSENcPCyvH/ALs5KMsXPfZnJJz3bnKDCEoKVo2z2KM7bq252RnoxP0wRx768OKMFgFM4lXoINavxE0Qu0+0KI54vi84OE7rbE3iLQgiUlIwe2oNYm9HYc4H11WQyQCpUiYNt06X8faSN8AGAOyvl9mwas4TXE8JABAAFG6AVEk2KQOpUhYF7iizmypem52QikUwG1ivkw40p7oGQiptJmNtelSRu5Cl4tp+UB1Xt8fOEQcAtn28huIDUf6Q+fofUk0AAAAASUVORK5CYII=">*/
/*                                                                                                 <span class="sf-toolbar-ajax-requests sf-toolbar-status sf-toolbar-status-green">1</span>*/
/*                                                                                         </span>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>AJAX requests</b>*/
/*                                                                                             <span class="sf-toolbar-ajax-info">1 call</span>*/
/*                                                                                         </div>*/
/*                                                                                         <div class="sf-toolbar-info-piece">*/
/*                                                                                             <table class="sf-toolbar-ajax-requests">*/
/*                                                                                                 <thead>*/
/*                                                                                                     <tr>*/
/*                                                                                                         <th>Method</th>*/
/*                                                                                                         <th>URL</th>*/
/*                                                                                                         <th>Time</th>*/
/*                                                                                                         <th>Profile</th>*/
/*                                                                                                     </tr>*/
/*                                                                                                 </thead>*/
/*                                                                                                 <tbody class="sf-toolbar-ajax-request-list"><tr class="sf-ajax-request sf-ajax-request-ok"><td>GET</td><td class="sf-ajax-request-url" title="/app_dev.php/_wdt/8cb4b7">/app_dev.php/_wdt/8cb4b7</td><td class="sf-ajax-request-duration">1257ms</td> <td>n/a</td></tr></tbody>*/
/*                                                                                             </table>*/
/*                                                                                         </div>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/* */
/* */
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=time">        <img width="16" height="28" alt="Time" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=">*/
/*                                                                                                 <span>1167 ms</span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>Total time</b>*/
/*                                                                                             <span>1167 ms</span>*/
/*                                                                                         </div>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <span>*/
/*                                                                                             <img width="13" height="28" alt="Memory Usage" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==">*/
/*                                                                                                 <span>19.2 MB</span>*/
/*                                                                                         </span>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>Memory usage</b>*/
/*                                                                                             <span>19.2 / 128.0 MB</span>*/
/*                                                                                         </div>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=security">        <img width="24" height="28" alt="Security" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==">*/
/*                                                                                                 <span class="sf-toolbar-status sf-toolbar-status-red"></span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">                    You are not authenticated.*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/* */
/*                                                                                 <div class="sf-toolbar-block">*/
/*                                                                                     <div class="sf-toolbar-icon">        <a href="/app_dev.php/_profiler/8cb4b7?panel=db">        <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC">*/
/*                                                                                                 <span class="sf-toolbar-status">0</span>*/
/*                                                                                         </a>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="sf-toolbar-info" style="left: 0px;">        <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>DB Queries</b>*/
/*                                                                                             <span>0</span>*/
/*                                                                                         </div>*/
/*                                                                                         <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>Query time</b>*/
/*                                                                                             <span>0.00 ms</span>*/
/*                                                                                         </div>*/
/*                                                                                         <div class="sf-toolbar-info-piece">*/
/*                                                                                             <b>Invalid entities</b>*/
/*                                                                                             <span class="sf-toolbar-status sf-toolbar-status-green">0</span>*/
/*                                                                                         </div>*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/* */
/* */
/* */
/* */
/*                                                                                 <a class="hide-button" title="Close Toolbar" onclick="*/
/*                                                                                         var p = this.parentNode;*/
/*                                                                                         p.style.display = 'none';*/
/*                                                                                         (p.previousElementSibling || p.previousSibling).style.display = 'none';*/
/*                                                                                         document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'block';*/
/*                                                                                         Sfjs.setPreference('toolbar/displayState', 'none');*/
/*                                                                                    "></a>*/
/*                                                                             </div>*/
/*                                                                             <!-- END of Symfony Web Debug Toolbar -->*/
/*                                                                         </div>*/
/*                                                                         <script>/*<![CDATA[*//*     Sfjs = (function () {*/
/*                                                                                 "use strict";*/
/*                                                                                 var noop = function () {}, profilerStorageKey = 'sf2/profiler/', request = function (url, onSuccess, onError, payload, options) {*/
/*                                                                                     var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');*/
/*                                                                                     options = options || {};*/
/*                                                                                     options.maxTries = options.maxTries || 0;*/
/*                                                                                     xhr.open(options.method || 'GET', url, true);*/
/*                                                                                     xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');*/
/*                                                                                     xhr.onreadystatechange = function (state) {*/
/*                                                                                         if (4 !== xhr.readyState) {*/
/*                                                                                             return null;*/
/*                                                                                         }*/
/*                                                                                         if (xhr.status == 404 && options.maxTries > 1) {*/
/*                                                                                             setTimeout(function () {*/
/*                                                                                                 options.maxTries--;*/
/*                                                                                                 request(url, onSuccess, onError, payload, options);*/
/*                                                                                             }, 500);*/
/*                                                                                             return null;*/
/*                                                                                         }*/
/*                                                                                         if (200 === xhr.status) {*/
/*                                                                                             (onSuccess || noop)(xhr);*/
/*                                                                                         } else {*/
/*                                                                                             (onError || noop)(xhr);*/
/*                                                                                         }*/
/*                                                                                     };*/
/*                                                                                     xhr.send(payload || '');*/
/*                                                                                 }, hasClass = function (el, klass) {*/
/*                                                                                     return el.className && el.className.match(new RegExp('\\b' + klass + '\\b'));*/
/*                                                                                 }, removeClass = function (el, klass) {*/
/*                                                                                     if (el.className) {*/
/*                                                                                         el.className = el.className.replace(new RegExp('\\b' + klass + '\\b'), ' ');*/
/*                                                                                     }*/
/*                                                                                 }, addClass = function (el, klass) {*/
/*                                                                                     if (!hasClass(el, klass)) {*/
/*                                                                                         el.className += " " + klass;*/
/*                                                                                     }*/
/*                                                                                 }, getPreference = function (name) {*/
/*                                                                                     if (!window.localStorage) {*/
/*                                                                                         return null;*/
/*                                                                                     }*/
/*                                                                                     return localStorage.getItem(profilerStorageKey + name);*/
/*                                                                                 }, setPreference = function (name, value) {*/
/*                                                                                     if (!window.localStorage) {*/
/*                                                                                         return null;*/
/*                                                                                     }*/
/*                                                                                     localStorage.setItem(profilerStorageKey + name, value);*/
/*                                                                                 }, requestStack = [], renderAjaxRequests = function () {*/
/*                                                                                     var requestCounter = document.querySelectorAll('.sf-toolbar-ajax-requests');*/
/*                                                                                     if (!requestCounter.length) {*/
/*                                                                                         return;*/
/*                                                                                     }*/
/*                                                                                     var tbodies = document.querySelectorAll('.sf-toolbar-ajax-request-list');*/
/*                                                                                     var state = 'ok';*/
/*                                                                                     if (tbodies.length) {*/
/*                                                                                         var tbody = tbodies[0];*/
/*                                                                                         var rows = document.createDocumentFragment();*/
/*                                                                                         if (requestStack.length) {*/
/*                                                                                             for (var i = 0; i < requestStack.length; i++) {*/
/*                                                                                                 var request = requestStack[i];*/
/*                                                                                                 var row = document.createElement('tr');*/
/*                                                                                                 rows.appendChild(row);*/
/*                                                                                                 var methodCell = document.createElement('td');*/
/*                                                                                                 methodCell.textContent = request.method;*/
/*                                                                                                 row.appendChild(methodCell);*/
/*                                                                                                 var pathCell = document.createElement('td');*/
/*                                                                                                 pathCell.className = 'sf-ajax-request-url';*/
/*                                                                                                 pathCell.textContent = request.url;*/
/*                                                                                                 pathCell.setAttribute('title', request.url);*/
/*                                                                                                 row.appendChild(pathCell);*/
/*                                                                                                 var durationCell = document.createElement('td');*/
/*                                                                                                 durationCell.className = 'sf-ajax-request-duration';*/
/*                                                                                                 if (request.duration) {*/
/*                                                                                                     durationCell.textContent = request.duration + "ms";*/
/*                                                                                                 } else {*/
/*                                                                                                     durationCell.textContent = '-';*/
/*                                                                                                 }*/
/*                                                                                                 row.appendChild(durationCell);*/
/*                                                                                                 row.appendChild(document.createTextNode(' '));*/
/*                                                                                                 var profilerCell = document.createElement('td');*/
/*                                                                                                 if (request.profilerUrl) {*/
/*                                                                                                     var profilerLink = document.createElement('a');*/
/*                                                                                                     profilerLink.setAttribute('href', request.profilerUrl);*/
/*                                                                                                     profilerLink.textContent = request.profile;*/
/*                                                                                                     profilerCell.appendChild(profilerLink);*/
/*                                                                                                 } else {*/
/*                                                                                                     profilerCell.textContent = 'n/a';*/
/*                                                                                                 }*/
/*                                                                                                 row.appendChild(profilerCell);*/
/*                                                                                                 var requestState = 'ok';*/
/*                                                                                                 if (request.error) {*/
/*                                                                                                     requestState = 'error';*/
/*                                                                                                     if (state != "loading" && i > requestStack.length - 4) {*/
/*                                                                                                         state = 'error';*/
/*                                                                                                     }*/
/*                                                                                                 } else if (request.loading) {*/
/*                                                                                                     requestState = 'loading';*/
/*                                                                                                     state = 'loading'*/
/*                                                                                                 }*/
/*                                                                                                 row.className = 'sf-ajax-request sf-ajax-request-' + requestState;*/
/*                                                                                             }*/
/*                                                                                             var infoSpan = document.querySelectorAll(".sf-toolbar-ajax-info")[0];*/
/*                                                                                             var children = Array.prototype.slice.call(tbody.children);*/
/*                                                                                             for (var i = 0; i < children.length; i++) {*/
/*                                                                                                 tbody.removeChild(children[i]);*/
/*                                                                                             }*/
/*                                                                                             tbody.appendChild(rows);*/
/*                                                                                             if (infoSpan) {*/
/*                                                                                                 var text = requestStack.length + ' call' + (requestStack.length > 1 ? 's' : '');*/
/*                                                                                                 infoSpan.textContent = text;*/
/*                                                                                             }*/
/*                                                                                         } else {*/
/*                                                                                             var cell = document.createElement('td');*/
/*                                                                                             cell.setAttribute('colspan', '4');*/
/*                                                                                             cell.textContent = "No AJAX requests yet.";*/
/*                                                                                             var row = document.createElement('tr');*/
/*                                                                                             row.appendChild(cell);*/
/*                                                                                             tbody.appendChild(row);*/
/*                                                                                         }*/
/*                                                                                     }*/
/*                                                                                     requestCounter[0].textContent = requestStack.length;*/
/*                                                                                     var className = 'sf-toolbar-ajax-requests sf-toolbar-status';*/
/*                                                                                     if (state == 'ok') {*/
/*                                                                                         className += ' sf-toolbar-status-green';*/
/*                                                                                     } else if (state == 'error') {*/
/*                                                                                         className += ' sf-toolbar-status-red';*/
/*                                                                                     } else {*/
/*                                                                                         className += ' sf-ajax-request-loading';*/
/*                                                                                     }*/
/*                                                                                     requestCounter[0].className = className;*/
/*                                                                                 };*/
/*                                                                                 var proxied = XMLHttpRequest.prototype.open;*/
/*                                                                                 XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {*/
/*                                                                                     var self = this;                /* prevent logging AJAX calls to static and inline files, like templates *//* */
/*                                                                                     if (url.substr(0, 1) === '/' && !url.match(new RegExp("^/bundles|^/_wdt"))) {*/
/*                                                                                         var stackElement = {loading: true, error: false, url: url, method: method, start: new Date()};*/
/*                                                                                         requestStack.push(stackElement);*/
/*                                                                                         this.addEventListener("readystatechange", function () {*/
/*                                                                                             if (self.readyState == 4) {*/
/*                                                                                                 stackElement.duration = new Date() - stackElement.start;*/
/*                                                                                                 stackElement.loading = false;*/
/*                                                                                                 stackElement.error = self.status < 200 || self.status >= 400;*/
/*                                                                                                 stackElement.profile = self.getResponseHeader("X-Debug-Token");*/
/*                                                                                                 stackElement.profilerUrl = self.getResponseHeader("X-Debug-Token-Link");*/
/*                                                                                                 Sfjs.renderAjaxRequests();*/
/*                                                                                             }*/
/*                                                                                         }, false);*/
/*                                                                                         Sfjs.renderAjaxRequests();*/
/*                                                                                     }*/
/*                                                                                     proxied.apply(this, Array.prototype.slice.call(arguments));*/
/*                                                                                 };*/
/*                                                                                 return {hasClass: hasClass, removeClass: removeClass, addClass: addClass, getPreference: getPreference, setPreference: setPreference, request: request, renderAjaxRequests: renderAjaxRequests, load: function (selector, url, onSuccess, onError, options) {*/
/*                                                                                         var el = document.getElementById(selector);*/
/*                                                                                         if (el && el.getAttribute('data-sfurl') !== url) {*/
/*                                                                                             request(url, function (xhr) {*/
/*                                                                                                 el.innerHTML = xhr.responseText;*/
/*                                                                                                 el.setAttribute('data-sfurl', url);*/
/*                                                                                                 removeClass(el, 'loading');*/
/*                                                                                                 (onSuccess || noop)(xhr, el);*/
/*                                                                                             }, function (xhr) {*/
/*                                                                                                 (onError || noop)(xhr, el);*/
/*                                                                                             }, '', options);*/
/*                                                                                         }*/
/*                                                                                         return this;*/
/*                                                                                     }, toggle: function (selector, elOn, elOff) {*/
/*                                                                                         var i, style, tmp = elOn.style.display, el = document.getElementById(selector);*/
/*                                                                                         elOn.style.display = elOff.style.display;*/
/*                                                                                         elOff.style.display = tmp;*/
/*                                                                                         if (el) {*/
/*                                                                                             el.style.display = 'none' === tmp ? 'none' : 'block';*/
/*                                                                                         }*/
/*                                                                                         return this;*/
/*                                                                                     }}*/
/*                                                                             })();/*]]>*//* </script><script>/*<![CDATA[*//*     (function () {*/
/*                                                                                     Sfjs.load('sfwdt8cb4b7', '/app_dev.php/_wdt/8cb4b7', function (xhr, el) {*/
/*                                                                                         el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';*/
/*                                                                                         if (el.style.display == 'none') {*/
/*                                                                                             return;*/
/*                                                                                         }*/
/*                                                                                         if (Sfjs.getPreference('toolbar/displayState') == 'none') {*/
/*                                                                                             document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'none';*/
/*                                                                                             document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'none';*/
/*                                                                                             document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'block';*/
/*                                                                                         } else {*/
/*                                                                                             document.getElementById('sfToolbarMainContent-8cb4b7').style.display = 'block';*/
/*                                                                                             document.getElementById('sfToolbarClearer-8cb4b7').style.display = 'block';*/
/*                                                                                             document.getElementById('sfMiniToolbar-8cb4b7').style.display = 'none';*/
/*                                                                                         }*/
/*                                                                                         Sfjs.renderAjaxRequests();                /* Handle toolbar-info position *//* */
/*                                                                                         var toolbarBlocks = document.getElementsByClassName('sf-toolbar-block');*/
/*                                                                                         for (var i = 0; i < toolbarBlocks.length; i += 1) {*/
/*                                                                                             toolbarBlocks[i].onmouseover = function () {*/
/*                                                                                                 var toolbarInfo = this.getElementsByClassName('sf-toolbar-info')[0];*/
/*                                                                                                 var pageWidth = document.body.clientWidth;*/
/*                                                                                                 var elementWidth = toolbarInfo.offsetWidth;*/
/*                                                                                                 var leftValue = (elementWidth + this.offsetLeft) - pageWidth;*/
/*                                                                                                 var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                        /* Reset right and left value, useful on window resize *//* */
/*                                                                                                 toolbarInfo.style.right = '';*/
/*                                                                                                 toolbarInfo.style.left = '';*/
/*                                                                                                 if (leftValue > 0 && rightValue > 0) {*/
/*                                                                                                     toolbarInfo.style.right = (rightValue * -1) + 'px';*/
/*                                                                                                 } else if (leftValue < 0) {*/
/*                                                                                                     toolbarInfo.style.left = 0;*/
/*                                                                                                 } else {*/
/*                                                                                                     toolbarInfo.style.right = '-1px';*/
/*                                                                                                 }*/
/*                                                                                             };*/
/*                                                                                         }*/
/*                                                                                     }, function (xhr) {*/
/*                                                                                         if (xhr.status !== 0) {*/
/*                                                                                             confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\n\nDo you want to open the profiler?') && (window.location = '/app_dev.php/_profiler/8cb4b7');*/
/*                                                                                         }*/
/*                                                                                     }, {'maxTries': 5});*/
/*                                                                                 })();/*]]>*//* </script>*/
/* */
/* */
/*                                                                         </body>*/
/*                                                                         </html>{# empty Twig template #}*/
/* */
