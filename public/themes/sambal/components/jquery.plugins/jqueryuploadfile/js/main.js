$(function () {
    'use strict';

    $('#fileupload').fileupload({
        //xhrFields: {withCredentials: true},
        url: 'server/php/index.php'
    });

    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

	// Load existing files:
	$('#fileupload').addClass('fileupload-processing');
	
	$('#fileupload').bind('fileuploadadd', function (e,data) {
		console.log(data);
		console.log(e);
	});
	
	$.ajax({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
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
