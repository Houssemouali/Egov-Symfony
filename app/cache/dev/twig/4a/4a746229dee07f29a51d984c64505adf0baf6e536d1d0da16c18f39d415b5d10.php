<?php

/* InterCinBundle:BackOffice:base.html.twig */
class __TwigTemplate_4462257f9197352157d78a51744da1b45ef97c29631f3dcbfc8c16803086d1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js')}}\"></script>
                <link id=\"ie-style\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!--[if IE 9]>
                <link id=\"ie9style\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/favicon.ico"), "html", null, true);
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
                    <a class=\"brand\" href=\"index.html\"><span>EGOV TUNISIE</span></a>

                    <!-- start: Header Menu -->
                    <div class=\"nav-no-collapse header-nav\">
                        <ul class=\"nav pull-right\">
                            <li class=\"dropdown hidden-phone\">
                               <!--   <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge red\">
                                        7 </span>
                                </a>-->
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
                                <!--  <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge red\">
                                        5 </span>
                                </a> -->
                                <ul class=\"dropdown-menu tasks\">
                                    <!--<li class=\"dropdown-menu-title\">
                                        <span>You have 17 tasks in progress</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>-->
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
                              <!--   <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"icon-envelope\"></i>
                                    <span class=\"badge red\">
                                        4 </span>
                                </a> -->
                                <ul class=\"dropdown-menu messages\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 9 messages</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>\t
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Houssem
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/avatar.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/img/avatar.jpg"), "html", null, true);
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
                                    <i class=\"halflings-icon white user\"></i> Houssem
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
                          
                            </li>
                           
                            <li><a href=\"";
        // line 342
        echo $this->env->getExtension('routing')->getPath("egov_back_listcin_cine");
        echo "\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> CIN</span></a></li>
                           
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
        // line 369
        $this->displayBlock('body', $context, $blocks);
        // line 371
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
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

        <script src='";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/fullcalendar.min.js"), "html", null, true);
        echo "'></script>

        <script src='";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

        <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/counter.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/retina.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsb/js/custom.js"), "html", null, true);
        echo "\"></script>
        <!-- end: JavaScript-->
     
";
        // line 469
        $this->displayBlock('javascript', $context, $blocks);
        // line 471
        echo "    </body>
