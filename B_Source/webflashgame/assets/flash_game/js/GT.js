/*# Metadata ################################### Header v.2
# $URL: http://gt-nas-1/svn/gamebase.frontend/branches/1.21/xsl_gamebase/_gametwist_2010/data/js/GT.Walkthrough.js $
# $Rev: 10379 $
# $Date: 2012-11-07 10:57:16 +0100 (Mi, 07 Nov 2012) $
# $Author: ibogo $
### TOC ###################################################
# =GT.Walkthrough
### Description ###########################################
#
#########################################################*/

/*
=GT.Walkthrough
*/
(function ($) {
this.GT = this.GT || {};
this.GT.Walkthrough = this.GT.Walkthrough || new Class({
	Implements: [Options],
	options: {
		userID: 0, 
		checkUnasked: true, 
		opener: '', 
		showUnchecked: false,
		wtCloseBtn_gtt: 'close'
	},
	initialize: function (options) {
		this.setOptions(options);
		this.body = $(document.body);
		this.frameOverlay;
		this.mask;
		/*
		var now = new Date();
		var endAutoOverlay = new Date("September 24, 2010 20:00:00");
		
		if (this.options.userID != 0 && this.options.userID < 14566967 && endAutoOverlay > now) {
			this.checkCookies();
		}
		*/
		
		if (this.options.opener != '') {
			this.options.opener.addEvent('click', function(e) {
				this.createOverlay();

			}.bind(this));
		} else if(this.options.showUnchecked) {
			this.createOverlay();
		}
	}, 
	checkCookies: function() {
		var wtCookie = new Hash.Cookie('showWalkthrough', {duration:365});

		if ('object' === $type(wtCookie) && !$chk(wtCookie.get('displayed')) && this.options.checkUnasked == true) {
			var scrollToTop = new Fx.Scroll(this.body);
			scrollToTop.toTop();
			this.createOverlay();
			this.setCookies();
		} else {
			//GT.console.log('I am having a cookie');	
		}
	}, 
	setCookies: function () {
		var cookieObject = {
			displayed: 1
		};
		Cookie.write('showWalkthrough', JSON.encode(cookieObject), {
			path: '/',
			duration: 365
		});
	},
	createOverlay: function () {
		
		var walkthroughContainer = new Element ('div', {
			id: 'walkthroughContainer', 
			styles: {
				position: 'absolute',
				top: '50%',
				left: '50%',
				width: '820px',
				height: '470px',
				marginLeft: '-410px',
				marginTop: '-248px',
				zIndex: 1000
			}
		});
		
		var closeBtn = new Element ('div', {
			id: 'wtCloseBtn'
		});
		var closeBtnLink = new Element ('a', {
			'data-gtt': this.options.wtCloseBtn_gtt
		});
		new GT.Tips(closeBtnLink);
		
		closeBtnLink.inject(closeBtn);

		var walkthroughIframe = new IFrame ({
			src: '/display.asp?page=walkthrough&xpf=1&t='+new Date().getTime(),
			frameborder: 0,
			id: 'walkthroughIframe',
			allowtransparency: 'true',
			styles: {
				background: 'transparent',
				width: '100%',
				height: '100%'
			},
			events: {
				load: function () {
					this.showMask(showWalkthroughMask.element, walkthroughContainer);
					/*Important for IE7 and rtl*/
					if(document.getElement('.rtl')) {
						$('walkthroughContainer').setStyles({
							marginRight: '-410px',
							right: '50%',
							marginLeft: 'auto',
							left: 'auto'
						});
					}
				}.bind(this)
			}
		});
		
		walkthroughContainer.setStyle('opacity', 0);
		
		walkthroughIframe.inject(walkthroughContainer);
		closeBtn.inject(walkthroughContainer);
		
		this.body.grab(walkthroughContainer);

		var showWalkthroughMask = new Mask(this.body,{
			hideOnClick: false, 
			id: 'showWalkthroughMask',
			useIframeShim: true,
			style: {
				position: 'absolute',
				zIndex: 999,
				background: '#fff',
				display: 'block',
				opacity: 0
			}, 
			onClick: function () {
				this.hideFrame(this.mask, walkthroughContainer);
			}.bind(this)
		});
		showWalkthroughMask.show();
		
		this.frameOverlay = walkthroughContainer;
		this.mask = showWalkthroughMask.element;
	},
	showMask: function (mask, frame) {
		mask.setStyle('width', '100%');
		var maskFx = new Fx.Tween(mask, {
			duration: 'normal', 
			onComplete: function () {
				if(frame) {
					this.showFrame(frame);	
				}		
			}.bind(this)
		});
		maskFx.start('opacity', 0.7);
	},
	showFrame: function(frame) {
		var updateFrameFx = new Fx.Tween(frame, {
			duration: 'normal', 
			onComplete: function () {
				this.setCloseBtnEvent();
			}.bind(this)
		});
		updateFrameFx.start('opacity', 1);
	}, 
	setCloseBtnEvent: function () {
		var closeBtn = $('wtCloseBtn');
		if(closeBtn){
			closeBtn.addEvent('click', function(e) {
				e.preventDefault();
				this.hideFrame(this.mask, this.frameOverlay);
			}.bind(this));
		}
	},	
	hideFrame: function(mask, frame) {
		var updateFrameFx = new Fx.Tween(frame, {
			duration: 'normal',
			onComplete: function () {
				if(mask) {
					this.hideMask(mask, frame);
				}
			}.bind(this)
		});
		updateFrameFx.start('opacity', 0);
	}, 
	hideMask: function (mask, frame) {
		var maskFx = new Fx.Tween(mask, {
			duration: 'normal', 
			onComplete: function () {
				mask.destroy();
				frame.dispose();
				if('element' === $type($$('.iframeShim')[0])){
					$$('.iframeShim')[0].dispose();
				}
			}.bind(this)
		});
		maskFx.start('opacity', 0);
	}
});
})(document.id);