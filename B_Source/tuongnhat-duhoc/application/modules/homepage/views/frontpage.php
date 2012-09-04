<tr>
    <td colspan="2" align="left" valign="top" style="background-repeat: no-repeat;">
        <img src="<?php echo base_url();?>assets/duhoc/images/line.jpg" width="1001" height="4" />
    </td>
</tr>
<tr>
    <td height="35" colspan="2" align="left" valign="top" style="background-repeat: no-repeat;">
        <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
                <td width="327" align="left" valign="top" bgcolor="#005f8f">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="2" align="left" valign="middle">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="22%" align="right" valign="middle" bgcolor="#005483">
                                            <img src="<?php echo base_url();?>assets/duhoc/images/courses_icon.jpg" tppabs="images/courses_icon.jpg" width="30" height="30" />
                                        </td>
                                        <td width="78%" height="35" valign="middle" bgcolor="#005483" class="arial">
                                            Các khóa học
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="module">
                                    <div>
                                        <div>
                                            <div>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                    <tr>
                                                        <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                            padding-left: 10px">
                                                            <img src="<?php echo base_url();?>assets/duhoc/images/courses.jpg" tppabs="images/stories/courses.jpg" align="center"
                                                                hspace="6" alt="courses.jpg" />
                                                        </td>
                                                        <td colspan="2" valign="top" style="padding-top: 8px;">
                                                            <table>
                                                            	<?php 
																	foreach($loaikhoahoc as $loai)
																	{
																?>
	                                                                <tr class="sectiontext">
	                                                                    <td width="20px">
	                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/stories/bullet.gif" />
	                                                                    </td>
	                                                                    <td align="left">
	                                                                        <a style="color: white" href=""><?php echo $loai->ten; ?></a>
	                                                                    </td>
	                                                                </tr>
                                                              	<?php 
																	}
																?>  
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="6" height="165" align="left" valign="top" background="<?php echo base_url();?>assets/duhoc/images/6.jpg">
                </td>
                <td width="327" align="left" valign="top" bgcolor="#005f8f">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="35" colspan="2" align="left" valign="top" bgcolor="#005483">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="22%" height="32" align="right" valign="middle">
                                            <img src="<?php echo base_url();?>assets/duhoc/images/applyicon.jpg" width="32" height="32" />
                                        </td>
                                        <td width="74%" height="35" align="left" valign="middle" bgcolor="#005483" class="arial">
                                            Đăng ký
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="module">
                                    <div>
                                        <div>
                                            <div>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                    <tr>
                                                        <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                            padding-left: 10px">
                                                            <img src="<?php echo base_url();?>assets/duhoc/images/apply.jpg" tppabs="images/apply.jpg" align="left" hspace="6" alt="apply.jpg" />
                                                        </td>
                                                        <td colspan="2" valign="top" style="padding-top: 8px;">
                                                            <table>
                                                                <tr class="sectiontext">
                                                                    <td width="20px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                    </td>
                                                                    <td align="left">
                                                                        <a href="">Làm thế nào để đăng ký?</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="sectiontext">
                                                                    <td width="20px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                    </td>
                                                                    <td align="left">
                                                                        <a href="">Tại sao bạn nên chọn Tường nhật với trình độ A?</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="6" align="left" valign="top" background="<?php echo base_url();?>assets/duhoc/images/6.jpg">
                </td>
                <td width="327" align="left" valign="top" bgcolor="#005f8f">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="35" colspan="2" align="right" valign="top" bgcolor="#005483">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="22%" align="right" valign="middle">
                                            <img src="<?php echo base_url();?>assets/duhoc/images/failitiesicon.jpg" tppabs="images/failitiesicon.jpg" width="31"
                                                height="33" />
                                        </td>
                                        <td height="35" align="left" valign="middle" class="arial">
                                            Cơ sở
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="module">
                                    <div>
                                        <div>
                                            <div>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                    <tr>
                                                        <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                            padding-left: 10px">
                                                            <img src="<?php echo base_url();?>assets/duhoc/images/libgoo2.jpg" tppabs="images/libgoo2.jpg" align="left" hspace="6"
                                                                alt="libgoo2.jpg" />
                                                        </td>
                                                        <td colspan="2" valign="top" style="padding-top: 8px;">
                                                            <table>
                                                                <tr class="sectiontext">
                                                                    <td width="20px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                    </td>
                                                                    <td align="left">
                                                                        <a style="color:white" href="<?php echo base_url() ?>coso"><?php echo $coso->ten; ?></a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="sectiontext">
                                                                    <td width="20px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="/bullet.gif" />
                                                                    </td>
                                                                    <td align="left">
                                                                        <a style="color:white" href="<?php echo base_url() ?>coso/giangday"><?php echo $giangday->ten; ?></a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="173" colspan="2" align="left" valign="top" background="<?php echo base_url();?>assets/duhoc/images/next.jpg"
        >
        <table width="1001" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="173" align="left" valign="top">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="22%" align="right" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/book.jpg" tppabs="images/book.jpg" width="49" height="31" />
                            </td>
                            <td width="78%" height="40" valign="middle" class="arial">
                                Nghiên cứu liên kết
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/horizonatl.jpg" tppabs="images/horizonatl.jpg" width="321" height="3" />
                            </td>
                        </tr>
                        <tr>
                            <td height="10" colspan="2" align="center" valign="middle">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="left">
                                            <div class="module">
                                                <div>
                                                    <div>
                                                        <div>
                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                                <tr>
                                                                    <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                                        padding-left: 10px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/study.jpg" tppabs="images/study.jpg" align="left" hspace="6" alt="study.jpg" />
                                                                    </td>
                                                                    <td colspan="2" valign="top" style="padding-top: 8px;">
                                                                        <table>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Thư viện UoW trực tuyến</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Thư viện Tường Nhật trực tuyến</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">ICSA sinh viên cổng thông tin Web</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Tường nhật sinh viên cổng thông tin Web</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="6" align="left" valign="top" background="<?php echo base_url();?>assets/duhoc/images/nextline.jpg"
                    style="background-repeat: no-repeat;">
                    &nbsp;
                </td>
                <td height="173" align="left" valign="top">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="14%" align="right" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/partner.jpg" tppabs="images/partner.jpg" width="32" height="34" />
                            </td>
                            <td width="86%" height="40" align="left" valign="middle" class="arial">
                                Các trường Đại Học đối tác và các tổ chức
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/horizonatl.jpg" tppabs="images/horizonatl.jpg" width="321" height="3" />
                            </td>
                        </tr>
                        <tr>
                            <td height="10" colspan="2" align="center" valign="middle">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="left">
                                            <div class="module">
                                                <div>
                                                    <div>
                                                        <div>
                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                                <tr>
                                                                    <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                                        padding-left: 10px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/institutes.jpg" tppabs="images/institutes.jpg" align="left" hspace="6"
                                                                            alt="institutes.jpg" />
                                                                    </td>
                                                                    <td colspan="2" valign="top" style="padding-top: 8px;">
                                                                        <table>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Các hiệp hội, bằng chứng nhận và chi nhánh </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Các tổ chức chuyên nghiệp</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Hợp tác quốc tế</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="6" align="left" valign="top" style="background-repeat: no-repeat;" background="<?php echo base_url();?>assets/duhoc/images/nextline.jpg">
                    &nbsp;
                </td>
                <td height="173" align="left" valign="top">
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="22%" align="right" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/overseas.jpg" tppabs="images/overseas.jpg" width="32" height="34" />
                            </td>
                            <td width="77%" height="40" valign="middle" class="arial">
                                Sinh viên ở nước ngoài
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <img src="<?php echo base_url();?>assets/duhoc/images/horizonatl.jpg" tppabs="images/horizonatl.jpg" width="321" height="3" />
                            </td>
                        </tr>
                        <tr>
                            <td height="10" colspan="2" align="center" valign="middle">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" valign="middle">
                                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="left">
                                            <div class="module">
                                                <div>
                                                    <div>
                                                        <div>
                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
                                                                <tr>
                                                                    <td width="50%" valign="top" class="contentdescription" colspan="2" style="padding-top: 10px;
                                                                        padding-left: 10px">
                                                                        <img src="<?php echo base_url();?>assets/duhoc/images/overseas-1.jpg" tppabs="images/overseas.jpg" align="left" hspace="6"
                                                                            alt="overseas.jpg" />
                                                                    </td>
                                                                    <td colspan="2" valign="top" style="padding-top: 8px;">
                                                                        <table>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Điều khoản và điều kiện</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Chi tiết liên hệ ở nước ngoài</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">Yêu cầu ngôn ngữ tiếng anh</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="sectiontext">
                                                                                <td width="20px">
                                                                                    <img src="<?php echo base_url();?>assets/duhoc/images/bullet.gif" tppabs="images/bullet.gif" />
                                                                                </td>
                                                                                <td align="left">
                                                                                    <a href="">UKCISA</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>