<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="BatDongSan._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS/styles.css" tppabs="CSS/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="Scripts/Config-Java-Control-Panel.js" tppabs="Scripts/Config-Java-Control-Panel.js"></script>
<script language="javascript" type="text/javascript" src="Scripts/AC_RunActiveContent.js" tppabs="Scripts/AC_RunActiveContent.js"></script>
<script language="javascript" type="text/javascript" src="Scripts/crawler.js" tppabs="Scripts/crawler.js"></script>
<script language="javascript" type="text/javascript" src="Scripts/swfobject.js" />
<script language="javascript" type="text/javascript">
    var DivLoad = '<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" height=\"200\"><tr><td align=\"center\" valign=\"middle\" width=\"100%\" height=\"200\">Dữ Liệu Đang Được Tải Về<br /><br /><img src=\"Images/loading.gif\"/*tpa=http://batdongsan24h.com.vn/Images/loading.gif*/ width=\"120\" height=\"15\" /></td></tr></table>'
</script>
<title>SÀN GIAO DỊCH BẤT ĐỘNG SẢN 24H | SAN GIAO DICH BAT DONG SAN 24H | MUA BÁN NHÀ | MUA BAN NHA | THUÊ NHÀ | THUE NHA | ĐẤT DỰ ÁN |  DAT DU AN | CĂN HỘ CHUNG CƯ | CAN HO CHUNG CU | HÀ NỘI | HA NOI | THÔNG TIN NHÀ ĐẤT | THONG TIN NHA DAT | CHÍNH CHỦ | CHINH CHU</title>
<meta name="description" content="Sàn giao dịch bất động sản | san giao dich bat dong san | 24h | bất động sản | bat dong san | nhà đất | nha dat | mua bán nhà | mua ban nha | thuê nhà | thue nha | thông tin mua bán nhà | thong tin mua ban nha | căn hộ chung cư | can ho chung cu | hà nội | ha noi | bán nhà | ban nha | mua nhà chính chủ | bán nhà chính chủ | chính chủ | chinh chu | mua nhà chính chủ | mua nha chinh chu | bán nhà chính chủ | ban nha chinh chu" />
<meta name="keywords" content="Sàn giao dịch bất động sản | san giao dich bat dong san | 24h | bất động sản | bat dong san | nhà đất | nha dat | mua bán nhà | mua ban nha | thuê nhà | thue nha | thông tin mua bán nhà | thong tin mua ban nha | căn hộ chung cư | can ho chung cu | hà nội | ha noi | bán nhà | ban nha | mua nhà chính chủ | bán nhà chính chủ | chính chủ | chinh chu | mua nhà chính chủ | mua nha chinh chu | bán nhà chính chủ | ban nha chinh chu" />
</head>
<body>
<div align="center" 
        style="margin: auto; height: 120px; width: 1000px; background-color: #333333;" id="banner_panel">
        <div class="menu_button" 
            style="float: left; width: 140px; height: 73px; margin-left:200px; margin-top:45px; background-image: url('Images/mask_left.png');">
            <br />
            <br />
            <a class="menu_item">Trang chủ</a>
        </div>

        <div class="menu_button" 
            style="float: left; width: 99px; height: 73px;  margin-top:45px; ">
            <br />
            <br />
            <a class="menu_item">Tin tức</a>
        </div>
        <div class="menu_button" 
            style="float: left; width: 99px; height: 73px;  margin-top:45px; ">
            <br />
            <br />
            <a class="menu_item">Quảng bá</a>
        </div>
        <div class="menu_button" 
            style="float: left; width: 99px; height: 73px;  margin-top:45px; ">
            <br />
            <br />
            <a class="menu_item">Hỏi đáp</a>
        </div>
        <div class="menu_button" 
            
            style="float: left; width: 140px; height: 73px;  margin-top:45px; background-image: url('Images/mask_right.png');">
            <br />
            <br />
            <a class="menu_item" style="margin-left: -55px">Ký gửi</a>
        </div>

        <div style="width: 200px; height: 120px; background-image: url('/Images/registerbg.png'); float: left;">
            <br />
            <br />
            <br />
            <br />
            <a href="Default.aspx" style="color: #F0F0F0; font-size: 9px; margin-top: 100px;">ĐĂNG KÝ THÀNH VIÊN</a>
        </div>
</div>
<div align="center" style="width:100%">
  <div align="left" style="width:996px; background:#FFF;">
    <div style="float:left; width:996px" align="center">
  
  <div align="center"> 
  </div>
  
</div>
<script type="text/javascript">
    function PriceOnFocus(keyword) {
        if (document.getElementById(keyword).value == 'Từ khóa tìm kiếm') {
            document.getElementById(keyword).value = '';
        }
    }
    function PriceOnBlur(keyword) {
        if (document.getElementById(keyword).value == '') {
            document.getElementById(keyword).value = 'Từ khóa tìm kiếm';
        }
    }
    function CodeOnFocus(code) {
        if (document.getElementById(code).value == 'Mã tin đăng') {
            document.getElementById(code).value = '';
        }
    }
    function CodeOnBlur(code) {
        if (document.getElementById(code).value == '') {
            document.getElementById(code).value = 'Mã tin đăng';
        }
    }

</script>

<div style="width:996px; float:left">
  <div style="width:183px; float:left">
    <script type="text/javascript" src="Scripts/stmenu.js" 
          tppabs="Script/stmenu.js"></script>
<script type="text/javascript" src="Scripts/ddaccordion.js" 
          tppabs="Script/ddaccordion.js"></script>
