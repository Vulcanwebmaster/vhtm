<script type="text/javascript">
	$(document).ready(function(){
		$('#upload').click(function(){
			alert('uploading');
			$('#uploading').show(1000);
		)};
	)};
	
	function sleep(milliseconds) 
	{
  		var start = new Date().getTime();
 		for (var i = 0; i < 1e7; i++) 
		{
    			if ((new Date().getTime() - start) > milliseconds)
			{
     				break;
    			}
 		}
	}
}
</script>
<div id="uploading" style="left: 517px; top: 146px;display:none">Uploading...</div>
<div class="mask" id="form" style="left: 517px; top: 146px; display: none;">
		<?php 
			$js = array('onsubmit' =>'$("#uploading").show();'); 
			echo form_open_multipart('/tiennd/upload/',$js);
		?>
		<table>
			<tr>
				<td colspan="2"><p class="exit">X</p></td>
			</tr>
        	<tr>
            	<td>Title:</td>
                <td><input type="text" name="title" value="" /></td>
             <tr>
                <td>Upload Picture</td>
                <td><input type="file" name="userfile"/></td>
             </tr>
             <tr>
             	<td>Category</td>
             	<td>
             		<select name="category_id">
             			<option value="-1"></option>
             			<?php
             				foreach($listCategories as $Categories)
							{
								?>
									<option value="<?php echo $Categories->id ?>"><?php echo $Categories->category ?></option>
								<?php
							}
             			?>
             		</select>
             	</td>
             </tr>
             <tr>
                <td>Description</td>
                 <td><input type="text" name="text" value=""style="height:100px"/></td>
              </tr>
              <tr>
                <td></td>
                <td><a id="upload"><input type="submit" name="Addreference" value="Add reference"/></a></td>
            </tr>
        </table>
        </form>
</div>