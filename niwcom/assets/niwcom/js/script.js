/*
    File Name: script.js
    by Tolga Can
    RT-Theme 13
*/


/* CUFON FOTNS */
var cufon_fonts= 'true'; // true - false 

/* FLICKR */
var flickr_user_id= '36587311@N08'; //your flickr id

/* TWITTER */
var twitter_user_name = 'envatowebdesign'; //your twitter username


/* CONTENT SLIDER */
var rttheme_effect_options = 'fade'; // content slider translation effect

/* CONTENT AND NIVO ALIDER */
var rttheme_slider_time_out = 8000; // translation timeout (ms)   


//Content slider 
jQuery(document).ready(function(){
    var slider_area;
    var slider_buttons;

    if (jQuery('.cycle').length>0){
        // Home Page Slider
        slider_area="#slider_area";	
        slider_buttons="#numbers";	
   
        jQuery(slider_area).cycle({ 
            fx:     rttheme_effect_options, 
            timeout:  rttheme_slider_time_out, 
            easing: 'backout', 
            pager:  slider_buttons, 
            cleartype:  1,
            pause:           true,     // true to enable "pause on hover"
            pauseOnPagerHover: true,   // true to pause when hovering over pager link						
                pagerAnchorBuilder: function(idx) { 
                    return '<a href="#" title=""><img src="assets/niwcom/images/pixel.gif" width="14" heigth="14"></a>'; 
                }
        });
	} 
});

//Photo Slider
jQuery(document).ready(function(){ 
    if (jQuery('.photo_gallery_cycle ul').length>0){
        jQuery(".photo_gallery_cycle ul").cycle({ 
            fx:     'fade', 
            timeout:  rttheme_slider_time_out,
            pager:  '.pager', 
            cleartype:  1,
            pause:           true,     // true to enable "pause on hover"
            pauseOnPagerHover: true,   // true to pause when hovering over pager link						
                pagerAnchorBuilder: function(idx) { 
                    return '<a href="#" title=""><img src="assets/niwcom/images/pixel.gif" width="14" heigth="14"></a>'; 
                }
        });
    }
});

// Background Slider
jQuery(document).ready(function(){
    if (jQuery('.background_slider li').length>1){
        jQuery('.background_slider').innerfade({
            speed: 3000,
            timeout: 8000,
            type: 'sequence',
            containerheight: '1150px'
        });
    }else{
        jQuery('.background_slider li').css('display','block');
    }
});

// Accordion Slider
jQuery(document).ready(function(){
    if (jQuery('.kwicks li').length>1){

	   //find how many slide
	   var accordion_count = jQuery('.kwicks li').length;
	   
	   //one slide max-width
        var slider_with = 980/accordion_count;
	   
	   jQuery('.kwicks li').css('width',slider_with);


        jQuery('.kwicks').kwicks({
             max : 780,
             spacing : 0,
             duration: 500
        });
	   
        if(!jQuery.browser.msie){
            jQuery('.kwicks li').mouseover(function(){
                 
                 jQuery('.kwicks li').each(function(){
                      jQuery('.kwicks li .desc_accordion').stop().css('display','none');
                      jQuery('.kwicks li.active .desc_accordion').stop().css('display','block');	
                 })
    
            }).mouseout(function(){
                 jQuery('.kwicks li').each(function(){
                      jQuery('.kwicks li .desc_accordion').stop().css('display','block'); 
                 })
            });
        }
    }
});

//Nivo Slider
jQuery(document).ready(function(){
    if (jQuery('#nivo-slider').length>0){
        jQuery('#nivo-slider').nivoSlider({ 
		  	  pauseTime:rttheme_slider_time_out
	    });
    }
});    


// jQuery Flickr Feed Setup
$(document).ready(function(){
if ($('#flickr').length>0){
    $('#flickr').jflickrfeed({
         limit: 4, // how many item do you want to show?
         qstrings: {
              id: flickr_user_id // your flickr user id
         },
         itemTemplate: '<li><span class="border"><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></span></li>'
    }); 
}
});

//Tweets
$(document).ready(function(){
    if ($('.tweets').length>0){
        jQuery('.tweets').tweet({
                count: 3, // how many item do you want to show?
                query: 'from:'+twitter_user_name+'', // your twitter user name
			 loading_text: 'Loading Tweets...'
        });
    }
});	


