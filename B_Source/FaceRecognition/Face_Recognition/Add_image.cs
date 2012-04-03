using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data;
using System.Data.SqlClient;
using System.Xml;
using System.Xml.Linq;
using System.IO;

namespace FaceRecognition
{
    public partial class Add_image : Form
    {
        public Add_image()
        {            
            String current_folder = Directory.GetCurrentDirectory();

            InitializeComponent();
            load_person();

            this.AcceptButton = add_button;
            this.CancelButton = cancel_button;                          
        }

        Boolean exist(String n)
        {
            int count = 0;
            foreach (String str in name.Items)
            {
                if (str == n) count++;
            }
            if (count > 0) return true;
            else return false;
        }

        void load_person()
        {
            Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
            IEnumerable<Database.PERSON> ds = from el in db.PERSONs
                                 select el;
            name.Items.Clear();
            foreach (Database.PERSON el in ds)
            {
                if (exist(el.Name)==false)
                    name.Items.Add(el.Name);
            }
        }
        //String connectionString = @"Data Source=.\SQLEXPRESS;AttachDbFilename=|DataDirectory|\Database\Database1.mdf;Integrated Security=True;User Instance=True";

        private void Add_image_Load(object sender, EventArgs e)
        {
            Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
            IEnumerable<Database.POSITION> ds = from el in db.POSITIONs
                                                select el;
            foreach (Database.POSITION el in ds)
            {
                position.Items.Add(el.Name);
            }
        }

        private void add_button_Click(object sender, EventArgs e)
        {
            if (position.Text == "")
            {
                MessageBox.Show("Position can not be null","Error", MessageBoxButtons.OK,MessageBoxIcon.Error);
            }
            else
            {               

                //Get ID_postion:
                Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
                Database.POSITION pos = db.POSITIONs.Single(p => p.Name == position.Text);
                String id = pos.ID_Position;

                //Get ID_person
                int count1 = db.PERSONs.Count();

                Database.PERSON per = new Database.PERSON();
                per.ID_Person = count1.ToString();
                per.Name = name.Text;
                per.Address = address.Text;
                if (sex.Text == "Male")
                    per.Sex = true;
                else per.Sex = false;
                per.ID_Position = id;
                per.SSc = ssc.Text;
                per.Picture=(count1+1).ToString();

                db.PERSONs.InsertOnSubmit(per);
                db.SubmitChanges();

                if (MessageBox.Show("Succesfully", "Message", MessageBoxButtons.OK, MessageBoxIcon.Information) == DialogResult.OK)
                    this.Close();
            }
        }

        private void name_SelectedIndexChanged(object sender, EventArgs e)
        {
            Database.DataClasses1DataContext db = new Database.DataClasses1DataContext();
            IEnumerable<Database.PERSON> ds = from el in db.PERSONs
                                              select el;
            foreach (Database.PERSON per in ds)
            {
                address.Text = per.Address;
                if (per.Sex == true)
                    sex.SelectedIndex = 0;
                else sex.SelectedIndex = 1;

                //Get position:
                Database.POSITION pos = db.POSITIONs.Single(p2 => p2.ID_Position == per.ID_Position);
                position.Text = pos.Name;

                ssc.Text = per.SSc;
            }            
        }
    }
}
