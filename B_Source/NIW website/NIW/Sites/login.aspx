<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="NIW.Sites.login" %>

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

    <link href="../CSS/Trang_chu_css.css" type="text/css" rel="Stylesheet"/>
</head>
<body bgcolor="#161616">
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

        <div style="font-family: Verdana; font-size: small; background-image: url('../images/member.png'); background-repeat: no-repeat;"> 
            <br />
            <br />
            <center>
                <p style="margin: 0px 0px 0px 10px" class="gioithieu">
                    Nếu bạn là thành viên của NIW, xin mời đăng nhập
                </p>
                <br />
                <table>
                    <tr>
                        <td width="150">
                            <label>Tên đăng nhập</label>
                        </td>
                        <td>
                            <input type="text" id="matkhaubox" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mật khẩu</label>
                        </td>
                        <td>
                            <input type="password" id="taikhoanbox" />
                        </td>
                    </tr>
                </table>
                <br />
                <button>Đăng nhập</button>
            </center>         
            <br />
            <br />
            <br />
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
