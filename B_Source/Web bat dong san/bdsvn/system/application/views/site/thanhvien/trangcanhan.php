<?=form_open('trangcanhan.html')?> 
<table style="width: 100%;">
    <tr>
        <td valign="top" style="width: 40%;">
            <fieldset>
               <legend>Thông tin tài khoản</legend>
                        
                        <table>  
                            <tr>
                                <td valign="top">Tên đăng nhập:</td>
                                <td><?=$rs->username?></td>
                            </tr>
                            <tr>
                                <td valign="top">Email:</td>
                                <td><input style="width: 250px;" type="text" name="email" value="<?=$rs->email?>"><?=form_error('email')?></td>
                            </tr>                              
                            <tr>
                                <td valign="top">Mật khẩu:</td>
                                <td><input type="password" name="password"></td>
                            </tr>  
                            <tr>
                                <td valign="top">Nhắc lại mật khẩu:</td>
                                <td><input type="password" name="re_password"></td>
                            </tr>                                                                         
                        </table>
                        
            </fieldset>
        </td>
        <td valign="top">
            <fieldset>
               <legend>Thông tin cá nhân</legend>
                    <table>
                            <tr>
                                <td valign="top" width="100">Họ và tên:</td>
                                <td><input style="width: 250px;" type="text" name="fullname" value="<?=$rs->fullname?>"> <?=form_error('fullname')?></td>
                            </tr> 
                            <tr> 
                                <td valign="top">Ngày sinh:</td> 
                                <td>
                                    Ngày
                                    <?
                                    $dd = $this->string_library->format_date($rs->birthday,'d');
                                    $mm = $this->string_library->format_date($rs->birthday,'m');
                                    $yyyy = $this->string_library->format_date($rs->birthday,'Y');
                                    ?>
                                    <select name="d">
                                    <?for($d=1;$d<=31;$d++){?>
                                        <option value="<?=$d?>" <?if($dd==$d){echo 'selected="selected"';}?>><?=$d?></option>
                                    <?}?>    
                                    </select>
                                    Tháng
                                    <select name="m">
                                    <?for($m=1;$m<=12;$m++){?>
                                        <option value="<?=$m?>" <?if($mm==$m){echo 'selected="selected"';}?>><?=$m?></option>
                                    <?}?>    
                                    </select>  
                                    <?$yy =mdate('%Y',time())?>
                                    
                                    Năm
                                    <select name="y">
                                    <?for($y=$yy-5;$y>=$yy-70;$y--){?>
                                        <option value="<?=$y?>" <?if($yyyy==$y){echo 'selected="selected"';}?>><?=$y?></option>
                                    <?}?>    
                                    </select>                                                                       
                                </td>                                
                            </tr> 
                            <tr>
                                <td valign="top">Giới tính:</td>
                                <td>
                                    <select name="male">
                                        <option value="nam">Nam</option>
                                        <option value="nu">Nữ</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td valign="top">Địa chỉ:</td>
                                <td>
                                    <input type="text" name="address" style="width: 250px;" value="<?=$rs->address?>">
                                </td>
                            </tr>                                                       
                            <tr>
                                <td valign="top">Điện thoại:</td>
                                <td>
                                    <input type="text" name="phone" value="<?=$rs->phone?>">
                                </td>
                            </tr> 
                            <tr>
                                <td valign="top">Yahoo:</td>
                                <td>
                                    <input type="text" name="yahoo" value="<?=$rs->yahoo?>">
                                </td>
                            </tr>                                                                                 
                    </table>               
            </fieldset>        
        </td>
    </tr>
</table>
<div align="center"><input type="submit" name="submit" value="Cập nhật">  </div>
<?=form_close()?> 