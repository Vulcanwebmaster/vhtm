using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Windows.Forms;
using System.IO;

namespace NIW.Sites
{
    public partial class tin_tuc_item : System.Web.UI.UserControl
    {
        public tin_tuc_item()
        {
           /* root = new System.Web.UI.HtmlControls.HtmlGenericControl();
            
            Image1 = new Image();
            title = new System.Web.UI.HtmlControls.HtmlGenericControl();
            content = new System.Web.UI.HtmlControls.HtmlGenericControl();

           // Image1.ImageUrl = ImgSrc;
            title.Text = TieuDe;
            content.InnerText = NoiDung;*/
        }

       /* public String ImgSrc
        {
            get { return Image1.ImageUrl; }
            set { Image1.ImageUrl = value; }
        }

        public String TieuDe
        {
            get { return title.Text; }
            set { title.Text = value; }
        }

        public String NoiDung
        {
            get { return content.InnerText; }
            set { content.InnerText = value; }
        }*/

        protected void Page_Load(object sender, EventArgs e)
        {
            
            
        }

        public void laydulieu(String linkanh,String tieude,String noidung)
        {
            
            /*avatar = new System.Web.UI.HtmlControls.HtmlImage();
            title = new HyperLink();
            content = new System.Web.UI.HtmlControls.HtmlGenericControl();

            avatar.Src = linkanh;
            title.Text = tieude;
            content.InnerText = noidung;

            /*StringWriter writer = new StringWriter();
            HtmlTextWriter textwriter = new HtmlTextWriter(writer);

            textwriter.RenderBeginTag(HtmlTextWriterTag.Div);
            textwriter.RenderBeginTag(HtmlTextWriterTag.Center);
            textwriter.RenderBeginTag("asp:Image");
            textwriter.RenderEndTag();
            textwriter.RenderEndTag();            
            textwriter.RenderEndTag();        */

            String newcontrol = @"<img alt='' src='" + linkanh + @"' id='avatar' runat='server' style='height:110px; width:130px;float: left;margin-bottom:20px'/>        
    <div runat='server' style='float: left;width:500px;'>
        <center>
            <label runat='server' id='title' style='color: #336600;'>" + tieude + @"</label>
        </center>
            <p style='font-size:14px; text-align: justify;margin-left:20px'>" + noidung.Substring(0, 150) + "..." + @"</p>  
    </div>
    <br />
    <hr style='clear: both; margin-top: 20px;' />";
            //root = new System.Web.UI.HtmlControls.HtmlGenericControl("div");
            root.InnerText = "<p>"+linkanh+"</p>";
        }
    }
}