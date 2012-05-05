 <div id="main">
                    <div id="page_title">
                        <h1>
                            Online Support</h1>
                    </div>
                    
                    <div id="admin_overview" style="border-top: 0;">
                        <form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/is_online_support/admin/edit_online_support">
                        <table border="0" cellspacing="6" cellpadding="6" id="tabbox0" style="">
                            <tbody>
                            
                             <tr class="tablefirstrow">
                                    <td colspan="30">
                                    </td>
                                </tr>
                            
                            <?php 
                            if (count($online_support)){
							foreach ($online_support as $key => $list)
							{                            
                            ?>
 
                                <tr>
                                    <td width="20%">
                                        Y! online support 1:
                                    </td>
                                    <td>
                                        <input name="online1" type="text" id="online1" value="<?php echo $list['yahoo_nick1'];?>"
                                            size="35">
                                    </td>
                                    <td class="help">
                                         Your yahoo online 1.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        Y! online support 2:
                                    </td>
                                    <td>
                                        <input name="online2" type="text" id="online2" value="<?php echo $list['yahoo_nick2'];?>"
                                            size="35">
                                    </td>
                                    <td class="help">
                                         Your yahoo online 2.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        Name:
                                    </td>
                                    <td width="5%">
                                        <input name="name" type="text" id="name" value="<?php echo $list['name'];?>" size="35">
                                    </td>
                                    <td class="help">
                                        Your Name.
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="10%">
                                        Phone Number:
                                    </td>
                                    <td width="5%">
                                        <input name="phone" type="text" id="phone" value="<?php echo $list['phone'];?>" size="35">
                                    </td>
                                    <td class="help">
                                        Your phone.
                                    </td>
                                </tr>
                                
                                <?php 
								}
                            }
                                
                                ?>

                            </tbody>
                        </table>
                        <script language="javascript">
                            function mailChange(mtype) {
                                if (mtype.value == "phpmail")
                                    document.getElementById("smtp_setting").style.display = "none";
                                else
                                    document.getElementById("smtp_setting").style.display = "block";
                            }
</script>
                        <center>
                            <input name="Action" type="hidden" id="Action" value="Save">
                            <input type="hidden" name="selectedtab" id="selectedtab" value="0">
                            <input type="submit" name="submit" value="Submit" class="btn" style="margin: 20px"></center>
                        </form>
                    </div>
                  </div>