// perform JavaScript after the document is scriptable.
jQuery(function() {
    jQuery("ul.tabs").tabs("> .pane", {effect: 'fade'});
    
    jQuery(".accordion").tabs(".pane", {tabs: 'h3', effect: 'slide'});
    jQuery(".scrollable").scrollable();


    jQuery(".items.big_image img").click(function() {
    
       // see if same thumb is being clicked
       if (jQuery(this).hasClass("active")) { return; }
    
       // calclulate large image's URL based on the thumbnail URL 
       var url = jQuery(this).attr("alt");
    
       // get handle to element that wraps the image and make it semi-transparent
       var wrap = jQuery("#image_wrap").fadeTo("medium", 0.5);
    
       // the large image
       var img = new Image();
    
    
       // call this function after it's loaded
       img.onload = function() {
    
          // make wrapper fully visible
          wrap.fadeTo("fast", 1);
    
          // change the image
          wrap.find("img").attr("src", url);
    
       };
    
       // begin loading the image
       img.src = url;
    
       // activate item
       jQuery(".items img").removeClass("active");
       jQuery(this).addClass("active");
    
    // when page loads simulate a "click" on the first image
    }).filter(":first").click();

});


//Slide to top
jQuery(document).ready(function(){
    jQuery(".line span.top").click(function() {
        jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );
    });
});


//pretty photo
jQuery(document).ready(function(){
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_rounded',slideshow:false,overlay_gallery: false});
});

//cufon fonts
if(cufon_fonts=='true') {
    
    jQuery(document).ready(function(){		
		   
	   /* Content Headings */
	   Cufon.replace('.content h1,.content h2,.content h3,.content h4,.content h5,.content h6', {
		 fontFamily: 'Aller',
		 hover: true,
		 textShadow: '0px -1px 1px #fff',
		 color: '-linear-gradient(#000, #707070, #000 , #000)',
		 hover: {
			textShadow: '0px -1px 1px #fff',
			color: '-linear-gradient(#707070, #000, #707070 , #707070)'
		 }
	   });
	   
	   /* Footer Headings */
	   Cufon.replace('#footer h1,#footer h2,#footer h3,#footer h4,#footer h5,#footer h6', {
		 fontFamily: 'Aller',
		 hover: true
	   });
	   
	   /* Banner buton, slider sub title, .cufon  */
	   Cufon.replace('.banner_button, .desc .subtitle, .cufon', {
		 fontFamily: 'Aller',
		 hover: true
	   }); 
	    
	   /* Navigation Links  */
	   Cufon.replace('#navigation ul  li  a', {
		 fontFamily: 'Aller',
		 hover: true,
		 textShadow: '1px 1px #000' 
	   });
    
	   /* Top Slogan  */
	   Cufon.replace('.top_slogan', {
		 fontFamily: 'Aller',
		 hover: true,
		 textShadow: '1px 1px #7a7a7a' 
	   });
	   
	   /* Slider Title  */
	   Cufon.replace('.desc .title', {
		 fontFamily: 'Aller Display',
		 textShadow: '0px -1px 1px #fff',
		 color: '-linear-gradient(#000, #707070, #000 , #000)'
			    
	   });
    
	   /* Slider Title Dark Bakcground  */
	   Cufon.replace('.desc.transparent_background.dark .title', {
		 fontFamily: 'Aller Display',
		 textShadow: '0px 1px 1px #393939',
		 color: '-linear-gradient(#fff, #eee, #fff , #fff)'              
	   });    
    
	   /* Accordion Slider Title  */
	   Cufon.replace('.desc_accordion .title', {
			  fontFamily: 'Aller Display',
			  hover: true
	   });
	  
	  if(!jQuery.browser.msie){//hide cufon for accordion slider on IE
    
		 Cufon.replace('.desc_accordion .subtitle  ', {
				 fontFamily: 'Aller',
				 hover: true
		  });
	  
		  Cufon.replace('.desc_accordion .title_hidden', {
				 fontFamily: 'Aller Display',
				 color: '#fff',
				 hover: true
		  });    
	   }
    });
}	 
 
/*********************
//* jQuery Multi Level CSS Menu #2- By Dynamic Drive: http://www.dynamicdrive.com/
//* Last update: Nov 7th, 08': Limit # of queued animations to minmize animation stuttering
//* Menu avaiable at DD CSS Library: http://www.dynamicdrive.com/style/
*********************/

var arrowimages={down:['downarrowclass', 'pixel.gif'], right:['downarrowclass', 'pixel.gif']}


