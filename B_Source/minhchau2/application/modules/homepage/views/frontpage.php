<?php
	$newModel=new CI_Model(); 
	$this->load->helper('text');
	$lang=$this->session->userdata('lang');
?>



<!------------------------------------------>
<div id="ja-mainbody">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  <div id="center" class="column">
      <!---------------begin slider----------------------->
      <?php $this->load->view('front/slide');?>
       <!---------------end slider----------------------->
       
       <!--------------begin content center----------------------->
       <style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-trangchu').addClass('menu-visited');
	});
</script>
<!-- BEGIN: FEATURE PRODUCTS -->
	  	<div id="ja-topsl3">
        	<div class="moduletable">
        	<h3><span><?php echo $this->lang->line('content-gioithieu'); ?></span></h3>
	
			<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px">
				<?php echo $this->lang->line('content-sanphammoi'); ?>
			</p>
			<div class="stuff">
				<?php
					if(isset($items))
					{
						foreach($items as $item)
						{
					?>
							<div class="item">
								<img src="<?php echo base_url()?>assets/minhchau2/images/pic1.jpg" alt="" width="124" height="90" />
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>" class="name"><?php echo $item->namev; ?></a>
								<span><?php echo $item->price; ?></span>
								
							</div>
					<?php
					}
					}
				?>
				
			</div>
			</div>
		</div>
        <!---------------end content center----------------------->
	  </div>
</div>
	  	<?php $this->load->view('front/left');?>
      <!---------------end đối tác---------------------->
      

	  	 
