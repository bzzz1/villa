PopupAdminModal = {
	run : function() {
		new jBox('Modal', {
		    width: 300,
		    height: 200,
		    attach: $('#smth'),
		    title: 'Log in',
		    content: 'hello'
		});
	}
}

Clear = {
	run : function() {
		$('.js_button_clear').on('click', function() {
			$('.js_forms')[0].reset();
			CKEDITOR.instances['description'].setData('');
		});
	}
}

PopupDistrictModal = {
	run : function() {
		$('.district_townModal').jBox('Modal', {
			content: $('#grabMe'),
			closeButton: 'box',
			closeOnEsc: true
			// closeOnClick: true
			// draggable: true
		});
	}
}

PopupConfirmModal = {
	run : function() {
		new jBox('Confirm', {
			confirmButton: 'Сделай это!',
			cancelButton: 'Отмена',
			closeButton: 'box',
			closeOnEsc: true,
			confirm: function(){
				var id = $('html').prop('data-id');
				var $form = $('.js_delete_form[data-id="'+id+'"');
				$form.submit();
			}
		});
	}
}

PopupDeleteModal = {
	run :function() {
		$('.js_delete').on('click', function() {
			var id = $(this).closest('form').data('id');
			$('html').prop('data-id', id);
		});
	}
}

PopupTownModal = {
	run : function() {
		$('.town_districtModal').jBox('Modal', {
			content:$('#change_district_town'),
			closeButton: 'box',
			closeOnEsc: true
		});
	}
}

PopupTownAdd = {
	run : function() {
		$('.admin_one_town_add').on('click', function() {
			var town_id = $(this).data('town-id');
			$(".select_town option[value='"+town_id+"']").eq(1).attr("selected", "selected");
		});
	}
}

PopupFlashMessage = {
	run : function() {
		var flashModal = new jBox('Notice', {
			constructOnInit: true,
			animation: { 
				open: 'tada', 
				close: 'slide:bottom' 
			},
			attributes: {
       	 		x: 'right',
        		y: 'bottom'
	   	 	},
	   	 	stack: false,
	    	content: $('#js_flash_message'),
	    	closeOnEsc: true,
	    	color: 'green',
	    	autoClose: 5000,
	    	addClass: 'shit'
		});
		if ( $('#js_flash_message').text() == '') {
			var container = $('.shit').find('.jBox-container')
			container.css({
				'opacity' : 0
			});

		};
	}
}

//---------------------------------------------------------//
//---------------------------------------------------------//
//---------------------------------------------------------//

Clear.run();
PopupDistrictModal.run();
PopupConfirmModal.run();
PopupDeleteModal.run();
PopupAdminModal.run();
PopupTownModal.run();
PopupTownAdd.run();
PopupFlashMessage.run();

$form = $('#change_district_town form');
link = $form.prop('action');


$('.js_change').on('click', function() {
	var title = $.trim($(this).closest('.oneitem').find('.js_item_title').text());
	$('.js_popup_input').val(title);
	var id = $(this).closest('.oneitem').data('id');
	var town_id = $(this).data('town-id');
	$('.js_town_id').val(town_id);
	var district_id = $(this).data('district-id');
	$('.js_district_id').val(district_id);
	$(".select_town option[value='"+town_id+"']").eq(1).attr("selected", "selected");
});





