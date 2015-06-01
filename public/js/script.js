
// Modal for contact form
new jBox('Modal', {
    width: 560,
    height: 400,
    attach: $('#js_contact_btn'),
    content: $('#contact_form')
});

// DISTRICTS FILTERS
on_change();
$('.js_select_town').on('change', on_change);

function on_change() {
	var current = $('.js_select_town').val();
	if ('null' == current) {
		$('.district').slideUp();
		return false;
	};
	$('.district').slideDown();
	var districts = $.grep(TOWNS, function (index) {
		// console.log($(this)[0].town_id);
		// console.log(current);
		return index.town_id == current;
	});
	// console.log(TOWNS);
	districts = districts[0].districts;
	var $options = [];
	$options.push($("<option value='null'>Любой район</option>"));

	for (i = 0; i<districts.length; i++) {
		$options.push($("<option value="+districts[i].district_id+">"+districts[i].district+"</option>"));
	};
	$('.js_select_district').html($options);
}