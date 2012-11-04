/**
 * 
 */
$(document).ready(function(){
	$(".avt-hot-list-a img").mouseenter(function(){
		$parent=$(this).parent().parent();
		var id=$parent.attr("id");
		$(".hotestnews-div").css("display","none");
		$("#hotestnews-div"+id[id.length-1]).css('display','block');
		$(".avt-hot-list-a").children("p").children("img").css("border","solid 1px black");
	})
});