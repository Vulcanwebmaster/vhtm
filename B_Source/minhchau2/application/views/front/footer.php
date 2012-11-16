<!-- BEGIN: FOOTER -->

	<div id="ja-footer" class="clearfix">	
		<div class="sublogo">
			<a href="<?php echo base_url() ?>" title="Công ty thiết bị y tế Minh Châu"><span>Minh Châu shop</span></a>
		</div>
		<div class="copyright">		
			<?php foreach ($list_lienhe as $lienhe) { ?>
				<small>
					<?php echo $lienhe->contentv ?>
				</small>
			<?php } ?>
			
		</div>	
		<div class="foot-rss">
		
		</div>

	</div>

<!-- END: FOOTER -->


<!--<div id="footer">
	<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('footer-trangchu'); ?></a>  |  
	<a href="#"><?php echo $this->lang->line('footer-sanphammoi'); ?></a>  |  
	<a href="#"><?php echo $this->lang->line('footer-uudai'); ?></a>  |  
	<a href="#"><?php echo $this->lang->line('footer-taikhoan'); ?></a>  |  
	<a href="#"><?php echo $this->lang->line('footer-diachi'); ?></a>  |  
	<a href="#">FAQ</a>  |  
	<a href="#"><?php echo $this->lang->line('footer-lienhe'); ?></a>  
	<p>
		Copyright ©. All rights reserved. Design by 
		<a href="http://niw.com.vn/" target="_blank" id="bft" title="NIW">NIW</a>     
	</p>																																																																																																																																									
</div>-->