</html>
";
    }

    // line 369
    public function block_body($context, array $blocks = array())
    {
        // line 370
        echo "                    ";
    }

    // line 469
    public function block_javascript($context, array $blocks = array())
    {
        // line 470
        echo "    ";
    }

    public function getTemplateName()
    {
        return "InterCinBundle:BackOffice:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 470,  637 => 469,  633 => 370,  630 => 369,  624 => 471,  622 => 469,  616 => 466,  611 => 464,  606 => 462,  601 => 460,  596 => 458,  591 => 456,  586 => 454,  581 => 452,  576 => 450,  571 => 448,  566 => 446,  561 => 444,  556 => 442,  551 => 440,  546 => 438,  541 => 436,  536 => 434,  532 => 433,  528 => 432,  524 => 431,  520 => 430,  515 => 428,  510 => 426,  505 => 424,  500 => 422,  495 => 420,  490 => 418,  485 => 416,  480 => 414,  476 => 413,  432 => 371,  430 => 369,  400 => 342,  342 => 287,  323 => 271,  304 => 255,  285 => 239,  266 => 223,  77 => 37,  70 => 33,  63 => 29,  52 => 21,  48 => 20,  44 => 19,  40 => 18,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/* */
/*         <!-- start: Meta -->*/
/*         <meta charset="utf-8">*/
/*         <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>*/
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
/*         <link id="bootstrap-style" href="{{asset('assetsb/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('assetsb/css/bootstrap-responsive.min.css')}}" rel="stylesheet">*/
/*         <link id="base-style" href="{{asset('assetsb/css/style.css')}}" rel="stylesheet">*/
/*         <link id="base-style-responsive" href="{{asset('assetsb/css/style-responsive.css')}}" rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>*/
/*         <!-- end: CSS -->*/
/* */
/* */
/*         <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]>*/
/*                 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>*/
/*                 <link id="ie-style" href="{{asset('assetsb/css/ie.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!--[if IE 9]>*/
/*                 <link id="ie9style" href="{{asset('assetsb/css/ie9.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!-- start: Favicon -->*/
/*         <link rel="shortcut icon" href="{{asset('assetsb/img/favicon.ico')}}">*/
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
/*                     <a class="brand" href="index.html"><span>EGOV TUNISIE</span></a>*/
/* */
/*                     <!-- start: Header Menu -->*/
/*                     <div class="nav-no-collapse header-nav">*/
/*                         <ul class="nav pull-right">*/
/*                             <li class="dropdown hidden-phone">*/
/*                                <!--   <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-bell"></i>*/
/*                                     <span class="badge red">*/
/*                                         7 </span>*/
/*                                 </a>-->*/
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
/*                                 <!--  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-calendar"></i>*/
/*                                     <span class="badge red">*/
/*                                         5 </span>*/
/*                                 </a> -->*/
/*                                 <ul class="dropdown-menu tasks">*/
/*                                     <!--<li class="dropdown-menu-title">*/
/*                                         <span>You have 17 tasks in progress</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>-->*/
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
/*                               <!--   <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="icon-envelope"></i>*/
/*                                     <span class="badge red">*/
/*                                         4 </span>*/
/*                                 </a> -->*/
/*                                 <ul class="dropdown-menu messages">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 9 messages</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>	*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="{{asset('assetsb/img/avatar.jpg')}}" alt="Avatar"></span>*/
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
/*                                             <span class="avatar"><img src="{{asset('assetsb/img/avatar.jpg')}}" alt="Avatar"></span>*/
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
/*                                             <span class="avatar"><img src="{{asset('assetsb/img/avatar.jpg')}}" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Houssem*/
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
/*                                             <span class="avatar"><img src="{{asset('assetsb/img/avatar.jpg')}}" alt="Avatar"></span>*/
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
/*                                             <span class="avatar"><img src="{{asset('assetsb/img/avatar.jpg')}}" alt="Avatar"></span>*/
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
/*                                     <i class="halflings-icon white user"></i> Houssem*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>Account Settings</span>*/
/*                                     </li>*/
/*                                     <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>*/
/*                                     <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>*/
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
/*                             <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	*/
/*                           */
/*                             </li>*/
/*                            */
/*                             <li><a href="{{path('egov_back_listcin_cine')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> CIN</span></a></li>*/
/*                            */
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
/*                 <!-- start: Content -->*/
/*                 <div id="content" class="span10">*/
/* */
/* */
/*                     <ul class="breadcrumb">*/
/*                         <li>*/
/*                             <i class="icon-home"></i>*/
/*                             <a href="index.html">Home</a> */
/*                             <i class="icon-angle-right"></i>*/
/*                         </li>*/
/*                         */
/*                         <li><a href="#">Dashboard</a></li>*/
/*                     </ul>*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div><!--/.fluid-container-->*/
/* */
/*                 <!-- end: Content -->*/
/*             </div><!--/#content.span10-->*/
/*         </div><!--/fluid-row-->*/
/* */
/*         <div class="modal hide fade" id="myModal">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal">×</button>*/
/*                 <h3>Settings</h3>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <p>Here settings can be configured...</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <a href="#" class="btn" data-dismiss="modal">Close</a>*/
/*                 <a href="#" class="btn btn-primary">Save changes</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">*/
/*             <div class="modal-content">*/
/*                 <ul class="list-inline item-details">*/
/*                     <li><a href="http://themifycloud.com">Admin templates</a></li>*/
/*                     <li><a href="http://themescloud.org">Bootstrap themes</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="clearfix"></div>*/
/* */
/*         <footer>*/
/* */
/*             <p>*/
/*                 <span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>*/
/* */
/*             </p>*/
/* */
/*         </footer>*/
/* */
/*         <!-- start: JavaScript-->*/
/* */
/*         <script src="{{asset('assetsb/js/jquery-1.9.1.min.js')}}"></script>*/
/*         <script src="{{asset('assetsb/js/jquery-migrate-1.0.0.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery-ui-1.10.0.custom.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.ui.touch-punch.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/modernizr.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.cookie.js')}}"></script>*/
/* */
/*         <script src='{{asset('assetsb/js/fullcalendar.min.js')}}'></script>*/
/* */
/*         <script src='{{asset('assetsb/js/jquery.dataTables.min.js')}}'></script>*/
/* */
/*         <script src="{{asset('assetsb/js/excanvas.js')}}"></script>*/
/*         <script src="{{asset('assetsb/js/jquery.flot.js')}}"></script>*/
/*         <script src="{{asset('assetsb/js/jquery.flot.pie.js')}}"></script>*/
/*         <script src="{{asset('assetsb/js/jquery.flot.stack.js')}}"></script>*/
/*         <script src="{{asset('assetsb/js/jquery.flot.resize.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.chosen.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.uniform.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.cleditor.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.noty.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.elfinder.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.raty.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.iphone.toggle.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.uploadify-3.1.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.gritter.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.imagesloaded.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.masonry.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.knob.modified.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/jquery.sparkline.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/counter.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/retina.js')}}"></script>*/
/* */
/*         <script src="{{asset('assetsb/js/custom.js')}}"></script>*/
/*         <!-- end: JavaScript-->*/
/*      */
/* {% block javascript %}*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
