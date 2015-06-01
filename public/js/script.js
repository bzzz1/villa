
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

/*------------------------------------------------
| FILTER
------------------------------------------------*/
$('.js_filter').on('change', function() {
	var $form = $('.js_filters_form');
	var base_url = $form.prop('action');

	var town_id 		= $form.find('.js_select_town').val();
	var district_id 	= $form.find('.js_select_district').val();
	var type 			= $form.find('.js_select_type').val();
	var period 			= $form.find('.js_select_period').val();
	var house_area_from = $form.find('.js_select_house_area_from').val();
	var house_area_to 	= $form.find('.js_select_house_area_to').val();
	var yard_area_from 	= $form.find('.js_select_yard_area_from').val();
	var yard_area_to 	= $form.find('.js_select_yard_area_to').val();
	var price_from 		= $form.find('.js_select_price_from').val();
	var price_to 		= $form.find('.js_select_price_to').val();
	var rooms_from 		= $form.find('.js_select_rooms_from').val();
	var rooms_to 		= $form.find('.js_select_rooms_to').val();
	var sea_dist_from 	= $form.find('.js_select_sea_dist_from').val();
	var sea_dist_to 	= $form.find('.js_select_sea_dist_to').val();

	var url = base_url+ '&town_id='+town_id+
						'&district_id='+district_id+
						'&type='+type+
						'&period='+period+
						'&house_area='+house_area_from+';'+house_area_to+
						'&yard_area='+yard_area_from+';'+yard_area_to+
						'&price='+price_from+';'+price_to+
						'&rooms='+rooms_from+';'+rooms_to+
						'&sea_dist='+sea_dist_from+';'+sea_dist_to;

	$form.prop('action', url);
	$form.submit();
});