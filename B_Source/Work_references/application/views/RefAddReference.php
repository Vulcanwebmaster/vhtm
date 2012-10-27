<div class="mask" id="form" style="left: 517px; top: 146px; display: none;">
		<form action="<?php echo base_url() ?>index.php/m_references/upload/<?php if (isset($craftmanId)) echo $craftmanId;?>" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">
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
                <td id="message"></td>
             </tr>
             <tr id="category-selector">
             	<td>Category</td>
             	<td>
             		<select name="category_id">
             			<option value="-1"></option>
             			<?php
             				foreach($listCategories as $Categories)
							{
								if (isset($_SESSION["categoryid"]))
								{
									if ($Categories->id==$_SESSION["categoryid"])
									{
										?>
										<option selected="selected" value="<?php echo $Categories->id ?>"><?php echo $Categories->category_title ?></option>
										<?php
									}
									else 
									{?>
										<option value="<?php echo $Categories->id ?>"><?php echo $Categories->category_title ?></option>
									<?php }
								}
								else 
									{?>
										<option value="<?php echo $Categories->id ?>"><?php echo $Categories->category ?></option>
									<?php }
							}
             			?>
             		</select>
             	</td>
             </tr>
             <tr>
                <td>Description</td>
                <td><textarea name="text" style="height:100px; width: 100%"></textarea></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="Addreference" value="Add reference" onClick="getMessage()"/></td>
            </tr>
        </table>
        </form>
</div>
<div id="loading" style="height:80px;width:190px;left: 517px; top: 146px;display:none; position:fixed; box-shadow: 0 0 7px black; padding:100px; background-color:white; border:solid 5px #585858">Uploading...</div>