using System;
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
	public partial class banner1 : UserControl
	{
		public banner1()
		{
			// Required to initialize variables
			InitializeComponent();
		}

        private void Image_Loaded(object sender, RoutedEventArgs e)
        {
            storyboard_image.Begin();
        }
	}
}