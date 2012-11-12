<?php function cutString($str,$limit)
{
	$final_limit=0;
	if ($str[$limit]!=' ')
		while ($str[$limit]!=' ')
			$limit++;
	return substr($str,0, $limit);
}?>

<div id="right">
                	<div class="bodermove">
                    	<h4 class="title3"  style=" margin-bottom: 4px;"><?php echo $this->lang->line('right-lienhe');?></h4>
                        <div class="support">   
		                        <?php foreach ($list_hotro as $hotro)
		                	 	{ ?>
		                	 		   <p><?php echo $hotro->sdt;?></p>
		                	 		   <a href="ymsgr:sendim?<?php echo $hotro->yahoo;?>">        		
			                            <img src="http://opi.yahoo.com/online?u=inox5saoviet_hotro02&amp;m=g&amp;t=2&amp;l=us" width="63" height="16"/>
			                           </a>
			                           <a href="skype:<?php echo $hotro->skype;?>?call">
			                           	<img src="<?php echo base_url();?>assets/5sao/images/skype.jpg" height="20" width="75"/>
			                           </a>
		                	 	<?php }?>   
                        </div>
						<div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                    </div>
                  <div class="bodermove">
<h4 class="title3" ><?php echo $this->lang->line('right-tintuc');?></h4>
                    <!--<marquee direction="down" scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">&nbsp-->
                    	<marquee direction="down" width="100%" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="280" align="left">
                      	<ul class="brands">
                      		<?php for ($i=0;$i<count($list_tintuc_right); $i++)
                      		{
                      			if ($lang=="vn") $tieude=$list_tintuc_right[$i]->tieude_v;
                      			else $tieude=$list_tintuc_right[$i]->tieude_e.'...';
                      			?>
                      				<li class="color">
                      					<a href="<?php echo base_url().'/tintuc/detail/'.$list_tintuc_right[$i]->id?>">
                      						<p><?php echo $tieude;?></p>
                      						<i>
                      						<?php if ($lang=="vn") echo cutString(strip_tags($list_tintuc_right[$i]->noidung_v),100).'...';
                      							else echo cutString(strip_tags($list_tintuc_right[$i]->noidung_e),100).'...'?>
                      						</i>
                      					</a>
                      				</li>
                      			<?php 
                      		}?>                      	
                    </marquee>	
                   <!-- <div style="width:80%; float:left;padding:8px 17px;">
                    <marquee direction="down" width="100%" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="280" align="left"> 
         <table cellspacing="0" cellpadding="0" border="0" width="100%"> 
        <tbody><tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Gioi-thieu/Gioi-thieu-chung/GIOI-THIEU-VE-CONG-TY-CPTB-NAM-SAO-VIET-6/" title="GIỚI THIỆU VỀ CÔNG TY CPTB NĂM SAO VIỆT">GIỚI THIỆU VỀ CÔNG TY CPTB NĂM SAO VIỆT</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Gioi-thieu/Gioi-thieu-chung/GIOI-THIEU-VE-CONG-TY-CPTB-NAM-SAO-VIET-6/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/548407379_logo.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/MOT-SO-DU-AN-DA-VA-DANG-TRIEN-KHAI/" title="MỘT SỐ DỰ ÁN ĐÃ VÀ ĐANG TRIỂN KHAI">MỘT SỐ DỰ ÁN ĐÃ VÀ ĐANG TRIỂN KHAI</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
                </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">    </span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/CACH-CHON-DUNG-CU-NHA-BEP-BANG-INOX/" title="CÁCH CHỌN DỤNG CỤ NHÀ BẾP BẰNG INOX">CÁCH CHỌN DỤNG CỤ NHÀ BẾP BẰNG INOX</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
                </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">   Trên thị trường hiện có khoảng 3.000 mẫu sản phẩm bằng inox với đủ các dụng cụ từ nấu bếp, dùng cho bàn ăn...</span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tuyen-dung-6/CONG-TY-CO-PHAN-THIET-BI-NAM-SAO-VIET-TUYEN-NHAN-VIEN/" title="CÔNG TY CỔ PHẦN THIẾT BỊ NĂM SAO VIỆT TUYỂN NHÂN VIÊN">CÔNG TY CỔ PHẦN THIẾT BỊ NĂM SAO VIỆT TUYỂN...</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
                </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">Công ty Cổ Phần Thiết Bị Năm Sao Việt là một trong những công ty hàng đầu về lĩnh vực tư vấn, thiết kế, sản...</span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Gioi-thieu/Tam-nhin/TAM-NHIN-CHIEN-LUOC-KINH-DOANH-2/" title="TẦM NHÌN &amp; CHIẾN LƯỢC KINH DOANH">TẦM NHÌN &amp; CHIẾN LƯỢC KINH DOANH</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Gioi-thieu/Tam-nhin/TAM-NHIN-CHIEN-LUOC-KINH-DOANH-2/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/671818738_logo.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">Ban lãnh đạo và mỗi nhân viên của Công ty Cổ Phần Thiết Bị Năm Sao Việt thấm nhuần các giá trị, kim chỉ nam cho...</span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Bao-hanh-bao-tri/CHINH-SACH-BAO-HANH-SUA-CHUA-THIET-BI/" title="CHÍNH SÁCH BẢO HÀNH SỬA CHỮA THIẾT BỊ">CHÍNH SÁCH BẢO HÀNH SỬA CHỮA THIẾT BỊ</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
                </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">Trong thời gian sử dụng thiết bị nếu gặp bất kỳ trục trặc kỹ thuật nào qúy khách hàng có thể liên lạc trực...</span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/QUY-DINH-VE-DIEU-KIEN-BAO-DAM-AN-TOAN-THUC-PHAM--5/" title="QUY ĐỊNH VỀ ĐIỀU KIỆN BẢO ĐẢM AN TOÀN THỰC PHẨM ">QUY ĐỊNH VỀ ĐIỀU KIỆN BẢO ĐẢM AN TOÀN...</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
                </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/GIA-CONG-CO-KHI-2/" title="GIA CÔNG CƠ KHÍ">GIA CÔNG CƠ KHÍ</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/GIA-CONG-CO-KHI-2/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/1200671239_123234 copy.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Gioi-thieu/Ho-so-nang-luc/HO-SO-NANG-LUC-4/" title="HỒ SƠ NĂNG LỰC">HỒ SƠ NĂNG LỰC</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Gioi-thieu/Ho-so-nang-luc/HO-SO-NANG-LUC-4/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/2005294854_894698235_logo.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Berjaya-Chat-luong-Da-dang-Tin-cay/" title="Berjaya – Chất lượng – Đa dạng – Tin cậy">Berjaya – Chất lượng – Đa dạng – Tin cậy</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Berjaya-Chat-luong-Da-dang-Tin-cay/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/1854812775_1234.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nguyen-tac-1-chieu-cho-bep-an-cong-nghiep--9/" title="Nguyên tắc 1 chiều cho bếp ăn công nghiệp ">Nguyên tắc 1 chiều cho bếp ăn công nghiệp </a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nguyen-tac-1-chieu-cho-bep-an-cong-nghiep--9/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/42128264_12 copy.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;">Mô hình nhà bếp chuẩn - Nguyên tắc 1 chiều</span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nam-Sao-Viet-Tu-com-uu-viet-/" title="Năm Sao Việt - Tủ cơm ưu việt">Năm Sao Việt - Tủ cơm ưu việt</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nam-Sao-Viet-Tu-com-uu-viet-/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/1455968253_Tu com dien don copy.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Bao-quan-do-dung-inox-bang-cac-nguyen-lieu-tu-thien-nhien-4/" title="Bảo quản đồ dùng inox bằng các nguyên liệu từ thiên nhiên">Bảo quản đồ dùng inox bằng các nguyên liệu...</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Bao-quan-do-dung-inox-bang-cac-nguyen-lieu-tu-thien-nhien-4/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/1485512188_download.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Dieu-kien-an-toan-thuc-pham-doi-voi-nha-hang-khach-san/" title="Điều kiện an toàn thực phẩm đối với nhà hàng, khách sạn">Điều kiện an toàn thực phẩm đối với nhà...</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Dieu-kien-an-toan-thuc-pham-doi-voi-nha-hang-khach-san/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/873970_bep-nha-hang.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Gioi-thieu-Tu-Say-Bat-Dia-thong-minh-5/" title="Giới thiệu Tủ Sấy Bát Đĩa thông minh">Giới thiệu Tủ Sấy Bát Đĩa thông minh</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Gioi-thieu-Tu-Say-Bat-Dia-thong-minh-5/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/1955673739_970151493_tu say bat dia1.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
            <tr><td>
         <div style="padding:10px 0px;">
        	<a style=" font-weight:bold;color:#000; text-align:left; font-size:11px;" href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nam-Sao-Viet-thi-cong-cong-trinh-cau-di-bo-qua-duong-Pham-Ngoc-Thach-Luong-Dinh-Cua/" title="Năm Sao Việt thi công công trình cầu đi bộ qua đường Phạm Ngọc Thạch – Lương Đình Của.">Năm Sao Việt thi công công trình cầu đi bộ qua...</a><br>
        <div style="width:100%; padding:5px 0px; float:left; ">
        <a href="http://5saoviet.com.vn/Tin-tuc-su-kien-2/Tin-tuc-su-kien/Nam-Sao-Viet-thi-cong-cong-trinh-cau-di-bo-qua-duong-Pham-Ngoc-Thach-Luong-Dinh-Cua/" title=""><img class="side_images" style="padding:0px 5px;float:left;" src="/upload/news/873765976_anh 3.jpg" width="163" height="104"></a>        </div>
        <span style=" font-weight: normal; color:#333; text-align:left; font-size:11px; padding-top:8px;"></span>
        </div>
        </td></tr>
                    </tbody></table>
        </marquee>
        </div>-->
                    <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   </div>
                   <div  class="bodermove">
                    <?php if ($_SESSION['lang']=="vn"){?>
                    	<h4 class="title3" style=" padding-top:10px">Thư viện ảnh</h4>
                    <?php } else{ ?>
                    	<h4 class="title3" style=" padding-top:10px">Images</h4>
                    <?php } ?>	
                	
                	<style>
                		.pr-img p img{width:170px !important; height:131px !important}
                	</style>
                	<marquee direction="down" width="100%" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="280" align="left">
                	 <!--<marquee direction="down" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">&nbsp;</marquee>-->
                	 	<?php foreach ($list_thuvienanh as $tva)
                	 	{ ?>
                	 		<div class="pr-img">
                	 			<a href="<?php echo base_url();?>thuvienanh/"><?php echo $tva->file;?></a>
                	 		</div>
                	 	<?php }?>
                    </marquee>
                      <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>          
                	</div>	
				</div>