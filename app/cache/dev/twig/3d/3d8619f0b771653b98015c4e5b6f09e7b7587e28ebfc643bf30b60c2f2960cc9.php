<?php

/* InterCinBundle:BackOffice:listCin.html.twig */
class __TwigTemplate_0e995c5bc83155d55894bcf860c4d53488c125f71f4c5d8dd0b466cb474c8710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InterCinBundle:BackOffice:base.html.twig", "InterCinBundle:BackOffice:listCin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InterCinBundle:BackOffice:base.html.twig";
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
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.extrait.nom"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.extrait.nom");
        echo "<b>Nom</b></td>
    <td class=\"center\"";
        // line 16
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.extrait.prenom"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.extrait.prenom");
        echo "<b>Prenom</b></td>
    <td class=\"center\"";
        // line 17
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.adresse"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.adresse");
        echo "<b>Adresse<b></td>
    <td class=\"center\"";
        // line 18
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.profession"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.profession");
        echo "<b>Profession<b></td>
    <td class=\"center\"";
        // line 19
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.lieuCreation"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.lieuCreation");
        echo "<b>Lieu de Creation<b></td>
    <td class=\"center\"";
        // line 20
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.dateCreation"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", "a.dateCreation");
        echo "<b>Date de Creation</b></td>
    <td><b>Action</b></td>
     
    
