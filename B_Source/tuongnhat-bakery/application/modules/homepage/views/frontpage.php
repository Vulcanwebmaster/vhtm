<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#trangchu-menu a').addClass('active');
	});
</script>

<?php $lang=$this->session->userdata('lang');?>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
</div>
<a name="top"></a>
                <div class="teaserboxes clear-block">
                	<?php foreach($list as $item)
                	{?>
                		<div class="column">
	                        <div id="node-2120" class="teaserbox">
	                            <a class="overlay pngfix" href="<?php echo $item->link;?>"><?php if ($lang=='vn') echo $item->tieudev; else echo $item->tieudee;?></a> 
	                                <a href="<?php echo $item->link;?>">
	                                    <?php echo $item->hinhanh;?></a>
	                            <div class="mask">
	                                <a href="<?php echo $item->link;?>">
	                                    <img src="<?php echo base_url();?>assets/bakery/images/productgroup-mask.png" tppabs="images/productgroup-mask.png" alt=""
	                                        class="pngfix" /></a></div>
	                        </div>
	                    </div>
                	<?php }?>
                </div>
                