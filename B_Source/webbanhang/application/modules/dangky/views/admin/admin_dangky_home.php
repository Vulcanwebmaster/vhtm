<h2><?php echo $title;?></h2>

<div class="clearboth">&nbsp;</div>

<?php

if (count($listDangKy)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Họ tên</th>\n
    	  <th>Cửa hàng</th>\n
    	  <th>Link</th>\n
    	  <th>Lĩnh vực</th>\n
		  <th>Email</th>\n
		  <th>Mật khẩu</th>\n
		  <th>Điện thoại</th>\n
		  <th>Địa chỉ</th>\n
		  <th>Website</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($listDangKy as $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list->dangky_id."</td>\n";
        echo "<td align='center'>".$list->ngaythang."</td>\n";
        echo '<td align="center"><a href="'.base_url().'dangky/admin/Detail/'.$list->dangky_id.'">'.substr($list->hoten,0,40).'...'.'</a></td>\n';
        echo "<td align='center'>".$list->tencuahang."..."."</td>\n"; 
        
        $this->load->model('Mdangky');
        
        if ($list->demo_id!='not set')
        {
	        $folder=$this->Mdangky->GetDemoById($list->demo_id)->demo_name;
	        echo "<td align='center'> <a href='".base_url().$folder."'>".
	        base_url().$folder
	        ."</a></td>\n";
        }
        else echo "<td align='center'> <a>not set</a></td>\n";
		echo "<td align='center'>".$list->id_linhvuc."..."."</td>\n"; 
		echo "<td align='center'>".$list->email."..."."</td>\n";
		echo "<td align='center'>".$list->matkhau."..."."</td>\n";
		echo "<td align='center'>".$list->dienthoai."..."."</td>\n";
		echo "<td align='center'>".$list->diachi."..."."</td>\n";
		echo "<td align='center'>".$list->website."..."."</td>\n";
        echo "<td align='center'>";
        /*echo anchor('hoithao/admin/edit/'.$list->dangky_id,$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";*/
        echo anchor('dangky/admin/delete/'.$list->dangky_id,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list->dangky_id."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>