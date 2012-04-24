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
<div id="divSearchRe">

		<div class="title"><h1>Công cụ tìm kiếm</h1></div>
		<div class="content">	   
			<div class="tabs">
		<div id="divTab"> </div>
		<div id="divTabRESale" onclick="ShowTab(1);">Nhà đất bán</div>
		<div id="divTabREBorrow" onclick="ShowTab(2);">Nhà đất<br /> cho thuê</div>
		<div id="divTabRESaler" onclick="ShowTab(3);">Tìm môi giới</div>		
	</div>
    <div style="clear:both;">
       <form action="" method="post" id="frmSearchProduct" name="frmSearchProduct">
        <div id="divOfSeach">
            <div id="searchArea">
                <ul>
                    <li>
                        <span id="listCategoryRe">
                            <select class="inputbox-blue" id="cboTypeRe" name="cboTypeRe">
                            <option value="">---Chọn Loại nhà đất---</option>
							<option value="0">Cho thuê nhà xưởng</option>
                            <option value="1">Bán nhà xưởng</option>
                            <option value="2">Hợp tác kinh doanh</option>
                            <option value="2">Cho thuê đất</option>
                            <option value="2">Cho thuê</option>
</select>
                        </span>
                    </li>
                    <li>
                        <span id="listCity">
                            <select class="inputbox-blue" id="cboCity" name="cboCity">
                            	<option value="">---Chọn Tỉnh-Thành phố---</option>
								<?foreach($listtp as $rs):?>
                            		<option value="<?=$rs->idthanhpho?>"><?=$rs->ten?></option>
                            	<?endforeach;?> 
							</select>
                        </span>
                    </li>
                    <li>
                        <span id="listDistrict">
                            <select class="inputbox-blue" id="cboDistrict" name="cboDistrict"><option value="">---Chọn Quận/Huyện---</option>
</select>
                        </span>
                    </li>
                    <li>
                        <span>
                            <select class="inputbox-blue" id="cboArea" name="cboArea" onchange="SearchCount();">
								<option value="">---Chọn Diện tích---</option>
								<option value="0">Không xác định</option>
								<option value="1">&le; 30 m2</option>
								<option value="2">30-50 m2</option>
								<option value="3">50-80 m2</option>
								<option value="4">80-100 m2</option>
								<option value="5">100-150 m2</option>
								<option value="6">150-200 m2</option>
								<option value="7">200-250 m2</option>
								<option value="8">250-300 m2</option>
								<option value="9">300-500 m2</option>
								<option value="10">&ge;500 m2</option>
</select>
                        </span>
                    </li>
                    <li>
                        <span id="divPrice">
                            <select class="inputbox-blue" id="cboPrice" name="cboPrice"><option value="">---Chọn mức giá---</option>
</select>
                        </span>
                    </li>                   
                    <li class="adv-search" style="display:none">
                        <span> 
                        <select class="inputbox-blue" id="cboBedRoom" name="cboBedRoom" onchange="SearchCount();">
                        <option value="">---Chọn số phòng---</option>
						<option value="0">Không xác định</option>
						<option value="1">1+</option>
						<option value="2">2+</option>
						<option value="3">3+</option>
						<option value="4">4+</option>
						<option value="5">5+</option>
						</select> 
						</span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span>
                        <select class="inputbox-blue" id="cboHomeDirection" name="cboHomeDirection" onchange="SearchCount();">
	                        <option value="">---Chọn hướng nhà---</option>
							<option value="0">Không xác định</option>
							<option value="1">Đông</option>
							<option value="2">Tây</option>
							<option value="3">Nam</option>
							<option value="4">Bắc</option>
							<option value="5">Đông-Bắc</option>
							<option value="6">Tây-Bắc</option>
							<option value="7">Tây-Nam</option>
							<option value="8">đông-Nam</option>
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
							onmouseout="this.src='<?php echo base_url();?>images/bdscomvn/before.png'/*tpa=http://media.batdongsan.com.vn/images/tab/before.png*/" onclick="this.frmBrokerSearch.submit();" /></div>   
					<div class="lay-clear"></div>
				</div>
				</form>
        </div>
    </div>
    </div>
</div>
