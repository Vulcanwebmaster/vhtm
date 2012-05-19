<div id="masthead">
    <div id="header-wrapper" style="padding-bottom:20px">
        <div class="header section" id="header">
            <div class="widget Header" id="Header1">
                <div id="header-inner">
                    <a href="<?php echo base_url();?>" style="display: block">
                        <img alt="" height="90px; "
                            id="Header1_headerimg" src="<?php echo base_url();?>assets/women_files/logo1.png"
                            style="display: block; padding-top: 10px; padding-left: 20px;" width="229px; ">
                    </a>
                </div>
            </div>
        </div>
        <div id="header2" style="padding-top:40px">
            <div class="foxmenucontainer">
                <div id="menu">
                    <ul id="pagemenu">
                        <li class="current_page_item"><a href="<?php echo base_url();?>">Trang chủ</a></li>                        
                        <li><a href="<?php echo base_url();?>index.php/ao/hangmoi">Hàng mới về</a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/cart">Giỏ hàng</a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/contact">Liên hệ</a></li>
                        
                        <?php $list=$this->MKaimonokago->getMenuList();
                        if (count($list)<=3)
                        {
                        	foreach($list as $item)
                        	{
                        		echo '<li><a href="'.base_url().'index.php/ao/get_list/'.$item->id.'">'.$item->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        }
                        else {
                        	
                        	for($i=0;$i<3;$i++)
                        	{
                        		echo '<li><a href="'.base_url().'index.php/ao/get_list/'.$list[$i]->id.'">'.$list[$i]->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        	echo '<div class="foxmenucontainer" style="background-color:#535353">
                <div id="menu">
                    <ul id="pagemenu">';
                        for($i=3;$i<count($list);$i++)
                        	{
                        		echo '<li><a href="'.base_url().'index.php/ao/get_list/'.$list[$i]->id.'">'.$list[$i]->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        }
                        ?>
                         
                                                    
        </div>
        <div style="clear: both;">
        </div>
    </div>
</div>
