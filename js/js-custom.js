$(document).ready(function () {

    // Main Popup
    $('.get-started-popup').click(function() {
        $('.popup-overlay').addClass('active');
        $('body').addClass('over-hidden');
    });
    $('.popup-close').click(function() {
        $('.popup-overlay').removeClass('active');
        $('body').removeClass('over-hidden');
    });

    /* Tabbing Function */
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var target = $(this).data("targetit");
        $("." + target).siblings('[class^="box-"]').hide();
        $("." + target).fadeIn();
    });

    // Service Slider
    $('.ser_slider').slick({
        infinite: true,
        slidesToShow: 4,
        arrows: true,
        dots: false,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
            }
        }]

    });

    // Testimonial Slider
    $('.testimonial-slider').slick({
        infinite: true,
        autoplay: true,
        speed: 300,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
            }
        }
      ]
    });
    
    
    // Service Slider
    $('.mainSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        dots: true,
        autoplay: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    arrows: false
                }
            }
        ]
    });

});


if ($(window).width() < 825) {
    $(".responsive-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });
}

function closePopup() {
    $(".popup").hide();
    $("body").removeClass("over-hidden");
    $(".overlay").fadeOut();
}
