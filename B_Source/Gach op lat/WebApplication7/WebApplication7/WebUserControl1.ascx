<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="WebUserControl1.ascx.cs" Inherits="WebApplication7.WebUserControl1" %>
<div>    
    <asp:Menu runat="server" 
        Orientation="Horizontal" DynamicVerticalOffset="10" ItemWrap="True" 
        BackColor="#3366FF" BorderColor="#99CCFF" BorderStyle="Double" 
        BorderWidth="2px">
        <DynamicItemTemplate>
            <%# Eval("Text") %>
        </DynamicItemTemplate>
        
        <Items>
            <asp:MenuItem Text="New Item" Value="New Item" NavigateUrl="http://google.com"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
            <asp:MenuItem Text="New Item" Value="New Item"></asp:MenuItem>
        </Items>
        
    </asp:Menu>
    
</div>
