   <div id="main">
                    <div id="Div1">
                        <h1>
                            Manage Currencies info &amp; passwords
                        </h1>
                    </div>
                    Use the following form to enable and configure the e-currencies you want to accept
                    in your site.
                    <br>
                    Enabling Auto Exchange allows your users to receive their exchange directly into
                    their e-currencies accounts instead of their payment value.<br>
                    <br>
                    <!--Start of the Tabmenu -->
                    <div style="border: #CFD1D0 3px solid; border-bottom: 0;">
                        <div class="tabmenu">
                            <ul>
                                <li><a href="" onclick="TabClick(0); return false;"
                                    id="tab0" class="tabselected">LibertyReserve</a></li>
                                <li><a href="" onclick="TabClick(1); return false;"
                                    id="tab1" class="tab">Western Union</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End of the Tabmenu -->
                    <div id="status_box" style="border-top: 0;">
                        <form id="settingform" name="settingform" method="post" action=""
                        enctype="multipart/form-data">
                                               <table border="0" cellspacing="5" cellpadding="5" width="99%" id="tabbox0" style="">
                            <tbody>
                                <tr class="tablefirstrow">
                                    <td colspan="3">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td width="100">
                                                        <img src="images/libertyreserve_4.gif"
                                                            width="100" height="42">
                                                    </td>
                                                    <td>
                                                        <h1>
                                                            Liberty Reserve Account settings
                                                        </h1>
                                                    </td>
                                                    <td width="10%" nowrap="nowrap">
                                                        <div style="line-height: 16px">
                                                            Usd : <span style="color: #006600;">Active</span><br>
                                                            Euro : <span style="color: #006600;">Active</span><br>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        Liberty Account:
                                    </td>
                                    <td width="5%">
                                        <input name="libertyreserve|ACCOUNT" type="text" id="libertyreserve|ACCOUNT" value="U2782065">
                                    </td>
                                    <td class="help">
                                        Use cappital characters sample: UXXXX
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        Account Name:
                                    </td>
                                    <td width="5%">
                                        <input name="libertyreserve|ACCOUNT_NAME" type="text" id="libertyreserve|ACCOUNT_NAME"
                                            value="Auto Exchanger Demo">
                                    </td>
                                    <td class="help">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Store Name:
                                    </td>
                                    <td>
                                        <input name="libertyreserve|PAYEE_NAME" type="text" id="libertyreserve|PAYEE_NAME"
                                            value="Auto Exchanger Demo">
                                    </td>
                                    <td class="help">
                                        This is the store name you must set up on Merchant tools &gt; Create new store.
                                        [<strong>Auto Receive</strong>] create name,password and enable it. Select POST
                                        for all HTTP methods
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Store Password:
                                    </td>
                                    <td>
                                        <label>
                                            <input name="libertyreserve|ALT_PASSWORD" type="text" id="libertyreserve|ALT_PASSWORD"
                                                value="****************">
                                        </label>
                                    </td>
                                    <td class="help">
                                        Your store name password must set on libertyreserve store. [<strong>Auto Receive</strong>]
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        API Name:
                                    </td>
                                    <td>
                                        <input name="libertyreserve|API_NAME" type="text" id="libertyreserve|API_NAME" value="Auto Exchanger Demo">
                                    </td>
                                    <td class="help">
                                        This API name must create on Merchant Tools &gt; Create New API [<strong>Auto Payout</strong>]
                                        Select POST for all fileds
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        API password:
                                    </td>
                                    <td>
                                        <input name="libertyreserve|MAIN_PASSWORD" type="text" id="libertyreserve|MAIN_PASSWORD"
                                            value="****************">
                                    </td>
                                    <td class="help">
                                        Your Api password must set on libertyreserve API. [<strong>Auto Payout</strong>],Also
                                        need to Enabled Api and all opersations(Transfer, History, blanace and account name)
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap">
                                        Payment verify page:
                                    </td>
                                    <td>
                                        <label>
                                            <input name="libertyreserve|CURRENCY_VERIFIER" type="text" id="libertyreserve|CURRENCY_VERIFIER"
                                                value="hsh_bnk/hsh_liberty.php">
                                        </label>
                                    </td>
                                    <td class="help">
                                        Payment verify page address(don't need to change until you know what to do)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input name="Action" type="hidden" id="Action" value="Save">
                        <input type="hidden" name="selectedtab" id="selectedtab" value="0">
                        <center>
                            <input type="submit" name="submit" value="Update All Currencies info" class="btn">
                        </center>
                        </form>
                        <br>
                    </div>
                    <br>
                    <a href="http://demo.auto-exchanger.com/admin/adm_currencies/">Exchange settings</a>
                    <div id="page_guide">
                        <h2>
                            SECURITY ADVISORY:</h2>
                        Auto Payouts &amp; Auto recieves requires very sensitive information about your
                        currencies accounts, While all the passwords and other sensitive information are
                        encrypted, each password will take too much time to decrypt by a professional, because
                        all of them are encrypted depend on doman and 32 random characters long string,
                        but still you should be careful about your hosting provider, and you need extra
                        care if are using shared hosting.
                    </div>
                    <script language="javascript">                        var tabs = 2;</script>
                    <script language="javascript" src="<?php base_url()?>assets/js/admin/tabs.js"></script>
                    <script language="javascript">                        TabClick(0);</script>
                </div>