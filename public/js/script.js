HTML = {
	run : function() {
		this.$yard_area_parent 	= $('.yard_area').parent();
		this.$house_area_parent = $('.house_area').parent();
		this.$rooms_parent 		= $('.rooms').parent();
		this.$period_parent 	= $('.period').parent();

		this.$yard_area 	= $('.yard_area');
		this.$house_area 	= $('.house_area');
		this.$rooms 		= $('.rooms');
		this.$period 		= $('.period');

		this.$price 		= $('.price');
		this.$sea_dist 		= $('.sea_dist');
	}
}

HTML.run();

Filter = {
	sending : false,
	run : function () {
		$('.js_filter_change').on('change', Filter.send); 
	},
	collect : function () {
		var $filters = $('.js_filters');

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

		commercial			= Help.check_empty(commercial);
		type				= Help.check_empty(type);
		town_id				= Help.check_empty(town_id);
		district_id			= Help.check_empty(district_id);
		period				= Help.check_empty(period);
		house_area_from		= Help.check_empty(house_area_from);
		house_area_to		= Help.check_empty(house_area_to);
		yard_area_from		= Help.check_empty(yard_area_from);
		yard_area_to		= Help.check_empty(yard_area_to);
		price_from			= Help.check_empty(price_from);
		price_to			= Help.check_empty(price_to);
		rooms_from			= Help.check_empty(rooms_from);
		rooms_to			= Help.check_empty(rooms_to);
		sea_dist_from		= Help.check_empty(sea_dist_from);
		sea_dist_to			= Help.check_empty(sea_dist_to);

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
		Filter.filters = filters;
	},
	send : function () {
		Filter.collect();
		var filters = Filter.filters;
		var url = URL_AJAX_ESTATES+'/'+filters+'?take=10&page=1&sort=title&order=asc';

		if (false == Filter.sending) {
			Filter.sending = true;
			Help.ajax('GET', url, {}, Filter.callback);
		}
	},
	callback : function (data) {
		Estate.process(data);
		Favorites.run();
		Filter.sending = false;
	},
}

