<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_deb69602f26c696bf00b0adc221eeb37732da6529b541954e7e5aaeb33790de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:loginInscription.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle:Default:loginInscription.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"form-bottom\">
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Utilisateur...\" class=\"form-username form-control\" id=\"form-username\" />
        </div>
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"form-password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\"  required=\"required\"name=\"form-password\" placeholder=\"Mot de passe...\" class=\"form-password form-control\" id=\"form-password\" />
        </div>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
        </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  70 => 22,  63 => 18,  57 => 15,  52 => 13,  47 => 11,  43 => 10,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle:Default:loginInscription.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="form-bottom">*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="username">{{ 'security.login.username'|trans }}</label>*/
/* */
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Utilisateur..." class="form-username form-control" id="form-username" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="form-password">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password"  required="required"name="form-password" placeholder="Mot de passe..." class="form-password form-control" id="form-password" />*/
/*         </div>*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*         <input type="submit" id="_submit" name="_submit" class="btn" value="{{ 'security.login.submit'|trans }}" />*/
/*     </form>*/
/*         </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
