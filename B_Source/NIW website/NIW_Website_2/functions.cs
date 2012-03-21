using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Xml;
using System.Xml.Linq;
using System.Web.UI;
using System.Net;
using System.Runtime.Serialization;
using System.Text;
using System.IO;

namespace NIW_Website_2
{
    public class functions
    {
        public static int language=1;

        public static String host = "http://localhost:28535";

        public static void getdata_gioithieu(String linkXml, ref String title, ref String content)
        {
            XElement element = XElement.Load(linkXml);
            XElement gioithieu = element.Element("gioithieu").Element("document");
            title = gioithieu.Attribute("title").Value;
            content = gioithieu.Value;
        }

        public static String getdata_tintuc(String linkXml,String area, String title, int amountchar)
        {

            XElement element = XElement.Load(linkXml);
            XElement newel = element.Element(area);
            IEnumerable<XElement> ds = from el in newel.Elements("document")
                                       where el.Attribute("title").Value == title
                                       select el;

            String content = "";
            foreach (XElement el in ds)
            {
                content = el.Element("p").Value;
            }
            if (amountchar == 0)
                return content;
            else return content.Substring(0, amountchar) + "...";
        }

        public static String getimage_tintuc(String linkXml, String title)
        {
            XElement element = XElement.Load(linkXml);
            XElement newel = element.Element("tintuc");
            IEnumerable<XElement> ds = from el in newel.Elements("document")
                                       where el.Attribute("title").Value == title
                                       select el;

            String image = "";
            foreach (XElement el in ds)
            {
                image = el.Element("image").Value;
            }
            return image;
        }

        public static void Translate(String input, String language_from, String language_to,ref String output)
        {
            String Appid = "F45CC25E006E638C2C5123F8FBF625A32C6591CC";
            string uri = "http://api.microsofttranslator.com/v2/Http.svc/Translate?appId=" + Appid + "&text=" + input + "&from=" + language_from + "&to=" + language_to;
            HttpWebRequest request = (HttpWebRequest)WebRequest.Create(uri);

            WebResponse response = null;

            
                response = request.GetResponse();
                using (System.IO.Stream streamresponse = response.GetResponseStream())
                {
                    streamresponse.Seek(100, System.IO.SeekOrigin.Begin);
                   streamresponse.SetLength(1024);
                    byte[] buff=new byte[streamresponse.Length];
                    streamresponse.Write(buff, 0, 1024);

                    String outstring = ASCIIEncoding.UTF8.GetString(buff);

                    output= outstring;
                }
            
            /*finally
            {
                if (response==null)
                {
                    response = new WebResponse();
                    response.Close();
                    response=null;
                }
            }*/
        }

        public static void get_news_footer(String[] title,String[] image_url,String[] content)
        {
            XElement element = XElement.Load(host + "/CSDL/XMLFile1.xml");
            XElement newelement = element.Element("tintuc");

            IEnumerable<XElement> ds = from el in newelement.Elements("document")
                                       select el;
            int i = 0;
            foreach (XElement el in ds)
            {
                if (i < 3)
                {
                    title[i] = el.Attribute("title").Value;
                    image_url[i] = host + "/CSDL/images/" + el.Element("image").Value;
                    content[i] = getdata_tintuc(host + "/CSDL/XMLFile1.xml", "tintuc", el.Attribute("title").Value, 200);

                    i++;
                }
                else break;
            }
        }

    }
}