<script type="text/javascript">
    ddaccordion.init({
        headerclass: "silverheader", //Shared CSS class name of headers group
        contentclass: "submenu", //Shared CSS class name of contents group
        revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
        mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
        collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
        defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc] [] denotes no content
        onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
        animatedefault: false, //Should contents open by default be animated into view?
        persiststate: true, //persist state of opened contents within browser session?
        toggleclass: ["", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
        togglehtml: ["", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
        animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
        oninit: function (headers, expandedindices) { //custom code to run when headers have initalized
            //do nothing
        },
        onopenclose: function (header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
            //do nothing
        }
    })
</script>
<style type="text/css">
.applemenu {
	width: 182px;
	border: 1px solid #9A9A9A;
}
.applemenu div.silverheader a {
	background:url("Images/bds.gif")/*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
	color: white;
	display: block;
	position: relative;
	width: 163px;
	height:21px;
	text-decoration: none;
	padding-top:5px;
	padding-left:20px;
	font-weight:bold;
	font-size:12px;
}
.applemenu div.silverheader a:visited, .applemenu div.silverheader a:active {
	color: #eef7ff;
}
.applemenu div.selected a, .applemenu div.silverheader a:hover {
	background:url("Images/bds.gif")/*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
	width: 163px;
	height:21px;
	color: white;
	padding-top:5px;
	padding-left:20px;
	font-weight:bold;
	font-size:12px;
}
.applemenu div.submenu {
	background: #eef7ff;
}
</style>
  <div style="width:183px; height:33px; float:left; background:url('/Images/ban_chothue_hoptac2.png') no-repeat; margin-bottom: 3px;" 
          class="left_panel"></div>
  <div style="width:183px; float:left" class="left_panel">
    <div class="applemenu">
      <div class="silverheader"><a href="#">Cho thuê nhà xưởng</a></div>
      <div class="submenu">
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "/Images", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Căn hộ", "", "", -1, -1, 0, "./?Tab=6&cat_id=1", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "Images/bds_16.gif"/*tpa=Images/bds_16.gif*/, "Images/bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Chung cư", "", "", -1, -1, 0, "./?Tab=6&cat_id=6&sub_id=1", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà tập thể", "", "", -1, -1, 0, "./?Tab=6&cat_id=7&sub_id=1", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Nhà", "", "", -1, -1, 0, "./?Tab=6&cat_id=2", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Biệt thự - Chia lô", "", "", -1, -1, 0, "./?Tab=6&cat_id=8&sub_id=2", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà mặt phố", "", "", -1, -1, 0, "./?Tab=6&cat_id=9&sub_id=2", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà trong ngõ", "", "", -1, -1, 0, "./?Tab=6&cat_id=10&sub_id=2", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Đất", "", "", -1, -1, 0, "./?Tab=6&cat_id=3", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Đất biệt thự - Chia lô", "", "", -1, -1, 0, "./?Tab=6&cat_id=12&sub_id=3", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Đất thổ cư", "", "", -1, -1, 0, "./?Tab=6&cat_id=11&sub_id=3", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Bất động sản khác", "", "", -1, -1, 0, "./?Tab=6&cat_id=18", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
      </div>
      <div class="silverheader"><a href="#">Bán nhà xưởng</a></div>
      <div class="submenu">
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Căn hộ", "", "", -1, -1, 0, "./?Tab=6&cat_id=13", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Chung cư", "", "", -1, -1, 0, "./?Tab=6&cat_id=55&sub_id=13", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà tập thể", "", "", -1, -1, 0, "./?Tab=6&cat_id=56&sub_id=13", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Nhà", "", "", -1, -1, 0, "./?Tab=6&cat_id=14", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Biệt thự - Chia lô", "", "", -1, -1, 0, "./?Tab=6&cat_id=49&sub_id=14", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà mặt phố", "", "", -1, -1, 0, "./?Tab=6&cat_id=50&sub_id=14", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà trong ngõ", "", "", -1, -1, 0, "./?Tab=6&cat_id=51&sub_id=14", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Đất", "", "", -1, -1, 0, "./?Tab=6&cat_id=15", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Bất động sản khác", "", "", -1, -1, 0, "./?Tab=6&cat_id=16", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
      </div>
      <div class="silverheader"><a href="#">Hợp tác kinh doanh</a></div>
      <div class="submenu">
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Căn hộ", "", "", -1, -1, 0, "./?Tab=6&cat_id=42", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Chung cư", "", "", -1, -1, 0, "./?Tab=6&cat_id=57&sub_id=42", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà tập thể", "", "", -1, -1, 0, "./?Tab=6&cat_id=58&sub_id=42", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Nhà", "", "", -1, -1, 0, "./?Tab=6&cat_id=20", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Biệt thự - Chia lô", "", "", -1, -1, 0, "./?Tab=6&cat_id=59&sub_id=20", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà mặt phố", "", "", -1, -1, 0, "./?Tab=6&cat_id=60&sub_id=20", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà trong ngõ", "", "", -1, -1, 0, "./?Tab=6&cat_id=61&sub_id=20", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Đất", "", "", -1, -1, 0, "./?Tab=6&cat_id=21", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Bất động sản khác", "", "", -1, -1, 0, "./?Tab=6&cat_id=22", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
      </div>
      <div class="silverheader"><a href="#">Cho thuê đất</a></div>
      <div class="submenu">
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Căn hộ", "", "", -1, -1, 0, "./?Tab=6&cat_id=23", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Chung cư", "", "", -1, -1, 0, "./?Tab=6&cat_id=62&sub_id=23", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà tập thể", "", "", -1, -1, 0, "./?Tab=6&cat_id=63&sub_id=23", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Nhà", "", "", -1, -1, 0, "./?Tab=6&cat_id=24", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_aix("p1i0", "p0i0", [0, "Biệt thự - Chia lô", "", "", -1, -1, 0, "./?Tab=6&cat_id=64&sub_id=24", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà mặt phố", "", "", -1, -1, 0, "./?Tab=6&cat_id=65&sub_id=24", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_aix("p1i0", "p0i0", [0, "Nhà trong ngõ", "", "", -1, -1, 0, "./?Tab=6&cat_id=66&sub_id=24", "_self", "", "", "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, "icon_57.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/icon_57.gif*/, 11, 11, 0, "", "", 0, 0, 0, 0, 1, "#E6EFF9", 0, "#FFFFCC", 0, "", "", 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "8pt Verdana", "8pt Verdana"], 200, 25);

            stm_ep();

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Đất", "", "", -1, -1, 0, "./?Tab=6&cat_id=25", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Bất động sản khác", "", "", -1, -1, 0, "./?Tab=6&cat_id=26", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
      </div>
      <div class="silverheader"><a href="#">Mua</a></div>
      <div class="submenu">
        
        <script type="text/javascript">
<!--
            stm_bm(["menu08a9", 800, "", "", 0, "", "", 0, 0, 250, 0, 100, 1, 0, 0, "", "", 0, 0, 1, 2, "default", "hand", ""], this);
            stm_bp("p0", [1, 4, 0, 0, 2, 3, 0, 7, 100, "", -2, "", -2, 50, 0, 0, "#999999", "transparent", "", 3, 0, 0, "#000000"]);
            stm_ai("p0i0", [0, "       Rao vặt khác", "", "", -1, -1, 0, "./?Tab=6&cat_id=45", "_self", "", "", "", "", 0, 0, 0, "", "", 7, 7, 0, 0, 1, "#E6EFF9", 1, "#FFD602", 1, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, "bds_16.gif"/*tpa=http://batdongsan24h.com.vn/Dhtml/bds_16.gif*/, 3, 3, 0, 0, "#E6EFF9", "#000000", "#000000", "#FF0000", "bold 9pt Verdana", "bold 9pt Verdana", 0, 0], 180, 30);

            stm_bp("p1", [1, 2, 0, 0, 2, 3, 11, 0, 100, "", -2, "", -2, 50, 2, 2, "#FFCCFF", "transparent", "", 3, 1, 1, "#99FFFF"]);

            stm_ep();
            stm_em();
//-->
</script>
        
      </div>
    </div>
  </div>
  <!--Project-->
  <div style="width:183px; height:33px; float:left; background:url(../Images/duan.png) no-repeat; margin-bottom: 3px;" class="left_panel"></div>
  <div style="width:181px; float:left; border:1px #9A9A9A solid;" class="left_panel">
    
    <div style="background:url(Images/bds.gif) no-repeat; width:163px; height:26px; padding-left:20px; line-height:25px; float:left"><a href="-Tab=8&cat_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=1">
        <font style="color: #FFFFFF" ><strong>Dự án Hà Nam</strong></font></a></div>
    <div style="overflow-y:scroll; overflow-x:hidden; float:left; width:183px; max-height:700px; height:auto !important; height:700px">
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=3&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=3&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Trung Hòa Nhân Chính</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=4&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=4&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Mỹ Đình I,II</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=5&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=5&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Cầu Giấy</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=7&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=7&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM The Manor</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=8&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=8&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Ciputra</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=9&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=9&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Dịch Vọng</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=10&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=10&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Linh Đàm</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=11&sub_id=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=11&sub_id=1"><font class="item_left" style="font-size:11px;">ĐTM Nam Trung Yên</font></a></div>
      
    </div>
    
    <div style="background:url(Images/bds.gif) no-repeat; width:163px; height:26px; padding-left:20px; line-height:25px; float:left"><a href="-Tab=8&cat_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=2"><font color="#FFFFFF"><strong>Dự án các tỉnh lân cận</strong></font></a></div>
    <div style="overflow-y:scroll; overflow-x:hidden; float:left; width:183px; max-height:700px; height:auto !important; height:700px">
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=54&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=54&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Nam An Khánh</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=51&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=51&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Lê Trọng Tấn</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=27&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=27&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Tân Tây Đô</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=24&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=24&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Bắc An Khánh</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=26&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=26&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Kim Chung - Di Trạch</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=28&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=28&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM HQV Kéo dài</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=154&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=154&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Thanh Hà Cienco5</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=155&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=155&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM Xanh Villas</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=158&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=158&sub_id=2"><font class="item_left" style="font-size:11px;">ĐTM AIC</font></a></div>
      
      
    </div>
    <div style="width:183px; height:33px; float:left; background:url(../Images/caycanh.png) no-repeat; margin-bottom: 3px; margin-top: 5px;" 
          class="left_panel"></div>
    <div style="overflow-y:scroll; overflow-x:hidden; float:left; width:183px; max-height:700px; height:auto !important; height:700px">
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=98&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=98&sub_id=184"><font class="item_left" style="font-size:11px;">CC 170 Đê La Thành</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=172&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=172&sub_id=184"><font class="item_left" style="font-size:11px;">CC Hesco Văn Quán</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=93&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=93&sub_id=184"><font class="item_left" style="font-size:11px;">CC 165 Thái Hà</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=23&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=23&sub_id=184"><font class="item_left" style="font-size:11px;">CC  M3 - M4 Nguyễn Chí Thanh</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=95&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=95&sub_id=184"><font class="item_left" style="font-size:11px;">Chung cư Keangnam</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=103&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=103&sub_id=184"><font class="item_left" style="font-size:11px;">CC M5 Nguyễn Chí Thanh</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=106&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=106&sub_id=184"><font class="item_left" style="font-size:11px;">CC N04 Trần Duy Hưng</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=124&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=124&sub_id=184"><font class="item_left" style="font-size:11px;">CC N05 Trần Duy Hưng</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=96&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=96&sub_id=184"><font class="item_left" style="font-size:11px;">LQT Thăng Long</font></a></div>
      
      <div style="width:137px; height:24px; float:left;  no-repeat; padding-left:30px;" class="icon_left"><a href="-Tab=8&cat_id=104&sub_id=184.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=104&sub_id=184"><font class="item_left" style="font-size:11px;">CC 97 Láng Hạ</font></a></div>
      
      
    </div>
    
  </div>
  <!--Tìm Theo Giá-->
  <div style="width:177px; height:33px; margin-left:3px; float:left; background:url('/Images/theogiatien.png') no-repeat" 
          class="left_panel"></div>
  <div style="width:177px; margin-left:3px; float:left" class="left_panel">
    <div style="border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; float:left; width:175px">
      <div style="width:175px; height:25px; float:left;"><img src="Images/mua.jpg" tppabs="Images/Skins/mua.jpg" width="110" height="25" /></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=1"><font color="#0048c0">< 500 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=1"><font color="#0048c0">500 - 800 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=1"><font color="#0048c0">800 - 1 tỷ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=1"><font color="#0048c0">1 - 2 tỷ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=1"><font color="#0048c0">2 - 4 tỷ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=1"><font color="#0048c0">4 - 6 tỷ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=1"><font color="#0048c0">6 - 10 tỷ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; width:175px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=1  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=1'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=1"><font color="#0048c0">> 10 tỷ - VND</font></a></div>
      <!--ban-->
      <div style="width:175px; height:30px; margin-top:10px; float:left; background-color:#eef7ff"><img src="Images/ban.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/ban.jpg" width="110" height="30" /></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=20&type_id=2"><font color="#f97511">< 500 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=21&type_id=2"><font color="#f97511">500 - 800 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=22&type_id=2"><font color="#f97511">800 - 1 tỉ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=23&type_id=2"><font color="#f97511">1 tỉ - 2 tỉ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=24&type_id=2"><font color="#f97511">2 - 4 tỉ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=25&type_id=2"><font color="#f97511">4 - 6 tỉ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=26&type_id=2"><font color="#f97511">6 - 10 tỉ - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left; background-color:#eef7ff; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=2  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=2'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=27&type_id=2"><font color="#f97511">>10 tỉ - VND</font></a></div>
      <!--thue-->
      <div style="width:175px; float:left; height:25px; padding-top:10px"><img src="Images/thue.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/thue.jpg" width="110" height="25" /></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=3"><font color="#0048c0">1 - 3 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=3"><font color="#0048c0">3 - 5 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=3"><font color="#0048c0">5 - 10 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=3"><font color="#0048c0">10 - 40 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=3"><font color="#0048c0">40 - 70 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=3"><font color="#0048c0">70 - 100 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; float:left"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=3'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=3"><font color="#0048c0">> 100 triệu - VND</font></a></div>
      <!--cho thue-->
      <div style="width:175px; height:30px; float:left; padding-top:10px; background-color:#eef7ff"><img src="Images/chothue.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/chothue.jpg" width="110" height="30"/></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=1&type_id=4"><font color="#f97511">1 - 3 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=2&type_id=4"><font color="#f97511">3 - 5 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=3&type_id=4"><font color="#f97511">5 - 10 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=4&type_id=4"><font color="#f97511">10 - 40 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=5&type_id=4"><font color="#f97511">40 - 70 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=6&type_id=4"><font color="#f97511">70 - 100 triệu - VND</font></a></div>
      <div style="color:#0048c0; padding-left:10px; height:20px; background-color:#eef7ff; float:left; width:165px"><img src="Images/bgtkt.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/bgtkt.jpg" width="10" height="7" />&nbsp;<a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=4  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=4'" tppabs="http://batdongsan24h.com.vn/?Tab=10&price_id=12&type_id=4"><font color="#f97511">> 100 triệu - VND</font></a></div>
    </div>
  </div>
  <!-- Tin Thị Trường -->
  <div style="width:183px; float:left" class="left_panel">
      <div class="left_panel" class="left_panel" 
          
          style="width:177px; float:left; height:33px; background:url('Images/tygia.png') no-repeat"></div>
  
    <div style="width:177px; padding-left:3px; padding-right:3px; float:left">
      <div id="eGold" style="width:100%;" align="left">&nbsp;</div>
      
      <div id="eForex" style="width:100%; overflow-x:hidden;" align="left">&nbsp;</div>
    </div>
    <script type="text/javascript" language="javascript" src="Library.js" tppabs="http://vnexpress.net/Library/Common/Library.js"></script>
    <script type="text/javascript" language="javascript" src="Gold_Content.js" tppabs="http://vnexpress.net/Service/Gold_Content.js"></script>
    <script type="text/javascript" language="javascript" src="Forex_Content.js" tppabs="http://vnexpress.net/Service/Forex_Content.js"></script>
    <script type="text/javascript" language="javascript">
        function ShowGoldPrice() {
            var sHTML = '';
            sHTML = sHTML.concat('<table width="100%" border="0px" cellpadding="2px" cellspacing="1px" class="tbl-weather">');
            sHTML = sHTML.concat('	<tr>');
            sHTML = sHTML.concat('		<td class="td-weather-title" width="30%">Loại</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">Mua</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">Bán</td>');
            sHTML = sHTML.concat('	</tr>');
            sHTML = sHTML.concat('	<tr>');
            sHTML = sHTML.concat('		<td class="td-weather-title" width="30%">SBJ</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">').concat(vGoldSbjBuy).concat('</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">').concat(vGoldSbjSell).concat('</td>');
            sHTML = sHTML.concat('	</tr>');
            sHTML = sHTML.concat('	<tr>');
            sHTML = sHTML.concat('		<td class="td-weather-title" width="30%">SJC</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">').concat(vGoldSjcBuy).concat('</td>');
            sHTML = sHTML.concat('		<td class="td-weather-data txtr" width="35%">').concat(vGoldSjcSell).concat('</td>');
            sHTML = sHTML.concat('	</tr>');
            sHTML = sHTML.concat('	<tr>');
            sHTML = sHTML.concat('		<td colspan="3" align="center">(Nguồn:<a href="http://www.sacombank-sbj.com/" target="_blank"><img style="border: 0px none ; vertical-align: middle; width: 75px; height: 9px;" src="logoSb.gif"/*tpa=http://vnexpress.net/Images/logoSb.gif*/ alt="Sacombank"></a>)</td>');
            sHTML = sHTML.concat('	</tr>');
            sHTML = sHTML.concat('</table>');
            gmobj('eGold').innerHTML = sHTML;
        }

        function ShowForexRate() {
            var sHTML = '';
            sHTML = sHTML.concat('<table width="100%" border="1" bordercolor="#F2F2F2" cellpadding="2px" cellspacing="1px">');
            for (var i = 0; i < vForexs.length; i++) {
                sHTML = sHTML.concat('	<tr>');
                sHTML = sHTML.concat('		<td width="30%">').concat(vForexs[i]).concat('</td>');
                sHTML = sHTML.concat('		<td width="70%" align="right">').concat(vCosts[i]).concat('</td>');
                sHTML = sHTML.concat('	</tr>');
            }
            sHTML = sHTML.concat('	<tr>');
            sHTML = sHTML.concat('		<td colspan="2" align="center">(Nguồn: <a href="http://www.eximbank.com.vn/"><img src="Images/logo-EXIM.gif"/*tpa=http://vnexpress.net/Images/logo-EXIM.gif*/></a>)</td>');
            sHTML = sHTML.concat('	</tr>');
            sHTML = sHTML.concat('</table>');
            gmobj('eForex').innerHTML = sHTML;
        }
        ShowForexRate();
        ShowGoldPrice();	
        </script>
  </div>
  <!--tin chinh chu-->
  
  <script type="text/javascript">

      var delayb4scroll = 2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
      var marqueespeed = 2 //Specify marquee scroll speed (larger is faster 1-10)
      var pauseit = 1 //Pause marquee onMousever (0=no. 1=yes)?

      ////NO NEED TO EDIT BELOW THIS LINE////////////

      var copyspeed = marqueespeed
      var pausespeed = (pauseit == 0) ? copyspeed : 0
      var actualheight = ''

      function scrollmarquee() {
          if (parseInt(cross_marquee.style.top) > (actualheight * (-1) + 8))
              cross_marquee.style.top = parseInt(cross_marquee.style.top) - copyspeed + "px"
          else
              cross_marquee.style.top = parseInt(marqueeheight) + 8 + "px"
      }

      function initializemarquee() {
          cross_marquee = document.getElementById("vmarquee")
          cross_marquee.style.top = 0
          marqueeheight = document.getElementById("marqueecontainer").offsetHeight
          actualheight = cross_marquee.offsetHeight
          if (window.opera || navigator.userAgent.indexOf("Netscape/7") != -1) { //if Opera or Netscape 7x, add scrollbars to scroll and exit
              cross_marquee.style.height = marqueeheight + "px"
              cross_marquee.style.overflow = "scroll"
              return
          }
          setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
      }

      if (window.addEventListener)
          window.addEventListener("load", initializemarquee, false)
      else if (window.attachEvent)
          window.attachEvent("onload", initializemarquee)
      else if (document.getElementById)
          window.onload = initializemarquee

</script>
  <div class="left_panel" class="left_panel" 
          style="width:177px; float:left; height:33px; background:url('/Images/tinchinhphu.png') no-repeat"></div>
  <div class="left_panel" style="width:167px; height:800px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; padding:4px; float:left">
    <div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
      <div id="vmarquee" style="position: absolute; width: 98%;">
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=74485  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=74485'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=74485"><font color="#006de8">Bán đất tại Dầu Giây huyện Thống Nhất</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              125 Triệu/Tổng diện tích</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=74486  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=74486'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=74486"><font color="#006de8">Bán đất nền phân lô tại Dầu Giây huyện Thống nHất</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              125 Triệu/Tổng diện tích</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=73616  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=73616'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=73616"><font color="#006de8">Đất hợp đồng 50 năm diện tích 50.000m2 cơ hội cho các nhà đầu tư...!</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=74124  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=74124'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=74124"><font color="#006de8">Bán gấp căn hộ chung cư Hemico xala, diện tích: 85m2</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              17 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=74294  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=74294'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=74294"><font color="#006de8">Bán căn hộ chung cư VOV mễ trì, Từ liêm, hà nội</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              23 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=63973  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=63973'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=63973"><font color="#006de8">Bán 35m2 đất thổ cư ngõ 110 trần duy hưng, cầu giấy</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              96 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=64092  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=64092'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=64092"><font color="#006de8">Bán đất thổ cư ngõ 110 trần duy hưng, diện tích: 35m2</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              96 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=72665  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=72665'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=72665"><font color="#006de8">Cần bán gấp chung cư Hemisco xala, Hà Đông, Gía rẻ</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              17.5 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=70349  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=70349'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=70349"><font color="#006de8">Cần Bán gấp chung cư Ct6c xa la, diện tích: 62,5m</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              16000000 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=63055  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=63055'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=63055"><font color="#006de8">bán căn hộ chung cư N05 tòa 29T2 giá rẻ</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=62409  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=62409'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=62409"><font color="#006de8">bán chung cư C14 bộ công an, diện tích: 76m2</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              25 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=71759  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=71759'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=71759"><font color="#006de8">Bán gấp biệt thự BT7 Văn khê, Hà Đông, Gía Rẻ</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              65 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=72206  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=72206'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=72206"><font color="#006de8">Bán căn hộ chung cư VOV, Mễ Trì, diện tích: 68m2</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              25.5 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=72353  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=72353'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=72353"><font color="#006de8">Chung cư VOV Mễ trì, Từ Liêm, diện tích: 68m2, Gía rẻ</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=69359  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=69359'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=69359"><font color="#006de8">Bán chung cư Hapulico, thanh xuân, hà nội, giá rẻ</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              32.5 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=24077  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=24077'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=24077"><font color="#006de8">CHÍNH CHỦ BÁN LÔ ĐẤT BIỆT THỰ 320  m2 Hoàng Tân, Yên Hưng,Quảng Ninh</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              7 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=67568  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=67568'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=67568"><font color="#006de8">CHO THUÊ PHÒNG PHÔ NGUYÊN VĂN TRÔÌ HA NÔÌ (gần đương Giai Phong) 01292315452</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              2400 Trăm ngàn/Tháng</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=64733  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=64733'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=64733"><font color="#006de8">TIM 1 NU SINH O GHEP phô Nguyên Văn Trỗi HN (gần đương giai phong) 0906031563</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              800 Trăm ngàn/Tháng</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=65777  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=65777'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=65777"><font color="#006de8">CHIINH CHU BAN 200 - 800 m2 đất  xen kep 5 % tại Yên Sở Hà Nội</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              13 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=70861  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=70861'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=70861"><font color="#006de8">CHO THUÊ NHA 3,5 TÂNG LAM VAN PHONG TAI HA NOI( GAN DUONG GIAI PHONG)</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              15 Triệu/Tháng</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=50817  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=50817'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=50817"><font color="#006de8">đất resort mũi né cần bán</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=50818  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=50818'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=50818"><font color="#006de8">bán đất resort mũi né</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=50816  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=50816'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=50816"><font color="#006de8">bán đất resort mũi né</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=45195  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=45195'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=45195"><font color="#006de8">Bán đất Resort  Hàm tiến_ TP phan thiết</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=63005  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=63005'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=63005"><font color="#006de8">Đất ReSort Mũi Né. cơ hội đầu tư tuyệt vời cho bạn.</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=49003  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=49003'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=49003"><font color="#006de8">Cho thuê đất Resort Mũi né</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=50688  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=50688'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=50688"><font color="#006de8">Cần Tiền Bán gấp CH 91m2 Tòa Ct5B Văn Khê giá hợp lý</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              22.5 Triệu/m2</div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=35974  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=35974'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=35974"><font color="#006de8">Bán đất lk 120m2 Khu ĐTM Lê Trọng Tấn</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=36810  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=36810'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=36810"><font color="#006de8">Cần mua nhà lk đô thị mới quận Hà Đông</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
          <div style="width:160px; float:left"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=63679  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=63679'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=63679"><font color="#006de8">Bán CH 110m2 Tòa Ct2 Chung Cư C14_BCA</font></a></div>
          <div style="width:160px; float:left; color:#f66c03;"><br />
              
              Thỏa thuận
              </div>
          <div style="width:160px; float:left"><hr size="1" color="#CCCCCC" width="90%" noshade="noshade" /></div>
          
      </div>
    </div>
  </div>
  
<!-- Quảng Cáo-->
  
  <div style="width:177px; padding-left:0px; float:left; margin-top:10px">
    <div style="width:175px;border:1px #0088f4 solid; float:left">
      <div style="padding:5px; float:left; width:175px; text-align:center"><strong>THỐNG KÊ</strong></div>
      <div style="padding:5px; float:left; float:left; width:175px"><strong>Tin rao: 8.067.275</strong></div>
      <div style="padding:5px; float:left; float:left; width:175px"><strong>Thành viên: 3.005.564</strong></div>
      <div style="padding:5px; float:left; float:left; width:175px"><strong>Online: 342</strong></div>
      <div style="padding:5px; float:left; float:left; width:175px"><strong>Tổng truy cập: 16.456.837</strong></div>
    </div>
  </div>

  </div>
  <div style="width:630px; float:left; margin-left:3px">
    <div style="width:630px; float:left; background-color:#e9e9e9">
      <div style="width:630px; height:106px; float:left;background:no-repeat; background-color: #FFFAE8;">
        <div style="width:100%; margin-top:15px">
          <form action="http://batdongsan24h.com.vn/?Tab=10" method="post" 
            style="background-color: #FFFAE8">
            <div style=" width:200px;padding-left:7px; float:left" class="search_mode">
              <input type="text" name="keyword" id="keyword" value="Từ khóa tìm kiếm" onfocus="PriceOnFocus(this.id)" onblur="PriceOnBlur(this.id)" style="width:198px;"/>
            </div>
            <div style=" width:200px;float:left; padding-left:7px" class="search_mode">
              <select name="Cat_ID" id="Cat_ID" style="width:200px;" onchange="makeRequest('./Ajax/loadLBS.asp', 'LoadBDS', 'POST', 'capo='+this.value, DivLoad);">
                <option value="">Loại hình giao dịch</option>
                <option value="0">&nbsp;+&nbsp;Cần bán</option>
                <option value="1">&nbsp;+&nbsp;Cho thuê</option>
                <option value="2">&nbsp;+&nbsp;Cần mua</option>
                <option value="3">&nbsp;+&nbsp;Cần thuê</option>
                <option value="4">&nbsp;+&nbsp;Rao vặt khác</option>
              </select>
            </div>
            <div style="width:200px;padding-left:7px; float:left;padding-left:7px" id="LoadBDS" class="search_mode">
              <select name="Cat_Sub_ID" id="Cat_Sub_ID" style="width:200px;">
                <option value="">Loại bất động sản</option>
              </select>
            </div>
            <div style="width:200px; padding-left:7px; float:left" class="search_mode">
              
              <select name="City_ID" id="City_ID" style="width:200px" onchange=		"javascript:makeRequest('Ajax/LoadQ.asp?idQ='+this.value, 'LoadQ', 'GET','',DivLoad)">
                <option value="">Thành Phố</option>
                
                <option value="1">Hà Nội 1</option>
                
                <option value="17">Hà Nội 2</option>
                
                <option value="20">TP. HCM</option>
                
                <option value="21">An Giang</option>
                
                <option value="22">Bắc Cạn</option>
                
                <option value="23">Bắc Giang</option>
                
                <option value="24">Bạc Liêu</option>
                
                <option value="47">Bắc Ninh</option>
                
                <option value="25">Bến Tre</option>
                
                <option value="67">Bình Định</option>
                
                <option value="68">Bình Dương</option>
                
                <option value="69">Bình Phước</option>
                
                <option value="70">Bình Thuận</option>
                
                <option value="71">BR.Vũng Tàu</option>
                
                <option value="72">Cà Mau</option>
                
                <option value="73">Cần Thơ</option>
                
                <option value="74">Cao Bằng</option>
                
                <option value="75">Đà Nẵng</option>
                
                <option value="76">Đắc Lắc</option>
                
                <option value="77">Đồng Nai</option>
                
                <option value="78">Gia Lai</option>
                
                <option value="79">Hà Giang</option>
                
                <option value="80">Hà Nam</option>
                
                <option value="81">Hà Tĩnh</option>
                
                <option value="82">Hải Dương</option>
                
                <option value="83">Hải Phòng</option>
                
                <option value="84">Hòa Bình</option>
                
                <option value="85">Huế</option>
                
                <option value="86">Hưng Yên</option>
                
                <option value="87">Khánh Hòa</option>
                
                <option value="88">Kiên Giang</option>
                
                <option value="89">Kon Tum</option>
                
                <option value="90">Lai Châu</option>
                
                <option value="91">Lâm Đồng</option>
                
                <option value="92">Lạng Sơn</option>
                
                <option value="93">Lào Cai</option>
                
                <option value="94">Long An</option>
                
                <option value="95">Nam Định</option>
                
                <option value="96">Nghệ An</option>
                
                <option value="97">Ninh Bình</option>
                
                <option value="98">Ninh Thuận</option>
                
                <option value="99">Phú Thọ</option>
                
                <option value="100">Phú Yên</option>
                
                <option value="101">Quảng Bình</option>
                
                <option value="102">Quảng Nam</option>
                
                <option value="103">Quảng Ngãi</option>
                
                <option value="104">Quảng Ninh</option>
                
                <option value="105">Quảng Trị</option>
                
                <option value="106">Sóc Trăng</option>
                
                <option value="107">Sơn La</option>
                
                <option value="108">Tây Ninh</option>
                
                <option value="109">Thái Bình</option>
                
                <option value="110">Thái Nguyên</option>
                
                <option value="111">Thanh Hóa</option>
                
                <option value="112">Tiền Giang</option>
                
                <option value="113">Trà Vinh</option>
                
                <option value="114">Tuyên Quang</option>
                
                <option value="115">Vĩnh Long</option>
                
                <option value="116">Vĩnh Phúc</option>
                
                <option value="117">Yên Bái</option>
                
              </select>
              
            </div>
            <div style="float:left; width:200px;padding-left:7px" id="LoadQ" class="search_mode">
              <select name="City_Sub_ID" id="City_Sub_ID" style="width:200px">
                <option value="0">Quận Huyện</option>
              </select>
            </div>
            <div class="search_mode" style="width:200px;float:left;padding-left:7px" class="search_mode">
              <input type="text" value="Mã tin đăng" name="Code" id="Code" style="width:198px" onfocus="CodeOnFocus(this.id)" onblur="CodeOnBlur(this.id)" />
            </div>
            <div class="search_mode" style="width:200px; padding-left:7px; float:left">
              <select name="area_id" id="area_id" style="width:200px;">
                <option value="">Diện tích</option>
                <option value="1">&nbsp;+&nbsp;20 - 30 m2</option>
                <option value="2">&nbsp;+&nbsp;30 - 50 m2</option>
                <option value="3">&nbsp;+&nbsp;50 - 70 m2</option>
                <option value="4">&nbsp;+&nbsp;70 - 100 m2</option>
                <option value="5">&nbsp;+&nbsp;100 - 150 m2</option>
                <option value="6">&nbsp;+&nbsp;150 - 200 m2</option>
                <option value="7">&nbsp;+&nbsp;200 - 300 m2</option>
                <option value="8">&nbsp;+&nbsp;300 - 500 m2</option>
                <option value="9">&nbsp;+&nbsp;500 - 1000 m2</option>
                <option value="10">&nbsp;+&nbsp;1000 - 2000 m2</option>
                <option value="11">&nbsp;+&nbsp;> 2000 m2</option>
              </select>
            </div>
            <div class="search_mode" style="width:200px;float:left;padding-left:7px">
              <select name="price_id" id="price_id" style="width:200px;">
                <option value="">Giá</option>
                <option value="1">&nbsp;+&nbsp;1 - 3 triệu</option>
                <option value="2">&nbsp;+&nbsp;3 - 5 triệu</option>
                <option value="3">&nbsp;+&nbsp;5 - 10 triệu</option>
                <option value="4">&nbsp;+&nbsp;10 - 40 triệu</option>
                <option value="5">&nbsp;+&nbsp;40 - 70 triệu</option>
                <option value="6">&nbsp;+&nbsp;70 - 100 triệu</option>
                <option value="7">&nbsp;+&nbsp;100 - 300 triệu</option>
                <option value="8">&nbsp;+&nbsp;300 - 500 triệu</option>
                <option value="9">&nbsp;+&nbsp;500 - 1000 triệu</option>
                <option value="10">&nbsp;+&nbsp;1 - 3 tỷ</option>
                <option value="11">&nbsp;+&nbsp;> 3 tỷ</option>
              </select>
            </div>
            <div class="search_mode" style="width:200px;float:left;padding-left:7px">
              <input type="image" src="Images/timkiem.png" tppabs="http://batdongsan24h.com.vn/Images/Skins/timkiem.png" width="200px" height="20" style="border:0px"/>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div style="width:630px; float:left; background-color: #FFFAE8;">
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#e9e9e9" 
            style="background-color: #FFFAE8">
  <tr>
    <td width="630" valign="top" style="border:1px #dcdcdc solid;"><table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="620" style="padding:5px; background-color:#FFF;">
            <table cellpadding="2" cellspacing="2" width="100%">
              <tr>
                
                <td width="205" valign="top" style="border:1px #CCC solid; "><table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                      <td colspan="2"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59016  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59016'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59016"><font color="#0088f4"><strong>CỤM CÔNG NGHIỆP KIM BÌNH</strong></font></a></td>
                    </tr>
                    <tr>
                      <td align="center" width="90" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="80" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59016  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59016'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59016"><img src="Images/121832139201158187651751.jpg" tppabs="http://batdongsan24h.com.vn/Buysell/9-13-2011/121832139201158187651751.jpg" border="0" style="padding-bottom:0px" align="left" width="80" height="97" alt="" /></a></td></tr></table></td>
                      <td width="125" style="padding:5px;" valign="top"><div align="justify"> <font color="#fb812b">
                          
                          Cần bán
                          
                          <br />
                          
                          <strong>34 Triệu</strong>
                          
                          </font><br />
                          Đống Đa - Hà Nội 1
                          <br />
                          Chung cư <br />
                          <strong>96 m2</strong> </div></td>
                    </tr>
                  </table></td>
                
                <td width="205" valign="top" style="border:1px #CCC solid; "><table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                      <td colspan="2"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59014  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59014'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59014"><font color="#0088f4"><strong>CỤM CÔNG NGHIỆP HOÀNG ĐÔNG</strong></font></a></td>
                    </tr>
                    <tr>
                      <td align="center" width="90" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="80" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59014  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59014'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59014"><img src="Images/114620139201158187651751.jpg" tppabs="http://batdongsan24h.com.vn/Buysell/9-13-2011/114620139201158187651751.jpg" border="0" style="padding-bottom:0px" align="left" width="80" height="51" alt="" /></a></td></tr></table></td>
                      <td width="125" style="padding:5px;" valign="top"><div align="justify"> <font color="#fb812b">
                          
                          Cần bán
                          
                          <br />
                          
                          <strong>4.5 Triệu</strong>
                          
                          </font><br />
                          Huyện Thuận Thành - Bắc Ninh
                          <br />
                          Biệt thự - Chia lô <br />
                          <strong>95 m2</strong> </div></td>
                    </tr>
                  </table></td>
                
            </table>
            </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="630" valign="top" style="padding-top:10px;"><table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="302" height="245" valign="top">
            <div class="div44" id="banner_top_1"><a target="_blank">
                <img src="Images/slide5.jpg" 
                    tppabs="Images/slide5.jpg" 
                    width="302" height="226" /></a></div>
            
            <div class="div44" id="banner_top_2"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=145  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=145'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=145" target="_blank">
                <img src="Images/slide1.jpg" 
                    tppabs="Images/slide1.jpg" 
                    width="302" height="226" /></a></div>
            
            <div class="div44" id="banner_top_3"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=924  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=924'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=924" target="_blank">
                <img src="Images/slide2.jpg" 
                    tppabs="Images/slide2.jpg" 
                    width="302" height="226" /></a></div>
            
            <div class="div44" id="banner_top_4"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=769  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=769'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=769" target="_blank">
                <img src="Images/slide3.jpg" 
                    tppabs="Images/slide3.jpg" width="302" 
                    height="226" /></a></div>
            
            <div class="div44" id="banner_top_5"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=973  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=973'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=973" target="_blank">
                <img src="Images/slide4.jpg" 
                    tppabs="Images/slide4.jpg" width="302" 
                    height="226" /></a></div>
            
            <div style="width:302px; background:#AAAAAA; padding-top:3px; padding-bottom:3px; padding-right:2px;" align="right" id="banner_top_paging"></div>
            <script language="javascript" type="text/javascript">                total_page = 5; index = Math.floor(Math.random() * (total_page - 1)); num = index + 1; var place = 'banner_top_'; ChangeEventContent(num, total_page, place); function ChangeEventContent(page, pages, place1) { if (pages > 1) { var current_page = page; var paging = ''; for (var i = 1; i <= pages; i++) { if (i == current_page) { document.getElementById(place1 + i).style.display = ''; paging = paging + '<span class="smallLinkSpan">' + i + '</span>'; if (current_page == pages) num = 1; else num = current_page + 1; } else { document.getElementById(place1 + i).style.display = 'none'; paging = paging + '<a href="javascript:" onclick="return flase" onmouseover="javascript:ChangeEventContent(' + i + ', ' + pages + ',\'' + place1 + '\')" class="smallLink">' + i + "</a>"; } } document.getElementById(place1 + 'paging').innerHTML = paging; } else document.getElementById(place1 + 'paging').innerHTML = ''; } var To_listTerm = 4000; window.setTimeout("list_event_tour(" + total_page + ",'" + place + "'," + To_listTerm + ")", To_listTerm); function list_event_tour(pages, place1, time) { for (var i = 1; i <= pages; i++) { if (document.getElementById(place1 + i).style.display == '') { if (i == pages) num = 1; else num = i + 1; } } ChangeEventContent(num, pages, place1); window.setTimeout("list_event_tour(" + pages + ",'" + place1 + "'," + time + ")", time); }</script></td>
          <td width="6"></td>
          <td width="310" height="200" valign="top" style="background-color: #FFFAE8"><div style="width:310px; height:43px">
              <img src="Images/body_42.jpg" 
                  tppabs="Images/body_42.jpg" width="310" 
                  height="43" /></div>
            <div style="position:relative; height:200px; width:308px; float:left;border-bottom:1px #dcdcdc solid; border-left:1px #dcdcdc solid; border-right:1px #dcdcdc solid;">
              
              <script type="text/javascript">
                  var delayb4scroll1 = 2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
                  var marqueespeed1 = 2 //Specify marquee scroll speed (larger is faster 1-10)
                  var pauseit = 1 //Pause marquee onMousever (0=no. 1=yes)?

                  ////NO NEED TO EDIT BELOW THIS LINE////////////

                  var copyspeed1 = marqueespeed1
                  var pausespeed1 = (pauseit == 0) ? copyspeed1 : 0
                  var actualheight1 = ''

                  function scrollmarquee1() {
                      if (parseInt(cross_marquee1.style.top) > (actualheight1 * (-1) + 8))
                          cross_marquee1.style.top = parseInt(cross_marquee1.style.top) - copyspeed1 + "px"
                      else
                          cross_marquee1.style.top = parseInt(marqueeheight1) + 8 + "px"
                  }
                  function initializemarquee1() {
                      cross_marquee1 = document.getElementById("vmarquee1")
                      cross_marquee1.style.top = 0
                      marqueeheight1 = document.getElementById("marqueecontainer1").offsetHeight
                      actualheight1 = cross_marquee1.offsetHeight
                      if (window.opera || navigator.userAgent.indexOf("Netscape/7") != -1) { //if Opera or Netscape 7x, add scrollbars to scroll and exit
                          cross_marquee1.style.height = marqueeheight1 + "px"
                          cross_marquee1.style.overflow = "scroll"
                          return
                      }
                      setTimeout('lefttime=setInterval("scrollmarquee1()",30)', delayb4scroll1)
                  }

                  if (window.addEventListener)
                      window.addEventListener("load", initializemarquee1, false)
                  else if (window.attachEvent)
                      window.attachEvent("onload", initializemarquee1)
                  else if (document.getElementById)
                      window.onload = initializemarquee1

</script>
              <div id="marqueecontainer1" onMouseover="copyspeed1=pausespeed1" onMouseout="copyspeed1=marqueespeed1">
                <div id="vmarquee1" 
                      style="position: absolute; width:100%; background-color: #FFFAE8;">
                  <table cellpadding="0" cellspacing="0" border="0" height="200" width="306" 
                        style="background-color: #FFFAE8">
                    
                    <tr>
                      <td><img src="Images/body_49.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_49.jpg" width="20" />&nbsp;
                        
                        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=71321  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=71321'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=71321" title="Bán căn hộ chung cư CT6 Văn Khê, 125m2, 4pn, 18tr/m2">Bán căn hộ chung cư CT6 Văn Khê, 125m2, 4pn, 18tr/m2</a>
                        </td>
                    </tr>
                    
                    <tr>
                      <td><img src="Images/body_49.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_49.jpg" width="20" />&nbsp;
                        
                        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59016  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59016'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59016" title="Bán Chung cư 170 Đê La Thành">Bán Chung cư 170 Đê La Thành</a>
                        </td>
                    </tr>
                    
                    <tr>
                      <td><img src="Images/body_49.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_49.jpg" width="20" />&nbsp;
                        
                        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/?Tab=11&p_id=59014  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/?Tab=11&p_id=59014'" tppabs="http://batdongsan24h.com.vn/?Tab=11&p_id=59014" title="Dự án Thuận thành Bắc Ninh">Dự án Thuận thành Bắc Ninh</a>
                        </td>
                    </tr>
                    
                  </table>
                </div>
              </div>
              
            </div></td>
        </tr>
        <tr>
          <td width="630" colspan="3" height="8"></td>
        </tr>
      </table></td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="margin-top:10px;">
  <tr>
    <td width="630"></td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="630" height="39"><img src="Images/duanmoi.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/duanmoi.jpg" width="630" height="39" /></td>
  </tr>
  <tr>
    <td width="610" valign="top" style="border-bottom:1px #dcdcdc solid; border-left:1px #dcdcdc solid; border-right:1px #dcdcdc solid;">
      <table cellpadding="2" cellspacing="2" width="100%">
        <tr>
          
          <td width="310" valign="top" style="border:1px #CCC solid;"><table cellpadding="0" cellspacing="0" width="100%" >
              <tr>
                <td colspan="2"><a href="-Tab=8&cat_id=54&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=54&sub_id=2"><font color="#0088f4"><strong>ĐTM NAM AN KHÁNH</strong></font></a></td>
              </tr>
              <tr>
                <td align="center" width="105" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="100" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=8&cat_id=54&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=54&sub_id=2"><img src="Images/922591020095818739142.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-9-2009/922591020095818739142.jpg" border="0" style="padding-bottom:0px" align="left" width="100" height="110" alt="" /></a></td></tr></table></td>
                <td width="195" style="padding:5px;" valign="top"><div align="justify">Công ty CP ĐTPT Đô thị và KCN Sông Đà tiếp tục đầu tư khu đô thị Nam An Khánh mở rộng. Khu đất này nằm giữa các khu đô thị, các cụm công nghiệp đang được đầu tư xây dựng. Khu ĐTM Nam An Khánh mở rộng </div></td>
              </tr>
            </table></td>
          
          <td width="310" valign="top" style="border:1px #CCC solid;"><table cellpadding="0" cellspacing="0" width="100%" >
              <tr>
                <td colspan="2"><a href="-Tab=8&cat_id=51&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=51&sub_id=2"><font color="#0088f4"><strong>ĐTM LÊ TRỌNG TẤN</strong></font></a></td>
              </tr>
              <tr>
                <td align="center" width="105" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="100" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=8&cat_id=51&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=51&sub_id=2"><img src="Images/9223131120095818766102.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/11-13-2009/9223131120095818766102.jpg" border="0" style="padding-bottom:0px" align="left" width="100" height="66" alt="" /></a></td></tr></table></td>
                <td width="195" style="padding:5px;" valign="top"><div align="justify">Chủ đầu tư: Công ty Cổ phần Xuất Nhập khẩu Tổng hợp Hà Nội - Geleximco. Vị trí: Hai bên đường Lê Trọng Tấn. Diện tích quy hoạch: 135ha</div></td>
              </tr>
            </table></td>
          
        </tr>
        <tr>
          <td width="310" valign="top" 
                style="border:1px #CCC solid;background-color:#FFFAE8"><table cellpadding="0" cellspacing="0" width="100%" >
              <tr>
                <td colspan="2"><a href="-Tab=8&cat_id=24&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=24&sub_id=2"><font color="#0088f4"><strong>ĐTM BẮC AN KHÁNH</strong></font></a></td>
              </tr>
              <tr>
                <td align="center" width="105" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="100" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=8&cat_id=24&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=24&sub_id=2"><img src="Images/1358028920091232425130.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/9-28-2009/1358028920091232425130.jpg" border="0" style="padding-bottom:0px" align="left" width="100" height="86" alt="" /></a></td></tr></table></td>
                <td width="195" style="padding:5px;" valign="top"><div align="justify">Dự án khu đô thị mới Bắc An Khánh, Hà Tây là một trong những dự án phát triển chuỗi đô thị dọc tuyến đường Láng Hoà Lạc do Tổng công ty VINACONEX làm chủ đầu tư.</div></td>
              </tr>
            </table></td>
          
          <td width="310" valign="top" 
                style="border:1px #CCC solid;background-color:#FFFAE8"><table cellpadding="0" cellspacing="0" width="100%" >
              <tr>
                <td colspan="2"><a href="-Tab=8&cat_id=64&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=64&sub_id=2"><font color="#0088f4"><strong>ĐTM VÂN CANH</strong></font></a></td>
              </tr>
              <tr>
                <td align="center" width="105" valign="top"><table cellpadding="0" cellspacing="0" align="center" border="0" width="100" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=8&cat_id=64&sub_id=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=8&cat_id=64&sub_id=2"><img src="Images/1241591542010581873566.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/4-15-2010/1241591542010581873566.jpg" border="0" style="padding-bottom:0px" align="left" width="100" height="50" alt="" /></a></td></tr></table></td>
                <td width="195" style="padding:5px;" valign="top"><div align="justify">Để sử dụng hiệu quả và hợp lý quỹ đất xây dựng, đáp ứng yêu cầu khớp nối hạ tầng kỹ thuật và phát triển đồng bộ các dự án theo yêu cầu của UBND tỉnh Hà Tây, đồng thời để tạo điểm nhấn kiến trúc cho tr</div></td>
              </tr>
            </table></td>
          
        </tr>                
        <tr>
          <td width="312">&nbsp;</td>
          <td width="312" align="right" style="padding-right:5px"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3'" tppabs="http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3"><font style="font-size:14px; font-weight:bold; color:#00F">Các dự án khác >>></font></a></td>
        </tr>
      </table>
      </td>
  </tr>
</table>

<table cellpadding="0" cellspacing="0" style="border:1px #0088f4 solid;">
  <tr>
    <td width="635" height="130" align="center"><script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler',
	style: {
		'width': '100%',
		'background': 'white',
		'border': '0px solid #CC3300'
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	savedirection: true,
});
</script>
      <div id="mycrawler">
        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=249  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=249'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=249" target="_blank"><img src="Images/n04.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/n04.jpg" width="120" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=145  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=145'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=145" target="_blank"><img src="Images/nak_sua2.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/nak_sua2.jpg" width="145" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=449  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=449'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=449" target="_blank"><img src="Images/bak_ban sua.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/bak_ban sua.jpg" width="140" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=254  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=254'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=254" target="_blank"><img src="Images/hanoi landmark tower.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/hanoi landmark tower.jpg" width="125" height="120"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="-Tab=2&news_id=220.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=220" target="_blank"><img src="Images/van canh_chay du an.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/van canh_chay du an.jpg" width="250" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="-Tab=2&news_id=217.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=217" target="_blank"><img src="Images/kim trung - di trach (duan).jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/kim trung - di trach (duan).jpg" width="175" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="-Tab=2&news_id=216.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=216" target="_blank"><img src="Images/tan tay do.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/tan tay do.jpg" width="155" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=924  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=924'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=924" target="_blank"><img src="Images/royal-city.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/royal-city.jpg" width="172" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="-Tab=2&news_id=170.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=170" target="_blank"><img src="Images/165-thai-ha.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/165-thai-ha.jpg" width="150" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="-Tab=2&news_id=940.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=940" target="_blank"><img src="Images/thanh-ha.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/thanh-ha.jpg" width="152" height="125"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
      </div></td>
  </tr>
</table>


<script type='text/javascript' src="swfobject.js" tppabs="http://batdongsan24h.com.vn/swfobject.js"></script>
<table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px">
  <tr>
    <td width="306" height="245" valign="top"><div id="loadV">
        
        <div id='mediaspace'></div>
        <script type='text/javascript'>
            var so = new SWFObject('player.swf', '', '306', '245', '9', '#ffffff');
            so.addParam('allowfullscreen', 'true');
            so.addParam('allowscriptaccess', 'always');
            so.addParam('wmode', 'opaque');
            so.addVariable('file', 'http://localhost:5776/Flash/video1.FLV');
            so.write('mediaspace');
    </script>
        
      </div></td>
    <td width="5"></td>
    <td width="320" height="200" valign="top" style="border-bottom:1px #dcdcdc solid; border-left:1px #dcdcdc solid; border-right:1px #dcdcdc solid;">
      <div style="width:320px; height:43px"><img src="Images/body_41.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_41.jpg" width="320" height="43" /></div>
      <div style="position:relative; height:200px; width:320px; float:left;" id="video">
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=6.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=6*/,'loadV','GET','',DivLoad)"><strong>Khu Đô thị mới Bắc An Khánh</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=4.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=4*/,'loadV','GET','',DivLoad)"><strong>Dự án BĐS nổi bật phía tây Hà Nội</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=5.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=5*/,'loadV','GET','',DivLoad)"><strong>Khu Đô thị mới Dương Nội</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=7.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=7*/,'loadV','GET','',DivLoad)"><strong>Khu Đô thị mới Nam An Khánh</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=8.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=8*/,'loadV','GET','',DivLoad)"><strong>Chung cư cao cấp U City</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
        <div style="width:320px; vertical-align:middle;"><img src="Images/body_46.jpg" tppabs="http://batdongsan24h.com.vn/Images/Skins/body_46.jpg" width="20" />&nbsp; <a href="#loadV" onclick="javascript:makeRequest('_inc_Video.asp-video=9.htm'/*tpa=http://batdongsan24h.com.vn/Ajax/_inc_Video.asp?video=9*/,'loadV','GET','',DivLoad)"><strong>Khu đô thị mới Hoa Sen Đại Phước</strong></a></div>
        <div style="width:320px; height:1px;"></div>
        
      </div>
      </td>
  </tr>
