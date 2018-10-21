<?php

/* BackOfficebackBundle:FosUser:index.html.twig */
class __TwigTemplate_5347245071f62a20883f18b822e20b72f0106cb2db734b3903e9dec1962ca12f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:FosUser:index.html.twig", 1);
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
        echo "<h1>FosUser list</h1>

\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
        <thead>
            <tr>
                <th>Username</th>
                
                <th>Email</th>
                
                
                <th>Locked</th>
                
                <th>Id</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
               
                
                
              
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "locked", array()), "html", null, true);
            echo "</td>
               
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fosuser_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:FosUser:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 51,  103 => 46,  91 => 40,  85 => 37,  78 => 33,  73 => 31,  65 => 26,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'BackOfficebackBundle::Layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>FosUser list</h1>*/
/* */
/* 		<table class="table table-striped table-bordered bootstrap-datatable datatable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 */
/*                 <th>Email</th>*/
/*                 */
/*                 */
/*                 <th>Locked</th>*/
/*                 */
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('fosuser_show', { 'id': entity.id }) }}">{{ entity.username }}</a></td>*/
/*                 */
/*                 <td>{{ entity.email }}</td>*/
/*                */
/*                 */
/*                 */
/*               */
/*                 <td>{{ entity.locked }}</td>*/
/*                */
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('fosuser_show', { 'id': entity.id }) }}"><i class="fa fa-close" aria-hidden="true"></i></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fosuser_edit', { 'id': entity.id }) }}"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosuser_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
