     <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class="slogan top-1">
        	<p>Chúng tôi <span class="clr-1">cung cấp</span> cho bạn <span class="clr-1">những</span>  dịch vụ <span class="clr-1">tốt nhất</span></p>
            <p>Làm hài lòng quý vị là phương châm hoạt động của chúng tôi.</p>
        </div>
        <div class="page3-row1">
           <h2><span class="clr-1">Đ</span>ối tác của Tường Nhật</h2>
           	<div class="my-page3-col-1 border-right">
           		<div class="my-box-4">
                	<strong class="number2">01.</strong>
                    <div class="extra-wrap">
                        <p class="text-4">Đối tác thương mại thời trang</p>
                        
                        <?php 
                        	if(isset($thoitrang))
							{
                        		foreach($thoitrang as $tt)
                        		{
                        ?>
	                      	<div id="div-img"><?php echo $tt->hinhanh; ?><p id="ks"><?php echo $tt->ten;?></p></div>                        
                        <?php 
							}
								}
							
						?> 
						    
                    </div>
                </div>
               
           </div>
           <div class="my-page3-col-1 border-right">
           		<div class="my-box-4">
                	<strong class="number2">02.</strong>
                    <div class="extra-wrap">
                        <p class="text-4">Đối tác thương mại bakery</p>
                        <?php 
                        	if(isset($bakery))
							{
                        		foreach($bakery as $bk)
                        		{
                        ?>
	                      	<div id="div-img"><?php echo $bk->hinhanh; ?><p id="ks"><?php echo $bk->ten; ?></p></div>                        
                        <?php 
							}
								}
							
						?> 
                    </div>
                </div>
              
           </div>
           <div class="my-page3-col-1 last">
           		<div class="my-box-4">
                	<strong class="number2">03.</strong>
                    <div class="extra-wrap">
                        <p class="text-4">Đối tác du học</p>
                        <?php 
                        	if(isset($duhoc))
							{
                        		foreach($duhoc as $dh)
                        		{
                        ?>
	                      	<div id="div-img"><?php echo $dh->hinhanh; ?><p id="ks"><?php echo $dh->ten; ?></p></div>                       
                        <?php 
							}
								}
							
						?>
                                              
                    </div>
                </div>
               
           </div>
        </div>
        <?php $this->load->view('front/bottom-content');?>
    </section> 
</div>       
</div> 
<!--==============================aside=================================-->
  <aside>
  	
  </aside>
