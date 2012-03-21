<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Ban_tin.aspx.cs" Inherits="NIW_Website_2.Sites.Ban_tin" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <!-- basic meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow" />
    <!-- title -->
    <title runat="server" id="title_web">NIW &#8211; Tin tức</title>
    <!-- feeds and pingback -->
    <link rel="alternate" type="application/rss+xml" title="Avisio &#8211; a flexible Wordpress Theme RSS2 Feed"
        href="http://www.kriesi.at/themes/avisio/feed/" />
    <link rel="pingback" href="http://www.kriesi.at/themes/avisio/xmlrpc.php" />
    <!-- stylesheets -->
    <link rel="stylesheet" href="http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/js/prettyPhoto/css/prettyPhoto.css"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/style.css"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/css/style1.css"
        type="text/css" media="screen" />
    <link type="text/css" href="../CSS/StyleSheet1.css" rel="Stylesheet" />
    <!-- ########## end css ########## -->
    <!-- scripts -->
    <!--[if IE 6]>
<script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/js/dd_belated_png.js'></script>
<script>DD_belatedPNG.fix('.ie6fix, blockquote');</script>
<style>.box ul li a, li, .hr {zoom:1;}</style>
<![endif]-->
    <!--[if lt IE 9]>
<style>.boxed {border:1px solid #fff}</style>
<![endif]-->
    <!-- Make Slideshow variables available for Javascript-->
    <script type='text/javascript'>
        slideShowArray = [];
        slideShowArray['feature_count'] = '10';
        slideShowArray['slide_autorotate'] = '1';
        slideShowArray['slide_duration'] = '5';
        slideShowArray['slide_transition'] = '900';
        slideShowArray['box_height'] = 'full';
        slideShowArray['box_width'] = '50';
        slideShowArray['box_transition'] = 'drop';
        slideShowArray['box_transition_delay'] = '90';
        slideShowArray['hidden'] = '';
        slideShowArray['transition_direction_0'] = '';
        slideShowArray['transition_direction_hidden'] = '1';
        slideShowArray['transition_direction_final'] = '';
        slideShowArray['save_my_options'] = '1';
        slideShowArray['Submit'] = 'Save Changes'; 
    </script>
    <meta name='robots' content='index,follow' />
    <link rel="alternate" type="application/rss+xml" title="Avisio - a flexible Wordpress Theme &raquo; About the theme Comments Feed"
        href="http://www.kriesi.at/themes/avisio/a-little-about-you/feed/" />
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-includes/js/comment-reply.js?ver=20090102'></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-includes/js/jquery/jquery.js?ver=1.7.1'></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/js/prettyPhoto/js/jquery.prettyPhoto.js?ver=3.3.1'></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/flashplayer/flowplayer-3.1.4.min.js?ver=3.3.1'></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/js/custom.js?ver=3.3.1'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.kriesi.at/themes/avisio/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.kriesi.at/themes/avisio/wp-includes/wlwmanifest.xml" />
    <link rel='next' title='Blog' href='http://www.kriesi.at/themes/avisio/blog/' />
    <!-- Debugging help, do not remove -->
    <meta name="Framework" content="Kpress" />
    <meta name="Theme Version" content="1.2" />
    <meta name="Framework Version" content="3.1" />
    <meta name="CMS Version" content="3.3.1" />
    <link rel='canonical' href='http://www.kriesi.at/themes/avisio/a-little-about-you/' />
    <link rel="stylesheet" href="http://www.kriesi.at/themes/avisio/wp-content/plugins/kfw_styleswitch/kfw_styleswitch.css"
        type="text/css" />
    <script type="text/javascript" src="http://www.kriesi.at/themes/avisio/wp-content/plugins/kfw_styleswitch/kfw_styleswitch.js"></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/framework/fonts/cufon.js'></script>
    <script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/framework/fonts/josefine_small.font.js'></script>
    <script type='text/javascript'>

        Cufon.replace('#top h1, #top  h2, #top h3, #top  h4, #top  h5, #top  h6, #top  legend, #top .sliderheading, .big_button strong, .dynamicFont', {

            fontFamily: 'Verdana',
            hover: 'true'

        });


    </script>
    <!-- custom styles set at your backend-->
    <style type='text/css'>
        
    </style>
    <!-- end custom styles-->
    <!-- meta tags, needed for javascript -->
    <meta name="temp_url" content="http://www.kriesi.at/themes/avisio/wp-content/themes/avisio" />
</head>
<body id='top' class="page page-id-37 page-parent page-template-default">
    <form id="Form1" runat="server">
    <div id='wrap_all' class='stretched'>
        <div class="wrapper" id='wrapper_head'>
            <div class="center">
                <div id="head">
                    <h2 style="background-image: url('/images/logo150px.png'); background-repeat: no-repeat;
                        top: 0px; left: 0px; width: 157px; height: 79px;">
                    </h2>
                    <!-- Navigation for Pages starts here -->
                    <ul id="menu-main" class="nav">
                        <li id="menu-item-111" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
                            <a href="../Default.aspx" class="menu_item_2" style="font-size:14px" runat="server" id="Trang_chu">Trang chủ</a> </li>
                        <li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="Gioi_thieu.aspx"><strong class="menu_item_2" runat="server" id="Gioi_thieu">Giới thiệu</strong></a>
                        </li>
                        <li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="san_pham.aspx"><strong class="menu_item_2" runat="server" id="Dich_vu">Dịch vụ</strong></a> </li>
                        <li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="Tin_tuc.aspx"><strong class="menu_item_2" runat="server" id="Tin_tuc_menu">Tin tức</strong></a></li>
                        <asp:ImageButton runat="server" ID="english" ImageUrl="~/images/english flag.gif"
                            CssClass="menu_item_2" OnClick="english_click"/>
                        <asp:ImageButton runat="server" ID="vietnamese" ImageUrl="~/images/vietnam.jpg" CssClass="menu_item_2" OnClick="vietnamese_click" />
                    </ul>
                    <!--end head-->
                </div>
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper wrapper_heading ie6fix" id="wrapper_featured_area">
            <div class="overlay_top ie6fix">
            </div>
            <div class="overlay_bottom ie6fix">
            </div>
            <div class="center" style="margin-top: 10px; font-family: Verdana;">
                <h2 runat="server" id="Cac_tin_tuc">
                    Các tin tức công nghệ tại Việt Nam và thế giới...</h2>
            </div>
        </div>
        <div class="wrapper" id="wrapper_stripe">
            <p class="breadcrumb">
                <span class="breadcrumb_info ie6fix">You are here:</span> <a href="../Default.aspx" runat="server" id="map1">
                    NIW &#8211; Trang chủ</a><span class="arrow"> &raquo; </span><span class='current_crumb' runat="server" id="map2">
                        Dịch vụ </span>
            </p>
        </div>
        <div class="wrapper" id='wrapper_main'>
            <div class="center">
                <div id="main">
                    <div class='content'>
                        <div id="Div1" runat="server" style="margin: 20px 0px 0px 0px;"> 
                <p runat="server" id="title"                                         
                    
                    style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: #003300; font-weight: bold;">manh</p>
                <center>
                    <img runat="server" id="image" />
                </center>
                <p id="content" runat="server" style="text-align: justify"></p>
            </div>

                    </div>
                    <div class='sidebar'>
                        <span class='sidebar_top'>
                            <!-- needed for smooth start of sidebar background-->
                        </span><span class='sidebar_bottom'>
                            <!-- needed for smooth end of sidebar background-->
                        </span>
                        
                        <div class="box_small box widget community_news">
                            <h3 class="widgettitle" runat="server" id="Cac_tinh_nang">
                                Các tính năng</h3>
                            <div class="entry box_entry">
                                <p>
                                    <strong>Thiết kế nổi bật</strong><br />
                                    Lorem ipsum dolor sit amet, usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="entry box_entry">
                                <p>
                                    <strong>Đa chức năng</strong><br />
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.</p>
                            </div>
                            <div class="entry box_entry">
                                <p>
                                    <strong>Hướng người sử dụng</strong><br />
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.</p>
                            </div>
                            <!--end box-->
                        </div>
                        
                    </div>
                    <!--end main-->
                </div>
                <div class="clearboth">
                </div>
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper footer ie6fix" id='wrapper_footer_top'>
            <div class='overlay_top ie6fix'>
            </div>
            <div class='center' id="footer_inside">
                <div class="footerColumn column1 " style="width: 200px">
                    <div id="pages-3" class="box_small box widget widget_pages">
                        <h3 class="widgettitle" runat="server" id="xem">
                            Xem...</h3>
                        <ul>
                            <li class="page_item page-item-37 current_page_item"><a runat="server" id="Trang_chu_footer" href="~/Default.aspx">
                                Trang chủ</a>
                                <ul class='children'>
                                    <li class="page_item page-item-50"><a href="../Sites/Gioi_thieu.aspx" runat="server" id="Gioi_thieu_footer">
                                        Giới thiệu</a></li>
                                    <li class="page_item page-item-48"><a href="../Sites/san_pham.aspx" runat="server" id="Dich_vu_footer">
                                        Dịch vụ</a></li>
                                    <li class="page_item page-item-134"><a href="../Sites/Tin_tuc.aspx" runat="server" id="Tin_tuc_footer">
                                        Tin tức</a></li>                                    
                                </ul>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <div class="footerColumn column2 " style="width: 221px">
                    <div id="archives-3" class="box_small box widget widget_archive">
                        <h3 class="widgettitle" runat="server" id="download">
                            Download</h3>
                        <ul>
                            <li><a href='http://www.mediafire.com/?a5aymyauzprlx' title='MSVS2010'>MS Visual Studio 2010</a></li>
                            <li><a href='http://www.mediafire.com/?8b9nwvh34rvr8d8' title='SKYPE'>Skype 5.6</a></li>
                            <li><a href='http://htwares.com/windows/security-privacy/anti-virus-tools/download/avg-free-edition/' title='AVG'>AVG Free Edition 2012 12.0</a></li>
                            <li><a href='http://softbuzz.net/Windows/Audio-Multimedia/Rippers-Converters/WinX-Video-Converter_24_1.html' title='WINX'>WinX Video Converter 4.5.6</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footerColumn column4 last" style="width: 445px">
                    <div id="community_news-3" class="box_small box widget community_news">
                        <h3 class="widgettitle" runat="server" id="tin_moi_nhat">
                            Tin mới nhất</h3>
                        <div class="entry box_entry">
                            <h4>
                                <a
                                    rel="bookmark" runat="server" id="news0_title">
                                    </a></h4>
                            <a class='alignleft  preloading_background'>
                                <img class='rounded_small ie6fix alignleft'
                                    alt='' height='50 ' width='70' runat="server" id="news0_image"/></a>
                                    <p  runat="server" id="news0_content"
                                        style="text-align: justify"></p>
                        </div>
                        <div class="entry box_entry">
                            <h4>
                                <a
                                    rel="bookmark" runat="server" id="news1_title"></a></h4>
                            <a class='alignleft  preloading_background'>
                                <img class='rounded_small ie6fix alignleft'
                                    alt='' height='50 ' width='70'  runat="server" id="news1_image"/></a><p style="text-align: justify" runat="server" id="news1_content">
                                       </p>
                        </div>
                        
                    </div>
                </div>
                <!--end footer_inside-->
            </div>
        </div>
        <div class="wrapper footer ie6fix" id='wrapper_footer_bottom'>
            <div id="footer_outside">
                <span class="copyright">&copy; Copyright <a href="../Default.aspx">NIW &#8211; Công
                    ty TNHH Công nghệ phần mềm</a> - Design by NIW</span>
                <ul class="social_bookmarks">                    
                    <li class='facebook'><a class='ie6fix' href='http://facebook.com/pages/Kriesi/333648177216'>
                        Facebook</a></li><li class='twitter'><a class='ie6fix' href='http://www.twitter.com/kriesi'>
                            Twitter</a></li><li class='flickr'><a class='ie6fix' href='http://www.flickr.com/people/34166943@N05'>
                                flickr</a></li>
                </ul>
                <a href="#top" class='scrollTop'>top</a>
                <!--end footer_outside-->
            </div>
            <!--end wrapper -->
        </div>
        <!--end wrapp_all -->
    </div>
    <script type="text/javascript" src="http://www.kriesi.at/themes/avisio/wp-content/plugins/avia_external_link/avia_external_link.js?v=2"></script>
    
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-785212-1");
            pageTracker._trackPageview();
        } catch (err) { }</script>
    </form>
</body>
</html>
