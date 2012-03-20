using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Xml;
using System.Xml.Linq;


namespace NIW_Website_2
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {            
            get_news();
            change_language();
        }

        void get_news()
        {
            String[] titles = new String[3];
                String[] images = new String[3];
            String[] contents = new String[3];

            functions.get_news_footer(titles, images, contents);
            news0_title.InnerText = titles[0];
            news0_title.HRef = functions.host + "/Sites/Ban_tin.aspx?title_value=" + titles[0];
            news0_image.Src = images[0];
            news0_content.InnerText = contents[0];

            news1_title.InnerText = titles[1];
            news1_title.HRef = functions.host + "/Sites/Ban_tin.aspx?title_value=" + titles[1];
            news1_image.Src = images[1];
            news1_content.InnerText = contents[1];            
        }

        void change_language()
        {
            XElement element;
            if (Session["language"] != null)
            {
                if (Session["language"].ToString().Equals("en"))
                    element = XElement.Load(functions.host + "/CSDL/en.xml");
                else element = XElement.Load(functions.host + "/CSDL/vn.xml");
            }
            else element = XElement.Load(functions.host + "/CSDL/vn.xml");
            Trang_chu.InnerText = element.Element("Trang_chu").Value;
            Gioi_thieu.InnerText = element.Element("Gioi_thieu").Value;
            Dich_vu.InnerText = element.Element("Dich_vu").Value;
            Tin_tuc.InnerText = element.Element("Tin_tuc").Value;

            xem.InnerText = element.Element("Xem...").Attribute("title").Value;
            Trang_chu_footer.InnerText = element.Element("Xem...").Element("Trang_chu").Value;
            Gioi_thieu_footer.InnerText = element.Element("Xem...").Element("Gioi_thieu").Value;
            Dich_vu_footer.InnerText = element.Element("Xem...").Element("Dich_vu").Value;
            Tin_tuc_footer.InnerText = element.Element("Xem...").Element("Tin_tuc").Value;

            tin_moi_nhat.InnerText = element.Element("Tinmoinhat").Value;

            //Rieng:
            title.InnerText = element.Element("Trangchu").Element("title").Value;
            Kha_nang.InnerText = element.Element("Trangchu").Element("Kha_nang").Value;
            Phan_mem_ung_dung.InnerText = element.Element("Trangchu").Element("Ung_dung_Window").Value;
            Bao_tri.InnerText = element.Element("Trangchu").Element("Bao_tri_nang_cap").Value;
            dich_vu_khach_hang.InnerText = element.Element("Trangchu").Element("Dich_vu").Value;
            website.InnerText = element.Element("Trangchu").Element("Website").Value;
            lien_he.InnerText = element.Element("Trangchu").Element("Lien_he").Value;           
        }

       protected  void english_click(object sender, ImageClickEventArgs e)
        {            
            functions.language = 2;
            Session["language"] = "en";
            change_language();
        }

       protected void vietnamese_click(object sender, ImageClickEventArgs e)
       {           
           functions.language = 1;
           Session["language"] = "vi";
           change_language();
       }       
    }
}