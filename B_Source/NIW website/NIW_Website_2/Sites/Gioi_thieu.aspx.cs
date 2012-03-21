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
    public partial class Gioi_thieu : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            String title_value = "";
            String content_value = "";
            functions.getdata_gioithieu(functions.host + "/CSDL/XMLFile1.xml", ref title_value, ref content_value);            
            content.InnerText = content_value;
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
            if (Session["language"] == "en")
                element = XElement.Load(functions.host + "/CSDL/en.xml");
            else element = XElement.Load(functions.host + "/CSDL/vn.xml");

            Trang_chu.InnerText = element.Element("Trang_chu").Value;
            Gioi_thieu_menu.InnerText = element.Element("Gioi_thieu").Value;
            Dich_vu.InnerText = element.Element("Dich_vu").Value;
            Tin_tuc.InnerText = element.Element("Tin_tuc").Value;

            xem.InnerText = element.Element("Xem...").Attribute("title").Value;
            Trang_chu_footer.InnerText = element.Element("Xem...").Element("Trang_chu").Value;
            Gioi_thieu_footer.InnerText = element.Element("Xem...").Element("Gioi_thieu").Value;
            Dich_vu_footer.InnerText = element.Element("Xem...").Element("Dich_vu").Value;
            Tin_tuc_footer.InnerText = element.Element("Xem...").Element("Tin_tuc").Value;

            Tin_moi_nhat.InnerText = element.Element("Tinmoinhat").Value;

            Cac_tinh_nang.InnerText = element.Element("Cac_tinh_nang").Value;
            thiet_ke_noi_bat.InnerText = element.Element("Thiet_ke_noi_bat").Value;
            da_chuc_nang.InnerText = element.Element("Da_chuc_nang").Value;
            huong_nguoi_su_dung.InnerText = element.Element("Huong_nguoi_su_dung").Value;

            //Rieng:
            title.InnerText = element.Element("Gioithieu").Element("title").Value;
            map1.InnerText = element.Element("Gioithieu").Element("map1").Value;
            map2.InnerText = element.Element("Gioithieu").Element("map2").Value;
            Loi_gioi_thieu.InnerText = element.Element("Gioithieu").Element("Loi_gioi_thieu").Value;
            Vai_net_chinh.InnerText = element.Element("Gioithieu").Element("Vai_net_chinh").Value;
            //Thong_tin.InnerText = element.Element("Gioithieu").Element("Thong_tin").Value;
            Tieu_chi_hoat_dong.InnerText = element.Element("Gioithieu").Element("Tieu_chi_hoat_dong").Value;
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
    }
}