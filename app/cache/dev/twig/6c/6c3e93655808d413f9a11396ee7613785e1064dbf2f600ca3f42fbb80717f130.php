<?php

/* BackOfficebackBundle:FosUser:essai.html.twig */
class __TwigTemplate_d1e137425818098f680c8930c57aa5b4772e877cf780c4cf3346f6baa844f4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficebackBundle::Layout.html.twig", "BackOfficebackBundle:FosUser:essai.html.twig", 1);
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
        // line 3
        echo "<h3 class=\"mbr-header__text\">Ajout Agent</h3>
                       
                        
                        <form  method=\"POST\">
                            
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"email\" required=\"\" placeholder=\"email*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"username\" required=\"\" placeholder=\"username*\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"pwd\" placeholder=\"pwd*\">

                            </div>
                           
                            <div class=\"form-group\">
                            
                           
                                <div class=\"modal-body\">
                    <form id=\"form\">
                        <input id=\"ipt-id\" name=\"ipt-id\" type=\"hidden\"/>
                        <label>Role </label><select name=\"choix\" id=\"ipt-adresse\" type=\"text\" >
                            <option value=\"ROLE_AGENT_MUNICIPALITE\">Municipalite</option>
                            
                            <option value=\"ROLE_AGENT_POSTE\">Poste</option>
                            <option value=\"ROLE_AGENT_INTERIEUR\">Ministére d'interieur</option>
                                                        <option value=\"ROLE_AGENT_MINISTRE\">Ministére d'industrie</option>


                        </select>
                      
                    </form>
                    
                       
                    
\t\t
     
                         
                            
                            </div>
                            
                            <div class=\"mbr-buttons mbr-buttons--right\"><button type=\"submit\" class=\"mbr-buttons__btn btn btn-lg btn-danger\">Confirmer</button></div>
                        </form>
   ";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:FosUser:essai.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficebackBundle::Layout.html.twig' %}*/
/* {% block body -%}*/
/*                             <h3 class="mbr-header__text">Ajout Agent</h3>*/
/*                        */
/*                         */
/*                         <form  method="POST">*/
/*                             */
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="email" required="" placeholder="email*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="username" required="" placeholder="username*">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" name="pwd" placeholder="pwd*">*/
/* */
/*                             </div>*/
/*                            */
/*                             <div class="form-group">*/
/*                             */
/*                            */
/*                                 <div class="modal-body">*/
/*                     <form id="form">*/
/*                         <input id="ipt-id" name="ipt-id" type="hidden"/>*/
/*                         <label>Role </label><select name="choix" id="ipt-adresse" type="text" >*/
/*                             <option value="ROLE_AGENT_MUNICIPALITE">Municipalite</option>*/
/*                             */
/*                             <option value="ROLE_AGENT_POSTE">Poste</option>*/
/*                             <option value="ROLE_AGENT_INTERIEUR">Ministére d'interieur</option>*/
/*                                                         <option value="ROLE_AGENT_MINISTRE">Ministére d'industrie</option>*/
/* */
/* */
/*                         </select>*/
/*                       */
/*                     </form>*/
/*                     */
/*                        */
/*                     */
/* 		*/
/*      */
/*                          */
/*                             */
/*                             </div>*/
/*                             */
/*                             <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">Confirmer</button></div>*/
/*                         </form>*/
/*    {% endblock %}*/
