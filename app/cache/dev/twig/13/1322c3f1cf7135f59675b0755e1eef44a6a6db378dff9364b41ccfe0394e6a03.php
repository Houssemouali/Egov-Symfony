<?php

/* EgovMainBundle:FrontOffice:listAutos.html.twig */
class __TwigTemplate_9e1f3bec1ba5e21982293663a0ac4497751c940599d90b13ac58351b987cdf2a extends Twig_Template
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
  
  
       <style type=\"text/css\">.pager {
  margin-left: 0;
  margin-bottom: 18px;
  list-style: none;
  text-align: center;
  *zoom: 1;
}
.pager:before,
.pager:after {
  display: table;
  content: \"\";
}
.pager:after {
  clear: both;
}
.pager li {
  display: inline;
}
.pager a {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.pager a:hover {
  text-decoration: none;
  background-color: #f5f5f5;
}
.pager .next a {
  float: right;
}
.pager .previous a {
  float: left;
}
.pager .disabled a,
.pager .disabled a:hover {
  color: #999999;</style>

</head>
<body>
<section class=\"mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse\" id=\"ext_menu-5\">
    <div class=\"mbr-navbar__section mbr-section\">
        <div class=\"mbr-section__container container\">
            <div class=\"mbr-navbar__container\">
                <div class=\"mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand\">
                    <span class=\"mbr-navbar__brand-link mbr-brand mbr-brand--inline\">
                        <span class=\"mbr-brand__logo\"><a href=\"\"><img src=\"";
        // line 72
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
                            <h2 class=\"mbr-header__text\">Liste de Mes Autorisations</h2>
                        </div>
                        <div class=\"box-content\">
\t<table class=\"table table-bordered table-striped table-condensed table-hover\">
            <!--/table table-bordered table-striped table-condensedtable-hover!-->
            <thead>
            <tr>
                <td class=\"center\">";
        // line 106
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.id");
        echo "<b>Numéro d'Identification</b></td>
    <td align=\"center\"";
        // line 107
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.cin"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.cin");
        echo "<b>Carte d'Identité Nationale</b></td>
    <td class=\"center\"";
        // line 108
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.CarteGrise"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.CarteGrise");
        echo "<b>Numéro de la Carte Grise</b></td>
  
    <td class=\"center\"";
        // line 110
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.cpp"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.cpp");
        echo "<b>Compte Postal<b></td>
    <td class=\"center\"";
        // line 111
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.FinAutorisation"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.FinAutorisation");
        echo "<b>Fin Délai d'Autorisation</b></td>
</tr>
\t    </thead>   
             <tbody>
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
            // line 116
            echo "                    <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                    <td class=\"center\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "id", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "cin", array()), "numCin", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "CarteGrise", array()), "html", null, true);
            echo "</td>
                    
                      <td class=\"center\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "Cpp", array()), "numCompte", array()), "html", null, true);
            echo "</td>
                       <td class=\"center\">";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["auto"], "FinAutorisation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                      
                       
                    </tr>
\t\t\t\t\t\t  </tbody>
                  
                   
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "          
        </table>
                    
       ";
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "</div>  

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
            <div class=\"mbr-social-icons mbr-social-icons--style-1 col-sm-8\"><a class=\"mbr-social-icons__icon socicon-bg-twitter\" title=\"Twitter\" target=\"_blank\" href=\"https://twitter.com/mobirise\"><i class=\"socicon socicon-twitter\"></i></a> <a class=\"mbr-social-icons__icon socicon-bg-facebook\" title=\"Facebook\" target=\"_blank\" href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\"><i class=\"socicon socicon-facebook\"></i></a> <a class=\"mbr-social-icons__icon socicon-bg-googleplus\" title=\"Google+\" target=\"_blank\" href=\"https://plus.google.com/u/0/+Mobirise/posts\"><i class=\"socicon socicon-googleplus\"></i></a></div>
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
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/web/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/smooth-scroll/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
  <!--[if lte IE 9]>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/jquery-placeholder/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
  <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assetsx/mobirise/js/script.js"), "html", null, true);
        echo "\"></script>
  
  
</body>
</html>

