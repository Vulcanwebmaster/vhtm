   <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Quản lý bài viết</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th width="150">Thể loại</th>
                    <th width="30">Xem</th> 
                    <th width="70">Chức năng</th>
                    
                </tr>
            </thead>
            <?$k=1;
            foreach($list as $rs):
            
            ?>
            <tr class="row<?=$k?> record">
                <td width="30"><?=$rs->id?></td>
                <td><?=$rs->tieude?></td>
                <td>
                <?php
                if ($rs->idsub == 0) 
                	echo $this->noidung->getNameCat($rs->idcat)->ten;
               	else
               		echo $this->noidung->getNameCat($rs->idsub)->ten;
               	?>
                </td>
                <td><?=$rs->luotxem?></td>
                <td align="center">

                <?=$this->icon_library->edit('noidung/capnhatbaiviet/'.$rs->id.'/'.$this->uri->segment(3))?>
                <?=$this->icon_library->publish('noidung/batbaiviet/'.$rs->id.'/'.$rs->bat,$rs->bat)?>
                <?=$this->icon_library->del($rs->id)?>
                </td>
            </tr>
            <?
            $k=1-$k;
            endforeach;?>
           
        </table>
        <div class="pages"><?=$pagination?></div>
     </fieldset>
 </div>
 
 <div style="width: 21%;float: right;">
 <div class="toolbar_box">
    <div class="t">
        <div class="t">
            <div class="t"></div>
        </div>
    </div>
    <div class="m">
        <div class="toolbar-list">
            <ul>
                <li>
                    <?=$this->icon_library->add('noidung/themmoi')?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-save"></span>Lưu</a>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('admin/quantri')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info =del_id;
    if(confirm("Bạn có chắc chắn muốn xóa thể loại này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>noidung/xoabaiviet/"+info,
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
