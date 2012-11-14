<?php
	$lang=$this->session->userdata('lang');
?>
<div id="ja-mainbody" class="clearfix">
        	<div id="ja-pathway">
        	<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">  
        	<a href="<?php echo base_url() ?>sanpham"><?php echo $this->lang->line('content-sanpham'); ?> </a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">
        	<a href="<?php echo base_url() ?>sanpham/view/<?php echo $category->id ?>">
        		<?php
        			if($lang=='vn')
						echo $category->namev;
					else echo $category->namee;
        		?>
			</a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt=""> 
        	
        		<?php
        			if($lang=='vn')
						echo $product->namev;
					else echo $product->namee;
        		?>
        	</div>
			<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px; color:#26a1cc; font-weight:bold;">
				
				<?php
        			if($lang=='vn')
						echo $product->namev;
					else echo $product->namee;
        		?>
			</p>
			<div class="stuff">
				<div id="stuff-left">
                	<img src="<?php echo base_url()?>assets/minhchau2/images/sp5.JPG" width="250px" height="280px"><br/>
                </div>
                <div id="stuff-right">
                <p style="font-weight:bold; font-size:16px">
                	<?php
	        			if($lang=='vn')
							echo $product->namev;
						else echo $product->namee;
	        		?>
                </p><br/>
                <p style="font-weight:bold"><?php echo $this->lang->line('content-thongso'); ?></p>
                	<?php
                		if($lang=='vn') 
                			echo $product->technical_infov;
						else echo $product->technical_infoe;
                	?>
                	<br/>
				<span style="font-weight:bold">
					<?php echo $this->lang->line('content-gia');?>:  
				</span>
				<span style="color:#E27C0E; font-size:12px; font-weight:bold;">
					<?php echo $product->price; ?>
				</span>

                </div>                
			</div>
      <!--------------end center----------------------->
	</div>
	<!---------------begin left----------------------->
	  <?php $this->load->view('front/left');?>
	  