";
    }

    // line 133
    public function block_body($context, array $blocks = array())
    {
        // line 134
        echo "    
        <div class=\"pager\" >
\t\t ";
        // line 136
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>\t
        ";
    }

    public function getTemplateName()
    {
        return "EgovMainBundle:FrontOffice:listAutos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 136,  362 => 134,  359 => 133,  348 => 209,  343 => 207,  338 => 205,  333 => 203,  329 => 202,  325 => 201,  261 => 139,  259 => 133,  254 => 130,  232 => 122,  228 => 121,  223 => 119,  219 => 118,  215 => 117,  208 => 116,  191 => 115,  180 => 111,  172 => 110,  163 => 108,  155 => 107,  151 => 106,  114 => 72,  58 => 19,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  30 => 9,  20 => 1,);
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
/*        <style type="text/css">.pager {*/
/*   margin-left: 0;*/
/*   margin-bottom: 18px;*/
/*   list-style: none;*/
/*   text-align: center;*/
/*   *zoom: 1;*/
/* }*/
/* .pager:before,*/
/* .pager:after {*/
/*   display: table;*/
/*   content: "";*/
/* }*/
/* .pager:after {*/
/*   clear: both;*/
/* }*/
/* .pager li {*/
/*   display: inline;*/
/* }*/
/* .pager a {*/
/*   display: inline-block;*/
/*   padding: 5px 14px;*/
/*   background-color: #fff;*/
/*   border: 1px solid #ddd;*/
/*   -webkit-border-radius: 15px;*/
/*   -moz-border-radius: 15px;*/
/*   border-radius: 15px;*/
/* }*/
/* .pager a:hover {*/
/*   text-decoration: none;*/
/*   background-color: #f5f5f5;*/
/* }*/
/* .pager .next a {*/
/*   float: right;*/
/* }*/
/* .pager .previous a {*/
/*   float: left;*/
/* }*/
/* .pager .disabled a,*/
/* .pager .disabled a:hover {*/
/*   color: #999999;</style>*/
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
/*                             <h2 class="mbr-header__text">Liste de Mes Autorisations</h2>*/
/*                         </div>*/
/*                         <div class="box-content">*/
/* 	<table class="table table-bordered table-striped table-condensed table-hover">*/
/*             <!--/table table-bordered table-striped table-condensedtable-hover!-->*/
/*             <thead>*/
/*             <tr>*/
/*                 <td class="center">{{knp_pagination_sortable(pagination, '', 'a.id') }}<b>Numéro d'Identification</b></td>*/
/*     <td align="center"{% if pagination.isSorted('a.cin') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.cin') }}<b>Carte d'Identité Nationale</b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.CarteGrise') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.CarteGrise') }}<b>Numéro de la Carte Grise</b></td>*/
/*   */
/*     <td class="center"{% if pagination.isSorted('a.cpp') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.cpp') }}<b>Compte Postal<b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.FinAutorisation') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.FinAutorisation') }}<b>Fin Délai d'Autorisation</b></td>*/
/* </tr>*/
/* 	    </thead>   */
/*              <tbody>*/
/*                 {% for auto in pagination %}*/
/*                     <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                     <td class="center">{{auto.id}}</td>*/
/*                     <td class="center">{{auto.cin.numCin}}</td>*/
/*                     <td class="center">{{auto.CarteGrise}}</td>*/
/*                     */
/*                       <td class="center">{{auto.Cpp.numCompte}}</td>*/
/*                        <td class="center">{{auto.FinAutorisation|date('d/m/Y')}}</td>*/
/*                       */
/*                        */
/*                     </tr>*/
/* 						  </tbody>*/
/*                   */
/*                    */
/*                     {%endfor%}*/
/*           */
/*         </table>*/
/*                     */
/*        {%block body %}*/
/*     */
/*         <div class="pager" >*/
/* 		 {{ knp_pagination_render(pagination) }}*/
/*         </div>	*/
/*         {% endblock %}*/
/* </div>  */
/* */
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
/*             <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8"><a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="https://twitter.com/mobirise"><i class="socicon socicon-twitter"></i></a> <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> <a class="mbr-social-icons__icon socicon-bg-googleplus" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a></div>*/
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
/* {# empty Twig template #}*/
/* */
