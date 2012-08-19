</header>
<div id="content">
        <div class="slogan top-1">
        	<p>Chúng tôi <span class="clr-1">cung cấp</span> cho bạn <span class="clr-1">những</span>  dịch vụ <span class="clr-1">tốt nhất</span></p>
            <p>Làm hài lòng quý vị là phương châm hoạt động của chúng tôi.</p>
            
        </div>
        <div class="page5-row1">
            <div class="page5-col-1 border-right">
            	<h2><span class="clr-1">T</span>hông tin liên hệ</h2>
                <dl class="adr">
                    <dt class="clr-1"><strong>Kensington College of Business</strong></dt>
                    <dd><strong>34 Hồng Phúc, Quận Ba Đình Hà Nội, Vietnam</strong></dd>
                    <dd><span>Telephone:</span><strong>(+844) 85868119</strong></dd>
                    <dd><span>Mobiphone:</span><strong>(+84) 0983721368</strong></dd>
                    <dd><span>Fax:</span><strong>(+844) 38284948</strong></dd>
                    <dd><span>Email:</span><a href="#" class="link">Lien@kensingtoncoll.ac.uk</a><br/></dd>
                    <dd style="padding-left:72px;"><a href="#" class="link">kcb2vietnam@gmail.com</a><br/></dd>
                    <dd><span>Website:</span><a href="#" class="link">www.kensingtoncoll.ac.uk/vietnam</a></dd>
                    <dd><img src="<?php echo base_url();?>assets/tuongnhat/images/fc.png"/></dd>
                    
                </dl> 
            </div>
            <div class="page5-col-2">
            	<p style="color:#9eb4be">
            		<?php echo $this->session->userdata('result');?>
				</p>
            	<?php if (validation_errors())
            	{
            		echo '<div>';
            		echo validation_errors('<p style="color:#cf4e47">','</p>');
            		echo '</div>';
            	}?>
            	<h2><span class="clr-1">L</span>iên hệ:</h2>
                <form id="form" method="post" action="<?php echo base_url();?>lienhe/Insert">
                  <fieldset>
                    <label><strong>Tên:</strong><input type="text" value="" name="ten"><strong class="clear"></strong></label>
                    <label><strong>Email:</strong><input type="text" value="" name="email"><strong class="clear"></strong></label>
                    <label><strong>Thông tin:</strong><textarea name="thongtin" id="thongtin"></textarea><strong class="clear"></strong></label>
                    <strong class="clear"></strong>
                    <div class="btns">
                    	<input type="submit" value="Gửi" style="width:auto; height:auto; float:right; text-transform:uppercase; text-decoration:underline; cursor:pointer"/>
                    </div>
                    <div style="margin-top:10px;">Sơ đồ
                    	 <iframe style="float:right" width="460" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=H%E1%BB%93ng+Ph%C3%BAc,+qu%E1%BA%ADn+Ba+%C4%90%C3%ACnh,+H%C3%A0+N%E1%BB%99i,+Vietnam&amp;aq=&amp;sll=21.042044,105.846984&amp;sspn=0.002483,0.005284&amp;ie=UTF8&amp;hq=&amp;hnear=H%E1%BB%93ng+Ph%C3%BAc,+Ba+Dinh+District,+Hanoi,+Vietnam&amp;t=m&amp;ll=21.040687,105.848465&amp;spn=0.016022,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=H%E1%BB%93ng+Ph%C3%BAc,+qu%E1%BA%ADn+Ba+%C4%90%C3%ACnh,+H%C3%A0+N%E1%BB%99i,+Vietnam&amp;aq=&amp;sll=21.042044,105.846984&amp;sspn=0.002483,0.005284&amp;ie=UTF8&amp;hq=&amp;hnear=H%E1%BB%93ng+Ph%C3%BAc,+Ba+Dinh+District,+Hanoi,+Vietnam&amp;t=m&amp;ll=21.040687,105.848465&amp;spn=0.016022,0.039396&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    </div>
                  </fieldset>  
                </form> 
                
            </div> 
           
        </div>
        <div class="wrap page1-row2" style="margin-top:10px;">				
				<div class="wrap">
				  <div class="aside-col-1 border-right-2">
						<h3><span class="clr-1">Đ</span>ăng ký:</h3>
						<form id="form-search" method="post">
						  <span>Nhập địa chỉ email:</span>
						  <input type="text" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  />
						  <a href="#" class="link-2">Đăng ký</a>
						</form>
					</div>
					<div class="aside-col-2 border-right-2">
						<h3><span class="clr-1">L</span>ưu ý:</h3>
						<p>Chúng tôi sẽ gửi thông báo tới hòm thư mà bạn đăng ký. Vì vậy hãy nhập chính xác địa chỉ email vì quyền lợi của bạn. </p>
					</div>  
					<div class="aside-col-3 border-right-2">
						<dl class="adrss">
							<dd><span>ĐT 1:</span><strong>+1 800 559 6580</strong></dd>
							<dd><span>ĐT 2:</span><strong>+1 800 603 6035</strong></dd>
							<dd><span>Fax:</span><strong>+1 800 889 9898</strong></dd>
							<dd><span>E-mail:</span><a href="#" class="link"><strong>hr@niw.com.vn</strong></a></dd>
						</dl> 
						<p><strong>P1902-CT5B-Mễ Trì Thượng-Từ Liêm - Hà Nội</strong></p>
					</div>  
					<div class="aside-col-4">
						<div class="soc-icons">
							<a href="#"><img src="<?php echo base_url();?>assets/tuongnhat/images/icon-1.png" alt=""></a>
							<a href="#"><img src=".<?php echo base_url();?>assets/tuongnhat/images/icon-2.png" alt=""></a>
							<a href="#"><img src="<?php echo base_url();?>assets/tuongnhat/images/icon-3.png" alt=""></a>
						</div>
					</div>  
				</div>
			</div>
    </div> 