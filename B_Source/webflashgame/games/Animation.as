class Animation {
	public function Animation(){}

	//===== function to move a MovieClip object to new position =====
	public function _move(card:MovieClip, newX, newY, step, delay)
	{		
		function setStep()
		{
			if (card._x != newX || card._y != newY)
			{				
				if (card._x > newX)
					if (card._x - newX > step)
						card._x -= step;
					else card._x -= card._x - newX;
				else if (card._x < newX) 
					if (newX - card._x > step)
						card._x += step;
					else card._x += newX - card._x;
					
				if (card._y > newY)
					if (card._y - newY > step)
						card._y -= step;
					else card._y -= card._y - newY
				else if (card._y < newY) 
					if (newY - card._y > step)
						card._y += step;
					else card._y += newY - card._y;
			}
			else clearInterval(moveanimation);
		}
		
		
		var moveanimation = setInterval(setStep, delay);
	}
}