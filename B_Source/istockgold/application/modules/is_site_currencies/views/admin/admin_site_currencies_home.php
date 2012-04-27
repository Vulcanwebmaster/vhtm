 <?php 
 if (count($site_currencies))
 foreach ($site_currencies as $key => $list)
{
	$data[$list['key']] = $list['value'];
}
?>

      
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
                        <form id="settingform" name="settingform" method="post" action="<?php echo base_url()?>index.php/is_site_currencies/admin/edit">
                        <table border="0" cellspacing="5" cellpadding="5" width="99%" id="tabbox0" style="">
                            <tbody>
                                <tr class="tablefirstrow">
                                    <td colspan="3">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td width="100">
                                                        <img src="<?php echo base_url()?>assets/images/admin/libertyreserve_3.gif"
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
                                        <input name="liberty_account" type="text" id="liberty_account" 
                                        	value="<?php echo $data['liberty.account']?>">
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
                                        <input name="liberty_account_name" type="text" id="liberty_account_name" readonly="readonly"
                                            value="<?php echo $data['liberty.account.name']?>">
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
                                        <input name="liberty_account_storename" type="text" id="liberty_account_storename"
                                            value="<?php echo $data['liberty.account.storename']?>">
                                    </td>
                                    <td class="help">
                                        This is the store name you must set up on Merchant tools &gt; Create new store.
                                        [<strong>Auto Receive</strong>] create name,password and enable it. Select POST
                                        for all HTTP methods
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellspacing="5" cellpadding="5" width="99%" id="tabbox1" style="display: none;">
                            <tbody>
                                <tr class="tablefirstrow">
                                    <td colspan="3">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td width="100">
                                                        <img src="<?php echo base_url()?>assets/images/western unio.jpg"
                                                            width="100" height="42">
                                                    </td>
                                                    <td>
                                                        <h1>
                                                            Westion Union Account settings
                                                        </h1>
                                                    </td>
                                                    <td width="10%" nowrap="nowrap">
                                                        <div style="line-height: 16px">
                                                            Usd : <span style="color: #006600;">Active</span><br>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">
                                        Receiver's First Name:
                                    </td>
                                    <td width="30%" align="left">
                                        <input name="western_receiver_firstname" type="text" id="western_receiver_firstname" 
                                        value="<?php echo $data['western.receiver.firstname']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">
                                        Receiver's Last Name:
                                    </td>
                                    <td width="30%" align="left">
                                        <input name="western_receiver_lastname" type="text" id="western_receiver_lastname"
                                            value="<?php echo $data['western.receiver.lastname']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">
                                        Reveiver's City:
                                    </td>
                                    <td width="30%" align="left">
                                        <input name="western_receiver_city" type="text" id="western_receiver_city"
                                            value="<?php echo $data['western.receiver.city']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">
                                        Reveiver's Country:
                                    </td>
                                    <td width="30%" align="left">
                                        <input name="western_receiver_country" type="text" id="western_receiver_country"
                                            value="<?php echo $data['western.receiver.country']?>">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input name="Action" type="hidden" id="Action" value="Save">
                        <input type="hidden" name="selectedtab" id="selectedtab" value="0">
                        <center>
                            <input type="submit" name="submit" value="Update" class="btn">
                        </center>
                        </form>
                        <br>
                    </div>
                    <br>
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
                    <script language="javascript" src="<?php echo base_url()?>assets/js/admin/tabs.js"></script>
                    <script language="javascript">                        TabClick(0);</script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
      <script type="text/javascript" src="http://crypto-js.googlecode.com/files/2.3.0-crypto-sha256.js"></script>
      <script type="text/javascript" src="http://sites.google.com/site/jollytoad/json.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/apiagent.js"></script>
      <script type="text/javascript">
      var accountname = document.getElementById("liberty_account");

      if (accountname.addEventListener ) {
    	  //accountname.addEventListener('keydown',keyHandler,false);
      } else if(accountname.attachEvent ) {
    	  //accountname.attachEvent('onkeydown',keyHandler); /* damn IE hack */
      }

      function getAccountName() {
          var account = document.getElementById("liberty_account").value;
          var api = "APIEntry1";
          var securityWord = "";           
          auth.create("U9450274", api, securityWord);
          jsApiAgent.initialize(auth);
          var request = "\,\"search\":\"U9450274\"}";
          //alert(request);
          var data = jsApiAgent.accountName(request);
          if(data.Accounts[0])
        	  //$("#liberty_account_name").html($.toJSON(data.Accounts[0].Name)); 
        	  document.getElementById("liberty_account_name").value = $.toJSON(data.Accounts[0].Name);
          else
              alert("Data not found");  
          return false;                
	  };

      function keyHandler(e) {
          var TABKEY = 9;
          if(e.keyCode == TABKEY) {
        	  getAccountName();
              return false;
          }
      }
      </script>
 </div>
