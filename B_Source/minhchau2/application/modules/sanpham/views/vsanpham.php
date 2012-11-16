<?php
	$lang=$this->session->userdata('lang');
?>
<style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-sanpham').addClass('menu-visited');
	});
</script>
<div id="ja-mainbody" class="clearfix">
        	<div id="ja-pathway">
        	<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">
        	<?php echo $this->lang->line('content-sanpham'); ?>
        	<?php if(isset($query))
			{
				?>
			
	        	<img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">
	        	<a href="<?php echo base_url() ?>sanpham/view/<?php echo $query->id; ?>">
	        		<?php
	        			if($lang=='vn')
							echo $query->namev;
						else echo $query->namee;
	        		?>
	        	</a>
        		<?php
       		}
        	?>
        	</div>
			<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px; color:#26a1cc; font-weight:bold;margin-left:15px">
				<?php 
					if(isset($query))
					{
						if($lang=='vn')
							echo $query->namev;
						else echo $query->namee;
					}
					else echo $this->lang->line('content-sanpham'); 
					
				?>
			</p>
			<div class="stuff">
				<?php
					foreach($items as $item)
					{
						?>
							<div class="trangchuhehe">
								<span style="font-weight:bold;">
									<?php
										if($lang=='vn') 
											echo $item->namev;
										else echo $item->namee;  
									?>
								</span>
								<br>
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>" class="name">
								<?php echo $item->image; ?>
								</a>
								<br>
							</div>
							<!--<div class="item">
								<img src="<?php echo base_url()?>assets/minhchau2/images/sp1.jpg" alt="" width="124" height="90" />
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>" class="name" style="width:111px;">
									<?php
										if($lang=='vn') 
											echo $item->namev;
										else echo $item->namee;  
									?>
								</a>
								<span>
									<?php echo $item->price; ?>
								</span>
							</div>-->
						<?php
					}
				?>
				
			</div>

	</div>
	<?php $this->load->view('front/left');?>
