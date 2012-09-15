<?php
	$newModel=new CI_Model(); 
	$this->load->helper('text');
	$lang=$this->session->userdata('lang');
?>
<div id="container">
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
	  	<div id="content">
        
        	<p style=" font-size:20px;"><?php echo $this->lang->line('content-gioithieu'); ?></p>
			<p>
				<?php 
					$about=$newModel->getRowByColumn('mc_about_us','id',1);
					if($lang=='vn')
						echo word_limiter($about->contentv,70);
					else echo word_limiter($about->contente,50);
				?>
				<a href="<?php echo base_url() ?>gioithieu" class="more" style="float: right; margin-top: 5px;"><?php echo $this->lang->line('right-docthem'); ?></a>
				<br/>
			</p>
	
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
								<a href="index2.html" class="name"><?php echo $item->namev; ?></a>
								<span><?php echo $item->price; ?></span>
								
							</div>
					<?php
					}
					}
				?>
				
			</div>
		</div>
        <!---------------end content center----------------------->
	  </div>
      <!--------------end center----------------------->
      
      <!---------------begin left----------------------->
      
	  	<?php $this->load->view('front/left');?>
	  	
      <!---------------end đối tác---------------------->
      
      <!---------------begin right----------------------->
	  
	  	 <?php $this->load->view('front/right');?>
	  	 
	</div