<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tintuc.css">
<div id="main-column">

<?php 
if (count($detailnews))
foreach ($detailnews as $key => $list)
?>
	<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>News</a></li>
		<li>></li>
		<li><a><?php echo $list['title'];?></a></li>
	</ul>
	
<div id="au-title">
	<label><?php echo $list['title'];?></label>
	<p style="text-transform:none;font-weight:normal;font-size:12px; color:#616060; margin:3px"><strong style="margin-right:10px">TAG:</strong>  <?php echo $list['tag'];?></p>
</div>
<div class="box">
    <div class="cnoidung" style="padding-left: 5px;text-align: justify;"><?php echo $list['content'];?></div>
    
    <div class="clearfix"></div>
    <div id="related-news">
    	<p>Related News</p>
    	<ul>
	    	<?php if (isset($tinlienquan))
	    	{
	    		foreach($tinlienquan as $item)
	    		{
			         $title = $item->title;
			         $title = str_replace(" ", "-", $title);
			         $title = str_replace(":", "-", $title);
			         $title = str_replace(".", "-", $title);
			         $title = str_replace(",", "-", $title);
			         $title = $title."-".$item->id;
	    			echo '<li><a style="color:#616060; font-size:13px" href="'.base_url().'news/'.$title.'">'.$item->title.'</a></li>';
	    		}
	    	}?>
    	</ul>
    </div>
</div>
</div>
