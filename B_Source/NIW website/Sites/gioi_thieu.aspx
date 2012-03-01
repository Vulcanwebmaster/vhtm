<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="gioi_thieu.aspx.cs" Inherits="NIW.Sites.gioi_thieu" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
     <script type="text/javascript" id="sothink_dhtmlmenu"> <!--
         st_siteroot = "file:///D|/Website%20NIW/NIW/NIW";
         st_jspath = "/Scripts/stmenu.js";
         if (!window.location.href.indexOf("file:") && st_jspath.charAt(0) == "/")
             document.write('<script type="text/javascript" src="' + st_siteroot + st_jspath + '"><\/script>');
         else
             document.write('<script type="text/javascript" src="' + st_jspath + '"><\/script>');
//--> </script>
    <link href="../CSS/Trang_chu_css.css" type="text/css" rel="Stylesheet" />
</head>
<body bgcolor="#161616" onload="webload">
    <form id="form1" runat="server" 
    
    style="background-color: #FFFFFF; margin: auto; width: 1000px; font-family: Arial;">

    <%String host="http://localhost:3591"; %>

    <div>
        <div style="background-image: url('/images/newlogo.png'); background-repeat: no-repeat;">
            <img src="../images/logo150px.png" alt="" 
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
           <param name="movie" value="../Flashes/logo2.swf"/>
           <embed src="../Flashes/logo2.swf" width="1000px" height="178px"></embed>  
        </object>  

      <a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Javascript DHTML Drop Down Menu Powered by dhtml-menu-builder.com</a>



        <div style=" height: 40px; background-image: url('/images/banner2.png');">                  
        </div>

<!--Nội dung phải-->
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
                                <td><img src="/images/software/IDM.png" alt=""/></td>
                                <td><asp:HyperLink ID="HyperLink1" runat="server" CssClass="software_name">Internet Download Manager</asp:HyperLink></td>
                            </tr>
                            <tr>
                                <td><img src="/images/software/visual.png" alt=""/></td>
                                <td><asp:HyperLink ID="HyperLink2" runat="server" CssClass="software_name">MS Visual Studio 2010</asp:HyperLink></td>
                            </tr>
                            <tr>
                                <td><img src="/images/software/matlab.png" alt=""/></td>
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

<!--Nội dung trái-->
        <div id="div_left" style="float: left">
            <p id="title" runat="server" 
                
                style="font-size: 20px; text-align: center; color: #336600; margin-top: 20px; margin-right: 40px;"/>
            <p id="document" runat="server" 
                style="font-size: 13px; margin-right: 40px; text-align: justify;">                
            </p>
        </div>
    </div>
    <div id="footer">
            <p style="color: #FFFFFF; margin: auto auto auto auto; vertical-align: middle; font-family: Verdana; font-size: x-small;" 
                align="right">
                 Copyright &copy: 2012 Công ty TNHH NIW
                 <br />
                 Design by NIW 
                 <br />
                 Địa chỉ liên hệ:...............
                 <br />
                 Điện thoại:
            </p>
        </div>
    </form>
</body>
</html>
