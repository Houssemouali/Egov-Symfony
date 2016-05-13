<?php

/* MyAppUserBundle:Default:loginInscription.html.twig */
class __TwigTemplate_2af3446f6aa417b41ce855925954dbaed8fb98a5edfa857b53c08daa51c4bf91 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Egov Tunisie login &amp; Inscription</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/css/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/css/style.css"), "html", null, true);
        echo "\">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') )}}</script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') )}}</script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/ico/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

    </head>

    <body style=\"background-color:#19b9e7\">

        <!-- Top content -->
        <div class=\"top-content\">
        \t
            <div class=\"inner-bg\">
                <div class=\"container\">
                \t
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 text\">
                            <h1><strong>Egov Tunisie</strong> Login &amp; Inscription</h1>
                           
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                        \t
                        \t<div class=\"form-box\">
                                     
\t                        \t<div class=\"form-top\">
\t                        \t\t<div class=\"form-top-left\">
\t                        \t\t\t<h3><center>Login</center></h3>
\t                            \t\t<p>Votre nom utilisateur et mot de passe:</p>
\t                        \t\t</div>
\t                        \t\t<div class=\"form-top-right\">
\t                        \t\t\t<i class=\"fa fa-key\"></i>
\t                        \t\t</div>
\t                            </div>
                                    
                                    ";
        // line 64
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 66
        echo "\t                           ";
        // line 79
        echo "\t\t                    </div>
                                        
\t\t                 <!-- Social
\t\t                \t<div class=\"social-login\">
\t                        \t<h3>...or login with:</h3>
\t                        \t<div class=\"social-login-buttons\">
\t\t                        \t<a class=\"btn btn-link-1 btn-link-1-facebook\" href=\"#\">
\t\t                        \t\t<i class=\"fa fa-facebook\"></i> Facebook
\t\t                        \t</a>
\t\t                        \t<a class=\"btn btn-link-1 btn-link-1-twitter\" href=\"#\">
\t\t                        \t\t<i class=\"fa fa-twitter\"></i> Twitter
\t\t                        \t</a>
\t\t                        \t<a class=\"btn btn-link-1 btn-link-1-google-plus\" href=\"#\">
\t\t                        \t\t<i class=\"fa fa-google-plus\"></i> Google Plus
\t\t                        \t</a>
\t                        \t</div>
\t                        </div>
                             -->
\t                        
                        </div>
                        
                        <div class=\"col-sm-1 middle-border\"></div>
                        <div class=\"col-sm-1\"></div>
                        \t
                        <div class=\"col-sm-5\">
                        \t
                        \t<div class=\"form-box\">
                        \t\t<div class=\"form-top\">
\t                        \t\t<div class=\"form-top-left\">
\t                        \t\t\t<h3>Sign up now</h3>
\t                            \t\t
\t                        \t\t</div>
\t                        \t\t<div class=\"form-top-right\">
\t                        \t\t\t<i class=\"fa fa-pencil\"></i>
\t                        \t\t</div>
\t                            </div>
\t                            <div class=\"form-bottom\">
\t\t\t\t                    <form role=\"form\" action=\"\" method=\"post\" class=\"registration-form\">
\t\t\t\t                    \t<div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"form-email\">Email</label>
                                            <input type=\"text\" name=\"form-email\" placeholder=\"Email...\" class=\"form-email form-control\" id=\"form-email\">
                                        </div>
\t\t\t\t                        <div class=\"form-group\">
\t\t\t\t                        \t<label class=\"sr-only\" for=\"form-last-name\">Last name</label>
\t\t\t\t                        \t<input type=\"text\" name=\"form-last-name\" placeholder=\"nom d utilisateur...\" class=\"form-last-name form-control\" id=\"form-last-name\">
\t\t\t\t                        </div>
\t\t\t\t                        <div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"form-password\">Password</label>
                                            <input type=\"password\" name=\"form-password\" placeholder=\"Mot de passe ...\" class=\"form-password form-control\" id=\"form-password\">
                                        </div>
\t\t\t\t                         <div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"form-password\">Password</label>
                                            <input type=\"password\" name=\"form-password\" placeholder=\"Mot de passe de nouveau...\" class=\"form-password form-control\" id=\"form-password\">
                                        </div>