</table>
<script type="text/javascript">
    function loadSelect() {
        var int;
        int = document.getElementById('cat_id').selectedIndex + 1;
        document.getElementById('ty_' + int).style.display = '';
        for (i = 1; i <= 6; i++) {
            if (i != int) {
                document.getElementById('ty_' + i).style.display = 'none';
            }
        }
    }
</script>

    </div>
  </div>
  <div style="width:177px; margin-left:3px; float:left">
    

<div style="width:177px; height:30px; float:left; background:url(../Images/bgdangnhap.jpg) no-repeat; margin-top: 5px;"></div>
<div class="right_panel" style="width:175px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; float:left">
  
  <div style="width:175px; float:left; padding-bottom:14px">
    <form action="" method="post" name="frmRegister" id="frmRegister" enctype="multipart/form-data">
      <div style="padding-right:4px; width:71px; text-align:right; float:left"><strong>Username:</strong></div>
      <div style="width:100px; float:left">
        <input type="text" style="width:80px;" autocomplete="off" maxlength="20" name="txtusername" id="txtusername" />
      </div>
      <div style="padding-right:4px; width:71px; text-align:right; float:left"><strong>Password:</strong></div>
      <div style="width:100px; float:left">
        <input type="password" style="width:80px;" autocomplete="off" maxlength="20" name="txtpassword" id="txtpassword" />
      </div>
      <div style="padding-right:4px; width:71px; text-align:right; float:left">
        <input type="checkbox" value="true" name="chPass" id="chPass" checked="checked" />
      </div>
      <div style="width:100px; float:left"><strong>Lưu thông tin</strong></div>
      <div style="width:104px; float:left; margin-left:71px">
        <input type="submit" value="Đăng nhập" name="login" id="login" />
      </div>
    </form>
    <div style="padding:5px; color:#FF3300; float:left; width:165px; text-align:left">&#8226;&nbsp;<a href="-Tab=5.htm" tppabs="http://batdongsan24h.com.vn/?Tab=5"><font color="#FF3300">Đăng ký thành viên?</font> </a></div>
    <div style="padding:5px; color:#FF3300; float:left; width:165px; text-align:left">&#8226;&nbsp;<a href="-Tab=12.htm" tppabs="http://batdongsan24h.com.vn/?Tab=12"><font color="#FF3300">Quên Mật Khẩu?</font> </a></div>
  </div>
  
