$(function () {
	'use strict';
	
	$('#fileupload').fileupload({

	});

	$('#fileupload').addClass('fileupload-processing');
	var $progressBar = $('.fileupload-progress').children('section');
	$('#fileupload').bind('fileuploadstart', function (e,data) { $progressBar.fadeIn(); });
	// $('#fileupload').bind('fileuploadprocessdone', function (e,data) { $progressBar.delay(5000).fadeOut(); });
	
	$.ajax({
		url: $('#fileupload').fileupload('option', 'url'),
		dataType: 'json',
		context: $('#fileupload')[0],
		maxFileSize: 5000000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
	})
	.always(function () {
		$(this).removeClass('fileupload-processing');
	}).done(function (result) {
		$(this).fileupload('option', 'done')
			.call(this, null, {result: result});
	}).fail(function () {
		$('<span class="alert alert-error"/>')
			.text('Upload server currently unavailable - ' +
					new Date())
			.appendTo('#fileupload');
	});
});
