using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace Hoan_Xich_Huong.Tables
{
    public partial class Table2 : UserControl
    {
        public Table2()
        {
            InitializeComponent();
        }

        private void UserControl_Loaded(object sender, RoutedEventArgs e)
        {
            animation1.Begin();
			
			main_textblock.Text="Ngày uống 2 lần, mỗi lần 1 gói 12,5g.\nUống trước hoặc sau bữa ăn.\nCó thể ngâm vào nước để viên mềm ra uống cho dễ.\nMỗi đợt điều trị từ 3 - 4 tuần.\nKhông gây độc hại.\nCó thể dùng phối hợp với các thuốc Đông - Tây y";
        }
    }
}
