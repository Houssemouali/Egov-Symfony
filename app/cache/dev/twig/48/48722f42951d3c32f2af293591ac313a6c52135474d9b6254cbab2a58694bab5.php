<?php

/* CompteCPBundle::base.html.twig */
class __TwigTemplate_ab0f75b2ab982a4f08c8a74160e8e943c2500cb485508d30ffa61c2c7b719f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>

        <!-- start: Meta -->
        <meta charset=\"utf-8\">
        <title>Egov</title>
        <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
        <meta name=\"author\" content=\"Dennis Ji\">
        <meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id=\"bootstrap-style\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]-->
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/http://html5shim.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
        <link id=\"ie-style\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!--[if IE 9]-->
        <link id=\"ie9style\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/favicon.ico"), "html", null, true);
        echo "\">
        <!-- end: Favicon -->




    </head>

    <body>
        <!-- start: Header -->
        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/index.html"), "html", null, true);
        echo "\"><span></span></a>

                    <!-- start: Header Menu -->
                    <div class=\"nav-no-collapse header-nav\">
                        <ul class=\"nav pull-right\">
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge red\">
                                        7 </span>
                                </a>
                                <ul class=\"dropdown-menu notifications\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 11 notifications</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>\t
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                                            <span class=\"message\">New user registration</span>
                                            <span class=\"time\">1 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                                            <span class=\"message\">New comment</span>
                                            <span class=\"time\">7 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                                            <span class=\"message\">New comment</span>
                                            <span class=\"time\">8 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                                            <span class=\"message\">New comment</span>
                                            <span class=\"time\">16 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                                            <span class=\"message\">New user registration</span>
                                            <span class=\"time\">36 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon yellow\"><i class=\"icon-shopping-cart\"></i></span>
                                            <span class=\"message\">2 items sold</span>
                                            <span class=\"time\">1 hour</span> 
                                        </a>
                                    </li>
                                    <li class=\"warning\">
                                        <a href=\"#\">
                                            <span class=\"icon red\"><i class=\"icon-user\"></i></span>
                                            <span class=\"message\">User deleted account</span>
                                            <span class=\"time\">2 hour</span> 
                                        </a>
                                    </li>
                                    <li class=\"warning\">
                                        <a href=\"#\">
                                            <span class=\"icon red\"><i class=\"icon-shopping-cart\"></i></span>
                                            <span class=\"message\">New comment</span>
                                            <span class=\"time\">6 hour</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                                            <span class=\"message\">New comment</span>
                                            <span class=\"time\">yesterday</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                                            <span class=\"message\">New user registration</span>
                                            <span class=\"time\">yesterday</span> 
                                        </a>
                                    </li>
                                    <li class=\"dropdown-menu-sub-footer\">
                                        <a>View all notifications</a>
                                    </li>\t
                                </ul>
                            </li>
                            <!-- start: Notifications Dropdown -->
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge red\">
                                        5 </span>
                                </a>
                                <ul class=\"dropdown-menu tasks\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 17 tasks in progress</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">iOS Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim red\">80</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">Android Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim green\">47</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">ARM Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim yellow\">32</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">ARM Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim greenLight\">63</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">ARM Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim orange\">80</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-menu-sub-footer\">View all tasks</a>
                                    </li>\t
                                </ul>
                            </li>
                            <!-- end: Notifications Dropdown -->
                            <!-- start: Message Dropdown -->
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-envelope\"></i>
                                    <span class=\"badge red\">
                                        4 </span>
                                </a>
                                <ul class=\"dropdown-menu messages\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 9 messages</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>\t
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                </span>
                                                <span class=\"time\">
                                                    6 min
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                </span>
                                                <span class=\"time\">
                                                    56 min
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                </span>
                                                <span class=\"time\">
                                                    3 hours
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                </span>
                                                <span class=\"time\">
                                                    yesterday
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                </span>
                                                <span class=\"time\">
                                                    Jul 25, 2012
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-menu-sub-footer\">View all messages</a>
                                    </li>\t
                                </ul>
                            </li>

                            <!-- start: User Dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white user\"></i> Dennis Ji
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href=\"#\"><i class=\"halflings-icon user\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/login.html"), "html", null, true);
        echo "\"><i class=\"halflings-icon off\"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class=\"container-fluid-full\">
            <div class=\"row-fluid\">

                <!-- start: Main Menu -->
                <div id=\"sidebar-left\" class=\"span2\">
                    <div class=\"nav-collapse sidebar-nav\">
                        <ul class=\"nav nav-tabs nav-stacked main-menu\">
                            <li><a href=\"";
        // line 338
        echo $this->env->getExtension('routing')->getPath("demande_cpp");
        echo "\"><span class=\"hidden-tablet\"> Compte CPP </span></a></li>\t
                            <li><a href=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("demande_cin");
        echo "\"><span class=\"hidden-tablet\"> Demande Cin</span></a></li>
                            <li><a href=\"";
        // line 340
        echo $this->env->getExtension('routing')->getPath("demande_b3");
        echo "\"><span class=\"hidden-tablet\"> Demande B3</span></a></li>
                                                              <li><a href=\"";
        // line 341
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"icon-angle-right\"></i><span class=\"hidden-tablet\"> Logout</span></a></li>

                            <li>
                                <ul>
                                    <li><a class=\"submenu\" href=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/submenu.html"), "html", null, true);
        echo "\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
                                    <li><a class=\"submenu\" href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/submenu2.html"), "html", null, true);
        echo "\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
                                    <li><a class=\"submenu\" href=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/submenu3.html"), "html", null, true);
        echo "\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>

                                </ul>\t
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class=\"alert alert-block span10\">
                    <h4 class=\"alert-heading\">Warning!</h4>
                    <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                ";
        // line 363
        $this->displayBlock('body', $context, $blocks);
        // line 365
        echo "            </div><!--/fluid-row-->

            <div class=\"modal hide fade\" id=\"myModal\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Settings</h3>
                </div>
                <div class=\"modal-body\">
                    <p>Here settings can be configured...</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                    <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
                </div>
            </div>
            <div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-content\">
                    <ul class=\"list-inline item-details\">
                        <li><a href=\"http://themifycloud.com\">Admin templates</a></li>
                        <li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"clearfix\"></div>

            <footer>

                <p>
                    <span style=\"text-align:left;float:left\">&copy; 2013 <a href=\"http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/\" alt=\"Bootstrap_Metro_Dashboard\">JANUX Responsive Dashboard</a></span>

                </p>

            </footer>

            <!-- start: JavaScript-->

            <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/modernizr.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

            <script src='js/fullcalendar.min.js'></script>

            <script src='js/jquery.dataTables.min.js'></script>

            <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/counter.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/retina.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/js/custom.js"), "html", null, true);
        echo "\"></script>
            <!-- end: JavaScript-->

    </body>
