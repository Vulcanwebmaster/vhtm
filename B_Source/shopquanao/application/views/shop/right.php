<div class="col-right sidebar">                
    <div class="foxmenucontainer" id="col-right">
                <div id="menu">
                    <ul id="pagemenu">
                        <li class="current_page_item"><a href="<?php echo base_url();?>">Trang chủ</a></li>                        
                        <li><a href="<?php echo base_url();?>index.php/ao/hangmoi">Hàng mới về</a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/cart">Giỏ hàng</a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/contact">Liên hệ</a></li>
                        
                        <?php $list=$this->MKaimonokago->getMenuList();
                        	for($i=0;$i<count($list);$i++)
                        	{
                        		echo '<li><a href="'.base_url().'index.php/ao/get_list/'.$list[$i]->id.'">'.$list[$i]->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        ?>                          
</div>