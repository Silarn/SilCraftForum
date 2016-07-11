<?php

/* @vse_abbc3/event/acp_bbcodes_actions_prepend.html */
class __TwigTemplate_fed703e8a2dac0750b71e4d546a9cee070b7a908f091c9234dcf399e9ae7effa extends Twig_Template
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
        echo "<span class=\"up-disabled\" style=\"display: none;\">";
        echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
        echo "</span>
<span class=\"up\"><a href=\"";
        // line 2
        echo $this->getAttribute((isset($context["bbcodes"]) ? $context["bbcodes"] : null), "U_MOVE_UP", array());
        echo "\" data-ajax=\"row_up\" data-overlay=\"false\">";
        echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
        echo "</a></span>
<span class=\"down-disabled\" style=\"display:none;\">";
        // line 3
        echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
        echo "</span>
<span class=\"down\"><a href=\"";
        // line 4
        echo $this->getAttribute((isset($context["bbcodes"]) ? $context["bbcodes"] : null), "U_MOVE_DOWN", array());
        echo "\" data-ajax=\"row_down\" data-overlay=\"false\">";
        echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_bbcodes_actions_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  24 => 2,  19 => 1,);
    }
}
/* <span class="up-disabled" style="display: none;">{{ ICON_MOVE_UP_DISABLED }}</span>*/
/* <span class="up"><a href="{{ bbcodes.U_MOVE_UP }}" data-ajax="row_up" data-overlay="false">{{ ICON_MOVE_UP }}</a></span>*/
/* <span class="down-disabled" style="display:none;">{{ ICON_MOVE_DOWN_DISABLED }}</span>*/
/* <span class="down"><a href="{{ bbcodes.U_MOVE_DOWN }}" data-ajax="row_down" data-overlay="false">{{ ICON_MOVE_DOWN }}</a></span>*/
/* */