</div>
<div style="width:177px; height:30px; float:left; background:url('/Images/bghotrotructuyen.png') no-repeat; margin-top: 5px;"></div>
<div class="right_panel" style="width:175px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; float:left">
  <div style="margin-left:10px; width:165px; float:left">
    
    <div style="color:#f66c03; padding:5px; width:155px"><strong>TƯ VẤN MUA BÁN</strong></div>
    
    <div style="color:#006de8; padding:5px; width:155px; float:left"><strong>Mr. Đức Toàn</strong></div>
    
    <div style="color:#355f9d; padding:5px; width:155px; float:left">
      <div style="width:27px; height:24px; float:left"><img src="Images/bds_12.gif" tppabs="http://batdongsan24h.com.vn/Images/Skins/bds_12.gif" width="27" height="24" /></div>
      <div style="padding-left:5px; font-size:12px; width:123px; float:left"><strong>0904.368036   04.39959509</strong></div>
    </div>
    
    <div style="padding-left:5px; width:155px; float:left; padding-bottom:10px"><a href="ymsgr:sendim?toannv_82"> <img border=0 src="Images/online-u=toannv_82&m=g&t=2&l=us.gif" tppabs="Images/online?u=toannv_82&m=g&t=2&l=us" width="125" height="25"></a></div>
    
    <div style="color:#006de8; padding:5px; width:155px; float:left"><strong>Mr. Quang Bắc</strong></div>
    
    <div style="color:#355f9d; padding:5px; width:155px; float:left">
      <div style="width:27px; height:24px; float:left"><img src="Images/bds_12.gif" tppabs="http://batdongsan24h.com.vn/Images/Skins/bds_12.gif" width="27" height="24" /></div>
      <div style="padding-left:5px; font-size:12px; width:123px; float:left"><strong>0913.161993   04.39959519</strong></div>
    </div>
    
    <div style="padding-left:5px; width:155px; float:left; padding-bottom:10px"><a href="ymsgr:sendim?bebu_263"> <img border=0 src="Images/online-u=bebu_263&m=g&t=2&l=us.gif" tppabs="http://opi.yahoo.com/online?u=bebu_263&m=g&t=2&l=us" width="125" height="25"></a></div>
    
    <div style="color:#006de8; padding:5px; width:155px; float:left"><strong>Mrs: Kim Loan</strong></div>
    
    <div style="color:#355f9d; padding:5px; width:155px; float:left">
      <div style="width:27px; height:24px; float:left"><img src="Images/bds_12.gif" tppabs="http://batdongsan24h.com.vn/Images/Skins/bds_12.gif" width="27" height="24" /></div>
      <div style="padding-left:5px; font-size:12px; width:123px; float:left"><strong>0904.226254     043.9954668</strong></div>
    </div>
    
    <div style="padding-left:5px; width:155px; float:left; padding-bottom:10px"><a href="ymsgr:sendim?loank2008@yahoo.com.vn"> <img border=0 src="Images/online-u=loank2008@yahoo.com.vn&m=g&t=2&l=us.gif" tppabs="http://opi.yahoo.com/online?u=loank2008@yahoo.com.vn&m=g&t=2&l=us" width="125" height="25"></a></div>
    
    <!--tu van ban hang-->
    
    <!--tu van phap ly-->
    
    <div style="color:#f66c03; padding:5px; width:155px"><strong>TƯ VẤN PHÁP LÝ</strong></div>
    
    <div style="color:#006de8; padding:5px; width:155px; float:left"><strong>Mr. Quang Bắc</strong></div>
    
    <div style="color:#355f9d; padding:5px; width:155px; float:left">
      <div style="width:27px; height:24px; float:left"><img src="Images/bds_12.gif" tppabs="http://batdongsan24h.com.vn/Images/Skins/bds_12.gif" width="27" height="24" /></div>
      <div style="padding-left:5px; font-size:12px; width:123px; float:left"><strong>0913.161993   04.39959519</strong></div>
    </div>
    
    <div style="padding-left:5px; width:155px; float:left; padding-bottom:10px"><a href="ymsgr:sendim?bebu_263"> <img border=0 src="Images/online-u=bebu_263&m=g&t=2&l=us.gif" tppabs="http://opi.yahoo.com/online?u=bebu_263&m=g&t=2&l=us" width="125" height="25"></a></div>
    
    <!--tu van cho thue - thue-->
    
    <div style="color:#f66c03; padding:5px; width:155px"><strong>TƯ VẤN CHO THUÊ - THUÊ</strong></div>
    
    <div style="color:#006de8; padding:5px; width:155px; float:left"><strong>Mr. Quang Bắc</strong></div>
    
    <div style="color:#355f9d; padding:5px; width:155px; float:left">
      <div style="width:27px; height:24px; float:left"><img src="Images/bds_12.gif" tppabs="http://batdongsan24h.com.vn/Images/Skins/bds_12.gif" width="27" height="24" /></div>
      <div style="padding-left:5px; font-size:12px; width:123px; float:left"><strong>0913.161993</strong></div>
    </div>
    
    <div style="padding-left:5px; width:155px; float:left; padding-bottom:10px"><a href="ymsgr:sendim?bebu_263"> <img border=0 src="Images/online-u=bebu_263&m=g&t=2&l=us.gif" tppabs="http://opi.yahoo.com/online?u=bebu_263&m=g&t=2&l=us" width="125" height="25"></a></div>
    
  </div>
