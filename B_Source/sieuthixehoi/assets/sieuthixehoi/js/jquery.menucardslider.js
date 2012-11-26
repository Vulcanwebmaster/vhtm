
	jQuery(document).ready(function($){
		
		window.cardcontainer = $('#card-container');
		window.cardnext = $('#card-next');
		window.cardprev = $('#card-prev');
		
		if(!location.hash) {
			window.activepage = cardcontainer.attr('activepage');
		} else {

			window.activepage = location.hash.substring(6);
		}
		
		cardcontainer.animate({
			height: $('#cardpageid-' + window.activepage).height() + 40
		}, 0 );

		var marginLeft = ((window.activepage-1)*956)*-1;
		$('#card-slider').css("left",marginLeft);
		window.totalPages = $('.card-page').size();

		window.blockAnimation = false;
		$('#card-next, #card-prev').click(function(){
			
			var page=location.hash;
		
			if(!location.hash) {
				var i=1;
			} else {
				var i = page.substring(6); 
			}

			direction = $(this).attr('id')
			
			if ( direction == 'card-next' ) {
				if (window.activepage != window.totalPages) {
					cardNavigation(false)
					i++;
					window.location.hash='#page-' + i; 
				} else {
					window.location.hash='#page-' + i; 
				}
	
			} else {
			
				if (window.activepage != 1){
					cardNavigation(true)
				}
		
				if( page.substring(6)>=2 && i>=2 ) {
					i--; 
					window.location.hash='#page-' + i;  
				} else {
					var i=1;  
					window.location.hash='#page-' + i;  
				}
			}

			return false
			
		});
		
	});


	function cardNavigation(prev){
		marginLeft = ((window.activepage-1)*950)*-1;
		if (window.blockAnimation == false) {
			window.blockAnimation = true;
			
			if ( prev == true ){
				window.activepage--;
			} else {
				window.activepage++;
			}	
			
			left = ( prev == true ) ? (marginLeft + 950) : (marginLeft - 950)
			$('#card-slider').fadeOut(400);
			$('#card-slider').animate({
				left: left
			}, 0, function(){
				
				window.blockAnimation = false;
				
			});
			$('#card-slider').fadeIn(400);
			window.cardcontainer.attr('activepage', window.activepage).animate({
				height: $('#cardpageid-' + window.activepage).height() + 40
			}, 400 );
		}
	}

	function cardPage(page){
		marginLeft = 0;
		window.blockAnimation = true;
		window.location.hash='#page-' + page;  
		window.activepage=page;
		
		left = marginLeft - 950 * (page-1);
		
		$('#card-slider').fadeOut(400);
		$('#card-slider').animate({
			left: left
		}, 0, function(){
				
			window.blockAnimation = false;
				
		});
		
		$('#card-slider').fadeIn(400);
		window.cardcontainer.attr('activepage', window.activepage).animate({
			height: $('#cardpageid-' + window.activepage).height() + 40
		}, 400 );
	
		
	}
