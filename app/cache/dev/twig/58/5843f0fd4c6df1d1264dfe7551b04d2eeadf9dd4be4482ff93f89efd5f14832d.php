<?php

/* BackOfficebackBundle:Demandeextrait:index.html.twig */
class __TwigTemplate_ddd67a2096c929f31d6eec1527b9d2506f997bbe3723b2ca447f21f422d5dbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:Demandeextrait:index.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Demandeextrait list</h1>
    
                <div class=\"row-fluid sortable\">\t\t

               <table class=\"records_list\">

\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Lieunaissance</th>
                <th>Datenaissance</th>
                
                
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandeextrait_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuNaissance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateNaissance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_create", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Creer</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Refuser</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
            </div>\t\t

        <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("demandeextrait_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:Demandeextrait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 51,  106 => 45,  94 => 39,  88 => 36,  81 => 32,  74 => 30,  70 => 29,  66 => 28,  60 => 27,  57 => 26,  53 => 25,  31 => 5,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficebackBundle::Layout.html.twig' %}*/
/* {% block body -%}*/
/*     */
/* */
/*     <h1>Demandeextrait list</h1>*/
/*     */
/*                 <div class="row-fluid sortable">		*/
/* */
/*                <table class="records_list">*/
/* */
/* 		<table class="table table-striped table-bordered bootstrap-datatable datatable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Lieunaissance</th>*/
/*                 <th>Datenaissance</th>*/
/*                 */
/*                 */
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('demandeextrait_show', { 'id': entity.id }) }}">{{ entity.nom }}</a></td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.lieuNaissance }}</td>*/
/*                 <td>{% if entity.dateNaissance %}{{ entity.dateNaissance|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 */
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('back_officeback_extraitnaissance_create', { 'id': entity.id }) }}">Creer</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('back_officeback_extraitnaissance_edit', { 'id': entity.id }) }}">Refuser</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*             </div>		*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandeextrait_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
