<?php

/* @paybas_recenttopics/event/index_body_markforums_before.html */
class __TwigTemplate_c6918a612ead5d86fdbdcc4d57662e762ab83d7da34c0c31ec25cf9864287bfc extends Twig_Template
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
        if ((((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null) &&  !(isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null)) && ((isset($context["recent_topics_included"]) ? $context["recent_topics_included"] : null) != true))) {
            $location = "recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("recent_topics_body.html", "@paybas_recenttopics/event/index_body_markforums_before.html", 1)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "<!-- DEFINE recent_topics_included = true -->";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/event/index_body_markforums_before.html";
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
/* <!-- IF RECENT_TOPICS_DISPLAY and not RT_ALT_LOCATION and recent_topics_included neq true --><!-- INCLUDE recent_topics_body.html --><!-- DEFINE recent_topics_included = true --><!-- ENDIF -->*/
/* */
