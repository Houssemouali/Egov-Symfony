<?php

/* BackOfficebackBundle::Layout.html.twig */
class __TwigTemplate_302aac3335b1c0ff7a65645ded454cdd443c2e3ba763df3a1ca5d61f3599c244 extends Twig_Template
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
        <title></title>
        <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
        <meta name=\"author\" content=\"Dennis Ji\">
        <meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        
        <link id=\"bootstrap-style\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link id=\"base-style\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js')}}\"></script>
                <link id=\"ie-style\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!--[if IE 9]>
                <link id=\"ie9style\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 40
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
                    <a class=\"brand\" href=\"index.html\"><span></span></a>

                    <!-- start: Header Menu -->
                   
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
                            <li><a href=\"index.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> </span></a></li>\t
                            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance");
        echo "\"><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> ExtraitNaissance</span></a></li>
                            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("demandeextrait");
        echo "\"></i><span class=\"hidden-tablet\"> Demande des extraits</span></a></li>
                            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("fosuser");
        echo "\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Gestion des utilisateurs</span></a></li>
                            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("fosuser_agent");
        echo "\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> Ajout Agent</span></a></li>
                            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"icon-angle-right\"></i><span class=\"hidden-tablet\"> Logout</span></a></li>
                            
                            <li>
                                <ul>
                                    <li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>
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

                <!-- start: Content -->
                <div id=\"content\" class=\"span10\">


                    <ul class=\"breadcrumb\">
                        <li>
                            <i class=\"icon-home\"></i>
                            <a href=\"index.html\">Home</a> 
                            <i class=\"icon-angle-right\"></i>
                        </li>
                        <li><a href=\"#\"></a></li>
                    </ul>
                    ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 117
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
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

        <script src='";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/fullcalendar.min.js"), "html", null, true);
        echo "'></script>

        <script src='";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/counter.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/retina.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("BackOffice/js/custom.js"), "html", null, true);
        echo "\"></script>
        <!-- end: JavaScript-->

    </body>
</html>
";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
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
        return array (  374 => 116,  371 => 115,  361 => 212,  356 => 210,  351 => 208,  346 => 206,  341 => 204,  336 => 202,  331 => 200,  326 => 198,  321 => 196,  316 => 194,  311 => 192,  306 => 190,  301 => 188,  296 => 186,  291 => 184,  286 => 182,  281 => 180,  277 => 179,  273 => 178,  269 => 177,  265 => 176,  260 => 174,  255 => 172,  250 => 170,  245 => 168,  240 => 166,  235 => 164,  230 => 162,  225 => 160,  221 => 159,  177 => 117,  175 => 115,  138 => 81,  134 => 80,  130 => 79,  126 => 78,  122 => 77,  82 => 40,  75 => 36,  68 => 32,  57 => 24,  53 => 23,  48 => 21,  44 => 20,  40 => 19,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/* */
/*         <!-- start: Meta -->*/
/*         <meta charset="utf-8">*/
/*         <title></title>*/
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
/*         */
/*         <link id="bootstrap-style" href="{{asset('BackOffice/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('BackOffice/css/bootstrap-responsive.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('BackOffice/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/* */
/*         <link id="base-style" href="{{asset('BackOffice/css/style.css')}}" rel="stylesheet">*/
/*         <link id="base-style-responsive" href="{{asset('BackOffice/css/style-responsive.css')}}" rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>*/
/*         <!-- end: CSS -->*/
/* */
/* */
/*         <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]>*/
/*                 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>*/
/*                 <link id="ie-style" href="{{asset('BackOffice/css/ie.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!--[if IE 9]>*/
/*                 <link id="ie9style" href="{{asset('BackOffice/css/ie9.css')}}" rel="stylesheet">*/
/*         <![endif]-->*/
/* */
/*         <!-- start: Favicon -->*/
/*         <link rel="shortcut icon" href="{{asset('BackOffice/img/favicon.ico')}}">*/
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
/*                     <a class="brand" href="index.html"><span></span></a>*/
/* */
/*                     <!-- start: Header Menu -->*/
/*                    */
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
/*                             <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> </span></a></li>	*/
/*                             <li><a href="{{ path('back_officeback_extraitnaissance') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> ExtraitNaissance</span></a></li>*/
/*                             <li><a href="{{ path('demandeextrait') }}"></i><span class="hidden-tablet"> Demande des extraits</span></a></li>*/
/*                             <li><a href="{{ path('fosuser') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Gestion des utilisateurs</span></a></li>*/
/*                             <li><a href="{{ path('fosuser_agent') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Ajout Agent</span></a></li>*/
/*                             <li><a href="{{ path('logout') }}"><i class="icon-angle-right"></i><span class="hidden-tablet"> Logout</span></a></li>*/
/*                             */
/*                             <li>*/
/*                                 <ul>*/
/*                                     <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>*/
/*                                     <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>*/
/*                                     <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>*/
/*                                 </ul>	*/
/*                             </li>*/
/*                             */
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
/*                         <li><a href="#"></a></li>*/
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
/*         <script src="{{asset('BackOffice/js/jquery-1.9.1.min.js')}}"></script>*/
/*         <script src="{{asset('BackOffice/js/jquery-migrate-1.0.0.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery-ui-1.10.0.custom.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.ui.touch-punch.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/modernizr.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.cookie.js')}}"></script>*/
/* */
/*         <script src='{{asset('BackOffice/js/fullcalendar.min.js')}}'></script>*/
/* */
/*         <script src='{{asset('BackOffice/js/jquery.dataTables.min.js')}}'></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/excanvas.js')}}"></script>*/
/*         <script src="{{asset('BackOffice/js/jquery.flot.js')}}"></script>*/
/*         <script src="{{asset('BackOffice/js/jquery.flot.pie.js')}}"></script>*/
/*         <script src="{{asset('BackOffice/js/jquery.flot.stack.js')}}"></script>*/
/*         <script src="{{asset('BackOffice/js/jquery.flot.resize.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.chosen.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.uniform.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.cleditor.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.noty.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.elfinder.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.raty.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.iphone.toggle.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.uploadify-3.1.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.gritter.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.imagesloaded.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.masonry.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.knob.modified.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/jquery.sparkline.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/counter.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/retina.js')}}"></script>*/
/* */
/*         <script src="{{asset('BackOffice/js/custom.js')}}"></script>*/
/*         <!-- end: JavaScript-->*/
/* */
/*     </body>*/
/* </html>*/
/* */
