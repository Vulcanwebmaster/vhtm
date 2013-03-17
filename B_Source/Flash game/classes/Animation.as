package classes
{
	import flash.display.MovieClip;
	import flash.utils.*;
	import flash.events.*;
	import flash.net.*;
	public class Animation {
		var rcard:MovieClip;
		var rY, rfirstX, rturn, rcenterX, rcenterY, ranimationSpeed, rdelay, rServer, rcardIdList, ravaiable, rplayedList, rcardList;
		var rroom_id, raccount_id;
		public function Animation(){}
	
		//===== function to move a MovieClip object to new position =====
		public function _move(card:MovieClip, newX, newY, step, delay, hideAtEnd)
		{		
			function setStep()
			{
				if (card.x != newX || card.y != newY)
				{				
					if (card.x > newX)
						if (card.x - newX > step)
							card.x -= step;
						else card.x -= card.x - newX;
					else if (card.x < newX) 
						if (newX - card.x > step)
							card.x += step;
						else card.x += newX - card.x;
						
					if (card.y > newY)
						if (card.y - newY > step)
							card.y -= step;
						else card.y -= card.y - newY
					else if (card.y < newY) 
						if (newY - card.y > step)
							card.y += step;
						else card.y += newY - card.y;
				}
				else 
				{
					if (hideAtEnd == 1)
					{
						card.visible = false;
					}
					clearInterval(moveanimation);
					
				}
			}
			var moveanimation = setInterval(setStep, delay);
		}
	
		//===== create motion for a MovieClip ======
		public function _motion(card:MovieClip, Y, firstX, turn, centerX, centerY, animationSpeed, delay, Server, cardIdList, cardList, room_id, account_id, avaiable, playedList)
		{
			rcard		= card;
			rY			= Y;
			rfirstX		= firstX;
			rturn		= turn;
			rcenterX	= centerX;
			rcenterY	= centerY;
			ranimationSpeed = animationSpeed;
			rdelay		= delay;
			rServer		= Server;
			rcardIdList	= cardIdList;
			rcardList	= cardList;
			rroom_id	= room_id;
			raccount_id	= account_id;
			ravaiable	= avaiable;
			rplayedList	= playedList;						
			
			if (ravaiable == "1")
			{
				rcard.addEventListener(MouseEvent.CLICK, motionPress);
				rcard.removeEventListener(MouseEvent.MOUSE_OVER, motionOver);			
				rcard.removeEventListener(MouseEvent.MOUSE_OUT, motionOut);
			}
			else 
			{
				/*rcard.addEventListener(MouseEvent.MOUSE_OVER, motionOver);			
				rcard.addEventListener(MouseEvent.MOUSE_OUT, motionOut);
				rcard.addEventListener(MouseEvent.CLICK, function(e:Event)
				{
				});*/
			}						
		}
		
		public function _removeMotion(card:MovieClip)
		{
			card.addEventListener(MouseEvent.MOUSE_OVER, function(e:MouseEvent){});
			card.addEventListener(MouseEvent.MOUSE_OUT, function(e:MouseEvent){});
			card.addEventListener(MouseEvent.CLICK, function(e:MouseEvent){});
		}
		
		public function motionOver(e:MouseEvent)
		{
			if (rcard.y == rY)
				rcard.y = rY-30;
		}
		
		public function motionOut(e:MouseEvent)
		{
			if (rcard.y == rY-30)
				rcard.y = rY;
		}
		
		function getIndex()
		{
			
			if (rcard.name == "mot") return 1;
			else if (rcard.name == "hai") return 2;
			else if (rcard.name == "ba") return 3;
			else if (rcard.name == "bon") return 4;
			else if (rcard.name == "nam") return 5;
			else if (rcard.name == "sau") return 6;
			else if (rcard.name == "bay") return 7;
			else if (rcard.name == "tam") return 8;
			else if (rcard.name == "chin") return 9;
			else if (rcard.name == "muoi") return 10;
			else if (rcard.name == "muoimot") return 11;
			else if (rcard.name == "muoihai") return 12;
			else if (rcard.name == "muoiba") return 13;
			else if (rcard.name == "muoibon") return 14;
			else if (rcard.name == "muoinam") return 15;
			else if (rcard.name == "muoisau") return 16;
			else if (rcard.name == "muoibay") return 17;
			else if (rcard.name == "muoitam") return 18;
			else if (rcard.name == "muoichin") return 19;
			else if (rcard.name == "haimuoi") return 20;
			else if (rcard.name == "haimot") return 21;
			else if (rcard.name == "haihai") return 22;
			else if (rcard.name == "haiba") return 23;
			else if (rcard.name == "haitu") return 24;
			else if (rcard.name == "hainam") return 25;
			else if (rcard.name == "haisau") return 26;
			else if (rcard.name == "haibay") return 27;
			else if (rcard.name == "haitam") return 28;
			else if (rcard.name == "haichin") return 29;
			else if (rcard.name == "bamuoi") return 30;
			else if (rcard.name == "bamot") return 31;
			else if (rcard.name == "bahai") return 32;
			else return 0;
		}

		public function motionPress(e:MouseEvent)
		{
			if (GlobalVars.vars.turn == 1)
			{
				rcard.removeEventListener(MouseEvent.MOUSE_OVER, motionOver);
				rcard.removeEventListener(MouseEvent.MOUSE_OUT, motionOut);
				
				var deltaX, deltaY;
				if (rturn == 1)
				{
					deltaX = 0;
					deltaY = 60;
				}
				else if (rturn == 2)
				{
					deltaX = 70;
					deltaY = 0;
				}
				else if (rturn == 3)
				{
					deltaX = 0;
					deltaY = -60;
				}
				else if (rturn == 4)
				{
					deltaX = -70;
					deltaY = 0;
				}
				
				//var changeTurn = Player.changeForeHandPlayer(loader, _global.Server);
				//remove card id and card from list
				
				// trace("Index: " + index);
				// submit a playing to server			
				var urlLoaderPlaying:URLLoader = new URLLoader();
				var urlRequest:URLRequest = new URLRequest(rServer+"api/updatePlaying");
				var urlData:URLVariables = new URLVariables();
				
				urlData.room_id = rroom_id;
				urlData.account_id = raccount_id;
				var idIndex = getIndex();
				trace("Index: " + idIndex);
				urlData.card_id = idIndex;
				urlRequest.data = urlData;
				urlRequest.method = URLRequestMethod.POST;
				
				var index = rcardIdList.indexOf(rcard);
				rcardIdList.splice(index,1);
				index = rcardList.indexOf(rcard);
				rcardList.splice(index,1);
				_move(rcard, rcenterX + deltaX, rcenterY + deltaY, 20, rdelay, 0);
				
				//urlLoaderPlaying.dataFormat = URLLoaderDataFormat.VARIABLES;
				urlLoaderPlaying.load(urlRequest);
				GlobalVars.vars.turn = 2;
			}
		}
	}
}