<script type="text/javascript">
	//$(document).ready(function(){
		$('.list').fadeIn(1000);
	//);
</script>
<?php for ($i=0; $i<count($pictures); $i++)
      			{?>
      				<div class="list">
		               	<div style="border-bottom:1px solid #666;">
		                    <p>
		                    	<img alt="" src="<?php echo base_url();?>assets/images/references/<?php echo $pictures[$i];?>"/>
		                    </p>
		                </div>
		                <div>
		                 	<span id="title" style="font-size:12px;">Title: <strong><?php echo $listReferences[$i]->title;?></strong></span>
		                 	<br/>
		                    <span id="title">Description: <span><?php echo $listReferences[$i]->text;?></span></span>
		                </div>   
	               </div>
      			<?php }?>