package classes
{
	public class LayerManager
	{
		public function LayerManager(){
		}
		
		public static function hiddenLayer(listSymbols:Array)
		{
			for (var i=0; i<listSymbols.length; i++)
			{
				listSymbols[i].visible = false;
			}
		}
		
		public static function showLayer(listSymbols:Array)
		{
			for (var i=0; i<listSymbols.length; i++)
			{
				listSymbols[i].visible = true;
			}
		}
	}
}