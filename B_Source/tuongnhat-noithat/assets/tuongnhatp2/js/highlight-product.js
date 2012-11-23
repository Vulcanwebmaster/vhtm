$(document).ready(function(){
	//-- high light product when mouse enter --
		$(".filteredItem").mouseenter(function(){
			$(this).addClass('highlight');
			$(this).animate({opacity:1});
			var list = $(".filteredItem");
			for (var i=0; i<list.length; i++)
			{
				$item = $(list[i]);
				if ($item.attr('class')!='filteredItem highlight')
					$item.animate({opacity:0.4});
			}
			//$(this).parent().parent().parent().animate({boxShadow: '0 0 30px rgba(100,100,200,0.4)' });
		});

		$(".filteredItem").mouseleave(function(){
			$(".filteredItem").removeClass("highlight");
		});

		$("#catProdsContainer").mouseleave(function(){
			$(".filteredItem").animate({opacity:1});
			
		});
});