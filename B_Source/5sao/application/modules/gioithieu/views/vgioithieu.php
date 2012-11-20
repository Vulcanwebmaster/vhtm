<ul id="breadcrum">
	<li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li>
	<li>> <h1><?php echo $this->lang->line('menu-gioithieu');?></h1></li>
</ul>
<script type="text/javascript">
	$(document).ready(function(){
		$('#bg_itemmenu_2').parent().addClass('hovermenu');	
		$('#bg_itemmenu_2').parent().addClass('cannotmodify');	
		$('#bg_itemmenu_2').css('display','block');
		$('#bg_itemmenu_2').css('z-index','111');
		$('#bg_itemmenu_2').children('ul').css('opacity','1');
	});
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

