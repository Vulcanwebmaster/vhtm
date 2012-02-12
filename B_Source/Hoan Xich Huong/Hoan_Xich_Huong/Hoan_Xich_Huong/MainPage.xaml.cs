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
using System.Windows.Threading;

namespace Hoan_Xich_Huong
{
    public partial class MainPage : UserControl
    {
        SolidColorBrush move_enter_color = new SolidColorBrush(Colors.Red);
        SolidColorBrush move_leave_color = new SolidColorBrush(Colors.White);
        DispatcherTimer timer1 = new DispatcherTimer();

        public MainPage()
        {
            InitializeComponent();
        }

        void mo_cac_title_khac(String namecontrol)
        {
            foreach(Label lb in menu_bar.Children)
            {
                if (lb.Name != namecontrol)
                {
                    lb.Opacity = 0.2;
                }
            }
        }

        void reset_menu_bar()
        {
            foreach (Label lb in menu_bar.Children)
            {
                lb.Opacity = 1;
            }
        }

        private void trangchu_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_1.Begin();

        }

        private void trangchu_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_1.Begin();            
        }

        private void hoanxichhuong_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_2.Begin();
        }

        private void hoanxichhuong_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_2.Begin();
        }

        private void tietnieu_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_4.Begin();
        }

        private void tietnieu_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_4.Begin();
        }

        /*private void tintuc_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_4.Begin();
        }

        private void tintuc_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_4.Begin();
        }*/

        private void hoidap_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_3.Begin();
        }

        private void hoidap_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_3.Begin();
        }

        private void video_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_5.Begin();
        }

        private void video_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_5.Begin();            
        }

        private void lienhe_MouseLeave(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_6.Begin();
        }

        private void lienhe_MouseEnter(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_6.Begin();
        }

        private void lienhe_MouseEnter_1(object sender, MouseEventArgs e)
        {
            menu_mouse_enter_7.Begin();
        }

        private void lienhe_MouseLeave_1(object sender, MouseEventArgs e)
        {
            menu_mouse_leave_7.Begin();
        }

        private void Grid_Loaded(object sender, RoutedEventArgs e)
        {
            banner1 newban=new banner1();
            viewer.Children.Clear();
            viewer.Children.Add(newban);
						
			under_textblock.Text="Công ty CP Dược Hà Tĩnh (Hadiphar), 167 Hà Huy Tập - Tp Hà Tĩnh; ĐT: 0393 855 906.\nChi nhánh Hà Nội: Số 3/ 122 Đường Láng - Đống Đa - Hà Nội, ĐT: 04 3 853 4872\nChi nhánh Tp HCM: 68/118 Đống Nai - P15 - Q10- Tp HCM :\n ĐT: 08.39700290\nFax: 08. 62646080";
        }

        /*private void Grid_Loaded_1(object sender, RoutedEventArgs e)
        {

            
            timer1.Interval = new TimeSpan(0,0,5);
            timer1.Tick+=new EventHandler(timer1_Tick);
            timer1.Start();
        }

        int table_index = 1;

        void timer1_Tick(object sender,EventArgs e)
        {
            if (table_index == 1)
            {
                Tables.Table1 frm = new Hoan_Xich_Huong.Tables.Table1();
                mainviewer.Children.Clear();
                mainviewer.Children.Add(frm);
                table_index++;
            }
            else if (table_index == 2)
            {
                Tables.Table2 frm = new Hoan_Xich_Huong.Tables.Table2();
                mainviewer.Children.Clear();
                mainviewer.Children.Add(frm);
                table_index++;
            }
            else if (table_index == 3)
            {
                Tables.Table3 frm = new Hoan_Xich_Huong.Tables.Table3();
                mainviewer.Children.Clear();
                mainviewer.Children.Add(frm);
                table_index++;
            }
            else if (table_index == 4)
            {
                Tables.Table4 frm = new Hoan_Xich_Huong.Tables.Table4();
                mainviewer.Children.Clear();
                mainviewer.Children.Add(frm);
                table_index=1;
            }
        }
        */
        private void Grid_Loaded_2(object sender, RoutedEventArgs e)
        {
            move_light.Begin();
        }

//====================== nút panel trái: =======================================
        /*private void Border_MouseEnter(object sender, MouseEventArgs e)
        {
            button_mouse_enter_1.Begin();
        }

        private void Border_MouseLeave(object sender, MouseEventArgs e)
        {
            button_mouse_leave_1.Begin();
        }

        private void button1_MouseLeftButtonDown(object sender, MouseButtonEventArgs e)
        {
            button_mouse_down_1.Begin();
        }

        private void button1_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            button_mouse_up_1.Begin();
            timer1.Stop();
            Tables.Table1 frm = new Hoan_Xich_Huong.Tables.Table1();
            mainviewer.Children.Clear();
            mainviewer.Children.Add(frm);
        }

        private void button2_MouseEnter(object sender, MouseEventArgs e)
        {
            button_mouse_enter_2.Begin();
        }

        private void button2_MouseLeave(object sender, MouseEventArgs e)
        {
            button_mouse_leave_2.Begin();
        }

        private void button2_MouseLeftButtonDown(object sender, MouseButtonEventArgs e)
        {
            button_mouse_down_2.Begin();
        }

        private void button2_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            button_mouse_up_2.Begin();
            timer1.Stop();
            Tables.Table2 frm = new Hoan_Xich_Huong.Tables.Table2();
            mainviewer.Children.Clear();
            mainviewer.Children.Add(frm);
        }

        private void button3_MouseEnter(object sender, MouseEventArgs e)
        {
            button_mouse_enter_3.Begin();
        }

        private void button3_MouseLeave(object sender, MouseEventArgs e)
        {
            button_mouse_leave_3.Begin();
        }

        private void button3_MouseLeftButtonDown(object sender, MouseButtonEventArgs e)
        {
            button_mouse_down_3.Begin();
        }

        private void button3_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            button_mouse_up_3.Begin();
            timer1.Stop();
            Tables.Table3 frm = new Hoan_Xich_Huong.Tables.Table3();
            mainviewer.Children.Clear();
            mainviewer.Children.Add(frm);
        }



        private void button4_MouseEnter(object sender, MouseEventArgs e)
        {
            button_mouse_enter_4.Begin();
        }

        private void button4_MouseLeave(object sender, MouseEventArgs e)
        {
            button_mouse_leave_4.Begin();
        }

        private void button4_MouseLeftButtonDown(object sender, MouseButtonEventArgs e)
        {
            button_mouse_down_4.Begin();
        }

        private void button4_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            button_mouse_up_4.Begin();
            timer1.Stop();
            Tables.Table4 frm = new Hoan_Xich_Huong.Tables.Table4();
            mainviewer.Children.Clear();
            mainviewer.Children.Add(frm);
        }*/
    }
}
