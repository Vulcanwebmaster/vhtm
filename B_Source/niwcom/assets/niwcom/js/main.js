var flashvars = {},
params = {wmode:"transparent"},
attributes = {};
// swfobject.embedSWF("/flash/logo.swf", "mainLgFlshLogo", "271", "188", "9.0.0", "/flash/expressInstall.swf", flashvars, params, attributes);
function closePretty()
{
$.prettyPhoto.close();
}

$(document).ready(function(){
/*
//fade in and out	
   $("#fadeIn div").delay(200).fadeTo(700, 0, function(){
		$(this).hide();
	});
//for history back..
	$("#fadeIn div").mouseover( function(){
		 $(this).delay(200).fadeTo(700, 0, function(){
		$(this).hide();
	  });
	 });
*/	 
$('a[rel="blank"]').click(function(){
  this.target = "_blank";
});
//for navigating out..
/*	$('a').not('#mainSlideNav a, #portConntNav a, .comment-list a.gtmBk, .showComs, a[rel="blank"]').click( function(){
		var postLink = $(this).attr('href');
	   $("#fadeIn div").show(); 
	   $("#fadeIn div").fadeTo(600,1, function(){
        window.location = postLink;
		});
		 return false;
	});
*/	
//Twitter
		if ($("#ftrTwtr").length>0) {
		 $("#ftrTwtr").tweet({
         avatar_size: 0,
         count: 3,
         username: ["snowdentwit"],
         loading_text: "searching twitter...",
         refresh_interval: 10000
        });	
       }

//dropdown animation
	//var aniHeight = 0 /* for full height image $('mainHdrWrap').outerHeight()*/;
	//var aniNegHeight = aniHeight-20; 
	/*$("#drpdwnAni div").css('top', '-'+20+'px')
	$("#drpdwnAni div").fadeTo(0,0);
	$("#drpdwnAni div").css('display', 'block')
	$('.aDwn').hover( function() {   
	$("#drpdwnAni div").stop().animate({opacity: "1", top: "0px"}, 600);
	}, function() {
	$("#drpdwnAni div").stop().delay(20).animate({top: "-20px", opacity: "0" }, 600);
	});
	*/
//blend (almost useless at this point)	
    $("#mainSlideNav a").blend();
	$("#mainClients .col .client a").blend();
    $("#mainView .viewWrk").blend();
	$("#mainMdlWrap .blog-container .side-panel a").blend();	
//bookmarks
	if ($.browser.msie && $.browser.version < 9){
		$('#mainBooks a').mouseenter( function(){
			$(this).children(".hv").show();
			$(this).children(".nv").hide();
	      } );
			$('#mainBooks a').mouseleave( function(){
		 $("#mainBooks a").children().stop(true, true);
		   $(this).children(".nv").show();
		   $(this).children(".hv").hide();
		  } ); 
	}else{
	$('#mainBooks a').mouseenter( function(){
			$(this).children(".hv").fadeIn(600);
			$(this).children(".nv").fadeOut(600);
	      } );
			$('#mainBooks a').mouseleave( function(){
		 $("#mainBooks a").children().stop(true, true);
		   $(this).children(".nv").fadeIn();
		   $(this).children(".hv").fadeOut(1000);
		  } );
		  }
//main dropdown 
   $("#mainNav li a.abut").mouseenter( function(){
	   $(this).parent().children("ul").stop(true, true);
	   $(this).parent().children("ul").fadeIn( );
	  //  Cufon.replace('#mainNav li a'); 
	   });		
	    $("#mainNav li ul").parent().mouseleave( function(){
	    $("#mainNav li ul").fadeOut( function(){
		});
		// Cufon.replace('#mainNav li a');    
	});
//main nav hovers 
  $("#mainNav li a").append('<span class="hvr">&nbsp;</span><span class="on">&nbsp;</span>');
  $("#mainNav li .cur .on").animate({opacity: "1" }, 0);
  $("#mainNav li .hvr").animate({opacity: "0" }, 0);
  $("#mainNav li").hover( function() {   
	$(this).not(".cur")/*, .aDwn")*/.children("a").children(".hvr").stop().animate({opacity: "1" }, 600);
	}, function() {
	$(this).not(".cur").children("a").children(".hvr").stop().animate({opacity: "0" }, 600);
	});
	/*$("#mainNav li.aDwn").not('.cur').hover( function() {
	$(this).children("a").children(".on").stop().animate({opacity: "1" }, 600);   
	$(this).parent().children(".cur").children("a").children(".on").stop().animate({opacity: "0" }, 600);
	$(this).parent().children(".cur").children("a").addClass("white").removeClass("black");
	$(this).children("a").addClass("black").removeClass("white", function(){
	});	
	Cufon.replace('#mainNav .white', {
    textShadow: '1px 1px rgba(0, 0, 0, 0.34)'
	})
	Cufon.replace('#mainNav .black', {
    textShadow: '0px 0px rgba(0, 0, 0, 0.34)',
	hover: { textShadow: '0px 0px rgba(0, 0, 0, 0.0)'}
	})
	}, function() { 
	$(this).children("a").children(".on").stop().animate({opacity: "0" }, 600);
	$(this).parent().children(".cur").children("a").children(".on").stop().animate({opacity: "1" }, 600);
	$(this).parent().children(".cur").children("a").removeClass("white").addClass("black")
	$(this).children("a").removeClass("black").addClass("white", function(){
	});	
	Cufon.replace('#mainNav .white', {
    textShadow: '1px 1px rgba(0, 0, 0, 0.34)'
	})
	Cufon.replace('#mainNav .black', {
    textShadow: '0px 0px rgba(0, 0, 0, 0.34)',
	hover: { textShadow: '0px 0px rgba(0, 0, 0, 0.0)'}
	})
	});
	//reset the cur 
	$("#mainNav li.cur").children("a.fs").addClass("black")
	Cufon.replace('#mainNav .black', {
    textShadow: '0px 0px rgba(0, 0, 0, 0.34)'
	});  		
	*/   		
//front video slider/selector
		if ($("#mainSlide").length>0) {
		 $("#mainSlide div.slide").hide();  
		 $("#mainSlideNav li a:first").addClass("cur"); 
		 $("#mainSlide div.slide:first").show(); 

//On Click Event
		 $("#mainSlideNav li a").click(function() {
  	   	 $("#mainSlideNav li a").removeClass("cur");
		 $(this).addClass("cur");
		 $("#mainSlide div.slide").removeClass("cur").fadeOut(1200);
		 var activeTab = $(this).attr("href"); 
		 $(activeTab).fadeIn(1200).addClass("cur");
		 return false;
		 });
//timer loop 
		 function slideTimer() { 
			 if (!($('#mainSlideNav li a.cur').parent().next().children("a").length>0)) {	
			 $("#mainSlideNav li a").removeClass("cur");
		     $("#mainSlide div.slide").removeClass("cur").fadeOut(1200); 
		     $("#mainSlideNav li a:first").addClass("cur");
		     $("#mainSlide div.slide:first").fadeIn("slow").addClass("cur");  
				 } else {
			 var nextTab = $('#mainSlideNav li a.cur').parent().next().children("a").attr('id');
			 var nextDiv = $('#mainSlide div.slide:visible').next().attr('id');
			 $("#mainSlide div.slide").removeClass("cur").fadeOut(1200);
			 $("#mainSlideNav li a").removeClass("cur");
			
			 $("#"+nextTab).addClass("cur");
			 $("#"+nextDiv).fadeIn("slow").addClass("cur");
			 };
			 }
		 var miniCount = setInterval( slideTimer, 5000); 
		 $("#mainSlideNav li a, #mainHeader").mouseenter( function(){
		  clearInterval(miniCount);});
		  $("#mainSlideNav,  #mainHeader").mouseleave( function(){
		  clearInterval(miniCount);
		  miniCount = setInterval(slideTimer, 5000);});
		}
		//ie7 cheat could just more the .btmBg bg image into html and switch to neg z-index
		 if ($.browser.version < 8) {
		   $('.mainPage #mainHdrWrap .btmBg').live('click', function(){
			   var move = $('#mainSlide div.cur').children('span').children('a').attr('href');
			   window.location = move;
		   });
	  };
//client tooltip fadein
		if ($.browser.msie && $.browser.version < 9){ 
		 $('#mainClients .client').mouseenter( function(){
			$("#mainClients .client .visit").stop(true, true).hide();
			$(this).children(".visit").show();
			} );
			$('#mainClients .client').mouseleave( function(){
			$(this).children(".visit").hide();
			} );
		} else {
		$('#mainClients .client').mouseenter( function(){
			$("#mainClients .client .visit").stop(true, true).fadeOut();
			$(this).children(".visit").fadeIn();
			} );
			$('#mainClients .client').mouseleave( function(){
			$(this).children(".visit").fadeOut();
			} );
		};
//worksheet hover 
	    $("#mainWorkSheet a.download").mouseenter( function(){ 
		$(".ani").fadeIn();
		});
		$("#mainWorkSheet a.download").mouseleave( function(){ 
		$(".ani").stop( true,true); 
		$(".ani").fadeOut();
		});
//about portfolio nav handler
	$("#aboutConntNav li span.white, #portConntNav li span.white").fadeIn(); 
	$("#aboutConntNav li.cur span, #portConntNav li.cur span").not(".txt").fadeOut();
    $("#aboutConntNav li a"/* , #portConntNav li a"*/).click( function(){
	if ($(this).parent().hasClass('cur')){ 
	return false
	}else{	
	$("#aboutConntNav li.cur span.white, #portConntNav li.cur span.white").fadeIn();
	$(this).parent().children('span').stop(true,true);
    $("#aboutConntNav li.cur, #portConntNav li.cur").removeClass('cur');
	$(this).parent().addClass('cur');
	$(this).parent().children('span').not('.txt').fadeOut();
	$("#aboutConntNav li span.hvr, #portConntNav li span.hvr").fadeOut( 600, function() {
	Cufon.replace('#aboutConntNav li .txt, #portConntNav li .txt');
	});
	/////
	 /*var getUrl = $(this).attr('href');
	    $('#portFade').append('<div class="portLoaded"></div>');
        $('.portLoaded').load('http://snowdenindustries.gositewave.com'+getUrl+' .portList', function() {
		if ($.browser.msie && $.browser.version < 9 ){
		var checkHeight1 = $('.portLoaded').height();
		var checkHeight2 = $('#portFade').height();	 
		$('#portContent').height(checkHeight2);
		$('.portLoaded .portList').css( 'visiblity', 'hidden');
		$('#portFade').fadeOut(900, function(){
	    $('.portList').not('.portLoaded .portList').remove();	 
		$('.portLoaded .portList').css( 'visiblity', 'visible');
		Cufon.replace('.portLoaded .portList .title', { fontFamily: 'gtmBook' });
		//$('#portContent').css('height', checkHeight2)
			if (checkHeight1 > checkHeight2) {
			$('#portContent').animate({
		    height: checkHeight1
	     	});
			}
			if (checkHeight1 < checkHeight2) {
			$('#portContent').animate({
		    height: checkHeight1
	     	});
			}
		    $('.portLoaded .portList').unwrap(); 
			});	
		    $('#portFade').delay(100).fadeIn(900);
			//funky stuff
			 $(".portList li a .hvr").addClass("hvr2").removeClass("hvr");
 	         $(".portList li a .hvr2").fadeTo(0,0);

		//end ie
		} else { 
		 $('.portLoaded .portList').fadeTo(0,0);	
		Cufon.replace('.portLoaded .portList .title', { fontFamily: 'gtmBook' });
		var checkHeight1 = $('.portLoaded').height();
		var checkHeight2 = $('#portFade').height()
		$('#portFade').css('overflow','hidden').css('height', checkHeight2)
		if( checkHeight1 > checkHeight2) {
			$('#portFade').animate({
		    height: checkHeight1
	     	});
			}
        $('.portList').not('.portLoaded .portList').fadeTo( 900,0, function(){
			$(this).remove()
			
			if( checkHeight1 < checkHeight2) {
			$('#portFade').animate({
		    height: checkHeight1
	     	});
			}
			
			});
		   $('.portLoaded .portList').delay(400).fadeTo(900,1, function(){
			$('.portLoaded .portList').unwrap();
			//funky stuff
			 $(".portList li a .hvr").addClass("hvr2").removeClass("hvr");
 	         $(".portList li a .hvr2").fadeTo(0,0);
			});
		  }
        });
	return false
	*/}
	});
    $("#aboutConntNav li a, #portConntNav li a").mouseenter( function(){
	$(this).parent().children('.hvr').fadeIn(600);
   }); 
    $("#aboutConntNav li a, #portConntNav li a").mouseout( function(){	
	$("#aboutConntNav li span.hvr, #portConntNav li span.hvr").stop(true,true);	
	$("#aboutConntNav li span.hvr, #portConntNav li span.hvr").fadeOut(600);
   }); 
   //Fade in portfolio navigation
 $(".portList li a .hvr").addClass("hvr2").removeClass("hvr");
 $(".portList li a .hvr2").fadeTo(0,0);
//Portfolio Slide
/*	$("#portSlide div.slide").hide();  
    $("#portSlide div.slide:first").show(); 
	$("#portSlide div.slide:first").addClass("cur"); 

      var msDelay = 200; 
      var msTimer = null;
     $(".portList li a").live('mouseenter', function(){
		var activeTab = $(this).attr('rel');
        if (msTimer)
		clearTimeout(msTimer);
        msTimer = setTimeout( function() 
        {
        if ( $("#portSlide "+ activeTab).length>0&&$("#portSlide "+ activeTab).is(":hidden") ) {
		$("#portSlide div").removeClass("cur").fadeOut(1200);
		$("#portSlide "+ activeTab).fadeIn('slow').addClass("cur");
	    };
        }, msDelay);
		});
		 if ($.browser.version < 8){
		   $('.portPage #mainHdrWrap .btmBg').live('click', function(){
			   var move = $('#portSlide div.cur').children('span').children('a').attr('href');
			   window.location = move;
		   });
	  };
//Fade in hovers 
*/	 
	 $(".portList li a").live('mouseenter',function(){
	  //$(".portList li a .hvr2").stop(false,true);
	 $(this).children(".hvr2").stop().animate({opacity: "1"}, 700);
	 }); 
 	 $(".portList li a").live('mouseleave', function(){
	 $(this).children(".hvr2").stop().animate({opacity: "0"}, 700);
	 });
	
	/*
	$(".portList li a").live('hover', function (ev) {
            if (ev.type == 'mouseover') {
             $(this).children(".hvr2").stop().fadeIn("slow");
            }
            if (ev.type == 'mouseout') {
             $(this).children(".hvr2").stop().fadeOut("slow");
            }
        });
      */

	  
//left col hovers
	$('#portSeldClients li span').css('display', 'block').animate({opacity: "0"}, 600);
	$('#portSeldClients li').hover( function() {   
	$(this).children('span').stop().animate({opacity: "1"}, 900);
	}, function() {
	$(this).children('span').stop().animate({opacity: "0"}, 900);
	});
	
     $("#detailsRgt .visit").mouseenter( function(){
		$(this).children("span").css("display", "none" ); 
		$(this).children("span").css("visibility", "visible" );
		$(this).children("span").fadeIn();
		});
		$("#detailsRgt .visit").mouseleave( function(){ 
		$(this).children("span").stop( true,true); 
		$(this).children("span").fadeOut();
		});
		// blog top breadcrubs delete 
		if ($(".breadCrumbs2").length>0) {
			$(".breadCrumbs1").remove();
			$('.breadCrumbs2:gt(0)').remove();
			}
//blog prev next btns
		$('.page-nav a').append('<span>&nbsp;</span>').hover( function() {   
		$(this).children('span').stop().animate({opacity: "1"}, 900);
		}, function() {
		$(this).children('span').stop().animate({opacity: "0"}, 900);
		});
		
//blog form comments and contact us
		$('#contactForm .item .cat_textbox, .item .cat_textbox_small, .item textarea').val('');//clear fields on load
		if ($.browser.msie && $.browser.version < 9){
			$('.item input').focusin( function(){
		$(this).parent().children("label").hide()	
		$(this).parent().children("span").show('slow')	
			});
		 $('.item input').focusout( function(){
		  if($(this).val()==''){
		  $(this).parent().children("label").show();
		  };
		  $(this).parent().children("span").hide('slow');
		  });	
		}else{
		$('.item input').focusin( function(){
		$(this).parent().children("label").fadeOut('slow');	
		$(this).parent().children("span").fadeIn('slow');	
			});
		 $('.item input').focusout( function(){
		  if($(this).val()==''){
		  $(this).parent().children("label").fadeIn('slow');
		  };
		  $(this).parent().children("span").fadeOut('slow');		
			});
		}
		if ($.browser.msie && $.browser.version < 9){
			$('.item textarea').focusin( function(){
		$(this).parent().children("label").hide()		
			});
		 $('.item textarea').focusout( function(){
		   if($(this).val()==''){
		   $(this).parent().children("label").show();
		   }
		   });
		}else{
		$('.item textarea').focusin( function(){
		$(this).parent().children("label").fadeOut('slow')		
			});
		 $('.item textarea').focusout( function(){
		   if($(this).val()==''){
		   $(this).parent().children("label").fadeIn('slow');
		   }
		   });
		}
			$('.subBtn input').fadeTo("slow",0).css('display','block'); 
			$('.subBtn').mouseenter( function(){
				$('.subBtn input').stop(true,true).delay(15).fadeTo("slow",1);	
			}
			);
			$('.subBtn').mouseleave( function(){
				$('.subBtn input').delay(15).fadeTo("slow",0);
				} 
			);

			if ($.browser.msie && $.browser.version < 9){
				$('textarea').focusin( function(){
				$(this).parent().children('.textBg').show();
				$(this).parent().children('.textBgBase').hide();		
			}
			);
			$('textarea').focusout( function(){
				$(this).parent().children('.textBg').hide();
				$(this).parent().children('.textBgBase').show();
				} 
			);
			}else{
			$('.textBg').fadeTo("slow",0).css('display','block');
			$('textarea').focusin( function(){
				$(this).parent().children('.textBg').fadeTo("slow",1);
				$(this).parent().children('.textBgBase').fadeTo("slow",0);		
			}
			);
			$('textarea').focusout( function(){
				$(this).parent().children('.textBg').fadeTo("slow",0);
				$(this).parent().children('.textBgBase').fadeTo("slow",1);
				} 
			);
			 }
//mini scroller (blog)
			$('.comment-list  h5 a').click( function() {
				var locId1  = $(this).attr('href');
				locId1 = locId1.replace(/^.*#/, '');
				var location1 = $('#comments_'+locId1).offset().top;
			$('html,body').animate({
               scrollTop: location1
               }, 500);
			});
//blog post list show comments
		$('.showComs').click(function() {
			var dummyLnk 
			dummylnk = $(this).attr('href')
			if ($(this).parent().children('#coms'+dummylnk).is(':hidden')){
			$(this).html('Hide Comments');
			Cufon.replace('.showComs', { fontFamily: 'gtmBook' });
			$(this).parent().children('#coms'+dummylnk).slideDown();
			return false;
			} else {
			$(this).html('Show Comments');
			Cufon.replace('.showComs', { fontFamily: 'gtmBook' });
			$(this).parent().children('#coms'+dummylnk).slideUp();
			return false;
			}
		});	
//Fade links 
	jQuery.fn.dwFadingLinks = function(settings) {
	  settings = jQuery.extend({
	  		duration: 400
	  }, settings);
	  return this.each(function() {
	 var original = $(this).css('color');
	$(this).mouseenter(function() { $(this).animate({ color: settings.color },settings.duration); });
	$(this).mouseleave(function() { $(this).stop(settings.duration); });
	$(this).mouseleave(function() { $(this).animate({ color: original },settings.duration); });
	  });
	};
	
	$('#mainBlog .blogsitesummary a , #mainTwitter .tweet_text' ).not('#mainTwitter .tweet_text a').dwFadingLinks({
		color: '#ff6000'
	});
    $('#aboutContent .aboutStory a' ).dwFadingLinks({
		color: '#FFA042'
	});
	/*$('#mainMdlWrap .blog-container .side-panel a' ).dwFadingLinks({
		color: '#ff6000'
	});*/
//twitter faux links
	$(".tweet_list li .tweet_text").live( 'click', function(){
	   var lktw = $(this).parent().children(".tweet_time").children("a").attr("href");
       window.open(lktw);
		});
//twitter hovers
	var tweetCheck = 1;
	$(".tweet_list").live( 'mouseover', function(){
	tweetCheck = tweetCheck+1;
	if (tweetCheck < 3){
	$("#mainTwitter .tweet_text").not('#mainTwitter .tweet_text a').dwFadingLinks({
		color: '#ff6000'
	});
	};
	});
//ie fading png32, ..no way! amiright ?
		$(function() {
		if ($.browser.msie && $.browser.version < 9 ){ 
			var seleCts = $('#nextpage span, .fs .on, .fs .hvr, #portSeldRight .launch span,  #portSeldRight .zoom  span, #portSeldRight .preview span');
		function extractUrl(input)
			{
	    	 // remove quotes and wrapping url()
			 return input.replace(/"/g,"").replace(/url\(|\)$/ig, "");
			};
			if ($.browser.version > 7){
			//ie8
		    $(seleCts).each( function(){
			var bgimage = extractUrl($(this).css("background-image")); 
            $(this).append('<img src="/images/ie_placeholder.png" height="100%" width="100%" />').css('background', 'none');
			$(this).css('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+bgimage+"',sizingMethod='crop')alpha(opacity=0)");
			if ($(this).is('.on') && $(this).parents().is('.cur') || $(this).is('.bg')){ 
			$(this).css('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+bgimage+"',sizingMethod='crop')alpha(opacity=100)");
			    };
			  });
			} else {
				//ie7
			  $(seleCts).each( function(){
			var bgimage = extractUrl($(this).css("background-image")); 
            $(this).append('<img src="/images/ie_placeholder.png" height="100%" width="100%" />').css('background', 'none');
			$(this).children('img').css('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+bgimage+"',sizingMethod='crop')");
			  });
				
			};
     };
  });
  //portfolio selected page (client site description)
  $('#portSeldRight .launch, #portSeldRight .zoom, #portSeldRight .preview ').hover( function() {   
		$(this).children('.tp').stop().animate({opacity: "1"}, 450);
		$(this).children('.bg').stop().delay(250).animate({opacity: "0"}, 300);
		}, function() {
		$(this).children('.tp').stop().delay(250).animate({opacity: "0"}, 300);
		$(this).children('.bg').stop().animate({opacity: "1"}, 450);
		
		});
		  $('#portBack').hover( function() {   
		$(this).children('.hvr').stop().animate({opacity: "1"}, 600);
		$(this).children('.nvr').stop().delay(200).animate({opacity: "0"}, 600);
		}, function() {
		$(this).children('.hvr').stop().delay(200).animate({opacity: "0"}, 600);
		$(this).children('.nvr').stop().animate({opacity: "1"}, 600);
		
		});
		var loc = window.location;
        if ( loc != 'http://www.snowdenindustries.com/_blog/Snowden_Industries_Blog/') {
			$('#blogback').show(); 
			}

	$("a.nws").prettyPhoto({ allow_resize: false, show_title: false, keyboard_shortcuts: false, theme: 'dark_square' });	
});
