$(function() {

    $(window).resize(function() {
        var labelleft = $('form label.focus').next().width() - 35;
        $('form label.focus').css('left', labelleft);
    });

    $('.scrollTop').click(function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

	$('#ratings .rating').delay('1500').each(function(i) {
		var size = $(this).find('.bar span').data('rating');
		$(this).find('.bar span strong').text(size + '/10').show();
		$(this).find('.bar span').delay(600*i).animate({width: size*10 + '%'}, 1000);
	});

    $('input[type="text"], textarea').focus(function() {
        var value = $(this).width() - 35;
        $(this).prev('label').animate({left: value}).addClass('focus');
    }).blur(function() {
        $(this).prev('label').animate({left: '35px'}).removeClass('focus');
    }).keyup(function() {
        if ($(this).val().length > 0) {
            $(this).prev('label').fadeOut();
        } else {
            $(this).prev('label').fadeIn();
        }
    });


});