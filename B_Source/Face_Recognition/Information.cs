using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace FaceRecognition
{
    public partial class Information : Form
    {
        String ConnectionString=@"Data Source=.\SQLEXPRESS;AttachDbFilename=|DataDirectory|\Database\Database1.mdf;Integrated Security=True;User Instance=True";

        public Information()
        {
            InitializeComponent();
        }

        int index;

        public Information(int index)
        {
            InitializeComponent();

            this.index = index;
            show();

            this.FormClosing+=new FormClosingEventHandler(Information_FormClosing);
        }

        protected void Information_FormClosing(object sender, FormClosingEventArgs e)
        {
            
        }

        void show()
        {
               SqlConnection cn = new SqlConnection(ConnectionString);
                cn.Open();

                String command = @"select * from PERSON where Picture='" + (index+1).ToString() + "'";
                SqlDataAdapter adapter = new SqlDataAdapter(command, cn);
                SqlCommandBuilder builder = new SqlCommandBuilder(adapter);
                DataSet dt = new DataSet();
                adapter.Fill(dt, "PERSON");
                name.Text = dt.Tables["PERSON"].Rows[0].ItemArray[1].ToString();
                Position.Text = dt.Tables["PERSON"].Rows[0].ItemArray[4].ToString();
                time.Text = System.DateTime.Now.ToString();
            
        }

        private void OK_Button_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
