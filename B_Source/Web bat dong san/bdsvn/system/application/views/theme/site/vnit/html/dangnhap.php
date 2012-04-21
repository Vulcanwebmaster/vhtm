<?if($this->session->userdata('iduser')==0){?>
<?=form_open('dangnhap.html')?>
<ul>
<li style="text-align: right"><input type="text" name="tendangnhap" id="topUsername" onfocus="javascript:if(this.value=='Tên đăng nhập'){this.value='';};" onblur="javascript:if(this.value==''){this.value='Tên đăng nhập';};" value="Tên đăng nhập" class="username-pass">
<input type="password" name="matkhau" id="topPassword" onfocus="javascript:if(this.value=='      '){this.value='';};" onblur="javascript:if(this.value==''){this.value='      ';};" value="      " class="username-pass">
<input type="image" src="<?=base_url()?>system/application/views/theme/site/vnit/images/login_button.gif" style="border: medium none; margin-bottom: -8px;" id="toptoolbar_btlogin"></li> 
<li style="text-align: right;padding-top: 5px;"><span><a href="<?=base_url()?>quenmatkhau.html">Quên mật khẩu</a></span>
<span><a href="<?=base_url()?>quentendangnhap.html">Quên tên đăng nhập</a></span></li>
</ul>
<?=form_close()?>
<?}else{
?>
<ul style="font-weight: bold;">
    <li>Xin chào: <?=$this->session->userdata('fullname')?></li>
    <li><?=anchor('trangcanhan.html','Thông tin cá nhân')?></li>
    <li><?=anchor('thoat.html','Thoát')?></li>
</ul>
<?
}?>