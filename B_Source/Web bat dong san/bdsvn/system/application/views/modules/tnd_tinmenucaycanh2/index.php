<?
$this->CI = get_instance();

?>
    <?
    $this->db->where('idcat',"54");
    $query = $this->db->get('noidung');
    $item = $query->result();?>
    <?foreach($item as $rs):
    ?>
		<div style="width: 137px; height: 24px; float: left; padding-left: 30px;" class="icon_left">
			<a href="htm/-Tab=8&cat_id=3&sub_id=1.htm"><font class="item_left" style="font-size: 11px;">
                                        <?=$rs->tieude?></font></a></div>
<?endforeach;?>





