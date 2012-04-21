 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Quản lý File</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th  width="40">ID</th>
                    <th width="50">Hình ảnh</th>
                    <th>Tên File</th>
                    <th>Dung lượng</th>
                    <th>Ngày tạo</th>

                    <th  width="40">Xóa</th>
                </tr>
            </thead>
           <?$k=1;
           foreach($list as $rs):
           ?>
           <tr  class="row<?=$k?> record">
                <td><?=$rs->id?></td>
                <td><img src="<?=base_url().$rs->duongdan?>" alt="" style="width: 50px; height: 50px;"></td>
                <td><?=$rs->tenfile?></td>
                <td><?=$rs->dungluong?> KB</td>
                <td></td>
                <td align="center">


                <?=$this->icon_library->del($rs->id)?>
                </td>
           </tr>
           <?
           $k = 1-$k;
           endforeach;?>
           
        </table>
        <div class="pages"><?=$pagination?></div>
     </fieldset>
 </div>
<?=form_open_multipart('quanlyfile/upload',array('name'=>'up'))?> 
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
                    <?=$this->icon_library->add('thanhviens/themmoi')?>
                </li>
                <li>
                  <?=$this->icon_library->upload()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('admin/cpanel')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 
 <fieldset>
    <legend>Upload File</legend>
    <table>
        <tr>
            <td>File <input type="file" name="file"></td>
        </tr>
        <tr>
            <td>File <input type="text" id="file" name="add"> <a class="addfile" href="<?=base_url()?>quanlyfile/popup">Add File</a></td>
        </tr>        
    </table>
 </fieldset>
 <?=form_close()?>


 </div>
 
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info =del_id;
    if(confirm("Bạn có chắc chắn muốn xóa File này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>quanlyfile/delfile/"+info,
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
