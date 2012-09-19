		<?php echo form_open_multipart('/tiennd/upload/'.$craftsmanId);?>
		<table id="form" class="mask">
			<tr><td colspan="2"><p class="exit">X</p></td></tr>
        	<tr>
            	<td>Title:</td>
                <td><input type="text" name="title" value="" /></td>
             <tr>
                <td>Upload Picture</td>
                <td><input type="file" name="userfile"/></td>
             </tr>
             <tr>
                <td>Description</td>
                 <td><input type="text" name="description" value=""style="height:100px"/></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="Addreference" value="Add reference" /></td>
            </tr>
        </table>
        </form>