<?php

/* gallery/viewimage_body.html */
class __TwigTemplate_6f4480daf0885ca263dcc2dcec5260a0fc0923f845893761b35dfd527151cd55 extends Twig_Template
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
        $location = "gallery/gallery_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("gallery/gallery_header.html", "gallery/viewimage_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2><a href=\"";
        echo (isset($context["S_ALBUM_ACTION"]) ? $context["S_ALBUM_ACTION"] : null);
        echo "\">";
        echo (isset($context["IMAGE_NAME"]) ? $context["IMAGE_NAME"] : null);
        echo "</a></h2>

<div class=\"post bg2";
        // line 4
        if ((isset($context["S_IMAGE_REPORTED"]) ? $context["S_IMAGE_REPORTED"] : null)) {
            echo " reported";
        }
        echo "\">
\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t<div class=\"postbody_album\" id=\"image\">
\t\t\t";
        // line 7
        if ((isset($context["UC_IMAGE_ACTION"]) ? $context["UC_IMAGE_ACTION"] : null)) {
            echo "<a href=\"";
            echo (isset($context["UC_IMAGE_ACTION"]) ? $context["UC_IMAGE_ACTION"] : null);
            echo "\">";
        }
        echo "<img src=\"";
        echo (isset($context["UC_IMAGE"]) ? $context["UC_IMAGE"] : null);
        echo "\" alt=\"";
        echo (isset($context["IMAGE_NAME"]) ? $context["IMAGE_NAME"] : null);
        echo "\" class=\"postimage\"/>";
        if ((isset($context["UC_IMAGE_ACTION"]) ? $context["UC_IMAGE_ACTION"] : null)) {
            echo "</a>";
        }
        // line 8
        echo "\t\t\t";
        if ((isset($context["S_IMAGE_REPORTED"]) ? $context["S_IMAGE_REPORTED"] : null)) {
            echo "<br /><br /><a href=\"";
            echo (isset($context["U_IMAGE_REPORTED"]) ? $context["U_IMAGE_REPORTED"] : null);
            echo "\"><span class=\"error\">";
            echo $this->env->getExtension('phpbb')->lang("IMAGE_REPORTED");
            echo "</span></a>";
        }
        // line 9
        echo "\t\t\t<br /><span class=\"image-description\">";
        echo (isset($context["IMAGE_DESC"]) ? $context["IMAGE_DESC"] : null);
        echo "</span>
\t\t</div>
\t<span class=\"corners-bottom\"><span></span></span></div>
</div>
";
        // line 13
        if (((isset($context["UC_PREV_IMAGE"]) ? $context["UC_PREV_IMAGE"] : null) || (isset($context["UC_NEXT_IMAGE"]) ? $context["UC_NEXT_IMAGE"] : null))) {
            // line 14
            echo "<div class=\"post bg2\">
\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t<div style=\"text-align: center; overflow: hidden;\">
\t\t\t";
            // line 17
            if ((isset($context["UC_PREV_IMAGE"]) ? $context["UC_PREV_IMAGE"] : null)) {
                echo "<div class=\"image_prev_image\">";
                echo (isset($context["UC_PREV_IMAGE"]) ? $context["UC_PREV_IMAGE"] : null);
                echo "</div>";
            }
            if ((isset($context["UC_NEXT_IMAGE"]) ? $context["UC_NEXT_IMAGE"] : null)) {
                echo "<div class=\"image_next_image\">";
                echo (isset($context["UC_NEXT_IMAGE"]) ? $context["UC_NEXT_IMAGE"] : null);
                echo "</div>";
            }
            // line 18
            echo "\t\t</div>
\t</div>
</div>
";
        }
        // line 22
        echo "<div id=\"details\" class=\"panel\">
\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t<div class=\"postbody\">
\t\t\t<ul class=\"post-buttons\">
\t\t\t\t";
        // line 26
        // line 27
        echo "\t\t\t\t<!--<li><a href=\"";
        echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EDIT_IMAGE");
        echo "\" class=\"button icon-button icon-notification\"><span>";
        echo $this->env->getExtension('phpbb')->lang("EDIT_IMAGE");
        echo "</span></a></li>-->
\t\t\t\t";
        // line 28
        if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_IMAGE");
            echo "\" class=\"button icon-button edit-icon\"><span>";
            echo $this->env->getExtension('phpbb')->lang("EDIT_IMAGE");
            echo "</span></a></li>";
        }
        // line 29
        echo "\t\t\t\t";
        if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_IMAGE");
            echo "\" class=\"button icon-button delete-icon\"><span>";
            echo $this->env->getExtension('phpbb')->lang("DELETE_IMAGE");
            echo "</span></a></li>";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("REPORT_IMAGE");
            echo "\" class=\"button icon-button report-icon\"><span>";
            echo $this->env->getExtension('phpbb')->lang("REPORT_IMAGE");
            echo "</span></a></li>";
        }
        // line 31
        echo "\t\t\t</ul>
\t\t\t<h3>";
        // line 32
        echo (isset($context["IMAGE_NAME"]) ? $context["IMAGE_NAME"] : null);
        echo "</h3>
\t\t\t<hr />

