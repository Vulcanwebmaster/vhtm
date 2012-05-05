/**
 * Javascript library for template ExtremeMagento
 * @copyright 2007 Quick Solution LTD. All rights reserved.
 * @author Giao L. Trinh <giao.trinh@quicksolutiongroup.com>
 */

(function() {
	
// EM.tools {{{
	
if (typeof BLANK_IMG == 'undefined') 
	var BLANK_IMG = '';

// declare namespace() method
String.prototype.namespace = function(separator) {
  this.split(separator || '.').inject(window, function(parent, child) {
    var o = parent[child] = { }; return o;
  });
};


'EM.tools'.namespace();


// EM0015 {{{
	
function decorateNav() {
	
	
	$('nav').childElements().each(function(li) {
		if (li.hasClassName('parent')) {
			li.down('ul').insert({'top': '<li class="title"><a>'+li.down('a').innerHTML+'</a></li>'});
		}
	});
	
	var MEGA_MAX_WIDTH = 700;
	
	// stretch out the mega menu in order to calcuate the child elements' widths correctly
	$$('#nav ul.level0').each(function(ul) {
		ul.setStyle({'width': '1000px'});
	});
	
	// split each UL.level1 to contain max 10 LI
	var MAX_ROWS = 10;
	$$('#nav ul.level1').each(function(ul) {
		ul.addClassName('first');
		
		var li_list = ul.childElements();
		var new_ul = false;
		
		for (var i = MAX_ROWS-1; i < li_list.length; i++) {
			var li = li_list[i];
		
			if (i % MAX_ROWS == 0) {
				li.addClassName('first');
				var new_ul = new Element('ul'); /* add class in the contructor does not work on IE */
				new_ul.addClassName('level1');
				ul.parentNode.appendChild(new_ul);
			}
			else if ((i+1) % MAX_ROWS == 0)
				li.addClassName('last');
			
			if (new_ul) new_ul.appendChild(li);
		}
		
		if (new_ul) 
			new_ul.addClassName('last');
		else
			ul.addClassName('last');
	});
	
	// calculate LI.level1 width
	$$('#nav li.level1').each(function(li) {
		// IE doesn't work
		//var width = parseInt(li.getStyle('border-left-width'))
		//			+ parseInt(li.getStyle('border-right-width')) 
		//			+ parseInt(li.getStyle('padding-left'))
		//			+ parseInt(li.getStyle('padding-right')) + 1;
		var width = parseInt(li.getStyle('padding-left')) + parseInt(li.getStyle('padding-right')) + 1;
					
		// loop child elements to calculate the total width of all UL
		li.childElements().each(function(ul) {
			if (ul.tagName == 'UL' || ul.tagName == 'DIV') width += ul.getWidth();
		})
		
		var width = Math.min(width, MEGA_MAX_WIDTH);
		// set the LI's width if neccessary
		if (width > li.getWidth())
			li.setStyle({'width': width+'px'});
	});
	
	// calculate UL.level0's width
	$$('#nav ul.level0').each(function(ul) {

		// IE doesn't work
		//var width = parseInt(ul.getStyle('border-left-width'))
		//			+ parseInt(ul.getStyle('border-right-width')) 
		//			+ parseInt(ul.getStyle('padding-left'))
		//			+ parseInt(ul.getStyle('padding-right')) + 1;
		var width = parseInt(ul.getStyle('padding-left')) + parseInt(ul.getStyle('padding-right')) + 1;
					
		ul.childElements().each(function(li) {
			if (li.tagName == 'LI' && !li.hasClassName('title')) width += li.getWidth();
		});
		
		var width = Math.min(width, MEGA_MAX_WIDTH);
		ul.setStyle({'width': width+'px'});
	});
	
	// add class to align-right to the mega menu if neccessary 
	var right = $('nav').cumulativeOffset()[0] + $('nav').getWidth();
	$$('#nav ul.level0').each(function(ul) {
		if (ul.up().cumulativeOffset()[0] + ul.getWidth() > right)
			ul.addClassName('a-right');
	});
}

function decorateSlideshow() {
	var $$li = $$('#slideshow ul li');
	if ($$li.length > 0) {
		
		// reset UL's width
		var ul = $$('#slideshow ul')[0];
		var w = 0;
		$$li.each(function(li) {
			w += li.getWidth();
		});
		ul.setStyle({'width':w+'px'});
		
		// private variables
		var previous = $$('#slideshow a.previous')[0];
		var next = $$('#slideshow a.next')[0];
		var num = 2;
		var width = ul.down().getWidth() * num;
		var slidePeriod = 3; // seconds
		var manualSliding = false;
		
		// next slide
		function nextSlide() {
			new Effect.Move(ul, { 
				x: -width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				afterFinish: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide() {
			new Effect.Move(ul, { 
				x: width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width+'px'});
				}
			});
		}
		
		function startSliding() {
			sliding = true;
		}
		
		function stopSliding() {
			sliding = false;
		}
		
		// bind next button's onlick event
		next.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			nextSlide();
		});
		
		// bind previous button's onclick event
		previous.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			previousSlide();
		});
		
		
		// auto run slideshow
		//new PeriodicalExecuter(function() {
			//if (!manualSliding) previousSlide();
			//manualSliding = false;
		//}, slidePeriod);
		
		
	}
}

