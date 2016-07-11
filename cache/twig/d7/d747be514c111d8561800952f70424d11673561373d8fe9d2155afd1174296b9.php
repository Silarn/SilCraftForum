<?php

/* @paybas_recenttopics/recent_topics_body.html */
class __TwigTemplate_2ca685d4bbbeae0ed1b739ce5aafecf4b72d389fd5471d2a5a9fdfe6b292479f extends Twig_Template
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
        echo "<a id=\"recent_topics\"></a>
<div id=\"recent-topics-box\" class=\"collapse-box\">
\t<h2 class=\"open\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("RECENT_TOPICS");
        echo "</h2>
\t<div id=\"recent-topics\">

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recent_topics", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recent_topics"]) {
            // line 7
            echo "\t";
            if (( !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()))) {
                // line 8
                echo "\t</ul>
\t";
            }
            // line 10
            echo "
\t";
            // line 11
            if (($this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 12
                echo "\t<ul>
\t";
            }
            // line 14
            echo "\t\t<li class=\"row";
            if ($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<dl class=\"icon ";
            // line 15
            echo $this->getAttribute($context["recent_topics"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 16
            if (($this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo " style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 17
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_NEWEST_POST", array());
                echo "\" class=\"icon-link\"></a>";
            }
            // line 18
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 19
            // line 20
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["recent_topics"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\"";
            if ($this->getAttribute($context["recent_topics"], "TOPIC_AUTHOR_COLOUR", array())) {
                echo " style=\"color: ";
                echo $this->getAttribute($context["recent_topics"], "TOPIC_AUTHOR_COLOUR", array());
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_TITLE", array());
            echo "</a>

\t\t\t\t\t\t<div class=\"forum-links\">
\t\t\t\t\t\t\t";
            // line 23
            if ($this->getAttribute($context["recent_topics"], "S_HAS_POLL", array())) {
                echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                echo " ";
            }
            // line 24
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["recent_topics"], "FORUM_ID", array())))) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 26
$context["recent_topics"], "U_VIEW_FORUM", array()) && $this->getAttribute($context["recent_topics"], "FORUM_NAME", array()))) {
                // line 27
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recent_topics"], "parent_forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_forums"]) {
                    echo "<a class=\"forum-link\" href=\"";
                    echo $this->getAttribute($context["parent_forums"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["parent_forums"], "FORUM_NAME", array());
                    echo "</a> &raquo; ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "<a class=\"forum-link\" href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 31
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
            $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 32
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
            // line 34
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 35
                echo "\t\t\t\t<dd class=\"lastpost\">";
                if ((isset($context["RT_SORT_START_TIME"]) ? $context["RT_SORT_START_TIME"] : null)) {
                    echo $this->getAttribute($context["recent_topics"], "FIRST_POST_TIME", array());
                } else {
                    echo $this->getAttribute($context["recent_topics"], "LAST_POST_TIME", array());
                }
                echo " <a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                echo "</a></dd>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t<dd class=\"status-icons\">
\t\t\t\t\t";
            // line 38
            if (($this->getAttribute($context["recent_topics"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["recent_topics"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "UNAPPROVED_IMG", array());
                echo "</a>";
            }
            // line 39
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "DELETED_IMG", array());
                echo "</a>";
            }
            // line 40
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_REPORT", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "REPORTED_IMG", array());
                echo "</a>";
            }
            // line 41
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array())) {
                echo $this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array());
            }
            // line 42
            echo "\t\t\t\t</dd>

