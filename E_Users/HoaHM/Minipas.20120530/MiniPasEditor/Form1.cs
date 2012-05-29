using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Diagnostics;
using System.Runtime.InteropServices;
using System.Threading;


namespace VietPas
{
    public partial class Form1 : Form
    {
        [DllImport("user32.dll", SetLastError = true)]
        internal static extern bool MoveWindow(IntPtr hWnd, int X, int Y, int nWidth, int nHeight, bool bRepaint);

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
            string filename = BasicCommand.GetCurrentFileName(editor);
            if (filename.Equals("@new"))
            {
                BasicCommand.SaveFile(editor);
                filename = BasicCommand.GetCurrentFileName(editor);
            }
            if (!filename.Equals("@new"))
            {
                Process p = new Process();
                p.StartInfo.FileName = BasicCommand.curDirectory + "/minipas.exe";
                p.StartInfo.Arguments = "\"" + filename + "\""; 
                p.StartInfo.UseShellExecute = false;
                System.IO.StreamWriter file = new System.IO.StreamWriter("temp.tm");
                file.Flush();
                file.Close();
                file.Dispose();
                p.EnableRaisingEvents = true;
                p.Exited += new System.EventHandler(this.exit);
                p.Start();
            }
        }

        private void exit(object sender, EventArgs e)
        {
            System.IO.StreamReader file_read = new System.IO.StreamReader("temp.tm");
            string content = file_read.ReadLine();
            if (content != null)
            {
                MessageBox.Show(content.ToString());
            }
            file_read.Close();
            file_read.Dispose();
            System.IO.File.Delete("temp.tm");
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

        private void undoToolStripMenuItem_Click(object sender, EventArgs e)
        {
            BasicCommand.Undo(editor);
        }
    }
}
