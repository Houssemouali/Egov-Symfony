<?php

/* EgovMainBundle:FrontOffice:ajoutauto.html.twig */
class __TwigTemplate_7d9df90a67a60c31a5f3aed7133e96087e82b6115339db0eb1f327a48d6edab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.10,  -->
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"generator\" content=\"Mobirise v2.10, mobirise.com\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/images/logo.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <meta name=\"description\" content=\"\">
  
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/socicon/css/socicon.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/mobirise/css/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/mobirise/css/mbr-additional.css"), "html", null, true);
        echo "\" type=\"text/css\">
   <!-- start: CSS <link id=\"bootstrap-style\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
        
      <link id=\"bootstrap-style\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- end: CSS -->
  
  
      

</head>
<body>
<section class=\"mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse\" id=\"ext_menu-5\">
    <div class=\"mbr-navbar__section mbr-section\">
        <div class=\"mbr-section__container container\">
            <div class=\"mbr-navbar__container\">
                <div class=\"mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand\">
                    <span class=\"mbr-navbar__brand-link mbr-brand mbr-brand--inline\">
                        <span class=\"mbr-brand__logo\"><a href=\"\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/images/logo-245x85-15.png"), "html", null, true);
        echo "\" class=\"mbr-navbar__brand-img mbr-brand__img\" alt=\"Mobirise\"></a></span>
                        <span class=\"mbr-brand__name\"><a class=\"mbr-brand__name text-white\" href=\"\">EGOV</a></span>
                    </span>
                </div>
                <div class=\"mbr-navbar__hamburger mbr-hamburger\"><span class=\"mbr-hamburger__line\"></span></div>
                <div class=\"mbr-navbar__column mbr-navbar__menu\">
                    <nav class=\"mbr-navbar__menu-box mbr-navbar__menu-box--inline-right\">
                        <div class=\"mbr-navbar__column\"><ul class=\"mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links\"><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"\">HOME</a></li><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"\">ABOUT</a></li><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"\">CONTACT</a></li></ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

\t\t\t\t\t\t
<section class=\"engine\"><a rel=\"external\" href=\"\">website maker software</a></section><section class=\"mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar\" id=\"form1-12\" style=\"background-color: rgb(239, 239, 239);\">
    
    <div class=\"mbr-section__container mbr-section__container--std-padding container\" style=\"padding-top: 93px; padding-bottom: 93px;\">
\t
\t\t\t\t\t
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        <div class=\"mbr-header mbr-header--center mbr-header--std-padding\">
                            <h2 class=\"mbr-header__text\"> DEMANDE AUTORISATION CIRCULATION</h2>
                        </div>
                       <div class=\"box-content\">
\t
                    
       
</div>  
\t\t<div class=\"form-group\">
              
\t\t\t\t\t\t\t 
                        <form  method=\"POST\">
\t\t\t 
                            <div class=\"form-group\">
                                <input type=\"number\" class=\"form-control\" name=\"Cin\" placeholder=\"N°Carte Identité Nationale\">
                            </div>
                          <div class=\"form-group\">
                                <input type=\"number\" class=\"form-control\" name=\"CarteGrise\" placeholder=\"N°Carte Grise\">
                            </div>
                          <div class=\"form-group\">
                                <input type=\"number\" class=\"form-control\" name=\"Cpp\" placeholder=\"N°Compte Postal\">
                            </div>
                            
             
                             </div>
                            <div class=\"mbr-buttons mbr-buttons--right\"><button type=\"submit\" class=\"mbr-buttons__btn btn btn-lg btn-danger\">ENVOYER MA DEMANDE</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"mbr-section mbr-section--relative mbr-section--fixed-size\" id=\"social-buttons2-18\" style=\"background-color: rgb(240, 240, 240);\">
    

    <div class=\"mbr-section__container container\">
        <div class=\"mbr-header mbr-header--inline row\" style=\"padding-top: 40.8px; padding-bottom: 40.8px;\">
            <div class=\"col-sm-4\">
                <h3 class=\"mbr-header__text\">FOLLOW US</h3>
            </div>
            <div class=\"mbr-social-icons mbr-social-icons--style-1 col-sm-8\"><a class=\"mbr-social-icons__icon socicon-bg-twitter\" title=\"Twitter\" target=\"_blank\" href=\"\"><i class=\"socicon socicon-twitter\"></i></a> <a class=\"mbr-social-icons__icon socicon-bg-facebook\" title=\"Facebook\" target=\"_blank\" href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\"><i class=\"socicon socicon-facebook\"></i></a> <a class=\"mbr-social-icons__icon socicon-bg-googleplus\" title=\"Google+\" target=\"_blank\" href=\"https://plus.google.com/u/0/+Mobirise/posts\"><i class=\"socicon socicon-googleplus\"></i></a></div>
        </div>
    </div>
