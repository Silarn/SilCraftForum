<?php

/* gallery/gallery_header.html */
class __TwigTemplate_9c97f1a60e38a5c96d5a45527df49629d05320af3fce69d57f2cf2d6a88db81b extends Twig_Template
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
        if ((isset($context["S_IN_GALLERY_POPUP"]) ? $context["S_IN_GALLERY_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "gallery/gallery_header.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "
\t<div class=\"navbar\">
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>

\t\t<ul class=\"linklist\">
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 9
            echo (isset($context["U_POPUP_OWN"]) ? $context["U_POPUP_OWN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("OWN_IMAGES");
            echo "</a> &bull;
\t\t\t\t<a href=\"";
            // line 10
            echo (isset($context["U_POPUP_RECENT"]) ? $context["U_POPUP_RECENT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RECENT_IMAGES");
            echo "</a>
\t\t\t\t";
            // line 11
            if ((isset($context["U_POPUP_UPLOAD"]) ? $context["U_POPUP_UPLOAD"] : null)) {
                echo " &bull; <a href=\"";
                echo (isset($context["U_POPUP_UPLOAD"]) ? $context["U_POPUP_UPLOAD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("UPLOAD_IMAGE");
                echo "</a>";
            }
            // line 12
            echo "\t\t\t</li>
\t\t</ul>

\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>

\t<script type=\"text/javascript\">
\t// <![CDATA[
\tfunction insert_image(image_id, field_id)
\t{
\t\topener.document.forms['postform'].message.value += '[image]' + image_id +'[/image]';
\t\tdocument.getElementById('inserted_' + field_id).style.display = 'block';
\t}
\t// ]]>
\t</script>

";
        } else {
            // line 29
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "gallery/gallery_header.html", 29)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 30
            echo "
\t";
            // line 31
            if (((isset($context["GALLERY_VERSION_CHECK"]) ? $context["GALLERY_VERSION_CHECK"] : null) && (isset($context["U_ACP"]) ? $context["U_ACP"] : null))) {
                echo " 
\t<div id=\"gallery_version_check\" class=\"rules\">
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t\t<strong>";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                echo ":</strong> ";
                echo (isset($context["GALLERY_VERSION_CHECK"]) ? $context["GALLERY_VERSION_CHECK"] : null);
                if ((isset($context["U_MVC_IGNORE"]) ? $context["U_MVC_IGNORE"] : null)) {
                    echo " [ <a href=\"";
                    echo (isset($context["U_MVC_IGNORE"]) ? $context["U_MVC_IGNORE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("IGNORE_NOTUPTODATE_MESSAGE");
                    echo "</a> ]";
                }
                // line 35
                echo "\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "gallery/gallery_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  103 => 34,  97 => 31,  94 => 30,  81 => 29,  62 => 12,  54 => 11,  48 => 10,  42 => 9,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_IN_GALLERY_POPUP -->*/
/* 	<!-- INCLUDE simple_header.html -->*/
/* */
/* 	<div class="navbar">*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* */
/* 		<ul class="linklist">*/
/* 			<li>*/
/* 				<a href="{U_POPUP_OWN}">{L_OWN_IMAGES}</a> &bull;*/
/* 				<a href="{U_POPUP_RECENT}">{L_RECENT_IMAGES}</a>*/
/* 				<!-- IF U_POPUP_UPLOAD --> &bull; <a href="{U_POPUP_UPLOAD}">{L_UPLOAD_IMAGE}</a><!-- ENDIF -->*/
/* 			</li>*/
/* 		</ul>*/
/* */
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 	function insert_image(image_id, field_id)*/
/* 	{*/
/* 		opener.document.forms['postform'].message.value += '[image]' + image_id +'[/image]';*/
/* 		document.getElementById('inserted_' + field_id).style.display = 'block';*/
/* 	}*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_header.html -->*/
/* */
/* 	<!-- IF GALLERY_VERSION_CHECK and U_ACP --> */
/* 	<div id="gallery_version_check" class="rules">*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* 			<strong>{L_INFORMATION}:</strong> {GALLERY_VERSION_CHECK}<!-- IF U_MVC_IGNORE --> [ <a href="{U_MVC_IGNORE}">{L_IGNORE_NOTUPTODATE_MESSAGE}</a> ]<!-- ENDIF -->*/
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
