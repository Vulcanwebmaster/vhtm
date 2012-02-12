<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="WebApplication7._Default" %>
<%@ Register Src="~/WebUserControl1.ascx" TagName="Menu" TagPrefix="user" %>

<script runat="server">
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Bai thuc hanh ASP</title>

        <script type="text/javascript" src="Scripts/jquery-1.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var count1 = 0;
                var count2 = 0;

                var ds1 = new String();
                ds1[0] = "images/noithat1.png";
                ds1[1] = "images/noithat3.png";

                var ds2 = new String();
                ds2[0] = "images/noithat2.png";
                ds2[1] = "images/noithat4.png";

                window.setInterval(function () {
                    //alert("ok");
                    $("#image1").fadeIn(1000).delay(4000).fadeOut(1000, function () {
                        window.image1.src = ds1[count1];

                        if (count1 < 1)
                            count1++;
                        else count1 = 0;
                    });

                   $("#image2").fadeIn(1000).delay(4000).fadeOut(1000, function () {
                        window.image2.src = ds2[count2];

                        if (count2 < 1)
                            count2++;
                        else count2 = 0;
                    });
                    
                    
                }, 4000);
            });                                                
                   
                //$("#image2").fadeIn(1000);
           // });
        </script>
<script type="text/javascript" id="sothink_dhtmlmenu"> <!--
 st_siteroot="file:///C|/Users/Admin/Desktop/ASP%20solutions/WebApplication7/WebApplication7";
 st_jspath="/menu/stmenu.js";
 if(!window.location.href.indexOf("file:") && st_jspath.charAt(0)=="/")
  document.write('<script type="text/javascript" src="'+st_siteroot+st_jspath+'"><\/script>');
 else 
  document.write('<script type="text/javascript" src="'+st_jspath+'"><\/script>');
//--> </script>
</head>

<body>
    
        <form id="form1" runat="server" style="background-color: #809FFF">
        
        
       <div               
            style=" margin:auto;border: thin solid #808080; background-color: #FFFFFF; width: 1000px; position: inherit; clip: rect(auto, auto, auto, 200px); ">

            
            
            <asp:Panel Direction="RightToLeft" runat="server" BackColor="#003366">
                <asp:Button ID="button1" runat="server" Text="CONTACT US" BackColor="#003366" 
                    BorderColor="#003366" BorderStyle="None" ForeColor="White"/>
                <asp:Button ID="button2" runat="server" Text="SITE MAP" 
                    style="margin-right: 77px" BackColor="#003366" BorderColor="#003366" 
                    BorderStyle="None" ForeColor="White"/>
                <asp:Button ID="button3" runat="server" Text="SITE MAP" 
                    style="margin-right: 77px" BackColor="#003366" BorderColor="#003366" 
                    BorderStyle="None" ForeColor="White"/>
                    
            </asp:Panel>
            
            <hr />
            <center>
                <asp:Image runat="server" ImageUrl="~/images/banner_gach.png"/>
            </center>
            <hr />   
            <script type="text/javascript">
