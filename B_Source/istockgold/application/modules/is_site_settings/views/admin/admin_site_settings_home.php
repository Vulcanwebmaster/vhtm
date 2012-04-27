 <div id="main">
                    <div id="page_title">
                        <h1>
                            Site Settings</h1>
                    </div>
                    
                    <div id="admin_overview" style="border-top: 0;">
                        <form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/is_site_settings/admin/edit_settings">
                        <table border="0" cellspacing="6" cellpadding="6" id="tabbox0" style="">
                            <tbody>
                                <tr class="tablefirstrow">
                                    <td colspan="3">
                                        General Settings
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        Site Name
                                    </td>
                                    <td width="5%">
                                        <input name="SITE_NAME" type="text" id="SITE_NAME" value="<?php if (count($site_setting)) echo $site_setting['site_name'];?>" size="35">
                                    </td>
                                    <td class="help">
                                        Your Company Name as you want it to appear throughout the system.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Site Url
                                    </td>
                                    <td>
                                        <input name="SITE_URL" type="text" id="SITE_URL" value="<?php if (count($site_setting)) echo $site_setting['site_url'];?>"
                                            size="35">
                                    </td>
                                    <td class="help">
                                        The domain of your main website, eg. http://www.yourdomain.com (without ending slash)
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap">
                                        Site Secure Url <span style="font-size: 10px">(https)</span>
                                    </td>
                                    <td>
                                        <label>
                                            <input name="SITE_URL_SECURE" type="text" id="SITE_URL_SECURE" value="<?php if (count($site_setting)) echo $site_setting['site_secure'];?>" size="35">
                                        </label>
                                    </td>
                                    <td class="help">
                                        Url of your secure site (SSL) certificate for secure access, eg. https://www.yourdomain.com
                                        (leave empty if you do not have)
                                    </td>
                                </tr>
                                
                                  <tr>
                                    <td width="20%">
                                        Friendly url
                                    </td>
                                    <td>
                                        <select name="FRIENDLY_URL" id="FRIENDLY_URL">
                                            <option value="1" <?php if (count($site_setting)) if ($site_setting['friendly_url'] == 1) echo "selected=\"selected\""?> >Yes</option>
                                            <option value="0" <?php if (count($site_setting)) if ($site_setting['friendly_url'] == 0) echo "selected=\"selected\""?> >No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Use search engines friendly urls (Just turn it on if you are using linux server
                                        and mode_rewrite is on)
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td nowrap="nowrap">
                                        Temporary closed
                                    </td>
                                    <td nowrap="nowrap">
                                        <select name="temporary_close" id="temporary_close">
                                            <option value="1" <?php if (count($site_setting)) if ($site_setting['temporary'] == 1) echo "selected=\"selected\""?> >Yes</option>
                                            <option value="0" <?php if (count($site_setting)) if ($site_setting['temporary'] == 1) echo "selected=\"selected\""?> ed="selected">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        If you want to change skin, updating rates etc. Will show maintrance pages for visitors.
                                    </td>
                                </tr>
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
                            <input type="submit" name="submit" value="Save Settings" class="btn" style="margin: 20px"></center>
                        </form>
                    </div>
                  </div>