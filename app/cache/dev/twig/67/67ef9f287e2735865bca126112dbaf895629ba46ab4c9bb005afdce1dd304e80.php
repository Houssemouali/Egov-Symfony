<?php

/* EgovMainBundle:BackOffice:listauto.html.twig */
class __TwigTemplate_489626ad8a39c4763c29a6df46b358638eb90ed9d8bda26673e397e2cfae1468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EgovMainBundle:BackOffice:base.html.twig", "EgovMainBundle:BackOffice:listauto.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EgovMainBundle:BackOffice:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
                                  
<html>
    <body>
        
            
\t
\t<table class=\"table table-bordered table-striped table-condensed table-hover\">
            <!--/table table-bordered table-striped table-condensedtable-hover!-->
            <thead>
            <tr>
                <td class=\"center\">";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.id");
        echo "<b>Numéro d'Identification</b></td>
    <td align=\"center\"";
        // line 15
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.cin"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.cin");
        echo "<b>Carte d'Identité Nationale</b></td>
    <td class=\"center\"";
        // line 16
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.CarteGrise"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.CarteGrise");
        echo "<b>Numéro de la Carte Grise</b></td>
    <td class=\"center\"";
        // line 17
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Cpp"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.Cpp");
        echo "<b>Compte Postal<b></td>
    <td class=\"center\"";
        // line 18
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.FinAutorisation"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.FinAutorisation");
        echo "<b>Fin Délai d'Autorisation</b></td>
    <td><b>Action</b></td>
     
    
</tr>
\t    </thead>   
             <tbody>
                ";
        // line 25
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
            // line 26
            echo "                    <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                    <td class=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "id", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "cin", array()), "numCin", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "CarteGrise", array()), "html", null, true);
            echo "</td>
                      <td class=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "Cpp", array()), "numCompte", array()), "html", null, true);
            echo "</td>
                       <td class=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["auto"], "FinAutorisation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                       
                       <td>
                    <a class=\"btn btn-success\" href=\"#\" data-target=\"#myModal\" data-id=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "id", array()), "html", null, true);
            echo "\" data-etat=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "etat", array()), "html", null, true);
            echo "\" data-commentaire=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "commentaire", array()), "html", null, true);
            echo "\">
                            <i class=\"halflings-icon white zoom-in\"></i>   
                        </a>
                    </td>
                       
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
        // line 44
        echo "          
        </table>
                    
       <div class=\"modal fade hide\" id=\"myModal\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t<h3>Settings</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
                    <form id=\"form\">
                        <input id=\"ipt-id\" name=\"ipt-id\" type=\"hidden\"/>
                        <label>Etat </label><select name=\"ipt-etat\" id=\"ipt-etat\" type=\"text\" >
                            <option value=\"en cours\">en cours</option>
                            <option value=\"accept\">Accepté</option>
                            <option value=\"refus\">Refusé</option>

                        </select>
                      
                        <label>Commentaire </label><input name=\"ipt-comm\" id=\"ipt-comm\" type=\"text\"/>
                    </form>
                    
                       
                    
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
\t\t\t<a href=\"#\" class=\"btn btn-primary\" id=\"save_btn\">Save changes</a>
\t\t</div>
\t</div>
            <div class=\"clearfix\"></div>
            <span style=\"z-index: 100;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);\" id=\"loading\"></span>
        <div class=\"navigation\">
\t\t ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>\t\t\t
 
 
    </body>
</html>

