
    <tr>
        <td width="76%" height="80" align="left" valign="top" bgcolor="#FFFFFF" style="padding-left: 20px;">
            <img src="<?php echo base_url();?>assets/duhoc/images/logo.png" />
        </td>
        <td width="24%" align="center" valign="middle" bgcolor="#FFFFFF">
            <br />
            <br />
            <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="23px" width="10%" align="left" valign="middle">
                        <div class="moduletable">
                            <p>
                                <a>
                                    <img src="<?php echo base_url();?>assets/duhoc/images/facebook2jpg.jpg" tppabs="images/facebook2jpg.jpg" _mce_src="<?php echo base_url();?>assets/duhoc/images/facebook.png"
                                        tppabs="images/facebook.png" alt="alt" style="width: 26px; height: 25px;" /></a>
                                <img src="<?php echo base_url();?>assets/duhoc/images/white.jpg" tppabs="images/stories/kensington/white.jpg" _mce_src="white-1.jpg"
                                    tppabs="images/white.jpg" alt="alt" style="width: 17px; height: 26px;" /><a><img
                                        style="width: 26px; height: 27px;" src="<?php echo base_url();?>assets/duhoc/images/images_twitter.PNG" tppabs="images/stories/kensington/images_twitter.PNG"
                                        alt="" /></a></p>
                            <p>
                                &nbsp;</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="23px" width="193px" align="left" valign="middle">
                        <div class="moduletable-mystyle">
                            <form action="index.php" method="post">
                            <div>
                                <input name="searchword" id="mod_search_searchword" maxlength="20" alt="Go" class="inputbox-mystyle"
                                    type="text" size="20" value="search..." onblur="if(this.value=='') this.value='search...';"
                                    onfocus="if(this.value=='search...') this.value='';" />&nbsp;<input type="image"
                                        value="Go" class="button-mystyle" src="<?php echo base_url();?>assets/duhoc/images/searchButton.gif" tppabs="images/searchButton.gif"
                                        align="absmiddle" onclick="this.form.searchword.focus();" />
                            </div>
                            <input type="hidden" name="task" value="search" />
                            <input type="hidden" name="option" value="com_search" />
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="35" colspan="2" align="left" valign="top" style="background-repeat: repeat; background:url('<?php echo base_url();?>assets/duhoc/images/menu_bg.jpg')">
            <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="35" align="left" valign="middle">
                        <!-- Begin menu -->
                        <div id="jaframeid" style="position: absolute; top: 1px; left: 1px; height: 0px;
                            width: 0px; overflow: hidden">
                            <a href="">
                                <h1>
                                    Transmenu powered by JoomlArt.com - Mambo Joomla Professional Templates Club</h1>
                            </a>
                        </div>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/duhoc/css/transmenuh.css" tppabs="css/transmenuh.css" />
                        <script language="javascript" src="<?php echo base_url();?>assets/duhoc/js/transmenu.js" tppabs="js/transmenu.js"></script>
                        <script type="text/javascript" src="<?php echo base_url();?>assets/duhoc/js/jquery-1.7.2.min.js"></script>
                        <script type="text/javascript">
                			$(document).ready(function(){
                				$('#item-menu').hide();
                				$('#item').parent('li').mouseenter(function(){
                					$('#item-menu').slideDown();
                					});
                				$('#item').parent('li').mouseleave(function(){
                					$('#item-menu').slideUp();
                					});
                				});
                        
                        </script>
                        <div id="menu">
                            <ul>
                                <li style="margin-left: -30px"><a href="<?php echo base_url()?>" class="mainlevel_active-trans">Trang chủ</a></li>
                                <li>|</li>
                                <li><a href="<?php echo base_url(); ?>index.php/gioithieu" class="mainlevel-trans">Giới thiệu</a></li>
                                <li>|</li>
                                <li><a href="" class="mainlevel-trans">Tin nhắn của hiệu trưởng</a></li>
                                <li>|</li>
                                <li><a href="" class="mainlevel-trans">Cơ sở</a></li>
                                <li>|</li>
                                <li><a href="" class="mainlevel-trans" id="item">Các khóa học</a>
                                    <div id="item-menu">
                                    	<?php 
											foreach($loaikhoahoc as $loai)
											{
										?>
	                                         <a><?php echo $loai->ten;?></a><hr />
                                         <?php 
											}
										 ?> 
                                    </div>
                                </li>
                                <li>|</li>
                                <li><a href="" class="mainlevel-trans">Thủ tục nhập học</a></li>
                                <li>|</li>
                                <li><a href="<?php echo base_url(); ?>index.php/hocphi" class="mainlevel-trans">Học phí</a></li>
                                <li>|</li>
                                <li><a href="" class="mainlevel-trans">Hình ảnh</a></li>
                                <li>|</li>
                                <li><a href="<?php echo base_url(); ?>index.php/lienhe" class="mainlevel-trans">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
	    <td height="35" colspan="2" align="left" valign="top" style="background-repeat:no-repeat;">
	    <div class="moduletable">
			<div class="bannergroup">
				<div class="banneritem"><img src="<?php echo base_url();?>assets/duhoc/images/4.jpg" tppabs="images/banners/4.jpg" alt="Banner" /><div class="clr"></div>
			</div>
	
			</div>		
	 	</div>
		</td>
	  </tr>