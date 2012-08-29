<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#giaohang-menu a').addClass('active');
	});
</script>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
	&rsaquo; <?php echo $this->lang->line('menu-giaohang');?>
</div>

<?php $lang=$this->session->userdata('lang');?>
<h2><?php if ($lang=='vn') echo $info->tieudev;
	else echo $info->tieudee;?></h2>
<?php if ($lang=='vn') echo $info->noidungv;
	else echo $info->noidunge;?>