";
    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        // line 85
        echo "    <script language=\"javascript\" type=\"text/javascript\">
    \$(function() { 
        var current_item=null;
        \$('.btn-success').click(function(e){
\t\te.preventDefault();
                //recuperer id
                \$(\"#ipt-id\").val(\$(this).data(\"id\"));
                \$(\"#ipt-etat\").val(\$(this).data(\"etat\"));
                 \$(\"#ipt-comm\").val(\$(this).data(\"commentaire\"));
\t\t\$('#myModal').modal('show');
                current_item=this;
\t});
       
        \$('#save_btn').click(function(e){
            e.preventDefault();
             \$(\"#loading\").html('<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/loader.gif"), "html", null, true);
        echo "\" align=\"absmiddle\">&nbsp;Enregistrement...');
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("auto_update");
        echo "\",
                    data: \$('#form').serialize(),
                    success: function (data){
                        \$('#myModal').modal('hide');
                        \$('#loading').html(\"\");
                        \$(current_item).data(\"id\",\$(\"#ipt-id\").val());
                        \$(current_item).data(\"etat\",\$(\"#ipt-etat\").val());
                        \$(current_item).data(\"commentaire\",\$(\"#ipt-comm\").val());
                        current_item = null;
                    },
                    error: function (e) {
                         console.log(e.responseText);
                         \$('#loading').html(\"\");
                         current_item=null;
                    }
              });
        });
    });
</script>    
    ";
    }

    public function getTemplateName()
    {
        return "EgovMainBundle:BackOffice:listauto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 103,  226 => 100,  209 => 85,  206 => 84,  194 => 76,  160 => 44,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  103 => 26,  86 => 25,  72 => 18,  64 => 17,  56 => 16,  48 => 15,  44 => 14,  29 => 3,  11 => 1,);
    }
}
/* {%extends "EgovMainBundle:BackOffice:base.html.twig"%}*/
/* */
/* {%block body %} */
/*                                   */
/* <html>*/
/*     <body>*/
/*         */
/*             */
/* 	*/
/* 	<table class="table table-bordered table-striped table-condensed table-hover">*/
/*             <!--/table table-bordered table-striped table-condensedtable-hover!-->*/
/*             <thead>*/
/*             <tr>*/
/*                 <td class="center">{{knp_pagination_sortable(pagination, '', 'a.id') }}<b>Numéro d'Identification</b></td>*/
/*     <td align="center"{% if pagination.isSorted('a.cin') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.cin') }}<b>Carte d'Identité Nationale</b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.CarteGrise') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.CarteGrise') }}<b>Numéro de la Carte Grise</b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.Cpp') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.Cpp') }}<b>Compte Postal<b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.FinAutorisation') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.FinAutorisation') }}<b>Fin Délai d'Autorisation</b></td>*/
/*     <td><b>Action</b></td>*/
/*      */
/*     */
/* </tr>*/
/* 	    </thead>   */
/*              <tbody>*/
/*                 {% for auto in pagination %}*/
/*                     <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                     <td class="center">{{auto.id}}</td>*/
/*                     <td class="center">{{auto.cin.numCin}}</td>*/
/*                     <td class="center">{{auto.CarteGrise}}</td>*/
/*                       <td class="center">{{auto.Cpp.numCompte}}</td>*/
/*                        <td class="center">{{auto.FinAutorisation|date('d/m/Y')}}</td>*/
/*                        */
/*                        <td>*/
/*                     <a class="btn btn-success" href="#" data-target="#myModal" data-id="{{auto.id}}" data-etat="{{auto.etat}}" data-commentaire="{{auto.commentaire}}">*/
/*                             <i class="halflings-icon white zoom-in"></i>   */
/*                         </a>*/
/*                     </td>*/
/*                        */
/*                     </tr>*/
/* 						  </tbody>*/
/*                   */
/*                   */
/*                     {%endfor%}*/
/*           */
/*         </table>*/
/*                     */
/*        <div class="modal fade hide" id="myModal">*/
/* 		<div class="modal-header">*/
/* 			<button type="button" class="close" data-dismiss="modal">×</button>*/
/* 			<h3>Settings</h3>*/
/* 		</div>*/
/* 		<div class="modal-body">*/
/*                     <form id="form">*/
/*                         <input id="ipt-id" name="ipt-id" type="hidden"/>*/
/*                         <label>Etat </label><select name="ipt-etat" id="ipt-etat" type="text" >*/
/*                             <option value="en cours">en cours</option>*/
/*                             <option value="accept">Accepté</option>*/
/*                             <option value="refus">Refusé</option>*/
/* */
/*                         </select>*/
/*                       */
/*                         <label>Commentaire </label><input name="ipt-comm" id="ipt-comm" type="text"/>*/
/*                     </form>*/
/*                     */
/*                        */
/*                     */
/* 		</div>*/
/* 		<div class="modal-footer">*/
/* 			<a href="#" class="btn" data-dismiss="modal">Close</a>*/
/* 			<a href="#" class="btn btn-primary" id="save_btn">Save changes</a>*/
/* 		</div>*/
/* 	</div>*/
/*             <div class="clearfix"></div>*/
/*             <span style="z-index: 100;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);" id="loading"></span>*/
/*         <div class="navigation">*/
/* 		 {{ knp_pagination_render(pagination) }}*/
/*         </div>			*/
/*  */
/*  */
/*     </body>*/
/* </html>*/
/* */
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script language="javascript" type="text/javascript">*/
/*     $(function() { */
/*         var current_item=null;*/
/*         $('.btn-success').click(function(e){*/
/* 		e.preventDefault();*/
/*                 //recuperer id*/
/*                 $("#ipt-id").val($(this).data("id"));*/
/*                 $("#ipt-etat").val($(this).data("etat"));*/
/*                  $("#ipt-comm").val($(this).data("commentaire"));*/
/* 		$('#myModal').modal('show');*/
/*                 current_item=this;*/
/* 	});*/
/*        */
/*         $('#save_btn').click(function(e){*/
/*             e.preventDefault();*/
/*              $("#loading").html('<img src="{{ asset('bundles/egovmainbundle/img/loader.gif') }}" align="absmiddle">&nbsp;Enregistrement...');*/
/*             $.ajax({*/
/*                     type: "POST",*/
/*                     url: "{{path('auto_update')}}",*/
/*                     data: $('#form').serialize(),*/
/*                     success: function (data){*/
/*                         $('#myModal').modal('hide');*/
/*                         $('#loading').html("");*/
/*                         $(current_item).data("id",$("#ipt-id").val());*/
/*                         $(current_item).data("etat",$("#ipt-etat").val());*/
/*                         $(current_item).data("commentaire",$("#ipt-comm").val());*/
/*                         current_item = null;*/
/*                     },*/
/*                     error: function (e) {*/
/*                          console.log(e.responseText);*/
/*                          $('#loading').html("");*/
/*                          current_item=null;*/
/*                     }*/
/*               });*/
/*         });*/
/*     });*/
/* </script>    */
/*     {% endblock %}*/
