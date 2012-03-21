using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Xml;
using System.Xml.Linq;

namespace NIW_Website_2.Sites
{
    public partial class Ban_tin : System.Web.UI.Page
    {

        protected void Page_Load(object sender, EventArgs e)
        {
            title.InnerText = Request.QueryString["title_value"];
            content.InnerText=functions.getdata_tintuc(functions.host + "/CSDL/XMLFile1.xml", "tintuc", title.InnerText, 0);
            image.Src = functions.host+"/CSDL/images/"+functions.getimage_tintuc(functions.host + "/CSDL/XMLFile1.xml", title.InnerText);
            get_news();

            change_language();
        }

        void change_language()
        {
            XElement element;
            if (Session["language"] == "en")
                element = XElement.Load(functions.host + "/CSDL/en.xml");
            else element = XElement.Load(functions.host + "/CSDL/vn.xml");

            Trang_chu.InnerText = element.Element("Trang_chu").Value;
            Gioi_thieu.InnerText = element.Element("Gioi_thieu").Value;
            Dich_vu.InnerText = element.Element("Dich_vu").Value;
            Tin_tuc_menu.InnerText = element.Element("Tin_tuc").Value;

            xem.InnerText = element.Element("Xem...").Attribute("title").Value;
            Trang_chu_footer.InnerText = element.Element("Xem...").Element("Trang_chu").Value;
            Gioi_thieu_footer.InnerText = element.Element("Xem...").Element("Gioi_thieu").Value;
            Dich_vu_footer.InnerText = element.Element("Xem...").Element("Dich_vu").Value;
            Tin_tuc_footer.InnerText = element.Element("Xem...").Element("Tin_tuc").Value;

            tin_moi_nhat.InnerText = element.Element("Tinmoinhat").Value;

            Cac_tinh_nang.InnerText = element.Element("Cac_tinh_nang").Value;
            thiet_ke_noi_bat.InnerText = element.Element("Thiet_ke_noi_bat").Value;
            da_chuc_nang.InnerText = element.Element("Da_chuc_nang").Value;
            huong_nguoi_su_dung.InnerText = element.Element("Huong_nguoi_su_dung").Value;

            //Rieng:
            title_web.InnerText = element.Element("Tintuc").Element("title").Value;
            Cac_tin_tuc.InnerText = element.Element("Tintuc").Element("Cac_tin_tuc").Value;
            map1.InnerText = element.Element("Tintuc").Element("map1").Value;
            map2.InnerText = element.Element("Tintuc").Element("map2").Value;
            Cac_tinh_nang.InnerText = element.Element("Tintuc").Element("Cac_tinh_nang").Value;
        }

        protected void english_click(object sender, ImageClickEventArgs e)
        {
            Session["language"] = "en";
            functions.language = 2;
            change_language();
        }

        protected void vietnamese_click(object sender, ImageClickEventArgs e)
        {
            Session["language"] = "vi";
            functions.language = 1;
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


    }
}