</div>
<!--du an moi-->

<div style="width:177px; height:30px; float:left; background:url('Images/bgduannoibat.png') no-repeat; margin-top: 5px;"></div>
<div class="right_panel" style="width:167px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; padding:4px; float:left">
  <marquee direction="up" scrollamount="2" scrolldelay="2" height="600" onmouseout="start()" onmouseover="stop()">
  
  <div style="width:167px; float:left">
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=4663.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4663">&#039;Tôi cướp tiệm vàng để lấy tiền trả nợ&#039;</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=4330.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4330"><img src="Images/9555311720115818737991.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-11-2011/9555311720115818737991.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="36" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=4330.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4330">Xây dự án phức hợp trên khu đất &#039;vàng&#039; TP HCM</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399"><img src="Images/1043911320115818768211.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/3-11-2011/1043911320115818768211.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="25" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=3399">Khu đô thị mới Đức Việt</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=2894.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2894"><img src="Images/1523851201158187331521.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/1-5-2011/1523851201158187331521.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="34" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=2894.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2894">Khu nhà ở sinh thái Vinaconex 2</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=2893.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2893"><img src="Images/15185451201158187331521.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/1-5-2011/15185451201158187331521.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="37" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=2893.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2893">Vườn dưỡng sinh trên cao đầu tiên tại Việt Nam</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=2892.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2892"><img src="Images/1517351201158187331521.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/1-5-2011/1517351201158187331521.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="39" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=2892.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2892">Đồng Nai: Đầu tư 47 triệu USD xây Khu cao ốc liên hợp</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=2890.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2890"><img src="Images/15124551201158187331521.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/1-5-2011/15124551201158187331521.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="37" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=2890.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=2890">Khu đô thị Hải Minh</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1283.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1283"><img src="Images/163249211201058187671681.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/11-2-2010/163249211201058187671681.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="33" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1283.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1283">Mở bán tòa số 4 khu căn hộ The Vista, TP HCM</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1250.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1250"><img src="Images/145122910201058187671681.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-29-2010/145122910201058187671681.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="39" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1250.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1250">TP HCM sắp có trung tâm tài chính gần tỷ USD</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1228.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1228"><img src="Images/847162710201058187671681.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-27-2010/847162710201058187671681.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="36" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1228.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1228">Ra mắt trung tâm thương mại Picomall</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1216.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1216"><img src="Images/931112610201058187671681.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-26-2010/931112610201058187671681.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="39" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1216.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1216">Khai trương biệt thự mẫu dự án Villa Park</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1141.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1141"><img src="Images/937271410201058187321081.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-14-2010/937271410201058187321081.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="67" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1141.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1141">FutaLand mở bán đợt II dự án New Pearl Residence</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=1054.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1054"><img src="Images/84544210201058187672311.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/10-2-2010/84544210201058187672311.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="52" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=1054.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=1054">Tòa nhà Lan Phương MHBR</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=979.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=979"><img src="Images/141955128201058187351051.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/8-12-2010/141955128201058187351051.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="37" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=979.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=979">Chung cư The Pride An Hưng</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=940.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=940"><img src="Images/5302611720101187129821.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-11-2010/5302611720101187129821.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="38" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=940.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=940">Khu đô thị Thanh Hà Cienco 5</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=939.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=939"><img src="Images/16591387201058187651241.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-8-2010/16591387201058187651241.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="26" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=939.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=939">Tòa tháp đôi The Bay View Towers</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=938.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=938"><img src="Images/1657287201058187651241.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-8-2010/1657287201058187651241.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="35" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=938.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=938">Đô thị mới Cao Xanh - Hà Khánh C</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=931.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=931"><img src="Images/115558372010581872421771.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-3-2010/115558372010581872421771.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="55" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=931.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=931">ĐTM Nam An Khánh</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=924  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=924'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=924"><img src="Images/105919372010581872421771.jpeg" tppabs="http://batdongsan24h.com.vn/Images/Private/7-3-2010/105919372010581872421771.jpeg" border="0" style="padding-bottom:0px" align="left" width="50" height="39" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=924  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=924'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=924">Royal City</a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left">
    
    <div style="width:50px; float:left" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0" width="50" style="margin-top:5px; margin-left:5px; margin-right:5px; margin-bottom:5px"><tr><td><a href="-Tab=2&news_id=904.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=904"><img src="Images/20273111620101187153761.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/6-11-2010/20273111620101187153761.jpg" border="0" style="padding-bottom:0px" align="left" width="50" height="34" alt="" /></a></td></tr></table></div>
    
    <div style="width:107px; float:right; text-align:justify"><a href="-Tab=2&news_id=904.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=904">Babylon Residence</a></div>
  </div>
  <hr size="1" noshade="noshade" /></marquee>
  <div style="width:167px; float:left; text-align:right; padding-right:5px"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3'" tppabs="http://batdongsan24h.com.vn/news/?Tab=1&catenew_id=3"><font color="#0000FF"><strong>Các dự án khác >>></strong></font></a></div>