\t\t\t\t                        <button type=\"submit\" class=\"btn\">inscription!</button>
\t\t\t\t                    </form>
\t\t\t                    </div>
                        \t</div>
                        \t
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer
        <footer>
        \t<div class=\"container\">
        \t\t<div class=\"row\">
        \t\t\t
        \t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
        \t\t\t\t<div class=\"footer-border\"></div>
        \t\t\t\t<p>Made by Anli Zaimi at <a href=\"http://azmind.com\" target=\"_blank\"><strong>AZMIND</strong></a> 
        \t\t\t\t\thaving a lot of fun. <i class=\"fa fa-smile-o\"></i></p>
        \t\t\t</div>
        \t\t\t
        \t\t</div>
        \t</div>
        </footer> -->

        <!-- Javascript -->
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/js/scripts.js"), "html", null, true);
        echo "\"></script>
        
        <!--[if lt IE 10]>
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetlogin/js/placeholder.js"), "html", null, true);
        echo "\"> </script>
        <![endif]-->

    </body>

</html>";
    }

    // line 64
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 65
        echo "                                        ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Default:loginInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 65,  229 => 64,  219 => 168,  213 => 165,  209 => 164,  205 => 163,  201 => 162,  116 => 79,  114 => 66,  112 => 64,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  59 => 26,  46 => 16,  42 => 15,  38 => 14,  34 => 13,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Egov Tunisie login &amp; Inscription</title>*/
