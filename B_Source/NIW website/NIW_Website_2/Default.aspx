<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="NIW_Website_2._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">


<!-- basic meta tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />



<!-- title -->
<title runat="server" id="title">NIW &#8211; Công ty TNHH Công nghệ phần mềm NIW</title>


<!-- feeds and pingback -->


<!-- stylesheets -->
<link rel="stylesheet" href="CSS/prettyPhoto.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="CSS/style.css" type="text/css" media="screen" />

<link rel="stylesheet" href="CSS/style1.css" type="text/css" media="screen"/>

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


<meta name='robots' content='noindex,nofollow' />
<script type='text/javascript' src='Scripts/jquery-1.4.1.js'></script>
<script type='text/javascript' src='Scripts/jquery-ver=1.4.1.js'></script>
<script type='text/javascript' src='Scripts/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='Scripts/flowplayer-3.1.4.min.js'></script>
<script type='text/javascript' src='Scripts/custom.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.kriesi.at/themes/avisio/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.kriesi.at/themes/avisio/wp-includes/wlwmanifest.xml" /> 


<!-- Debugging help, do not remove -->
<meta name="Framework" content="Kpress" />
<meta name="Theme Version" content="1.2" />
<meta name="Framework Version" content="3.1" />
<meta name="CMS Version" content="3.3.1" />


<link rel="stylesheet" href="CSS/kfw_styleswitch.css" type="text/css" /><script type="text/javascript" src="http://www.kriesi.at/themes/avisio/wp-content/plugins/kfw_styleswitch/kfw_styleswitch.js"></script><script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/framework/fonts/cufon.js'></script>
<script type='text/javascript' src='http://www.kriesi.at/themes/avisio/wp-content/themes/avisio/framework/fonts/josefine_small.font.js'></script>

<script type='text/javascript'>

    Cufon.replace('#top h1, #top  h2, #top h3, #top  h4, #top  h5, #top  h6, #top  legend, #top .sliderheading, .big_button strong, .dynamicFont', {

        fontFamily: 'cufon',
        hover: 'true'

    });


</script>


<!-- custom styles set at your backend-->
<style type='text/css'>
</style>
<!-- end custom styles-->

<!-- meta tags, needed for javascript -->
<meta name="NIW" />