</div>

<!--tin tức mới-->

<div style="width:177px; height:30px; float:left; background:url('Images/bgtintucmoi.png') no-repeat; margin-top: 5px;"></div>
<div class="right_panel" style="width:167px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; padding:4px; float:left">
  <marquee direction="up" scrollamount="2" scrolldelay="2" height="800" onmouseover="stop()" onmouseout="start()">
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div class="right_panel" style="width:40px; float:left"><a href="htm/-Tab=2&news_id=4665.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4665">
      
      <img src="Images/113850632012123242261891.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//3-6-2012/113850632012123242261891.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="htm/-Tab=2&news_id=4665.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4665" title="Cháy khoảng 100 ha rừng ở Vườn quốc gia Hoàng Liên">Cháy khoảng 100 ha rừng ở Vườn quốc gia Hoàng Liên
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4664.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4664">
      
      <img src="Images/113345632012123242261891.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//3-6-2012/113345632012123242261891.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4664.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4664" title="Taxi bay xuống vực, 8 người bị thương">Taxi bay xuống vực, 8 người bị thương
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="htm/-Tab=2&news_id=4662.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4662">
      
      <img src="Images/23463820220121551421211.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-20-2012/23463820220121551421211.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4662.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4662" title="Tên cướp tiệm vàng có thể phải đối mặt mức án cao nhất">Tên cướp tiệm vàng có thể phải đối mặt mức án cao 
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4661.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4661">
      
      <img src="Images/22451517220121551421211.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-17-2012/22451517220121551421211.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4661.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4661" title="Đắp mặt nạ bằng vàng 24k">Đắp mặt nạ bằng vàng 24k
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4660.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4660">
      
      <img src="Images/2131117220121551421211.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-17-2012/2131117220121551421211.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4660.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4660" title="Ngân hàng đua nhau giảm lãi suất">Ngân hàng đua nhau giảm lãi suất
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4659.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4659">
      
      <img src="Images/21225917220121551421211.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-17-2012/21225917220121551421211.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4659.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4659" title="Ban tổ chức VN&#039;s Got Talent phản hồi về vụ Quỳnh Anh">Ban tổ chức VN&#039;s Got Talent phản hồi về vụ Qu
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4658.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4658">
      
      <img src="Images/11251722012581871001661.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-7-2012/11251722012581871001661.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4658.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4658" title="Dọa giết thẩm phán vì bị tăng án">Dọa giết thẩm phán vì bị tăng án
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4657.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4657">
      
      <img src="Images/105935722012581871001661.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-7-2012/105935722012581871001661.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4657.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4657" title="10 người bị điều tra hành vi &#039;lật đổ chính quyền&#039;">10 người bị điều tra hành vi &#039;lật đổ chính qu
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4656.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4656">
      
      <img src="Images/10433072201258187771731.JPG" tppabs="http://batdongsan24h.com.vn/Images/Private//2-7-2012/10433072201258187771731.JPG" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4656.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4656" title="&#039;Hải Phòng không được trả lời loanh quanh vụ ông Vươn&#039;">&#039;Hải Phòng không được trả lời loanh quanh vụ 
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4655.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4655">
      
      <img src="Images/10274172201258187771731.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-7-2012/10274172201258187771731.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4655.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4655" title="Đùn đẩy trách nhiệm vụ phá nhà ông Vươn">Đùn đẩy trách nhiệm vụ phá nhà ông Vươn
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4654.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4654">
      
      <img src="Images/10241372201258187771731.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-7-2012/10241372201258187771731.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4654.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4654" title="&#039;Tiên Lãng sai từ gốc khi áp dụng luật đất đai&#039;">&#039;Tiên Lãng sai từ gốc khi áp dụng luật đất đa
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4653.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4653">
      
      <img src="Images/18324522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/18324522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4653.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4653" title="Huyện Tiên Lãng trần tình về quyết định thu hồi đất">Huyện Tiên Lãng trần tình về quyết định thu hồi đấ
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4652.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4652">
      
      <img src="Images/182937522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/182937522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4652.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4652" title="&#039;Đề nghị thu hồi quyết định cưỡng chế đối với ông Vươn&#039;">&#039;Đề nghị thu hồi quyết định cưỡng chế đối với
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4651.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4651">
      
      <img src="Images/182741522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/182741522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4651.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4651" title="&#039;Dân sẽ không yên nếu chậm xử lý vụ Tiên Lãng&#039;">&#039;Dân sẽ không yên nếu chậm xử lý vụ Tiên Lãng
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4650.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4650">
      
      <img src="Images/182533522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/182533522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4650.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4650" title="Ông Đoàn Văn Vươn mời luật sư bào chữa">Ông Đoàn Văn Vươn mời luật sư bào chữa
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4649.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4649">
      
      <img src="Images/182228522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/182228522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4649.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4649" title="Huyện Tiên Lãng khẳng định không phá nhà ông Vươn">Huyện Tiên Lãng khẳng định không phá nhà ông Vươn
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4648.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4648">
      
      <img src="Images/182042522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/182042522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4648.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4648" title="Chủ tịch HảChủ tịch Hải Phòng: &#039;Vụ Tiên Lãng cứ theo luật mà làm&#039;&#039;">Chủ tịch HảChủ tịch Hải Phòng: &#039;Vụ Tiên Lãng 
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4647.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4647">
      
      <img src="Images/181820522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/181820522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4647.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4647" title="&#039;Cảnh báo sóng ngầm sau vụ cưỡng chế ở Hải Phòng&#039;">&#039;Cảnh báo sóng ngầm sau vụ cưỡng chế ở Hải Ph
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4646.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4646">
      
      <img src="Images/181641522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/181641522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4646.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4646" title="Thanh tra vụ cưỡng chế đất ở Hải Phòng">Thanh tra vụ cưỡng chế đất ở Hải Phòng
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4645.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4645">
      
      <img src="Images/181518522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/181518522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4645.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4645" title="Luật sư nhận bào chữa miễn phí cho ông Vươn">Luật sư nhận bào chữa miễn phí cho ông Vươn
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4644.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4644">
      
      <img src="Images/181357522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/181357522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4644.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4644" title="&#039;Chưa minh bạch trong việc cưỡng chế đất ở Hải Phòng&#039;">&#039;Chưa minh bạch trong việc cưỡng chế đất ở Hả
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4643.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4643">
      
      <img src="Images/181220522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/181220522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4643.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4643" title="&#039;Cưỡng chế đầm tôm ông Vươn để đảm bảo công bằng&#039;">&#039;Cưỡng chế đầm tôm ông Vươn để đảm bảo công b
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4642.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4642">
      
      <img src="Images/18951522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/18951522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4642.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4642" title="&#039;Khu vực đất cưỡng chế ở Hải Phòng sẽ làm sân bay&#039;">&#039;Khu vực đất cưỡng chế ở Hải Phòng sẽ làm sân
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4641.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4641">
      
      <img src="Images/18810522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/18810522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4641.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4641" title="Lập đoàn giám sát vụ cưỡng chế đất Hải Phòng">Lập đoàn giám sát vụ cưỡng chế đất Hải Phòng
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4640.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4640">
      
      <img src="Images/18653522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/18653522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4640.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4640" title="Phó chủ tịch Hải Phòng: &#039;Dân bất bình nên phá nhà ông Vươn&#039;">Phó chủ tịch Hải Phòng: &#039;Dân bất bình nên phá
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4639.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4639">
      
      <img src="Images/1855522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/1855522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4639.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4639" title="Thủ tướng: &#039;Làm rõ trách nhiệm vụ cưỡng chế ở Hải Phòng&#039;">Thủ tướng: &#039;Làm rõ trách nhiệm vụ cưỡng chế ở
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4638.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4638">
      
      <img src="Images/18338522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/18338522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4638.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4638" title="Hàng chục chủ đầm nơm nớp lo bị cưỡng chế đất">Hàng chục chủ đầm nơm nớp lo bị cưỡng chế đất
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4636.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4636">
      
      <img src="Images/174239522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/174239522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4636.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4636" title="Bộ Công an vào cuộc vụ cưỡng chế đất ở Hải Phòng">Bộ Công an vào cuộc vụ cưỡng chế đất ở Hải Phòng
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4634.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4634">
      
      <img src="Images/173942522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/173942522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4634.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4634" title="Những vướng mắc trong vụ cưỡng chế đất ở Hải Phòng">Những vướng mắc trong vụ cưỡng chế đất ở Hải Phòng
      </a></div>
  </div>
  <hr size="1" noshade="noshade" />
  
  <div style="width:167px; float:left; padding-bottom:5px">
    <div style="width:40px; float:left"><a href="-Tab=2&news_id=4633.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4633">
      
      <img src="Images/17383522012581872161141.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private//2-5-2012/17383522012581872161141.jpg" width="40" height="40"/>
      
      </a></div>
    <div style="width:125px; float:left; padding-left:2px"><a href="-Tab=2&news_id=4633.htm" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=4633" title="Cưỡng chế thu hồi đất gây thiệt hại phải bồi thường  Cưỡng chế thu hồi đất gây thiệt hại phải bồi thường">Cưỡng chế thu hồi đất gây thiệt hại phải bồi thườn
      ...
      
      </a></div>
  </div>
  <hr size="1" noshade="noshade" /></marquee>
