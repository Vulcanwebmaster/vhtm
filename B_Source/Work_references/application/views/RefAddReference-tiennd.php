<script type="text/javascript">
	$(document).ready(function(){
		$('div#uploading').hide();
	});
	
	function showUploading()
	{
		$('div#uploading').show();
	}

</script>

<div class="mask" id="form" style="left: 517px; top: 146px; display: none;">
	<div id="uploading">Uploading...</div>
		<?php echo form_open_multipart('/tiennd/upload/');?>
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
                <td><a href="javascript:showUploading();"><input id="Add_reference" type="submit" name="Addreference" value="Add reference" /></a></td>
            </tr>
        </table>
        </form>
</div>