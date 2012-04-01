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
                stream.Close();
                stream.Dispose();
                String str = ASCIIEncoding.ASCII.GetString(buffer);
               
                TabPage newpage = new TabPage();
                newpage.Text = info.Name;
                newpage.Name = info.FullName;
                NumberedTextBoxUC newrtb = new NumberedTextBoxUC();
                newrtb.Dock = DockStyle.Fill;
                newrtb.getRichTextBox().Text = str;
                newrtb.MakeColorSyntaxForAllText(newrtb.getRichTextBox().Text);
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
            int tabcount = tabcontrol.TabCount;
            TabPage newpage = new TabPage();
            newpage.Text = "New File " + (tabcount + 1).ToString();
            newpage.Name = "@new";

            NumberedTextBoxUC newrtb = new NumberedTextBoxUC();
            newrtb.Dock = DockStyle.Fill;
            newpage.Controls.Add(newrtb);

            tabcontrol.TabPages.Add(newpage);
            tabcontrol.SelectedTab = newpage;
          }

        public static void CopyText(TabControl tabcontrol)
        {
            String selected = "";
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (NumberedTextBoxUC rtb in currenttab.Controls)
            {
                selected = rtb.getRichTextBox().SelectedText;
            }

            Clipboard.SetText(selected);                    
        }

        public static void PasteText(TabControl tabcontrol)
        {
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (NumberedTextBoxUC rtb in currenttab.Controls)
            {
                rtb.getRichTextBox().Text += Clipboard.GetText();                 
            }
            
        }

        public static void CutText(TabControl tabcontrol)
        {
            TabPage currenttab = tabcontrol.SelectedTab;
            foreach (NumberedTextBoxUC rtb in currenttab.Controls)
            {
                rtb.getRichTextBox().Cut();
            }
        }

        public static void SaveFile(TabControl tabcontrol)
        {
            foreach (TabPage page in tabcontrol.TabPages)
            {
                if (tabcontrol.SelectedTab == page)
                {
                    if (page.Name.Equals("@new"))
                    {
                        SaveFileDialog saveFile = new SaveFileDialog();
                        saveFile.Filter = @"Minipas File|*.pas|All Files (*.*)|*.*";
                        if (saveFile.ShowDialog() == DialogResult.OK)
                        {
                            page.Name = saveFile.FileName;
                            string[] temp = saveFile.FileName.Split('\\');
                            page.Text = temp[temp.Length - 1];
                        }
                    }
                    NumberedTextBoxUC newrtb = (NumberedTextBoxUC)page.Controls[0];
                    System.IO.StreamWriter file = new System.IO.StreamWriter(page.Name);
                    file.Flush(); 
                    file.Write(newrtb.getRichTextBox().Text);
                    file.Close();
                    file.Dispose();
                    System.Threading.Thread.Sleep(500);
                    MessageBox.Show("Save Done!");
                }
            }
        }

        public static void SaveAsFile(TabControl tabcontrol)
        {
            foreach (TabPage page in tabcontrol.TabPages)
            {
                if (tabcontrol.SelectedTab == page)
                {
                    SaveFileDialog saveFile = new SaveFileDialog();
                    saveFile.Filter = @"Minipas File|*.pas|All Files (*.*)|*.*";
                    if (saveFile.ShowDialog() == DialogResult.OK)
                    {
                            page.Name = saveFile.FileName;
                            string[] temp = saveFile.FileName.Split('\\');
                            page.Text = temp[temp.Length - 1];
                    }
                    NumberedTextBoxUC newrtb = (NumberedTextBoxUC)page.Controls[0];
                    System.IO.StreamWriter file = new System.IO.StreamWriter(page.Name);
                    file.Flush();
                    file.Write(newrtb.getRichTextBox().Text);
                    file.Close();
                    file.Dispose();
                    System.Threading.Thread.Sleep(500);
                    MessageBox.Show("Save Done!");
                }
            }
        }
    }
}
