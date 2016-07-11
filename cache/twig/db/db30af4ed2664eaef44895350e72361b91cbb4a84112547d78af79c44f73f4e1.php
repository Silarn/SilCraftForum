<?php

/* @vse_passwordstrength/event/acp_overall_footer_after.html */
class __TwigTemplate_b1403f49e8cddb246a7747f026a5d55972ad01093b2a8fb00bee3de75dccc2a8 extends Twig_Template
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
        if ((isset($context["USER"]) ? $context["USER"] : null)) {
            // line 2
            echo "\t";
            $this->loadTemplate("password_strength.html", "@vse_passwordstrength/event/acp_overall_footer_after.html", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/event/acp_overall_footer_after.html";
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
/* {% if USER %}*/
/* 	{% include "password_strength.html" %}*/
/* {% endif %}*/
/* */