</div>

<!--quang cao-->
<div style="width:177px; height:42px; float:left; background:url(../Images/bds_115.gif) no-repeat"></div>
<div style="width:175px; border-left:1px #0088f4 solid; border-right:1px #0088f4 solid; border-bottom:1px #0088f4 solid; float:left">
  
  <div style="width:175px; float:left; padding-bottom:4px" align="center"><a href="javascript:if(confirm('http://quocteviet.com.vn/?Tab=1&id=4  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://quocteviet.com.vn/?Tab=1&id=4'" tppabs="http://quocteviet.com.vn/?Tab=1&id=4" target="_blank"><img src="Images/qtviet.gif" tppabs="http://batdongsan24h.com.vn/Images/Private/qtviet.gif" width="170" height="129"></a></div>
  
  <div style="width:175px; float:left; padding-bottom:4px" align="center"><a href="javascript:if(confirm('http://phongthuygia.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://phongthuygia.com/'" tppabs="http://phongthuygia.com/" target="_blank"><img src="Images/168-168.gif" tppabs="http://batdongsan24h.com.vn/Images/Private/168-168.gif" width="168" height="168"></a></div>
  
  <div style="width:175px; float:left; padding-bottom:4px" align="center"><a href="javascript:if(confirm('http://batdongsan24h.com.vn/news/?Tab=2&news_id=973  \n\nThis file was not retrieved by Teleport Pro, because the server reports that an error occurred that prevented retrieval.  \n\nDo you want to open it from the server?'))window.location='http://batdongsan24h.com.vn/news/?Tab=2&news_id=973'" tppabs="http://batdongsan24h.com.vn/news/?Tab=2&news_id=973" target="_blank"><img src="Images/tuyencongtacvien.jpg" tppabs="http://batdongsan24h.com.vn/Images/Private/tuyencongtacvien.jpg" width="170" height="130"></a></div>
  
