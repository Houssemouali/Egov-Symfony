<?php

/* BackOfficebackBundle:ExtraitNaissance:listdemande.html.twig */
class __TwigTemplate_1b941da8846ff457de0d54271f62cca2ca9f5685e3767064f6f191adfe8da9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:ExtraitNaissance:listdemande.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficebackBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row-fluid sortable\">\t\t
        <div class=\"box span12\">
     <!--titre debut-->
    <div class=\"box-header\" data-original-title>
        <h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>ExtraitNaissance list</h2></div>
     <!--titre fin -->
        <div id=\"content\" class=\"span10\">
    
            
            <div class=\"row-fluid sortable\">\t\t
        
                <div class=\"box span12\">
            
            <table class=\"records_list\">
               
                <!--tab debut-->
                <div class=\"box-content\">
\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t\t  
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Nompere</th>
                        <th>Nommere</th>
                        <th>Adressenaissance</th>
                        <th>Sex</th>
                        <th>Datenaissance</th>
                        <th>Nationalite</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                        <tr>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nompere", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nommere", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresseNaissance", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sex", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            if ($this->getAttribute($context["entity"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateNaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
            </table>
                 </div>
\t
\t</div><!--/span-->\t
\t</div><!--/row-->
    <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_new");
        echo "\">
                Ajout d'un nouveau extrait de naissance 
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:ExtraitNaissance:listdemande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 70,  135 => 62,  123 => 56,  117 => 53,  110 => 49,  106 => 48,  100 => 47,  96 => 46,  92 => 45,  88 => 44,  84 => 43,  80 => 42,  74 => 41,  71 => 40,  67 => 39,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'BackOfficebackBundle::Layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="row-fluid sortable">		*/
/*         <div class="box span12">*/
/*      <!--titre debut-->*/
/*     <div class="box-header" data-original-title>*/
/*         <h2><i class="halflings-icon white user"></i><span class="break"></span>ExtraitNaissance list</h2></div>*/
/*      <!--titre fin -->*/
/*         <div id="content" class="span10">*/
/*     */
/*             */
/*             <div class="row-fluid sortable">		*/
/*         */
/*                 <div class="box span12">*/
/*             */
/*             <table class="records_list">*/
/*                */
/*                 <!--tab debut-->*/
/*                 <div class="box-content">*/
/* 		<table class="table table-striped table-bordered bootstrap-datatable datatable">*/
/* 						  */
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Nom</th>*/
/*                         <th>Prenom</th>*/
/*                         <th>Nompere</th>*/
/*                         <th>Nommere</th>*/
/*                         <th>Adressenaissance</th>*/
/*                         <th>Sex</th>*/
/*                         <th>Datenaissance</th>*/
/*                         <th>Nationalite</th>*/
/*                         <th>Id</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('back_officeback_extraitnaissance_show', { 'id': entity.id }) }}">{{ entity.nom }}</a></td>*/
/*                             <td>{{ entity.prenom }}</td>*/
/*                             <td>{{ entity.nompere }}</td>*/
/*                             <td>{{ entity.nommere }}</td>*/
/*                             <td>{{ entity.adresseNaissance }}</td>*/
/*                             <td>{{ entity.sex }}</td>*/
/*                             <td>{% if entity.dateNaissance %}{{ entity.dateNaissance|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{{ entity.nationalite }}</td>*/
/*                             <td>{{ entity.id }}</td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ path('back_officeback_extraitnaissance_show', { 'id': entity.id }) }}">show</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('back_officeback_extraitnaissance_edit', { 'id': entity.id }) }}">edit</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*                  </div>*/
/* 	*/
/* 	</div><!--/span-->	*/
/* 	</div><!--/row-->*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('back_officeback_extraitnaissance_new') }}">*/
/*                 Ajout d'un nouveau extrait de naissance */
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
