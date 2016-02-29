$(document).ready(function(){
	var height = $('header').height();
	var vcheight = $(".vc").height();
	var top = (height-vcheight)/2;
	$(".vc").css( "top", top);
});