function searching(){
		
		
		
		var str = $('#search_form').serialize();
//		alert(str);
		curHref = '/search/?seeall=1&';
		curHref = curHref+str;
		$('.see_all a').attr('href', curHref);
		$.post('../searching.php', str, sendRequest);
		startLoadingAnimation();
		function sendRequest(data) {
			stopLoadingAnimation();
			$('.search_results').html(data);
			//listWidth();
		};
		function startLoadingAnimation(){
			$('#loadImg').show();
		};
		function stopLoadingAnimation(){
			$("#loadImg").hide();
		}
	}
function listWidth(){
	/*browserWidth = $('.search_results').width();
	oneList = 350;
	countLists = browserWidth / oneList;
	countLists = Math.floor(countLists);
	listsMargins = browserWidth - (oneList * countLists);
	oneListsMargin = listsMargins / (countLists - 1);
	oneListsMargin = Math.floor(oneListsMargin);
	//alert(oneListsMargin);
	$('.search_results ul li').css({'margin-right': oneListsMargin});
	$('.search_results ul li:nth-child('+countLists+'n)').css({'margin-right': '0px'});*/
	browserWidth = $('.search_results').width();
	oneList = $('.search_results ul li:first-child').width();
	defMargin = parseFloat($('.search_results ul li.list_width_first').css('margin'));
	oneList = oneList + (defMargin * 2);
	
	countLists = browserWidth / oneList;
	countLists = Math.floor(countLists);
	ulWidth = countLists * oneList;
	$('.search_results ul.list_width').css({'width': ulWidth, 'margin': '0 auto'});
}
$(document).ready(function(){
	$('body').ready(function(){
		searching();
		
	});
	
	$('select').styler();
	$(window).resize(function(){
		listWidth();
	});
	$('.form_change').change(function(){
		searching();
	});
	$(window).scroll(function(){
		var scrolltop = $(window).scrollTop();
	});
	$('.shadow_line2 a').click(function(){
			elementClick = $(this).attr("href");
     		destination = $(elementClick).offset().top;
      		
        		$('body').stop().animate( { scrollTop: destination}, 1000 );
      		
      		return false;
		});
	$('.add_to_note').click(function(){
		var noteId = $(this).attr('id');
		noteId = noteId.split('_').pop();
		$.post('/add_to_note.php', {id: noteId}, function(data){
			$('.add_to_note').removeClass('add_to_note').addClass('go_to_note').html(data).attr({'href': '/note/'});
			currentNoteCount = $('#count_note').html();
			currentNoteCount = parseInt(currentNoteCount, 10);
			currentNoteCount = currentNoteCount + 1;
			$('#count_note').html(currentNoteCount);
		});	
	});
	$('.clear_note').click(function(){
		var deletedId = $(this).attr('id');
		deletedId = deletedId.split('_').pop();
		$.post('/note/clear_note.php', {id: deletedId}, function(data){
			location.reload();
		});		
	});
	$('#login_action').click(function(){
		var str = $('#login').serialize();
		$.post('../note/login.php', str, function(data){
			location.reload();
		});
	});
	//ВАЛИДАЦИЯ АДРЕСА
	jQuery('#email_v').change(function(){
		var email_v = jQuery("#email_v").val();
		 if(email_v != 0){
			if(isValidEmailAddress(email_v)){
				 jQuery("#email_v").css({'color': 'black'});
				 jQuery('#login_action').attr('disabled',false);
				 jQuery('#val_mail').text('');
			}else{
				jQuery("#email_v").css({'color': 'red'});
				jQuery('#val_mail').text('Адрес несуществует');
				jQuery('#login_action').attr('disabled',true);
			};
		};
	});
	jQuery('#email_v').keyup(function(){
		var email_v = jQuery("#email_v").val();
		if(email_v != 0){
			if(isValidEmailAddress(email_v)){
				 jQuery("#email_v").css({'color': 'black'});
				 jQuery('#login_action').attr('disabled',false);
				 jQuery('#val_mail').text('');
			};
		}else{
			jQuery('#login_action').attr('disabled',true);
		};
	});
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	};
	function sendRent(){
		rent_form
		var str3 = $('#rent_form').serialize();
		$.post('/send_rent.php', str3, function(data){
			$('.form_error').html('Заявка отправлена');
		});
	}
	$('#rent_form_submit').click(function(){
		sendRent();
	});
	function sendFeedback(){
		var str3 = $('#contacts_form').serialize();
		$.post('/feedback.php', str3, function(data){
			$('.form_error').html('Сообщение отправлено');
		});
	};
	$('#contacts_form_submit').click(function(){
		sendFeedback();
	});
	if($('#rent_form_phone').length){
		$('#rent_form_phone').inputmask("+7 (999) 999-99-99", { "oncomplete": function(){ $('#rent_form_submit').attr('disabled', false); $(this).css('border', '1px solid gray'); $('.form_error').html(''); }, showMaskOnHover: false, "onincomplete": function(){ $('#rent_form_submit').attr('disabled', true); $(this).css('border', '1px solid red'); $('.form_error').html('Укажите номер телефона'); }});
	}
	if($('#contacts_form_phone').length){
		$('#contacts_form_phone').inputmask("+7 (999) 999-99-99", { "oncomplete": function(){ $('#contacts_form_submit').attr('disabled', false); $(this).css('border', '1px solid gray'); $('.form_error').html(''); }, showMaskOnHover: false, "onincomplete": function(){ $('#contacts_form_submit').attr('disabled', true); $(this).css('border', '1px solid red'); $('.form_error').html('Укажите номер телефона'); }});
	}
	function sendNoteList(){
		var str = $('#send_to_adm').serialize();
		$.post('/send_note.php', str, function(data){
			$('.send_to_administration').html('Список выбранных объектов отправлен').css({'text-decoration': 'none', 'cursor': 'default', 'width': '500px'});
		});	
	}
	$('.send_to_administration').click(function(){
		sendNoteList();
	});

});