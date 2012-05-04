<!-- Author: tienlx -->
<?php
	$this->CI = get_instance();
	$this->CI->db->where('id',1);
	$query = $this->CI->db->get('dgwebsite');
	$dep = $query->result();
	
	$this->CI->db->where('id',2);
	$query = $this->CI->db->get('dgwebsite');
	$binhthuong = $query->result();
	
	$this->CI->db->where('id',3);
	$query = $this->CI->db->get('dgwebsite');
	$xau = $query->result();
	
	$this->db->select_sum('danhgia');
	$query = $this->CI->db->get('dgwebsite');
	$tongso = $query->result();
	$temp = 0;
	foreach($tongso as $rs):
		$temp = $rs->danhgia;	
	endforeach;
	
?>
<div class="box">
    <div class="ctitle">ĐÁNH GIÁ WEBSITE</div>
    <div class="cnoidung" style="padding-left: 5px;text-align: justify;">
    <table>
        
            <tbody><tr>
                <td valign="top" style="width: 230px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        Đẹp
                    </font>
                </td>
                <?foreach($dep as $rs):?>                
                <td valign="top" style="width: 100px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        <?php echo $rs->danhgia;?>
                        <?php $tileDep = (($rs->danhgia)/$temp)*100;?>
                        (<?php echo $tileDep;?>%)
                        </font></td>
				
                <td valign="top" style="width: 210px; border: 1px solid #c8d9ea; padding: 2px">
                    &nbsp;<img width="<?php echo $tileDep*2;?>" height="15" alt="" src="http://dantri3.vcmedia.vn/App_Themes/Default/Images/vote.gif"></td>
				<?php endforeach;?>
            </tr>
        
            <tr>
                <td valign="top" style="width: 230px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        Bình thường
                    </font>
                </td>
                <?foreach($binhthuong as $rs):?>
                <td valign="top" style="width: 100px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        <?php echo $rs->danhgia;?>
						<?php $tileBT = (($rs->danhgia)/$temp)*100;?>
                        (<?php echo $tileBT;?>%)
                        </font></td>
				
                <td valign="top" style="width: 210px; border: 1px solid #c8d9ea; padding: 2px">
                    &nbsp;<img width="<?php echo $tileBT*2;?>" height="15" alt="" src="http://dantri3.vcmedia.vn/App_Themes/Default/Images/vote.gif"></td>
				<?php endforeach;?>
            </tr>
        
            <tr>
                <td valign="top" style="width: 230px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        Xấu
                    </font>
                </td>
                <?foreach($xau as $rs):?>
                <td valign="top" style="width: 100px; border: 1px solid #c8d9ea; padding: 2px">
                    <font size="2" face="Arial">
                        <?php echo $rs->danhgia;?>
						<?php $tileXau = (($rs->danhgia)/$temp)*100;?>
                        (<?php echo $tileXau;?>%)
                        </font></td>
                <td valign="top" style="width: 210px; border: 1px solid #c8d9ea; padding: 2px">
                    &nbsp;<img width="<?php echo $tileXau*2;?>" height="15" alt="" src="http://dantri3.vcmedia.vn/App_Themes/Default/Images/vote.gif"></td>
				<?php endforeach;?>
            </tr>
        
            </tbody></table>
    </div>
    
    <div class="clearfix"></div>
</div>