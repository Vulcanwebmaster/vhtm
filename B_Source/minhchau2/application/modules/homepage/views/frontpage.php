<div id="container">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  <div id="center" class="column">
      <!---------------begin slider----------------------->
      <?php $this->load->view('front/slide');?>
       <!---------------end slider----------------------->
       
       <!--------------begin content center----------------------->
	  	<div id="content">
        
        	<p style=" font-size:20px;"><?php echo $this->lang->line('content-gioithieu'); ?></p>
			<p>Công ty thiết bị y tế Minh Châu

					Là một nhà nhập khẩu chuyên nghiệp, Công ty Minh Châu chúng tôi được phát triển theo hướng đa dạng hoá sản phẩm. Chúng tôi nhắm tới đối tượng khách hàng là các công ty kinh doanh thiết bị y tế, các cơ sở y tế và đặc biệt là các phòng khám, bệnh viện tư nhân. Chúng tôi có hàng ngàn sản phẩm với đủ mọi chủng loại khác nhau, hầu như bao quát đầy đủ các nhu cầu về thiết bị và dụng cụ y tế. <br /></p>
	
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