/* */
/*         <!-- CSS -->*/
/*         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">*/
/*         <link rel="stylesheet" href="{{ asset('assetlogin/bootstrap/css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{ asset('assetlogin/font-awesome/css/font-awesome.min.css')}}">*/
/* 	<link rel="stylesheet" href="{{ asset('assetlogin/css/form-elements.css')}}">*/
/*         <link rel="stylesheet" href="{{ asset('assetlogin/css/style.css')}}">*/
/*         */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') )}}</script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') )}}</script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Favicon and touch icons -->*/
/*         <link rel="shortcut icon" href="{{ asset('assetlogin/ico/favicon.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assetlogin/ico/apple-touch-icon-144-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assetlogin/ico/apple-touch-icon-114-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assetlogin/ico/apple-touch-icon-72-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" href="{{ asset('assetlogin/ico/apple-touch-icon-57-precomposed.png')}}">*/
/* */
/*     </head>*/
/* */
/*     <body style="background-color:#19b9e7">*/
/* */
/*         <!-- Top content -->*/
/*         <div class="top-content">*/
/*         	*/
/*             <div class="inner-bg">*/
/*                 <div class="container">*/
/*                 	*/
/*                     <div class="row">*/
/*                         <div class="col-sm-8 col-sm-offset-2 text">*/
/*                             <h1><strong>Egov Tunisie</strong> Login &amp; Inscription</h1>*/
/*                            */
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="row">*/
/*                         <div class="col-sm-5">*/
/*                         	*/
/*                         	<div class="form-box">*/
/*                                      */
/* 	                        	<div class="form-top">*/
/* 	                        		<div class="form-top-left">*/
/* 	                        			<h3><center>Login</center></h3>*/
/* 	                            		<p>Votre nom utilisateur et mot de passe:</p>*/
/* 	                        		</div>*/
/* 	                        		<div class="form-top-right">*/
/* 	                        			<i class="fa fa-key"></i>*/
/* 	                        		</div>*/
/* 	                            </div>*/
/*                                     */
/*                                     {% block fos_user_content %}*/
/*                                         {% endblock fos_user_content %}*/
/* 	                           {# <div class="form-bottom">*/
/* 				                    <form role="form" action="" method="post" class="login-form">*/
/* 				                    	<div class="form-group">*/
/* 				                    		<label class="sr-only" for="form-username">Username</label>*/
/* 				                        	<input type="text" name="form-username" placeholder="Utilisateur..." class="form-username form-control" id="form-username">*/
/* 				                        </div>*/
/* 				                        <div class="form-group">*/
/* 				                        	<label class="sr-only" for="form-password">Password</label>*/
/* 				                        	<input type="password" >*/
/* 				                        </div>*/
/* 				                        <button type="submit" class="btn">Authentifier!</button>*/
/* 				                    </form>*/
/* 			                    </div>#}*/
/* 		                    </div>*/
/*                                         */
/* 		                 <!-- Social*/
/* 		                	<div class="social-login">*/
/* 	                        	<h3>...or login with:</h3>*/
/* 	                        	<div class="social-login-buttons">*/
/* 		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">*/
/* 		                        		<i class="fa fa-facebook"></i> Facebook*/
/* 		                        	</a>*/
/* 		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">*/
/* 		                        		<i class="fa fa-twitter"></i> Twitter*/
/* 		                        	</a>*/
/* 		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">*/
/* 		                        		<i class="fa fa-google-plus"></i> Google Plus*/
/* 		                        	</a>*/
/* 	                        	</div>*/
/* 	                        </div>*/
/*                              -->*/
/* 	                        */
/*                         </div>*/
/*                         */
/*                         <div class="col-sm-1 middle-border"></div>*/
/*                         <div class="col-sm-1"></div>*/
/*                         	*/
/*                         <div class="col-sm-5">*/
/*                         	*/
/*                         	<div class="form-box">*/
/*                         		<div class="form-top">*/
/* 	                        		<div class="form-top-left">*/
/* 	                        			<h3>Sign up now</h3>*/
/* 	                            		*/
/* 	                        		</div>*/
/* 	                        		<div class="form-top-right">*/
/* 	                        			<i class="fa fa-pencil"></i>*/
/* 	                        		</div>*/
/* 	                            </div>*/
/* 	                            <div class="form-bottom">*/
/* 				                    <form role="form" action="" method="post" class="registration-form">*/
/* 				                    	<div class="form-group">*/
/*                                             <label class="sr-only" for="form-email">Email</label>*/
/*                                             <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">*/
/*                                         </div>*/
/* 				                        <div class="form-group">*/
/* 				                        	<label class="sr-only" for="form-last-name">Last name</label>*/
/* 				                        	<input type="text" name="form-last-name" placeholder="nom d utilisateur..." class="form-last-name form-control" id="form-last-name">*/
/* 				                        </div>*/
/* 				                        <div class="form-group">*/
/*                                             <label class="sr-only" for="form-password">Password</label>*/
/*                                             <input type="password" name="form-password" placeholder="Mot de passe ..." class="form-password form-control" id="form-password">*/
/*                                         </div>*/
/* 				                         <div class="form-group">*/
/*                                             <label class="sr-only" for="form-password">Password</label>*/
/*                                             <input type="password" name="form-password" placeholder="Mot de passe de nouveau..." class="form-password form-control" id="form-password">*/
/*                                         </div>*/
/* 				                        <button type="submit" class="btn">inscription!</button>*/
/* 				                    </form>*/
/* 			                    </div>*/
/*                         	</div>*/
/*                         	*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*             */
/*         </div>*/
/* */
/*         <!-- Footer*/
/*         <footer>*/
/*         	<div class="container">*/
/*         		<div class="row">*/
/*         			*/
/*         			<div class="col-sm-8 col-sm-offset-2">*/
/*         				<div class="footer-border"></div>*/
/*         				<p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a> */
/*         					having a lot of fun. <i class="fa fa-smile-o"></i></p>*/
/*         			</div>*/
/*         			*/
/*         		</div>*/
/*         	</div>*/
/*         </footer> -->*/
/* */
/*         <!-- Javascript -->*/
/*         <script src="{{asset('assetlogin/js/jquery-1.11.1.min.js') }}"></script>*/
/*         <script src="{{asset('assetlogin/bootstrap/js/bootstrap.min.js' )}}"></script>*/
/*         <script src="{{asset('assetlogin/js/jquery.backstretch.min.js' )}}"></script>*/
/*         <script src="{{asset('assetlogin/js/scripts.js' )}}"></script>*/
/*         */
/*         <!--[if lt IE 10]>*/
/*             <script src="{{asset('assetlogin/js/placeholder.js' )}}"> </script>*/
/*         <![endif]-->*/
/* */
/*     </body>*/
/* */
/* </html>*/
