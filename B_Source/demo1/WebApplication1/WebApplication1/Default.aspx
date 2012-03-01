<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="WebApplication1._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="StyleSheet1.css" type="text/css" rel="Stylesheet" />
    <style type="text/css">
        .style1
        {
            height: 126px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server" 
    style="margin: auto; width: 1000px; background-image: url('/images/background.png');">
    <div> 
        <div style="height: 100px; width: 1000px;margin-top: -7px; background-image: url('/images/banner.jpg'); background-repeat: no-repeat;">
            <br />
            <div align="right" style="margin-right: 30px;">
                
                <input type="text" style="height: 22px" />
                <button style="background-color: #006699; border: thin solid #FFFFFF; color: #FFFFCC; height: 30px;">Search</button>
            </div>
        </div>              
        

        <div id="div_left" 
            style="float: left; margin-left: 20px; width: 740px; margin-top: 20px;">
            
                <asp:Image runat="server" ImageUrl="~/images/americanmap.png" Width="723px" />
            <br />
            <br />
            <table cellpadding="2px" style="width: 725px">
                <tr style="background-image: url('/images/panel_right.png')">
                    <td>
                        <center>
                        Province
                        </center>
                    </td>
                    <td>
                        <center>
                            03/01/2012
                        </center>
                    </td>
                    <td>
                        <center>
                            03/02/2012
                        </center>
                    </td>
                    <td>
                        <center>
                            03/03/2012
                        </center>
                    </td>
                    <td>
                        <center>
                            03/04/2012
                        </center>
                    </td>
                    <td>
                        <center>
                            03/05/2012
                        </center>
                    </td>
                </tr>
                <tr style="background-image: url('/images/tablepanel.png')">
                    <td class="style1">
                    <center>
                        <p>Ha Noi</p>
                        </center>
                    </td>
                    <td class="style1">
                    <center>
                        <img class="condition_image" src="/images/sun3.jpg" alt=""/>
                        <p>31 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td class="style1">
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td class="style1">
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td class="style1">
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td class="style1">
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                </tr>
                <tr style="background-image: url('/images/tablepanel2.png')">
                    <td>
                    <center>
                        <p>Vinh Phuc</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/rain1.jpg" alt=""/>
                        <p>30 C</p>
                        <p>Humidity: High</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/rain1.jpg" alt=""/>
                        <p>30 C</p>
                        <p>Humidity: High</p>
                        </center>
                    </td>
                    
                    <td>
                    <center>
                        <img class="condition_image" src="/images/rain1.jpg" alt=""/>
                        <p>30 C</p>
                        <p>Humidity: High</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                </tr>
                <tr style="background-image: url('/images/tablepanel.png')">
                    <td>
                        <center>
                        <p>Ha Tay</p>
                        </center>
                    </td>
                    <td>
                            <center>
                            <img class="condition_image" src="/images/cloud.png" alt=""/>
                            <p>24 C</p>
                            <p>Humidity: High</p>
                            </center>
                    </td>
                    <td>
                        <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                            <p>24 C</p>
                            <p>Humidity: High</p>
                            </center>
                    </td>
                    <td>
                        <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                            <p>24 C</p>
                            <p>Humidity: High</p>
                            </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="/images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                </tr>
                <tr style="background-image: url('/images/tablepanel2.png')">
                    
                    <td>
                    <center>
                        <p>Ha Nam</p>
                        </center>
                    </td>
                    
                    <td>
                    <center>
                        <img class="condition_image" src="images/sun3.jpg" alt=""/>
                        <p>28 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="images/sun3.jpg" alt=""/>
                        <p>28 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                        <center>
                        <img class="condition_image" src="images/sun3.jpg" alt=""/>
                        <p>28 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                        <center>
                        <img class="condition_image" src="images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                    <td>
                    <center>
                        <img class="condition_image" src="images/cloud.png" alt=""/>
                        <p>30 C</p>
                        <p>Humidity:Low</p>
                        </center>
                    </td>
                </tr>
            </table>
            <br />
        </div>
        <div id="div_right" 
            style="float: right; width: 200px; margin-top: 20px; margin-right: 20px;">
            <img alt="" src="images/weather/severe-weather-weather-250418_1280_960.jpg" 
                style="border: thin none #003300; width: 200px; height: 300px"/>
            <div style="border: thin none #003300; width: 200px; margin-top: 28px; background-repeat: no-repeat; height: 297px; background-image: url('http://localhost:2133/images/background_right.png');">
                <div style="background-color: #006600; background-image: url('http://localhost:2133/images/panel_right.png'); background-repeat: no-repeat;" 
                    class="title_panel">
                    <center style="margin-top: 10px">
                    <label class="title_right" 
                            style=" text-align: center; font-family: Tahoma; font-weight: bold; font-size: medium;">DISCOVERY</label>
                    </center>
                </div>     
                <p></p>             
                <asp:HyperLink runat="server" CssClass="discovery_item">Information of clouds</asp:HyperLink>
                
                <p></p>
                <asp:HyperLink ID="HyperLink1" runat="server" CssClass="discovery_item">Information of Storm</asp:HyperLink>
                <p></p>
                <asp:HyperLink ID="HyperLink2" runat="server" CssClass="discovery_item">About the atmosphere</asp:HyperLink>
                <p></p>
                <asp:HyperLink ID="HyperLink3" runat="server" CssClass="discovery_item">Effects of ultraviolet</asp:HyperLink>
            </div>    

            
        </div>

        <div id="footer" 
            
            
            style="clear: both; background-image: url('http://localhost:2133/images/footer.png'); height: 67px;">
            <div id="footerdiv">
                <asp:HyperLink runat="server" CssClass="itemfooter">Contact Us</asp:HyperLink>
                |
                <asp:HyperLink runat="server" CssClass="itemfooter">About Us</asp:HyperLink>
                |
                <asp:HyperLink ID="HyperLink4" runat="server" CssClass="itemfooter">News</asp:HyperLink>
                |
                <asp:HyperLink ID="HyperLink5" runat="server" CssClass="itemfooter">Support</asp:HyperLink>
                |
                <asp:HyperLink ID="HyperLink6" runat="server" CssClass="itemfooter">Privacy Policy</asp:HyperLink>

                <p style="margin-left: 10px">Copyright © New Information Technology World 2012</p>
            </div>
            </div>
    </div>
    </form>
</body>
</html>
