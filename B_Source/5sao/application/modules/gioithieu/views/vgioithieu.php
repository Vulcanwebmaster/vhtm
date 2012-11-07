<ul id="breadcrum">
	<li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li>
	<li>> <h1><?php echo $this->lang->line('menu-gioithieu');?></h1></li>
</ul>
<script type="text/javascript">
	$('#menu-gioithieu').parent().addClass('currentmenu');	$('#bg_itemmenu_2').addClass('styleshow');
</script>
<div id="center">
	<ul id="aboutus-menu">
		<?php foreach($list_gioithieu as $item)
		{?>
		<li class="aboutus-item">
			<img alt="" src="<?php echo base_url();?>assets/5sao/images/gioithieu_image.jpg"/>
			<h3><a href="<?php echo base_url();?>gioithieu/detail/<?php echo $item->id;?>"><?php if ($lang=="vn") echo strip_tags($item->tieude_v); else echo strip_tags($item->tieude_e);?></a></h3>
		</li>
		<?php }?>
	</ul>
</div>