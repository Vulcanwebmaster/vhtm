<script type="text/javascript">
	//$(document).ready(function(){
		$('.list').fadeIn(1000);
	//);
</script>
<?php $this->load->view('RefAddCategory');
	$this->load->view('RefAddReference');
?>
<?php
	for ($i=0; $i<count($pictures); $i++)
      			{?>
      				<div class="list">
		               	<div style="border-bottom:1px solid #666;">
		               		<?php if ($_SESSION['categoried']==true)
		               		{?>
		               			<a href="<?php echo base_url() ?>index.php/m_references/deleteRef/<?php echo $listReferences[$i]->id;?>/true" id="del">Delete reference</a>
		               		<?php }
		               		else 
		               		{?>
		               			<a href="<?php echo base_url() ?>index.php/m_references/deleteRef/<?php echo $listReferences[$i]->id;?>/false" id="del">Delete reference</a>
		               		<?php }?>
		                    <p>
		                    	<img alt="" src="<?php echo base_url();?>savedfiles/<?php echo $pictures[$i];?>"/>
		                    </p>
		                </div>
		                <div>
		                 	<span id="title" style="font-size:12px;">Title: <strong><?php echo $listReferences[$i]->title;?></strong></span>
		                 	<br/>
		                    <span id="title">Description: <span><?php echo $listReferences[$i]->text;?></span></span>
		                </div>   
	               </div>
      			<?php }?>