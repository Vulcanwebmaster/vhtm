namespace FaceRecognition
{
    partial class Information
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.name = new System.Windows.Forms.Label();
            this.abc = new System.Windows.Forms.Label();
            this.Position = new System.Windows.Forms.Label();
            this.time = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.OK_Button = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(54, 33);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(35, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "Name";
            // 
            // name
            // 
            this.name.AutoSize = true;
            this.name.Location = new System.Drawing.Point(115, 33);
            this.name.Name = "name";
            this.name.Size = new System.Drawing.Size(16, 13);
            this.name.TabIndex = 0;
            this.name.Text = "...";
            // 
            // abc
            // 
            this.abc.AutoSize = true;
            this.abc.Location = new System.Drawing.Point(54, 69);
            this.abc.Name = "abc";
            this.abc.Size = new System.Drawing.Size(44, 13);
            this.abc.TabIndex = 0;
            this.abc.Text = "Position";
            // 
            // Position
            // 
            this.Position.AutoSize = true;
            this.Position.Location = new System.Drawing.Point(115, 69);
            this.Position.Name = "Position";
            this.Position.Size = new System.Drawing.Size(16, 13);
            this.Position.TabIndex = 0;
            this.Position.Text = "...";
            // 
            // time
            // 
            this.time.AutoSize = true;
            this.time.Location = new System.Drawing.Point(54, 108);
            this.time.Name = "time";
            this.time.Size = new System.Drawing.Size(30, 13);
            this.time.TabIndex = 0;
            this.time.Text = "Time";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(115, 108);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(16, 13);
            this.label3.TabIndex = 0;
            this.label3.Text = "...";
            // 
            // OK_Button
            // 
            this.OK_Button.Location = new System.Drawing.Point(57, 152);
            this.OK_Button.Name = "OK_Button";
            this.OK_Button.Size = new System.Drawing.Size(75, 23);
            this.OK_Button.TabIndex = 1;
            this.OK_Button.Text = "OK";
            this.OK_Button.UseVisualStyleBackColor = true;
            this.OK_Button.Click += new System.EventHandler(this.OK_Button_Click);
            // 
            // Information
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(208, 187);
            this.Controls.Add(this.OK_Button);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.Position);
            this.Controls.Add(this.name);
            this.Controls.Add(this.time);
            this.Controls.Add(this.abc);
            this.Controls.Add(this.label1);
            this.Name = "Information";
            this.Text = "Information";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label name;
        private System.Windows.Forms.Label abc;
        private System.Windows.Forms.Label Position;
        private System.Windows.Forms.Label time;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button OK_Button;
    }
}