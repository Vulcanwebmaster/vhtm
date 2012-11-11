/**
 * 
 */
$(document).ready(function(){
	var list=$(".avt-hot-list-a");//document.getElementsByClassName("avt-hot-list-a");
	var sum=list.length;
	var count=1;
	$(".avt-hot-list-a img").mouseenter(function(){
		$parent=$(this).parent().parent();
		var id=$parent.attr("id");
		var current_index=parseInt(id[id.length-1]);
		$(".hotestnews-div").css("display","none");
		if (count==current_index+1 || current_index-count==sum-1) 
		{
			$("#hotestnews-div"+id[id.length-1]).css('display','block');
			
		}
		else
			{
			$("#hotestnews-div"+id[id.length-1]).fadeIn();//.css('display','block');
			}
		if (current_index<sum-1) count=current_index+1;
		else count=0;
	})
	
	window.setInterval(function(){
		$("#avt-hot-list-"+count+" img").mouseenter();
	},6000);
});