</section>

<section class=\"mbr-section mbr-section--relative mbr-section--fixed-size\" id=\"contacts2-13\" style=\"background-color: rgb(60, 60, 60);\">
    
    <div class=\"mbr-section__container container\">
        <div class=\"mbr-contacts mbr-contacts--wysiwyg row\" style=\"padding-top: 45px; padding-bottom: 45px;\">
            <div class=\"col-sm-6\">
                <figure class=\"mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg\">
                    <div class=\"mbr-figure__map mbr-figure__map--short mbr-google-map\">
                        <p class=\"mbr-google-map__marker\" data-coordinates=\"40.748384,-73.9854792\"></p>
                    </div>
                </figure>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <p class=\"mbr-contacts__text\"><strong>ADDRESS</strong><br>
1234 Street Name<br>
City, AA 99999<br><br>
<strong>CONTACTS</strong><br>
Email: support@mobirise.com<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
                    </div>
                    <div class=\"col-sm-6\"><p class=\"mbr-contacts__text\"><strong>LINKS</strong></p><ul class=\"mbr-contacts__list\"><li><a class=\"mbr-contacts__link text-gray\" href=\"\">Website builder</a></li><li><a class=\"mbr-contacts__link text-gray\" href=\"mobirise-free-win.zip\">Download for Windows</a></li><li><a class=\"mbr-contacts__link text-gray\" href=\"mobirise-free-mac.zip\">Download for Mac</a></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class=\"mbr-section mbr-section--relative mbr-section--fixed-size\" id=\"footer1-2\" style=\"background-color: rgb(60, 60, 60);\">
    
    <div class=\"mbr-section__container container\">
        <div class=\"mbr-footer mbr-footer--wysiwyg row\" style=\"padding-top: 36.900000000000006px; padding-bottom: 36.900000000000006px;\">
            <div class=\"col-sm-12\">
                <p class=\"mbr-footer__copyright\">Copyright (c) 2015 Company Name. <a class=\"mbr-footer__link text-gray\" href=\"\">Terms of Use</a>  | <a class=\"mbr-footer__link text-gray\" href=\"\">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/web/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/smooth-scroll/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
  <!--[if lte IE 9]>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/jquery-placeholder/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
  <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/mobirise/js/script.js"), "html", null, true);
        echo "\"></script>
  
  
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "EgovMainBundle:FrontOffice:ajoutauto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 155,  209 => 153,  204 => 151,  199 => 149,  195 => 148,  191 => 147,  74 => 33,  57 => 19,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <!-- Site made with Mobirise Website Builder v2.10,  -->*/
/*   <meta charset="UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="generator" content="Mobirise v2.10, mobirise.com">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="shortcut icon" href="{{asset('assetsx/images/logo.png')}}" type="image/x-icon">*/
/*   <meta name="description" content="">*/
/*   */
/*   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">*/
/*   <link rel="stylesheet" href="{{asset('assetsx/bootstrap/css/bootstrap.min.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetsx/socicon/css/socicon.min.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetsx/mobirise/css/style.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetsx/mobirise/css/mbr-additional.css')}}" type="text/css">*/
/*    <!-- start: CSS <link id="bootstrap-style" href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">-->*/
/*         */
/*       <link id="bootstrap-style" href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <!-- end: CSS -->*/
/*   */
/*   */
/*       */
/* */
/* </head>*/
/* <body>*/
/* <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-5">*/
/*     <div class="mbr-navbar__section mbr-section">*/
/*         <div class="mbr-section__container container">*/
/*             <div class="mbr-navbar__container">*/
/*                 <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">*/
/*                     <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">*/
/*                         <span class="mbr-brand__logo"><a href=""><img src="{{asset('assetsx/images/logo-245x85-15.png')}}" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>*/
/*                         <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="">EGOV</a></span>*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>*/
/*                 <div class="mbr-navbar__column mbr-navbar__menu">*/
/*                     <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">*/
/*                         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="">ABOUT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="">CONTACT</a></li></ul></div>*/
/*                         */
/*                     </nav>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* 						*/
/* <section class="engine"><a rel="external" href="">website maker software</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form1-12" style="background-color: rgb(239, 239, 239);">*/
/*     */
/*     <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">*/
/* 	*/
/* 					*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-8 col-sm-offset-2">*/
/*                         <div class="mbr-header mbr-header--center mbr-header--std-padding">*/
/*                             <h2 class="mbr-header__text"> DEMANDE AUTORISATION CIRCULATION</h2>*/
/*                         </div>*/
/*                        <div class="box-content">*/
/* 	*/
/*                     */
/*        */
/* </div>  */
/* 		<div class="form-group">*/
/*               */
/* 							 */
/*                         <form  method="POST">*/
/* 			 */
/*                             <div class="form-group">*/
/*                                 <input type="number" class="form-control" name="Cin" placeholder="N°Carte Identité Nationale">*/
/*                             </div>*/
/*                           <div class="form-group">*/
/*                                 <input type="number" class="form-control" name="CarteGrise" placeholder="N°Carte Grise">*/
/*                             </div>*/
/*                           <div class="form-group">*/
/*                                 <input type="number" class="form-control" name="Cpp" placeholder="N°Compte Postal">*/
/*                             </div>*/
/*                             */
/*              */
/*                              </div>*/
/*                             <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">ENVOYER MA DEMANDE</button></div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-18" style="background-color: rgb(240, 240, 240);">*/
/*     */
/* */
/*     <div class="mbr-section__container container">*/
/*         <div class="mbr-header mbr-header--inline row" style="padding-top: 40.8px; padding-bottom: 40.8px;">*/
/*             <div class="col-sm-4">*/
/*                 <h3 class="mbr-header__text">FOLLOW US</h3>*/
/*             </div>*/
/*             <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8"><a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href=""><i class="socicon socicon-twitter"></i></a> <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> <a class="mbr-social-icons__icon socicon-bg-googleplus" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a></div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-13" style="background-color: rgb(60, 60, 60);">*/
/*     */
/*     <div class="mbr-section__container container">*/
/*         <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">*/
/*             <div class="col-sm-6">*/
/*                 <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">*/
/*                     <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">*/
/*                         <p class="mbr-google-map__marker" data-coordinates="40.748384,-73.9854792"></p>*/
/*                     </div>*/
/*                 </figure>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-5 col-sm-offset-1">*/
/*                         <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>*/
/* 1234 Street Name<br>*/
/* City, AA 99999<br><br>*/
/* <strong>CONTACTS</strong><br>*/
/* Email: support@mobirise.com<br>*/
/* Phone: +1 (0) 000 0000 001<br>*/
/* Fax: +1 (0) 000 0000 002</p>*/
/*                     </div>*/
/*                     <div class="col-sm-6"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="">Website builder</a></li><li><a class="mbr-contacts__link text-gray" href="mobirise-free-win.zip">Download for Windows</a></li><li><a class="mbr-contacts__link text-gray" href="mobirise-free-mac.zip">Download for Mac</a></li></ul></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-2" style="background-color: rgb(60, 60, 60);">*/
/*     */
/*     <div class="mbr-section__container container">*/
/*         <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.900000000000006px; padding-bottom: 36.900000000000006px;">*/
/*             <div class="col-sm-12">*/
/*                 <p class="mbr-footer__copyright">Copyright (c) 2015 Company Name. <a class="mbr-footer__link text-gray" href="">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="">Privacy Policy</a></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/*   <script src="{{asset('assetsx/web/jquery/jquery.min.js')}}"></script>*/
/*   <script src="{{asset('assetsx/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*   <script src="https://maps.googleapis.com/maps/api/js"></script>*/
/*   <script src="{{asset('assetsx/smooth-scroll/SmoothScroll.js')}}"></script>*/
/*   <!--[if lte IE 9]>*/
/*     <script src="{{asset('assetsx/jquery-placeholder/jquery.placeholder.min.js')}}"></script>*/
/*   <![endif]-->*/
/*   <script src="{{asset('assetsx/mobirise/js/script.js')}}"></script>*/
/*   */
/*   */
/* </body>*/
/* </html>*/
/* */
/* */