<?php
  $this->CI = get_instance();
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',2);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listnha = $query->result();
 
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',3);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listdat = $query->result();

  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',1);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listbt = $query->result();
     
  $this->db->where('idquan',5);
  $query = $this->db->get('thanhpho');
  $thanhpho = $query->result();
?>
<?
$this->CI->db->where('parentid <>',0);
$this->CI->db->order_by('danhmuc','ASC');
$query = $this->CI->db->get('nhadat_dm');
$listdm = $query->result();

$query = $this->CI->db->get('huong');
$listhuong = $query->result();

$this->CI->db->where('idquan',0);
$query = $this->CI->db->get('thanhpho');
$listtp = $query->result();
?>
<?=form_open(base_url().'nhadat/timkiem')?> 
<div id="divSearchRe">

		<div class="title"><h1>Công cụ tìm kiếm</h1></div>
		<div class="content">
    <div style="clear:both;">
       <form action="" method="post" id="frmSearchProduct" name="frmSearchProduct">
        <div id="divOfSeach">
            <div id="searchArea">
                <ul>
                    <li>
                        <span id="listCategoryRe">
                            <select class="inputbox-blue" name="nhucau" id="nhucau">
                            <option value="0">---Chọn loại tin---</option>
                            <option value="1">Cần bán</option>
                            <option value="2">Cần mua</option>
                            <option value="2">Cần thuê</option>
                            <option value="2">Cho thuê</option>
							</select>
                        </span>
                    </li>
					<li>
                        <span id="listCategoryRe">
                            <select class="inputbox-blue" name="sectionid" id="sectionid">
                            <option value="0">---Chọn danh mục---</option>
							<?foreach($listdm as $rs):?>
                            	<option value="<?=$rs->iddm?>"><?=$rs->danhmuc?></option>
                            <?endforeach;?>
							</select>
                        </span>
                    </li>
                    <li>
                        <span id="listCity">
                            <select class="inputbox-blue" name="id_thanhpho" id="id_thanhpho">
                            	<option value="0">---Chọn Tỉnh-Thành phố---</option>
								<?foreach($listtp as $rs):?>
                            		<option value="<?=$rs->idthanhpho?>"><?=$rs->ten?></option>
                            	<?endforeach;?> 
							</select>
                        </span>
                    </li>
                    <li>
                        <span id="listDistrict">
                            <select class="inputbox-blue" name="giatu" id="giatu">
                            	<option value="0">---Chọn giá từ---</option>
								<option value="1000000"> &nbsp;&nbsp; 1 triệu</option>
	                            <option value="5000000"> &nbsp;&nbsp; 5 triệu</option>
	                            <option value="10000000"> &nbsp;10 triệu</option>
	                            <option value="15000000"> &nbsp;15 triệu</option>
	                            <option value="20000000"> &nbsp;20 triệu</option>
	                            <option value="40000000"> &nbsp;40 triệu</option>
	                            <option value="50000000"> &nbsp;50 triệu</option>
	                            <option value="100000000">100 triệu</option>
	                            <option value="200000000">200 triệu</option>
	                            <option value="500000000">500 triệu</option>
	                            <option value="1000000000"> &nbsp;1 tỷ</option>
	                            <option value="2000000000"> &nbsp;2 tỷ</option>
	                            <option value="3000000000"> &nbsp;3 tỷ</option>
	                            <option value="4000000000"> &nbsp;4 tỷ</option>
	                            <option value="5000000000"> &nbsp;5 tỷ</option>
	                            <option value="6000000000"> &nbsp;6 tỷ</option>
	                            <option value="7000000000"> &nbsp;7 tỷ</option>
	                            <option value="8000000000"> &nbsp;8 tỷ</option>
	                            <option value="9000000000"> &nbsp;9 tỷ</option>
	                            <option value="10000000000">10 tỷ</option>
	                            <option value="30000000000">30 tỷ</option>
							</select>
                        </span>
                    </li>
                    <li>
                        <span>
                            <select class="inputbox-blue" name="giaden" id="giaden">
								<option value="0">---Đến giá---</option>
	                            <option value="1000000"> &nbsp;&nbsp; 1 triệu</option>
	                            <option value="5000000"> &nbsp;&nbsp; 5 triệu</option>
	                            <option value="10000000"> &nbsp;10 triệu</option>
	                            <option value="15000000"> &nbsp;15 triệu</option>
	                            <option value="20000000"> &nbsp;20 triệu</option>
	                            <option value="40000000"> &nbsp;40 triệu</option>
	                            <option value="50000000"> &nbsp;50 triệu</option>
	                            <option value="100000000">100 triệu</option>
	                            <option value="200000000">200 triệu</option>
	                            <option value="500000000">500 triệu</option>
	                            <option value="1000000000"> &nbsp;1 tỷ</option>
	                            <option value="2000000000"> &nbsp;2 tỷ</option>
	                            <option value="3000000000"> &nbsp;3 tỷ</option>
	                            <option value="4000000000"> &nbsp;4 tỷ</option>
	                            <option value="5000000000"> &nbsp;5 tỷ</option>
	                            <option value="6000000000"> &nbsp;6 tỷ</option>
	                            <option value="7000000000"> &nbsp;7 tỷ</option>
	                            <option value="8000000000"> &nbsp;8 tỷ</option>
	                            <option value="9000000000"> &nbsp;9 tỷ</option>
	                            <option value="10000000000">10 tỷ</option>
	                            <option value="30000000000">30 tỷ</option>
								</select>
                        </span>
                    </li>
                    <li>
                        <span id="divPrice">
                            <select class="inputbox-blue" name="idhuong" id="idhuong">
                            	<option value="0">---Chọn hướng nhà---</option>
								<?foreach($listhuong as $rs):?>
									<option value="<?=$rs->idhuong?>"><?=$rs->tenhuong?></option>
								<?endforeach;?>
							</select>
                        </span>
                    </li>                   
                    <li class="adv-search" style="display:none">
                        <span> 
                        <select class="inputbox-blue" id="cboBedRoom" name="cboBedRoom" onchange="SearchCount();">
						</select> 
						</span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span>
                        <select class="inputbox-blue" id="cboHomeDirection" name="cboHomeDirection" onchange="SearchCount();">
	                        <option value="0">---Chọn hướng nhà---</option>

						</select>
						</span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span id="listProj"><select class="inputbox-blue" id="cboListProj" name="cboListProj" onchange="SearchCount();"><option value="">---Chọn dự án bất động sản---</option>
