<?php

/* BackOfficebackBundle:ExtraitNaissance:show.html.twig */
class __TwigTemplate_74d9805f23bcf61f699a0eaf9e10f14fe85c21b8b2c43700a3fbac9d9ecd42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:ExtraitNaissance:show.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'jscript' => array($this, 'block_jscript'),
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>ExtraitNaissance</h1>
    <div class=\"box-content\">
        <table  class=\"table table-striped table-bordered bootstrap-datatable datatable\">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nompere</th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nompere", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nommere</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nommere", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adressenaissance</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseNaissance", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Sex</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sex", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Datenaissance</th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateNaissance", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nationalite</th>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationalite", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_officeback_extraitnaissance_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    // line 68
    public function block_jscript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:ExtraitNaissance:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 68,  127 => 61,  120 => 57,  112 => 52,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  74 => 29,  67 => 25,  60 => 21,  53 => 17,  46 => 13,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'BackOfficebackBundle::Layout.html.twig' %}*/
/* */
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <h1>ExtraitNaissance</h1>*/
/*     <div class="box-content">*/
/*         <table  class="table table-striped table-bordered bootstrap-datatable datatable">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Nom</th>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Prenom</th>*/
/*                     <td>{{ entity.prenom }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nompere</th>*/
/*                     <td>{{ entity.nompere }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nommere</th>*/
/*                     <td>{{ entity.nommere }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Adressenaissance</th>*/
/*                     <td>{{ entity.adresseNaissance }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Sex</th>*/
/*                     <td>{{ entity.sex }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Datenaissance</th>*/
/*                     <td>{{ entity.dateNaissance|date('Y-m-d') }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nationalite</th>*/
/*                     <td>{{ entity.nationalite }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <td>{{ entity.id }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('back_officeback_extraitnaissance') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('back_officeback_extraitnaissance_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block jscript %}*/
/* {% endblock %}*/
