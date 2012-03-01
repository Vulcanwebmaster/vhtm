using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;
using System.Windows.Forms;

namespace NIW.Sites
{
    public partial class gioi_thieu : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            //HtmlTextWriter
            //document.InnerText = System.IO.Directory.GetCurrentDirectory();
            /*"D:/Website NIW/NIW/NIW/CSDL/Document/gioithieu.txt"*/
            
            //String data = functions.getdocument("~/CSDL/Document/gioithieu.txt");
            document.InnerText = functions.getdocument("gioithieu","Lời giới thiệu",0);
            title.InnerText = functions.gettitle("gioithieu", "Lời giới thiệu");
        }
    }
}