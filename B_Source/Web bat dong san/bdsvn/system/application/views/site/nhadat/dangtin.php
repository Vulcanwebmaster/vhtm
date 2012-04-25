<script>
    var sectionid = 0;
    var parentid = 0;
    var id_thanhpho = 0;
    var id_quan = 0;

    LoadDanhmuc(sectionid);
    LoadThanhpho(id_thanhpho); 
     function LoadDanhmuc(value,subvalue){    
        if(value!=0)
        {
            $.post("<?=base_url()?>nhadat/loadloaithanh/",
                {
                    //path     : "member",
                    sectionid  : value},
                    function (data) {
                    //alert(data);
                    $("#subcon").html(data);
                }
            );                       
        }else{
            document.getElementById("subcon").innerHTML="<select name='parentid' style='width:200px;'><option value='0' >Chọn Danh mục con</option></select>";
        }
        
    }
    
    
     function LoadThanhpho(value,subvalue){    
        if(value!=0)
        {
            $.post("<?=base_url()?>nhadat/loadquan/",
                {
                    //path     : "member",
                    id_thanhpho  : value},
                    function (data) {
                    //alert(data);
                    $("#subzone").html(data);
                }
            );                       
        }else{
            document.getElementById("subzone").innerHTML="<select name='id_quan' style='width:200px;'><option value='0' >Chọn Quận | Huyện</option></select>";
        }
        
    }    
</script>
<?
$buoc = (int)$this->uri->segment(2);
$segment = (int)$this->uri->segment('3');
?>
<div class="hdangtin" style="margin-bottom:300px">
    <ul >
    <?if($buoc==1){?>
        <li><img src="<?=base_url()?>skins/1.jpg" alt="">Bước 1:<br>Thông tin chung</li>
        <li class="dis"><img src="<?=base_url()?>skins/2.jpg" alt="">Bước 2:<br>Thông tin tiện ích</li>
        <li class="dis"><img src="<?=base_url()?>skins/3.jpg" alt="">Bước 3:<br>Thông tin chi tiết</li>
        <li class="dis"><img src="<?=base_url()?>skins/4.jpg" alt="">Bước 4:<br>Cập nhật hình ảnh</li>
    <?}else if($buoc==2){?>
        <li class="dis"><img src="<?=base_url()?>skins/1.jpg" alt="">Bước 1:<br>Thông tin chung</li>
        <li><img src="<?=base_url()?>skins/2.jpg" alt="">Bước 2:<br>Thông tin tiện ích</li>
        <li class="dis"><img src="<?=base_url()?>skins/3.jpg" alt="">Bước 3:<br>Thông tin chi tiết</li>
        <li class="dis"><img src="<?=base_url()?>skins/4.jpg" alt="">Bước 4:<br>Cập nhật hình ảnh</li>        
    <?}else if($buoc==3){?>
        <li class="dis"><img src="<?=base_url()?>skins/1.jpg" alt="">Bước 1:<br>Thông tin chung</li>
        <li class="dis"><img src="<?=base_url()?>skins/2.jpg" alt="">Bước 2:<br>Thông tin tiện ích</li>
        <li><img src="<?=base_url()?>skins/3.jpg" alt="">Bước 3:<br>Thông tin chi tiết</li>
        <li class="dis"><img src="<?=base_url()?>skins/4.jpg" alt="">Bước 4:<br>Cập nhật hình ảnh</li>         
    <?}else if($buoc==4){?>
        <li class="dis"><img src="<?=base_url()?>skins/1.jpg" alt="">Bước 1:<br>Thông tin chung</li>
        <li class="dis"><img src="<?=base_url()?>skins/2.jpg" alt="">Bước 2:<br>Thông tin tiện ích</li>
        <li class="dis"><img src="<?=base_url()?>skins/3.jpg" alt="">Bước 3:<br>Thông tin chi tiết</li>
        <li><img src="<?=base_url()?>skins/4.jpg" alt="">Bước 4:<br>Cập nhật hình ảnh</li>         
    <?}?>
    </ul>
