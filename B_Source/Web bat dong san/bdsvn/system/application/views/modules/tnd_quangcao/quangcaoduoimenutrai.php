  <?php
  $this->CI = get_instance();
  $this->CI->db->where('id_dm',4);
  $query = $this->CI->db->get('quangcao');
  $list = $query->result();
  if(count($list) > 0){

  
?>
<div style="margin-top:10px;margin-bottom:10px">
<?
  foreach($list as $rs): 
if($rs->option==0){
?>
<a href="<?=$rs->link?>">
<img src="<?=base_url().$rs->hinhanh?>" alt="<?=$rs->name?>" style="width: <?=$rs->dai?>px;height: <?=$rs->cao?>px;">
</a>
<?
}else{
?>
<?
}
endforeach; 
?>
</div>
<?
}?>
