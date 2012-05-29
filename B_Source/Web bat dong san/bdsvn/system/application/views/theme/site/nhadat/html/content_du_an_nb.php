<?php
$this->CI = get_instance();
$this->CI->db->order_by('sapxep',"ASC");
$this->CI->db->where('phantrang',"3");
$query = $this->CI->db->get('danhmuc',1,0);
$item = $query->result();
/*
$this->CI = get_instance();
$this->CI->db->where('id',61);
$query = $this->CI->db->get('danhmuc');
$tieude1 = $query->result();

$this->CI->db->where('id',62);
$query = $this->CI->db->get('danhmuc');
$tieude2 = $query->result();

$this->CI->db->where('id',314);
$query1 = $this->CI->db->get('noidung');
$baiviet1 = $query1->result();

$this->CI->db->where('id',315);
$query2 = $this->CI->db->get('noidung');
$baiviet2 = $query2->result();
*/

?>
<?foreach($item as $tl):?>
<?php
$this->CI->db->where('parentid',$tl->id);
$this->CI->db->order_by('sapxep',"ASC");
$query = $this->CI->db->get('danhmuc',1,0);
$item1 = $query->result();

$this->CI->db->where('parentid',$tl->id);
$this->CI->db->order_by('sapxep',"ASC");
$query = $this->CI->db->get('danhmuc',1,1);
$item2 = $query->result();

?>
<?foreach($item1 as $cm):?>
<div id="noibattrai" style="width:49%;float:left;">
<?php 
	$this->CI->db->where('idsub',$cm->id);
	$this->CI->db->where('bat',"1");
	$this->CI->db->order_by('ngay',"DESC");
	$query = $this->CI->db->get('noidung',1,0);
	$item = $query->result();	
?>
                    <div>
                        <p style="width:100%; margin-bottom:2px; border-bottom: solid 2px red"><strong style="color: #006699"><?php echo $cm->ten;?></strong></p>
					<?foreach($item as $rs):?>
                        <div style="padding:5px">
                            <img src="<?=base_url()?><?php echo $rs->hinhanh;?>" border="0" style="padding-bottom: 0px; float:left" align="left" width="80" height="97" alt=""/>
                            <div style="float:left; width:70%; padding-left:10px; text-align:justify">
                                <strong><?php 
                                 if($language == 1)
                                	echo $rs->tieude;
                                 if($language == 2)
                                 	echo $rs->tieude_eng;
                                 else
                                 	echo $rs->tieude;
                                 	?></strong> <p style="margin-top:0px; width:100%"><?php
                                 	if($language == 1)
                                	echo $rs->noidungngan;
                                 if($language == 2)
                                 	echo $rs->noidungngan_eng; 
                                 	?></p>
                            </div>
                        </div>
                        <ul style="width:95%; margin-top:0px; clear: both; border-bottom: solid 2px red">
                            <li style="width:100%; height:205px;padding-right:5px">
                                <?php 
								if($language == 1)
                                	echo $this->string_library->catchu($rs->noidung,700);
                                	//echo $rs->noidung;
                                 if($language == 2)
                                 	if ($rs->noidung_eng != "")
                                 		echo $this->string_library->catchu($rs->noidung_eng,700);
                                 		//echo $rs->noidung_eng;
                                 	else {
                                 		echo $this->lang->line('ko_co_nd');
                                 	} 
                                ?></li>
                            <li style="width:100%; padding-right:2px">
									<a href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>"><?php echo $this->lang->line('xemthem')?></a>
                            </li>
                        </ul>
					<?endforeach;?>
                    </div>
                    
</div>
<?endforeach;?>

<?foreach($item2 as $cm):?>
<div style="width:49%;float:right;">
<?php 
	$this->CI->db->where('idsub',$cm->id);
	$this->CI->db->where('bat',"1");
	$this->CI->db->order_by('ngay',"DESC");
	$query = $this->CI->db->get('noidung',1,0);
	$item = $query->result();	
?>
                    <div>
                        <p style="width:100%; margin-bottom:2px; border-bottom: solid 2px red"><strong style="color: #006699"><?php echo $cm->ten;?></strong></p>
					<?foreach($item as $rs):?>
                        <div style="padding:5px">
                            <img src="<?=base_url()?><?php echo $rs->hinhanh;?>" border="0" style="padding-bottom: 0px; float:left" align="left" width="80" height="97" alt=""/>
                            <div style="float:left; width:70%; padding-left:10px; text-align:justify">
                                <strong><?php 
                                 if($language == 1)
                                	echo $rs->tieude;
                                 if($language == 2)
                                 	echo $rs->tieude_eng;
                                 else
                                 	echo $rs->tieude;
                                 	?></strong> <p style="margin-top:0px; width:100%"><?php
                                 	if($language == 1)
                                	echo $rs->noidungngan_eng; 
                                 if($language == 2)
                                 	echo $rs->noidungngan_eng; 
                                 	?></p>
                            </div>
                        </div>
                        <ul style="width:95%; margin-top:0px; clear: both; border-bottom: solid 2px red">
                            <li style="width:100%; height:205px;padding-right:5px">
                                <?php 
								if($language == 1)
                                	echo $this->string_library->catchu($rs->noidung,700);
                                	//echo $rs->noidung;
                                 if($language == 2)
                                 	if ($rs->noidung_eng != "")
                                 		echo $this->string_library->catchu($rs->noidung_eng,700);
                                 		//echo $rs->noidung_eng;
                                 	else {
                                 		echo $this->lang->line('ko_co_nd');
                                 	} 
                                ?></li>
                           <li style="width:100%; padding-right:2px">
									<a href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>"><?php echo $this->lang->line('xemthem')?></a>
                            </li>
                                <!--
                            <li style="width:100%; padding-right:5px"></li>
                            <li style="width:100%; padding-right:5px"></li>
                             -->
                            
                        </ul>
					<?endforeach;?>
                    </div>
</div>
<?endforeach;?>


<?endforeach;?>