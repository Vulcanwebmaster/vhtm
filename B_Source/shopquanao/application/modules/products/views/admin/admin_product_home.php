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
<select name = "giatrikho" onchange = "formkho.submit();">
	<option value="0"><?php echo 'Chọn kho'?></option>
	<option value="100"><?php echo 'Tất cả'?></option>
	<option value="1">Kho 1</option>
	<option value="2">Kho 2</option>
	<option value="3">Kho 3</option>	
</select>
</form>
</div>

<div align="right" style="float:right">
	<?php echo $pagination;?>                   
</div>

<br/>

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
            url: "<?php echo site_url($module.'/admin/Ajaxgetupdate'); ?>", 
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