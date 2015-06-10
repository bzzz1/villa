// SEND CONTACT FORM
$('.js_send_contact_form').on('click', function(evt) {
	evt.preventDefault();
		$form = $(this).closest('form');
		$form.trigger('submit');
	});
// Modal for contact form
new jBox('Modal', {
    width: 560,
    height: 400,
    attach: $('#js_contact_btn'),
    content: $('#contact_form')
});



if ('estates'==ROUTE) {
	/*------------------------------------------------
	| DISTRICTS FILTERS
	------------------------------------------------*/
	on_change();
	$('.js_select_town').on('change', on_change);

	function on_change() {
		var current = $('.js_select_town').val();
		if ('' == current) {
			$('.district').slideUp();
			return false;
		};
		$('.district').slideDown();
		var districts = $.grep(TOWNS, function (index) {
			return index.town_id == current;
		});
		if (districts[0] !== undefined) {
			districts = districts[0].districts;
		}
		var $options = [];
		$options.push($("<option value=''>Любой район</option>"));

		for (i = 0; i<districts.length; i++) {
			$options.push($("<option value="+districts[i].district_id+">"+districts[i].district+"</option>"));
		};
		$('.js_select_district').html($options);
	}
	/*------------------------------------------------
	| DISTRICTS END
	------------------------------------------------*/
	/*------------------------------------------------
	| FILTERS
	------------------------------------------------*/
	// on load touch filter
	var $filters = $('.js_filters');
	touch_filter();
	$('.js_filter_change').on('change', touch_filter); 
	$('.js_filter_click').on('click', touch_filter); 

	function check_empty(element) {
		return element = element ? element : '';
	}

	function touch_filter(e) {
		var commercial 		= $filters.find('.js_commercial.active').data('commercial');
		var type 			= $filters.find('.js_select_type').val();
		var town_id 		= $filters.find('.js_select_town').val();
		var district_id 	= $filters.find('.js_select_district').val();
		var period 			= $filters.find('.js_select_period').val();
		var house_area_from = $filters.find('.js_range_house_area_from').val();
		var house_area_to 	= $filters.find('.js_range_house_area_to').val();
		var yard_area_from 	= $filters.find('.js_range_yard_area_from').val();
		var yard_area_to 	= $filters.find('.js_range_yard_area_to').val();
		var price_from 		= $filters.find('.js_range_price_from').val();
		var price_to 		= $filters.find('.js_range_price_to').val();
		var rooms_from 		= $filters.find('.js_range_rooms_from').val();
		var rooms_to 		= $filters.find('.js_range_rooms_to').val();
		var sea_dist_from 	= $filters.find('.js_range_sea_dist_from').val();
		var sea_dist_to 	= $filters.find('.js_range_sea_dist_to').val();

		commercial			= check_empty(commercial);
		type				= check_empty(type);
		town_id				= check_empty(town_id);
		district_id			= check_empty(district_id);
		period				= check_empty(period);
		house_area_from		= check_empty(house_area_from);
		house_area_to		= check_empty(house_area_to);
		yard_area_from		= check_empty(yard_area_from);
		yard_area_to		= check_empty(yard_area_to);
		price_from			= check_empty(price_from);
		price_to			= check_empty(price_to);
		rooms_from			= check_empty(rooms_from);
		rooms_to			= check_empty(rooms_to);
		sea_dist_from		= check_empty(sea_dist_from);
		sea_dist_to			= check_empty(sea_dist_to);

		var filters =	'commercial='	+commercial+
						'&type='		+type+
						'&town_id='		+town_id+
						'&district_id='	+district_id+
						'&period='		+period+
						'&house_area='	+house_area_from+';'+house_area_to+
						'&yard_area='	+yard_area_from+';'+yard_area_to+
						'&price='		+price_from+';'+price_to+
						'&rooms='		+rooms_from+';'+rooms_to+
						'&sea_dist='	+sea_dist_from+';'+sea_dist_to;
		// ajax call					
		filter(filters);
	};

	// var $area_slider 		= $(".area_slider");
	// var $yard_area_slider 	= $(".yard_area_slider");
	// var $price_slider 		= $(".price_slider");
	// var $rooms_slider 		= $(".rooms_slider");
	// var $sea_dist_slider 	= $("sea_dist_slider")

	// function reset_extremes(data) {
	// 	// var EXTREMES = [];

	// 	$area_slider.noUiSlider({
	// 		range: {
	// 			"min": EXTREMES.house_area_min,
	// 			"max": EXTREMES.house_area_max
	// 		},
	// 	}, true);
	// 	$area_slider.Link("lower").to($("#area_from"));
	// 	$area_slider.Link("upper").to($("#area_to"));
	// 	$yard_area_slider.noUiSlider({
	// 		range: {
	// 			"min": EXTREMES.yard_area_min,
	// 			"max": EXTREMES.yard_area_max
	// 		},
	// 	}, true);
	// 	$yard_area_slider.Link("lower").to($("#yard_area_from"));
	// 	$yard_area_slider.Link("upper").to($("#yard_area_to"));
		
	// 	$price_slider.noUiSlider({
	// 		range: {
	// 			"min": EXTREMES.price_min,
	// 			"max": EXTREMES.price_max
	// 		},
	// 	}, true);
	// 	$price_slider.Link("lower").to($("#price_from"));
	// 	$price_slider.Link("upper").to($("#price_to"));

	// 	$rooms_slider.noUiSlider({
	// 		range: {
	// 			"min": EXTREMES.rooms_min,
	// 			"max": EXTREMES.rooms_max
	// 		},
	// 	}, true);
	// 	$rooms_slider.Link("lower").to($("#rooms_from"));
	// 	$rooms_slider.Link("upper").to($("#rooms_to"));

	// 	$sea_dist_slider.noUiSlider({
	// 		range: {
	// 			"min": EXTREMES.sea_dist_min,
	// 			"max": EXTREMES.sea_dist_max
	// 		},
	// 	}, true);
	// 	$sea_dist_slider.Link("lower").to($("#sea_dist_from"));
	// 	$sea_dist_slider.Link("upper").to($("#sea_dist_to"));
	// }
}