<!--
stm_bm(["menu7653",900,"/menu","blank.gif",0,"","",0,0,0,0,50,1,0,0,"","100%",0,0,1,1,"hand","hand","file:///C|/Users/Admin/Desktop/ASP%20solutions/WebApplication7/WebApplication7",1,25],this);
stm_bp("p0",[0,4,0,0,0,7,5,0,100,"progid:DXImageTransform.Microsoft.RandomDissolve(,enabled=0,Duration=0.60)",12,"progid:DXImageTransform.Microsoft.RandomDissolve(,enabled=0,Duration=0.60)",12,50,2,5,"#999999","transparent","bg_01.gif",3,1,1,"#000000","",0,0,0,"transparent","",3,"",0,0,0,"transparent","",3,"",-1,-1,0,"transparent","",3,"",0,0,0,"transparent","",3,"","","","",20,20,20,20,20,20,20,20]);
stm_ai("p0i0",[0,"About Us","","",-1,-1,0,"","_self","","","","",5,5,0,"","",0,0,0,0,1,"#FFFFF7",1,"#993333",1,"","bg_02.gif",3,1,0,0,"#FFFFF7","#000000","#FFFFFF","#FFFFFF","bold 9pt Arial","bold 9pt Arial",0,0,"","","","",0,0,0]);
stm_aix("p0i1","p0i0",[0,"Why Choose Us?"]);
stm_aix("p0i2","p0i0",[0,"Photo Galleries","","",-1,-1,0,"","_self","","","","",5,5,0,"","",-1,-1]);
stm_bpx("p1","p0",[1,4,0,2,0,5,0,0,80,"progid:DXImageTransform.Microsoft.RandomDissolve(,enabled=0,Duration=0.30)",12,"progid:DXImageTransform.Microsoft.RandomDissolve(,enabled=0,Duration=0.30)",12,80,2,2,"#666666","#000000","",3,1,1,"#000000","",-1,-1,0,"#FFFFF7","",3,"",-1,-1,0,"#FFFFF7","",3,"",-1,-1,0,"#FFFFF7","",3,"",-1,-1,0,"#FFFFF7"]);
stm_aix("p1i0","p0i0",[0,"Kitchen Countertops","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,0,1,"#F9E0CA",1,"#666666",0,"","",3,1,0,0,"#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","9pt Arial","9pt Arial"]);
stm_aix("p1i1","p1i0",[0,"Vanity Tops"]);
stm_aix("p1i2","p1i0",[0,"Commercial Projects"]);
stm_aix("p1i3","p1i0",[0,"Other Projects"]);
stm_mc("p1",[7,"#000000",0,1,"",2]);
stm_ep();
stm_aix("p0i3","p0i0",[0,"Stone Library","","",-1,-1,0,"","_self","","","","",5,5,0,"","",-1,-1,0,0,1,"#FFFFF7",1,"#993333",1,"","bg_02.gif",1]);
stm_bpx("p2","p1",[]);
stm_aix("p2i0","p1i0",[0,"Granites"]);
stm_aix("p2i1","p1i0",[0,"Marble and Onyx"]);
stm_aix("p2i2","p1i0",[0,"Sile Stone"]);
stm_aix("p2i3","p1i0",[0,"Zodiaq"]);
stm_aix("p2i4","p1i0",[0,"CaesarStone"]);
stm_aix("p2i5","p1i0",[0,"Cambria"]);
stm_aix("p2i6","p1i0",[0,"Stone Remnants"]);
stm_aix("p2i7","p1i0",[0,"Santa Margherita"]);
stm_mc("p2",[7,"#000000",0,1,"",2]);
stm_ep();
stm_aix("p0i4","p0i0",[0,"Edge Profiles"]);
stm_aix("p0i5","p0i0",[0,"Buying Process"]);
stm_aix("p0i6","p0i0",[0,"FAQs"]);
stm_aix("p0i7","p0i0",[0,"Request a Quote"]);
stm_aix("p0i8","p0i0",[0,"Bussiness Partner Referrals"]);
stm_aix("p0i9","p0i0",[0,"Care and Maintenance"]);
stm_aix("p0i10","p0i0",[0,"Dealer Login"]);
stm_aix("p0i11","p0i0",[0,"Directions"]);
stm_aix("p0i12","p0i0",[0,"Employment Opportunities"]);
stm_mc("p0",[7,"#000000",0,1,"",2]);
stm_ep();
stm_sc(1,["transparent","transparent","","",3,3,0,0,"#FFFFF7","#000000","up_disabled.gif","up_enabled.gif",7,9,0,"down_disabled.gif","down_enabled.gif",7,9,0,0,1]);
stm_em();
//-->
</script>

            <br />
            <asp:Panel runat="server" Height="338">
                <center>
                    <img alt="" src="images/noithat1.png" id="image1" name="img1"/>
                    <img alt="" src="images/noithat2.png" id="image2" name="img2"/>              
                </center>
            </asp:Panel>
            
           
            
            <p style="padding: 10px 45px 10px 40px; margin: 20px 0px 0px 0px; background-image: url('images/bar.png'); font-family: Verdana; font-size: 12px;">
                Euro Stone Craft is one of the largest fabricator of Granite, Marble, Silestone, Caesarstone, Zodiaq, and Cambria in VA, DC & MD. Located in Fairfax County, VA, we specialize in design, fabrication and installation of Granite Countertops, Vanity Tops, Shower and Tub Surrounds, Fireplace Surrounds and high-end projects.

Learn more about our quality granite, marble and stone countertops.
                <br />
E-mail: info@EuroStoneCraft.com, Address: 13912 Park Center Road, Herndon, VA 20171
            </p>
            
            <p align="right" 
                style="padding: 0px 20px 0px 0px; margin: 0px; background-color: #CCFFCC;">
                Design by MHVT
            </p>

        </div>
        
    
    </form>
   
</body>
</html>
