function updateContents(boxDivId, url)
{
	updateContentsWithData(boxDivId, url, "");
}

function updateContentsPostForm(boxDivId, url, elementIds)
{
	if (elementIds.length > 0)
	{
		var data = "";
		
		for (var i = 0; i < elementIds.length; i++) {
			if (i > 0)
				data = data + "&"
				
			data = data + elementIds[i] + "=" + document.getElementById(elementIds[i]).value;
		}
		
		updateContentsWithData(boxDivId, url, data);
	}
	else
	{
		updateContentsWithData(boxDivId, url, "");
	}
}

function updateContentsWithData(boxDivId, url, data)
{
	$.ajax({
		type: "GET",
		url: url,
		data: data,
		
		
		success: function(gotData) {
                  
				  $("#"+boxDivId).html(gotData);
                }

	});
}