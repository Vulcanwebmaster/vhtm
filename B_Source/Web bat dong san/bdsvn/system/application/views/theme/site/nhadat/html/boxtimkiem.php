<?php
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
       <form action="http://batdongsan.com.vn/products/searchproduct" method="post" id="frmSearchProduct" name="frmSearchProduct">
        <div id="divOfSeach">
            <div id="searchArea">
                <ul>
                    <li>
                        <span id="listCategoryRe">
                            <select class="inputbox-blue" id="cboTypeRe" name="cboTypeRe"><option value="">---Chọn Loại nhà đất---</option>
</select>
                        </span>
                    </li>
                    <li>
                        <span id="listCity">
                            <select class="inputbox-blue" id="cboCity" name="cboCity"><option value="">---Chọn Tỉnh-Thành phố---</option>
								<option value="SG">Tp.HCM</option>
								<option value="HN">Hà Nội</option>
								<option value="BD">Bình Dương</option>
								<option value="DDN">Đà Nẵng</option>
								<option value="HP">Hải Phòng</option>
								<option value="DNA">Đồng Nai</option>
								<option value="AG">An Giang</option>
								<option value="VT">Bà Rịa Vũng Tàu</option>
								<option value="BG">Bắc Giang</option>
								<option value="BK">Bắc Kạn</option>
								<option value="BL">Bạc Liêu</option>
								<option value="BN">Bắc Ninh</option>
								<option value="BTR">Bến Tre</option>
								<option value="BDD">Bình Định</option>
								<option value="BP">Bình Phước</option>
								<option value="BTH">Bình Thuận  </option>
								<option value="CM">Cà Mau</option>
								<option value="CT">Cần Thơ</option>
								<option value="CB">Cao Bằng</option>
								<option value="DDL">Đắk Lắk</option>
								<option value="DNO">Đắk Nông</option>
								<option value="DDB">Điện Biên</option>
								<option value="DDT">Đồng Tháp</option>
								<option value="GL">Gia Lai</option>
								<option value="HG">Hà Giang</option>
								<option value="HNA">Hà Nam</option>
								<option value="HT">Hà Tĩnh</option>
								<option value="HD">Hải Dương</option>
								<option value="HGI">Hậu Giang</option>
								<option value="HB">Hòa Bình</option>
								<option value="HY">Hưng Yên</option>
								<option value="KH">Khánh Hòa</option>
								<option value="KG">Kiên Giang</option>
								<option value="KT">Kon Tum</option>
								<option value="LCH">Lai Châu</option>
								<option value="LDD">Lâm Đồng</option>
								<option value="LS">Lạng Sơn</option>
								<option value="LCA">Lào Cai</option>
								<option value="LA">Long An</option>
								<option value="NDD">Nam Định</option>
								<option value="NA">Nghệ An</option>
								<option value="NB">Ninh Bình</option>
								<option value="NT">Ninh Thuận</option>
								<option value="PT">Phú Thọ</option>
								<option value="PY">Phú Yên</option>
								<option value="QB">Quảng Bình</option>
								<option value="QNA">Quảng Nam</option>
								<option value="QNG">Quảng Ngãi</option>
								<option value="QNI">Quảng Ninh</option>
								<option value="QT">Quảng Trị</option>
								<option value="ST">Sóc Trăng</option>
								<option value="SL">Sơn La</option>
								<option value="TNI">Tây Ninh</option>
								<option value="TB">Thái Bình</option>
								<option value="TN">Thái Nguyên</option>
								<option value="TH">Thanh Hóa</option>
								<option value="TTH">Thừa Thiên Huế</option>
								<option value="TG">Tiền Giang</option>
								<option value="TV">Trà Vinh</option>
								<option value="TQ">Tuyên Quang</option>
								<option value="VL">Vĩnh Long</option>
								<option value="VP">Vĩnh Phúc</option>
								<option value="YB">Yên Bái</option>
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
                            <select class="inputbox-blue" id="cboArea" name="cboArea" onchange="SearchCount();"><option value="">---Chọn Diện tích---</option>
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
                        <span> <select class="inputbox-blue" id="cboBedRoom" name="cboBedRoom" onchange="SearchCount();"><option value="">---Chọn số phòng---</option>