</div>

  </div>
</div>


<div style="width:994px; border:1px #0088f4 solid; margin-top:5px; float:left">
   <script language="JavaScript1.2"> 
var sliderwidth="994px"
//Specify the slider's height
var sliderheight="110px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=1
//configure background color:
slidebgcolor="#FFFFFF"
//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''

leftrightslide[0]='<a href="http://www.hud.com.vn/" target="_blank"><img src="Images/20090106_1.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/advertise/20090106_1.jpg*/ width="158" height="100"></a>'

leftrightslide[1]='<a href="http://www.constrexim.com.vn/" target="_blank"><img src="Images/20090106_4.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/advertise/20090106_4.jpg*/ width="101" height="100"></a>'

leftrightslide[2]='<a href="index.htm"/*tpa=http://batdongsan24h.com.vn/*/ target="_blank"><img src="Images/banner_bds.gif"/*tpa=http://batdongsan24h.com.vn/Images/Private/banner_bds.gif*/ width="160" height="95"></a>'

leftrightslide[3]='<a href="http://vinaconex.com.vn/" target="_blank"><img src="Images/vinaconex.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/vinaconex.jpg*/ width="141" height="96"></a>'

leftrightslide[4]='<a href="http://www.bidv.com.vn/" target="_blank"><img src="Images/bidv.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/bidv.jpg*/ width="80" height="100"></a>'

leftrightslide[5]='<a href="https://www.techcombank.com.vn/" target="_blank"><img src="Images/techcombank.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/techcombank.jpg*/ width="145" height="78"></a>'

leftrightslide[6]='<a href="http://www.militarybank.com.vn/" target="_blank"><img src="Images/mbbank.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/mbbank.jpg*/ width="142" height="90"></a>'

leftrightslide[7]='<a href="http://www.agribank.com.vn/" target="_blank"><img src="Images/aribank.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/aribank.jpg*/ width="100" height="100"></a>'

leftrightslide[8]='<a href="http://www.sudicosd.com.vn/" target="_blank"><img src="Images/song da.jpg"/*tpa=http://batdongsan24h.com.vn/Images/Private/song da.jpg*/ width="100" height="100"></a>'
      
var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(" ")+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide
 
function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+20+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+20
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup
 
function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+0+"px"
 
if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+0+"px"
 
}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+30
 
if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+30
}
} 
if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0" height=90><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:5px"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:5px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
write('<layer name="ns_slidemenu2" left=0 top=5 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('<layer name="ns_slidemenu3" left=0 top=5 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>
</div>

<div style="margin-top:10px; float:left; width:996px" align="center">
    <div style="width:996px; height:130px; background:url(Images/Skins/bgbottom.jpg) repeat-x; color:#FFF; padding-top:7px;">
    <a href="index.htm" tppabs="http://batdongsan24h.com.vn/"><font color="#FFFFFF"><strong>Trang Chủ</strong></font></a> | <a href="-Tab=1.htm" tppabs="http://batdongsan24h.com.vn/?Tab=1"><font color="#FFFFFF"><strong>Tin Tức</strong></font></a> | <a href="-Tab=2.htm" tppabs="http://batdongsan24h.com.vn/?Tab=2"><font color="#FFFFFF"><strong>Quảng Bá</strong></font></a> | <a href="-Tab=3.htm" tppabs="http://batdongsan24h.com.vn/?Tab=3"><font color="#FFFFFF"><strong>Hỏi Đáp</strong></font></a> | <a href="-Tab=4.htm" tppabs="http://batdongsan24h.com.vn/?Tab=4"><font color="#FFFFFF"><strong>Liên Hệ</strong></font></a> | <a href="-Tab=5.htm" tppabs="http://batdongsan24h.com.vn/?Tab=5"><font color="#FFFFFF"><strong>Đăng Ký</strong></font></a>
   <p align="center"> =   =   =   =   =   =   =   =   =   =   =   =   =   =   =   =   =   =  =   =   =   =  <br />
<font size="2"><strong>Công ty CP Đầu tư và Môi giới Bất Động Sản 24H</strong></font><br />
Trụ sở: Số 26 Ngõ 8 Phố Nguyễn Thị Định - Trung Hòa - Nhân Chính - Cầu Giấy - Hà Nội<br />
ĐT: 04.39959519-09 / Fax: 04.35642321 / Mobile: 0913.161 993 / 0904.368 036<br />
Mail: <a href="mailto:ceo@batdongsan24h.com.vn"><font size="2"><i>ceo@batdongsan24h.com.vn</i></font></a> / <a href="mailto:toan.bds24h@batdongsan24h.com.vn"><font size="2"><i>toan.bds24h@batdongsan24h.com.vn</i></font></a>  <br />
Website: <a href="index.htm" tppabs="http://batdongsan24h.com.vn/"><font size="2"><i>www.batdongsan24h.com.vn</i></font></a><br />
    </p>
    </div>
</div>
  </div>
</div>
</body>
</html>
