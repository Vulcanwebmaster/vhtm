<?php
  $this->CI = get_instance();
  $this->CI->db->where('parentid',0);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('danhmuc');
  $list = $query->result();
?>
<?foreach($list as $rs):?>
<span style="font-weight: bold;margin-right: 20px;">
    <a href="<?=base_url()?>tintuc/chuyen-muc/<?=$rs->id?>/<?=$rs->alias.duoi()?>">
        <?=$rs->ten?>
    </a>
</span>
<?endforeach;?>
