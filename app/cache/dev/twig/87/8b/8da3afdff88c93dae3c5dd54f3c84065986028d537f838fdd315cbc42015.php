<?php

/* BackOfficebackBundle::Layout.html.twig */
class __TwigTemplate_878b8da3afdff88c93dae3c5dd54f3c84065986028d537f838fdd315cbc42015 extends Twig_Template
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
        <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js')}}\"></script>
                <link id=\"ie-style\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!--[if IE 9]>
                <link id=\"ie9style\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/favicon.ico"), "html", null, true);
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
                    <a class=\"brand\" href=\"index.html\"><span>JANUX</span></a>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/img/avatar.jpg"), "html", null, true);
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
                                    <li><a href=\"login.html\"><i class=\"halflings-icon off\"></i> Logout</a></li>
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
                            <li><a href=\"index.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>\t
                            <li><a href=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance");
        echo "\"><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> ExtraitNaissance</span></a></li>
                            <li><a href=\"tasks.html\"><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> CIN</span></a></li>
                            <li><a href=\"ui.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> UI Features</span></a></li>
                            <li><a href=\"widgets.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> Widgets</span></a></li>
                            <li>
                                <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Dropdown</span><span class=\"label label-important\"> 3 </span></a>
                                <ul>
                                    <li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>
                                </ul>\t
                            </li>
                            <li><a href=\"form.html\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Forms</span></a></li>
                            <li><a href=\"chart.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Charts</span></a></li>
                            <li><a href=\"typography.html\"><i class=\"icon-font\"></i><span class=\"hidden-tablet\"> Typography</span></a></li>
                            <li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span class=\"hidden-tablet\"> Gallery</span></a></li>
                            <li><a href=\"table.html\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Tables</span></a></li>
                            <li><a href=\"calendar.html\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Calendar</span></a></li>
                            <li><a href=\"file-manager.html\"><i class=\"icon-folder-open\"></i><span class=\"hidden-tablet\"> File Manager</span></a></li>
                            <li><a href=\"icon.html\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Icons</span></a></li>
                            <li><a href=\"login.html\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Login Page</span></a></li>
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

                <!-- start: Content -->
                <div id=\"content\" class=\"span10\">


                    <ul class=\"breadcrumb\">
                        <li>
                            <i class=\"icon-home\"></i>
                            <a href=\"index.html\">Home</a> 
                            <i class=\"icon-angle-right\"></i>
                        </li>
                        <li><a href=\"#\">Dashboard</a></li>
                    </ul>
                    ";
        // line 384
        $this->displayBlock('body', $context, $blocks);
        // line 386
        echo "                </div><!--/.fluid-container-->

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

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
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

        <script src='";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/fullcalendar.min.js"), "html", null, true);
        echo "'></script>

        <script src='";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/counter.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/retina.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/custom.js"), "html", null, true);
        echo "\"></script>
        <!-- end: JavaScript-->

    </body>
</html>
";
    }

    // line 384
    public function block_body($context, array $blocks = array())
    {
        // line 385
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 385,  640 => 384,  630 => 481,  625 => 479,  620 => 477,  615 => 475,  610 => 473,  605 => 471,  600 => 469,  595 => 467,  590 => 465,  585 => 463,  580 => 461,  575 => 459,  570 => 457,  565 => 455,  560 => 453,  555 => 451,  550 => 449,  546 => 448,  542 => 447,  538 => 446,  534 => 445,  529 => 443,  524 => 441,  519 => 439,  514 => 437,  509 => 435,  504 => 433,  499 => 431,  494 => 429,  490 => 428,  446 => 386,  444 => 384,  396 => 339,  341 => 287,  322 => 271,  303 => 255,  284 => 239,  265 => 223,  76 => 37,  69 => 33,  62 => 29,  51 => 21,  47 => 20,  43 => 19,  39 => 18,  20 => 1,);
    }
}
