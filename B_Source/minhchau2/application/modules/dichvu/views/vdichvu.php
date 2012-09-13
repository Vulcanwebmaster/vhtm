<?php
	$lang=$this->session->userdata('lang');
?>
<div id="container">
	  <div id="center" class="column">       
	  	<div style="margin-top:-21px;padding-top: 0px;width:133%" id="content">
	  		<div id="ml1">
        		<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>>> <a href="<?php echo base_url() ?>dichvu"><?php echo $this->lang->line('content-dichvu'); ?> </a>
        	</div>
        	<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px; color:#26a1cc; font-weight:bold;"><?php echo $this->lang->line('content-dichvu'); ?></p>
			<div style="padding-left: 20px;padding-top:10px">
				<?php
					if($lang=='vn')
						echo $query->contentv;
					else echo $query->contente;
				?>
			</div>
		</div>
	  </div>
	  	<?php $this->load->view('front/left');?>
</div