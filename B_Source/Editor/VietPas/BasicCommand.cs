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
            dialog.Filter = @"Minipas File|*.pas|All Files (*.*)|*.*";
            if (dialog.ShowDialog() == DialogResult.OK)
            {
                FileInfo info = new FileInfo(dialog.FileName);
                byte[] buffer = new byte[info.Length];

                FileStream stream = new FileStream(dialog.FileName, FileMode.Open, FileAccess.ReadWrite);
                stream.Read(buffer, 0, (int)info.Length);
                String str = ASCIIEncoding.ASCII.GetString(buffer);

                TabPage newpage = new TabPage();
                newpage.Text = info.Name;
                newpage.Name = info.FullName;
                RichTextBox newrtb = new RichTextBox();
                newrtb.Dock = DockStyle.Fill;
                newrtb.Text = str;
                newrtb.WordWrap = true;
                newrtb.AcceptsTab = true;
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

        public static string GetCurrentFileName(TabControl tabcontrol)
        {
            foreach (TabPage page in tabcontrol.TabPages)
            {
                if (tabcontrol.SelectedTab == page)
                {
                    return page.Name;
                }
            }
            return "@new";
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

            {
                TabPage newpage = new TabPage();
                newpage.Text = "New File" + i.ToString();
                newpage.Name = "@new";

                RichTextBox newrtb = new RichTextBox();
                newrtb.Dock = DockStyle.Fill;
                newrtb.WordWrap = true;
                newrtb.AcceptsTab = true;
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
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (RichTextBox rtb in currenttab.Controls)
            {
                rtb.Cut();
            }
        }
    }
}
