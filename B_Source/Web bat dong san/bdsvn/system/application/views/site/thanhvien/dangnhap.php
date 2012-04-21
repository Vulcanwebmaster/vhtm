<table style="width: 100%;">
    <tr>
        <td valign="top" style="width: 40%;">  
        <fieldset>
            <legend>Đăng nhập</legend>
        
            <?=form_open('thanhvien/dangnhap/'.$this->uri->segment(3))?> 
             <table>
                <tr>
                    <td valign="top">Tên đăng nhập</td>
                    <td><input type="text" name="tendangnhap"><?=form_error('tendangnhap')?></td>
                </tr>
                <tr>
                    <td valign="top">Mật khẩu</td>
                    <td><input type="password" name="matkhau"><?=form_error('matkhau')?></td>
                </tr> 
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Đăng nhập">
                    </td>
                </tr>   
                <tr>
                    <td colspan="2">
                        <a href="<?=base_url()?>quenmatkhau.html">Quên mật khẩu</a>
                        <a href="<?=base_url()?>quentendangnhap.html">Quên tên đăng nhập</a>
                    </td>
                </tr>                                            
             </table>
            <?=form_close()?>
        </fieldset>
        </td>
       
        <td valign="top">
        <fieldset>
            <legend>Đăng ký thành viên</legend>
            <?=form_open('thanhvien/dangky/'.$this->uri->segment(3))?>
            <table>
                <tr>
                    <td valign="top">Họ và tên:</td>
                    <td><input style="width: 250px;" type="text" name="fullname" value="<?=set_value('fullname')?>"> <?=form_error('fullname')?></td>
                </tr>
                <tr>
                    <td valign="top">Email:</td>
                    <td><input style="width: 250px;" type="text" name="email" value="<?=set_value('email')?>"><?=form_error('email')?></td>
                </tr>   
                <tr>
                    <td valign="top">Tên đăng nhập:</td>
                    <td><input style="width: 250px;" type="text" name="username" <?=set_value('username')?>> <?=form_error('username')?></td>
                </tr> 
                <tr>
                    <td valign="top">Mật khẩu:</td>
                    <td><input type="password" name="password"></td>
                </tr>  
                <tr>
                    <td valign="top">Nhắc lại mật khẩu:</td>
                    <td><input type="password" name="re_password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Đăng ký">
                    </td>
                    
                </tr>                                                                          
            </table>
            <?=form_close()?>
        </fieldset> 
        </td>
    </tr>
</table>