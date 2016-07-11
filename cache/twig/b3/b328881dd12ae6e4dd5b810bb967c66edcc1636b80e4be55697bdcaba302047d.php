<?php

/* @phpbbgallery_exif/event/gallery_viewimage_details.html */
class __TwigTemplate_e98d95ce277da94237d25da22dfb8231144a48dbfd2b291696694f760e8971fc extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "exif_value", array()))) {
            // line 2
            echo "\t<h3 class=\"anti-postbody\">";
            echo $this->env->getExtension('phpbb')->lang("EXIF_DATA");
            echo "</h3>
\t<br /> <hr />
\t<fieldset class=\"fields1 anti-postbody\" id=\"exif_data_fieldset\">
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "exif_value", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["exif_value"]) {
                // line 6
                echo "\t\t<dl class=\"";
                if (($this->getAttribute($context["exif_value"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "column1";
                } else {
                    echo "column2";
                }
                echo "\">
\t\t\t<dt><label>";
                // line 7
                echo $this->getAttribute($context["exif_value"], "EXIF_NAME", array());
                echo ":</label></dt>
\t\t\t<dd>";
                // line 8
                echo $this->getAttribute($context["exif_value"], "EXIF_VALUE", array());
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exif_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t</fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_exif/event/gallery_viewimage_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  45 => 8,  41 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF .exif_value -->*/
/* 	<h3 class="anti-postbody">{L_EXIF_DATA}</h3>*/
/* 	<br /> <hr />*/
/* 	<fieldset class="fields1 anti-postbody" id="exif_data_fieldset">*/
/* 	<!-- BEGIN exif_value -->*/
/* 		<dl class="<!-- IF exif_value.S_ROW_COUNT is even -->column1<!-- ELSE -->column2<!-- ENDIF -->">*/
/* 			<dt><label>{exif_value.EXIF_NAME}:</label></dt>*/
/* 			<dd>{exif_value.EXIF_VALUE}</dd>*/
/* 		</dl>*/
/* 	<!-- END exif_value -->*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
