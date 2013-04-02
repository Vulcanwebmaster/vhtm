class Player
{
	public function Player(){}	
	
	public function getHandSuitPlayer(turn, listXML:XML):String
	{
		var rootNode:XMLNode = listXML.firstChild;
		var currentHandSuit:XML = rootNode.childNodes[turn-1];
		var username = currentHandSuit.childNodes[2].firstChild.nodeValue;
		return username;
	}
	
	public function setHandSuitPlayer(player1:TextField, player2:TextField, player3:TextField, player4:TextField, handSuitName)
	{
		if (handSuitName == player1.text)
			return 1;
		else if (handSuitName == player2.text)
			return 2;
		else if (handSuitName == player3.text)
			return 3;
		else if (handSuitName == player4.text)
			return 4;
	}
	
	public function changeForeHandPlayer(loader:LoadVars, server)
	{
		var a:XML = new XML();
		a.onLoad = function(){
//			trace(a);
		}
		trace(loader.room_id);
		loader.sendAndLoad(server+"api/changeForeHand", a, "POST");		
	}
}