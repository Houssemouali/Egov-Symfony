<?php

/* FrontOfficeBundle:frontoff:demcin.html.twig */
class __TwigTemplate_bfbe5b16af83dd64015db89e63adb2bdff19cea5b4c79c9fcc6404d242487dc9 extends Twig_Template
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
  <!-- Site made with Mobirise Website Builder v2.10, https://mobirise.com -->
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"generator\" content=\"Mobirise v2.10, mobirise.com\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/images/logo-245x85-2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <meta name=\"description\" content=\"\">
  
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/socicon/css/socicon.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/mobirise/css/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/mobirise/css/mbr-additional.css"), "html", null, true);
        echo "\" type=\"text/css\">
  
  
  
</head>
<body>
<section class=\"mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse\" id=\"ext_menu-5\">
    <div class=\"mbr-navbar__section mbr-section\">
        <div class=\"mbr-section__container container\">
            <div class=\"mbr-navbar__container\">
                <div class=\"mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand\">
                    <span class=\"mbr-navbar__brand-link mbr-brand mbr-brand--inline\">
                        <span class=\"mbr-brand__logo\"><a href=\"https://mobirise.com\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetss/images/logo-245x85-15.png"), "html", null, true);
        echo "\" class=\"mbr-navbar__brand-img mbr-brand__img\" alt=\"Mobirise\"></a></span>
                        <span class=\"mbr-brand__name\"><a class=\"mbr-brand__name text-white\" href=\"https://mobirise.com\">EGOV</a></span>
                    </span>
                </div>
                <div class=\"mbr-navbar__hamburger mbr-hamburger\"><span class=\"mbr-hamburger__line\"></span></div>
                <div class=\"mbr-navbar__column mbr-navbar__menu\">
                    <nav class=\"mbr-navbar__menu-box mbr-navbar__menu-box--inline-right\">
                        <div class=\"mbr-navbar__column\"><ul class=\"mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links\"><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"https://mobirise.com\">HOME</a></li><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"https://mobirise.com\">ABOUT</a></li><li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"https://mobirise.com\">CONTACT</a></li></ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"engine\"><a rel=\"external\" href=\"https://mobirise.com\">free web page creator</a></section><section class=\"mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar\" id=\"form1-12\" style=\"background-color: rgb(239, 239, 239);\">
    
    <div class=\"mbr-section__container mbr-section__container--std-padding container\" style=\"padding-top: 93px; padding-bottom: 93px;\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                        <div class=\"mbr-header mbr-header--center mbr-header--std-padding\">
                            <h2 class=\"mbr-header__text\">DEMANDER Extrait Naissance</h2>
                        </div>
                        
                        <form  method=\"POST\" action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("front_office_new");
        echo "\">
                            
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"nom\" required=\"\" placeholder=\"nom*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"prenom\" required=\"\" placeholder=\"prenom*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"pere\" placeholder=\"Cin Pere*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"mere\" placeholder=\"Cin Mere*\">
                            </div>
                              <div class=\"form-group\">
                                <input type=\"date\" class=\"form-control\" name=\"date\" required=\"\" placeholder=\"date naissance*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"lieu\" required=\"\" placeholder=\"Ville Naissance*\">
                            </div>
                            
                            <div class=\"mbr-buttons mbr-buttons--right\"><button type=\"submit\" class=\"mbr-buttons__btn btn btn-lg btn-danger\">ENVOYER DEMANDE</button></div>
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
           
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:frontoff:demcin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 55,  63 => 28,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <!-- Site made with Mobirise Website Builder v2.10, https://mobirise.com -->*/
/*   <meta charset="UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="generator" content="Mobirise v2.10, mobirise.com">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="shortcut icon" href="{{asset('assetss/images/logo-245x85-2.png')}}" type="image/x-icon">*/
/*   <meta name="description" content="">*/
/*   */
/*   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">*/
/*   <link rel="stylesheet" href="{{asset('assetss/bootstrap/css/bootstrap.min.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetss/socicon/css/socicon.min.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetss/mobirise/css/style.css')}}">*/
/*   <link rel="stylesheet" href="{{asset('assetss/mobirise/css/mbr-additional.css')}}" type="text/css">*/
/*   */
/*   */
/*   */
/* </head>*/
/* <body>*/
/* <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-5">*/
/*     <div class="mbr-navbar__section mbr-section">*/
/*         <div class="mbr-section__container container">*/
/*             <div class="mbr-navbar__container">*/
/*                 <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">*/
/*                     <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">*/
/*                         <span class="mbr-brand__logo"><a href="https://mobirise.com"><img src="{{asset('assetss/images/logo-245x85-15.png')}}" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>*/
/*                         <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="https://mobirise.com">EGOV</a></span>*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>*/
/*                 <div class="mbr-navbar__column mbr-navbar__menu">*/
/*                     <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">*/
/*                         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">ABOUT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">CONTACT</a></li></ul></div>*/
/*                         */
/*                     </nav>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="engine"><a rel="external" href="https://mobirise.com">free web page creator</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form1-12" style="background-color: rgb(239, 239, 239);">*/
/*     */
/*     <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-8 col-sm-offset-2">*/
/*                         <div class="mbr-header mbr-header--center mbr-header--std-padding">*/
/*                             <h2 class="mbr-header__text">DEMANDER Extrait Naissance</h2>*/
/*                         </div>*/
/*                         */
/*                         <form  method="POST" action="{{path('front_office_new')}}">*/
/*                             */
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="nom" required="" placeholder="nom*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="prenom" required="" placeholder="prenom*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="pere" placeholder="Cin Pere*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="mere" placeholder="Cin Mere*">*/
/*                             </div>*/
/*                               <div class="form-group">*/
/*                                 <input type="date" class="form-control" name="date" required="" placeholder="date naissance*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="lieu" required="" placeholder="Ville Naissance*">*/
/*                             </div>*/
/*                             */
/*                             <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">ENVOYER DEMANDE</button></div>*/
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
/*            */
/* </body>*/
/* </html>{# empty Twig template #}*/
/* */
