// JavaScript Document
$(document).ready(function(){
				$('.express, #sharedown').hide();
				$('.filteredItem').mouseenter(function(){
					$(this).children().children('.express').show('slow');
					})
				$('.filteredItem').mouseleave(function(){
					$(this).children().children('.express').hide('slow');
					})
					
				$('#shareButton').mouseenter(function(){
					$('#sharedown').show('slow');
					})
				$('.social, #sharedown').mouseleave(function(){
					$('#sharedown').hide('slow');
					})
					
				$('#pupPanel, #itxOverlay').hide();
				$('.express').click(function(){
					$('#pupPanel, #itxOverlay').show();
					})
				$('.modalClose, .more_info').click(function(){
					$('#pupPanel, #itxOverlay').hide();
					})
					
					
				$('#envio_wrap, .downsize, .buyButton').hide();
				$('#article_drop_envio').click(function(){
					$('#envio_wrap').slideToggle();
					})
				$('.selectHead').click(function(){
					$('.downsize').slideToggle();
					})
				$('.butAddCart').click(function(){
					$('.buyButton').slideToggle();							
					})
															
				$('.viewImgBig2').hide();
				$('.prodAuxImg_1').mouseenter(function(){
					$('.viewImgBig1').hide();
					$('.viewImgBig2').show();																																		
					});
				$('.prodAuxImg_0').mouseenter(function(){
					$('.viewImgBig2').hide();
					$('.viewImgBig1').show();												
					});	
	
		
				$('#pupPanel, #itxOverlay').hide();
				$('.express').click(function(){
					$('#pupPanel, #itxOverlay').show();
					})
				$('.modalClose, .more_info').click(function(){
					$('#pupPanel, #itxOverlay').hide();
					})		
				})