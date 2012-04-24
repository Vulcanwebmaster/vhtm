<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$title?></title>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/phim.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/js/swfobject.js"></script>


</head>
<body>

<div id="body_header">
<div id="wrap_body">
    <div class="header">
        <div class="logo">2</div>
        <div class="adv">
        <div class="app">
            <ul>
                <li><a href="">Đèn Đom Đóm</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Tài liệu</a></li>
                <li><a href="">Nghe Nhạc</a></li>
                <li><a href="<?=base_url()?>phim.html">Xem phim</a></li>
                <li><a href="">Truyền hình</a></li>
                <li><a href="">Hình ảnh</a></li>
            </ul>
        </div> 
        </div>
    </div>
     
</div>
</div>
<div id="wrap">
<div id="wrap_body">
<div id="body_menu">
<?=$this->load->view('modules/tnd_menuphim/index')?>
</div>
<div id="body_top"></div>
<div id="body_mid">
    <div id="colleft">
    <?$check = $this->uri->segment('2');
    if($check!='xem-phim'){
    ?>
        <div id="content_left">
            <?=$this->load->view('modules/tnd_leftphim/index')?>          
        </div>
    <?}?>
        <div id="content_right" <?if($check=='xem-phim'){ echo 'style="width:685px"';}?>>
        <?php $this->load->view( $page); ?> 
        </div>
    </div>
    <div id="colright">
        <?=$this->load->view('modules/tnd_rightphim/index')?>
    </div>

</div>
<div id="body_bot"></div>


</div>
<div id="footer">
    <div id="wrap_body">
        <div class="version">
            <p>Trang thông tin Học Tập và Giải Trí ĐÈN ĐOM ĐÓM</p>
            <p>Trang xem phim trực tuyến</p>
            <p>Website đươc phát triển dựa trên phiên bản 360vnit V2.0</p>
            <p>Copyright @ 2010 dendomdom.com</p>
        </div>
        <div class="static">1223</div>
    </div>
</div>
</div> 
</body>
</html>