<?
$this->CI = get_instance();
$this->CI->db->where('bat',1);
$this->CI->db->order_by('ngay',"DESC");
$query = $this->db->get('noidung',4,0);
?>
    <?
    $item = $query->result();?>
    <?foreach($item as $rs):?>
    <div class="hb-first">
    <div class="hb-avatar">
        <a href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>">
            <img width="80px" height="60px" alt="" src="<?=base_url().$rs->hinhanh?>"  />
        </a>
    </div>
    <div class="hb-content">
        <div class="hb-title">
            <a href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>">
                <?=$rs->tieude?>
            </a>
        </div>
        <div class="hb-lead">
            <?=$this->string_library->catchu($rs->noidungngan,35)?></div>
    </div>
</div>
<?endforeach;?>



