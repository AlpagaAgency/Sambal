var accordion = $('*[data-element=accordion]').addClass("cAccordion");
accordion = accordion.children();
accordion.each(function(){
	var $this = $(this);
	var section = $(document.createElement('section'));
	section.html($this.attr('data-label'));
	section.addClass('tab-header');
	$this.addClass("tab-content");
	$this.before(section);
	var next = section.next();
	section.on('click',function(){
		if (next.is(':hidden')) {
			$('.tab-header').removeClass('current');
			accordion.slideUp();
			next.slideDown();
			section.addClass('current');
		}
	});
	if ($this.attr('data-opened') !== undefined && $this.attr('data-opened') == "true") {
		$this.prev('.tab-header').trigger('click');
		next.slideDown();
		section.addClass('current');
	}
});
accordion.hide();
