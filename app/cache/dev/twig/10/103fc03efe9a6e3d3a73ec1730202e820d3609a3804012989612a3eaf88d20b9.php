<?php

/* CompteCPBundle:Demande:indexCPP.html.twig */
class __TwigTemplate_b7a6d5ae28a286eef630a3c8b8da905fc9c148ca8f25ba840ae823be6f31f582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CompteCPBundle::base.html.twig", "CompteCPBundle:Demande:indexCPP.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CompteCPBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/egovmainbundle/index.html"), "html", null, true);
        echo "\">Home</a> 
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Tables</a></li>
        </ul>

        <div class=\"row-fluid sortable\">\t\t
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Members</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon white wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <thead>
                            <tr>
                                <th>Nom Prenom</th>
                                <th>Etat</th>
                                <th>Commentaire</th>
                                <th>Action</th>
                            </tr>
                        </thead>   
                        <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "                                <tr>
                                    <td class=\"center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "cin", array()), "extrait", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "cin", array()), "extrait", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                    <td class=\"center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
                                    <td class=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaire", array()), "html", null, true);
            echo "</td>
                                    <td class=\"center\">

                                        <a class=\"btn btn-info\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demande_valider", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"halflings-icon white edit\"></i>  
                                        </a>

                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>            
                </div>
            </div><!--/span-->

        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->

";
    }

    public function getTemplateName()
    {
        return "CompteCPBundle:Demande:indexCPP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  92 => 45,  86 => 42,  82 => 41,  76 => 40,  73 => 39,  69 => 38,  39 => 11,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'CompteCPBundle::base.html.twig' %}*/
/* */
/* */
/* {% block body -%}*/
/*     <div id="content" class="span10">*/
/* */
/* */
/*         <ul class="breadcrumb">*/
/*             <li>*/
/*                 <i class="icon-home"></i>*/
/*                 <a href="{{asset('bundles/egovmainbundle/index.html')}}">Home</a> */
/*                 <i class="icon-angle-right"></i>*/
/*             </li>*/
/*             <li><a href="#">Tables</a></li>*/
/*         </ul>*/
/* */
/*         <div class="row-fluid sortable">		*/
/*             <div class="box span12">*/
/*                 <div class="box-header" data-original-title>*/
/*                     <h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>*/
/*                     <div class="box-icon">*/
/*                         <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>*/
/*                         <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>*/
/*                         <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="box-content">*/
/*                     <table class="table table-striped table-bordered bootstrap-datatable datatable">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Nom Prenom</th>*/
/*                                 <th>Etat</th>*/
/*                                 <th>Commentaire</th>*/
/*                                 <th>Action</th>*/
/*                             </tr>*/
/*                         </thead>   */
/*                         <tbody>*/
/*                             {% for entity in entities %}*/
/*                                 <tr>*/
/*                                     <td class="center">{{entity.cin.extrait.nom}} {{entity.cin.extrait.prenom}}</td>*/
/*                                     <td class="center">{{entity.etat}}</td>*/
/*                                     <td class="center">{{entity.commentaire}}</td>*/
/*                                     <td class="center">*/
/* */
/*                                         <a class="btn btn-info" href="{{ path('demande_valider', { 'id': entity.id }) }}">*/
/*                                             <i class="halflings-icon white edit"></i>  */
/*                                         </a>*/
/* */
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>            */
/*                 </div>*/
/*             </div><!--/span-->*/
/* */
/*         </div><!--/.fluid-container-->*/
/* */
/*         <!-- end: Content -->*/
/*     </div><!--/#content.span10-->*/
/* */
/* {% endblock %}*/
/* */
