package classes
{
    public class GlobalVars
    {
		import flash.ui.*;
		import flash.events.*;
		
        public static var vars:Object = {};
		
		public static var scorePlayer1=0, scorePlayer2=0, scorePlayer3=0, scorePlayer4=0;
		
		public static function buttonCursor(e:MouseEvent)
		{
			Mouse.cursor = 'button';
		}
		
		public static function arrowCursor(e:MouseEvent)
		{
			Mouse.cursor = MouseCursor.ARROW;
		}
		//public static function matchLayer_getListOnline(){};
    }
}