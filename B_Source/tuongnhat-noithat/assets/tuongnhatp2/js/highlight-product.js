$(document).ready(function(){
	//-- high light product when mouse enter --
		$(".filteredItem").mouseenter(function(){
			$(this).addClass('highlight');
			$(this).animate({opacity:1});
			$(this).css('box-shadow', '0 0 20px #2e2e2e');
			$(this).css('border','solid 10px #fdfdfd');
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
			$(".filteredItem").css('border','solid 10px white');
			$(".filteredItem").removeClass("highlight");
			$(".filteredItem").css("box-shadow","none");
		});

		$("#catProdsContainer").mouseleave(function(){
			$(".filteredItem").animate({opacity:1});
			
		});
});