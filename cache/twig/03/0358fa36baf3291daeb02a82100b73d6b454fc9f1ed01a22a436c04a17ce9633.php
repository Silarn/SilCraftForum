<?php

/* @dmzx_topicauthor/event/viewtopic_body_avatar_after.html */
class __TwigTemplate_bc0dd8a6fcca76798320a7d1516ed6a3fb298c4a79ea36b7737d9af7bebdf779 extends Twig_Template
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
        echo "<!--
*
* @package Topic Author
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
-->

</div>
<div>
<br />";
        // line 12
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_TOPIC_POSTER", array())) {
            echo "<strong style=\"color: #FF0000;\">";
            echo $this->env->getExtension('phpbb')->lang("TOPIC_AUTHOR");
            echo "</strong>";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_topicauthor/event/viewtopic_body_avatar_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
/* <!--*/
/* **/
/* * @package Topic Author*/
/* * @author dmzx (www.dmzx-web.net)*/
/* * @copyright (c) 2014 by dmzx (www.dmzx-web.net)*/
/* * @license http://opensource.org/licenses/gpl-license.php GNU Public License*/
/* * */
/* -->*/
/* */
/* </div>*/
/* <div>*/
/* <br /><!-- IF postrow.S_TOPIC_POSTER --><strong style="color: #FF0000;">{L_TOPIC_AUTHOR}</strong><!-- ENDIF -->*/
