using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Xml;
using System.Xml.Linq;
using System.Windows.Forms;
using System.IO;

namespace NIW.Sites
{
    public partial class tin_tuc : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            XElement element = XElement.Load(functions.link_database);
            IEnumerable<XElement> ds = from el in element.Element("tintuc").Elements("document")
                                       select el;

            String elements = "";
            foreach (XElement el in ds)
            {
                System.Web.UI.Control ct = new System.Web.UI.Control();
                ct = Page.LoadControl("tin_tuc_item.ascx");// (functions.host + "/UserControl/tin_tuc_item.ascx");
                
                String linkanh =  "/CSDL/image/" + el.Element("image").Value;
                //MessageBox.Show(linkanh);

                ((Sites.tin_tuc_item)ct).avatar.Src = linkanh;
                ((Sites.tin_tuc_item)ct).title.Text = el.Attribute("title").Value;
                ((Sites.tin_tuc_item)ct).content.InnerText = el.Element("p").Value.Substring(0,300);
                                

                /*System.Web.UI.WebControls.Button nb = new System.Web.UI.WebControls.Button();
                nb.Text = "manh";
                div_left.Controls.Add(ct);*/

                /*String linkanh =  "/CSDL/image/" + el.Element("image").Value;

                String newcontrol =@"<div style='width: 670px' id='root' runat='server'>
    <img alt='' src='" + linkanh + @"' id='avatar' runat='server' style='height:110px; width:130px;float: left;margin-bottom:20px'/>
        
    <div runat='server' style='float: left;width:500px'>
        <center>
            <label runat='server' id='title' style='color: #336600'>" + el.Attribute("title").Value + @"</label></center>
            <p style='font-size:14px; text-align: justify;margin-left:20px'>" + el.Element("p").Value.Substring(0, 350)+"..." + @"</p>  
            <asp:HyperLink runat='server' Font-Italic='True' ForeColor='#3366FF' Font-Size='Medium'>Xem tiếp</asp:HyperLink>     

         
    </div>
    <br />
    <br />

    <hr style='clear: both; margin-top: 20px;' />
</div>";*/
                div_left.Controls.Add(ct);
                
            }
        }
    }
}