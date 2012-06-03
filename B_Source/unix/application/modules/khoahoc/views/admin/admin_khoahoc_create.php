<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>/assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script>
	$(function() {
		$( "#batdau" ).datepicker();
		$( "#ketthuc" ).datepicker();
	});
	$
</script>

<script type="text/javascript" src="<?php echo base_url();?>/assets/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/tinymce/jscripts/tiny_mce/themes/advanced/skins/default/ui.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/tinymce/jscripts/tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css">
<?php
echo form_open('khoahoc/admin/create');
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'(*)Bắt đầu (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'batdau','id'=>'batdau','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ketthuc'>".'(*)Kết thúc (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ketthuc','id'=>'ketthuc','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='hocphi'>".'(*)Học phí:'."</label></td>\n";
$data = array('name'=>'hocphi','id'=>'hocphi','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh Đại Diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>";
?>
<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
    <?php print $this->bep_assets->icon('disk');?>
    <?php print $this->lang->line('general_save');?>
    </button>

    <a href="<?php print site_url($cancel_link);?>" class="negative">
    <?php print $this->bep_assets->icon('cross');?>
    <?php print $this->lang->line('general_cancel');?>
    </a>
</div>
<?php
echo form_close();
?>