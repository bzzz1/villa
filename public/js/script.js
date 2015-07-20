// var getCookie = window.getCookie = function (name) {var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));return matches ? decodeURIComponent(matches[1]) : undefined;};
// var setCookie = window.setCookie = function (name, value, options) {options = options || {};var expires = options.expires;if (typeof expires == "number" && expires) {var d = new Date();d.setTime(d.getTime() + expires*1000);expires = options.expires = d;}if (expires && expires.toUTCString) { options.expires = expires.toUTCString();}value = encodeURIComponent(value);var updatedCookie = name + "=" + value;for(var propName in options) {updatedCookie += "; " + propName;var propValue = options[propName];    if (propValue !== true) { updatedCookie += "=" + propValue;}}document.cookie = updatedCookie;};
function setCookie (name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
    ((expires) ? "; expires=" + expires : "") +
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    ((secure) ? "; secure" : "");
}

function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
        offset = cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            if (end == -1) {
                end = cookie.length;
            }
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    return(setStr);
}

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

		// google.maps.event.addDomListener(window, 'load', initialize);

	}
}

HTML.run();
$(document).ready(function () {
	$('.js_load_more').show();
})
Filter = {
	sending : false,
	run : function () {
		$('.js_filter_change').on('change', function () {
			$('.js_load_more').show();
			Filter.send;
			$q = 0;
		});
		$('.js_filter_click').on('click', function () {
			$q = 0;
			Filter.send;
			$('.js_load_more').show();

		});
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
		// google.maps.event.addDomListener(window, 'load', initialize);
		Filter.collect();
		var filters = Filter.filters;
		var url = URL_AJAX_ESTATES+'/'+filters+'?take=100000000000&page=1&sort=title&order=asc';

		if (ROUTE == 'selected') {
			var url = '/ajax_selected';
			console.log('THIS URL ' + url);
		}
		if (false == Filter.sending) {
			Filter.sending = true;
			console.log('url ' + url);
			Help.ajax('GET', url, {}, Filter.callback);
		}
	},
	callback : function (data) {
		if (ROUTE == 'estates' || ROUTE == 'selected' ) {
			google.maps.event.addDomListener(window, 'load', initialize);
		};
		console.log(data);
		// function supports_html5_storage() {
		//   try {
		//     //console.log('it WORKS');
		//     return 'localStorage' in window && window['localStorage'] !== null;
		// } catch (e) {
		//     return false;
		//   }
		// };

		// supports_html5_storage();
		// data = JSON.stringify(data);
		// localStorage.setItem('data', data)
		// //console.log(localStorage);
		// alert(data);
		// return false;
		Estate.process(data);
		Favorites.run();
		Filter.sending = false;

	},
}
$(document).ready(Filter.send);
if (ROUTE == 'estates' || ROUTE == 'selected' ) {
	$(document).ready(google.maps.event.addDomListener(window, 'load', initialize));
};
if (ROUTE == 'estates' || ROUTE == 'selected' ) {
	//console.log('this is good route')
	var map;
	//console.log(map+'__________1');
	function initialize() {
		var mapOptions = {
		  center: { lat: 44.652473, lng: 34.293766},
		  zoom: 10
		};
		map = new google.maps.Map(document.getElementById('js_map'), mapOptions);
		//console.log(map+'__________2');
	};
};

