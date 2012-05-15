<?php
$this->CI = get_instance();
$query = $this->CI->db->get('nhadat');
$numTinRao = $query->num_rows(); 
$query = $this->CI->db->get('noidung');
$numBaiViet = $query->num_rows();
?>
<?php
  $this->CI = get_instance();
/** 
 *  Dem so nguoi Online
 */
 $time = time();
 //Begin kiem tra session_id
 //$now = mdate('%Y-%m-%d %H:%I:%S',time()); 
 $session_id = $this->CI->session->userdata('session_id');
 $username = $this->CI->session->userdata('username');
 $this->CI->db->where('session_id',$session_id);
 $query = $this->CI->db->get('online');
 $check_session = $query->row();
 $date = mdate('%Y-%m-%d',time()); 

 if(!$check_session){
     // Session_id = null them vao db
     $data = array(
          'session_id' => $session_id,
          'activity' => $time,
          'ip_address' => $_SERVER['REMOTE_ADDR'],
          'user_agent' => $_SERVER['HTTP_USER_AGENT'],
          'date' => $date
     );
     $this->db->insert('online',$data);
 }else{
     
     //Session_id <> null cập nhật
     if($username!=''){
         $data = array(
            'activity' => $time,
            'member' => 'y',
            'username' => $username
         );
         
     }else{
         $data = array(
            'activity' => $time
         );
     }
     $this->CI->db->where('session_id',$session_id);
     $this->CI->db->update('online',$data);
 }

$limit_time = time() - 300; // 5 Minute time out. 60 * 5 = 300
$sql = $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time  GROUP BY ip_address");
$sql_member = $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time AND member='y' GROUP BY ip_address") or die (mysql_error());
$total_online = $this->CI->db->Query("SELECT * FROM vnit_online") or die (mysql_error());
$now_online =  $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time  GROUP BY ip_address") or die (mysql_error());
$member_online = $this->CI->db->Query("SELECT * From vnit_online Where member = 'y' And date = $date");
$day_online = $this->CI->db->Query("SELECT * From vnit_online Where date = $date");
$visits = count($sql->result());
$totalvisit = $visits;
$members = count($sql_member->result());
$path = base_url().'/skins/counter/';
$array_number = array('0','1','2','3','4','5','6','7','8','9');
$array_img = array('<img src="'.$path.'0.gif">','<img src="'.$path.'1.gif">','<img src="'.$path.'2.gif">','<img src="'.$path.'3.gif">','<img src="'.$path.'4.gif">','<img src="'.$path.'5.gif">','<img src="'.$path.'6.gif">','<img src="'.$path.'7.gif">','<img src="'.$path.'8.gif">','<img src="'.$path.'9.gif">');
$tongtruycap = $total_online->num_rows();
//$tongtruycap = str_replace($array_number,$array_img,$tongtruycap);
$totalvisit = str_replace($array_number,$array_img,$totalvisit);
?>




