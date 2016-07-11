<?php

/* @phpbbgallery_core/event/memberlist_view_user_statistics_after.html */
class __TwigTemplate_507dd8c6e327baf3152938d56988bbf3f98d764c7895a55e88b90c0bfa5d67d2 extends Twig_Template
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
        if ((isset($context["U_GALLERY_IMAGES_ALLOW"]) ? $context["U_GALLERY_IMAGES_ALLOW"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("GALLERY_IMAGES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><strong>";
            echo (isset($context["U_GALLERY_IMAGES"]) ? $context["U_GALLERY_IMAGES"] : null);
            echo "</strong></dd>";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/event/memberlist_view_user_statistics_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- IF U_GALLERY_IMAGES_ALLOW --><dt>{L_GALLERY_IMAGES}{L_COLON}</dt> <dd><strong>{U_GALLERY_IMAGES}</strong></dd><!-- ENDIF -->*/
