using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace NIW
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            gioithieu_document.InnerText = functions.getdocument("gioithieu", "Lời giới thiệu",700);
        }
    }
}