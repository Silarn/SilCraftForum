<?php

/* @phpbbgallery_core/event/overall_header_navigation_prepend.html */
class __TwigTemplate_9efbea63f55bcb01048a5f454af34832df1c28208a29e82d6c760c0211c3f0b3 extends Twig_Template
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
        echo "<li class=\"small-icon icon-gallery no-bulletin rightside\"><a href=\"";
        echo (isset($context["U_GALLERY"]) ? $context["U_GALLERY"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("GALLERY");
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/event/overall_header_navigation_prepend.html";
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
/* <li class="small-icon icon-gallery no-bulletin rightside"><a href="{U_GALLERY}">{L_GALLERY}</a></li>*/
/* */
