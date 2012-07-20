<div class="breadcrumbs_container">
	<article class="breadcrumbs">
	<a href="<?php echo base_url()?>admin">Website Admin</a>
	<?php if(isset($bcLv1)){?>
	<div class="breadcrumb_divider"></div><a href="<?php echo base_url()?><?php echo $bcLv1_link?>"><?php echo $bcLv1?></a>
	<?php }?>
	<div class="breadcrumb_divider"></div> <a class="current"><?php echo $bcCurrent?></a>
	</article>
</div>