</tr>
\t    </thead>   
             <tbody>
                ";
        // line 27
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
        foreach ($context['_seq'] as $context["_key"] => $context["cin"]) {
            // line 28
            echo "                    <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                    <td class=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "id", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cin"], "extrait", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cin"], "extrait", array()), "prenom", array()), "html", null, true);
            echo "</td>
                        <td class=\"center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "adresse", array()), "html", null, true);
            echo "</td>
                      <td class=\"center\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "profession", array()), "html", null, true);
            echo "</td>
                      <td class=\"center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "lieuCreation", array()), "html", null, true);
            echo "</td>
                       <td class=\"center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cin"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"center\"><a class=\"btn btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inter_Back_suppCin", array("id" => $this->getAttribute($context["cin"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"halflings-icon white trash\"></i> </a>
                       
                       
                       
                    <a class=\"btn btn-success\" href=\"#\" data-target=\"#myModal\" data-id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "id", array()), "html", null, true);
            echo "\" data-adresse=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "adresse", array()), "html", null, true);
            echo "\" data-profession=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cin"], "profession", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
                        <label>Adresse </label><select name=\"ipt-adresse\" id=\"ipt-adresse\" type=\"text\" >
                            <option value=\"Tunis\">Tunis</option>
                            <option value=\"Ben arous\">Ben Arous</option>
                            <option value=\"Mannouba\">Manouba</option>

                        </select>
                      
                        <label>Profession </label><input name=\"ipt-profession\" id=\"ipt-profession\" type=\"text\"/>
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
        // line 82
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>\t\t\t
 
 
    </body>
</html>

";
    }

    // line 90
    public function block_javascript($context, array $blocks = array())
    {
        // line 91
        echo "    <script language=\"javascript\" type=\"text/javascript\">
    \$(function() { 
        var current_item=null;
        \$('.btn-success').click(function(e){
\t\te.preventDefault();
                //recuperer id
                \$(\"#ipt-id\").val(\$(this).data(\"id\"));
                \$(\"#ipt-adresse\").val(\$(this).data(\"adresse\"));
                 \$(\"#ipt-profession\").val(\$(this).data(\"profession\"));
\t\t\$('#myModal').modal('show');
                current_item=this;
\t});
       
        \$('#save_btn').click(function(e){
            e.preventDefault();
             \$(\"#loading\").html('<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/img/loader.gif"), "html", null, true);
        echo "\" align=\"absmiddle\">&nbsp;Enregistrement...');
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("inter_cin_update");
        echo "\",
                    data: \$('#form').serialize(),
                    success: function (data){
                        \$('#myModal').modal('hide');
                        \$('#loading').html(\"\");
                        \$(current_item).data(\"id\",\$(\"#ipt-id\").val());
                        \$(current_item).data(\"adresse\",\$(\"#ipt-adresse\").val());
                        \$(current_item).data(\"profession\",\$(\"#ipt-profession\").val());
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
        return "InterCinBundle:BackOffice:listCin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 109,  255 => 106,  238 => 91,  235 => 90,  223 => 82,  189 => 50,  161 => 40,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  119 => 28,  102 => 27,  88 => 20,  80 => 19,  72 => 18,  64 => 17,  56 => 16,  48 => 15,  44 => 14,  29 => 3,  11 => 1,);
    }
}
/* {%extends "InterCinBundle:BackOffice:base.html.twig"%}*/
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
/*     <td align="center"{% if pagination.isSorted('a.extrait.nom') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.extrait.nom') }}<b>Nom</b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.extrait.prenom') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.extrait.prenom') }}<b>Prenom</b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.adresse') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.adresse') }}<b>Adresse<b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.profession') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.profession') }}<b>Profession<b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.lieuCreation') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.lieuCreation') }}<b>Lieu de Creation<b></td>*/
/*     <td class="center"{% if pagination.isSorted('a.dateCreation') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, '', 'a.dateCreation') }}<b>Date de Creation</b></td>*/
/*     <td><b>Action</b></td>*/
/*      */
/*     */
/* </tr>*/
/* 	    </thead>   */
/*              <tbody>*/
/*                 {% for cin in pagination %}*/
/*                     <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                     <td class="center">{{cin.id}}</td>*/
/*                     <td class="center">{{cin.extrait.nom}}</td>*/
/*                     <td class="center">{{cin.extrait.prenom}}</td>*/
/*                         <td class="center">{{cin.adresse}}</td>*/
/*                       <td class="center">{{cin.profession}}</td>*/
/*                       <td class="center">{{cin.lieuCreation}}</td>*/
/*                        <td class="center">{{cin.dateCreation|date('d/m/Y')}}</td>*/
/*                         <td class="center"><a class="btn btn-danger" href="{{ path('inter_Back_suppCin',{'id':cin.id}) }}" target="_blank"><i class="halflings-icon white trash"></i> </a>*/
/*                        */
/*                        */
/*                        */
/*                     <a class="btn btn-success" href="#" data-target="#myModal" data-id="{{cin.id}}" data-adresse="{{cin.adresse}}" data-profession="{{cin.profession}}">*/
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
/*                         <label>Adresse </label><select name="ipt-adresse" id="ipt-adresse" type="text" >*/
/*                             <option value="Tunis">Tunis</option>*/
/*                             <option value="Ben arous">Ben Arous</option>*/
/*                             <option value="Mannouba">Manouba</option>*/
/* */
/*                         </select>*/
/*                       */
/*                         <label>Profession </label><input name="ipt-profession" id="ipt-profession" type="text"/>*/
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
/*                 $("#ipt-adresse").val($(this).data("adresse"));*/
/*                  $("#ipt-profession").val($(this).data("profession"));*/
/* 		$('#myModal').modal('show');*/
/*                 current_item=this;*/
/* 	});*/
/*        */
/*         $('#save_btn').click(function(e){*/
/*             e.preventDefault();*/
/*              $("#loading").html('<img src="{{ asset('bundles/egovmainbundle/img/loader.gif') }}" align="absmiddle">&nbsp;Enregistrement...');*/
/*             $.ajax({*/
/*                     type: "POST",*/
/*                     url: "{{path('inter_cin_update')}}",*/
/*                     data: $('#form').serialize(),*/
/*                     success: function (data){*/
/*                         $('#myModal').modal('hide');*/
/*                         $('#loading').html("");*/
/*                         $(current_item).data("id",$("#ipt-id").val());*/
/*                         $(current_item).data("adresse",$("#ipt-adresse").val());*/
/*                         $(current_item).data("profession",$("#ipt-profession").val());*/
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
/* */