// TEMPLATE
// var	filters = '';
function filter(filters) {
	$.ajax({
		url: URL_AJAX_ESTATES+'/'+filters+'?take=10&page=1&sort=title&order=asc',
		type: 'GET',
		dataType: "json",
		// data: {
		// 	'category' : category
		// }, 
		success: function(data) {
			estates_processing(data);
			// reset_extremes(data);
		},
		error: function(data, error, error_details){
			console.log("err:", error, error_details);
			console.log(data);
			console.log(data.responseText);
		}
	});
};

function estates_processing (data) {
	var estate_html = '';
	var $catalog_blocks = $('.catalog_blocks');
	$catalog_blocks.html('');

	for (var i = 0; i < data.length; i++) {
		var estate = data[i];
		var src = URL_IMG+'/'+estate.image;
		var	href = URL_ESTATE+'/'+translit(estate.title)+'/'+estate.estate_id;
		estate_html += '<div class="one_item"> <div class="img">';
		
		if (estate.image !== undefined) {
			estate_html += 	'<a href="'+href+'"> \
							<img src = "'+src+'" alt="'+estate.title+'", class="item_img"> \
						</a>';
		}
		else  {
			estate_html += 	'<a href="'+href+'"> \
							<img src="img/photos/estates/alien.png" alt="'+estate.title+'", class="item_img"> \
						</a>';
		};

			estate_html += '<div class="add_to"> <a> Добавить в избранные <i class="fa fa-heart-o fa-2x"></i></a></div><div class="added_to"><a>Удалить из избранного<i class="fa fa-heart fa-2x"></i></a></div></div><div class="short_title"><h2 class="item_title"><a href="'+href+'">'+estate.title+'</a></h2></div><div class="short_descr"><div class="item_descr"><table><tbody> <tr> \ <td>Площадь</td> \ <td>'+estate.house_area+' м<sup>2</sup></td> \ </tr> \ <tr> \ <td>Площадь участка</td> \ <td>'+estate.yard_area+' соток</td> \ </tr> \ <tr> \ <td>Коллическтво комнат</td> \ <td>'+estate.rooms+'</td> \ </tr> \ <tr> \ <td>Удаленность от моря</td> \ <td>'+estate.sea_dist+' м.</td> \ </tr>\ <tr>\ <td>Стоимость</td>\ <td>'+estate.price+' рублей</td>\ </tr>\ </tbody>           \ </table> \ </div> \ <div class="item_descr full"> \ <table> \ <tbody> \ <tr> \ <td>Площадь</td> \ <td>'+estate.house_area+' м<sup>2</sup></td> \ </tr> \ <tr> \ <td>Площадь участка</td> \ <td>'+estate.yard_area+' соток</td> \ </tr> \ <tr> \ <td>Коллическтво комнат</td> \ <td>'+estate.rooms+'</td> \ </tr> \ <tr> \ <td>Удаленность от моря</td> \ <td>'+estate.sea_dist+' м.</td> \ </tr> \ <tr> \ <td>Стоимость</td> \ <td>'+estate.price+' рублей</td> \ </tr> \ <tr> \ <td>Тип аренды</td> \ <td>'+estate.period+'</td> \ </tr> \ <tr> \ <td>Адресс</td> \ <td>'+estate.address+'</td> \ </tr> \ </tbody> \ </table> \ <a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>	 \ </div> \ <a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>';
			$catalog_blocks.html(estate_html);

	};
}

