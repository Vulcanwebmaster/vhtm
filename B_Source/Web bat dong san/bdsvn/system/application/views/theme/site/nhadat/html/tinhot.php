<?php
$this->CI = get_instance();
$this->db->select('id');
$this->db->where('bat', "1");
$query = $this->db->get('danhmuc');
$iddanhmuc = $query->result();
$count = 0;
foreach ($iddanhmuc as $dm):
	$temp[$count]=$dm->id;
	$count = $count + 1;
endforeach;
//$iddanhmuc = array('10', '2', '11','8','9','12','13');
$this->db->or_where_in('idcat', $temp);
$this->db->order_by('ngay', "DESC");
$query = $this->db->get('noidung',1);
$top = $query->result();

$this->db->or_where_in('idcat', $temp);
$this->db->order_by('ngay', "DESC");
$query = $this->db->get('noidung',10,1);
$list = $query->result();


?>
<div>
	<?foreach($top as $rs):?>
		<a href= "tintuc/chi-tiet/<?php echo $rs->idcat.'/'.$rs->id.'/'.$rs->alias.duoi();?>"style="color: red; font-size: 16px; font-family: Tahoma;"><?php echo $rs->tieude; ?></a>
		<p style="width:98%"><?php echo $rs->noidungngan;?></p>
	<?endforeach;?>
</div>
	<marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="1" behavior="scroll" direction="up" style="width:98%; height: 180px;border-top:1px solid red;border-bottom:1px solid red; ">            
		<ul style="width:100%">
		<?foreach($list as $rs):?>		                	
                <li style="color: blue;width:100%"><?=anchor('tintuc/chi-tiet/'.$rs->idcat.'/'.$rs->id.'/'.$rs->alias.duoi(),$rs->tieude)?></li>
		<?endforeach;?>
		</ul></marquee>