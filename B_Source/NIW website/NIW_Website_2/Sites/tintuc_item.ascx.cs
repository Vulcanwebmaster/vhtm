using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace NIW_Website_2.Sites
{
    public partial class tintuc_item : System.Web.UI.UserControl
    {
        public String imageurl
        {
            get { return image.Src; }
            set { image.Src = value; }
        }

        public String Content
        {
            get { return content_usercontrol.InnerText; }
            set { content_usercontrol.InnerText = value; }
        }

        public String Title
        {
            get { return title.Text; }
            set { title.Text = value; }
        }

        public String link1="";

        /*public String link2
        {
            get { return xemtiep.NavigateUrl; }
            set { xemtiep.NavigateUrl = value; }
        }*/

        protected void Page_Load(object sender, EventArgs e)
        {
            
        }

        protected void title_Click1(object sender, EventArgs e)
        {
            Response.Redirect(functions.host + "/Sites/Ban_tin.aspx?title_value=" + title.Text, true);
        }
    }
}