jQuery(function($) {
	$('#neiowubsndiufbyaw').attr('disabled', false);
	$('form').submit(function(){
		$('#neiowubsndiufbyaw').attr('disabled', true);
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var email = reg.test($('#porijosdnakjrblksajiu').val());
		if ($('#moinaushdtlawjkdsf').val() && email && $('#cvoihryoncoxirypweo').val()) {
			return true;
		} else {
			if ($('#confirmcontact').length == 0) {
				$('#contact').before('<div id="confirmcontact"><div class="wrapper">Please make sure you have every field filled out. Thank you :)</div></div>');
				$('#confirmcontact').slideDown(1000);
				if (email == false) {
					$('#confirmcontact .wrapper').append('<br/>oh! and make sure you are using a valid email too.');
				}
			}
			$.scrollTo('#confirmcontact', 500);
		}
		if (!$('#moinaushdtlawjkdsf').val()) $('#moinaushdtlawjkdsf').addClass('required');
		if (!$('#porijosdnakjrblksajiu').val()) $('#porijosdnakjrblksajiu').addClass('required');
		if (!$('#cvoihryoncoxirypweo').val()) $('#cvoihryoncoxirypweo').addClass('required');
		$('#neiowubsndiufbyaw').attr('disabled', false);
		return false;
	});
	
	$('#contact #form #input input, #contact #form #input textarea').focus(function(){
		$('#contact #form #input input, #contact #form #input textarea').removeClass('required');
		$('#confirmcontact').slideUp(200, function() {
			$(this).remove();
		});
	});

	$('.project .desc').show();
	$('.project .desc').each(function(){
		var height = $(this).height();
		$(this).css({marginTop: height * -1});
	});
	
	$('.project').hover(function(){
		$(this).find('.desc').animate({marginTop:0},200);
	}, function(){
		var height = $(this).find('.desc').height();
		$(this).find('.desc').animate({marginTop:height * -1},200);
	});
	
	$('.scrolltoportfolio').click(function(){$.scrollTo('#portfolio', 500);});
	$('.scrolltocontactme').click(function(){$.scrollTo('#contact', 500);});
});