</div>

<?if($buoc=='1'){?>
<?php

  echo form_open('dangtin/1/'.$this->uri->segment('3'));
?>
<table class="dangtin" align="center">  
    <tr>
        <td>Nhu cầu:</td>
        <td>
            <?if($segment!=0){
                $nhucau = $buoc1->nhucau;
            }else{
                $nhucau = set_value('nhucau');
            }?>         
            <input type="radio" name="nhucau" value="1"  <?if($nhucau==1){echo 'checked="checked"';}?>>Cần bán 
            <input type="radio" name="nhucau" value="2" <?if($nhucau==2){echo 'checked="checked"';}?>>Cần mua
            <input type="radio" name="nhucau" value="3" <?if($nhucau==3){echo 'checked="checked"';}?>>Cho thuê
            <input type="radio" name="nhucau" value="4" <?if($nhucau==4){echo 'checked="checked"';}?>>Cần thuê
            <?=form_error('nhucau')?>
        </td>
    </tr>
    <tr>
        <td>Chuyên mục:</td>
        <td>
            <?if($segment!=0){
                $sectionid = $buoc1->sectionid;
            }else{
                $sectionid = set_value('sectionid');
            }?>            
                <select name="sectionid" id="sectionid" onchange='LoadDanhmuc(this.value,0)' style="width: 200px;">
                    <option value="">Chọn lọai hình</option>
                    <?foreach($danhmuc as $dm):?>
                    <option value="<?=$dm->iddm?>" <?if($dm->iddm==$sectionid){echo 'selected="selected"';}?>><?=$dm->danhmuc?></option>
                    <?endforeach;?>
                </select>
               <?=form_error('sectionid')?> 
        </td>
    </tr>
            <?if($segment!=0){
                $parentid = $buoc1->parentid;
            }else{
                $parentid = set_value('parentid');
            }?>       
    <tr>
        <td>Loại hình:</td>
        <td>
            <span id="subcon" style="width:200px;"> 
                <select name="parentid" style="width: 200px;">
                    <option value="">Chọn loại hình</option>
                    <?//if($segment!=0){
                        $listdm = $this->load_library->loadDanhmucList($sectionid);
                        foreach($listdm as $ldm):
                        ?>
                      <option value="<?=$ldm->iddm?>" <?if($ldm->iddm==$parentid){echo 'selected="selected"';}?>><?=$ldm->danhmuc?></option> 
                    
                    <?
                        endforeach;
                    //}?>                    
                </select>
            </span>
        </td>
    </tr> 
    <tr>
        <td>Vị trí:</td>
        <td>
            <?if($segment!=0){
                $vt = $buoc1->idvitri;
            }else{
                $vt = set_value('idvitri');
            }?>        
            <select name="idvitri" style="width: 200px;">
                <option value="">Chọn vị trí</option>
            <?foreach($vitri as $rs):?>
                <option value="<?=$rs->idvitri?>" <?if($rs->idvitri==$vt){echo 'selected="selected"';}?>><?=$rs->tenvitri?></option>
            <?endforeach;?>                
            </select>
            <?=form_error('idvitri')?> 
        </td>
    </tr> 
    <tr>
        <td>Hướng nhìn:</td>
        <td>
            <?if($segment!=0){
                $huongnha = $buoc1->idhuong;
            }else{
                $huongnha = set_value('idhuong');
            }
            
            ?>        
             
            <select name="idhuong" style="width: 200px;">
            <?foreach($huong as $rs1):?>
                <option value="<?=$rs1->idhuong?>" <?if($rs1->idhuong==$huongnha){echo 'selected="selected"';}?>><?=$rs1->tenhuong?></option>
            <?endforeach;?>
            </select>
        </td>
    </tr>
            <?if($segment!=0){
                $id_thanhpho = $buoc1->id_thanhpho;
            }else{
                $id_thanhpho = set_value('id_thanhpho');
            }?>     
    <tr>
        <td>Tỉnh thành phố:</td>
        <td>
            <select name="id_thanhpho" style="width: 200px;" id="id_thanhpho" onchange='LoadThanhpho(this.value,0)'>
                <option value="">Chọn Tỉnh/ Thành phố</option>
                <?foreach($thanhpho as $tp):?>
                <option value="<?=$tp->idthanhpho?>" <?if($tp->idthanhpho==$id_thanhpho){echo 'selected="selected"';}?>><?=$tp->ten?></option>
                <?endforeach;?>
            </select>
            <?=form_error('id_thanhpho')?>
        </td>
    </tr>
            <?if($segment!=0){
                $id_quan = $buoc1->id_quan;
            }else{
                $id_quan = set_value('id_quan');
            }?>         
    <tr>
        <td>Quận huyện: <?=$id_quan?></td>
        <td>
             <span id="subzone">
                <select name="id_quan" style="width: 200px;">
                    <option value="">Chọn Quận| Huyện</option>
                    <?if($segment!=0){
                        $listquan = $this->load_library->loadcitylist($id_thanhpho);
                        foreach($listquan as $list):
                        ?>
                      <option value="<?=$list->idthanhpho?>" <?if($list->idthanhpho==$id_quan){echo 'selected="selected"';}?>><?=$list->ten?></option> 
                    
                    <?
                        endforeach;
                    }?>
                </select>
            </span>
        </td>
    </tr>     

</table>     
<table class="tool" cellpadding="0" cellspacing="0">
    <tr>
        <td style="width: 200px;">
        </td>
        <td>
            <input type="submit" name="submit" class="bt_dangtin" value="Tới bước 2">
        </td>
    </tr>
</table>    
    
    
                 

<?}
if($buoc=='2'){
?>
<?php
  echo form_open('dangtin/2/'.(int)$this->uri->segment('3'));
?>
<?if($buoc1->sectionid==1 || $buoc1->sectionid==2){?> 
<table class="dangtin" align="center">  
    <tr>
        <td>Phòng khách:</td>
        <td>
            <select name="phongkhach">
                <option value="Xin liên hệ" <?if($buoc1->phongkhach =='Xin liên hệ'){echo 'selected="selected"';}?>>Xin liên hệ</option>
                <option value="Không" <?if($buoc1->phongkhach =='Không'){echo 'selected="selected"';}?>>Không</option>
                <option value="Có" <?if($buoc1->phongkhach =='Có'){echo 'selected="selected"';}?>>Có</option>
            </select>
        </td>
        <td>Phòng ngủ:</td>
        <td>
            <select name="phongngu">
                <option value="0">Xin liên hệ</option>
                 <?for($i=9;$i>=1;$i--){
                 ?>
                 <option value="<?=$i?>" <?if($buoc1->phongngu ==$i){echo 'selected="selected"';}?>><?=$i?></option>
                 <?
                 }?>
            </select>
        </td>        
    </tr>
    <tr>
        <td>Tầng lửng:</td>
        <td>
            <select name="tanglung">
                 <option value="Xin liên hệ" <?if($buoc1->tanglung =='Xin liên hệ'){echo 'selected="selected"';}?>>Xin liên hệ</option>
                <option value="Không" <?if($buoc1->tanglung =='Không'){echo 'selected="selected"';}?>>Không</option>
                <option value="Có" <?if($buoc1->tanglung =='Có'){echo 'selected="selected"';}?>>Có</option>
            </select>
        </td>
        <td>Tầng hầm:</td>
        <td>
            <select name="tangham">
                <option value="Xin liên hệ" <?if($buoc1->tangham =='Xin liên hệ'){echo 'selected="selected"';}?>>Xin liên hệ</option>
                <option value="Không" <?if($buoc1->tangham =='Không'){echo 'selected="selected"';}?>>Không</option>
                <option value="Có" <?if($buoc1->tangham =='Có'){echo 'selected="selected"';}?>>Có</option>
            </select>
        </td>        
    </tr> 
    <tr>
        <td>Nơi để xe:</td>
        <td>
            <select name="noidexe">
                <option value="Xin liên hệ" <?if($buoc1->noidexe =='Xin liên hệ'){echo 'selected="selected"';}?>>Xin liên hệ</option>
                <option value="Không" <?if($buoc1->noidexe =='Không'){echo 'selected="selected"';}?>>Không</option>
                <option value="Có" <?if($buoc1->noidexe =='Có'){echo 'selected="selected"';}?>>Có</option>
            </select>
        </td>
        <td>Toilet/WC:</td>
        <td>
            <select name="wc">
                <option value="0">Xin liên hệ</option>
                 <?for($i=9;$i>=1;$i--){
                 ?>
                 <option value="<?=$i?>"  <?if($buoc1->wc ==$i){echo 'selected="selected"';}?>><?=$i?></option>
                 <?
                 }?>
            </select>
        </td>        
    </tr>       
</table>
<?}?>
<div class="bgtitle">
    <span>Giao thông đi lại</span>
</div>
<table class="dangtin" align="center">
    <tr>
        <td style="width: 170px;">
            <input type="checkbox" name="xetrongtailon" value="1" <?if($buoc1->xetrongtailon ==1){echo 'checked="checked"';}?>>Xe trọng tải lớn ra vào
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="matpho" value="1" <?if($buoc1->matpho ==1){echo 'checked="checked"';}?>>Mặt phố
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="otoravao" value="1" <?if($buoc1->otoravao ==1){echo 'checked="checked"';}?>>Ô tô ra vào
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="tronghem" value="1" <?if($buoc1->tronghem ==1){echo 'checked="checked"';}?>>Trong Hẻm
        </td>
        <td>
            <input type="checkbox" name="anninh" value="1" <?if($buoc1->anninh ==1){echo 'checked="checked"';}?>>An ninh - Bảo vệ
        </td>
    </tr>    
</table>

<div class="bgtitle">
    <span>Thông tin tiện ích</span>
</div>
<table class="dangtin" align="center">

    <tr>
        <td style="width: 170px;">
            <input type="checkbox" name="dienthoai" value="1" <?if($buoc1->dienthoai ==1){echo 'checked="checked"';}?>>Điện Thoại
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="gansieuthi" value="1"  <?if($buoc1->gansieuthi ==1){echo 'checked="checked"';}?>>Gần siêu thị
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="khudantricao" value="1" <?if($buoc1->khudantricao ==1){echo 'checked="checked"';}?>>Khu dân trí cao
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="gancho" value="1" <?if($buoc1->gancho ==1){echo 'checked="checked"';}?>>Gần chợ
        </td>
        <td>
            <input type="checkbox" name="truyenhinhcap" value="1" <?if($buoc1->truyenhinhcap ==1){echo 'checked="checked"';}?>>Truyền hình cấp
        </td>
        <td>
            <input type="checkbox" name="gancongvien" value="1" <?if($buoc1->gancongvien ==1){echo 'checked="checked"';}?>>Gần Công Viên
        </td>
    </tr>    
    <tr>
        <td>
            <input type="checkbox" name="trungtamtheduc" value="1" <?if($buoc1->trungtamtheduc ==1){echo 'checked="checked"';}?>>Trung tâm thể dục
        </td>
        <td>
            <input type="checkbox" name="ganbenhvien" value="1" <?if($buoc1->ganbenhvien ==1){echo 'checked="checked"';}?>>Gần bệnh viện
        </td>
        <td>
            <input type="checkbox" name="nuocmay" value="1" <?if($buoc1->nuocmay ==1){echo 'checked="checked"';}?>>Nước máy
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="trungtamthuongmai" value="1" <?if($buoc1->trungtamthuongmai ==1){echo 'checked="checked"';}?>>Gần trung tâm thương mại
        </td>
        <td>
        <?if($buoc1->sectionid==2 || $buoc1->sectionid==1){?> 
            <input type="checkbox" name="gantruonghoc" value="1" <?if($buoc1->gantruonghoc ==1){echo 'checked="checked"';}?>>Gần trường học
        <?}?>
        </td>
        <td>
            <?if($buoc1->sectionid==2 || $buoc1->sectionid==1){?> 
            <input type="checkbox" name="cothangmay" value="1" <?if($buoc1->cothangmay ==1){echo 'checked="checked"';}?>>Có thang máy
            <?}?>
        </td>
    </tr>
    <tr>
        <td>
        <?if($buoc1->sectionid==2 || $buoc1->sectionid==1){?> 
            <input type="checkbox" name="cobeboi" value="1" <?if($buoc1->cobeboi ==1){echo 'checked="checked"';}?>>Có bể bơi
        <?}?>
        </td>
        <td>
        <?if($buoc1->sectionid==2 || $buoc1->sectionid==1){?> 
            <input type="checkbox" name="maylanh" value="1" <?if($buoc1->maylanh ==1){echo 'checked="checked"';}?>>Máy lạnh
        <?}?>
        </td>
        <td>
        <?if($buoc1->sectionid==2 || $buoc1->sectionid==3){?> 
            <input type="checkbox" name="diensinhhoat" value="1" <?if($buoc1->diensinhhoat ==1){echo 'checked="checked"';}?>>Điện sinh hoạt
        <?}?>
        </td>
    </tr>
    <tr>
        <td>
        <?if($buoc1->sectionid==2 || $buoc1->sectionid==3){?>
            <input type="checkbox" name="dien3pha" value="1" <?if($buoc1->dien3pha ==1){echo 'checked="checked"';}?>>Lưới điện 3 pha
        <?}?>
        </td>
        <td>
        <?if($buoc1->sectionid==1){?> 
            <input type="checkbox" name="duocnuoithucanh" value="1" <?if($buoc1->duocnuoithucanh ==1){echo 'checked="checked"';}?>>Được nuôi thú cảnh
        <?}?>
        </td>
        <td>
        <?if($buoc1->sectionid==3){?> 
            <input type="checkbox" name="gantruongdaihoc" value="1" <?if($buoc1->gantruongdaihoc ==1){echo 'checked="checked"';}?>>Gần trường đại học
        <?}?>
        </td>
    </tr>
</table>
<div class="bgtitle">
    <span>Giấy tờ pháp lý</span>
</div>
<table class="dangtin" align="center"> 
    <tr>
        <td style="width: 170px;">
            <input type="checkbox" name="sodo" value="1"  <?if($buoc1->sodo ==1){echo 'checked="checked"';}?> >Sổ Đỏ
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="giayviettay" value="1" <?if($buoc1->giayviettay ==1){echo 'checked="checked"';}?>>Giấy Viết Tay
        </td>
        <td style="width: 170px;">
            <input type="checkbox" name="giayhong" value="1" <?if($buoc1->giayhong ==1){echo 'checked="checked"';}?>>Giấy Hồng
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="giayxanh" value="1" <?if($buoc1->giayxanh ==1){echo 'checked="checked"';}?>>Giấy Xanh
        </td>
        <td>
            <input type="checkbox" name="giaytohople" value="1" <?if($buoc1->giaytohople ==1){echo 'checked="checked"';}?>>Giấy tờ hợp lệ
        </td>

    </tr>         
</table>
 <table class="tool" cellpadding="0" cellspacing="0">
    <tr>
        <td style="width: 500px;">
            <a href="<?=base_url()?>dangtin/1/<?=(int)$this->uri->segment(3)?>">
                <img src="<?=base_url()?>skins/quaylai.png" alt=""> Quay lại
            </a>
        </td>
        <td>
            <input type="submit" name="submit" class="bt_dangtin" value="Tới bước 3">
        </td>
    </tr>
</table> 
<?}
if($buoc==3){
?>
<?php
  echo form_open('dangtin/3/'.$this->uri->segment('3'));
?>

<div class="bgtitle">
	
    <span style="width:200px; clear:both">Nội dung đăng tin</span>
</div>
<table class="dangtin" align="center">   
    <tr>
        <td style="width: 100px;">  
           Tiêu đề
        </td>
        <td>
            <?if(set_value('tieude')==''){
                $tieude = $buoc1->tieude;
            }else{
                $tieude = set_value('tieude');
            }
           
            ?>   
                 
            <input type="text" name="tieude" style="width: 300px;" value="<?echo $tieude?>">
            <?=form_error('tieude')?>
        </td>
    </tr>
    <tr>        
        <td>
           Giá
        </td>

        <td>
            <?if(set_value('gia')==''){
                $gia = $buoc1->giathue;
            }else{
                $gia = set_value('gia');
            }?> 
            <?if(set_value('matbang')==''){
                $mb = $buoc1->matbang;
            }else{
                $mb = set_value('matbang');
            }
            echo $mb;
            ?>                    
            <input type="text" name="gia" value="<?=$gia?>">/
            <select name="matbang">
                <option value="Tổng diện tích" <?if($mb=='Tổng diện tích'){echo 'selected="selected"';}?>>Tổng diện tích</option>
                <option value="m2" <?if($mb=='m2'){echo 'selected="selected"';}?>>m</option>
            </select>
            <?=form_error('gia')?>
        </td>        
    </tr>
    <tr>        
        <td>
           Rộng x Dài
        </td>
        <td>
            <?if(set_value('dai')==''){
                $dai = $buoc1->dai;
            }else{
                $dai = set_value('dai');
            }?>
            <?if(set_value('rong')==''){
                $rong = $buoc1->rong;
            }else{
                $rong = set_value('rong');
            }?>                     
            <input type="text" name="rong" value="<?=$rong?>" style="width: 50px;"> x <input type="text" value="<?=$dai?>" name="dai" style="width: 50px;"> m            

        </td>        
    </tr>
    <tr>        
        <td>
           Diện tích
        </td>
        <td>
                    
            <input type="text" name="dientich" value="<?=$buoc1->dientich?>" style="width: 50px;"> m<sup>2</sup>        

        </td>        
    </tr>    
    <tr>        
        <td>
           Địa chỉ
        </td>
        <td>
            <?if(set_value('diachilienhe')==''){
                $diachilienhe = $buoc1->diachilienhe;
            }else{
                $diachilienhe = set_value('diachilienhe');
            }?>        
            <input type="text" name="diachilienhe" value="<?=$diachilienhe?>" style="width: 300px;">
            <?=form_error('diachilienhe')?>          
        </td>        
    </tr>
    <tr>
        <td colspan="2">
            <?if(set_value('noidung')==''){
                $noidung = $buoc1->noidung;
            }else{
                $noidung = set_value('noidung');
            }?>        
            Nội dung:<br>
            <?=$this->editor_library->editor_simply('noidung',$noidung,'')?>
        </td>
    </tr>    
</table>
<div class="bgtitle">
    <span>Thông tin liên hệ</span>
</div>
<table class="dangtin" align="center">   
    <tr>
        <td style="width: 100px;">
           Họ và tên
        </td>
        <td>
            <?if(set_value('hoten')==''){
                $hoten = $buoc1->hoten;
            }else{
                $hoten = set_value('hoten');
            }?>        
            <input type="text" name="hoten" style="width: 300px;" value="<?=$hoten?>">
            <?=form_error('hoten')?>
        </td>
    </tr>
    <tr>        
        <td>
           Địa chỉ
        </td>
            <?if(set_value('diachi')==''){
                $diachi = $buoc1->diachi;
            }else{
                $diachi = set_value('diachi');
            }?> 
        <td>
            <input type="text" name="diachi" value="<?=$diachi?>" style="width: 300px;">
            <?=form_error('diachi')?>
        </td>        
    </tr>
    <tr>        
        <td>
           Email
        </td>
            <?if(set_value('email')==''){
                $email = $buoc1->email;
            }else{
                $email = set_value('email');
            }?> 
        <td>
            <input type="text" name="email" value="<?=$email?>" style="width: 300px;">
            <?=form_error('email')?>
        </td>        
    </tr>    
    <tr>        
        <td>
           Điện thoại
        </td>
            <?if(set_value('dienthoailienhe')==''){
                $dienthoai = $buoc1->dienthoailienhe;
            }else{
                $dienthoai = set_value('dienthoailienhe');
            }?>         
        <td>
            <input type="text" name="dienthoailienhe" value="<?=$dienthoai?>">
            <?=form_error('dienthoailienhe')?>            
        </td>        
    </tr>
    <tr>        
        <td>
           Di động
        </td>
            <?if(set_value('didong')==''){
                $didong = $buoc1->didong;
            }else{
                $didong = set_value('didong');
            }?>         
        <td>
            <input type="text" name="didong" value="<?=$didong?>">          
        </td>        
    </tr>
   
</table>
<table class="tool" cellpadding="0" cellspacing="0">
    <tr>
        <td style="width: 500px;">
            <a href="<?=base_url()?>dangtin/2/<?=(int)$this->uri->segment(3)?>">
                <img src="<?=base_url()?>skins/quaylai.png" alt=""> Quay lại
            </a>
        </td>
        <td>
            <input type="submit" name="submit" class="bt_dangtin" value="Tới bước 4">
        </td>
    </tr>
</table>
<?}
?>
<?=form_close()?> 
<?
if($buoc==4){
?>

<script type="text/javascript" src="<?=base_url()?>skins/ajaxupload.js"></script> 
<div class="box-upload">
<form action="<?=base_url()?>nhadat/uploadfile/<?=$this->uri->segment('3')?>" method="post" onsubmit="return AIM.submit(this, {'onStart' : startCallback, 'onComplete' : completeCallback})" enctype="multipart/form-data">

        <div><label>File:</label> <input type="file" name="images" />
       <input type="submit"  value="Upload"  class="bt_dangtin" /></div>
 </form>
</div>
        <div id="sub2div" > 
            <div id="uploads">
            <?if($list){?>
                <ul id="list">
                
                <?foreach($list as $rs1):?>
                <li class="record" style="margin-top: 20px;">
                    <img src="<?=base_url().$rs1->big?>" alt="">
                    <div align="center"><a  href="javascript:;" class="delbutton" id="<?=$rs1->id?>">Xóa</a></div>
                </li>
                <?endforeach;?>
                </ul>
            <?}?>
             </div>
        </div>  
        

<div style="float: left;width: 70%;margin-top:20px">
<?=form_open('dangtin/4/'.$this->uri->segment(3))?>
<table class="tool" cellpadding="0" cellspacing="0">
    <tr>
        <td style="width: 400px;">
            <a href="<?=base_url()?>dangtin/3/<?=(int)$this->uri->segment(3)?>">
                <img src="<?=base_url()?>skins/quaylai.png" alt=""> Quay lại
            </a>
        </td>
        <td>
            <input type="submit" name="submit" class="bt_dangtin" value="Kết thúc đăng tin">
        </td>
    </tr>
</table>
</div>
<?=form_close()?>
  <script type="text/javascript" >
     function startCallback() {
            // make something useful before submit (onStart)
            return true;
     }

    function completeCallback(response) {
            // make something useful after (onComplete)
            //document.getElementById('nr').innerHTML = parseInt(document.getElementById('nr').innerHTML) + 1;
            document.getElementById('sub2div').innerHTML = response;
     }
</script>
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info =del_id;
 if(confirm("Bạn có chắc bạn muốn xóa ảnh này không?"))
{
    $.ajax({
    type: "POST",
    url: "<?=base_url()?>/nhadat/xoaanh/"+info,
    data: info,
    success: function(){
    }
    });    
    $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }
return false;

});

});
</script>
<div align="center" style="width: 100%;float: left;margin-top: 30px;color: #FF0000;font-size: 11px;">
Lưu ý: Tin của bạn chỉ được đăng khi bạn Click chọn <b>Kết thúc đăng tin</b>
</div>
<?}?>
 
