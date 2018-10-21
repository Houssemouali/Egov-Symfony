<?php

/* BackOfficebackBundle:FosUser:agent.html.twig */
class __TwigTemplate_51e3f0e40dfe01b8ffeb3fdc35583caa8109d1416a3490d1544e9239ef8ca1ec extends Twig_Template
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
        // line 2
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
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
             <div class=\"form-group\">

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-email form-control", "placeholder" => "Email ...")));
        echo "

";
        // line 21
        echo "             </div>
            
 ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-username form-control", "placeholder" => "Username ...")));
        echo "

                
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-plainPassword form-control", "placeholder" => "Mot de passe ...")));
        echo "


 ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-plainPassword form-control", "placeholder" => "Verification ...")));
        echo "
 </div>
  </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
        
   


";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackOfficebackBundle:FosUser:agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  68 => 33,  61 => 29,  55 => 26,  49 => 23,  45 => 21,  40 => 18,  34 => 15,  19 => 2,);
    }
}
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
/*              <div class="form-group">*/
/* */
/*         {{ form_widget(form.email, { 'attr': {'class': 'form-email form-control','placeholder':'Email ...'} }) }}*/
/* */
/* {#{{ form_widget(form) }}#}*/
/*              </div>*/
/*             */
/*  {{ form_widget(form.username, { 'attr': {'class': 'form-username form-control','placeholder':'Username ...'} }) }}*/
/* */
/*                 */
/* {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-plainPassword form-control','placeholder':'Mot de passe ...'} }) }}*/
/* */
/* */
/*  {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-plainPassword form-control','placeholder':'Verification ...'} }) }}*/
/*  </div>*/
/*   </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/*         */
/*    */
/* */
/* */
/* {{ form_end(form) }}*/
/* */
