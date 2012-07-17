<?php
  class editor_library{
      function __construct(){
          $this->CI = get_instance();
      }
      function editor ($name,$value,$error)
      {
      	$data = '<script type="text/javascript" src="'.base_url().'assets/js/jscripts/tiny_mce/tiny_mce.js"></script>';
		$data.= '<script type="text/javascript">';
      	$data .='
      	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "'.$name.'",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "'.base_url().'assets/js/lists/template_list.js",
		external_link_list_url : "'.base_url().'assets/js/lists/link_list.js",
		external_image_list_url : "'.base_url().'assets/js/lists/image_list.js",
		media_external_list_url : "'.base_url().'assets/js/lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});';
	$data .= '</script>';
	$data .='<textarea id="'.$name.'" name="'.$name.'" rows="30" cols="100" style="width: 100%">'.$value.'</textarea>'.$error;
	return $data;
      }
  }
?>