\t\t\t<fieldset class=\"fields1 anti-postbody\">
\t\t\t\t";
        // line 36
        if ((isset($context["CONTEST_RANK"]) ? $context["CONTEST_RANK"] : null)) {
            // line 37
            echo "\t\t\t\t<dl class=\"column1\">
\t\t\t\t\t<dt><label>";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("CONTEST_RESULT");
            echo ":</label></dt>
\t\t\t\t\t<dd>";
            // line 39
            echo (isset($context["CONTEST_RANK"]) ? $context["CONTEST_RANK"] : null);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<dl class=\"column2\">
\t\t\t\t\t<dt><label>";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("UPLOADED_ON_DATE");
        echo ":</label></dt>
\t\t\t\t\t<dd>";
        // line 44
        echo (isset($context["IMAGE_TIME"]) ? $context["IMAGE_TIME"] : null);
        echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 46
        if ((isset($context["IMAGE_URL"]) ? $context["IMAGE_URL"] : null)) {
            // line 47
            echo "\t\t\t\t<dl class=\"column1\">
\t\t\t\t\t<dt><label>";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("IMAGE_URL");
            echo ":</label></dt>
\t\t\t\t\t<dd><input type=\"text\" size=\"28\" value=\"";
            // line 49
            echo (isset($context["IMAGE_URL"]) ? $context["IMAGE_URL"] : null);
            echo "\" class=\"inputbox autowidth-gallery\" onclick=\"this.focus();this.select();\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t<dl class=\"column2\">
\t\t\t\t\t<dt><label>";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("GALLERY_VIEWS");
        echo ":</label></dt>
\t\t\t\t\t<dd>";
        // line 54
        echo (isset($context["IMAGE_VIEW"]) ? $context["IMAGE_VIEW"] : null);
        echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 56
        if ((isset($context["IMAGE_BBCODE"]) ? $context["IMAGE_BBCODE"] : null)) {
            // line 57
            echo "\t\t\t\t<dl class=\"column1\">
\t\t\t\t\t<dt><label>";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("IMAGE_BBCODE");
            echo ":</label></dt>
\t\t\t\t\t<dd><input type=\"text\" size=\"28\" value=\"";
            // line 59
            echo (isset($context["IMAGE_BBCODE"]) ? $context["IMAGE_BBCODE"] : null);
            echo "\" class=\"inputbox autowidth-gallery\" onclick=\"this.focus();this.select();\" /></dd>
\t\t\t\t\t";
            // line 60
            if ((isset($context["IMAGE_IMGURL_BBCODE"]) ? $context["IMAGE_IMGURL_BBCODE"] : null)) {
                // line 61
                echo "\t\t\t\t\t\t<dd><input type=\"text\" size=\"28\" value=\"";
                echo (isset($context["IMAGE_IMGURL_BBCODE"]) ? $context["IMAGE_IMGURL_BBCODE"] : null);
                echo "\" class=\"inputbox autowidth-gallery\" onclick=\"this.focus();this.select();\" /></dd>
\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t";
        if ((isset($context["S_VIEW_RATE"]) ? $context["S_VIEW_RATE"] : null)) {
            // line 66
            echo "\t\t\t\t<dl class=\"column2\">
\t\t\t\t\t<dt><label>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("RATING");
            echo ":</label></dt>
\t\t\t\t\t<dd>";
            // line 68
            if ((isset($context["CONTEST_RESULT_HIDDEN"]) ? $context["CONTEST_RESULT_HIDDEN"] : null)) {
                echo (isset($context["CONTEST_RESULT_HIDDEN"]) ? $context["CONTEST_RESULT_HIDDEN"] : null);
            } else {
                echo (isset($context["IMAGE_RATING"]) ? $context["IMAGE_RATING"] : null);
            }
            if ((isset($context["S_YOUR_RATING"]) ? $context["S_YOUR_RATING"] : null)) {
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("YOUR_RATING");
                echo ": ";
                echo (isset($context["S_YOUR_RATING"]) ? $context["S_YOUR_RATING"] : null);
                echo ")";
            }
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t";
        if ((isset($context["S_ALLOWED_TO_RATE"]) ? $context["S_ALLOWED_TO_RATE"] : null)) {
            // line 72
            echo "\t\t\t\t<form id=\"postform\" action=\"";
            echo (isset($context["S_RATE_ACTION"]) ? $context["S_RATE_ACTION"] : null);
            echo "\" method=\"post\">
\t\t\t\t<dl class=\"column2\">
\t\t\t\t\t<dt><label>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("YOUR_RATING");
            echo ":</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t";
            // line 76
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rate_scale", array()))) {
                // line 77
                echo "\t\t\t\t\t\t\t<select name=\"rating\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rate_scale", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rate_scale"]) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["rate_scale"], "RATE_POINT", array()) == 1)) {
                        echo "<option value=\"0\">";
                        echo $this->env->getExtension('phpbb')->lang("DONT_RATE_IMAGE");
                        echo "</option>";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["rate_scale"], "RATE_POINT", array());
                    echo "\">";
                    echo $this->getAttribute($context["rate_scale"], "RATE_POINT", array());
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate_scale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t";
                echo (isset($context["CONTEST_RATING"]) ? $context["CONTEST_RATING"] : null);
                echo "
\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            // line 88
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</form>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t</fieldset>

\t\t\t";
        // line 93
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbgallery_exif', '__main__'));
        $this->env->loadTemplate('@phpbbgallery_exif/event/gallery_viewimage_details.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 94
        echo "\t\t</div>

\t\t<dl class=\"postprofile\" id=\"profile_poster";
        // line 96
        if ((isset($context["S_POSTER_ONLINE"]) ? $context["S_POSTER_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t\t\t<dt>
\t\t\t\t";
        // line 98
        if ((isset($context["POSTER_AVATAR"]) ? $context["POSTER_AVATAR"] : null)) {
            // line 99
            echo "\t\t\t\t\t";
            if ((isset($context["U_POSTER"]) ? $context["U_POSTER"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_POSTER"]) ? $context["U_POSTER"] : null);
                echo "\">";
                echo (isset($context["POSTER_AVATAR"]) ? $context["POSTER_AVATAR"] : null);
                echo "</a>";
            } else {
                echo (isset($context["POSTER_AVATAR"]) ? $context["POSTER_AVATAR"] : null);
            }
            echo "<br />
\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t";
        if ( !(isset($context["U_POSTER"]) ? $context["U_POSTER"] : null)) {
            echo "<strong>";
            echo (isset($context["POSTER_FULL"]) ? $context["POSTER_FULL"] : null);
            echo "</strong>";
        } else {
            echo (isset($context["POSTER_FULL"]) ? $context["POSTER_FULL"] : null);
        }
        // line 102
        echo "\t\t\t</dt>

\t\t\t";
        // line 104
        if (((isset($context["POSTER_RANK_TITLE"]) ? $context["POSTER_RANK_TITLE"] : null) || (isset($context["POSTER_RANK_IMG"]) ? $context["POSTER_RANK_IMG"] : null))) {
            echo "<dd>";
            echo (isset($context["POSTER_RANK_TITLE"]) ? $context["POSTER_RANK_TITLE"] : null);
            if (((isset($context["POSTER_RANK_TITLE"]) ? $context["POSTER_RANK_TITLE"] : null) && (isset($context["POSTER_RANK_IMG"]) ? $context["POSTER_RANK_IMG"] : null))) {
                echo "<br />";
            }
            echo (isset($context["POSTER_RANK_IMG"]) ? $context["POSTER_RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 105
        echo "
\t\t\t<dd>&nbsp;</dd>

\t\t\t";
        // line 108
        if (((isset($context["POSTER_POSTS"]) ? $context["POSTER_POSTS"] : null) != "")) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo ":</strong> ";
            echo (isset($context["POSTER_POSTS"]) ? $context["POSTER_POSTS"] : null);
            echo "</dd>";
        }
        // line 109
        echo "\t\t\t";
        if (((isset($context["POSTER_GALLERY_IMAGES"]) ? $context["POSTER_GALLERY_IMAGES"] : null) != "")) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("IMAGES");
            echo ":</strong> ";
            if ((isset($context["U_POSTER_GALLERY_SEARCH"]) ? $context["U_POSTER_GALLERY_SEARCH"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_POSTER_GALLERY_SEARCH"]) ? $context["U_POSTER_GALLERY_SEARCH"] : null);
                echo "\">";
                echo (isset($context["POSTER_GALLERY_IMAGES"]) ? $context["POSTER_GALLERY_IMAGES"] : null);
                echo "</a>";
            } else {
                echo (isset($context["POSTER_GALLERY_IMAGES"]) ? $context["POSTER_GALLERY_IMAGES"] : null);
            }
            echo "</dd>";
        }
        // line 110
        echo "\t\t\t";
        if ((isset($context["POSTER_JOINED"]) ? $context["POSTER_JOINED"] : null)) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo ":</strong> ";
            echo (isset($context["POSTER_JOINED"]) ? $context["POSTER_JOINED"] : null);
            echo "</dd>";
        }
        // line 111
        echo "\t\t\t";
        if ((isset($context["POSTER_FROM"]) ? $context["POSTER_FROM"] : null)) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("LOCATION");
            echo ":</strong> ";
            echo (isset($context["POSTER_FROM"]) ? $context["POSTER_FROM"] : null);
            echo "</dd>";
        }
        // line 112
        echo "\t\t\t";
        if ((isset($context["POSTER_IP"]) ? $context["POSTER_IP"] : null)) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo ":</strong> ";
            echo (isset($context["POSTER_IP"]) ? $context["POSTER_IP"] : null);
            echo " [ <a href=\"";
            echo (isset($context["U_POSTER_WHOIS"]) ? $context["U_POSTER_WHOIS"] : null);
            echo "\" onclick=\"popup(this.href, 750, 500); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("WHOIS");
            echo "</a> ]</dd>";
        }
        // line 113
        echo "
\t\t\t";
        // line 114
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 115
            echo "\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t<dd><strong>";
            // line 116
            echo (isset($context["PROFILE_FIELD1_NAME"]) ? $context["PROFILE_FIELD1_NAME"] : null);
            echo ":</strong> ";
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</dd>
\t\t\t";
        }
        // line 118
        echo "
\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 120
            echo "\t\t\t\t<dd><strong>";
            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            echo ":</strong> ";
            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
            echo "</dd>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
\t\t\t";
        // line 123
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 124
            echo "\t\t\t\t";
            $value = false;
            $context['definition']->set('DISPLAY_PROFILE_ICONS', $value);
            // line 125
            echo "\t\t\t\t";
            if ((((((isset($context["U_POSTER_PM"]) ? $context["U_POSTER_PM"] : null) || (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null)) || (isset($context["U_POSTER_WWW"]) ? $context["U_POSTER_WWW"] : null)) || (isset($context["U_POSTER_MSN"]) ? $context["U_POSTER_MSN"] : null)) || (isset($context["U_POSTER_ICQ"]) ? $context["U_POSTER_ICQ"] : null))) {
                // line 126
                echo "\t\t\t\t\t";
                $value = true;
                $context['definition']->set('DISPLAY_PROFILE_ICONS', $value);
                // line 127
                echo "\t\t\t\t";
            } elseif (((((isset($context["U_POSTER_YIM"]) ? $context["U_POSTER_YIM"] : null) || (isset($context["U_POSTER_AIM"]) ? $context["U_POSTER_AIM"] : null)) || (isset($context["U_POSTER_JABBER"]) ? $context["U_POSTER_JABBER"] : null)) || (isset($context["U_POSTER_GALLERY"]) ? $context["U_POSTER_GALLERY"] : null))) {
                // line 128
                echo "\t\t\t\t\t";
                $value = true;
                $context['definition']->set('DISPLAY_PROFILE_ICONS', $value);
                // line 129
                echo "\t\t\t\t";
            }
            // line 130
            echo "\t\t\t";
        }
        // line 131
        echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
        // line 132
        echo $this->env->getExtension('phpbb')->lang("CONTACT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left dropdown-down\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger dropdown-toggle\"><span class=\"imageset icon_contact\" title=\"";
        // line 134
        echo $this->env->getExtension('phpbb')->lang("CONTACT");
        echo " ";
        echo (isset($context["POSTER_USERNAME"]) ? $context["POSTER_USERNAME"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("CONTACT");
        echo " ";
        echo (isset($context["POSTER_USERNAME"]) ? $context["POSTER_USERNAME"] : null);
        echo "</span></a>
\t\t\t\t\t<div style=\"display: none; margin-left: -1163.97px;\" class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div style=\"margin-left: 0px; left: 0px; max-width: 1580px;\" class=\"dropdown-contents contact-icons dropdown-nonscroll\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 139
        if ((isset($context["U_POSTER_PM"]) ? $context["U_POSTER_PM"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_POSTER_PM"]) ? $context["U_POSTER_PM"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon pm-icon\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
            echo "</span>
\t\t\t\t\t\t\t\t</a>";
        }
        // line 142
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
            echo "\" title=\"";
            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon email-icon\">";
            // line 143
            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</a>";
        }
        // line 145
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["U_POSTER_JABBER"]) ? $context["U_POSTER_JABBER"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_POSTER_JABBER"]) ? $context["U_POSTER_JABBER"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon jabber-icon\">";
            // line 146
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo "</span>
\t\t\t\t\t\t\t\t</a>";
        }
        // line 148
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["U_POSTER_ICQ"]) ? $context["U_POSTER_ICQ"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_POSTER_ICQ"]) ? $context["U_POSTER_ICQ"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ICQ");
            echo "\" class=\"last-cell\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon phpbb_icq-icon\">";
            // line 149
            echo $this->env->getExtension('phpbb')->lang("ICQ");
            echo "</span>
\t\t\t\t\t\t\t\t</a>";
        }
        // line 151
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 153
        if ((isset($context["U_POSTER_WWW"]) ? $context["U_POSTER_WWW"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_POSTER_WWW"]) ? $context["U_POSTER_WWW"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("VISIT_WEBSITE");
            echo ": ";
            echo (isset($context["U_WWW"]) ? $context["U_WWW"] : null);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"contact-icon phpbb_website-icon\">";
            // line 154
            echo $this->env->getExtension('phpbb')->lang("VISIT_WEBSITE");
            echo ": ";
            echo (isset($context["U_WWW"]) ? $context["U_WWW"] : null);
            echo "</span>
\t\t\t\t\t\t\t</a>";
        }
        // line 156
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>

\t\t</dl>
\t<span class=\"corners-bottom\"><span></span></span></div>
\t";
        // line 164
        if ((isset($context["S_QUICK_MOD"]) ? $context["S_QUICK_MOD"] : null)) {
            // line 165
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_MOD_ACTION"]) ? $context["S_MOD_ACTION"] : null);
            echo "\">
\t<fieldset class=\"quickmod\" style=\"float: none; width: 100%;\">
\t\t<label for=\"quick-mod-select\">";
            // line 167
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo ":</label>
\t\t<select name=\"action\" id=\"quick-mod-select\">
\t\t\t";
            // line 169
            if ((isset($context["S_QM_MOVE"]) ? $context["S_QM_MOVE"] : null)) {
                echo "<option value=\"images_move\">";
                echo $this->env->getExtension('phpbb')->lang("QUEUE_A_MOVE");
                echo "</option>";
            }
            // line 170
            echo "\t\t\t";
            if ((isset($context["S_QM_EDIT"]) ? $context["S_QM_EDIT"] : null)) {
                echo "<option value=\"image_edit\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT_IMAGE");
                echo "</option>";
            }
            // line 171
            echo "\t\t\t";
            if ((isset($context["S_QM_STATUS"]) ? $context["S_QM_STATUS"] : null)) {
                // line 172
                echo "\t\t\t\t";
                if ( !(isset($context["S_STATUS_UNAPPROVED"]) ? $context["S_STATUS_UNAPPROVED"] : null)) {
                    echo "<option value=\"images_unapprove\">";
                    echo $this->env->getExtension('phpbb')->lang("QUEUE_A_UNAPPROVE");
                    echo "</option>";
                }
                // line 173
                echo "\t\t\t\t";
                if ( !(isset($context["S_STATUS_APPROVED"]) ? $context["S_STATUS_APPROVED"] : null)) {
                    echo "<option value=\"images_approve\">";
                    echo $this->env->getExtension('phpbb')->lang("QUEUE_A_APPROVE");
                    echo "</option>";
                }
                // line 174
                echo "\t\t\t\t";
                if ( !(isset($context["S_STATUS_LOCKED"]) ? $context["S_STATUS_LOCKED"] : null)) {
                    echo "<option value=\"images_lock\">";
                    echo $this->env->getExtension('phpbb')->lang("QUEUE_A_LOCK");
                    echo "</option>";
                }
                // line 175
                echo "\t\t\t";
            }
            // line 176
            echo "\t\t\t";
            if ((isset($context["S_QM_DELETE"]) ? $context["S_QM_DELETE"] : null)) {
                echo "<option value=\"images_delete\">";
                echo $this->env->getExtension('phpbb')->lang("QUEUE_A_DELETE");
                echo "</option>";
            }
            // line 177
            echo "\t\t\t";
            if (((isset($context["S_QM_REPORT"]) ? $context["S_QM_REPORT"] : null) && (isset($context["S_IMAGE_REPORTED"]) ? $context["S_IMAGE_REPORTED"] : null))) {
                echo "<option value=\"report_details\">";
                echo $this->env->getExtension('phpbb')->lang("READ_REPORT");
                echo "</option>";
            }
            // line 178
            echo "\t\t</select>
\t\t<input type=\"submit\" value=\"";
            // line 179
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t";
            // line 180
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
\t";
        }
        // line 184
        echo "</div>

";
        // line 186
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_ALLOWED_TO_COMMENT"]) ? $context["S_ALLOWED_TO_COMMENT"] : null))) {
            // line 187
            echo "\t";
            if (((isset($context["S_ALLOWED_TO_COMMENT"]) ? $context["S_ALLOWED_TO_COMMENT"] : null) &&  !(isset($context["S_HIDE_COMMENT_INPUT"]) ? $context["S_HIDE_COMMENT_INPUT"] : null))) {
                // line 188
                echo "\t\t<form method=\"post\" action=\"";
                echo (isset($context["S_COMMENT_ACTION"]) ? $context["S_COMMENT_ACTION"] : null);
                echo "\" id=\"postform\">
\t\t";
                // line 189
                // line 190
                echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<h2 class=\"quickreply-title\">";
                // line 192
                echo $this->env->getExtension('phpbb')->lang("POST_COMMENT");
                echo "</h2>
\t\t\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t\t";
                // line 194
                if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 195
                    echo "\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt><label>";
                    // line 196
                    echo $this->env->getExtension('phpbb')->lang("USERNAME");
                    echo ":</label></dt>
\t\t\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"username\" maxlength=\"32\" /></dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t";
                if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
                    // line 201
                    echo "\t\t\t\t\t\t\t";
                    $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "gallery/viewimage_body.html", 201)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 202
                    echo "\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t";
                // line 204
                echo "\t\t\t\t\t\t<div id=\"message-box\">
\t\t\t\t\t\t\t<textarea style=\"height: 9em;\" name=\"message\" rows=\"7\" cols=\"76\" tabindex=\"3\" class=\"inputbox\" name=\"message\" id=\"message\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 207
                // line 208
                echo "\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t\t";
                // line 210
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t";
                // line 211
                echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"6\" name=\"preview\" value=\"";
                // line 212
                echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
                echo "\" class=\"button2\" id=\"qr_full_editor\" />&nbsp;
\t\t\t\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"7\" name=\"submit\" value=\"";
                // line 213
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\"/>&nbsp;
\t\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                // line 217
                // line 218
                echo "\t\t</form>
\t";
            }
        }
        // line 221
        echo "
";
        // line 222
        if ((isset($context["S_ALLOWED_READ_COMMENTS"]) ? $context["S_ALLOWED_READ_COMMENTS"] : null)) {
            // line 223
            echo "<a name=\"comments\"></a>
";
            // line 224
            if (( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "commentrow", array())) || (isset($context["S_COMMENTS_DISABLED"]) ? $context["S_COMMENTS_DISABLED"] : null))) {
                // line 225
                echo "\t<div id=\"comments\" class=\"panel\">
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t\t<strong>";
                // line 227
                if ((isset($context["S_COMMENTS_DISABLED"]) ? $context["S_COMMENTS_DISABLED"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("IMAGE_COMMENTS_DISABLED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_COMMENTS");
                }
                echo "</strong>
\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>
";
            }
            // line 231
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "commentrow", array()))) {
                // line 232
                echo "\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_COMMENTS"]) ? $context["TOTAL_COMMENTS"] : null))) {
                    // line 233
                    echo "\t<div class=\"topic-actions\">
\t\t<div class=\"pagination\">
\t\t\t";
                    // line 235
                    echo (isset($context["TOTAL_COMMENTS"]) ? $context["TOTAL_COMMENTS"] : null);
                    echo " &bull; 
\t\t\t";
                    // line 236
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                        // line 237
                        echo "\t\t\t\t";
                        $location = "pagination.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("pagination.html", "gallery/viewimage_body.html", 237)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 238
                        echo "\t\t\t";
                    } else {
                        // line 239
                        echo "\t\t\t\t";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "
\t\t\t";
                    }
                    // line 241
                    echo "\t\t</div>
\t</div>
\t";
                }
                // line 244
                echo "<br><br>
\t";
                // line 245
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "commentrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commentrow"]) {
                    // line 246
                    echo "\t<div class=\"post ";
                    if (($this->getAttribute($context["commentrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    if ($this->getAttribute($context["commentrow"], "S_ONLINE", array())) {
                        echo " online";
                    }
                    echo "\">
\t<a id=\"comment_";
                    // line 247
                    echo $this->getAttribute($context["commentrow"], "COMMENT_ID", array());
                    echo "\"></a>
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>
\t\t\t<div class=\"postbody\">
\t\t\t\t";
                    // line 250
                    if (((($this->getAttribute($context["commentrow"], "U_DELETE", array()) || $this->getAttribute($context["commentrow"], "U_EDIT", array())) || $this->getAttribute($context["commentrow"], "U_INFO", array())) || $this->getAttribute($context["commentrow"], "U_QUOTE", array()))) {
                        // line 251
                        echo "\t\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t\t";
                        // line 252
                        if ($this->getAttribute($context["commentrow"], "U_EDIT", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_EDIT", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("EDIT_COMMENT");
                            echo "\" class=\"button icon-button edit-icon\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("EDIT_COMMENT");
                            echo "</span></a></li>";
                        }
                        // line 253
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["commentrow"], "U_DELETE", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_DELETE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("DELETE_COMMENT");
                            echo "\" class=\"button icon-button delete-icon\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("DELETE_COMMENT");
                            echo "</span></a></li>";
                        }
                        // line 254
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["commentrow"], "U_INFO", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_INFO", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("IP");
                            echo "\" onclick=\"popup(this.href, 750, 500); return false;\" class=\"button icon-button info-icon\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("IP");
                            echo "</span></a></li>";
                        }
                        // line 255
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["commentrow"], "U_QUOTE", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_QUOTE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("QUOTE_COMMENT");
                            echo "\" class=\"button icon-button quote-icon\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("QUOTE_COMMENT");
                            echo "</span></a></li>";
                        }
                        // line 256
                        echo "\t\t\t\t\t</ul>
\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t<p class=\"author\"><a href=\"";
                    echo $this->getAttribute($context["commentrow"], "U_COMMENT", array());
                    echo "\">";
                    echo (isset($context["MINI_POST_IMG"]) ? $context["MINI_POST_IMG"] : null);
                    echo "</a>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " <strong>";
                    echo $this->getAttribute($context["commentrow"], "POST_AUTHOR_FULL", array());
                    echo "</strong> &raquo; ";
                    echo $this->getAttribute($context["commentrow"], "TIME", array());
                    echo " </p>
\t\t\t\t<div class=\"content\">";
                    // line 259
                    echo $this->getAttribute($context["commentrow"], "TEXT", array());
                    echo "</div>
\t\t\t\t";
                    // line 260
                    if ($this->getAttribute($context["commentrow"], "EDIT_INFO", array())) {
                        echo "<div class=\"notice\">";
                        echo $this->getAttribute($context["commentrow"], "EDIT_INFO", array());
                        echo "</div>";
                    }
                    // line 261
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["commentrow"], "SIGNATURE", array())) {
                        echo "<div id=\"sig";
                        echo $this->getAttribute($context["commentrow"], "COMMENT_ID", array());
                        echo "\" class=\"signature\">";
                        echo $this->getAttribute($context["commentrow"], "SIGNATURE", array());
                        echo "</div>";
                    }
                    // line 262
                    echo "\t\t\t</div>
\t\t\t<dl class=\"postprofile\" id=\"profile";
                    // line 263
                    echo $this->getAttribute($context["commentrow"], "COMMENT_ID", array());
                    echo "\">
\t\t\t\t<dt>
\t\t\t\t\t";
                    // line 265
                    if ($this->getAttribute($context["commentrow"], "POSTER_AVATAR", array())) {
                        // line 266
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["commentrow"], "U_POST_AUTHOR", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_POST_AUTHOR", array());
                            echo "\">";
                            echo $this->getAttribute($context["commentrow"], "POSTER_AVATAR", array());
                            echo "</a>";
                        } else {
                            echo $this->getAttribute($context["commentrow"], "POSTER_AVATAR", array());
                        }
                        echo "<br />
\t\t\t\t\t";
                    }
                    // line 268
                    echo "\t\t\t\t\t";
                    if ( !$this->getAttribute($context["commentrow"], "U_POST_AUTHOR", array())) {
                        echo "<strong>";
                        echo $this->getAttribute($context["commentrow"], "POST_AUTHOR_FULL", array());
                        echo "</strong>";
                    } else {
                        echo $this->getAttribute($context["commentrow"], "POST_AUTHOR_FULL", array());
                    }
                    // line 269
                    echo "\t\t\t\t</dt>

\t\t\t\t";
                    // line 271
                    if (($this->getAttribute($context["commentrow"], "RANK_TITLE", array()) || $this->getAttribute($context["commentrow"], "RANK_IMG", array()))) {
                        echo "<dd>";
                        echo $this->getAttribute($context["commentrow"], "RANK_TITLE", array());
                        if (($this->getAttribute($context["commentrow"], "RANK_TITLE", array()) && $this->getAttribute($context["commentrow"], "RANK_IMG", array()))) {
                            echo "<br />";
                        }
                        echo $this->getAttribute($context["commentrow"], "RANK_IMG", array());
                        echo "</dd>";
                    }
                    // line 272
                    echo "
\t\t\t\t<dd>&nbsp;</dd>

\t\t\t\t";
                    // line 275
                    if (($this->getAttribute($context["commentrow"], "POSTER_POSTS", array()) != "")) {
                        echo "<dd><strong>";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo ":</strong> ";
                        echo $this->getAttribute($context["commentrow"], "POSTER_POSTS", array());
                        echo "</dd>";
                    }
                    // line 276
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["commentrow"], "GALLERY_IMAGES", array()) != "")) {
                        echo "<dd><strong>";
                        echo $this->env->getExtension('phpbb')->lang("IMAGES");
                        echo ":</strong> ";
                        if ($this->getAttribute($context["commentrow"], "U_GALLERY_SEARCH", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["commentrow"], "U_GALLERY_SEARCH", array());
                            echo "\">";
                            echo $this->getAttribute($context["commentrow"], "GALLERY_IMAGES", array());
                            echo "</a>";
                        } else {
                            echo $this->getAttribute($context["commentrow"], "GALLERY_IMAGES", array());
                        }
                        echo "</dd>";
                    }
                    // line 277
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["commentrow"], "POSTER_JOINED", array())) {
                        echo "<dd><strong>";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo ":</strong> ";
                        echo $this->getAttribute($context["commentrow"], "POSTER_JOINED", array());
                        echo "</dd>";
                    }
                    // line 278
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["commentrow"], "POSTER_FROM", array())) {
                        echo "<dd><strong>";
                        echo $this->env->getExtension('phpbb')->lang("LOCATION");
                        echo ":</strong> ";
                        echo $this->getAttribute($context["commentrow"], "POSTER_FROM", array());
                        echo "</dd>";
                    }
                    // line 279
                    echo "