<!-- Dinh nghia Style -->
        <script type="text/javascript" src="<?php echo base_url();?>Scripts/stmenu.js" ></script>
                        <script type="text/javascript" src="<?php echo base_url();?>Scripts/ddaccordion.js"></script>
                        <script type="text/javascript">
                            ddaccordion.init({
                                headerclass: "silverheader", //Shared CSS class name of headers group
                                contentclass: "submenu", //Shared CSS class name of contents group
                                revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
                                mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                                collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                                defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc] [] denotes no content
                                onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
                                animatedefault: false, //Should contents open by default be animated into view?
                                persiststate: true, //persist state of opened contents within browser session?
                                toggleclass: ["", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
                                togglehtml: ["", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                                animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                                oninit: function (headers, expandedindices) { //custom code to run when headers have initalized
                                    //do nothing
                                },
                                onopenclose: function (header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                                    //do nothing
                                }
                            })
                        </script>
                        <style type="text/css">
                            .applemenu
                            {
                                width: 182px;
                                border: 1px solid #9A9A9A;
                            }
                            .applemenu div.silverheader a
                            {
                                background: url("../../images/bdscomvn/Images/bds.gif") /*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
                                color: white;
                                display: block;
                                position: relative;
                                width: 163px;
                                height: 21px;
                                text-decoration: none;
                                padding-top: 5px;
                                padding-left: 20px;
                                font-weight: bold;
                                font-size: 12px;
                            }
                            .applemenu div.silverheader a:visited, .applemenu div.silverheader a:active
                            {
                                color: #eef7ff;
                            }
                            .applemenu div.selected a, .applemenu div.silverheader a:hover
                            {
                                background: url("../../images/bdscomvn/Images/bds.gif") /*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
                                width: 163px;
                                height: 21px;
                                color: white;
                                padding-top: 5px;
                                padding-left: 20px;
                                font-weight: bold;
                                font-size: 12px;
                            }
                            .applemenu div.submenu
                            {
                                background: #eef7ff;
                            }
                        </style>
                        

<script type="text/javascript">
function submitform(fromName)
{
    document.forms[fromName].submit();
}
</script>
 <!-- Ban cho thue hop tac -->
       
 <div style="width: 183px; height: 33px; float: left;margin-bottom: 3px; background-image: url('<?php echo base_url();?>images/banchothuehoptac.png'); margin-top: 5px;"></div>
                        <div style="width: 183px; float: left" class="left_panel">
							<div class="applemenu">
<!-- Tim kiem nha xuong cho thue -->
<form name="myform" method="post" action="<?php echo base_url();?>nhadat/timkiem">
                                <div class="silverheader">
                                	<input style="display:none" name="nhucau" id="nhucau" value="4"/>
                                	<input style="display:none" name="chuyenmuc" id="chuyenmuc" value="19"/>
                                    <a class="tab" style="height: 30px" href="javascript:submitform('myform')">Cho thuê nhà xưởng</a>
                                </div>
                                <div class="submenu">
                                    
                                </div>
</form>
<!-- Tim kiem nha xuong cho thue -->
<form name="myform2" method="post" action="<?php echo base_url();?>nhadat/timkiem">
                                <div class="silverheader">
                                	<input style="display:none" name="nhucau" id="nhucau" value="1"/>
                                	<input style="display:none" name="chuyenmuc" id="chuyenmuc" value="19"/>
                                     <a class="tab" href="javascript:submitform('myform2')" style="height: 30px">Bán nhà xưởng</a>
								</div>
                                <div class="submenu">
								</div>
</form>
<form name="myform3" method="post" action="<?php echo base_url();?>nhadat/timkiem">
                                <div class="silverheader">
                                	<input style="display:none" name="nhucau" id="nhucau" value="5"/>
                                    <a class="tab" href="javascript:submitform('myform3')" style="height: 30px">Hợp tác kinh doanh</a></div>
                                <div class="submenu">
                                </div>
</form>
<form name="myform4" method="post" action="<?php echo base_url();?>nhadat/timkiem">
                                <div class="silverheader">
                                <input style="display:none" name="nhucau" id="nhucau" value="4"/>
								<input style="display:none" name="chuyenmuc" id="chuyenmuc" value="11"/>
                                    <a class="tab" href="javascript:submitform('myform4')" style="height: 28px">Cho thuê đất</a></div>
                                <div class="submenu">
                                </div>
</form>
<form name="myform5" method="post" action="<?php echo base_url();?>nhadat/timkiem">
                                <div class="silverheader">
                                <input style="display:none" name="nhucau" id="nhucau" value="2"/>
                                    <a class="tab" href="javascript:submitform('myform5')" style="height: 28px">Mua</a></div>
                                <div class="submenu">
                                    
                                </div>
</form>
                            </div>
                        </div>
                        
 <!-- Du an -->
                         <div style="width: 183px; height: 33px; float: left; background: url('<?php echo base_url();?>images/duan.png'); no-repeat;
                            margin-bottom: 0px; margin-top: 5px;" class="left_panel">
                        </div>
                        <div style="width: 181px; float: left; border: 1px #9A9A9A solid;" class="left_panel">
    <?php
    $this->db->where('id',"51");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
                            <div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load du an tinh Ha Nam tu database -->
								<?=$this->load->view('modules/tnd_tinmenutrai/index')?>
                            </div>
    <?php
    $this->db->where('id',"52");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
                            <div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load du an tinh Ninh Bình tu database -->
                                <?=$this->load->view('modules/tnd_tinmenutrai2/index')?>
                            </div> 
 
 
 <!-- Cay canh -->
                            <div style="width: 182px; height: 33px; float: left; background: url('<?php echo base_url();?>images/caycanh.png') no-repeat;
                                margin-bottom: 0px; margin-top: 5px;" class="left_panel">
                            </div>                                                        
    <?php
    $this->db->where('id',"53");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
							<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load cay canh phoi tu database -->
                                <?=$this->load->view('modules/tnd_tinmenucaycanh/index')?>
                            </div> 
                            
    <?php
    $this->db->where('id',"54");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>

								<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
	                                <!-- Load cay canh phoi tu database -->
	                                <?=$this->load->view('modules/tnd_tinmenucaycanh2/index')?>
	                            	</div> 
                        
<!-- Cho thue cot pha-->                        
                            <div style="width: 182px; height: 33px; float: left; background: url('<?php echo base_url();?>images/thuecotpha.png') no-repeat;
                                margin-bottom: 0px; margin-top: 5px;" class="left_panel">
                            </div>
    <?php
    $this->db->where('id',"58");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
									<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
	                                height: auto !important; height: 700px">
	                                <!-- Load cay canh phoi tu database -->
	                                	<?=$this->load->view('modules/tnd_thuegianrao1/index')?>
	                            </div>
    <?php
    $this->db->where('id',"59");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
									<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
	                                height: auto !important; height: 700px">
	                                <!-- Load cay canh phoi tu database -->
	                                	<?=$this->load->view('modules/tnd_thuegianrao2/index')?>
	                            </div>
    <?php
    $this->db->where('id',"60");
    $query = $this->db->get('danhmuc');
    $item = $query->result();?>
    <?php foreach($item as $cm):?>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="<?php echo base_url();?>tintuc/chuyen-muc/<?php echo $cm->id;?>/<?php echo $cm->alias.duoi();?>"><font
                                    style="color: #FFFFFF"><strong><?php echo $cm->ten?></strong></font></a></div>
<?php endforeach;?>
									<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
	                                height: auto !important; height: 700px">
	                                <!-- Load cay canh phoi tu database -->
	                                	<?=$this->load->view('modules/tnd_thuegianrao3/index')?>
	                            </div>
                            </div>
<!-- Bang thong ke -->
                        <div style="width: 180px; padding-left: 0px; float: left; margin-top: 10px; margin-bottom:10px">
                            <div style="width: 179px; border: 1px #0088f4 solid; float: left">
                                <div style="padding: 5px; float: left; width: 175px; text-align: center">
                                    <strong>THỐNG KÊ</strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Tin rao: <?php echo $numTinRao;?></strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Số lượng bài viết: <?php echo $numBaiViet;?></strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Tổng truy cập: <?php echo $tongtruycap; ?></strong></div>
                            </div>
                        </div>
<!-- Ban do -->
			<div style="width: 180px; padding-left: 0px; float: left; margin-top: 10px; margin-bottom:10px">
						<div style="width: 179px; border: 1px #0088f4 solid; float: left">
                                <div style="padding: 5px; float: left; width: 175px; text-align: center">
                                    <strong>BẢN ĐỒ</strong></div>
						</div>      
				<?php echo $this->load->view("modules/tnd_quangcao/map"); ?>
			</div>
<!-- Quang cao duoi menu trai -->
			<div style="width: 180px; padding-left: 0px; float: left; margin-top: 10px; margin-bottom:10px">
						<div style="width: 179px; border: 1px #0088f4 solid; float: left">
                                <div style="padding: 5px; float: left; width: 175px; text-align: center">
                                    <strong>QUẢNG CÁO</strong></div>
						</div>      
				<?php echo $this->load->view("modules/tnd_quangcao/quangcaoduoimenutrai"); ?> 
			</div>
                            
<!-- Ham tim kiem-->
