ljs.load("jQuery",function(){
	$(document).ready(function(){
		// key shortcut fn for going to the administration panel
		App.goToAdmin();
		// do it if system not found
		App.systemNotFound();		
		// get Components
		App.getComponents();
	});
});

var App =  {
	transformation: function(type,parent,obj,ajustment) {
		var ajustment = ajustment || 0;
		App[type+'Fn'](parent,obj,ajustment);
		// resize function
		$(window).resize(function(){
			App.vars.resizing = true;
			setTimeout(function(){
				if (!App.vars.resizing) {
					App[type+'Fn'](parent,obj,ajustment);
				}
			}, 100);
			App.vars.resizing = false;
		});
	},
	alignFn: function(parent,obj,ajustment){
		var h = ($(parent).height()-$(obj).height())/2;
		$(obj).css('margin-top',(h<20?20:h)+ajustment);
	},
	adaptFn: function(parent,obj,ajustment){
		var h = $(parent).height();
		// block height
		if (App.helpers.isUndefined(App.vars[obj])) $(obj).css('height',h<App.vars[obj]?App.vars[obj]:h+ajustment);
		else $(obj).css('height',h+ajustment);
	},
	helpers: {
		isUndefined: function(obj) {
			return obj === void 0;
		}
	},
	vars: {
		resizing: false,
		obj: {
		},
		maps: {
		}
	},
	goToAdmin: function() {
		$(window).on("keypress", function(event) {
			if (event.which == 178) {
				window.location.href = "/admin";
				return false;
			}
		});
	},
	systemNotFound: function() {
		if ($('#page-system-404').length) {
			App.transformation("align",window,"#page-system-404 > section");
		}
	},
	getComponents: function() {
		/* ******************** */
		// responsive Menu
		/* ******************** */
		ljs.load('sidr','icomoon',function(){
			$('#navigation').before('<div id="sidr-menu"><a class="responsive-menu-icon" href="#sidr-main"><span class="icon-list-2">&nbsp;</span></a></div>');
			$('.responsive-menu-icon').sidr({
				name: 'sidr-main',
				source: '#navigation nav',
				side: 'right'
			});
		});
		/* ******************** */
		// revolution Slider
		/* ******************** */
		if ($('*[data-element=revSlider]').length) { ljs.load("rev.slider", '/themes/'+themeName+'/scripts/modules/revolutionSlider.js'); }
		/* ******************** */
		// Responsive Slider
		/* ******************** */
		if ($('.rslides').length) { ljs.load('rslide','/themes/'+themeName+'/scripts/modules/responsiveSlides.js'); }
		/* ******************** */
		// Tooltip
		/* ******************** */
		if ($('*[data-element=tooltip]').length) {
			ljs.load("jquery.tooltip", function() {
				$('body').tooltip({
					selector: "*[data-element=tooltip]"
				});
			});
		}
		/* ******************** */
		// Utabs
		/* ******************** */
		if ($('*[data-element=utabs]').length) {
			ljs.load("utabs",function(){
				$("*[data-element=utabs]").uTabs();
			});
		}
		/* ******************** */
		// Accordions
		/* ******************** */
		if ($('*[data-element=accordion]').length) {
			ljs.load("jquery.accordions");
		}
		/* ******************** */
		// Leaflet
		/* ******************** */
		if ($('*[data-element=leaflet]').length) { ljs.load('leafletjs','/themes/'+themeName+'/scripts/modules/leaflet.js'); }
		/* ******************** */
		// MailChimp
		/* ******************** */
		if ($('*[data-element=mailChimp]').length) ljs.load('/themes/'+themeName+'/scripts/modules/mailchimp.js');
		/* ******************** */
		// Upload Files
		/* ******************** */
		if ($('*[data-element=fileupload]').length) { ljs.load('jquery.uploadfile', '/themes/'+themeName+'/scripts/modules/jqueryuploadfile.js'); }
	},
	pages: {
		
	}
};