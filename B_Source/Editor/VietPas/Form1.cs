using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Diagnostics;

namespace VietPas
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void openToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.OpenFile(editer);
        }

        private void openToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.OpenFile(editer);
        }

        private void closeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CloseTab(editer);
        }

        private void closeAllButThisToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CloseAllButThisTab(editer);
        }

        private void exitToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void newToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.NewFile(editer);
        }

        private void newToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.NewFile(editer);
        }

        private void copyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CopyText(editer);
        }

        private void copyToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.CopyText(editer);
        }

        private void pasteToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.PasteText(editer);
        }

        private void pasteToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.PasteText(editer);
        }

        private void cutToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.CutText(editer);
        }

        private void cutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CutText(editer);
        }

        private void hiệnToolStripMenuItem_Click(object sender, EventArgs e)
        {
            //panel_left.Hide();
        }

        private void panel_left_VisibleChanged(object sender, EventArgs e)
        {
            /*if (panel_left.Visible == true)
            {
                panel_right.Dock = DockStyle.None;
            }
            else
                panel_right.Dock = DockStyle.Fill;*/
        }

        private void toolStripButton1_Click(object sender, EventArgs e)
        {
            Output frm = new Output();
            Process p = new Process();
            p.StartInfo.FileName = "minipas.exe";
            string filename = BasicCommand.GetCurrentFileName(editer);
            p.StartInfo.Arguments = filename;
            p.StartInfo.UseShellExecute = true;
            p.Start();
            p.WaitForExit();
        }

        private void aboutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AboutBox frm = new AboutBox();
            frm.ShowDialog();
        }

        private void saveToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }
    }
}