</select></span>
                    </li>
                    </ul>	                   
                      </div>                                           
                      <div class="btn"><input type="image" src="<?php echo base_url();?>images/bdscomvn/before.png" onmouseover="this.src='<?php echo base_url();?>images/bdscomvn/after.png'" 
						onmouseout="this.src='<?php echo base_url();?>images/bdscomvn/before.png'/*tpa=http://media.batdongsan.com.vn/images/tab/before.png*/" onclick="this.frmSearchProduct.submit();" /></div>
                    <div style="display:none">
                        <span>
                            <select class="inputbox-blue" id="cboCategory" name="cboCategory"><option value="">---Chọn loại tin rao---</option>
<option selected="selected" value="38">Nhà đất bán</option>
<option value="49">Nhà đất cho thuê</option>
</select>
                        </span>
                   </div>
                   <div class="text">
               </div> 
           
        </div>
        </form>       
		  
        <div id="divReSaler" style="display:none">   
            <form id="frmBrokerSearch" action="http://batdongsan.com.vn/broker/index" name="frmBrokerSearch"
				method="post" enctype="multipart/form-data">
				<div id="brokersearch">
					<ul>						
						<!-- Combo box Chọn chuyên mục -->
						<li>
							<span>
								<select class="inputbox-blue" id="cmbCategory" name="cmbCategory"><option value="">--Chọn giao dịch--</option>
<option value="38">Nhà đất bán</option>
<option value="49">Nhà đất cho thuê</option>
</select>
							</span></li>
						<!-- Combo box chọn Loại bất động sản -->
						<li>
							<span id="listTypeBDS">
								<select class="inputbox-blue" id="cmbTypeBDS" name="cmbTypeBDS"><option value="">--Chọn Loại nhà đất--</option>
</select></span>
						</li>
						<!-- Combo box chọn Tỉnh thành phố -->
						<li>
							<span>
								<select class="inputbox-blue" id="cmbCity" name="cmbCity">
								<option value="">--Chọn Tỉnh / Thành phố--</option>
                				<?foreach($thanhpho as $tp):?>
									<option value="<?=$tp->idthanhpho?>"><?=$tp->ten?></option>
                				<?endforeach;?>
								</select>
							</span></li>
						<!-- Combo box chọn Quận huyện -->
						<li>
							<span id="divListDistrict">
								<select class="inputbox-blue" id="cmbDistrict" name="cmbDistrict"><option value="">--Chọn Quận / Huyện--</option>
								</select></span>
						</li>
						<!-- Combo box chọn Dự án -->
						<li>
							<span id="divListProject">
								<select class="inputbox-blue" id="cmbProject" name="cmbProject"><option value="">--Chọn Dự án--</option>
								</select></span>
						</li>
						<!-- Text box nhập keyword cho nhà môi giới -->
						<li class="tempHide">
							<span>
								<input type="text" name="txtBrokerName" id="txtBrokerName" value="" class="inputbox-blue" style="width:195px;" /></span>
						</li>	
					</ul>
					<div class="btn">
						<input type="image" src="<?php echo base_url();?>images/bdscomvn/before.png" onmouseover="this.src='<?php echo base_url();?>after.png'" 
							onmouseout="this.src='<?php echo base_url();?>images/bdscomvn/before.png'" onclick="timkiem()" name="search" /></div>   
					<div class="lay-clear"></div>
				</div>
				</form>
        </div>
    </div>
    </div>
</div>
<?=form_close();?>
<script type="text/javascript">
function timkiem()
{ 
    var nhucau=$("#nhucau").val();
    var sectionid=$("#sectionid").val();
    var giatu=$("#giatu").val();
    var giaden=$("#giaden").val();
    var id_thanhpho=$("#id_thanhpho").val();
    var idhuong=$("#idhuong").val();
    var page_no ='0';
    $.post("<?=base_url()?>nhadat/timkiem/",{'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                //if (data!='')
                $("#nhadat").html(data);
            }); 
}

</script>