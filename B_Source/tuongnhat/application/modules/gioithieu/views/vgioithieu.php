</header>
<?php
	$language = $this->session->userdata('lang');
	foreach ($formData as $row) :
		switch ($row->id)
		{
		case 'column2':
			if ($language != 'vn')
			{
				$column2 = $row->titleE;
		  		$column2Content = $row->contentE;
			}
			else 
			{
				$column2 = $row->title;
		  		$column2Content = $row->content;
			}		  
		  	break;		
		default:
		  	break;
		} 		
		if ($row->parentid == 'column1')
		{
			if ($language != 'vn')
			{
				$column1Hyperlink[] = array(
				"hyperlink" => $row->contentE,
				"text" => $row->titleE
				);
			}
			else 
			{
				$column1Hyperlink[] = array(
				"hyperlink" => $row->content,
				"text" => $row->title
				);
			}				
		}
		if ($row->parentid == 'column3')
		{
			if ($language != 'vn')
			{
				$column3Comment[] = array(
				"content" => $row->contentE,
				"author" => $row->attribute1E,
				"position" => $row->attribute2E
				);
			}
			else 
			{
				$column3Comment[] = array(
				"content" => $row->content,
				"author" => $row->attribute1,
				"position" => $row->attribute2
				);
			}					
		}
 ?>
 <?php endforeach;?>
<div id="content"><!--<div class="ic">More Website Templates @ TemplateMonster.com. May 14, 2012!</div>-->
        <div class="slogan top-1">
        	<p><?php echo $this->lang->line('slogan-big'); ?></p>
            <p><?php echo $this->lang->line('slogan-small'); ?></p>
        </div>
        <div class="wrap page2-row1">
        	<div class="page2-col-1 border-right">
            	<h2><span class="clr-1"><?php echo $this->lang->line('gioithieu-why-us'); ?></span></h2>
                <ul class="list-1">
                	<?php
						foreach ($column1Hyperlink as $row) : 
							if ($row["text"] != ''){?>
						<li><a href="<?php echo $row["hyperlink"]?>">
							<?php echo $row["text"]?>
						</a></li>
					<?php } endforeach;?>	
                </ul>
                <p><?php echo $this->lang->line('gioithieu-why-us-content'); ?></p>
            </div> 
            <div class="page2-col-2 border-right">
            	<h2><span class="clr-1"><?php echo $this->lang->line('gioithieu-who-are-we'); ?></span></h2>
                <div class="wrap">
                	<img src="<?php echo base_url();?>assets/tuongnhat/images/page2-img1.jpg" alt="" class="img-indent-2 img-border">
                    <?php echo $column2Content;?>                    
                    <!--<a href="#" class="link-2">Xem thêm</a> -->
                </div>
            </div>
            <div class="page2-col-3">
            	<h2><span class="clr-1"><?php echo $this->lang->line('gioithieu-comment'); ?></span></h2>
            	<?php
					foreach ($column3Comment as $row) : 
						if ($row["content"] != ''){?>
						 <div class="box-3">
                    		<div class="comment">
	                        	<p><img src="<?php echo base_url();?>assets/tuongnhat/images/comment-top.png" alt="" >
	                        	<?php echo $row["content"]?>	
								<img src="<?php echo base_url();?>assets/tuongnhat/images/comment-bottom.png" alt=""></p>
								<span><strong><?php echo $row["author"]?></strong> (<?php echo $row["position"]?>)</span>
							</div>
		                </div>
					<?php } endforeach;?>                
                <!--<a href="#" class="link-2"></a>-->
            </div>   
        </div>
        <?php $this->load->view('front/bottom-content');?>
    </div> 