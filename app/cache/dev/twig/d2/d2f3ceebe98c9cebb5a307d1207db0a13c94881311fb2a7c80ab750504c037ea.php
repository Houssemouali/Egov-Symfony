<?php

/* BackOfficebackBundle:ExtraitNaissance:index.html.twig */
class __TwigTemplate_9c7cdfe2fbe76bc11b93dfcff259de60061fe4970bd94ab127fd0432cb59b8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:ExtraitNaissance:index.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
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
                        <th>Etait civil</th>
                        <th>Sexe</th>
                        <th>Datenaissance</th>
                        <th>Adresse naissance</th>
                        <th>Id</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "                        <tr>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pere", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mere", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatCivile", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sexe", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateNaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "villeNaissance", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>
                                
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
                 </div>
\t
\t</div><!--/span-->\t
\t</div><!--/row-->
    <ul>
      
    </ul>
";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:ExtraitNaissance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  109 => 47,  105 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  73 => 39,  70 => 38,  66 => 37,  31 => 4,  28 => 3,  11 => 1,);
    }
}
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
/*                         <th>Etait civil</th>*/
/*                         <th>Sexe</th>*/
/*                         <th>Datenaissance</th>*/
/*                         <th>Adresse naissance</th>*/
/*                         <th>Id</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('back_officeback_extraitnaissance_show', { 'id': entity.id }) }}">{{ entity.nom }}</a></td>*/
/*                             <td>{{ entity.prenom }}</td>*/
/*                             <td>{{ entity.pere }}</td>*/
/*                             <td>{{ entity.mere }}</td>*/
/*                             <td>{{ entity.etatCivile }}</td>*/
/*                             <td>{{ entity.sexe }}</td>*/
/*                             <td>{% if entity.dateNaissance %}{{ entity.dateNaissance|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{{ entity.villeNaissance }}</td>*/
/*                             <td>{{ entity.id }}</td>*/
/*                             <td>*/
/*                                 */
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
/*       */
/*     </ul>*/
/* {% endblock %}*/
/* */
