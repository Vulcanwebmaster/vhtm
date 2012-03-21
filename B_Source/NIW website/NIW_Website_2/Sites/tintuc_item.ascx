<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="tintuc_item.ascx.cs" Inherits="NIW_Website_2.Sites.tintuc_item" %>
<div style="height: auto">
    <img runat="server" alt="" id="image" style="height:120px;width:150px; float: left;"/>
    <div style="margin: 0px 0px 10px 10px; float: left; width:430px; height:141px; padding-top: 0px;">
        <asp:LinkButton runat="server" ID="title" Font-Names="Arial" Font-Size="12pt" 
            Font-Underline="False" ForeColor="#336699" onclick="title_Click1">[title]</asp:LinkButton>
        <p id="content_usercontrol" style="margin-bottom: 20px; height: 70px; width: auto; text-align: justify; font-family: Arial, Helvetica, sans-serif; font-size: 12px;" 
            runat="server"></p>
        <asp:LinkButton runat="server" Font-Names="Arial" Font-Size="11pt" 
            ForeColor="#336699" Font-Italic="True" ID="xemtiep" OnClick="title_Click1">Xem tiếp</asp:LinkButton>
            
    </div>
    
    <hr style="border-top-style: none; clear: both; margin-top: 20px; margin-bottom: 20px; border-bottom-style: dashed; border-bottom-width: 1px; border-bottom-color: #C6E2FF;" />
</div>
