using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.IO;

namespace VietPas
{
    class BasicCommand
    {
        public static void NewFile(RichTextBox rtb)
        {
            rtb.Clear();
        }

        public static void OpenFile(TabControl tab)
        {
            OpenFileDialog dialog = new OpenFileDialog();
            dialog.Filter = @"VC File|*.vc";
            if (dialog.ShowDialog() == DialogResult.OK)
            {
                FileInfo info = new FileInfo(dialog.FileName);
                byte[] buffer = new byte[info.Length];

                FileStream stream = new FileStream(dialog.FileName, FileMode.Open, FileAccess.ReadWrite);
                stream.Read(buffer, 0, (int)info.Length);
                String str = ASCIIEncoding.ASCII.GetString(buffer);

                TabPage newpage = new TabPage();
                newpage.Text = info.Name;

                RichTextBox newrtb = new RichTextBox();
                newrtb.Dock = DockStyle.Fill;
                newrtb.WordWrap = false;
                newrtb.Text = str;
                newpage.Controls.Add(newrtb);

                tab.TabPages.Add(newpage);
                tab.SelectedTab = newpage;
            }
        }

        public static void CloseTab(TabControl tabcontrol)
        {
            foreach (TabPage page in tabcontrol.TabPages)
            {
                if (tabcontrol.SelectedTab==page)
                {
                    tabcontrol.TabPages.Remove(page);                    
                }
            }
        }

        public static void CloseAllButThisTab(TabControl tabcontrol)
        {
            foreach (TabPage page in tabcontrol.TabPages)
            {
                if (tabcontrol.SelectedTab != page)
                {
                    tabcontrol.TabPages.Remove(page);
                }
            }
        }

        public static void NewFile(TabControl tabcontrol)
        {
            int sotab = tabcontrol.TabCount;
            //MessageBox.Show(sotab.ToString());
            int i=0;
            for (i = 0; i < sotab; )
            {
                int dem = 0;
                foreach (TabPage page in tabcontrol.TabPages)
                {
                    if (page.Text == "New File" + i.ToString())
                    {
                        dem++;
                    }
                }
                if (dem == 0)
                    break;
                else i++;
            }

            //if (i < sotab)
            {
                TabPage newpage = new TabPage();
                newpage.Text = "New File" + i.ToString();

                RichTextBox newrtb = new RichTextBox();
                newrtb.Dock = DockStyle.Fill;
                newrtb.WordWrap = false;                
                newpage.Controls.Add(newrtb);

                tabcontrol.TabPages.Add(newpage);
                tabcontrol.SelectedTab = newpage;
            }
        }

        public static void CopyText(TabControl tabcontrol)
        {
            String selected = "";
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (RichTextBox rtb in currenttab.Controls)
            {
                selected = rtb.SelectedText;
            }

            Clipboard.SetText(selected);                    
        }

        public static void PasteText(TabControl tabcontrol)
        {
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (RichTextBox rtb in currenttab.Controls)
            {
                rtb.Text += Clipboard.GetText();                 
            }
            
        }

        public static void CutText(TabControl tabcontrol)
        {
            String selected = "";
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (RichTextBox rtb in currenttab.Controls)
            {
                rtb.Cut();
            }
        }
    }
}
