/**
 * 
 */
function setUpFCK(id, height, foldersource) 
{ 
	if(document.getElementById(id)) 
		{ 
			var oFCKeditor = new FCKeditor(id) ; 
			oFCKeditor.BasePath = foldersource ; 
			oFCKeditor.Height = height; 
			oFCKeditor.ReplaceTextarea() ; 
		} 
}