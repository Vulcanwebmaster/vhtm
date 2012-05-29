using System;
using System.IO;
using System.Collections.Generic;
using System.ComponentModel;
using System.Drawing;
using System.Drawing.Drawing2D;
using System.Drawing.Text;
using System.Data;
using System.Text;
using System.Windows.Forms;
using System.Text.RegularExpressions;

namespace VietPas
{
    struct WordAndPosition
    {
        public string Word;
        public int Position;
        public int Length;
        public override string ToString()
        {
            string s = "Word = " + Word + ", Position = " + Position + ", Length = " + Length + "\n";
            return s;
        }
    };

    public partial class NumberedTextBoxUC : UserControl
    {
        public int type_undo = 0;
        WordAndPosition[] TheBuffer = new WordAndPosition[10000];
        private Color kCommentColor = Color.Green;
        SyntaxReader TheSyntaxReader = new SyntaxReader(BasicCommand.curDirectory + "\\minipas.syntax");
        
        public NumberedTextBoxUC()
        {
            InitializeComponent();
            numberLabel.Font = new Font(richTextBox.Font.FontFamily, richTextBox.Font.Size);
        }

        private int ParseLine(string s)
        {
            TheBuffer.Initialize();
            int count = 0;
            Regex r = new Regex(@"\w+|[^A-Za-z0-9_ \f\t\v]", RegexOptions.IgnoreCase | RegexOptions.Compiled);
            Match m;
            for (m = r.Match(s); m.Success; m = m.NextMatch())
            {
                TheBuffer[count].Word = m.Value;
                TheBuffer[count].Position = m.Index;
                TheBuffer[count].Length = m.Length;
                count++;
            }
            return count;
        }

        public void MakeColorSyntaxForCurrentLine()
        {
            int CurrentSelectionStart = richTextBox.SelectionStart;
            int CurrentSelectionLength = richTextBox.SelectionLength;

            // find start of line
            int pos = CurrentSelectionStart;
            while ((pos > 0) && (richTextBox.Text[pos - 1] != '\n'))
                pos--;

            int pos2 = CurrentSelectionStart;
            while ((pos2 < richTextBox.Text.Length) &&
                    (richTextBox.Text[pos2] != '\n'))
                pos2++;

            string s = richTextBox.Text.Substring(pos, pos2 - pos);
            if (TestComment(s) == true)
            {
                richTextBox.Select(pos, pos2 - pos);
                richTextBox.SelectionColor = kCommentColor;
            }
            else
            {
                string previousWord = "";
                int count = ParseLine(s);
                for (int i = 0; i < count; i++)
                {
                    WordAndPosition wp = TheBuffer[i];

                    // check for comment
                    if (wp.Word == "/" && previousWord == "/")
                    {
                        // color until end of line
                        int posCommentStart = wp.Position - 1;
                        int posCommentEnd = pos2;
                        while (wp.Word != "\n" && i < count)
                        {
                            wp = TheBuffer[i];
                            i++;
                        }
                        i--;
                        posCommentEnd = pos2;
                        richTextBox.Select(posCommentStart + pos, posCommentEnd - (posCommentStart + pos));
                        richTextBox.SelectionColor = this.kCommentColor;
                    }
                    else
                    {
                        Color c = Lookup(wp.Word);
                        richTextBox.Select(wp.Position + pos, wp.Length);
                        richTextBox.SelectionColor = c;
                    }
                    previousWord = wp.Word;
                }
            }

            if (CurrentSelectionStart >= 0)
                richTextBox.Select(CurrentSelectionStart, CurrentSelectionLength);
        }

        private bool TestComment(string s)
        {
            string testString = s.Trim();
            if ((testString.Length >= 2) &&
                 (testString[0] == '/') &&
                 (testString[1] == '/')
                )
                return true;

            return false;
        }

        public void MakeColorSyntaxForAllText(string s)
        {
            int CurrentSelectionStart = richTextBox.SelectionStart;
            int CurrentSelectionLength = richTextBox.SelectionLength;

            int count = ParseLine(s);
            string previousWord = "";
            for (int i = 0; i < count; i++)
            {
                WordAndPosition wp = TheBuffer[i];

                // check for comment
                if (wp.Word == "/" && previousWord == "/")
                {
                    // color until end of line
                    int posCommentStart = wp.Position - 1;
                    int posCommentEnd = i;
                    while (wp.Word != "\n" && i < count)
                    {
                        wp = TheBuffer[i];
                        i++;
                    }

                    i--;
                    posCommentEnd = wp.Position;
                    richTextBox.Select(posCommentStart, posCommentEnd - posCommentStart);
                    richTextBox.SelectionColor = this.kCommentColor;
                }
                else
                {
                    Color c = Lookup(wp.Word);
                    richTextBox.Select(wp.Position, wp.Length);
                    richTextBox.SelectionColor = c;
                }

                previousWord = wp.Word;
            }

            if (CurrentSelectionStart >= 0)
                richTextBox.Select(CurrentSelectionStart, CurrentSelectionLength);
        }

        private Color Lookup(string s)
        {
            Color theColor = Color.Black;

            if (TheSyntaxReader.IsFunction(s))
            {
                theColor = Color.DarkRed;
            }

            if (TheSyntaxReader.IsKeyword(s))
            {
                theColor = Color.Blue;
            }
            return theColor;
        }

        private void updateNumberLabel()
        {
            //we get index of first visible char and number of first visible line
            Point pos = new Point(0, 0);
            int firstIndex = richTextBox.GetCharIndexFromPosition(pos);
            int firstLine = richTextBox.GetLineFromCharIndex(firstIndex) + 1;

            //now we get index of last visible char and number of last visible line
            pos.X = ClientRectangle.Width;
            pos.Y = ClientRectangle.Height;
            int lastIndex = richTextBox.GetCharIndexFromPosition(pos);
            int lastLine = richTextBox.GetLineFromCharIndex(lastIndex);

            //this is point position of last visible char, we'll use its Y value for calculating numberLabel size
            pos = richTextBox.GetPositionFromCharIndex(lastIndex);

           
            //finally, renumber label
            numberLabel.Text = "";
            for (int i = firstLine; i <= lastLine + 1; i++)
            {
                numberLabel.Text += i.ToString() + "\n";
            }
        }


        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {
            updateNumberLabel();
            MakeColorSyntaxForCurrentLine();
        }

        private void richTextBox1_VScroll(object sender, EventArgs e)
        {
            //move location of numberLabel for amount of pixels caused by scrollbar
            int d = richTextBox.GetPositionFromCharIndex(0).Y % (richTextBox.Font.Height + 1);
            numberLabel.Location = new Point(0, d);

            updateNumberLabel();
        }

        private void richTextBox1_Resize(object sender, EventArgs e)
        {
            richTextBox1_VScroll(null, null);
        }

        private void richTextBox1_FontChanged(object sender, EventArgs e)
        {
            updateNumberLabel();
            richTextBox1_VScroll(null, null);
        }

        public RichTextBox getRichTextBox()
        {
            return richTextBox;
        }

        public string previous = "";
        private int key = 0;
        
        private void richTextBox_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.Back || e.KeyCode == Keys.Delete)
            {
                if (key == 0)
                {
                    previous = richTextBox.Text;
                }
                key = 1;
                type_undo = 2;
                return;
            }
            key = 0;
        }
    }
}