Estate = {
	process : function (data) {
		console.log('blablabla');
		var estate_html = '';
		var $catalog_blocks = $('.catalog_blocks');
		$catalog_blocks.html('');
		var IdsArray =[];
		
		$q = 0;

		// var map;
		function load_estates (data) {
			var checkCookieEx = getCookie('favorites');
			console.log(data);

			var image = '/img/layout/marker_b.png';
			var markerArrey = [];
			
			if (data.length < 15) {
				$('.js_load_more').hide();
			}
			for (var i = $q; i < $q + 15; i++) {
				if (i < data.length) {
					var estate = data[i];
					var src = URL_IMG+'/'+ estate.preview;
					var	href = URL_ESTATE+'/'+translit(estate.title)+'/'+estate.estate_id;
					var href_admin = URL_ESTATE_ADMIN+'/'+estate.estate_id;
					var href_delete = URL_ESTATE_ADMIN_DELETE+'/%7Bestate_id%7D';
					var csrf_token = $("input[name = '_token']").val();
					estate_html += '<div class="one_item" data-id="'+estate.estate_id+'"> <div class="img">';
					if (ROUTE == 'admin_estates') {
						if (estate.preview !== '') {
							estate_html += 	'<a href="'+href_admin+'"> \
											<img src = "'+src+'" alt="'+estate.title+'", class="item_img"> \
										</a>';
						}
						else  {
							estate_html += 	'<a href="'+href_admin+'"> \
											<img src="/img/photos/estates/alien.png" alt="'+estate.title+'", class="item_img"> \
										</a>';
						};
					} else {
						//console.log(estate.preview)
						if (estate.preview !== '') {
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
					estate_html +='<div class="short_descr"><div class="item_descr"> <table> <tbody>';
					if (estate.house_area != null) {
						estate_html += '<tr> <td>Площадь</td><td class="dep_house_area">'+estate.house_area+' м<sup>2</sup></td> \ </tr>';
					};
					if (estate.yard_area != null){
							estate_html += '<tr> \ <td>Площадь участка</td> \ <td class="dep_yard_area">'+estate.yard_area+' соток</td> \ </tr>'
					}; 
					if (estate.rooms != null){ 
						estate_html += '<tr> \ <td>Количество комнат</td> \ <td class="dep_rooms">'+estate.rooms+'</td> \ </tr>';
					};
					if (estate.sea_dist != null) {
						estate_html += '<tr> \ <td>Удаленность от моря</td> \ <td class="dep_sea_dist">'+estate.sea_dist+' м.</td> \ </tr>';
					};
					if (estate.price != '0') {
						estate_html += '<tr>\ <td>Стоимость</td>\ <td class="dep_price">'+estate.price+' рублей </td>';
					};
					estate_html += '</tbody></table> \ </div> \ <div class="item_descr full"> \ <table> \ <tbody> ';
					if (estate.house_area != null) {
						estate_html += '<tr> \ <td>Площадь</td><td class="dep_house_area">'+estate.house_area+' м<sup>2</sup></td> \ </tr>';
					};
					if (estate.yard_area != null){
							estate_html += '<tr> \ <td>Площадь участка</td> \ <td class="dep_yard_area">'+estate.yard_area+' соток</td> \ </tr>'
					}; 
					if (estate.rooms != null){ 
						estate_html += '<tr> \ <td>Количество комнат</td> \ <td class="dep_rooms">'+estate.rooms+'</td> \ </tr>';
					};
					if (estate.sea_dist != null) {
						estate_html += '<tr> \ <td>Удаленность от моря</td> \ <td class="dep_sea_dist">'+estate.sea_dist+' м.</td> \ </tr>';
					};
					if (estate.price != '0') {
						estate_html += '<tr>\ <td>Стоимость</td>\ <td class="dep_price">'+estate.price+' рублей </td> </tr>';
					}; 
					if (estate.period == 'daily') {
						estate_html += '<tr> \ <td>Тип аренды</td><td class="dep_period">посуточно</td></tr>';
					} else if (estate.period == 'hourly') {
						estate_html += '<tr> \ <td>Тип аренды</td><td class="dep_period">почасово</td></tr>';
					} else if (estate.period == 'mounthly') {
						estate_html += '<tr> \ <td>Тип аренды</td><td class="dep_period">помесячно</td></tr>';
					} else if (estate.period == null) {
						//console.log('dfdsf');
						estate_html += '<tr> \ <td>Тип сделки</td><td class="dep_period">купля</td></tr>';
					};
					if (estate.address != null) {
						estate_html += '<tr> \ <td>Адрес</td> \ <td class="dep_address">'+estate.address+'</td> \ </tr>';
					};
					estate_html += '</tbody> \ </table>'; 
					if (ROUTE == 'admin_estates') {
						estate_html += '<a class="btn more_btn" href="'+href_admin+'">Изменить</a><form accept-charset="UTF-8" method="post" action="'+href_delete+'"data-id ="'+estate.estate_id+'"class="js_delete_form"><input type="hidden" name="_token" value="'+csrf_token+'"><input name="estate_id" type="hidden" value="'+estate.estate_id+'"><input type="submit" class="btn more_btn js_delete" data-confirm="Вы действительно хотите это сделать?" value="Удалить"></form> \ </div>	 \ </div> \ <a class="btn more_btn" href="'+href_admin+'">Изменить</a><form accept-charset="UTF-8" method="post" action="'+href_delete+'"data-id ="'+estate.estate_id+'"class="js_delete_form"><input type="hidden" name="_token" value="'+csrf_token+'"><input name="estate_id" type="hidden" value="'+estate.estate_id+'"><input type="submit" class="btn more_btn js_delete" data-confirm="Вы действительно хотите это сделать?" value="Удалить"></form> \ </div>';
					} else {
						estate_html += '<a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>	 \ </div> \ <a class="btn more_btn" href="'+href+'">Подробнее</a> \ </div>';
					};
					$catalog_blocks.html(estate_html);
					var lat = estate.latitude;
					var lng = estate.longitude;
					var title = estate.title;
					var latLng = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
					//console.log(image);
					var marker = new google.maps.Marker({
						draggable:false,
						animation: google.maps.Animation.DROP,
					    position: latLng,
					    // map: map,
					    title: title,
					    icon: image
					});
					markerArrey.push(marker);
					//console.log(markerArrey)

					//console.log(i+'_element')
					var ID = estate.estate_id;
					IdsArray.push(ID);
				} else {
					$('.js_load_more').hide();
				}
				console.log(IdsArray);
			};
			function checkCookie () {
				if (checkCookieEx) {
	                console.log('checkCookieEx = '+ checkCookieEx);
	                var jsonCheckCookieEx = JSON.parse(checkCookieEx);
	                for (var i = 0; i < jsonCheckCookieEx.length; i++) {
	                	var ID = jsonCheckCookieEx[i];
	                	console.log(ID);
	                	$('[data-id = '+ID+']').find('.add_to').hide();
	                	$('[data-id = '+ID+']').find('.added_to').show();

	                };
	                // var jsonCheckCookie = JSON.parse(checkCookie);
	                // console.log('jsonCheckCookie = '+jsonCheckCookie);
	                // for (var f = 0; f < IdsArray.length; f++) {
		               //  for (var x = 0; x < checkCookieEx.length; x++) {
		               //  	if (checkCookieEx[x] === IdsArray[f]) {
		               //  		// console.log(IdsArray[x]+'ID');
		               //  		// console.log(IdsArray[x]+'In Cookie');

		               //  		$('.add_to').hide();
		               //  		$('.added_to').show();
		               //  	} else {
		               //  		console.log('shit');
		               //  	}
		               //  };
	                // };
				};
			}
			checkCookie();
			setTimeout(function () {
				for (var j = 0; j < markerArrey.length; j++) {
					markerArrey[j].setMap(map);
					//console.log(markerArrey[j])
				};
			}, 500)

			//console.log('map_to-array____'+map);
		};

		load_estates(data);

		$('.js_load_more').unbind('click').bind('click', function () {
			$q = $q + 15;
			console.log(data);
			load_estates(data);
			Favorites.run();
		});
	}
}


$(document).ready(function () {
	if ( getCookie('favorites') ) {
	    var amountStart = getCookie('favorites').split(',').length;
	    console.log(amountStart);
	    $('.js_counter').text(amountStart);
    	$('.js_favorites').attr('onclick', 'return true');
	} else {
	    $('.js_counter').text('0');
	    $('.js_favorites').attr('onclick', 'return false');

	}
    // console.log('for if '+ amountStart);
    // if (amountStart == 0) {
    	// $('.js_favorites').attr('onclick', 'return false');
    // };
	
})
Favorites = {
	run : function () {
		$('.js_select').on('click', function() {
	    	$('.js_favorites').attr('onclick', 'return true');
			console.log('started');
            var newCookie = '';
            var removed = false;
            if (ROUTE !== 'estate') {
	            var estate_id = $(this).closest('.one_item').data('id');
            } else {
	            var estate_id = JSON.parse(oneEstateId);
            }
            var oldCookie = getCookie('favorites');
            console.log('old_coockie ' + oldCookie)
            if (oldCookie) {
                console.log('oldCookie = '+oldCookie);
                var jsonCookie = JSON.parse(oldCookie);
                if (jsonCookie.length > 0) {
                	// for (var i = 0; i < jsonCookie.length; i++) {
                		
                	// };
                    for (var i = 0; i < jsonCookie.length; i++) {
                        console.log('if '+jsonCookie[i] +'!=='+ estate_id);
                        if (jsonCookie[i] !== estate_id) {
                            newCookie += (newCookie) ? ', ' : '' ;
                            newCookie += jsonCookie[i];
                            console.log(jsonCookie[i]+' ADDED');
                            $(this).parent().find('.added_to').show();
							$(this).hide();
                        } else {
                            console.log(jsonCookie[i]+' REMOVED');
                            removed = true;
                            $(this).parent().find('.add_to').show();
							$(this).hide();
                        }
                    }
                }
            }
            if (removed === false) {
                newCookie += (newCookie) ? ', ' : '' ;
                newCookie += estate_id;
                $(this).parent().find('.added_to').show();
				$(this).hide();
            }
            setCookie('favorites', '['+newCookie+']', 'Mon, 01-Jan-5000 00:00:00 GMT', '/');
            console.log('newCookie = '+newCookie);
            // var counter = $('.js_counter').text();
            // var amount = newCookie.split(',').length;
            // var amount = JSON.serialize(newCookie);
            // console.log(amount);
            // $('.js_counter').text(amount);
        	if ( newCookie ) {
        	    var amount = newCookie.split(',').length;;
        	    console.log('amount ' + amount);
        	    $('.js_counter').text(amount);
            	$('.js_favorites').attr('onclick', 'return true');
        	} else {
        	    $('.js_counter').text('0');
        	    $('.js_favorites').attr('onclick', 'return false');

        	}
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
		if ( $('#commercial').val() =='sale') {
			$('.js_period_form').attr('form', 'other');
		}; 
		if ( $('#commercial').val() =='rent') {
			$('.js_period').css('display', 'block');
			$('.js_period_form').removeAttr('form', 'other');
		};
		
		if ( $('#type').val() == 'flat') {
			$('.js_yard_area_form').attr('form', 'other');
		} 
		else if ( $('#type').val() == 'parcel') {
			$('.js_house_area').hide();
			$('.js_house_area_form').attr('form', 'other');
			$('.js_rooms').hide();
			$('.js_rooms_form').attr('form', 'other');
			$('.js_yard_area').show();
			$('.js_yard_area_form').removeAttr('form');
		} else {
			$('.js_yard_area').slideDown();
			$('.js_house_area').slideDown();
			$('.js_rooms').slideDown();
			$('.js_yard_area_form').removeAttr('form');
			$('.js_rooms_form').removeAttr('form');
			$('.js_house_area_form').removeAttr('form');
		};


		$('#commercial').on('change', function() {
			var commercial = $(this).val();
			if ('sale' == commercial) {
				$('.js_period').slideUp();
				$('.js_period_form').attr('form', 'other');
			} else {
				$('.js_period').slideDown();
				$('.js_period_form').removeAttr('form');
			}
		});

		$('#type').on('change', function() {
			var type = $(this).val();
			if ('flat'==type) {
				$('.js_yard_area').hide();
				$('.js_yard_area_form').attr('form', 'other');
			}
			else if ('parcel'==type) {
				$('.js_house_area').hide();
				$('.js_rooms').hide();
				$('.js_yard_area').show();
				$('.js_yard_area_form').removeAttr('form', 'other');
				$('.js_house_area_form').removeAttr('form', 'other');
				$('.js_rooms_form').attr('form', 'other');
				$('.js_house_area_form').attr('form', 'other');
			}
			else {
				$('.js_yard_area').slideDown();
				$('.js_house_area').slideDown();
				$('.js_rooms').slideDown();
				$('.js_yard_area_form').removeAttr('form');
				$('.js_house_area_form').removeAttr('form');
				$('.js_rooms').removeAttr('form');
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
		$(document).ready(function () {
			setTimeout(function () {
				$('.js_map_canvas').hide();
			}, 800)
		});

		$('.js_open_map').on('click', function(){
			if ($('.js_map_canvas').css('display') === 'none') {
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
				//console.log("err:", error, error_details);
				//console.log(data);
				//console.log(data.responseText);
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
// $('.js_load_more').on('click', function () {
	// $(this).hide();
	// $('.js_loader').show();
// })

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
