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

<div id="page_title"><h1>Add Pages</h1></div> 
<form name="pages" id="pages" action="<?php echo base_url()?>index.php/is_pages/admin/create" 
		method="post" onsubmit="return CheckForm();">
  	<fieldset> 
			Add your pages by filling out the form below.
			<label id="lbl_error" class="ErrorMessage"></label>
			<label id="title_label"><span>Title<i> (required)</i>:</span>
			<br>
			<input type="text" align="left" size="100%" name="title" id="title" value="">
			</label>
			<label id="content_label"><span>Content:</span>
            <?php 
            $data = array('name'=>'content','id'=>'content','rows'=>'16', 'cols'=>'100%', 'value' => '');
			echo form_textarea($data);
 			?>
			</label>
			<center><input type="submit" class="btn" name="Submit" value="    Add    "></center>
	</fieldset>			
</form>
</div>		  
