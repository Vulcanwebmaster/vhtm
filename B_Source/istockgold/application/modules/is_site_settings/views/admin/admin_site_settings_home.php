 <div id="main">
                    <div id="page_title">
                        <h1>
                            Site Settings</h1>
                    </div>
                    <table width="99%" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="30%" class="tabspacer">
                                    &nbsp;
                                </td>
                                <td id="tab0" class="tabselected" onclick="TabClick(0);">
                                    General
                                </td>
                                <td width="1" class="tabspacer">
                                    &nbsp;
                                </td>
                                <td id="tab1" class="tab" onclick="TabClick(1);">
                                    Localization
                                </td>
                                <td width="30%" class="tabspacer">
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="admin_overview" style="border-top: 0;">
                        <form id="form1" name="form1" method="post" action="">
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
                                        <input name="SITE_NAME" type="text" id="SITE_NAME" value="Auto-Exchanger Demo" size="35">
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
                                        <input name="SITE_URL" type="text" id="SITE_URL" value="http://demo.auto-exchanger.com"
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
                                            <input name="SITE_URL_SECURE" type="text" id="SITE_URL_SECURE" value="" size="35">
                                        </label>
                                    </td>
                                    <td class="help">
                                        Url of your secure site (SSL) certificate for secure access, eg. https://www.yourdomain.com
                                        (leave empty if you do not have)
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap">
                                        Temporary closed
                                    </td>
                                    <td nowrap="nowrap">
                                        <select name="temporary_close" id="temporary_close">
                                            <option value="1">Yes</option>
                                            <option value="0" selected="selected">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        If you want to change skin, updating rates etc. Will show maintrance pages for visitors.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellspacing="6" cellpadding="6" id="tabbox1" style="display: none;">
                            <tbody>
                                <tr class="tablefirstrow">
                                    <td colspan="3">
                                        Localization Settings
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        Friendly url
                                    </td>
                                    <td>
                                        <select name="FRIENDLY_URL" id="FRIENDLY_URL">
                                            <option value="1" selected="selected">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Use search engines friendly urls (Just turn it on if you are using linux server
                                        and mode_rewrite is on)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Default site language
                                    </td>
                                    <td>
                                        <select name="DEF_LANGUAGE" id="DEF_LANGUAGE">
                                            <option value="english" selected="selected">english</option>
                                            <option value="german">german</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Site default Language.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        Affiliates commission
                                    </td>
                                    <td>
                                        <input name="REFERRAL_EXCH_COMISSION" type="text" id="REFERRAL_EXCH_COMISSION" value="20"
                                            size="5">%
                                    </td>
                                    <td class="help">
                                        Enter the percentage of each exchange you want affiliates to receive, eg. 10 OR
                                        <strong>0</strong> to disable referral commission in whole site
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%" nowrap="nowrap">
                                        Min exchange fee
                                    </td>
                                    <td>
                                        <input name="MIN_EXCHANGE_FEE" type="text" id="MIN_EXCHANGE_FEE" value="1.00" size="5">$
                                    </td>
                                    <td class="help">
                                        Enter your minimum exchange fee for all directions, eg. 2
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap">
                                        Allow more than reserved
                                    </td>
                                    <td>
                                        <select name="ACCEPT_MORE_THAN_RESERVE" id="ACCEPT_MORE_THAN_RESERVE">
                                            <option value="1">Yes</option>
                                            <option value="0" selected="selected">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Accept orders more than current reserved amount or not
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%" nowrap="nowrap">
                                        Accept Buy/Sell Orders
                                    </td>
                                    <td>
                                        <select name="SECTION_BUYSELL" id="SECTION_BUYSELL">
                                            <option value="1" selected="selected">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Enable or disanle buy/sell order pages in whole site.
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap">
                                        Extend registration form
                                    </td>
                                    <td>
                                        <select name="FULL_REGISTRATION" id="FULL_REGISTRATION">
                                            <option value="1" selected="selected">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </td>
                                    <td class="help">
                                        Require more information in signup page.
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" nowrap="nowrap">
                                        Required fields to signup (<b>Extend registration form must be on</b>): <span class="help">
                                            You may need more info to proccess credit or debit cards</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" nowrap="nowrap">
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="Zip_Code" class="checkbox" checked="checked">Zip
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="Phone_Number" class="checkbox" checked="checked">Phone
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="State" class="checkbox" checked="checked">State
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="City" class="checkbox" checked="checked">City
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="Street_Address" class="checkbox" checked="checked">Street Address
                                        <input type="checkbox" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value="country" class="checkbox" checked="checked">Country
                                        <input type="hidden" name="REQUIRE_REGISTRATION_FIELDS[]" id="REQUIRE_REGISTRATION_FIELDS[]"
                                            value=" ">
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
                    <script language="javascript">                        var tabs = 2;</script>
                    <script language="javascript" src="<?php echo base_url();?>assets/js/admin/tabs.js"></script>
                  	 <script language="javascript">                        TabClick(0);</script>
                  </div>