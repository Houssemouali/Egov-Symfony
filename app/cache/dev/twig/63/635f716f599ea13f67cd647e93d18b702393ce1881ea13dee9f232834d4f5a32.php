<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c6af686862c567b775bcb8fb216d6f35dca12c6af292d3176a4ee19a08523007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 4
        echo "
                        \t
<div class=\"form-box\">
    <div class=\"form-top\">
        <div class=\"form-top-left\">
            <h3>Inscription</h3>

        </div>
        <div class=\"form-top-right\">
            <i class=\"fa fa-pencil\"></i>
        </div>
    </div>
 <div class=\"form-bottom\">
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
             

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-username form-control", "placeholder" => "Email ...")));
        echo "

";
        // line 23
        echo "             
            
 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-username form-control", "placeholder" => "Username ...")));
        echo "

                
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-plainPassword form-control", "placeholder" => "Mot de passe ...")));
        echo "


 ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-plainPassword form-control", "placeholder" => "Verification ...")));
        echo "
 </br>
 <div >
        <input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\"/>
    </div>
        
 </div>
 
   
  </div>
    


";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 44,  71 => 34,  65 => 31,  59 => 28,  53 => 25,  49 => 23,  44 => 20,  38 => 17,  23 => 4,  19 => 1,);
    }
}
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*                         	*/
/* <div class="form-box">*/
/*     <div class="form-top">*/
/*         <div class="form-top-left">*/
/*             <h3>Inscription</h3>*/
/* */
/*         </div>*/
/*         <div class="form-top-right">*/
/*             <i class="fa fa-pencil"></i>*/
/*         </div>*/
/*     </div>*/
/*  <div class="form-bottom">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*              */
/* */
/*         {{ form_widget(form.email, { 'attr': {'class': 'form-username form-control','placeholder':'Email ...'} }) }}*/
/* */
/* {#{{ form_widget(form) }}#}*/
/*              */
/*             */
/*  {{ form_widget(form.username, { 'attr': {'class': 'form-username form-control','placeholder':'Username ...'} }) }}*/
/* */
/*                 */
/* {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-plainPassword form-control','placeholder':'Mot de passe ...'} }) }}*/
/* */
/* */
/*  {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-plainPassword form-control','placeholder':'Verification ...'} }) }}*/
/*  </br>*/
/*  <div >*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" class="btn"/>*/
/*     </div>*/
/*         */
/*  </div>*/
/*  */
/*    */
/*   </div>*/
/*     */
/* */
/* */
/* {{ form_end(form) }}*/
