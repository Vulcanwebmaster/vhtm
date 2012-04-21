<?
$this->CI = get_instance();
$this->CI->db->order_by('ngay',"DESC");
$query = $this->db->get('noidung',6,1);
?>
    <?
    $item = $query->result();?>
    <?foreach($item as $rs):?>
    <div class="hb-first">
    <div class="hb-avatar">
        <a href="#">
            <img width="80px" height="60px" alt="" src="<?=base_url().$rs->hinhanh?>"  />
        </a>
    </div>
    <div class="hb-content">
        <div class="hb-title">
            <a href="#">
                <?=$rs->tieude?>
            </a>
        </div>
        <div class="hb-lead">
            <?=$this->string_library->catchu($rs->noidungngan,35)?></div>
    </div>
</div>
<?endforeach;?>



