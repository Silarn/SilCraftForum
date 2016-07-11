<?php

/* gallery/gallery_footer.html */
class __TwigTemplate_6862d2ac9adbe552404dbb93887bc7cfb744dc65fdbcd3995fae4770c83877d4 extends Twig_Template
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
            echo "\t<a href=\"#\" onclick=\"window.close(); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("CLOSE_WINDOW");
            echo "</a>
\t";
            // line 3
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "gallery/gallery_footer.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 5
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "gallery/gallery_footer.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "gallery/gallery_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_IN_GALLERY_POPUP -->*/
/* 	<a href="#" onclick="window.close(); return false;">{L_CLOSE_WINDOW}</a>*/
/* 	<!-- INCLUDE simple_footer.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
