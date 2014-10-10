	var maxLengthOptions = {

	}
$(function(){
	$('#edit-newsletters-1').prop('checked', true);
	$('.form-item-mail input').attr('type', 'email');
	$('.form-item-mail input').attr('placeholder', 'Введите e-mail');
	$('#edit-subscribe').val('Подписаться');
	$('#edit-search-block-form--2').attr('placeholder', 'Поиск по сайту');
	// bPoppup
	$('#open-feedback-poppup').click(function(){
		$('#block-feedback-poppup').bPopup();
	})
	$('#edit-submitted-name').attr('placeholder', 'Ваше имя');
	$('#edit-submitted-e-mail').attr('placeholder', 'Ваш e-mail');
	$('#edit-submitted-request-field').attr('placeholder', 'Ваше сообщение');
	$('#edit-homepage').attr('placeholder', 'http://');
	$('#edit-name').attr('placeholder', 'Ваше имя');
	$('#edit-subject').attr('placeholder', 'Заголовок');
	$('#edit-homepage').attr('type', 'url');
	$('.form-item.form-type-textarea .text-full.form-textarea').attr('placeholder', 'Комментарий');
	$('#block-feedback-poppup a').attr('href', '#');
	$("#comment-form input[type='submit']").val('Комментировать');

	// $('input[maxlength]').maxlength({
	//           alwaysShow: true,
	//           threshold: 10,
	//           warningClass: "label label-avpp",
	//           limitReachedClass: "label label-danger",
	//           separator: ' из ',
	//           preText: 'Введено  ',
	//           postText: ' символов.',
	//           validate: true
	// });
	$('#webform-component-name #edit-submitted-name').maxlength(maxLengthOptions);
	$('#edit-submitted-e-mail').maxlength(maxLengthOptions);
	$('#edit-submitted-request-field').maxlength(maxLengthOptions);

	// Validate
	$('#webform-client-form-6').validate();
	$('#simplenews-subscriptions-multi-block-form').validate();
	$('#comment-form').validate();
	// Comments
	$('h3.popover-title>a').addClass('label');
	$('h3.popover-title>a').addClass('label-avpp');
});