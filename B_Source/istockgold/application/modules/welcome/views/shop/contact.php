<!-- Author: tienlx -->
<?php echo form_open(base_url()."contact")?>
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Contact-Us</a></li>
	</ul>
<div id="au-title">
	<label>Contact us</label>
</div>
<div style="margin-top:15px">
		<div style="padding-left:80px; padding-right:80px; padding-top:20px">
			<label style="font-family:arial; font-size:12px; font-weight:bold">Please insert your infomation into form (All fields are required):</label>
			<hr style="border-top-width: 2px; border-color: #333333; border-style: dotted none none none" />
				<div style="font-family:arial; font-size:13px; margin-top:10px; background-color:#e5ecf3; border-radius:10px; padding:25px">
                    <table style="width:99%">
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" class="au_col2" id="first_name" name="first_name"></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" class="au_col2" id="last_name" name="last_name"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input class="au_col2" type="text" id="address" name="address"></td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td><input type="text" class="au_col2" id="city" name="city"></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td><input type="text" class="au_col2" id="state" name="state"></td>
                        </tr>
                        <tr>
                            <td>Zip code/Postal Code:</td>
                            <td><input type="text" class="au_col2" id="zip_code" name="zip_code"></td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><input type="text" class="au_col2" id="country" name="country"></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="text" class="au_col2" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><input type="text" class="au_col2" id="phone" name="phone"></td>
                        </tr>
                        <tr>
                            <td>Contents:</td>
                            <td>
                                <textarea onclick="eraseText()" style="width:100%; height:80px" rows="1" cols="1" id="contents" name="contents">Text your contact us content here...</textarea>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Code:</td>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td> <?php echo $cap;?></td>
                                    </tr>
                                    <tr>
                                    <td> <input type="submit" name="submit" value="Submit" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    
                    <script type = "text/javascript">
						function eraseText() {
								document.getElementById("contents").value = "";
						}
					</script>
                </div>
                <table style="font-family:arial;font-size:14px;">
                        <tr>
                        	<td>
                        		<p><b>iStockgold Ecurrency Exchange Company</b></p>
                        		<p><b>United States:</b></p>
                        		<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b> 12433 Admiralty Way S403, Everett, WA, USA</p>
                        		<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Tel:</b> (+1) 425 346 2341 - Fax: (+1) 425 346 2342</p>
                        		<p><b>Vietnam:</b></p>
                        		<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b> 39 Trung Kinh Str.</p>
                        		<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Customer Service:</b> (+84) 979-059-029</p>
                        	</td>
                        </tr>
                 </table>
                 <iframe width="650" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=39+Trung+K%C3%ADnh,+Y%C3%AAn+Ho%C3%A0,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=39+Trung+Kinh&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=39+Trung+K%C3%ADnh,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;z=14&amp;ll=21.017138,105.793871&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=39+Trung+K%C3%ADnh,+Y%C3%AAn+Ho%C3%A0,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=39+Trung+Kinh&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=39+Trung+K%C3%ADnh,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;z=14&amp;ll=21.017138,105.793871" style="color:#0000FF;text-align:left">View large map</a></small>
            </div>
</div>
<?php echo form_close();?>