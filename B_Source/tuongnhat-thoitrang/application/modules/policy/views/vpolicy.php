<?php foreach ($policy as $row) { ?>
<div id="wrapper">
	<div id="helpContainer">
      <div id="headWrapper">
		<h1><span><font><font>Hỗ trợ pháp lý</font></font></span></h1>
		<div id="myHeader" style="width: 750px">
    		<ul>
    			<?php 
    				if ($row->id == 1) {
    					echo '<li class="menu_PrivacyPolicy sel?>"><font><font>Điều khoản và Điều kiện sử dụng</font></font></li>';
					}
					else {
						echo '<li class="menu_PrivacyPolicy ?>"><a href="'.base_url().'policy/index/1" name=""><font><font>Điều khoản và Điều kiện sử dụng</font></font></a></li>';
					}
    			?>
    			<?php 
    				if ($row->id == 2) {
    					echo '<li class="menu_SalesTerms sel?>"><font><font>Điều khoản và Điều kiện bán hàng</font></font></li>';
					}
					else {
						echo '<li class="menu_SalesTerms ?>"><a href="'.base_url().'policy/index/2" name=""><font><font>Điều khoản và Điều kiện bán hàng</font></font></a></li>';
					}
    			?>
    			<?php 
    				if ($row->id == 3) {
    					echo '<li class="menu_ReturnPolicy sel?>"><font><font>Chính sách trả lại</font></font></li>';
					}
					else {
						echo '<li class="menu_ReturnPolicy ?>"><a <a href="'.base_url().'policy/index/3" name=""><font><font>Quay trở lại Chính sách</font></font></a></li>';
					}
    			?>
    			<?php 
    				if ($row->id == 4) {
    					echo '<li class="menu_PrivacyPolicy sel?>"><font><font>Chính sách bảo mật</font></font></li>';
					}
					else {
						echo '<li class="menu_PrivacyPolicy ?>"><a href="'.base_url().'policy/index/4" name=""><font><font>Chính sách bảo mật</font></font></a></li>';
					}
    			?>
    			<?php 
    				if ($row->id == 5) {
    					echo '<li class="menu_Information sel?>"><font><font>Thông tin về bảo mật</font></font></li>';
					}
					else {
						echo '<li class="menu_Information ?>"><a href="'.base_url().'policy/index/5" name=""><font><font>Thông tin về bảo mật</font></font></a></li>';
					}
    			?>
    		</ul>
		</div>
      </div>
	<div id="main">
    	<div id="content">
          <div class="col1">&nbsp;</div>
           <div class="col2 ">
    		<table>
                <tbody>
                    <tr>
                        <td valign="top" width="30" align="left"></td>
                        <td valign="top" width="10"></td>
                        <td valign="top" width="900"><?php echo $row->content ?></td>
            		</tr>
            	</tbody>
            </table>            
		</div>
     </div>
	</div>
  </div>
</div>
<?php } ?>