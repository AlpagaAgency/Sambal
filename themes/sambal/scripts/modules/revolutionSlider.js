var v=$("body");
if(jQuery().revolution){
	var htmlClasses=(document.documentElement.className).split(" ");htmlClasses.push("js-on");document.documentElement.className=htmlClasses.join(" ").replace(/^\s+|\s+$/g,"");
	var K=v.find(".rev-slider");
	K.find(".fullwidthabnner").css({
		height:570,
		maxHeight:570
	}).revolution({
		delay:5000,
		startheight:570,
		startwidth:1020,
		navigationType:"bullet", //bullet, thumb, none, both (No Shadow in Fullwidth Version !)
		navigationArrows:"verticalcentered", //nexttobullets, verticalcentered, none
		navigationStyle:"round", //round,square,navbar, *-old
		touchenabled:"on",
		onHoverStop:"on",
		navOffsetHorizontal:0,
		navOffsetVertical:20,
		hideCaptionAtLimit:10,
		hideAllCaptionAtLilmit:10,
		hideSliderAtLimit:10,
		thumbWidth:100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
		thumbHeight:50,
		thumbAmount:3,
		hideThumbs:200,
		stopAtSlide:-1,
		stopAfterLoops:-1,
		shadow:0,
		fullWidth:"on",
		stopLoop:"on" // on == Stop loop at the last Slie, off== Loop all the time. 
	});
	K.delegate(
		".slider-control-prev, .slider-control-next",
		"click",
		function(Q){
			var P=w(this),
			O=P.closest(".rev-slider");
			Q.preventDefault();
			if (P.hasClass("slider-control-prev")){
				K.revprev()
			} else {
				K.revnext()
			}
		}	
	)
}
