<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="NIW._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>

    <link type="text/css" href="CSS/Trang_chu_css.css" rel="Stylesheet" />
<script type="text/javascript" id="sothink_dhtmlmenu"> <!--
 st_siteroot="file:///D|/Website%20NIW/NIW/NIW";
 st_jspath="/Scripts/stmenu.js";
 if(!window.location.href.indexOf("file:") && st_jspath.charAt(0)=="/")
  document.write('<script type="text/javascript" src="'+st_siteroot+st_jspath+'"><\/script>');
 else 
  document.write('<script type="text/javascript" src="'+st_jspath+'"><\/script>');
//--> </script>
</head>
<body>
    <form id="form1" runat="server" 
    
    style="background-color: #FFFFFF; margin: auto; width: 1000px; font-family: Arial;">

    <%String host="http://localhost:3591"; %>

    <div>
        <div style="background-image: url('/images/newlogo.png'); background-repeat: no-repeat;">
            <img src="images/logo150px.png" alt="" 
                style="margin-left: 30px;" />
            
                <asp:HyperLink ID="linkthanhvien" runat="server" ForeColor="White" Text="   Thành viên NIW     " 
                    EnableViewState="False" NavigateUrl="~/Sites/login.aspx" 
                    Font-Names="Arial" Font-Size="14px" 
                Width="120px"></asp:HyperLink>
                    
                <asp:HyperLink runat="server" ForeColor="White" ID="linklienket" 
                    NavigateUrl="~/Sites/lien_he.aspx" Font-Names="Arial" Font-Size="14px" 
                Width="120px">Liên hệ</asp:HyperLink> 
            
        </div>
        
        <script type="text/javascript">
            <!--
                        stm_bm(["menu61b2", 900, "/images", "blank.gif", 0, "", "", 0, 0, 250, 0, 1000, 1, 0, 0, "", "1000", 0, 0, 1, 2, "default", "hand", "file:///D|/Website%20NIW/NIW/NIW", 1, 25], this);
                        stm_bp("p0", [0, 4, 0, 0, 0, 5, 0, 0, 100, "", -2, "", -2, 50, 0, 0, "#999999", "#E6EFF9", "bg_02.gif", 3, 0, 0, "#000000", "", -1, -1, 0, "#FFFFF7", "", 3, "bg_03.gif", 37, 3, 0, "#FFFFF7", "", 3, "", -1, -1, 0, "#FFFFF7", "", 3, "bg_01.gif", 37, 3, 0, "#FFFFF7", "", 3, "", "", "", "", 20, 20, 20, 20, 20, 20, 20, 20]);
                        stm_ai("p0i0", [0, "Trang chủ", "", "", -1, -1, 0, "/Default.aspx", "_self", "", "", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#E6EFF9", 1, "#003333", 1, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#FFFFFF", "#00CCFF", "bold 8pt Verdana", "bold 8pt Verdana", 0, 0, "", "", "", "", 0, 0, 0], 90, 23);
                        stm_ai("p0i1", [6, 1, "#d6ceac", "", -1, -1, 0]);
                        stm_aix("p0i2", "p0i0", [0, "Giới thiệu", "", "", -1, -1, 0, "/Sites/gioi_thieu.aspx", "_self", "", "", "", "", 0, 0, 0, "", "", 0, 0, 0, 1, 1, "#E6EFF9", 1, "#E6EFF9"], 90, 23);
                        stm_aix("p0i3", "p0i1", []);
                        stm_aix("p0i4", "p0i2", [0, "Sản phẩm", "", "", -1, -1, 0, "/Sites/san_pham.aspx"], 90, 23);
                        stm_aix("p0i5", "p0i1", []);
                        stm_aix("p0i6", "p0i2", [0, "Thư viện", "", "", -1, -1, 0, "/Sites/thu_vien.aspx"], 90, 23);
                        stm_aix("p0i7", "p0i1", []);
                        stm_aix("p0i8", "p0i2", [0, "Tin tức", "", "", -1, -1, 0, "/Sites/tin_tuc.aspx"], 90, 23);
                        stm_aix("p0i9", "p0i1", []);
                        stm_aix("p0i10", "p0i2", [0, "Đối tác", "", "", -1, -1, 0, "/Sites/doi_tac.aspx"], 90, 23);
                        stm_aix("p0i11", "p0i1", []);
                        stm_aix("p0i12", "p0i2", [0, "Bảng giá", "", "", -1, -1, 0, "/Sites/bang_gia.aspx"], 90, 23);
                        stm_ep();
                        stm_em();
            //-->
        </script>

        <object width="1000px" height="178px">
           <param name="movie" value="Flashes/logo2.swf"/>
           <embed src="Flashes/logo2.swf" width="1000px" height="178px"></embed>  
        </object>  

      <a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Javascript DHTML Drop Down Menu Powered by dhtml-menu-builder.com</a>



        <div style=" height: 40px; background-image: url('/images/banner2.png');">                  
        </div>
        <!--hr style="margin: 0px" /-->
       <div id="div_left" 
            style="background-color: #FFFFFF;">
                
                <div ID="View1" runat="server" class="title_view" style="margin-top: 0px">
                    <div>
                        <img class="icon_title" src="images/icon_gioithieu.png" alt=""/>
                        <label class="title">GIỚI THIỆU</label>
                    </div>
                    <div align="left" style="margin: 0px 40px 0px 20px">
                        
                        <p class="content_right" align="left" id="gioithieu_document" runat="server" >
                            
                        </p>                        
                        <asp:HyperLink runat="server" CssClass="xemtiep" NavigateUrl="~/Sites/gioi_thieu.aspx">>>Xem tiếp</asp:HyperLink>
                        
                    </div>
                    <br />
                </div>
                <hr style="margin: 0px;" align="left" class="duongngancach"/>

                <script type="text/javascript">
                    /*<div ID="View2" runat="server" class="title_view">
                    <img class="icon_title" src="images/icon_sanpham.jpg"  alt=""/>
                    <label class="title">SẢN PHẨM</label>
                </div>*/
                <hr style="margin: 0px;" align="left" class="duongngancach" />
                </script>
                
                <div ID="View3" runat="server" class="title_view">
                    <img class="icon_title" src="images/icon_thuvien.png" alt="" />
                    <label class="title">THƯ VIỆN</label>
                    
                    <div align="left" style="margin: 10px 40px 0px 20px">

                        <asp:Panel ID="Panel1" runat="server">
                            <div>
                                <div style="width: 316px; float: left; border-right-style: dotted; border-right-width: thin; border-right-color: #3399FF;">
                                    <img src="images/software/Best-Antivirus-Program.png" alt=""/>
                                    <asp:HyperLink ID="HyperLink4" runat="server" Font-Bold="True" Font-Size="13px">Diệt Virus/spyware, tường lửa</asp:HyperLink>

                                    <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink6" runat="server" CssClass="library_software">* Kaspersky</asp:HyperLink> 
                                                </p>
                                                <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink7" runat="server" CssClass="library_software">* CMC</asp:HyperLink> 
                                                </p> 
                                                <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink8" runat="server" CssClass="library_software">* Avira</asp:HyperLink> 
                                                </p>
                                </div>
                                <div>
                                    <img src="images/software/Best-Antivirus-Program.png" alt=""/>
                                    <asp:HyperLink ID="HyperLink5" runat="server" Font-Bold="True" Font-Size="13px">Đồ họa và chỉnh sửa ảnh</asp:HyperLink>  

                                    <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink9" runat="server" CssClass="library_software">* Adobe PhotoShop</asp:HyperLink> 
                                                </p>
                                                <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink10" runat="server" CssClass="library_software">* Blender</asp:HyperLink> 
                                                </p> 
                                                <p style="margin: 0px">
                                                    <asp:HyperLink ID="HyperLink11" runat="server" CssClass="library_software">* Auto CAD</asp:HyperLink> 
                                                </p> 
                                </div>
                                
                            </div>
                        </asp:Panel>
                        <br />
                        <asp:HyperLink ID="HyperLink13" runat="server" CssClass="xemtiep" NavigateUrl="~/Sites/thu_vien.aspx">>>Xem tiếp</asp:HyperLink>
                        
                    </div>
                    <br />
                </div>
                
                <hr style="margin: 0px;" align="left" class="duongngancach" />
                <div ID="View4" runat="server" class="title_view">
                    <div>
                        <img class="icon_title" src="images/icon_tintuc.png" alt="" />
                        <label class="title">TIN TỨC</label>
                    </div>
                    <div align="left" style="margin: 10px 40px 0px 20px">
                        <asp:LinkButton runat="server" Font-Underline="False" Font-Size="14px">Dùng miễn phí F-Secure Internet Security 2011 trong 6 tháng </asp:LinkButton>
                        
                            <table style="margin: 0px 0px 0px 0px">
                                <tr>
                                    <td><img src="images/content/11520101017421.gif" alt=""/></td>
                                    <td><p class="content_right" style="top: 0px; height: 110px; text-align: justify;">Với cách làm sau, bạn có thể tiến hành đăng ký sử dụng phiên bản beta của phần mềm F-Secure Internet Security 2011 trong vòng 180 ngày (6 tháng) hoàn toàn miễn phí mà không tốn một xu (giá chính thức 79,69USD).</p></td>
                                </tr>
                            </table>  
                            <asp:HyperLink ID="HyperLink3" runat="server" CssClass="xemtiep" NavigateUrl="~/Sites/tin_tuc.aspx">>>Xem tiếp</asp:HyperLink>                                                                              
                    </div>
                    <br />
                </div> 
                <hr style="margin: 0px;" align="left" class="duongngancach" />

                <script type="text/javascript">
                /*<div ID="View5" runat="server" class="title_view">
                    <img class="icon_title" src="images/icon_doitac.png" alt="" />
                    <label class="title">ĐỐI TÁC</label>
                <!--/div-->*/
                </script>
                
       </div>
       <div id="div_right" 
            style="float: right; margin-right: 40px; margin-top: 20px; margin-bottom: 20px;">
        
            <div id="div_search" >
                <label style="margin-left:10px; font-family: Arial; color: #191919; font-size: 13px;">Tìm kiếm</label>
                <br />
                    <input type="text" id="text_search" style="vertical-align: middle;margin-left:10px;margin-bottom:10px"/>
                    <asp:ImageButton ID="ImageButton1" runat="server" ImageUrl="~/images/search icon 16.png" ImageAlign="Middle"/>
                    <!-- style="margin-bottom:5px"-->
                
            </div>

            <div class="div_right_item">
                <div class="title_right">
                    <center>
                        <label class="title_right_text">DOWNLOAD</label>
                    </center>
                </div>
                <div class="div_content_right">
                    <center>
                        <table>
                            <tr>
                                <td><img src="images/software/IDM.png" alt=""/></td>
                                <td><asp:HyperLink ID="HyperLink1" runat="server" CssClass="software_name">Internet Download Manager</asp:HyperLink></td>
                            </tr>
                            <tr>
                                <td><img src="images/software/visual.png" alt=""/></td>
                                <td><asp:HyperLink ID="HyperLink2" runat="server" CssClass="software_name">MS Visual Studio 2010</asp:HyperLink></td>
                            </tr>
                            <tr>
                                <td><img src="images/software/matlab.png" alt=""/></td>
                                <td><asp:HyperLink ID="HyperLink12" runat="server" CssClass="software_name">Matlab</asp:HyperLink></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>

            <div class="div_right_item" 
                style="background-color: #FFFFFF; margin: 5px 0px 0px 0px;">
                <div class="title_right">
                    <center>
                        <label class="title_right_text">LIÊN HỆ</label>
                    </center>
                </div>
                <div class="div_content_right" style="height: 203px"></div>
            </div>

            <div class="div_right_item" 
                style="background-color: #FFFFFF; margin: 5px 0px 0px 0px;">
                <div class="title_right">
                    <center>
                        <label class="title_right_text">THÔNG TIN TRUY CẬP</label>
                    </center>
                </div>
                <div class="div_content_right" style="height: 168px"></div>
            </div>
       </div>      
    </div>
    
        <div id="footer" 
        
        style="clear: both;height:70px; background-image: url('images/footer.png');">
            <p style="color: #FFFFFF; margin: auto auto auto auto; vertical-align: middle; font-family: Verdana; font-size: x-small;" align="right">
                 Copyright &copy: 2012 Công ty TNHH NIW
                 <br />
                 Design by NIW 
                 <br />
                 Địa chỉ liên hệ:
                 <br />
                 Điện thoại:
            </p>
        </div>
    </form>
    
</body>

</html>
