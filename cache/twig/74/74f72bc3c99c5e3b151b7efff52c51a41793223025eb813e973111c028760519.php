<?php

/* @vse_passwordstrength/event/overall_footer_after.html */
class __TwigTemplate_a131f383446140a158d5d1093f7b402687c569a5b9478e0b4a95b31b677736a2 extends Twig_Template
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
        if (((isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null) || (isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("password_strength.html", "@vse_passwordstrength/event/overall_footer_after.html", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if S_REGISTRATION or S_CHANGE_PASSWORD %}*/
/* 	{% include "password_strength.html" %}*/
/* {% endif %}*/
/* */