\t\t\t\t";
                    // line 280
                    if ($this->getAttribute($context["commentrow"], "S_PROFILE_FIELD1", array())) {
                        // line 281
                        echo "\t\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t<dd><strong>";
                        // line 282
                        echo $this->getAttribute($context["commentrow"], "PROFILE_FIELD1_NAME", array());
                        echo ":</strong> ";
                        echo $this->getAttribute($context["commentrow"], "PROFILE_FIELD1_VALUE", array());
                        echo "</dd>
\t\t\t\t";
                    }
                    // line 284
                    echo "
\t\t\t\t";
                    // line 285
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["commentrow"], "custom_fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                        // line 286
                        echo "\t\t\t\t\t<dd><strong>";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        echo ":</strong> ";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                        echo "</dd>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 288
                    echo "
\t\t\t\t";
                    // line 289
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 290
                        echo "\t\t\t\t\t";
                        if ((((($this->getAttribute($context["commentrow"], "U_PM", array()) || $this->getAttribute($context["commentrow"], "U_EMAIL", array())) || $this->getAttribute($context["commentrow"], "U_WWW", array())) || $this->getAttribute($context["commentrow"], "U_MSN", array())) || $this->getAttribute($context["commentrow"], "U_ICQ", array()))) {
                            // line 291
                            echo "\t\t\t\t\t\t";
                            $value = true;
                            $context['definition']->set('DISPLAY_PROFILE_ICONS', $value);
                            // line 292
                            echo "\t\t\t\t\t";
                        } elseif (((($this->getAttribute($context["commentrow"], "U_YIM", array()) || $this->getAttribute($context["commentrow"], "U_AIM", array())) || $this->getAttribute($context["commentrow"], "U_JABBER", array())) || $this->getAttribute($context["commentrow"], "U_GALLERY", array()))) {
                            // line 293
                            echo "\t\t\t\t\t\t";
                            $value = true;
                            $context['definition']->set('DISPLAY_PROFILE_ICONS', $value);
                            // line 294
                            echo "\t\t\t\t\t";
                        }
                        // line 295
                        echo "\t\t\t\t";
                    }
                    // line 296
                    echo "\t\t\t\t";
                    if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "DISPLAY_PROFILE_ICONS", array())) {
                        // line 297
                        echo "\t\t\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                        // line 298
                        echo $this->env->getExtension('phpbb')->lang("CONTACT");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left dropdown-down\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger dropdown-toggle\"><span class=\"imageset icon_contact\" title=\"";
                        // line 300
                        echo $this->env->getExtension('phpbb')->lang("CONTACT");
                        echo " ";
                        echo (isset($context["POSTER_USERNAME"]) ? $context["POSTER_USERNAME"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("CONTACT");
                        echo " ";
                        echo (isset($context["POSTER_USERNAME"]) ? $context["POSTER_USERNAME"] : null);
                        echo "</a>
\t\t\t\t\t<div style=\"display: none; margin-left: -1163.97px;\" class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div style=\"margin-left: 0px; left: 0px; max-width: 1580px;\" class=\"dropdown-contents contact-icons dropdown-nonscroll\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                        // line 305
                        if ((isset($context["U_POSTER_PM"]) ? $context["U_POSTER_PM"] : null)) {
                            echo "<a href=\"";
                            echo (isset($context["U_POSTER_PM"]) ? $context["U_POSTER_PM"] : null);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
                            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon pm-icon\">";
                            // line 306
                            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
                            echo "</span>
\t\t\t\t\t\t\t\t</a>";
                        }
                        // line 308
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null)) {
                            echo "<a href=\"";
                            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
                            echo "\" title=\"";
                            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon email-icon\">";
                            // line 309
                            echo (isset($context["U_POSTER_EMAIL"]) ? $context["U_POSTER_EMAIL"] : null);
                            echo "</span>
\t\t\t\t\t\t\t\t</a>";
                        }
                        // line 311
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["U_POSTER_JABBER"]) ? $context["U_POSTER_JABBER"] : null)) {
                            echo "<a href=\"";
                            echo (isset($context["U_POSTER_JABBER"]) ? $context["U_POSTER_JABBER"] : null);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("JABBER");
                            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon jabber-icon\">";
                            // line 312
                            echo $this->env->getExtension('phpbb')->lang("JABBER");
                            echo "</span>
\t\t\t\t\t\t\t\t</a>";
                        }
                        // line 314
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["U_POSTER_ICQ"]) ? $context["U_POSTER_ICQ"] : null)) {
                            echo "<a href=\"";
                            echo (isset($context["U_POSTER_ICQ"]) ? $context["U_POSTER_ICQ"] : null);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("ICQ");
                            echo "\" class=\"last-cell\">
\t\t\t\t\t\t\t\t\t<span class=\"contact-icon phpbb_icq-icon\">";
                            // line 315
                            echo $this->env->getExtension('phpbb')->lang("ICQ");
                            echo "</span>
\t\t\t\t\t\t\t\t</a>";
                        }
                        // line 317
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
                        // line 319
                        if ((isset($context["U_POSTER_WWW"]) ? $context["U_POSTER_WWW"] : null)) {
                            echo "<a href=\"";
                            echo (isset($context["U_POSTER_WWW"]) ? $context["U_POSTER_WWW"] : null);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("VISIT_WEBSITE");
                            echo ": ";
                            echo (isset($context["U_WWW"]) ? $context["U_WWW"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t<span class=\"contact-icon phpbb_website-icon\">";
                            // line 320
                            echo $this->env->getExtension('phpbb')->lang("VISIT_WEBSITE");
                            echo ": ";
                            echo (isset($context["U_WWW"]) ? $context["U_WWW"] : null);
                            echo "</span>
\t\t\t\t\t\t\t</a>";
                        }
                        // line 322
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t\t\t";
                    }
                    // line 328
                    echo "\t\t\t</dl>
\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "
\t<form action=\"";
                // line 333
                echo (isset($context["S_ALBUM_ACTION"]) ? $context["S_ALBUM_ACTION"] : null);
                echo "\" method=\"post\">
\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t<label>";
                // line 335
                echo $this->env->getExtension('phpbb')->lang("ORDER");
                echo ": <select name=\"sort_order\"><option value=\"ASC\"";
                if ((isset($context["SORT_ASC"]) ? $context["SORT_ASC"] : null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb')->lang("SORT_ASCENDING");
                echo "</option><option value=\"DESC\"";
                if ( !(isset($context["SORT_ASC"]) ? $context["SORT_ASC"] : null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb')->lang("SORT_DESCENDING");
                echo "</option></select>&nbsp;<input type=\"submit\" name=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" /></label>
\t</fieldset>
\t</form>
\t<hr />

\t";
                // line 340
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_COMMENTS"]) ? $context["TOTAL_COMMENTS"] : null))) {
                    // line 341
                    echo "\t<div class=\"topic-actions\">
\t\t<div class=\"pagination\">
\t\t\t";
                    // line 343
                    echo (isset($context["TOTAL_COMMENTS"]) ? $context["TOTAL_COMMENTS"] : null);
                    echo " &bull; 
\t\t\t";
                    // line 344
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                        // line 345
                        echo "\t\t\t\t";
                        $location = "pagination.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("pagination.html", "gallery/viewimage_body.html", 345)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 346
                        echo "\t\t\t";
                    } else {
                        // line 347
                        echo "\t\t\t\t";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "
\t\t\t";
                    }
                    // line 349
                    echo "\t\t</div>
\t</div>
\t";
                }
            }
        }
        // line 354
        echo "
<p class=\"jumpbox-return\"><a href=\"";
        // line 355
        echo (isset($context["U_RETURN_LINK"]) ? $context["U_RETURN_LINK"] : null);
        echo "\" class=\"left-box arrow-";
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo "\" accesskey=\"r\">";
        echo (isset($context["S_RETURN_LINK"]) ? $context["S_RETURN_LINK"] : null);
        echo "</a></p>
";
        // line 356
        if ((isset($context["ALBUM_JUMPBOX"]) ? $context["ALBUM_JUMPBOX"] : null)) {
            // line 357
            echo "<form method=\"post\" id=\"jumpbox\" action=\"";
            echo (isset($context["S_JUMPBOX_ACTION"]) ? $context["S_JUMPBOX_ACTION"] : null);
            echo "\" onsubmit=\"if(document.jumpbox.album_id.value == -1){return false;}\">
\t<fieldset class=\"jumpbox\">
\t\t<label for=\"album_id\" accesskey=\"album_id\">";
            // line 359
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            echo ":</label>
\t\t<select name=\"album_id\" id=\"album_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }\">
\t\t\t";
            // line 361
            echo (isset($context["ALBUM_JUMPBOX"]) ? $context["ALBUM_JUMPBOX"] : null);
            echo "
\t\t</select>
\t\t<input type=\"submit\" value=\"";
            // line 363
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t</fieldset>
</form>
";
        } else {
            // line 367
            echo "<br /><br />
";
        }
        // line 369
        echo "
";
        // line 370
        $location = "gallery/gallery_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("gallery/gallery_footer.html", "gallery/viewimage_body.html", 370)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "gallery/viewimage_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1353 => 370,  1350 => 369,  1346 => 367,  1339 => 363,  1334 => 361,  1329 => 359,  1323 => 357,  1321 => 356,  1313 => 355,  1310 => 354,  1303 => 349,  1297 => 347,  1294 => 346,  1281 => 345,  1279 => 344,  1275 => 343,  1271 => 341,  1269 => 340,  1247 => 335,  1242 => 333,  1239 => 332,  1230 => 328,  1222 => 322,  1215 => 320,  1205 => 319,  1201 => 317,  1196 => 315,  1187 => 314,  1182 => 312,  1173 => 311,  1168 => 309,  1159 => 308,  1154 => 306,  1146 => 305,  1132 => 300,  1126 => 298,  1123 => 297,  1120 => 296,  1117 => 295,  1114 => 294,  1110 => 293,  1107 => 292,  1103 => 291,  1100 => 290,  1098 => 289,  1095 => 288,  1084 => 286,  1080 => 285,  1077 => 284,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1053 => 278,  1044 => 277,  1027 => 276,  1019 => 275,  1014 => 272,  1004 => 271,  1000 => 269,  991 => 268,  977 => 266,  975 => 265,  970 => 263,  967 => 262,  958 => 261,  952 => 260,  948 => 259,  935 => 258,  931 => 256,  920 => 255,  909 => 254,  898 => 253,  888 => 252,  885 => 251,  883 => 250,  877 => 247,  865 => 246,  861 => 245,  858 => 244,  853 => 241,  847 => 239,  844 => 238,  831 => 237,  829 => 236,  825 => 235,  821 => 233,  818 => 232,  816 => 231,  805 => 227,  801 => 225,  799 => 224,  796 => 223,  794 => 222,  791 => 221,  786 => 218,  785 => 217,  778 => 213,  774 => 212,  770 => 211,  766 => 210,  762 => 208,  761 => 207,  756 => 204,  754 => 203,  751 => 202,  738 => 201,  735 => 200,  728 => 196,  725 => 195,  723 => 194,  718 => 192,  714 => 190,  713 => 189,  708 => 188,  705 => 187,  703 => 186,  699 => 184,  692 => 180,  688 => 179,  685 => 178,  678 => 177,  671 => 176,  668 => 175,  661 => 174,  654 => 173,  647 => 172,  644 => 171,  637 => 170,  631 => 169,  626 => 167,  620 => 165,  618 => 164,  608 => 156,  601 => 154,  591 => 153,  587 => 151,  582 => 149,  573 => 148,  568 => 146,  559 => 145,  554 => 143,  545 => 142,  540 => 140,  532 => 139,  518 => 134,  512 => 132,  509 => 131,  506 => 130,  503 => 129,  499 => 128,  496 => 127,  492 => 126,  489 => 125,  485 => 124,  483 => 123,  480 => 122,  469 => 120,  465 => 119,  462 => 118,  455 => 116,  452 => 115,  450 => 114,  447 => 113,  434 => 112,  425 => 111,  416 => 110,  399 => 109,  391 => 108,  386 => 105,  376 => 104,  372 => 102,  363 => 101,  349 => 99,  347 => 98,  340 => 96,  336 => 94,  331 => 93,  327 => 91,  321 => 88,  317 => 86,  311 => 84,  307 => 82,  296 => 80,  289 => 79,  285 => 78,  282 => 77,  280 => 76,  275 => 74,  269 => 72,  266 => 71,  249 => 68,  245 => 67,  242 => 66,  239 => 65,  235 => 63,  229 => 61,  227 => 60,  223 => 59,  219 => 58,  216 => 57,  214 => 56,  209 => 54,  205 => 53,  202 => 52,  196 => 49,  192 => 48,  189 => 47,  187 => 46,  182 => 44,  178 => 43,  175 => 42,  169 => 39,  165 => 38,  162 => 37,  160 => 36,  153 => 32,  150 => 31,  139 => 30,  128 => 29,  118 => 28,  109 => 27,  108 => 26,  102 => 22,  96 => 18,  85 => 17,  80 => 14,  78 => 13,  70 => 9,  61 => 8,  47 => 7,  39 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE gallery/gallery_header.html -->*/
/* <h2><a href="{S_ALBUM_ACTION}">{IMAGE_NAME}</a></h2>*/
/* */
/* <div class="post bg2<!-- IF S_IMAGE_REPORTED --> reported<!-- ENDIF -->">*/
/* 	<div class="inner"><span class="corners-top"><span></span></span>*/
/* 		<div class="postbody_album" id="image">*/
/* 			<!-- IF UC_IMAGE_ACTION --><a href="{UC_IMAGE_ACTION}"><!-- ENDIF --><img src="{UC_IMAGE}" alt="{IMAGE_NAME}" class="postimage"/><!-- IF UC_IMAGE_ACTION --></a><!-- ENDIF -->*/
/* 			<!-- IF S_IMAGE_REPORTED --><br /><br /><a href="{U_IMAGE_REPORTED}"><span class="error">{L_IMAGE_REPORTED}</span></a><!-- ENDIF -->*/
/* 			<br /><span class="image-description">{IMAGE_DESC}</span>*/
/* 		</div>*/
/* 	<span class="corners-bottom"><span></span></span></div>*/
/* </div>*/
/* <!-- IF UC_PREV_IMAGE or UC_NEXT_IMAGE -->*/
/* <div class="post bg2">*/
/* 	<div class="inner"><span class="corners-top"><span></span></span>*/
/* 		<div style="text-align: center; overflow: hidden;">*/
/* 			<!-- IF UC_PREV_IMAGE --><div class="image_prev_image">{UC_PREV_IMAGE}</div><!-- ENDIF --><!-- IF UC_NEXT_IMAGE --><div class="image_next_image">{UC_NEXT_IMAGE}</div><!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div id="details" class="panel">*/
/* 	<div class="inner"><span class="corners-top"><span></span></span>*/
/* 		<div class="postbody">*/
/* 			<ul class="post-buttons">*/
/* 				<!-- EVENT gallery_viewimage_actions -->*/
/* 				<!--<li><a href="{U_EDIT}" title="{L_EDIT_IMAGE}" class="button icon-button icon-notification"><span>{L_EDIT_IMAGE}</span></a></li>-->*/
/* 				<!-- IF U_EDIT --><li><a href="{U_EDIT}" title="{L_EDIT_IMAGE}" class="button icon-button edit-icon"><span>{L_EDIT_IMAGE}</span></a></li><!-- ENDIF -->*/
/* 				<!-- IF U_DELETE --><li><a href="{U_DELETE}" title="{L_DELETE_IMAGE}" class="button icon-button delete-icon"><span>{L_DELETE_IMAGE}</span></a></li><!-- ENDIF -->*/
/* 				<!-- IF U_REPORT --><li><a href="{U_REPORT}" title="{L_REPORT_IMAGE}" class="button icon-button report-icon"><span>{L_REPORT_IMAGE}</span></a></li><!-- ENDIF -->*/
/* 			</ul>*/
/* 			<h3>{IMAGE_NAME}</h3>*/
/* 			<hr />*/
/* */
/* 			<fieldset class="fields1 anti-postbody">*/
/* 				<!-- IF CONTEST_RANK -->*/
/* 				<dl class="column1">*/
/* 					<dt><label>{L_CONTEST_RESULT}:</label></dt>*/
/* 					<dd>{CONTEST_RANK}</dd>*/
/* 				</dl>*/
/* 				<!-- ENDIF -->*/
/* 				<dl class="column2">*/
/* 					<dt><label>{L_UPLOADED_ON_DATE}:</label></dt>*/
/* 					<dd>{IMAGE_TIME}</dd>*/
/* 				</dl>*/
/* 				<!-- IF IMAGE_URL -->*/
/* 				<dl class="column1">*/
/* 					<dt><label>{L_IMAGE_URL}:</label></dt>*/
/* 					<dd><input type="text" size="28" value="{IMAGE_URL}" class="inputbox autowidth-gallery" onclick="this.focus();this.select();" /></dd>*/
/* 				</dl>*/
/* 				<!-- ENDIF -->*/
/* 				<dl class="column2">*/
/* 					<dt><label>{L_GALLERY_VIEWS}:</label></dt>*/
/* 					<dd>{IMAGE_VIEW}</dd>*/
/* 				</dl>*/
/* 				<!-- IF IMAGE_BBCODE -->*/
/* 				<dl class="column1">*/
/* 					<dt><label>{L_IMAGE_BBCODE}:</label></dt>*/
/* 					<dd><input type="text" size="28" value="{IMAGE_BBCODE}" class="inputbox autowidth-gallery" onclick="this.focus();this.select();" /></dd>*/
/* 					<!-- IF IMAGE_IMGURL_BBCODE -->*/
/* 						<dd><input type="text" size="28" value="{IMAGE_IMGURL_BBCODE}" class="inputbox autowidth-gallery" onclick="this.focus();this.select();" /></dd>*/
/* 					<!-- ENDIF -->*/
/* 				</dl>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_VIEW_RATE -->*/
/* 				<dl class="column2">*/
/* 					<dt><label>{L_RATING}:</label></dt>*/
/* 					<dd><!-- IF CONTEST_RESULT_HIDDEN -->{CONTEST_RESULT_HIDDEN}<!-- ELSE -->{IMAGE_RATING}<!-- ENDIF --><!-- IF S_YOUR_RATING --> ({L_YOUR_RATING}: {S_YOUR_RATING})<!-- ENDIF --></dd>*/
/* 				</dl>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_ALLOWED_TO_RATE -->*/
/* 				<form id="postform" action="{S_RATE_ACTION}" method="post">*/
/* 				<dl class="column2">*/
/* 					<dt><label>{L_YOUR_RATING}:</label></dt>*/
/* 					<dd>*/
/* 						<!-- IF .rate_scale -->*/
/* 							<select name="rating" onchange="this.form.submit();">*/
/* 							<!-- BEGIN rate_scale -->*/
/* 								<!-- IF rate_scale.RATE_POINT == 1 --><option value="0">{L_DONT_RATE_IMAGE}</option><!-- ENDIF -->*/
/* 								<option value="{rate_scale.RATE_POINT}">{rate_scale.RATE_POINT}</option>*/
/* 							<!-- END rate_scale -->*/
/* 							</select>*/
/* 						<!-- ELSE -->*/
/* 							{CONTEST_RATING}*/
/* 						<!-- ENDIF -->*/
/* 					</dd>*/
/* 				</dl>*/
/* 				{S_FORM_TOKEN}*/
/* 				</form>*/
/* 				<!-- ENDIF -->*/
/* 			</fieldset>*/
/* */
/* 			<!-- EVENT gallery_viewimage_details -->*/
/* 		</div>*/
/* */
/* 		<dl class="postprofile" id="profile_poster<!-- IF S_POSTER_ONLINE --> online<!-- ENDIF -->">*/
/* 			<dt>*/
/* 				<!-- IF POSTER_AVATAR -->*/
/* 					<!-- IF U_POSTER --><a href="{U_POSTER}">{POSTER_AVATAR}</a><!-- ELSE -->{POSTER_AVATAR}<!-- ENDIF --><br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF not U_POSTER --><strong>{POSTER_FULL}</strong><!-- ELSE -->{POSTER_FULL}<!-- ENDIF -->*/
/* 			</dt>*/
/* */
/* 			<!-- IF POSTER_RANK_TITLE or POSTER_RANK_IMG --><dd>{POSTER_RANK_TITLE}<!-- IF POSTER_RANK_TITLE and POSTER_RANK_IMG --><br /><!-- ENDIF -->{POSTER_RANK_IMG}</dd><!-- ENDIF -->*/
/* */
/* 			<dd>&nbsp;</dd>*/
/* */
/* 			<!-- IF POSTER_POSTS != '' --><dd><strong>{L_POSTS}:</strong> {POSTER_POSTS}</dd><!-- ENDIF -->*/
/* 			<!-- IF POSTER_GALLERY_IMAGES != '' --><dd><strong>{L_IMAGES}:</strong> <!-- IF U_POSTER_GALLERY_SEARCH --><a href="{U_POSTER_GALLERY_SEARCH}">{POSTER_GALLERY_IMAGES}</a><!-- ELSE -->{POSTER_GALLERY_IMAGES}<!-- ENDIF --></dd><!-- ENDIF -->*/
/* 			<!-- IF POSTER_JOINED --><dd><strong>{L_JOINED}:</strong> {POSTER_JOINED}</dd><!-- ENDIF -->*/
/* 			<!-- IF POSTER_FROM --><dd><strong>{L_LOCATION}:</strong> {POSTER_FROM}</dd><!-- ENDIF -->*/
/* 			<!-- IF POSTER_IP --><dd><strong>{L_IP}:</strong> {POSTER_IP} [ <a href="{U_POSTER_WHOIS}" onclick="popup(this.href, 750, 500); return false;">{L_WHOIS}</a> ]</dd><!-- ENDIF -->*/
/* */
/* 			<!-- IF S_PROFILE_FIELD1 -->*/
/* 				<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 				<dd><strong>{PROFILE_FIELD1_NAME}:</strong> {PROFILE_FIELD1_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- BEGIN custom_fields -->*/
/* 				<dd><strong>{custom_fields.PROFILE_FIELD_NAME}:</strong> {custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- END custom_fields -->*/
/* */
/* 			<!-- IF not S_IS_BOT -->*/
/* 				<!-- DEFINE $DISPLAY_PROFILE_ICONS = false -->*/
/* 				<!-- IF U_POSTER_PM or U_POSTER_EMAIL or U_POSTER_WWW or U_POSTER_MSN or U_POSTER_ICQ -->*/
/* 					<!-- DEFINE $DISPLAY_PROFILE_ICONS = true -->*/
/* 				<!-- ELSEIF U_POSTER_YIM or U_POSTER_AIM or U_POSTER_JABBER or U_POSTER_GALLERY -->*/
/* 					<!-- DEFINE $DISPLAY_PROFILE_ICONS = true -->*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<dd class="profile-contact">*/
/* 				<strong>{L_CONTACT}{L_COLON}</strong>*/
/* 				<div class="dropdown-container dropdown-left dropdown-down">*/
/* 					<a href="#" class="dropdown-trigger dropdown-toggle"><span class="imageset icon_contact" title="{L_CONTACT} {POSTER_USERNAME}">{L_CONTACT} {POSTER_USERNAME}</span></a>*/
/* 					<div style="display: none; margin-left: -1163.97px;" class="dropdown hidden">*/
/* 						<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 						<div style="margin-left: 0px; left: 0px; max-width: 1580px;" class="dropdown-contents contact-icons dropdown-nonscroll">*/
/* 							<div>*/
/* 								<!-- IF U_POSTER_PM --><a href="{U_POSTER_PM}" title="{L_PRIVATE_MESSAGE}">*/
/* 									<span class="contact-icon pm-icon">{L_PRIVATE_MESSAGE}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_EMAIL --><a href="{U_POSTER_EMAIL}" title="{U_POSTER_EMAIL}">*/
/* 									<span class="contact-icon email-icon">{U_POSTER_EMAIL}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_JABBER --><a href="{U_POSTER_JABBER}" title="{L_JABBER}" onclick="popup(this.href, 750, 320); return false;">*/
/* 									<span class="contact-icon jabber-icon">{L_JABBER}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_ICQ --><a href="{U_POSTER_ICQ}" title="{L_ICQ}" class="last-cell">*/
/* 									<span class="contact-icon phpbb_icq-icon">{L_ICQ}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 							</div>*/
/* 						<div>*/
/* 							<!-- IF U_POSTER_WWW --><a href="{U_POSTER_WWW}" title="{L_VISIT_WEBSITE}: {U_WWW}">*/
/* 								<span class="contact-icon phpbb_website-icon">{L_VISIT_WEBSITE}: {U_WWW}</span>*/
/* 							</a><!-- ENDIF -->*/
/* 						</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</dd>*/
/* */
/* 		</dl>*/
/* 	<span class="corners-bottom"><span></span></span></div>*/
/* 	<!-- IF S_QUICK_MOD -->*/
/* 	<form method="post" action="{S_MOD_ACTION}">*/
/* 	<fieldset class="quickmod" style="float: none; width: 100%;">*/
/* 		<label for="quick-mod-select">{L_QUICK_MOD}:</label>*/
/* 		<select name="action" id="quick-mod-select">*/
/* 			<!-- IF S_QM_MOVE --><option value="images_move">{L_QUEUE_A_MOVE}</option><!-- ENDIF -->*/
/* 			<!-- IF S_QM_EDIT --><option value="image_edit">{L_EDIT_IMAGE}</option><!-- ENDIF -->*/
/* 			<!-- IF S_QM_STATUS -->*/
/* 				<!-- IF not S_STATUS_UNAPPROVED --><option value="images_unapprove">{L_QUEUE_A_UNAPPROVE}</option><!-- ENDIF -->*/
/* 				<!-- IF not S_STATUS_APPROVED --><option value="images_approve">{L_QUEUE_A_APPROVE}</option><!-- ENDIF -->*/
/* 				<!-- IF not S_STATUS_LOCKED --><option value="images_lock">{L_QUEUE_A_LOCK}</option><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_QM_DELETE --><option value="images_delete">{L_QUEUE_A_DELETE}</option><!-- ENDIF -->*/
/* 			<!-- IF S_QM_REPORT and S_IMAGE_REPORTED --><option value="report_details">{L_READ_REPORT}</option><!-- ENDIF -->*/
/* 		</select>*/
/* 		<input type="submit" value="{L_GO}" class="button2" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- IF not S_IS_BOT and S_ALLOWED_TO_COMMENT -->*/
/* 	<!-- IF S_ALLOWED_TO_COMMENT and not S_HIDE_COMMENT_INPUT -->*/
/* 		<form method="post" action="{S_COMMENT_ACTION}" id="postform">*/
/* 		<!-- EVENT quickreply_editor_panel_before -->*/
/* 			<div class="panel">*/
/* 				<div class="inner">*/
/* 						<h2 class="quickreply-title">{L_POST_COMMENT}</h2>*/
/* 						<fieldset class="fields1">*/
/* 						<!-- IF not S_USER_LOGGED_IN -->*/
/* 							<dl>*/
/* 								<dt><label>{L_USERNAME}:</label></dt>*/
/* 								<dd><input class="inputbox autowidth" type="text" name="username" maxlength="32" /></dd>*/
/* 							</dl>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF CAPTCHA_TEMPLATE -->*/
/* 							<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 						<!-- ENDIF -->*/
/* 						<!-- EVENT quickreply_editor_message_before -->*/
/* 						<div id="message-box">*/
/* 							<textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3" class="inputbox" name="message" id="message"></textarea>*/
/* 						</div>*/
/* 						<!-- EVENT quickreply_editor_message_after -->*/
/* 						</fieldset>*/
/* 						<fieldset class="submit-buttons">*/
/* 							{S_FORM_TOKEN}*/
/* 							{QR_HIDDEN_FIELDS}*/
/* 							<input type="submit" accesskey="f" tabindex="6" name="preview" value="{L_FULL_EDITOR}" class="button2" id="qr_full_editor" />&nbsp;*/
/* 							<input type="submit" accesskey="s" tabindex="7" name="submit" value="{L_SUBMIT}" class="button1"/>&nbsp;*/
/* 						</fieldset>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- EVENT quickreply_editor_panel_after -->*/
/* 		</form>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_ALLOWED_READ_COMMENTS -->*/
/* <a name="comments"></a>*/
/* <!-- IF not .commentrow or S_COMMENTS_DISABLED -->*/
/* 	<div id="comments" class="panel">*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* 			<strong><!-- IF S_COMMENTS_DISABLED -->{L_IMAGE_COMMENTS_DISABLED}<!-- ELSE -->{L_NO_COMMENTS}<!-- ENDIF --></strong>*/
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- IF .commentrow -->*/
/* 	<!-- IF .pagination or TOTAL_COMMENTS -->*/
/* 	<div class="topic-actions">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_COMMENTS} &bull; */
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				{PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <br><br>*/
/* 	<!-- BEGIN commentrow -->*/
/* 	<div class="post <!-- IF commentrow.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF commentrow.S_ONLINE --> online<!-- ENDIF -->">*/
/* 	<a id="comment_{commentrow.COMMENT_ID}"></a>*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* 			<div class="postbody">*/
/* 				<!-- IF commentrow.U_DELETE or commentrow.U_EDIT or commentrow.U_INFO or commentrow.U_QUOTE -->*/
/* 					<ul class="post-buttons">*/
/* 						<!-- IF commentrow.U_EDIT --><li><a href="{commentrow.U_EDIT}" title="{L_EDIT_COMMENT}" class="button icon-button edit-icon"><span>{L_EDIT_COMMENT}</span></a></li><!-- ENDIF -->*/
/* 						<!-- IF commentrow.U_DELETE --><li><a href="{commentrow.U_DELETE}" title="{L_DELETE_COMMENT}" class="button icon-button delete-icon"><span>{L_DELETE_COMMENT}</span></a></li><!-- ENDIF -->*/
/* 						<!-- IF commentrow.U_INFO --><li><a href="{commentrow.U_INFO}" title="{L_IP}" onclick="popup(this.href, 750, 500); return false;" class="button icon-button info-icon"><span>{L_IP}</span></a></li><!-- ENDIF -->*/
/* 						<!-- IF commentrow.U_QUOTE --><li><a href="{commentrow.U_QUOTE}" title="{L_QUOTE_COMMENT}" class="button icon-button quote-icon"><span>{L_QUOTE_COMMENT}</span></a></li><!-- ENDIF -->*/
/* 					</ul>*/
/* 				<!-- ENDIF -->*/
/* 				<p class="author"><a href="{commentrow.U_COMMENT}">{MINI_POST_IMG}</a>&nbsp;{L_POST_BY_AUTHOR} <strong>{commentrow.POST_AUTHOR_FULL}</strong> &raquo; {commentrow.TIME} </p>*/
/* 				<div class="content">{commentrow.TEXT}</div>*/
/* 				<!-- IF commentrow.EDIT_INFO --><div class="notice">{commentrow.EDIT_INFO}</div><!-- ENDIF -->*/
/* 				<!-- IF commentrow.SIGNATURE --><div id="sig{commentrow.COMMENT_ID}" class="signature">{commentrow.SIGNATURE}</div><!-- ENDIF -->*/
/* 			</div>*/
/* 			<dl class="postprofile" id="profile{commentrow.COMMENT_ID}">*/
/* 				<dt>*/
/* 					<!-- IF commentrow.POSTER_AVATAR -->*/
/* 						<!-- IF commentrow.U_POST_AUTHOR --><a href="{commentrow.U_POST_AUTHOR}">{commentrow.POSTER_AVATAR}</a><!-- ELSE -->{commentrow.POSTER_AVATAR}<!-- ENDIF --><br />*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF not commentrow.U_POST_AUTHOR --><strong>{commentrow.POST_AUTHOR_FULL}</strong><!-- ELSE -->{commentrow.POST_AUTHOR_FULL}<!-- ENDIF -->*/
/* 				</dt>*/
/* */
/* 				<!-- IF commentrow.RANK_TITLE or commentrow.RANK_IMG --><dd>{commentrow.RANK_TITLE}<!-- IF commentrow.RANK_TITLE and commentrow.RANK_IMG --><br /><!-- ENDIF -->{commentrow.RANK_IMG}</dd><!-- ENDIF -->*/
/* */
/* 				<dd>&nbsp;</dd>*/
/* */
/* 				<!-- IF commentrow.POSTER_POSTS != '' --><dd><strong>{L_POSTS}:</strong> {commentrow.POSTER_POSTS}</dd><!-- ENDIF -->*/
/* 				<!-- IF commentrow.GALLERY_IMAGES != '' --><dd><strong>{L_IMAGES}:</strong> <!-- IF commentrow.U_GALLERY_SEARCH --><a href="{commentrow.U_GALLERY_SEARCH}">{commentrow.GALLERY_IMAGES}</a><!-- ELSE -->{commentrow.GALLERY_IMAGES}<!-- ENDIF --></dd><!-- ENDIF -->*/
/* 				<!-- IF commentrow.POSTER_JOINED --><dd><strong>{L_JOINED}:</strong> {commentrow.POSTER_JOINED}</dd><!-- ENDIF -->*/
/* 				<!-- IF commentrow.POSTER_FROM --><dd><strong>{L_LOCATION}:</strong> {commentrow.POSTER_FROM}</dd><!-- ENDIF -->*/
/* */
/* 				<!-- IF commentrow.S_PROFILE_FIELD1 -->*/
/* 					<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 					<dd><strong>{commentrow.PROFILE_FIELD1_NAME}:</strong> {commentrow.PROFILE_FIELD1_VALUE}</dd>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- BEGIN custom_fields -->*/
/* 					<dd><strong>{commentrow.custom_fields.PROFILE_FIELD_NAME}:</strong> {commentrow.custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 				<!-- END custom_fields -->*/
/* */
/* 				<!-- IF not S_IS_BOT -->*/
/* 					<!-- IF commentrow.U_PM or commentrow.U_EMAIL or commentrow.U_WWW or commentrow.U_MSN or commentrow.U_ICQ -->*/
/* 						<!-- DEFINE $DISPLAY_PROFILE_ICONS = true -->*/
/* 					<!-- ELSEIF commentrow.U_YIM or commentrow.U_AIM or commentrow.U_JABBER or commentrow.U_GALLERY -->*/
/* 						<!-- DEFINE $DISPLAY_PROFILE_ICONS = true -->*/
/* 					<!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF $DISPLAY_PROFILE_ICONS -->*/
/* 					<dd class="profile-contact">*/
/* 				<strong>{L_CONTACT}{L_COLON}</strong>*/
/* 				<div class="dropdown-container dropdown-left dropdown-down">*/
/* 					<a href="#" class="dropdown-trigger dropdown-toggle"><span class="imageset icon_contact" title="{L_CONTACT} {POSTER_USERNAME}">{L_CONTACT} {POSTER_USERNAME}</a>*/
/* 					<div style="display: none; margin-left: -1163.97px;" class="dropdown hidden">*/
/* 						<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 						<div style="margin-left: 0px; left: 0px; max-width: 1580px;" class="dropdown-contents contact-icons dropdown-nonscroll">*/
/* 							<div>*/
/* 								<!-- IF U_POSTER_PM --><a href="{U_POSTER_PM}" title="{L_PRIVATE_MESSAGE}">*/
/* 									<span class="contact-icon pm-icon">{L_PRIVATE_MESSAGE}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_EMAIL --><a href="{U_POSTER_EMAIL}" title="{U_POSTER_EMAIL}">*/
/* 									<span class="contact-icon email-icon">{U_POSTER_EMAIL}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_JABBER --><a href="{U_POSTER_JABBER}" title="{L_JABBER}" onclick="popup(this.href, 750, 320); return false;">*/
/* 									<span class="contact-icon jabber-icon">{L_JABBER}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 								<!-- IF U_POSTER_ICQ --><a href="{U_POSTER_ICQ}" title="{L_ICQ}" class="last-cell">*/
/* 									<span class="contact-icon phpbb_icq-icon">{L_ICQ}</span>*/
/* 								</a><!-- ENDIF -->*/
/* 							</div>*/
/* 						<div>*/
/* 							<!-- IF U_POSTER_WWW --><a href="{U_POSTER_WWW}" title="{L_VISIT_WEBSITE}: {U_WWW}">*/
/* 								<span class="contact-icon phpbb_website-icon">{L_VISIT_WEBSITE}: {U_WWW}</span>*/
/* 							</a><!-- ENDIF -->*/
/* 						</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</dd>*/
/* 				<!-- ENDIF -->*/
/* 			</dl>*/
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* 	<!-- END commentrow -->*/
/* */
/* 	<form action="{S_ALBUM_ACTION}" method="post">*/
/* 	<fieldset class="display-options" style="margin-top: 0; ">*/
/* 		<label>{L_ORDER}: <select name="sort_order"><option value="ASC"<!-- IF SORT_ASC --> selected="selected"<!-- ENDIF -->>{L_SORT_ASCENDING}</option><option value="DESC"<!-- IF not SORT_ASC --> selected="selected"<!-- ENDIF -->>{L_SORT_DESCENDING}</option></select>&nbsp;<input type="submit" name="submit" value="{L_GO}" class="button2" /></label>*/
/* 	</fieldset>*/
/* 	</form>*/
/* 	<hr />*/
/* */
/* 	<!-- IF .pagination or TOTAL_COMMENTS -->*/
/* 	<div class="topic-actions">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_COMMENTS} &bull; */
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				{PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <p class="jumpbox-return"><a href="{U_RETURN_LINK}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" accesskey="r">{S_RETURN_LINK}</a></p>*/
/* <!-- IF ALBUM_JUMPBOX -->*/
/* <form method="post" id="jumpbox" action="{S_JUMPBOX_ACTION}" onsubmit="if(document.jumpbox.album_id.value == -1){return false;}">*/
/* 	<fieldset class="jumpbox">*/
/* 		<label for="album_id" accesskey="album_id">{L_JUMP_TO}:</label>*/
/* 		<select name="album_id" id="album_id" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">*/
/* 			{ALBUM_JUMPBOX}*/
/* 		</select>*/
/* 		<input type="submit" value="{L_GO}" class="button2" />*/
/* 	</fieldset>*/
/* </form>*/
/* <!-- ELSE -->*/
/* <br /><br />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE gallery/gallery_footer.html -->*/
/* */
