<div id="main">
    <div id="page_title">
                        <h1>
                            News</h1>
                    </div>
                    <a href="<?php echo base_url();?>index.php/is_news/admin/create">
                        <img src="<?php echo base_url();?>assets/images/admin/n_add.png"
                            width="16" height="16" border="0">Add New News</a>
                    <br>
                    <div id="status_box">
                        <table cellspacing="1" cellpadding="2" border="0" class="maintable">
                            <tbody>
                                <tr height="21" bgcolor="#FFFFFF">
                                    <td width="10%">
                                        <h4> Action</h4>
                                    </td>
                                    <td width="40%">
                                        <h4> Title</h4>
                                    </td>
                                </tr>
                                
<?php 
foreach ($news as $key => $list)
{
	echo "<tr height=\"20\" class=\"col0\">";
	echo "<td nowrap=\"nowrap\">";
 	echo "[<a href=\"".base_url()."index.php/is_news/admin/edit/".$list['id']."\">Edit</a>]";
 	echo "[<a href=\"".base_url()."index.php/is_news/admin/delete/".$list['id']."\">Delete</a>]";
	echo "</td>";
 	echo "<td>";
	echo $list['title'];
	echo "</td>";
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
                        You can easily create new news, for example "Partners" where exchange links to
                        other related sites. To create new news click on 'Add New News' then fill Title and Content
                    </div>
                      </div>
    