<option value="0">Không xác định</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
</select> </span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span><select class="inputbox-blue" id="cboHomeDirection" name="cboHomeDirection" onchange="SearchCount();"><option value="">---Chọn hướng nhà---</option>
<option value="0">Không xác định</option>
<option value="1">Đông</option>
<option value="2">Tây</option>
<option value="3">Nam</option>
<option value="4">Bắc</option>
<option value="5">Đông-Bắc</option>
<option value="6">Tây-Bắc</option>
<option value="7">Tây-Nam</option>
<option value="8">đông-Nam</option>
</select></span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span id="listProj"><select class="inputbox-blue" id="cboListProj" name="cboListProj" onchange="SearchCount();"><option value="">---Chọn dự án bất động sản---</option>
</select></span>
                    </li>
                    </ul>	                   
                      </div>                                           
                      <div class="btn"><input type="image" src="<?php echo base_url();?>images/bdscomvn/before.png" onmouseover="this.src='<?php echo base_url();?>images/bdscomvn/after.png'" 
						onmouseout="this.src='<?php echo base_url();?>images/bdscomvn/before.png'/*tpa=http://media.batdongsan.com.vn/images/tab/before.png*/" onclick="this.frmSearchProduct.submit();" /></div>
                   
                    <div id="divLabelSearchAdv"><label id="lblSearch" onclick="DisplaySearchAdvance('divSearchAdvan','divLabelSearchAdv');" class="divLabelSearch" style="width:345px;text-align:right" >Tìm kiếm nâng cao</label></div>
                    <div style="display:none">
                        <span>
                            <select class="inputbox-blue" id="cboCategory" name="cboCategory"><option value="">---Chọn loại tin rao---</option>
<option selected="selected" value="38">Nhà đất bán</option>
<option value="49">Nhà đất cho thuê</option>
</select>
                        </span>
                   </div>
                   <div class="text">
                   Có <span>3000</span> tin mới mỗi ngày
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
								<select class="inputbox-blue" id="cmbCity" name="cmbCity"><option value="">--Chọn Tỉnh / Thành phố--</option>
									<option value="SG">Tp.HCM</option>
									<option value="HN">Hà Nội</option>
									<option value="BD">Bình Dương</option>
									<option value="DDN">đà Nẵng</option>
									<option value="HP">Hải Phòng</option>
									<option value="DNA">đồng Nai</option>
									<option value="AG">An Giang</option>
									<option value="VT">Bà Rịa Vũng Tàu</option>
									<option value="BG">Bắc Giang</option>
									<option value="BK">Bắc Kạn</option>
									<option value="BL">Bạc Liêu</option>
									<option value="BN">Bắc Ninh</option>
									<option value="BTR">Bến Tre</option>
									<option value="BDD">Bình định</option>
									<option value="BP">Bình Phước</option>
									<option value="BTH">Bình Thuận  </option>
									<option value="CM">Cà Mau</option>
									<option value="CT">Cần Thơ</option>
									<option value="CB">Cao Bằng</option>
									<option value="DDL">đắk Lắk</option>
									<option value="DNO">đắk Nông</option>
									<option value="DDB">điện Biên</option>
									<option value="DDT">đồng Tháp</option>
									<option value="GL">Gia Lai</option>
									<option value="HG">Hà Giang</option>
									<option value="HNA">Hà Nam</option>
									<option value="HT">Hà Tĩnh</option>
									<option value="HD">Hải Dương</option>
									<option value="HGI">Hậu Giang</option>
									<option value="HB">Hòa Bình</option>
									<option value="HY">Hưng Yên</option>
									<option value="KH">Khánh Hòa</option>
									<option value="KG">Kiên Giang</option>
									<option value="KT">Kon Tum</option>
									<option value="LCH">Lai Châu</option>
									<option value="LDD">Lâm đồng</option>
									<option value="LS">Lạng Sơn</option>
									<option value="LCA">Lào Cai</option>
									<option value="LA">Long An</option>
									<option value="NDD">Nam định</option>
									<option value="NA">Nghệ An</option>
									<option value="NB">Ninh Bình</option>
									<option value="NT">Ninh Thuận</option>
									<option value="PT">Phú Thọ</option>
									<option value="PY">Phú Yên</option>
									<option value="QB">Quảng Bình</option>
									<option value="QNA">Quảng Nam</option>
									<option value="QNG">Quảng Ngãi</option>
									<option value="QNI">Quảng Ninh</option>
									<option value="QT">Quảng Trị</option>
									<option value="ST">Sóc Trăng</option>
									<option value="SL">Sơn La</option>
									<option value="TNI">Tây Ninh</option>
									<option value="TB">Thái Bình</option>
									<option value="TN">Thái Nguyên</option>
									<option value="TH">Thanh Hóa</option>
									<option value="TTH">Thừa Thiên Huế</option>
									<option value="TG">Tiền Giang</option>
									<option value="TV">Trà Vinh</option>
									<option value="TQ">Tuyên Quang</option>
									<option value="VL">Vĩnh Long</option>
									<option value="VP">Vĩnh Phúc</option>
									<option value="YB">Yên Bái</option>
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
