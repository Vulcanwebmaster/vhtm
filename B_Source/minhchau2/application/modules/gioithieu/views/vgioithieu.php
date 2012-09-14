<?php
	$lang=$this->session->userdata('lang');
?>
<style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-gioithieu').addClass('menu-visited');
	});
</script>
<div id="container">
	  <div id="center" class="column">       
	  	<div style="margin-top:-21px;padding-top: 0px;width:133%" id="content">
	  		<div id="ml1">
        		<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>>> <a href="<?php echo base_url() ?>gioithieu"><?php echo $this->lang->line('content-gioithieu'); ?> </a>
        	</div>
        	<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px; color:#26a1cc; font-weight:bold;"><?php echo $this->lang->line('content-gioithieu'); ?></p>
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