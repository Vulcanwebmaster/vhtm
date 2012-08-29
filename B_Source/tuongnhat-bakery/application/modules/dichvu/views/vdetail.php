	<?php $lang=$this->session->userdata('lang');?>
	<h1 style="text-transform:capitalize"><?php if ($lang=='vn') echo $info->tieudev;
		else echo $info->tieudee;
	?></h1>
	
	<?php if ($lang=='vn') echo $info->noidungv;
		else echo $info->noidunge;
	?>
