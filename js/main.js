$(function() {
    $(window).scroll(function() {
        var fullheight = $('#header').height();
        if ( $(window).scrollTop() >= fullheight - (fullheight * 0.75) ) {
            $('#mainNav').addClass('addbg').removeClass('nobg');
        } else {
            $('#mainNav').removeClass('addbg').addClass('nobg');
        }
    });
    $('.menu-item > a').on('click', function(){
        $('#menu-menu > li').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    $('.portfolio-list').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 3,
        autoplay: true,
        prevArrow: '<button type="button" class="portfolio-prev"></button>',
        nextArrow: '<button type="button" class="portfolio-next"></button>',
        dots: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1210,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            }
        ]
    });

    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng(56.9560507, 24.1159442),
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(56.9560507, 24.1159442),
            map: map,
            title: 'SIA "WE THREE" - DESIGN | DEVELOPMENT | DEDICATION'
        });
    }
});

