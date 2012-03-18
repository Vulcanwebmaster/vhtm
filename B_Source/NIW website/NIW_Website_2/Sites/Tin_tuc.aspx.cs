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
    public partial class Tin_tuc : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            get_list();
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
            Gioi_thieu.InnerText = element.Element("Gioi_thieu").Value;
            Dich_vu.InnerText = element.Element("Dich_vu").Value;
            Tin_tuc_menu.InnerText = element.Element("Tin_tuc").Value;

            xem.InnerText = element.Element("Xem...").Attribute("title").Value;
            Trang_chu_footer.InnerText = element.Element("Xem...").Element("Trang_chu").Value;
            Gioi_thieu_footer.InnerText = element.Element("Xem...").Element("Gioi_thieu").Value;
            Dich_vu_footer.InnerText = element.Element("Xem...").Element("Dich_vu").Value;
            Tin_tuc_footer.InnerText = element.Element("Xem...").Element("Tin_tuc").Value;

            tin_moi_nhat.InnerText = element.Element("Tinmoinhat").Value;

            //Rieng:
            title.InnerText = element.Element("Tintuc").Element("title").Value;
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

        void get_list()
        {
            XElement element = XElement.Load(functions.host + "/CSDL/XMLFile1.xml");
            XElement newel = element.Element("tintuc");
            IEnumerable<XElement> ds = from el in newel.Elements("document")
                                       select el;

            List<Sites.tintuc_item> list = new List<Sites.tintuc_item>();

            int count = 0;

            foreach (XElement el in ds)
            {
                System.Web.UI.Control newcontrol = new Control();
                newcontrol=Page.LoadControl("tintuc_item.ascx");
                ((Sites.tintuc_item)newcontrol).image.Src = functions.host+"/CSDL/images/"+el.Element("image").Value;
                ((Sites.tintuc_item)newcontrol).content_usercontrol.InnerText = functions.getdata_tintuc(functions.host + "/CSDL/XMLFile1.xml", "tintuc", el.Attribute("title").Value, 300);
                ((Sites.tintuc_item)newcontrol).title.Text = el.Attribute("title").Value;                                  

                list.Add((Sites.tintuc_item)newcontrol);
            }
            
            screen.DataSource = list;
            screen.DataBind();
        }

        public String getimage(object oItem)
        {
            return ((Sites.tintuc_item)oItem).image.Src;
        }

        public String getcontent(object oItem)
        {
            return ((Sites.tintuc_item)oItem).content_usercontrol.InnerText;
        }

        public String gettitle(object oItem)
        {
            return ((Sites.tintuc_item)oItem).title.Text;
        }

       /* public String getlink(object oItem)
        {
            return ((Sites.tintuc_item)oItem).xemtiep.NavigateUrl;
        }*/
        
    }
}