var jqueryslidemenu={

animateduration: {over: 300, out: 200}, //duration of slide in/ out animation, in milliseconds
buildmenu:function(menuid, arrowsvar){
	jQuery(document).ready(function($){
		var $mainmenu=$("#"+menuid+">ul")
		var $headers=$mainmenu.find("ul").parent()
		$headers.each(function(i){
			var $curobj=$(this)
			var $subul=$(this).find('ul:eq(0)')
			this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
			this.istopheader=$curobj.parents("ul").length==1? true : false
			$subul.css({top:this.istopheader? this._dimensions.h+"px" : 0})
			$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
				'<img src="images/'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
				+'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
				+ '" style="border:0;" />'
			)
			$curobj.hover(
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					this._offsets={left:$(this).offset().left, top:$(this).offset().top}
					var menuleft=this.istopheader? 0 : this._dimensions.w
					menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
					if ($targetul.queue().length<=1) //if 1 or less queued animations
						$targetul.css({left:menuleft+"px", width:this._dimensions.subulw+'px'}).slideDown(jqueryslidemenu.animateduration.over)
				},
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					$targetul.slideUp(jqueryslidemenu.animateduration.out)
				}
			) //end hover
			$curobj.click(function(){
				$(this).children("ul:eq(0)").hide()
			})
		}) //end $headers.each()
		$mainmenu.find("ul").css({display:'none', visibility:'visible'})
	}) //end document.ready
}
}


//build menu with ID="main_navigation" on page:
jqueryslidemenu.buildmenu("navigation", arrowimages)

  
//RT form field - text back function
jQuery(document).ready(function() {

        var form_inputs=jQuery(".showtextback input[type='text'], .showtextback textarea");
        
         form_inputs.each(function(){
         
                 jQuery(this).focus( function()
                 {
                    val = jQuery(this).val();
                  
                    if (jQuery(this).attr("alt") != "0"){
                        jQuery(this).attr("alt",jQuery(this).attr("value")); 
                        jQuery(this).attr("value","");
                    }
                    
                 });
         
         
                 jQuery(this).blur( function()
                 {
                      if (jQuery(this).attr("alt") != "0"){
                         val = jQuery(this).val(); 
         
                         if (val == '' || val == jQuery(this).attr("alt")){
                      
                             jQuery(this).attr("value",jQuery(this).attr("alt"));
                           
                         }
                      }
                 });

                 jQuery(this).keypress( function()
                 {  
                        jQuery(this).attr("alt","0");
                       
                 });                 
          });  
         
});



//RT Portfolio Effect
jQuery(document).ready(function() {
        
    jQuery(window).load(function() {
              var portfolio_item=jQuery("a.imgeffect");
              
              portfolio_item.each(function(){
              
                       var img_width = jQuery(this).find('img').width();  
                       var img_height = jQuery(this).find('img').innerHeight();
                       var imageClass = jQuery(this).attr("class");
                       jQuery(this).prepend('<span class="imagemask '+imageClass+'"></span>');
                       
                       var p = jQuery(this).find('img');
                       var position = p.position();
                       var PosTop= parseInt(p.css("margin-top"))+position.top;
                       var PosLeft= parseInt(p.css("margin-left"))+position.left;
              if (!PosLeft) {PosLeft= position.left};
                       
                       jQuery(this).find('.imagemask').css({top: PosTop});
              jQuery(this).find('.imagemask').css({left: PosLeft});
                       
                       jQuery('.imagemask', this).css({width:img_width,height:img_height,backgroundPosition:'center center'});
                       
                       if(jQuery.browser.msie){ jQuery('.imagemask', this).css({display:'none'});}
                       
              });
              
     });
    
    
     var image_e= jQuery("a.imgeffect");
      
      if(jQuery.browser.msie){//ignore the shadow effect if browser IE
            
                image_e.mouseover(function(){
                      
                jQuery(this).find('.imagemask').stop().css({
                            display:"block"
                            }); 
                      
                }).mouseout(function(){
                     jQuery(this).find('.imagemask').stop().css({
                           display:"none"
                          } );
                });
            
      }else{//real browsers :)
            image_e.mouseover(function(){
                  
            jQuery(this).find('.imagemask').stop().animate({
                        display:"block",
                        opacity:1
                        }, 500); 
                  
            }).mouseout(function(){
                 jQuery(this).find('.imagemask').stop().animate({
                        display:"none",
                        opacity:0
                      }, 400 );
            });                  
      }

});

//validate contact form
jQuery(document).ready(function(){

      // show a simple loading indicator
      var loader = jQuery('<img src="assets/niwcom/images/loading.gif" alt="..." />')
              .appendTo(".loading")
              .hide();
      jQuery().ajaxStart(function() {
              loader.show();
      }).ajaxStop(function() {
              loader.hide();
      }).ajaxError(function(a, b, e) {
              throw e;
      });
      
       
      var v = jQuery("#validate_form").validate({
              submitHandler: function(form) {
                      jQuery(form).ajaxSubmit({
                              target: "#result"
                      });
              }
      });
      
      jQuery("#reset").click(function() {
              v.resetForm();
      });
      
      
      var v2 = jQuery("#validate_form_footer").validate({
              submitHandler: function(form) {
                      jQuery(form).ajaxSubmit({
                              target: "#result_footer"
                      });
                       v.resetForm();
              }
              
      });
       
 });

