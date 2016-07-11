<?php

/* @vse_topicpreview/topicpreview.html */
class __TwigTemplate_f4794d3ef67e7b71703e3d6d25079ae322631e37b75f6d44230bff3da5c0bdd6 extends Twig_Template
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
        echo "<div class=\"topic_preview_content\" style=\"display:none;\">
\t";
        // line 2
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_LAST_POST", array())) {
            // line 3
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("FIRST_POST");
            echo "</strong>
\t\t<hr />
\t";
        }
        // line 6
        echo "\t";
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_FIRST_AVATAR", array())) {
            // line 7
            echo "\t\t<div class=\"topic_preview_avatar\">";
            echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_FIRST_AVATAR", array());
            echo "</div>
\t";
        }
        // line 9
        echo "\t<div class=\"topic_preview_first\">";
        echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_FIRST_POST", array());
        echo "</div>
\t";
        // line 10
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_LAST_POST", array())) {
            // line 11
            echo "\t\t<div class=\"topic_preview_break\"></div>
\t\t<strong>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</strong>
\t\t<hr />
\t\t";
            // line 14
            if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_LAST_AVATAR", array())) {
                // line 15
                echo "\t\t\t<div class=\"topic_preview_avatar\">";
                echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_LAST_AVATAR", array());
                echo "</div>
\t\t";
            }
            // line 17
            echo "\t\t<div class=\"topic_preview_last\">";
            echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "TOPIC_PREVIEW_LAST_POST", array());
            echo "</div>
\t";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/topicpreview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 17,  57 => 15,  55 => 14,  50 => 12,  47 => 11,  45 => 10,  40 => 9,  34 => 7,  31 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="topic_preview_content" style="display:none;">*/
/* 	{% if preview.TOPIC_PREVIEW_LAST_POST %}*/
/* 		<strong>{{ lang('FIRST_POST') }}</strong>*/
/* 		<hr />*/
/* 	{% endif %}*/
/* 	{% if preview.TOPIC_PREVIEW_FIRST_AVATAR %}*/
/* 		<div class="topic_preview_avatar">{{ preview.TOPIC_PREVIEW_FIRST_AVATAR }}</div>*/
/* 	{% endif %}*/
/* 	<div class="topic_preview_first">{{ preview.TOPIC_PREVIEW_FIRST_POST }}</div>*/
/* 	{% if preview.TOPIC_PREVIEW_LAST_POST %}*/
/* 		<div class="topic_preview_break"></div>*/
/* 		<strong>{{ lang('LAST_POST') }}</strong>*/
/* 		<hr />*/
/* 		{% if preview.TOPIC_PREVIEW_LAST_AVATAR %}*/
/* 			<div class="topic_preview_avatar">{{ preview.TOPIC_PREVIEW_LAST_AVATAR }}</div>*/
/* 		{% endif %}*/
/* 		<div class="topic_preview_last">{{ preview.TOPIC_PREVIEW_LAST_POST }}</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
