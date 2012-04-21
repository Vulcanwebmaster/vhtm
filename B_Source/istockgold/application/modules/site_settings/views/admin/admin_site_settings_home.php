<div id="main">
                    <div id="page_title">
                        <h1>
                            News</h1>
                    </div>
                    <a href="<?php echo base_url();?>news/admin/add_news/Add">
                        <img src="<?php echo base_url();?>assets/images/admin/n_add.png"
                            width="16" height="16" border="0">Add New News</a>
                    <br>
                    <div id="status_box">
                        <table cellspacing="1" cellpadding="2" border="0" class="maintable">
                            <tbody>
                                <tr height="21" bgcolor="#FFFFFF">
                                    <td width="4%">
                                        <h4>
                                            Action</h4>
                                    </td>
                                    <td width="40%">
                                        <h4>
                                            Title</h4>
                                    </td>
                                </tr>
                                <tr height="20" class="col0">
                                    <td nowrap="nowrap">
                                        [ <a href="<?php echo base_url();?>news/admin/edit_news/edit/12">Edit</a>
                                        ] [ <a href="<?php echo base_url();?>news/admin/delete_news/delete/12"
                                            style="color: #990000;" onclick="">Delete</a> ]
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url();?>news/admin/edit_news/edit/12">Welcome to auto-exchanger script
                                                <img src="<?php echo base_url();?>assets/images/admin/arrow1_hor.gif"
                                                    width="7" height="11" border="0"></a>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <br>
                    <div id="page_guide">
                        <h2>
                            HELP:</h2>
                        You can easily create new pages, for example "Partners" where exchange links to
                        other related sites. To create new page click on 'Add New Document' then fill Title:<b>Partners</b>,
                        page contents and save it, then go to your template folder and add link for new
                        page anywhere that you like by writing this code:
                        <br>
                        <u>&lt;a href='{dynamic_link:"Partners"}'&gt;Our Partners&lt;/a&gt;</u>
                    </div>
                      </div>
    