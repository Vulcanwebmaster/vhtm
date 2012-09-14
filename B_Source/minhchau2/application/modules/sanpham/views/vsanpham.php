<?php
	$lang=$this->session->userdata('lang');
?>
<style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif">);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-sanpham').addClass('menu-visited');
	});
</script>
<div id="container1">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  
      
      <!---------------begin left----------------------->
	  <div id="left1" class="column">
      
      	<?php $this->load->view('front/left1');?>
	  	
	  </div>
      <div id="center1" class="column">
           
       <!--------------begin content center----------------------->
	  	<div id="content1">
        	<div id="ml">
        	<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>>> 
        	<a href="<?php echo base_url() ?>sanpham"><?php echo $this->lang->line('content-sanpham'); ?> </a>
        	<?php if(isset($query))
			{
				?>
	        	>> 
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
							<div class="item">
								<img src="<?php echo base_url()?>assets/minhchau2/images/sp1.jpg" alt="" width="124" height="90" />
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id?>/<?php echo $item->id ?>" class="name">
									<?php
										if($lang=='vn') 
											echo $item->namev;
										else echo $item->namee;  
									?>
								</a>
								<span>
									<?php echo $item->price; ?>
								</span>
							</div>
						<?php
					}
				?>
				
			</div>
		</div>
        <!---------------end content center----------------------->
	  </div>
      <!--------------end center----------------------->
      <!---------------end đối tác---------------------->
      
      <!---------------begin right----------------------->
       <!---------------end right----------------------->
	</div>