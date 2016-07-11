<?php

/* top_bar.html */
class __TwigTemplate_dc02b1f28303f99e1268f5da7725f144ae2823fc72194e8d8c7ba9c6000b6d6e extends Twig_Template
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
        echo "<div id=\"top-bar\">
\t<div class=\"inner\">
\t\t<ul class=\"linklist\">
\t\t\t";
        // line 4
        // line 5
        echo "\t\t\t<li class=\"icon1 small-icon\" data-skip-responsive=\"true\"><strong>Posterity</strong></li>
\t\t\t<li class=\"icon2 small-icon link\"><a href=\"http://forum.rimpo.us/\">SilCraft Forum</a></li>
\t\t\t<li class=\"icon3 small-icon link\"><a href=\"https://www.phpbb.com/\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("PHPBB");
        echo "</a></li>

\t\t\t";
        // line 9
        // line 10
        echo "\t\t\t<!-- <li class=\"icon4 small-icon link rightside\"><a href=\"#\">";
        echo $this->env->getExtension('phpbb')->lang("LINK");
        echo "</a></li> -->
\t\t\t";
        // line 11
        // line 12
        echo "\t\t</ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "top_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  40 => 11,  35 => 10,  34 => 9,  29 => 7,  25 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="top-bar">*/
/* 	<div class="inner">*/
/* 		<ul class="linklist">*/
/* 			<!-- EVENT top_bar_links_before -->*/
/* 			<li class="icon1 small-icon" data-skip-responsive="true"><strong>Posterity</strong></li>*/
/* 			<li class="icon2 small-icon link"><a href="http://forum.rimpo.us/">SilCraft Forum</a></li>*/
/* 			<li class="icon3 small-icon link"><a href="https://www.phpbb.com/">{L_PHPBB}</a></li>*/
/* */
/* 			<!-- EVENT quickstyle_event -->*/
/* 			<!-- <li class="icon4 small-icon link rightside"><a href="#">{L_LINK}</a></li> -->*/
/* 			<!-- EVENT top_bar_links_after -->*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* */
