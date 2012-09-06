<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
        var temp = tinymce.EditorManager.get('noidung').getContent();
        var i = 0;
        while (true)
        {
            temp = temp.replace('style="color: ',"@$%#@");
            temp = temp.replace('style="background-color: ',"&$%#@"); 
			i = i + 1;
			if (i == 10000) break;
        }
        document.getElementById("noidung_backup").value = temp;
        return true;
    }
</script>

<form action="<?php echo base_url()?>index.php/danhmuc/admin/addChuyenMuc" method="post" onsubmit="return CheckForm();">
<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label>".'(*)'.' Tên chuyên mục:'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*) Nội dung chuyên mục:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'noidung','rows'=>'17', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";
?>
	<tr>
		<td>
			<label>Chọn danh mục : </label>
		</td>
		<td>
			<select name="danhmuc" class="text">
				<?php 
					foreach($danhmuc as $dm)
					{
						?>
							<option value="<?php echo $dm->ten; ?>"><?php echo $dm->ten; ?></option>
						<?php
					}
				?>
			</select>
		</td>
	</tr>
<?php

echo "</table>";
?>
<input type="hidden" name="noidung_backup" id="noidung_backup"/>
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
</form>