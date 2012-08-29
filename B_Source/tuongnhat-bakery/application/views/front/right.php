<?php $lang=$this->session->userdata('lang');?>
<style>
<!--
	#sidebar-new a{display:block;clear:both}
	#sidebar-new a p,#sidebar-new a h3{float:left; }
	#sidebar-new a p{margin-bottom:0.5em}
	#sidebar-new a p img{height:30px}
	#sidebar-new a h3{text-transform:uppercase; line-height:30px}
-->
</style>
<div id="sidebar-new" style="float:left">
                	<?php foreach ($rightmenu as $menu)
                	{?>
                		<a href="<?php echo base_url();?>rightmenu/detail/<?php echo $menu->id;?>">
                			<?php echo $menu->hinhanh;?>
                			<h3><?php if ($lang=='vn') echo $menu->tieudev;
                			else echo $menu->tieudee;?></h3>
                		</a>
                	<?php }?>
</div>