</html>
";
    }

    // line 363
    public function block_body($context, array $blocks = array())
    {
        // line 364
        echo "                ";
    }

    public function getTemplateName()
    {
        return "CompteCPBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 364,  634 => 363,  624 => 454,  619 => 452,  614 => 450,  609 => 448,  604 => 446,  599 => 444,  594 => 442,  589 => 440,  584 => 438,  579 => 436,  574 => 434,  569 => 432,  564 => 430,  559 => 428,  554 => 426,  549 => 424,  544 => 422,  540 => 421,  536 => 420,  532 => 419,  528 => 418,  519 => 412,  514 => 410,  509 => 408,  504 => 406,  499 => 404,  494 => 402,  490 => 401,  452 => 365,  450 => 363,  431 => 347,  427 => 346,  423 => 345,  416 => 341,  412 => 340,  408 => 339,  404 => 338,  381 => 318,  347 => 287,  328 => 271,  309 => 255,  290 => 239,  271 => 223,  100 => 55,  79 => 37,  72 => 33,  65 => 29,  61 => 28,  51 => 21,  47 => 20,  43 => 19,  39 => 18,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/* */
/*         <!-- start: Meta -->*/
/*         <meta charset="utf-8">*/
/*         <title>Egov</title>*/
/*         <meta name="description" content="Bootstrap Metro Dashboard">*/
/*         <meta name="author" content="Dennis Ji">*/
/*         <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">*/
/*         <!-- end: Meta -->*/
/* */
/*         <!-- start: Mobile Specific -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- end: Mobile Specific -->*/
/* */
/*         <!-- start: CSS -->*/
/*         <link id="bootstrap-style" href="{{asset('bundles/egovmainbundle/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/egovmainbundle/css/bootstrap-responsive.min.css')}}" rel="stylesheet">*/
/*         <link id="base-style" href="{{asset('bundles/egovmainbundle/css/style.css')}}" rel="stylesheet">*/
/*         <link id="base-style-responsive" href="{{asset('bundles/egovmainbundle/css/style-responsive.css')}}" rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>*/
/*         <!-- end: CSS -->*/
/* */
/* */
/*         <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]-->*/
/*         <script src="{{asset('bundles/egovmainbundle/http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>*/
/*         <link id="ie-style" href="{{asset('bundles/egovmainbundle/css/ie.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!--[if IE 9]-->*/
/*         <link id="ie9style" href="{{asset('bundles/egovmainbundle/css/ie9.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!-- start: Favicon -->*/
/*         <link rel="shortcut icon" href="{{asset('bundles/egovmainbundle/img/favicon.ico')}}">*/
/*         <!-- end: Favicon -->*/
/* */
/* */
/* */
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         <!-- start: Header -->*/
/*         <div class="navbar">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container-fluid">*/
/*                     <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <a class="brand" href="{{asset('bundles/egovmainbundle/index.html')}}"><span></span></a>*/
/* */
/*                     <!-- start: Header Menu -->*/
/*                     <div class="nav-no-collapse header-nav">*/
/*                         <ul class="nav pull-right">*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-bell"></i>*/
/*                                     <span class="badge red">*/
/*                                         7 </span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu notifications">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 11 notifications</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>	*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon blue"><i class="icon-user"></i></span>*/
/*                                             <span class="message">New user registration</span>*/
/*                                             <span class="time">1 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon green"><i class="icon-comment-alt"></i></span>*/
/*                                             <span class="message">New comment</span>*/
/*                                             <span class="time">7 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon green"><i class="icon-comment-alt"></i></span>*/
/*                                             <span class="message">New comment</span>*/
/*                                             <span class="time">8 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon green"><i class="icon-comment-alt"></i></span>*/
/*                                             <span class="message">New comment</span>*/
/*                                             <span class="time">16 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon blue"><i class="icon-user"></i></span>*/
/*                                             <span class="message">New user registration</span>*/
/*                                             <span class="time">36 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon yellow"><i class="icon-shopping-cart"></i></span>*/
/*                                             <span class="message">2 items sold</span>*/
/*                                             <span class="time">1 hour</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="warning">*/
/*                                         <a href="#">*/
/*                                             <span class="icon red"><i class="icon-user"></i></span>*/
/*                                             <span class="message">User deleted account</span>*/
/*                                             <span class="time">2 hour</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="warning">*/
/*                                         <a href="#">*/
/*                                             <span class="icon red"><i class="icon-shopping-cart"></i></span>*/
/*                                             <span class="message">New comment</span>*/
/*                                             <span class="time">6 hour</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon green"><i class="icon-comment-alt"></i></span>*/
/*                                             <span class="message">New comment</span>*/
/*                                             <span class="time">yesterday</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon blue"><i class="icon-user"></i></span>*/
/*                                             <span class="message">New user registration</span>*/
/*                                             <span class="time">yesterday</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="dropdown-menu-sub-footer">*/
/*                                         <a>View all notifications</a>*/
/*                                     </li>	*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- start: Notifications Dropdown -->*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-calendar"></i>*/
/*                                     <span class="badge red">*/
/*                                         5 </span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu tasks">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 17 tasks in progress</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">iOS Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim red">80</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">Android Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim green">47</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">ARM Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim yellow">32</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">ARM Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim greenLight">63</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">ARM Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim orange">80</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a class="dropdown-menu-sub-footer">View all tasks</a>*/
/*                                     </li>	*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- end: Notifications Dropdown -->*/
/*                             <!-- start: Message Dropdown -->*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-envelope"></i>*/
/*                                     <span class="badge red">*/
/*                                         4 </span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu messages">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 9 messages</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>	*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('bundles/egovmainbundle/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                 </span>*/
/*                                                 <span class="time">*/
/*                                                     6 min*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('bundles/egovmainbundle/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                 </span>*/
/*                                                 <span class="time">*/
/*                                                     56 min*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('bundles/egovmainbundle/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                 </span>*/
/*                                                 <span class="time">*/
/*                                                     3 hours*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('bundles/egovmainbundle/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                 </span>*/
/*                                                 <span class="time">*/
/*                                                     yesterday*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('bundles/egovmainbundle/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                 </span>*/
/*                                                 <span class="time">*/
/*                                                     Jul 25, 2012*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a class="dropdown-menu-sub-footer">View all messages</a>*/
/*                                     </li>	*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             <!-- start: User Dropdown -->*/
/*                             <li class="dropdown">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white user"></i> Dennis Ji*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>Account Settings</span>*/
/*                                     </li>*/
/*                                     <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>*/
/*                                     <li><a href="{{asset('bundles/egovmainbundle/login.html')}}"><i class="halflings-icon off"></i> Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- end: User Dropdown -->*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- end: Header Menu -->*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- start: Header -->*/
/* */
/*         <div class="container-fluid-full">*/
/*             <div class="row-fluid">*/
/* */
/*                 <!-- start: Main Menu -->*/
/*                 <div id="sidebar-left" class="span2">*/
/*                     <div class="nav-collapse sidebar-nav">*/
/*                         <ul class="nav nav-tabs nav-stacked main-menu">*/
/*                             <li><a href="{{path('demande_cpp')}}"><span class="hidden-tablet"> Compte CPP </span></a></li>	*/
/*                             <li><a href="{{path('demande_cin')}}"><span class="hidden-tablet"> Demande Cin</span></a></li>*/
/*                             <li><a href="{{path('demande_b3')}}"><span class="hidden-tablet"> Demande B3</span></a></li>*/
/*                                                               <li><a href="{{ path('logout') }}"><i class="icon-angle-right"></i><span class="hidden-tablet"> Logout</span></a></li>*/
/* */
/*                             <li>*/
/*                                 <ul>*/
/*                                     <li><a class="submenu" href="{{asset('bundles/egovmainbundle/submenu.html')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>*/
/*                                     <li><a class="submenu" href="{{asset('bundles/egovmainbundle/submenu2.html')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>*/
/*                                     <li><a class="submenu" href="{{asset('bundles/egovmainbundle/submenu3.html')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>*/
/* */
/*                                 </ul>	*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- end: Main Menu -->*/
/* */
/*                 <noscript>*/
/*                 <div class="alert alert-block span10">*/
/*                     <h4 class="alert-heading">Warning!</h4>*/
/*                     <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>*/
/*                 </div>*/
/*                 </noscript>*/
/* */
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div><!--/fluid-row-->*/
/* */
/*             <div class="modal hide fade" id="myModal">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">×</button>*/
/*                     <h3>Settings</h3>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p>Here settings can be configured...</p>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <a href="#" class="btn" data-dismiss="modal">Close</a>*/
/*                     <a href="#" class="btn btn-primary">Save changes</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                 <div class="modal-content">*/
/*                     <ul class="list-inline item-details">*/
/*                         <li><a href="http://themifycloud.com">Admin templates</a></li>*/
/*                         <li><a href="http://themescloud.org">Bootstrap themes</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/* */
/*             <footer>*/
/* */
/*                 <p>*/
/*                     <span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>*/
/* */
/*                 </p>*/
/* */
/*             </footer>*/
/* */
/*             <!-- start: JavaScript-->*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery-1.9.1.min.js')}}"></script>*/
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery-migrate-1.0.0.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery-ui-1.10.0.custom.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.ui.touch-punch.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/modernizr.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/bootstrap.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.cookie.js')}}"></script>*/
/* */
/*             <script src='js/fullcalendar.min.js'></script>*/
/* */
/*             <script src='js/jquery.dataTables.min.js'></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/excanvas.js')}}"></script>*/
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.flot.js')}}"></script>*/
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.flot.pie.js')}}"></script>*/
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.flot.stack.js')}}"></script>*/
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.flot.resize.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.chosen.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.uniform.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.cleditor.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.noty.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.elfinder.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.raty.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.iphone.toggle.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.uploadify-3.1.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.gritter.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.imagesloaded.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.masonry.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.knob.modified.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/jquery.sparkline.min.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/counter.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/retina.js')}}"></script>*/
/* */
/*             <script src="{{asset('bundles/egovmainbundle/js/custom.js')}}"></script>*/
/*             <!-- end: JavaScript-->*/
/* */
/*     </body>*/
/* </html>*/
/* */
