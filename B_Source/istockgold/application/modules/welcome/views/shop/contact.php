<!-- Author: tienlx -->
<?php echo form_open("welcome/contact")?>
<div id="main-column">
<div id="au-title">
	<label>Contact us</label>
</div>
<div style="margin-top:15px">
	<label style="font-size:16px; font-weight:bold; color:#606060; margin-top:15px">Istockgold</label>
	<div style="padding-top:15px; padding-bottom:15px; padding-left:15px; background-color:#f5f5f5">
		<label style="font-size:14px; font-weight:bold;color:#4e4e4e; margin-bottom:10px">- Số 6 Ngõ 39/2 Trung Kính, Trung Hòa, Cầu Giấy, Hà Nội</label>
		<br />
		<label style="font-size:12px; font-weight:bold;color:#4e4e4e; padding-left:10px;">Tel: (08) 3500 5568  -  Fax: (08) 3526 8522</label>
			<img src="<?php echo base_url();?>assets/images/map.jpg" alt="" id="map"/>
	</div>                
</div>
		<div style="padding-left:80px; padding-right:80px; padding-top:20px">
			<label style="font-size:12px; font-weight:bold">Please insert your infomation into form :</label>
			<hr style="border-top-width: 2px; border-color: #333333; border-style: dotted none none none" />
				<div style="margin-top:10px; background-color:#e5ecf3; border-radius:10px; padding:25px">
                    <table style="width:95%">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" class="au_col2" id="name" name="name" value=<?php set_value('name');?>></td>
                            <td>Company:</td>
                            <td><input type="text" class="au_col4" id="company" name="company" value=<?php set_value('company');?>></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td colspan="3" class="au_col2"><input type="text" id="address" name="address" value=<?php set_value('address');?>></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><input type="text" class="au_col2" id="phone" name="phone" value=<?php set_value('phone');?>></td>
                            <td>Mobile:</td>
                            <td><input type="text" class="au_col4" id="mobile" name="mobile" value=<?php set_value('mobile');?>></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" class="au_col2" id="email" name="email" value=<?php set_value('email');?>></td>
                            <td>Email:</td>
                            <td><input type="text" class="au_col4" id="email_com" name="email_com" value=<?php set_value('email_com');?>></td>
                        </tr>
                        <tr>
                            <td>Contents:</td>
                            <td colspan="3">
                                <textarea style="width:100%; height:150px" rows="1" cols="1" id="contents" name="contents"><?php set_value('contents');?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Code:</td>
                            <td>
                                <table>
                                    <tr>
                                        <td> <?php echo $cap['image'];?></td>
                                        <td><input type="text" name="captcha" value="" /></td>
                                        <td> <input type="submit" name="submit" value="Submit" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
</div>
<?php echo form_close();?>