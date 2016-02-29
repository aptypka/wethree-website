$(window).scroll(function() {
	var fullheight = $('header').height()
    if ( $(window).scrollTop() >= fullheight ) {
        $('#mainNav').css('background', '#121212');
    } else {
        $('#mainNav').attr('style', '');

    }
});