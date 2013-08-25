var themeName = themeName || "sambal";
var vndPath = "/themes/"+ themeName + "/components/";
var jlsConfig = {

	/* *************************************************************
	/* Utils librairies
	/* ************************************************************/
	
	zepto: vndPath + "zepto/zepto.min.js"
	,pxloader: [
		vndPath + "pxloader/PxLoader.js",
		vndPath + "pxloader/PxLoaderImage.js",
		vndPath + "pxloader/PxLoaderSound.js",
		vndPath + "pxloader/PxLoaderVideo.js"
	]
	,pathjs: [
		vndPath + "pathjs/path.min.js"
	]
	,spxloader: [
		"pxloader",
		vndPath + "pxloader/sPxLoader.js"
	]
	,leafletjs: [
		vndPath + "leafletjs/leaflet.css"
		,vndPath + "leafletjs/leaflet.js"
	]
	,skrollr: vndPath + "skrollr/skrollr.min.js"
	,skrollrMobile: [
		"skrollr"
		,vndPath + "skrollr/skrollr.mobile.min.js"
	]
	
	/* *************************************************************
	/* jQuery plugins
	/* ************************************************************/
	
	,jQuery: [
		vndPath + "jquery/jquery-1.10.2.min.js"
		,vndPath + "jquery/jquery-migrate.min.js"
	]
	,ui:[
		"jQuery","https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"
	]
	,elfinder: [
		"jQuery"
		,vndPath + "jquery.plugins/elfinder/css/smoothness/jquery-ui-1.8.13.custom.css"
		,vndPath + "jquery.plugins/elfinder/css/elfinder.css"
		,vndPath + "jquery.plugins/elfinder/js/jquery-ui-1.8.13.custom.min.js"
		,vndPath + "jquery.plugins/elfinder/js/elfinder.min.js"
	]
	,rslide: [
		"jQuery"
		,vndPath + "jquery.plugins/responsiveslides/responsiveslides.css"
		,vndPath + "jquery.plugins/responsiveslides/themes/themes.css"
		,vndPath + "jquery.plugins/responsiveslides/responsiveslides.min.js"
	]
	,"rev.slider": [
		"jQuery"
		,vndPath + "jquery.plugins/rev.slider/css/settings.css"
		,vndPath + "jquery.plugins/rev.slider/css/captions.css"
		,vndPath + "jquery.plugins/rev.slider/js/jquery.themepunch.plugins.min.js"
		,vndPath + "jquery.plugins/rev.slider/js/jquery.themepunch.revolution.min.js"
	]
	,"jquery.accordions": [
		"jQuery"
		// ,vndPath + "jquery.plugins/accordions/accordions.css"
		,vndPath + "jquery.plugins/accordions/accordions.js"
	]
	,jcarousel: [
		"jQuery"
		,vndPath + "jquery.plugins/jcarousel/lib/jquery.jcarousel.min.js"
		,vndPath + "jquery.plugins/jcarousel/skins/tango/skin.css"
	]
	,nicescroll: vndPath + "jquery.plugins/jquery-nicescroll/jquery.nicescroll.min.js"
	,sidr: vndPath + "jquery.plugins/sidr/jquery.sidr.min.js"
	,utabs: [
		"jQuery"
		// ,vndPath + "jquery.plugins/utabs/utabs-0.2.5.css"
		,vndPath + "jquery.plugins/utabs/jquery-utabs-0.2.5-min.js"
	]
	,"jquery.tooltip": [
		"jQuery"
		// ,vndPath + "jquery.plugins/tooltip/css/tooltip.min.css"
		,vndPath + "jquery.plugins/tooltip/js/tooltip.min.js"
	]
	,galleria: [
		"jQuery"
		,vndPath + "jquery.plugins/galleria/galleria-1.2.9.min.js"
		,vndPath + "jquery.plugins/galleria/themes/classic/galleria.classic.min.js"
		,vndPath + "jquery.plugins/galleria/themes/classic/galleria.classic.css"
	]
	,"jquery.uploadfile": [
		"jQuery"
		,vndPath + "jquery.plugins/jqueryuploadfile/css/style.css"
		,vndPath + "jquery.plugins/jqueryuploadfile/css/jquery.fileupload-ui.css"
		,vndPath + "jquery.plugins/jqueryuploadfile/css/blueimp-gallery.css"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/vendor/jquery.ui.widget.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/vendor/tmpl.min.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/vendor/load-image.min.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/vendor/canvas-to-blob.min.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/vendor/jquery.blueimp-gallery.min.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.iframe-transport.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-process.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-image.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-audio.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-video.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-validate.js"
		,vndPath + "jquery.plugins/jqueryuploadfile/js/jquery.fileupload-ui.js"
	]
	
	
	/* *************************************************************
	/* Icons paths
	/* ************************************************************/
	
	,ecoico: "/themes/"+themeName+"/icons/ecoico/stylesheet.css"
	,foundIcon: [
		"/themes/"+themeName+"/icons/foundation_icons_general/stylesheets/general_foundicons.css"
		,"/themes/"+themeName+"/icons/foundation_icons_general/stylesheets/general_foundicons_ie7.css"
	]
	,icomoon: "/themes/"+themeName+"/icons/icomoon/style.css"
	
};
