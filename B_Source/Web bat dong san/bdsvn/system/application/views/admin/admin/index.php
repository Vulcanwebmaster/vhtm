<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$this->setting_library->setting['site_charset']?>">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?></title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/login.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
</head>
<body>
<center>
<?=form_open('admin')?>
    <div class="login">
        <div class="head"></div>
        <div class="body">
            <div class="col1" align="center">
                <div class="icon_user" align="center">
                	<img src="<?php echo base_url();?>images/admin/user_login.png" width="191px" height="100px" />
                </div>
                <div>Sản phẩm được phát triển bởi:<br><b>CTY TNHH NIW</b></div>
                <div>Email: </div>
                <div>Điện thoại: </div>
                <div>wesite: <a href="http://niw.com.vn/" target="_blank">http://www.niw.com.vn</a></div>
            </div>
            <div class="col2">
                <div class="headline">Đăng nhập hệ thống</div>
                <ul class="login_form">
                    <li>
                        <span>Tên đăng nhập</span>
                        <input type="text" name="username">
                        <?=form_error('username')?>
                    </li> 
                    <li>
                        <span>Mật khẩu</span>
                        <input type="password" name="password">
                        <?=form_error('password')?>
                    </li>
                    <li>
                        <div align="center"><input type="submit" name="dangnhap" value="Đăng nhập"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bot"></div>
    </div>
</center>
<?=form_close()?>
 </body>
</html>