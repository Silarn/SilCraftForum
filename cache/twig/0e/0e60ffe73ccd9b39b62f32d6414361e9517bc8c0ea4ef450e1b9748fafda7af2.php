<?php

/* @vse_abbc3/event/acp_bbcodes_edit_fieldsets_after.html */
class __TwigTemplate_d95c7acb46b9cc112106e74508ba5f4b09de466774ac59bbccc6bf813583e397 extends Twig_Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_PERMISSIONS");
        echo "</legend>
\t<dl>
\t\t<dt><label for=\"bbcode_group\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_GROUP");
        echo "</label><br /><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_GROUP_INFO");
        echo "</span></dt>
\t\t<dd><select id=\"bbcode_group\" name=\"bbcode_group[]\" size=\"10\" multiple=\"multiple\">";
        // line 5
        echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_bbcodes_edit_fieldsets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/* 	<legend>{{ lang('ACP_GROUPS_PERMISSIONS') }}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="bbcode_group">{{ lang('ABBC3_BBCODE_GROUP') }}</label><br /><br /><span>{{ lang('ABBC3_BBCODE_GROUP_INFO') }}</span></dt>*/
/* 		<dd><select id="bbcode_group" name="bbcode_group[]" size="10" multiple="multiple">{{ S_GROUP_OPTIONS }}</select></dd>*/
/* 	</dl>*/
/* </fieldset>*/
/* */
