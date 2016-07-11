<?php

/* @phpbbgallery_core/event/index_body_block_stats_append.html */
class __TwigTemplate_b56bc0ee49e2b27ed452200a304a9188e0c686dc38c99098d0f6010ef131c0c9 extends Twig_Template
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
        if ((isset($context["PHPBBGALLERY_INDEX_STATS"]) ? $context["PHPBBGALLERY_INDEX_STATS"] : null)) {
            echo "&bull; ";
            echo $this->env->getExtension('phpbb')->lang("TOTAL_IMAGES");
            echo " <b>";
            echo (isset($context["PHPBBGALLERY_INDEX_STATS"]) ? $context["PHPBBGALLERY_INDEX_STATS"] : null);
            echo "</b>";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/event/index_body_block_stats_append.html";
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
/* <!-- IF PHPBBGALLERY_INDEX_STATS -->&bull; {L_TOTAL_IMAGES} <b>{PHPBBGALLERY_INDEX_STATS}</b><!-- ENDIF -->*/