function decorateSlideshow2() {
	var slideshow = $('slideshow2');
	if (slideshow) {

		// private variables
		var ul = slideshow.select('.slideshow-box ul')[0];
		var $$li = ul.select('li');
		var width = ul.down('li').getWidth();
		var slidePeriod = 6; // seconds
		var manualSliding = false;
		var currentIdx = 0;
		
		// reset slideshow UL's width
		ul.setStyle({ width: width*$$li.length+10+'px' });
		
		// store slideshow image index into LI
		for (var i = 0; i < $$li.length; i++) {
			$$li[i].slideshowIdx = i;
			//$$li[i].setAttribute('id', 'slideshow2_'+i);
		}
		
		// generate Navigation
		var nav = slideshow.select('.navigation')[0];
		nav.insert('<ul></ul>');
		var nav_ul = nav.down('ul');
		for (var i = 0; i < $$li.length; i++) {
			var attr = '';
			if (i == 0) var attr = 'class="active"';
			nav_ul.insert('<li><a href="#'+i+' " '+attr+'>'+(i+1)+'</a></li>');
		}
		
		// bind onClick event on navigation A element
		var $$nav_li = nav_ul.childElements();
		nav_ul.select('a').each(function(a) {
			a.observe('click', function(event) {
				Event.stop(event);
				if (a.hasClassName('active')) return;
				
				manualSliding = true;
				
				var current = a.up('li');
				var active = nav_ul.select('a.active')[0].up('li');
				var idx_current = $$nav_li.indexOf(current);
				var idx_active = $$nav_li.indexOf(active);
				
				if (idx_current > idx_active)
					nextSlide(idx_current - idx_active);
				else
					previousSlide(idx_active - idx_current);
			}.bind(a));
		}.bind(this));
		
		// next slide
		function nextSlide(n) {
			if (typeof n == 'undefined') n = 3;
			
			new Effect.Move(ul, { 
				x: -width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 1.0,
				transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					nav_ul.down('li', ul.down().next(n-1).slideshowIdx).down('a').addClassName('active');
				},
				afterFinish: function() {
					for (var i = 0; i < n; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide(n) {
			if (typeof n == 'undefined') n = 3;
			new Effect.Move(ul, { 
				x: width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 1.0,
				transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					var li = ul.down('li:last-child');
					if (n > 1) li = li.previous(n-2);
					nav_ul.down('li', li.slideshowIdx).down('a').addClassName('active');
					
					for (var i = 0; i < n; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width*n+'px'});
				}
			});
		}
		
		// auto run slideshow
		//new PeriodicalExecuter(function() {
				//if (!manualSliding) nextSlide();
				//manualSliding = false;
			//}, slidePeriod);
			
	}
}

function decorateSlideshow_moreview() {
	var $$li = $$('#slideshow_moreview ul li');
	
	if ($$li.length > 0) {
		
		// reset UL's width
		var ul = $$('#slideshow_moreview ul')[0];
		var w = 0;
		$$li.each(function(li) {
			w += li.getWidth();
		});
		ul.setStyle({'width':w+'px'});
		
		// private variables
		var previous = $$('#slideshow_moreview a.previous')[0];
		var next = $$('#slideshow_moreview a.next')[0];
		var num = 1;
		var width = ul.down().getWidth() * num;
		var slidePeriod = 3; // seconds
		var manualSliding = false;
		
		// next slide
		function nextSlide() {
			new Effect.Move(ul, { 
				x: -width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				afterFinish: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide() {
			new Effect.Move(ul, { 
				x: width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width+'px'});
				}
			});
		}
		
		function startSliding() {
			sliding = true;
		}
		
		function stopSliding() {
			sliding = false;
		}
		
		// bind next button's onlick event
		next.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			nextSlide();
		});
		
		// bind previous button's onclick event
		previous.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			previousSlide();
		});
		
		
		// auto run slideshow
	/*	new PeriodicalExecuter(function() {
			if (!manualSliding) previousSlide();
			manualSliding = false;
		}, slidePeriod);*/
		
		
	}
}

document.observe("dom:loaded", function() {
	decorateNav();
	decorateSlideshow();
	decorateSlideshow2();
	decorateSlideshow_moreview();
});

// }}}

})();