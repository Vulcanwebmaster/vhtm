/*
 * ajaxcart javascript;
 */
 
var test;			
Event.observe(window, 'load', function () {
	var containerDiv = $('containerDiv');
	if(containerDiv)
		test = new LightboxAJC(containerDiv);
}); 
function cart_form(url)
{	
	data	=	$('product_addtocart_form').serialize();
	ajax_add(url,data);
}

function ajax_add(url,param)
	{	
		tam		=	url.search("checkout/");
		tam2	=	url.search("product/");
		str1	=	url.substr(0,tam)+'ajaxcart/index/add/';
		str2	=	url.substr(tam2,url.length);
		link	=	str1+str2;
		var check = url.search("options");		
		if(check > 0){
			window.location.href = url;
		}
		else{
			var tmp		=	url.search("in_cart");
			test.open();
			new Ajax.Request(link, {
				parameters:param,
				onSuccess: function(data) {
					if(tmp > 0 ) {
						var host	=	find_host(url);
						window.location.href = host+'index.php/checkout/cart/';
					}
					else{
						//result	=	data.responseText;alert(result);				
						$('ajax_content').innerHTML = data.responseText;
						
						if($('ajax_content').down('.top-link-cart')){
							var count_cart = $('ajax_content').down('.top-link-cart').innerHTML;								
							$$('.top-link-cart').each(function (el){
								el.innerHTML = count_cart;
							});
						}
						
						if($('ajax_content').down('.block-cart')){
							var ajax_product = $('ajax_content').down('.block-cart').innerHTML;	
							$$('.block-cart').each(function (el){
							   el.innerHTML = ajax_product;                    
							});
						}
						
						if($('ajax_content').down('.col-main')){
							var ajax_result = $('ajax_content').down('.col-main').innerHTML;				
							$$('.ajaxcart_row1').each(function (el){
							   el.innerHTML = ajax_result;                    
							});
						}
						
						$('ajax_loading').hide();
						$('ajaxcart_conent').show();
						Event.observe('closeLink', 'click', function () {					
							test.close();
							$$('.ajaxcart_row1').each(function (el){
							   el.innerHTML = '';                    
							});
							$('ajax_loading').show();
						});	
					}
				}
			});
		}
	}
	
function setLocation(url){
	var tam		=	url.search("checkout/cart/");
	if(tam > 0)	ajax_add(url);	
	else	window.location.href = url;
}	

document.observe("dom:loaded", function() {
	
	var cartInt = setInterval(function(){
		if (typeof productAddToCartForm != 'undefined'){
			
			if(test){
				var tam	=	$('product_addtocart_form').serialize();
				var check = tam.search("ajaxcart");		
				if(check < 0){						
					productAddToCartForm.submit = function(url){
						if(this.validator && this.validator.validate()){										
							cart_form($('product_addtocart_form').readAttribute('action'));
							clearInterval(cartInt);
						}
						return false;
					}
				}
			}
		} else {
			clearInterval(cartInt);
		}
	},500);
	
}); 

function find_host(url)
{
	var tmp		=	url.search("index.php");
	var str		=	url.substr(0,tmp)
	return str;
}

