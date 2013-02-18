<div class="breadcrumbs_container">
	<article class="breadcrumbs">
	<a href="<?php echo base_url()?>admin">Admin Site Web</a>
	<?php if(isset($bcLv1)){?>
	<div class="breadcrumb_divider"></div><a href="<?php echo base_url()?><?php echo $bcLv1_link?>"><?php echo $bcLv1?></a>
	<?php if(isset($bcLv2)){?>
	<div class="breadcrumb_divider"></div><a href="<?php echo base_url()?><?php echo $bcLv2_link?>"><?php echo $bcLv2?></a>
	<?php if(isset($bcLv3)){?>
	<div class="breadcrumb_divider"></div><a href="<?php echo base_url()?><?php echo $bcLv3_link?>"><?php echo $bcLv3?></a>
	<?php }?>
	<?php }?>
	<?php }?>
	<div class="breadcrumb_divider"></div> <a class="current"><?php echo $bcCurrent?></a>
	</article>
</div>