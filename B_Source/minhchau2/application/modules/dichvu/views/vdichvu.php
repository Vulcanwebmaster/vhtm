<?php
	$lang=$this->session->userdata('lang');
?>
<style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-dichvu').addClass('menu-visited');
	});
</script>
<div id="ja-mainbody" class="clearfix">
	  		<div id="ja-pathway">
        		<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>
					<img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt=""> <a href="<?php echo base_url() ?>dichvu">
					<?php echo $this->lang->line('content-dichvu'); ?> </a>
        	</div>
        	<h2 class="contentheading"><?php echo $this->lang->line('content-dichvu'); ?></h2>
			<div style="padding-left: 20px;padding-top:10px">
				<?php
					if($lang=='vn')
						echo $query->contentv;
					else echo $query->contente;
				?>
			</div>
</div
<div id="ja-col">
<?php $this->load->view('front/left');?>
</div>