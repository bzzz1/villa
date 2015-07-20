function changeButtonIf() {
	var checkCookieExOne = getCookie('favorites');
	var jsoncheckCookieExOne = JSON.parse(checkCookieExOne);
	console.log('ONE_ITEM_ID__'+ oneEstateId)

	console.log('ONE_ITEM_COOKIE__'+ jsoncheckCookieExOne)

	for (var z = 0; z < jsoncheckCookieExOne.length; z++) {
			// console.log(jsoncheckCookieExOne[z])

		if (jsoncheckCookieExOne[z] === parseInt(oneEstateId) ) {
			console.log('shit_if')
			$('.favourite_btn').hide();
			$('.favourite_btn_done').show();
		}
	};
};
changeButtonIf();
