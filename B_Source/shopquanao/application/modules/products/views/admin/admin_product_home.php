<?php
/*
* application/moudles/products/views/admin/admin_product_home.php
*
*
*/

?>
<h2><?php echo $title;?></h2>
<div class="buttons">
	<a href="<?php print  site_url('products/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print 'Tạo sản phẩm mới'; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<div align="left">
<form name = "formkho" method="post" action="<?php echo base_url()?>index.php/products/admin/sortKho">
<strong>Chọn kho:</strong> <select name = "giatrikho" onchange = "formkho.submit();">
	<option value="100" ><?php echo 'Tất cả'?></option>
    <?php 
	if (count($warehouse))
	{
		foreach ($warehouse as $key => $list)
		{
			echo "<option value=\"".$list['kho_id']."\" >".$list['kho_name']."</option>";
		}
	}
	?>		
</select>
</form>
</div>
<div align="right">
	<?php echo $pagination;?>                   
</div>
<br>
<?php
$this->load->view('admin/admin_home_cont');
?>
<script type="text/javascript">
$(document).ready(function(){

    var tablecont = $("#tablesorter1");
    var module = "<?php echo $module ; ?>";

    function updateitem()
    {   
        $.ajax({
            type: "POST", 
            url: "<?php if ($this->uri->segment('3') != "sortKho")
            			echo site_url($module.'/admin/Ajaxgetupdate/'.$this->uri->segment('4'));
            			else echo site_url($module.'/admin/Ajaxgetupdate/'.$this->uri->segment('5')); ?>", 
            complete: function(data)
            {
                tablecont.html(data.responseText);
            }
        });
    }

        //on submit event
    $(".changestatus").live('click', function(event){
        event.preventDefault();
        var href = $(this).attr("href");
        var id =href.substring(href.lastIndexOf("/") + 1);
        $.ajax({
            type: "POST", 
            url: "<?php echo site_url('kaimonokago/admin/changeStatus'); ?>"+"/"+module+"/"+id,
            complete: function()
            {
                updateitem();
            }
        });  
    });
});
</script>