Estate = {
	process : function (data) {
		var estate_html = '';
		var $catalog_blocks = $('.catalog_blocks');
		$catalog_blocks.html('');

		for (var i = 0; i < data.length; i++) {
			var estate = data[i];
			var src = URL_IMG+'/'+estate.image;
			var	href = URL_ESTATE+'/'+translit(estate.title)+'/'+estate.estate_id;
			var href_admin = URL_ESTATE_ADMIN+'/'+estate.estate_id;
			var href_delete = URL_ESTATE_ADMIN_DELETE+'/'+estate.estate_id;
			estate_html += '<div class="one_item" data-id="'+estate.estate_id+'"> <div class="img">';
			if (ROUTE == 'admin_estates') {
				if (estate.image !== undefined) {
					estate_html += 	'<a href="'+href_admin+'"> \
									<img src = "'+'/'+src+'" alt="'+estate.title+'", class="item_img"> \
								</a>';
				}
				else  {
					estate_html += 	'<a href="'+href_admin+'"> \
									<img src="/img/photos/estates/alien.png" alt="'+estate.title+'", class="item_img"> \
								</a>';
				};
			} else {
				if (estate.image !== undefined) {
					estate_html += 	'<a href="'+href+'"> \
									<img src = "'+src+'" alt="'+estate.title+'", class="item_img"> \
								</a>';
				}
				else  {
					estate_html += 	'<a href="'+href+'"> \
									<img src="/img/photos/estates/alien.png" alt="'+estate.title+'", class="item_img"> \
								</a>';
				};
				estate_html += '<div class="add_to js_select"> <a> Добавить в избранные <i class="fa fa-heart-o fa-2x"></i></a></div><div class="added_to js_select"><a>Удалить из избранного<i class="fa fa-heart fa-2x"></i></a></div>';
			};
			estate_html += '</div>';
			if (ROUTE == 'admin_estates') {
				estate_html += '<div class="short_title"><h2 class="item_title"><a href="'+href_admin+'">'+estate.title+'</a></h2></div>';
			} else {
				estate_html += '<div class="short_title"><h2 class="item_title"><a href="'+href+'">'+estate.title+'</a></h2></div>';
			};
			estate_html +='<div class="short_descr"><div class="item_descr"><table><tbody> <tr> \ <td>Площадь</td> \ <td class="dep_house_area">'+estate.house_area+' м<sup>2</sup></td> \ </tr> \ <tr> \ <td>Площадь участка</td> \ <td class="dep_yard_area">'+estate.yard_area+' соток</td> \ </tr> \ <tr> \ <td>Количество комнат</td> \ <td class="dep_rooms">'+estate.rooms+'</td> \ </tr> \ <tr> \ <td>Удаленность от моря</td> \ <td class="dep_sea_dist">'+estate.sea_dist+' м.</td> \ </tr>\ <tr>\ <td>Стоимость</td>\ <td class="dep_price">'+estate.price+' рублей</td>\ </tr>\ </tbody>           \ </table> \ </div> \ <div class="item_descr full"> \ <table> \ <tbody> \ <tr> \ <td>Площадь</td> \ <td class="dep_house_area">'+estate.house_area+' м<sup>2</sup></td> \ </tr> \ <tr> \ <td>Площадь участка</td> \ <td class="dep_yard_area">'+estate.yard_area+' соток</td> \ </tr> \ <tr> \ <td>Количество комнат</td> \ <td class="dep_rooms">'+estate.rooms+'</td> \ </tr> \ <tr> \ <td>Удаленность от моря</td> \ <td class="dep_sea_dist">'+estate.sea_dist+' м.</td> \ </tr> \ <tr> \ <td>Стоимость</td> \ <td class="dep_price">'+estate.price+' рублей</td> \ </tr> \ <tr> \ <td>Тип аренды</td>';
			if (estate.period == 'daily') {
				estate_html += '<td class="dep_period">посуточно</td></tr>';
			} else if (estate.period == 'hourly') {
				estate_html += '<td class="dep_period">почасово</td></tr>';
			} else if (estate.period == 'montly') {
				estate_html += '<td class="dep_period">помесячно</td></tr>';
			};
			estate_html += '<tr> \ <td>Адрес</td> \ <td class="dep_address">'+estate.address+'</td> \ </tr> \ </tbody> \ </table>'; 
			if (ROUTE == 'admin_estates') {
				estate_html += '<a class="btn more_btn" href="'+href_admin+'">Изменить</a><form  class="btn more_btn" href="'+href_delete+'">Удалить</a> \ </div>	 \ </div> \ <a class="btn more_btn" href="'+href_admin+'">Изменить</a><a class="btn more_btn" href="'+href_delete+'">Удалить</a> \ </div>';
			} else {
				estate_html += '<a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>	 \ </div> \ <a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>';
			};
			$catalog_blocks.html(estate_html);

			// var dep = ['house_area', 'yard_area', 'rooms', 'price', 'adress', 'sea_dist', 'period' ];

			for (field in estate) {
				if (estate[field] == null) {
					$('.dep_'+field).parent().hide();
					console.log($('.dep_'+field).parent());
				};
			};
			// for (var j = 0; j < dep.length; j++) {
			// 	var elem = dep[j];
			// 	if (estate[elem] == null) {
			// 		$('.dep_'+elem).parent().hide();
			// 	};
			// }
			// console.log(estate, elem);
		};
	}
}

Favorites = {
	run : function () {
		$('.js_select').on('click', function() {
			var estate_id = $(this).closest('.one_item').data('id');
			var url = URL_AJAX_SELECT+'/'+estate_id;
			Help.ajax('POST', url, {}, function(){
				$(this).parent().find('.js_select').show();
				$(this).hide();
			});
		});
	}
}

