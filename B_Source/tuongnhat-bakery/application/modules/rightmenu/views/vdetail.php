<?php $lang=$this->session->userdata('lang');?>
<h2><?php if ($lang=='vn') echo $info->tieudev;
		else echo $info->tieudee;
	?></h2>
	
	<?php if ($lang=='vn') echo $info->noidungv;
		else echo $info->noidunge;?>