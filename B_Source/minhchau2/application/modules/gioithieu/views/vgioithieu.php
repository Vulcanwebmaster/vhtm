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
<div id="ja-mainbody" class="clearfix">
	  		<div id="ja-pathway">
        		<span class="breadcrumbs pathway"><a class="pathway" href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> 
        			</a><img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt=""> <?php echo $this->lang->line('content-gioithieu'); ?>
        	</div>
        	<h2 class="contentheading"><?php echo $this->lang->line('content-gioithieu'); ?></h2>
			<div style="padding-left: 20px;padding-top:10px">
				<?php 
					if($lang=='vn')
						echo $query->contentv;
					else echo $query->contente;
				?>
			</div>
</div>
	<?php $this->load->view('front/left');?>
