using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;


namespace Hoan_Xich_Huong
{
    public class xu_ly_giao_dien
    {
        public static void MouseEnter_textblock(TextBlock tb)
        {
            DoubleAnimation anm = new DoubleAnimation();
            anm.From = 0;
            anm.To = 2;

            ScaleTransform scale = new ScaleTransform();
            tb.RenderTransform = scale;

            
        }
    }
}
