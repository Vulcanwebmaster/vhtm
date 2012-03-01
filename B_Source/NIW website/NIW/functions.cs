using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Xml.Linq;
using System.Xml;
using System.IO;
using System.Web.UI;
using System.Text;
using System.Web.UI.HtmlControls;


namespace NIW
{
    public class functions
    {
        public static String host = "http://localhost:3591";

        public static String link_database = host+"/CSDL/XMLFile1.xml";

        public static void nhap_xml(String urlxml,String area,String value)
        {
            System.Xml.Linq.XElement element=System.Xml.Linq.XElement.Load(urlxml);
            System.Xml.Linq.XElement newel = new XElement("link", value);
            element.Element(area).Add(newel);
            element.Save(urlxml);
        }

        public static String[] xuat_xml(String urlxml, String area)
        {

            System.Xml.Linq.XElement element = System.Xml.Linq.XElement.Load(urlxml);
            System.Xml.Linq.XElement newel = element.Element(area);
            IEnumerable<XElement> ds = from els in newel.Elements()
                                       select els;
            String[] kq = new String[ds.Count()];
            int i = 0;
            foreach (XElement str in ds)
            {
                kq[i] = str.Value;
                i++;
            }
            return kq;
        }

        public static String writerhtml(String document)
        {
            StringWriter writer = new StringWriter();
            HtmlTextWriter htw = new HtmlTextWriter(writer);

            htw.RenderBeginTag(HtmlTextWriterTag.P);
            htw.Write(document);
            htw.RenderEndTag();

            return writer.ToString();
        }

        public static String getdocument(String area,String title,int amountchar)
        {            

            XElement element = XElement.Load(host+"/CSDL/XMLFile1.xml");
            XElement newel = element.Element(area);
            IEnumerable<XElement> ds = from el in newel.Elements("document")
                                       where el.Attribute("title").Value == title
                                       select el;

            String content="";
            foreach (XElement el in ds)
            {
                content = el.Value;
            }
            if (amountchar == 0)
                return content;
            else return content.Substring(0, amountchar)+"...";
        }

        public static String gettitle(String area, String title)
        {

            XElement element = XElement.Load(host + "/CSDL/XMLFile1.xml");
            XElement newel = element.Element(area);
            IEnumerable<XElement> ds = from el in newel.Elements("document")
                                       where el.Attribute("title").Value == title
                                       select el;

            String content = "";
            foreach (XElement el in ds)
            {
                content = el.Attribute("title").Value;
            }
            
            return content;
            
        }

    }
}