\t\t\t</dl>
\t\t</li>
\t";
            // line 46
            if ($this->getAttribute($context["recent_topics"], "S_LAST_ROW", array())) {
                // line 47
                echo "\t</ul>
\t";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent_topics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t";
        // line 57
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 58
            echo "\t<div class=\"action-bar\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 60
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "@paybas_recenttopics/recent_topics_body.html", 60)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 61
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 64
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/recent_topics_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 64,  262 => 61,  250 => 60,  246 => 58,  244 => 57,  241 => 56,  231 => 52,  227 => 50,  220 => 47,  218 => 46,  212 => 42,  207 => 41,  198 => 40,  189 => 39,  181 => 38,  178 => 37,  162 => 35,  160 => 34,  156 => 32,  151 => 31,  147 => 29,  126 => 27,  124 => 26,  117 => 25,  114 => 24,  109 => 23,  91 => 20,  90 => 19,  87 => 18,  81 => 17,  70 => 16,  66 => 15,  50 => 14,  46 => 12,  44 => 11,  41 => 10,  37 => 8,  34 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <a id="recent_topics"></a>*/
/* <div id="recent-topics-box" class="collapse-box">*/
/* 	<h2 class="open">{L_RECENT_TOPICS}</h2>*/
/* 	<div id="recent-topics">*/
/* */
/* <!-- BEGIN recent_topics -->*/
/* 	<!-- IF not recent_topics.S_TOPIC_TYPE_SWITCH and not recent_topics.S_FIRST_ROW -->*/
/* 	</ul>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF recent_topics.S_FIRST_ROW or not recent_topics.S_TOPIC_TYPE_SWITCH -->*/
/* 	<ul>*/
/* 	<!-- ENDIF -->*/
/* 		<li class="row<!-- IF recent_topics.S_POST_GLOBAL --> global-announce<!-- ENDIF --><!-- IF recent_topics.S_POST_ANNOUNCE --> announce<!-- ENDIF --><!-- IF recent_topics.S_POST_STICKY --> sticky<!-- ENDIF --><!-- IF recent_topics.S_TOPIC_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<dl class="icon {recent_topics.TOPIC_IMG_STYLE}">*/
/* 				<dt<!-- IF recent_topics.TOPIC_ICON_IMG and S_TOPIC_ICONS --> style="background-image: url({T_ICONS_PATH}{recent_topics.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{recent_topics.TOPIC_FOLDER_IMG_ALT}">*/
/* 					<!-- IF recent_topics.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{recent_topics.U_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<!-- EVENT topiclist_row_prepend -->*/
/* 						<!-- IF recent_topics.S_UNREAD_TOPIC and not S_IS_BOT --><!-- ENDIF --><a href="{recent_topics.U_VIEW_TOPIC}" class="topictitle"<!-- IF recent_topics.TOPIC_AUTHOR_COLOUR --> style="color: {recent_topics.TOPIC_AUTHOR_COLOUR}"<!-- ENDIF -->>{recent_topics.TOPIC_TITLE}</a>*/
/* */
/* 						<div class="forum-links">*/
/* 							<!-- IF recent_topics.S_HAS_POLL -->{POLL_IMG} <!-- ENDIF -->*/
/* 							<!-- IF recent_topics.S_POST_GLOBAL and FORUM_ID != recent_topics.FORUM_ID -->*/
/* 								<a href="{recent_topics.U_VIEW_FORUM}">{recent_topics.FORUM_NAME}</a>*/
/* 							<!-- ELSEIF recent_topics.U_VIEW_FORUM and recent_topics.FORUM_NAME -->*/
/* 								<!-- BEGIN parent_forums --><a class="forum-link" href="{recent_topics.parent_forums.U_VIEW_FORUM}">{recent_topics.parent_forums.FORUM_NAME}</a> &raquo; <!-- END parent_forums --><a class="forum-link" href="{recent_topics.U_VIEW_FORUM}">{recent_topics.FORUM_NAME}</a>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* */
/* 						<!-- EVENT topiclist_row_append -->*/
/* 					</div>*/
/* 				</dt>*/
/* 				<!-- IF not S_IS_BOT -->*/
/* 				<dd class="lastpost"><!-- IF RT_SORT_START_TIME -->{recent_topics.FIRST_POST_TIME}<!-- ELSE -->{recent_topics.LAST_POST_TIME}<!-- ENDIF --> <a href="{recent_topics.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{LAST_POST_IMG}</a></dd>*/
/* 				<!-- ENDIF -->*/
/* 				<dd class="status-icons">*/
/* 					<!-- IF recent_topics.S_TOPIC_UNAPPROVED or recent_topics.S_POSTS_UNAPPROVED --><a href="{recent_topics.U_MCP_QUEUE}">{recent_topics.UNAPPROVED_IMG}</a><!-- ENDIF -->*/
/* 					<!-- IF recent_topics.S_TOPIC_DELETED --><a href="{recent_topics.U_MCP_QUEUE}">{recent_topics.DELETED_IMG}</a><!-- ENDIF -->*/
/* 					<!-- IF recent_topics.S_TOPIC_REPORTED --><a href="{recent_topics.U_MCP_REPORT}">{recent_topics.REPORTED_IMG}</a><!-- ENDIF -->*/
/* 					<!-- IF recent_topics.ATTACH_ICON_IMG -->{recent_topics.ATTACH_ICON_IMG}<!-- ENDIF -->*/
/* 				</dd>*/
/* */
/* 			</dl>*/
/* 		</li>*/
/* 	<!-- IF recent_topics.S_LAST_ROW -->*/
/* 	</ul>*/
/* 	<!-- ENDIF -->*/
/* <!-- BEGINELSE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_TOPICS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END recent_topics -->*/
/* */
/* 	<!-- IF .pagination -->*/
/* 	<div class="action-bar">*/
/* 		<div class="pagination">*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
