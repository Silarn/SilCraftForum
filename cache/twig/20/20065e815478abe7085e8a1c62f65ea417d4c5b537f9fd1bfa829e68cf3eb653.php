<?php

/* @phpbbgallery_core/event/memberlist_view_content_append.html */
class __TwigTemplate_1fa6693b3bc3774ac67370023e635a447aaaa0690e528309039c8a1c84f7d50b extends Twig_Template
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
        echo "<div class=\"panel bg1\" id=\"phpbb_gallery_user_profile\">

";
        // line 3
        $location = "gallery/imageblock_polaroid.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("gallery/imageblock_polaroid.html", "@phpbbgallery_core/event/memberlist_view_content_append.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/event/memberlist_view_content_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel bg1" id="phpbb_gallery_user_profile">*/
/* */
/* <!-- INCLUDE gallery/imageblock_polaroid.html -->*/
/* */
/* </div>*/
