var htmlClasses=(document.documentElement.className).split(" ");
htmlClasses.push("js-on");
document.documentElement.className=htmlClasses.join(" ").replace(/^\s+|\s+$/g,"");


jQuery.noConflict();
jQuery(document).ready(function(w,m){
	var v=w("body");
	if(jQuery().revolution){
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
});

// Default Options

// {
// delay:9e3,
// startheight:500,
// startwidth:960,
// hideThumbs:200,
// thumbWidth:100,
// thumbHeight:50,
// thumbAmount:5,
// navigationType:"bullet",
// navigationArrows:"withbullet",
// navigationStyle:"round",
// navigationHAlign:"center",
// navigationVAlign:"bottom",
// navigationHOffset:0,
// navigationVOffset:20,
// soloArrowLeftHalign:"left",
// soloArrowLeftValign:"center",
// soloArrowLeftHOffset:20,
// soloArrowLeftVOffset:0,
// soloArrowRightHalign:"right",
// soloArrowRightValign:"center",
// soloArrowRightHOffset:20,
// soloArrowRightVOffset:0,
// touchenabled:"on",
// onHoverStop:"on",
// stopAtSlide:-1,
// stopAfterLoops:-1,
// hideCaptionAtLimit:0,
// hideAllCaptionAtLilmit:0,
// hideSliderAtLimit:0,
// shadow:1,
// fullWidth:"off"
//}

// Transitions type

// random
// random-standard
// boxslide
// boxfade
// slotzoom-horizontal
// slotslide-horizontal
// slotfade-horizontal
// slotzoom-vertical
// slotslide-vertical
// slotfade-vertical
// curtain-1
// curtain-2
// curtain-3
// slideleft
// slideright
// slideup
// slidedown
// fade
// flyin
// cubic
// turnoff
// 3dcurtain-horizontal
// 3dcurtain-vertical
// papercut

