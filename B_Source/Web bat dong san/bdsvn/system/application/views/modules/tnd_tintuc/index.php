<?
$this->CI = get_instance();
$this->CI->db->where('bat',1);
$this->CI->db->order_by('id','DESC');
$query = $this->CI->db->get('noidung',1,0);
$top = $query->row();

$this->CI->db->where('parentid',0);
$query = $this->CI->db->get('danhmuc');
$list = $query->result();
?>
<div class="box">
<div class="mtoptin">
<div class="tieude"><?=anchor('tintuc/chi-tiet/'.$top->idcat.'/'.$top->id.'/'.$top->alias.duoi(),$top->tieude)?></div>
    <img src="<?=base_url().$top->hinhanh?>" alt="" class="hinhanh">
    <div><?=$top->noidungngan?></div>
    <div class="dot"></div>
</div>
<div class="mlist">
    <ul>
    <?foreach($list as $rs):
    $this->CI->db->where('idcat',$rs->id);
    $this->CI->db->where('bat',1);
    $this->CI->db->order_by('id','DESC');
    $query = $this->CI->db->get('noidung',1,0);
    $item = $query->row();
    ?>
    <li>
        <div class="tieude"><?=anchor('tintuc/chuyen-muc/'.$rs->id.'/'.$rs->alias.duoi(),$rs->ten)?></div>
        <div>
            <span>
                <img class="hinhanh" src="<?=base_url().$item->hinhanh?>" alt="">

            </span>
                 <a title="<?=$item->tieude?>" style="font-size: 11px;line-height: 12px;" href="<?=base_url()?>tintuc/chi-tiet/<?=$item->idcat?>/<?=$item->id?>/<?=$item->alias.duoi()?>">
                <?=$this->string_library->catchu($item->tieude,35)?>
                </a>           
        </div>
    </li>
    <?endforeach;?>
    </ul>
</div>
</div>