// sliders
// area
$('.area_slider').noUiSlider({
	start: [70, 800],
	connect: true,
	orientation: "horizontal",
	range: {
		'min': 70,
		'max': 800
	},
	format: wNumb({
		decimals: 0
	})
});
$('.area_slider').Link('lower').to($('#area_from'));
$('.area_slider').Link('upper').to($('#area_to'));
// yard_area
$('.yard_area_slider').noUiSlider({
	start: [1, 200],
	connect: true,
	orientation: "horizontal",
	range: {
		'min': 1,
		'max': 200
	},
	format: wNumb({
		decimals: 0
	})
});
$('.yard_area_slider').Link('lower').to($('#yard_area_from'));
$('.yard_area_slider').Link('upper').to($('#yard_area_to'));
// price
$('.price_slider').noUiSlider({
	start: [400000, 800000000],
	connect: true,
	orientation: "horizontal",
	range: {
		'min': 400000,
		'max': 800000000
	},
	format: wNumb({
		decimals: 0
	})
});
$('.price_slider').Link('lower').to($('#price_from'));
$('.price_slider').Link('upper').to($('#price_to'));
// rooms
$('.rooms_slider').noUiSlider({
	start: [1, 10],
	connect: true,
	orientation: "horizontal",
	range: {
		'min': 1,
		'max': 10
	},
	format: wNumb({
		decimals: 0
	})
});
$('.rooms_slider').Link('lower').to($('#rooms_from'));
$('.rooms_slider').Link('upper').to($('#rooms_to'));
// sea_dist
$('.sea_dist_slider').noUiSlider({
	start: [1, 50000],
	connect: true,
	orientation: "horizontal",
	range: {
		'min': 1,
		'max': 50000
	},
	format: wNumb({
		decimals: 0
	})
});
$('.sea_dist_slider').Link('lower').to($('#sea_dist_from'));
$('.sea_dist_slider').Link('upper').to($('#sea_dist_to'));


// Modal for contact form
new jBox('Modal', {
    width: 560,
    height: 400,
    attach: $('#js_contact_btn'),
    content: $('#contact_form')
});