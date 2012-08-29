<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#faq-menu a').addClass('active');
	});
</script>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
	&rsaquo; FAQ
</div>


<style type="text/css">
	.list li p{margin-bottom:0.5em}
	.list li{margin-bottom:20px}
</style>

<?php function cutString($str)
{
	$spacing=0;
	$i=0;
	for ($i=0;$i<count($str);)
	{
		if ($spacing<100)
		{
			if ($str[$i]==' ')
				$spacing++;
			$i++;
		}
		else break;
	}
	return substr($str, 0, $i);
}?>

<?php $lang=$this->session->userdata('lang');?>
<div>
	<ul style="list-style-type:none" class="list">
		<?php foreach($list as $item)
		{?>
		<li>
			<h2 style="margin-bottom:0; text-transform: capitalize"><?php echo $item->tieude;?></h2>
			<?php echo cutString($item->noidung);
			?>
			<a style="display: inline; color:#e19e2a" href="<?php echo base_url();?>faq/detail/<?php echo $item->id;?>"> &rarr; Xem thêm</a>
		</li>
		<?php }?>
	</ul>
	<?php echo $this->pagination->create_links();?>
</div>
