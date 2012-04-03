using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace FaceRecognition
{
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
            
        }

        private void dangnhap_button_Click(object sender, EventArgs e)
        {
            

            if (user.Text == "admin123" && pass.Text == "admin123")
            {
                Add_image frm = new Add_image();
                this.Hide();
                frm.ShowDialog();
                this.Close();
            }
            else
                MessageBox.Show("User name or password is incorrect. Try again!","Error",MessageBoxButtons.OK,MessageBoxIcon.Error);
        }

        private void Login_Load(object sender, EventArgs e)
        {
            this.AcceptButton = login_button;
            this.CancelButton = cancel_button;
        }
    }
}
