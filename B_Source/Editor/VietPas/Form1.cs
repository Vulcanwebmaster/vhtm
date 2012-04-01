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
            BasicCommand.OpenFile(editor);
        }

        private void openToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.OpenFile(editor);
        }

        private void closeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CloseTab(editor);
        }

        private void closeAllButThisToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CloseAllButThisTab(editor);
        }

        private void exitToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void newToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.NewFile(editor);
        }

        private void newToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.NewFile(editor);
        }

        private void copyToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CopyText(editor);
        }

        private void copyToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.CopyText(editor);
        }

        private void pasteToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.PasteText(editor);
        }

        private void pasteToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.PasteText(editor);
        }

        private void cutToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.CutText(editor);
        }

        private void cutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.CutText(editor);
        }

        private void toolStripButton1_Click(object sender, EventArgs e)
        {
            Process p = new Process();
            p.StartInfo.FileName = "cmd.exe";
            string filename = BasicCommand.GetCurrentFileName(editor);
            if (filename.Equals("@new"))
            {
                BasicCommand.SaveFile(editor);
                filename = BasicCommand.GetCurrentFileName(editor);
            }
            if (!filename.Equals("@new"))
            {
                System.IO.StreamWriter file = new System.IO.StreamWriter("temp.bat");
                file.Flush();
                file.Write("minipas.exe " + "\"" + filename + "\"");
                file.Close();
                file.Dispose();
                p.StartInfo.Arguments = "/k temp.bat";
                p.StartInfo.UseShellExecute = true;
                p.Start();
                p.WaitForExit();
            }
        }

        private void aboutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AboutBox frm = new AboutBox();
            frm.ShowDialog();
        }

        private void saveToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.SaveFile(editor);
        }

        private void saveToolStripButton_Click(object sender, EventArgs e)
        {
            BasicCommand.SaveFile(editor);
        }

        private void saveAsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.SaveAsFile(editor);
        }
    }
}
