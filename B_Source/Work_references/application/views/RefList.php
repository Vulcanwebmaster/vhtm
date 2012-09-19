<script type="text/javascript">
	//$(document).ready(function(){
		$('.list').fadeIn(1000);
	//);
</script>
<?php for ($i=0; $i<count($pictures); $i++)
      			{?>
      				<div class="list">
		               	<div style="border-bottom:1px solid #666;">
		               		<a href="<?php echo base_url() ?>index.php/tiennd/deleteRef/<?php echo $listReferences[$i]->id;?>" id="del">Delete reference</a>
		                    <img alt="" src="/Work_references/assets/images/references/<?php echo $pictures[$i]; ?>"/>
		                </div>
		                <div>
		                 	<span id="title" style="font-size:12px;">Title: <strong><?php echo $listReferences[$i]->title;?></strong></span>
		                 	<br/>
		                    <span id="title">Description: <span><?php echo $listReferences[$i]->text;?></span></span>
		                </div>   
	               </div>
      			<?php }?>