<?php
  $this->CI = get_instance();
  $this->CI->db->where('id_dm',7);
  $this->CI->db->where('bat',1);
  $query = $this->CI->db->get('quangcao');
  $list = $query->result();
  if(count($list) > 0){

  
?>
<?
  foreach($list as $rs): 
if($rs->option==0){
?>
<div class="adv">
<a href="<?=$rs->link?>" target="_blank">
<img src="<?=base_url().$rs->hinhanh?>" alt="<?=$rs->name?>" style="width: <?=$rs->dai?>px;height: <?=$rs->cao?>px;">
</a>
</div>  
<?
}else{
?>
<div class="adv"> 
<object height="<?=$rs->cao?>" width="<?=$rs->dai?>" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"><param name="movie" value="<?=base_url().$rs->hinhanh?>"><param name="quality" value="high"><param name="wmode" value="transparent"><embed height="<?=$rs->cao?>" width="<?=$rs->dai?>" wmode="transparent" src="<?=base_url().$rs->hinhanh?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></object>
</div>
<?
}
endforeach; 
?>

<?
}?>