using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Timers;
using System.Windows.Forms;

namespace WebApplication7
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            //System.Windows.Forms.Timer timer1 = new System.Windows.Forms.Timer();
            System.Timers.Timer timer1 = new System.Timers.Timer(2000);
            timer1.Elapsed+=new ElapsedEventHandler(callback);
            timer1.Interval = 2000;
            timer1.Enabled = true;
            timer1.Start();
        }


        public void callback(object sender, ElapsedEventArgs e)
        {
           // if (image1.ImageUrl == "images/noithat1.png")
            //MessageBox.Show("abc");
                //image1.ImageUrl = "images/noithat3.png";
            
            //else image1.ImageUrl = "images/noithat1.png";
        }
    }
}