<?php

/* @phpbbgallery_core/gallery/imageblock_polaroid.html */
class __TwigTemplate_a3a25ded8bcd1881297b1b8e45105cc6c1abeca8990c9c5821ceb7d69d5d1873 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "imageblock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageblock"]) {
            // line 2
            echo "<span class=\"clear\"></span>
";
            // line 3
            if ($this->getAttribute($context["imageblock"], "U_BLOCK", array())) {
                echo "<h2><a href=\"";
                echo $this->getAttribute($context["imageblock"], "U_BLOCK", array());
                echo "\">";
                echo $this->getAttribute($context["imageblock"], "BLOCK_NAME", array());
                echo "</a></h2>";
            }
            // line 4
            if ($this->getAttribute($context["imageblock"], "ERROR", array())) {
                echo "<h2>";
                echo $this->getAttribute($context["imageblock"], "ERROR", array());
                echo "</h2>

";
            } else {
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["imageblock"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 8
                    echo "<div class=\"polaroid\">
\t<p style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold; font-size: 1.2em;\">
\t\t";
                    // line 10
                    if ($this->getAttribute($context["image"], "U_IMAGE", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["image"], "U_IMAGE", array());
                        echo "\">";
                    }
                    echo $this->getAttribute($context["image"], "UC_IMAGE_NAME", array());
                    if ($this->getAttribute($context["image"], "U_IMAGE", array())) {
                        echo "</a>";
                    }
                    // line 11
                    echo "\t</p>
\t<hr />
\t<div id=\"thumbnail\">
\t";
                    // line 14
                    if ($this->getAttribute($context["image"], "UC_THUMBNAIL_ACTION", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["image"], "UC_THUMBNAIL_ACTION", array());
                        echo "\">";
                    }
                    echo "<img src=\"";
                    echo $this->getAttribute($context["image"], "UC_THUMBNAIL", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["image"], "UC_IMAGE_NAME", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["image"], "UC_IMAGE_NAME", array());
                    echo "\" />";
                    if ($this->getAttribute($context["image"], "UC_THUMBNAIL_ACTION", array())) {
                        echo "</a>";
                    }
                    // line 15
                    echo "\t</div>
\t<hr />
\t";
                    // line 17
                    if ($this->getAttribute($context["image"], "U_ALBUM", array())) {
                        echo $this->env->getExtension('phpbb')->lang("ALBUM_NAME");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["image"], "U_ALBUM", array());
                        echo "\" style=\"font-weight: bold;\" title=\"";
                        echo $this->getAttribute($context["image"], "ALBUM_NAME", array());
                        echo "\">";
                        echo $this->getAttribute($context["image"], "ALBUM_NAME", array());
                        echo "</a><br />";
                    }
                    // line 18
                    echo "\t";
                    if ($this->getAttribute($context["image"], "POSTER", array())) {
                        echo $this->env->getExtension('phpbb')->lang("UPLOADED_BY_USER");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["image"], "POSTER", array());
                        echo "<br />";
                    }
                    // line 19
                    echo "\t";
                    if ($this->getAttribute($context["image"], "TIME", array())) {
                        echo $this->env->getExtension('phpbb')->lang("UPLOADED_ON_DATE");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["image"], "TIME", array());
                        echo "<br />";
                    }
                    // line 20
                    echo "\t";
                    if (($this->getAttribute($context["image"], "IMAGE_VIEWS", array()) >  -1)) {
                        echo $this->env->getExtension('phpbb')->lang("IMAGE_VIEWS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["image"], "IMAGE_VIEWS", array());
                        echo "<br />";
                    }
                    // line 21
                    echo "\t";
                    if ($this->getAttribute($context["image"], "S_RATINGS", array())) {
                        echo $this->env->getExtension('phpbb')->lang("RATING");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["image"], "U_RATINGS", array());
                        echo "\">";
                        echo $this->getAttribute($context["image"], "S_RATINGS", array());
                        echo "</a><br />";
                    }
                    // line 22
                    echo "\t";
                    if ($this->getAttribute($context["image"], "S_COMMENTS", array())) {
                        echo $this->getAttribute($context["image"], "L_COMMENTS", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["image"], "U_COMMENTS", array());
                        echo "\">";
                        echo $this->getAttribute($context["image"], "S_COMMENTS", array());
                        echo "</a><br />";
                    }
                    // line 23
                    echo "\t";
                    if ($this->getAttribute($context["image"], "U_USER_IP", array())) {
                        echo $this->env->getExtension('phpbb')->lang("IP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo $this->getAttribute($context["image"], "U_USER_IP", array());
                        echo "<br />";
                    }
                    // line 24
                    echo "\t";
                    if ($this->getAttribute($context["image"], "S_STATUS_UNAPPROVED", array())) {
                        // line 25
                        echo "\t\t\t<br />
\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                        // line 26
                        echo $this->getAttribute($context["image"], "S_STATUS_UNAPPROVED_ACTION", array());
                        echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                        // line 28
                        echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                        echo "\" name=\"action[disapprove]\">
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                        // line 29
                        echo $this->env->getExtension('phpbb')->lang("APPROVE");
                        echo "\" name=\"action[approve]\">
\t\t\t\t</p>
\t\t\t</form>
\t\t";
                    }
                    // line 33
                    echo "</div>

";
                    // line 35
                    if ($this->getAttribute($context["image"], "S_LAST_ROW", array())) {
                        // line 36
                        echo "\t<span class=\"clear\"></span>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageblock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/gallery/imageblock_polaroid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 36,  180 => 35,  176 => 33,  169 => 29,  165 => 28,  160 => 26,  157 => 25,  154 => 24,  146 => 23,  135 => 22,  124 => 21,  115 => 20,  106 => 19,  97 => 18,  85 => 17,  81 => 15,  65 => 14,  60 => 11,  50 => 10,  46 => 8,  42 => 7,  34 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN imageblock -->*/
/* <span class="clear"></span>*/
/* <!-- IF imageblock.U_BLOCK --><h2><a href="{imageblock.U_BLOCK}">{imageblock.BLOCK_NAME}</a></h2><!-- ENDIF -->*/
/* <!-- IF imageblock.ERROR --><h2>{imageblock.ERROR}</h2>*/
/* */
/* <!-- ELSE -->*/
/* <!-- BEGIN image -->*/
/* <div class="polaroid">*/
/* 	<p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold; font-size: 1.2em;">*/
/* 		<!-- IF imageblock.image.U_IMAGE --><a href="{imageblock.image.U_IMAGE}"><!-- ENDIF -->{imageblock.image.UC_IMAGE_NAME}<!-- IF imageblock.image.U_IMAGE --></a><!-- ENDIF -->*/
/* 	</p>*/
/* 	<hr />*/
/* 	<div id="thumbnail">*/
/* 	<!-- IF imageblock.image.UC_THUMBNAIL_ACTION --><a href="{imageblock.image.UC_THUMBNAIL_ACTION}"><!-- ENDIF --><img src="{imageblock.image.UC_THUMBNAIL}" alt="{imageblock.image.UC_IMAGE_NAME}" title="{imageblock.image.UC_IMAGE_NAME}" /><!-- IF imageblock.image.UC_THUMBNAIL_ACTION --></a><!-- ENDIF -->*/
/* 	</div>*/
/* 	<hr />*/
/* 	<!-- IF imageblock.image.U_ALBUM -->{L_ALBUM_NAME}{L_COLON} <a href="{imageblock.image.U_ALBUM}" style="font-weight: bold;" title="{imageblock.image.ALBUM_NAME}">{imageblock.image.ALBUM_NAME}</a><br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.POSTER -->{L_UPLOADED_BY_USER}{L_COLON} {imageblock.image.POSTER}<br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.TIME -->{L_UPLOADED_ON_DATE}{L_COLON} {imageblock.image.TIME}<br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.IMAGE_VIEWS > -1 -->{L_IMAGE_VIEWS}{L_COLON} {imageblock.image.IMAGE_VIEWS}<br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.S_RATINGS -->{L_RATING}{L_COLON} <a href="{imageblock.image.U_RATINGS}">{imageblock.image.S_RATINGS}</a><br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.S_COMMENTS -->{imageblock.image.L_COMMENTS}{L_COLON} <a href="{imageblock.image.U_COMMENTS}">{imageblock.image.S_COMMENTS}</a><br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.U_USER_IP -->{L_IP}{L_COLON}{imageblock.image.U_USER_IP}<br /><!-- ENDIF -->*/
/* 	<!-- IF imageblock.image.S_STATUS_UNAPPROVED -->*/
/* 			<br />*/
/* 			<form method="post" class="mcp_approve" action="{imageblock.image.S_STATUS_UNAPPROVED_ACTION}">*/
/* 				<p class="post-notice unapproved">*/
/* 					<input class="button2" type="submit" value="{L_DISAPPROVE}" name="action[disapprove]">*/
/* 					<input class="button1" type="submit" value="{L_APPROVE}" name="action[approve]">*/
/* 				</p>*/
/* 			</form>*/
/* 		<!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- IF imageblock.image.S_LAST_ROW -->*/
/* 	<span class="clear"></span>*/
/* <!-- ENDIF -->*/
/* <!-- END image -->*/
/* <!-- ENDIF -->*/
/* <!-- END imageblock -->*/