</head>
<body id='top' class="home blog" style="font-family: Verdana">
    <form runat="server">
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
                            <a href="Default.aspx"<strong class="menu_item_2" style="font-size: 14px" id="Trang_chu" runat="server">Trang chủ</strong></a></li>
                        <li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="Sites/Gioi_thieu.aspx"><strong class="menu_item_2" id="Gioi_thieu" runat="server">Giới thiệu</strong></a>
                        </li>
                        <li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="Sites/san_pham.aspx"><strong  class="menu_item_2" id="Dich_vu" runat="server">Dịch vụ</strong></a>
                        </li>
                        <li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="Sites/Tin_tuc.aspx"><strong class="menu_item_2" id="Tin_tuc" runat="server">Tin tức</strong></a></li>    
                                                                                               
                        <asp:ImageButton runat="server" ID="english" ImageUrl="~/images/english flag.gif" CssClass="menu_item_2" OnClick="english_click"/>
                        <asp:ImageButton runat="server" ID="vietnamese" ImageUrl="~/images/vietnam.jpg"  CssClass="menu_item_2" OnClick="vietnamese_click"/>
                    </ul>                   
                    <!--end head-->
                </div>
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper wrapper_shadow ie6fix" id='wrapper_featured_area'>
            <div class='overlay_top ie6fix'>
            </div>
            <div class='overlay_bottom ie6fix'>
            </div>
            <div class="center ie6fix">
                <!-- ###################################################################### -->
                <div class="feature_wrap">
                    <!-- ###################################################################### -->
                    <ul class='slideshow aviaslider'>
                        <li class='featured featured1'><span>
                            <img src="images/slide/imageSlider.jpg" alt='' title='Welcome at Avisio!' height='440 '
                                width='940' /></span> </li>
                        <!-- end .featured -->
                        <li class='featured featured6'><a>
                            <img src="images/slide/slide1.jpg" alt='' title='This is a Slide example' height='440 '
                                width='940' /></a> </li>
                        <!-- end .featured -->
                        <li class='featured featured7'><span>
                            <img src="images/slide/slide2.jpg" alt='' title='The last slide ;)' height='440 '
                                width='940' /></span> </li>
                        <!-- end .featured -->
                        <li class='featured featured8'><span>
                            <img src="images/slide/slide3.jpg" alt='' title='The last slide ;)' height='440 '
                                width='940' /></span> </li>
                        <!-- end .featured -->
                        <li class='featured featured9'><span>
                            <img src="images/slide/slide4.jpg" alt='' title='The last slide ;)' height='440 '
                                width='940' /></span> </li>
                        <!-- end .featured -->
                    </ul>
                    <!-- end .featured_inside -->
                    <!-- ###################################################################### -->
                </div>
                <!-- end featuredwrap -->
                <!-- ###################################################################### -->
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper" id='wrapper_featured_stripe'>
            <div class="center">
                <ul class='slideshowThumbs'>
                    <li class='slideThumb ie6fix slideThumb1'><span class='slideThumWrap'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>NIW</strong> </span><span class='fancy'>
                        </span>
                        <img src="images/slide/imageSlider.jpg" alt='' title='Welcome at NIW' height='50 '
                            width='70' /></span></li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb1'><span class='slideThumWrap'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>Website</strong> </span><span class='fancy'>
                        </span>
                        <img src="images/slide/slide1.jpg" alt='' title='Welcome at NIW' height='50 '
                            width='70' /></span></li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb2'><span class='slideThumWrap'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>Phần mềm ứng dụng options</strong>
                    </span><span class='fancy'></span>
                        <img src="images/slide/slide2.jpg" alt='' title='Avisio, a theme with unlimited color options'
                            height='50 ' width='70' /></span></li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb3'><a href='http://www.kriesi.at/' class='slideThumWrap noLightbox'>
                        <span class='slideThumbTitle'><strong class='slideThumbHeading rounded ie6fix'>Chất
                            lượng</strong> </span><span class='fancy'></span>
                        <img src="images/slide/slide3.jpg" alt='' title='Another Slide example with featured text and image caption'
                            height='50 ' width='70' /></a></li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb3'><a href='http://www.kriesi.at/' class='slideThumWrap noLightbox'>
                        <span class='slideThumbTitle'><strong class='slideThumbHeading rounded ie6fix'>Dịch
                            vụ</strong> </span><span class='fancy'></span>
                        <img src="images/slide/slide4.jpg" alt='' title='Another Slide example with featured text and image caption'
                            height='50 ' width='70' /></a></li><!-- end .slideThumb -->
                    <!-- end .slideThumb -->
                </ul>
                <!-- end .slideshowThumbs -->
                <!-- end center-->
            </div>
            <!--end wrapper-->
            <a style="width: 210px; height: 50px; background-image: url('/images/contac_button.png');
                background-repeat: no-repeat; float: right; color: #777; margin-top: 45px; margin-right: 200px;
                vertical-align: 50%; line-height: 50px; font-size: 20px; padding-left: 40px;"
                href="Sites/Gioi_thieu.aspx" id="lien_he" runat="server">Liên hệ </a>
        </div>
        <div class="wrapper fullwidth" id='wrapper_main'>
            <div class="center">
                <div id="main">
                    <div class="frontpagetabs">
                        <div class='entry'>
                            <h1 class='fptab fpactive_tab' runat="server" id="Kha_nang" 
                                style="font-size: 30px">
                                Những khả năng của NIW?</h1>
                            <div class='fptab_content tab1 fpactive_tab_content'>
                                <div class="one_fourth ">
                                    <h3 runat="server" id="Phan_mem_ung_dung" class="kha_nang">
                                        Ứng dụng Window</h3>
                                    <p style="text-align: justify;height:205px">
                                        <span class="dropcap2 ie6fix">1</span>Xây dựng những phần mềm ứng dụng với các mục
                                        tiêu: chức năng đảm bảo, khả năng tương thích cao và hướng người sử dụng. Những
                                        sản phẩm của chúng tôi sẽ giúp việc sử dụng máy tính của bạn trở nên dễ dàng và
                                        thú vị hơn bao giờ hết.</p>
                                    <p>
                                        <img class='noborder ie6fix' src="images/iconsets1.png"
                                            alt="1"/></p>
                                </div>
                                <div class="one_fourth ">
                                    <h3 runat="server" id="website" class="kha_nang">
                                        Thiết kế website</h3>
                                    <p style="text-align: justify; height: 200px;">
                                        <span class="dropcap2 ie6fix">2</span>Với tiêu chí xây dựng website nhằm đáp ứng
                                        mọi nhu cầu của mọi đối tượng khách hàng, sản phẩm web của NIW với những mẫu mã
                                        đẹp và gọn nhẹ sẽ giúp bạn thỏa mãn cái nhìn và vấn đề kinh te
                                    </p>
                                    <p>
                                        <img class='noborder ie6fix' src="images/iconsets2.png"
                                            alt="2"/></p>
                                </div>
                                <div class="one_fourth ">
                                    <h3 id="Bao_tri" runat="server" class="kha_nang">
                                        Bảo trì và nâng cấp</h3>
                                    <p style="text-align: justify;height:200px">
                                        <span class="dropcap2 ie6fix">3</span>Nhờ xây dựng các sản phẩm một cách có hệ thống
                                        và khoa học, chúng tôi có thể bảo trì và nâng cấp sản phẩm của mình một cách dễ
                                        dàng.</p>
                                    <p>
                                        <img class='noborder ie6fix' src="images/iconsets3.png"
                                            alt="3" /></p>
                                </div>
                                <div class="one_fourth last">
                                    <h3 runat="server" id="dich_vu_khach_hang" class="kha_nang">
                                        Dịch vụ khách hàng</h3>
                                    <p style="text-align: justify;height:200px">
                                        <span class="dropcap2 ie6fix">4</span>Chúng tôi luôn đặt quyền lợi của quý khách
                                        hàng lên hàng đầu. Với hệ thống chăm sóc khách hàng tận tình, đến với NIW, bạn sẽ
                                        thực sự cảm thấy thoải mái và hài lòng với sản phẩm của mình.</p>
                                    <p>
                                        <img class='noborder ie6fix' src="images/iconsets4.png"
                                            alt="4"/></p>
                                </div>
                            </div>
                            <h1 class='fptab '>
                                <!--<a href="http://www.kriesi.at/themes/avisio/a-little-about-you/tab-example/"> -->
                                Sản phẩm<!--</a>--></h1>
                            <div class='fptab_content tab2 '>
                                <p>
                                    
                                    <img src='http://www.kriesi.at/themes/avisio/wp-includes/images/smilies/icon_wink.gif'
                                        alt=';)' class='wp-smiley' /><br />
                                    </p>
                                <table id="mytable" cellspacing="0" summary="The technical specifications of the Apple PowerMac G5 series">
                                    <caption>
                                        Table 1: Apple Product specs
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th class="nobg" scope="col">
                                                Product:
                                            </th>
                                            <th scope="col">
                                                iPhone 3GS
                                            </th>
                                            <th scope="col">
                                                iPad
                                            </th>
                                            <th scope="col">
                                                iPod Nano
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="spec" scope="row">
                                                Version
                                            </th>
                                            <td>
                                                3rd Generation build
                                            </td>
                                            <td>
                                                1st Generation build
                                            </td>
                                            <td>
                                                27th Generation build
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="specalt" scope="row">
                                                Multitouch
                                            </th>
                                            <td class="alt">
                                                Yes
                                            </td>
                                            <td class="alt">
                                                Yes
                                            </td>
                                            <td class="alt">
                                                No
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="spec" scope="row">
                                                Video
                                            </th>
                                            <td>
                                                Yes &#8211; doesnt play flash content
                                            </td>
                                            <td>
                                                Yes &#8211; doesnt play content
                                            </td>
                                            <td>
                                                Yes &#8211; does play any content
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="specalt" scope="row">
                                                Release Date
                                            </th>
                                            <td class="alt">
                                                Nov. 2009
                                            </td>
                                            <td class="alt">
                                                Mai. 2010
                                            </td>
                                            <td class="alt">
                                                Jun. 2010
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="clearboth"></span>
                            </div>
                            <!--end enty -->
                        </div>
                        <span class="hr"></span>
                    </div>
                    <!--end main-->
                </div>
                <div class="clearboth">
                </div>
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper footer ie6fix" id='wrapper_footer_top' 
            style="font-size: 10px">
            <div class='overlay_top ie6fix'>
            </div>
            <div class='center' id="footer_inside">
                <div class="footerColumn column1 " style="width: 200px">
                    <div id="pages-3" class="box_small box widget widget_pages">
                        <h3 class="widgettitle" runat="server" id="xem">
                            Xem...</h3>
                        <ul>
                            <li class="page_item page-item-37 current_page_item"><a runat="server" id="Trang_chu_footer" href="Default.aspx">
                                Trang chủ</a>
                                <ul class='children'>
                                    <li class="page_item page-item-50"><a href="Sites/Gioi_thieu.aspx" runat="server" id="Gioi_thieu_footer">
                                        Giới thiệu</a></li>
                                    <li class="page_item page-item-48"><a href="Sites/san_pham.aspx" runat="server" id="Dich_vu_footer">
                                        Dịch vụ</a></li>
                                    <li class="page_item page-item-134"><a href="Sites/Tin_tuc.aspx" runat="server" id="Tin_tuc_footer">
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
                            <li><a href='http://kmplayer.en.softonic.com/' title='KMPlayer'>KMPlayer Free</a></li>
                            <li><a href='http://www.skype.com/intl/en/business/download/' title='SKYPE'>Skype 5.6</a></li>
                            <li><a href='http://free.avg.com/us-en/download' title='AVG'>AVG Free Edition 2012 12.0</a></li>
                            <li><a href='http://www.winxdvd.com/video-converter/download.htm' title='WINX'>WinX Video Converter 4.5.6</a></li>
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
                <span class="copyright">&copy; Copyright <a href="../Default.aspx">
                    NIW &#8211; Công ty TNHH Công nghệ phần mềm</a> - Design by NIW</span>
                <ul class="social_bookmarks">                    
                    <li class='facebook'><a class='ie6fix' href="http://facebook.com.vn">
                        Facebook</a></li><li class='twitter'><a class='ie6fix' href="http://twitter.com">
                            Twitter</a></li><li class='flickr'><a class='ie6fix' href="http://www.flickr.com">
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
    </form>
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