// FILTERS BUTTONS
$('.js_filter_click').on('click', function () {
	$('.js_filter_click').removeClass('active');
	// $('.btn-group').find('.active').removeClass('active');
	$(this).addClass('active');

});




/*------------------------------------------------
| FILTER DEPENDENCIES
------------------------------------------------*/
var ranges = [];

var $yard_area_parent 	= $('.yard_area').parent();
var $house_area_parent 	= $('.house_area').parent();
var $rooms_parent 		= $('.rooms').parent();
var $period_parent 		= $('.period').parent();

var $yard_area 		= $('.yard_area').detach();
var $house_area 	= $('.house_area');
var $rooms 			= $('.rooms');
var $period 		= $('.period').detach();

var $price 			= $('.price');
var $sea_dist 		= $('.sea_dist');


ranges.push('house_area', 'price', 'rooms', 'sea_dist');

// 'house_area'		=> 'range', // if (in_array($type, ['flat', 'cottage', 'commercial']))
// 'rooms'			=> 'range', // if (in_array($type, ['flat', 'cottage', 'commercial']))
// 'yard_area'		=> 'range', // if (in_array($type, ['cottage', 'parcel', 'commercial']))
// 'period'			=> 'type',  // if (in_array($commercial, ['rent']))

$('.js_commercial').on('click', function () {
	var commercial = $('.js_commercial.active').data('commercial');

	if ('rent' == commercial) {
		$period_parent.append($period);
		$('.period').slideDown();
		$('.type').css({
			'float' : 'left',
			'margin-right' : '0'
		});
	} else if ('sale' == commercial) {
		$period = $('.period').detach();
		$('.type').css({
			'float' : 'right',
			'margin-right' : '229px'
		});
	}

	draw_ranges($.unique(ranges));
});

$('.js_select_type').on('change', function () {
	var type = $('.js_select_type').val();

	if ('flat' == type || 'cottage' == type || 'commercial' == type) {
		ranges.push('house_area');
		ranges.push('rooms');
	} else if ('parcel' == type) {
		$house_area = $('.house_area').detach();
		$rooms 		= $('.rooms').detach();
		ranges = pop_by_value(ranges, 'house_area');
		ranges = pop_by_value(ranges, 'rooms');
	// 	$house_area_parent.append($house_area);
	// 	$yard_area.css('margin-left', '7.5%');
	// 	$('.sea_dist').css('margin-right', '16%');
	// 	$rooms_parent.append($rooms);
	// } else if ('parcel' == type) {
	// 	$house_area = $('.house_area').detach();
	// 	$rooms 		= $('.rooms').detach();
	// 	$yard_area.css('margin-left', '0px');
	// 	$('.sea_dist').css('margin-right', '34%');
	}

	if ('parcel' == type || 'cottage' == type || 'commercial' == type) {
		ranges.push('yard_area');
	} else if ('flat' == type) {
		$yard_area = $('.yard_area').detach();
		ranges = pop_by_value(ranges, 'yard_area');
	}

	draw_ranges($.unique(ranges));
})

function pop_by_value(array, value) {
	var index = array.indexOf(value);
	if (index > -1) {
		array.splice(index, 1);
	}
	return array;
}

function draw_ranges(ranges) {
	$('.draggers').html('');

	for (var i=0; i<ranges.length; i++) {
		range = ranges[i];
		$range = window['$'+range];
		$('.draggers').append($range);
	}
}
/*------------------------------------------------
| END FILTERS DEPENDENCIES
------------------------------------------------*/



/*------------------------------------------------
| MAPS
------------------------------------------------*/
$('.js_open_map').on('click', function(){
	if ($('.js_map_canvas').css('display') == 'none') {
		$('.js_map_canvas').slideDown(700);
	}
	else{
		$('.js_map_canvas').slideUp(700);
	};
	// $('.js_map_canvas').slideUp();
});
