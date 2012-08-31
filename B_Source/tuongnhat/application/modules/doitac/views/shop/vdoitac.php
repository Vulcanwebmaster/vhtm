     <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class="slogan top-1">
        	<p>Chúng tôi <span class="clr-1">cung cấp</span> cho bạn <span class="clr-1">những</span>  dịch vụ <span class="clr-1">tốt nhất</span></p>
            <p>Làm hài lòng quý vị là phương châm hoạt động của chúng tôi.</p>
        </div>
        <div class="page3-row1">
           <h2><span class="clr-1">Đ</span>ối tác của Tường Nhật</h2>
           	<div class="page3-col-1 border-right">
           		<div class="box-4">
                	<strong class="number2">01.</strong>
                    <div class="extra-wrap">
                        <span class="text-4">Đối tác thương mại thời trang</span>
                        
                        <?php 
                        	if(isset($thoitrang))
							{
                        		foreach($thoitrang as $tt)
                        		{
                        ?>
	                      	<div id="div-img"><div class="avatar"><?php echo $tt->hinhanh; ?></div><p id="ks"><?php echo $tt->ten;?></p></div>                        
                        <?php 
							}
								}
							
						?> 
						    
                    </div>
                </div>
               
           </div>
          
           <div class="page3-col-1 border-right">
           		<div class="box-4">
                	<strong class="number2">02.</strong>
                    <div class="extra-wrap">
                        <span class="text-4">Đối tác thương mại bakery</span>
                        <?php 
                        	if(isset($bakery))
							{
                        		foreach($bakery as $bk)
                        		{
                        ?>
	                      	<div id="div-img"><div class="avatar"><?php echo $bk->hinhanh; ?></div><p id="ks"><?php echo $bk->ten; ?></p></div>                        
                        <?php 
							}
								}
							
						?> 
                    </div>
                </div>
              
           </div>
            
           <div class="page3-col-1 last">
           		<div class="box-4">
                	<strong class="number2">03.</strong>
                    <div class="extra-wrap">
                        <span class="text-4">Đối tác du học</span>
                        <?php 
                        	if(isset($duhoc))
							{
                        		foreach($duhoc as $dh)
                        		{
                        ?>
	                      	<div id="div-img"><div class="avatar"><?php echo $dh->hinhanh; ?></div><p id="ks"><?php echo $dh->ten; ?></p></div>                       
                        <?php 
							}
								}
							
						?>
                                              
                    </div>
                </div>
               
           </div>
        </div>
        <div class="wrap page1-row2">				
				<div class="wrap">
				  <div class="aside-col-1 border-right-2">
						<h3><span class="clr-1">Đ</span>ăng ký:</h3>
						<form id="form-search" method="post">
						  <span>Nhập địa chỉ email:</span>
						  <input type="text" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  />
						  <a href="#" onClick="document.getElementById('form-search').submit()" class="link-2">Đăng ký</a>
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
							<a href="#"><img src="../images/icon-1.png" alt=""></a>
							<a href="#"><img src="../images/icon-2.png" alt=""></a>
							<a href="#"><img src="../images/icon-3.png" alt=""></a>
						</div>
					</div>  
				</div>
			</div>
    </section> 
</div>       
</div> 
<!--==============================aside=================================-->
  <aside>
  	
  </aside>