Town = {
	run : function () {
		this.change();
		$('.js_select_town').on('change', this.change);
	},
	change : function () {
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
}

Dependencies = {
	commertial_change : function () {
		// !!!!!!!!!!!!! FUCK !!!!!!!!!!!!!!!!!! REFACTOR NEEDED !!!!!!!!
		$('.js_filter_click').removeClass('active');
		$(this).addClass('active');
		// !!!!!!! NEED IT MORE THAN LIFE !!!!!!!!! FUCK YEAH !!!!!!!!!!

		var commercial = $('.js_commercial.active').data('commercial');
		if ('rent' == commercial) {
			HTML.$period_parent.append(HTML.$period);
			$('.period').slideDown();
			$('.type').css({
				'float' : 'left',
				'margin-right' : '0'
			});
			$('.select_type').css('margin-left', '20px');
		} else if ('sale' == commercial) {
			if ($('.period').length) {
				HTML.$period.detach();
			}
			$('.type').css({
				'float' : 'right',
				'margin-right' : '181px'
			});
			$('.select_type').css('margin-left', '65px');
		}

		Ranges.draw();
		Filter.send();
	},
	type_change : function () {
		var type = $('.js_select_type').val();

		if ('flat' == type || 'cottage' == type || 'commercial' == type) {
			Ranges.items.push('house_area');
			Ranges.items.push('rooms');
		} else if ('parcel' == type) {
			HTML.$house_area.detach();
			HTML.$rooms.detach();
			ranges = Help.pop_by_value(Ranges.items, 'house_area');
			ranges = Help.pop_by_value(Ranges.items, 'rooms');
		}

		if ('parcel' == type || 'cottage' == type || 'commercial' == type) {
			Ranges.items.push('yard_area');
		} else if ('flat' == type) {
			HTML.$yard_area = $('.yard_area').detach();
			ranges = Help.pop_by_value(Ranges.items, 'yard_area');
		}

		Ranges.draw();
	}
}

DependenciesAdmin = {
	run : function () {
		$('#commercial').on('change', function() {
			var commercial = $(this).val();
			if ('sale'==commercial) {
				$('.js_period').slideUp();
				$('.js_period').attr('form', 'other');
			} else {
				$('.js_period').slideDown();
				$('.js_period').removeAttr('form');
			}
			if ('rent'==commercial) {
				$('.js_period').css('display', 'block');
			} else {
				$('.js_period').css('display', 'none');
			}
		});

		$('#type').on('change', function() {
			var type = $(this).val();
			if ('flat'==type) {
				$('.js_yard_area').hide();
				$('.js_yard_area').attr('form', 'other');
			}
			else if ('parcel'==type) {
				$('.js_house_area').hide();
				$('.js_rooms').hide();
				$('.js_house_area').attr('form', 'other');
				$('.js_rooms').attr('form', 'other');
			}
			else {
				$('.js_yard_area').slideDown();
				$('.js_house_area').slideDown();
				$('.js_rooms').slideDown();
				$('.js_yard_area').removeAttr('form');
				$('.js_yard_area input').removeAttr('required');
				$('.js_rooms').removeAttr('form');
				$('.js_house_area').removeAttr('form');
			}
		});
	}
}

DependenciesAdmin.run();

Ranges = {
	boot : function () {
		HTML.$yard_area.detach();
		HTML.$period.detach();

		Ranges.items = [];
		Ranges.items.push('house_area', 'price', 'rooms', 'sea_dist');
	},
	run : function () {
		var ranges = Ranges.items;
		for (var i=0; i<ranges.length; i++) {
			var range = ranges[i];
			$("."+range+"_slider").noUiSlider({
				start: [
					EXTREMES[range+'_min'],
					EXTREMES[range+'_max']
				],
				connect: true,
				orientation: "horizontal",
				range: {
					"min": parseInt(EXTREMES[range+'_min']),
					"max": parseInt(EXTREMES[range+'_max'])
				},
				format: wNumb({
					decimals: 0
				})
			}, true);
			$("."+range+"_slider").Link("lower").to($("#"+range+"_from"));
			$("."+range+"_slider").Link("upper").to($("#"+range+"_to"));
		}

		$('.js_filter_change').on('change', Filter.send);
	},
	draw : function () {
		var ranges = Ranges.items;
		var ranges = $.unique(ranges);
		$('.first_line').html('');
		$('.second_line').html('');

		for (var i=0; i<ranges.length; i++) {
			range = ranges[i];
			$range = HTML['$'+range];
			if (i<3) {
				$('.first_line').append($range);
			} else {
				$('.second_line').append($range);
			}
		}

		Ranges.run();
	}
}

Map = {
	run : function () {
		$('.js_open_map').on('click', function(){
			if ($('.js_map_canvas').css('display') == 'none') {
				$('.js_map_canvas').slideDown(700);
			}
			else {
				$('.js_map_canvas').slideUp(700);
			};
		});
	}
}

ContactForm = {
	run : function() {
		$('.js_send_contact_form').on('click', function(evt) {
			evt.preventDefault();
				$form = $(this).closest('form');
				$form.trigger('submit');
		});
	}
}

Popup = {
	run : function() {
		new jBox('Modal', {
			width: 560,
			height: 400,
			attach: $('#js_contact_btn'),
			content: $('#contact_form')
		});
	}
}

Help = {
	check_empty : function(element) {
		return element = element ? element : '';
	},
	pop_by_value : function (array, value) {
		var index = array.indexOf(value);
		if (index > -1) {
			array.splice(index, 1);
		}
		return array;
	},
	ajax : function (type, url, data, callback) {
		$.ajax({
			url: url,
			type: type,
			dataType: "json",
			data: data,
			success: callback,
			error: function(data, error, error_details){
				console.log("err:", error, error_details);
				console.log(data);
				console.log(data.responseText);
			}
		});
	}
}

//---------------------------------------------------------//
//---------------------------------------------------------//
//---------------------------------------------------------//

ContactForm.run();
Popup.run();
Map.run();

if ('add_estate'==ROUTE) {
	Town.run();
}

if ('estates'==ROUTE || 'admin_estates'==ROUTE) {
	Town.run();
	Filter.run();
	Ranges.boot();
	Ranges.run();

	$('.js_commercial').on('click', Dependencies.commertial_change);
	$('.js_select_type').on('change', Dependencies.type_change);	
}
// ANIMATION

// SHOW MORE FILTERS
var $second_line = $('.js_second_line');
var $show_btn = $('.js_show_filters');
var $hide_btn = $('.js_hide_filters');
function f_show () {
	$second_line.animate({
			'height':'138px',
			'padding': 'auto 20px 20px 20px',
			'easing': 'linear'
		}, 1000);
	$show_btn.animate({opacity:0}, 1003)
	    $('.js_hide_filters').animate({
	    	'opacity':'1'
	    }, 1003);
};
function f_hide () {
	$second_line.animate({
			'height':'0px',
			'padding': '0',
			'easing': 'linear'
		}, 1000);
	$hide_btn.animate({opacity:0}, 1003)
	    $('.js_show_filters').animate({
	    	'opacity':'1'
	    }, 1003); 
}
$('.js_show_filters').on('click', function () {
	f_show();
});
$('.js_hide_filters').on('click', function () {
	f_hide();
});
$('.js_select_type').on('change', function () {
	if ($('.js_select_type').val() == 'parcel') {
		f_hide();
	};
})
// LOAD MORE
$('.js_load_more').on('click', function () {
	$(this).hide();
	$('.js_loader').show();
})

// BUTTON UP
$(function () {
    $.scrollUp({
        scrollName: 'scrollUp',      // Element ID
        scrollDistance: 800,         // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',           // 'top' or 'bottom'
        scrollSpeed: 300,            // Speed back to top (ms)
        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
        animation: 'fade',           // Fade, slide, none
        animationSpeed: 200,         // Animation speed (ms)
        scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
        scrollText: '<i class="fa fa-chevron-up fa-lg"></i>', // Text for element, can contain HTML
        scrollTitle: false,          // Set a custom <a> title if required.
        scrollImg: false,            // Set true to use image
        activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        zIndex: 2147483647           // Z-Index for the overlay
    });
});
