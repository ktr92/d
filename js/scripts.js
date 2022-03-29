$(document).ready(function() {
   
    try {
        $('.mainslider__slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            dots: true,
            prevArrow: $('.mainslider__left'),
            nextArrow: $('.mainslider__right'),

        });

    } catch (err) {}
	
	 
	var k = 0
	$('.mainslider').each(function () {
		k = $(this).find('ul.slick-dots li').size();
		var myWidth = 100 / k - 2;
		$(this).find('.slick-dots li').width(myWidth + '%');
		k = 0;
	});
	
	
	try {
        $('.teamblock__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            prevArrow: $('.teamblock__left'),
            nextArrow: $('.teamblock__right'),
			responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        });

    } catch (err) {}
	
	
	
	 new WOW().init();
    $("input[type=tel]").mask("+7 (999) 999-99-99");


    lightbox.option({
        'resizeDuration': 20,
        'wrapAround': true
    });
	

});


$(window).scroll(function() {
    scroll = $(window).scrollTop();

    if (scroll >= 700) $('#header').addClass('fixed');
    else $('#header').removeClass('fixed');
});





if ($(window).width() <= 767) {
    try {
        $('.team__items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            prevArrow: $('.team__left'),
            nextArrow: $('.team__right'),
            responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    } catch (err) {}
	 $('.mainmenu nav > ul > li.parent > a').click(function(event) {
		 event.preventDefault();
        $(this).parent().toggleClass('active');
         $(this).parent().find('ul.submenu').slideToggle();
    });
	
	
};




$(function() {
    $('#mobilemenu').click(function(event) {
        $(this).toggleClass('active');
        $('.subheader__items').slideToggle();
    });
	
	
    $('.closemenu').click(function(event) {
        $('#mobilemenu').toggleClass('active');
        $('.subheader__items').slideToggle();
    });
});


$(document).ready(function() {



    var btn = $('.up');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    jQuery("a.scrollto").click(function() {
        elementClick = jQuery(this).attr("href")
        destination = jQuery(elementClick).offset().top - 90;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 1100);
        return false;
    });
});


$(document).ready(function() {
    $('.close-modal').on('click', close_modal);
    $('#modal_close_href').on('click', close_modal);

    function close_modal() {
        $('.dom-popup').css("display", "none");
    }
});