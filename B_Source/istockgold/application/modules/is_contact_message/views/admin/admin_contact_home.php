<div id="main">
    <div id="page_title">
                        <h1>
                            Contact Message</h1>
                    </div>
                    <div id="status_box">
                        <table cellspacing="1" cellpadding="2" border="0" class="maintable">
                            <tbody>
                                <tr height="21" bgcolor="#FFFFFF">
                                    <td width="20%">
                                        <h4> MessageId</h4>
                                    </td>
                                    <td width="40%">
                                        <h4> First Name</h4>
                                    </td>
                                    <td width="40%">
                                        <h4> Last Name</h4>
                                    </td>
                                    <td width="60%">
                                        <h4> Email</h4>
                                    </td>
                                    <td width="40%">
                                        <h4> Delete</h4>
                                    </td>
                                </tr>
                                
<?php
if (count($contact))
foreach ($contact as $key => $list)
{
	echo "<tr height=\"20\" class=\"col0\">";
	echo "<td nowrap=\"nowrap\">";
	echo '<a href="'.base_url().'index.php/is_contact_message/admin/view/'.$list['message_id'].'">'.$list['message_id'].'</a>';
	echo "</td>";
 	echo "<td>";
	echo $list['first_name'];
	echo "</td>";
	echo "<td>";
	echo $list['last_name'];
	echo "</td>";
	echo "<td>";
	echo $list['email'];
	echo "</td>";
	echo "</td><td style=\"text-align: center; line-height: 16px\" nowrap=\"nowrap\">
						 	<a href='".base_url()."index.php/is_contact_message/admin/delete/".$list['message_id'].
								"' title=\"Delete this message\" onclick=\"return confirm_entry('DELETE #".$list['message_id']."')\">
								<img src='".base_url()."assets/images/fasle3.gif' /></a></td>";
							
	echo "</tr>";
}
?>                                
                                </tbody>
                        </table>
                    </div>
                    <br>
                    <div id="page_guide">
                        <h2>
                            HELP:</h2>
                        You can easily create new mail, for example "Partners" where exchange links to
                        other related sites. To create new mail click on 'Add New Mail' then fill Title and Content
                    </div>
                      </div>
    