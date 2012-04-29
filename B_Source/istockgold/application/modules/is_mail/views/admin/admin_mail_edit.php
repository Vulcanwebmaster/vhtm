<div id="main">
<script language="JavaScript" type="text/javascript">
            function check_title(V1) {
                p1 = document.getElementById(V1).value;
                if (p1 == "" || p1 == null) {
                    return false;
                } else {
                    return true;
                }
            }

            function CheckForm() {
                setLabelText("lbl_error", " ");
                if (check_title("title") == false) 
                {
                	setLabelText("lbl_error", "Title can not be null !!!");
                	return false;
                }
                return true;
            }
</script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/tiny_mce.js"></script>
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

<div id="page_title"><h1>Update News</h1></div> 
<form name="pages" id="pages" action="<?php echo base_url()?>index.php/is_mail/admin/edit/<?php echo $news['id'];?>" 
		method="post" onsubmit="return CheckForm();">
			Update your mail by filling out the form below.
			<br>
			<label id="lbl_error" class="ErrorMessage"></label>
			<br>
			<label id="title_label"><span>Title<i> (required)</i>:</span>
			<br>
			<input type="text" align="left" size="124%" name="title" id="title" value="<?php echo $news['title'];?>">
			<br>
			</label>
			<label id="content_label"><span>Content:</span>
			<br>
 			<textarea id="content" name="content" rows="20" cols="80" style="width: 60%">
			<?php echo $news['content']?>
			</textarea>
			</label>
			<input type="submit" class="btn" name="Submit" value="  Update  ">
</form>
</div>		  
