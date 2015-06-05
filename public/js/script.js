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
		if ('null' == current) {
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
	var $filters = $('.js_filters');
	$('.js_filter_change').on('change', touch_filter); 
	$('.js_filter_click').on('click', touch_filter); 

	function touch_filter(e) {
		console.log(e);

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

		var filters =	'commercial'	+commercial+
						'type='			+type+
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
	} ;
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
		success: estates_processing,
		error: function(data, error, error_details){
			console.log("err:", error, error_details);
			console.log(data);
			console.log(data.responseText);
		}
	});
};

function estates_processing (data) {
	var estate_html = '';
	console.log(data);
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
	$('.btn-group').find('.active').removeClass('active');
	$('.btn-group').find('.active').parent().addClass('active');

})
