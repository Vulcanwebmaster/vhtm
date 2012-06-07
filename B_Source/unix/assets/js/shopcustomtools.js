function jsUpdateCart(){
  var parameter_string = '';
  allNodes = $(".process");
  for(i = 0; i < allNodes.length; i++) {
  	var tempid = allNodes[i].id;
    var temp = new Array;
    temp = tempid.split("_");
 	var real_id = temp[2];
 	var real_value = allNodes[i].value;
    parameter_string += real_id +':'+real_value+',';
  }

  var params = 'ids='+parameter_string;
  
  jQuery.ajax({
   type: "POST",
   url: "index.php/welcome/ajax_cart",
   data: params,
   success: function( r ) {
	  jQuery('#ajax_msg').html( r );
    location.reload( true );
  }
 });
  
}



function jsRemoveProduct(id){
  var params = 'id='+id;
  jQuery.ajax({
   type: "POST",
   url: "ajax_cart_remove",
   data: params,
   success: function( r ) {
	  jQuery('#ajax_msg').html( r );
    location.reload( true );
  }
 });
}
