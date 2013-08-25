var newsletterSubscribeAction = $("#newsletter-subscribe");
var form = newsletterSubscribeAction.parents("form");
var feedbacks = form.parents("section").find(".newsletter-flash");
var fb_success = feedbacks.filter(".success");
var fb_error_user = feedbacks.filter(".error.user");
var fb_error_system = feedbacks.filter(".error.system");
feedbacks.hide();

form.on("submit", function(event) {
	event.preventDefault();
	var form = $(this);
	feedbacks.hide();
	$.ajax({
		url: form.attr("action"),
		type: form.attr("method"),
		data: form.serialize(),
		success: function(res) {
			var res = $.parseJSON(res);
			if (res.success) {
				fb_success.show();
				form.hide();
			} else {
				fb_error_user.show();
			}
		},
		error: function(res) {
			fb_error_system.show();
		}
	});
});
