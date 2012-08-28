		function verify() 
		{
			
			var message = '';
			var newline='';
			var focusfield='';
			
			if(document.getElementById('security1').value==""){ message+=newline+"PLEASE ENTER ISIN";	newline=', '; 
				if(focusfield=='') focusfield='security1';
			}
			
			

		
		 if(message=="")
		 {
			document.getElementById('error1').style.display="none";
			document.getElementById('error2').innerHTML=message;
		   return true;
		 }
		 else {
		   		//alert(message);
				document.getElementById('error1').style.display="";
				document.getElementById('error2').innerHTML=message;
		  		if(focusfield!='') focusId(focusfield);
		   		return false;
		   }
		}