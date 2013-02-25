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
					clearInterval(moveanimation);
					if (hideAtEnd == 1)
					{
						card.visible = false;
					}
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
			
			if (ravaiable == '1')
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
				
				_move(rcard, rcenterX + deltaX, rcenterY + deltaY, ranimationSpeed, rdelay, 0);
				//var changeTurn = Player.changeForeHandPlayer(loader, _global.Server);
				//remove card id and card from list
				var index = rcardIdList.indexOf(rcard);
				rcardIdList.splice(index,1);
				rcardList.splice(index,1);
				
				// submit a playing to server			
				var urlLoaderPlaying:URLLoader = new URLLoader();
				var urlRequest:URLRequest = new URLRequest(rServer+"api/updatePlaying");
				var urlData:URLVariables = new URLVariables();
				
				urlData.room_id = rroom_id;
				urlData.account_id = raccount_id;
				var idIndex = (rcard.x - rfirstX)/30 -1;
				urlData.card_id = rcardIdList[idIndex];
				urlRequest.data = urlData;
				urlRequest.method = URLRequestMethod.POST;
				
				//urlLoaderPlaying.dataFormat = URLLoaderDataFormat.VARIABLES;
				urlLoaderPlaying.load(urlRequest);
			}
		}
	}
}