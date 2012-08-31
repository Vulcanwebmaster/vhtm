<div id="header"><div class="headerCnt">
    	<div id="bannerMenu">
        	<div class="banner1"><img src="<?php echo base_url();?>assets/thoitrang/images/404.gif" /></div>
            <div class="banner2"><img src="<?php echo base_url();?>assets/thoitrang/images/404.gif"  /></div>
            <div class="banner3"><a href=""><img src="<?php echo base_url();?>assets/thoitrang/images/1149_1_BN_270x16_Saldi_VL_EN.jpg" /></a></div>
            <div class="banner4"><img src="<?php echo base_url();?>assets/thoitrang/images/404.gif" /></div><div class="clear"><!----></div>
        </div>
        <div id="hdMain">
        	<div class="logoTop"><a id="logoContainer" href="" style="cursor:default;"><h1>Valentino</h1></a></div>
            <div class="switchSeason"><ul><li><span class="mainSeason">XUÂN / HÈ 2012</span></li></ul></div>
            <div class="switchGender"><ul><li><span class="selGender">PHỤ NỮ</span></li><li>
						 // 
						<a class="notSelGender" href="">NAM</a></li></ul></div>
           <div id="cntTop" class="right">
           		<div id="userBar">
                	<div id="login">
                    	<ul class="notLogged">
                            <li class="last"><a href="">Chăm sóc khách hàng</a></li>
                       	</ul>
                    </div><!---->
                </div>
           </div>
           <div id="containerNewsletter" class="right">
           	<div id="newsletter"><span>Thư mới:</span><input id="newsletterInput" type="text" value="e-mail của bạn" /><a id="newsletterSubmit"></a></div>
				<script type="text/javascript">
                    var jsinit_newsletter = {
                    "defaultText": "Insert your e-mail",
                    "invalidEmail": "Please insert a correct e-mail address"
                    }
                </script>
            </div>
           </div>
           <div class="mainSections">
           	<div id="mainSectionsInner" class="right">
            	<ul class="navCnt">
                	<li><a id="wishBtn" href="">Mặt hàng ưa thích</a></li>
                </ul>
               </div>
              </div>
             </div>
            </div>
            <!--------------------menu------------------------------>
            <script type="text/javascript" language="javascript">
				$(document).ready(function(){
					$('.subMenu1, .subMenu2, .subMenu3').hide();
					$('#mood').mouseenter(function(){
						$('.subMenu1').slideDown();
						
						});
					$('#mood').mouseleave(function(){
						$('.subMenu1').slideUp();
						});
					$('#pretPorter').mouseenter(function(){
						$('.subMenu2').slideDown();
						
						});
					$('#pretPorter').mouseleave(function(){
						$('.subMenu2').slideUp();
						});
					$('#accessories').mouseenter(function(){
						$('.subMenu3').slideDown();
						
						});
					$('#accessories').mouseleave(function(){
						$('.subMenu3').slideUp();
						});
					});
				
            </script>
            
            <?php 
            	$this->db->where('menu','sản phẩm');
			 	$ds=$this->db->get('n_t_danhmuc');
			 	$list=array();
			 	foreach($ds->result() as $item)
			 	{
			 		$list[]=$item;
			 	}
			 	$ds->free_result();
            	$sanphammenu=$list;
            
            	$this->db->where('menu','phụ kiện');
			 	$ds=$this->db->get('n_t_danhmuc');
			 	$list2=array();
			 	foreach($ds->result() as $item)
			 	{
			 		$list2[]=$item;
			 	}
			 	$ds->free_result();
            	$phukienmenu=$list2;
            ?>
            
            <style>
			<!--
				.subMenu1 a{color:white !important}
			-->
			</style>
            
            <div id="subheader"><div id="subMenu">
            	<ul class="menuNavigation">
                	<li id="mood" class="mpa"><a href="" class="selected"  id="tieudiem">Tiêu điểm</a>
                    	<div id="hl" class="subMenu1">
                        	<a href="<?php echo base_url();?>sanpham/sanphammoi">Sản phẩm mới</a><hr />
                        	<a href="<?php echo base_url();?>sanpham/spyeuthich">Sản phẩm yêu thích</a><hr />
                            <a href="<?php echo base_url();?>sanpham/spnoibat">màu nổi bật, cá tính</a><hr />
                        </div>
                     </li>
                    <li id="pretPorter" class="mpa"><a href="<?php echo base_url();?>sanpham" class="selected" >Sản phẩm</a>
                        <div id="pap" class="subMenu2">
                        	<?php foreach($sanphammenu as $item)
                        	{?>
                        		<a style="color: white" href="<?php echo base_url();?>sanpham/danhmuc/<?php echo $item->id;?>"><?php echo $item->ten;?></a><br /><hr />
                        	<?php }?>
                        </div>
                    </li>
                            <li id="accessories" class="mpa"><a href="" class="selected">Phụ kiện</a>
                            	<div id="pap" class="subMenu3">
                                	<?php foreach($phukienmenu as $item)
		                        	{?>
		                        		<a href="<?php echo base_url();?>sanpham/danhmuc/<?php echo $item->id;?>"><?php echo $item->ten;?></a><br /><hr />
		                        	<?php }?>
                                </div>
                            </li>
                     </ul></li></ul></div></div>
 