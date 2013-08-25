$('*[data-element=leaflet]').each(function(){
	var $this = $(this);
	var tilesLink = $this.attr('data-tiles-link') || 'http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png';
	var map = L.map($this.attr('id')).setView([parseFloat($this.attr('data-lat')), parseFloat($this.attr('data-ln'))], $this.attr('data-zoom'));
	map.touchZoom.disable();
	map.doubleClickZoom.disable();
	map.scrollWheelZoom.disable();
	// add a marker in the given location, attach some popup content to it and open the popup
	if ($this.attr('data-marker-lat') !== void 0 && $this.attr('data-marker-ln') !== void 0) {
	L.marker([parseFloat($this.attr('data-marker-lat')), parseFloat($this.attr('data-marker-ln'))]).addTo(map)
		.bindPopup($this.attr('data-marker-label')).openPopup();
	}
	
	L.tileLayer(tilesLink, {
		maxZoom: ($this.attr('data-tiles-maxzoom') || 18)
	}).addTo(map);
	L.Control.Zoom("bottomleft");
	App.vars.maps[$this.attr('id')] = map;
});