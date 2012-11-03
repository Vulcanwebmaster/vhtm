/**
 * 
 */
$(document).ready(function(){
	$(".avt-hot-list-a").mouseover(function(){
		var id=$(this).attr("id");
		$(".hotestnews-div").css("display","none");
		$("#hotestnews-div"+id[id.length-1]).css('display','block');
		$(".avt-hot-list-a").children("p").children("img").css("border","solid 1px black");
	})
});