<script src="<?=base_url()?>skins/slider.js"></script>
<div class="box">
    <div class="title">Mã số: <?=$rs->idtin?></div>
    <div style="font-size: 11px;">Ngày đăng: <?=$this->string_library->format_date($rs->batdau,'d:m:Y')?></div>
    <div class="d_title"><?=$rs->tieude?></div>
    <div><span class="dspan">Giá:</span>
	<?php if ($rs->giathue) { ?>
    <a class="tigia" href="javascript:;" onclick="chuyendoi('vnd')">
        VNĐ
    </a>
    <a class="tigia" href="javascript:;" onclick="chuyendoi('sjc')">
        JSC
    </a> 
    <a class="tigia" href="javascript:;" onclick="chuyendoi('usd')">
        USD
    </a>       
     <span id="gia" style="margin-left: 10px;"><?=number_format($rs->giathue, 0, ',',',')?> VNĐ</span> / <?php echo ($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang;?>
	<?php } else { ?>
	<span id="gia">Thương lượng</span>
	<?php	} ?>
     </div>
     <?if($rs->rong!=0 || $rs->dai!=0){?>
    <div><span class="dspan">Rộng x Dài:</span> <?=$rs->rong?> x <?=$rs->dai?> m</div>
    <?}?>
    <div><span class="dspan">Diện tích:</span> <?if($rs->rong==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{echo ($rs->rong*$rs->dai).' m<sup>2</sup>';}?> </div>
    <?if($rs->idvitri!=0){  ?>
    <div><span class="dspan">Vị trí:</span> <?
    
    echo $this->load_library->loadvitri($rs->idvitri)->tenvitri;
    
    ?> </div>
    <?} ?>
    <div><span class="dspan">Hướng:</span> <?=$this->load_library->loadhuong($rs->idhuong)->tenhuong?> </div>
    <div><span class="dspan">Địa chỉ:</span> <?=$rs->diachilienhe?></div>  
    <?if($list){?>
    <div style="padding: 10px 0px;">
        <div id="galleria">
           <?foreach($list as $rs1):?>
            <div>
                <a href="<?=base_url().$rs1->big?>">
                    <img src="<?=base_url().$rs1->normal?>">
                </a>
            </div>
            <?endforeach;?>
        </div>
    </div>
     <?}?>
   
    <div style="padding-bottom: 20px;"><?=$rs->noidung?></div>
    <script>
    
    // Load theme
    Galleria.loadTheme('<?=base_url()?>skins/galleria.classic.js');
    
    // run galleria and add some options
    $('#galleria').galleria({
        image_crop: true, // crop all images to fit
        thumb_crop: true, // crop all thumbnails to fit
        transition: 'fade', // crossfade photos
        transition_speed: 700, // slow down the crossfade
        data_config: function(img) {
            // will extract and return image captions from the source:
            return  {
                title: $(img).parent().next('strong').html(),
                description: $(img).parent().next('strong').next().html()
            };
        },
        extend: function() {
            this.bind(Galleria.IMAGE, function(e) {
                // bind a click event to the active image
                $(e.imageTarget).css('cursor','pointer').click(this.proxy(function() {
                    // open the image in a lightbox
                    this.openLightbox();
                }));
            });
        }
    });
    </script>
    <script type="text/javascript" >
    function chuyendoi(tiente){
            var giatri ='<?=$rs->giathue?>';
            $("#gia").html('<image src="<?=base_url()?>skins/loading.gif">'); 
            $.post("<?=base_url()?>nhadat/change",{'tiente':tiente, 'giatri':giatri},function(data)
             {

                    $("#gia").html(data);
                    
                  
            });
               
    }
    </script>    
    <?if($rs->sectionid==1 || $rs->sectionid==2){?> 
    <div class="bgtitle">
        <span>Thông tin</span>
    </div>       
    <table class="dangtin" align="center" style="width: 500px;">  
        <tr>
            <td style="width: 100px;text-align: right;padding-right: 5px;">Phòng khách:</td>
            <td>
                <?=$rs->phongkhach?>
            </td>
            <td  style="width: 100px;text-align: right;padding-right: 5px;">Phòng ngủ:</td>
            <td>
            <?=$rs->phongngu?>
            </td>        
        </tr>
        <tr>
            <td style="width: 100px;text-align: right;padding-right: 5px;">Tầng lửng:</td>
            <td>
                <?=$rs->tanglung?>
            </td>
            <td style="width: 100px;text-align: right;padding-right: 5px;">Tầng hầm:</td>
            <td>
                <?=$rs->tangham?>
            </td>        
        </tr> 
        <tr>
            <td style="width: 100px;text-align: right;padding-right: 5px;">Nơi để xe:</td>
            <td>
                <?=$rs->noidexe?>
            </td>
            <td style="width: 100px;text-align: right;padding-right: 5px;">Toilet/WC:</td>
            <td>
                <?=$rs->wc?>
            </td>        
        </tr>       
    </table>
    <?}?>
    <div class="bgtitle">
        <span>Giao thông đi lại</span>
    </div>
    <table class="dangtin" align="center" style="width: 530px;">
        <tr>
            <td style="width: 170px;">
                <?if($rs->xetrongtailon ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>
                Xe trọng tải lớn ra vào
            </td>
            <td style="width: 170px;">
                <?if($rs->matpho ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Mặt phố
            </td>
            <td style="width: 170px;">
                <?if($rs->otoravao ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                
                Ô tô ra vào
            </td>
        </tr>
        <tr>
            <td>
                <?if($rs->tronghem ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                
                Trong Hẻm
            </td>
            <td>
                <?if($rs->anninh ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                An ninh - Bảo vệ
            </td>
        </tr>    
    </table>

    <div class="bgtitle">
        <span>Thông tin tiện ích</span>
    </div>
    <table class="dangtin" align="center" style="width: 530px;">

        <tr>
            <td style="width: 170px;">
                <?if($rs->dienthoai ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                                
                Điện Thoại
            </td>
            <td style="width: 170px;">
                <?if($rs->gansieuthi ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần siêu thị
            </td>
            <td style="width: 170px;">
                <?if($rs->khudantricao ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>
                Khu dân trí cao
            </td>
        </tr>
        <tr>
            <td>
                <?if($rs->gancho ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần chợ
            </td>
            <td>
                <?if($rs->truyenhinhcap ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>        
                Truyền hình cáp
            </td>
            <td>
                <?if($rs->gancongvien ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần Công Viên
            </td>
        </tr>    
        <tr>
            <td>
                <?if($rs->trungtamtheduc ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần trung tâm thể dục
            </td>
            <td>
                <?if($rs->ganbenhvien ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần bệnh viện
            </td>
            <td>
                <?if($rs->nuocmay ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Nước máy
            </td>
        </tr>
        <tr>
            <td>
                <?if($rs->trungtamthuongmai ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần trung tâm thương mại
            </td>
            <td>
            <?if($rs->sectionid==2 || $rs->sectionid==1){?> 
                <?if($rs->gantruonghoc ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Gần trường học
            <?}?>
            </td>
            <td>
                <?if($rs->sectionid==2 || $rs->sectionid==1){?> 
                <?if($rs->cothangmay ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Có thang máy
                <?}?>
            </td>
        </tr>
        <tr>
            <td>
            <?if($rs->sectionid==2 || $rs->sectionid==1){?> 
                <?if($rs->cobeboi ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Có bể bơi
            <?}?>
            </td>
            <td>
            <?if($rs->sectionid==2 || $rs->sectionid==1){?> 
                <?if($rs->maylanh ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Máy lạnh
            <?}?>
            </td>
            <td>
            <?if($rs->sectionid==2 || $rs->sectionid==3){?> 
                <?if($rs->diensinhhoat ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Điện sinh hoạt
            <?}?>
            </td>
        </tr>
        <tr>
            <td>
            <?if($rs->sectionid==2 || $rs->sectionid==3){?>
                <?if($rs->dien3pha ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Lưới điện 3 pha
            <?}?>
            </td>
            <td>
            <?if($rs->sectionid==1){?> 
                <?if($rs->duocnuoithucanh ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>        
                Được nuôi thú cảnh
            <?}?>
            </td>
            <td>
            <?if($rs->sectionid==3){?> 
               <?if($rs->gantruongdaihoc ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>        
                Gần trường đại học
            <?}?>
            </td>
        </tr>
    </table>
    <div class="bgtitle">
        <span>Giấy tờ pháp lý</span>
    </div>
    <table class="dangtin" align="center" style="width: 530px;"> 
        <tr>
            <td style="width: 170px;">
               <?if($rs->sodo ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?> Đỏ
            </td>
            <td style="width: 170px;">
                        <?if($rs->giayviettay ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>        
                Giấy Viết Tay
            </td>
            <td style="width: 170px;">
                <?if($rs->giayhong ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Giấy Hồng
            </td>
        </tr>
        <tr>
            <td>
                <?if($rs->giayxanh ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Giấy Xanh
            </td>
            <td>
                <?if($rs->giaytohople ==1){?>
                    <img src="<?=base_url()?>skins/checked.png" alt="">
                <?}else{?>
                    <img src="<?=base_url()?>skins/check.png" alt=""> 
                <?}?>                
                Giấy tờ hợp lệ
            </td>

        </tr>         
    </table>
    
    <div style="font-weight: bold; color: #0F558A;padding-top: 20px;border-bottom: 1px solid #e5e5e5;">THÔNG TIN LIÊN HỆ</div>
    <table>
        <tr>
            <td>Họ tên:</td> 
            <td><b><?=$rs->hoten?></b></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td> 
            <td><b><?=$rs->diachi?></b></td>
        </tr> 
        <tr>
            <td>Điện thoại:</td> 
            <td><b><?=$rs->dienthoailienhe?></b></td>
        </tr> 
        <?if($rs->didong!=''){?>
        <tr>
            <td>Di động:</td> 
            <td><b><?=$rs->didong?></b></td>
        </tr>        
        <?}?>
        <?if($rs->email!=''){?>
        <tr>
            <td>Email:</td> 
            <td><b><?=$rs->email?></b></td>
        </tr>                
        <?}?>      
    </table>
</div>
