$(window).scroll(function() {
	var fullheight = $('#header').height()
    if ( $(window).scrollTop() >= fullheight-67 ) {
        $('#mainNav').addClass('addbg').removeClass('nobg');
    } else {
        $('#mainNav').removeClass('addbg').addClass('nobg');
    }
});