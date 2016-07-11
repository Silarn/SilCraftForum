<?php

/* @phpbbgallery_core/event/overall_footer_after.html */
class __TwigTemplate_950ec495e38911fe1ceb2036c8c7095ea83f3b287ab2d25f57d65326fe35ab91 extends Twig_Template
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
        if ((isset($context["S_GALLERY_QUICK_UPLOAD"]) ? $context["S_GALLERY_QUICK_UPLOAD"] : null)) {
            // line 2
            echo "<script>
(function(\$) {  // Avoid conflicts with other libraries
\t\"use strict\"
\t\$(function () {
\t\tvar fileNumber = 0;
\t\t\$('#covverall').fileupload({
\t\t\treplaceFileInput: false,
\t\t\turl: \"";
            // line 9
            echo (isset($context["S_ALBUM_ACTION"]) ? $context["S_ALBUM_ACTION"] : null);
            echo "\",
\t\t\tdropZone: \$('#covverall'),
\t\t\t//acceptFileTypes: '";
            // line 11
            echo (isset($context["S_QUICK_FILE_TYPES"]) ? $context["S_QUICK_FILE_TYPES"] : null);
            echo "', // User side filetype test does not work!
\t\t\tmaxFileSize: '";
            // line 12
            echo (isset($context["S_QUICK_MAX_FILESIZE"]) ? $context["S_QUICK_MAX_FILESIZE"] : null);
            echo "', // And it appears that user side size is ignored too.
\t\t\tdataType: 'json',
\t\t\tparamName: 'files[]',
\t\t\tuploadTemplateId: null,
\t\t\tdownloadTemplateId: null,
\t\t\tuploadTemplate: function (o) {
\t\t\t\tvar rows = \$();
\t\t\t\t\$.each(o.files, function (index, file) {
\t\t\t\t\tvar row = \$('<tr class=\"template-upload fade\">' +
\t\t\t\t\t\t'<td><span class=\"preview\"></span></td>' +
\t\t\t\t\t\t'<td><p class=\"name\"></p>' +
\t\t\t\t\t\t'<div class=\"error\"></div>' +
\t\t\t\t\t\t'</td>' +
\t\t\t\t\t\t'<td><p class=\"size\"></p>' +
\t\t\t\t\t\t'<div class=\"progress\"></div>' +
\t\t\t\t\t\t'</td>' +
\t\t\t\t\t\t'<td>' +
\t\t\t\t\t\t(!index && !o.options.autoUpload ?
\t\t\t\t\t\t\t'<button class=\"start\" disabled>Start</button>' : '') +
\t\t\t\t\t\t(!index ? '<button class=\"cancel\">Cancel</button>' : '') +
\t\t\t\t\t\t'</td>' +
\t\t\t\t\t\t'</tr>');
\t\t\t\t\trow.find('.name').text(file.name);
\t\t\t\t\trow.find('.size').text(o.formatFileSize(file.size));
\t\t\t\t\tif (file.error) {
\t\t\t\t\t\trow.find('.error').text(file.error);
\t\t\t\t\t}
\t\t\t\t\trows = rows.add(row);
\t\t\t\t});
\t\t\t\treturn rows;
\t\t\t},
\t\t\tdownloadTemplate: function (o) {
\t\t\t\tvar rows = \$();
\t\t\t\t\$.each(o.files, function (index, file) {
\t\t\t\t\tvar row = \$('<div class=\"uploadImage\">' +
\t\t\t\t\t\t\t'<div class=\"preview\"></div>' +
\t\t\t\t\t\t\t'<div class=\"info\">' +
\t\t\t\t\t\t\t\t(!file.error ? '<label>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("IMAGE_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"name\"></span>' : '') + 
\t\t\t\t\t\t\t(file.error ? '<div class=\"error\"></div>' : '') +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t\t'</div>'
\t\t\t\t\t);
\t\t\t\t\trow.find('.size').text(o.formatFileSize(file.size));
\t\t\t\t\tif (file.error) {
\t\t\t\t\t\trow.find('.name').text(file.name);
\t\t\t\t\t\trow.find('.error').html(file.error);
\t\t\t\t\t} else {
\t\t\t\t\t\trow.find('.name').append(\$('<a></a>').text(file.name));
\t\t\t\t\t\tif (file.thumbnail) {
\t\t\t\t\t\t\trow.find('.preview').append(
\t\t\t\t\t\t\t\t\$('<a></a>').append(
\t\t\t\t\t\t\t\t\t\$('<img>').prop('src', file.thumbnail)
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\trow.find('a')
\t\t\t\t\t\t\t.attr('data-gallery', '')
\t\t\t\t\t\t\t.prop('href', file.url);
\t\t\t\t\t\trow.find('button.delete')
\t\t\t\t\t\t\t.attr('data-type', file.delete_type)
\t\t\t\t\t\t\t.attr('data-url', file.delete_url);
\t\t\t\t\t}
\t\t\t\t\trows = rows.add(row);
\t\t\t\t});
\t\t\t\treturn rows;
\t\t\t}
\t\t});
\t\t\$('#covverall').bind('fileuploadadd', function (e, data) {
\t\t\t//var build = '<div>Uploading ' + data.files[0].name + '</div>';
\t\t\tvar build = '<div class=\"uploadImage\">' +
\t\t\t\t\t\t\t'<div class=\"preview\"><img src=\"#\"></div>' +
\t\t\t\t\t\t\t'<div class=\"info\">' +
\t\t\t\t\t\t\t\t'<label>";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("IMAGE_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label> <span class=\"name\">'+data.files[0].name+'</span>' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t\t'</div>';
\t\t\tdata.context = \$(build).appendTo('#outputTarget .inner .containUploads');
            data.submit();
\t\t\tfileNumber++;
\t\t});
\t\t\$('#covverall').bind('fileuploadstart', function (e, data) {
\t\t\t//console.log(data);
\t\t\t\$('#outputTarget').removeClass('hidden');
\t\t});
\t\t\$('#covverall').bind('fileuploaddone', function (e, data) {
\t\t\t//console.log(data);
\t\t});
\t\t\$('#covverall').bind('fileuploadfail', function (e, data) {
\t\t\tconsole.log('Fail!');
\t\t\t\$('#outputTarget .inner .meter span p').text('";
            // line 100
            echo $this->env->getExtension('phpbb')->lang("ERROR");
            echo "');
\t\t});
\t\t\$('#covverall').bind('fileuploadprogressall', function (e, data) {
\t\t\tconsole.log(data);
\t\t\tvar progress = parseInt(data.loaded / data.total * 100, 10);
\t\t\tvar percent = progress + '%'
\t\t\t\$('#outputTarget .inner .meter span').css('width', percent);
\t\t\t\$('#outputTarget .inner .meter span p').text(percent);
\t\t});
\t\t\$(document).bind('dragover', function (e) {
\t\t\tvar dropZone = \$('#covverall'),
\t\t\t\ttimeout = window.dropZoneTimeout;
\t\t\tif (!timeout) {
\t\t\t\tdropZone.addClass('in');
\t\t\t} else {
\t\t\t\tclearTimeout(timeout);
\t\t\t}
\t\t\tvar found = false,
\t\t\t\tnode = e.target;
\t\t\tdo {
\t\t\t\tif (node === dropZone[0]) {
\t\t\t\t\tfound = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tnode = node.parentNode;
\t\t\t} while (node != null);
\t\t\tif (found) {
\t\t\t\tdropZone.addClass('hover');
\t\t\t} else {
\t\t\t\tdropZone.removeClass('hover');
\t\t\t}
\t\t\twindow.dropZoneTimeout = setTimeout(function () {
\t\t\t\twindow.dropZoneTimeout = null;
\t\t\t\tdropZone.removeClass('in hover');
\t\t\t}, 100);
\t\t});
\t});
})(jQuery); // Avoid conflicts with other libraries
</script>
";
            // line 139
            $asset_file = "@phpbbgallery_core/js/load-image.all.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 140
            $asset_file = "@phpbbgallery_core/js/jquery.ui.widget.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 141
            $asset_file = "@phpbbgallery_core/js/jquery.iframe-transport.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 142
            $asset_file = "@phpbbgallery_core/js/jquery.fileupload.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 143
            $asset_file = "@phpbbgallery_core/js/jquery.fileupload-process.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 144
            $asset_file = "@phpbbgallery_core/js/jquery.fileupload-image.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 145
            $asset_file = "@phpbbgallery_core/js/jquery.fileupload-validate.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 146
            $asset_file = "@phpbbgallery_core/js/jquery.fileupload-ui.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('43');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
    }

    public function getTemplateName()
    {
        return "@phpbbgallery_core/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 146,  270 => 145,  255 => 144,  240 => 143,  225 => 142,  210 => 141,  195 => 140,  180 => 139,  138 => 100,  118 => 84,  79 => 49,  39 => 12,  35 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_GALLERY_QUICK_UPLOAD -->*/
/* <script>*/
/* (function($) {  // Avoid conflicts with other libraries*/
/* 	"use strict"*/
/* 	$(function () {*/
/* 		var fileNumber = 0;*/
/* 		$('#covverall').fileupload({*/
/* 			replaceFileInput: false,*/
/* 			url: "{S_ALBUM_ACTION}",*/
/* 			dropZone: $('#covverall'),*/
/* 			//acceptFileTypes: '{S_QUICK_FILE_TYPES}', // User side filetype test does not work!*/
/* 			maxFileSize: '{S_QUICK_MAX_FILESIZE}', // And it appears that user side size is ignored too.*/
/* 			dataType: 'json',*/
/* 			paramName: 'files[]',*/
/* 			uploadTemplateId: null,*/
/* 			downloadTemplateId: null,*/
/* 			uploadTemplate: function (o) {*/
/* 				var rows = $();*/
/* 				$.each(o.files, function (index, file) {*/
/* 					var row = $('<tr class="template-upload fade">' +*/
/* 						'<td><span class="preview"></span></td>' +*/
/* 						'<td><p class="name"></p>' +*/
/* 						'<div class="error"></div>' +*/
/* 						'</td>' +*/
/* 						'<td><p class="size"></p>' +*/
/* 						'<div class="progress"></div>' +*/
/* 						'</td>' +*/
/* 						'<td>' +*/
/* 						(!index && !o.options.autoUpload ?*/
/* 							'<button class="start" disabled>Start</button>' : '') +*/
/* 						(!index ? '<button class="cancel">Cancel</button>' : '') +*/
/* 						'</td>' +*/
/* 						'</tr>');*/
/* 					row.find('.name').text(file.name);*/
/* 					row.find('.size').text(o.formatFileSize(file.size));*/
/* 					if (file.error) {*/
/* 						row.find('.error').text(file.error);*/
/* 					}*/
/* 					rows = rows.add(row);*/
/* 				});*/
/* 				return rows;*/
/* 			},*/
/* 			downloadTemplate: function (o) {*/
/* 				var rows = $();*/
/* 				$.each(o.files, function (index, file) {*/
/* 					var row = $('<div class="uploadImage">' +*/
/* 							'<div class="preview"></div>' +*/
/* 							'<div class="info">' +*/
/* 								(!file.error ? '<label>{L_IMAGE_NAME}{L_COLON}</label><span class="name"></span>' : '') + */
/* 							(file.error ? '<div class="error"></div>' : '') +*/
/* 							'</div>' +*/
/* 							'</div>'*/
/* 					);*/
/* 					row.find('.size').text(o.formatFileSize(file.size));*/
/* 					if (file.error) {*/
/* 						row.find('.name').text(file.name);*/
/* 						row.find('.error').html(file.error);*/
/* 					} else {*/
/* 						row.find('.name').append($('<a></a>').text(file.name));*/
/* 						if (file.thumbnail) {*/
/* 							row.find('.preview').append(*/
/* 								$('<a></a>').append(*/
/* 									$('<img>').prop('src', file.thumbnail)*/
/* 								)*/
/* 							);*/
/* 						}*/
/* 						row.find('a')*/
/* 							.attr('data-gallery', '')*/
/* 							.prop('href', file.url);*/
/* 						row.find('button.delete')*/
/* 							.attr('data-type', file.delete_type)*/
/* 							.attr('data-url', file.delete_url);*/
/* 					}*/
/* 					rows = rows.add(row);*/
/* 				});*/
/* 				return rows;*/
/* 			}*/
/* 		});*/
/* 		$('#covverall').bind('fileuploadadd', function (e, data) {*/
/* 			//var build = '<div>Uploading ' + data.files[0].name + '</div>';*/
/* 			var build = '<div class="uploadImage">' +*/
/* 							'<div class="preview"><img src="#"></div>' +*/
/* 							'<div class="info">' +*/
/* 								'<label>{L_IMAGE_NAME}{L_COLON}</label> <span class="name">'+data.files[0].name+'</span>' +*/
/* 							'</div>' +*/
/* 							'</div>';*/
/* 			data.context = $(build).appendTo('#outputTarget .inner .containUploads');*/
/*             data.submit();*/
/* 			fileNumber++;*/
/* 		});*/
/* 		$('#covverall').bind('fileuploadstart', function (e, data) {*/
/* 			//console.log(data);*/
/* 			$('#outputTarget').removeClass('hidden');*/
/* 		});*/
/* 		$('#covverall').bind('fileuploaddone', function (e, data) {*/
/* 			//console.log(data);*/
/* 		});*/
/* 		$('#covverall').bind('fileuploadfail', function (e, data) {*/
/* 			console.log('Fail!');*/
/* 			$('#outputTarget .inner .meter span p').text('{L_ERROR}');*/
/* 		});*/
/* 		$('#covverall').bind('fileuploadprogressall', function (e, data) {*/
/* 			console.log(data);*/
/* 			var progress = parseInt(data.loaded / data.total * 100, 10);*/
/* 			var percent = progress + '%'*/
/* 			$('#outputTarget .inner .meter span').css('width', percent);*/
/* 			$('#outputTarget .inner .meter span p').text(percent);*/
/* 		});*/
/* 		$(document).bind('dragover', function (e) {*/
/* 			var dropZone = $('#covverall'),*/
/* 				timeout = window.dropZoneTimeout;*/
/* 			if (!timeout) {*/
/* 				dropZone.addClass('in');*/
/* 			} else {*/
/* 				clearTimeout(timeout);*/
/* 			}*/
/* 			var found = false,*/
/* 				node = e.target;*/
/* 			do {*/
/* 				if (node === dropZone[0]) {*/
/* 					found = true;*/
/* 					break;*/
/* 				}*/
/* 				node = node.parentNode;*/
/* 			} while (node != null);*/
/* 			if (found) {*/
/* 				dropZone.addClass('hover');*/
/* 			} else {*/
/* 				dropZone.removeClass('hover');*/
/* 			}*/
/* 			window.dropZoneTimeout = setTimeout(function () {*/
/* 				window.dropZoneTimeout = null;*/
/* 				dropZone.removeClass('in hover');*/
/* 			}, 100);*/
/* 		});*/
/* 	});*/
/* })(jQuery); // Avoid conflicts with other libraries*/
/* </script>*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/load-image.all.min.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.ui.widget.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.iframe-transport.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.fileupload.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.fileupload-process.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.fileupload-image.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.fileupload-validate.js -->*/
/* <!-- INCLUDEJS @phpbbgallery_core/js/jquery.fileupload-ui.js -->*/
/* <!-- ENDIF -->*/
