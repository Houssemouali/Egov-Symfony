<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6b37602b17bae1aec9dea9159f18d9df0189a2c7a9115255a631eb1eafe93fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:loginInscription.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 3);
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
        echo "    <p>Votre compte est deja crée , Attendez l'activation de la part de l'administrateur</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% extends "MyAppUserBundle:Default:loginInscription.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>Votre compte est deja crée , Attendez l'activation de la part de l'administrateur</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
